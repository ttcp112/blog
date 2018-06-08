<ul id="list-post">
<?php foreach ($baiviet as $bv ) { ?>
    <li class="list-post">
        <div class="front color-type2">
            <img src="<?php echo $bv->hinhanh;?>">
            <h2 class="cf"><a href="<?php echo site_url('account/view/'.$bv->stt);?>"><?php echo $bv->stt;?>:&nbsp;<?php echo $bv->tieude;?></a></h2>
        </div>
        <div class="back">
            <h2 class="cf"><a href="<?php echo site_url('account/view/'.$bv->stt);?>"><?php echo $bv->stt;?>:&nbsp;<?php echo $bv->tieude;?></a></h2>
            <p class="cf"><?php echo $bv->tomtat; ?></p>
            <a class="more cf" href="<?php echo site_url('account/view/'.$bv->stt);?>"></a>
            
        </div>
     </li>            	
<?php } ?>
</ul>
<center
	<p style="color:#F00; letter-spacing: 5px; word-spacing: 10px">
	<?php echo $this->pagination->create_links();?></p>
</center>