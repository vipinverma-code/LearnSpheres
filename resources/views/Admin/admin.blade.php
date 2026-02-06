@extends('Admin.layouts.admin_master')

@section('Contents')
    <!-- Title -->
    <div class=" row">
        <div class="col-12 mb-3">
            <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
        </div>
    </div>

    <!-- Counter boxes START -->
    <div class="row g-4 mb-4">
        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1958"
                            data-purecounter-delay="200">0</h2>
                        <span class="mb-0 h6 fw-light">Completed Courses</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fas fa-tv fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-purple bg-opacity-10 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1600"
                            data-purecounter-delay="200">0</h2>
                        <span class="mb-0 h6 fw-light">Enrolled Courses</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-purple text-white mb-0"><i class="fas fa-user-tie fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-primary bg-opacity-10 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1235"
                            data-purecounter-delay="200">0</h2>
                        <span class="mb-0 h6 fw-light">Course In Progress</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i
                            class="fas fa-user-graduate fa-fw"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body bg-success bg-opacity-10 p-4 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Digit -->
                    <div>
                        <div class="d-flex">
                            <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="845"
                                data-purecounter-delay="200">0</h2>
                            <span class="mb-0 h2 ms-1">hrs</span>
                        </div>
                        <span class="mb-0 h6 fw-light">Total Watch Time</span>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                            class="bi bi-stopwatch-fill fa-fw"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter boxes END-->

    <!-- Chart and Ticket START -->
    <div class="row g-4 mb-4">

        <!-- Chart START -->
        <div class="col-xxl-8">
            <div class="card shadow h-100">

                <!-- Card header -->
                <div class="card-header p-4 border-bottom">
                    <h5 class="card-header-title">Earnings</h5>
                </div>

                <!-- Card body -->
                <div class="card-body">
                    <!-- Apex chart -->
                    <div id="ChartPayout"></div>
                </div>
            </div>
        </div>
        <!-- Chart END -->

        <!-- Ticket START -->
        <div class="col-xxl-4">
            <div class="card shadow h-100">
                <!-- Card header -->
                <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                    <h5 class="card-header-title">Support Requests</h5>
                    <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                </div>

                <!-- Card body START -->
                <div class="card-body p-4">

                    <!-- Ticket item START -->
                    <div class="d-flex justify-content-between position-relative">
                        <div class="d-sm-flex">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                <p class="mb-0">New ticket #759 from Lori Stevens for General Enquiry</p>
                                <span class="small">8 hour ago</span>
                            </div>
                        </div>
                    </div>
                    <!-- Ticket item END -->

                    <hr><!-- Divider -->

                    <!-- Ticket item START -->
                    <div class="d-flex justify-content-between position-relative">
                        <div class="d-sm-flex">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <div class="avatar-img rounded-circle bg-purple bg-opacity-10">
                                    <span
                                        class="text-purple position-absolute top-50 start-50 translate-middle fw-bold">DB</span>
                                </div>
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                <p class="mb-0">Comment from Billy Vasquez on ticket #659</p>
                                <span class="small">8 hour ago</span>
                            </div>
                        </div>
                    </div>
                    <!-- Ticket item END -->

                    <hr><!-- Divider -->

                    <!-- Ticket item START -->
                    <div class="d-flex justify-content-between position-relative">
                        <div class="d-sm-flex">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <div class="avatar-img rounded-circle bg-orange bg-opacity-10">
                                    <span
                                        class="text-orange position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                                </div>
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                <p class="mb-0"><b>StackBros</b> assign you a new ticket for <b>Eduport theme</b>
                                </p>
                                <span class="small">5 hour ago</span>
                            </div>
                        </div>
                    </div>
                    <!-- Ticket item END -->

                    <hr><!-- Divider -->

                    <!-- Ticket item START -->
                    <div class="d-flex justify-content-between position-relative">
                        <div class="d-sm-flex">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a>
                                </h6>
                                <p class="mb-0">Thanks for contact us with your issues.</p>
                                <span class="small">9 hour ago</span>
                            </div>
                        </div>
                    </div>
                    <!-- Ticket item END -->

                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Ticket END -->
    </div>
    <!-- Chart and Ticket END -->

    <!-- Top listed Cards START -->
    <div class="row g-4">

        <!-- Top instructors START -->
        <div class="col-lg-6 col-xxl-4">
            <div class="card shadow h-100">

                <!-- Card header -->
                <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                    <h5 class="card-header-title">Top Instructors</h5>
                    <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                </div>

                <!-- Card body START -->
                <div class="card-body p-4">

                    <!-- Instructor item START -->
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <!-- Avatar and info -->
                        <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-1">Lori Stevens<i class="bi bi-patch-check-fill text-info small ms-1"></i>
                                </h6>
                                <ul class="list-inline mb-0 small">
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-book text-purple me-1"></i>25 Courses</li>
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                    </div>
                    <!-- Instructor item END -->

                    <hr><!-- Divider -->

                    <!-- Instructor item START -->
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <!-- Avatar and info -->
                        <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-1">Dennis Barrett</h6>
                                <ul class="list-inline mb-0 small">
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-book text-purple me-1"></i>18 Courses</li>
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                    </div>
                    <!-- Instructor item END -->

                    <hr><!-- Divider -->

                    <!-- Instructor item START -->
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <!-- Avatar and info -->
                        <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-1">Jacqueline Miller<i
                                        class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
                                <ul class="list-inline mb-0 small">
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-book text-purple me-1"></i>21 Courses</li>
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-star text-warning me-1"></i>4.8/5.0</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                    </div>
                    <!-- Instructor item END -->

                    <hr><!-- Divider -->

                    <!-- Instructor item START -->
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <!-- Avatar and info -->
                        <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-1">Billy Vasquez</h6>
                                <ul class="list-inline mb-0 small">
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-book text-purple me-1"></i>15 Courses</li>
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                    </div>
                    <!-- Instructor item END -->

                    <hr><!-- Divider -->

                    <!-- Instructor item START -->
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <!-- Avatar and info -->
                        <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-md flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                <h6 class="mb-1">Amanda Reed<i class="bi bi-patch-check-fill text-info small ms-1"></i>
                                </h6>
                                <ul class="list-inline mb-0 small">
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-book text-purple me-1"></i>29 Courses</li>
                                    <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                            class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                    </div>
                    <!-- Instructor item END -->

                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Top instructors END -->

        <!-- Notice Board START -->
        <div class="col-lg-6 col-xxl-4">
            <div class="card shadow h-100">
                <!-- Card header -->
                <div class="card-header border-bottom p-4">
                    <h5 class="card-header-title">Notice board</h5>
                </div>

                <!-- Card body START -->
                <div class="card-body p-4">
                    <div class="custom-scrollbar h-300px">

                        <!-- Notice Board item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <div class="icon-lg bg-purple bg-opacity-10 text-purple rounded-2 flex-shrink-0"><i
                                        class="fas fa-user-tie fs-5"></i></div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Join New
                                            Instructor</a></h6>
                                    <p class="mb-0">Amongst moments do in arrived Fat weddings believed prospect
                                    </p>
                                    <span class="small">5 min ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Notice Board item END -->

                        <hr><!-- Divider -->

                        <!-- Notice Board item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-2 flex-shrink-0"><i
                                        class="fas fa-book-open fs-5"></i></div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Update New
                                            Course</a></h6>
                                    <p class="mb-0">Arrived Fat weddings believed prospect</p>
                                    <span class="small">4 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Notice Board item END -->

                        <hr><!-- Divider -->

                        <!-- Notice Board item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <div class="icon-lg bg-info bg-opacity-10 text-info rounded-2 flex-shrink-0"><i
                                        class="fas fa-book fs-5"></i></div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Update
                                            Syllabus</a></h6>
                                    <p class="mb-0">Arrived Fat weddings believed prospect</p>
                                    <span class="small">2 days ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Notice Board item END -->

                        <hr><!-- Divider -->

                        <!-- Notice Board item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-2 flex-shrink-0"><i
                                        class="fas fa-globe fs-5"></i></div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Update New
                                            Feature</a></h6>
                                    <p class="mb-0">Arrived Fat weddings believed prospect</p>
                                    <span class="small">3 days ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Notice Board item END -->
                    </div>
                </div>
                <!-- Card body END -->

                <!-- Card footer START -->
                <div class="card-footer border-top">
                    <div class="alert alert-success d-flex align-items-center mb-0 py-2">
                        <div>
                            <small class="mb-0">45 more notices listed</small>
                        </div>
                        <div class="ms-auto">
                            <a class="btn btn-sm btn-success-soft mb-0" href="#!"> View all </a>
                        </div>
                    </div>
                </div>
                <!-- Card footer START -->
            </div>
        </div>
        <!-- Notice Board END -->

        <!-- Traffic sources START -->
        <div class="col-lg-6 col-xxl-4">
            <div class="card shadow h-100">

                <!-- Card header -->
                <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                    <h5 class="card-header-title">Traffic Sources</h5>
                    <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                </div>

                <!-- Card body START -->
                <div class="card-body p-4">
                    <!-- Chart -->
                    <div class="col-sm-6 mx-auto">
                        <div id="ChartTrafficViews" class="" style="min-height: 197px;">
                            <div id="apexcharts4ozozjszj" class="apexcharts-canvas apexcharts4ozozjszj apexcharts-theme-"
                                style="width: 200px; height: 197px;"><svg xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg"
                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="200" height="197">
                                    <foreignObject x="0" y="0" width="200" height="197">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div>
                                        <style type="text/css">
                                            .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                            }

                                            .apexcharts-legend-group {
                                                display: flex;
                                            }

                                            .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                        <defs>
                                            <clipPath id="gridRectMask4ozozjszj">
                                                <rect width="200" height="198" x="0" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectBarMask4ozozjszj">
                                                <rect width="206" height="204" x="-3" y="-3" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask4ozozjszj">
                                                <rect width="200" height="198" x="0" y="0" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask4ozozjszj"></clipPath>
                                            <clipPath id="nonForecastMask4ozozjszj"></clipPath>
                                            <filter id="SvgjsFilter1096" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1095" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1098" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1097" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1100" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1099" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1102" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1101" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1104" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1103" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1106" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1105" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1108" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1107" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1110" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1109" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1112" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1111" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1114" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1113" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1116" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1115" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1118" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1117" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1120" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1119" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1122" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1121" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1124" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1123" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1126" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1125" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1128" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1127" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                            <filter id="SvgjsFilter1130" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feColorMatrix id="SvgjsFeColorMatrix1129" result="brightness"
                                                    in="SourceGraphic" type="matrix"
                                                    values="
