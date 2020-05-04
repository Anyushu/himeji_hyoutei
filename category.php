<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<section data-aos="fade" class="suv-mv">
<div class="container position-relative">
<img class="img-fluid w-100" src="<?php echo $wp_url; ?>/lib/images/sub_mv_news.png" alt="">
<h2><span class="text-white">新着</span>情報</h2>
</div>
</section>

<section class="sec">

<div class="container">

<div class="row">

<div class="col-md-9 mb-md-0 mb-5">
<?php
while (have_posts()):
the_post();
$id = get_the_ID();
$ttl = get_the_title();
$permalink = get_the_permalink();
$cat = get_the_category();
$cat_name = $cat[0]->name;
$img = '';
$img_m = '';
if (has_post_thumbnail()) {
    $img = get_the_post_thumbnail_url($id, 'large');
} else {
    $img = $wp_url.'/lib/images/no_img.png';
}
?>
<div data-aos="fade" class="card border-0 position-relative bg-transparent mb-5">

<div class="row no-gutters">

<div class="col-4 pr-md-4">
<img class="w-100 img-fluid" src="<?php echo $img; ?>" alt="<?php echo $ttl; ?>">
</div>

<div class="col-8">
<div class="card-body pt-0">
<p class="card-text mb-2 small">
<span class="text-muted mr-2"><?php the_time('Y.m.d'); ?></span>
<span class="text-muted"><?php echo $cat_name; ?></span></p>
<p class="card-title mb-0"><?php echo $ttl; ?></p>
</div>
</div>

</div>

<a href="<?php echo $permalink; ?>" class="stretched-link"></a>

</div>
<?php endwhile; ?>

<div class="text-center">
<?php wp_pagenavi(); ?>
</div>

</div>

<div class="col-md-3">
<?php get_sidebar(); ?>
</div>

</div>
<!-- row -->
</div>
<!-- container -->
</section>
<!-- sec -->
<?php get_footer();
