<x-app-layout>


<button type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4
focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
<a href="{{route('designer.index')}}">Back</a></button> 


<form method="POST" action="{{ route('designer.store') }}">
    @csrf

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="project_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project ID</label>
            <input type="text" name= "project_id" id="project_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Enter a project id" required="">
        </div>
        <div>
            <label for="pre_condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pre Condition</label>
            <input type="text" name= "pre_condition" id="pre_condition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
             required="">
        </div>

        <div>
            <label for="module_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Module Name</label>
            <input type="text" name= "module_name" id="module_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Enter a module name" required="">
        </div>

        <div>
        <label for="dependency_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Dependencies</label>
<select id="dependency_id" name= "dependency_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose an option</option>
  <option value="1">Option 1</option>
  <option value="2">Option 2</option>
  <option value="3">Option 3</option>
</select>
        </div>

        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Test Case Title</label>
            <input type="text" name= "title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Enter a Title" required="">
        </div>

        <div>
        <label for="priority_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Test Case Priority</label>
<select id="priority_id" name= "priority_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose an option</option>
  <option value="1">High</option>
  <option value="2">Medium</option>
  <option value="3">Low</option>
</select>
        </div>
        
        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Test Case Description</label>
            <input type="text" name= "description" id="description" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
             required="">
        </div>
        
        
        
</div>

<button type="submit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 
hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 
text-center mr-2 mb-2">Submit</button>
</form>

</x-app-layout>