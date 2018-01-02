       
<?php

$actual_link=URL::current();
$pageUrl=explode("/",$actual_link);
$pageName=$pageUrl[sizeof($pageUrl)-1];

$Blog="Blog";
$Village="Nonsupportdevices-list";
$PlaceCategory="Departments";
$Gallery="Gallery";
$Persons="Persons";
$PersonsCategory="facilityCategoryList";
$Places="Places";
$Testimonials="FacilityDepartments";
$NewsEvents="Assesment-list";
$BannerImage="supportDevice-list";
$Users="user-list";
$Dashboard="Dashboard";

?>



        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse custom-page-sidebar">
                <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- <li class="sidebar-toggler-wrapper">
                       
                        <div class="sidebar-toggler">
                        </div>
                        
                    </li>
                    DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element
                    <br> -->
                    
                    
                    @if($pageName=='Dashboard')
                    <li class="start active">
                       <a href=<?php echo $Dashboard ?> >
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>

                        </a>
                    </li>
                    @else
                     <li class="start">
                       <a href=<?php echo $Dashboard ?> >
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>

                        </a>
                    </li>
                   
                    @endif  <!-- 1st end -->
                 
                    @if($pageName=='AddAssesment' || $pageName=='Assesment-list')
                    <li class="active">
                        <a href=<?php echo $NewsEvents ?> >
                            <i class="fa fa-tasks"></i>
                            <span class="title">Assessment</span>
                        </a>
                    </li>
                    @else
                     <li>
                        <a href=<?php echo $NewsEvents ?> >
                            <i class="fa fa-tasks"></i>
                            <span class="title">Assessment</span>
                        </a>
                    </li>
                    @endif <!-- 5th end -->

<!--                    
                    @if($pageName=='FacilityDepartments' || $pageName=='FacilityDepartmentsList')                    
                    <li class="active">
                        <a href=<?php echo $Testimonials ?> >
                            <i class="fa fa-hospital-o"></i>
                            <span class="title">Facilit-Department Maping</span>
                        </a>
                    </li>
                    @else
                    <li class="">
                        <a href=<?php echo $Testimonials ?> >
                            <i class="fa fa-hospital-o"></i>
                            <span class="title">Facility Departments</span>
                        </a>
                    </li>
                    @endif 6th end -->
                   
                    
                     
                    @if($pageName=='Users' || $pageName=='user-list') 
                    <li class="active">
                        <a href=<?php echo $Users ?>>
                            <i class="fa fa-users"></i>
                            <span class="title">Users</span>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href=<?php echo $Users ?>>
                            <i class="fa fa-users"></i>
                            <span class="title">Users</span>
                        </a>
                    </li>
                  
                    @endif
                    @php
                    $master_pages = array('AddDepartment','PlaceCategoryList','FacilityMaster','NonSupportDevices','SupportedDevices','BannerImage','Departments','Nonsupportdevices-list','supportDevice-list');
                    @endphp
                  
                    @if(in_array($pageName,$master_pages))
                    <li class="active">
                        <a href="javascript:;">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Master Data</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu" style="background:#123176">
                            @if($pageName=='PlaceCategory' || $pageName=='PlaceCategoryList')
                            <li class="active"> 
                                <a href=<?php echo $PlaceCategory ?> >
                                    <i class="fa fa-cube"></i> Department Master
                                </a>
                            </li>
                            @else
                            <li class=""> 
                                <a href=<?php echo $PlaceCategory ?> >
                                    <i class="fa fa-cube"></i> Department Master
                                </a>
                            </li>
                            @endif

                            @if($pageName=='PersonsCategory' || $pageName=='PersonCategoryList')
                            <li class="active">
                                <a href=<?php echo $PersonsCategory ?> >
                                    <i class="fa fa-hospital-o"></i> Facility Master
                                </a>
                            </li>
                            @else
                            <li >
                                <a href=<?php echo $PersonsCategory ?> >
                                    <i class="fa fa-hospital-o"></i> Facility Master
                                </a>
                            </li>
                            @endif
                            @if($pageName=='addvillage' || $pageName=='villageList')                            
                            <li class="active">
                                <a href=<?php echo $Village ?> >
                                    <i class="fa fa-circle"></i>Not Supported Devices</a>
                            </li>
                            @else
                             <li>
                                <a href=<?php echo $Village ?> >
                                    <i class="fa fa-circle"></i>Not Supported Devices</a>
                            </li>
                            @endif
                            @if($pageName=='BannerImage')
                            <li class="active">
                                <a href=<?php echo $BannerImage ?> >
                                    <i class="fa fa-circle"></i>Supported Devices</a>
                            </li>
                            @else
                            <li class="">
                                <a href=<?php echo $BannerImage ?> >
                                    <i class="fa fa-circle"></i>Supported Devices</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @else
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Master Data</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href=<?php echo $PlaceCategory ?> >
                                    <i class="fa fa-cube"></i> Department Master 
                                </a>
                            </li>
                            <li>
                                <a href=<?php echo $PersonsCategory ?> >
                                    <i class="fa fa-sitemap"></i> Facility Master
                                </a>
                            </li>
                            <li>
                                <a href=<?php echo $Village ?> >
                                    <i class="fa fa-circle"></i>Not Supported Devices</a>
                            </li>
                            <li>
                                <a href=<?php echo $BannerImage ?> >
                                    <i class="fa fa-circle"></i>Supported Devices</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                   

                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>