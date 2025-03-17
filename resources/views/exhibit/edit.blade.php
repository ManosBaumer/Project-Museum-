<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif; ">
    @include('layouts.nav')

    <div style="max-width: 600px; margin: 50px auto; background-color: #181a21; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);">
        <h1 style="text-align: center; color: #00d4ff;">Edit Exhibit</h1>
        <form action="{{ route('Exhibits.update', $exhibit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 15px;">
                <label for="title" style="display: block; font-weight: bold;">Title</label>
                <input type="text" id="title" name="title" value="{{ $exhibit->title }}" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="description" style="display: block; font-weight: bold;">Description</label>
                <textarea id="description" name="description" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">{{ $exhibit->description }}</textarea>
            </div>
            <div style="margin-bottom: 15px;">
                <label for="artist" style="display: block; font-weight: bold;">Artist</label>
                <input type="text" id="artist" name="artist" value="{{ $exhibit->artist }}" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="date" style="display: block; font-weight: bold;">Date</label>
                <input type="date" id="date" name="date" value="{{ $exhibit->date }}" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="location" style="display: block; font-weight: bold;">Location</label>
                <input type="text" id="location" name="location" value="{{ $exhibit->location }}" required style="width: 100%; padding: 10px; border-radius: 6px; border: none; background: #272830; color: white;">
            </div>
            <button type="submit" style="width: 100%; padding: 12px; background: linear-gradient(135deg, #007bff, #00d4ff); color: white; border-radius: 8px; border: none; font-weight: bold; cursor: pointer; transition: 0.3s;">
                ✏️ Update Exhibit
            </button>
        </form>
    </div>
</body>
