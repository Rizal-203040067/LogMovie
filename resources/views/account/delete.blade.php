<div class="container">
    <h2>Delete Account</h2>
    @if(session('passwordError'))
        <div class="alert alert-danger">
            {{ session('passwordError') }}
        </div>
    @endif

    <form method="POST" action="{{ route('account.delete') }}">
        @csrf
        @method('DELETE')

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger">Delete Account</button>
    </form>
</div>