<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Red Blood Cells') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 m-6">
                    Total Red Blood Cells by Type
                </h3>
                <table class="min-w-full w-full mt-4">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('Type') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('Total Quantity') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('Action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-700 dark:divide-gray-600">
                        @foreach ($totalByType as $type => $totalQuantity)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $type }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $totalQuantity }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    @if ($totalQuantity > 0)
                                        <button class="bg-blue-500 text-white py-2 px-4 rounded-md">
                                            {{ __('Seek') }}
                                        </button>
                                    @else
                                        <span class="text-gray-500">{{ __('No available') }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 m-6">
                    {{ __('Red Blood Cells List') }}
                </h3>
                <table class="min-w-full w-full mt-4">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('ID') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('Quantity') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('Type') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('Donor') }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                                {{ __('Created At') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-700 dark:divide-gray-600">
                        @foreach ($redBloodCells as $cell)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $cell->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $cell->quantity }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $cell->type }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $cell->donor->name }} <!-- Assuming 'name' is a column in the User model -->
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-100">
                                    {{ $cell->created_at->format('Y-m-d H:i:s') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
