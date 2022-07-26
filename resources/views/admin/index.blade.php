@include('components.dashboard.css')
@include('components.dashboard.navbar')

<div class="main-content" id="panel">
    <div class="big">
        @include('components.dashboard.header')


        <div class="header pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h1 class="text-white">Welcome onboard , {{ Auth::user()->admin_names }}</h1>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">registered students
                                            </h5>
                                            <span class="h1 font-weight-bold mb-0">{{ $totalstudents }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total questions</h5>
                                            <span class="h1 font-weight-bold mb-0">{{ $totalquestion }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total counselor</h5>
                                            <span class="h1 font-weight-bold mb-0">{{ $totalcounsel }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-money-coins"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">TOTAL QUIZES DONE
                                            </h5>
                                            <span class="h1 font-weight-bold mb-0">{{ $totalquizes / 10 }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                <i class="ni ni-chart-bar-32"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">TOTAL QUIZES DONE
                                            </h5>
                                            <span class="h1 font-weight-bold mb-0">{{ $takecareof}}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                <i class="ni ni-chart-bar-32"></i>
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

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card bg-white">

                    <div class="card-body">
                        <h2>Provinces Quizes Data Percentage analytics</h2>
                       
                        <li>Blue colored chart bar represent the yes percentage</li>
                        <li>Green colored chart bar represent the all other combined percentage</li>
                        <div id="chart" style="height: 400px;"></div>

                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card bg-white">

                    <div class="card-body">
                        <h2>Sexual .. Predicted ...</h2>

                        <div class="row">

                            <div class="col-xl-4 col-md-6">
                                <div class="card card-stats">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Kigali City
                                                </h5>
                                                <span class="h5 font-weight-bold mb-0">

                                                    {{ $kigalinos > 30 ? 'High risk' : 'Low Risk' }}
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="{{ $kigalinos > 30 ? 'icon icon-shape bg-gradient-red text-white rounded-circle shadow' : 'icon icon-shape bg-gradient-green text-white rounded-circle shadow' }}">
                                                    <i class="ni ni-chart-bar-32"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card card-stats">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Northern Province
                                                </h5>
                                                <span class="h5 font-weight-bold mb-0">

                                                    {{ $northnos > 30 ? 'High risk' : 'Low Risk' }}
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="{{ $northnos > 30 ? 'icon icon-shape bg-gradient-red text-white rounded-circle shadow' : 'icon icon-shape bg-gradient-green text-white rounded-circle shadow' }}">
                                                    <i class="ni ni-chart-bar-32"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-4 col-md-6">
                                <div class="card card-stats">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Southern Province
                                                </h5>
                                                <span class="h5 font-weight-bold mb-0">

                                                    {{ $southnos > 30 ? 'High risk' : 'Low Risk' }}
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="{{ $southnos > 30 ? 'icon icon-shape bg-gradient-red text-white rounded-circle shadow' : 'icon icon-shape bg-gradient-green text-white rounded-circle shadow' }}">
                                                    <i class="ni ni-chart-bar-32"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-md-6">
                                <div class="card card-stats">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Eastern Province
                                                </h5>
                                                <span class="h5 font-weight-bold mb-0">

                                                    {{ $eastnos > 30 ? 'High risk' : 'Low Risk' }}
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="{{ $eastnos > 30 ? 'icon icon-shape bg-gradient-red text-white rounded-circle shadow' : 'icon icon-shape bg-gradient-green text-white rounded-circle shadow' }}">
                                                    <i class="ni ni-chart-bar-32"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-md-6">
                                <div class="card card-stats">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Western Province
                                                </h5>
                                                <span class="h5 font-weight-bold mb-0">

                                                    {{ $westnos > 30 ? 'High risk' : 'Low Risk' }}
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="{{ $westnos > 30 ? 'icon icon-shape bg-gradient-red text-white rounded-circle shadow' : 'icon icon-shape bg-gradient-green text-white rounded-circle shadow' }}">
                                                    <i class="ni ni-chart-bar-32"></i>
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
    </div>
</div>

<script>
    const chart = new Chartisan({
        el: '#chart',
        url: "{{ url('api/chart/sample_chart') }}"

    });
</script>
@include('components.dashboard.js')
