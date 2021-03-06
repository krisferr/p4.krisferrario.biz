<?php

class services_controller extends base_controller {
	
	
	public function __construct() {
		parent::__construct();
	}
	
	public $date;
	public $season;
	
	public function date()	{
		# Sets the $date
		$this->date = $_GET['value'];
		if( empty($date) )
		{
			//Use Today's Date by Default!
			$date = date("Y"-"m"-"d");
		}
	}
	
	
	public function morning() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_morning');
			$this->template->content->season = View::instance('../controllers/c_season');
			$this->template->content->opening = View::instance('../include/opening');
			$this->template->content->confession = View::instance('../include/confession');
			$this->template->content->invitatory = View::instance('../include/invitatory');
			$this->template->content->venite = View::instance('../include/venite');
			$this->template->content->psalm = View::instance('../include/psalm');
			$this->template->content->canticle1 = View::instance('../include/canticle1');
			$this->template->content->canticle2 = View::instance('../include/canticle2');
			$this->template->content->creed = View::instance('../include/creed');
			$this->template->content->lp = View::instance('../include/lp');
			$this->template->content->intercession = View::instance('../include/intercession');
			$this->template->content->collect = View::instance('../include/collect');
			$this->template->content->mission = View::instance('../include/mission');
			$this->template->content->thanksgiving = View::instance('../include/thanksgiving');
			$this->template->content->closing = View::instance('../include/closing');
	
			
		# An array of client files to be included in the head
			$client_files_head = Array(
			'../controllers/c_season',
			'../include/opening',
			'../include/confession',
			'../include/invitatory',
			'../include/venite',
			'../include/psalm',
			'../include/canticle1',
			'../include/canticle2',
			'../include/creed',
			'../include/lp',
			'../include/intercession',
			'../include/collect',
			'../include/mission',
			'../include/thanksgiving',
			'../include/closing'
			);
		# load_client_files to generate the links from the above array	
			$this->template->client_files_head = Utils::load_client_files($client_files_head);
			
		# An array of client files to be included in the body
			$client_files_body = Array(
			
			);
		# load_client_files to generate the links from the above array	
			$this->template->client_files_body = Utils::load_client_files($client_files_body);
		
		
		# Set the <title> tag
			$this->template->title = "Morning Prayer";
	      					     		
		# Render the view
			echo $this->template;

	}
	
	public function evening() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_evening');
			$this->template->content->season = View::instance('../controllers/c_season');
			$this->template->content->opening = View::instance('../include/openingeve');
			$this->template->content->confession = View::instance('../include/confession');
			$this->template->content->invitatory = View::instance('../include/invitatory');
			$this->template->content->light = View::instance('../include/light');
			$this->template->content->psalm = View::instance('../include/psalmeve');
			$this->template->content->magnificat = View::instance('../include/magnificat');
			$this->template->content->nunc = View::instance('../include/nunc');
			$this->template->content->creed = View::instance('../include/creed');
			$this->template->content->lp = View::instance('../include/lp');
			$this->template->content->intercession = View::instance('../include/intercessioneve');
			$this->template->content->collect = View::instance('../include/collecteve');
			$this->template->content->mission = View::instance('../include/missioneve');
			$this->template->content->thanksgiving = View::instance('../include/thanksgiving');
			$this->template->content->closing = View::instance('../include/closing');
			
		# An array of client files to be included in the head
			$client_files_head = Array(
			'../controllers/c_season',
			'../include/opening',
			'../include/confession',
			'../include/invitatory',
			'../include/light',
			'../include/psalm',
			'../include/margnificat',
			'../include/nunc',
			'../include/creed',
			'../include/lp',
			'../include/intercession',
			'../include/collect',
			'../include/mission',
			'../include/thanksgiving',
			'../include/closing'
			);
		# load_client_files to generate the links from the above array	
			$this->template->client_files_head = Utils::load_client_files($client_files_head);
		
		# Set the <title> tag
			$this->template->title = "Evening Prayer";
	      					     		
		# Render the view
			echo $this->template;

	}
	
	public function compline() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_compline');
			$this->template->content->season = View::instance('../controllers/c_season');
			$this->template->content->psalm = View::instance('../include/psalmpm');
			$this->template->content->reading = View::instance('../include/reading');
			$this->template->content->lp = View::instance('../include/lp');
			$this->template->content->collect = View::instance('../include/collectpm');
			$this->template->content->sleep = View::instance('../include/sleep');
			
		# An array of client files to be included in the head
			$client_files_head = Array(
			'../controllers/c_season',
			'../include/heading',
			'../include/psalm',
			'../include/reading',
			'../include/lp',
			'../include/collect',
			'../include/sleep');
		# load_client_files to generate the links from the above array	
			$this->template->client_files_head = Utils::load_client_files($client_files_head);
			
		# Set the <title> tag
			$this->template->title = "Compline";
	      					     		
		# Render the view
			echo $this->template;

	}
	
	public function whyPrayer() {
	    
		# The content of the template with a view file
			$this->template->content = View::instance('v_services_whyprayer');
			
		# Set the <title> tag
			$this->template->title = "Why Prayer";
	      					     		
		# Render the view
			echo $this->template;

	}
        
}
?>