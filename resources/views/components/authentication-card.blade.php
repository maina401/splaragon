{{--<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>--}}
<section>
    <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
        <div class="container z-1">
            <div class="flex flex-wrap -mx-3">
                {{$slot}}
                <div class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                    <div class="relative flex flex-col justify-center h-full px-24 m-4 bg-cover rounded-xl bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg')]">
                        <span class="absolute top-0 left-0 w-full h-full bg-cover rounded-xl opacity-80 bg-gradient-to-tl from-blue-500 to-violet-500"></span>
                        <div class="relative z-30">
                            @php
                                $quote=getQuote();
                            @endphp
                            <h4 class="mt-12 font-bold text-white">"{{$quote->content}}"</h4>
                            <p class="text-white ">{{$quote->author}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
