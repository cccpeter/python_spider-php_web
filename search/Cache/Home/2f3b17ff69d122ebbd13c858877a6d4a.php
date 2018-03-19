<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>吴阿贵</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/jewelry/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/jewelry/Public/css/all.css">
    <script src="/jewelry/Public/jq/jquery-3.1.0.min.js"></script>
    <script src="/jewelry/Public/bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
      .p-style{
        padding:2px 20px;
        border-bottom:1px solid #ABABAB;
      }
      .word_hidden
        {
          overflow:hidden; 
          text-overflow:ellipsis
          display:-webkit-box; 
          -webkit-box-orient:vertical;
          -webkit-line-clamp:3; 
        }
        .price_style
        {
          color:#ED6F00;
          font-size:15px;

        }
        .fsize{
          font-size: 16px;
        }
    </style>
     <script type="text/javascript">
    function sub(){
      var url="<?php echo U('Home/Index/leavemessage');?>";
      var goods_id="<?php echo ($goods_detal['goods_id']); ?>";
      var message=$('#message').val();
      $.post(url,{goods_id:goods_id,message:message},
        function(data){
          if(data=="0"){
           alert("你的网络有问题！");
          }else{
            alert("留言成功");
          }
      },
      "text");//这里返回的类型有：json,html,xml,text
    }
    </script>
  </head>
  <body style="margin-bottom:5px">
    <nav class="navbar navbar-default" role="navigation" height="20px"> 
    <div class="container"> 
         <!--    <div class="navbar-header"> 
            <a class="navbar-brand" href="#">goodsStore</a> 
        </div>-->
   <ul class="nav navbar-nav" style="padding:0 0 0 50px">
            <li class="fsize"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
            <li class="fsize"><a href="<?php echo U('Home/Search/index');?>">搜索</a></li>
            <li class="fsize"><a href="<?php echo U('Home/Index/personal');?>">我的</a></li>
        </ul>
    
        <ul class="nav navbar-nav navbar-right"> 
            <li class="fsize"><a href="<?php echo U('Home/Index/loginout');?>"><span class="glyphicon glyphicon-log-in"></span> 退出</a></li> 
        </ul> 
    </div> 
</nav>

  
  <div class="container" style="width:80%;height:25%;">        
    <div style="width:22%;float:left"">
      <img src="/jewelry/Public/images/bookstores.png"
                 alt="通用的占位符缩略图" width="230px" height="74px">
   
    </div><!--22的部分-->
    <!--索索栏目-->
       <form action="<?php echo U('Search/index');?>" method="post">
    <div style="width:78%;margin-top:20px;margin-bottom:20px;float:right;"">
      <div class="col-xs-2" style=" text-align: right; vertical-align: center; padding:6px 1px 1px 1px">
        <span >搜索商品</span>
      </div>
      <div class="col-xs-7">
        <input type="text" class="form-control" name="search" placeholder="请输入要搜索的首饰" size="10">  
      </div>
      <div class="col-xs-3">
        <button type="submit" class="btn btn-default">搜索</button>
      </div>
    </div>
  </form>
   </div><!--底部了-->

   <!--商品详情部分-->
   <div class="container" style="width:80%;margin-top:20px;margin-bottom:20px">
    <div style="width:40%;float:left">
      <img src="/jewelry/Public/uploads/<?php echo ($goods_detal['goods_url']); ?>" alt="通用的占位符缩略图" width="380px" height="330px" style=" border:1px solid #ABABAB">
    </div><!--图片显示-->

    <div style="width:60%;float:right">
      <div style="text-align:left">
        <h2 style="margin-top:2px"><?php echo ($goods_detal['goods_content']); ?></h2>
        <p style="padding:5px 0px ;">价格：
            <span style="color:#ED6F00;font-size:25px;"><?php echo ($goods_detal['goods_price']); ?>
            </span>
        </p><!--简介栏目-->

        <div class="col-xs-9" style="font-size:15px;border-top:1px dashed #ABABAB;border-bottom:1px dashed #ABABAB;line-height:30px;margin-top:10px;">
          <div class="col-xs-4">
            评论数量:
            <span style="color:#ED6F00;"><?php echo ($count); ?></span>
          </div>
        </div>

