<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>UploadiFive Test</title>
    <link href="/bui/css/dpl.css" rel="stylesheet">
    <link href="/bui/css/bui.css" rel="stylesheet">
    <script src="/bui/jquery-1.8.1.min.js"></script>
    <script src="/bui/sea.js"></script>
    <script src="/bui/config.js"></script>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="demo-content">
      <div class="row">
        <div class="span15">
          <div id="J_Uploader"></div>
        </div>
      </div>
    </div>

      <script type="text/javascript">
        BUI.use('bui/uploader',function (Uploader) {
            var uploader = new Uploader.Uploader({
                  render: '#J_Uploader',
                  url: 'http://www.video.cn/uploadify.php',
                  rules:{
                    ext: ['.png,.jpg,.mp4','文件类型只能为{0}'],
                    max: [5, '文件的最大个数不能超过{0}个'],
                    minSize: [10, '文件的大小不能小于{0}KB'],
                    maxSize: [102400, '文件大小不能大于{0}M']
                  },
                  data:{
                    'timestamp':'<?php echo time();?>',
                    'token'    :'<?php echo md5('unique_salt'.time());?>'
                  },
                  isSuccess:function(result){
                      if(result && result.filepath){
                        alert(result.filepath);
                      }else{
                        alert('上传出错！请重试！');
                      }
                  }
              }).render();
        });
      </script>

</body>
</html>




