<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="“http://open.weibo.com/wb”"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="imooc">

<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name="Keywords" content="慕课商城">
<meta name="Description" content="">
<title>慕课商城</title>
<link rel="shortcut icon" href="http://localhost/upload/favicon.ico">
<link rel="icon" href="http://localhost/upload/animated_favicon.gif" type="image/gif">
<link href="./resource/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./resource/common.js"></script><script type="text/javascript" src="./resource/action.js"></script>
<script type="text/javascript" src="./resource/mzp-packed-me.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body style="cursor: auto;">


<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div id="toolbar">
  <div class="heaTop w">
      <div class="f_l">
      <a href="http://localhost/upload/index.php" class="shouye">返回首页</a>
    <a href="javascript:void(0);" onclick="AddFavorite(&#39;我的网站&#39;,location.href)" class="heaTopFav">收藏本站</a>   
   <script type="text/javascript" src="./resource/jquery-1.9.1.min.js"></script>   <script type="text/javascript" src="./resource/utils.js"></script></script>   <span class="heaHalving"> 
       
       
      <a href="http://localhost/upload/flow.php">查看购物车</a>    
                    
                   
      <a href="http://localhost/upload/pick_out.php">选购中心</a>    
                    
                   
      <a href="http://localhost/upload/tag_cloud.php">标签云</a>    
                    
                   
      <a href="http://localhost/upload/quotation.php">报价单</a>    
              
       
      </span>
        </div>
        
        <div class="f_r">
         <font id="ECS_MEMBERZONE" class="f_l">
欢迎光临本店！&nbsp;&nbsp;
<span id="topLoginDiv" class="heaTopHighlight" style="display:inline-block;">
您好，欢迎您回来，<?php echo $_SESSION['username'] ?>
</span>
 </font>
         <div class="f_l">
           <p class="weixin f_l">
           <a href="http://localhost/upload/goods.php?id=8#" class="wei" onmouseover="this.className=&#39;wei wei_on&#39;" onmouseout="this.className=&#39;wei&#39;">手机版
           <img src="./resource/qrcode_for_hd.jpg"></a></p>
           
         </div>
         
        </div> 
     </div>
</div>    
<div id="head">
    <div class="hd">
            <p class="heaLogo f_l"> <a href="http://localhost/upload/index.php" target="_parent" title="ECSHOP"> 
            <img src="./resource/logo.gif" alt="ECSHOP"></a> </p>
            <div class="hd_search f_l">
                <div class="tab_search ">
                   
                    <div id="search" class="clearfix">
                      <form id="searchForm" name="searchForm" method="get" action="http://localhost/upload/search.php" onsubmit="return checkSearchForm()" class="f_r">
                       <input name="keywords" type="text" id="searchinput" value="" class="f_l searchinput">
                       <input name="imageField" type="submit" value="搜索" class="searchbtn" style="cursor:pointer; border:none">
                       </form>
                       <div class="keys f_l">
                       <script type="text/javascript">
                        
                        <!--
                        function checkSearchForm()
                        {
                            if(document.getElementById('keyword').value)
                            {
                                return true;
                            }
                            else
                            {
                                alert("请输入搜索关键词！");
                                return false;
                            }
                        }
                        -->
                        
                        </script>
                                              </div>
                       
                    </div>
                    
                </div>
            </div>    
</div>         
 