<!--         <div class="col-xs-12" style="margin-top:10px;padding:10px 0px">          付款方式：
            <div class="btn-group ">
              <button class="btn btn-default">当面交付</button>
              <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">当面交付</a>
                </li>
              </ul>
            </div>
          </div><!--付款栏目-->

        <div class="col-xs-12" style="margin-top:20px;">
          <form action="<?php echo U('Home/Index/makeorder');?>" method="get">
          <a data-toggle="modal" href='#modal-id' type="button" class="btn btn-default" role="button" style="width:120px;height:40px;margin-right:20px">
            留言
          </a> 
          <span id="demo">
          数量<select name="goods_numbers" id="goods_numbers"  style="width:155px" size=1 onchange="txt.value=options[selectedIndex].text;">
            <option value="1">1件</option>
            <option value="2">2件</option>
            <option value="3">3件</option>
            <option value="4">4件</option>
            <option value="5">5件</option>
          </select>
        </span>
          <br/><br>
          <input type="submit" value="下单" class="btn btn-primary" role="button" style="width:120px;height:40px">

          <input type="hidden" name="goods_id" value="<?php echo ($goods_detal['goods_id']); ?>">
          </form>
         <!--  <a href="<?php echo U('Home/Index/makeorder',array('goods_id'=>$goods_detal['goods_id']));?>" class="btn btn-primary" role="button" style="width:120px;height:40px">
            下单
          </a>    -->      
        </div><!--留言或者付款栏目-->
      </div>
    </div>
  </div><!--上半部分结束栏目-->
  <div class="container" style="width:80%;height:25%;margin-top:20px;margin-bottom:20px">  
    <!--22部分-->      
   <!--  <div style="width:22%;float:left"">
      <div style="border:1px solid #ABABAB;width:100%;height:100%;">
        <div class="col-xs-12" style="padding:2px 0px 0px 0px">
            <p  style="font-size:16px;background-color:#2E3161;color:white">卖家信息</p>
            <div  class="row" style="border-bottom:1px solid #ABABAB;margin-right:-2px ">
              <div class="col-xs-3" style="  border-right:1px solid #666;">
                <a href="#" >
                用户头像
                   <img src="/jewelry/Public/uploads/<?php echo ($user['user_photo']); ?>" width="100%" height="100%">
                </a>
              </div>
              <div class="col-xs-8" style="padding:0px 0px 0px 10px;font-size:16px">
                <p><?php echo ($user['user_name']); ?></p>
                <div class="word_hidden" style="font-size:14px;">
                  简介：旧书甩卖
                </div>
              </div>
        </div>
        </div>
      </div> 
    </div> --><!--22的部分-->

    <!--简介和留言栏目-->
    <div style="width:100%;margin-bottom:20px;float:right;border:1px solid #ABABAB;">
      <!--setion-->
      <div class="row clearfix">
        <div class="col-md-12 column">
          <div class="tabbable" id="tabs-373361">
            <ul class="nav nav-tabs">
              <li class="active">
                 <a href="#panel-502288" data-toggle="tab">商品简介</a>
              </li>
              <li>
                 <a href="#panel-465421" data-toggle="tab">评论</a>
              </li>
            </ul>
            <!--导入图书信息-->
            <div class="tab-content" style="margin:15px;">
              <div class="tab-pane active" id="panel-502288">
               <!-- <img src="/jewelry/Public/uploads/<?php echo ($goods_detal['goods_urls']); ?>" alt="通用的占位符缩略图" width="450px" height="330px" style=" border:1px solid #ABABAB"> -->
                <center><?php echo (htmlspecialchars_decode(stripslashes($goods_detal['goods_material']))); ?></center>
              </div><!--第一部分-->
              <!--留言信息-->
              <div class="tab-pane" id="panel-465421">
                <!--留言板块-->
                <?php if(is_array($message)): foreach($message as $key=>$vo): ?><div  class="row" style="border-bottom:1px solid #ABABAB;margin-right:-4px;margin-top: 10px;">
                  <div class="col-xs-2" style="  border-right:1px solid #666;">
                    <a href="#" >
                    <!--用户头像-->
                      <img src="/jewelry/Public/images/tx.jpg" width="80px" height="80px">
                    </a>
                  </div>
                  <div class="col-xs-9" style="padding:0px 0px 0px 10px;font-size:16px">
                    <div >
                      <span><?php echo ($vo["user_name"]); ?></span>
                      <span style="float:right;"><?php echo ($vo["message_time"]); ?></span>
                    </div>
                    <div class="word_hidden" style="font-size:14px;">
                    <?php echo ($vo["message_content"]); ?>
                    </div>
                  </div>
                </div><!--留言板块--><?php endforeach; endif; ?>
                
              </div><!--第二部分-->
            </div><!--section信息-->
          </div>
        </div>
      </div>

    </div><!--78de -->
   </div><!--底部了-->

  <!--留言弹出窗-->
  <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="padding:10px">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">留言墙</h4>
                    </div>
                    <div class="modal-body">
                      
                        <!--信息填写-->
                          <div style="text-align:center;">
                           <!--textarea 设置ID传值-->
                            <textarea rows="8" cols="40" style=" resize:none;" id="message"></textarea>
                          </div>
                          <div style="padding:0px 0px 0px 90px">
                          <!--跳转-->
                            <a onclick="sub();" type="button" class="btn btn-default" style="color:white;background:#34352C;width:80%;height:100%;">发布留言</a>
                          </div>
                    </div>
                </div>
            </div>
        </div><!--留言弹出窗-->
       

  <div class="container" style="width:80%;padding:20px 0px 0px  0px ;height:25%;border-top:2px solid #2E3161;">
    <div style="text-align:center;">
      <div  class="col-xs-4" style="border-right:1px solid #ABABAB;">
        <img src="/jewelry/Public/images/zheng.png" class="img-circle" width="70px" height="70px">
        正品保障
      </div>
      <div class="col-xs-4" style="border-right:1px solid #ABABAB;；">
        <img src="/jewelry/Public/images/gou.png" class="img-circle" width="70px" height="70px">
        放心购物
      </div>
      <div class="col-xs-4" >
        <img src="/jewelry/Public/images/mian.png" class="img-circle" width="70px" height="70px">
        当面交付
      </div>
      
    </div>
    

  </div>

  <!--底部导航栏-->
  <div style="width:100%;margin-top:20px;padding:5px 5px 0px  0px ;height:25%;border-top:2px solid #C9CABB;text-align:center;font-size:12px">
      <p>
      Copyright (C) 吴阿贵 2017, All Rights Reserved
      </p>
      <p>
        联系地址：广州市从化区温泉大道882号中山大学南方学院 邮编:510970
      </p>
    </div> 
   
  
      
  
 
 
  
  </body>
</html>