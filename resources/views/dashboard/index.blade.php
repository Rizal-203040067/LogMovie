<div class="container">
    <h2>My Movies</h2>
    <a href="{{ route('dashboard.create') }}" class="btn btn-primary">Add Movie</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->category->name}}</td>
                    <td>
                        <a href="{{ route('dashboard.show', $movie->slug) }}" class="btn btn-info">View</a>
                        <a href="{{ route('dashboard.edit', $movie->slug)}}" class="btn btn-info">Edit</a>
                        {{-- <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a> --}}
                        <form action="/dashboard/{{ $movie->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure!!')">delete<i
                                    class="bi bi-x-circle"></i></button>
                            <input type="hidden" name="slug" value="{{ $movie }}">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>