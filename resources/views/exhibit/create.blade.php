{{-- <x-base-layout> --}}
    <div>
        <h1>Create Exhibits</h1>

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
        <form action="{{route('exhibits.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>
            
            <div>
                <label for="artist">Artist</label>
                <input type="text" name="artist" id="artist">
            </div>
            
            <div>
                <label for="date">Date</label>
                <input type="text" name="date" id="date">
            </div>
            <div>
                <label for="location">Location</label>
                <input type="text" name="location" id="location">
            </div>
            
            <div>
                <button type="submit">Aanmaken</button>
            </div>
        </form>
    </div>
{{-- </x-base-layout> --}}
