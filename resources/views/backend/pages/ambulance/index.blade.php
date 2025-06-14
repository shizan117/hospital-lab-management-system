@extends('backend.layouts.master')

@section('title', 'Ambulance Requests')

@section('content')
    <audio id="alertSound" src="{{ asset('sound/siren-notification.mp3') }}" preload="auto"></audio>
    <button  id="enableSoundBtn" class="btn btn-danger mb-3 d-none" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        🔔 Enable Sound Notifications
    </button>
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
                    <option value="all" {{ request('status') == 'all' || request('status') == null ? 'selected' : '' }}>All</option>
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

    <script>
        // Laravel route URL pattern with placeholder __ID__
        const ambulanceStatusUrlTemplate = "{{ route('admin.ambulance.updateStatus', ['id' => '__ID__']) }}";

        // CSRF token to include in forms
        const csrfToken = "{{ csrf_token() }}";
    </script>


@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // =============================================
            // SOUND NOTIFICATION SYSTEM
            // =============================================
            const alertSound = document.getElementById('alertSound');
            const enableSoundBtn = document.getElementById('enableSoundBtn');
            let soundEnabled = localStorage.getItem('soundEnabled') === 'true';
            let latestRequestId = {{ $requests->first()->id ?? 0 }};

            // Initialize sound button state
            if (soundEnabled) {
                enableSoundBtn.textContent = '🔊 Sound Enabled';
                enableSoundBtn.classList.remove('btn-danger');
                enableSoundBtn.classList.add('btn-success');
            }

            // Enable sound on button click
            enableSoundBtn.addEventListener('click', function() {
                // First try to play the sound
                alertSound.play()
                    .then(() => {
                        soundEnabled = true;
                        localStorage.setItem('soundEnabled', 'true');
                        enableSoundBtn.textContent = '🔊 Sound Enabled';
                        enableSoundBtn.classList.remove('btn-danger');
                        enableSoundBtn.classList.add('btn-success');

                        // Immediately pause to just test playback
                        alertSound.pause();
                        alertSound.currentTime = 0;
                    })
                    .catch(err => {
                        console.error("Audio play failed:", err);
                        alert("⚠️ Please allow audio permissions for this site");
                    });
            });

            // =============================================
            // REAL-TIME REQUEST CHECKING
            // =============================================
            function escapeHTML(text) {
                var div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }

            function checkNewAmbulanceRequest() {
                const currentFilter = document.getElementById('statusFilter').value;

                fetch('{{ route('admin.ambulance.latest') }}', {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    cache: 'no-store'
                })
                    .then(response => {
                        if (!response.ok) throw new Error('Network response was not ok');
                        return response.json();
                    })
                    .then(data => {
                        if (data && data.id > latestRequestId &&
                            (currentFilter === 'all' || data.status === currentFilter)) {

                            latestRequestId = data.id;

                            if (soundEnabled) {
                                alertSound.currentTime = 0;
                                alertSound.play().catch(err => console.warn("Sound play failed:", err));
                            }

                            if (Notification.permission === 'granted') {
                                new Notification('New Ambulance Request', {
                                    body: `From: ${data.from} to ${data.destination}`,
                                    icon: '/backend_assets/images/ambulance-icon.png'
                                });
                            } else if (Notification.permission !== 'denied') {
                                Notification.requestPermission();
                            }

                            // Generate form HTML snippet for status change buttons
                            function getStatusForm(statusValue, buttonClass, buttonText) {
                                return `
                <li>
                    <form action="${ambulanceStatusUrlTemplate.replace('__ID__', data.id)}" method="POST" class="m-0">
                        <input type="hidden" name="_token" value="${csrfToken}">
                        <input type="hidden" name="status" value="${statusValue}">
                        <button class="dropdown-item ${buttonClass}" type="submit">${buttonText}</button>
                    </form>
                </li>`;
                            }

                            // Desktop table
                            const desktopTable = document.querySelector(".table-responsive table tbody");
                            if (desktopTable) {
                                const newRow = document.createElement('tr');
                                newRow.classList.add('bg-danger', 'text-white', 'new-request');
                                newRow.innerHTML = `
                    <td>${data.id}</td>
                    <td>${escapeHTML(data.from)}</td>
                    <td>${escapeHTML(data.destination)}</td>
                    <td>${escapeHTML(data.ambulance_type).charAt(0).toUpperCase() + escapeHTML(data.ambulance_type).slice(1)}</td>
                    <td>${new Date(data.date).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' })}</td>
                    <td>${data.round_trip ? 'Yes' : 'No'}</td>
                    <td>${escapeHTML(data.name)}</td>
                    <td>${escapeHTML(data.phone)}</td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                    <td>Just now</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown">Change Status</button>
                            <ul class="dropdown-menu">
                                ${data.status !== 'pending' ? getStatusForm('pending', 'text-warning', 'Mark as Pending') : ''}
                                ${data.status !== 'confirmed' ? getStatusForm('confirmed', 'text-success', 'Mark as Confirmed') : ''}
                                ${data.status !== 'cancelled' ? getStatusForm('cancelled', 'text-danger', 'Mark as Cancelled') : ''}
                            </ul>
                        </div>
                    </td>
                `;
                                desktopTable.prepend(newRow);

                                setTimeout(() => {
                                    newRow.classList.remove('bg-danger', 'text-white');
                                }, 20000);
                            }

                            // Mobile view cards
                            const mobileContainer = document.querySelector(".d-block.d-lg-none");
                            if (mobileContainer) {
                                const newCard = document.createElement('div');
                                newCard.classList.add('card', 'mb-3', 'shadow-sm', 'bg-danger', 'text-white', 'new-request');
                                newCard.innerHTML = `
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title mb-0">
                                Request #${data.id}
                                <small class="text-light">(Just now)</small>
                            </h5>
                            <div><span class="badge bg-warning text-dark">Pending</span></div>
                        </div>
                        <p class="mb-1">
                            <strong>From:</strong> ${escapeHTML(data.from)}<br>
                            <strong>To:</strong> ${escapeHTML(data.destination)}<br>
                            <strong>Type:</strong> ${escapeHTML(data.ambulance_type).charAt(0).toUpperCase() + escapeHTML(data.ambulance_type).slice(1)}<br>
                            <strong>Date:</strong> ${new Date(data.date).toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' })}<br>
                            <strong>Round Trip:</strong> ${data.round_trip ? 'Yes' : 'No'}
                        </p>
                        <p class="mb-1">
                            <strong>Name:</strong> ${escapeHTML(data.name)}<br>
                            <strong>Phone:</strong> ${escapeHTML(data.phone)}
                        </p>
                        <div class="dropdown mt-2">
                            <button class="btn btn-sm btn-outline-light dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">Change Status</button>
                            <ul class="dropdown-menu w-100">
                                ${data.status !== 'pending' ? getStatusForm('pending', 'bg-warning text-white', 'Mark as Pending') : ''}
                                ${data.status !== 'confirmed' ? getStatusForm('confirmed', 'bg-success text-white', 'Mark as Confirmed') : ''}
                                ${data.status !== 'cancelled' ? getStatusForm('cancelled', 'bg-danger text-white', 'Mark as Cancelled') : ''}
                            </ul>
                        </div>
                    </div>
                `;
                                mobileContainer.prepend(newCard);

                                setTimeout(() => {
                                    newCard.classList.remove('bg-danger', 'text-white');
                                }, 20000);
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error checking new requests:', error);
                    });
            }


            // XSS protection
            function escapeHTML(str) {
                if (!str) return '';
                return str.toString()
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;')
                    .replace(/'/g, '&#39;');
            }

            // Initial check and set interval
            checkNewAmbulanceRequest();
            setInterval(checkNewAmbulanceRequest, 500); // Check every 0.5 seconds

            // Request notification permission on page load
            if (Notification.permission !== 'granted' && Notification.permission !== 'denied') {
                Notification.requestPermission();
            }
        });
    </script>
@endpush
