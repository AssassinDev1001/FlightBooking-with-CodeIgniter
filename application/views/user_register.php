    <div class="main">
      <div class="container">
        
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Create an account</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form" action=<?=site_url("/CustomerController/insert_customer")?> method="post">
                    <fieldset>
                      <legend>Your personal details</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label">First Name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="firstname" name="firstname" value=<?=$param['firstname']?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label">Last Name <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="lastname" name="lastname" value=<?=$param['lastname']?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="email" name="email" value=<?=$param['email']?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="gender" class="col-lg-4 control-label">Gender <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <select class="form-control" id="gender" name="gender">
                            <?php if($param['gender'] == "1") { ?>
                            <option value="0" selected>Female</option>
                            <option value="1">Male</option>
                            <?php } else {?>
                            <option value="0">Female</option>
                            <option value="1" selected>Male</option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nationality" class="col-lg-4 control-label">Nationality <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="nationality" name="nationality" value=<?=$param['nationality']?>>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Phone Number <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="phone" name="phone" value=<?=$param['phone']?>>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Your password</legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="confirm-password">
                        </div>
                      </div>
                    </fieldset>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <?php if($note != "") {
                          echo '<p class="text-danger">';
                          echo $note;
                          echo '</p>';
                        }?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20"> 
                        <button type="submit" class="btn btn-primary">Create an account</button>
                        <button type="button" class="btn btn-default" onclick = "window.history.back();">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                 
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
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
    <script src=<?=base_url("assets/global/plugins/uniform/jquery.uniform.min.js")?> type="text/javascript"></script>

    <script src=<?=base_url("assets/frontend/layout/scripts/layout.js")?> type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>