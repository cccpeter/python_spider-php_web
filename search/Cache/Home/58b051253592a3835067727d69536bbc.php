<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>BookStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bookstore/Public/css/all.css">
    <link rel="stylesheet" href="/bookstore/Public/css/bootstrap.min.css">

    <style type="text/css">
      .wrapper {  display:inline-block; background-image: url("/bookstore/Public/images/upload.jpg"); height:50px; width:50px; overflow:hidden; cursor:pointer;float: left;}
      .wrapper input{ opacity: 0; height:50px; width:50px;}
      .photo_info{float: right;}
    </style>
     <script type="text/javascript">
        function sub(){  
          

        var bookname=$('#bookname').val();
        var auth=$('#auth').val();
        var price=$('#price').val();
        var old=$('#old').val();
        var content=$('#content').val();
        var booknumber=$('#booknumber').val();
        var isname=$('#isname').val();
        var photo_info=$('#info_photo').val();

        if(bookname==''){
          alert('书名不能为空');
          }else{
            if(auth==''){
            alert('作者不能为空');
            }else{
              if(price==''){
              alert('价格不能为空');
              }else{
                if(old==''){
                alert('书的新旧不能为空');
                }else{
                  if(content==''){
                  alert('简介不能为空');
                  }else{
                    if(booknumber==''){
                    alert('数量不能为空');
                    }else{
                        if(photo_info==''){
                           alert('请上传一张图片');
                        }else{
                          indexurl="<?php echo U('Home/Index/index');?>";
                          alert("商品发布成功");
                          document.getElementById("form1").submit();
                        }
                    }
                  }
                }
              }
            }
      }           
        
    }
    </script>
  </head>
  <body style="margin-bottom:80px;">
  <nav class="navbar navbar-inverse navbar-right navbar-fixed-top" role="navigation"  style="overflow-x:hidden">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--导航条按钮添加 -->
           <div style="padding:10px 0px 0px 0px" style="width:100%;margin:0 0">
           <div class="form-group col-xs-8" style="color:white;font-size:19px; text-align: right; ">
              上传课本
            </div>
            
      </div>     
      </div>     
    </nav>
  <div class="container" style="overflow-x:hidden" >
      <form id="form1" method="post" action="<?php echo U('Home/Index/addgoods');?>" enctype="multipart/form-data">
      <div class="row border_btm" style="font-size:18px;padding:70px 0px 0px 0px;">
        <div class="col-xs-3" >
          书名
        </div>
        <div class="col-xs-9" >
          <input type="text" class="form-control" id="bookname" name="bookname" placeholder="请输入" size="16">
          </div>
        </div>
        <div class="row border_btm" style="font-size:18px;padding:10px 0px">
        <div class="col-xs-3" >
          作者
        </div>
        <div class="col-xs-9" >
          <input type="text" class="form-control" id="auth" name="auth" placeholder="请输入" size="16">
          </div>
        </div>
        <div class="row border_btm" style="font-size:18px;padding:10px 0px">
        <div class="col-xs-3" >
          价格
        </div>
        <div class="col-xs-9" >
          <input type="text" class="form-control" id="price" name="price" placeholder="请输入" size="16">
          </div>
        </div>
        <div class="row border_btm" style="font-size:18px;padding:10px 0px">
        <div class="col-xs-3" >
          几成新
        </div>
        <div class="col-xs-9" >
          <input type="text" class="form-control" id="old" name="old" placeholder="请输入" size="16">
          </div>
        </div>
        <div class="row " style="font-size:18px;padding:10px 0px">
          <div class="col-xs-3" >
            简介
          </div>
          <div class="col-xs-9" style=" float:left;">
            <!--textarea 设置ID传值-->
            <textarea rows="5" cols="20" id="content" name="content" style=" resize:none;"></textarea>
          </div>
        </div>
        <div class="row border_btm" style="font-size:18px;padding:10px 0px">
        <div class="col-xs-3" >
          数量
        </div>
        <div class="col-xs-9" >
          <input type="text" class="form-control" id="booknumber" name="booknumber" placeholder="请输入" size="16">
          </div>
        </div>
      <div class="col-xs-6" >
        <select name="type_id" id="type_id"  style="width:155px">
            <?php if(is_array($type)): foreach($type as $key=>$vo): ?><option value="<?php echo ($vo["type_id"]); ?>"><?php echo ($vo["type_name"]); ?></option><?php endforeach; endif; ?>
          </select>
      </div>
      <div class="col-xs-6" style="text-align:right">
        <input type="checkbox" name="isname" id="isname" value="1"> 是否匿名 
      </div>
        

        <!-- 上传图片 -->
        <!-- <div> -->
        
          <a href="javascript:" class="wrapper"><input name="info_photo" type="file" value="" name="info_photo" id="info_photo" onchange='PreviewImage(this)' width="50px" height="50px" /></a>
          <!-- <input name="upload" type="submit" value="上传" /> -->
        <!-- </div> -->
        <div id="photo_info" class="photo_info"></div>

        <div class="col-xs-12" style="text-align: center; ">
                          <!--跳转-->
           <input type="button" class="button" class="btn btn-default" value="提交" style="padding:5px;color:white;background:#34352C;width:90%;height:100%;"  onclick="sub();">
        </div>
        </form>
    </div>
      

    <!-- 底栏 -->
    <nav class="navbar navbar-inverse  navbar-fixed-bottom" role="navigation" style="width:100%; margin:0 0" >
    
        <ul class="nav navbar-nav " >
          <li class="li-style col-xs-3">
            <a href="<?php echo U('/home/Index/index');?>" class="btn btn-lg buttom">
              <span class="glyphicon glyphicon-home " aria-hidden="true"></span>
            </a>
          </li>
          <li class="li-style ">
            <a href="<?php echo U('/home/Index/shudong');?>" class="btn btn-lg buttom">
              <span class="glyphicon glyphicon-comment " aria-hidden="true"></span>
            </a> 
          </li>
          <input type="hidden" name="hid" value="<?php echo ($name); ?>">
          <li class="active li-style col-xs-3 ">
            <a href="<?php echo U('/home/Index/addgoods');?>" class="btn btn-lg buttom">
              <span class="glyphicon glyphicon-plus " aria-hidden="true"></span>
            </a>
          </li> 
          <li class="li-style  ">
            <a href="<?php echo U('/home/Index/message');?>" class="btn btn-lg buttom">
              <span class="glyphicon glyphicon-envelope " aria-hidden="true"></span>
            </a> 
          </li>
          <li class="li-style  col-xs-2">
            <a href="<?php echo U('/home/Index/personal');?>" class="btn btn-lg buttom">
              <span class="glyphicon glyphicon-user " aria-hidden="true"></span>
            </a> 
          </li>
     
        </ul>
</nav>
</div>
    <script type="text/javascript" src="/bookstore/Public/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/bookstore/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function PreviewImage(imgFile) {
      var filextension = imgFile.value.substring(imgFile.value
        .lastIndexOf("."), imgFile.value.length);
      filextension = filextension.toLowerCase();
      if ((filextension != '.jpg') && (filextension != '.gif')
        && (filextension != '.jpeg') && (filextension != '.png')
        && (filextension != '.bmp')) {
       alert("对不起，系统仅支持标准格式的照片，请您调整格式后重新上传，谢谢 !");
       imgFile.focus();
      } else {
       var path;
       if (document.all)//IE
       {
        imgFile.select();
        path = document.selection.createRange().text;
        document.getElementById("photo_info").innerHTML = "";
        document.getElementById("photo_info").style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='scale',src=\""
          + path + "\")";//使用滤镜效果  
       } else//FF
       {
        path = window.URL.createObjectURL(imgFile.files[0]);// FF 7.0以上
        //path = imgFile.files[0].getAsDataURL();// FF 3.0
        document.getElementById("photo_info").innerHTML = "<img id='img1' width='120px' height='100px' src='"+path+"'/>";
        //document.getElementById("img1").src = path;
       }
      }
     }
    </script>
  </body>
</html>