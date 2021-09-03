<?php /* Smarty version 2.6.25, created on 2019-12-26 16:21:25
         compiled from ffsm/ffqm_order.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>为宝宝起一个好名字-为宝宝一生助力-鑫旺网在线起名</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="statics/ffsm/ffqm/wap.min-v=0817.css" rel="stylesheet" type="text/css"/>
<link href="statics/ffsm/ffqm/index.css" rel="stylesheet" type="text/css"/>
<link href="statics/ffsm/ffqm/style.min.css" rel="stylesheet" type="text/css"/>
<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="statics/ffsm/public/js/require/require.min.js" data-main="/statics/ffsm/public/js/common.min.js?v=0817"></script>
</head>
<body>
<header class="public_header J_testFixedShow">
<h1 class="public_h_con">宝宝起名</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner" id="submit2">
	<img src="statics/ffsm/ffqm/images/pay01.png" alt="宝宝起名">
</div>
<div style="background-color: #ffe7e8;">
<div style="padding:10px;">
        <div class="user_info">
            <p class="u_title">
                宝宝信息
            </p>
            <ul class="u_content">
                <li>

                    <span>宝宝姓氏</span>
                    <span><?php echo $this->_tpl_vars['names']['username']; ?>
</span>
                </li>
                <li>
                    <span>出生日期</span>
                    <span><?php echo $this->_tpl_vars['names']['y']; ?>
年<?php echo $this->_tpl_vars['names']['m']; ?>
月<?php echo $this->_tpl_vars['names']['d']; ?>
日<?php if ($this->_tpl_vars['names']['h'] >= 0): ?><?php echo $this->_tpl_vars['names']['h']; ?>
<?php else: ?>未知<?php endif; ?>时</span>
                </li>
                <li>
                    <span>性别</span>
                    <span><?php if ($this->_tpl_vars['names']['gender'] == 1): ?>男<?php elseif ($this->_tpl_vars['names']['gender'] == 2): ?>未知<?php else: ?>女<?php endif; ?></span>
                </li>
            </ul>
        </div>
    </div>
<div class="container pay" style="padding-bottom:0px;">
    <div class="price">
      <p class="tit1 tcenter">支付方式</p>
      <div class="clearfix inner">
        <ul class="pay-type">
          <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 1 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
          <a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=1"><li class="on" id="wx_zf">
            <span class="pay-icon icon-wechat"></span>
            <span>微信支付</span>
            <span class="gopaywx">立即支付</span>
          </li></a>
            <?php endif; ?>
          <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 2 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
              <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=2"><li id="zfb_zf">
            <span class="pay-icon icon-zfb"></span>
            <span>支付宝支付</span>
            <span class="gopayzfb">立即支付</span>
          </li></a>
            <?php endif; ?>
		<?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 4): ?>
 			 <a class="weixin" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=wxpay"><li class="on" id="wx_zf">
            <span class="pay-icon icon-wechat"></span>
            <span>微信支付</span>
            <em class="ico-arrow"></em>
          </li></a>
              <a class="alipay" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=alipay"><li id="zfb_zf">
            <span class="pay-icon icon-zfb"></span>
            <span>支付宝支付</span>
            <em class="ico-arrow"></em>
          </li></a>
		<?php endif; ?>
        </ul>
      </div>
    </div>
  <div class="wrap">
    <div class="price">
      <p class="tit1">测算项目：起名项目</p>
      <div class="clearfix inner">
        <div class="fl">
          <span class="yh">限时优惠￥<?php echo $this->_tpl_vars['money']; ?>
元</span>
          <s class="gray">原价：￥118.00</s></div>
        <div class="fr">
          <p>距优惠结束</p>
          <p class="red">
            <span class="h" id="hour_show">00：</span>
            <span class="f" id="minute_show">57：</span>
            <span class="m" id="second_show">42</span></p>
        </div>
      </div>
    </div>
<div class="know_img">
	<img src="statics/ffsm/ffqm/images/dajiming.png" alt="宝宝起名">
</div> 
</div>
<div class="ainuo_foot_nav cl" id="testFixedBtn" style="display: none;">
    <ul>
     <li><a href="/"><i class="shouye_1"></i><p>测算首页</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>订单查询</p></a></li>
     <li><a href="javascript:;" id="publicPayBottom" class="botpost"><em><i class="lijijs_1"></i></em><p>付费解锁</p></a></li>
     <li><a href="/"><i class="gengduo_1"></i><p>更多测算</p></a></li>
     <li><a href="/?ac=member"><i class="grzx_1"></i><p>个人中心</p></a></li>
    </ul>
</div>
<style type="text/css">
.ainuo_foot_nav{display: block; padding: 2px 0; background:#d13036; position: fixed; bottom: 0; width: 100%; z-index: 99999;max-width: 640px;}
.ainuo_foot_nav li{width: 20%; text-align: center; float: left;}
.ainuo_foot_nav li a{width: 100%; display: block;}
.ainuo_foot_nav .foothover i{color: #f13030;}
.ainuo_foot_nav li i{display: block; line-height: 25px; height: 25px; margin: auto; padding: 0; width: 25px; overflow: hidden; background-size: 100%;}
.ainuo_foot_nav li a.botpost{position: relative; margin-top: -11px; background-color: rgba(0,0,0,0.0);}
.ainuo_foot_nav li a.botpost em{background: #ffffff; padding: 2px; border: 1px solid #ff5e5e; display: block; border-radius: 50%; width: 30px; height: 30px; margin: 0 auto; margin-bottom: 2px;padding-bottom: 0px;}
.ainuo_foot_nav li p{overflow: hidden; font-size: 12px; height: 16px; line-height: 16px; color: #fff; font-weight: 400;}
.shouye_1{background: url(/statics/ffsm/public/images/shouye.png) no-repeat;}
.wddd_1{background: url(/statics/ffsm/public/images/dingdan.png) no-repeat;}
.lijijs_1{background: url(/statics/ffsm/public/images/jiesuo.png) no-repeat;}
.gengduo_1{background: url(/statics/ffsm/public/images/gengduo.png) no-repeat;}
.grzx_1{background: url(/statics/ffsm/public/images/grzx.png) no-repeat;}
</style>
<!--<footer style="padding: 15px 0px;">
    <p class="p4" style="font-size:.24rem;color:white!important;">大师团队倾力打造，
      <a href="/" style="text-decoration: underline;color:#ffe6a7">查看大师团队简介</a></p>
    <p class="p4" style="font-size:.24rem;color:white!important;margin-bottom:.1rem">如需帮助点此
      <a style="color:#e9d39a;text-decoration: underline;" href="/">联系专属售后客服</a></p>
  </footer>-->
</div>
<div class="public_pay_popup" id="publicPayPopup">
	<div class="public_pp_box">
		<div class="public_pp_close" id="publicPPClose">
			X
		</div>
		<div class="public_pp_tit">
			解锁查看所有测算结果
		</div>
		<div class="public_pp_price">
			<span>统一鉴定价：</span><strong>￥<?php echo $this->_tpl_vars['money']; ?>
元</strong>
		</div>
		<div class="public_pay_box">
			<?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 1 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
			<a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=1">微信安全支付</a>
          <?php endif; ?>
             <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 2 || $this->_tpl_vars['sys_pay_type'] == 3): ?>
            <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=2">支付宝安全支付</a>
          <?php endif; ?>
            <?php if ($this->_tpl_vars['sys_pay_type'] == 0 || $this->_tpl_vars['sys_pay_type'] == 4): ?>
          <a class="weixin" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=wxpay">微信支付</a>
          <a class="alipay" target="_self" href="/?ct=pay&ac=pay_go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=alipay">支付宝支付</a>
              <?php endif; ?>
		</div>
	</div>
</div>
<script>
    //测算底部悬浮
    (function(){
    	var topShow=$(".J_testFixedShow");
    	if(topShow.length){
            var topShow=topShow.offset().top;
    		var testBtn=$("#testFixedBtn");
    		$(window).scroll(function(){
                var wt=$(window).scrollTop();
                wt>topShow?(testBtn.fadeIn(),$('.public_footer_servers').css('padding-bottom','50px')):(testBtn.fadeOut(),$('.public_footer_servers').css('padding-bottom','20px'));
            });
            testBtn.add('.J_testScrollTop').on('click',function(){$('html,body').scrollTop(topNum)})
    	}
    })()
    //弹出支付功能
    ;(function($){
        $.fn.publicPopup=function(opt){
            var pp=$('#publicPayPopup');
            var ppClose=$('#publicPPClose');
            return this.each(function(){
                var $this=$(this);
                $(window).scroll(function(){
                    var wt=$(window).scrollTop();
                    wt>topShow?$this.fadeIn():$this.fadeOut();
                });
                $this.on('click',function(){
                    pp.show();
                });
                ppClose.on('click',function(){
                    pp.hide();
                })
                ppShow?ppShow.on('click',function(){pp.show()}):'';
            });
        };
    })(jQuery);
    $("#publicPayBottom").publicPopup();
</script>
<script type="text/javascript">
var intDiff = parseInt(5734);//倒計時總秒數量
function timer(intDiff){
	window.setInterval(function(){
	var day=0,
		hour=0,
		minute=0,
		second=0;//時間默認值		
	if(intDiff > 0){
		day = Math.floor(intDiff / (60 * 60 * 24));
		hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
		minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
		second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
	}
	if (minute <= 9) minute = '0' + minute;
	if (second <= 9) second = '0' + second;
	$('#day_show').html(day+"天");
	$('#hour_show').html('<s id="h"></s>'+hour+'小時');
	$('#minute_show').html('<s></s>'+minute+'分');
	$('#second_show').html('<s></s>'+second+'秒');
	intDiff--;
	}, 1000);
} 

$(function(){
	timer(intDiff);
});	
  //支付后检测跳转
  <?php if ($this->_tpl_vars['yz_pay'] == 1): ?>
       var inquiry_lock = 0;
    $(function () {
        setInterval(function () {
            inquiry(); 
        }, 1000);
    });
    function inquiry() {
        if (inquiry_lock) {
            return;
        }
        $.get('/?ct=pay&ac=scanquery&oid=<?php echo $this->_tpl_vars['oid']; ?>
', {t: Date.parse(new Date())}, function (data) {
            if (data.status) {
                inquiry = 1;
                $('div.weixin .green').html('支付成功');
                window.location = data.url;
            }
        }, 'json');
    }
  <?php endif; ?>
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/dl_ck.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>