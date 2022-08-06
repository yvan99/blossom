@include('components.dashboard.css')
@include('components.dashboard.navbar')

<div class="main-content" id="panel">
    <div class="big">
        @include('components.dashboard.header')
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card bg-white">
                        <div class="card-body">
                            <h2>Teen Pregnancy Prediction</h2>
    
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
    
                                                        {{ $eastnos > 30 ? 'High risk,please take special measures' : 'Low Risk' }}
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
    
                                                        {{ $westnos > 30 ? 'High risk, please take special measures' : 'Low Risk' }}
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
<div class="col-xl-12">
    <div class="card bg-white">
        <div class="card-body">
            <h2 class="text-center">Proposed Solution</h2>
            <h3> In case of high risk, below measures are to be followed: </h3>
                <p class="text-gray-900;font-weight:600"> * Introduction of a new Curriculum for Sexual and Reproductive Health.</b>
                <p class="text-gray-900;font-weight:600"> * Encouraging Counselling for Students in Need.</b>
                <p class="text-gray-900;font-weight:600"> * Create safe spaces for students to express themselves.</b>

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
    