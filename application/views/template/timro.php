
<?php foreach ($baiviet as $bv ) { ?>
<div class="content-box">
        <a href="<?php echo site_url('account/view/'.$bv->stt);?>">
            <img class="s-border fl left" src="<?php echo $bv->hinhanh;?>" width="100"/>
        </a>
        <a href="<?php echo site_url('account/view/'.$bv->stt);?>">
            <h4 class="cf"><a href="<?php echo site_url('account/view/'.$bv->stt);?>">
			<?php echo $bv->tieude;?>
        </a>
        </h4>
        <p>
           <?php echo $bv->tomtat;?>
        </p>
        <div class="aright">
            <a  class="more" href="<?php echo site_url('account/view/'.$bv->stt);?>">Xem tiếp...</a>
        </div>
 

	<div class="clear"></div>
</div>
<?php } ?>

