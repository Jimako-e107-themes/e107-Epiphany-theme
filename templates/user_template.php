<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/user_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

//  Bootstrap 4 v2.x Standards.


	$USER_TEMPLATE = array(); // reset the legacy template above.
	$USER_WRAPPER = array(); // reset all the legacy wrappers above.

//<div class="col-sm-6"><h6 class="mb-0">{LAN=USER_65}</h6></div><div class="col-sm-6 text-secondary">{USER_LASTVISIT}<br /><small class="padding-left">{USER_LASTVISIT_LAPSE}</small></div>
	$USER_TEMPLATE['addon']  = '<div class="col-sm-6"><h6 class="mb-0">{USER_ADDON_LABEL}</h6></div><div class="col-sm-6 text-secondary">{USER_ADDON_TEXT}</div>';

	$USER_TEMPLATE['extended']['start'] = '';
	$USER_TEMPLATE['extended']['end']   = '';

	$USER_TEMPLATE['extended']['item'] = '
    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap {EXTENDED_ID}">
    <h6 class="mb-0">{EXTENDED_NAME}:</h6><span class="text-secondary">{EXTENDED_VALUE}</span></li>';

	$USER_TEMPLATE['list']['start']  = "
		<div class='content user-list'>
		<div class='center'>{LAN=USER_56} {TOTAL_USERS} 
		<br />
        {USER_FORM_START}
        <div class='row row-cols-lg-auto g-3 align-items-center justify-content-end user-records'>
          <div class='col-auto'> 
            {LAN=SHOW}:  
          </div>
          <div class='col-auto'>
              {USER_FORM_RECORDS}
          </div>
          <div class='col-auto'>
            {LAN=USER_57}:  
          </div>
          <div class='col-auto'>
              {USER_FORM_ORDER}
          </div>
            <div class='col-auto'>
              {USER_FORM_SUBMIT}
          </div>
        </div>
        {USER_FORM_END}
		</div>
		 
		<br />
		<br />
		<table style='".USER_WIDTH."' class='table fborder e-list'>
		<thead>
		<tr>
		<th class='fcaption' style='width:2%'>&nbsp;</th>
		<th class='fcaption' style='width:20%'>{LAN=USER_58}</th>
		<th class='fcaption' style='width:20%'>{LAN=USER_60}</th>
		<th class='fcaption' style='width:20%'>{LAN=USER_59}</th>
		</tr>
		</thead>
		<tbody>
		{SETIMAGE: w=40}
	";


	$USER_TEMPLATE['list']['item']  = "
	<tr>
		<td class='forumheader3' style='width:2%'>{USER_PICTURE}</td>
		<td class='forumheader3' style='width:20%'>{USER_ID}: {USER_NAME_LINK}</td>
		<td class='forumheader3' style='width:20%'>{USER_EMAIL}</td>
		<td class='forumheader3' style='width:20%'>{USER_JOIN}</td>
	</tr>
	";

	$USER_TEMPLATE['list']['end']  = "
	</tbody>
	</table>
	</div>
	";

//<div class="col-sm-6"><h6 class="mb-0">{LAN=USER_65}</h6></div><div class="col-sm-6 text-secondary">{USER_LASTVISIT}<br /><small class="padding-left">{USER_LASTVISIT_LAPSE}</small></div>
	// View shortcode wrappers.
	$USER_WRAPPER['view']['USER_COMMENTPOSTS']      = '<div class="col-sm-6"><h6 class="mb-0">{LAN=USER_68}</h6></div><div class="col-sm-6 text-secondary">{---}';
	$USER_WRAPPER['view']['USER_COMMENTPER']        = ' ( {---}% )</div>';
//	$USER_WRAPPER['view']['USER_SIGNATURE']         = '<p class="text-muted font-size-sm">{---}</p>';
//	$USER_WRAPPER['view']['USER_RATING']            = '<div>{---}</div>';
//	$USER_WRAPPER['view']['USER_SENDPM']            = '<div>{---}</div>';
//	$USER_WRAPPER['view']['PROFILE_COMMENTS']       = '<div class="clearfix">{---}</div>';
//	$USER_WRAPPER['view']['PROFILE_COMMENT_FORM']   = '{---} </div>';

	$USER_TEMPLATE['view'] 				= '
    
	
						<div class="row userprofile mt-3">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-column align-items-center text-center">
                                            {SETIMAGE: w=110}
											{USER_PICTURE: shape=circle&rounded-circle p-1 bg-primary}
											 
											<div class="mt-3">
												<h4>{USER_NAME}</h4>
												<p class="text-secondary mb-1">{LAN=USER_58}: {USER_ID}</p>
												{USER_SIGNATURE}
												{USER_SENDPM} 
												{EFICTION_LINK=login}
											</div>
										</div>
										<hr class="my-4" />
                                            
										<ul class="list-group list-group-flush">
                                            {USER_EXTENDED_ALL}
										</ul>
									</div>
                                    
								</div>
							</div>
                                                                
							<div class="col-lg-8">
                                <div class="row mb-3">
									<div class="col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">{LAN=USER_63}</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												{USER_REALNAME}
											</div>
										</div><hr class="horizontal dark">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">{LAN=USER_02}</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												{USER_LOGINNAME}
											</div>
										</div><hr class="horizontal dark">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">{LAN=USER_60}</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												{USER_EMAIL}
											</div>
										</div><hr class="horizontal dark">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">{LAN=USER_54}</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												{USER_LEVEL}
											</div>
										</div><hr class="horizontal dark">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">{LAN=USER_59}</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												{USER_JOIN}<br /><small class="padding-left">{USER_DAYSREGGED}</small>
											</div>
										</div><hr class="horizontal dark">
											</div>
                                            <div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">{USER_UPDATE_LINK} </div>
										</div> 
								</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="card">
											<div class="card-body">
												<h5 class="d-flex align-items-center mb-3 text-gradient text-info">Activity </h5>
												    <div class="row mb-3">
            											<div class="col-sm-6">
            												<h6 class="mb-0">{LAN=USER_65}</h6>
            											</div>
            											<div class="col-sm-6 text-secondary">
            												{USER_LASTVISIT}<br /><small class="padding-left">{USER_LASTVISIT_LAPSE}</small>
            											</div>
                                                        <div class="col-sm-6">
            												<h6 class="mb-0">{LAN=USER_66}</h6>
            											</div>
            											<div class="col-sm-6 text-secondary">
            												{USER_VISITS}
            											</div>
                                                        {USER_COMMENTPOSTS}{USER_COMMENTPER} 
                                                        {USER_ADDONS}
        									        </div>
                                                    <hr class="horizontal dark">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
    
 
      
     
        
        
         
	<div class="row userprofile mt-3">
	    <div class="col ">
	         
  
          
	                <ul class="pagination d-flex justify-content-between user-view-nextprev">
	                    <li class="page-item previous">
	                       {USER_JUMP_LINK=prev}
	                    </li>
		               <li>
	                       <!-- Back to List? -->
	                    </li>
	                    <li class="page-item next">
	                       {USER_JUMP_LINK=next}
	                    </li>
	                </ul>
	             
	       
			
	          
		
		
	    </div>
	</div>
		<!-- Start Comments -->
	  {PROFILE_COMMENTS}
	  <!-- End Comments -->
	 
	';








