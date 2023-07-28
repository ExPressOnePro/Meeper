<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('includes.head')
    <body>
<main>
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        <div class="main-content-wrap mobile-menu-content bg-off-white m-0">
            @include('includes.header')
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
                </div>
                <!-- end of main-content -->
            </div>
            @include('includes.bottomMenuBarPhone')
        </div>
    </div>

</main>

    @include('includes.scripts')
    </body>
</html>
