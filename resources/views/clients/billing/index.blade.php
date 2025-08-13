@extends('clients.layouts.app')

@section('content')
    <style>
        .session-card {
            background-color: rgba(163, 191, 217, 0.2);
            border-radius: 12px;
            color: black;
        }

        .status-badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 8px;
            border-radius: 6px;
            margin-left: 8px;
            vertical-align: middle;
        }

        @media (max-width: 576px) {
            .session-card {
                flex-direction: column;
                align-items: flex-start !important;
            }
        }
    </style>

    <div class="content-wrapper">
        <div class="container-fluid">
            <h3 class="text-black mb-0">Billing & Payments</h3>
            <p>
                Easily view, manage, and download your therapy payment history, invoices.
            </p>


            <div class="session-card my-4 d-flex flex-wrap justify-content-between align-items-center p-3 mb-3">
                <div class="d-flex flex-column ">
                    <h6 class="fw-bold mb-2 text-black">
                        Single Session With <u>Dr. Sarah Johnson</u>
                        <span class="status-badge bg-success text-white">COMPLETED</span>
                    </h6>
                    <div class="d-flex flex-wrap small">
                        <div class="me-3 mb-1">
                            <i class="ti ti-calendar"></i> 22 Aug, 2025
                        </div>
                        <div>
                            <i class="ti ti-credit-card"></i> •••• 4242
                        </div>
                    </div>
                </div>
                <div class="fw-bold fs-5 mt-2 mt-md-0">$200</div>
            </div>

            <!-- Item -->
            <div class="session-card d-flex flex-wrap justify-content-between align-items-center p-3 mb-3">
                <div class="d-flex flex-column">
                    <h6 class="fw-bold mb-2 text-black">
                        Single Session With <u>Dr. Sarah Johnson</u>
                        <span class="status-badge bg-success text-white">COMPLETED</span>
                    </h6>
                    <div class="d-flex flex-wrap small">
                        <div class="me-3 mb-1">
                            <i class="ti ti-calendar"></i> 22 Aug, 2025
                        </div>
                        <div>
                            <i class="ti ti-credit-card"></i> •••• 4242
                        </div>
                    </div>
                </div>
                <div class="fw-bold fs-5 mt-2 mt-md-0">$250</div>
            </div>

            <!-- Item -->
            <div class="session-card d-flex flex-wrap justify-content-between align-items-center p-3 mb-3">
                <div class="d-flex flex-column">
                    <h6 class="fw-bold mb-2 text-black">
                        [Cancelled] Single Session <u>Dr. Sarah Johnson</u>
                        <span class="status-badge bg-danger text-white">REFUNDED</span>
                    </h6>
                    <div class="d-flex flex-wrap small">
                        <div class="me-3 mb-1">
                            <i class="ti ti-calendar"></i> 22 Aug, 2025
                        </div>
                        <div>
                            <i class="ti ti-credit-card"></i> •••• 4242
                        </div>
                    </div>
                </div>
                <div class="fw-bold fs-5 mt-2 mt-md-0">$500</div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
