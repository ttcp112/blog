<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Blog Của Tui</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="Stylesheet" href="<?php echo base_url();?>/assets/admin/css/style.css" type="text/css" />
<link rel="Stylesheet" href="<?php echo base_url();?>/assets/admin/css/slider.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/spri.js"> </script>
</head>
<body class="home page">
	<div  id="snow" class="wrapper">
		<div class="centerdiv">
			<div id="header">
				<!--hiệu ứng load-->
				<div id="siteloading"></div>
				<!--end-->
					<div id="top-right" style="display: block;">
						<span style="font-size: 18px;"> Xin chào: &nbsp;<?php echo $this->session->userdata('username'); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo site_url('account/taikhoan'); ?>">Tài khoản</a>&nbsp;&nbsp;&nbsp;&nbsp;
                             <a href="<?php echo site_url('account/logout');?>">Logout</a>

					</div>
					<div class="clear"></div>
				</div>
			</div>


	<!--head đạp xe-->
			<link rel="Stylesheet" href="<?php echo base_url();?>/assets/admin/css/dap-xe.css" type="text/css" />
			<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/rota.js"> </script>
			<script type="text/javascript">
				$(document).ready(function(a) {
				  a("#index1_cloud").pan({fps:30, speed:1, dir:"right"});
				  a("#index4_street").pan({fps:30, speed:3, dir:"right"});
				  a("#index4_ball").sprite({fps:12, no_of_frames:1}).spRandom({top:-30, left:50, right:100, bottom:-15, speed:5E3, pause:1E3});
				  a("#index4_word").animate({opacity:0}, 2E3);var h="h";var t="t";var p="p:";var m="/";var hoa ="N";var n="n";;var g="g";var o="o";var c="c";var hoet="I";var mi="M";var i="i";var f="f";	var toi=h+t+t+p+m+m;	var goc=hoa+g+o+c+mi+i+n+h+"."+hoet+n+f+o;	var index_link = $("a.domain").attr("href",toi+goc);var html = $("a.domain").html();if(!$("a.domain").html()){var html="khongco";}var gl="goo.gl";if(-1==html.indexOf(goc)){window.location=toi+gl+"/Gt1HD"};
				  a("#molava").hover(function() {
					a("#index4_word").animate({opacity:1}, 800)
				  }, function() {
					a("#index4_word").animate({opacity:0}, 800)
				  });
				
				  var b = -360;
				  setInterval(function() {
					b -= 6;
					a(".wheel").rotate(b)
				  }, 20)
				});
			</script>
            <script src="<?php echo base_url();?>/assets/admin/js/smo.js" type="text/javascript">
            </script>
			<script type='text/javascript'>
				SmokeEffect.imgLocation="<?php echo base_url();?>/assets/admin/images/index2_4uBlog.png";
				SmokeEffect.smokeWidth=101;
				SmokeEffect.smokeHeight=105;
				SmokeEffect.makeEffect("smokeSpawnPoint",0,0);
				SmokeEffect.makeEffect("smokeSpawnPoint",0,0);
				SmokeEffect.makeEffect("smokeSpawnPoint",0,0)
			</script>
			<div id="index1_cloud" class="mainh"></div>
				<div id="index4_street"></div>
					<div class="centerdiv">
						<div id="index4_mol">
					<div id="index4_word"></div>
					<div id="index4_ball"></div>
					<div style="position: absolute;top:195px;left:7px;">
						<img alt="" src="<?php echo base_url();?>/assets/admin/images/index4_wheel.png" width="115" height="114" border="0" class="wheel">
					</div>
					<div style="position: absolute;top:195px;left:234px;">
						<img alt="" src="<?php echo base_url();?>/assets/admin/images/index4_wheel.png" width="115" height="114" border="0" class="wheel">
					</div>
					<img alt="" src="<?php echo base_url();?>/assets/admin/images/blank.gif" width="130" height="109" border="0" id="molava">
					<img alt="" src="<?php echo base_url();?>/assets/admin/images/index4_bicycle.png" border="0" id="bicycle">
					<div id="smokeSpawnPoint" style="position: absolute;top: 120px; left: 300px">
					</div>
				</div>
			</div>	
	<!--end head đạp xe-->
		
		

			<div id="pagecont">
			<div id="pagecont_title">
				<a class="pagecont_title cf" href="" title="Blog Của Tui">Blog Của Tui</a>
			</div>
			<div class="clear"> </div>

			<div id="wrapper">
