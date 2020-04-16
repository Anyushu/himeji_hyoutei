<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body class="drawer drawer--right">
<div id="loader"></div>
<div id="app">
<header class="main-header py-md-4 py-5">
<div class="container-fluid position-relative">
<h1 class="m-0 text-center">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/logo.png" alt="日本料理の【姫路瓢亭】会席や接待、法事などにご利用ください">
</a>
</h1>
<nav class="position-absolute d-md-block d-none">
<ul class="list-group list-group-horizontal">
<li class="list-group-item border-0 text-vertical bg-transparent">
<a class="text-body" href="<?php echo $home; ?>/">ホーム</a>
</li>
<li class="list-group-item border-0 text-vertical bg-transparent">
<a class="text-body" href="<?php echo $home; ?>/menu/">お品書き</a>
</li>
<li class="list-group-item border-0 text-vertical bg-transparent">
<a class="text-body" href="<?php echo $home; ?>/about/">店舗情報</a>
</li>
<li class="list-group-item border-0 text-vertical bg-transparent">
<a class="text-body" href="<?php echo $home; ?>/about#access">アクセス</a>
</li>
<li class="list-group-item border-0 text-vertical bg-transparent">
<a class="text-body" href="<?php echo $home; ?>/news/">新着情報</a>
</li>
<li class="list-group-item border-0 text-vertical bg-transparent">
<a class="text-body" href="<?php echo $home; ?>/about#recruit-about">求人情報</a>
</li>
</ul>
</nav>
</div>
<div class="drawer-wrap">
<button type="button" class="drawer-toggle drawer-hamburger">
<span class="drawer-hamburger-icon"></span>
</button>
<nav class="drawer-nav">
<div class="menu-left d-md-block d-none"></div>
<div class="menu-right text-center position-relative">
<div class="d-md-block d-none">
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/logo.png" alt="">
</a>
</div>
<div class="position-relative menu-wrap">
<ul class="drawer-menu text-vertical">
<li><a class="text-body" href="<?php echo $home; ?>/">ホーム</a></li>
<li><a class="text-body" href="<?php echo $home; ?>/menu/">お品書き</a></li>
<li><a class="text-body" href="<?php echo $home; ?>/about/">店舗情報</a></li>
<li><a class="text-body" href="<?php echo $home; ?>/about#access">アクセス</a></li>
<li><a class="text-body" href="<?php echo $home; ?>/news/">新着情報</a></li>
<li><a class="text-body" href="<?php echo $home; ?>/about#recruit-about">求人情報</a></li>
</ul>
</div>
<div class="tel-wrap">
<p>ご予約はこちら</p>
<p class="mb-md-0 mb-3"><a class="tel text-body" href="tel:0792228180">Tel.079-222-8180</a></p>
<p class="small m-0">お電話での完全予約制となっております。</p>
</div>
<div class="sns text-md-center text-right">
<a class="text-body" href="https://www.facebook.com/himeji.hyotei/" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a class="text-body mx-3" href="https://www.instagram.com/hyoutei2/" target="_blank"><i class="fab fa-instagram"></i></a>
<a class="text-body" href="" target="_blank"><i class="fab fa-youtube"></i></a>
</div>
</div>
</nav>
</div>
</header>
<main>