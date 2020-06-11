<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="container">

	<?php if(have_posts()):?>
	<?php while(have_posts()):the_post();?>
		<div class=""><hr></div>
		<div class="pd30 row">

		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
		<?php the_category(); ?>
		<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail('large')) : ?></a>
      <?php else : ?>
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/noimg.jpg" alt="noimage"></a>
      <?php endif ; ?>
		</div>

		<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-xs-12">
		<h2 class="pd150 em150 bold"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
		<p class="pd100 em50"><?php the_time('Y年n月j日'); ?></p>
		<p><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
		</div>

		</div>
		<?php endwhile;?>
		<div id="pager_navigation">
<?php posts_nav_link( '　', '<i class="fa fa-angle-left icon-left"></i>PREV', 'NEXT<i class="fa fa-angle-right icon-right"></i>' ); ?>
</div>
		<?php endif;?>

</div><!-- #container -->

<?php get_footer(); ?>