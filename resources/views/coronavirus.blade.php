<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Coronavirus</title>
    <link href="{{asset('corona-css/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link rel="icon" type="image/png" href="http://example.com/myicon.png">
    <link href="{{asset('corona-css/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h4>Coronavirus</h4>
            </nav>
            <div class="container-fluid">
                <div class="mb-4" style="background: white !important; padding: 10px">
                    <div class="row">
                        <div class="col-lg-9">
                            <h3 class="h3 mb-0 text-gray-800">Welcome {{$ip}} </h3>
                        </div>
                        <div class="col-lg-3 text-right">
                            <h4 class="text-right">Total Users Visited = {{$users}}</>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="row">
                        <div class="col-lg-9">
                            <h1 class="h3 mb-0 text-gray-800">Covid19 Update ({{$date}})</h1>
                        </div>
                        <div class="col-lg-3 text-right">
                            <a class="text-right" href="https://github.com/aliriaz186/Covid19" style="color: blue; cursor: pointer">Github Repository</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Confirmed
                                            Cases
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$confirmed}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Deaths
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$deaths}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Recovered
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$recovered}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Active
                                            Cases
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$active}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Country wise details</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <th>Countries</th>
                                    </thead>
                                    <tbody>
                                    @foreach($countries as $country)
                                        <tr>
                                            <td><a target="_blank"
                                                   href="http://covid-19.com/country/{{$country['alpha-3']}}">{{$country['name']}}</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <table class="table table-borderless">
                            <thead>
                            <th>#</th>
                            <th>Contributers</th>
                            </thead>
                            <tbody>
                            <td>1</td>
                            <td><a target="_blank" href="https://github.com/aliriaz186">Ali Riaz</a></td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; GoFindee.com 2020</span>
                </div>
            </div>
        </footer>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script type="text/javascript"
        src="{{ \Illuminate\Support\Facades\URL::asset('corona-css/vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript"
        src="{{ \Illuminate\Support\Facades\URL::asset('corona-css/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript"
        src="{{ \Illuminate\Support\Facades\URL::asset('corona-css/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('css/js/sb-admin-2.min.js') }}"></script>
<script type="text/javascript"
        src="{{ \Illuminate\Support\Facades\URL::asset('corona-css/vendor/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript"
        src="{{ \Illuminate\Support\Facades\URL::asset('corona-css/js/demo/chart-area-demo.js') }}"></script>
<script type="text/javascript"
        src="{{ \Illuminate\Support\Facades\URL::asset('corona-css/js/demo/chart-pie-demo.js') }}"></script>
</body>
</html>
