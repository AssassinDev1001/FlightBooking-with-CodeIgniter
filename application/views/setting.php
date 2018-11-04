
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Setting Page <small>For admin only</small>
			</h3>
			<div class="page-bar">
				<!-- <ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Page Layouts</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Fluid Page</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div> -->
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
					<div class="col-md-12">
						<div class="tabbable-custom tabbable-noborder">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_menu" data-toggle="tab">Menu</a>
								</li>
								<li>
									<a href="#tab_contact" data-toggle="tab">Contact Way</a>
								</li>
								<li>
									<a href="#tab_backup" data-toggle="tab">Backup Database</a>
								</li>
								<li>
									<a href="#tab_admin" data-toggle="tab">Admin Info</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_menu">
									<div class="row">
										<div class="col-md-12">
											<!-- BEGIN PORTLET-->
											<div class="portlet-body form">
												<!-- BEGIN FORM-->
												<form action="#" class="form-horizontal form-bordered">
													<div class="form-body">
														<div class="form-group">
															<label class="control-label col-md-3">Flight</label>
															<div class="col-md-9">
																<input type="checkbox" class="make-switch" <?php if($setting['menu_flight'] == "true") echo 'checked'; ?> data-on-text="Show" name = "menu_item_flight">
															</div>
														</div>
													</div>
													<div class="form-body">
														<div class="form-group">
															<label class="control-label col-md-3">Hotel</label>
															<div class="col-md-9">
																<input type="checkbox" class="make-switch" <?php if($setting['menu_hotel'] == "true") echo 'checked'; ?> data-on-text="Show" name = "menu_item_hotel">
															</div>
														</div>
													</div>
													<div class="form-body">
														<div class="form-group">
															<label class="control-label col-md-3">Car Rental</label>
															<div class="col-md-9">
																<input type="checkbox" class="make-switch" <?php if($setting['menu_car'] == "true") echo 'checked'; ?> data-on-text="Show" name = "menu_item_car">
															</div>
														</div>
													</div>

												</form>
												<!-- END FORM-->
											</div>
											<!-- END PORTLET-->
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_contact">
									<div class="row">
										<div class="portlet-body form">
											<form role="form" class="form-horizontal">
												<div class="form-body">
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Phone Number</label>
														<div class="col-md-10">
															<input type="text" class="form-control input-lg" id="contact_phone" placeholder="Enter your phone number" value = <?=$setting['contact_phone']?>>
															<div class="form-control-focus">
															</div>
														</div>
													</div>
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Email Address</label>
														<div class="col-md-10">
															<input type="text" class="form-control input-lg" id="contact_email" placeholder="Enter your email" value = <?=$setting['contact_email']?>>
															<div class="form-control-focus">
															</div>
														</div>
													</div>
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-2 col-md-10">
															<button type="button" class="btn blue" onclick = "on_save_contact();">Save</button>
														</div>
													</div>
												</div>
											</form>	
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_backup">
									<div class="row">
										<a href = "backup_database" style = "color:#f1f3fa;">
											<button class="btn blue btn-block btn-lg m-icon-big" onclick =''>Backup Database<i class="m-icon-big-swapright m-icon-white"></i>
											</button>
										</a>
									</div>
								</div>
								<div class="tab-pane" id="tab_admin">
									<div class="row">
										<div class="portlet-body form">
											<form role="form" class="form-horizontal">
												<div class="form-body">
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Username</label>
														<div class="col-md-10">
															<input type="text" class="form-control input-lg" id="admin_username" placeholder="Username" value = <?=$setting['admin_username']?>>
															<div class="form-control-focus">
															</div>
														</div>
													</div>
													<div class="form-group form-md-line-input" hidden = "true">
														<label class="col-md-2 control-label" for="form_control_1">Current Password</label>
														<div class="col-md-10">
															<input type="text" class="form-control input-lg" id="admin_current_password" placeholder="Current Password">
															<div class="form-control-focus">
															</div>
														</div>
													</div>
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Password</label>
														<div class="col-md-10">
															<input type="text" class="form-control input-lg" id="admin_new_password" placeholder="New Password" value = <?=$setting['admin_password']?>>
															<div class="form-control-focus">
															</div>
														</div>
													</div>
													<div class="form-group form-md-line-input" hidden = 'true'>
														<label class="col-md-2 control-label" for="form_control_1">Confirm Password</label>
														<div class="col-md-10">
															<input type="text" class="form-control input-lg" id="admin_confirm_password" placeholder="Confirm Password">
															<div class="form-control-focus">
															</div>
														</div>
													</div>

												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-2 col-md-10">
															<button type="button" class="btn blue" onclick = "on_save_admin();">Save</button>
														</div>
													</div>
												</div>
											</form>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<!--Cooming Soon...-->
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features

	$('input[name="menu_item_flight"]').on('switchChange.bootstrapSwitch', function(event, state) {
		set_value('menu_flight', state);
	});

	$('input[name="menu_item_hotel"]').on('switchChange.bootstrapSwitch', function(event, state) {
		set_value('menu_hotel', state);
	});

	$('input[name="menu_item_car"]').on('switchChange.bootstrapSwitch', function(event, state) {
		set_value('menu_car', state);
	});
});

function set_value(name, value) {
	$.post("set_value", {
		"name" : name,
		"value" : value
	}, function(data) { ; });
}

function on_save_contact() {
	set_value("contact_phone", $("#contact_phone").val());
	set_value("contact_email", $("#contact_email").val());
}

function on_save_admin() {
	var username = $("#admin_username").val();
	var current_password = $("#admin_current_password").val();
	var new_password = $("#admin_new_password").val();
	var confirm_password = $("#admin_confirm_password").val();
	set_value("admin_username", username);
	set_value("admin_password", new_password);
}

function on_backup_database() {
	$.post("backup_database",
		function(data) {
			;
		}
	);
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>