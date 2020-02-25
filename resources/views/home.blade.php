@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{'showform'}}" class="btn btn-success">Add Posts</a>
            <a href="{{'showPost'}}" class="btn btn-success">All Posts</a>
            <div class="card">
                <div class="card-header">You are logged in as</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @foreach ($users as $user)
                        <p>{{$user->id}}</p>
                        <p>{{$user->name}}</p>
                        <p>{{$user->email}}</p>
                        <p>{{$user->profile->phone}}</p>
                        <p>{{$user->profile->address}}</p>
                    </tbody>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