</div>
<div id="heaNav">
        <div class="bd" style="float:left; width:1210px; background:#C80A28;">
        <p class="heaNavOnly"> <a href="http://localhost/upload/index.php" style=" color:#fff">
    首页</a> </p>
        <ul class="heaNavNone">
                    <li class="heaNav" onmouseover="this.className=&#39;heaNav heaNav_on&#39;" onmouseout="this.className=&#39;heaNav&#39;"> <a style=" color:#fff" class="aaa" target="_blank" href="http://localhost/upload/category.php?id=3" title="Mac">Mac</a> </li>
                    <li class="heaNav" onmouseover="this.className=&#39;heaNav heaNav_on&#39;" onmouseout="this.className=&#39;heaNav&#39;"> <a style=" color:#fff" class="aaa" target="_blank" href="http://localhost/upload/category.php?id=5" title="Iphone">Iphone</a> </li>
                    <li class="heaNav" onmouseover="this.className=&#39;heaNav heaNav_on&#39;" onmouseout="this.className=&#39;heaNav&#39;"> <a style=" color:#fff" class="aaa" target="_blank" href="http://localhost/upload/category.php?id=6" title="Ipod">Ipod</a> </li>
                    <li class="heaNav" onmouseover="this.className=&#39;heaNav heaNav_on&#39;" onmouseout="this.className=&#39;heaNav&#39;"> <a style=" color:#fff" class="aaa" target="_blank" href="http://localhost/upload/group_buy.php" title="Ipad">Ipad</a> </li>
                    <li class="heaNav" onmouseover="this.className=&#39;heaNav heaNav_on&#39;" onmouseout="this.className=&#39;heaNav&#39;"> <a style=" color:#fff" class="aaa" target="_blank" href="http://localhost/upload/activity.php" title="Apple TV">Apple TV</a> </li>
                    <li class="heaNav" onmouseover="this.className=&#39;heaNav heaNav_on&#39;" onmouseout="this.className=&#39;heaNav&#39;"> <a style=" color:#fff" class="aaa" target="_blank" href="http://localhost/upload/snatch.php" title="iwatch">iwatch</a> </li>
                  </ul>
      </div>
  </div>
    
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href="http://localhost/upload/">首页</a> <code>&gt;</code> <a href="http://localhost/upload/category.php?id=1">手机类型</a> <code>&gt;</code> <a href="http://localhost/upload/category.php?id=3">iwatch</a> <code>&gt;</code> iwatch
</div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
 
 
    
    
  <div id="category_tree">
  <div class="tits">所有商品分类</div>
  <dl class="clearfix" style="border:none; height:auto">
   <div class="box1 cate" id="cate">
		<h1 onclick="tab(0)" style="border-top:none">
		
		 		
		<span class="f_l"><img src="./resource/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="http://localhost/upload/category.php?id=2" class="  f_l">iwatch</a>
		</h1>
		<ul style="display:none">
				</ul>
		<div style="clear:both"></div>
			<h1 onclick="tab(1)">
		
		 		
		<span class="f_l"><img src="./resource/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="http://localhost/upload/category.php?id=3" class="  f_l">AppleTV</a>
		</h1>
		<ul style="display:none">
				</ul>
		<div style="clear:both"></div>
			<h1 onclick="tab(2)">
		
		 		
		<span class="f_l"><img src="./resource/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="http://localhost/upload/category.php?id=4" class="  f_l">Iphone</a>
		</h1>
		<ul style="display:none">
				</ul>
		<div style="clear:both"></div>
			<h1 onclick="tab(3)">
		
		 		
		<span class="f_l"><img src="./resource/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="http://localhost/upload/category.php?id=5" class="  f_l">Ipad</a>
		</h1>
		<ul style="display:none">
				</ul>
		<div style="clear:both"></div>
	 
</div>
</dl>
</div>
<div class="blank"></div>
 
<script type="text/javascript">
function tab(id)
{ 
	obj_h4 = document.getElementById("cate").getElementsByTagName("h4");
	obj_ul = document.getElementById("cate").getElementsByTagName("ul");
	obj_img = document.getElementById("cate").getElementsByTagName("img");
		if(obj_ul[id].style.display == "none")
		{
			obj_ul[id].style.display = "block"
			obj_img[id].src = "themes/ecmoban_tianmao/images/btn_unfold.gif"
			return false;
		}
		else(obj_ul[id].style.display == "block")
		{
			obj_ul[id].style.display = "none"
			obj_img[id].src = "themes/ecmoban_tianmao/images/btn_fold.gif"
		}
}
</script>
    
    <div class="box" id="history_div" style="display: block;"> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id="history_list">
    <ul class="clearfix"><li class="goodsimg"><a href="./resource/resource.html" target="_blank"><img src="./resource/TB2AQuTeXXXXXXjXpXXXXXXXXXX_!!1917047079.jpg_60x60q90.jpg" alt="飞利浦9@9v" class="B_blue"></a></li><li><a href="./resource/resource.html" target="_blank" title="飞利浦9@9v">iwatch</a><br>本店售价：<font class="f1">￥2899元</font><br></li></ul><ul id="clear_history"><a onclick="clear_history()">[清空]</a></ul>  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>

