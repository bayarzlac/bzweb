@extends('admin.layouts.master')
@section('content')
    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Users</h6>
                                    <h2 class="mb-0 number-font">44,278</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart" class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-secondary"><i
                                        class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                Last week</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Profit</h6>
                                    <h2 class="mb-0 number-font">67,987</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="leadschart" class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-pink"><i
                                        class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                Last 6 days</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Expenses</h6>
                                    <h2 class="mb-0 number-font">$76,965</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="profitchart" class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-green"><i
                                        class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                Last 9 days</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Cost</h6>
                                    <h2 class="mb-0 number-font">$59,765</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="costchart" class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                            <span class="text-muted fs-12"><span class="text-warning"><i
                                        class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                Last year</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->

    <!-- ROW-2 -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sales Analytics</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex mx-auto text-center justify-content-center mb-4">
                        <div class="d-flex text-center justify-content-center me-3"><span
                                class="dot-label bg-primary my-auto"></span>Total Sales</div>
                        <div class="d-flex text-center justify-content-center"><span
                                class="dot-label bg-secondary my-auto"></span>Total Orders</div>
                    </div>
                    <div class="chartjs-wrapper-demo">
                        <canvas id="transactions" class="chart-dropshadow"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
            <div class="card overflow-hidden">
                <div class="card-body pb-0 bg-recentorder">
                    <h3 class="card-title text-white">Recent Orders</h3>
                    <div class="chartjs-wrapper-demo">
                        <canvas id="recentorders" class="chart-dropshadow"></canvas>
                    </div>
                </div>
                <div id="flotback-chart" class="flot-background"></div>
                <div class="card-body">
                    <div class="d-flex mb-4 mt-3">
                        <div class="avatar avatar-md bg-secondary-transparent text-secondary bradius me-3">
                            <i class="fe fe-check"></i>
                        </div>
                        <div class="">
                            <h6 class="mb-1 fw-semibold">Delivered Orders</h6>
                            <p class="fw-normal fs-12"> <span class="text-success">3.5%</span>
                                increased </p>
                        </div>
                        <div class=" ms-auto my-auto">
                            <p class="fw-bold fs-20"> 1,768 </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="avatar  avatar-md bg-pink-transparent text-pink bradius me-3">
                            <i class="fe fe-x"></i>
                        </div>
                        <div class="">
                            <h6 class="mb-1 fw-semibold">Cancelled Orders</h6>
                            <p class="fw-normal fs-12"> <span class="text-success">1.2%</span>
                                increased </p>
                        </div>
                        <div class=" ms-auto my-auto">
                            <p class="fw-bold fs-20 mb-0"> 3,675 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
    </div>
    <!-- ROW-2 END -->

    <!-- ROW-4 -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Product Sales</h3>
                </div>
                <div class="card-body pt-4">
                    <div class="grid-margin">
                        <div class="">
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading border-0 p-0">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs product-sale">
                                            <li><a href="#tab5" class="active" data-bs-toggle="tab">All products</a>
                                            </li>
                                            <li><a href="#tab6" data-bs-toggle="tab" class="text-dark">Shipped</a></li>
                                            <li><a href="#tab7" data-bs-toggle="tab" class="text-dark">Pending</a></li>
                                            <li><a href="#tab8" data-bs-toggle="tab" class="text-dark">Cancelled</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body border-0 pt-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="table-responsive">
                                                <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Tracking Id</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Product</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Customer</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Date</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Amount</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Payment Mode</th>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 10%;">Status</th>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #98765490</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/10.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Headsets</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cherry Blossom</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">30 Aug
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #76348798</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/12.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Flower Pot</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Simon Sais</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">15 Nov
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #23986456</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/4.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Pen Drive</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Manny Jah</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">27 Jan
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #87456325</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/8.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            New Bowl</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Florinda Carasco</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">19 Sep
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #65783926</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/6.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Leather Watch</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Ivan Notheridiya</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">06 Oct
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #34654895</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/1.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Digital Camera</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Willie Findit</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">10 Jul
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #98765345</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/11.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Earphones</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Addie Minstra</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">25 Jun
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #67546577</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/2.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Shoes</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Laura Biding</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">22 Feb
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Tracking Id</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Product</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Customer</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Date</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Amount</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Payment Mode</th>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 10%;">Status</th>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #98765490</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/10.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Headsets</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cherry Blossom</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">30 Aug
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #76348798</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/12.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Flower Pot</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Simon Sais</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">15 Nov
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #23986456</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/4.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Pen Drive</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Manny Jah</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">27 Jan
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #87456325</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/8.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            New Bowl</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Florinda Carasco</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">19 Sep
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #65783926</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/6.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Leather Watch</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Ivan Notheridiya</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">06 Oct
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #34654895</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/1.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Digital Camera</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Willie Findit</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">10 Jul
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #98765345</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/11.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Earphones</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Addie Minstra</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">25 Jun
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #67546577</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/2.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Shoes</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Laura Biding</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">22 Feb
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab7">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Tracking Id</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Product</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Customer</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Date</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Amount</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Payment Mode</th>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 10%;">Status</th>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #98765490</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/10.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Headsets</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cherry Blossom</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">30 Aug
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #23986456</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/4.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Pen Drive</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Manny Jah</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">27 Jan
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #87456325</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/8.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            New Bowl</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Florinda Carasco</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">19 Sep
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #65783926</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/6.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Leather Watch</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Ivan Notheridiya</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">06 Oct
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #34654895</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/1.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Digital Camera</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Willie Findit</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">10 Jul
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #98765345</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/11.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Earphones</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Addie Minstra</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">25 Jun
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #67546577</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/2.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Shoes</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Laura Biding</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">22 Feb
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab8">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Tracking Id</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Product</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Customer</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Date</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Amount</th>
                                                            <th class="bg-transparent border-bottom-0">
                                                                Payment Mode</th>
                                                            <th class="bg-transparent border-bottom-0"
                                                                style="width: 10%;">Status</th>
                                                            <th class="bg-transparent border-bottom-0" style="width: 5%;">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #98765490</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/10.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Headsets</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cherry Blossom</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">30 Aug
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #76348798</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/12.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Flower Pot</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Simon Sais</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">15 Nov
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #23986456</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/4.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Pen Drive</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Manny Jah</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">27 Jan
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #87456325</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/8.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            New Bowl</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Florinda Carasco</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">19 Sep
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Online Payment</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #65783926</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/6.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Leather Watch</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Ivan Notheridiya</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">06 Oct
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom">
                                                            <td class="text-center">
                                                                <div class="mt-0 mt-sm-2 d-block">
                                                                    <h6 class="mb-0 fs-14 fw-semibold">
                                                                        #34654895</h6>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar bradius"
                                                                        style="background-image: url(../admin_assets/images/orders/1.jpg)"></span>
                                                                    <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Digital Camera</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Willie Findit</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="mt-sm-2 d-block">10 Jul
                                                                    2021</span></td>
                                                            <td><span class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div class="mt-0 mt-sm-3 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            Cash on Delivery</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="mt-sm-1 d-block">
                                                                    <span
                                                                        class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="g-2">
                                                                    <a class="btn text-primary btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Edit"><span
                                                                            class="fe fe-edit fs-14"></span></a>
                                                                    <a class="btn text-danger btn-sm"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-original-title="Delete"><span
                                                                            class="fe fe-trash-2 fs-14"></span></a>
                                                                </div>
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
    </div>
    <!-- ROW-4 END -->
@endsection
@section('scripts')
    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('admin_assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('admin_assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('admin_assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('admin_assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('admin_assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/peitychart/peitychart.init.js') }}"></script>


    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('admin_assets/js/index1.js') }}"></script>
@endsection
