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
'<div id="loginlinks">
  <span class="fa fa-power-off"></span> <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" data-toggle="dropdown">{LAN=LAN_LOGINMENU_51} <strong class="caret"></strong></a> | 
  <div class="dropdown-menu" style="width: 250px; margin: 0 auto; text-align: left; padding: 15px; padding-bottom: 0px; background-color: #e8e8e8;">
    {SIGNIN_FORM=start}
    {SIGNIN_INPUT_USERNAME}
    {SIGNIN_INPUT_PASSWORD}
    {SIGNIN_IMAGECODE_NUMBER}
    {SIGNIN_IMAGECODE_BOX}
    <div class="form-group row m-2 checkbox">
        <label class="checkbox form-check"><input type="checkbox" name="autologin" value="1" id="autologin-1" class="form-check-input"><span>{LAN=LAN_LOGINMENU_6}</span></label>
    </div>
    <div class="text-center m-2">
        <input type="submit" class="btn btn-primary button" name="userlogin" value="{LAN=LAN_LOGINMENU_51}">
    </div> 		
    {SIGNIN_FORM=end}
  </div>
 ';
                    
$SIGNIN_TEMPLATE['signin'] .= ' {SIGNIN_SIGNUP_HREF} | <a href="{SIGNIN_FPW_HREF}" > {LAN=LAN_LOGINMENU_4}</a></div>';				
 
$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<a href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}</a> | ';
//$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="dropdown dropdown-pm">{---}</li>';
$SIGNIN_WRAPPER['signout']['EFICTION_LINK'] = '{---} |';
$SIGNIN_TEMPLATE['signout'] = '
   {SIGNIN_PM_NAV}
   {SIGNIN_ADMIN_HREF}
   <a href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a> | 
   {EFICTION_LINK=adminarea}
   {EFICTION_LINK=login}
   {EFICTION_LINK=logout}
';

 
