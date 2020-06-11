<?php

/*
Template Name: 個別投稿ページ
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>

<?php if(have_posts()): while(have_posts()):
the_post(); ?>

<div class="container">
<article <?php post_class(); ?>>

<?php if( is_page() ): ?>

     <?php the_content(); ?>

<?php else: ?>

     <div class="excerpt">
     <?php if( has_post_thumbnail() ): ?>
     <p><?php the_post_thumbnail( 'thumbnail' ); ?></p>
     <?php else: ?>
     <img src="<?php bloginfo('template_directory'); ?>/images/" alt="logo" width="100" height="100" />
     <?php endif; ?>

     <?php the_excerpt(); ?>
     <p class="more"><a href="<?php the_permalink(); ?>">
     <i class="fa fa-angle-double-right"></i><b>続きを読む</b></a></p>
     </div>

<?php endif; ?>

</article>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
