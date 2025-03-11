<form action="{{ route('Users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-Mail</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
    </div>

    <div class="mb-3">
        <label for="is_admin" class="form-label">Is Admin</label>
        <select class="form-control" id="is_admin" name="is_admin">
            <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>No</option>
            <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Yes</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
