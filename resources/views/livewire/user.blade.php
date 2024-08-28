<div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th></th>
          </tr>
        </thead>
        <tbody>   
      
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->address }}</td>
              <td>
                {{-- <a href="{{ route('users.edit',   
       $user->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                {{-- <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn   
       btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button> --}}
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
