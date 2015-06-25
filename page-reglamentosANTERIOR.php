<?php 
/* 
 * Template Name: Todos los reglamentos
 */
get_header(); ?>

<div class="row">
<?php get_sidebar(); ?>



		<!-- section -->
		<section class="col-sm-9">

			<h2><?php the_title(); ?></h2>


                        
                        
                        <ul id="reglamentos" class="reglamentos">     
                        </ul>

                        
                        
                        
				<?php edit_post_link(); ?>



		</section>

</div>

<script>
    jQuery(function() {
        
        // codigo para cargar los pdfs dinamicamente en el iframe de abajo
        jQuery("ul#reglamentos li a").on('click',function() {
                enlace = jQuery(this).attr('data-url');
                jQuery("iframe#pdf").attr('src',enlace);
        });
        
        jQuery.getJSON('http://transparencia.guadalajara.gob.mx/transparencia/reglamentos-Json', function(data) {
 
            var template = jQuery('#tramites-coplaur').html();
            var info = Mustache.to_html(template, data);
            jQuery('#reglamentos').html(info);
            jQuery('ul#reglamentos li:even').addClass('gris');
        });
        
       jQuery('.todos-los-reglamentos .search-input').keyup(function(e){
           var txt = jQuery('.search-input').val();           
                      

           jQuery('#reglamentos li').hide();
           jQuery('#reglamentos li').each(function(){
                if(jQuery(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
                    jQuery(this).show();
                }
             });
           return false;
           
            jQuery('.todos-los-reglamentos form.search').submit (function() {
                 if(formValidated())
                  return true;
                 return false;
                });
             });
         
          setTimeout(function() {
              jQuery('ul#reglamentos').easyPaginate({
                    step:20
              });
                
                
                // Esto hace que el primer enlace ya tenga un pdf
                jQuery("ul#reglamentos li a").on('click',function() {
                        enlace = jQuery(this).attr('data-url');
                        console.log(enlace);
                        jQuery("iframe#pdf").attr('src',enlace);
                });
          },2000);


         
         });
    
    
</script>

<script id="tramites-coplaur" type="text/template">
    {{#nodes}}
        <li>
            <a data-toggle="modal" data-target="#myModal" data-url="{{node.url}}">
                  {{node.Reglamento}}
            </a>
        </li>
    {{/nodes}}
</script>




<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <iframe id="pdf" src="" style="width:100%; height:700px;" frameborder="0"></iframe>
    </div>
  </div>
</div>


<?php get_footer(); ?>
