<?php 
//		  1		    2		  3		    4		  5		    6		  7		    7	      8		
//2345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345
//==============================================================================================
//	
//	ooooo	oooo	ooooo	o	o		ooooo	ooooo	oooo	oooo	ooooo	oooo	ooooo
//	o   o	o	o	o		o	o		o	o	  o		o	o	o	o	o	o	o	o	  o
//	o	o	o	o	o		oo	o		o	o	  o		o	o	o	o	o	o	o	o	  o
//	o	o	oooo	oooo	o o	o		ooooo	  o		oooo	oooo	o	o	oooo	  o	
//	o	o	o		o		o  oo		o	o	  o		o  o	o		o	o	o  o	  o
//	o	o	o		o		o	o		o	o	  o		o	o	o		o	o	o	o     o
//	00000	0		ooooo	o	o		o	o	ooooo	o	o	o		ooooo	o	o     o
//
//	The premium quality open source software soultion for airport record keeping requirements
//
//	Designed, Coded, and Supported by Erick Dahl
//
//	Copywrite 2002 - Whatever the current year is
//
//	~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~
//	
//	Name of Document	:	template.list.php
//
//	Purpose of Page		:	Lists all Template Functions by include.
//
//	Special Notes		:	Under normal conditions there should be no need to change this page
//							In the event you wish to change this page, everything should be
//							rather stright forward in what it does and how to change it.
//
//==============================================================================================
//2345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345
//		  1		    2		  3		    4		  5		    6		  7		    7	      8		

	// Load Include Files
			include("_tp_control_duplicate.inc.php");
			include("_tp_control_archived.inc.php");
			include("_tp_control_closed.inc.php");
			include("_tp_control_error.inc.php");
			include("_tp_control_exports.inc.php");
			include("_tp_control_controls.inc.php");
			include("_tp_control_footbuttons.inc.php");
			include("_tp_control_header_button.inc.php");
			
			include("_tp_control_sortby_archieved.inc.php");
			include("_tp_control_sortby_closed.inc.php");
			include("_tp_control_sortby_date.inc.php");
			include("_tp_control_sortby_duplicate.inc.php");
			include("_tp_control_sortby_joined.inc.php");
			include("_tp_control_sortby_text.inc.php");
			include("_tp_control_sortby_page.inc.php");
			
			include("_tp_control_function_quickaccess.inc.php");
			include("_tp_control_function_utilities.inc.php");
			include("_tp_control_function_filters.inc.php");
			include("_tp_control_function_mapit.inc.php");
			include("_tp_control_function_submit.inc.php");
			include("_tp_control_function_submit_color.inc.php");
			include("_tp_control_function_button_ajax.inc.php");
			include("_tp_control_function_button_mode.inc.php");
			include("_tp_control_function_button_link.inc.php");
			include("_tp_control_function_button_iframe.inc.php");
			include("_tp_control_function_button_div.inc.php");
			include("_tp_control_function_button.inc.php");
			include("_tp_control_function_button_checkbox.inc.php");
			include("_tp_control_function_button_toggle.inc.php");
			
			include("_tp_files_read_weather.inc.php");
			include("_tp_files_send_email.inc.php");
			
			include("_tp_control_auto_logentry.inc.php");
			include("_tp_control_auto_logentry_v2.inc.php");
			include("_tp_debugging.inc.php");
			
			include("_tp_ui_strinptags.inc.php");
			include("_tp_ui_strip_input.inc.php");

	// DON'T LOAD BLOCK FORMS HERE!!!

	?>