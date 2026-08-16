<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route["logout"] = "dashboard/login/logout"; 
 

//Home
$route["login"] = "dashboard/login";  
$route["teachers-and-staff"] = "home/staffs";  
$route["gallery"] = "home/gallery";  
$route["contact-us"] = "contact";  
$route["about-us"] = "contact/about";  
$route["exam-routine"] = "exam/exam_routine";  
$route["class-routine"] = "exam/class_routine";  
$route["result"] = "exam/result";  
$route["academic-calendar"] = "admission/calendar";  

//about
$route["about-us"] = "about/index";
$route["messages"] = "about/messages";
