<div id="users">
<table class="tab1">
	<caption> Danh Sách Thành Viên</caption>
	<thead>
		<tr>
            <th>stt</th>
            <th>tiêu đề</th>
            <th>option</th>
		</tr>
    </thead>
	<?php foreach ($data as $baiviet ) { ?>
		<tr>
			<td><?php echo $baiviet->stt; ?></td>
			<td><?php echo $baiviet->tieude; ?></td>
			<td>
				<a href="<?php echo site_url('adminlogin/xembaiviet/'.$baiviet->stt);?>">Edit</a> | 
            	<a href="<?php echo site_url('adminlogin/xoabaiviet/'.$baiviet->stt);?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<center
 <p style="color:#F00; letter-spacing: 5px; word-spacing: 10px"><?php
 echo $this->pagination->create_links(); // tạo link phân trang 

?></p></center>
</div>