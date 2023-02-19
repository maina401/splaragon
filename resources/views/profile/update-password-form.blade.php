<x-splade-form method="put" :action="route('user-password.update')" stay>
    <x-form-section>
        <x-slot:title>
            {{ __('Update Password') }}
        </x-slot>

        <x-slot:description>
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </x-slot>

        <x-slot:form>
            <div class="col-span-6 sm:col-span-4">
                <x-splade-input id="current_password" type="password" name="current_password" :label="__('Current Password')" autocomplete="current-password" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-splade-input id="password" type="password" name="password" :label="__('New Password')" autocomplete="new-password" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')" autocomplete="new-password" />
            </div>
        </x-slot>

        <x-slot:actions>
            <x-action-message v-if="form.recentlySuccessful" class="mr-3">
                {{ __('Saved.') }}
            </x-action-message>

            <x-splade-submit :label="__('Save')" />
        </x-slot>
    </x-form-section>
</x-splade-form>
<div
    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
    id="password">
    <div class="p-6 mb-0 rounded-t-2xl">
        <h5 class="dark:text-white">Change Password</h5>
    </div>
    <div class="flex-auto p-6 pt-0">
        <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
               for="Current password">Current password</label>
        <div class="mb-4">
            <input type="password" name="Current password" placeholder="Current password"
                   class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
        </div>
        <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
               for="New password">New password</label>
        <div class="mb-4">
            <input type="password" name="New password" placeholder="New password"
                   class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
        </div>
        <label class="inline-block mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
               for="Confirm new password">Confirm new password</label>
        <div class="mb-4">
            <input type="password" name="Confirm new password" placeholder="Confirm password"
                   class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
        </div>
        <h5 class="mt-12 dark:text-white">Password requirements</h5>
        <p class="mb-2 text-slate-500 dark:text-white/60">Please follow this guide for a strong
            password:</p>
        <ul class="float-left pl-6 mb-0 list-disc text-slate-500">
            <li>
                <span class="text-sm leading-normal">One special characters</span>
            </li>
            <li>
                <span class="text-sm leading-normal">Min 6 characters</span>
            </li>
            <li>
                <span class="text-sm leading-normal">One number (2 are recommended)</span>
            </li>
            <li>
                <span class="text-sm leading-normal">Change it often</span>
            </li>
        </ul>
        <button href="javascript:;"
                class="inline-block float-right px-8 py-2 mt-16 mb-0 text-xs font-bold leading-normal text-right text-white align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 bg-gradient-to-tl from-zinc-800 to-zinc-700 tracking-tight-rem bg-150 bg-x-25">
            Update password
        </button>
    </div>
</div>
