<?php
/*
Plugin Name:  Snappy List Builder
Plugin URI:   https://henryswebdesign.com/plugins/the-basics/
Description:  Basic WordPress Plugin Header Comment
Version:      1.0
Author:       WordPress.org
Author URI:   https://author.example.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  snappy-list-builder
*/
/** 0. Table of Content */

//1.  HOOKS
// 1.1- register all our custom shortcodes on init 

// 2. SHORTCODES
// 2.1- slb_register_shortcodes()
// 2.2- slb_form_shortcode()


//*************************** */

//1.  HOOKS
// 1.1
//hint: register all our custom shortcodes on init 
add_action('init', 'slb_register_shortcodes');

// 1.2
//hint: register custom admin columns headers
add_filter('manage_edit-slb_subscriber_columns', 'slb_subscriber_column_header');

// 1.3
//hint: register custom admin columns data
// if we dont set it 2, it wont pass us the post id
add_filter('manage_slb_subscriber_posts_custom_column', 'slb_subscriber_column_data',1,2);

// 2. SHORTCODES

// 2.1
//hint: register all our custom shortcodes
function slb_register_shortcodes(){
    add_shortcode('slb_form', 'slb_form_shortcode');
}

// 2.2
//hint: return a html string for a email capture form
function slb_form_shortcode($args, $content=""){
    // setup our our variable - the form html

    $output = '
        <div class="slb">
        <form id="slb_form" name="slb_form" class="slb-form" method="post">

        <p class="slb-input-container">
        <label>Your Name</label><br/>
        <input type="text" name="slb_fname" placeholder="First Name" />
        <input type="text" name="slb_lname" placeholder="Last Name" />
        </p>

        <p class="slb-input-container">
        <label>Your Email</label><br/>
        <input type="email" name="slb_emailfname" placeholder="max@example.com" />  
        </p>';

        // including content in our form html if content is passed into function
        if( strlen($content) ):

            $output .= '<div class="slb-content">'. wpautop($content) . '</div>';      
    endif;

    // completing our form html
        $output .='<p class="slb-input-container">
        <input type="submit" name="slb_submit" value="Sende" />  
        </p>
        </form>
        </div>
    ';
    // return our results/html
    return $output;
}

// 3. FILTER
// 3.1
function slb_subscriber_column_header($columns){
    // creating custom column header data
    $columns = array(
    'cb' =>'<input type="checkbox" />',
    'title'=>__('Subscriber Name'),
    'email'=>__('Email Address')
    );

    // retuning new columns
    return $columns;
}

// 3.2
function slb_subscriber_column_data($column, $post_id){
    // setup our return text
    $output = '';

    switch($column){

        case'title':
        // get the column name data
        $fname = get_field('slb_fname', $post_id);
        $lname = get_field('slb_lname', $post_id);
        $output .= $fname .''. $lname;
        break;

        case'email':
        // get custom eamil data
        $email = get_field('slb_email', $post_id);
        $output .=$email;
        break;
    }

    // echo the output
    return $output;
}

// 3.2.2
// hint: registers special custom admin title columns
function slb_register_custom_admin_titles(){
    add_filter(
        'the_title',
        'slb_custom_admin_titles',
        99,
        2
    );
}

?>