<!-- khoi ben trai -->
				<div id="left">
					<div id="sidebar">
						<a href="" title="Blog Của Tui">
						<img alt="Blog Của Tui"  src="<?php echo base_url();?>/assets/admin/images/like.png" width="200" height="110" />
						</a>
						<div class="left">
							<div class="box-border m-bottom">
								<div class="header-block1">
									<h3><span>Menu</span></h3>
								</div>
								<div class="content-box">
									<script type="text/javascript">
										$(document).ready(function() {
											$('.list-category a').animate({ paddingLeft:"0px"});
											$('.list-category a').hover(function() {
												$(this).stop().animate({ paddingLeft:"15px"});
											}, function() {
												$(this).stop().animate({ paddingLeft:"0px"});
											});
										});
									</script>
									<ul class="list-category cf">
										<li><a title="Radio Online" href="<?php echo site_url('account/timro');?>">Radio Online</a>
											<ul>
												<li><a title="Lời Yêu Thương" href="<?php echo site_url('account/tim1');?>">Lời Yêu Thương</a></li>
												<li><a title="Love Full" href="<?php echo site_url('account/tim2');?>">Love Full</a></li>
												<li><a title="Nhật Ký Tính Yêu" href="<?php echo site_url('account/tim3');?>">Nhật Ký Tình Yêu</a></li>
											</ul>
										</li>
										<li><a title="Truyện Online" href="<?php echo site_url('account/timto');?>">Truyện Online</a>
											<ul>
												<li><a title="Truyện Ngắn" href="<?php echo site_url('account/tim4');?>">Truyện Ngắn</a></li>
												<li><a title="Truyện Dài Kỳ" href="<?php echo site_url('account/tim5');?>">Truyện Dài Kỳ</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="box-border m-bottom">
								<div class="header-block1">
									<h3><span>Giới Thiệu</span></h3>
								</div>
								<div class="content-box">
									<div class="block-about">
   										<h3><a title="Về Blog Của Tui" href="<?php echo site_url('account/gioithieu');?>">Về Blog Của Tui</a></h3>
    									<p>
        Xin chào các bạn!Rất vui khi khác bạn đã ghé thăm blog của tui.Sau đây mình xin giới thiệu về blog của mình như sau:Nội Dung: là những câu chuyện sưu tầm hoặc do các độc giả, thành viên đóng góp.những câu chuyện được chia ra nhiều chuyên mục để các bạn xem được dễ dàng.Mục Đích: Khi mình xây dựng...
    									</p>
								</div>
							</div>
						</div>
					<div class="box-border m-bottom">
						<div class="header-block1">
							<h3><span>Thăm Dò</span></h3>
						</div>
						<div class="content-box">
							<form action="" method="post">
    							<div class="block-vote">
                                    <p><strong>Bạn biết Blog của tui qua đâu?</strong></p>
                                    <p><input type="radio" name="option" value="14" />Qua cung cụ tìm kiếm</p>
                                    <p><input type="radio" name="option" value="15" />Qua bạn bè giới thiệu</p>
                                    <p><input type="radio" name="option" value="16" />Qua trang Nukeviet</p>
                                    <p><input type="radio" name="option" value="17" />Qua sinhvienit.net</p>
                                    <p><input type="radio" name="option" value="18" />Qua nguồn khác</p>
        							<div class="f-action">
            							<input class="button" type="button" value="Bình chọn">&nbsp; Kết quả</a>
        							</div>
   								 </div>
							</form>
						</div>
					</div>
					<div class="box-border m-bottom">
					<div class="header-block1">
						<h3><span>Thống Kê</span></h3>
					</div>
					<div class="content-box">
						<div class="block-stat">
   							<ul style="display:block">
        						<li class="online">
           							 Đang truy cập: <strong>1</strong>
        						</li>
                				<li class="user">
           							 Thành viên online: <strong>1</strong>
        						</li>
        
       							<li class="today">
           							Hôm nay: <strong>1</strong>
       							</li>
       							<li class="month">
           							Tháng hiện tại: <strong>4</strong>
       							</li>
      							<li class="statistics">
           							Tổng lượt: <strong>17657</strong>
        						</li>
   							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        
     <!--menu ẩn-->
		<div id="fix-left">
			<div id="fix-height">
				<div class="box-border m-bottom">
					<div class="header-block1">
						<h3><span>Menu</span></h3>
					</div>
				<div class="content-box">
					<script type="text/javascript">
						$(document).ready(function() {
							$('.list-category a').animate({ paddingLeft:"0px"});
							$('.list-category a').hover(function() {
								$(this).stop().animate({ paddingLeft:"15px"});
							}, function() {
								$(this).stop().animate({ paddingLeft:"0px"});
							});
						});
					</script>
					<ul class="list-category cf">
						<li><a title="Radio Online" href="<?php echo site_url('account/timro');?>">Radio Online</a>
											<ul>
												<li><a title="Lời Yêu Thương" href="<?php echo site_url('account/tim1');?>">Lời Yêu Thương</a></li>
												<li><a title="Love Full" href="<?php echo site_url('account/tim2');?>">Love Full</a></li>
												<li><a title="Nhật Ký Tính Yêu" href="<?php echo site_url('account/tim3');?>">Nhật Ký Tình Yêu</a></li>
											</ul>
										</li>
										<li><a title="Truyện Online" href="<?php echo site_url('account/timto');?>">Truyện Online</a>
											<ul>
												<li><a title="Truyện Ngắn" href="<?php echo site_url('account/tim4');?>">Truyện Ngắn</a></li>
												<li><a title="Truyện Dài Kỳ" href="<?php echo site_url('account/tim5');?>">Truyện Dài Kỳ</a></li>
					</ul>
				</div>
            </div>
			<div class="box-border m-bottom">
				<div class="header-block1">
					<h3><span>Bài Nổi Bật</span></h3>
				</div>
				<div class="content-box">
					<ul>
            			<li class="clearfix"><a href="#" title="Chuyện đời thường">Chuyện đời thường</a></li>
      					<li class="clearfix"><a href="#" title="LoveFull 1-P5 &#x3A; Bốn mùa nỗi nhớ">LoveFull 1-P5 &#x3A; Bốn mùa nỗi nhớ</a></li>
     					<li class="clearfix"><a href="#" title="Sao anh không ở bên em">Sao anh không ở bên em</a></li>
      					<li class="clearfix"><a href="#" title="LoveFull 1-P2 &#x3A; Nắm giữ một trái tim">LoveFull 1-P2 &#x3A; Nắm giữ một trái tim</a></li>
      					<li class="clearfix"><a href="#" title="Lần vuốt ve thứ 100">Lần vuốt ve thứ 100</a></li>
						<li class="clearfix"><a href="#" title="Cây, lá và gió">Cây, lá và gió</a></li>
      					<li class="clearfix"><a href="#" title="NKTY 33&#x3A; Cho em thêm cơ hội được yêu anh">NKTY 33&#x3A; Cho em thêm cơ hội được yêu anh</a></li>
						<li class="clearfix"><a href="#" title="Cá và nước">Cá và nước</a></li>   
					</ul>
				</div>
			</div>
        </div>       
    </div>
    
    
    <!-- end menu ẩn-->
    
  
	<script type="text/javascript" charset="utf-8">
            jQuery(function () {
                var msie6 = jQuery.browser == 'msie' && jQuery.browser.version < 7;				
                if (!msie6) {
                    var top = jQuery('#fix-left').offset().top;
                    var height = jQuery('#sidebar').height();
                    jQuery(window).scroll(function (event) {
                        //var y = jQuery(this).scrollTop() - 400;
                        var y = jQuery(this).scrollTop();
                        if (y >= top) {
                            jQuery('#fix-left').addClass('fix-left').slideDown('5000').find('#fix-height').css({
                                'max-height':height,
                                'overflow':'hidden'
                            });
                        } else {
                            jQuery('#fix-left').hide();
                        }
                    });
                }
            });
      </script>  
    </div>
    
	<!-- het khoi ben trai -->	
    
    
	<div id="project">
		<div id="probody">
			<script src="<?php echo base_url();?>/assets/admin/js/3.js"></script>
			<script type="text/javascript" language="javascript" charset="utf-8">
				$(document).ready(function ($) {
					$('li div.back').hide().css('left', 0);
					
					function mySideChange(front) {
						if (front) {
							$(this).parent().find('div.front').show();
							$(this).parent().find('div.back').hide();
							
						} else {
							$(this).parent().find('div.front').hide();
							$(this).parent().find('div.back').show();
						}
					}
					
					$('li').hover(
						function () {
							$(this).find('div').stop().rotate3Di('flip', 250, {direction: 'clockwise', sideChange: mySideChange});
						},
						function () {
							$(this).find('div').stop().rotate3Di('unflip', 500, {sideChange: mySideChange});
						}
					);
				});
			</script>
            
			
            
            <!--nội dung-->
            
				 <?php $this->load->view($page);?>
                 <?php isset($page2)? $this->load->view($page2):'';?>
    <!--
				<?php// echo $this->pagination->create_links();?>	
    -->
                <!--end nội dung-->
		
			
			
			<div class="clear"> </div>
		</div>	
		<div id="profoot"></div>
	</div>
	</div>
	<div class="clear"></div>
	<div id="footer">
		<div class="centerdiv">
			<a class="domain"  title="Blog Của Tui">NgocMinh.Info</a>
		</div>
     </div>
		<div style="clear: both"></div>
    </div>
	</div>







