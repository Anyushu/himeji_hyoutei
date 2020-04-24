<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<div id="sidebar">
<?php dynamic_sidebar('side-bar'); ?>
</div>