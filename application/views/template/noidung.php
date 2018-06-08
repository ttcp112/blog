
			</script>
			<ul id="list-post">
            
            <!--nội dung-->
            
			  <?php echo form_open('account/thembinhluan'); ?>	 

              <div><?php echo $baiviet->noidung; ?></div>
              <input type="hidden" name="baiviet" value="<?php echo $baiviet->stt; ?>">
 

                <!--end nội dung-->
              
                	
			</ul>
    <hr>
			<div id="showcomment" class="list-comments">
		 <h3>Ý kiến bạn đọc</h3>
         <?php foreach ($binhluan as $bl ) { ?>   
              <div><?php echo $bl->username; ?>: <?php echo $bl->binhluan;?><br></div>
              <?php } ?>
 
         <input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>">
         
       	 <br><textarea id="binhluan" name="binhluan" class="commentcontent" cols="83" rows="5" ></textarea>
         <input type="submit" value="bình luận">
  
		<?php echo form_close(); ?>
	
            </div>
			<div class="clear"> </div>
