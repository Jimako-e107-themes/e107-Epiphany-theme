<?php

if (!defined('e107_INIT')) {
    exit();
}


e107::getSingleton('theme_settings', THEME.'theme_settings.php');

e107::lan('theme');

 

    class theme implements e_theme_render
    {
        public function init()
        {
            e107::lan('theme');

            ////// Your own css fixes ////////////////////////////////////////////////////
            define("CORE_CSS", false);
            e107::css('theme', 'e107.css');

            ////// Theme meta tags /////////////////////////////////////////////////////////
            $this->set_metas();

            /////// Theme css  /////////////////////////////////////////////////////////////
            $this->register_css();

            /////// Theme js  /////////////////////////////////////////////////////////////
            $this->register_js();

            /////// Theme fonts ///////////////////////////////////////////////////////////
            $this->register_fonts();

            /////// Theme icons ///////////////////////////////////////////////////////////
            $this->register_icons();
            
            $this->getInlineCodes();
        }
            
        public function set_metas()
        {
             e107::meta("viewport", "width=device-width, initial-scale=1");
        }

        public function register_css()
        {
            e107::css('theme', 'base.css');
            e107::css('theme', 'e107.css');
        }
            
        public function register_js()
        {
             
        }
           
        public function register_fonts()
        {
            
        }
          
        public function register_icons()
        {
        }
  
        public function getInlineCodes()
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

        public function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
        {
            $text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

            return $text;
        }


        public function tablestyle($caption, $text, $mode='', $options = array())
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
                case 'main':
                
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
                case "block-footer": {
                 
                    if (!empty($caption)) {
                        echo '<h3>' . $caption . '</h3>';   
                       //  echo $caption;
                    }
                    echo $text;
                
                    break;
                }
 
                 
                default:
                    // default style
                    // only if this always work, play with different styles

                if (!empty($caption)) {
                    echo '<div class="my-4">' . $caption . '</div>';
                }
                echo $text;

                return;
            }
        }
    }
