

<form action="{{ route('Tours.update', $tour->id) }}" method="post" class="">
    @csrf

    <div class="mb-4">
        <label for="name" class="">Naam</label>
        <input type="text" name="name" id="name" value="{{$tour->name}}" class="">
    </div>

    @if($tour->multimedia->isNotEmpty() && $tour->multimedia->first()->image)
    <div>
        <label>Current Image:</label>
        <img src="{{ asset('storage/images/' . $tour->multimedia->first()->image) }}" alt="Current Image" width="150">
    </div>
@else
    <p>No image available for this tour.</p>
@endif

<!-- File input for updating the images -->
    <div>
        <label for="image">Upload a new image (if any):</label>
        <input type="file" name="image" id="image" class="">
    </div>

    <div class="mb-4">
        <label for="amount" class="">Aantal</label>
        <input type="text" name="amount" id="amount" value="{{$tour->amount}}" class="">
    </div>

    <button type="submit" class="w-full py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
        Bewerken
    </button>
</form>