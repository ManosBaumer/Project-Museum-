{{-- <x-base-layout> --}}
    <div>
        <h1>Edit Exhibit</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('Exhibits.update', $exhibit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $exhibit->title }}">
            </div>
            
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{ $exhibit->description }}">
            </div>
            
            <div>
                <label for="artist">Artist</label>
                <input type="text" name="artist" id="artist" value="{{ $exhibit->artist }}">
            </div>
            
            <div>
                <label for="date">Date</label>
                <input type="text" name="date" id="date" value="{{ $exhibit->date }}">
            </div>
            
            <div>
                <label for="location">Location</label>
                <input type="text" name="location" id="location" value="{{ $exhibit->location }}">
            </div>
            
            <div>
                <button type="submit">Update</button>
            </div>
        </form>

        <form action="{{ route('Exhibits.delete', $exhibit->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit exhibit wilt verwijderen?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
{{-- </x-base-layout> --}}
