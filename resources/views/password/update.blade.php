<div class="container">
    <h2>Update Password</h2>
    @if(session('passwordError'))
        <div class="alert alert-danger">
            {{ session('passwordError') }}
        </div>
    @endif

    @if(session('passwordSuccess'))
        <div class="alert alert-success">
            {{ session('passwordSuccess') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <div class="form-group">
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password" id="new_password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm New Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Password</button>
    </form>
</div>