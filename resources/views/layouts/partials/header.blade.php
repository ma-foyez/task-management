<div class="position-relative">
    <div class="text-center pt-3 pb-2">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Check"
            width="60">
        <h2 class="my-4">Task List</h2>
    </div>
    <a href="{{ route('tasks.create') }}" class="btn btn-info btn-sm position-absolute top-0 end-0">Add New</a>
    <a href="{{ route('tasks.index') }}" class="btn btn-info btn-sm position-absolute top-0 left-0" title="Task List">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
    </a>
</div>
