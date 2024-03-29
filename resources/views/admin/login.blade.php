@include('components.css')

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-md rounded">
        <h3 class="text-2xl font-bold text-center">Admin Portal</h3>
        <form action="{{route('adminlogin')}}" method="POST" autocomplete="off">
            @include('components.alert')
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="text" placeholder="Email" name="email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="Password" name="password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-between">
                    <button type="submit" class="px-6 py-2 mt-4 text-white bg-rose-600 rounded-lg hover:bg-blue-900">Login</button>
                    <a href="/" class="text-sm text-blue-600 hover:underline">Back to homepage</a>
                </div>
            </div>
        </form>
    </div>
</div>
