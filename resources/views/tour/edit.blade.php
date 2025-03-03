

<form action="/tours/update/{{$tour->id}}" method="post" class="">
    @csrf

    <div class="mb-4">
        <label for="name" class="">Naam</label>
        <input type="text" name="name" id="name" value="{{$tour->name}}" class="">
    </div>

    {{-- <div class="mb-4">
        <label for="image" class="">Image</label>
        <input type="text" name="image" id="image" value="{{$tour->image}}" class="">
    </div> --}}

    <div class="mb-4">
        <label for="amount" class="">Aantal</label>
        <input type="text" name="amount" id="amount" value="{{$tour->amount}}" class="">
    </div>

    <button type="submit" class="w-full py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
        Bewerken
    </button>
</form>