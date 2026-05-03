<?php
function ars_get_balance($u){
 return (int)get_user_meta($u,'ars_balance',true);
}

function ars_add_balance($u,$a){
 $b=ars_get_balance($u);
 update_user_meta($u,'ars_balance',$b+$a);
}
