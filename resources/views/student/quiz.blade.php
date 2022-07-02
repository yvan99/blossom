@include('components.css')
@include('components.header')
<script src="//code.tidio.co/cma6pvx2dwu34s1ztlr25xxllksz6oqs.js" async></script>
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container w-1/2 mx-auto flex-1 flex flex-col items-center justify-center px-2">

        <div class="bg-white px-6 py-8 rounded text-black w-full">
            <h1 class="mb-8 font-extrabold sm:text-5xl text-center">Let's Take the Quiz</h1>
            @include('components.alert')
            <form action="{{route('quiztake')}}" method="post">
                @csrf
                @foreach ($randomize as $item)
                    <li style="list-style-type: decimal;font-size:23px;text-transform:capitalize" class="pb-4 pt-4">
                        {{ $item->quest_question }}</li>

                    @foreach ($answers as $ans)
                        {{-- <input type="text" name="question" value="{{ $item->quest_id }}"> --}}
                        <input type="radio" required name={{ $item->quest_id}} value="{{ $ans->answ_id }}">
                        {{ $ans->answ_title }} <br>
                    @endforeach
         
            @endforeach
            <button type="submit"
                class="w-full mt-4 text-center py-3 rounded bg-rose-600 text-white hover:bg-green-dark focus:outline-none my-1">Save
                & Confirm my quiz</button>
            </form>
            <div class="text-center text-sm text-grey-dark mt-4">
                By signing up, you agree to the
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Terms of Service
                </a> and
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Privacy Policy
                </a>
            </div>
        </div>

    </div>
</div>
@include('components.footer')
