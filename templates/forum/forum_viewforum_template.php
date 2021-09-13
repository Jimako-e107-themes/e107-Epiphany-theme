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
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%"); }

$breadcrumb = '<div class="row"><div class="col-md-12">{BREADCRUMB}</div></div>';
$forumname = '<div class="row mt-2 mb-2"><div class="col-md-12"><h3>{FORUMTITLE}</h3></div></div>';

$forum_top_nav =  '<div class="row"><div class="col-md-8">{THREADPAGES}</div><div class="col-md-4">{NEWTHREADBUTTON}</div>{MESSAGE}</div>'; 

if(empty($FORUM_VIEW_START_CONTAINER))
{
	$FORUM_VIEW_START_CONTAINER = $breadcrumb.'{SUBFORUMS}';
}

$SC_WRAPPER['MESSAGE'] = '<div class="col-md-12">{---}</div>';

if(empty($FORUM_VIEW_END_CONTAINER))
{
	$FORUM_VIEW_END_CONTAINER = '<div class="row card card-primary"><div class="card-footer col-md-12">{FORUMJUMP}</div></div>{MESSAGE}';	 
}


if (empty($FORUM_VIEW_START))
{
$FORUM_VIEW_START = $forumname.$forum_top_nav."
  
 
	<div class='table-responsive forum_viewforum'>
	<table  class='table table-striped table-bordered table-light  table-hover'>
	<thead><tr>
	<th style='width:3%' class='fcaption'>&nbsp;</th>
	<th style='width:47%' class='fcaption'>{THREADTITLE}</th>
	<th style='width:20%; text-align:center' class='fcaption'>{STARTERTITLE}</th>
	<th style='width:5%; text-align:center' class='fcaption'>{REPLYTITLE}</th>
	<th style='width:5%; text-align:center' class='fcaption'>{VIEWTITLE}</th>
	<th style='width:20%; text-align:center' class='fcaption'>{LASTPOSTITLE}</th>
	</tr></thead>";
}

if (empty($FORUM_VIEW_END))
{
	$FORUM_VIEW_END = "
		</table>
	 
		<table >
		<tr>
		<td style='width:80%'><span class='mediumtext'>{THREADPAGES}</span>
		</td>
		<td style='width:20%; text-align:right'>
		{NEWTHREADBUTTON}
		</td>
		</tr>
		<tr>
		<td colspan ='2'>
		{FORUMJUMP}
		</td>
		</tr>
		</table>

		<div class='spacer'>
		<table class='fborder table' >
		<tr>
		<td style='vertical-align:middle; width:50%' class='forumheader3'><span class='smalltext'>{LAN=LAN_FORUM_1009}: {MODERATORS}</span></td>
		<td style='vertical-align:middle; width:50%' class='forumheader3'><span class='smalltext'>{BROWSERS}</span></td>
		</tr>
		</table>
		</div>

		<div class='spacer'>
		<table class='fborder table' >
		<tr>
		<td style='vertical-align:middle; width:50%' class='forumheader3'>{ICONKEY}</td>
		<td style='vertical-align:middle; text-align:center; width:50%' class='forumheader3'><span class='smallblacktext'>{PERMS}</span><br /><br />{SEARCH}
		</td>
		</tr>
		</table>
		</div>
		</div>
		<div class='spacer'>";
	//	hardcoded deprecated rss links
	//	<div style='text-align:center;'>
	//	<a href='".e_PLUGIN."rss_menu/rss.php?11.1.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss1.png' alt='{LAN=431}' style='vertical-align: middle; border: 0;' /></a>
	//	<a href='".e_PLUGIN."rss_menu/rss.php?11.2.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss2.png' alt='{LAN=432}' style='vertical-align: middle; border: 0;' /></a>
	//	<a href='".e_PLUGIN."rss_menu/rss.php?11.3.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss3.png' alt='{LAN=433}' style='vertical-align: middle; border: 0;' /></a>
	//	</div>
	//	
		$FORUM_VIEW_END .= "
		<div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b></div>
		</div>
";
}




// XXX These templates should remain unchanged.
if (empty($FORUM_VIEW_FORUM)) {
	$SC_WRAPPER['LASTPOST:type=date'] = "{---}<br>";
	$SC_WRAPPER['LASTPOST:type=url'] = " <a href='{---}'>".IMAGE_post2."</a>";
	$FORUM_VIEW_FORUM = "
		<tr>
		<td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		<td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>

		<table style='width:100%'>
		<tr>
		<td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span><br /><span class='smalltext'>{PAGES}</span></td>
		<td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		</tr>
		</table>

		</td>

		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		</tr>";
}

if (empty($FORUM_VIEW_FORUM_STICKY))
{
	$FORUM_VIEW_FORUM_STICKY = "
		<tr>
		<td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		<td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>

		<table style='width:100%'>
		<tr>
		<td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span> <span class='smalltext'>{PAGES}</span></td>
		<td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		</tr>
		</table>

		</td>

		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		</tr>";
}

