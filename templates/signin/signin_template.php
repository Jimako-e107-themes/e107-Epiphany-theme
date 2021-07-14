<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];


$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<a href="{---}">{LAN=LAN_LOGINMENU_3}</a>';
$SIGNIN_WRAPPER['signin']['SIGNIN_LOGIN_HREF'] = '<a href="{---}">{LAN=LAN_LOGINMENU_51}</a>';


$SIGNIN_TEMPLATE['signin'] = '
		        {SIGNIN_LOGIN_HREF}
				{SIGNIN_FORM=start}
                <label for="username">{LAN=LAN_LOGINMENU_1}</label> {SIGNIN_INPUT_USERNAME}
                <label for="password">{LAN=LAN_LOGINMENU_1}</label> {SIGNIN_INPUT_PASSWORD}     
                <span id="rememberme">
                <input type="checkbox" class="checkbox" name="autologin" id="autologin" value="1"><label for="autologin=">{LAN=LAN_LOGINMENU_6}</label></span>   
                <input type="submit" class="button" name="userlogin" value="{LAN=_GO}"">    
                {SIGNIN_FORM=end}
                <div id="loginlinks">{SIGNIN_SIGNUP_HREF} | <a href="{SIGNIN_FPW_HREF}" >{LAN=LAN_LOGINMENU_4}</a></div>';



$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<a href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}</a> | ';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="dropdown dropdown-pm">{---}</li>';
$SIGNIN_WRAPPER['signout']['EFICTION_LINK'] = '{---} |';
$SIGNIN_TEMPLATE['signout'] = '

     {SIGNIN_PM_NAV}
     {SIGNIN_ADMIN_HREF}
     <a href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a> | 
     {EFICTION_LINK=adminarea}
     {EFICTION_LINK=login}
     {EFICTION_LINK=logout}
';

 
