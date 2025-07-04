@extends('Admin.base')

@section('base')

<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h5 class="card-title mb-0 text-center">Edit Task</h5>
    </div>
    <div class="card-body">
        <form class="row g-3" action="{{ url('/taskupdate/'.$task->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label class="form-label text-primary">Project Name</label>
                <select name="name" class="form-select">
                    <option value="">Select project name</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->projectname }}" {{ $task->name == $project->projectname ? 'selected' : '' }}>{{ $project->projectname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label text-primary">Task Name</label>
                <input type="text" class="form-control" placeholder="Enter your task name" name="taskname" value="{{ $task->taskname }}">
            </div>
            <div class="col-md-6">
                <label class="form-label text-primary">Description</label>
                <textarea class="form-control" placeholder="Enter your description" name="taskdescription" rows="3">{{ $task->taskdescription }}</textarea>
            </div>
            <div class="col-md-6">
                <label class="text-primary form-label">Allocation Date</label>
                <input type="date" name="allocationdate" class="form-control" value="{{ $task->allocationdate }}">
            </div>
            <div class="col-md-6">
                <label class="text-primary form-label">Deadline Date</label>
                <input type="date" name="deadlinedate" class="form-control" value="{{ $task->deadlinedate }}">
            </div>
            <div class="col-md-6">
                <label class="form-label text-primary">Task AssignTO</label>
                <div class="form-check">
                    @foreach($assigns as $assign)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $assign->id }}" name="assign_to[]" {{ in_array($assign->id, $assignedToIds) ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $assign->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary ms-3">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection
