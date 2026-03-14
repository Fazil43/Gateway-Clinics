<?php
/*
 * Plugin Name: Bootstrap3 Theme Settings
 * Description: Settings for the GetSimple Theme: Bootstrap3
 * Version: 1.0
 * Author: Rick Parrish
 * Author URI: http://www.rickparrish.ca
*/

# get correct id for plugin
$PluginId_Bootstrap3 = basename(__FILE__, ".php");

# add in this plugin's language file
i18n_merge($PluginId_Bootstrap3) || i18n_merge($PluginId_Bootstrap3, 'en_US');

# register plugin
register_plugin(
  $PluginId_Bootstrap3,                               # ID of plugin, should be filename minus php
  i18n_r($PluginId_Bootstrap3 . '/BOOTSTRAP3_TITLE'), # Title of plugin
  '1.0',                                              # Version of plugin
  'Rick Parrish',                                     # Author of plugin
  'http://www.rickparrish.ca',                        # Author URL
  i18n_r($PluginId_Bootstrap3 . '/BOOTSTRAP3_DESC'),  # Plugin Description
  'theme',                                            # Page type of plugin
  'DisplayBootstrap3Form'                             # Function that displays content
);

# hooks
# enable side menu if theme is bootstrap3 or on theme page and enabling bootstrap3, handle plugin exec before global is set
if ($TEMPLATE == "Bootstrap3" || (get_filename_id() == 'theme' && isset($_POST['template']) && $_POST['template'] == 'Bootstrap3')) {
  if (!($TEMPLATE == "Bootstrap3" && get_filename_id() == 'theme' && isset($_POST['template']) && $_POST['template'] != 'Bootstrap3')) {
    add_action('theme-sidebar', 'createSideMenu', array($PluginId_Bootstrap3, i18n_r($PluginId_Bootstrap3 . '/BOOTSTRAP3_TITLE'))); 
  }
}

