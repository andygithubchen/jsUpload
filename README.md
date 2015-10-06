### jsUpload

------

主要实现js跨域上传文件，这里的跨域目前只在两个域名所指向的服务器在同一局域网内。
当然，这两种方案都可以做同域名上传。


例如：
```
192.168.1.60    www.test.cn
192.168.1.61    www.video.cn
```

如果要在www.test.com域名下上传文件到www.video.com域名下，可以使用下面这两个方案：


**方案一(在solution1文件夹下)**
  1. 将public下的所有文件复制到www.video.cn域名下的站点根目录下
  2. 将solution1下的所有文件复制到www.test.cn域名下的站点根目录下
  3. 浏览器打开www.test.cn域名，进行上传。上传完后www.video.cn域
     名的根目录下会有个file文件,里面就有刚刚上传的文件了。

  此方案使用jquery.uploadify.js。使用这个方案时两个域名的根目录下
  都要有crossdomain.xml文件，其配置可以自行google进一步了解。


**方案二(在solution2文件夹下)**
  1. 将public下的所有文件复制到www.video.cn域名下的站点根目录下
  2. 将solution2下的所有文件复制到www.test.cn域名下的站点根目录下
  3. 浏览器打开www.test.cn域名，进行上传。上传完后www.video.cn域
     名的根目录下会有个file文件,里面就有刚刚上传的文件了。

  此方案是使用BUI这个js前端框架，上传进度的样式都可以方便的修改，
  可以到BUI官网( http://www.builive.com ) 查看手册。




