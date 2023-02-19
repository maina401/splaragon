<x-splade-form
    method="put"
    :action="route('user-profile-information.update')"
    :default="auth()->user()"
    stay
    @success="$splade.emit('profile-information-updated')"
>
    <x-form-section dusk="update-profile-information-form">
        <x-slot:title>
            {{ __('Profile Information') }}
            </x-slot>

            <x-slot:description>
                {{ __('Update your account\'s profile information and email address.') }}
                </x-slot>

                <x-slot:form>
                    <!-- Profile Photo -->
                    @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="col-span-6 sm:col-span-4">
                            <span class="block mb-1 text-gray-700 font-sans">{{ __('Photo') }}</span>

                            <!-- Current Profile Photo -->
                            <div v-show="!form.photo" class="mt-2">
                                <img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}" class="rounded-full h-20 w-20 object-cover">
                            </div>

                            <!-- New Profile Photo Preview -->
                            <div v-show="form.photo" class="mt-2">
                        <span
                            class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                            :style="'background-image: url(\'' + form.$fileAsUrl('photo') + '\');'"
                        />
                            </div>

                            <!-- Profile Photo File Input -->
                            <div class="flex mt-2 space-x-2">
                                <x-splade-file name="photo" :show-filename="false">
                                    {{ __('Select A New Photo') }}
                                </x-splade-file>

                                <x-splade-rehydrate on="profile-information-updated">
                                    @if(auth()->user()->profile_photo_path)
                                        <x-splade-link method="delete" :href="route('current-user-photo.destroy')" class="inline-block py-2 px-3 rounded-md border border-gray-300 shadow-sm bg-white hover:bg-gray-100 relative cursor-pointer font-medium text-gray-700 text-sm focus:outline-none focus:ring focus:ring-opacity-50 focus:border-indigo-300 focus:ring-indigo-200">
                                            {{ __('Remove Photo') }}
                                        </x-splade-link>
                                    @endif
                                </x-splade-rehydrate>
                            </div>
                        </div>
                    @endif

                    <!-- Name -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-splade-input id="name" name="name" :label="__('Name')" autocomplete="name" />
                    </div>

                    <!-- Email -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-splade-input id="email" name="email" type="email" :label="__('Email')" autocomplete="name" />
                        <div id="verify-email" />
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
    id="basic-info">
    <div class="p-6 mb-0 rounded-t-2xl">
        <h5 class="dark:text-white">Basic Info</h5>
    </div>
    <div class="flex-auto p-6 pt-0">
        <div class="flex flex-wrap -mx-3">
            <div class="w-6/12 max-w-full px-3 flex-0">
                <label class="mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="First Name">First Name</label>
                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                    <input type="text" name="First Name" placeholder="Alec"
                           class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                </div>
            </div>
            <div class="w-6/12 max-w-full px-3 flex-0">
                <label class="mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="Last Name">Last Name</label>
                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                    <input type="text" name="Last Name" placeholder="Thompson"
                           class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-6/12 max-w-full px-3 flex-0 sm:w-4/12">
                <label class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="gender">I'm</label>
                <select choice name="choices-gender" id="choices-gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="w-full max-w-full px-3 sm:flex-0 shrink-0 sm:w-8/12">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-5/12 max-w-full px-3 flex-0">
                        <label
                            class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                            for="choices-month">Birth Date</label>
                        <select choice name="choices-month" id="choices-month"></select>
                    </div>
                    <div class="w-4/12 max-w-full px-3 flex-0">
                        <label
                            class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                            for="choices-day">&nbsp;</label>
                        <select choice name="choices-day" id="choices-day"></select>
                    </div>
                    <div class="w-3/12 max-w-full px-3 flex-0">
                        <label
                            class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                            for="choices-year">&nbsp;</label>
                        <select choice name="choices-year" id="choices-year"></select>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-6/12 max-w-full px-3 flex-0">
                <label class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="Email">Email</label>
                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                    <input type="email" name="Email" placeholder="example@email.com"
                           class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                </div>
            </div>
            <div class="w-6/12 max-w-full px-3 flex-0">
                <label class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="Confirmation Email">Confirmation Email</label>
                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                    <input type="email" name="Confirmation Email" placeholder="example@email.com"
                           class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-6/12 max-w-full px-3 flex-0">
                <label class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="Your location">Your location</label>
                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                    <input type="email" name="Your location" placeholder="Sydney, A"
                           class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                </div>
            </div>
            <div class="w-6/12 max-w-full px-3 flex-0">
                <label class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="Phone Number">Phone Number</label>
                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                    <input type="tel" name="Phone Number" placeholder="+40 735 631 620"
                           class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="self-center w-full max-w-full px-3 md:flex-0 shrink-0 md:w-6/12">
                <label class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="Language">Language</label>
                <select choice name="Language" id="choices-language">
                    <option value="English">English</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
                </select>
            </div>
            <div class="w-full max-w-full px-3 md:flex-0 shrink-0 md:w-6/12">
                <label class="mt-6 mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                       for="Skills">Skills</label>
                <input choice name="Skills" id="choices-skills" type="text"
                       value="vuejs, angular, react" placeholder="Enter something"/>
            </div>
        </div>
    </div>
</div>
