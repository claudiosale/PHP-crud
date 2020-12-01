<?php
   
	class Todo {
		
    public $title = "";
    public $text = "";

		public function __construct($title, $text) {

      $this->title = $title;
      $this->text = $text;
		}
        
  }

?>
