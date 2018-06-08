<div id="users">
<div class="page-header">
	<h1 class="cf">Thông tin thành viên</h1> 
</div>
    <ul class="top-option">
		<li><a class="info-user" href="<?php echo site_url('account/edit');?>">Sửa thông tin</a></li>
		<li><a class="info-user" href="<?php echo site_url('account/dmk');?>">Đổi mật khẩu</a></li>
		<li><a class="info-user" href="<?php echo site_url('account/logout');?>">Thoát</a></li>
	</ul> 
    <div class="clear"> </div>		
    <div class="box-border-shadow">
        <div class="content-box h-info">
            <div class="left">
                <img src="<?php echo base_url();?>assets/user/image/no_avatar.jpg" class="s-border" />
            </div>
            <div class="fl">
                <br>
                    Tài khoản: <strong><?php echo $taikhoan->username;?></strong><br />
                    Đăng nhập theo kiểu thông thường<br />
                </div>	
            <div class="clear"> </div>
        </div>
    <div class="box-border-shadow">
            <dl>
        	   <dt class="fl">Username</dt>
               <dd class="fl"><?php echo $taikhoan->username;?></dd>
            </dl>
            <dl>
        	   <dt class="fl">Họ tên:</dt>
               <dd class="fl"><?php echo $taikhoan->fullname;?></dd>
            </dl>
            <dl>
        	   <dt class="fl">Ngày tháng năm sinh:</dt>
               <dd class="fl">N/A</dd>
            </dl>
            <dl>
        	   <dt class="fl">Giới tính:</dt>
               <dd class="fl">N/A</dd>
            </dl>
            <dl>
        	   <dt class="fl">Địa chỉ:</dt>
               <dd class="fl">N/A</dd>
            </dl>  
            <dl>
        	   <dt class="fl">Tài khoản Yahoo:</dt>
               <dd class="fl">N/A</dd>
            </dl>
            <dl>
        	   <dt class="fl">Phone:</dt>
               <dd class="fl"><?php echo $taikhoan->sdt;?></dd>
            </dl>
            <dl>
        	   <dt class="fl">Fax:</dt>
               <dd class="fl">N/A</dd>
            </dl>
            <dl>
        	   <dt class="fl">Di động:</dt>
               <dd class="fl">N/A</dd>
            </dl>
            <dl>
        	   <dt class="fl">Ngày tham gia:</dt>
               <dd class="fl">N/A</dd>
            </dl>
    </div>
</div>
