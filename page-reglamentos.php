<?php 
/* 
 * Template Name: Reglamentos
 */
get_header(); ?>

<div class="row">
<?php get_sidebar(); ?>



		<!-- section -->
		<section class="col-sm-9">

			<h2><?php the_title(); ?></h2>
			
			<a href="http://coplaur.guadalajara.gob.mx/?page_id=189" style="font-weight: bold; margin-bottom:20px; display:block;">Todos los Reglamentos</a>


           <?php 
            $url= "http://transparencia.guadalajara.gob.mx/transparencia/reglamentos";
            require_once('phpQuery.php');
            $html = file_get_contents($url);
            phpQuery::newDocumentHTML($html);
            $resultData = pq('div#reglamentos');
            $search = array('/sites/default/themes/ayuntamiento/images/','../../sites/default/files/');
            $replace =  array('http://transparencia.guadalajara.gob.mx/sites/default/themes/ayuntamiento/images/','http://transparencia.guadalajara.gob.mx/sites/default/files/');
            echo str_replace($search, $replace, $resultData) ;
        ?>


                            <style type="text/css">
                              @import url("http://transparencia.guadalajara.gob.mx/sites/default/themes/ayuntamiento/css/layout-fixed.css?W");
                              
                              div#reglamentos {
                                  margin:0;
                                  padding:0;
                              }
                              
                              #reglamentos .item {
                                  width: 410px;
                                  margin:6px;
                              }

                            </style>
                            
                            <script>
                            jQuery(document).ready(function($) {
                                $('#reglamentos .item .titulo').click(function(){
                                $('#reglamentos .listado .item .all').hide().removeClass('live');
                                $(this).next('.all').show().addClass('live');
                                $('#reglamentos .listado .item .all .listP').jScrollPane();
                               });
                               $('#reglamentos .listado .item .all .close').click(function(){
                                $(this).parent().parent().find('.all').hide();
                               });
                                  
                                
                            });

                                
                            </script>


		</section>

</div>


<?php get_footer(); ?>
