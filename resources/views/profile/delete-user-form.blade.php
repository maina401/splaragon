<x-action-section>
    <x-slot:title>
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot:description>
        {{ __('Permanently delete your account.') }}
    </x-slot>

    <x-slot:content>
        <div class="max-w-xl text-sm text-gray-600">
        </div>

        <x-splade-form
            class="mt-5"
            method="delete"
            :action="route('current-user.destroy')"
            :confirm-danger="__('Delete Account')"
            :confirm-text="__('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')"
            :confirm-button="__('Delete Account')"
            require-password
        >
            <x-splade-submit danger :label="__('Delete Account')" />
        </x-splade-form>
    </x-slot>
</x-action-section>
<div
    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
    id="delete">
    <div class="p-6 rounded-t-2xl">
        <h5 class="dark:text-white">{{ __('Permanently delete your account.') }}</h5>
        <p class="mb-0 text-sm leading-normal dark:text-white/60">            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </div>
    <div class="flex-auto p-6 pt-0 sm:flex">
        <div class="flex items-center mb-6 sm:mb-0">
            <div>
                <div class="block pl-12 mb-0 min-h-6">
                    <input
                        class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                        type="checkbox"/>
                </div>
            </div>
            <div class="ml-2">
                <span class="block text-sm font-semibold leading-normal text-slate-700 dark:text-white">Confirm</span>
                <span class="block text-xs leading-tight">I want to delete my account.</span>
            </div>
        </div>

        <button type="button"
                class="inline-block px-5 py-2.5 mb-0 ml-auto text-sm font-bold leading-normal text-center align-middle transition-all ease-in bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 tracking-tight-rem bg-150 bg-x-25 hover:-translate-y-px active:shadow-xs hover:active:scale-102 border-slate-400 text-slate-400 hover:text-slate-400 hover:opacity-75 hover:shadow-none active:scale-100 active:border-slate-400 active:bg-slate-400 active:text-white hover:active:border-slate-400 hover:active:bg-transparent hover:active:text-slate-400 hover:active:opacity-75 hover:active:shadow-none">
            Deactivate
        </button>
        <form method="POST" action="{{ route('current-user.destroy') }}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="confirm('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')?this.parentElement.submit():void(0)"
                    class="inline-block px-5 py-2.5 m-0 ml-2 text-sm font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer tracking-tight-rem bg-gradient-to-tl from-red-600 to-orange-600 bg-150 bg-x-25 hover:-translate-y-px active:opacity-85">
                Delete account
            </button>
        </form>
    </div>
</div>
