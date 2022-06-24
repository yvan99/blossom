@include('components.css')
@include('components.header')
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container w-1/2 mx-auto flex-1 flex flex-col items-center justify-center px-2">
   
        <div class="bg-white px-6 py-8 rounded text-black w-full">
            <h1 class="mb-8 font-extrabold sm:text-5xl text-center">Let's Get Started</h1>
            @include('components.alert')
            <form action='{{ route('savestudent') }}' method="post">
                @csrf
                <input type="text" disabled class="block border border-grey-light w-full p-3 rounded mb-4" name="fullname"
                    value={{ $code }} placeholder="Let's stay anonymous" />
                <select name="gender"
                    class="border-grey-light p-3 rounded block w-full mb-4 border bg-white focus:ring-rose-600 focus:border-blue-500 block">
                    <option selected disabled>Choose your gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>

                </select>
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                    placeholder="Password" />


                <select id="provinces" name="province"
                    class="border-grey-light p-3 rounded block w-full mb-4 border bg-white focus:ring-rose-600 focus:border-blue-500 block"
                    onchange="districtHandler()"></select>
                <select id="districts" name="district"
                    class="border-grey-light p-3 rounded block w-full mb-4 border bg-white focus:ring-rose-600 focus:border-blue-500 block"></select>

                <button type="submit"
                    class="w-full text-center py-3 rounded bg-rose-600 text-white hover:bg-green-dark focus:outline-none my-1">Create
                    Account</button>
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

        <div class="text-grey-dark mt-6">
            Already have an account?
            <a class="no-underline border-b border-blue text-blue" href="../login/">
                Log in
            </a>.
        </div>
    </div>
</div>
@include('components.footer')
