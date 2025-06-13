@extends('backend.layouts.master')

@section('title', 'Ambulance Requests')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Ambulance Requests</h4>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="mb-3 d-flex align-items-center gap-2">
                <label for="statusFilter" class="form-label mb-0">Filter by Status:</label>
                <select id="statusFilter" class="form-select w-auto">
                    <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
            </div>

            {{-- TABLE VIEW FOR DESKTOP --}}
            <div class="d-none d-lg-block">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Requests</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>From</th>
                                <th>Destination</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Round Trip</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Requested At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($requests as $key => $req)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $req->from }}</td>
                                    <td>{{ $req->destination }}</td>
                                    <td>{{ ucfirst($req->ambulance_type) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($req->date)->format('d M Y') }}</td>
                                    <td>{{ $req->round_trip ? 'Yes' : 'No' }}</td>
                                    <td>{{ $req->name }}</td>
                                    <td>{{ $req->phone }}</td>
                                    <td>
                                        @if($req->status == 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($req->status == 'confirmed')
                                            <span class="badge bg-success">Confirmed</span>
                                        @else
                                            <span class="badge bg-danger">Cancelled</span>
                                        @endif
                                    </td>
                                    <td>{{ $req->created_at->diffForHumans() }}</td>
                                    <td>
                                        {{-- Dropdown Action Button --}}
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton{{ $req->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                Change Status
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $req->id }}">
                                                @if($req->status != 'pending')
                                                    <li>
                                                        <form action="{{ route('admin.ambulance.updateStatus', $req->id) }}" method="POST" class="m-0">
                                                            @csrf
                                                            <input type="hidden" name="status" value="pending">
                                                            <button class="dropdown-item text-warning" type="submit">Mark as Pending</button>
                                                        </form>
                                                    </li>
                                                @endif
                                                @if($req->status != 'confirmed')
                                                    <li>
                                                        <form action="{{ route('admin.ambulance.updateStatus', $req->id) }}" method="POST" class="m-0">
                                                            @csrf
                                                            <input type="hidden" name="status" value="confirmed">
                                                            <button class="dropdown-item text-success" type="submit">Mark as Confirmed</button>
                                                        </form>
                                                    </li>
                                                @endif
                                                @if($req->status != 'cancelled')
                                                    <li>
                                                        <form action="{{ route('admin.ambulance.updateStatus', $req->id) }}" method="POST" class="m-0">
                                                            @csrf
                                                            <input type="hidden" name="status" value="cancelled">
                                                            <button class="dropdown-item text-danger" type="submit">Mark as Cancelled</button>
                                                        </form>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center">No ambulance requests found.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- CARD VIEW FOR MOBILE --}}
            <div class="d-block d-lg-none">
                @forelse($requests as $req)
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">
                                    Request #{{ $req->id }}
                                    <small class="text-muted">({{ $req->created_at->diffForHumans() }})</small>
                                </h5>
                                <div>
                                    @if($req->status == 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($req->status == 'confirmed')
                                        <span class="badge bg-success">Confirmed</span>
                                    @else
                                        <span class="badge bg-danger">Cancelled</span>
                                    @endif
                                </div>
                            </div>

                            <p class="mb-1">
                                <strong>From:</strong> {{ $req->from }} ||
                                <strong>To:</strong> {{ $req->destination }}<br>
                                <strong>Type:</strong> {{ ucfirst($req->ambulance_type) }}<br>
                                <strong>Date:</strong> {{ \Carbon\Carbon::parse($req->date)->format('d M Y') }}<br>
                                <strong>Round Trip:</strong> {{ $req->round_trip ? 'Yes' : 'No' }}
                            </p>
                            <p class="mb-1">
                                <strong>Name:</strong> {{ $req->name }}<br>
                                <strong>Phone:</strong> {{ $req->phone }}
                            </p>

                            {{-- Dropdown Action Button for Mobile --}}
                            <div class="dropdown mt-2">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle w-100" type="button" id="mobileDropdown{{ $req->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                    Change Status
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="mobileDropdown{{ $req->id }}">
                                    @if($req->status != 'pending')
                                        <li class="mb-1">
                                            <form action="{{ route('admin.ambulance.updateStatus', $req->id) }}" method="POST" class="m-0">
                                                @csrf
                                                <input type="hidden" name="status" value="pending">
                                                <button class="dropdown-item bg-warning text-white" type="submit">Mark as Pending</button>
                                            </form>
                                        </li>
                                    @endif
                                    @if($req->status != 'confirmed')
                                            <li class="mb-1">
                                            <form action="{{ route('admin.ambulance.updateStatus', $req->id) }}" method="POST" class="m-0">
                                                @csrf
                                                <input type="hidden" name="status" value="confirmed">
                                                <button class="dropdown-item bg-success text-white" type="submit">Mark as Confirmed</button>
                                            </form>
                                        </li>
                                    @endif
                                    @if($req->status != 'cancelled')
                                        <li>
                                            <form action="{{ route('admin.ambulance.updateStatus', $req->id) }}" method="POST" class="m-0">
                                                @csrf
                                                <input type="hidden" name="status" value="cancelled">
                                                <button class="dropdown-item bg-danger text-white" type="submit">Mark as Cancelled</button>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info text-center">No ambulance requests found.</div>
                @endforelse
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        document.getElementById('statusFilter').addEventListener('change', function () {
            const selectedStatus = this.value;
            const url = new URL(window.location.href);
            if(selectedStatus === 'all') {
                url.searchParams.delete('status');
            } else {
                url.searchParams.set('status', selectedStatus);
            }
            window.location.href = url.toString();
        });
    </script>



@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.getElementById('success-alert');
            if (alert) {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';

                    setTimeout(() => {
                        alert.remove();
                    }, 500);
                }, 3000);
            }
        });
    </script>


@endpush
