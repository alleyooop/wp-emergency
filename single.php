<?php get_header(); ?>
  <div id="content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div class="row">
        
        <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb();
        } ?>
        
      </div>
      
      <div class="row clearfix">
        <div id="main" class="col-sm-8" role="main">

          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            
            
            <header class="section-header">
              <h1 class="main-header" itemprop="headline"><?php the_title(); ?></h1>
            </header>
            
            <section class="post_content clearfix" itemprop="articleBody">
              <p class="lead"><?php the_field('sth_summary'); ?></p>
              <?php the_content(); ?>
              <?php wp_link_pages(); ?>
            </section> <!-- end article section -->
            
            <section id="video">
            <?php if(get_field('sth_youtube')) :?>
                  <iframe width="100%" height="450" src="https://www.youtube.com/embed/<?php the_field('sth_youtube');?>?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
            <?php endif; ?>
            
            </section>

            <footer>
              <a href="<?php echo home_url( '/' ); ?>">Back</a>
              <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>	
            </footer> <!-- end article footer -->
					
				  </article> <!-- end article -->
        </div>
        
        <?php get_sidebar(); // sidebar 1 ?>
       </div> <!-- end #main -->
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

        
        <?php endif; ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>