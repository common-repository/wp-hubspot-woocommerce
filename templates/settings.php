<?php
if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }                                            
 ?>
<h3><?php esc_html_e('HubSpot Accounts','wp-hubspot-woocommerce'); ?> <a href="<?php echo esc_url($new_account); ?>" title="<?php esc_html_e('Add New Account','wp-hubspot-woocommerce'); ?>" class="add-new-h2"><?php esc_html_e('Add New Account','wp-hubspot-woocommerce'); ?></a> </h3>
  <p><?php echo sprintf(__("If you don't have a HubSpot account, you can %ssign up for one here%s.",'wp-hubspot-woocommerce'),'<a href="http://www.hubspot.com/" class="help_tip" data-tip="'.__('HubSpot Signup','wp-hubspot-woocommerce').'" target="_blank">','</a>'); ?> </p>

<table class="widefat fixed sort striped vx_accounts_table">
<thead>
<tr>
<th class="manage-column column-cb vx_pointer" style="width: 30px" ><?php esc_html_e("#",'wp-hubspot-woocommerce'); ?> <i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></th>  
<th class="manage-column vx_pointer"> <?php esc_html_e("Account",'wp-hubspot-woocommerce'); ?> <i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i> </th> 
<th class="manage-column"> <?php esc_html_e("Status",'wp-hubspot-woocommerce'); ?></th> 
<th class="manage-column vx_pointer"> <?php esc_html_e("Created",'wp-hubspot-woocommerce'); ?> <i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></th> 
<th class="manage-column vx_pointer"> <?php esc_html_e("Last Connection",'wp-hubspot-woocommerce'); ?> <i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></th> 
<th class="manage-column"> <?php esc_html_e("Action",'wp-hubspot-woocommerce'); ?> </th> </tr>
</thead>
<tbody>
<?php

$nonce=wp_create_nonce("vx_nonce");
if(is_array($accounts) && count($accounts) > 0){
 $sno=0;   
foreach($accounts as $id=>$v){
    $sno++; $id=$v['id'];
    $icon= $v['status'] == "1" ? 'fa-check vx_green' : 'fa-times vx_red';
    $icon_title= $v['status'] == "1" ? __('Connected','wp-hubspot-woocommerce') : __('Disconnected','wp-hubspot-woocommerce');
 ?>
<tr> <td><?php echo esc_attr($id) ?></td>  <td> <?php echo esc_html($v['name']) ?></td> 
<td> <i class="fa <?php echo esc_html($icon) ?> help_tip" data-tip="<?php echo esc_html($icon_title) ?>"></i> </td> <td> <?php echo date('M-d-Y H:i:s', strtotime($v['time'])+$offset) ?> </td>
 <td> <?php echo date('M-d-Y H:i:s', strtotime($v['updated'])+$offset); ?> </td> 
<td><span class="row-actions visible"> 
<a href="<?php echo esc_url($link."&id=".$id) ?>" title="<?php esc_html_e('View/Edit','wp-hubspot-woocommerce'); ?>"><?php 
if($v['status'] == "1"){
esc_html_e("View",'wp-hubspot-woocommerce');
}else{ 
esc_html_e("Edit",'wp-hubspot-woocommerce'); 
}
?></a>
 | <span class="delete"><a href="<?php echo esc_url($link.'&'.$this->id.'_tab_action=del_account&id='.$id.'&vx_nonce='.$nonce) ?>" class="vx_del_account" title="<?php esc_html_e("Delete",'wp-hubspot-woocommerce'); ?>" > <?php esc_html_e("Delete",'wp-hubspot-woocommerce'); ?> </a></span></span> </td> </tr>
<?php
} }else{
?>
<tr><td colspan="6"><p><?php echo sprintf(__("No HubSpot Account Found. %sAdd New Account%s",'wp-hubspot-woocommerce'),'<a href="'.esc_url($new_account).'">','</a>'); ?></p></td></tr>
<?php
}
?>
</tbody>
<tfoot>
<tr> <th class="manage-column column-cb" style="width: 30px" ><?php esc_html_e("#",'wp-hubspot-woocommerce'); ?></th>  
<th class="manage-column"> <?php esc_html_e("Account",'wp-hubspot-woocommerce'); ?> </th> 
<th class="manage-column"> <?php esc_html_e("Status",'wp-hubspot-woocommerce'); ?> </th> 
<th class="manage-column"> <?php esc_html_e("Created",'wp-hubspot-woocommerce'); ?> </th> 
<th class="manage-column"> <?php esc_html_e("Last Connection",'wp-hubspot-woocommerce'); ?> </th> 
<th class="manage-column"> <?php esc_html_e("Action",'wp-hubspot-woocommerce'); ?> </th> </tr>
</tfoot>
</table>
<div style="margin-top: 40px;">
<h3><?php esc_html_e('Optional Settings','wp-hubspot-woocommerce');  ?></h3>

