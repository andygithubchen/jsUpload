<?php
/**
 * Uploadify
 * Copyright (c) 2012 Reactive Apps, Ronnie Garcia
 * Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/
header('Access-Control-Allow-Origin: *');

//Define a destination
$targetFolder = './file';
@mkdir($targetFolder);

$verifyToken = md5('unique_salt'.$_POST['timestamp']);

if(!empty($_FILES) && $_POST['token'] == $verifyToken){
	$tempFile   = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	$targetFile = rtrim($targetPath,'/').'/'.$_FILES['Filedata']['name'];

	//Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png','mp4');
	$fileParts = pathinfo($_FILES['Filedata']['name']);

	if(in_array($fileParts['extension'],$fileTypes)){
	  move_uploaded_file($tempFile,$targetFile);
	  echo json_encode(array('filepath'=>$targetFile));die();
	}else{
      echo 'Invalid file type.';
	}
}
?>
