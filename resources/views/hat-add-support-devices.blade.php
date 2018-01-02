
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
                    Dashboard 
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="Dashboard">Dashboard</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#"> Supported Devices </a>
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
                                    <i class="fa fa-plus"></i>Add Supported Devices
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
                            <div class="portlet-body">
                                <div class="row">

                              <div class="col-md-12">
                                <div class="btn-group pull-right">
                                    <button id="sample_editable_1_new" class="btn custom-button"><a class="add-link" href="supportDevice-list">
                                    Supported Devices List <i class="fa fa-list"></i></a>
                                    </button>
                                </div>
                              </div>
                                   
                                </div>
                                <div class="row">
                                   
                                    <div class="w3-card-4" style="margin:20px;background:#f1f1f1;padding-bottom:20px;">
                                        <div>
                                        </div>    

                                        <form class="w3-container" method="post" action="saveSupportDevices" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                                          
                                             <br>
                                             <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                               <label for="name">Department</label>
                                                <select class="w3-select" name="dept">
                                                <option value="null">Select</option>
                                                <?php 
                                                foreach ($depts as $value) {
                                                    echo'<option value="'.$value->id.'">'.$value->name.'</option>';
                                                }
                                                ?>   
                                                </select>
                                              </div>
                                            </div>

                                             <div class="col-md-6">
                                                <div class="form-group">
                                               <label for="name">Name</label>
                                                 <input type="text" class="form-control" name="name" placeholder="name">
                                              </div>
                                            </div>

                                            </div>

                                           <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                               <label for="cost">cost</label>
                                                 <input type="text" class="form-control" name="cost" placeholder="Cost">
                                              </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                               <label for="installation_cost">Inistallation Cost</label>
                                                 <input type="text" class="form-control" name="installation_cost" placeholder="inistallation_cost">
                                              </div>
                                            </div>
                                            </div>
                                        
                                       <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                               <label for="Decription">Decription</label>
                                                 <textarea  class="form-control" name="description" placeholder="Decription"></textarea>
                                              </div>
                                            </div>
                                            </div>
                                            

                                            <!-- <div class="form-group">
                                                <label>Image</label>
                                                <input class="w3-input" type="file" name="image">
                                            </div>                                            -->

                                            <div class="form-group text-center">
                                                <input type="submit" name="addbannerimage" class="w3-button w3-white w3-border w3-border-teal w3-round-large" value="Submit">
                                                <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
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
</body>
<!-- END BODY -->

</html>