2 0 0 0 0
0 2 0 0 0
0 0 2 0 0
0 0 0 1 0
">
                                                </feColorMatrix>
                                            </filter>
                                        </defs>
                                        <g class="apexcharts-pie">
                                            <g transform="translate(0, 0) scale(1)">
                                                <circle r="61.48048780487806" cx="100" cy="99"
                                                    fill="transparent"></circle>
                                                <g class="apexcharts-slices">
                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Course-1" rel="1" data:realIndex="0">
                                                        <path
                                                            d="M 100 4.414634146341456 A 94.58536585365854 94.58536585365854 0 1 1 10.043971458716939 128.22848546795234 L 41.528581448166 117.99851555416903 A 61.48048780487806 61.48048780487806 0 1 0 100 37.51951219512194 L 100 4.414634146341456 z "
                                                            fill="rgba(6,106,201,1)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="252" data:startAngle="0"
                                                            data:strokeWidth="2" data:value="70"
                                                            data:pathOrig="M 100 4.414634146341456 A 94.58536585365854 94.58536585365854 0 1 1 10.043971458716939 128.22848546795234 L 41.528581448166 117.99851555416903 A 61.48048780487806 61.48048780487806 0 1 0 100 37.51951219512194 L 100 4.414634146341456 z ">
                                                        </path>
                                                    </g>
                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Course-2" rel="2" data:realIndex="1">
                                                        <path
                                                            d="M 10.043971458716939 128.22848546795234 A 94.58536585365854 94.58536585365854 0 0 1 23.478831605218375 43.404116868531446 L 50.261240543391935 62.86267596454544 A 61.48048780487806 61.48048780487806 0 0 0 41.528581448166 117.99851555416903 L 10.043971458716939 128.22848546795234 z "
                                                            fill="rgba(12,188,135,1)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="54" data:startAngle="252"
                                                            data:strokeWidth="2" data:value="15"
                                                            data:pathOrig="M 10.043971458716939 128.22848546795234 A 94.58536585365854 94.58536585365854 0 0 1 23.478831605218375 43.404116868531446 L 50.261240543391935 62.86267596454544 A 61.48048780487806 61.48048780487806 0 0 0 41.528581448166 117.99851555416903 L 10.043971458716939 128.22848546795234 z ">
                                                        </path>
                                                    </g>
                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Course-3" rel="3" data:realIndex="2">
                                                        <path
                                                            d="M 23.478831605218375 43.404116868531446 A 94.58536585365854 94.58536585365854 0 0 1 70.77151453204763 9.043971458716939 L 81.00148444583097 40.528581448166 A 61.48048780487806 61.48048780487806 0 0 0 50.261240543391935 62.86267596454544 L 23.478831605218375 43.404116868531446 z "
                                                            fill="rgba(247,195,46,1)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="36" data:startAngle="306"
                                                            data:strokeWidth="2" data:value="10"
                                                            data:pathOrig="M 23.478831605218375 43.404116868531446 A 94.58536585365854 94.58536585365854 0 0 1 70.77151453204763 9.043971458716939 L 81.00148444583097 40.528581448166 A 61.48048780487806 61.48048780487806 0 0 0 50.261240543391935 62.86267596454544 L 23.478831605218375 43.404116868531446 z ">
                                                        </path>
                                                    </g>
                                                    <g class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Course-4" rel="4" data:realIndex="3">
                                                        <path
                                                            d="M 70.77151453204763 9.043971458716939 A 94.58536585365854 94.58536585365854 0 0 1 99.9834917395003 4.414635586958951 L 99.9892696306752 37.51951313152331 A 61.48048780487806 61.48048780487806 0 0 0 81.00148444583097 40.528581448166 L 70.77151453204763 9.043971458716939 z "
                                                            fill="rgba(214,41,62,1)" fill-opacity="1" stroke="#ffffff"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="18" data:startAngle="342"
                                                            data:strokeWidth="2" data:value="5"
                                                            data:pathOrig="M 70.77151453204763 9.043971458716939 A 94.58536585365854 94.58536585365854 0 0 1 99.9834917395003 4.414635586958951 L 99.9892696306752 37.51951313152331 A 61.48048780487806 61.48048780487806 0 0 0 81.00148444583097 40.528581448166 L 70.77151453204763 9.043971458716939 z ">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line x1="0" y1="0" x2="200" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line x1="0" y1="0" x2="200" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"
                                        style="opacity: 1;"></g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)">
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-dark"
                                    style="left: 23.4063px; top: 143.925px;">
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0 apexcharts-active"
                                        style="order: 1; display: flex; background-color: rgb(6, 106, 201);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(6, 106, 201); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Course-1: </span><span
                                                    class="apexcharts-tooltip-text-y-value">70</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1"
                                        style="order: 2; display: none; background-color: rgb(6, 106, 201);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(6, 106, 201); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Course-1: </span><span
                                                    class="apexcharts-tooltip-text-y-value">70</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-2"
                                        style="order: 3; display: none; background-color: rgb(6, 106, 201);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(6, 106, 201); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Course-1: </span><span
                                                    class="apexcharts-tooltip-text-y-value">70</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-3"
                                        style="order: 4; display: none; background-color: rgb(6, 106, 201);"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(6, 106, 201); display: none;"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">Course-1: </span><span
                                                    class="apexcharts-tooltip-text-y-value">70</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <ul class="list-group list-group-borderless mt-3">
                        <li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>Create a Design
                            System in Figma</li>
                        <li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>The Complete
                            Digital Marketing Course - 12 Courses in 1</li>
                        <li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>Google Ads
                            Training: Become a PPC Expert</li>
                        <li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>Microsoft Excel
                            - Excel from Beginner to Advanced</li>
                    </ul>
                </div>
            </div>
            <!-- Card body END -->
        </div>

        <!-- Traffic sources END -->

    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Agar controller se earnings aayi hai to use karo, warna fallback []
            var labels = @json($earnings['labels'] ?? []);
            var data = @json($earnings['data'] ?? []);

            var options = {
                chart: {
                    type: 'area',
                    height: 300,
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                    name: 'Payout',
                    data: data
                }],
                colors: ['#066ac9'],
                stroke: {
                    curve: 'smooth',
                    width: 3
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        opacityFrom: 0.6,
                        opacityTo: 0.2
                    }
                },
                xaxis: {
                    categories: labels
                },
                dataLabels: {
                    enabled: true
                }
            };

            if (document.querySelector("#ChartPayout")) {
                var chart = new ApexCharts(document.querySelector("#ChartPayout"), options);
                chart.render();
            }
        });
    </script>
@endsection
