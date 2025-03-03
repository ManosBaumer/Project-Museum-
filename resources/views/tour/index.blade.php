


@foreach ($tours as $tour)
<div>
    <p class="">{{ $tour->name }}</p>
    <p class="">{{ $tour->image }}</p>
    <p class="">{{ $tour->amount }}</p>
</div>

{{-- edit button --}}
<div class="mt-8 text-center">
    <a href="{{ route('tours.edit') }}" class="inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
        Edit
    </a>
</div>

 {{-- delete button --}}
<div class="flex space-x-4">
    <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze tour wilt verwijderen?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
            Verwijder
        </button>
    </form>
</div>
@endforeach

 {{-- create button --}}
<div class="mt-8 text-center">
    <a href="{{ route('tours.create') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
        Maak een nieuwe tour
    </a>
</div>