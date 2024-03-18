@extends('layouts.template')

@section('content')

<h1 class="text-center mt-5">Projects</h1>
<div class="d-flex justify-content-center">
<table class="table table-hover" style="margin-top: 5rem; width: 80%">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Coding Language</th>
      <th scope="col">Environment</th>
      <th scope="col">Team</th>
      <th scope="col">Status</th>
      <th scope="col">Budget</th>
      <th scope="col">Delete</th>
      <th scope="col"><a href="/projects/create"<button type="button" class="btn btn-sm btn-light" data-mdb-ripple-init data-mdb-ripple-color="dark">Create</button></a></th>
    </tr>
  </thead>
  <tbody>
    @if($projects)
    @foreach($projects as $key => $project)
    <tr>
         <th scope="row">{{$key+1}}</th>
            <td><a href="projects/{{$project->id}}">{{$project->title}}</a></td>
            <td>{{$project->languages->name}}</td>
            <td>{{$project->ambientes->name}}</td>
            <td>{{$project->users->name}}</td>
            <td class="@if($project->status === 'Cancelled') text-danger
                       @elseif($project->status === 'Pending') text-warning
                       @else text-success
                       @endif">
                {{$project->status}}
            </td>
      <td>{{$project->budget}}$</td>
      <td> <form method="post" action="/projects/{{$project->id}}">
                @csrf
                @method('DELETE')
                <a><button type="submit" class="btn btn-sm btn-danger" data-mdb-ripple-init data-mdb-ripple-color="dark">Delete</button></a>
              </form></td>
    </tr>
    @endforeach
    @else
    <h3>There are no projects!<h3>
    @endif
  </tbody>
</table>
</div>

@endsection