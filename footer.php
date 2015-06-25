

		</div>
		<!-- /wrapper -->
                <!-- footer -->
                

                <footer class="footer " role="contentinfo">

                    <div class="container">
                        <?php
                            if(is_page('reglamentos') || is_page('capacitacion') || is_single()  ) {
                                echo '<a  data-scroll=""  href="#top"><img id="inicio" src="' . get_site_url() . '/wp-content/themes/coplaur/img/inicio.png" ></a>';
                            }
                        ?>
                            <div class="row">

                                <div class="col-sm-offset-4 col-sm-4 info">

                                    <h4>Comisión de planeación Urbana</h4>
                                    <p>Av. De las Rosas No. 1297</p>
                                    <p>Col. Jardínes del Bosque, C.P. 44510</p>
                                    <p>Teléfonos: 1201-8620 al 26</p>

                                </div>

                            </div>
                        
                    </div>
                    

                </footer>
                <!-- /footer -->
		<?php wp_footer(); ?>


	</body>
</html>
