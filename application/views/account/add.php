<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="<?php echo base_url();?>/assets/user/scrips/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	function kiemtramk(){
		var mk = document.getElementById("txtpass");
		if (mk.value == "") {

              alert("Mật khẩu không được để trống !");
              return false;
          }
		};
     function kiemtraEmail() {
          var reg1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          var mail = document.getElementById("txtuser");     
          var testmail = reg1.test(mail.value);
          if (!testmail) {
          	alert("Ðịa chỉ email không hợp lệ !");
            return false;
          };     
    }
</script>
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
            background: url(<?php echo base_url();?>/assets/user/image/gmail.gif);
            background-repeat: no-repeat;
            background-position: left;
            box-shadow: 0 0 10px rgba(0,0,0,0.2) inset;
        }
        .sdt
        {
            height: 24px;
            border: 1px solid #ccc;
            width: 240px;
            text-align: center;
            padding: 4px 4px 4px 20px;
            background: url(<?php echo base_url();?>/assets/user/image/sdt.gif);
            background-repeat: no-repeat;
            background-position: 4px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2) inset;
        }
        .kv
        {
            height: 24px;
            border: 1px solid #ccc;
            width: 240px;
            text-align: center;
            padding: 4px 4px 4px 20px;
            background: url(<?php echo base_url();?>/assets/user/image/user.gif);
            background-repeat: no-repeat;
            background-position: 4px;
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
</head>

<body>
<?php echo form_open('account/addnews'); ?>
    <div>
        <center> 
            <div style="padding-top: 150px;">
                <div style="background: #fff; box-shadow: 0px 0px 3px #ccc; -moz-box-shadow: 0px 0px 3px #ccc; -webkit-box-shadow: 0px 0px 3px #ccc; width: 450px; height: 260px; border: 1px solid #ccc;padding: 10px;">
                <b>ĐĂNG KÝ THÀNH VIÊN</b>	
                    <table class="uc_dangnhap">
                        <tr>
                            <td class="uc_dangnhap_item">
                                Email:
                            </td>
                            <td class="uc_dangnhap_item">
                                <div class="nhap">
									<input type="text" class="input" id="txtuser" name="username" onBlur="kiemtraEmail(this)">
                                </div>
                             </td>
						</tr>
						<tr>
                        	<td class="uc_dangnhap_item">Password</td>
                            <td class="uc_dangnhap_item">
                                <div class="pass">
                                    <input name="password" id="txtpass" class="input" type="password" onBlur="kiemtramk(this)"/>
                                    </div>
                            </td>
                        </tr>         
						<tr>
   							<td class="uc_dangnhap_item">
                                Full Name:
                            </td>
                            <td class="uc_dangnhap_item">
                                <div class="kv">
                                   	<input type="text" class="input" name="fullname" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="uc_dangnhap_item">
                                Số điện thoại:
                            </td>
                            <td class="uc_dangnhap_item">
                                <div class="sdt">
                                    <input name="sdt" Class="input" type="text" />                                    </div>
                            </td>
                        </tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" value="Đăng ký"  />&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('account/index')?>">Đăng Nhập</a></td>
						</tr>
					</table>
                    </div>
            </div>
        </center>
    </div>
<?php echo form_close(); ?>