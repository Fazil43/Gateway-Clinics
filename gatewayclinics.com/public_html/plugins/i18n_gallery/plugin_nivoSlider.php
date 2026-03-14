<?php
/*
Description: Adds nivoSlider support to the i18n_gallery plugin for GetSimple CMS
Version: 0.9.5
Author: Alexander Amatuni
*/
i18n_gallery_register('nivoSlider', 'nivoSlider', 
  '<strong>NivoSlider</strong> is a responsive and very customizable JQuery slider.<br/>Version: 3.2<br/>Licensed under MIT<br/>'.
  '<a href="http://dev7studios.com/plugins/nivo-slider/" target="_blank">http://dev7studios.com/plugins/nivo-slider/</a>',
  'i18n_gallery_nivoSlider_edit', 'i18n_gallery_nivoSlider_header', 
  'i18n_gallery_nivoSlider_content');

function i18n_gallery_nivoSlider_edit($gallery) {
?>
  <style>
    #nivoSlider-editor input[type='checkbox'], #nivoSlider-editor select {width: auto !important;}
    #nivoSlider-editor .option {margin: 1em 0; clear: both; overflow: hidden}
    #nivoSlider-editor label, #nivoSlider-editor textarea {float: left;}
    #nivoSlider-editor select, #nivoSlider-editor input {float: left; margin: auto 0.5em !important;}
    #nivoSlider-editor hr {clear: both; border:none; color: #cccccc; background-color: #cccccc; height: 1px;} 
    #nivoSlider-editor h2 {margin: 0; padding: 0} 
  </style>
  <div id="nivoSlider-editor">
    <h2>Appearance</h2>
    <div class="option">
      <label><?php i18n('i18n_gallery/THEME'); ?></label>
      <select style="width: auto" name="nivoSlider-theme">
        <option value="default" <?php echo @$gallery['theme'] == 'default' ? 'selected="selected"' : ''; ?>> default </option>
        <option value="bar"     <?php echo @$gallery['theme'] == 'bar'     ? 'selected="selected"' : ''; ?>> bar     </option>
        <option value="dark"    <?php echo @$gallery['theme'] == 'dark'    ? 'selected="selected"' : ''; ?>> dark    </option>
        <option value="light"   <?php echo @$gallery['theme'] == 'light'   ? 'selected="selected"' : ''; ?>> light   </option>
        <option value="nano"    <?php echo @$gallery['theme'] == 'nano'    ? 'selected="selected"' : ''; ?>> nano    </option>
      </select>
    </div>
    <div class="option">
      <label><?php i18n('i18n_gallery/EFFECT'); ?></label>
      <select id="nivoSlider-effect" style="width:10em" name="nivoSlider-effect">
        <option value="random"             <?php echo @$gallery['effect'] == 'random'             ? 'selected="selected"' : ''; ?>> random             </option>
        <option value="sliceDown"          <?php echo @$gallery['effect'] == 'sliceDown'          ? 'selected="selected"' : ''; ?>> sliceDown          </option>
        <option value="sliceDownLeft"      <?php echo @$gallery['effect'] == 'sliceDownLeft'      ? 'selected="selected"' : ''; ?>> sliceDownLeft      </option>
        <option value="sliceUp"            <?php echo @$gallery['effect'] == 'sliceUp'            ? 'selected="selected"' : ''; ?>> sliceUp            </option>
        <option value="sliceUpLeft"        <?php echo @$gallery['effect'] == 'sliceUpLeft'        ? 'selected="selected"' : ''; ?>> sliceUpLeft        </option>
        <option value="sliceUpDown"        <?php echo @$gallery['effect'] == 'sliceUpDown'        ? 'selected="selected"' : ''; ?>> sliceUpDown        </option>
        <option value="sliceUpDownLeft"    <?php echo @$gallery['effect'] == 'sliceUpDownLeft'    ? 'selected="selected"' : ''; ?>> sliceUpDownLeft    </option>
        <option value="fold"               <?php echo @$gallery['effect'] == 'fold'               ? 'selected="selected"' : ''; ?>> fold               </option>
        <option value="fade"               <?php echo @$gallery['effect'] == 'fade'               ? 'selected="selected"' : ''; ?>> fade               </option>
        <option value="slideInRight"       <?php echo @$gallery['effect'] == 'slideInRight'       ? 'selected="selected"' : ''; ?>> slideInRight       </option>
        <option value="slideInLeft"        <?php echo @$gallery['effect'] == 'slideInLeft'        ? 'selected="selected"' : ''; ?>> slideInLeft        </option>
        <option value="boxRandom"          <?php echo @$gallery['effect'] == 'boxRandom'          ? 'selected="selected"' : ''; ?>> boxRandom          </option>
        <option value="boxRain"            <?php echo @$gallery['effect'] == 'boxRain'            ? 'selected="selected"' : ''; ?>> boxRain            </option>
        <option value="boxRainReverse"     <?php echo @$gallery['effect'] == 'boxRainReverse'     ? 'selected="selected"' : ''; ?>> boxRainReverse     </option>
        <option value="boxRainGrow"        <?php echo @$gallery['effect'] == 'boxRainGrow'        ? 'selected="selected"' : ''; ?>> boxRainGrow        </option>
        <option value="boxRainGrowReverse" <?php echo @$gallery['effect'] == 'boxRainGrowReverse' ? 'selected="selected"' : ''; ?>> boxRainGrowReverse </option>
      </select>
      
      <div id="nivoSlider-fx-slices">
        <label for="nivoSlider-slices">Slices</label><input name="nivoSlider-slices" type="text" value="<?php echo @$gallery['slices']; ?>" style="width:2em"/>     
      </div>
      <div class="option" id="nivoSlider-fx-boxes">
        <label>Boxes</label><input type="text" name="nivoSlider-boxRows" title="Number of rows" value="<?php echo @$gallery['boxRows']; ?>" style="width:2em"/> 
        <label>x</label><input type="text" name="nivoSlider-boxCols" title="Number of columns" value="<?php echo @$gallery['boxCols']; ?>" style="width:2em"/>
      </div>    
    </div>

    <hr/>
    <h2>Navigation</h2>
    <div class="option"> 
      <label><input type="checkbox" name="nivoSlider-disableDirectionNav" id="nivoSlider-disableDirectionNav" value="1" <?php echo @$gallery['disableDirectionNav'] ? 'checked="checked"' : ''; ?>>Disable direction control (prev & next) </label>
    </div>
    <div class="option"> 
      <label>"Prev" text</label><input name="nivoSlider-prevText" type="text" id="nivoSlider-prevText" value="<?php echo @$gallery['prevText'] ?>" style="width:5em"/>
      <label>"Next" text</label><input name="nivoSlider-nextText" type="text" id="nivoSlider-nextText" value="<?php echo @$gallery['nextText'] ?>" style="width:5em"/>   
    </div>
    <div class="option">
      <label><input type="checkbox" name="nivoSlider-disablePagination" id="nivoSlider-disablePagination" value="1" <?php echo @$gallery['disablePagination'] ? 'checked="checked"' : ''; ?>>Disable pagination</label>   
    </div>
    <div class="option">       
      <label><input type="checkbox" name="nivoSlider-paginationThumbs" id="nivoSlider-paginationThumbs" value="1" <?php echo @$gallery['paginationThumbs'] ? 'checked="checked"' : ''; ?>>Use thumbs for pagination</label>
    </div>  
    <hr/>
    <h2>Starting slide</h2>
    <div class="option">
      <select id="nivoSlider-startSlide" name="nivoSlider-startSlide">
  <?php 
    $count = count($gallery['items']);
    for ($i=0; $i<$count; $i++) {
      $item = $gallery['items'][$i]; 
  ?>
    <option value="<?php echo $i; ?>" <?php echo @$gallery['startSlide'] == $i ? 'selected="selected"' : ''; ?>><?php echo $item['filename']; ?></option>
  <?php
  }
  ?>    
      </select>
      <label><input type="checkbox" id="nivoSlider-randomStart" name="nivoSlider-randomStart" value="1" <?php echo @$gallery['randomStart'] ? 'checked="checked"' : ''; ?>>Random</label>
    </div>
    <hr/>
    <h2>Transitions</h2>
    <div class="option">
      <label><input type="checkbox" id="nivoSlider-manualAdvance" name="nivoSlider-manualAdvance" value="1" <?php echo @$gallery['manualAdvance'] ? 'checked="checked"' : ''; ?>>Manual advance</label>
      <label><input type="checkbox" id="nivoSlider-pauseOnHover" name="nivoSlider-pauseOnHover" value="1" <?php echo @$gallery['pauseOnHover'] ? 'checked="checked"' : ''; ?>>Pause on hover</label>
    </div>
    <div class="option">  
      <label><?php i18n('i18n_gallery/INTERVAL'); ?></label><input type="text" id="nivoSlider-interval" name="nivoSlider-interval" value="<?php echo @$gallery['interval']; ?>" style="width:3em"/>
    </div>
    <div class="option"><label>Animation speed, ms</label><input type="text" name="nivoSlider-animSpeed" value="<?php echo @$gallery['animSpeed']; ?>" style="width:3em"/></div>
    <hr/>
    <h2>Captions</h2>
    <div class="option">
      <label>Source</label>
      <select name="nivoSlider-captionsSource">
        <option value="description" <?php echo @$gallery['captionsSource'] == 'description' ? 'selected="selected"' : ''; ?>> description </option>
        <option value="title"       <?php echo @$gallery['captionsSource'] == 'title'       ? 'selected="selected"' : ''; ?>> title       </option>
        <option value="both"        <?php echo @$gallery['captionsSource'] == 'both'        ? 'selected="selected"' : ''; ?>> both        </option>
        <option value="none"        <?php echo @$gallery['captionsSource'] == 'none'        ? 'selected="selected"' : ''; ?>> none        </option>
      </select>
    </div>
    <hr/>
    <h2>Callback functions</h2>
    <div class="option">
      <select id="nivoSlider-callbacks">
        <option value="&nbsp;">&nbsp;</option>
        <option value="beforeChange">beforeChange</option>
        <option value="afterChange">afterChange</option>
        <option value="slideshowEnd">slideshowEnd</option>
        <option value="lastSlide">lastSlide</option>
        <option value="afterLoad">afterLoad</option>
      </select>      
        <p> = function() {</p>
        <div id="nivoSlider-beforeChange" class="nivoSlider-callbackEdit">
          <textarea name="nivoSlider-beforeChange"><?php echo @$gallery['beforeChange']; ?></textarea><p>//Triggers before a slide transition</p>
        </div>
        <div id="nivoSlider-afterChange" class="nivoSlider-callbackEdit">
          <textarea name="nivoSlider-afterChange"><?php echo @$gallery['afterChange']; ?></textarea><p>//Triggers after a slide transition</p>
        </div>
        <div id="nivoSlider-slideshowEnd" class="nivoSlider-callbackEdit">
          <textarea name="nivoSlider-slideshowEnd"><?php echo @$gallery['slideshowEnd']; ?></textarea><p>//Triggers after all slides have been shown</p>
        </div>
        <div id="nivoSlider-lastSlide" class="nivoSlider-callbackEdit">
          <textarea name="nivoSlider-lastSlide"><?php echo @$gallery['lastSlide']; ?></textarea><p>//Triggers when last slide is shown</p>
        </div>
        <div id="nivoSlider-afterLoad" class="nivoSlider-callbackEdit">
          <textarea name="nivoSlider-afterLoad"><?php echo @$gallery['afterLoad']; ?></textarea><p>//Triggers when slider has loaded</p>
        </div>
        <p>}</p>
    </div>    
  </div>
  
  <script type="text/javascript">
    function nivoEffect() {
        if ($('#nivoSlider-effect option:selected').text().indexOf('slice') > -1) $('#nivoSlider-fx-slices').show(); else $('#nivoSlider-fx-slices').hide();
        if ($('#nivoSlider-effect option:selected').text().indexOf('box')   > -1) $('#nivoSlider-fx-boxes').show();  else $('#nivoSlider-fx-boxes').hide();
    }
    
    function nivoManualAdvance() {
      var manual = $('#nivoSlider-manualAdvance').prop("checked");
      $('#nivoSlider-interval').attr('disabled', manual);
      $('#nivoSlider-pauseOnHover').attr('disabled', manual);
    }
    
    function nivoStartSlide() { $('#nivoSlider-startSlide').attr('disabled', $('#nivoSlider-randomStart').prop("checked")); }
    
    function nivoDirectionNav() {
      var nextPrev = $('#nivoSlider-disableDirectionNav').prop("checked");
      $('#nivoSlider-prevText').attr('disabled', nextPrev);
      $('#nivoSlider-nextText').attr('disabled', nextPrev);    
    }
    
    function nivoPagination() {
      var pagination = $('#nivoSlider-disablePagination').prop("checked");
      $('#nivoSlider-paginationThumbs').attr('disabled', pagination);
      if (pagination) $('#nivoSlider-paginationThumbs').attr('checked', false);
    }
    
    function nivoCallback() {
      var edit = $('#nivoSlider-callbacks option:selected').text().trim();
      $(".nivoSlider-callbackEdit").each( function() {$(this).hide();});
      if (edit != "") $('#nivoSlider-'+edit).show();
    }
    
    $(function() {
      $('#nivoSlider-effect').change(nivoEffect);
      $('#nivoSlider-manualAdvance').click(nivoManualAdvance);
      $('#nivoSlider-randomStart').click(nivoStartSlide);
      $('#nivoSlider-disableDirectionNav').click(nivoDirectionNav);
      $('#nivoSlider-disablePagination').click(nivoPagination);
      $('#nivoSlider-callbacks').change(nivoCallback);
      nivoEffect();
      nivoManualAdvance();
      nivoStartSlide();
      nivoDirectionNav();
      nivoPagination();
      nivoCallback();
    });
  </script>      
<?php
  }

