


<form action="{{ route('Tours.store')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="mb-4">
        <label for="name" class="">Naam</label>
        <input type="text" name="name" id="name" class="">
    </div>

    <div class="mb-4">
        <label for="image" class="">Image(Optional)</label>
        <input type="file" name="image" id="image" class="">
    </div>

    <div class="mb-4">
        <label for="amount" class="">Aantal</label>
        <input type="text" name="amount" id="amount" class="">
    </div>

    <div>
        <label for="exhibit" class="">Exhibits</label>
        @foreach ($exhibits as $exhibit)
        <li>
            <label for="exhibit" class="">{{ $exhibit->title }}</label>
            <input type="checkbox" name="exhibit" value="{{$exhibit->id}}" id="exhibit" class="">
        </li>
        @endforeach
    </div>

    <button type="submit" class="w-full py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
        Toevoegen
    </button>

    </form>