<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<?php get_header(); ?>
<div data-aos="fade-up" class="home-mv position-relative">
<div class="container">
<div class="mv-slider">
<div><img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/mv_slide1.png" alt="スライド"></div>
<div><img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/mv_slide2.png" alt="スライド"></div>
<div><img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/mv_slide3.png" alt="スライド"></div>
<div><img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/mv_slide4.png" alt="スライド"></div>
</div>
</div>
<a class="text-body scroll-main smooth d-md-block d-none" href="#read">Scroll</a>
</div>

<div class="banner my-4 mx-auto">
<div class="container">
<div class="d-md-flex align-items-center justify-content-center">
<div class="text-center mr-md-5 mr-0 mb-md-0 mb-3" data-toggle="modal" data-target="#manga">
<img class="img-fluid w-100" src="<?php echo $wp_url; ?>/lib/images/banner1.png" alt="漫画">
</div>
<div class="text-center">
<a href="https://www.youtube.com/channel/UCYBGGNkdwuytkLm81qtFftw" target="_blank">
<img class="img-fluid w-100" src="<?php echo $wp_url; ?>/lib/images/banner2.png" alt="YouTube">
</a>
</div>
</div>
</div>
</div>
<div class="modal fade" id="manga" tabindex="-1" role="dialog" aria-labelledby="mangaModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/manga.jpg" alt="漫画">
</div>
</div>
</div>
</div>

