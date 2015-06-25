<?php get_header(); ?>

<div class="row">
<?php get_sidebar(); ?>


		<!-- section -->
		<section class="col-sm-9">

			<h2><?php the_title(); ?></h2>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

				 <?php echo EM_Calendar::output(array('full'=>1, 'long_events'=>1, 'limit' => 10)) ?>       
                            
                            

                                            <?php      
                                        if (class_exists('EM_Events')) {                         
                                            if(isset($_GET['calendar_day'])) {
                                                $fecha = $_GET['calendar_day']; // Cuando presionan una fecha en el calendario esto se ejecuta
                                                echo '<ul id="listado" class="clear">';
                                                $EM_Events = EM_Events::get( array('limit'=>2,'orderby'=>'event_start_date', 'scope' => $fecha) );
                                                 
                                                         foreach ( $EM_Events as $EM_Event ) { ?>
                                                           <li class="evento">
                                                               <?php

                                                                   $categoria = $EM_Event->output("#_CATEGORYSLUG");
                                                                   $color = $EM_Event->output("#_CATEGORYCOLOR");

                                                               ?>

                                                               <div class="titulo <?php echo $categoria; ?>">
                                                                   <span  style="border-top: 49px solid <?php echo $color ?>"></span>
                                                                        <h3><?php echo $EM_Event->output("#_CATEGORYNAME"); ?></h3>
                                                               </div>
                                                               <br/>
                                                           

                                                                    <?php $contenido =  $EM_Event->post_content; 
                                                                    if($contenido) { ?>
                                                                        <p class="nombreCurso"><?php echo $contenido ?></p>
                                                                    <?php }  ?>
                                                                        
                                                                    <?php $fechaCurso = $EM_Event->output("#l #d de #F de #Y");
                                                                    if($fechaCurso) { ?>
                                                                        <p class="fechaCurso"><?php echo $fechaCurso ?> </p>
                                                                    <?php }  ?>
     
                                                                    <?php $lugar = $EM_Event->output("#_LOCATIONNAME");  
                                                                    if($lugar) { ?>
                                                                           <p class="sedeCurso"><?php echo $lugar;  ?></p>
                                                                     <?php }  ?>
                                                                           
                                                                    <?php $direccion = $EM_Event->output('#_LOCATIONADDRESS');  
                                                                    if($direccion) { ?>
                                                                        <p class="direccionCurso"><?php echo $direccion; ?></p>
                                                                    <?php }  ?>
                                             
                                                                    <?php $horario = $EM_Event->output("#_EVENTTIMES");
                                                                    if($horario) { ?>
                                                                            <p class="horarioCurso"><?php echo $horario ?></p>
                                                                    <?php }  ?>
                                                   

                                                        </li>
                                                        
                                            <?php  } ?> 
                                            <?php echo '   </ul>' ?>             
                                    <?php  } else {
                                    echo '<ul id="listado" class="clear">';
                                    $EM_Events = EM_Events::get( array('limit'=>10,'orderby'=>'event_start_date', 'scope' => 'today') );
                                                 
                                                         foreach ( $EM_Events as $EM_Event ) { ?>
                                                           <li class="evento">
                                                               <?php

                                                                   $categoria = $EM_Event->output("#_CATEGORYSLUG");
                                                                   $color = $EM_Event->output("#_CATEGORYCOLOR");

                                                               ?>

                                                               <div class="titulo <?php echo $categoria; ?>">
                                                                   <span  style="border-top: 49px solid <?php echo $color ?>"></span>
                                                                        <h3><?php echo $EM_Event->output("#_CATEGORYNAME"); ?></h3>
                                                               </div>
                                                               <br/>
                                                           

                                                                    <?php $contenido =  $EM_Event->post_content; 
                                                                    if($contenido) { ?>
                                                                        <p class="nombreCurso"><?php echo $contenido ?></p>
                                                                    <?php }  ?>
                                                                        
                                                                    <?php $fechaCurso = $EM_Event->output("#l #d de #F de #Y");
                                                                    if($fechaCurso) { ?>
                                                                        <p class="fechaCurso"><?php echo $fechaCurso ?> </p>
                                                                    <?php }  ?>
     
                                                                    <?php $lugar = $EM_Event->output("#_LOCATIONNAME");  
                                                                    if($lugar) { ?>
                                                                           <p class="sedeCurso"><?php echo $lugar;  ?></p>
                                                                     <?php }  ?>
                                                                           
                                                                    <?php $direccion = $EM_Event->output('#_LOCATIONADDRESS');  
                                                                    if($direccion) { ?>
                                                                        <p class="direccionCurso"><?php echo $direccion; ?></p>
                                                                    <?php }  ?>
                                             
                                                                    <?php $horario = $EM_Event->output("#_EVENTTIMES");
                                                                    if($horario) { ?>
                                                                            <p class="horarioCurso"><?php echo $horario ?></p>
                                                                    <?php }  ?>
                                                   

                                                        </li>
                                            
                                        
                                 <?php  } // fin de foreach ?>
                            
                            <?php  } // fin else ?>
                            <?php echo '</ul>' ?>
                            
                    <?php } // fin class_exists ?> 
                            
				<br class="clear">

				<?php edit_post_link(); ?>
                   

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>


</div>

<?php get_footer(); ?>
