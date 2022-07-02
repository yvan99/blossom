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
                            <h1 class="text-white">{{ $student }} QUIZ ATTEMPT</h1>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-7">
                <div class="card bg-white">

                    <div class="card-body">



                        @foreach ($questions as $item)
                            <li style="list-style-type: decimal;text-transform:capitalize;font-weight:600"
                                class="pb-3">
                                {{ $item->quest_question }}</li>
                            <b class="text-danger">{{ $item->answ_title }}</b>
                            <hr>
                        @endforeach



                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="h3 mb-0">RESPONSE ANALYTICS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div id="chart" style="height: 300px;"></div>
                    </div>
                </div>
            </div>

            <script>
                const chart = new Chartisan({
                    el: '#chart',
                    url: "@chart('student_answer_pie')",
                    hooks: new ChartisanHooks()
                        .datasets('pie')
                        .axis(false)       
                });
            </script>


            @include('components.dashboard.js')
