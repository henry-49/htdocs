<?php

    class Video{

        public $type;
        public $duration;
        public $published = false;
        public $title;
    
      public function __construct($type, $duration, $title){
          
          $this->$type = $type;
          $this->$duration = $duration;
          $this->$title = $title;
            
        }

    
        public function play()
        {

           return $this->$published ? "The video is playing" : "This video is not yet avaliable";
        }

        public function pause()
        {

           return $this->$published ? "The video is paused" : "";
        }
        
        public function __destruct(){
            
            var_dump("Destroying instance of ".get_class());
        }

}

//header('Content-Type:text/plan', true);

    $introduction = new Video('mp3', '10.30', 'PHP OOP TUTORIAL');

  //  $introduction->$published = true;

    //echo $introduction->play(); 

    //echo $introduction->pause(); 
var_dump($introduction);


