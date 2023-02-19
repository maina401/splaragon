@seoTitle(__('Email Verification'))

<x-authentication-card>
    <div
        class="flex flex-col w-full max-w-full px-6 mx-auto shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12 lg:mx-0">
        <div
            class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none dark:bg-slate-850 rounded-2xl bg-clip-border">
            <div class="flex-auto p-6 text-center lg:px-12 lg:py-12">
                <div class="mb-6">
                    <div class="mb-6 text-center text-slate-500">
                        <h2>Verify your email</h2>
                        <p class="mb-4 text-sm text-gray-600">            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </p>
                    </div>
                    @if($errors->any())
                        <div class="p-6 pb-0 mb-0">
                            @foreach($errors->all() as $error)
                                <div class="text-red-500">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <div class="flex flex-wrap -mx-1 sm:-mx-2">

                        <a href="{{ route('profile.show') }}" class="inline-block w-full px-5 py-2.5 mb-4 text-sm font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-orange-500 border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs tracking-tight-rem bg-150 bg-x-25">
                            Your Profile
                        </a>
                        <span class="text-sm leading-normal text-slate-500"> Haven't received it?
                            <form method="POST" action="{{route('verification.send')}}">
                                @csrf <button type="submit">Resend a new code</button></form></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-authentication-card>
