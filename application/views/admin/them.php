<?php echo form_open('admin/thembaiviet'); ?>
    <table class="tab1">
        <tr>
        	<td width="100px">số thứ tự</td>
            <td><input name="stt" type="number" style="width:70px"></td>
        </tr>
        <tr>
        	<td>tiêu đề</td>
            <td><input name="tieude" type="text" style="width:60%"></td>
        </tr>
        <tr>
        	<td>Hình ảnh</td>
            <td><input type="text" name="hinhanh" style="width:60%"></td>
        </tr>
        <tr>
        	<td>tóm tắt</td>
            <td><textarea name="tomtat" type="text" style="width:60%; height:100px"></textarea></td>
        </tr>
        <tr>
        	<td>nội dung</td>
            <td><textarea type="text" name="noidung" style="width:60%; height:250px"></textarea></td>
        </tr>
        <tr>
        	<td></td>
            <td><input type="submit" value="thêm"></td>
        </tr>
      </table>   
<?php echo form_close(); ?>
<?php echo isset($them)? $them:""; ?>