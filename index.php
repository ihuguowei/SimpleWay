<?php get_header();?>
		<div class="main-content" id="">
			<div class="body-content clear">
				<div class="post-list left-column">
			<?php if( have_posts()) :?>
				<?php while (have_posts()):the_post();?>
					<?php include( TEMPLATEPATH . '/article.php'); ?>
				<?php endwhile;?>
				<nav class="page-navigation"><!-- Article Navigation Begin-->
					<?php page_navigation(8); ?>
				</nav> <!-- Article Navigation Ends-->
			<?php else:?>
				<article class="article" id="post-<?php the_ID();?>"><!-- Article Begain -->
					<div>
						<h2><?php _e("Not Found");?></h2> 
					</div>
				</article><!-- Article Ends -->
			<?php endif;?>
				</div><!-- Post Ends -->
				<aside class="main-right-aside right-column"><!-- Right Aside Begin -->
					<?php get_sidebar();?>
				</aside><!-- Right Aside Ends -->
			</div><!-- Content Ends -->
		</div><!-- Main Ends -->
		<!-- Footer Begin -->
		<?php get_footer(  ); ?>
