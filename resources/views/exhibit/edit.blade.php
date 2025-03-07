
<div class="container">
    <h1>Edit Exhibit</h1>
    <form action="{{ route('Exhibits.update', $exhibit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $exhibit->title }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $exhibit->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="artist">Artist</label>
            <input type="text" name="artist" id="artist" class="form-control" value="{{ $exhibit->artist }}">
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $exhibit->date }}">
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ $exhibit->location }}">
        </div>


        <button type="submit" class="btn btn-primary">Update Exhibit</button>
    </form>
</div>

