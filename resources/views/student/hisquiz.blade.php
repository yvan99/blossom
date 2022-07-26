@include('components.css')
@include('components.header')
<script src="//code.tidio.co/cma6pvx2dwu34s1ztlr25xxllksz6oqs.js" async></script>
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container w-1/2 mx-auto flex-1 flex flex-col items-center justify-center px-2">

        @if ($studentno >$studentyes)
        <div class="bg-rose-500 text-center py-4 lg:px-4">
            <div class="p-2 bg-white items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
              <span class="flex rounded-full bg-rose-600 uppercase px-2 py-1 text-xs font-bold mr-3">Alert</span>
              <span class="font-semibold mr-2 text-left flex-auto text-rose-600">Dear Student, 

                Your answers shows that you don't have enough understanding on the topics, please talk to our counsellors in the chat box for assistance/counselling.</span>
              <svg class="fill-current opacity-75 text-rose-600 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
          </div>
        @endif

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
