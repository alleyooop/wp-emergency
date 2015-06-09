<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


			
			<div id="content" class="clearfix row">
        
        <div class="col-md-12">
          <h1>Recent Posts</h1>
        </div>
			
				<div id="main" class="col-sm-8 clearfix" role="main">
          
          
          <?php
           global $post;
           $myposts = get_posts();
           foreach($myposts as $post) :
           ?>
          
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
           <div class="media">
            <div class="media-left">
              <header>
              <a href="#">
                <?php the_post_thumbnail( 'wpbs-featured' ); ?>
                <img src="http://placehold.it/250x150">
              </a>
              </header>
            </div>
            <div class="media-body">
              <section class="post_content clearfix">
                <h2 class="media-heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time></p>
                <?php the_content(); ?>
              </section>
            </div>
          </div>
          </article>
          <hr>
          
         <?php endforeach; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>