if (empty($FORUM_VIEW_FORUM_ANNOUNCE))
{
	$FORUM_VIEW_FORUM_ANNOUNCE = "
		<tr>
		<td style='vertical-align:middle; text-align:center; width:3%' class='forumheader3'>{ICON}</td>
		<td style='vertical-align:middle; text-align:left; width:47%' class='forumheader3'>

		<table style='width:100%'>
		<tr>
		<td style='width:90%'><span class='mediumtext'><b>{THREADTYPE}{THREADNAME}</b></span> <span class='smalltext'>{PAGES}</span></td>
		<td style='width:10%; white-space:nowrap;'>{ADMIN_ICONS}</td>
		</tr>
		</table>

		</td>

		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{POSTER}<br />{THREADDATE}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{REPLIES}</td>
		<td style='vertical-align:middle; text-align:center; width:5%' class='forumheader3'>{VIEWS}</td>
		<td style='vertical-align:middle; text-align:center; width:20%' class='forumheader3'>{LASTPOST}</td>
		</tr>";
}






if (empty($FORUM_VIEW_SUB_START))
 {
	$FORUM_VIEW_SUB_START = "
	<tr>
	<td colspan='2'>
		<br />
		<div>
		<table style='width:100%'>
		<tr>
			<td class='fcaption' style='width: 5%'>&nbsp;</td>
			<td class='fcaption' style='width: 45%'>{LAN=FORUM_1002}</td>
			<td class='fcaption' style='width: 10%'>{LAN=FORUM_0002}</td>
			<td class='fcaption' style='width: 10%'>{LAN=FORUM_0003}</td>
			<td class='fcaption' style='width: 30%'>{LAN=FORUM_0004}</td>
		</tr>
	";
}

if (empty($FORUM_VIEW_SUB))
{
	$FORUM_VIEW_SUB = "
	<tr>
		<td class='forumheader3' style='text-align:center'>{NEWFLAG}</td>
		<td class='forumheader3' style='text-align:left'><b>{SUB_FORUMTITLE}</b><br />{SUB_DESCRIPTION}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_THREADS}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_REPLIES}</td>
		<td class='forumheader3' style='text-align:center'>{SUB_LASTPOST}</td>
	</tr>
	";
}

if (empty($FORUM_VIEW_SUB_END))
{
	$FORUM_VIEW_SUB_END = "
	</table><br /><br />
	</div>
	</td>
	</tr>
	";
}

if (empty($FORUM_IMPORTANT_ROW)) {
	$FORUM_IMPORTANT_ROW = "<tr class='bg-gray'><td class='forumheader'>&nbsp;</td><td colspan='5'  class='forumheader'><span class='mediumtext'><b>{LAN=FORUM_1006}</b></span></td></tr>";
}


if (empty($FORUM_NORMAL_ROW))
{
	$FORUM_NORMAL_ROW = "<tr><td class='forumheader'>&nbsp;</td><td colspan='5'  class='forumheader'><span class='mediumtext'><b>{LAN=FORUM_1007}</b></span></td></tr>";
}



$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>";
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "{FORUM_TITLE}";


 

         $FORUM_VIEWFORUM_TEMPLATE['caption'] = $FORUM_VIEW_CAPTION;
		 $FORUM_VIEWFORUM_TEMPLATE['start'] = $FORUM_VIEW_START_CONTAINER;
		 $FORUM_VIEWFORUM_TEMPLATE['header'] = $FORUM_VIEW_START;
		 $FORUM_VIEWFORUM_TEMPLATE['item'] = $FORUM_VIEW_FORUM;
		 $FORUM_VIEWFORUM_TEMPLATE['item-sticky'] = $FORUM_VIEW_FORUM_STICKY;
		 $FORUM_VIEWFORUM_TEMPLATE['item-announce'] = $FORUM_VIEW_FORUM_ANNOUNCE;
		 $FORUM_VIEWFORUM_TEMPLATE['footer'] = $FORUM_VIEW_END;
		 $FORUM_VIEWFORUM_TEMPLATE['end'] = $FORUM_VIEW_END_CONTAINER;
		 $FORUM_VIEWFORUM_TEMPLATE['sub-header'] = $FORUM_VIEW_SUB_START;
		 $FORUM_VIEWFORUM_TEMPLATE['sub-item'] = $FORUM_VIEW_SUB;
		 $FORUM_VIEWFORUM_TEMPLATE['sub-footer'] = $FORUM_VIEW_SUB_END;
		 $FORUM_VIEWFORUM_TEMPLATE['divider-important'] = $FORUM_IMPORTANT_ROW;
		 $FORUM_VIEWFORUM_TEMPLATE['divider-normal'] = $FORUM_NORMAL_ROW;
 


