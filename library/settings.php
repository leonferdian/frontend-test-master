<?php
$main_menu = ['Hosting', 'Domain', 'Server', 'Website', 'Afiliasi', 'Promo', 'Pembayaran', 'Review', 'Kontak', 'Blog'];

$price = ["bayi" => "14.900", "pelajar" => "23.450", "personal" => "38.900", "bisnis" => "65.900"];
$price_bayi = '<p class="plan-price">'.substr($price['bayi'],0,2).'</p><p>'.substr($price['bayi'],3,3).'</p>';
$price_pelajar ='<p class="plan-price">'.substr($price['pelajar'],0,2).'</p><p>'.substr($price['pelajar'],3,3).'</p>';
$price_personal = '<p class="plan-price">'.substr($price['personal'],0,2).'</p><p>'.substr($price['personal'],3,3).'</p>';
$price_bisnis = '<p class="plan-price">'.substr($price['bisnis'],0,2).'</p><p>'.substr($price['bisnis'],3,3).'</p>';
$template = array(
    'title' => "Niagahoster",
    'mainmenu' => $main_menu,
    'price_bayi'=> $price_bayi,
    'price_pelajar'=> $price_pelajar,
    'price_personal'=> $price_personal,
    'price_bisnis'=> $price_bisnis
);