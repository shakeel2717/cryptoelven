@extends('user.layout.app')
@section('title', 'Pricing Plans')
@section('content')
<div id="content" class="app-content">
    <div class="row">
        @forelse ($plans as $plan)
        <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-center mt-3 mb-4">{{ $plan->name }}</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-primary icon-xxl d-block mx-auto my-3">
                        <circle cx="12" cy="8" r="7"></circle>
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                    </svg>
                    <h1 class="text-center">${{ number_format($plan->price, 2) }}</h1>
                    <h5 class="text-primary text-center mb-4">Duration: {{ $plan->duration }} Days</h5>
                    <table class="mx-auto">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/plans) }}/{{ $plan->iteration }}" alt="Plan Icon" width="150">
                                </td>
                                <td>
                                    <p>Min Withdarw: ${{ number_format(20, 2) }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check icon-md text-primary me-2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></td>
                                <td>
                                    <p>Duration: {{ $plan->duration }} Days</p>
                                </td>
                            </tr>
                            <tr>
                                <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check icon-md text-primary me-2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></td>
                                <td>
                                    <p>Price: ${{ number_format($plan->price, 2) }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-grid text-center">
                        <a href="{{ route('user.plan.show', ['plan' => $plan->id]) }}" class="btn btn-primary mt-4">Select Package</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h2>NO Plan Found</h2>
        @endforelse
    </div>
</div>
@endsection