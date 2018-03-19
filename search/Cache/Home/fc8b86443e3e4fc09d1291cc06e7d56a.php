<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>BookStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bookstore/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bookstore/Public/css/all.css">
    <script src="/bookstore/Public/jq/jquery-3.1.0.min.js"></script>
    <script src="/bookstore/Public/bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
      .word_hidden
        {

          overflow:hidden; 

          text-overflow:ellipsis;

          display:-webkit-box; 

          -webkit-box-orient:vertical;

          -webkit-line-clamp:3; 
        }
    </style>
  </head>
  <body style="margin-bottom:80px;background-color:#EFF0DC"">
 
    <nav class="navbar navbar-inverse navbar-right navbar-fixed-top" role="navigation"  style="overflow-x:hidden;">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--导航条按钮添加 -->
           <div style="padding:10px 0px 0px 0px" >
           <div class="form-group col-xs-4">
               <a href="<?php echo U('Home/Index/shudong');?>" type="button" class="glyphicon glyphicon-chevron-left" style="padding:5px;color:white"></a>
            </div>
            <div class="form-group col-xs-6" style="color:white;font-size:19px">
              树洞详情页
            </div>
            
      </div>     
            
      </div>     
    </nav>
<!-- 原留言 -->

    <div class="container" style="padding: 55px 0px 0px 0px ; overflow-x:hidden;background-color:white">
      <div class="row" >
        <div class="col-xs-3" style="margin-left:5px;margin-bottom:2px">
          <a href="#" ">
              <img src="/bookstore/Public/uploads/<?php echo ($hole['user_photo']); ?>" width="70px" height="50px">
          </a>
        </div>
        <div class="col-xs-8" style="font-size:18px;padding:7px 5px 5px 5px">
          <p><?php echo ($hole['user_name']); ?></p>
          <p style="font-size:10px;color:#727272;margin-top:-5px;"><?php echo ($hole['hole_time']); ?></p>
        </div>

      </div>
      <div class="word_hidden" style="word-wrap: break-word;font-size:16px;padding:5px;">
        
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo ($hole['hole_message']); ?>
          
      </div>       
         <?php if($vo["hole_url"] == -1): else: ?>
           <div class="col-xs-12" style="font-size:14px;padding:2px;">
          <img src="/bookstore/Public/uploads/<?php echo ($hole['hole_url']); ?>" width="100px" height="100px">
          </div><?php endif; ?>
        
        
    </div>
        
    
    <!--中间段-->
    </div><!-- container结束 -->
    <!--contaniner   middle-->
    <div style="text-align:center;">
      <label style="font-size:18px;color:#666;padding:5px 0px 0px 0px;">--留言区--</label>
    </div>
    
    <?php if(is_array($holemessage)): foreach($holemessage as $key=>$vo): ?><div class="container" style="margin-top:5px; padding:5px; overflow-x:hidden;background-color:white">
    
      <div class="row" >
        <div class="col-xs-3" style="margin-left:5px;margin-bottom:2px">
          <a href="#" >
            <!--用户头像-->
               <img src="/bookstore/Public/uploads/<?php echo ($vo["user_photo"]); ?>" width="70px" height="50px">
            </a>
        </div>
        <div class="col-xs-8" style="padding:5px;text-align:left;font-size:18px">          
          <p><?php echo ($vo["user_name"]); ?></p>
          <p style="font-size:10px;color:#727272;margin-top:-5px;"><?php echo ($vo["holemessage_time"]); ?></p>   
        </div>
      </div>
      <div  style="word-wrap:normal;font-size:18px;padding:5px">
        <?php echo ($vo["holemessage_message"]); ?>
     
      </div>
  </div><?php endforeach; endif; ?>
    <!-- 底栏 -->
    <nav class="navbar navbar-inverse  navbar-fixed-bottom" role="navigation" style=" overflow-x:hidden;">
    
        <ul class="nav navbar-nav " >
          <li class="li-style col-xs-6" style="line-height:17px; padding:0px 5px; border-right:1px solid #666;">
            <a href="<?php echo U('Home/Index/leavehole',array('hole_id'=>$hole['hole_id']));?>" class="btn btn-lg buttom">
              <span aria-hidden="true">留言</span>
            </a>
          </li>
          <li class="li-style col-xs-6">
          <!--下单网址-->
            <a href="<?php echo U('Home/Index/shudong');?>" class="btn btn-lg buttom">
              <span  aria-hidden="true">返回</span>
            </a> 
          </li>
          
     
        </ul>
</nav>
  </body>
</html>