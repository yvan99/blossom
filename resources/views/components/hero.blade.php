<section class="relative bg-white">
    <img class="absolute inset-0 object-[75%] sm:object-[25%] object-cover w-full h-full opacity-25 sm:opacity-100"
        src="../assets/img/banner.jpg"
        alt="sisterhood" />

    <div class="hidden sm:block sm:inset-0 sm:absolute sm:bg-gradient-to-r sm:from-white sm:to-transparent"></div>

    <div class="relative max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
        <div class="max-w-xl text-center sm:text-left">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                BLOSSOM
                <strong class="font-extrabold text-rose-700 sm:block">
                    FOR A BETTER FUTURE.
                </strong>
            </h1>

            <p class="max-w-lg mt-4 sm:leading-relaxed sm:text-xl">
                BLOSSOM is a web application to help understand the reason behind teenage pregnancies, analyze the data and predict the risk of Teen Pregnancy.
            </p>

            <div class="flex flex-wrap gap-4 mt-8 text-center">
                <a class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-rose-600 sm:w-auto active:bg-rose-500 hover:bg-rose-700 focus:outline-none focus:ring"
                    href="/signup">
                    Get Started
                </a>
                @if (!Auth::user())
                <a class="block w-full px-12 py-3 text-sm font-medium bg-white rounded shadow text-rose-600 sm:w-auto hover:text-rose-700 active:text-rose-500 focus:outline-none focus:ring"
                    href="/signin">
                    Sign In
                </a>
                @else
                <a class="block w-full px-12 py-3 text-sm font-medium bg-white rounded shadow text-rose-600 sm:w-auto hover:text-rose-700 active:text-rose-500 focus:outline-none focus:ring"
                href="quiz">
               Take quiz
            </a>
                @endif
            </div>
        </div>
    </div>
</section>
