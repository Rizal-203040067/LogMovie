<div class="container">
    <h2>Add Movie</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="slug">slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required>
        </div>
        <div class="form-group">
            <label for="overview">Overview:</label>
            <textarea class="form-control" id="overview" name="overview" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="popularity">Popularity:</label>
            <input type="text" class="form-control" id="popularity" name="popularity" required>
        </div>
        <div class="form-group">
            <label for="poster_path">Poster Path:</label>
            <input type="file" class="form-control" id="poster_path" name="poster_path" required>
        </div>
        <div class="form-group">
            <label for="backdrop_path">Backdrop Path:</label>
            <input type="file" class="form-control" id="backdrop_path" name="backdrop_path" required>
        </div>
        <div class="form-group">
            <label for="release_date">Release Date:</label>
            <input type="date" class="form-control" id="release_date" name="release_date" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category ID:</label>
            <input type="text" class="form-control" id="category_id" name="category_id" required>
        </div>
        

        <!-- Add other form fields here based on your Movie model -->

        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
</div>