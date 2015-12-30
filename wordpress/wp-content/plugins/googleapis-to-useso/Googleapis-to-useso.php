<?php
/*
Plugin Name: Googleapis to googleapis
Plugin URI: http://hcsem/Googleapis-to-googleapis
Description: 将完美替换后台中原有的Google资源库xxx.GoogleAPIs.com到xxx.googleapis.com，速度都将会有质的提升。
Author: 黄聪
Author URI: http://hcsem/
Version: 1.0.0
Text Domain: googleapis-to-googleapis
*/

if(is_admin())
{
    function hcsem_cdn_callback($buffer) {return str_replace('googleapis.com', 'googleapis.com', $buffer);}
    function hcsem_buffer_start() {ob_start("hcsem_cdn_callback");}
    function hcsem_buffer_end() {ob_end_flush();}
    add_action('init', 'hcsem_buffer_start');
    add_action('shutdown', 'hcsem_buffer_end');
}