<?php
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=imooc","root","root123",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$pdo->query("set names utf8");
		$sql = "select * from shop_product where id=?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($_GET['productid']));
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?> 
  
  <div class="AreaR">
   
   <div id="goodsInfo" class="clearfix">
    
     
     <div class="imgInfo">
     <a href="<?php echo $data['cover'] ?>" id="zoom1" class="MagicZoom MagicThumb" title="<?php echo $data['title'] ?>" style="position: relative; display: block; outline: 0px; text-decoration: none; width: 360px;"><img src="<?php echo $data['cover'] ?>" alt="<?php echo $data['title'] ?>" width="360px;" height="360px" id="sim625470">
     <div id="bc625470" class="MagicZoomBigImageCont" style="width: 200px; height: 269px; overflow: hidden; z-index: 100; visibility: visible; position: absolute; top: -10000px; left: 377px; display: block;"><div class="MagicZoomHeader" id="MagicZoomHeaderbc625470" style="position: relative; z-index: 10; left: 0px; top: 0px; padding: 3px;"><?php echo $data['title'] ?></div><div style="overflow: hidden;"><img src="./resource/TB20ByFeXXXXXbvXpXXXXXXXXXX_!!1917047079.jpg_60x60q90.jpg" style="position: relative; border-width: 0px; padding: 0px; left: 0px; top: -0.694444px; display: block; visibility: visible;"></div><div style="color: rgb(255, 0, 0); font-size: 10px; font-weight: bold; font-family: Tahoma; position: absolute; width: 100%; text-align: center; left: 0px; top: 249px;"></div></div><div class="MagicZoomPup" style="z-index: 10; visibility: hidden; position: absolute; opacity: 0.5; width: 98px; height: 98px; left: 209px; top: 2px;"></div></a>
     <div class="blank5"></div>
    <div style="text-align:center; position:relative; width:100%;">
               <a href="http://localhost/upload/goods.php?id=9"><img style="position: absolute; left:0;" alt="prev" src="./resource/up.gif"></a>
            <a href="javascript:;" onclick="window.open(&#39;gallery.php?id=8&#39;); return false;"><img alt="zoom" src="./resource/zoom.gif"></a>
            </div>
      
 
         <div class="blank"></div>
           
      <div class="picture" id="imglist">

        <img src="./resource/TB20ByFeXXXXXbvXpXXXXXXXXXX_!!1917047079.jpg_60x60q90.jpg" alt="<?php echo $data['title'] ?>" class="onbg"></a>

                                 
</div>
 
<script type="text/javascript">
	mypicBg();
</script>     
         
     </div>
     
     <div class="textInfo">
     <form action="" method="post" name="" id="">
	  <h1 class="clearfix"><?php echo $data['title'] ?></h1> 
 
        
	   
	  
	  <ul class="ul2 clearfix">
        <li class="clearfix" style="width:100%">
       <dd>
 
       
       <strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE">￥<?php echo $data['price'] ?>元</font> 
   
	   
	          <font class="market">￥<?php echo $data['originalprice'] ?>元</font> 
              </dd>
       </li>
      
      
      
      
             <li class="clearfix">
       <dd>
       <strong>商品货号：</strong>IMOOC<?php echo $data['id'] ?>      
       </dd>
       </li> 
                      <li class="clearfix">
       <dd>
      
                  <strong>商品库存：</strong>
          <?php echo $data['inventory'] ?> 台             
       </dd>
       </li>  
      <li class="clearfix">
       <dd>
    
      <strong>上架时间：</strong><?php echo date("Y-m-d H:i:s",$data['createtime']) ?>      
       </dd>
       </li>
              <li class="clearfix">
       <dd>
       
       <strong>商品点击数：</strong>9       </dd>
      </li>
	  </ul>
	  
         <ul class="bnt_ul">
     
      
            <li class="padd loop">
      <strong>颜色：</strong>
      <input type="radio" name="spec_185" value="231" id="spec_value_231" checked="" onclick="changePrice()">
                        白色 [ ￥0.00元] </label>
      <input type="hidden" name="spec_list" value="0">
      </li>
            
      
           <li class="clearfix">
       <dd>
       <strong>购买数量：</strong>
        <input name="number" type="text" id="number" value="1" size="4" onblur="" style="border:1px solid #ccc; "> <strong>商品总价：</strong><font id="" class="f1">￥<?php echo $data['price'] ?>元</font>
       </dd>
       </li>
      
      <li class="padd">
        <a href="javascript:addCart(<?php echo $data['id'] ?>);"><img src="./resource/goumai2.gif"></a>
      </li>
      
      <script type="text/javascript">
            function addCart(productid){
                //ajax请求php脚本完成数据的添加 shop_cart
                var url = "addCart.php";
                var data = {"productid":productid, "num":parseInt($("#number").val())};
                var success= function(response){
                    if(response.errno == 0){
                        alert('加入购物车成功');
                    }else{
                        alert('加入购物车失败');
                    }
                }
                $.post(url, data, success, "json");
            }
      </script>
     
      </ul>
      </form>
     </div>
   </div>
   <div class="blank"></div>
   
   
     <div class="box">
 
      <div style="padding:0 0px;">
        <div id="com_b" class="history clearfix">
        <h2 style="cursor: pointer;">商品描述</h2>
        <h2 class="h2bg" style="cursor: pointer;">商品属性</h2>
         <h2 class="h2bg" style="cursor: pointer;">商品标签</h2>
           <h2 class="h2bg" style="cursor: pointer;">相关商品</h2>
                </div>
      </div>    <div class="box_1">
      <div id="com_v" class="  " style="padding:6px;">
        <p align="left">Apple Watch 是苹果公司于2014年9月公布的一款智能手表，有Apple Watch、Apple Watch Sport 和Apple Watch Edition 三种风格不同的系列。Apple Watch 采用蓝宝石屏幕与Force Touch触摸技术，有多种颜色可供选择。
