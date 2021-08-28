<?php

if (!defined('e107_INIT')) {
    exit();
}
$sitetheme = deftrue('USERTHEME', e107::getPref('sitetheme')); 
e107::getSingleton('theme_settings', e_THEME.$sitetheme."/theme_settings.php");

e107::lan('theme');

////////////////////////////////////////////////////////////////////////////////
define("THEME_LEGACY", true); 
 
define("THEME_DISCLAIMER", 'Skin by <a href="http://artphilia.de">Artphilia Designs</a>. All rights reserved.');
 
/* LAYOUTS */
$layout = '_default';

$search_shortcode = "{SEARCH}";
$topnav_shortcode = "{SIGNIN}";

if(e107::isInstalled('efiction'))
{ 
	$search_shortcode = "{search_content}";  //temp todo use search addon, it is not parsed, it is correct for now
    $topnav_shortcode = '<span class="fa fa-power-off"></span> {adminarea} {login} {logout}</div><div id="login">{login_content}</div>';
}	

$LAYOUT['_header_'] = '
<div class="grid-wrapper container">
	<div class="gb-full">
		<div id="header">
			<div class="gb-50">
			<div align="left">'.$topnav_shortcode.'</div></div>
			<div class="gb-50">
				<div align="right">'.$search_shortcode.'</div>
			</div>
			<div id="sitename">{SITENAME}</div>
			<div id="slogan">{SITETAG}</div>
			<div id="menu">{NAVIGATION}</div>
		</div>
	</div>
	';

$LAYOUT['_footer_'] = '
	<div class="gb-full">
		{SETSTYLE=block-footer}
		{MENU=3}
		{DEFAULT_MENUAREA=3} 
	</div>

	<!-- START BLOCK : footer -->
	<div class="gb-full footer">
		<hr />
		{footer}
		<div class="copyright">{THEME_DISCLAIMER}</div>
	</div>

</div> <!-- closing content grid --> ';


$LAYOUT['index'] = '
<div class="gb-80 content">
	<div class="gb-full">
		<div class="gb-50">{WMESSAGE}</div>
		<div class="gb-50">{ALERTS}{---}{SETSTYLE=main}{MENU=4}</div>
	</div>
</div>
<div class="gb-20 sidebar">
	{SETSTYLE=block-sidebar}
	{MENU=1}
	{DEFAULT_MENUAREA=1}
	{SETSTYLE=sidebar}
	{MENU=2}
	{DEFAULT_MENUAREA=2}
</div>';

//{SETSTYLE=block-sidebar} colored menu header
//{SETSTYLE=sidebar} plain header

$LAYOUT['default'] = '
<div class="gb-80 content">
{ALERTS}{---}
</div>
<div class="gb-20 sidebar">
			{SETSTYLE=block-sidebar}
			{MENU=1}
			{DEFAULT_MENUAREA=1}
			{SETSTYLE=sidebar}
			{MENU=2}
			{DEFAULT_MENUAREA=2}
			<div align="center">{xml} {skinchange_content}</div>
	</div>
	';

$LAYOUT['efiction'] = '
<div class="gb-full">{ALERTS}{---}</div>';

////// Your own css fixes ////////////////////////////////////////////////////
define("CORE_CSS", false);
e107::css('theme', 'e107.css');

////// Theme meta tags /////////////////////////////////////////////////////////
set_metas();

/////// Theme css  /////////////////////////////////////////////////////////////
register_css();

/////// Theme js  /////////////////////////////////////////////////////////////
register_js();

/////// Theme fonts ///////////////////////////////////////////////////////////
register_fonts();

/////// Theme icons ///////////////////////////////////////////////////////////
register_icons();

getInlineCodes();

function set_metas()
{
		e107::meta("viewport", "width=device-width, initial-scale=1");
}

function register_css()
{
	//e107::css('theme', 'skin/base.css');
    e107::css('theme', 'css/main.css');
	e107::css('theme', 'skin/style.css');
    e107::css('theme', 'css/e107.css');
}
            
function register_js()
{
	e107::js('theme', 'fix.js', 'jquery'); 
}
           
function register_fonts()
{
	
}
          
function register_icons()
{
}
function getInlineCodes()
{
	$inlinecss = e107::pref('theme', 'custom_css', false);
	if ($inlinecss) {
		e107::css("inline", $inlinecss);
	}
	$inlinejs = e107::pref('theme', 'inlinejs');
	if ($inlinejs) {
		e107::js("footer-inline", $inlinejs);
	}
}

/**
 * @param string $text
 * @return string without p tags added always with bbcodes
 * note: this solves W3C validation issue and CSS style problems
 * use this carefully, mainly for custom menus, let decision on theme developers
 */

function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
{
	$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

	return $text;
}


function tablestyle($caption, $text, $mode='', $options = array())
	{
	
		$style = varset($options['setStyle'], 'default');
		
		if (e_DEBUG) {
			echo "
			<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->
			";
			echo "\n<!-- \n";

			echo json_encode($options, JSON_PRETTY_PRINT);

			echo "\n-->\n\n";
		}

		switch ($mode) {
			case 'wmessage':
			case 'wm':
				$style = 'wmessage';
			break;
			case 'login_page':
				$style = 'none';

			case "news":
					
			break;

		}

		if (e_DEBUG) {
			echo "
			<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->
			";
			echo "\n<!-- \n";

			echo json_encode($options, JSON_PRETTY_PRINT);

			echo "\n-->\n\n";
		}

		switch ($style) {
			case 'wmessage':         
				echo $text;
			break;

			case 'none':
			case 'nocaption':			
				echo $text;
			break;
			case 'main':
				if (!empty($caption)) {
					echo '<h1><span>' . $caption . '</span></h1><br>';   
					//  echo $caption;
				}
				echo $text;
				break;	

			case 'default':
				if (!empty($caption)) {
					echo '<h2 id="pagetitle">' . $caption . '</h2>';   
					//  echo $caption;
				}
				echo $text;
			break;					
				
			case "block-sidebar": {
				
				if (!empty($caption)) {
					echo '<h3><span>' . $caption . '</span></h3>';   
					//  echo $caption;
				}
				echo $text;
				echo "<br /><br />";  //fix me with margin
				break;
			}     

			case "sidebar": {
				echo '<div align="center">';
				if (!empty($caption)) {
					 echo $caption;
				}
				echo $text;
				echo "</div>";  //fix me with margin
				break;
			} 

			case "block-footer": {
				echo '<div class="gb-33">';
				if (!empty($caption)) {
					echo '<h3>' . $caption . '</h3>';   
					//  echo $caption;
				}
				echo $text;
				echo "</div>";
				break;
			}

				
			default:
				// default style
				// only if this always work, play with different styles

			if (!empty($caption)) {
				echo '<h2 id="pagetitle">' . $caption . '</h2>';
			}
			echo $text;

			return;
		}
	}