<?php
add_action('admin_menu',function(){
 add_menu_page('ARS','ARS System','manage_options','ars','ars_admin');
});

function ars_admin(){

 echo "<h2>Withdraw Pending</h2>";

 $users=get_users();

 foreach($users as $u){
  $wd=get_user_meta($u->ID,'ars_wd');

  foreach($wd as $w){
   if($w['status']=='pending'){
    echo "<p>{$u->user_login} - Rp {$w['amount']}</p>";
   }
  }
 }
}
