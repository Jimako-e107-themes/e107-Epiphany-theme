<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes.
 *
*/


$sitetheme = deftrue('USERTHEME', e107::getPref('sitetheme'));

require_once(e_THEME.$sitetheme."/shortcodes/default_shortcodes.php");

class theme_shortcodes extends default_theme_shortcodes
{
 
	public function sc_footer()
    {
       if (e_PAGE=="menus.php") {
			$parm['type'] = 'footer'; 
			$parm['key'] = 'default';
 
		    if(THEME_LAYOUT == 'home') $parm['key'] = 'default';
			if(THEME_LAYOUT == 'index') $parm['key'] = 'efiction';
			
            $text = $this->sc_html_fragment($parm);
		 
            return $text;
        } else {
            return "";
        }
    }
    
    
}
