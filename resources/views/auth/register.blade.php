@seoTitle(__('Register'))

<x-authentication-card>
    <div class="flex flex-col w-full max-w-full pl-10 pr-5 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-slate-850 rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0">
                <h4 class="font-bold">Sign Up</h4>
                <p class="mb-0">Enter your email and password to register</p>
            </div>
            @if($errors->any())
                <div class="p-6 pb-0 mb-0">
                    @foreach($errors->all() as $error)
                        <div class="text-red-500">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <div class="flex-auto p-6 pb-4">
                <form role="form" method="POST">
                    @csrf
                    <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Name</label>
                    <div class="mb-4">
                        <input type="text" name="name"  id="name" value="{{old('name','')}}" required placeholder="Name" class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                    <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Email</label>
                    <div class="mb-4">
                        <input type="email" name="email" id="email" value="{{old('email','')}}" required placeholder="Email" class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                    <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Password</label>
                    <div class="mb-4">
                        <input type="password" name="password" id="password" autocomplete="new-password" placeholder="Password" class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                    <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700">Confirm Password</label>
                    <div class="mb-4">
                        <input type="password" name="password_confirmation" autocomplete="new-password" id="password_confirmation" placeholder="Confirm Password" class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                    @if(\Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="min-h-6 pl-7 mb-0.5 block">
                        <input id="terms" name="terms" class="w-5 h-5 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" />
                        <label class="mb-2 ml-1 text-sm font-normal text-left cursor-pointer select-none text-slate-700" for="terms"> {!! __('I agree to the :terms_of_service and :privacy_policy', [
                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                ]) !!} </label>
                    </div>
                    @endif
                    <div class="text-center">
                        <button type="submit" class="inline-block w-full px-5 py-2.5 mt-6 mb-0 text-sm font-bold text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:-translate-y-px active:hover:text-white active:text-black hover:shadow-xs bg-blue-500 leading-normal tracking-tight-rem bg-150 bg-x-25">Sign up</button>
                    </div>
                </form>
            </div>
            <div class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                <p class="mx-auto mb-4">Already have an account? <a href="{{route('login')}}" class="font-bold text-transparent bg-blue-500 bg-clip-text">Sign in</a></p>
            </div>
        </div>
    </div>
</x-authentication-card>
