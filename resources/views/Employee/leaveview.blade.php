@extends('Employee.base')
@section('base')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0 text-center">Leave Applications</h4>
                    <a href="{{ url('/leave') }}" class="btn btn-primary">Add Leave</a>
                </div>
                <div class="card-body">
                    @if($leaveApplications->count() > 0)
                        <ul class="list-group">
                            @foreach($leaveApplications as $leave)
                                <li class="list-group-item">
                                    <span class="fw-bold">Type of Leave:</span> {{ $leave->typeleave ?? '' }}<br>
                                    <span class="fw-bold"> Date:</span> {{ $leave->date ?? '' }}<br>
                                    <span class="fw-bold">Start Date:</span> {{ $leave->startdate ?? '' }}<br>
                                    <span class="fw-bold">End Date:</span> {{ $leave->enddate ?? '' }}<br>
                                    <span class="fw-bold">Reason:</span> {{ $leave->reason ?? '' }}<br>
                                    <span class="fw-bold">Status:</span> 
                                    @switch($leave->status)
                                        @case(0)
                                            Pending
                                            @break
                                        @case(1)
                                            Approved
                                            @break
                                        @case(2)
                                            Rejected
                                       
                                    @endswitch<br>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No leave applications found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
