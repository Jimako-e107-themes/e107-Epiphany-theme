<?php

class theme_settings
{
 
    public static function get_membersonly_template()
    {
        $tmp['membersonly_start'] = '{LAYOUT_HEADER: key=default} 
          <div class="gb-full">';

        $tmp['membersonly_end'] = '
        </div>{LAYOUT_FOOTER: key=efiction}
        ';
        return $tmp;
    }

    public static function get_singleforms() {
		//$tmp['login_logo'] = '<div class="center">{LOGO: login}</div>';
		$tmp['login_logo'] = "";
        return $tmp;
	}
    
    public static function main_ul_class() {
		$main_ul_class = "";
		return $main_ul_class;
	}
 
	public static function main_li_class() {
		$main_li_class = " ";
		return $main_li_class;
	}

	public static function main_a_class() {
		$main_a_class  = "";
		return $main_a_class;
	}

	public static function main_sub_a_class() {
		$main_sub_a_class = "dropdown-item border-radius-md";
		return $main_sub_a_class;
	}

	public static function main_caret($name ='') {
		$tmp =' ';
		return $tmp;
	} 

	public static function class_submit_button($name ='') {
		$tmp ='btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0';
		return $tmp;
	}	
}
