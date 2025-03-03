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
                    @can('edit-exhibit', \App\Models\Exhibit::class)
                        <a href="{{ route('exhibit.edit', $exhibit->id) }}">Edit</a>
                    @endcan

                    @can('delete-exhibit', \App\Models\Exhibit::class)
                        <form action="{{ route('exhibit.destroy', $exhibit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this exhibit?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    @endcan
                </div>
            @endforeach
        </div>
        @can('create-exhibit', \App\Models\Exhibit::class)
            <div>
                <a href="{{ route('exhibit.create') }}">New Exhibit</a>
            </div>
        @endcan
    </div>
{{-- </x-base-layout> --}}
