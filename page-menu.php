<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<?php get_header(); ?>
<section data-aos="fade-up" class="suv-mv">
<div class="container position-relative">
<img class="img-fluid w-100" src="<?php echo $wp_url; ?>/lib/images/sub_mv_menu.png" alt="">
<h2><span class="text-white">お品</span>書き</h2>
</div>
</section>
<?php
get_footer();
