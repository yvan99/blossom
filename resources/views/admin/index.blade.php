@include('components.dashboard.css')
@include('components.dashboard.navbar')

<div class="main-content" id="panel">

@include('components.dashboard.header')


<div class="header bg-primary pb-6">
<div class="container-fluid">
<div class="header-body">
<div class="row align-items-center py-4">
<div class="col-lg-6 col-7">
<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="home">Admin</a></li>
</ol>
</nav>
</div>

</div>

<div class="row">
<div class="col-xl-3 col-md-6">
<div class="card card-stats">

<div class="card-body">
<div class="row">
<div class="col">
<h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
<span class="h2 font-weight-bold mb-0">350,897</span>
</div>
<div class="col-auto">
<div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
<i class="ni ni-active-40"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-sm">
<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
<span class="text-nowrap">Since last month</span>
</p>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card card-stats">

<div class="card-body">
<div class="row">
<div class="col">
<h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
<span class="h2 font-weight-bold mb-0">2,356</span>
</div>
<div class="col-auto">
<div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
<i class="ni ni-chart-pie-35"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-sm">
<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
<span class="text-nowrap">Since last month</span>
</p>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card card-stats">

<div class="card-body">
<div class="row">
<div class="col">
<h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
<span class="h2 font-weight-bold mb-0">924</span>
</div>
<div class="col-auto">
<div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
<i class="ni ni-money-coins"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-sm">
<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
<span class="text-nowrap">Since last month</span>
</p>
</div>
</div>
</div>
 <div class="col-xl-3 col-md-6">
<div class="card card-stats">

<div class="card-body">
<div class="row">
<div class="col">
<h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
<span class="h2 font-weight-bold mb-0">49,65%</span>
</div>
<div class="col-auto">
<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
<i class="ni ni-chart-bar-32"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-sm">
<span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
<span class="text-nowrap">Since last month</span>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid mt--6">
<div class="row">



</div>
</div>


@include('components.dashboard.js');

</body>

<!-- Mirrored from demos.creative-tim.com/argon-dashboard-bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 15:38:39 GMT -->
</html>
