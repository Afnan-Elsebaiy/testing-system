<x-app-layout>
    <div>
        <center><span><strong>Designer Update</strong></span></center>
    </div>
    <div class="p-4 w-full bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form method="POST" action="{{ route('history.update', $data->id) }}">
            @csrf
            @method('PUT')
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <input type="hidden" value="{{ $data->id }}">
                <div>
                    <label for="project_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project Name</label>
                    <input type="text" id="project_id" name="project_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Project" value="{{ $data->project_id }}">
                </div>
                <div>
                    <label for="module_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Module Name</label>
                    <input type="text" id="module_name" name="module_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Module" value="{{ $data->module_name }}">
                </div>
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Test Case Title</label>
                    <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Test Case Title" value="{{ $data->title }}">
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Test Case Description</label>
                    <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Test Case description" value="{{ $data->description }}">
                </div>
                <div>
                    <label for="priority_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Test Case Priority</label>
                    <select id="priority_id" name="priority_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="{{ $data->priority_id }}">{{ $data->priority ? $data->priority->title : '' }}</option>
                        @foreach($priorities as $data)
                        <option value="{{$data->id}}">{{ $data->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="dependency_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Dependencies</label>
                    <select id="dependency_id" name="dependency_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="{{ $data->dependency_id }}">{{ $data->dependency ? $data->dependency->title : '' }}</option>
                        @foreach($parents as $parent)
                        <option value="{{$parent->id}}">{{ $parent->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="pre_condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pre-Conditions</label>
                    <input type="text" id="pre_condition" name="pre_condition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $data->pre_condition }}">
                </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </form>
    </div>
</x-app-layout>