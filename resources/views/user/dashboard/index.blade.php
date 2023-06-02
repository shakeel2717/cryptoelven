@extends('user.layout.app')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="row flex-grow">
        <div class="col-md-4 grid-margin stretch-card">
            @include('inc.card',['title' => 'Current Balance','value' => number_format(balance(auth()->user()->id), 2)])
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            @include('inc.card',['title' => 'All Income','value' => number_format(inBalance(auth()->user()->id), 2)])
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            @include('inc.card',['title' => 'All Withdraw','value' => number_format(withdraw(auth()->user()->id), 2)])
        </div>
    </div>
</div>
<div class="row">
    <div class="row flex-grow">
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'ROI Profit','value' => number_format(roiBalance(auth()->user()->id), 2)])
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'ROI Delivered','value' => number_format(roiBalanceDelivered(auth()->user()->id), 2)])
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'Direct Bonus','value' => number_format(directCommission(auth()->user()->id), 2)])
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'Uni-Level Team Bonus','value' => number_format(inDirectTotalCommission(auth()->user()->id), 2)])
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'Ransk & Reward','value' => number_format(passive(auth()->user()->id), 2) ])
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'Global Share','value' => number_format(userGotRoi(auth()->user()->id), 2) ])
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'Remianing ROI','value' => number_format(userWillGetRoi(auth()->user()->id), 2) ])
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            @include('inc.card',['title' => 'Group Sale','value' => number_format(overallSale(auth()->user()->id), 2) ])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Invite Friends (Refer Link)</h5>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="my-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" value="{{ route('register', ['refer' => auth()->user()->username]) }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" onclick="copyClipBoard()">Copy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto">
                        <div class="my-2">
                            <div class="d-flex justify-content-around align-items-center mt-2">
                                <div class="d-flex align-items-center px-2">
                                    <h4 class="fs-3 text-light mb-0 mr-3">{{ count($refers) }}</h4>
                                    <p class="text-muted text-white mb-0">
                                        Total Referrals
                                    </p>
                                </div>
                                <div class="d-flex align-items-center px-2 border-start">
                                    <h4 class="fs-3 text-light mb-0 mr-3">
                                        {{ $refers->where('status', 'active')->count() }}
                                    </h4>
                                    <p class="text-muted text-white mb-0">
                                        Active Referrals
                                    </p>
                                </div>
                                <div class="d-flex align-items-center px-2 border-start">
                                    <h4 class="fs-3 text-light mb-0 mr-3">
                                        {{ $refers->where('status', 'pending')->count() }}
                                    </h4>
                                    <p class="text-muted text-white mb-0">
                                        Pending Referrals
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">5x Network Cap</h5>
                <h3 class="text-uppercase ">
                    Total Investment: {{ number_format(myPlanCount(auth()->user()->id), 2) }}
                </h3>
                <hr>
                <canvas id="chart" progress="{{ networkCapProgress(auth()->user()->id) }}"></canvas>
                <table class="table table-striped">
                    <thead class="text-left">
                        <tr>
                            <th>Total</th>
                            <td>${{ number_format(networkCapReach(auth()->user()->id), 2) }}/-
                            </td>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr>
                            <th>Remaining</th>
                            <td>${{ number_format(networkCapReach(auth()->user()->id) + networkCapRemovedBalance(auth()->user()->id) - networkCap(auth()->user()->id), 2) }}/-
                            </td>
                        </tr>
                        <tr>
                            <th>Achieve</th>
                            <td>${{ number_format(networkCap(auth()->user()->id) - networkCapRemovedBalance(auth()->user()->id), 2) }}/-
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex fw-bold small mb-3">
                    <span class="flex-grow-1">Recent Transaction</span>
                    <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless mb-2px small text-nowrap">
                        <tbody>
                            @forelse ($transactions as $transaction)
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-{{ $transaction->sum == 'in' ? 'success' : 'theme' }} me-2"></i>
                                        {{ $transaction->type }}
                                    </span>
                                </td>
                                <td><small>{{ $transaction->sum == 'in' ? '+' : '-' }}
                                        ${{ number_format($transaction->amount, 4) }}</small></td>
                                <td>
                                    <span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">{{ $transaction->status }}</span>
                                </td>
                                <td>{{ $transaction->reference }}</td>
                                <td>{{ $transaction->created_at }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <span class="d-flex align-items-center">
                                        <i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
                                        NO Transaction Found
                                    </span>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection