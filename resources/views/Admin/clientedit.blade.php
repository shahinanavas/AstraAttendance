@extends('admin.base')

@section('base')

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>

<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h5 class="card-title mb-0 text-center">EDIT CLIENT</h5>
    </div>
    <div class="card-body">
                
        <div class="row p-4">
        <form action="{{ url('/home/clientupdate/' . $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Client's Name</label>
                            <input type="text" class="form-control" placeholder="Enter Client Name" name="client_name" value="{{ $client->client_name }}">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Address</label>
                            <textarea class="form-control" placeholder="Enter Address" name="client_address">{{ $client->client_address }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Enter Client Phone number" name="client_phone_no" value="{{ $client->client_phone_no }}">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Project Name</label>
                            <input type="text" class="form-control" placeholder="Enter Project Name" name="project_name" value="{{ $client->project_name }}">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Project Type</label>
                            <select class="form-select" name="project_type" id="project_type">
                                <option value="" disabled>Select a project type</option>
                                <option value="Digital Marketing" {{ $client->project_type == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                <option value="SEO" {{ $client->project_type == 'SEO' ? 'selected' : '' }}>SEO</option>
                                <option value="Software" {{ $client->project_type == 'Software' ? 'selected' : '' }}>Software</option>
                                <option value="Website" {{ $client->project_type == 'Website' ? 'selected' : '' }}>Website</option>
                            </select>
                        </div>
                    </div>
                                    
                    <div class="col-md-10">
                        <div class="mb-3" id="project-type-container" style="{{ $client->project_type_detail ? 'display: block;' : 'display: none;' }}">
                            <label class="form-label text-primary" id="project-type-label">Type of {{ ucfirst($client->project_type) }}</label>
                            <input type="text" class="form-control" name="project_type_detail" value="{{ $client->project_type_detail }}">
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Project Status</label>
                            <select class="form-select" name="client_project_status" id="project_status">
                                <option value="Pending" {{ $client->client_project_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Approved" {{ $client->client_project_status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                <option value="Rejected" {{ $client->client_project_status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                    </div>
                                    
                    <div class="col-md-10" id="quotation_fields" style="{{ $client->client_project_status == 'Approved' ? 'display: block;' : 'display: none;' }}">
                        <div class="mb-3">
                            <label class="form-label text-primary">Quotation Sent</label>
                            <select class="form-select" name="quotation_sent" id="quotation_sent">
                                <option value="No" {{ $client->quotation_sent == 'No' ? 'selected' : '' }}>No</option>
                                <option value="Yes" {{ $client->quotation_sent == 'Yes' ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>
                                        
                    <div class="col-md-10" id="quotation_file_upload" style="{{ $client->quotation_sent == 'Yes' ? 'display: block;' : 'display: none;' }}">
                        <div class="mb-3">
                            <label class="form-label text-primary">Quotation File Upload</label>
                            <input type="file" class="form-control" name="quotation_file">
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Quotation Status</label>
                            <select class="form-select" name="quotation_status">
                                <option value="Pending" {{ $client->quotation_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Inprogress" {{ $client->quotation_status == 'Inprogress' ? 'selected' : '' }}>Inprogress</option>
                                <option value="Completed" {{ $client->quotation_status == 'Completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                        </div>
                    </div>
                                     
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Total Amount</label>
                            <input type="number" class="form-control" name="total_amount" id="total_amount" value="{{ $client->total_amount }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Amount Paid</label>
                            <input type="number" class="form-control" name="amount_paid" id="amount_paid" value="{{ $client->amount_paid }}">
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Balance</label>
                            <input type="number" class="form-control" name="balance" id="balance" value="{{ $client->balance }}" readonly>
                        </div>
                    </div>
                           
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label class="form-label text-primary">Payment Method</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="" disabled>Select a payment method</option>
                                <option value="Cash" {{ $client->payment_method == 'Cash' ? 'selected' : '' }}>Cash</option>
                                <option value="Cheque" {{ $client->payment_method == 'Cheque' ? 'selected' : '' }}>Cheque</option>
                                <option value="Bank Transfer" {{ $client->payment_method == 'Bank Transfer' ? 'selected' : '' }}>Bank Transfer</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-10" id="cheque_no_field" style="{{ $client->payment_method == 'Cheque' ? 'display: block;' : 'display: none;' }}">
                        <div class="mb-3">
                            <label class="form-label text-primary">Cheque No</label>
                            <input type="text" class="form-control" name="cheque_no" value="{{ $client->cheque_no }}">
                        </div>
                    </div>

                    <div class="col-md-10" id="transaction_id_field" style="{{ $client->payment_method == 'Bank Transfer' ? 'display: block;' : 'display: none;' }}">
                        <div class="mb-3">
                            <label class="form-label text-primary">Transaction ID</label>
                            <input type="text" class="form-control" name="transaction_id" value="{{ $client->transaction_id }}">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Update</button>
                        <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    document.getElementById('project_type').addEventListener('change', function() {
        const projectTypeContainer = document.getElementById('project-type-container');
        const projectTypeLabel = document.getElementById('project-type-label');
        if (this.value) {
            projectTypeContainer.style.display = 'block';
            projectTypeLabel.innerText = `Type of ${this.options[this.selectedIndex].text}`;
        } else {
            projectTypeContainer.style.display = 'none';
        }
    });

    document.getElementById('project_status').addEventListener('change', function() {
        const quotationFields = document.getElementById('quotation_fields');
        if (this.value === 'Approved') {
            quotationFields.style.display = 'block';
        } else {
            quotationFields.style.display = 'none';
        }
    });

    document.getElementById('quotation_sent').addEventListener('change', function() {
        const quotationFileUpload = document.getElementById('quotation_file_upload');
        if (this.value === 'Yes') {
            quotationFileUpload.style.display = 'block';
        } else {
            quotationFileUpload.style.display = 'none';
        }
    });

    // Function to update balance
    function updateBalance() {
        const totalAmount = parseFloat(document.getElementById('total_amount').value) || 0;
        const amountPaid = parseFloat(document.getElementById('amount_paid').value) || 0;
        const balance = totalAmount - amountPaid;
        document.getElementById('balance').value = balance;
    }

    // Attach event listeners to amount inputs
    document.getElementById('total_amount').addEventListener('input', updateBalance);
    document.getElementById('amount_paid').addEventListener('input', updateBalance);
</script>


@endsection
