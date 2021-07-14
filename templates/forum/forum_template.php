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


$FORUM_TEMPLATE['main']['start']			=  "";

$FORUM_TEMPLATE['main']['parent_start']			= 	'
<style>
.magic-table {
	border-collapse: collapse;
	width: 100%;
	 
  }
  
  .magic-table tbody tr:nth-child(odd) {
	  background-color: rgba(100, 150, 250, 0.05); 
  }
  
  .magic-table td,
  th {
	  padding: 10px; 
  }
  
  @media screen and (max-width: 500px) {
	.magic-table {
	  width: 100%;
	}
  
	.magic-table thead {
	  display: none;
	}
	.magic-table tr {
	  display: flex;
	  flex-direction: column;
	  margin-bottom: 1px;
 
	  border-radius: 4px;
	  background-color: #fff;
	  box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
	}
	 
	.magic-table td {
	  padding: 0.25rem;
	  text-align: center;
	}
  
	
  }
  
  @media screen and (max-width: 500px) {
.magic-table td:nth-child(1) {
		content: " ";
	}
	.magic-table td:nth-child(2)::before {
	  content: "{LAN=FORUM_0003}: ";
	}
	.magic-table td:nth-child(3)::before {
	  content: "{LAN=FORUM_0002}: ";
	}
	.magic-table td:nth-child(4)::before {
	  content: "{LAN=FORUM_0004}: ";
	}
	.magic-table td::before {
	  font-weight: bold;
	}
	}
</style>
<div class=" ">
  <div class=" ">
    <div class=" mb-2" >
        <h3 class=" ">
            {PARENTIMAGE:h=50}{PARENTNAME} {PARENTSTATUS}
        </h3>
        <div class=" p-0">  
        <table class="magic-table table table-responsive table-bordered table-stripped">
         <thead> <tr class="forum-parent">
        											<th scope="col"  style="width: 50%;">  
        											<th scope="col" class="text-center">{LAN=FORUM_0003}</th>
        											<th scope="col" class="text-center">{LAN=FORUM_0002}</th>
        											<th scope="col" class="text-center">{LAN=FORUM_0004}</th>
        											</tr> </thead><tbody>
         
										 ';

$FORUM_TEMPLATE['main']['parent_end']	    = '</tbody></table></section></div>        
         </div>
    </div>
</div>';


$FORUM_TEMPLATE['main']['forum']			= 	'<tr>
											<td class=" text-md-start">{NEWFLAG} 
											 {FORUMIMAGE:h=50}{FORUMNAME}<br /><small>{FORUMDESCRIPTION}</small>{FORUMSUBFORUMS}</td>
											<td class="text-center">{REPLIESX}</td>
											<td class="text-center">{THREADSX}</td>
											<td class="text-center"><small>{LASTPOST:type=username} {LASTPOST:type=datelink}</small></td>
											</tr>';

//{LASTPOST:type=username} + {LASTPOST:type=datelink} can also be replaced by the legacy shortcodes {LASTPOST} or {LASTPOSTUSER} + {LASTPOSTDATE}

$FORUM_TEMPLATE['main']['end']				= "<div class='forum-footer center'><small>{USERINFO}</small></div> ";

// $FORUM_WRAPPER['main']['forum']['USERINFOX'] = "{FORUM_BREADCRUMB}(html before){---}(html after)";

// Tracking
$FORUM_TEMPLATE['track']['start']       = "{FORUM_BREADCRUMB}<div id='forum-track'>
											<table class='table table-striped table-bordered table-hover'>
											<colgroup>
											<col style='width:5%' />
											<col />
											<col style='width:15%' />
											<col style='width:5%' />
											</colgroup>
											<thead>
											<tr>

												<th colspan='2'>{LAN=FORUM_1003}</th>
												<th class='hidden-xs text-center'>{LAN=FORUM_0004}</th>
												<th class='text-center'>{LAN=FORUM_1020}</th>
												</tr>
											</thead>
											";

$FORUM_TEMPLATE['track']['item']        = "<tr>
											<td class='text-center'>{NEWIMAGE}</td>
											<td>{TRACKPOSTNAME}</td>
											<td class='hidden-xs text-center'><small>{LASTPOSTUSER} {LASTPOSTDATE}</small></td>
											<td class='text-center'>{UNTRACK}</td>
											</tr>";


$FORUM_TEMPLATE['track']['end']         = "</table>\n</div>";




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

