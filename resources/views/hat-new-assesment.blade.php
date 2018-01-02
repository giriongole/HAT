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
                            <a href="dashboard.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Assessment Team & Plane</a>
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
                                    <i class="fa fa-plus"></i>Assessment Team & Plane
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
        <button id="sample_editable_1_new" class="btn custom-button"><a class="add-link" href="Assesment-list">
            Users List <i class="fa fa-list"></i></a>
        </button>
    </div>
    </div>
                                       
     </div>
    <div class="w3-card-4" style="margin:20px;background:#f1f1f1;padding-bottom:20px;">
    <div>

    <div class="col-md-12">
    <h3> Assessment Team </h3>
    </div>
    </div>    
    <br>
    <form class="w3-container" method="post" action="#" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


  <div class="col-md-6">
     <div class="form-group">
    <label for="exampleFormControlSelect1"> Name </label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
</div>

   <!-- <div class="col-md-6">
     <div class="form-group">
    <label for="exampleFormControlSelect2"> Role </label>
    <select class="form-control" id="exampleFormControlSelect2">
      <option>Assessor</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

</div> -->
<div class="col-md-6">
<div class="form-group">
<label for="Addressline2">Role</label>
 <input type="text" class="form-control" name="Assessor" id="Assessor" value="Assessor" readonly="">
</div>
</div>

  <div class="col-md-6">
     <div class="form-group">
    <label for="exampleFormControlSelect3"> Department Assigned </label>
    <select class="form-control" id="exampleFormControlSelect3">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
</div>

<div class="col-md-6">
     <div class="form-group">
    <label for="exampleFormControlSelect4"> Facility </label>
    <select class="form-control" id="exampleFormControlSelect4">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
</div>
<div class="form-group text-center">
            <input type="submit" name="addvillage" class="w3-button w3-white w3-border w3-border-teal w3-round-large" value="Add">
            <button class="w3-button w3-white w3-border w3-border-teal w3-round-large">Cancel</button>
        </div>
    </form>
</div>

</div>

<div class="row">
<div class="col-md-8 col-md-offset-2">
<table class="table table-striped table-bordered table-hover " id="myTable" style="    box-shadow: 0px 0px 5px #bcb9b9;">
<thead>
    <tr>
        <th class="table-checkbox">
            SI.No
        </th>
        <th class="active-order-data">
         Name
        </th>

        <th class="active-order-data">
        Role
        </th>
        <th class="active-order-data">
        Department
        </th>
        

       
    </tr>
</thead>
<tbody class="li-table">
    <tr class="odd gradeX">
        <td class="active-order-data">
            1
        </td>
        <td class="active-order-data">
         Chandra sekhar
        </td>
        <td class="active-order-data">
          Role1
        </td>
        <td class="active-order-data tbl-colum">
          Depertment1  
        </td>
        
        
    </tr>
   
    <tr class="odd gradeX">
        <td class="active-order-data">
            2
        </td>
        <td class="active-order-data">
         Chandra sekhar
        </td>
        <td class="active-order-data">
          Role1
        </td>
        <td class="active-order-data tbl-colum">
          Depertment1  
        </td>
        
        
    </tr>

     <tr class="odd gradeX">
        <td class="active-order-data">
            3
        </td>
        <td class="active-order-data">
         Chandra sekhar
        </td>
        <td class="active-order-data">
          Role1
        </td>
        <td class="active-order-data tbl-colum">
          Depertment1  
        </td>
        
        
    </tr>
   
   
    
</tbody>
</table>
</div>
</div>

    <div class="row">


    <div class="w3-card-4" style="margin:20px;background:#f1f1f1;padding-bottom:20px;">
    <div>

    <div class="col-md-12">
    <h3> Assessment Plan </h3>
    </div>
    </div>    
    <br>
    <form class="w3-container" method="post" action="#" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


  <div class="col-md-6">
    <div class="form-group">
    <label for="Start_Date">Start Date</label>
    <input type="date" class="form-control" id="Start_Date" >
    </div>
  </div>
<div class="col-md-6">
    <div class="form-group">
    <label for="End_Date">End Date</label>
    <input type="date" class="form-control" id="End_Date" >
    </div>
  </div>

  

 
<div class="form-group text-center">
            <input type="submit" name="addvillage" class="w3-button w3-white w3-border w3-border-teal w3-round-large" value="Save">
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