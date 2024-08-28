<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="login">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" wire:model="email" placeholder="Enter your email">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" wire:model="password" placeholder="Enter your password">
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group form-check mt-3">
                            <input type="checkbox" id="remember" class="form-check-input" wire:model="remember">
                            <label for="remember" class="form-check-label">Remember Me</label>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Login</button>

                        @if (session()->has('error'))
                            <div class="alert alert-danger mt-3">{{ session('error') }}</div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
