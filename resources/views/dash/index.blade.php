@extends('Custom Layouts.dash.app')

@section('page_title','Main Dashboard')
@section('content')

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <!-- Page Alerts -->
                    <div class="alert alert-primary alert-wth-icon alert-dismissible fade show" role="alert">
                        <span class="alert-icon-wrap"><i class="zmdi zmdi-help"></i></span> You're profile is waiting to be activated. Once done, you can request meetings with them.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!-- /Page Alerts -->
                    <div class="hk-row">
                        <div class="col-md-4">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">budget</span>
                                            <span class="d-block display-6 font-weight-400 text-dark">$12,783</span>
                                        </div>
                                        <div>
                                            <div id="sparkline_4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Total hours</span>
                                            <span class="d-block display-6 font-weight-400 text-dark">659</span>
                                        </div>
                                        <div>
                                            <div id="sparkline_5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Progress</span>
                                            <span class="d-block display-6 font-weight-400 text-dark">91.42%</span>
                                        </div>
                                        <div>
                                            <span id="pie_chart_1" class="d-flex easy-pie-chart" data-percent="91">
                                                <span class="percent head-font">91</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="card hk-dash-type-1 overflow-hide">
                        <div class="card-header pa-0">
                            <div class="nav nav-tabs nav-light nav-justified" id="dash-tab" role="tablist">
                                <a class="d-flex align-items-center justify-content-center nav-item nav-link active" id="dash-tab-1" data-toggle="tab" href="#nav-dash-1" role="tab" aria-selected="true">
                                    <div class="d-flex">
                                        <div>
                                            <span class="d-block mb-5"><span class="display-4 counter-anim">16,843</span></span>
                                            <span class="d-block"><i class="zmdi zmdi-eye mr-10"></i>views</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center justify-content-center nav-item nav-link" id="dash-tab-2" data-toggle="tab" href="#nav-dash-2" role="tab" aria-selected="false">
                                    <div class="d-flex">
                                        <div>
                                            <span class="d-block mb-5"><span class="display-4 counter-anim">2457</span></span>
                                            <span class="d-block"><i class="zmdi zmdi-trending-up mr-10"></i>sales</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center justify-content-center nav-item nav-link" id="dash-tab-3" data-toggle="tab" href="#nav-dash-3" role="tab" aria-controls="nav-dash-3" aria-selected="false">
                                    <div class="d-flex">
                                        <div>
                                            <span class="d-block mb-5"><span class="display-4 counter-anim">12,726</span></span>
                                            <span class="d-block"><i class="zmdi zmdi-money mr-10"></i>total</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-dash-1" role="tabpanel" aria-labelledby="dash-tab-1">
                                    <div id="e_chart_11" class="echart" style="height:310px;"></div>
                                </div>
                                <div class="tab-pane fade" id="nav-dash-2" role="tabpanel" aria-labelledby="dash-tab-2">
                                    <div id="e_chart_12" class="echart" style="height:310px;"></div>
                                </div>
                                <div class="tab-pane fade" id="nav-dash-3" role="tabpanel" aria-labelledby="dash-tab-3">
                                    <div id="e_chart_13" class="echart" style="height:310px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body pa-0">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Data Range</th>
                                                <th>Visits</th>
                                                <th>Visitors</th>
                                                <th>Views</th>
                                                <th>Failure</th>
                                                <th>View depth</th>
                                                <th>Time on site</th>
                                                <th>% of New</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2000 - 4000</td>
                                                <td>
                                                    <span class="d-block">3211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">86</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">1211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">1241</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">76</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">12:11</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">80%</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3000 - 5000</td>
                                                <td>
                                                    <span class="d-block">3211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-80" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">86</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">1211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">3211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-40" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">56</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-50" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">17:11</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">80%</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7000 - 8000</td>
                                                <td>
                                                    <span class="d-block">6211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-65" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">56</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">1211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">8211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-90" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">96</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-95" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">17:11</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">60%</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8000 - 9000</td>
                                                <td>
                                                    <span class="d-block">7211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">66</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">5211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">3211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">86</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">12:11</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">80%</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9000 - 10000</td>
                                                <td>
                                                    <span class="d-block">4211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">66</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">1251</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-60" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">3211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-40" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">86</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-20" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">19:11</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">80%</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10000 - 15000</td>
                                                <td>
                                                    <span class="d-block">9211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">74</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-30" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">1211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-90" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">4211</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-danger w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">90</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-warning w-90" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">19:11</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-primary w-75" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="d-block">80%</span>
                                                    <span class="d-block mt-5">
                                                        <div class="progress progress-bar-xs">
                                                            <div class="progress-bar bg-info w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </span>
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
            <!-- /Row -->
        </div>
        <!-- /Container -->

@endsection
