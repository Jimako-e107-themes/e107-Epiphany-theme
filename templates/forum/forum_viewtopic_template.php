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


if(class_exists('theme_settings')) {
  $theme_settings = theme_settings::get_forumstyle(); 
}

$sc_style['LASTEDIT']['pre'] = LAN_FORUM_2016.' ';

$sc_style['LASTEDITBY']['pre'] = ' '.LAN_FORUM_2017.' ';
$sc_style['LASTEDITBY']['post'] = '';

$sc_style['LEVEL']['pre'] = "";
$sc_style['LEVEL']['post'] = "";

$sc_style['ATTACHMENTS']['pre'] = "<div>";
$sc_style['ATTACHMENTS']['post'] = "</div>";

$sc_style['ANON_IP']['pre'] = "";
$sc_style['ANON_IP']['post'] = "";


$sc_style['CUSTOMTITLE']['pre'] = "<small>";
$sc_style['CUSTOMTITLE']['post'] = "</small>";


$sc_style['USER_EXTENDED']['location.text_value']['mid'] = ": ";
$sc_style['USER_EXTENDED']['location.text_value']['post'] = "<br />";

$sc_style['MESSAGE']['pre'] = '<div class="row"><div class="col-12">';
$sc_style['MESSAGE']['post'] = "</div></div>"; 

$sc_style['THREADSTATUS']['pre'] = '<br>';
$sc_style['THREADSTATUS']['post'] = ''; 
 
$sc_style['GOTOPAGES']['pre'] = '<br>';
$sc_style['GOTOPAGES']['post'] = ''; 
 
$sc_style['MODERATORS']['pre'] = '<br>';
$sc_style['MODERATORS']['post'] = '';
 
$FORUMSTART = '<a id="top"></a> 
	<div class="row">
		<div class="col-12">{BACKLINK}</div>
	</div>
    <div class="forum-card  '.$theme_settings['forum-card'].'">
      <div class="forum-card-header bg-light'.$theme_settings['forum-card-header'].' ">
          <div class="row">
             <div class="text-center text-md-start col-lg-3 col-md-3 col-12 ' . $theme_settings['forum-card-title']. '"><h3 class="text-md-start">{THREADNAME}</h3>{THREADSTATUS}</div>
             <div class="text-center col-lg-6 col-md-6 col-12 ' . $theme_settings['forum-card-title']. '">{NEXTPREV}{GOTOPAGES}</div>
             <div class="text-center text-md-end col-lg-3 col-md-3 col-12 ' . $theme_settings['forum-card-title']. '">{TRACK}{BUTTONS}<br>{MODERATORS}</div>
          </div>
      </div>
  
  <div class="forum-card-body"><ul class="forum-list-group list-group '.$theme_settings['forum-list-group'].'  ">';
  
$profile = ' <dl id="profile23" >
					<dt class="text-center mb-2"   
										<p class="mb-1"> {CUSTOMTITLE}</p>
										{AVATAR: shape=rounded}
										
					</dt>
                <dt class="text-center user-badge">{USER_EXTENDED=location.text_value}</dt>     
                <dt class="text-center user-badge">{JOINED}</dt>	     
                <dt class="text-center user-badge">{LEVEL=special}</dt>	     
                <dt class="text-center user-badge">{LEVEL=pic}</dt>	         
                <dt class="text-center user-badge">{LEVEL=userid}</dt>	    
				<dt class="text-center user-badge">{LEVEL=badge}{LEVEL=glyph}</dt>				
        <dt class="text-center forum-viewtopic-customtitle">{CUSTOMTITLE}</dt>										
			 </dl>';
  
$forumpost = '
<div id="post_content23">
     <div class="clearfix mb-2 pb-2 border-bottom">
           <hr class="d-md-none mt-0 mb-1">
           <div class="float-start mt-2">
                <i class="fas fa-file-o fa-fw" aria-hidden="true"></i>
                <strong> {NEWFLAG} {LAN=AUTHOR}: {POSTER}{ANON_IP}</strong> » {THREADDATESTAMP}
						</div>
            <div class="float-end"> {EMAILITEM} {PRINTITEM} {REPORTIMG}{EDITIMG}{QUOTEIMG}
            </div>
           </div>
           <div class="content pb-2 card-body"> 
                        {POLL}
												{THREAD_TEXT}
												{ATTACHMENTS: modal=1}
     </div>
</div>
         ';  
