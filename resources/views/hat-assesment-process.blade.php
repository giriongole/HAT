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
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box custome-portlet ">
                            <div class="portlet-title">
                                <div class="caption">
                                    Assessment Process
                                </div>
                                
                                
                            </div>
                            <div class="portlet-body" style="display:table;widht:100%">



                                <div class="table-toolbar" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-group pull-right">
                                                <button id="sample_editable_1_new" class="btn green custom-button"><a class="add-link" href="#">
                                                Download report <i class="fa fa-download"></i></a>
                                                </button>
                                            </div>

                                            <!--  <div class="btn-group pull-right">
                                            <button id="sample_editable_1_new" class="btn custom-button"><a class="add-link" href="Users">
                                            Add User <i class="fa fa-list"></i></a>
                                            </button>
                                        </div> -->

                                           


                                        </div>

                                    </div>
                                </div>


                                <!-- form start here -->
                                    <div class="w3-card-4" style="margin:20px;background:#f1f1f1;padding-bottom:20px;">
                                        <div>
                                        </div>    
                                                                                <br>
                                        <form class="w3-container" method="post" action="addUsers" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="cwsjJtxRQuOKs2yeTn8LKQxn80aS9a18FqkZ4bOa">                                            
                                           
                                           <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Assessment of</label>
                                                <input class="form-control" type="text" name="Assessmentof">
                                            </div> 
                                            </div>  

                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input class="form-control" type="text" name="Username">
                                            </div> 
                                            </div> 

                                           
                                             <div class="col-md-6">                                     
                                            <div class="form-group">
                                                <label>Lead Assessor</label>
                                                <input class="form-control" type="text" name="leadassessor">
                                            </div>
                                            </div>
                                            <div class="col-md-6">                                     
                                            <div class="form-group">
                                                <label>Estimated Total cost</label>
                                                <input class="form-control" type="text" name="cost">
                                            </div>
                                            </div>
                                              <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label> Status </label>
                                                <select class="w3-select" name="user-role">
                                                <option> Select </option>
                                                <option value="null">To be Approved Role</option>
                                                <option value="null">In Progress</option>
                                                <option value="null">Approved</option>
                                                <option value="null">Completed</option>
                                                
                                                </select>
                                            </div> 
                                            </div> 
                                            

                                            
                                     </form>
                                    </div>
                                <!-- form End here -->
  <div id="myTable_wrapper" class="dataTables_wrapper no-footer col-md-12">
   <div class="row">
      <div class="col-md-6 col-sm-12">
         <div class="dataTables_length" id="myTable_length">
            <label>
               <select name="myTable_length" aria-controls="myTable" class="form-control input-xsmall input-inline">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
               </select>
               records 
            </label>
         </div>
      </div>
      <div class="col-md-6 col-sm-12">
         <div id="myTable_filter" class="dataTables_filter">
            <label>Search:<input type="search" class="form-control input-small input-inline" placeholder="" aria-controls="myTable"></label>
         </div>
      </div>
   </div>
   <div class="table-scrollable">
      <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable" role="grid" aria-describedby="myTable_info">
         <thead>
            <tr role="row">
               <th class="table-checkbox sorting" >
                  S.No
               </th>
               <th class="active-order-data sorting" >
                  Department
               </th>
               <th class="active-order-data sorting" >
                  Location
               </th>
               <th class="active-order-data sorting" >
                  Status
               </th>
               <th class="active-order-data sorting" >
                  Planned Start Date
               </th>
               <th class="active-order-data sorting" >
                  Planned End Date
               </th>
               <th class="active-order-data sorting" >
                  Actual Start Date
               </th>
               <th class="active-order-data sorting" >
                  Actual End date
               </th>
               <th class="active-order-data sorting" >
                  Assessor
               </th>
            </tr>
         </thead>
         <tbody>
            
            <tr role="row" class="even">
               <td class="active-order-data">1</td>
               <td class="active-order-data"> <a href=""> Doctor's Lounge - Existing </a></td>
               <td class="active-order-data">1st floor, located near HIM Dept</td>
               <td class="active-order-data"> Completed </td>
               <td class="active-order-data"> 12/18/2017 </td>
               <td class="active-order-data"> 12/18/2017 </td>
               <td class="active-order-data"> 12/19/2017 </td>
               <td class="active-order-data"> 12/20/2017</td>
               <td class="active-order-data">Prasad</td>
               
            </tr>
         </tbody>
      </table>
   </div>
   <div class="row">
      <div class="col-md-5 col-sm-12">
         <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">
            Showing 1 to 9 of 9 entries
         </div>
      </div>
      <div class="col-md-7 col-sm-12">
         <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
            <ul class="pagination">
               <li class="paginate_button previous disabled" aria-controls="myTable" tabindex="0" id="myTable_previous">
                  <a href="#">
                  <i class="fa fa-angle-left"></i></a>
               </li>
               <li class="paginate_button active" aria-controls="myTable" tabindex="0">
                  <a href="#">1</a>
               </li>
               <li class="paginate_button next disabled" aria-controls="myTable" tabindex="0" id="myTable_next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
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

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>