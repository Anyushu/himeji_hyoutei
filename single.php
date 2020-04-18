<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<section class="sec">
  <div class="container">
    <div class="row">
      <div class="col-md-9 mb-md-0 mb-5 pr-md-5">
        <?php
if (have_posts()): while (have_posts()): the_post();
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
        <p class="mb-1">
          <small class="text-muted"><?php the_time('Y.m.d'); ?></small>
          <small class="text-muted"><?php echo $cat_name; ?></small>
        </p>
        <h2 class="h4 mb-5"><?php echo $ttl; ?></h2>
        <figure class="m-0 p-0 d-block w-100">
          <img class="img-fluid w-100" src="<?php echo $img; ?>" alt="<?php echo $ttl; ?>">
        </figure>
        <article class="post-main">
          <?php the_content(); ?>
        </article>
        <div class="sns-share row text-center">
          <div class="col">
            <a href="http://www.facebook.com/share.php?u=<?php echo $permalink; ?>" target="_blank" rel="nofollow">
              <i class="fab fa-facebook-f mr-md-2"></i>
              <span class="d-md-inline d-none">Facebook</span>
            </a>
          </div>
          <div class="col">
            <a href="https://twiter.com/share?url=<?php echo $permalink; ?>" target="_blank" rel="nofollow">
              <i class="fab fa-twitter mr-md-2"></i>
              <span class="d-md-inline d-none">Twitter</span>
            </a>
          </div>
          <div class="col">
            <a href="https://social-plugins.line.me/lineit/share?url=<?php echo $permalink; ?>" target="_blank" rel="nofollow">
              <i class="fab fa-line mr-md-2"></i>
              <span class="d-md-inline d-none">LINE</span>
            </a>
          </div>
        </div>
        <div class="mt-md-5"><br></div>
        <div class="mt-5">
          <a class="btn btn-dark" href="<?php echo $home; ?>/news/">一覧に戻る</a>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
</section>
<?php get_footer();