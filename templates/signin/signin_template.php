<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];


$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<a href="{---}">{LAN=LAN_LOGINMENU_3}</a>';
$SIGNIN_WRAPPER['signin']['SIGNIN_LOGIN_HREF'] = '<a href="{---}">{LAN=LAN_LOGINMENU_51}</a>';

 
$SIGNIN_WRAPPER['signin']['SIGNIN_IMAGECODE_NUMBER'] = "<div class='form-group m-2'>{---}";
$SIGNIN_WRAPPER['signin']['SIGNIN_IMAGECODE_BOX'] = "<span><div>{---}</div></span> </div>";
 
// see issue #4529
$SIGNIN_TEMPLATE['signin'] = 
' {SIGNIN_LOGIN_HREF} | {SIGNIN_SIGNUP_HREF} | <a href="{SIGNIN_FPW_HREF}">{LAN=LAN_LOGINMENU_4}</a> ';			
 
$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<a href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}</a> | ';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '{---} |';
$SIGNIN_TEMPLATE['signout'] = '
   
   {SIGNIN_ADMIN_HREF}
   {SIGNIN_PM_NAV}
   <a href="{SIGNIN_PROFILE_HREF}"><span class="fa fa-user"></span> {LAN=LAN_LOGINMENU_13}</a> | 
   <a href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a> | 
   <a href="{SIGNIN_LOGOUT_HREF}"><span class="fa fa-power-off"></span> {LAN=LAN_LOGOUT}</a>
';

 
