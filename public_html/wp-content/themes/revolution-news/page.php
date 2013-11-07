<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="breadcrumb">
			<?php if (class_exists('breadcrumb_navigation_xt')) {
			echo 'Browse > ';
			// New breadcrumb object
			$mybreadcrumb = new breadcrumb_navigation_xt;
			// Options for breadcrumb_navigation_xt
			$mybreadcrumb->opt['title_blog'] = 'Home';
			$mybreadcrumb->opt['separator'] = ' / ';
			$mybreadcrumb->opt['singleblogpost_category_display'] = true;
			// Display the breadcrumb
			$mybreadcrumb->display();
			} ?>	
		</div>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1><br />
	
		<?php the_content(__('Read more'));?><div style="clear:both;"></div>
	 			
		<!--
		<?php trackback_rdf(); ?>
		-->
		
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>