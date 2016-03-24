<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://localhost/upload/flow.php?step=cart -->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="“http://open.weibo.com/wb”"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Generator" content="慕课商城">

<meta name="Keywords" content="">
<meta name="Description" content="">

<title>慕课商城</title>

<link rel="shortcut icon" href="http://localhost/upload/favicon.ico">
<link rel="icon" href="http://localhost/upload/animated_favicon.gif" type="image/gif">
<link href="./resource/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="./resource/common.js"></script>
<script type="text/javascript" src="./resource/shopping_flow.js"></script>
</head>
<body>

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
   <script type="text/javascript" src="./resource/jquery-1.9.1.min.js"></script><script type="text/javascript" src="./resource/utils.js"></script></script>   <span class="heaHalving"> 
       
       
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
           <a href="http://localhost/upload/flow.php?step=cart#" class="wei" onmouseover="this.className=&#39;wei wei_on&#39;" onmouseout="this.className=&#39;wei&#39;">手机版
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
当前位置: <a href="http://localhost/upload/">首页</a> <code>&gt;</code> 购物流程 
</div>
</div>
<div class="blank"></div>
 
<div class="block table">
  
  
  
  <script type="text/javascript" src="./resource/showdiv.js"></script>  <script type="text/javascript">
      var user_name_empty = "请输入您的用户名！";
      var email_address_empty = "请输入您的电子邮件地址！";
      var email_address_error = "您输入的电子邮件地址格式不正确！";
      var new_password_empty = "请输入您的新密码！";
      var confirm_password_empty = "请输入您的确认密码！";
      var both_password_error = "您两次输入的密码不一致！";
      var show_div_text = "请点击更新购物车按钮";
      var show_div_exit = "关闭";
    </script>
  <div class="flowBox">
    <h6><span>商品列表</span></h6>
        <form id="formCart" name="formCart" method="post" action="http://localhost/upload/flow.php">
           <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tbody>
			<tr>
              <th bgcolor="#ffffff">商品名称</th>
              <th bgcolor="#ffffff">市场价</th>
              <th bgcolor="#ffffff">本店价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
              <th bgcolor="#ffffff">操作</th>
            </tr>       
<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=imooc","root","root123",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $pdo->query("set names utf8");
        $sql = "select p.id, p.cover, p.title, p.price, p.originalprice, c.num from shop_product p right join shop_cart c on p.id=c.productid where c.userid=?";
        $stmt = $pdo->prepare($sql);
        session_start();
        $userid = $_SESSION['memberid'];
        $stmt->execute(array($userid));
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>

<?php
    $total = 0;
    foreach($data as $product):
?>
            <tr id="tr-<?php echo $product['id'] ?>" class="products">
              <td bgcolor="#ffffff" align="center" style="width:300px;">
				<a href="" target="_blank"><img style="width:80px; height:80px;" src="<?php echo $product['cover'] ?>" border="0" title="<?php echo $product['title'] ?>"></a><br>
				<a href="" target="_blank" class="f6"><?php echo $product['title'] ?></a>
              </td>
              <td align="center" bgcolor="#ffffff">￥<?php echo $product['originalprice'] ?>元</td>
              <td align="center" bgcolor="#ffffff">￥<span id="p-<?php echo $product['id'] ?>"><?php echo $product['price'] ?></span>元</td>
              <td align="center" bgcolor="#ffffff">
                <input type="text" name="goods_number" value="<?php echo $product['num'] ?>" size="4" class="inputBg" style="text-align:center " onblur="changeNum(<?php echo $product['id'] ?>, this.value)" id="product-<?php echo $product['id'] ?>" >
               </td>
              <td align="center" bgcolor="#ffffff">￥<span id="total-<?php echo $product['id'] ?>"><?php echo $product['num']*$product['price'] ?></span>元</td>
              <td align="center" bgcolor="#ffffff">
                <a href="javascript:delPro(<?php echo $product['id'] ?>);" class="f6">删除</a>
              </td>
            </tr>
<?php
    $total += $product['price']*$product['num'];
    endforeach;