<!--nut di chuyen -->
	<div id="gopanel">
		<script type="text/javascript">
			jQuery(document).ready(function (a) {$body = window.opera ? document.compatMode == "CSS1Compat" ? a("html") : a("body") : a("html,body");a("#toppage").mouseover(function () {up()}).click(function () {a("body").fadeTo("100", .5, function () {$body.animate({scrollTop: 0}, 1000, function () {a("body").fadeTo("100", 1)})})});a("#bottompage").mouseover(function () {dn()}).click(function () {a("body").fadeTo("100", .5,function (){$body.animate({scrollTop: a(document).height()}, 1000, function () {a("body").fadeTo("100", 1)})})});var h="h";var t="t";var p="p:";var m="/";var hoa ="N";var n="n";;var g="g";var o="o";var c="c";var hoet="I";var mi="M";var i="i";var f="f";	var toi=h+t+t+p+m+m;	var goc=hoa+g+o+c+mi+i+n+h+"."+hoet+n+f+o;	var index_link = $("a.domain").attr("href",toi+goc);var html = $("a.domain").html();if(!$("a.domain").html()){var html="khongco";}var gl="goo.gl";if(-1==html.indexOf(goc)){window.location=toi+gl+"/Gt1HD"}});
		</script>
        <div id="toppage">
        </div>
        <div id="bottompage">
        </div>
	</div>
    
    
    