function DisplayBootstrap3Form() {
  global $PluginId_Bootstrap3;

  $Themes = array(
    'Default',
    'Amelia',
    'Cerulean',
    'Cosmo',
    'Cyborg',
    'Darkly',
    'Flatly',
    'Journal',
    'Lumen',
    'Paper',
    'Readable',
    'Sandstone',
    'Simplex',
    'Slate',
    'Spacelab',
    'Superhero',
    'United',
    'Yeti'
  );

  // init error/success messages
  $ErrorMessage = null;
  $SuccessMessage = null;
  
  // get XML data (if it exists)
  $SettingsFile=GSDATAOTHERPATH . 'Bootstrap3Settings.xml';
  if (file_exists($SettingsFile)) {
    $Settings = getXML($SettingsFile);
  } else {
    $XML = <<<XML
<?xml version='1.0'?>
<document>
  <ContactEmail></ContactEmail>
  <DisplayOtherThemes>false</DisplayOtherThemes>
  <InvertNavigationBar>false</InvertNavigationBar>
  <SelectedTheme>Default</SelectedTheme>
  <TrackingId></TrackingId>
  <Logo></Logo>
  <Phone></Phone>
</document>
XML;
    $Settings = simplexml_load_string($XML);
  }
  
  // submitted form
  if (isset($_POST['cmdSubmit'])) {
    // Store selections in case of error and we re-display the form
    $Settings->ContactEmail = $_POST['txtContactEmail'];
    $Settings->DisplayOtherThemes = $_POST['chkDisplayOtherThemes'];
    $Settings->InvertNavigationBar = $_POST['chkInvertNavigationBar'];
    $Settings->SelectedTheme = $_POST['cboTheme'];
    $Settings->TrackingId = trim($_POST['txtTrackingId']);
	$Settings->Logo = trim($_POST['txtLogo']);
	$Settings->Phone = trim($_POST['txtPhone']);
	
    
    if (check_email_address($_POST['txtContactEmail'])) {
      $xml = @new SimpleXMLElement('<item></item>');
      $xml->addChild('ContactEmail', $_POST['txtContactEmail']);
      $xml->addChild('DisplayOtherThemes', $_POST['chkDisplayOtherThemes']);
      $xml->addChild('InvertNavigationBar', $_POST['chkInvertNavigationBar']);
      $xml->addChild('SelectedTheme', $_POST['cboTheme']);
      $xml->addChild('TrackingId', trim($_POST['txtTrackingId']));
	   $xml->addChild('Logo', trim($_POST['txtLogo']));
	      $xml->addChild('Phone', trim($_POST['txtPhone']));
		  
      if (!$xml->asXML($SettingsFile)) {
        $ErrorMessage = i18n_r('CHMOD_ERROR');
      } else {
        $Settings = getXML($SettingsFile);
        $SuccessMessage = i18n_r('SETTINGS_UPDATED');
      }
    } else {
      $ErrorMessage = i18n_r('EMAIL_ERROR'); 
    }
  }
  ?>
  
  <h3><?php i18n($PluginId_Bootstrap3 . '/BOOTSTRAP3_TITLE'); ?></h3>
  
  <?php 
    if($SuccessMessage) { 
      echo '<p style="color:#669933;"><b>'. $SuccessMessage .'</b></p>';
    } 
    if($ErrorMessage) { 
      echo '<p style="color:#cc0000;"><b>'. $ErrorMessage .'</b></p>';
    }
  ?>
  
  <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
    <p>
      <label for="cboTheme"><?php i18n($PluginId_Bootstrap3 . '/THEME_LABEL'); ?></label>
      <select name="cboTheme" id="cboTheme">
        <?php
          foreach ($Themes as $Theme) {
            $Selected = ($Settings->SelectedTheme == $Theme) ? ' selected="selected"' : '';
            echo "<option value=\"$Theme\"$Selected>$Theme</option>";
          }
        ?>
      </select>
    </p>
    
    <p>
      <label for="chkInvertNavigationBar"><?php i18n($PluginId_Bootstrap3.'/INVERT_NAVIGATION_BAR'); ?></label>
      <input type="checkbox" id="chkInvertNavigationBar" name="chkInvertNavigationBar" value="true"<?php echo $Settings->InvertNavigationBar == "true" ? 'checked="checked"' : '' ?>> 
    </p>

    <p>
      <label for="chkDisplayOtherThemes"><?php i18n($PluginId_Bootstrap3.'/DISPLAY_OTHER_THEMES_LABEL'); ?></label>
      <input type="checkbox" id="chkDisplayOtherThemes" name="chkDisplayOtherThemes" value="true"<?php echo $Settings->DisplayOtherThemes == "true" ? 'checked="checked"' : '' ?>> 
    </p>
        
    <p>
      <label for="txtContactEmail"><?php i18n($PluginId_Bootstrap3 . '/CONTACT_EMAIL'); ?></label>
      <input type="text" id="txtContactEmail" name="txtContactEmail" size="50" value="<?php echo $Settings->ContactEmail; ?>" />
    </p>

    <p>
      <label for="txtTrackingId"><?php i18n($PluginId_Bootstrap3 . '/TRACKING_ID'); ?></label>
      <input type="text" id="txtTrackingId" name="txtTrackingId" size="50" value="<?php echo $Settings->TrackingId; ?>" />
    </p>
	 <p>
      <label for="txtLogo"><?php i18n($PluginId_Bootstrap3 . '/LOGO'); ?></label>
      <input type="text" id="txtLogo" name="txtLogo" size="50" value="<?php echo $Settings->Logo; ?>" onClick='window.open("../admin/filebrowser.php?CKEditorFuncNum=1&returnid=txtLogo&type=images","mywindow","width=600,height=500")' />
    </p>
	<p>
      <label for="txtPhone"><?php i18n($PluginId_Bootstrap3 . '/PHONE'); ?></label>
     <input type='tel' size="50" id="txtPhone" name="txtPhone" title='Phone Number (Format: +99(99)9999-9999)' value="<?php echo $Settings->Phone; ?>" />
    </p>

    <p>
      <input type="submit" id="cmdSubmit" name="cmdSubmit"  class="submit" value="<?php i18n('BTN_SAVESETTINGS'); ?>" />
    </p>
  </form>
  
<?php
}
?>