/* the same code for reply and first post */
$forumpost =  '
<div class="row"> 
     <div class="card-body>">  
      <div class="postbody float-md-end col-lg-9 col-md-8 col-sm-12 order-1 order-md-2">'.$forumpost .'</div>
      <div class="postprofile col-lg-3 col-md-4 col-sm-12 mb-0 border-md-end order-2 order-md-1">'.$profile .'</div>
    </div>
    <div class="card-footer">     
        <div class="float-start d-inline"><small> {SIGNATURE=clean}</small></div>
        <div class="float-end d-inline"><a href="#page-top" class="text-red" data-toggle="tooltip" data-placement="top" 
          title="" data-original-title="Top"><i class="fa fa-chevron-up" aria-hidden="true"></i>
          <span class="sr-only">Top</span></a> 
    </div>  
</div>';
       
         

$FORUMTHREADSTYLE = 
'
 
  <div class="row align-items-center">
    <div class="col-lg-7 col-md-6 col-12 ">{LAN=AUTHOR}{LAN=FORUM_2015}
 
    
	{POSTS}
    {POST}
	{ATTACHMENTS}
	{LASTEDIT}{LASTEDITBY=link}
	{SIGNATURE}
    {TOP}
    	{PROFILEIMG}
	 {EMAILIMG}
	 {WEBSITEIMG}
	 {PRIVMESSAGE}
     {MODOPTIONS}
       
    </div>
    
    <div class="col-md-2 d-none d-md-block text-center ">
       xxx
    </div>
    <div class="col-lg-3 col-md-4 d-none d-md-block text-center ">
      xxx
    </div>
  </div>
 
 ';
 
$FORUMTHREADSTYLE  = '<li id="post-{POSTID}" class="forum-viewtopic-post forum-list-group-item  '.$theme_settings['forum-list-group-item'].' ">'
.$forumpost.'
</li>' ;


$FORUMREPLYSTYLE =       
'<li id="post-{POSTID}" class="forum-viewtopic-post forum-list-group-item  '.$theme_settings['forum-list-group-item'].' ">'.$forumpost.'
</li>' ;


$FORUMEND = " </ul></div></div>{QUICKREPLY}

	<table style='".USER_WIDTH."' >
	<tr>
	<td style='width:80%'>{GOTOPAGES}
	</td>
	<td style='width:20%; text-align: right; white-space: nowrap'>
	{BUTTONS}
	</td>
	</tr>
	<tr>
	<td colspan ='2'>
	{FORUMJUMP}
	</td>
	</tr>
	</table>
 ";
 
$FORUMEND .= "	
	<div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b></div> ";
	/*
	<div style='text-align:center' class='spacer'>
	<a href='".e_PLUGIN."rss_menu/rss.php?8.1.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss1.png' alt='{LAN=FORUM_0012}' style='vertical-align: middle; border: 0;' /></a> <a href='".e_PLUGIN."rss_menu/rss.php?8.2.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss2.png' alt='{LAN=FORUM_0013}' style='vertical-align: middle; border: 0;' /></a> <a href='".e_PLUGIN."rss_menu/rss.php?8.3.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss3.png' alt='{LAN=433}' style='vertical-align: middle; border: 0;' /></a>
	</div>
	*/

$FORUMDELETEDSTYLE = "<tr>
	<td class='forumheader' style='vertical-align:middle'>
	{POSTER}
	{ANON_IP}
	</td>
	<td class='forumheader' style='vertical-align:middle'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-borderless'>
	<tr>
	<td class='smallblacktext'>
	{THREADDATESTAMP}
	</td>
	<td style='text-align:right'>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td class='forumheader3' style='vertical-align:top' colspan='2'>
	{POSTDELETED}
	</td>
	</tr>
	<tr>
	<td class='finfobar'>
	<span class='smallblacktext'>
	</span>
	</td>
	<td class='finfobar' style='vertical-align:top' colspan='2'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-borderless'>
	<tr>
	<td>
	</td>
	<td style='text-align:right'>
	{MODOPTIONS}
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	</td>
	</tr>";


$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "<a class='forumlink' href='{FORUM_HREF}'>{FORUM_TITLE}</a>";


 
$FORUM_VIEWTOPIC_TEMPLATE['caption'] =  $FORUMCAPTION;
$FORUM_VIEWTOPIC_TEMPLATE['start'] = $FORUMSTART;
$FORUM_VIEWTOPIC_TEMPLATE['thread'] =  $FORUMTHREADSTYLE;
$FORUM_VIEWTOPIC_TEMPLATE['end'] =  $FORUMEND;
$FORUM_VIEWTOPIC_TEMPLATE['replies']  = $FORUMREPLYSTYLE ;
$FORUM_VIEWTOPIC_TEMPLATE['deleted'] =  $FORUMDELETEDSTYLE;



