@seoTitle(__('Reset Password'))

<x-authentication-card>
    <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
        <div
            class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-slate-850 rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0">
                <h4 class="font-bold">Reset Password</h4>
                <p class="mb-0">Set your new Password</p>
            </div>
            @if($errors->any())
                <div class="p-6 pb-0 mb-0">
                    @foreach($errors->all() as $error)
                        <div class="text-red-500">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <div class="flex-auto p-6">
                <form method="POST" action="{{route('password.update')}}">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="token" style="display: none" value="{{request()->route('token')}}">
                        <input type="email" id="email" readonly name="email" value="{{request()->input('email')}}"
                               required placeholder="Email"
                               class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                    </div>
                    <div class="mb-4">
                        <input type="password" id="password" autocomplete="new-password" name="password" autofocus
                               required placeholder="Password"
                               class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                    </div>
                    <div class="mb-4">
                        <input type="password" id="password_confirmation" autocomplete="new-password"
                               name="password_confirmation" required placeholder="Confirm Password"
                               class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                    </div>
                    <div class="min-h-6 mb-0.5 block pl-12 text-left">
                        <input id="rememberMe" name="remember"
                               class="mt-0.5 rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                               type="checkbox"/>
                        <label class="mb-2 ml-1 text-sm font-normal cursor-pointer select-none text-slate-700"
                               for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 text-sm font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs tracking-tight-rem bg-150 bg-x-25">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-authentication-card>
