@include('layouts.nav')
<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif; ">
    


<div class="container" style="padding: 50px;">
    <div style="justify-content: center; align-items: center; display: flex;">
        
    <a href="{{ route('Users.create') }}" style="display: inline-block; padding: 12px 24px; background: linear-gradient(135deg, #007bff, #00d4ff); color: white; border-radius: 8px; text-decoration: none; font-weight: bold; transition: 0.3s;">
        ➕ Add New Users
    </a>
</div>

    <div class="flex items-center justify-between rounded-lg bg-gray-800 p-4">
        @if ($users->isEmpty())
        <p>There are no users added.</p>
    @else
    <table class="table table-striped bg-gray-800 text-white w-full rounded-lg">
        <thead class= "rounded-t-lg">   
             <tr>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">E-Mail</th>
                <th class="px-4 py-2">Is Admin</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="border-t border-gray-600">
                <td class="px-4 py-2">{{ $user->id }}</td>
                <td class="px-4 py-2">{{ $user->name }}</td>
                <td class="px-4 py-2">{{ $user->email }}</td>
                <td class="px-4 py-2">{{ $user->is_admin }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('Users.edit', ['user' => $user->id]) }}" style="display: inline-block; padding: 12px 24px; background: linear-gradient(135deg, #007bff, #00d4ff); color: white; border-radius: 8px; text-decoration: none; font-weight: bold; transition: 0.3s;">
                        Edit
                    </a>
                </td>
                <td class="px-4 py-2">
                    <form action="{{ route('Users.delete', ['user' => $user->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure that you want to delete the user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    @endif
    </div>
</div>
</body>
