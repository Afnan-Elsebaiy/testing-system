<div class="container mx-auto">
    <div class="shadow p-3 mb-5 bg-white rounded mt-8">
        <div class="header">
            <div class="container-fluid">
                <div class="header-body text-xl">
                    <center>
                        <h3><strong>Designer</strong></h3>
                    </center>
                    <a class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{route('test_case.design')}}">New Test Case <i class="fas fa-plus"></i></a>
                    <!-- <a type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="{{route('general.testcase')}}">My Test Case </a> -->
                </div>
            </div>
        </div>

        <div class="mt-5 py-3 px-5">
            {{-- Filtering Div --}}
            <div class="flex justify-between">
                <select class="block text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="result_no">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search" wire:model="search" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                </div>
            </div>
            <div class="card">
                <input type="hidden" wire:model.lazy="statuses">

                <div class="overflow-x-auto relative mt-4">                
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.id')" role="button">{{ __('ID') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.title')" role="button">{{ __('Title') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.project_id')" role="button">{{ __('Project') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.module_name')" role="button">{{ __('Module') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.description')" role="button">{{ __('Description') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.priority_id')" role="button">{{ __('Priority') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.status_id')" role="button">{{ __('Test Case Status') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.pre_condition')" role="button">{{ __('Pre Condition') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.designer_id')" role="button">{{ __('Reviewed By') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.created_at')" role="button">{{ __('Reviewed Date') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.executor_id')" role="button">{{ __('Executor By') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.executed_at')" role="button">{{ __('Executed Date') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <a wire:click.prevent="sortBy('test_cases.post_condition')" role="button">{{ __('Post Condition') }} <i class="fa-sharp fa-solid fa-sort"></i></a>
                            </th>

                            <th scope="col" class="text-center" colspan="2">
                                {{ __('Action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testcases as $testcase)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$testcase->id}}
                            </th>
                            <td class="py-4 px-2">
                                {{$testcase->title}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->project_id}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->module_name}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->description}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->priority ? $testcase->priority->title : ''}}
                            </td>
                            <td class="py-4 px-2">
                                {{ $testcase->status ? $testcase->status->title :''}}
                            </td>
                            <td>
                                {{$testcase->pre_condition}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->reviewer ? $testcase->reviewer->name : ''}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->reviewed_at}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->executor ? $testcase->executor->name : ''}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->executed_at}}
                            </td>
                            <td class="py-4 px-2">
                                {{$testcase->post_condition}}
                            </td>
                            <td class="">
                                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" wire:click="edit({{$testcase->id}})">
                                   Redesign
                                </a>
                            </td>
                            <td>
                            <button class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-800 dark:focus:ring-green-800" type="button" data-modal-toggle="commentModal" wire:click.prevent="doneRedesigne({{$testcase->id}})">
                                {{__('Submit For Reviewal')}}
                            </button>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div class="d-flex space-y-7">
                {{ $testcases->links() }}
            </div>
        </div>
    </div>
</div>