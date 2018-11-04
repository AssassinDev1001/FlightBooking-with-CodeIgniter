
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
		<div class="page-content">

			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Editable Table
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button id="sample_editable_1_new" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 First Name
								</th>
								<th>
									 Last Name
								</th>
								<th>
									 Email
								</th>
								<th>
									 Password
								</th>
								<th>
									 Gender
								</th>
								<th>
									 Nationality
								</th>
								<th>
									 Phone Number
								</th>
								<th>
									 Status
								</th>
								<th>
									 Edit
								</th>
								<th>
									 Delete
								</th>
							</tr>
							</thead>
							<tbody>
								<?php
									foreach ($rows as $user) 
									{
										echo '<tr>';
										echo '<td>'.$user['firstname'].'</td>';
										echo '<td>'.$user['lastname'].'</td>';
										echo '<td>'.$user['email'].'</td>';
										echo '<td>'.$user['password'].'</td>';
										echo '<td>'.$user['gender'].'</td>';
										echo '<td>'.$user['nationality'].'</td>';
										echo '<td>'.$user['phone'].'</td>';
										echo '<td>';
											if ($user['status']) echo 'Approved';
											else echo 'Waiting';
										echo '</td>';
										echo '<td><a class="edit" href="javascript:;">
												Edit </a> </td>';
										echo '<td><a class="delete" href="javascript:;">
												Delete </a>	</td>';
										echo '</tr>';
									}
								?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
		</div>
		<!-- END CONTENT -->
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


<!-- END CONTAINER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->

