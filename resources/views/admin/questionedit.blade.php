@include('components.dashboard.css')
@include('components.dashboard.navbar')

<div class="main-content" id="panel">

    @include('components.dashboard.header')

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Question</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('update') }}" method="POST">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <textarea name="question" class="form-control" value='{{ $item[0]->quest_question}}' cols="30" rows="5"></textarea>
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
    @include('components.dashboard.js')