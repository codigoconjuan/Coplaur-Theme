<?php /* Template Name: Noticias */ get_header(); ?>

<div class="row">
<?php get_sidebar(); ?>

		<section class="col-sm-9">

			<h2><?php the_title(); ?></h2>

                        <ul id="noticias" class="row clear">
                            <?php $args = array(
                                'post_type' =>'noticias',
                                'order'=> 'DESC',
                                'orderby' => 'date',
                                'posts_per_page' => 5
                            ); ?>
                            
                            <?php $noticias = new WP_Query($args); while($noticias->have_posts() ): $noticias->the_post(); ?>
                            

                            
                                <li class="clear">
                                    <div class="col-sm-6 fotoNoticia">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('noticias', array('class' => 'img-responsive')); ?>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="<?php the_permalink(); ?>"><h3 class="noticia"><?php the_title(); ?></h3></a>
                                        <p class="fecha"><?php echo get_the_date(); ?></p>
                                        <?php html5wp_excerpt('html5wp_custom_post') ?>



                                    </div>

                                </li>
                            
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>

		</section>
		<!-- /section -->

</div>
<?php get_footer(); ?>