Apple Watch Sport 共10款：起价为2588元，最高2988元；Apple Watch 共20款，起价为4188元，最高8288元；Apple Watch Edition 共8款，起价为74800元，最高126800元。三个系列都于2015年4月10日接受预定，4月24日起正式发售。首发地区包括中国大陆、中国香港、美国、日本、英国、法国、加拿大、澳大利亚。Apple Watch 于2015年4月10日开放试戴预约。
2015年9月10日，苹果推出了多个新版本的Apple Watch，包括新增配色、爱马仕版的皮制表带，以及多种颜色的表带。</p> 

     
      </div>
     </div>
    </div>

  <div class="blank"></div>
  
   
     <div class="box">

    <div class="blank5"></div>
    <div id="ECS_COMMENT"> <div class="box">
     <div class="box_1">
      <h3><span class="text">用户评论</span>(共<font class="f1">0</font>条评论)</h3>
      <div class="boxCenterList clearfix" style="height:1%;">
       <ul class="comments">
               <li>暂时还没有任何用户评论</li>
               </ul>
       
       <div id="pagebar" class="f_r">
        <form name="selectPageForm" action="http://localhost/upload/goods.php" method="get">
                <div id="pager">
          总计 0 个记录，共 1 页。 <span> <a href="javascript:gotoPage(1,8,0)">第一页</a> <a href="javascript:;">上一页</a> <a href="javascript:;">下一页</a> <a href="javascript:;">最末页</a> </span>
                    </div>
                </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
      </div>
      
      <div class="blank5"></div>
      
      <div class="commentsList">
      <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
       <table width="710" border="0" cellspacing="5" cellpadding="0">
        <tbody><tr>
          <td width="64" align="right">用户名：</td>
          <td width="631">匿名用户</td>
        </tr>
        <tr>
          <td align="right">E-mail：</td>
          <td>
          <input type="text" name="email" id="email" maxlength="100" value="" class="inputBorder">
          </td>
        </tr>
        <tr>
          <td align="right">评价等级：</td>
          <td>
          <input name="comment_rank" type="radio" value="1" id="comment_rank1"> <img src="./resource/stars1.gif">
          <input name="comment_rank" type="radio" value="2" id="comment_rank2"> <img src="./resource/stars2.gif">
          <input name="comment_rank" type="radio" value="3" id="comment_rank3"> <img src="./resource/stars3.gif">
          <input name="comment_rank" type="radio" value="4" id="comment_rank4"> <img src="./resource/stars4.gif">
          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5"> <img src="./resource/stars5.gif">
          </td>
        </tr>
        <tr>
          <td align="right" valign="top">评论内容：</td>
          <td>
          <textarea name="content" class="inputBorder" style="height:50px; width:620px;"></textarea>
          <input type="hidden" name="cmt_type" value="0">
          <input type="hidden" name="id" value="8">
          </td>
        </tr>
        <tr>
          <td colspan="2">
                    <div style="padding-left:15px; text-align:left; float:left;">
          验证码：<input type="text" name="captcha" class="inputBorder" style="width:50px; margin-left:5px;">
          <img src="./resource/captcha.php" alt="captcha" onclick="this.src=&#39;captcha.php?&#39;+Math.random()" class="captcha">
          </div>
                         <input name="" type="submit" value="评论咨询" class="f_r bnt_blue_1" style=" margin-right:8px;">
          </td>
        </tr>
      </tbody></table>
      </form>
      </div>
      
      </div>
     </div>
    </div>
    <div class="blank5"></div>
  
