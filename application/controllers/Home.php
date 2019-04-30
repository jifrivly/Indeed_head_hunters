<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	// $projec = array('fa' => 'something',
	// );

	public function _construct()
	{	
		
		

	}

	
	public function index()
	{

		$project = array( 
			'project_name' => "INDEED HEADHUNTERS",
			'reg_com' => "COMPANY Registration Form",
			'logi_js' => "JOB SEEKER Login Form",
			'logi_com' => "COMPANY Login Form",

			
			// Import Google Icon Font
			'g_font_icon' => '<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >',

			// Material Design for Bootstrap fonts and icons
			'boot_font_icon' => '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">',
			
			// jquery-3.2.1.slim.min.js
			'jquery' => '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>',
    
    		// popper.js@1.12.6/dist/umd/popper.js
			'popper' => '<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" 
			integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>',


// local

			'my_css' => base_url('/css/my_style.css'),
			'boot_js' => base_url('/js/bootstrap.min.js'),


			// <!--Import materialize.css-->
      		'materialize_css' => base_url('/css/materialize.min.css'),




// cdn
			//'boot4_cdn' => '"<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
			//integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			//<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
			//integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
			//</script>',

			//'boot3_cdn' => '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
			//integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			//<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
			//integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>',


			// <!-- Materialize Compiled and minified CSS -->
			// 'material_css' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">',
    		// <!-- Materialize Compiled and minified JavaScript -->
			// <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
			


			'font_awesome' => '<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">',
            
			
		);

		
		// $this->load->view('header');

		$this->load->view('homepage',$project);

		// $this->load->view('footer');
		
		$this->load->view('elapsed_time');

		
		
	}

	
}
