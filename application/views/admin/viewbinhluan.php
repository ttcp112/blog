<div id="users">
<table class="tab1">
	<caption> Quản lí bình luận </caption>
	<thead>
		<tr>
            <th>người gửi</th>
            <th>nội dung</th>
            <th>bài viết</th>
            <th>chức năng</th>
		</tr>
    </thead>
	<?php foreach ($data as $binhluan ) { ?>
		<tr>
			<td><?php echo $binhluan->username; ?></td>
			<td><?php echo $binhluan->binhluan; ?></td>
            <td><?php echo $binhluan->baiviet; ?></td>
			<td>
			Edit | Delete
			</td>
		</tr>
	<?php } ?>
</table>
<center
 <p style="color:#F00; letter-spacing: 5px; word-spacing: 10px"><?php
 echo $this->pagination->create_links(); // tạo link phân trang 

?></p></center>
</div>