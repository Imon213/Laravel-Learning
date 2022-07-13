<table class="table table-striped table-hover text-center">
    <tr class="table-primary">
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>NID</th>
        <th>Address</th>
        <th>Type</th>
        <th>Status</th>
        <th colspan="2">Action</th>

    </tr>
   @foreach( $user->where('type','seller') as $item)
   
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->nid}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->type}}</td>
        <td>{{$item->status}}</td>
        <td><a class="btn btn-success" href="/details/{{$item->id}}">Details</a></td>
        <td><a class="btn btn-danger" href="/delete/{{$item->id}}">Delete</a></td></td>
    </tr>
   @endforeach
</table>