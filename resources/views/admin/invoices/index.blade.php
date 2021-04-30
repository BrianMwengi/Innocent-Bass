@extends('admin.app')
@section('title', 'BASSIST | Innocent Harerimana')
@section('content')
<div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> Customer Invoice</h1>
            <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th> Invoice Number </th>
                            <th scope="col">Customer Email</th>
                            <th class="text-center"> Country Code </th>
                            <th class="text-center"> Product Price</th>
                            <th class="text-center"> Currency</th>
                            <th class="text-center">Payment Status </th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td>{{ $invoice->customer_email }}</td> 
                                <td>{{ $invoice->country_code}}</td>
                                <td>{{ $invoice->price}}</td>
                                <td class="text-center">{{ $invoice->currency }}</td>
                                <td class="text-center">
                                    <span class="badge badge-success">{{ $invoice->payment_status }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush