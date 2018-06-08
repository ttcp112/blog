<script type="text/javascript">
	function kiemtramk(){
		var mk = document.getElementById("pass");
		if (mk.value == "") {

			alert("Mật khẩu không được để trống !");
			return false;
		}
	}
</script>
<div id="users">
    <div class="page-header">
		<h3>Thay đổi thông tin</h3>
	</div>
	<div class="clear"> </div>
	<?php echo form_open('account/edits'); ?>
		<p>Để thay đổi thông tin bạn cần điền đầy đủ các thông tin sau</p>
        <div class="rows">
            <label>
                username:<input type="hidden" name="username" value="<?php echo $this->session->userdata('username')?>" />
				<span style="margin-left:30%"><?php echo $this->session->userdata('username')?></span>
            </label>
        </div>
        <div class="clear"></div>
         <div class="rows">
            <label>
                Mật khẩu hiện tại:
            </label>
            <input onblur = "kiemtramk(this)" id="pass" type="password" name="password" maxlength="20" />
        </div>
        
        <div class="rows">
            <label>
                Họ và Tên:
            </label>
            <input type="text" name="fullname" maxlength="20" o />
        </div>
        <div class="rows">
            <label>
                số điện thoại:
            </label>
            <input type="text" maxlength="20"  name="sdt"  />
        </div>
		<div class="rows">
			<label>
                &nbsp;
            </label>
			<input type="submit" value="Thay Đổi" class="button" />
		</div>
        
  <?php echo form_close(); ?>
</div>