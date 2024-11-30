<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1 class="text-2xl font-bold mb-4">Users</h1>

                   <!-- Card Grid -->
                   <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                       @foreach($users as $user)
                           <!-- Card -->
                           <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                               <h2 class="text-lg font-semibold">{{ $user->name }}</h2>
                               <p class="text-gray-600">{{ $user->email }}</p>
                           </div>
                       @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
