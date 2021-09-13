<?php

if (!defined('e107_INIT')) { exit; }
 
 
$theme_settings = array();
if(class_exists('theme_settings')) {
 $theme_settings = theme_settings::login_template_settings(); 
}

$LOGIN_TEMPLATE['page']['body'] = '
		{LOGIN_TABLE_LOGINMESSAGE}
        <h2 id="pagetitle">{LAN=LOGIN_4}</h2>';
	if (e107::pref('core', 'password_CHAP') == 2)
	{
		$LOGIN_TEMPLATE['page']['body'] .= "
    	<div style='text-align: center' id='nologinmenuchap'>"."Javascript must be enabled in your browser if you wish to log into this site"."
		</div>
    	<span style='display:none' id='loginmenuchap'>";
	}
	else
	{
	  $LOGIN_TEMPLATE['page']['body'] .= "<span>";
	}
 
$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "<div class='form-group row m-2'><label class='control-label' for='loginname'>{LOGIN_USERNAME_LABEL}</label>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "<div class='form-group row m-2'><label class='control-label' for='password'>{LAN=LAN_LOGIN_2}</label>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group row m-2'><label class='control-label' for='code-verify'>" . e107::getSecureImg()->renderLabel()."</label><div class='d-flex secimg'>{---}";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = " <div>{---}</div></div></div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group row m-2 checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "<div class='text-center m-2'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group row m-2'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_LOGINMESSAGE'] = "<div class='alert alert-danger'>{---}</div>";
 

// $LOGIN_WRAPPER['page']['LOGIN_TABLE_FPW_LINK'] = "<div class='form-group row m-2'>{---}</div>";

$LOGIN_TEMPLATE['page']['body'] .= '
<div style="width: 400px; margin: 0 auto; text-align: left;">
        {LOGIN_TABLE_USERNAME}
        {LOGIN_TABLE_PASSWORD}
        {SOCIAL_LOGIN: size=3x}
		{LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
        {LOGIN_TABLE_REMEMBERME}
        {LOGIN_TABLE_SUBMIT}
</div>';
 
$LOGIN_TEMPLATE['page']['header'] =  $theme_settings['page_start'].'
 <div id="login-template">'.$theme_settings['page_logo'];

$LOGIN_TEMPLATE['page']['footer'] =  ' 
    			<div class="login-page-footer" style="text-align: center;">
    				{LOGIN_TABLE_SIGNUP_LINK} | {LOGIN_TABLE_FPW_LINK}
    			</div>
	           </div>'.
$theme_settings['page_end'];
	
 
