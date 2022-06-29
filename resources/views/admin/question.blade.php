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
                                <li class="breadcrumb-item"><a href="question">Question</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
                            Add Question
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ask a Question</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('savequestion') }}">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <textarea name="question" class="form-control" cols="30" rows="5"></textarea>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-default">Save Question</button>
                                        </form>
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
                        <h3 class="mb-0">Questions list</h3>
                        @include('components.response')
                    </div>

                    <div class="table-responsive">
                      <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                              <tr>
                                  <th>#</th>
                                  <th scope="col" class="sort" >Question</th>
                              </tr>
                          </thead>
                          <tbody class="list">
                              @foreach ($questions as $item)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$item->quest_question}}</td>
                                 </tr>
                              @endforeach

                          </tbody>
                      </table>
                  </div>
                </div>
            </div>


        </div>
    </div>


    @include('components.dashboard.js');

