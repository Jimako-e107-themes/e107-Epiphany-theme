<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template 
*/
 
if(class_exists('theme_settings')) {
  $link_settings = theme_settings::get_linkstyle(); 
}

 
// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = $link_settings['main']['prelink']; 
$NAVIGATION_TEMPLATE['main']['end'] = $link_settings['main']['postlink'];


// Main Link  
$NAVIGATION_TEMPLATE['main']['item'] = 
$link_settings['main']['linkstart'].'
		<a class="'.$link_settings['main']['linkclass'].'"  href="{LINK_URL}"{LINK_OPEN} title="{LINK_NAME}{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
'.$link_settings['main']['linkend'];

// Main Link  
$NAVIGATION_TEMPLATE['main']['item_active'] = 
$link_settings['main']['linkstart_hilite'].'
		<a class="'.$link_settings['main']['linkclass_hilite'].'"  href="{LINK_URL}"{LINK_OPEN} title="{LINK_NAME}{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
'.$link_settings['main']['linkend'];

// Main Link which has a sub menu. Only FIRST LEVEL 
$NAVIGATION_TEMPLATE['main']['item_submenu'] = 
$link_settings['main']['linkstart_sub'].' 
<a class="'.$link_settings['main']['linkclass_sub'].'" id="link-{LINK_ID}" '.$link_settings['main']['dropdown_on'].' data-target="#" 
title="{LINK_NAME}{LINK_DESCRIPTION}" href="{LINK_URL}" >{LINK_ICON}{LINK_NAME}</a> 
    {ALT_LINK_SUB}  
'.$link_settings['main']['linkend'];
 
// Main Link which has a sub menu - active state. Only FIRST LEVEL 
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = $link_settings['main']['linkstart_sub_hilite'].'  
<a class="'.$link_settings['main']['linkclass_sub_hilite'].'" '.$link_settings['main']['dropdown_on'].' data-target="#" href="{LINK_URL}" title="{LINK_NAME} {LINK_DESCRIPTION}">
{LINK_ICON}{LINK_NAME}'.$link_settings['main']['linkcaret'].'
</a>
{ALT_LINK_SUB}
'.$link_settings['main']['linkend'];

// Sub menu 
$NAVIGATION_TEMPLATE['main']['submenu_start'] = $link_settings['main_sub']['prelink'];
$NAVIGATION_TEMPLATE['main']['submenu_end']   = $link_settings['main_sub']['postlink'];


// Sub menu Link ONLY SECOND LEVEL
$NAVIGATION_TEMPLATE['main']['submenu_item'] = 
$link_settings['main_sub']['linkstart']
.'<a class="'.$link_settings['main_sub']['linkclass'].'" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>'.$link_settings['main_sub']['linkend'];

// Sub menu Link - active state ONLY SECOND LEVEL
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = 
$link_settings['main_sub']['linkstart_hilite']
.'<a class="'.$link_settings['main_sub']['linkclass_hilite'].'" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>'.$link_settings['main_sub']['linkend'];


// sub sub menu
$NAVIGATION_TEMPLATE['main']['submenu_lowerstart'] =  $link_settings['main_sub_sub']['prelink'];
$NAVIGATION_TEMPLATE['main']['submenu_lowerend']   = $link_settings['main_sub_sub']['postlink'];

// Sub Menu Link which has a sub menu.  ONLY THIRD LEVEL
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] = 
$link_settings['main_sub']['linkstart_sub'].'
<a class="'.$link_settings['main_sub']['linkclass_sub'].'" '.$link_settings['main']['dropdown_on'].'  href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
'.$link_settings['main_sub']['linkcaret'].'{ALT_LINK_SUB}'.$link_settings['main_sub']['linkend'];
                
// Active Sub Menu Link which has a sub menu.  ONLY THIRD LEVEL
$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = 
$link_settings['main_sub']['linkstart_sub_hilite'].'<a class="'.$link_settings['main_sub']['linkclass_sub_hilite'].'" '.$link_settings['main']['dropdown_on'].'   href="{LINK_URL}"{LINK_OPEN}>submenu_loweritem_active{LINK_ICON}{LINK_NAME}</a>
'.$link_settings['main_sub']['linkcaret'].'{ALT_LINK_SUB}'.$link_settings['main_sub']['linkend'];
                 
                
 
// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] 				= '<ul class="list-group nav nav-list"> 
														';

$NAVIGATION_TEMPLATE['side']['item'] 				= '<li class="list-group-item"><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';
$NAVIGATION_TEMPLATE['side']['item_active'] 		= '<li class="list-group-item active"{LINK_OPEN}><a href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['item_submenu'] 		= $NAVIGATION_TEMPLATE['side']['item'];
$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = $NAVIGATION_TEMPLATE['side']['item_active'] ;

$NAVIGATION_TEMPLATE['side']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['side']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['side']['submenu_item']		= '';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '';
 



$NAVIGATION_TEMPLATE['side']['submenu_end'] 		= '';


// Footer links.  - ie. 3 columns of links. version Rideblue
$NAVIGATION_TEMPLATE["footer"]["start"] 				= "<ul class='list-unstyled'>\n";
$NAVIGATION_TEMPLATE["footer"]["item"] 					= "<li><a href='{LINK_URL}'{LINK_OPEN} title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			= "<li>{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= "<li class='active'{LINK_OPEN}><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["end"] 					= "</ul>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_start"] 		= "<ul class='list-unstyled'>";
$NAVIGATION_TEMPLATE["footer"]["submenu_item"]			= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] 	= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] 	= "<li class='active'><a href='{LINK_URL}'>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] 			= "</ul>";


$NAVIGATION_TEMPLATE["footer-horizontal"]["start"] 				= "<ul class='nav justify-content-center'>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["item"] 					= "<li><a href='{LINK_URL}'{LINK_OPEN} title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["item_submenu"] 			= "<li>{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["item_active"] 			= "<li class='active'{LINK_OPEN}><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["end"] 					= "</ul>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["submenu_start"] 		= "<ul class='list-unstyled'>";
$NAVIGATION_TEMPLATE["footer-horizontal"]["submenu_item"]			= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["submenu_loweritem"] 	= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["submenu_item_active"] 	= "<li class='active'><a href='{LINK_URL}'>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-horizontal"]["submenu_end"] 			= "</ul>";

 
/* alt styling is used primary for signin template */

$NAVIGATION_TEMPLATE["alt"]["start"] = $link_settings['alt']['prelink'];
$NAVIGATION_TEMPLATE['alt']['item'] = 
$link_settings['alt']['linkstart'].'
<a class="'.$link_settings['alt']['linkclass'].'" href="{LINK_URL}"{LINK_OPEN}  title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME} </a> '
.$link_settings['alt']['linkend'] 
.$link_settings['alt']['linkdivider'];      

$NAVIGATION_TEMPLATE["alt"]["end"] = $link_settings['alt']['postlink'];

$NAVIGATION_TEMPLATE['top'] = $NAVIGATION_TEMPLATE['alt'];


$NAVIGATION_TEMPLATE['alt5'] 						= $NAVIGATION_TEMPLATE['side'];
$NAVIGATION_TEMPLATE['alt6'] 						= $NAVIGATION_TEMPLATE['side'];

 
