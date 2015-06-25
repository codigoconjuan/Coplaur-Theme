<?php  get_header(); ?>


            <!-- section -->
            <section class="row">
                    <?php get_sidebar(); ?>
                
                
                <div class="col-sm-9 sliderNoticias" style="padding-left:0;">
                    
                    <a href="<?php echo get_permalink(45); ?>"><img id="noticias" src="<?php echo get_stylesheet_directory_uri(); ?>/img/noticias.png"></a>
                    
                    <ul class="bxslider">
                        
                            <?php $args = array(
                                'post_type' =>'noticias',
                                'order'=> 'DESC',
                                'orderby' => 'date',
                                'posts_per_page' => 5
                            ); ?>
                            
                            <?php $noticias = new WP_Query($args); while($noticias->have_posts() ): $noticias->the_post(); ?>
                                
                                    <li>  
                                        <a href="<?php the_permalink(); ?>">
                                                <h2><?php the_title(); ?></h2>

                                                <?php the_post_thumbnail('slider'); ?>
                                        </a>
                                    </li>
                         
                            <?php endwhile; wp_reset_postdata(); ?>
                </div>


            </section>
            <!-- /section -->
            
            
            <section id="proyectos" class="row proyectos">
                
                <div id="proceso" class="col-sm-6 ">
                    <div class="proyecto">
                            <div class="wrapTitulos">
                                 <h3>Proyectos en <span>Proceso</span></h3>
                            </div>

                            <div class="row" style="margin:0;">
                                <div class="col-sm-5 listado" style="padding:0;">
                                    <ul id="paginadorProximos">
                                        
                                                <?php $args = array(
                                                        'post_type' => 'proyectos',
                                                        'posts_per_page' => 10,
                                                        'order' => 'DESC',
                                                        'orderby' => 'date',
                                                        'proyecto' => 'en-proceso'
                                                ); ?>

                                                <?php $p=0; ?>
                                                <?php $proceso = new WP_Query($args); while($proceso->have_posts() ): $proceso->the_post(); ?>
                                        
                         
                                                    <li>  <a data-slide-index="<?php echo $p; ?>" href=""><span></span><?php echo get_the_title(); ?></a></li>
                                                
                                                <?php $p++; endwhile;  wp_reset_postdata();     ?>
                                    </ul>
                                </div>
                                <div class="col-sm-7" style="padding:0;">
                                        <ul class="bxProximos">
                                                <?php $proceso = new WP_Query($args); while($proceso->have_posts() ): $proceso->the_post(); ?>
                         
                                                  <li><a href="<?php the_field('enlace'); ?>" target="_blank"><?php the_post_thumbnail('abajoSlider'); ?></a></li>
                
                                                <?php endwhile;  wp_reset_postdata();     ?>
                                        </ul>
                                </div>
                            </div>
                    </div>
                    
                </div>
                
                <div id="realizados" class="col-sm-6 ">
                    <div class="proyecto">
                            <div class="wrapTitulos">
                                    <h3>Proyectos <span>Realizados</span></h3>
                            </div>
                            <div class="row" style="margin:0;">
                                    <div class="col-sm-5 listado" style="padding:0;">
                                        <ul id="paginadorRealizados">
                                
                                                <?php $args = array(
                                                        'post_type' => 'proyectos',
                                                        'posts_per_page' => 10,
                                                        'order' => 'DESC',
                                                        'orderby' => 'date',
                                                        'proyecto' => 'realizado'
                                                ); ?>

                                                <?php $r=0; ?>
                                            
                                                <?php $realizados = new WP_Query($args); while($realizados->have_posts() ): $realizados->the_post(); ?>
                                                    
                                                    
                                                    <li>  <a data-slide-index="<?php echo $r; ?>" href=""><span></span><?php echo get_the_title(); ?></a></li>

                                                <?php $r++; endwhile;  wp_reset_postdata();     ?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-7" style="padding:0;">
                                            <ul class="bxRealizados">

                                                <?php $realizados = new WP_Query($args); while($realizados->have_posts() ): $realizados->the_post(); ?>
                         
                                                     <li><a href="<?php the_field('enlace'); ?>" target="_blank"><?php the_post_thumbnail('abajoSlider'); ?></a></li>
                
                                                <?php endwhile; $r++; wp_reset_postdata();     ?>
                                            </ul>
                                    </div>

                                
                                
                            </div>

                    </div>
                </div> <!-- ./#realizados  -->
                
            </section>



<?php get_footer(); ?>
