<?php
if ( ! defined( 'ABSPATH' ) ) {
     exit;
 }                                         
 ?><h3><?php echo sprintf(__("Account ID# %d",'wp-hubspot-woocommerce'),esc_attr($id));
if($new_account_id != $id){
 ?> <a href="<?php echo esc_url($new_account); ?>" title="<?php esc_html_e('Add New Account','wp-hubspot-woocommerce'); ?>" class="add-new-h2"><?php esc_html_e("Add New Account",'wp-hubspot-woocommerce'); ?></a> 
 <?php
}
$name=$this->post('name',$info);    
 ?>
 <a href="<?php echo esc_url($link) ?>" class="add-new-h2" title="<?php esc_html_e('Back to Accounts','wp-hubspot-woocommerce'); ?>"><?php esc_html_e('Back to Accounts','wp-hubspot-woocommerce'); ?></a></h3>
  <div class="crm_fields_table">
    <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_name"><?php esc_html_e("Account Name",'wp-hubspot-woocommerce'); ?></label>
  </div>
  <div class="crm_field_cell2">
  <input type="text" name="crm[name]" value="<?php echo !empty($name) ? esc_html($name) : esc_html('Account #'.$id); ?>" id="vx_name" class="crm_text">

  </div>
  <div class="clear"></div>
  </div>

  <div class="vx_tabs" id="tab_vx_web" style="<?php if($this->post('api',$info) != "web"){echo 'display:none';} ?>">
  <div class="crm_field">
  <div class="crm_field_cell1"><label for="org_id"><?php esc_html_e('HubSpot API Key','wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2">
  <div class="vx_tr" >
  <div class="vx_td">
  <input type="password" id="org_id" name="crm[api_key]" class="crm_text" placeholder="<?php esc_html_e('HubSpot API Key','wp-hubspot-woocommerce'); ?>" value="<?php echo esc_html($this->post('api_key',$info)); ?>">
  </div><div class="vx_td2">
  <a href="#" class="button vx_toggle_btn vx_toggle_key" title="<?php esc_html_e('Toggle Key','wp-hubspot-woocommerce'); ?>"><?php esc_html_e('Show Key','wp-hubspot-woocommerce') ?></a>
  </div></div>
  </div>
  <div class="clear"></div>
  </div>  
   
  </div>
  <div class="vx_tabs" id="tab_vx_api" style="<?php if($this->post('api',$info) == "web"){echo 'display:none';} ?>">
  
  <div class="crm_field">
  <div class="crm_field_cell1"><label><?php esc_html_e('HubSpot Access','wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2">
  <?php if(isset($info['access_token'])  && $info['access_token']!="") {
      $code='HubSpot'; if(!empty($info['portal_id'])){ $code.=' portal #'.$info['portal_id']; }
  ?>
  <div style="padding-bottom: 8px;" class="vx_green"><i class="fa fa-check"></i> <?php
  echo sprintf(__("Authorized Connection to %s on %s",'wp-hubspot-woocommerce'),'<code>'.esc_html($code).'</code>',date('F d, Y h:i:s A',$info['_time']));
        ?></div>
  <?php
  }else{
  ?>
  <a class="button button-default button-hero sf_login" data-id="<?php echo esc_html($client['client_id']) ?>" href="https://app.hubspot.com/oauth/authorize?scope=<?php echo urlencode('crm.objects.owners.read crm.objects.contacts.write crm.objects.companies.write crm.objects.companies.read crm.lists.read crm.schemas.contacts.read crm.objects.contacts.read crm.schemas.companies.read').'&optional_scope='.urlencode('forms tickets automation crm.schemas.deals.read crm.objects.deals.read crm.objects.deals.write crm.lists.read crm.lists.write e-commerce content') ?>&state=<?php echo urlencode($link.'&'.$this->id."_tab_action=get_token&id=".$id."&vx_nonce=".$nonce);?>&client_id=<?php echo esc_html($client['client_id']) ?>&redirect_uri=<?php echo urlencode($client['call_back']); ?>" title="<?php esc_html_e("Login with HubSpot",'wp-hubspot-woocommerce'); ?>" > <i class="fa fa-lock"></i> <?php esc_html_e("Login with HubSpot",'wp-hubspot-woocommerce'); ?></a>
  <?php
  }
  ?></div>
  <div class="clear"></div>
  </div>                  
<?php if(isset($info['access_token'])  && $info['access_token']!="") { ?>
    <div class="crm_field">
  <div class="crm_field_cell1"><label><?php esc_html_e("Revoke Access",'wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2">  <a class="button button-secondary" id="vx_revoke" href="<?php echo esc_url($link."&".$this->id."_tab_action=get_token&vx_nonce=".$nonce.'&id='.$id);?>"><i class="fa fa-unlock"></i> <?php esc_html_e("Revoke Access",'wp-hubspot-woocommerce'); ?></a>
  </div>
  <div class="clear"></div>
  </div> 
  <?php
    }
  ?> 
   <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_custom_app_check"><?php esc_html_e("HubSpot App",'wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2" style="padding-top: 5px"><label for="vx_custom_app_check"><input type="checkbox" name="crm[custom_app]" id="vx_custom_app_check" value="yes" <?php if($this->post('custom_app',$info) == "yes"){echo 'checked="checked"';} ?> ><?php echo __("Use Own Private HubSpot Keys",'wp-hubspot-woocommerce'); $this->tooltip($tooltips['vx_custom_app']); ?></label>
  </div>
  <div class="clear"></div>
  </div>
  <div id="vx_custom_app_div" style="<?php if($this->post('custom_app',$info) != "yes"){echo 'display:none';} ?>">
     <div class="crm_field">
  <div class="crm_field_cell1"><label for="app_id"><?php esc_html_e('Client ID','wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2">
     <div class="vx_tr">
  <div class="vx_td">
  <input type="password" id="app_id" name="crm[app_id]" class="crm_text" placeholder="<?php esc_html_e('Client ID','wp-hubspot-woocommerce'); ?>" value="<?php echo esc_html($this->post('app_id',$info)); ?>">
  </div><div class="vx_td2">
  <a href="#" class="button vx_toggle_btn vx_toggle_key" title="<?php esc_html_e('Toggle Consumer Key','wp-hubspot-woocommerce'); ?>"><?php esc_html_e('Show Key','wp-hubspot-woocommerce') ?></a>
  
  </div></div>
</div>
  <div class="clear"></div>
  </div>
     <div class="crm_field">
  <div class="crm_field_cell1"><label for="app_secret"><?php esc_html_e('Client Secret','wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2">
       <div class="vx_tr" >
  <div class="vx_td">
 <input type="password" id="app_secret" name="crm[app_secret]" class="crm_text"  placeholder="<?php esc_html_e('Client Secret','wp-hubspot-woocommerce'); ?>" value="<?php echo esc_html($this->post('app_secret',$info)); ?>">
  </div><div class="vx_td2">
  <a href="#" class="button vx_toggle_btn vx_toggle_key" title="<?php esc_html_e('Toggle Consumer Secret','wp-hubspot-woocommerce'); ?>"><?php esc_html_e('Show Key','wp-hubspot-woocommerce') ?></a>
  
  </div></div>
  </div>
  <div class="clear"></div>
  </div>
       <div class="crm_field">
  <div class="crm_field_cell1"><label for="app_url"><?php esc_html_e("Redirect URL",'wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2"><input type="text" id="app_url" name="crm[app_url]" class="crm_text" placeholder="<?php esc_html_e("Redirect URL",'wp-hubspot-woocommerce'); ?>" value="<?php echo esc_html($this->post('app_url',$info)); ?>"> 
    <div class="howto">
   <div>1: <?php echo esc_url($link."&".$this->id."_tab_action=get_code");?></div>
   <div>2: https://www.crmperks.com/sf_auth/</div>
  </div>
  </div>
  <div class="clear"></div>
  </div>
  </div>
  </div> 
  <?php
      if(!empty($info['valid_token'])){
          ?>
                <div class="crm_field">
  <div class="crm_field_cell1"><label><?php esc_html_e("Test Connection",'wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2">      <button type="submit" class="button button-secondary" name="vx_test_connection"><i class="fa fa-refresh"></i> <?php esc_html_e("Test Connection",'wp-hubspot-woocommerce'); ?></button>
  </div>
  <div class="clear"></div>
  </div> 
          <?php
      }
  ?>
  <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_error_email"><?php esc_html_e("Notify by Email on Errors",'wp-hubspot-woocommerce'); ?></label></div>
  <div class="crm_field_cell2"><textarea name="crm[error_email]" id="vx_error_email" placeholder="<?php esc_html_e("Enter comma separated email addresses",'wp-hubspot-woocommerce'); ?>" class="crm_text" style="height: 70px"><?php echo isset($info['error_email']) ? esc_html($info['error_email']) : ""; ?></textarea>
  <span class="howto"><?php esc_html_e("Enter comma separated email addresses. An email will be sent to these email addresses if an order is not properly added to HubSpot. Leave blank to disable.",'wp-hubspot-woocommerce'); ?></span>
  </div>
  <div class="clear"></div>
  </div> 
  <button type="submit" value="save" class="button-primary" title="<?php esc_html_e('Save Changes','wp-hubspot-woocommerce'); ?>" name="save"><?php esc_html_e('Save Changes','wp-hubspot-woocommerce'); ?></button>  
  </div>  

  <script type="text/javascript">

  jQuery(document).ready(function($){


  $(".vx_tabs_radio").click(function(){
  $(".vx_tabs").hide();   
  $("#tab_"+this.id).show();   
  }); 
$(".sf_login").click(function(e){
    if($("#vx_custom_app_check").is(":checked")){
    var client_id=$(this).data('id');
    var new_id=$("#app_id").val();
    if(client_id!=new_id){
          e.preventDefault();   
     alert("<?php esc_html_e('HubSpot Client ID Changed.Please save new changes first','wp-hubspot-woocommerce') ?>");   
    }    
    }
})
  $("#vx_custom_app_check").click(function(){
     if($(this).is(":checked")){
         $("#vx_custom_app_div").show();
     }else{
            $("#vx_custom_app_div").hide();
     } 
  });
    $(document).on('click','#vx_revoke',function(e){
  
  if(!confirm('<?php esc_html_e('Notification - Remove Connection?','wp-hubspot-woocommerce'); ?>')){
  e.preventDefault();   
  }
  })   
  })
  </script>  