<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];


$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<a href="{---}">{LAN=LAN_LOGINMENU_3}</a>';
$SIGNIN_WRAPPER['signin']['SIGNIN_LOGIN_HREF'] = '<a href="{---}">{LAN=LAN_LOGINMENU_51}</a>';
 /*
$SIGNIN_WRAPPER['signin']['SIGNIN_INPUT_USERNAME'] = "<div class='form-group   m-2'><label class='control-label' for='loginname'>{LAN=LAN_LOGINMENU_1}</label>{---}</div>";
$SIGNIN_WRAPPER['signin']['SIGNIN_INPUT_PASSWORD'] = "<div class='form-group   m-2'><label class='control-label' for='password'>{LAN=LAN_LOGINMENU_2}</label>{---}</div>";
$SIGNIN_WRAPPER['signin']['SIGNIN_IMAGECODE_NUMBER'] = "<div class='form-group m-2'><label class='control-label' for='code-verify'>" . e107::getSecureImg()->renderLabel()."</label> {---}";
$SIGNIN_WRAPPER['signin']['SIGNIN_IMAGECODE_BOX'] = "<span><div>{---}</div></span> </div>";
*/ 
// see issue #4529
/*
  <label for="penname=">Penname:</label><INPUT type="text" class="textbox" name="penname" id="penname" size="15"> 
 <label for="password">Password:</label> <INPUT type="password" class="textbox" name="password" id="password" size="15">
  <span id='rememberme'><INPUT type="checkbox" class="checkbox" name="cookiecheck" id="cookiecheck" value="1">
  <label for="cookiecheck=">Remember Me</label></span> <INPUT type="submit" class="button" name="submit" value="Go"> 
  <div id='loginlinks'><a href="member.php?action=register" title="Register">Register</a> | <a href="member.php?action=lostpassword" title="Lost Password">Lost Password</a></div></for
*/

$SIGNIN_TEMPLATE['signin'] = 
'<div id="loginlinks"><span class="fa fa-power-off"></span>{SIGNIN_LOGIN_HREF} | {SIGNIN_SIGNUP_HREF} | <a href="{SIGNIN_FPW_HREF}">{LAN=LAN_LOGINMENU_4}</a></div>
{SIGNIN_FORM=end}
';
 				
 
$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<a href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}<strong class="caret"></strong></a> | ';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '{---} |';
$SIGNIN_WRAPPER['signout']['EFICTION_LINK'] = '{---} |';
$SIGNIN_TEMPLATE['signout'] = '<div id="loginlinks"><span class="fa fa-power-off"></span> 
   {SIGNIN_ADMIN_HREF} 
   {SIGNIN_PM_NAV}
   <a href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a> | 
   {EFICTION_LINK=adminarea}
   {EFICTION_LINK=login}
   {EFICTION_LINK=logout}
   </div>
';

 
