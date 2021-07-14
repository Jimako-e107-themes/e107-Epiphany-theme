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
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%;margin-left:auto;margin-right:auto"); }

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
 
$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "<a class='forumlink' href='{FORUM_HREF}'>{FORUM_TITLE}</a>";


// {MODERATORS} {THREADSTATUS}

// New in v2.x - requires a bootstrap theme be loaded.  

$FORUM_VIEWTOPIC_TEMPLATE['caption'] 	= "";
$FORUM_VIEWTOPIC_TEMPLATE['start'] 	= "

	<div class='row-fluid'>
		<div>{BACKLINK}</div>
	</div>

	<div class='row row-fluid'>
		<div class='col-md-9 span9 pull-left float-left'><h3>{THREADNAME}</h3></div><div class='col-md-3 span3 pull-right float-right float-end right text-right'>{TRACK} {BUTTONSX}</div>
	</div>
	
	{MESSAGE}
	
											
<ul id='forum-viewtopic' class='unstyled list-unstyled'>

";

$FORUM_VIEWTOPIC_TEMPLATE['thread'] = "
									<li id='post-{POSTID}' class='forum-viewtopic-post'>
										<div class='row d-flex justify-content-between'>

												
												<div class='col-auto left text-left'>
													{USERCOMBO} {CUSTOMTITLE}
												   {NEWFLAG}  {ANON_IP}
                                                </div>
												<div class='col-auto'><small>{THREADDATESTAMP=relative}</small></div>
												<div class='col-auto'><small>{LASTEDIT}{LASTEDITBY=link}</small></div>
												<div class='col-auto float-end'>{POSTOPTIONS}</div>
										
										</div>

										<div class='row d-flex justify-content-between'  >
                                            <div class='col-3 left text-center'>
                                                        {SETIMAGE: w=100&h=100&crop=1}{AVATAR: shape=rounded}
                                                        <small >
														{LEVEL=badge} {LEVEL=glyph}
														</small> 
									 
										    </div>
										  
											<div class='col-9  forum-thread-text '>
												{POLL}
												{THREAD_TEXT}
												{ATTACHMENTS: modal=1}
											</div>
										</div>
										
										
										<div class='row row-fluid'>
											<div class='col-xs-2 span2 finfobar'>
												&nbsp;
											</div>
											<div class='col-xs-9 span9  finfobar' >
												<small> {SIGNATURE=clean}</small>
											</div>
											
											<div class='col-xs-3 span3'>
											</div>
										</div>
										
										
									</li>

									";

$FORUM_VIEWTOPIC_TEMPLATE['end'] = "</ul>
<div class='col-xs-12'>
	<hr />
</div>
<div class='row'>
	<div class='col-xs-12 col-md-4'></div>
	<div class='col-xs-12 col-md-4 text-center'>
		{GOTOPAGES}
	</div>
	<div class='col-xs-12 col-md-4'>
		<div class='pull-right float-right float-end'>
			{BUTTONSX}
		</div>
	</div>
</div>
<div class='row'>
	<div class='col-xs-12 col-md-8 col-md-offset-2'>
		{QUICKREPLY}
	</div>
</div>
<small class='text-muted'>{MODERATORS}</small>
{THREADSTATUS}
";




$FORUM_VIEWTOPIC_TEMPLATE['replies'] = $FORUM_VIEWTOPIC_TEMPLATE['thread'];


$FORUM_VIEWTOPIC_TEMPLATE['deleted'] = "
									<li id='post-{POSTID}' class='forum-viewtopic-deleted forum-viewtopic-post'>
										<div class='hidden-xs row row-fluid btn-navbar navbar-btn'>

												{SETIMAGE: w=100&h=0&crop=0}
												<div class='col-xs-2 span2 left text-left'>
													<div class='row'>
														<div class='col-xs-12 col-md-12 forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
													</div>

												{NEWFLAG} {ANON_IP}</div>
												<div class='col-xs-4 col-sm-3 text-muted span4 text-muted muted'><small>{THREADDATESTAMP=relative}</small></div>
												<div class='col-xs-5 text-muted span5 text-muted muted right text-right'><small>{LASTEDIT}{LASTEDITBY=link}</small></div>
												<div class='col-xs-3 col-sm-2 span1 right text-right'>{POSTOPTIONS}</div>

										</div>

										<div class='row row-fluid'  >

											<div class='col-xs-12 col-md-2 span2 left'>
													<div class='row'>

													<div class='col-xs-3 col-md-12 text-center'>{AVATAR: shape=rounded}</div>
													<div class='col-xs-6 visible-xs'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
														<div class='col-xs-6 col-md-12 hidden-xs'>
															<small>
																{LEVEL=badge} {LEVEL=glyph}
															</small>
														</div>
														<div class='visible-xs col-xs-3'><div class='clearfix'>{POSTOPTIONS}</div><div class='pull-right float-right float-end'><br /><small class='text-muted'>{THREADDATESTAMP=relative}</small></div></div>
													</div>
											</div>
											<div class='visible-xs col-xs-12'><hr /></div>
											<div class='col-xs-12 col-md-9 span9 forum-thread-text '>
												{POSTDELETED}
											</div>
										</div>


										<div class='row row-fluid'>
											<div class='col-xs-2 span2 finfobar'>
												&nbsp;
											</div>
											<div class='col-xs-9 span9  finfobar' >
												<small> {SIGNATURE=clean}</small>
											</div>

											<div class='col-xs-3 span3'>
											</div>
										</div>


									</li>

									";



	
$FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'] = "<div class='forum-viewtopic-attachments'>{---}</div>";
$FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'] = "<span class='forum-viewtopic-customtitle'><small>{---}</small></span>";

$FORUM_VIEWTOPIC_WRAPPER['replies']['ATTACHMENTS'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'];
$FORUM_VIEWTOPIC_WRAPPER['replies']['CUSTOMTITLE'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'];

