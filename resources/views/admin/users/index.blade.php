@extends('layouts.admin')




@section('content')

<h1>users</h1>

    <table class="table">
        <thead>
        <tr>
           <th>id</th>
            <th>Photo</th>
            <th>name</th>
            <th>email</th>
            <th>Role</th>
            <th>status</th>
            <th>created</th>
            <th>updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
             <tr>
                <td>{{$user->id}}</td>
                 <td><img height="5px" src="/images/{{$user->photo ? $user->photo->file :'no user photo'}}" ></td>
                 <td><a href="{{route('admin.users.edit',$user->id)}}" >{{$user->name}}</a></td>
                 <td>{{$user->email}}</td>
                 <td>{{$user->role ? $user->role->name : 'user has no role'}}</td>
                 <td>{{$user->is_active==1 ? 'Active':'not Active'}}</td>
                 <td>{{$user->created_at}}</td>
                 <td>{{$user->updated_at}}</td>
        </tbody>
        @endforeach
        @endif

    </table>

@stop