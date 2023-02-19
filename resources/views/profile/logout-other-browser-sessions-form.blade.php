<x-splade-form
    method="delete"
    :action="route('other-browser-sessions.destroy')"
    :confirm="__('Log Out Other Browser Sessions')"
    :confirm-text="__('Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.')"
    :confirm-button="__('Log Out Other Browser Sessions')"
    require-password
    stay
>
    <x-action-section>
        <x-slot:title>
            {{ __('Browser Sessions') }}
        </x-slot>

        <x-slot:description>
            {{ __('Manage and log out your active sessions on other browsers and devices.') }}
        </x-slot>

        <x-slot:content>
            <div class="max-w-xl text-sm text-gray-600">
                {{ __('If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.') }}
            </div>

            <!-- Other Browser Sessions -->
            @if(count($sessions) > 0)
                <div class="mt-5 space-y-6">
                    @foreach($sessions as $session)
                        <div class="flex items-center">
                            <div>
                                @if($session->agent['is_desktop'])
                                    <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                    </svg>
                                @else
                                    <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                    </svg>
                                @endif
                            </div>

                            <div class="ml-3">
                                <div class="text-sm text-gray-600">
                                    {{ $session->agent['platform'] ?: 'Unknown' }} - {{ $session->agent['browser'] ?: 'Unknown' }}
                                </div>

                                <div>
                                    <div class="text-xs text-gray-500">
                                        {{ $session->ip_address }},

                                        @if($session->is_current_device)
                                            <span class="text-green-500 font-semibold">{{ __('This device') }}</span>
                                        @else
                                            <span>{{ __('Last active') }} {{ $session->last_active }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="flex items-center mt-5">
                <x-splade-submit :label="__('Log Out Other Browser Sessions')" />

                <x-action-message v-if="form.recentlySuccessful" class="ml-3">
                    {{ __('Done.') }}
                </x-action-message>
            </div>
        </x-slot>
    </x-action-section>
</x-splade-form>
<div
    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
    id="sessions">
    <div class="p-6 pb-4 rounded-t-2xl">
        <h5 class="dark:text-white">Sessions</h5>
        <p class="text-sm leading-normal dark:text-white/60">This is a list of devices that have logged
            into your account. Remove those that you do not recognize.</p>
    </div>
    <div class="flex-auto p-6 pt-0">
        <div class="flex items-center">
            <div class="text-center w-5/100">
                <i class="text-lg fas fa-desktop opacity-60"></i>
            </div>
            <div class="my-auto ml-4">
                <div class="h-full">
                    <p class="mb-1 text-sm leading-normal dark:text-white/60">Bucharest
                        68.133.163.201</p>
                    <p class="mb-0 text-xs leading-tight dark:text-white/60">Your current session</p>
                </div>
            </div>
            <span
                class="py-1.2 text-xxs px-2 rounded-1 my-auto ml-auto mr-4 inline-block whitespace-nowrap bg-emerald-200 text-center align-baseline font-bold uppercase leading-none text-emerald-600">Active</span>
            <p class="my-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white dark:opacity-80">
                EU</p>
            <a href="javascript:;" class="my-auto text-sm leading-normal text-blue-500 group">
                See more
                <i class="group-hover:translate-x-1.25 fas fa-arrow-right text-xs ease-bounce ml-1 leading-tight transition-all duration-200"></i>
            </a>
        </div>
        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
        <div class="flex items-center">
            <div class="text-center w-5/100">
                <i class="text-lg fas fa-desktop opacity-60"></i>
            </div>
            <p class="my-auto ml-4 dark:text-white/60">Chrome on macOS</p>
            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white dark:opacity-80">
                US</p>
            <a href="javascript:;" class="my-auto text-sm leading-normal text-blue-500 group">
                See more
                <i class="group-hover:translate-x-1.25 fas fa-arrow-right text-xs ease-bounce ml-1 leading-tight transition-all duration-200"></i>
            </a>
        </div>
        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
        <div class="flex items-center">
            <div class="text-center w-5/100">
                <i class="text-lg fas fa-mobile opacity-60"></i>
            </div>
            <p class="my-auto ml-4 dark:text-white/60">Safari on iPhone</p>
            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white dark:opacity-80">
                US</p>
            <a href="javascript:;" class="my-auto text-sm leading-normal text-blue-500 group">
                See more
                <i class="group-hover:translate-x-1.25 fas fa-arrow-right text-xs ease-bounce ml-1 leading-tight transition-all duration-200"></i>
            </a>
        </div>
    </div>
</div>
