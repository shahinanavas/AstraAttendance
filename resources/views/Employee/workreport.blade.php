@extends("Employee.base")

@section('base')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Work Report Form</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/submit-report') }}">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" value="{{ $current_date }}" name="date" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="check_in" class="col-md-4 col-form-label text-md-right">Check-In Time</label>
                            <div class="col-md-6">
                                <input id="check_in" type="time" class="form-control" name="check_in" value="{{ $checkin_time }}" required onchange="toggleCheckout(this)">
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="checkoutField" style="display: none;">
                            <label for="check_out" class="col-md-4 col-form-label text-md-right">Check-Out Time</label>
                            <div class="col-md-6">
                                <input id="check_out" type="time" class="form-control" name="check_out">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">Project Name</label>
                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="work_report" class="col-md-4 col-form-label text-md-right">Work Report</label>
                            <div class="col-md-6">
                                <textarea id="work_report" class="form-control" name="work_report" rows="4" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit Report
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleCheckout(checkinInput) {
        var checkoutField = document.getElementById('checkoutField');
        if (checkinInput.value !== '') {
            checkoutField.style.display = 'block';
            document.getElementById('check_out').setAttribute('required', 'required');
        } else {
            checkoutField.style.display = 'none';
            document.getElementById('check_out').removeAttribute('required');
        }
    }
</script>
@endsection
