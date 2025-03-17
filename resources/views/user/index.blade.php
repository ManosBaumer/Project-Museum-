@include('layouts.nav')
<body style="background-color: #232630; color: #ffffff; font-family: Arial, sans-serif; ">
    


<div class="container" style="padding: 50px;">
    <h2>Users List</h2>
    
    
    

    <a href="{{ route('Users.create') }}" class="btn btn-primary mb-3">Add New Users</a>


    @if ($users->isEmpty())
        <p>There are no users added.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Is Admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin }}</td>
                    
                    <td>
                           
                        <a href="{{ route('Users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-info">Edit</a>
                        

                       
                        <form action="{{ route('Users.delete', ['user' => $user->id]) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure that you want to delete the user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
