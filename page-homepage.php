<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


			
			<div id="content" class="clearfix row">
        
        <div class="col-md-12">
          <h1 class="main-header">Recent Posts</h1>
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
                <?php if(get_field('sth_youtube')) :?>
                  <iframe width="250" height="190" src="https://www.youtube.com/embed/<?php the_field('sth_youtube');?>" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
              </a>
              </header>
            </div>
            <div class="media-body">
              <section class="post_content clearfix">
                <h2 class="post-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time></p>
                <p class="lead"><?php the_field('sth_summary'); ?></p>
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