?> 
            <script type="text/javascript">
                function changeNum(productid, num){
                    //通过ajax将对应商品的数量进行修改操作
                    var url = "changeNum.php";
                    var data = {'productid':productid, 'num':num};
                    var success = function(response){
                        if(response.errno == 0){
                            var price = ($("#product-"+productid).val())*($("#p-"+productid).html());
                            $("#total-"+productid).html(price);
                        }
                    }
                    $.post(url, data, success, "json");
                }
                
                function delPro(productid){
                    //通过ajax将商品的id传递给PHP脚本进行数据表的删除
                    var url = "deleteProduct.php";
                    var data = {"productid":productid};
                    var success = function(response){
                        if(response.errno == 0){
                            $("#tr-"+productid).remove();
                        }
                    }
                    $.get(url, data, success, "json");
                }
            </script>
 
                      </tbody></table>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tbody><tr>
              <td bgcolor="#ffffff">
                            购物金额小计 ￥<?php echo $total ?>元             
              </td>
              <td align="right" bgcolor="#ffffff">
                <input type="button" value="清空购物车" class="bnt_blue_1" onclick="clearCart()">
                <script type="text/javascript">
                    function clearCart(){
                        var url = "clear.php";
                        var success = function(response){
                            if(response.errno == 0){
                                $(".products").remove();
                            }
                        }
                        $.get(url, success, 'json');
                    }
                </script>
              </td>
            </tr>
          </tbody></table>
          <input type="hidden" name="step" value="update_cart">
        </form>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
          <tbody><tr>
            <td bgcolor="#ffffff"><a href="http://localhost/upload/"><img src="./resource/continue.gif" alt="continue"></a></td>
            <td bgcolor="#ffffff" align="right"><a href="http://localhost/upload/flow.php?step=checkout"><img src="./resource/checkout.gif" alt="checkout"></a></td>
          </tr>
        </tbody></table>
       </div>
    <div class="blank"></div>
   
    <div class="blank5"></div>
  
  
  

        
        
                



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
 <div style="height:1px; width:1px; overflow:hidden;"> <a href="http://www.imooc.com/" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">IMOOC</span>&nbsp;<span style="color: #FF9966">v1.0</span></strong></a>&nbsp;<a href="" target="_blank">&nbsp;&nbsp;Licensed</a><br></div>
</div>



<div class="footer_conts">
<div id="banquan_nav">






<p class="fooCorpy">
        
 
  © 2015-2016 IMOOC.COM 版权所有，并保留所有权利。  <br> 
<a href="http://www.imooc.com/" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">IMOOC.COM</span>&nbsp;<span style="color: #FF9966">v1.0</span></strong></a>&nbsp;<a href="" target="_blank">&nbsp;&nbsp;Licensed</a><br>
    	
	


</p><div style="margin:3px auto; height:20px; text-align:center">技术支持: <a href="http://www.imooc.com/" style="color:#fff">Jason</a> </div>

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
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
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
var process_request = "正在处理您的请求...";
var username_empty = "- 用户名不能为空。";
var username_shorter = "- 用户名长度不能少于 3 个字符。";
var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
var password_empty = "- 登录密码不能为空。";
var password_shorter = "- 登录密码不能少于 6 个字符。";
var confirm_password_invalid = "- 两次输入密码不一致";
var email_empty = "- Email 为空";
var email_invalid = "- Email 不是合法的地址";
var agreement = "- 您没有接受协议";
var msn_invalid = "- msn地址不是一个有效的邮件地址";
var qq_invalid = "- QQ号码不是一个有效的号码";
var home_phone_invalid = "- 家庭电话不是一个有效号码";
var office_phone_invalid = "- 办公电话不是一个有效号码";
var mobile_phone_invalid = "- 手机号码不是一个有效号码";
var msg_un_blank = "* 用户名不能为空";
var msg_un_length = "* 用户名最长不得超过7个汉字";
var msg_un_format = "* 用户名含有非法字符";
var msg_un_registered = "* 用户名已经存在,请重新输入";
var msg_can_rg = "* 可以注册";
var msg_email_blank = "* 邮件地址不能为空";
var msg_email_registered = "* 邮箱已存在,请重新输入";
var msg_email_format = "* 邮件地址不合法";
var msg_blank = "不能为空";
var no_select_question = "- 您没有完成密码提示问题的操作";
var passwd_balnk = "- 密码中不能包含空格";
var username_exist = "用户名 %s 已经存在";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>

</body></html>