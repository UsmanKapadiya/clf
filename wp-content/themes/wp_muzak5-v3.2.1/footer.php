	</div><!-- /container -->







<!-- ########################### FOOTER ########################### -->



	<div class="container">


            <footer id="footer" class="sixteen columns group">

        <div id="footer_title">

                </div>
        <div class="four columns widget-area alpha">

          <?php dynamic_sidebar('footer-sidebar-one'); ?>
            <h1>Locations</h1>
            <hr>
        </div><!-- /widget-area -->

        <div class="six columns widget-area">



          <?php dynamic_sidebar('footer-sidebar-two'); ?>



                    <div class="sch">

                    <!--
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/home/see_schedule.png" id="schedule1"/>

                    -->
                        <p id="schedule1" class="check_schedule">See Schedule </p>

                    </div>
            <div id="schedule_expand1" style="display: none;">
            </div>



        </div><!-- /widget-area -->







        <div class="six columns widget-area">



          <?php dynamic_sidebar('footer-sidebar-three'); ?>



                    <div class="sch">


                    <!--
                      <img src="<?php echo get_bloginfo('template_directory');?>/images/home/see_schedule.png" id="schedule2" />

                    -->
                        <p id="schedule2" class="check_schedule">See Schedule </p>


                    </div>
            <div id="schedule_expand2" style="display: none;">
            </div>



        </div><!-- /widget-area -->


<!--
        <div class="four columns widget-area omega">

          <?php dynamic_sidebar('footer-sidebar-four'); ?>

					<div class="sch">



						<img src="<?php echo get_bloginfo('template_directory');?>/images/home/see_schedule.png"  />



					</div>



        </div>--><!-- /widget-area -->

      </footer><!-- /footer -->


		</div><!-- /container -->

            <div class="push"></div>

</div><!-- /wrap -->

	<div id="footer-wrap">







        <div id="clf_bottom_footer">

                  <div id="clf_footer_left" class="clf_footer_logo">
            	       <img src="<?php echo get_bloginfo('template_directory');?>/images/footer/footer-clf.png" />
                   </div>

                  <div id="clf_footer_center" class="clf_footer_logo">
                       <img src="<?php echo get_bloginfo('template_directory');?>/images/footer/footer-clf2.png" />
                  </div>

                  <div id="clf_footer_right" class="clf_footer_logo">
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/footer/footer-clf3.png" />
                  </div>



                <div id="copyright">
                    <!-- <p>© 2013 Intelli Design + Technology Inc. All Rights Reserved.</p> -->
<?php dynamic_sidebar('pages-sidebar-two'); ?>
                </div>


        </div>



	</div><!-- /footer-wrap -->


</div>


<?php wp_footer(); ?>

    </body>



</html>
