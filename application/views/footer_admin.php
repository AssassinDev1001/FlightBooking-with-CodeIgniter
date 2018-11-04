<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=<?=base_url("assets/global/plugins/respond.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/excanvas.min.js")?>></script> 
<![endif]-->
<script src=<?=base_url("assets/global/plugins/jquery.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/jquery-migrate.min.js")?> type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=<?=base_url("assets/global/plugins/jquery-ui/jquery-ui.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/bootstrap/js/bootstrap.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/jquery.blockui.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/jquery.cokie.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/uniform/jquery.uniform.min.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js")?> type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src=<?=base_url("assets/global/plugins/jquery-mixitup/jquery.mixitup.min.js")?>></script>
<script type="text/javascript" src=<?=base_url("assets/global/plugins/fancybox/source/jquery.fancybox.pack.js")?>></script>
<script type="text/javascript" src=<?=base_url("assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js")?>></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src=<?=base_url("assets/global/scripts/metronic.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/admin/layout4/scripts/layout.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/admin/layout4/scripts/demo.js")?> type="text/javascript"></script>
<script src=<?=base_url("assets/admin/pages/scripts/portfolio.js")?>></script>
<script src=<?=base_url("assets/admin/pages/scripts/components-form-tools.js")?>></script>
<script src=<?=base_url("assets/custom/js/jquery.ajaxfileupload.js")?>></script>
<script>
jQuery(document).ready(function() {  
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features
	});
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>