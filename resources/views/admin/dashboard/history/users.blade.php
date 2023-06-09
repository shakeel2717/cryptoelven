@extends('admin.layout.app')
@section('title', 'Pricing Plans')
@section('head')
<link rel="stylesheet" href="/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
@endsection
@section('content')
<div id="content" class="app-content">
    <div class="row">
        <div class="col-md-12" style="overflow: scroll;">
            <div class="card border-theme bg-theme bg-opacity-5 mb-3">
                <div class="card-header border-theme fw-bold small text-white">HEADER</div>
                <div class="card-body">
                    <table class="table text-nowrap w-100" id="id=" dataTableExample"">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 80px;">#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Upliner</th>
                                <th>Plans</th>
                                <th>Login</th>
                                <th>Action</th>
                                <th>Balance</th>
                                <th>ROI Bal</th>
                                <th>ROI</th>
                                <th>PIN</th>
                                <th>Winner</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center text-capitalize">{{ $user->name }}</td>
                                <td class="text-center text-capitalize">{{ $user->username }}</td>
                                <td class="text-center text-capitalize">{{ $user->status }}</td>
                                <td class="text-center text-capitalize">{{ $user->refer }}</td>
                                <td class="text-center">${{ number_format(myPlanCount($user->id), 2) }}</td>
                                <td>
                                    <form action="{{ route('admin.login.user') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <input class="btn btn-sm btn-dark" type="submit" value="Login" class="login">
                                    </form>
                                </td>
                                <td>
                                    @if ($user->network == 1)
                                    <a href="{{ route('admin.history.user.plan.unPin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Make Normal</a>
                                    @else
                                    <a href="{{ route('admin.history.user.plan.makePin', ['id' => $user->id]) }}" class="btn btn-sm btn-primary">Make PIN</a>
                                    @endif
                                </td>
                                <td class="text-center">${{ number_format(balance($user->id), 2) }}</td>
                                <td class="text-center">${{ number_format(roiBalance($user->id), 2) }}</td>

                                @if ($user->roi == 1)
                                <td class="text-center"><a class="btn btn-danger btn-sm" href="{{ route('admin.history.users.stop.ROi', ['user' => $user->id]) }}">Stop</a>
                                    @elseif ($user->roi == 0)
                                <td class="text-center"><a class="btn btn-success btn-sm" href="{{ route('admin.history.users.start.ROi', ['user' => $user->id]) }}">Start</a>
                                </td>
                                @endif
                                <td class="text-center text-capitalize">{{ $user->network == 1 ? 'Yes' : 'No' }}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="{{ route('admin.winner.user', ['user' => $user->id]) }}">Winner</a>
                                </td>
                                <td class="text-center text-capitalize">{{ $user->email }}</td>
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
@section('footer')
<script src="/assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
@endsection