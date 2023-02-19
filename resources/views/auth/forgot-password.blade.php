@seoTitle(__('Forgot Password'))

<x-authentication-card>
    <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
        <div
            class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-slate-850 rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0">
                <h4 class="font-bold">Forgot your password?</h4>
                <p class="mb-0">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
            </div>
            @if($errors->any())
                <div class="p-6 pb-0 mb-0">
                    @foreach($errors->all() as $error)
                        <div class="text-red-500">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if($status = session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $status }}
                </div>
            @endif
            <div class="flex-auto p-6">
                <form method="POST" action="{{route('password.email')}}">
                    @csrf
                    <div class="mb-4">
                        <input type="email" id="email" name="email" value="{{old('email')}}"
                               required placeholder="Email"
                               class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 text-sm font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs tracking-tight-rem bg-150 bg-x-25">
                            {{__('Email Password Reset Link')}}
                        </button>
                    </div>
                    <div class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                        <p class="mx-auto mb-4 text-sm font-normal">{{ __('Remember your password?') }} <a href="{{ route('login') }}" class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">Login Here</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>

</x-authentication-card>
