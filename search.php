<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

	        <h3><?php echo sprintf( __( '%s Resultados de la búsqueda ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            
            
                   
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            

            
                    <!-- post title -->
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <!-- /post title -->

            
                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

            
                </article>
                <!-- /article -->
            
            <?php endwhile; ?>
            
            <?php else: ?>
            
                <!-- article -->
                <article class="noResultados">
                    <h3><?php _e( 'Su búsqueda no produjo resultados.', 'html5blank' ); ?></h3>
                    <ul>
                        <li>Verifique que las palabras estén bien escritas.</li>
                        <li>No encierre la frase entre comillas si desea buscar por cada palabra individualmente. fabulosa búsqueda generalmente devolverá más resultados que "fabulosa búsqueda".</li>
                        <li>Considere relajar su búsqueda con OR. fabulosa OR búsqueda generalmente devolverá más resultados que fabulosa búsqueda.</li>
                    </ul>
                </article>
                <!-- /article -->
            
            <?php endif; ?>


			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
