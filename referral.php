<?php
add_action('user_register',function($u){
 if(isset($_GET['ref'])){
  $r=get_user_by('login',$_GET['ref']);
  if($r && $r->ID != $u){
   update_user_meta($u,'ref',$r->ID);
  }
 }
});

function ars_ref_bonus($u,$amount){
 $r=get_user_meta($u,'ref',true);
 if(!$r) return;

 $bonus=$amount*0.02;
 ars_add_balance($r,$bonus);
}
