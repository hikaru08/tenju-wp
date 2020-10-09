<?php get_header(); ?>

<div class="service_main">
<div class="service_main__photo">

<img src="<?php echo get_template_directory_uri()?>/images/info_image.jpg" alt="花の写真" />
<div class="service_main__photo__title">ご相談・お見積り</div>

<nav>
<div class="breadcrumb"><a href="<?php echo home_url(); ?>">トップページ</a> › <span class="current">ご相談・お見積り</span></div>
</nav>

</div>
</div>

<?php the_content(); ?>

<?php get_footer(); ?> 