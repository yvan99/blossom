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
                                <li class="breadcrumb-item"><a href="student">Student list</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
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
                        <h3 class="mb-0">Students list</h3>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th scope="col" class="sort" >ANONYMOUS ID</th>
                                    <th scope="col" class="sort">GENDER</th>
                                    <th scope="col" class="sort">PROVINCE</th>
                                    <th scope="col" class="sort">DISTRICT</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($students as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->student_username}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>{{$item->student_province}}</td>
                                    <td>{{$item->student_district}}</td>
                                    <td><a href="quiz/{{$item->student_id}}" class="btn btn-sm btn-default">View Quiz</a> </td>
                                   </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                 
                </div>
            </div>


        </div>
    </div>


    @include('components.dashboard.js')

