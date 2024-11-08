<!-- jQuery -->
<script src="<?php echo base_url('/plugins') ?>/jquery/jquery.min.js"></script>

<!-- jQuery -->
<script src="<?php echo base_url('/plugins') ?>/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('/plugins') ?>/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('/plugins') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('/plugins') ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script src="<?php echo base_url('/plugins') ?>/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<script src="<?php echo base_url('/plugins') ?>/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('/plugins') ?>/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('/plugins') ?>/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/plugins') ?>/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('/plugins') ?>/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('/plugins') ?>/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('/plugins') ?>/moment/moment.min.js"></script>
<script src="<?php echo base_url('/plugins') ?>/daterangepicker/daterangepicker.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('/plugins') ?>/daterangepicker/daterangepicker.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url('/plugins') ?>/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url('/plugins') ?>/dropzone/min/dropzone.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('/plugins') ?>/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="<?php echo base_url('/plugins') ?>/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('/plugins') ?>/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/template/backend/dist') ?>/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/template/backend/dist') ?>/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('/template/backend/dist') ?>/js/pages/dashboard.js"></script>

<script>
    $(function() {

        // Reusable function to initialize DataTables with common options
        function initializeDataTable(selector, paging = true, buttons = []) {
            $(selector).DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": paging,
                "buttons": buttons
            }).buttons().container().appendTo(`${selector}_wrapper .col-md-6:eq(0)`);
        }

        // Initialize DataTables
        initializeDataTable("#previousKelas", true, ["excel", "pdf", "print"]);
        initializeDataTable("#currentKelas", true, ["excel", "pdf", "print"]);
        initializeDataTable("#kenaikanKelas", false, ["excel", "pdf", "print"]); // Show all rows (paging disabled)
        initializeDataTable("#example1", true, ["excel", "pdf", "print", "colvis"]);

        // Initialize DataTable for #example2 with different settings
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        // Date picker initialization
        $('#DateForEdit, #DateForInput').datetimepicker({
            format: 'L'
        });

        /* ChartJS
        * -------
        * Here we will create a few charts using ChartJS
        */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
            label               : 'Digital Goods',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
            },
            {
            label               : 'Electronics',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
            },
        ]
        };

        var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
            gridLines : {
                display : false,
            }
            }],
            yAxes: [{
            gridLines : {
                display : false,
            }
            }]
        }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, areaChartOptions)
        var lineChartData = $.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
        labels: [
            'Chrome',
            'IE',
            'FireFox',
            'Safari',
            'Opera',
            'Navigator',
        ],
        datasets: [
            {
            data: [700,500,400,600,300,100],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }
        ]
        }
        var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData        = donutData;
        var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
        }

        new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = $.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        scales: {
            xAxes: [{
            stacked: true,
            }],
            yAxes: [{
            stacked: true
            }]
        }
        }

        new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
        })

    });
</script>

<script>
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function() {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })
</script>

</body>

</html>