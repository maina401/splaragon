@seoTitle(__('Profile'))

<x-app-layout>
    <div class="w-full p-6 py-4 mx-auto my-12">
        <div class="flex flex-wrap mb-12 -mx-3">
            <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-3/12">
                <div
                    class="sticky flex flex-col min-w-0 break-words bg-white border-0 shadow-xl top-1/100 dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <ul class="flex flex-col flex-wrap p-4 mb-0 list-none rounded-xl">
                        @if(Laravel\Fortify\Features::canUpdateProfileInformation())
                            <li>
                                <a href="#profile"
                                   class="flex items-center px-4 py-2 transition-colors ease-in-out rounded-lg group text-slate-500 hover:bg-gray-200">
                                    <i class="mr-2 ni ni-spaceship text-slate-700 opacity-60 dark:text-white dark:group-hover:text-slate-700"></i>
                                    <span
                                        class="text-sm leading-normal dark:group-hover:text-slate-700 dark:text-white">Profile</span>
                                </a>
                            </li>
                        @endif
                        <li class="pt-2">
                            <a href="#basic-info"
                               class="flex items-center px-4 py-2 transition-colors ease-in-out rounded-lg group text-slate-500 hover:bg-gray-200">
                                <i class="mr-2 ni ni-books text-slate-700 opacity-60 dark:text-white dark:group-hover:text-slate-700"></i>
                                <span class="text-sm leading-normal dark:group-hover:text-slate-700 dark:text-white">Basic Info</span>
                            </a>
                        </li>
                        @if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <li class="pt-2">
                                <a href="#password"
                                   class="flex items-center px-4 py-2 transition-colors ease-in-out rounded-lg group text-slate-500 hover:bg-gray-200">
                                    <i class="mr-2 ni ni-atom text-slate-700 opacity-60 dark:text-white dark:group-hover:text-slate-700"></i>
                                    <span
                                        class="text-sm leading-normal dark:group-hover:text-slate-700 dark:text-white">Change Password</span>
                                </a>
                            </li>
                        @endif
                        @if(Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <li class="pt-2">
                                <a href="#2FA"
                                   class="flex items-center px-4 py-2 transition-colors ease-in-out rounded-lg group text-slate-500 hover:bg-gray-200">
                                    <i class="mr-2 ni ni-ui-04 text-slate-700 opacity-60 dark:text-white dark:group-hover:text-slate-700"></i>
                                    <span
                                        class="text-sm leading-normal dark:group-hover:text-slate-700 dark:text-white">2FA</span>
                                </a>
                            </li>
                        @endif

                        <li class="pt-2">
                            <a href="#notifications"
                               class="flex items-center px-4 py-2 transition-colors ease-in-out rounded-lg group text-slate-500 hover:bg-gray-200">
                                <i class="mr-2 ni ni-bell-55 text-slate-700 opacity-60 dark:text-white dark:group-hover:text-slate-700"></i>
                                <span class="text-sm leading-normal dark:group-hover:text-slate-700 dark:text-white">Notifications</span>
                            </a>
                        </li>
                        <li class="pt-2">
                            <a href="#sessions"
                               class="flex items-center px-4 py-2 transition-colors ease-in-out rounded-lg group text-slate-500 hover:bg-gray-200">
                                <i class="mr-2 ni ni-watch-time text-slate-700 opacity-60 dark:text-white dark:group-hover:text-slate-700"></i>
                                <span class="text-sm leading-normal dark:group-hover:text-slate-700 dark:text-white">Sessions</span>
                            </a>
                        </li>
                        @if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())

                            <li class="pt-2">
                                <a href="#delete"
                                   class="flex items-center px-4 py-2 transition-colors ease-in-out rounded-lg group text-slate-500 hover:bg-gray-200">
                                    <i class="mr-2 ni ni-settings-gear-65 text-slate-700 opacity-60 dark:text-white dark:group-hover:text-slate-700"></i>
                                    <span
                                        class="text-sm leading-normal dark:group-hover:text-slate-700 dark:text-white">Delete Account</span>
                                </a>
                                @endif
                            </li>
                    </ul>
                </div>
            </div>
            <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-9/12">
                <div
                    class="relative flex flex-col flex-auto min-w-0 p-4 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
                    id="profile">
                    <div class="flex flex-wrap items-center justify-center -mx-3">
                        <div class="w-4/12 max-w-full px-3 flex-0 sm:w-auto">
                            <div
                                class="relative inline-flex items-center justify-center text-base text-white transition-all duration-200 ease-in-out w-19 h-19 rounded-xl">
                                <img class="w-full shadow-sm rounded-xl" src="../../../assets/img/team-3.jpg"
                                     alt="bruce"/>
                            </div>
                        </div>
                        <div class="w-8/12 max-w-full px-3 my-auto flex-0 sm:w-auto">
                            <div class="h-full">
                                <h5 class="mb-1 font-bold dark:text-white">Mark Johnson</h5>
                                <p class="mb-0 text-sm font-semibold leading-normal">CEO / Co-Founder</p>
                            </div>
                        </div>
                        <div class="flex max-w-full px-3 mt-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">
                            <label profile-visibility-toggle-label for="profile-visibility"
                                   class="inline-block mb-0 ml-1 text-sm font-normal cursor-pointer select-none text-slate-700 dark:text-white/80">
                                <small>Switch to invisible</small>
                            </label>
                            <div class="min-h-6 ml-2 mb-0.5 block pl-12">
                                <input checked profile-visibility-toggle id="profile-visibility"
                                       class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                       type="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Laravel\Fortify\Features::canUpdateProfileInformation())
                    @include('profile.update-profile-information-form')

                    <x-section-border/>
                @endif

                @if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    @include('profile.update-password-form')

                    <x-section-border/>
                @endif