<section id="read" class="sec">
<div class="container">
<div class="row align-items-stretch">
<div data-aos="fade-up" data-aos-delay="1000" class="col-md-5 mb-md-0 mb-4 order-md-last vertical-area">
<div class="text-vertical">
<h2 class="h3">おかえりなさい</h2>
<p>家のような落ち着き。
<br>故郷に帰ってきたような安心感。
<br>かげがえのないひと時を想い出の場所で
<br>大切な人と過ごす。
<br>瓢亭はそんな場所でありたい。</p>
</div>
</div>
<div data-aos="fade-up" class="col-md-7 order-md-first">
<div class="d-md-block d-none">
<div class="mb-2">
<img class="img-fluid w-100" src="<?php echo $wp_url; ?>/lib/images/read_main.png" alt="瓢亭画像1">
</div>
<div class="text-center">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/read_sub.png" alt="瓢亭画像2">
</div>
</div>
<div class="d-md-none d-block">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/read_main_sp.png" alt="瓢亭画像5">
</div>
</div>
</div>
</div>
</section>
<section id="intoro" class="sec">
<div class="container position-relative">
<span class="bg-illust position-absolute">
<img src="<?php echo $wp_url; ?>/lib/images/bg_illust_1.png" alt="瓢亭画像6">
</span>
<span class="bg-illust position-absolute">
<img src="<?php echo $wp_url; ?>/lib/images/bg_illust_4.png" alt="瓢亭画像7">
</span>
<span class="bg-illust position-absolute">
<img src="<?php echo $wp_url; ?>/lib/images/bg_illust_2.png" alt="瓢亭画像8">
</span>
<div class="row align-items-stretch">
<div data-aos="fade-up" data-aos-delay="1000" class="col-md-5 mb-md-0 mb-4 vertical-area">
<div class="text-vertical">
<h2 class="h3">ご縁を大切に</h2>
<p>語り継がれる瓢亭という想い出。
<br>受け継がれる瓢亭という場所。
<br>これから百年、二百年つづく
<br>ご縁を大切にしていきたい。</p>
</div>
</div>
<div data-aos="fade-up" class="col-md-7">
<div class="d-md-block d-none text-right">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/intor_main.png" alt="瓢亭画像9">
</div>
<div class="d-md-none d-md-none">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/intor_main_sp.png" alt="瓢亭画像10">
</div>
</div>
</div>
<div data-aos="fade-up" class="d-md-block d-none mt-3">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/intor_sub.png" alt="">
</div>
</div>
</section>
<div class="container position-relative" style="z-index: 1">
<div data-aos="fade-up" id="carousel-suppon" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carousel-suppon" data-slide-to="0" class="active"></li>
<li data-target="#carousel-suppon" data-slide-to="1"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?php echo $wp_url; ?>/lib/images/suppon1.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="<?php echo $wp_url; ?>/lib/images/suppon2.png" class="d-block w-100" alt="...">
</div>
</div>
</div>
</div>
<section id="suppon" class="bg-dark text-white">
<div class="container">
<div class="row sec align-items-center">
<div data-aos="fade-up" data-aos-delay="800" class="col-md-5 mb-md-0 mb-5">
<h2 class="mb-0 h4">すっぽんといえば<br>創業1916年の姫路瓢亭</h2>
</div>
<div data-aos="fade-up" data-aos-delay="1000" class="col-md-7">
<p class="mb-0">瓢亭のすっぽんスープは、
<br class="d-none d-md-block">ゆっくり・じっくり・愛情を込めて、８時間以上かけ、
<br class="d-none d-md-block">スープの素となる旨味を引き出した、
<br class="d-none d-md-block">濃い乳白色に濁ったスープになっています。
<br>他のお店では少なく、この濁りが瓢亭独自の旨味が
<br class="d-none d-md-block">凝縮されたスープなのです。</p>
</div>
</div>
<div class="row sec align-items-center">
<div data-aos="fade-up" class="col-md-5 order-md-last mb-md-0 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/history_side.png" alt="姫路瓢亭のすっぽん">
</div>
<div data-aos="fade-up" data-aos-delay="1000" class="col-md-7 order-md-first">
<h2 class="h4 my-md-4 my-5">姫路瓢亭のすっぽん</h2>
<p>瓢亭名物のすっぽんは大分県の安心院で
<br>丹精込めて育ったものをご提供しております。
<br>すっぽんは神経質な性格で日光浴を好む生き物です。
<br>そんなすっぽんが過ごす最適な場所が
<br>静寂で日照のある温泉地です。 </p>
<p class="mb-0">その地で生まれた赤ちゃんのすっぽんには
<br>モーツワルトを聞かせるなど、我が子を育てる以上に
<br>愛情を込めた環境でストレスなくリラックスした状態で
<br>育ったすっぽんは、肉質も柔らかく、
<br>脂身も豊富に蓄えられるのです。</p>
</div>
</div>
</div>
</section>
<section id="menu-shop">
<div class="container position-relative">
<span class="bg-illust position-absolute">
<img src="<?php echo $wp_url; ?>/lib/images/bg_illust_9.png" alt="">
</span>
<span class="bg-illust position-absolute">
<img src="<?php echo $wp_url; ?>/lib/images/bg_illust_8.png" alt="">
</span>
<div class="row align-items-stretch sec">
<div data-aos="fade-up" class="col-md-8 order-md-last">
<div id="carousel-menu" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators black">
<li data-target="#carousel-menu" data-slide-to="0" class="active"></li>
<li data-target="#carousel-menu" data-slide-to="1"></li>
<li data-target="#carousel-menu" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?php echo $wp_url; ?>/lib/images/slide_menu1.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="<?php echo $wp_url; ?>/lib/images/slide_menu2.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="<?php echo $wp_url; ?>/lib/images/slide_menu3.png" class="d-block w-100" alt="...">
</div>
</div>
</div>
</div>
<div data-aos="fade-up" data-aos-delay="1000" class="col-md-4 order-md-first mt-md-0 mt-5">
<div class="vertical-area h-100">
<div class="text-vertical">
<h3>お品書き</h3>
<p>当店自慢のすっぽん鍋やハモ鍋、
<br>珍しいウツボ鍋、⿊⽑和⽜のお鍋など
<br>多くの種類のお鍋を取り揃えています。
<br>ぜひご賞味ください。</p>
</div>
</div>
<div class="position-relative text-center mt-md-n5 mt-4">
<a class="btn btn-dark" href="<?php echo $home; ?>/menu/">お品書き</a>
</div>
</div>
</div>
<div class="row align-items-stretch sec">
<div data-aos="fade-up" class="col-md-8">
<div id="carousel-shop" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators black">
<li data-target="#carousel-shop" data-slide-to="0" class="active"></li>
<li data-target="#carousel-shop" data-slide-to="1"></li>
<li data-target="#carousel-shop" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?php echo $wp_url; ?>/lib/images/slide_shop1.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="<?php echo $wp_url; ?>/lib/images/slide_shop2.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="<?php echo $wp_url; ?>/lib/images/slide_shop3.png" class="d-block w-100" alt="...">
</div>
</div>
</div>
</div>
<div data-aos="fade-up" data-aos-delay="1000" class="col-md-4 mt-md-0 mt-5">
<div class="vertical-area h-100">
<div class="text-vertical">
<h3>店舗情報</h3>
<p>ゆったりできる個室を
<br>六部屋ご用意しております。
<br>活用シーンは様々で
<br>接待や顔合わせ、お友達となど、
<br>ぜひ瓢亭をご利用ください。 </p>
</div>
</div>
<div class="position-relative text-center mt-md-n5 mt-4">
<a class="btn btn-dark" href="<?php echo $home; ?>/about/">店舗情報</a>
</div>
</div>
</div>
</div>
</section>
<section id="recruit" class="sec position-relative">
<span class="bg-recruit"></span>
<div class="container position-relative">
<span class="bg-illust position-absolute">
<img src="<?php echo $wp_url; ?>/lib/images/bg_illust_7.png" alt="">
</span>
<div class="mb-5">
<div class="d-md-flex d-none justify-content-between align-items-start">
<div data-aos="fade-up" data-aos-delay="800">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/staff1.png" alt="">
</div>
<div data-aos="fade-up" data-aos-delay="1000" class="mx-2">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/staff2.png" alt="">
</div>
<div data-aos="fade-up" data-aos-delay="1200">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/staff3.png" alt="">
</div>
</div>
<div data-aos="fade-up" data-aos-delay="800" class="d-block d-md-none">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/staff_sp.png" alt="">
</div>
</div>
<div class="row align-items-center">
<div data-aos="fade-up" data-aos-delay="1000" class="col-md-5">
<h3>求人情報</h3>
<p>瓢亭で1日体験をしてみませんか？</p>
</div>
<div data-aos="fade-up" class="col-md-7 text-md-left text-center">
<a class="btn btn-dark mr-md-3 mb-md-0 mb-3" href="<?php echo $home; ?>/about#youtube-embed">スタッフインタビュー</a>
<a class="btn btn-dark" href="<?php echo $home; ?>/about#recruit-about">体験概要</a>
</div>
</div>
</div>
</section>
<section id="home-news" class="sec">
<div class="container position-relative">
<span class="bg-illust position-absolute">
<img src="<?php echo $wp_url; ?>/lib/images/bg_illust_3.png" alt="">
</span>
<div class="row align-items-stretch">
<div data-aos="fade-up" class="col-2">
<div class="vertical-area h-100">
<div class="text-vertical">
<h3 class="m-0">新着情報</h3>
</div>
</div>
</div>
<div data-aos="fade-up" class="col-10">
<ul class="news">
<?php
$args = ['posts_per_page' => 3];
$posts = get_posts($args);
foreach ($posts as $post):
setup_postdata($post);
$cat = get_the_category();
$cat_name = $cat[0]->name;
?>
<li>
<a class="text-body" href="<?php the_permalink(); ?>">
<p class="small">
<span class="mr-2"><?php the_time('Y.m.d'); ?></span>
<span class="text-muted"><?php echo $cat_name; ?></span>
</p>
<h4 class="m-0"><?php the_title(); ?></h4>
</a>
</li>
<?php
endforeach;
wp_reset_postdata();
?>
</ul>
</div>
</div>
<div class="text-md-right text-center">
<a class="btn btn-dark" href="<?php echo $home; ?>/news/">もっと見る</a>
</div>
</div>
</section>
<?php
get_footer();
