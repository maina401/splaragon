<x-action-section>
    <x-slot:title>
        {{ __('Two Factor Authentication') }}
    </x-slot>

    <x-slot:description>
        {{ __('Add additional security to your account using two factor authentication.') }}
    </x-slot>

    @php
        $enabled = !empty(auth()->user()->two_factor_secret);
        $showingQrCode = $enabled && !auth()->user()->two_factor_confirmed_at;
        $showingConfirmation = $showingQrCode && $confirmsTwoFactorAuthentication;
    @endphp

    <x-slot:content>
        <h3 class="text-lg font-medium text-gray-900">
            @if ($enabled)
                @if ($showingConfirmation)
                    {{ __('Finish enabling two factor authentication.') }}
                @else
                    {{ __('You have enabled two factor authentication.') }}
                @endif
            @else
                {{ __('You have not enabled two factor authentication.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>
        </div>

        <x-splade-data :default="['showingRecoveryCodes' => session('status') === 'recovery-codes-generated']">
            @if ($enabled)
                @if ($showingQrCode)
                    <div class="mt-4 max-w-xl text-sm text-gray-600">
                        <p class="font-semibold">
                            @if ($showingConfirmation)
                                {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.') }}
                            @else
                                {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.') }}
                            @endif
                        </p>
                    </div>

                    <div class="mt-4">
                        {!! auth()->user()->twoFactorQrCodeSvg() !!}
                    </div>

                    <div class="mt-4 max-w-xl text-sm text-gray-600">
                        <p class="font-semibold">
                            {{ __('Setup Key') }}: {{ decrypt(auth()->user()->two_factor_secret) }}
                        </p>
                    </div>

                    @if ($showingConfirmation)
                        <x-splade-form action="/user/confirmed-two-factor-authentication" class="mt-4 w-1/2 space-y-4" preserve-scroll :scroll-on-error="false">
                            <x-splade-input name="code" label="Code" inputmode="numeric" autofocus autocomplete="one-time-code" />

                            <x-splade-teleport to="#confirm-two-factor-authentication">
                                {{-- This submit button requires a click handler because of the teleport. --}}
                                <x-splade-submit @click="form.submit" :label="__('Confirm')" />
                            </x-splade-teleport>
                        </x-splade-form>
                    @endif
                @endif

                <div v-show="data.showingRecoveryCodes">
                    <div class="mt-4 max-w-xl text-sm text-gray-600">
                        <p class="font-semibold">
                            {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                        </p>
                    </div>

                    <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                            <div>{{ $code }}</div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="mt-5">
                @if (!$enabled)
                    <x-splade-form action="/user/two-factor-authentication" confirm require-password preserve-scroll>
                        <x-splade-submit :label="__('Enable')" />
                    </x-splade-form>
                @else
                    <div class="flex space-x-3">
                        @if ($showingConfirmation)
                            <div id="confirm-two-factor-authentication" />
                        @else
                            <x-splade-form v-if="!data.showingRecoveryCodes" action="#" confirm require-password @success="() => data.showingRecoveryCodes = true">
                                <x-splade-submit secondary :label="__('Show Recovery Codes')" />
                            </x-splade-form>

                            <x-splade-form v-if="data.showingRecoveryCodes" action="/user/two-factor-recovery-codes" confirm require-password preserve-scroll>
                                <x-splade-submit secondary :label="__('Regenerate Recovery Codes')" />
                            </x-splade-form>
                        @endif

                        @if ($showingConfirmation)
                            <x-splade-form method="delete" action="/user/two-factor-authentication" confirm require-password-once preserve-scroll>
                                <x-splade-submit secondary :label="__('Cancel')" />
                            </x-splade-form>
                        @else
                            <x-splade-form method="delete" action="/user/two-factor-authentication" confirm-danger require-password preserve-scroll>
                                <x-splade-submit danger :label="__('Disable')" />
                            </x-splade-form>
                        @endif
                    </div>
                @endif
            </div>
        </x-splade-data>
    </x-slot>
</x-action-section>
<div
    class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border"
    id="2FA">
    <div class="flex p-6 rounded-t-2xl">
        <h5 class="mb-0 dark:text-white">Two-factor authentication</h5>
        <span
            class="py-1.6 px-2.6 text-xs rounded-1.8 ml-auto inline-block whitespace-nowrap bg-emerald-200 text-center align-baseline font-bold uppercase leading-none text-emerald-600">Enabled</span>
    </div>
    <div class="flex-auto p-6">
        <div class="flex">
            <p class="my-auto dark:text-white/60">Security keys</p>
            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white dark:opacity-80">
                No Security Keys</p>
            <button
                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center align-middle transition-all ease-in bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 tracking-tight-rem bg-150 bg-x-25 hover:-translate-y-px active:shadow-xs border-slate-700 text-slate-700 hover:text-slate-700 hover:opacity-75 hover:shadow-none active:scale-100 active:border-slate-700 active:bg-slate-700 active:text-white hover:active:border-slate-700 hover:active:text-slate-700 hover:active:opacity-75">
                Add
            </button>
        </div>
        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
        <div class="flex">
            <p class="my-auto dark:text-white/60">SMS number</p>
            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white dark:opacity-80">
                +4012374423</p>
            <button
                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center align-middle transition-all ease-in bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 tracking-tight-rem bg-150 bg-x-25 hover:-translate-y-px active:shadow-xs border-slate-700 text-slate-700 hover:text-slate-700 hover:opacity-75 hover:shadow-none active:scale-100 active:border-slate-700 active:bg-slate-700 active:text-white hover:active:border-slate-700 hover:active:text-slate-700 hover:active:opacity-75">
                Edit
            </button>
        </div>
        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
        <div class="flex">
            <p class="my-auto dark:text-white/60">Authenticator app</p>
            <p class="my-auto ml-auto mr-4 text-sm leading-normal text-slate-400 dark:text-white dark:opacity-80">
                Not Configured</p>
            <button
                class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center align-middle transition-all ease-in bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 tracking-tight-rem bg-150 bg-x-25 hover:-translate-y-px active:shadow-xs border-slate-700 text-slate-700 hover:text-slate-700 hover:opacity-75 hover:shadow-none active:scale-100 active:border-slate-700 active:bg-slate-700 active:text-white hover:active:border-slate-700 hover:active:text-slate-700 hover:active:opacity-75">
                Set up
            </button>
        </div>
    </div>
</div>
