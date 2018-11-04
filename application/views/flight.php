    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
      <div class="fullwidthbanner-container revolution-slider">
        <div class="fullwidthabnner">
          <ul id="revolutionul">
            <!-- THE NEW SLIDE -->
            <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb=<?=base_url("assets/frontend/pages/img/revolutionslider/thumbs/thumb2.jpg")?>>
              <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
              <img src=<?=base_url("upload/").$photo[0]['filename']?> alt="">
                                  
              <div class="caption lfb"
                data-x="640" 
                data-y="0" 
                data-speed="700" 
                data-start="1000" 
                data-easing="easeOutExpo">
                <!--<img src=<?=base_url("assets/frontend/pages/img/revolutionslider/man-winner.png")?> alt="Image 1">
                -->
              </div>
            </li>    
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
      </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
      	<div class="portlet-title">
	        <div class="row" style = 'margin-bottom:15px;'>
	          <div class = 'col-md-4'>
	            <input type="text" class="form-control" placeholder="Departure airport">
	          </div>
	          <div class = 'col-md-4'>
	            <input type="text" class="form-control" placeholder="Destination airport">
	          </div>
	          <div class = 'col-md-4'>
	            <div class="form-group">
	              <div class="radio-list">
	              	<label></label>
	                <label class="radio-inline">
	                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Round Trip 1 </label>
	                <label class="radio-inline">
	                <input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> One Way </label>
	              </div>
	            </div>      
	          </div>
	        </div>
	        <div class="row" style = 'margin-bottom:15px;'>
	          <div class='col-md-2'>
	            <input type="text" class="form-control" placeholder="Going time">
	          </div>
	          <div class='col-md-2'>
	            <input type="text" class="form-control" placeholder="Return time">
	          </div>
	          <div class='col-md-2'>
	            <input type="text" class="form-control" placeholder="Adult">
	          </div>
	          <div class='col-md-2'>
	            <input type="text" class="form-control" placeholder="Infant">
	          </div>
	          <div class='col-md-2'>
	            <select class = 'form-control'>
	              <option>Economy class</option>
	              <option>Premium economy</option>
	              <option>Business class</option>
	              <option>First class</option>
	            </select>
	          </div>
	          <div class = 'col-md-2'>
	            <a href="javascript:;" class="btn green">Search <i class="fa fa-search"></i></a>
	          </div>
	        </div>
		</div>
        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-9">
           
          </div>
          <div class="col-md-3 text-right">
            
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-12">
            <div class="owl-carousel owl-carousel4">
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[1]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[1]['filename'];?> class="fancybox-button" title=<?=$photo[1]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Name&nbsp&nbsp<?=$photo[1]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[1]['price']?></strong>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[2]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[2]['filename'];?> class="fancybox-button" title=<?=$photo[2]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Name&nbsp&nbsp<?=$photo[2]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[2]['price']?></strong>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[3]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[3]['filename'];?> class="fancybox-button" title=<?=$photo[3]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Name&nbsp&nbsp<?=$photo[3]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[3]['price']?></strong>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[4]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[4]['filename'];?> class="fancybox-button" title=<?=$photo[4]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Name&nbsp&nbsp<?=$photo[4]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[4]['price']?></strong>
                </a>
              </div>
            </div>       
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-carousel4">
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[5]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[5]['filename'];?> class="fancybox-button" title=<?=$photo[5]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Name&nbsp&nbsp<?=$photo[5]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[5]['price']?></strong>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[6]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[6]['filename'];?> class="fancybox-button" title=<?=$photo[6]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Name&nbsp&nbsp<?=$photo[6]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[6]['price']?></strong>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[7]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[7]['filename'];?> class="fancybox-button" title=<?=$photo[7]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                   <strong>Name&nbsp&nbsp<?=$photo[7]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[7]['price']?></strong>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src=<?=base_url("upload/").$photo[8]['filename'];?> alt="Amazing Project" class="img-responsive my_modify">
                  <!-- <a href="portfolio-item.html"><i class="fa fa-link"></i></a> -->
                  <a href=<?=base_url("upload/").$photo[8]['filename'];?> class="fancybox-button" title=<?=$photo[8]['name']?> data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Name&nbsp&nbsp<?=$photo[8]['name']?></strong>
                  <strong>Price&nbsp&nbsp&nbsp&nbsp<?="$".$photo[8]['price']?></strong>
                </a>
              </div>
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
           
        <!-- END TABS AND TESTIMONIALS -->

        <!-- BEGIN STEPS -->

        <!-- END STEPS -->
      </div>
    </div>

        <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2017 © Booking. ALL Rights Reserved. <a href="javascript:;">Privacy Policy</a> | <a href="javascript:;">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=<?=base_url("assets/global/plugins/respond.min.js")?>></script>
    <![endif]--> 
    <script src=<?=base_url("assets/global/plugins/jquery.min.js")?> type="text/javascript"></script>
    <script src=<?=base_url("assets/global/plugins/jquery-migrate.min.js")?> type="text/javascript"></script>
    <script src=<?=base_url("assets/global/plugins/bootstrap/js/bootstrap.min.js")?> type="text/javascript"></script>      
    <script src=<?=base_url("assets/frontend/layout/scripts/back-to-top.js")?> type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src=<?=base_url("assets/global/plugins/fancybox/source/jquery.fancybox.pack.js")?> type="text/javascript"></script><!-- pop up -->
    <script src=<?=base_url("assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js")?> type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->  
    <script src=<?=base_url("assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js")?> type="text/javascript"></script> 
    <script src=<?=base_url("assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js")?> type="text/javascript"></script> 
    <script src=<?=base_url("assets/frontend/pages/scripts/revo-slider-init.js")?> type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src=<?=base_url("assets/frontend/layout/scripts/layout.js")?> type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //scrolltotop['controlHTML'] = '<img src="/booking/assets/frontend/layout/img/up.png" style="width:40px; height:40px" />';
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>