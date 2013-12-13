<?php

class services_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	}
        
	public function us_morning() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_us_morning');
			
		# Set the <title> tag
			$this->template->title = "Morning Prayer";
	      					     		
		# Render the view
			echo $this->template;

	}
        
        public function uk_morning() {
            
		# Set the content of the template with a view file
			$this->template->content = View::instance('v_services_uk_morning');
			
		# Set the <title> tag
			$this->template->title = "Morning Prayer";
	      					     		
		# Render the view
			echo $this->template;

	}
        
         public function esv() {
            
		# Set the content of the template with a view file
			$this->template->content = View::instance('v_esv');
			
		# Set the <title> tag
			$this->template->title = "ESV";
	      					     		
		# Render the view
			echo $this->template;

	}
}
?>