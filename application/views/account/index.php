<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title></title>   
<style type="text/css">
   <style type="text/css">
        .uc_dangnhap
        {
            width: 400px;
            font-family: Tahoma;
            font-size: 12px;
        }
        .uc_dangnhap_item
        {
            height: 40px;
        }
        .nhap
        {
            height: 24px;
            border: 1px solid #ccc;
            width: 240px;
            text-align: center;
            padding: 4px 4px 4px 20px;
            background: url(<?php echo base_url();?>/assets/user/image/user.gif);
            background-repeat: no-repeat;
            background-position: left;
            box-shadow: 0 0 10px rgba(0,0,0,0.2) inset;
        }
        .pass
        {
            height: 24px;
            border: 1px solid #ccc;
            width: 240px;
            text-align: center;
            padding: 4px 4px 4px 20px;
            background: url(<?php echo base_url();?>/assets/user/image/pass1.gif);
            background-repeat: no-repeat;
            background-position: 4px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2) inset;
        }
        .input
        {
            border: none;
            height: 22px;
            width: 220px;
        }
    </style>
    <script type="text/javascript">


        function kiemtraEmail() {
            var reg1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var us = document.getElementById("txtuser");
         

            if (us.value=="") {

                alert("Tài khoản không được để trống  !");
                return false;
            }
        };
		function kiemtramk(){
			var mk = document.getElementById("txtpass");
			if (mk.value == "") {

                alert("Mật khẩu không được để trống !");
                return false;
            }
		}
     
    </script>

</head>
<body style="background:#fbfbfb;">
    <?php echo form_open('login/processLogin'); ?>
    <div>
    <center>
        <div style="padding-top:200px;">
           
        <div style="background:#fff;  box-shadow: 0px 0px 3px #ccc; -moz-box-shadow: 0px 0px 3px #ccc;
                    -webkit-box-shadow: 0px 0px 3px #ccc; width:450px; height:200px; border:1px solid #ccc; padding:10px;">  <b>ĐĂNG NHẬP THÀNH VIÊN</b><br />
                    <?php echo isset($error) ? $error : ''; ?>
            <table class="uc_dangnhap">
                <tr>
                    <td class="uc_dangnhap_item">
                        Tên đăng nhập:
                    </td>
                    <td class="uc_dangnhap_item">
                        <div class="nhap">
                            <input id="txtuser" name="username" class="input" onblur="kiemtraEmail(this)"/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="uc_dangnhap_item">
                        Mật khẩu:
                    </td>
                    <td class="uc_dangnhap_item">
                        <div class="pass">
                            <input id="txtpass" name="password" class="input" type="password" onblur="kiemtramk(this)"></div>
                    </td>
                </tr>
                <tr>
                    <td class="uc_dangnhap_item">
                    </td>
                    <td class="uc_dangnhap_item">
                        <input type="checkbox" id="CheckBox1" /> Nhớ mật khẩu
                    </td>
                </tr>
                <tr>
                    <td class="uc_dangnhap_item">
                    </td>
                    <td class="uc_dangnhap_item">
                        <input type="image" src="<?php echo base_url(); ?>/assets/user/image/dangnhap.gif" />
                        <a style="text-decoration:none; color:#000" href="#">Quên mật khẩu?</a>
                        <a style="text-decoration:none; color:#000" href="<?php echo site_url('account/add');?>">Đăng kí</a>
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </center>
    </div>
   <?php echo form_close(); ?>
</body>
</html>
