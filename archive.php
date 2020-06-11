<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="py-5 container">

	<?php if(have_posts()):?>
	<?php while(have_posts()):the_post();?>
		<div class=""><hr></div>
		<div class="pd30 row">

		<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
			<?php
			// ループの中で使用します。

			if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
			}
			else {
				echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/no-image.jpg" />';
			}
			?>
		</div>

		<div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 col-xs-12">
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