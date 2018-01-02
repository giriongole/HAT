    <!DOCTYPE html>

    <html lang="en" class="no-js">
    <head>@include('layouts.master')

    <style type="text/css">
        .my_radio_btn{
            padding: 5px 12px;
            float: left;
        }
    </style>
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
                                <a href="#">Assessment List</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS -->

                    <div class="clearfix">
                    </div>

                    <div class="portlet box  custome-portlet">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-plus"></i>Assessment List
                                    </div>
                                    <div class="tools hide">
                                        <a href="javascript:;" class="collapse" data-original-title="" title="">
                                        </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                        </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title="">
                                        </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title="">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">

                    <br>
                    <div class="row">
                        <div class="col-md-10">
                                <div class="my_radio_btn">
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="r3" class="flat-red" checked/> Sellect All
                                </label>
                               
                                            
                            </div>
                        </div>
                         <div class="my_radio_btn">
                            <div class="form-group">
                            
                                <label>
                                    <input type="radio" name="r3" class="flat-red"/> In Progress
                                </label>
                                            
                            </div>
                        </div>
                        </div>
                        <div class="col-md-2">
<!--                             <a href="AddFacility" class="btn btn-primary pull-right">Add New</a> -->
                                            <div class="btn-group pull-right">
                                                <button id="sample_editable_1_new" class="btn green custom-button"><a class="add-link" href="AddFacility">
                                                Add Facility <i class="fa fa-plus"></i></a>
                                                </button>
                                            </div>
                        </div>
                    </div>
                   <br>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="portlet-body">
                          
                            
                        
                                <div class="row">
                                    <div class="col-md-12">
                                <table class="table table-striped table-bordered table-hover " id="myTable" style="    box-shadow: 0px 0px 5px #bcb9b9;">
                                        <thead>
                                            <tr>
                                                <th class="table-checkbox">
                                                    SI.No
                                                </th>
                                                <th class="active-order-data">
                                                Facility Name
                                                </th>

                                                <th class="active-order-data">
                                                Assessment Status
                                                </th>
                                                <th class="active-order-data">
                                                Lead Assessor
                                                </th>
                                                <th class="active-order-data">
                                                    Planned Start Date
                                                </th>
                                                <th class="active-order-data">
                                                    Planned End date
                                                </th>
                                                <th class="active-order-data">
                                                    Actual Start Date
                                                </th>
                                                <th class="active-order-data">
                                                    Actual End Date
                                                </th>
                                                <th class="active-order-data">
                                                    Download Report
                                                </th>

                                               
                                            </tr>
                                        </thead>
                                        <tbody class="li-table">
                                    <tr class="odd gradeX">
                                        <td class="active-order-data">
                                            1
                                        </td>
                                        <td class="active-order-data">
                                          <a href="">  Facility1 </a>
                                        </td>
                                        <td class="active-order-data">
                                           <a href="Facilityprocess"> In Progress </a>
                                        </td>
                                        <td class="active-order-data tbl-colum">
                                            Chandra sekhar
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="active-order-data">
                                          <a title="Edit" href=""> <i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                           
                                            
                                            
                                           
                                            <tr class="odd gradeX">
                                               <td class="active-order-data">
                                                    2
                                                </td>
                                                <td class="active-order-data">
                                                  <a href="">  Facility1 </a>
                                                </td>
                                                <td class="active-order-data">
                                                   <a href="Facilityprocess"> Completed </a>
                                                </td>
                                                <td class="active-order-data tbl-colum">
                                                    Chandra sekhar
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="active-order-data">
                                                  <a title="Edit" href=""> <i class="fa fa-edit"></i></a>
                                                </td> 
                                            </tr>

                                            <tr class="odd gradeX">
                                               <td class="active-order-data">
                                                    3
                                                </td>
                                                <td class="active-order-data">
                                                  <a href="">  Facility3 </a>
                                                </td>
                                                <td class="active-order-data">
                                                   <a href="Facilityprocess"> To Be Approved </a>
                                                </td>
                                                <td class="active-order-data tbl-colum">
                                                    Prasad
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="active-order-data">
                                                  <a title="Edit" href=""> <i class="fa fa-edit"></i></a>
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
       