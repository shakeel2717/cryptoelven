@extends('user.layout.app')
@section('title', 'All In-Direct Level 1')
@section('content')
    <div id="content" class="app-content">
        <div class="row">
            <div class="col-md-12" >
                <div class="card border-theme bg-theme bg-opacity-5 mb-3">
                    <div class="card-header border-theme fw-bold small text-white">All Plans</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 80px;">#</th>
                                    <th>Plan Name</th>
                                    <th>Plan Price</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($statement as $transaction)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center text-capitalize">{{ $transaction->plan->name }} PLAN</td>
                                        <td class="text-center text-capitalize">
                                            {{ number_format($transaction->plan->price, 2) }}
                                        </td>
                                        <td class="text-center text-capitalize">{{ $transaction->status }}</td>
                                        <td class="text-center text-capitalize">{{ $transaction->created_at }}</td>
                                    </tr>
                                @empty
                                    <p>No Record Found</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
