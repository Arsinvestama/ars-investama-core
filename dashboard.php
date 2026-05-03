<?php
add_shortcode('ars_dashboard',function(){

 if(!is_user_logged_in()) return "Login dulu";

 $u=get_current_user_id();
 $b=ars_get_balance($u);

 ob_start(); ?>

 <div class="ars-card">
 <h2>Saldo</h2>
 <h1 id="saldo"><?php echo number_format($b); ?></h1>
 </div>

 <a class="ars-btn" href="/topup">Top Up</a>
 <a class="ars-btn" href="/withdraw">Withdraw</a>

 <?php
 return ob_get_clean();
});
