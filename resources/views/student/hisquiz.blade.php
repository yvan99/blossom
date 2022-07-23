@include('components.css')
@include('components.header')
<script src="//code.tidio.co/cma6pvx2dwu34s1ztlr25xxllksz6oqs.js" async></script>
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container w-1/2 mx-auto flex-1 flex flex-col items-center justify-center px-2">

        <div class="bg-white px-6 py-8 rounded text-black w-full">
            <h1 class="mb-8 font-extrabold sm:text-5xl text-center">My Quiz Attempt Results</h1>

                        @foreach ($questions as $item)
                        <li style="list-style-type: decimal;text-transform:capitalize;font-weight:600"
                            class="pb-3">
                            {{ $item->quest_question }}</li>
                        <b class="text-rose-600">{{ $item->answ_title }}</b>
                        <hr class="pb-5">
                    @endforeach
        
        </div>

    </div>
</div>
@include('components.footer')
