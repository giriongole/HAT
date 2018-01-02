<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
 @include('layouts.master')    
</head>

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
                    Dashboard <small>TOday Order</small>
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="Dashboard">Dashboard</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Add Facility</a>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN DASHBOARD STATS -->
                @if(session()->has('message'))
                    <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                <div class="clearfix">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box  custome-portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                   Add Facility Manager
                                </div>
                                <div class="tools hide">
                                    <a href="javascript:;" class="collapse">
                                    </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config">
                                    </a>
                                    <a href="javascript:;" class="reload">
                                    </a>
                                    <a href="javascript:;" class="remove">
                                    </a>
                                </div>
                            </div>
<div class="portlet box custome-portlet ">
                          <!--  -->
                            <div class="portlet-body">
                                <div class="table-toolbar ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group pull-right">
                                                <a href="FacilityMaster" id="sample_editable_1_new" class="btn green custom-button">
                                            Add New <i class="fa fa-plus"></i>
                                            </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="dataTables_length" id="myTable_length">
                                            <label> 
                                             <select name="myTable_length" aria-controls="myTable" class="form-control input-xsmall input-inline">
                                             <option value="10">10</option>
                                             <option value="25">25</option>
                                             <option value="50">50</option>
                                             <option value="100">100</option>
                                             </select> records </label>
                                             </div>
                                            </div>
                                        <div class="col-md-6 col-sm-12">
                                        <div id="myTable_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control input-small input-inline" placeholder="" aria-controls="myTable"></label>
                                        </div></div></div><div class="table-scrollable">
                                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable" role="grid" aria-describedby="myTable_info">
                                    <thead>
                                        <tr>
                                            <th> SI.no</th>
                                            <th> Name</th>
                                            <th> Email </th>
                                            <th> Address </th>
                                            <th title="Contact Persion Name"> Cont P.Name</th>
                                            <th title="Contact Persion EMail"> Cont P.Email</th>
                                            <th title="Contact Persion Phone Number"> Cont P.Number</th>
                                        </tr>
                                    
                                    </thead>
                                    <tbody class="li-table">
                                            <?php
                                            $count=1; 
                                            /*  print_r($dbresult );exit();*/
                                            foreach ($dbresult as $value) {
                                                echo'<tr><td class="active-order-data">'.$count++.'</td>';                                                
                                                echo'<td class="active-order-data">'.$value->name.'</td>';
                                                echo'<td class="active-order-data">'.$value->email.'</td>';
                                                $a1 =$value->address.','.$value->address1; 
                                                echo'<td class="active-order-data">'./*$value->address*/ $a1.'</td>';
                                                echo'<td class="active-order-data">'.$value->contact_person.'</td>';
                                                echo'<td class="active-order-data">'.$value->contact_email.'</td>';
                                                echo'<td class="active-order-data">'.$value->contact_Phone.'</td>';
                                              
                                               /* echo'<td class="active-order-data"><button class="btn btn-primary view-button center-block"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp&nbspView</button></td>';*/                                               
                                        
                                                }
                                            ?> 
<!-- <tr class="gradeX odd" role="row"></tr>
                                    <tr ></tr> -->

                                    </tbody>
                                </table></div><div class="row"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="myTable" tabindex="0" id="myTable_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="myTable" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="myTable" tabindex="0" id="myTable_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                            </div>
                        </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
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
    <script>
        jQuery(document).ready(function() {
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
        });
    </script>
    <!-- END JAVASCRIPTS -->

    <script type="text/javascript">
    $(".input").tagsinput('items');   


    </script>
</body>
<!-- END BODY -->

</html>