function i18n_gallery_nivoSlider_header($gallery) {
  global $SITEURL;
  if (i18n_gallery_check($gallery,'jquery') && i18n_gallery_needs_include('jquery.js')) {
?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php
  }
  if (i18n_gallery_check($gallery,'js') && i18n_gallery_needs_include('jquery.nivo.slider.pack.js')) {
?>
    <script type="text/javascript" src="<?php echo $SITEURL; ?>plugins/i18n_gallery/js/jquery.nivo.slider.pack.js"></script>
<?php
  } 
  if (i18n_gallery_check($gallery,'css')) {
?> 
  <link rel="stylesheet" href="<?php echo $SITEURL; ?>plugins/i18n_gallery/css/nivo-slider-<?php echo @$gallery['theme']; ?>.css"/>
  <link rel="stylesheet" href="<?php echo $SITEURL; ?>plugins/i18n_gallery/css/nivo-slider.css"/>
<?php } ?>  
  <style>
    /* The Nivo Slider styles (essential)*/
    .nivoSlider { position:relative; width:100%; overflow: hidden; }
    .nivoSlider img { position:absolute; top:0px; left:0px; max-width: none;}
    .nivo-main-image { display: block !important; position: relative !important; width: 100% !important; }

    /* If an image is wrapped in a link */
    .nivoSlider a.nivo-imageLink {
      position:absolute;
      top:0px;
      left:0px;
      width:100%;
      height:100%;
      border:0;
      padding:0;
      margin:0;
      z-index:6;
      display:none;
      background:white; 
      filter:alpha(opacity=0); 
      opacity:0;
    }
    /* The slices and boxes in the Slider */
    .nivo-slice { display:block; position:absolute; z-index:5; height:100%; top:0; }
    .nivo-box { display:block; position:absolute; z-index:5; overflow:hidden; }
    .nivo-box img { display:block; }
    
    /* other fixes */
    .nivo-directionNav a {z-index:9;}
  </style>
  <script type="text/javascript">
  $(window).load(function() {
    $('#nivoSlider-<?php echo i18n_gallery_id($gallery) ?>').nivoSlider({
          effect: '<?php echo @$gallery['effect']; ?>',               
          slices: <?php echo intval(@$gallery['slices']) == 0 ? 15 : intval(@$gallery['slices']); ?>,    
          boxCols: <?php echo intval(@$gallery['boxCols']) == 0 ? 8 : intval(@$gallery['boxCols']); ?>,                     
          boxRows: <?php echo intval(@$gallery['boxRows']) == 0 ? 4 : intval(@$gallery['boxRows']); ?>,
          
          manualAdvance: <?php echo @$gallery['manualAdvance'] ? 'true' : 'false'; ?>,
          pauseTime: <?php echo intval(@$gallery['interval']) == 0 ? 3000 : intval(@$gallery['interval']); ?>,
          pauseOnHover: <?php echo @$gallery['pauseOnHover'] ? 'true' : 'false'; ?>,             
          animSpeed: <?php echo intval(@$gallery['animSpeed']) == 0 ? 500 : intval(@$gallery['animSpeed']); ?>,
          
          startSlide: <?php echo is_null (@$gallery['startSlide']) ? 0: @$gallery['startSlide']; ?>,       
          randomStart: <?php echo @$gallery['randomStart'] ? 'true' : 'false'; ?>,
          
          directionNav: <?php echo @$gallery['disableDirectionNav'] ? 'false' : 'true'; ?>, 
          prevText: '<?php echo (trim(@$gallery['prevText']) == NULL) ? 'Prev' : trim(@$gallery['prevText']); ?>', 
          nextText: '<?php echo (trim(@$gallery['nextText']) == NULL) ? 'Next' : trim(@$gallery['nextText']); ?>',
          controlNav: <?php echo @$gallery['disablePagination'] ? 'false' : 'true'; ?>, 
          controlNavThumbs: <?php echo @$gallery['paginationThumbs'] ? 'true' : 'false'; ?>,
          
          beforeChange: function() {<?php echo @$gallery['beforeChange'] ?>
          },
          afterChange: function() {<?php echo @$gallery['afterChange'] ?>
          },
          slideshowEnd: function() {<?php echo @$gallery['slideshowEnd'] ?>
          },
          lastSlide: function() {<?php echo @$gallery['lastSlide'] ?>
          },
          afterLoad: function() {<?php echo @$gallery['afterLoad'] ?>
          }
          })
    });
  </script>  
<?php
}

function i18n_gallery_nivoSlider_content($gallery) {
?>
  <div class="slider-wrapper theme-<?php echo @$gallery['theme']; ?>">
    <div class="ribbon"></div>
      <div id="nivoSlider-<?php echo i18n_gallery_id($gallery) ?>" class="nivoSlider">
<?php 
  $count = count($gallery['items']);
  for ($i=0; $i<$count; $i++) {
    $item = $gallery['items'][$i]; 
    $descr = @$item['_description'];
    $title = @$item['_title'];
    $caption = "";
    if (@$gallery['captionsSource'] == 'title') { $caption = $title;}
    else if (@$gallery['captionsSource'] == 'both') {$caption = $title."<br/>".$descr;}
    else {$caption = $descr;}
?>  
      <img src="<?php i18n_gallery_image_link($gallery,$item); ?>" alt="<?php htmlspecialchars($title) ?>" title="<?php echo htmlspecialchars($caption);?>"  
      <?php if (@$gallery['paginationThumbs']) { ?>
        data-thumb="<?php i18n_gallery_thumb_link($gallery,$item); ?>"
      <?php
      }?>
      />
<?php } ?>
    </div>
  </div>
<?php
} ?>