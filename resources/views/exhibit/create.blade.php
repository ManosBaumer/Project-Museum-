<div class="container">
    <h1>Create Exhibit</h1>
    <form action="{{ route('Exhibits.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="artist">Artist</label>
            <input type="text" class="form-control" id="artist" name="artist" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="image">Image (Optional)</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>
        <div class="form-group">
            <label for="video">Video (Optional)</label>
            <input type="file" class="form-control" id="video" name="video" accept="video/*">
        </div>
        <div class="form-group">
            <label for="audio">Audio (Optional)</label>
            <input type="file" class="form-control" id="audio" name="audio" accept="audio/*">
        </div>
        <button type="submit" class="btn btn-primary">Create Exhibit</button>
    </form>
</div>
