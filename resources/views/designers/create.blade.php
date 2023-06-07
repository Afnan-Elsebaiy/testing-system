<x-app-layout>
      <div>
        <center><span><strong>
                    <p class="mt-10 mb-4 text-4xl text-gray-900 dark:text-white">New Test Case</p>
                </strong></span></center>
    </div>
    <form method="POST" action="{{ route('designer.store') }}">
        @csrf
        <div class="p-6 grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="project_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Project</label>
                <select name="project_id" id="project_id" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select an Option</option>
                    @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </select>
                @if ($errors->has('project_id'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="text-danger text-left">{{ $errors->first('project_id') }}</span>
                </div>
                @endif
            </div>
            <div>
                <label for="pre_condition" class=" block mb-2 font-medium text-gray-900 dark:text-gray-300">Pre Condition</label>
                <input type="text" name="pre_condition" id="pre_condition" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
                <label for="module_name" class=" block mb-2  font-medium text-gray-900 dark:text-gray-300">Module Name</label>
                <input type="text" name="module_name" id="module_name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter a module name" required="">
            </div>
            <div>
                <label for="status_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status</label>
                <select name="status_id" id="status_id" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="width: 100%">
                    <option value="">Select an Option</option>
                    @foreach ($statuscase as $testcase)
                    <option value="{{ $testcase->id }}">{{ $testcase->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="dependency_id" class=" block mb-2 font-medium text-gray-900 dark:text-gray-400">Dependencies</label>
                <select id="dependency_id" name="dependency_id" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Choose an option</option>
                    @foreach ($dependency as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="title" class=" block mb-2 font-medium text-gray-900 dark:text-gray-300">Test Case Title</label>
                <input type="text" name="title" id="title" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter a title" required="">
            </div>
            <!-- <div>
                <label for="priority_id" class=" block mb-2 font-medium text-gray-900 dark:text-gray-400">Test Case Priority</label>
                <select id="priority_id" name="priority_id" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose an option</option>
                    <option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
                </select>
            </div> -->
            <div>
                <div>
                    <h3 class="block mb-4 font-medium  text-gray-900 dark:text-gray-300">Test Case Priority</h3>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center mr-4">
                        @foreach ($testpriority as $item)
                        <input id="priority_id" type="radio" value="{{ $item->id }}" name="priority_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="priority_id" class="pr-2 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $item->title }}</label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div>
                <label for="description" class="block mb-2 font-medium text-gray-900 dark:text-gray-300">Test Case Description</label>
                <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
        </div>
        <div class="p-6 flex justify-between">

            <a type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 
        focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-3 text-base  mr-2 mb-2" href="{{route('designer.live')}}">Back</a>


            <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 
        focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-3 text-base mb-2">Submit</button>

        </div>
    </form>

</x-app-layout>