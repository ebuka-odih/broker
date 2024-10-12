@extends('dashboard.layout.app')
@section('content')
     <style>
    .payment-grid {
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr ; /* Added one more 2fr for the "Ending" column */
        grid-gap: 10px;
        width: 100%;
    }

    .payment-grid-header, .payment-grid-row {
        display: contents;
    }

    .payment-grid div {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: center; /* Center text in each grid cell */
    }

    .payment-grid-header div {
        font-weight: bold;
        text-align: center; /* Ensure header text is centered */
    }

    .payment-grid-row div {
        padding: 10px;
    }

    .payment-grid-row:last-child div {
        border-bottom: none;
    }

    .badge {
        padding: 0.3rem 0.6rem; /* Adjust badge padding for smaller display */
        font-size: 0.875rem;
    }
</style>


    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Main Balance</h5>
                    <ul>
                        <li class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex align-items-center">
                                <i style="color: #6c6cf3; font-size: 25px" class="icon ion-md-cash"></i>
                                <h4 class="ml-3">{{ number_format($user->balance, 2 ?? '0') }} USD</h4>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <h2 class="text-center m-3">Subscribe</h2>
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>
        <div class="row">


            @foreach($plans as $item)
                <div class="col-md-4 py-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="section_title">
                                <h3 class="mb-0">{{ $item->name }}</h3>
                            </div>
                        </div>
                        <form class="card-body text-dark" action="{{ route('user.activatePlan') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan_id" value="{{ $item->id }}">
                            <input type="hidden" name="trade_limit_per_day" value="{{ $item->trade_limit_per_day }}">
                            <div class="mb-4">
                                <span style="font-size: 20px; font-weight: bolder; white-space: none"
                                      class="mb-4 text-dark ">Amount: ${{ number_format($item->max_amount, 2) }}</span>
                            </div>
                            <h5 class="text-dark">Details</h5>
                            <div style="color: black" class="d-flex">
                                <span class="flex-fill p-2 mb-2 rounded border">
										<p class="text-primary mb-0">DAILY TRADES</p>
										<p class="font-weight-bold text-dark mb-0"
                                           style="font-size: 16px">{{ $item->trade_limit_per_day }}</p>
									</span>
                            </div>

                            <div class="form-group mt-4">
                                <input type="hidden" name="max_amount" class="form-control amount" placeholder="100"
                                      value="{{ $item->max_amount }}" data-id="4">
                            </div>
                            <p class="text-danger exceedInfo" style="display:none">Amount value cannot exceed current
                                balance.</p>
                            <button class="btn btn-primary btn-block submit-with mt-3" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            @endforeach


            <div class="col-md-12 py-3">
                <div class="card my-2">
                    <div class="card-header">
                        <h4 class="mb-0">Active Subscription</h4>
                    </div>
                    <div class="card-body px-3 py-3">

                         <div class="payment-grid">
                                <div class="payment-grid-header">
                                    <div>Date</div>
                                    <div>Amount</div>
                                    <div>Package</div>
                                    <div>Status</div>
                                    <div>Trade Count</div>
                                </div>

                                @foreach($subscription as $index => $item)
                                    <div class="payment-grid-row">
                                        <div>{{ date('d M, Y', strtotime($item->created_at)) }}</div>
                                        <div>${{ number_format($item->amount, 2) ?? '' }}</div>
                                        <div>{{ $item->package->name ?? '' }}</div>
                                        <div>
                                            @if($item->status == 0)
                                                <span class="badge bg-warning text-white">Pending</span>
                                            @else
                                                <span class="badge bg-success text-white">Active</span>
                                            @endif
                                        </div>
                                        <div>{{ $item->user->trade_count ?? '' }}</div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
