<?php 
$config = array();
$config['config_status'] = 1;
//$base_url = "/";
$base_url = "http://localhost/giclouds/";


function base_url(){
	global $base_url;
	if(!empty($base_url)){
		return $base_url;
	}else{
		$base_url= "";
		return $base_url;
	}
}

//echo base_url();

?>