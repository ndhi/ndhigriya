<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');  

/*
| ------------------------------------------------------------------- 
| setting email form mailtrap.io ----
| ------------------------------------------------------------------- 
$config['protocol']		= 'smtp';
$config['smtp_host']	= 'smtp.mailtrap.io';
$config['smtp_port']	= 2525;
$config['smtp_user']	= '';
$config['smtp_pass']	= '';
$config['crlf']			= "\r\n";
$config['newline']		= "\r\n";
*/



/* 
| ------------------------------------------------------------------- 
| EMAIL CONFIG ----- setting email from gmail
| ------------------------------------------------------------------- 
| Konfigurasi email keluar melalui mail server
| */  
$config['protocol']='smtp';  
$config['smtp_host']='ssl://smtp.googlemail.com';  
$config['smtp_port']='465';  
$config['smtp_timeout']='30';  
$config['smtp_user']='';  
$config['smtp_pass']='';  
$config['charset']='utf-8';  
$config['newline']="\r\n";  
   
/* End of file email.php */ 
/* Location: ./system/application/config/email.php */