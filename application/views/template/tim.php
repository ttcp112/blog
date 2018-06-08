<div class="result-mod">
    Kết quả tìm kiếm trên:
</div>
<?php foreach($baiviet as $bv) { ?>
<div class="result-frame">
        <div class="result-title">
        <a href="<?php echo site_url('account/view/'.$bv->stt)?>"><?php echo $bv->tieude;?></a>
    </div>
    <?php echo $bv->tomtat;?><br><br>
<?php }?>
</div>