<?php
// i18n_gallery_register('plugin name', 'title ', 'description', 'functions');
i18n_gallery_register('bootstrap', 'Bootstrap Gallery', 'Default Bootstrap Gallery','i18n_gallery_bootstrap_edit','i18n_gallery_bootstrap_header', 'i18n_gallery_bootstrap_content');

 function i18n_gallery_bootstrap_edit($gallery) {
 ?>

  
 <?php
 }
  function i18n_gallery_bootstrap_header($gallery) {?>
  <link rel="stylesheet" href="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/magnific-popup.css">
<script src="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js"></script>
		<script>
			$(document).ready(function() {
				$('.gallery').each(function() {// the containers for all your galleries
					$(this).magnificPopup({
						delegate : 'a', // the selector for gallery item
						type : 'image',
						gallery : {
							enabled : true
						}
					});
				});
			});
		</script>

  <?php
 }

function i18n_gallery_bootstrap_content($gallery, $pic) {
  $id = i18n_gallery_id($gallery);
  $thumb = i18n_gallery_thumb($gallery);
  echo $thumb;
  //$showtitles = i18n_gallery_check($gallery, 'thumbtitles', false);
  //  $pageSize = !isset($thumb) && i18n_gallery_check($gallery,'pagify',false) ? (int) $gallery['pagesize'] : 0;
?>
    <div class="gallery  gallery-<?php echo $id; ?>">
        <div class="">
<?php
    $i = 0;
    foreach ($gallery['items'] as $item) { 
?>
<div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <a href="<?php i18n_gallery_image_link($gallery,$item); ?>"> <img src="<?php i18n_gallery_thumb_link($gallery,$item); ?>" alt=""> </a>
                            <div class="caption">
                                
                                <p>
                                    <?php echo htmlspecialchars(@$item['_description']); ?>
                                </p>

                            </div>
                        </div>
                    </div>
<?php 
      $i++;
    } 
?>
</div>
      <div style="clear:both"></div>
    </div>

<?php

}
?>
 