{{--
                <div
                    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
                    id="accounts">
                    <div class="p-6 rounded-t-2xl">
                        <h5 class="dark:text-white">Accounts</h5>
                        <p class="text-sm leading-normal dark:text-white/60">Here you can setup and manage your
                            integration settings.</p>
                    </div>
                    <div class="flex-auto p-6 pt-0">
                        <div class="flex">
                            <img class="w-12" src="../../../assets/img/small-logos/logo-slack.svg" alt="logo-slack"/>
                            <div class="my-auto ml-4">
                                <div class="h-full">
                                    <h5 class="mb-0 dark:text-white">Slack</h5>
                                    <a class="text-sm leading-normal text-slate-500 dark:text-white"
                                       href="javascript:;">
                                        Show less
                                        <i class="ml-1 text-xs leading-tight fas fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white/80">
                                Enabled</p>
                            <div class="block pl-12 my-auto min-h-6">
                                <input checked
                                       class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                       type="checkbox"/>
                            </div>
                        </div>
                        <div class="pt-4 pl-12 ml-4">
                            <p class="mb-0 text-sm leading-normal dark:text-white/60">
                                You haven't added your Slack yet or you aren't authorized. Please add our Slack Bot to
                                your account by clicking on
                                <a class="dark:text-white" href="javascript:;">here</a>. When you've added the bot, send
                                your verification code that you have received.
                            </p>
                            <div class="p-2 my-6 rounded-xl bg-gray-50 dark:bg-gray-600 sm:flex">
                                <p class="my-auto text-sm font-semibold leading-normal sm:pl-2">Verification Code</p>
                                <input
                                    class="min-h-unset sm:w-15/100 text-xs focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease mt-2 block w-2/5 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none sm:mt-0 sm:ml-auto"
                                    type="text" name="code" value="1172913" data-target="tooltip_trigger"/>
                                <div class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" id="tooltip"
                                     role="tooltip" data-popper-placement="top">
                                    Copy!
                                    <div
                                        class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                        data-popper-arrow></div>
                                </div>
                            </div>
                            <div class="p-2 my-6 rounded-xl bg-gray-50 dark:bg-gray-600 sm:flex">
                                <p class="my-auto text-sm font-semibold leading-normal sm:pl-2">Connected account</p>
                                <h6 class="my-auto ml-auto mr-4 text-sm leading-normal dark:text-white"><a
                                        href="https://demos.creative-tim.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="9bf3fef7f7f4dbf8e9fefaeff2edfeb6eff2f6b5f8f4f6">[email&#160;protected]</a>
                                </h6>
                                <button type="button"
                                        class="inline-block px-8 py-2 m-0 text-xs font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer tracking-tight-rem bg-gradient-to-tl from-red-600 to-orange-600 bg-150 bg-x-25 hover:-translate-y-px active:opacity-85">
                                    Delete
                                </button>
                            </div>
                        </div>
                        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
                        <div class="flex">
                            <img class="w-12" src="../../../assets/img/small-logos/logo-spotify.svg"
                                 alt="logo-spotify"/>
                            <div class="my-auto ml-4">
                                <div class="h-full">
                                    <h5 class="mb-0 dark:text-white">Spotify</h5>
                                    <p class="mb-0 text-sm leading-normal dark:text-white/60">Music</p>
                                </div>
                            </div>
                            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white/80">
                                Enabled</p>
                            <div class="block pl-12 my-auto min-h-6">
                                <input checked
                                       class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                       type="checkbox"/>
                            </div>
                        </div>
                        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
                        <div class="flex">
                            <img class="w-12" src="../../../assets/img/small-logos/logo-atlassian.svg"
                                 alt="logo-atlassian"/>
                            <div class="my-auto ml-4">
                                <div class="h-full">
                                    <h5 class="mb-0 dark:text-white">Atlassian</h5>
                                    <p class="mb-0 text-sm leading-normal dark:text-white/60">Payment vendor</p>
                                </div>
                            </div>
                            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white/80">
                                Enabled</p>
                            <div class="block pl-12 my-auto min-h-6">
                                <input checked
                                       class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                       type="checkbox"/>
                            </div>
                        </div>
                        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
                        <div class="flex">
                            <img class="w-12" src="../../../assets/img/small-logos/logo-asana.svg" alt="logo-asana"/>
                            <div class="my-auto ml-4">
                                <div class="h-full">
                                    <h5 class="mb-0 dark:text-white">Asana</h5>
                                    <p class="mb-0 text-sm leading-normal dark:text-white/60">Organize your team</p>
                                </div>
                            </div>
                            <div class="block pl-12 my-auto ml-auto min-h-6">
                                <input
                                    class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                    type="checkbox"/>
                            </div>
                        </div>
                    </div>
                </div>
--}}
                <div
                    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
                    id="notifications">
                    <div class="p-6 rounded-t-2xl">
                        <h5 class="dark:text-white">Notifications</h5>
                        <p class="text-sm leading-normal dark:text-white/60">Choose how you receive notifications. These
                            notification settings apply to the things you’re watching.</p>
                    </div>
                    <div class="flex-auto p-6 pt-0">
                        <div class="overflow-x-auto">
                            <table class="w-full mb-0 align-top border-gray-200 text-slate-500 dark:border-white/40">
                                <thead class="align-bottom">
                                <tr>
                                    <th colspan="4"
                                        class="px-6 py-3 pl-1 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none tracking-none whitespace-nowrap border-b-gray-200 dark:border-white/40 dark:text-white">
                                        <p class="mb-0 dark:text-white/60">Activity</p>
                                    </th>
                                    <th class="px-6 py-3 font-semibold text-center capitalize align-middle bg-transparent border-b border-solid shadow-none tracking-none whitespace-nowrap border-b-gray-200 dark:border-white/40 dark:text-white">
                                        <p class="mb-0 dark:text-white/60">Email</p>
                                    </th>
                                    <th class="px-6 py-3 font-semibold text-center capitalize align-middle bg-transparent border-b border-solid shadow-none tracking-none whitespace-nowrap border-b-gray-200 dark:border-white/40 dark:text-white">
                                        <p class="mb-0 dark:text-white/60">Push</p>
                                    </th>
                                    <th class="px-6 py-3 font-semibold text-center capitalize align-middle bg-transparent border-b border-solid shadow-none tracking-none whitespace-nowrap border-b-gray-200 dark:border-white/40 dark:text-white">
                                        <p class="mb-0 dark:text-white/60">SMS</p>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="p-2 pl-1 align-top border-b whitespace-nowrap dark:border-white/40 dark:text-white"
                                        colspan="4">
                                        <div class="my-auto">
                                            <span class="block text-sm leading-normal text-slate-700 dark:text-white">Mentions</span>
                                            <span class="text-xs font-normal leading-tight dark:text-white/60">Notify when another user mentions you in a comment</span>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input checked
                                                   class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                   type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input
                                                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input
                                                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                type="checkbox"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 pl-1 align-top border-b whitespace-nowrap dark:border-white/40 dark:text-white"
                                        colspan="4">
                                        <div class="my-auto">
                                            <span class="block text-sm leading-normal text-slate-700 dark:text-white">Comments</span>
                                            <span class="text-xs font-normal leading-tight dark:text-white/60">Notify when another user comments your item.</span>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input checked
                                                   class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                   type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input checked
                                                   class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                   type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input
                                                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                type="checkbox"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 pl-1 align-top border-b whitespace-nowrap dark:border-white/40 dark:text-white"
                                        colspan="4">
                                        <div class="my-auto">
                                            <span class="block text-sm leading-normal text-slate-700 dark:text-white">Follows</span>
                                            <span class="text-xs font-normal leading-tight dark:text-white/60">Notify when another user follows you.</span>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input
                                                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input checked
                                                   class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                   type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input
                                                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                type="checkbox"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 pl-1 align-top border-b-0 whitespace-nowrap dark:border-white/40 dark:text-white"
                                        colspan="4">
                                        <div class="my-auto">
                                            <p class="mb-0 text-sm leading-normal dark:text-white/60">Log in from a new
                                                device</p>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b-0 whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input checked
                                                   class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                   type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b-0 whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input checked
                                                   class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                   type="checkbox"/>
                                        </div>
                                    </td>
                                    <td class="p-2 align-top bg-transparent border-b-0 whitespace-nowrap dark:border-white/40 dark:text-white">
                                        <div class="flex items-center justify-center pl-12 mb-0 min-h-6">
                                            <input checked
                                                   class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                   type="checkbox"/>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if(Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0" dusk="two-factor-authentication-form">
                        @include('profile.two-factor-authentication-form')
                    </div>

                    <x-section-border/>
                @endif
                @include('profile.logout-other-browser-sessions-form')
                @if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border/>

                    <div class="mt-10 sm:mt-0" dusk="delete-user-form">
                        @include('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
