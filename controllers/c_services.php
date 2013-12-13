<?php

class services_controller extends base_controller {
	
	
	public function __construct() {
		parent::__construct();
	}
        
	public function morning() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_morning');
			
		# Set the <title> tag
			$this->template->title = "Morning Prayer";
	      					     		
		# Render the view
			echo $this->template;

	}
	
	public function evening() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_evening');
			
		# Set the <title> tag
			$this->template->title = "Evening Prayer";
	      					     		
		# Render the view
			echo $this->template;

	}
	
	public function compline() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_compline');
			
		# Set the <title> tag
			$this->template->title = "Compline";
	      					     		
		# Render the view
			echo $this->template;

	}
	
        
}
?>