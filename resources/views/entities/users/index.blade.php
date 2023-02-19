@seoTitle(__('Dashboard'))

<x-app-layout>
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot:header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-splade-table :for="$users">
                    <x-splade-cell :as="$user">
                        <Link href="{{ route('entities.users.show', $user) }}">
                            {{ $user->name }}
                        </Link>
                    </x-splade-cell>
                </x-splade-table>
            </div>
        </div>
    </div>
</x-app-layout>