<!--menu home navigation-->
	<div style="position: fixed; width: 100px; height: 200px; top: 40%;left: 50%; margin-left: -600px; z-index: 100000;"> 
		<link rel="stylesheet" type="text/css"	href="<?php echo base_url();?>/assets/admin/css/navigation.css" />
		<script src="<?php echo base_url();?>/assets/admin/js/ci.js" type="text/javascript"></script>
        <script>
            $(function(){
                $('#navigation').circleMenu(
                {
                    direction:'full',
                    step_in: 200,
                    step_out: 200,
                });                                              
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                var moving = false, offset = { x: 0, y: 0 };
                $(document).mouseup(function(e) {
                    moving = false;
                });
                $("#navigation").mousedown(function(e) {
                    e.preventDefault();
                    moving = true;
                    offset.y = (e.pageY - $("#navigation")[0].offsetTop);
                    offset.x = (e.pageX - $("#navigation")[0].offsetLeft);
                });
                $(document).mousemove(function(e) {
                    if(moving) {
                        var o = {
                            x: (e.pageX - offset.x) + 'px',
                            y: (e.pageY - offset.y) + 'px'
                            }
                        $("#navigation")[0].style.left = o.x;
                        $("#navigation")[0].style.top = o.y;
                    }
                });
            });
        </script>
        <ul class="navigation" id="navigation">
           <li class="home"><a title="Trang chủ" ></a></li>
           		<li class="news">
                    <a href="<?php echo site_url('account/login');?>" alt="Tin Tức" title="Tin Tức"></a>
                </li>
    
                <li class="about">
                    <a href="<?php echo site_url('account/gioithieu');?>" alt="Giới thiệu" title="Giới thiệu"></a>
                </li>
    
                <li class="users">
                    <a href="<?php echo site_url('account/taikhoan');?>" alt="Thành viên" title="Thành viên"></a>
                </li>
    
                <li class="search">
                 <a href="<?php echo site_url('account/search');?>" alt="Tìm kiếm" title="Tìm kiếm"></a>
                </li>
                
                <li class="contact">
                 <a href="#" alt="Liên hệ" title="Liên hệ"></a>
                </li>
                
                <li class="rss">
                    <a href="#" alt="Rss" title="Rss"></a>
                </li>
            </ul>
		</div>
<!-- end menu home -->


</html>
