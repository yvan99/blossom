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
<li class="breadcrumb-item"><a href="student">Student</a></li>
<li class="breadcrumb-item"><a href="counselor">Counselor</a></li>
</ol>
</nav>
</div>
<div class="col-lg-6 col-5 text-right">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
    Add Counselor
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Counselor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form role="form">
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni circle-08"></i></span>
                        </div>
                        <input class="form-control" placeholder="Fullnames" type="text">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="phone" type="text">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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
    <div class="col">
        <div class="card">
        
        <div class="card-header border-0">
        <h3 class="mb-0">Counselor table</h3>
        </div>
        
        <div class="table-responsive">
        <table class="table align-items-center table-flush">
        <thead class="thead-light">
        <tr>
        <th scope="col" class="sort" data-sort="name">Fullnames</th>
        <th scope="col" class="sort" data-sort="budget">Email</th>
        <th scope="col" class="sort" data-sort="budget">Telephone</th>
        <th scope="col" class="sort" data-sort="status">Status</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="list">
        <tr>
        <th scope="row">
        <div class="media align-items-center">
        <a href="#" class="avatar rounded-circle mr-3">
        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
        </a>
        <div class="media-body">
        <span class="name mb-0 text-sm">Argon Design System</span>
        </div>
        </div>
        </th>
        <td class="budget">
        $2500 USD
        </td>
        <td>
        <span class="badge badge-dot mr-4">
        <i class="bg-warning"></i>
        <span class="status">pending</span>
        </span>
        </td>
        <td>
            <span class="badge badge-dot mr-4">
            <i class="bg-warning"></i>
            <span class="status">--</span>
            </span>
            </td>
        <td class="text-right">
        <div class="dropdown">
        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </div>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
        
        <div class="card-footer py-4">
        <nav aria-label="...">
        <ul class="pagination justify-content-end mb-0">
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">
        <i class="fas fa-angle-left"></i>
        <span class="sr-only">Previous</span>
        </a>
        </li>
        <li class="page-item active">
        <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#">
        <i class="fas fa-angle-right"></i>
        <span class="sr-only">Next</span>
        </a>
        </li>
        </ul>
        </nav>
        </div>
        </div>
        </div>


</div>
</div>


@include('components.dashboard.js');

</body>

<!-- Mirrored from demos.creative-tim.com/argon-dashboard-bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 15:38:39 GMT -->
</html>
