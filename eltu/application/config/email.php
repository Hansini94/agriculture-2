<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
$config['protocol']    = 'mail';
$config['smtp_host']    = '';
$config['smtp_port']    = '465';
$config['smtp_timeout'] = '7';
$config['smtp_user']    = '';
$config['smtp_pass']    = '';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not 
*/

$config['protocol']    = 'smtp';
$config['smtp_host']    = 'smtp.gmail.com';
$config['smtp_port']    = '587';
$config['smtp_timeout'] = '15';
$config['smtp_user']    = 'form.mail.tg@gmail.com';
$config['smtp_pass']    = '#TG@2022';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not
$config['smtp_crypto'] = 'tls';


/*$config['protocol']    = 'smtp';
$config['smtp_host']    = 'smtp.gmail.com';
$config['smtp_port']    = '587';
$config['smtp_timeout'] = '7';
$config['smtp_user']    = 'shoponline@acl.lk';
$config['smtp_pass']    = 'kpsrnuhyafbjqqaj';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not
$config['smtp_crypto'] = 'tls';*/

// !@#$Borella@Acl