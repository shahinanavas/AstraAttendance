@extends('admin.base')

@section('base')
<div class="container">
    <h1>Employee Work Report for {{ \Carbon\Carbon::now()->format('F Y') }}</h1>

    @if($reportData->isEmpty())
        <p>No work data available for this month.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Date</th>
                    <th>Hours Worked</th>
                    <th>Tasks Completed</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reportData as $data)
                    <tr>
                        <td>{{ $data->employee_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->date)->format('d-m-Y') }}</td>
                        <td>{{ $data->work_report }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