<table class="form-table">
  <tr>
  <th scope="row"><label for="vx_plugin_data"><?php esc_html_e("Plugin Data", 'wp-hubspot-woocommerce'); ?></label>
  </th>
  <td>
<label for="vx_plugin_data"><input type="checkbox" name="meta[plugin_data]" value="yes" <?php if($this->post('plugin_data',$meta) == "yes"){echo 'checked="checked"';} ?> id="vx_plugin_data"><?php esc_html_e('On deleting this plugin remove all of its data','wp-hubspot-woocommerce'); ?></label>
  </td>
  </tr>

<tr>
<th><label for="update_meta"><?php esc_html_e("Update Order",'wp-hubspot-woocommerce');  ?></label></th>
<td><label for="update_meta"><input type="checkbox" id="update_meta" name="meta[update]" value="yes" <?php if($this->post('update',$meta) == "yes"){echo 'checked="checked"';} ?> ><?php esc_html_e("Send order data to HubSpot when updated in WooCommerce",'wp-hubspot-woocommerce');  ?></label></td>
</tr>
<tr>
<th><label for="delete_meta"><?php esc_html_e("Trash Order",'wp-hubspot-woocommerce');  ?></label></th>
<td><label for="delete_meta"><input type="checkbox" id="delete_meta" name="meta[delete]" value="yes" <?php if($this->post('delete',$meta) == "yes"){echo 'checked="checked"';} ?> ><?php esc_html_e("Delete order data from HubSpot when trashed from WooCommerce",'wp-hubspot-woocommerce');  ?></label></td>
</tr>
<tr>
<th><label for="restore_meta"><?php esc_html_e("Restore Order",'wp-hubspot-woocommerce');  ?></label></th>
<td><label for="restore_meta"><input type="checkbox" id="restore_meta" name="meta[restore]" value="yes" <?php if($this->post('restore',$meta) == "yes"){echo 'checked="checked"';} ?> ><?php esc_html_e("Restore order data in HubSpot when restored in WooCommerce",'wp-hubspot-woocommerce');  ?></label></td>
</tr>
<tr>
<th><label for="notes_meta"><?php esc_html_e("Order Notes",'wp-hubspot-woocommerce');  ?></label></th>
<td><label for="notes_meta"><input type="checkbox" id="notes_meta" name="meta[notes]" value="yes" <?php if($this->post('notes',$meta) == "yes"){echo 'checked="checked"';} ?> ><?php esc_html_e("Add / Delete Notes to HubSpot when added / deleted in WooCommerce",'wp-hubspot-woocommerce'); ?></label></td>
</tr>
</table>
<p class="submit_vx">
  <button type="submit" value="save" class="button-primary" title="<?php esc_html_e('Save Changes','wp-hubspot-woocommerce'); ?>" name="save"><?php esc_html_e('Save Changes','wp-hubspot-woocommerce'); ?></button>
  <input type="hidden" name="vx_meta" value="1"> 
</p>
</div>
 
<script>
jQuery(document).ready(function($){
    $('.vx_accounts_table').tablesorter( {headers: { 2:{sorter: false}, 5:{sorter: false}}} );

   $(".vx_del_account").click(function(e){
     if(!confirm('<?php esc_html_e('Are you sure to delete Account ?','wp-hubspot-woocommerce') ?>')){
         e.preventDefault();
     }  
   }) 
})
</script>
  