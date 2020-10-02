            <footer>

            </footer>
        </div>
    </div>

    
  
    <script src="<?php echo base_url();?>assets/js/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>


  
    <script src="<?php echo base_url();?>assets/vendors/chartjs/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/dashboard.js"></script>

    <script src="<?php echo base_url();?>assets/js/main.js"></script> 

    <!-- <script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $('#table1').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url : "<?php echo base_url('nasabah/datatable_data') ?>", // json datasource
						type: "post",  // method  , by default get
					}
                    
				} );
			} );
	</script> -->
    
    <script type="text/javascript">

var save_method; //for save method string
var table;
$(document).ready(function() {
  table = $('#table1').DataTable({ 
    
    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    
    // Load data for the table's content from an Ajax source
    "ajax": {
      "url": "<?php echo base_url('nasabah/ajax_list')?>",
      "type": "POST"
    },

    //Set column definition initialisation properties.
    "columnDefs": [
    { 
      "targets": [ -1 ], //last column
      "orderable": false, //set not orderable
    },
    ],

  });
});

</script>

    


</body>
</html>