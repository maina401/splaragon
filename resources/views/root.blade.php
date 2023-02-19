

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro-tailwind/pages/ecommerce/overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2023 19:34:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <title>Argon Dashboard 2 Pro Tailwind by Creative Tim</title>
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro-tailwind" />
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, tailwind dashboard, tailwind, tailwindcss, tailwind css, css3 dashboard, tailwind admin, Argon Dashboard 2 Tailwind, frontend, responsive tailwind dashboard, premium dashboard, premium admin dashboard, premium tailwind admin dashboard">
    <meta name="description" content="Download Argon Tailwind CSS, a premium Tailwind CSS Admin Template developed by Creative Tim. Over 70 components, see the live demo on our site and join over 1,800,000 creatives!">
    @spladeHead

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="/kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <link href="/assets/css/argon-dashboard-tailwind.mine209.css?v=1.0.0" rel="stylesheet" />

</head>
<body class="m-0 font-sans text-base antialiased font-normal text-left leading-default dark:bg-slate-900 bg-gray-50 text-slate-500 dark:text-white/80">
@auth()
    @if(auth()->user()->hasVerifiedEmail())
        <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

        <x-side-nav/>
    @endif
@endauth

<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    @splade
</main>
<div fixed-plugin>
    <a fixed-plugin-button class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-slate-700">
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>

    <div fixed-plugin-card class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 duration-200">
        <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
            <div class="float-left">
                <h5 class="mt-4 mb-0 dark:text-white">Configurator</h5>
                <p class="dark:text-white dark:opacity-80">See our dashboard options.</p>
            </div>
            <div class="float-right mt-6">
                <button fixed-plugin-close-button class="inline-block p-0 mb-4 text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:-translate-y-px tracking-tight-rem bg-150 bg-x-25 active:opacity-85 dark:text-white text-slate-700">
                    <i class="fa fa-close"></i>
                </button>
            </div>

        </div>
        <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
        <div class="flex-auto p-6 pt-0 overflow-auto sm:pt-4">

            <div>
                <h6 class="mb-0 dark:text-white">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)">
                <div class="my-2 text-left" sidenav-colors>
                    <span class="py-2.2-em text-xs px-3.6-em rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-500 to-violet-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" active-color data-color="blue" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-xs px-3.6-em rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="gray" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-xs px-3.6-em rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-700 to-cyan-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="cyan" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-xs px-3.6-em rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-emerald-500 to-teal-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="emerald" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-xs px-3.6-em rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-orange-500 to-yellow-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="orange" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-xs px-3.6-em rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-red-600 to-orange-600 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="red" onclick="sidebarColor(this)"></span>
                </div>
            </a>

            <div class="mt-4">
                <h6 class="mb-0 dark:text-white">Sidenav Type</h6>
                <p class="text-sm leading-normal dark:text-white dark:opacity-80">Choose between 2 different sidenav types.</p>
            </div>
            <div class="flex">
                <button transparent-style-btn class="inline-block w-full px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500" data-class="bg-transparent" active-style>White</button>
                <button white-style-btn class="inline-block w-full px-4 py-2.5 mb-2 ml-2 font-bold leading-normal text-center text-blue-500 capitalize align-middle transition-all bg-transparent border border-blue-500 border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-none hover:border-blue-500" data-class="bg-white">Dark</button>
            </div>
            <p class="block mt-2 text-sm leading-normal dark:text-white dark:opacity-80 xl:hidden">You can change the sidenav type just on desktop view.</p>

            <div class="flex my-4">
                <h6 class="mb-0 dark:text-white">Navbar Fixed</h6>
                <div class="block pl-0 ml-auto min-h-6">
                    <input navbar-fixed-toggle class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" />
                </div>
            </div>
            <hr class="h-px mt-4 mb-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="flex my-6">
                <h6 class="mb-0 dark:text-white">Sidenav Mini</h6>
                <div class="block pl-0 ml-auto min-h-6">
                    <input sidenav-mini-toggle class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" />
                </div>
            </div>
            <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="flex mt-2 mb-12">
                <h6 class="mb-0 dark:text-white">Light / Dark</h6>
                <div class="block pl-0 ml-auto min-h-6">
                    <input dark-toggle class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right" type="checkbox" />
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<script src="/assets/js/plugins/chartjs.min.js"></script>
<script src="/assets/js/plugins/choices.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>

<script src="/assets/js/argon-dashboard-pro-tailwind.mine209.js?v=1.0.0"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>
</html>
