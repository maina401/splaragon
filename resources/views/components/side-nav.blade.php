<aside mini="false"
       {{ $attributes->class(['fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto transition-all duration-200 ease-in-out -translate-x-full bg-white border-0 shadow-none xl:ml-6 dark:bg-slate-850 z-990 max-w-64 rounded-2xl xl:translate-x-0']) }} id="sidenav-main">

    <div class="h-20">

        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden"
           aria-hidden="true" sidenav-close-btn></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white"
           href="../dashboards/default-2.html" target="_blank">
            <img src="/assets/img/logo-ct-dark.png"
                 class="inline-block h-full max-w-full transition-all duration-200 ease-in-out max-h-8 dark:hidden"
                 alt="main_logo"/>
            <img src="/assets/img/logo-ct.png"
                 class="hidden h-full max-w-full transition-all duration-200 ease-in-out max-h-8 dark:inline-block"
                 alt="main_logo"/>
            <span class="ml-1 font-semibold transition-all duration-200 ease-in-out">Argon Dashboard 2 PRO</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
    <div class="items-center block w-full h-auto grow basis-full" id="sidenav-collapse-main">

        <ul class="flex flex-col pl-0 mb-0 list-none">

            <li class="mt-0.5 w-full">

                <a collapse_trigger="primary" href="javascript:;"
                   class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                   aria-expanded="false">

                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">

                        <i class="text-sm leading-normal text-blue-500 ni ni-shop"></i>
                    </div>

                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboards</span>
                </a>
                <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                     id="dashboardsExamples">

                    <ul class="flex flex-wrap mb-0 ml-6 list-none transition-all duration-200 ease-in-out">

                        <li class="w-full">

                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../dashboards/landing.html">

                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> L </span>

                                <span class="transition-all duration-100 pointer-events-none ease"> Landing </span>
                            </a>
                        </li>
                        <li class="w-full">

                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../dashboards/default-2.html">

                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> D </span>

                                <span class="transition-all duration-100 pointer-events-none ease"> Default </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../dashboards/automotive.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> A </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Automotive </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../dashboards/smart-home.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> S </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Smart Home </span>
                            </a>
                        </li>
                        <li class="w-full">

                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> V </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Virtual Reality <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="vrExamples">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">

                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../dashboards/vr/vr-default.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> V </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> VR Default </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../dashboards/vr/vr-info.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> V </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> VR Info </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../dashboards/crm.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> CRM </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60 dark:text-white">PAGES</h6>
            </li>
            <li class="mt-0.5 w-full">
                <a collapse_trigger="primary" href="javascript:;"
                   class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                   aria-expanded="false">
                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">
                        <i class="text-sm leading-normal text-orange-500 ni ni-ungroup"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Pages</span>
                </a>
                <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0" id="pagesExamples">
                    <ul class="flex flex-wrap mb-0 ml-6 list-none transition-all duration-200 ease-in-out">
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Profile <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="profileExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/profile/overview.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Profile Overview </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/profile/teams.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> T </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Teams </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/profile/projects.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> A </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> All Projects </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> U </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Users <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="usersExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/users/reports.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> R </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Reports </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/users/new-user.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> N </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> New User </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> A </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Account <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="accountExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/account/settings.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> S </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Settings </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/account/billing.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Billing </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/account/invoice.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> I </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Invoice </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/account/security.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> S </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Security </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Projects <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="projectsExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/projects/general.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> G </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> General </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/projects/timeline.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> T </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Timeline </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../pages/projects/new-project.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> N </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> New Project </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../pages/pricing-page.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Pricing Page </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../pages/chat.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> M </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Chat </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../pages/rtl-page.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> R </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> RTL </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../pages/widgets.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> W </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Widgets </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../pages/charts.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Charts </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../pages/sweet-alerts.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> S </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Sweet Alerts </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../pages/notifications.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> N </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Notifications </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="mt-0.5 w-full">
                <a collapse_trigger="primary" href="javascript:;"
                   class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                   aria-expanded="false">
                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">
                        <i class="text-sm leading-normal ni ni-ui-04 text-cyan-500"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Applications</span>
                </a>
                <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                     id="applicationsExamples">
                    <ul class="flex flex-wrap mb-0 ml-6 list-none transition-all duration-200 ease-in-out">
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../applications/kanban.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> K </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Kanban </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../applications/wizard.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> W </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Wizard </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../applications/datatables.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> D </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> DataTables </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../applications/calendar.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Calendar </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="../applications/analytics.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> A </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Analytics </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="mt-0.5 w-full">
                <a active_primary collapse_trigger="primary" href="javascript:;"
                   class="after:ease-in-out after:font-awesome-5-free ease-in-out text-sm leading-default py-2.7 my-0 mx-2 flex items-center whitespace-nowrap rounded-lg bg-blue-500/30 px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:rotate-180 after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:after:text-white dark:opacity-80"
                   aria-controls="applicationsExamples" role="button" aria-expanded="true">
                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">
                        <i class="text-sm leading-normal ni ni-archive-2 text-emerald-500"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease dark:text-white text-slate-700">Ecommerce</span>
                </a>
                <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out" id="ecommerceExamples">
                    <ul class="flex flex-wrap mb-0 ml-6 list-none transition-all duration-200 ease-in-out">
                        <li class="w-full">
                            <a active_page active_secondary
                               class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap rounded-lg bg-transparent pr-4 font-semibold text-slate-800 shadow-none transition-colors  dark:text-white dark:opacity-100 "
                               href="overview.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> O </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Overview </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Products <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="productsExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="products/new-product.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> N </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> New Product </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="products/edit-product.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> E </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Edit Product </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="products/product-page.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Product Page </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="products/products-list.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Products List </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> O </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Orders <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="ordersExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="orders/list.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> O </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Order List </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="orders/details.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> O </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Order Details </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="referral.html">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> R </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Referral </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mt-0.5 w-full">
                <a collapse_trigger="primary" href="javascript:;"
                   class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                   aria-controls="authExamples" role="button" aria-expanded="false">
                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">
                        <i class="text-sm leading-normal text-red-600 ni ni-single-copy-04"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Authentication</span>
                </a>
                <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0" id="authExamples">
                    <ul class="flex flex-wrap mb-0 ml-6 list-none transition-all duration-200 ease-in-out">
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> S </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Sign In <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="signinExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/signin/basic.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/signin/cover.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/signin/illustration.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> I </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> S </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Sign Up <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="signupExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/signup/basic.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/signup/cover.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/signup/illustration.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> I </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> R </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Reset Password <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="resetExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/reset/basic.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/reset/cover.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/reset/illustration.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> I </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> L </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Lock <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="lockExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/lock/basic.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/lock/cover.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/lock/illustration.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> I </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> 2 </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> 2-Step Verification <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="StepExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/verification/basic.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Basic </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/verification/cover.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Cover </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/verification/illustration.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> I </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Illustration </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> E </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Error <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="errorExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/error/404.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> E </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Error 404 </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="../authentication/error/500.html">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> E </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Error 500 </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mt-0.5 w-full">
                <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
                <h6 class="pl-6 mb-2 ml-2 text-xs font-bold leading-tight uppercase opacity-60 dark:text-white">
                    DOCS</h6>
            </li>
            <li class="mt-0.5 w-full">
                <a collapse_trigger="primary" href="javascript:;"
                   class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                   aria-controls="basicExamples" role="button" aria-expanded="false">
                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">
                        <i class="text-sm leading-normal ni ni-spaceship text-slate-700/80"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Basic</span>
                </a>
                <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0" id="basicExamples">
                    <ul class="flex flex-wrap mb-0 ml-6 list-none transition-all duration-200 ease-in-out">
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> G </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Getting Started <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="gettingStartedExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/"
                                           target="_blank">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> Q </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Quick Start </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="https://www.creative-tim.com/learning-lab/tailwind/html/license/argon-dashboard/"
                                           target="_blank">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> L </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> License </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="https://www.creative-tim.com/learning-lab/tailwind/html/what-is-tailwind-css/argon-dashboard/"
                                           target="_blank">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Contents </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="w-full">
                            <a collapse_trigger="secondary"
                               class="after:ease-in-out after:font-awesome-5-free ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-60  dark:after:text-white/50 dark:after:text-white"
                               aria-expanded="false" href="javascript:;">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> F </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Foundation <b
                                            class="caret"></b></span>
                            </a>
                            <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                                 id="foundationExample">
                                <ul class="flex flex-col flex-wrap pl-0 mb-0 list-none transition-all duration-200 ease-in-out">
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="https://www.creative-tim.com/learning-lab/tailwind/html/colors/argon-dashboard/"
                                           target="_blank">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Colors </span>
                                        </a>
                                    </li>
                                    <li class="w-full">
                                        <a class="ease-in-out py-2.7 ml-5.4 pl-4 text-3.2 relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors dark:text-white dark:opacity-60"
                                           href="https://www.creative-tim.com/learning-lab/tailwind/html/typography/argon-dashboard/"
                                           target="_blank">
                                            <span class="w-0 text-xs leading-tight text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> T </span>
                                            <span class="transition-all duration-100 pointer-events-none ease"> Typography </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mt-0.5 w-full">
                <a collapse_trigger="primary" href="javascript:;"
                   class="ease-in-out text-sm leading-default py-2.7 active after:ease-in-out after:font-awesome-5-free my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors after:ml-auto after:inline-block after:font-bold after:text-slate-800/50 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80 dark:after:text-white/50 dark:after:text-white"
                   aria-controls="componentsExamples" role="button" aria-expanded="false">
                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">
                        <i class="text-sm leading-normal ni ni-app text-slate-700/80"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Components</span>
                </a>
                <div class="h-auto overflow-hidden transition-all duration-200 ease-in-out max-h-0"
                     id="componentsExamples">
                    <ul class="flex flex-wrap mb-0 ml-6 list-none transition-all duration-200 ease-in-out">
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/alert/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> A </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Alerts </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/chip/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Badge </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/button/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> B </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Buttons </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/card/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Card </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/collapse/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> C </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Collapse </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/dropdown/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> D </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Dropdowns </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/input/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> F </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Forms </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/modal/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> M </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Modal </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/tabs/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> N </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Navs </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/navbar/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> N </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Navbar </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/progress/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> P </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Progress </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/table/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> T </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Tables </span>
                            </a>
                        </li>
                        <li class="w-full">
                            <a class="ease-in-out py-2.7 ml-5.4 pl-4 leading-default text-sm relative my-0 mr-2 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors  dark:text-white dark:opacity-60 "
                               href="https://www.creative-tim.com/learning-lab/tailwind/html/tooltip/argon-dashboard/"
                               target="_blank">
                                <span class="w-0 text-center transition-all duration-200 ease-in-out opacity-0 pointer-events-none"> T </span>
                                <span class="transition-all duration-100 pointer-events-none ease"> Tooltips </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="mt-0.5 w-full">
                <a class="ease-in-out text-sm leading-default py-2.7 my-0 mx-2 flex items-center whitespace-nowrap px-4 font-medium text-slate-500 shadow-none transition-colors dark:text-white dark:opacity-80"
                   href="https://github.com/creativetimofficial/ct-argon-dashboard-pro-tailwind/blob/main/CHANGELOG.md"
                   target="_blank">
                    <div class="stroke-none flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current p-2.5 text-center text-black">
                        <i class="text-sm leading-normal ni ni-align-left-2 text-slate-700/80"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Changelog</span>
                </a>
            </li>
        </ul>
    </div>
    <div sidenav-card class="mx-4 my-4">

        <p class="invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400"></p>
        <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border"
             sidenav-card>
            <img class="w-3/5 mx-auto" src="/assets/img/illustrations/icon-documentation.svg"
                 alt="sidebar illustrations"/>
            <div class="flex-auto w-full p-4 pt-0 text-center">
                <div class="transition-all duration-200 ease-nav-brand">
                    <h6 class="mb-0 dark:text-white text-slate-700">Need help?</h6>
                    <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Please check our
                        docs</p>
                </div>
            </div>
        </div>
        <a href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/" target="_blank"
           class="inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px">Documentation</a>


    </div>
</aside>
