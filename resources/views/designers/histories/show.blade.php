<x-app-layout>
    <div>
        <center><span><strong>Designer</strong></span></center>
    </div>
    <div class=" p-4 w-full  bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="row g-4">
        <div class="col-md-3">
        <label for="project_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Project</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->project_id}}</p>
        </div>
        <div class="col-md-3">
        <label for="module_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Module</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->module_name}}</p>
        </div>
        <div class="col-md-3">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Title</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->title}}</p>
        </div>
        <div class="col-md-3">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->description}}</p>
        </div>
        <div class="col-md-3">
        <label for="priority_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Priority</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->priority_id}}</p>
        </div>
        </div>
       <div class="row g-3">
        <div class="col-md-4">
       <label for="dependency_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Dependencies</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->dependency_id}}</p>
        </div>
        <div class="col-md-4">
        <label for="pre_condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pre-Conditions</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->pre_condition}}</p>
        </div>
        <div class="col-md-4">
        <label for="status_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->status_id}}</p>
        </div>
        <div class="col-md-4">
        <label for="pre_condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Designer name</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->designer_id}}</p>
        </div>
        <div class="col-md-4">
        <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Designed By</label>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400">{{$testcase->created_at}}</p>
       </div>
       </div>
        
    </div>
</x-app-layout>