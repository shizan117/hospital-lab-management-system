<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: #f8f9fa;
        }
        .login-box {
            margin-top: 10vh;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .input-group-text {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="login-box">
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4 text-center">Admin Login</h3>

            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>{{ $errors->first() }}</strong>
                </div>
            @endif


            <form action="{{ route('login.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" required autofocus />
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <div class="input-group">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            id="password"
                            required
                        />
                        <span class="input-group-text" id="togglePassword">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                fill="currentColor"
                                class="bi bi-eye"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133
                                        13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168
                                        5.168 2.457A13.133 13.133 0 0 1 14.828 8a13.133 13.133 0 0 1-1.66
                                        2.043C11.879 11.332 10.12 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133
                                        13.133 0 0 1 1.172 8z"
                                />
                                <path
                                    d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM8 9a1 1 0 1 1
                                        0-2 1 1 0 0 1 0 2z"
                                />
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <div class="mt-3 text-center">
                    <small>&copy; {{ date('Y') }} Admin Panel</small>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // toggle eye / eye-slash icon
        this.innerHTML = '';
        if (type === 'password') {
            this.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133
                    13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168
                    5.168 2.457A13.133 13.133 0 0 1 14.828 8a13.133 13.133 0 0 1-1.66
                    2.043C11.879 11.332 10.12 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133
                    13.133 0 0 1 1.172 8z"/>
                    <path d="M8 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM8 9a1 1 0 1 1
                    0-2 1 1 0 0 1 0 2z"/>
                </svg>`;
        } else {
            this.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028
                    7.028 0 0 0-2.79.546l.736.736A5.988 5.988 0 0 1 8 4.5c2.12 0 3.879
                    1.168 5.168 2.457a12.736 12.736 0 0 1-1.003 1.256l1.194 1.194zm-2.218-2.22a3
                    3 0 0 0-4.284-4.283l.708.708a1 1 0 0 1 1.415 1.415l.708.708zm-7.55-1.998l.737.737a5.988
                    5.988 0 0 0-1.454 2.536C1.94 10.84 1 12 1 12s3 5.5 8 5.5a7.028 7.028 0 0
                    0 2.79-.546l.736.736a8.12 8.12 0 0 1-3.526.81c-5 0-8-5.5-8-5.5 1.035-1.75
                    2.572-3.066 4.35-3.952z"/>
                    <path d="M3.646 3.646a.5.5 0 0 1 .708 0l8 8a.5.5 0 0 1-.708.708l-8-8a.5.5 0 0
                    1 0-.708z"/>
                </svg>`;
        }
    });
</script>
</body>
</html>
