@extends("Employee.base")

@section('base')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Work Report Form</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/workreportupdate/' . $report_id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-3">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">Project Name</label>
                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" value="{{ $project_name }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="work_report" class="col-md-4 col-form-label text-md-right">Work Report</label>
                            <div class="col-md-6">
                                <textarea id="work_report" class="form-control" name="work_report" rows="4" required>{{ $work_report }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Update Report</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
