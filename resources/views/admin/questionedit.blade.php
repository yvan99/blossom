@include('components.dashboard.css')
@include('components.dashboard.navbar')

<div class="main-content" id="panel">

    @include('components.dashboard.header')
    <div class="row align-items-center py-4">
        <div class="card col-12">
            <div class="card-body">
                <h4>Update Question</h4>
                <form action="{{route('updatequestion')}}" method="post">
                    @csrf
              
                    <input type="hidden" name="id" value="{{$question->quest_id}}" >
                    <div class="form-group">
                        <textarea name="question" class="form-control" id="" cols="30" rows="10">{{$question->quest_question}}</textarea>
                    </div>
    
                    <button type="submit" class="btn btn-warning">Update Question</button>
                    
                </form>
    
            </div>
        </div>
    </div>
    
</div>
    @include('components.dashboard.js')