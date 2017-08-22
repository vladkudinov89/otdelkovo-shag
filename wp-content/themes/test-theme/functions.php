<?php
/**
 * Created by PhpStorm.
 * User: adminemz
 * Date: 19.08.2017
 * Time: 15:59
 */

function GetTemplatePath(){
     return array(
         'template' => get_template_directory_uri(),
         'home' => get_home_url()

     );
}
/*
$templateUri = get_template_directory_uri();
$homeUrl = get_home_url();*/