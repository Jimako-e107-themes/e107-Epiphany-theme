<?php

if (!defined('e107_INIT')) { exit; }
 
$theme_settings = array();
if(class_exists('theme')) {
 $theme_settings = theme_settings::get_membersonly_template(); 
}

$MEMBERSONLY_TEMPLATE['default']['caption']	= LAN_MEMBERS_0;
$MEMBERSONLY_TEMPLATE['default']['header']	= "<div class='container text-center' style='margin-right:auto;margin-left:auto'><br /><br />";
$MEMBERSONLY_TEMPLATE['default']['body']	= "<div class='alert alert-block text-danger'>
													{MEMBERSONLY_RESTRICTED_AREA} {MEMBERSONLY_LOGIN}
													{MEMBERSONLY_SIGNUP}<br /><br />{MEMBERSONLY_RETURNTOHOME}
												</div>
												";

$MEMBERSONLY_TEMPLATE['default']['footer'] = "</div>";



$MEMBERSONLY_TEMPLATE['signup']['header'] = $theme_settings['membersonly_start'];
$MEMBERSONLY_TEMPLATE['signup']['footer'] = $theme_settings['membersonly_end'];



