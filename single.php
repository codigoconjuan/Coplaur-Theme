<?php get_header(); ?>

<div class="row">

<?php get_sidebar(); ?>
	<main role="main" class="col-sm-9">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <div class="clear"></div>
                        
		
		<div class="wrapperImagen">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
            <!-- post title -->
            <h2>
                <?php the_title(); ?>
            </h2>
            <!-- /post title -->
	   </div>


                
             <div class="contenedor-informacion clearfix">
                
                        <div class="sociales clearfix">
                            <div class="facebook">
                                    <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    
                                    <div class="fb-share-button" data-href="" data-layout="button"></div>
                            </div> <!-- facebook -->
                            
                            
                            <div class="twitter">
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="AytoGDL" data-count="none">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            </div> <!-- twitter -->
        
                        </div> <!-- sociales -->
                        
                        
                                
                
                        <div class="entry-meta">
                            <span>
                               <?php the_date(); ?>
                            </span>
                            
                        </div><!-- .entry-meta -->
                
                
                </div> <!-- .contenedor-informacion-->      


			<?php the_content(); // Dynamic Content ?>


			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
</div>

<?php get_footer(); ?>
