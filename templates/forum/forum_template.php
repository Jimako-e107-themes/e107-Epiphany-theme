<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */
if (!defined('e107_INIT')) { exit; }
 
/*
$FORUM_MAIN_START	= "<br />MAIN START";
$FORUM_MAIN_PARENT 	= "<br />MAIN PARENT";
$FORUM_MAIN_FORUM		= "<br />MAIN FORUM";
$FORUM_MAIN_END		= "<br />MAIN END";
$FORUM_NEWPOSTS_START	= "<br />NEWPOSTS-START";
$FORUM_NEWPOSTS_MAIN 	= "<br />NEWPOSTS-MAIN";
$FORUM_NEWPOSTS_END 	= "<br />NEWPOSTS END";
$FORUM_TRACK_START	= "<br />TRACK-START";
$FORUM_TRACK_MAIN	= "<br />TRACK-MAIN";
$FORUM_TRACK_END	= "<br />TRACK-END";
*/

// New in v2.x - requires a bootstrap theme be loaded.  

if(class_exists('theme_settings')) {
  $theme_settings = theme_settings::get_forumstyle(); 
}

$FORUM_TEMPLATE['main']['start']			= '
<div class="row">
    <div class="col-12">';

$FORUM_TEMPLATE['main']['end']				= '
    </div>
    <div class="col-12">
        <div class="forum-footer text-center"><small>{USERINFOX}</small> | <small>{USERINFO}</small></div>
    </div>
</div>';

$SC_WRAPPER['PARENTNAME'] = "<h3>{---}</h3>";

$FORUM_TEMPLATE['main']['parent_start']			= 	'
<div class="forum-card card'.$theme_settings['forum-card'].'">
  <div class="forum-card-header '.$theme_settings['forum-card-header'].' ">
  	<div class="row">
  		<div class="col-lg-7 col-md-6 col-12">  {PARENTIMAGE:h=50}{PARENTNAME} {PARENTSTATUS}	</div>
  		<div class="col-md-2 d-none d-md-block text-center">{LAN=FORUM_0002}/{LAN=FORUM_0003}</div>
  		<div class="col-lg-3 col-md-4 d-none d-md-block">{LAN=FORUM_0004}</div>
  	</div>
  </div> 
  <div class="card-body">
        <ul class="forum-list-group list-group '.$theme_settings['forum-list-group'].'  ">';

$FORUM_TEMPLATE['main']['parent_end']	    = 
        '</ul>
    </div>
</div>';

$FORUM_TEMPLATE['main']['forum']			= 	'

<li class="forum-list-group-item  '.$theme_settings['forum-list-group-item'].' ">
 
  <div class="row align-items-center">
    <div class="col-lg-7 col-md-6 col-12 ">
      {NEWFLAG}{FORUMIMAGE:h=50}{FORUMNAME}<br><small>{FORUMDESCRIPTION}</small>{FORUMSUBFORUMS} 
      <span class="d-md-none"> 
        <i class="fa fa-list ml-2" title="{LAN=FORUM_0002}" aria-hidden="true"></i><span class="sr-only">{LAN=FORUM_0002}</span> {THREADSX} &nbsp; 
        <i class="fa fa-comment-o  ml-2" title="{LAN=FORUM_0003}" aria-hidden="true"></i><span class="sr-only">{LAN=FORUM_0003}</span> {REPLIESX}
        <br><small>{LAN=FORUM_0004}: <span class="post-author">{LASTPOST:type=username}</span> <span class="post-date">{LASTPOST:type=datelink}</span></small>
      </span>
    </div>
    
    <div class="col-md-2 d-none d-md-block text-center">
        {THREADS} / {REPLIES}
    </div>
    <div class="col-lg-3 col-md-4 d-none d-md-block">
        <span class="post-author">{LASTPOST:type=username}</span> 
        <span>{LASTPOST:type=datelink}</span> 
    </div>
  </div>
 
</li>
        ';

//{LASTPOST:type=username} + {LASTPOST:type=datelink} can also be replaced by the legacy shortcodes {LASTPOST} or {LASTPOSTUSER} + {LASTPOSTDATE}


// $FORUM_WRAPPER['main']['forum']['USERINFOX'] = "{FORUM_BREADCRUMB}(html before){---}(html after)";

// Tracking
$FORUM_TEMPLATE['track']['start']       = "{FORUM_BREADCRUMB}".'
<div class="forum-card '.$theme_settings['forum-card'].'">
  <div class="forum-card-header '.$theme_settings['forum-card-header'].' ">
  	<div class="row">
  		<div class="col-lg-7 col-md-6 col-12">  {LAN=FORUM_1003}	</div>
  		<div class="col-md-2 d-none d-md-block text-center">{LAN=FORUM_0004}</div>
  		<div class="col-lg-3 col-md-4 d-none d-md-block text-center">{LAN=FORUM_1020}</div>
  	</div>
  </div> 
  <ul class="forum-list-group list-group '.$theme_settings['forum-list-group'].'  ">';
 
$FORUM_TEMPLATE['track']['item']        = '
<li class="forum-list-group-item  '.$theme_settings['forum-list-group-item'].' ">
 
  <div class="row align-items-center"> 
    <div class="col-lg-7 col-md-6 col-12 ">
      {NEWIMAGE}{TRACKPOSTNAME} 
      <span class="d-md-none">  
         {LAN=FORUM_0004}: {LASTPOSTUSER} {LASTPOSTDATE}  <br>
         {LAN=FORUM_1020}: {UNTRACK} 
      </span>
    </div>
    
    <div class="col-md-2 d-none d-md-block text-center">
      {LASTPOSTUSER} {LASTPOSTDATE}
    </div>
    <div class="col-lg-3 col-md-4 d-none d-md-block text-center">
       {UNTRACK}
    </div>
  </div>
 
</li>'; 
 


$FORUM_TEMPLATE['track']['end']         = "</ul></div>";




/*
$FORUM_TEMPLATE['main-end']				.= "

<div class='center'>
	<small class='muted'>{PERMS}</small>
	</div>
<table style='".USER_WIDTH."' class='fborder table'>\n<tr>
<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>
<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>
<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>
";
*/

