<!DOCTYPE html">
<html lang="zh-cn">
<head>
<base href="http://xjd.local/" />
<meta name="Generator" content="68ECSHOP v4_2" />
<meta property="qc:admins" content="377512662466053307063757" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<link rel="stylesheet" href="themes/68ecshopcom_360buy/css/index.css" />
<link rel="stylesheet" type="text/css" href="themes/68ecshopcom_360buy/css/68ecshop_commin.css" />
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jquery-lazyload.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jqueryAll.index.min.js"></script>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/jump.js"></script>
<script type="text/javascript">
$(function(){
	 $(".brand-wall-content img").each(function(k,img){
		new JumpObj(img,10);
	});
});
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>

<body>
	<div id="site-nav">
		<?php echo $this->fetch('library/page_headerindex.lbi'); ?>
		<div class="home-focus-layout">
			<?php echo $this->fetch('library/index_ad3.lbi'); ?>
			<div class="right-sidebar">
				<?php echo $this->fetch('library/order_type.lbi'); ?>
				<div class="proclamation">
					<ul class="tabs-nav">
						<li class="tabs-selected">
							<h3>招商入驻</h3>
						</li>
						<li class="">
							<h3>商城公告</h3>
						</li>
					</ul>
					<div class="tabs-panel">
						<a href="apply_index.php" title="申请商家入驻；已提交申请，可查看当前审核状态。" class="store-join-btn" target="_blank"> </a>
						<a href="supplier" target="_blank" class="store-join-help">
							<i class="icon-cog"></i>
							登录商家管理中心
						</a>
					</div>
					
					<?php $this->assign('articles',$this->_var['articles_19']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_19']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
					
				</div>
			</div>
		</div>
		<script type="text/javascript">
	   	function fun(type_id, no_have_val)
	   	{
	  	no_have = (typeof(no_have_val) == "undefined" ? 0 : no_have_val)
	 	 Ajax.call('user.php?act=user_bonus', 'id=' + type_id + '&no_have=' + no_have, collectResponse, 'GET', 'JSON');
		}
		function collectResponse(result)
		{
			alert(result.message);	
		}
	    </script>
		<?php $_from = $this->_var['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'row_0_77377300_1458225828');if (count($_from)):
    foreach ($_from AS $this->_var['row_0_77377300_1458225828']):
?>
		<?php if ($this->_var['row_0_77377300_1458225828']['send_start_date'] < $this->_var['time'] && $this->_var['row_0_77377300_1458225828']['send_end_date'] > $this->_var['time']): ?>

		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php echo $this->fetch('library/index_ad_group.lbi'); ?>
		<div class="blank5"></div>
<!--		<div class="fp-brand-rec main-container" id="J_FpBrandRec">
			<a class="brand-title" href="stores.php">热门品牌</a>
			<div class="brand-content clearfix">
				<div class="module">
					<div class="brand-first">
						&lt;!&ndash; TemplateBeginEditable name="首页店铺展示左侧广告" &ndash;&gt;
						&lt;!&ndash; #BeginLibraryItem "/library/ad_position.lbi" &ndash;&gt;
						<?php 
$k = array (
  'name' => 'ads',
  'id' => $this->_var['ads_id'],
  'num' => $this->_var['ads_num'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
						&lt;!&ndash; #EndLibraryItem &ndash;&gt;
						&lt;!&ndash; TemplateEndEditable &ndash;&gt;
					</div>
				</div>
				<div id="J_indexstore"><?php 
$k = array (
  'name' => 'supplier_list',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
				<div class="module">
					<div class="brand-today-b">
						&lt;!&ndash; TemplateBeginEditable name="首页店铺展示右侧广告" &ndash;&gt;
						&lt;!&ndash; #BeginLibraryItem "/library/ad_position.lbi" &ndash;&gt;
						<?php 
$k = array (
  'name' => 'ads',
  'id' => $this->_var['ads_id'],
  'num' => $this->_var['ads_num'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
						&lt;!&ndash; #EndLibraryItem &ndash;&gt;
						&lt;!&ndash; TemplateEndEditable &ndash;&gt;
					</div>
				</div>
			</div>
		</div>-->
		<!--<div class="blank5"></div>
		<div class="home-sale-layout wrapper">
			<div class="left-layout">
				&lt;!&ndash; #BeginLibraryItem "/library/stores_tab.lbi" &ndash;&gt;
				&lt;!&ndash; #EndLibraryItem &ndash;&gt;
				<div class="tabs-panel sale-goods-list tabs-hide">
					<ul>
						&lt;!&ndash;<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>&ndash;&gt;
						&lt;!&ndash;<?php if ($this->_foreach['index_goods']['iteration'] < 6): ?>&ndash;&gt;
						<li>
							<dl>
								<dt class="goods-name">
									<a target="_blank" href="pro_goods.php?id=<?php echo $this->_var['goods']['id']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_style_name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a>
								</dt>
								<dd class="goods-thumb">
									<a target="_blank" href="pro_goods.php?id=<?php echo $this->_var['goods']['id']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_style_name']); ?>">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_style_name']); ?>">
									</a>
								</dd>
								<dd class="goods-price">
									商城价：
									<em>
										&lt;!&ndash; <?php if ($this->_var['goods']['promote_price'] != ""): ?> &ndash;&gt;
										<?php echo $this->_var['goods']['promote_price']; ?>
										&lt;!&ndash; <?php else: ?>&ndash;&gt;
										<?php echo $this->_var['goods']['shop_price']; ?>
										&lt;!&ndash;<?php endif; ?>&ndash;&gt;
									</em>
								</dd>
							</dl>
						</li>
						&lt;!&ndash;<?php endif; ?>&ndash;&gt;
						&lt;!&ndash;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&ndash;&gt;
					</ul>
				</div>
				<div class="tabs-panel sale-goods-list tabs-hide">
					<ul>
						&lt;!&ndash; <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>&ndash;&gt;
						&lt;!&ndash;<?php if ($this->_foreach['index_goods']['iteration'] < 6): ?>&ndash;&gt;
						<li>
							<dl>
								<dt class="goods-name">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
								</dt>
								<dd class="goods-thumb">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
									</a>
								</dd>
								<dd class="goods-price">
									商城价：
									<em>
										&lt;!&ndash; <?php if ($this->_var['goods']['promote_price'] != ""): ?> &ndash;&gt;
										<?php echo $this->_var['goods']['promote_price']; ?>
										&lt;!&ndash; <?php else: ?>&ndash;&gt;
										<?php echo $this->_var['goods']['shop_price']; ?>
										&lt;!&ndash;<?php endif; ?>&ndash;&gt;
									</em>
								</dd>
							</dl>
						</li>
						&lt;!&ndash;<?php endif; ?>&ndash;&gt;
						&lt;!&ndash;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&ndash;&gt;
					</ul>
				</div>
				<div class="tabs-panel sale-goods-list tabs-hide">
					<ul>
						&lt;!&ndash;<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>&ndash;&gt;
						&lt;!&ndash;<?php if ($this->_foreach['index_goods']['iteration'] < 6): ?>&ndash;&gt;
						<li>
							<dl>
								<dt class="goods-name">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
								</dt>
								<dd class="goods-thumb">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
									</a>
								</dd>
								<dd class="goods-price">
									商城价：
									<em>
										&lt;!&ndash; <?php if ($this->_var['goods']['promote_price'] != ""): ?> &ndash;&gt;
										<?php echo $this->_var['goods']['promote_price']; ?>
										&lt;!&ndash; <?php else: ?>&ndash;&gt;
										<?php echo $this->_var['goods']['shop_price']; ?>
										&lt;!&ndash;<?php endif; ?>&ndash;&gt;
									</em>
								</dd>
							</dl>
						</li>
						&lt;!&ndash;<?php endif; ?>&ndash;&gt;
						&lt;!&ndash;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&ndash;&gt;
					</ul>
				</div>
				<div class="tabs-panel sale-goods-list tabs-hide">
					<ul>
						&lt;!&ndash;<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>&ndash;&gt;
						&lt;!&ndash;<?php if ($this->_foreach['index_goods']['iteration'] < 6): ?>&ndash;&gt;
						<li>
							<dl>
								<dt class="goods-name">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
								</dt>
								<dd class="goods-thumb">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
									</a>
								</dd>
								<dd class="goods-price">
									商城价：
									<em>
										&lt;!&ndash; <?php if ($this->_var['goods']['promote_price'] != ""): ?> &ndash;&gt;
										<?php echo $this->_var['goods']['promote_price']; ?>
										&lt;!&ndash; <?php else: ?>&ndash;&gt;
										<?php echo $this->_var['goods']['shop_price']; ?>
										&lt;!&ndash;<?php endif; ?>&ndash;&gt;
									</em>
								</dd>
							</dl>
						</li>
						&lt;!&ndash;<?php endif; ?>&ndash;&gt;
						&lt;!&ndash;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&ndash;&gt;
					</ul>
				</div>
				<div class="tabs-panel sale-goods-list">
					<ul>
						&lt;!&ndash;<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>&ndash;&gt;
						&lt;!&ndash;<?php if ($this->_foreach['index_goods']['iteration'] < 6): ?>&ndash;&gt;
						<li>
							<dl>
								<dt class="goods-name">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
								</dt>
								<dd class="goods-thumb">
									<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
										<img data-original="<?php echo $this->_var['goods']['thumb']; ?>" src="themes/68ecshopcom_360buy/images/loading.gif" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
									</a>
								</dd>
								<dd class="goods-price">
									商城价：
									<em>
										&lt;!&ndash; <?php if ($this->_var['goods']['promote_price'] != ""): ?> &ndash;&gt;
										<?php echo $this->_var['goods']['promote_price']; ?>
										&lt;!&ndash; <?php else: ?>&ndash;&gt;
										<?php echo $this->_var['goods']['shop_price']; ?>
										&lt;!&ndash;<?php endif; ?>&ndash;&gt;
									</em>
								</dd>
							</dl>
						</li>
						&lt;!&ndash;<?php endif; ?>&ndash;&gt;
						&lt;!&ndash;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&ndash;&gt;
					</ul>
				</div>
			</div>
			<div class="right-sidebar">
				<div class="title">
					<h3>
						<i></i>
						限时折扣
					</h3>
				</div>
				<div id="saleDiscount" class="sale-discount">
					<ul>
						&lt;!&ndash;<?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>&ndash;&gt;
						<?php if ($this->_foreach['index_goods']['iteration'] > 5 && $this->_foreach['index_goods']['iteration'] < 10): ?>
						<li>
							<dl>
								<dt class="goods-name">
									<a href="pro_goods.php?id=<?php echo $this->_var['goods']['id']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a>
								</dt>
								<dd class="goods-thumb">
									<a href="pro_goods.php?id=<?php echo $this->_var['goods']['id']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
										<img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
									</a>
								</dd>
								<dd class="goods-price">
									&lt;!&ndash; <?php if ($this->_var['goods']['promote_price'] != ""): ?> &ndash;&gt;
									<?php echo $this->_var['goods']['promote_price']; ?>
									&lt;!&ndash; <?php else: ?>&ndash;&gt;
									<?php echo $this->_var['goods']['shop_price']; ?>
									&lt;!&ndash;<?php endif; ?>&ndash;&gt;
									<span class="original"><?php echo $this->_var['goods']['market_price']; ?></span>
								</dd>
								<dd class="goods-price-discount">
									<em><?php echo $this->_var['goods']['zhekou']; ?></em>
								</dd>
								<dd class="time-remain" count_down="<?php echo $this->_var['goods']['lefttime']; ?>">
									<i></i>
									<span id="leftTime<?php echo $this->_var['key']; ?>">
										<em time_id="d"></em>
										天
										<em time_id="h"></em>
										小时
										<em time_id="m"></em>
										分
										<em time_id="s"></em>
										秒
									</span>
								</dd>
								<dd class="goods-buy-btn"></dd>
							</dl>
						</li>
						&lt;!&ndash;
						<script type="text/javascript">
						/**
						Tday[<?php echo $this->_var['key']; ?>] = new Date("<?php echo $this->_var['goods']['gmt_end_time']; ?>");
						
						window.setInterval(function()     
						
						{clock(<?php echo $this->_var['key']; ?>);}, 1000);
						**/
						</script>
						 &ndash;&gt;
						&lt;!&ndash; <?php endif; ?> &ndash;&gt;
						&lt;!&ndash;<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&ndash;&gt;
					</ul>
					<div class="pagination">
						<span style="opacity: 0.4;"></span>
						<span style="opacity: 0.4;"></span>
						<span style="opacity: 0.4;"></span>
						<span style="opacity: 1;"></span>
					</div>
					<div class="arrow pre" style="opacity: 0;"></div>
					<div class="arrow next" style="opacity: 0;"></div>
				</div>
			</div>
		</div>-->
		<div class="blank5"></div>
		
		<div class="floorList">
			<div class="floor"></div>
			
			<script type="text/javascript">
			function Move(btn1,btn2,box,btnparent,shu){
				var llishu=$(box).first().children().length;
				var liwidth=121;
				var boxwidth=llishu*liwidth-1;
				var shuliang=llishu-shu;
				$(box).css('width',''+boxwidth+'px');
				var num=0;
				$(btn1).click(function(){
					num++;
					if (num>shuliang) {
						num=shuliang;
					}
					var move=-liwidth*num;
					$(this).closest(btnparent).find(box).stop().animate({'left':''+move+'px'},300);
				});
				$(btn2).click(function(){
					num--;
					if (num<0) {
						num=0;
					}
					var move=liwidth*num;
					$(this).closest(btnparent).find(box).stop().animate({'left':''+-move+'px'},300);
				})
			}
			</script>
			
			<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
			

		</div>
		
	</div>
	<script type="text/javascript">
	$(function(){
		$(".anli_con").find(".anniu").hide();
		$(".anli_con").hover(function(){
			var num = $(this).find("li").length;
			if(num > 10){
		$(this).find(".anniu").show();
			}
	},
	function(){
	
		$(this).find(".anniu").hide();
	})
	}) 
	</script>
	<div class="wrapper">
		<div class="mt10">
			
			
		</div>
	</div>
	<div class="n-footer"></div>
	<script type="text/javascript" src="themes/68ecshopcom_360buy/js/indexPrivate.min.js"></script>
	<?php echo $this->fetch('library/page_footerindex.lbi'); ?>
	<?php echo $this->fetch('library/site_bar.lbi'); ?>
	<?php echo $this->fetch('library/left_bar.lbi'); ?>
	<?php echo $this->fetch('library/arrive_notice_list.lbi'); ?>
</body>
<script type="text/javascript" src="themes/68ecshopcom_360buy/js/home_index.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
var goods_id = "<?php echo $this->_var['goods_id']; ?>";
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = "<?php echo $this->_var['goods_id']; ?>";
var now_time = "<?php echo $this->_var['now_time']; ?>";


onload = function(){
  //changePrice();
  fixpng();
  //ShowMyComments("<?php echo $this->_var['goods']['goods_id']; ?>",0,1);
  try {onload_leftTime();}
  catch (e) {}
}});

</script>
</html>