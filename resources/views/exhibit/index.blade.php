{{-- <x-base-layout> --}}
    <div>
        <h1>Exhibits</h1>
        
        <div>
            @foreach ($exhibits as $exhibit)
                <div>
                    <p>Title: {{ $exhibit->title }}</p>
                    <p>Description: {{ $exhibit->description }}</p>
                    <p>Artist: {{ $exhibit->artist }}</p>
                    <p>Date: {{ $exhibit->date }}</p>
                    <p>Location: {{ $exhibit->location }}</p>
                        <a href="{{ route('Exhibits.edit', $exhibit->id) }}">Edit</a>

                        <form action="{{ route('Exhibits.delete', $exhibit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this exhibit?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                </div>
            @endforeach
        </div>
            <div>
                <a href="{{ route('Exhibits.create') }}">New Exhibit</a>
            </div>
        
    </div>
{{-- </x-base-layout> --}}
