<?php
function ars_withdraw($u,$amount){

 if($amount < 20000) return "Min WD 20rb";

 $bal=ars_get_balance($u);

 if($bal < $amount) return "Saldo tidak cukup";

 update_user_meta($u,'ars_balance',$bal-$amount);

 add_user_meta($u,'ars_wd',[
  'amount'=>$amount,
  'status'=>'pending'
 ]);

 return "Berhasil";
}
