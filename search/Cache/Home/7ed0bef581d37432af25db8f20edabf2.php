<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>BookStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bookstore/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bookstore/Public/css/all.css">
    <script src="/bookstore/Public/jq/jquery-3.1.0.min.js"></script>
    <script src="/bookstore/Public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function sclick(order_id){  
      var url="<?php echo U('Index:ordercontent');?>"+"?order_id="+order_id;
      onclick=window.open(url);
    }
    </script>
  </head>
  <body style="padding-bottom:20px">
 
    <nav class="navbar navbar-inverse navbar-right navbar-fixed-top" role="navigation" style=" overflow-x:hidden;">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--导航条按钮添加 -->
          <div style="padding:10px 0px 0px 0px" style="width:100%;margin:0 0">
            <div class="form-group col-xs-4">
               <a href="<?php echo U('Index/personal');?>" type="button" class="glyphicon glyphicon-chevron-left" style="padding:5px;color:white"></a>
            </div>
            <div class="form-group col-xs-7" style="color:white;font-size:19px">
              订单列表
            </div>
      </div>     
    </nav>
    <div style="padding:30px 0px;"></div>
   <!--商品详情图片-->
   <?php if(is_array($orderlist)): foreach($orderlist as $key=>$vo): ?><div class="container-fuild" style=" overflow-x:hidden;padding:5px 0px ;" onclick="sclick('<?php echo ($vo["order_id"]); ?>')">      
      <div class="row" >
        <div class="col-xs-3">
          <a href="#" class="thumbnail">
              <img src="/bookstore/Public/uploads/<?php echo ($vo["user_photo"]); ?>" >
          </a>
        </div>
        <div class="col-xs-8" style="padding:5px;font-size:18px">
          <?php echo ($vo["user_name"]); ?>
        </div>

      </div>
     <hr  style="margin-top:-18px; height:1px;border:none;border-top:1px solid #C3C5C9;" />
      <div class="row" style="font-size:16px;line-height:28px;border-bottom:1px solid #C3C5C9;">
        <div class="col-xs-4 " style="text-align:center">
          <a href="#" >
              <img src="/bookstore/Public/uploads/<?php echo ($vo["book_urls"]); ?>"
                   alt="通用的占位符缩略图" width="100px" height="80px"> 
          </a>
        </div>
        <div class="col-xs-8" style="float:left">
           <span >
              <?php echo ($vo["book_name"]); ?> | <?php echo ($vo["book_author"]); ?>
            </span>
            <div  style="color:#ED6F00;font-size:16px">
               <?php echo ($vo["book_price"]); ?>
            </div>
            <div  style="font-size:16px">
              <span>交易日期：<?php echo ($vo["time"]); ?></span>
              <!-- <span style="color:#ED6F00;padding:padding:0px 30px">交易状态：</span> -->
            </div>
        </div>    
          
      </div>
      <hr  style="margin-top:-0px; height:1px;border:none;border-top:1px solid #C3C5C9;" />
    </div><?php endforeach; endif; ?>
    </div>




    
    

    
  </body>
</html>