<?php
 

if (!defined('e107_INIT')) { exit; }

$theme_settings = array();
if(class_exists('theme_settings')) {
 $theme_settings = theme_settings::fpw_template_settings(); 
}
 
$FPW_TEMPLATE['form'] =  $theme_settings['fpw-start']. '
					 
						<p>{FPW_TEXT}</p>
						<div class="form-group">{FPW_USEREMAIL}</div>
						<div class="form-group">{FPW_CAPTCHA_IMG}{FPW_CAPTCHA_INPUT}</div>
							<div class="row">	
								<div class="col-xs-12 col-sm-4 col-sm-offset-8">
								{FPW_SUBMIT}
								</div>
							</div>		
				 
					'.$theme_settings['fpw-end'];

$FPW_TEMPLATE['header'] = $theme_settings['page_start'].'<div id="fpw-page" class="container">';
$FPW_TEMPLATE['footer'] = '</div>'.$theme_settings['page_end'];






