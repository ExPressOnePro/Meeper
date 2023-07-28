<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')
<body>
<main>
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        <div class="main-content-wrap mobile-menu-content bg-off-white m-0">
            @include('includes.header')
            @include('includes.bottomMenuBarPhone')
            <div class="main-content pt-4">
                <div class="breadcrumb">
                    <h1 class="mr-2">Version 2</h1>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li>Version 2</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <!-- CARD ICON-->
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card card-icon mb-4">
                                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                                        <p class="text-muted mt-2 mb-2">Today's Upload</p>
                                        <p class="text-primary text-24 line-height-1 m-0">21</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card card-icon mb-4">
                                    <div class="card-body text-center"><i class="i-Add-User"></i>
                                        <p class="text-muted mt-2 mb-2">New Users</p>
                                        <p class="text-primary text-24 line-height-1 m-0">21</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card card-icon mb-4">
                                    <div class="card-body text-center"><i class="i-Money-2"></i>
                                        <p class="text-muted mt-2 mb-2">Total sales</p>
                                        <p class="text-primary text-24 line-height-1 m-0">4021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card card-icon-big mb-4">
                                    <div class="card-body text-center"><i class="i-Money-2"></i>
                                        <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card card-icon-big mb-4">
                                    <div class="card-body text-center"><i class="i-Gear"></i>
                                        <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card card-icon-big mb-4">
                                    <div class="card-body text-center"><i class="i-Bell"></i>
                                        <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card mb-4">
                            <div class="card-body p-0">
                                <h5 class="card-title m-0 p-3">Sales</h5>
                                <div id="echart4" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1690526888592"><div style="position: relative; overflow: hidden; width: 326px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="326" height="300" style="position: absolute; left: 0px; top: 0px; width: 326px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Last Month Summary</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Item</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Portable Speaker</td>
                                                <td class="font-weight-bold text-success">+ $1200</td>
                                            </tr>
                                            <tr>
                                                <td>Portable Headphone</td>
                                                <td class="font-weight-bold">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>Speaker</td>
                                                <td class="text-danger">Out of stock</td>
                                            </tr>
                                            <tr>
                                                <td>Watch</td>
                                                <td class="text-warning font-weight-bold">Low stock</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="echart5" style="height: 200px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1690526888593"><div style="position: relative; overflow: hidden; width: 286px; height: 200px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="286" height="200" style="position: absolute; left: 0px; top: 0px; width: 286px; height: 200px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Top Authors</div>
                                <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="../../dist-assets/images/faces/2.jpg" alt="">
                                    <div class="flex-grow-1">
                                        <h6 class="m-0">David Hopkins</h6>
                                        <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="../../dist-assets/images/faces/3.jpg" alt="">
                                    <div class="flex-grow-1">
                                        <h6 class="m-0">James Mitchell</h6>
                                        <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="../../dist-assets/images/faces/4.jpg" alt="">
                                    <div class="flex-grow-1">
                                        <h6 class="m-0">Jessica Mitchell</h6>
                                        <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card o-hidden mb-4">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="w-50 float-left card-title m-0">New Users</h3>
                                <div class="dropdown dropleft text-right w-50 float-right">
                                    <button class="btn bg-gray-100" id="dropdownMenuButton_table1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table1"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="user_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="user_table_length"><label>Show <select name="user_table_length" aria-controls="user_table" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="user_table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="user_table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table dataTable-collapse text-center dataTable no-footer" id="user_table" role="grid" aria-describedby="user_table_info">
                                                    <thead>
                                                    <tr role="row"><th scope="col" class="sorting_asc" tabindex="0" aria-controls="user_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 25.7812px;">#</th><th scope="col" class="sorting" tabindex="0" aria-controls="user_table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 99.703px;">Name</th><th scope="col" class="sorting" tabindex="0" aria-controls="user_table" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" style="width: 78.562px;">Avatar</th><th scope="col" class="sorting" tabindex="0" aria-controls="user_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 184.609px;">Email</th><th scope="col" class="sorting" tabindex="0" aria-controls="user_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 102.484px;">Status</th><th scope="col" class="sorting" tabindex="0" aria-controls="user_table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 79.359px;">Action</th></tr>
                                                    </thead>
                                                    <tbody>



                                                    <tr role="row" class="odd">
                                                        <th scope="row" class="sorting_1">1</th>
                                                        <td>Smith</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt=""></td>
                                                        <td>Smith@gmail.com</td>
                                                        <td><span class="badge badge-success">Active</span></td>
                                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                                    </tr><tr role="row" class="even">
                                                        <th scope="row" class="sorting_1">2</th>
                                                        <td>Jhon Doe</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt=""></td>
                                                        <td>Jhon@gmail.com</td>
                                                        <td><span class="badge badge-info">Pending</span></td>
                                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                                    </tr><tr role="row" class="odd">
                                                        <th scope="row" class="sorting_1">3</th>
                                                        <td>Alex</td>
                                                        <td><img class="rounded-circle m-0 avatar-sm-table" src="../../dist-assets/images/faces/1.jpg" alt=""></td>
                                                        <td>Otto@gmail.com</td>
                                                        <td><span class="badge badge-warning">Not Active</span></td>
                                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                                    </tr></tbody>
                                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="user_table_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="user_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="user_table_previous"><a href="#" aria-controls="user_table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="user_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="user_table_next"><a href="#" aria-controls="user_table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <div class="col-md-6">
                        <div class="card o-hidden mb-4">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="w-50 float-left card-title m-0">Total Sales</h3>
                                <div class="dropdown dropleft text-right w-50 float-right">
                                    <button class="btn bg-gray-100" id="dropdownMenuButton_table2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon i-Gear-2"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_table2"><a class="dropdown-item" href="#">Add new user</a><a class="dropdown-item" href="#">View All users</a><a class="dropdown-item" href="#">Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="sales_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="sales_table_length"><label>Show <select name="sales_table_length" aria-controls="sales_table" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="sales_table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="sales_table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table dataTable-collapse text-center dataTable no-footer" id="sales_table" role="grid" aria-describedby="sales_table_info">
                                                    <thead>
                                                    <tr role="row"><th scope="col" class="sorting_asc" tabindex="0" aria-controls="sales_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 29.8125px;">#</th><th scope="col" class="sorting" tabindex="0" aria-controls="sales_table" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 99.078px;">Product</th><th scope="col" class="sorting" tabindex="0" aria-controls="sales_table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 144.359px;">Date</th><th scope="col" class="sorting" tabindex="0" aria-controls="sales_table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 70.5469px;">Price</th><th scope="col" class="sorting" tabindex="0" aria-controls="sales_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 138.969px;">Status</th><th scope="col" class="sorting" tabindex="0" aria-controls="sales_table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 87.734px;">Action</th></tr>
                                                    </thead>
                                                    <tbody>



                                                    <tr role="row" class="odd">
                                                        <th scope="row" class="sorting_1">1</th>
                                                        <td>Watch</td>
                                                        <td>12-10-2019</td>
                                                        <td>$30</td>
                                                        <td><span class="badge badge-success">Delivered</span></td>
                                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                                    </tr><tr role="row" class="even">
                                                        <th scope="row" class="sorting_1">2</th>
                                                        <td>Iphone</td>
                                                        <td>23-10-2019</td>
                                                        <td>$300</td>
                                                        <td><span class="badge badge-info">Pending</span></td>
                                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                                    </tr><tr role="row" class="odd">
                                                        <th scope="row" class="sorting_1">3</th>
                                                        <td>Watch</td>
                                                        <td>12-10-2019</td>
                                                        <td>$30</td>
                                                        <td><span class="badge badge-warning">Not Delivered</span></td>
                                                        <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="#"><i class="nav-icon i-Close-Window font-weight-bold"></i></a></td>
                                                    </tr></tbody>
                                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="sales_table_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="sales_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="sales_table_previous"><a href="#" aria-controls="sales_table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="sales_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="sales_table_next"><a href="#" aria-controls="sales_table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of col-->
                    <!-- travel-different-countries-->
                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Travel Different Countries</div>
                                <div class="ul-widget-app__poll-list mb-4">
                                    <h3 class="heading mr-2">2589</h3>
                                    <div class="d-flex"><span class="text-muted text-12">From Uganda</span><span class="t-font-boldest ml-auto">33%<i class="i-Turn-Up-2 text-14 text-success font-weight-700"></i></span></div>
                                    <div class="progress progress--height-2 mb-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ul-widget-app__poll-list mb-4">
                                    <h3 class="heading mr-2">4589</h3>
                                    <div class="d-flex"><span class="text-muted text-12">From U.S.A</span><span class="t-font-boldest ml-auto">63%<i class="i-Turn-Down-2 text-14 text-danger font-weight-700"></i></span></div>
                                    <div class="progress progress--height-2 mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ul-widget-app__poll-list mb-4">
                                    <h3 class="heading mr-2">7589</h3>
                                    <div class="d-flex"><span class="text-muted text-12">From Canada</span><span class="t-font-boldest ml-auto">73%<i class="i-Turn-Up-2 text-14 text-success font-weight-700"></i></span></div>
                                    <div class="progress progress--height-2 mb-3">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="ul-widget-app__poll-list mb-4">
                                    <h3 class="heading mr-2">3589</h3>
                                    <div class="d-flex"><span class="text-muted">From France</span><span class="t-font-boldest ml-auto">13%<i class="i-Turn-Down-2 text-14 text-danger font-weight-700"></i></span></div>
                                    <div class="progress progress--height-2 mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 13%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mutual-friend-->
                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header purple-500 text-purple-500 p-4">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="card-title text-white mb-0">Mutual Friends</div>
                                    <div class="ul-widget-app__bar ml-auto">asd</div>
                                </div>
                                <div class="input-group input-group-lg">
                                    <input class="form-control" type="text" placeholder="search by username or email..." aria-label="Large" aria-describedby="inputGroup-sizing-sm"><span class="ul-widget-app__find-font"><i class="i-Search-People font-weight-500"></i></span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="ul-widget-app__social-site mt-4 mb-4">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <div class="ul-widget-app__social-friends"><img class="profile-picture avatar-lg mb-2" src="../../dist-assets/images/faces/4.jpg" alt="">
                                                <div class="ul-widget-app__small-title"><span class="t-font-bolder">Elizabeth Olsen</span><span class="text-primary"><a href="">Invite</a></span></div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div class="ul-widget-app__social-friends"><img class="profile-picture avatar-lg mb-2" src="../../dist-assets/images/faces/2.jpg" alt="">
                                                <div class="ul-widget-app__small-title"><span class="t-font-bolder">Jack Olsen</span><span class="text-primary"><a href="">Invite</a></span></div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div class="ul-widget-app__social-friends"><img class="profile-picture avatar-lg mb-2" src="../../dist-assets/images/faces/5.jpg" alt="">
                                                <div class="ul-widget-app__small-title"><span class="t-font-bolder">DAn Olsen</span><span class="text-primary"><a href="">Invite</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ul-widget-app__social-button mt-5">
                                    <button class="btn btn-block btn-facebook btn-icon m-1" type="button"><span class="ul-btn__text">Invite Facebook</span><span class="ul-btn__icon"><i class="i-Facebook-2"></i></span></button>
                                    <button class="btn btn-block btn-twitter btn-icon m-1" type="button"><span class="ul-btn__text">Invite Twitter</span><span class="ul-btn__icon"><i class="i-Twitter"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notification-->
                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Notification</div>
                                <div class="ul-widget-app__browser-list">
                                    <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Bell1 text-white bg-warning rounded-circle p-2 mr-3"></i><span class="text-15">You have 9 pending Tasks</span><span class="text-mute">in a sec</span></div>
                                    <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Internet text-white green-500 rounded-circle p-2 mr-3"></i><span class="text-15">Traffic Overloaded</span><span class="text-mute">4 Hours ago</span></div>
                                    <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Shopping-Cart text-white cyan-500 rounded-circle p-2 mr-3"></i><span class="text-15">New Order Received</span><span class="text-mute">yesterday </span></div>
                                    <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Add-UserStar text-white teal-500 rounded-circle p-2 mr-3"></i><span class="text-15">New User </span><span class="text-mute">2 April </span></div>
                                    <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Bell text-white purple-500 rounded-circle p-2 mr-3"></i><span class="text-15">New Update </span><span class="text-mute">2 April </span></div>
                                    <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Shopping-Cart text-white bg-danger rounded-circle p-2 mr-3"></i><span class="text-15">New Order Received</span><span class="text-mute">yesterday </span></div>
                                    <div class="ul-widget-app__browser-list-1 mb-4"><i class="i-Internet text-white green-500 rounded-circle p-2 mr-3"></i><span class="text-15">Traffic Overloaded</span><span class="text-mute">4 Hours ago</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- best-sellers-->
                    <div class="col-xl-8 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="ul-widget__head">
                                    <div class="ul-widget__head-label">
                                        <h3 class="ul-widget__head-title">Best Sellers</h3>
                                    </div>
                                    <div class="ul-widget__head-toolbar">
                                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#ul-widget5-tab1-content" role="tab" aria-selected="true">Latest</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ul-widget5-tab2-content" role="tab" aria-selected="false">Month</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ul-widget__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="ul-widget5-tab1-content">
                                            <div class="ul-widget5">
                                                <div class="ul-widget5__item">
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__pic"><img src="../../dist-assets/images/products/iphone-1.jpg" alt="Third slide"></div>
                                                        <div class="ul-widget5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                                            <p class="ul-widget5__desc">UI lib admin themes.</p>
                                                            <div class="ul-widget5__info"><span>Author:</span><span class="text-primary">Jon Snow</span><span>Released:</span><span class="text-primary">23.08.17</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">19,200</span><span class="ul-widget5__sales text-mute">sales</span></div>
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">1046</span><span class="ul-widget5__sales text-mute">votes</span></div>
                                                    </div>
                                                </div>
                                                <div class="ul-widget5__item">
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__pic"><img src="../../dist-assets/images/products/speaker-1.jpg" alt="Third slide"></div>
                                                        <div class="ul-widget5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                                            <p class="ul-widget5__desc">UI lib admin themes.</p>
                                                            <div class="ul-widget5__info"><span>Author:</span><span class="text-primary">Jon Snow</span><span>Released:</span><span class="text-primary">23.08.17</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">29,200</span><span class="ul-widget5__sales text-mute">sales</span></div>
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">4500</span><span class="ul-widget5__sales text-mute">votes</span></div>
                                                    </div>
                                                </div>
                                                <div class="ul-widget5__item">
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__pic"><img src="../../dist-assets/images/products/watch-1.jpg" alt="Third slide"></div>
                                                        <div class="ul-widget5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                                            <p class="ul-widget5__desc">UI lib admin themes.</p>
                                                            <div class="ul-widget5__info"><span>Author:</span><span class="text-primary">Jon Snow</span><span>Released:</span><span class="text-primary">23.08.17</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">23,200</span><span class="ul-widget5__sales text-mute">sales</span></div>
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">2046</span><span class="ul-widget5__sales text-mute">votes</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="ul-widget5-tab2-content">
                                            <div class="ul-widget5">
                                                <div class="ul-widget5__item">
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__pic"><img src="../../dist-assets/images/products/speaker-1.jpg" alt="Third slide"></div>
                                                        <div class="ul-widget5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                                            <p class="ul-widget5__desc">UI lib admin themes.</p>
                                                            <div class="ul-widget5__info"><span>Author:</span><span class="text-primary">Jon Snow</span><span>Released:</span><span class="text-primary">23.08.17</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">19,200</span><span class="ul-widget5__sales text-mute">sales</span></div>
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">1046</span><span class="ul-widget5__sales text-mute">votes</span></div>
                                                    </div>
                                                </div>
                                                <div class="ul-widget5__item">
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__pic"><img src="../../dist-assets/images/products/iphone-1.jpg" alt="Third slide"></div>
                                                        <div class="ul-widget5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                                            <p class="ul-widget5__desc">UI lib admin themes.</p>
                                                            <div class="ul-widget5__info"><span>Author:</span><span class="text-primary">Jon Snow</span><span>Released:</span><span class="text-primary">23.08.17</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">29,200</span><span class="ul-widget5__sales text-mute">sales</span></div>
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">4500</span><span class="ul-widget5__sales text-mute">votes</span></div>
                                                    </div>
                                                </div>
                                                <div class="ul-widget5__item">
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__pic"><img src="../../dist-assets/images/products/watch-1.jpg" alt="Third slide"></div>
                                                        <div class="ul-widget5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                                            <p class="ul-widget5__desc">UI lib admin themes.</p>
                                                            <div class="ul-widget5__info"><span>Author:</span><span class="text-primary">Jon Snow</span><span>Released:</span><span class="text-primary">23.08.17</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="ul-widget5__content">
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">23,200</span><span class="ul-widget5__sales text-mute">sales</span></div>
                                                        <div class="ul-widget5__stats"><span class="ul-widget5__number">2046</span><span class="ul-widget5__sales text-mute">votes</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- latest-log-->
                    <div class="col-lg-4 col-xl-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="ul-widget__head">
                                    <div class="ul-widget__head-label">
                                        <h3 class="ul-widget__head-title">Latest Log</h3>
                                    </div>
                                    <div class="ul-widget__head-toolbar">
                                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget-s6-tab1-content" role="tab" aria-selected="true">Today</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget-s6-tab2-content" role="tab" aria-selected="false">Month</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ul-widget__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="__g-widget-s6-tab1-content">
                                            <div class="ul-widget-s6__items">
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-primary ul-widget6__dot"></p>
                                                    </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-success ul-widget6__dot"></p>
                                                    </span>
                                                    <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-primary m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                                </div>
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-warning ul-widget6__dot"></p>
                                                    </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-danger ul-widget6__dot"></p>
                                                    </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-info ul-widget6__dot"></p>
                                                    </span>
                                                    <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-success m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                                </div>
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-dark ul-widget6__dot"></p>
                                                    </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-primary ul-widget6__dot"></p>
                                                    </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                                <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                        <p class="badge-dot-success ul-widget6__dot"></p>
                                                    </span>
                                                    <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-danger m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="__g-widget-s6-tab2-content">
                                            <div class="ul-widget2">
                                                <div class="ul-widget-s6__items">
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-danger ul-widget6__dot"></p>
                                                        </span><span class="ul-widget-s6__text">44 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-warning ul-widget6__dot"></p>
                                                        </span>
                                                        <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-primary m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                                    </div>
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-primary ul-widget6__dot"></p>
                                                        </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-danger ul-widget6__dot"></p>
                                                        </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-info ul-widget6__dot"></p>
                                                        </span>
                                                        <p class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-success m-2">Primary</span></p><span class="ul-widget-s6__time">14 mins</span>
                                                    </div>
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-dark ul-widget6__dot"></p>
                                                        </span><span class="ul-widget-s6__text">System error -<a class="typo_link text-danger" href="">Danger state text</a></span><span class="ul-widget-s6__time">2 hrs </span></div>
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-primary ul-widget6__dot"></p>
                                                        </span><span class="ul-widget-s6__text">12 new users registered</span><span class="ul-widget-s6__time">Just Now</span></div>
                                                    <div class="ul-widget-s6__item"><span class="ul-widget-s6__badge">
                                                            <p class="badge-dot-success ul-widget6__dot"></p>
                                                        </span><span class="ul-widget-s6__text">System shutdown<span class="badge badge-pill badge-danger m-2">Primary</span></span><span class="ul-widget-s6__time">14 mins</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of row-->
                <!-- end of main-content -->
            </div>
        </div>
    </div>

</main>

@include('includes.scripts')
</body>
</html>
