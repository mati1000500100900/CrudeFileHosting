<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('ext_test') )
{
    function ext_test($ext){
		$icons=array(
			'aac','aiff','avi','bmp','c','cpp','css','csv',
			'dat','dmg','doc','docx','dotx','dwg','exe','flv',
			'gif','html','iso','java','jpg','js','less','mid',
			'mp3','mp4','mpg','pde','pdf','php','png','ppt',
			'pptx','psd','py','rar','rtf','sql','tgz','tiff',
			'txt','wav','xls','xlsx','xml','yml','zip'
		);
		$ext=strtolower($ext);
		if(in_array($ext,$icons)){
			return $ext;
		}
		else return "_blank";
    }
}