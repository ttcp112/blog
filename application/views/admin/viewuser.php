<div id="users">
<table class="tab1">
	<caption> Danh Sách Thành Viên</caption>
	<thead>
		<tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Điện Thoại</th>
            <th>Option</th>
		</tr>
    </thead>
	<?php foreach ($data as $account ) { ?>
		<tr>
			<td><?php echo $account->username; ?></td>
			<td><?php echo $account->fullname; ?></td>
			<td><?php echo $account->sdt; ?></td>
			<td>
			<a href="<?php echo site_url('adminlogin/inforuser/'.$account->username);?>">infor</a> | 
            <a href="<?php echo site_url('adminlogin/deleteuser/'.$account->username);?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<center
 <p style="color:#F00; letter-spacing: 5px; word-spacing: 10px"><?php
 echo $this->pagination->create_links(); // tạo link phân trang 

?></p></center>
</div>