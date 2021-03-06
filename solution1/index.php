<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>UploadiFive Test</title>
    <script src="jquery-1.8.1.min.js"></script>
    <script src="jquery.uploadify.js" type="text/javascript"></script>
    <link href="uploadify.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            font: 13px Arial, Helvetica, Sans-serif;
        }
    </style>
</head>

<body>
	<h1>Uploadify Demo</h1>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
                'debug':true,
                'fileExt':'*.jpg,*.mp4',
                //'fileSizeLimit':'10KB',
				'formData':{
					'timestamp':'<?php echo $timestamp;?>',
					'token'    :'<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'     :'uploadify.swf',
				'uploader':'http://www.video.cn/uploadify.php',
				'onUploadSuccess':	function(file,json,response){
                    alert(file);
				    console.log(json);
				}
			});
        });
	</script>

</body>
</html>




