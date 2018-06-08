	 <script type="text/javascript">
	 	
		function kiemtramk1(){
			var mk1 = document.getElementById("npass");
			if (mk1.value == "") {

                alert("Mật khẩu không được để trống !");
                return false;
            }
		}
		function kiemtramk2(){
			var mk1 = document.getElementById("npass");
			var mk2 = document.getElementById("npass2");
			if (mk1.value != mk2.value) {

                alert("nhập lại mật khẩu không giống !");
                return false;
            }
		}
		function kiemtramk(){
			var mk = document.getElementById("pass");
			if (mk.value == "") {
                alert("Nhập mật khẩu cũ !");
                return false;
            }
		}
     
    </script>
<div id="users">
    <div class="page-header">
		<h3>Đổi mật khẩu</h3>
	</div>
	<div class="clear"> </div>
	<?php echo form_open('account/update'); ?>
		<p>Để thay đổi mật khẩu bạn cần điền đầy đủ các thông tin sau</p>
                <div class="rows">
            <label>
                Mật khẩu cũ
            </label>
            <input id="pass" type="password" name="password" maxlength="20" onblur = "kiemtramk(this)" />
        </div>
        
        <div class="rows">
            <label>
                Mật khẩu mới
            </label>
            <input id="npass" type="password" name="new_password" maxlength="20" onblur = "kiemtramk1(this)" />
        </div>
        <div class="rows">
            <label>
                Nhập lại mật khẩu mới
            </label>
            <input id="npass2" type="password" maxlength="20" onblur = "kiemtramk2(this)"  />
        </div>
		<div class="rows">
			<label> 
            </label>
			<input type="submit" value="Đổi mật khẩu" class="button" />
		</div>
 
  <?php echo form_close(); ?>
</div>