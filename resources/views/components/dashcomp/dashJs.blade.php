    <!-- jQuery -->
    <script src="../../dashboard/vendors4/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../dashboard/vendors4/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../dashboard/vendors4/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="../../dashboard/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="../../dashboard/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="../../dashboard/dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="../../dashboard/vendors4/jquery-toggles/toggles.min.js"></script>
    <script src="../../dashboard/dist/js/toggle-data.js"></script>


    <!-- Counter Animation JavaScript -->
    <script src="../../dashboard/vendors4/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../../dashboard/vendors4/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Easy pie chart JS -->
    <script src="../../dashboard/vendors4/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

    <!-- Sparkline JavaScript -->
    <script src="../../dashboard/vendors4/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../dashboard/vendors4/raphael/raphael.min.js"></script>
    <script src="../../dashboard/vendors4/morris.js/morris.min.js"></script>

    <!-- EChartJS JavaScript -->
    <script src="../../dashboard/vendors4/echarts/dist/echarts-en.min.js"></script>

    <!-- Peity JavaScript -->
    <script src="../../dashboard/vendors4/peity/jquery.peity.min.js"></script>

    <!-- Vector Maps JavaScript -->
    <script src="../../dashboard/vendors4/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../../dashboard/vendors4/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="../../dashboard/vendors4/vectormap/jquery-jvectormap-ru-mill.js"></script>
    <script src="../../dashboard/dist/js/vectormap-data.js"></script>

    <!-- Init JavaScript -->
    <script src="../../dashboard/dist/js/init.js"></script>
    <script src="../../dashboard/dist/js/dashboard3-data.js"></script>
    <!-- Init JavaScript -->
    <script src="../../dashboard/dist/js/tooltip-data.js"></script>

    <!-- Data Table JavaScript -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'excelHtml5',
			'pdfHtml5'
		]
	} );
} );
    </script>
