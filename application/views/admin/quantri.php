<html xmlns="http://www.w3.org/1999/xhtml"><head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
<title>Blog Của Tui - Quản lý site - Tin Tức</title>
<link rel="StyleSheet" href="<?php echo base_url();?>/assets/admin/css/admin.css" type="text/css">
<script src="<?php echo base_url();?>/assets/admin/js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('dd:not(:first)').hide();
		$('dt a').click(function(){
		$('dd:visible').slideUp('slow');
		$(this).parent().next().slideDown('slow');
		return false;
		});
	});

</script>
</head>
<body> 
<link href="<?php echo base_url();?>/assets/admin/css/ddsmoothmenu.css" type="text/css" rel="stylesheet">  
<div id="outer">
    <div id="header">
        <div class="logo">
        </div>
        <div class="logout">
            <a class="bthome" href="<?php echo site_url('adminlogin/blog')?>"><span>Trang chủ site</span></a>
            <a class="bthome" href="<?php echo site_url('adminlogin/logout')?>" ><span class="iconexit">
            Thoát</span></a>
        </div>  
    </div>
    
    <div>
        <div class="ddsmoothmenu" id="slidemenu">
            <ul>
                <li>
                    <a href="#" style="padding-right: 23px;"><span>Thông tin</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
                	<ul style=" top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible;left: 0px; width: 182px;">               	
                        <li><a href="#">Cấu hình site</a></li>
                        <li><a href="#">Cấu hình PHP</a></li>
                        <li><a href="#">Tiện ích mở rộng</a></li>
                        <li><a href="#">Các biến môi trường</a></li>
                        <li><a href="#">Các biến tiền định</a></li>
                        <li><a href="#">Nhật ký hệ thống</a></li>  	
                     </ul>						                            
                </li>   
                            
                <li>
                    <a href="#" style="padding-right: 23px;"><span>Quản trị</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
                    <ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible;left: 0px; width: 182px;">
                    	<li><a href="#">Cấu hình</a></li>
                     </ul>	                            
                </li> 
                
                <li>
                    <a href="#" style="padding-right: 23px;"><span>Cấu hình</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
                	<ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible;left: 0px; width: 182px;">
                        <li><a href="#">Cấu hình site</a></li>  
                        <li><a href="#">Cấu hình chung</a></li>
                        <li><a href="#">Cấu hình thống kê</a></li>
                        <li><a href="#">Tiến trình tự động</a></li>
                        <li><a href="#">Cấu hình FTP</a></li>
                        <li><a href="#">Cấu hình tag "title"</a></li>
                        <li><a href="#">Cấu hình Meta-Tags</a></li>
                        <li><a href="#">Cấu hình file robots.txt</a></li>
                        <li><a href="#">Máy chủ tìm kiếm</a></li>
                        <li><a href="#">Quản lý IP cấm</a></li>
                        <li><a href="#">Cấu hình upload</a></li>   	
                    </ul>		                            
                </li>
                
                <li>
                    <a href="#" class="" style="padding-right: 23px;"><span>CSDL</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
					<ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible; left: 0px; width: 182px;">   	
                        <li><a href="#">Data backup</a></li>
                        <li><a href="#">Cấu hình</a></li>
					</ul>		                            
                </li>
                <li>
                    <a href="#" class="" style="padding-right: 23px;"><span>Công cụ web</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
                	<ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible;left: 0px; width: 182px;"> 	
                        <li><a href="#">Dọn dẹp hệ thống</a></li>
                        <li><a href="#">Chẩn đoán site</a></li>
                        <li><a href="#">Hạng site theo từ khóa</a></li>
                        <li><a href="#">Sitemap Ping</a></li>
                        <li><a href="#">Kiểm tra phiên bản</a></li>
                        <li><a href="#">Cấu hình kiểm tra phiên bản</a></li>
               		 </ul>	                            
                </li>
                
                <li>
                    <a href="#" class="" style="padding-right: 23px;"><span>Ngôn ngữ</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
                	<ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible; left: 0px; width: 182px;">
                        <li><a href="#">Ngôn ngữ data</a></li>
                        <li><a href="#">Ngôn ngữ giao diện</a></li>  
                        <li><a href="#">Kiểm tra ngôn ngữ</a></li>
                        <li><a href="#">Tạo n.ngữ giao diện</a></li>
                        <li><a href="#">Cấu hình</a></li>  	
                     </ul>	                            
                </li>
                
                <li>
                    <a href="#" class="" style="padding-right: 23px;"><span>Quản lý Modules</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
					<ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible; left: 0px; width: 182px;">      
                        <li><a href="#">Thiết lập module mới</a></li>   
                        <li><a href="#">Thêm module ảo</a></li>    
                        <li><a href="#">Cài đặt và đóng gói tự động</a></li>
               		</ul>				                            
                </li>
                
                <li>
                    <a href="#" class="" style="padding-right: 23px;"><span>Quản lý giao diện</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
					<ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible; left: 0px; width: 182px;">            	
                        <li><a href="#">Thiết lập layout</a></li>         
                        <li><a href="#">Quản lý block</a></li>          
                        <li><a href="#">Sao chép block</a></li>             
                        <li><a href="#">Cài đặt theme</a></li>
               		</ul>	                            
                </li>
                
                <li>
                    <a href="#" style="padding-right: 23px;"><span>Quản lý File</span><img src="<?php echo base_url();?>/assets/admin/images/menu_down.png" class="downarrowclass" style="border:0;"></a>
					<ul style="top: 30px; box-shadow: rgb(170, 170, 170) 5px 5px 5px; visibility: visible;">	
                    	<li><a href="#">Cấu hình</a></li>   	
                     </ul>	                            
                </li>   
            </ul>
            
            <div class="clear"></div>
            
        </div>
    </div>
    
    <div id="top_message">
        <div class="clock_container">
            <div class="clock">
                <label>
                    <span id="digclock">08:54 ICT &nbsp; Thứ Năm, 02/06/2016</span>
                </label>
            </div>
        </div>
        <div class="info">
            
            Xin chào <strong>admin</strong> ! Lần đăng nhập Quản trị trước vào 00:46 02/06/2016 
            
            
        </div>
        <div class="clear">
        </div>
    </div>
                
	<div id="middle_outer">
    	<table cellpadding="0" cellspacing="0" width="100%" height="550px" border="0" class="table_full">
        <tbody><tr>
        	<td valign="top" class="colum_left_small" style="display: none;"> 
        	</td>
	    	<td valign="top" class="colum_left_lage">
            	<div style="padding-right:20px; padding-left:4px; width:200px">
                    <div id="middle_column_l">
                        
                        <div id="ver_menu">
                        	<dt><a href="<?php echo site_url('adminlogin/quantri')?>">Menu Site  </a></dt>
                            	<dd>
 
                                </dd>
                            
                            <dt><a href="#">Giới thiệu  </a></dt>
                            <dd>
                            	<ul>
                           			<li><a class="sub_normal" href="#">
                           			 	Thêm Bài Mới  </a>
                                    </li>
                                </ul>
                            </dd>
                            
                            
                            
                            <dt><a href="">Tài khoản  </a></dt>
                            <dd>
                            	<ul>
                               		<li><a class="sub_normal" href="<?php echo site_url('adminlogin/viewuser')?>">
                            			Danh Sách Thành Viên </a>
                                    </li>
                          			<li><a class="sub_normal" href="#">
                            			Thêm thành viên mới  </a>
                                    </li>
                                    <li><a class="sub_normal" href="#">
                            			TV đợi kích hoạt tài khoản  </a>
                                    </li>
                            		<li><a class="sub_normal" href="#">
                           				 nhóm thành viên  </a>
                                    </li>
                            		<li><a class="sub_normal" href="#">
                           				câu hỏi bảo mật  </a>
                                    </li>
                            		<li><a class="sub_normal" href="#">
                            			Nội quy site  </a>
                                    </li>
                            		
                                </ul>
                            </dd>
                            
                            <dt><a href="#">Tin Tức  </a></dt>
                            <dd>
                            	<ul>
                               		<li><a class="sub_normal" href="<?php echo site_url('adminlogin/baiviet');?>">
                           				Bài viết </a>
                                    </li>
                           	 		<li><a class="sub_normal" href="<?php echo site_url('adminlogin/them') ?>">
                            			Thêm bài viết  </a>
                                    </li>
                            		<li><a class="sub_normal" href="<?php echo site_url('adminlogin/binhluan');?>">
                          				Quản lý bình luận  </a>
                                    </li>
                                    <li><a class="sub_normal" href="#">
                            			 Quản lý chuyên mục  </a>
                                    </li>
                            		<li><a class="sub_normal" href="#">
                           				Theo dòng sự kiện  </a>
                            		</li>
                           			<li><a class="sub_normal" href="#">
                           				Các nhóm tin  </a>
                            		</li>
                            		<li><a class="sub_normal" href="#">
                            			Nguồn tin  </a>
                            		</li>
                                    
                              	</ul>
                            </dd>
                            
                                                  
                            <a href="#">Liên hệ  </a>
                            
                            
                           <dt><a href="#">Thăm dò ý kiến  </a></dt>
                           <dd>
                           		<ul>
                                	<li><a class="sub_normal" href="#">
                           				Thêm thăm dò </a>
                                     </li>
                                </ul>
                           </dd>
                            
           
                            <a href="#">Rss  </a>
                            
                            
                        </div>
                        
                    </div>
                </div>
            	<script type="text/javascript">show_menu();</script>
        	</td>

            <td valign="top" bgcolor="#F2F2F2">
            	<div class="info_tab">
                  
                  <!---->
                  <?php isset($page)? $this->load->view($page):'';?>
                  <!---->
                    

                    <div style="clear:both"></div>
	    		</div>
        	</td>
        </tr>
	    </tbody></table>
	</div>
	
    <div id="footer" class="clearfix">
        <div class="copyright">
            <strong>© Copyright Blog Của Tui. All right reserved</strong>
        </div>
       
    </div>
