<div id="users">
<table class="tab1">
	<caption><?php echo $baiviet->tieude;?></caption>
		<tr>
        	<td width="20%">stt</td>
            <td><?php echo $baiviet->stt;?></td>
        </tr>
        <tr>
        <?php echo form_open('adminlogin/suabaiviet'); ?>
        	<input type="hidden" name="stt" value="<?php echo $baiviet->stt;?>">
        	<td>Tiêu đề</td>
            <td><input style="width:100%" name="tieude" type="text" value="<?php echo $baiviet->tieude;?>"></td>
        </tr>
        <tr>
        	<td>hình ảnh</td>
            <td><input style="width:100%" name="hinhanh" value="<?php echo $baiviet->hinhanh;?>" type="text"></td>
        </tr>
        <tr>
        	<td>Chuyên mục</td>
            <td>

            <input style="width:100%" name="chuyenmuc" value="<?php echo $baiviet->chuyenmuc;?>" type="text">
            </td>
        </tr>
</table>
	Tóm Tắt:<br>
    <textarea cols="150" rows="5" name="tomtat"><?php echo $baiviet->tomtat;?></textarea><br>
    Nội Dung:<br>
     <textarea cols="150" rows="10" name="noidung"><?php echo $baiviet->noidung;?></textarea><br>
     <br><input style="float:right; margin-right:5%" type="submit" value="chỉnh sửa">
   <?php echo form_close(); ?>
</div>