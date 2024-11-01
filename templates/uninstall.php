<?php
if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }                                            
 ?>  <h3><?php esc_html_e('Uninstall WooCommerce HubSpot Plugin','wp-hubspot-woocommerce'); ?></h3>
  <?php
  if(isset($_POST[$this->id.'_uninstall'])){ 
  ?>
  <div class="vxc_alert updated  below-h2">
  <h3><?php esc_html_e('Success','wp-hubspot-woocommerce'); ?></h3>
  <p><?php esc_html_e('WooCommerce HubSpot Plugin has been successfully uninstalled','wp-hubspot-woocommerce'); ?></p>
  <p>
  <a class="button button-hero button-primary" href="plugins.php"><?php esc_html_e("Go to Plugins Page",'wp-hubspot-woocommerce'); ?></a>
  </p>
  </div>
  <?php
  }else{
  ?>
  <div class="vxc_alert error below-h2">
  <h3><?php esc_html_e("Warning",'wp-hubspot-woocommerce'); ?></h3>
  <p><?php esc_html_e('This Operation will delete all HubSpot logs and feeds.','wp-hubspot-woocommerce'); ?></p>
  <p><button class="button button-hero button-secondary" id="vx_uninstall" type="submit" onclick="return confirm('<?php esc_html_e("Warning! ALL HubSpot Feeds and Logs will be deleted. This cannot be undone. OK to delete, Cancel to stop.", 'wp-hubspot-woocommerce')?>');" name="<?php echo esc_attr($this->id) ?>_uninstall" title="<?php esc_html_e("Uninstall",'wp-hubspot-woocommerce'); ?>" value="yes"><?php esc_html_e("Uninstall",'wp-hubspot-woocommerce'); ?></button></p>
  </div>
  <?php
  } ?>