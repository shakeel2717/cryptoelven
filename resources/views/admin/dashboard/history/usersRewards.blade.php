@extends('admin.layout.app')
@section('title', 'Pricing Plans')
@section('head')
    <link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div id="content" class="app-content">
        <div class="row">
            <div class="col-md-12" style="overflow: scroll;">
                <div class="card border-theme bg-theme bg-opacity-5 mb-3">
                    <div class="card-header border-theme fw-bold small text-white">HEADER</div>
                    <div class="card-body">
                        <table class="table text-nowrap w-100" id="datatableDefault">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 80px;">#</th>
                                    <th>Username</th>
                                    <th>Direct Business</th>
                                    <th>Direct Rank</th>
                                    <th>In-Direct</th>
                                    <th>In-Direct Rank</th>
                                    <th>Network</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    @if (directBusiness($user->id) > 0 || totalIndirectBusiness($user->id) > 0)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center text-capitalize">{{ $user->username }}</td>
                                            <td class="text-center">${{ number_format(directBusiness($user->id), 2) }}</td>
                                            <td class="text-center">{{ directAward($user->id) }}</td>
                                            <td class="text-center">${{ number_format(totalIndirectBusiness($user->id), 2) }}
                                            </td>
                                            <td class="text-center">{{ inDirectAward($user->id) }}</td>
                                            <td class="text-center text-capitalize">{{ $user->network == 1 ? 'Yes' : 'No' }}
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <p>No Record Found</p>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $users->links() }} --}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script>
        $('#datatableDefault').DataTable({
            dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
            lengthMenu: [10, 20, 30, 40, 50],
            responsive: true,
            buttons: [{
                    extend: 'print',
                    className: 'btn btn-default'
                },
                {
                    extend: 'csv',
                    className: 'btn btn-default'
                }
            ]
        });
    </script>

@endsection
