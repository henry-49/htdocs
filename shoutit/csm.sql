ALTER TABLE `posts` ADD `post_tags` VARCHAR(255) NOT NULL AFTER `post_content`, 
ADD `post_comment_count` VARCHAR(255) NOT NULL AFTER `post_tags`, 
ADD `post_status` VARCHAR(255) NOT NULL DEFAULT 'draft' AFTER `post_comment_count`;

ALTER TABLE `posts` CHANGE `post_comment_count` `post_comment_count` INT(3) NOT NULL;

UPDATE `posts` SET `post_id`= 1 WHERE `post_id` = 0;

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, 
`post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) 
VALUES ('2', '2', 'PHP & MySQL Course', 'Willson Grege', '2018-08-10', '',
 'WoW what a great post!!', '', '', 'draft');
 
 SELECT * FROM `posts` ORDER BY `posts`.`post_id` DESC
 
 UPDATE `posts` SET `post_image` = 'city.jpg' WHERE `posts`.`post_id` = 1;