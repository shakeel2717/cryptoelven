@extends('user.layout.app')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="content">
        <div class="content content-full text-center">
            <h4 class="mt-3">
                Deposit {{ $task->to_currency }} Balance in to your account
            </h4>
            <br>
            <div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-body text-left">
                                <div class="qr-image text-center">
                                    <img src="{{ $task->qrcode_url }}" alt="" width="100">
                                    <hr>
                                    <h4 class="text-theme text-center">
                                        <b>Amount:</b> <span class="amount">{{ $task->amount }}</span>
                                        {{ $task->to_currency }}
                                    </h4>
                                    <p class="text-center">
                                        <b>Payment ID:</b> <span class="amount">{{ $task->txn_id }}</span>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-8 mx-auto">
                                            <div class="form-group">
                                                <label for="amount" class="form-label">Address</label>
                                                <input type="text" name="amount" id="amount" placeholder="Enter Amount"
                                                    class="form-control text-center" value="{{ $task->address }}"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <p>
                                    Status: <a href="{{ $task->status_url }}">Click here</a> to Check Payment Status.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
