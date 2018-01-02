<!DOCTYPE html>

<html lang="en" class="no-js">
<head>@include('layouts.master')</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top custome-header">
        <!-- BEGIN HEADER INNER -->
        @include('layouts.header')
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container custome-page-container">
        <!-- BEGIN SIDEBAR -->
         @include('layouts.sidebaar')
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content custome-page-content">

                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title hide">
                    Dashboard
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="dashboard.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN DASHBOARD STATS -->

                <div class="clearfix">
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="portlet-body">
                      
                        
                        
                            <br>
<!--                             <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                    <div class="w3-card">

                                        <footer class="w3-container w3-blue">
                                            <h5 style="text-align:center;font-weight:bold">Completed Assessments</h5>
                                        </footer>
                                        <div class="w3-container" style="padding:15px;">
                                        <p style="    font-size: 30px;    text-align: center;">52</p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="w3-card">

                                        <footer class="w3-container w3-blue">
                                            <h5 style="text-align:center;font-weight:bold">On Progress Assessments</h5>
                                        </footer>
                                        <div class="w3-container" style="padding:15px;">
                                            <p style="    font-size: 30px;
    text-align: center;">52</p>
                                        </div>


                                    </div>
                                </div>


                               


                            </div> -->
                                <div class="col-md-12">
                                    <div class="col-md-offset-3 col-md-6">
                                        <!-- DONUT CHART -->
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title text-center" style="color: #1c449c;font-weight: 600;text-transform:uppercase">Assessments Progress</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                    <div class="chart" id="sales-chart" style="height: 200px; position: relative;"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                                    </div>
                                </div>
                                <br>
                            <div class="row">
                                <div class="col-md-12">
                            <table class="table table-striped table-bordered table-hover " id="myTable" style="    box-shadow: 0px 0px 5px #bcb9b9;">
                                    <thead>
                                        <tr>
                                            <th class="table-checkbox">
                                                Id
                                            </th>
                                            <th class="active-order-data">
                                            Facility Name
                                            </th>

                                            <th class="active-order-data">
                                            Contact
                                            </th>
                                            <th class="active-order-data">
                                            Assessor
                                            </th>
                                            <th class="active-order-data">
                                                Status
                                            </th>

                                           
                                        </tr>
                                    </thead>
                                    <tbody class="li-table">
                                        <tr class="odd gradeX">
                                            <td class="active-order-data">
                                                1
                                            </td>
                                            <td class="active-order-data">
                                               Facility1
                                            </td>
                                            <td class="active-order-data">
                                                hos@gmail.com
                                            </td>
                                            <td class="active-order-data tbl-colum">
                                                Chandra sekhar
                                            </td>
                                            <td class="active-order-data">
                                               Progress
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="active-order-data">
                                                2
                                            </td>
                                            <td class="active-order-data">
                                               Facility1
                                            </td>
                                            <td class="active-order-data">
                                                hos@gmail.com
                                            </td>
                                            <td class="active-order-data tbl-colum">
                                                Chandra sekhar
                                            </td>
                                            <td class="active-order-data">
                                               Progress
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="active-order-data">
                                                3
                                            </td>
                                            <td class="active-order-data">
                                               Facility1
                                            </td>
                                            <td class="active-order-data">
                                                hos@gmail.com
                                            </td>
                                            <td class="active-order-data tbl-colum">
                                                Chandra sekhar
                                            </td>
                                            <td class="active-order-data">
                                               Completed
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="active-order-data">
                                                1
                                            </td>
                                            <td class="active-order-data">
                                               Facility1
                                            </td>
                                            <td class="active-order-data">
                                                hos@gmail.com
                                            </td>
                                            <td class="active-order-data tbl-colum">
                                                Chandra sekhar
                                            </td>
                                            <td class="active-order-data">
                                               Progress
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="active-order-data">
                                                2
                                            </td>
                                            <td class="active-order-data">
                                               Facility1
                                            </td>
                                            <td class="active-order-data">
                                                hos@gmail.com
                                            </td>
                                            <td class="active-order-data tbl-colum">
                                                Chandra sekhar
                                            </td>
                                            <td class="active-order-data">
                                               Progress
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td class="active-order-data">
                                                3
                                            </td>
                                            <td class="active-order-data">
                                               Facility1
                                            </td>
                                            <td class="active-order-data">
                                                hos@gmail.com
                                            </td>
                                            <td class="active-order-data tbl-colum">
                                                Chandra sekhar
                                            </td>
                                            <td class="active-order-data">
                                               Completed
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer ">
        <div class="page-footer-inner">

            2017 &copy; TEAM.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
    <script src="assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="assets/admin/pages/scripts/index.js" type="text/javascript"></script>
    <script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- Chart JS !-->

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="js/raphael-min.js"></script><!-- <script src="js/raphael-min.js"></script> -->
    <script src="js/morris.min.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            //$('#myTable').DataTable();
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            // QuickSidebar.init(); // init quick sidebar
            // Demo.init(); // init demo features 
            // Index.init();
            // Index.initDashboardDaterange();
            // Index.initJQVMAP(); // init index page's custom scripts
            // Index.initCalendar(); // init index page's custom scripts
            // Index.initCharts(); // init index page's custom scripts
            // Index.initChat();
            // Index.initMiniCharts();
            // Tasks.initDashboardWidget();

            // $('.tbl-colum input').bootstrapToggle('on')
        });
    </script>

     <script type="text/javascript">
            $(function() {
                "use strict";

                // AREA CHART
                /*var area = new Morris.Area({
                    element: 'revenue-chart',
                    resize: true,
                    data: [
                        {y: '2011 Q1', item1: 2666, item2: 2666},
                        {y: '2011 Q2', item1: 2778, item2: 2294},
                        {y: '2011 Q3', item1: 4912, item2: 1969},
                        {y: '2011 Q4', item1: 3767, item2: 3597},
                        {y: '2012 Q1', item1: 6810, item2: 1914},
                        {y: '2012 Q2', item1: 5670, item2: 4293},
                        {y: '2012 Q3', item1: 4820, item2: 3795},
                        {y: '2012 Q4', item1: 15073, item2: 5967},
                        {y: '2013 Q1', item1: 10687, item2: 4460},
                        {y: '2013 Q2', item1: 8432, item2: 5713}
                    ],
                    xkey: 'y',
                    ykeys: ['item1', 'item2'],
                    labels: ['Item 1', 'Item 2'],
                    lineColors: ['#a0d0e0', '#3c8dbc'],
                    hideHover: 'auto'
                });*/

                // LINE CHART
               /* var line = new Morris.Line({
                    element: 'line-chart',
                    resize: true,
                    data: [
                        {y: '2011 Q1', item1: 2666},
                        {y: '2011 Q2', item1: 2778},
                        {y: '2011 Q3', item1: 4912},
                        {y: '2011 Q4', item1: 3767},
                        {y: '2012 Q1', item1: 6810},
                        {y: '2012 Q2', item1: 5670},
                        {y: '2012 Q3', item1: 4820},
                        {y: '2012 Q4', item1: 15073},
                        {y: '2013 Q1', item1: 10687},
                        {y: '2013 Q2', item1: 8432}
                    ],
                    xkey: 'y',
                    ykeys: ['item1'],
                    labels: ['Item 1'],
                    lineColors: ['#3c8dbc'],
                    hideHover: 'auto'
                });*/

                //DONUT CHART
                var donut = new Morris.Donut({
                    element: 'sales-chart',
                    resize: true,
                    colors: [ "#f56954" , "#1c449c"],
                    data: [
                        {label: "Completed Assessments", value: 60},
                        {label: "In Progress Assessments", value: 40}
                       /* {label: "Mail-Order Sales", value: 20}*/
                    ],
                    hideHover: 'auto'
                });
                //BAR CHART
               /* var bar = new Morris.Bar({
                    element: 'bar-chart',
                    resize: true,
                    data: [
                        {y: '2006', a: 100, b: 90},
                        {y: '2007', a: 75, b: 65},
                        {y: '2008', a: 50, b: 40},
                        {y: '2009', a: 75, b: 65},
                        {y: '2010', a: 50, b: 40},
                        {y: '2011', a: 75, b: 65},
                        {y: '2012', a: 100, b: 90}
                    ],
                    barColors: ['#00a65a', '#f56954'],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['CPU', 'DISK'],
                    hideHover: 'auto'
                });*/
            });
        </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>