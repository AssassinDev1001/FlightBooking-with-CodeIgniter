<link href=<?=base_url("assets/global/plugins/fancybox/source/jquery.fancybox.css")?> rel="stylesheet" type="text/css">
<link href=<?=base_url("assets/admin/pages/css/portfolio.css")?> rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href=<?=base_url("assets/global/plugins/jquery-tags-input/jquery.tagsinput.css")?>>
<link rel="stylesheet" type="text/css" href=<?=base_url("assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css")?>>
<link rel="stylesheet" type="text/css" href=<?=base_url("assets/global/plugins/typeahead/typeahead.css")?>>
<link rel="stylesheet" type="text/css" href=<?=base_url("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css")?>>
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Photo Page <small>For admin only</small>
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
					<!-- BEGIN FILTER -->
					<div class="filter-v1 margin-top-10">
						<div class = 'row mix-grid thumbnails'>
							<div class="col-md-12 mix">
								<div class="mix-inner">
									<img class="img-responsive" src=<?=base_url("upload/background.jpg")?> alt="">
									<div class="mix-details">
										<h3><?=$photo_list[0]['name']?></h3>
										<p><?=$photo_list[0]['comment']?></p>
										<a class="mix-link" data-toggle="modal" href="#draggable" onclick = 'on_click_change(0);'>
											<i class="fa fa-link"></i>
										</a>
										<a class="mix-preview fancybox-button" href=<?=base_url("upload/background.jpg")?> title="Background" data-rel="fancybox-button">
											<i class="fa fa-search"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row mix-grid thumbnails">
							<?php foreach ($photo_list as $key => $value) {
								if($key == 0)
									continue;
							?>
							<div class="col-md-4 col-sm-6 mix">
								<div class="mix-inner">
									<img class="img-responsive" src=<?=base_url("upload/".$value['filename'])?> alt="">
									<div class="mix-details">
										<h3><?php echo $value['name'] ?></h3>
										<h4><?php echo "$".$value['price'] ?></h4>
										<a class="mix-link" data-toggle="modal" href="#draggable" onclick = 'on_click_change(<?=$key?>)'>
											<i class="fa fa-link"></i>
										</a>
										<a class="mix-preview fancybox-button" href=<?=base_url("upload/".$value['filename'])?> title=<?=$value['name']?> data-rel="fancybox-button">
											<i class="fa fa-search"></i>
										</a>
									</div>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
					<!-- END FILTER -->
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

<div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Detail</h4>
				<input type = "hidden" id = "selected_id">
			</div>
			<div class="modal-body">
				<div class = "row">
					<div class="col-md-5">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
								<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" id = 'origin_image'/>
							</div>
							<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
							</div>
							<div>
								<span class="btn default btn-file">
								<span class="fileinput-new">Select image </span>
								<span class="fileinput-exists">Change </span>
								<input type="file" name="photo" id = 'photo'></span>
								<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
								Remove </a>
							</div>
						</div>
					</div>
					<div class = "col-md-7">
						<form action="#">
							<div class="form-body">
								<div class="form-group">
									<label class="control-label">Name</label>
									<input type="text" class="form-control" placeholder="Enter text" id = "name_change">
								</div>
								<div class="form-group">
									<label class="control-label">Price</label>
									<input type="text" class="form-control" placeholder="Enter text" id = "price_change">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn default" data-dismiss="modal">Close</button>
				<button type="button" class="btn blue" onclick = "on_save()">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src=<?=base_url("assets/global/plugins/jquery-mixitup/jquery.mixitup.min.js")?>></script>
<script type="text/javascript" src=<?=base_url("assets/global/plugins/fancybox/source/jquery.fancybox.pack.js")?>></script>
<script type="text/javascript" src=<?=base_url("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js")?>></script>
<script src=<?=base_url("assets/admin/pages/scripts/portfolio.js")?>></script>
<script src=<?=base_url("assets/admin/pages/scripts/components-form-tools.js")?>></script>
<script src=<?=base_url("assets/custom/js/jquery.ajaxfileupload.js")?>></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- END CORE PLUGINS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script>
      jQuery(document).ready(function() {    
        Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		Portfolio.init();
      });
function on_click_change(index) {
	$("#selected_id").val(index + 1);
	var site_url = $('#site_url').val();
	var base_url = $('#base_url').val();
	$.post(
		site_url + "/PhotoController/get_photo_info",
		{
			"id" : index + 1
		},
		function(data) {
			if(data['name'] == "Background") {
				$("#name_change").attr('readonly', 'readonly');
				$("#name_change").val(data['name']);
				$("#price_change").val(data['comment']);
			} else {
				$("#name_change").removeAttr('readonly');
				$("#name_change").val(data['name']);
				$("#price_change").val(data['price']);
			}
			$('#origin_image').attr('src', base_url + "upload/"+ data['filename']);
		}
	);
}

function on_save() {
	var site_url = $('#site_url').val();

	var dataimg = new FormData();
    dataimg.append('id', $("#selected_id").val());
    dataimg.append('name', $("#name_change").val());
    dataimg.append('price', $("#price_change").val());
    dataimg.append('photo', $("#photo").prop("files")[0]);

    $.ajax({
        url: site_url + "/PhotoController/save_photo_info",
        type:"post",
        cache : false,
        processData: false,
		contentType: false,
        processType : false,
        enctype: 'multipart/form-data',
        dataType: "json",
        data: dataimg,
        success: function(data) {
        	$("#draggable").modal('hide');
        }
    });
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>