<script src=<?=base_url("assets/global/plugins/jquery.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/jquery-migrate.min.js")?>></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=<?=base_url("assets/global/plugins/jquery-ui/jquery-ui.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/bootstrap/js/bootstrap.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/jquery.blockui.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/jquery.cokie.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/uniform/jquery.uniform.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js")?>></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=<?=base_url("assets/global/plugins/select2/select2.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js")?>></script>
<script src=<?=base_url("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js")?>></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=<?=base_url("assets/global/scripts/metronic.js")?>></script>
<script src=<?=base_url("assets/admin/layout4/scripts/layout.js")?>></script>
<script src=<?=base_url("assets/admin/layout4/scripts/demo.js")?>></script>
<script>
jQuery(document).ready(function() {       
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features
	TableEditable.init();
});
var TableEditable = function () {

    var handleTable = function () {

        function restoreRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                oTable.fnUpdate(aData[i], nRow, i, false);
            }

            oTable.fnDraw();
        }

        function editRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
            jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';
            jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '">';
            jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
            jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
            var str = '<select class="form-control input-small"><option value="Female"';
            if($(aData[4]).innerHTML=="Female") 
                str += ' selected>Female</option><option value="Male"';
            else
                str += '>Female</option><option value="Male"';
            if($(aData[4]).innerHTML=="Male")
                str += ' selected>Male</option>';
            else
                str += '>Male</option>';
            jqTds[4].innerHTML = str + '</select>';
            jqTds[5].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[5] + '">';
            jqTds[6].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[6] + '">';
            jqTds[7].innerHTML = '<select class="form-control input-small">\
                            <option value="Approved">Approved</option>\
                            <option value="Waiting">Waiting</option></select>';
            jqTds[8].innerHTML = '<a class="edit" href="">Save</a>';
            jqTds[9].innerHTML = '<a class="cancel" href="">Cancel</a>';
        }

        function saveRow(oTable, nRow) {
            var jqInputs = $('>td>', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
            oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
            oTable.fnUpdate(jqInputs[5].value, nRow, 5, false);
            oTable.fnUpdate(jqInputs[6].value, nRow, 6, false);
            oTable.fnUpdate(jqInputs[7].value, nRow, 7, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 8, false);
            oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 9, false);
            oTable.fnDraw();
        }

        function cancelEditRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
            oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
            oTable.fnUpdate(jqInputs[5].value, nRow, 5, false);
            oTable.fnUpdate(jqInputs[6].value, nRow, 6, false);
            oTable.fnUpdate(jqInputs[7].value, nRow, 7, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 8, false);
            oTable.fnDraw();
        }

        var table = $('#sample_editable_1');

        var oTable = table.dataTable({

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            // set the initial value
            "pageLength": 10,

            "language": {
                "lengthMenu": " _MENU_ records"
            },
            "columnDefs": [{ // set default column settings
                'orderable': true,
                'targets': [0]
            }, {
                "searchable": true,
                "targets": [0]
            }],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });

        var tableWrapper = $("#sample_editable_1_wrapper");

        // tableWrapper.find(".dataTables_length select").select2({
        //     showSearchInput: false //hide search box with special css class
        // }); // initialize select2 dropdown

        var nEditing = null;
        var nNew = false;
        var oldmail = '';

        $('#sample_editable_1_new').click(function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm("Previose row not saved. Do you want to save it ?")) {
                    saveRow(oTable, nEditing); // save
                    $(nEditing).find("td:first").html("Untitled");
                    nEditing = null;
                    nNew = false;

                } else {
                    oTable.fnDeleteRow(nEditing); // cancel
                    nEditing = null;
                    nNew = false;
                    
                    return;
                }
            }

            var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
            var nRow = oTable.fnGetNodes(aiNew[0]);
            editRow(oTable, nRow);
            nEditing = nRow;
            nNew = true;
        });

        table.on('click', '.delete', function (e) {
            e.preventDefault();

            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }

            var nRow = $(this).parents('tr')[0];
            oTable.fnDeleteRow(nRow);
            sel = {
                email : $(nRow).children('td')[2].innerHTML
            };
            $.post("delete_user", 
                sel, 
                function(data, status){ 
                    if(data == 'success') alert('Deleted data successfully.');
                    else alert('Delete failed.');
                }); 
            // alert("Deleted! Do not forget to do some ajax to sync with backend :)");
        });

        table.on('click', '.cancel', function (e) {
            e.preventDefault();
            if (nNew) {
                oTable.fnDeleteRow(nEditing);
                nEditing = null;
                nNew = false;
            } else {
                restoreRow(oTable, nEditing);
                nEditing = null;
            }
        });

        table.on('click', '.edit', function (e) {
            e.preventDefault();

            /* Get the row as a parent of the link that was clicked on */
            var nRow = $(this).parents('tr')[0];

            if (oldmail == '')
                oldmail = $(nRow).children('td')[2].innerHTML;
            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
            } else if (nEditing == nRow && this.innerHTML == "Save") {
                /* Editing this row and want to save it */
                saveRow(oTable, nEditing);
                newdata = {
                      oldmail   : oldmail,
                    firstname   : $(nEditing).children('td')[0].innerHTML,
                     lastname   : $(nEditing).children('td')[1].innerHTML,
                        email   : $(nEditing).children('td')[2].innerHTML,
                     password   : $(nEditing).children('td')[3].innerHTML,
                       gender   : $(nEditing).children('td')[4].innerHTML,
                  nationality   : $(nEditing).children('td')[5].innerHTML,
                        phone   : $(nEditing).children('td')[6].innerHTML,
                       status   : $(nEditing).children('td')[7].innerHTML 
                };
                nEditing = null;
                oldmail = '';
                $.post('update_user', 
                    newdata, 
                    function(data, status){ 
                        if(status == 'success') alert('Edited customer data successfully.');
                        else alert('Customer data update failed.');
                    });
                // alert("Updated! Do not forget to do some ajax to sync with backend :)");
            } else {
                /* No edit in progress - let's start one */
                editRow(oTable, nRow);
                nEditing = nRow;
            }
        });
    }

    return {

        //main function to initiate the module
        init: function () {
            handleTable();
        }

    };

}();
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>