</div>
  </div>
  
</div>
<div class="helpTitBg">
<div class="helpTitBg_left">
              <dl class="fooLink">
      <dt><a href="http://localhost/upload/article_cat.php?id=5" title="新手上路 ">新手上路 </a></dt>
            <dd><a href="http://localhost/upload/article.php?id=9" title="售后流程">售后流程</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=10" title="购物流程">购物流程</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=11" title="订购方式">订购方式</a></dd>
          </dl>
        <dl class="fooLink">
      <dt><a href="http://localhost/upload/article_cat.php?id=6" title="手机常识 ">手机常识 </a></dt>
            <dd><a href="http://localhost/upload/article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></dd>
          </dl>
        <dl class="fooLink">
      <dt><a href="http://localhost/upload/article_cat.php?id=7" title="配送与支付 ">配送与支付 </a></dt>
            <dd><a href="http://localhost/upload/article.php?id=15" title="货到付款区域">货到付款区域</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=17" title="支付方式说明">支付方式说明</a></dd>
          </dl>
        <dl class="fooLink">
      <dt><a href="http://localhost/upload/article_cat.php?id=10" title="会员中心">会员中心</a></dt>
            <dd><a href="http://localhost/upload/article.php?id=18" title="资金管理">资金管理</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=19" title="我的收藏">我的收藏</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=20" title="我的订单">我的订单</a></dd>
          </dl>
        <dl class="fooLink">
      <dt><a href="http://localhost/upload/article_cat.php?id=8" title="服务保证 ">服务保证 </a></dt>
            <dd><a href="http://localhost/upload/article.php?id=21" title="退换货原则">退换货原则</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=22" title="售后服务保证 ">售后服务保证</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=23" title="产品质量保证 ">产品质量保证</a></dd>
          </dl>
        <dl class="fooLink">
      <dt><a href="http://localhost/upload/article_cat.php?id=9" title="联系我们 ">联系我们 </a></dt>
            <dd><a href="http://localhost/upload/article.php?id=24" title="网站故障报告">网站故障报告</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=25" title="选机咨询 ">选机咨询</a></dd>
            <dd><a href="http://localhost/upload/article.php?id=26" title="投诉与建议 ">投诉与建议</a></dd>
          </dl>
            
    </div>
    
    <div class="helpTitBg_right">
       <p>手机天猫</p>
       <div class="shouji_t"><img src="./resource/shouji_t.jpg" width="105" height="105"></div>
    </div>
</div>
<div id="footer" style="background:none;"> 
 <div style="height:1px; width:1px; overflow:hidden;"> <a href="" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">imooc</span>&nbsp;<span style="color: #FF9966">v1.0</span></strong></a>&nbsp;<a href="" target="_blank">&nbsp;&nbsp;Licensed</a><br></div>
</div>
<div class="footer_conts">
<div id="banquan_nav">

<p class="fooCorpy">
        
 
  © 2015-2016 IMOOC.COM 版权所有，并保留所有权利。  <br> 
<a href="http://www.imooc.com/" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">IMOOC.COM</span>&nbsp;<span style="color: #FF9966">v1.0</span></strong></a>&nbsp;<a href="" target="_blank">&nbsp;&nbsp;Licensed</a><br>
    	
	
</p><div style="margin:3px auto; height:20px; text-align:center">技术支持: <a href="http://www.imooc.com/" style="color:#fff">Jason</a> </div>
<div align="center"></div>
</div>
</div>
<div id="div_leftfloat"> 
    <a href="javascript:closeLeftFloat();" class="float_1"></a>
    <a href="javascript:void(0);" class="float_2"></a>
    
  </div>
<script type="text/javascript">
     function closeLeftFloat()
     {
        $("#div_leftfloat").css("display","none");
     }
  </script>
  
<link href="./resource/qq.css" rel="stylesheet" type="text/css">
<div class="QQbox" id="divQQbox" style="width: 170px; top: 124.5px;">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
  
                                                                                  
  
	         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="./resource/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">

function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
 

<script type="text/javascript">
var goods_id = 8;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 8;
var now_time = 1450550616;

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</body></html>