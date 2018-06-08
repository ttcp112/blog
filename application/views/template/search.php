<div class="box-border-shadow content-box clearfix">
	<h3 class="title-search">
        Tìm những gì bạn muốn!
    </h3>
    <hr>
        <div class="form">
            <div class="clearfix rows">
            	<?php echo form_open('account/searchs'); ?>
                    <label>
                        Từ khóa tìm kiếm:
                    </label>
                    <input class="input" value="<?php echo isset($key)? $key:""?>" name="keyword" maxlength="60" /> 
                    <input type="submit" value="Tìm kiếm" />&nbsp;
                <?php echo form_close(); ?>
			</div>
		</div>
</div>
