<?php

class base_controller {
	
	public $user;
	public $userObj;
	public $template;
	public $email_template;
	public $date;
	public $dateObj;

	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
						
		# Instantiate User obj
			$this->userObj = new User();
			
		# Authenticate / load user
			$this->user = $this->userObj->authenticate();					
						
		# Set up templates
			$this->template 	  = View::instance('_v_template');
			$this->email_template = View::instance('_v_email');			
								
		# So we can use $user in views			
			$this->template->set_global('user', $this->user);	
			
		# Instantiate Date obj
			#$this->dateObj = new Date();
			
		# Authenticate / load date
			#$this->date = $this->dateObj->authenticate();
		
		# So we can use $date in views			
			#$this->template->set_global('date', $this->date);
	}
	
} # eoc
