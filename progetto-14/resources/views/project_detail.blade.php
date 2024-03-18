@extends('layouts.template')

@section('content')

<h1 class="text-center mt-5">{{$project->title}}</h1>

<div class="d-flex justify-content-center" style="margin-top: 5rem;">
<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
      <div class="col-lg-3">
        <div class="card mb-4 py-4">
          <div class="card-body text-center">
            <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{$project->users->name}}</h5>
            <p class="text-muted mb-1">Created at: {{$project->created_at}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Project Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$project->title}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Description</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$project->description}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Coding Language</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$project->languages->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Environment</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$project->ambientes->name}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Budget</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$project->budget}}$</p>
              </div>
            </div>
          </div>
        </div>
        <h3 class="text-center my-5">Activity</h3>
        <a href="/activities/create?id={{$project->id}}"><button type="button" class="btn btn-sm btn-dark" data-mdb-ripple-init data-mdb-ripple-color="dark">Create</button></a>
        <div class="row">
        @if($attivitas)
        @foreach($attivitas as $attivita)
          <div class="@if($attivita->count() === 1) col-md-7 g-4
          @else col-md-6 g-4
          @endif">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <h4 class="mb-4"><span class="font-italic me-1">{{$attivita->title}}</h4>
              <div class="col-sm-3">
                <p class="mb-0 fw-bold">Description</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$attivita->description}}</p>
              </div>
              <div class="col-sm-3 mt-4">
                <p class="mb-0 fw-bold">Status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-">{{$attivita->status}}</p>
              </div>
              <div class="col-sm-3 mt-4">
                <p class="mb-0 fw-bold">Start Date</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-">{{$attivita->start_date}}</p>
              </div>
              <div class="col-sm-3 mt-4">
                <p class="mb-0 fw-bold">End Date</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-">{{$attivita->end_date}}</p>
              </div>
              <div class="d-flex">
              <form method="post" action="/activities/{{$attivita->id}}">
                @csrf
                @method('DELETE')
                <a><button type="submit" class="btn btn-sm btn-danger me-3">Delete</button></a>
              </form>  
              <a><button type="submit" class="btn btn-sm btn-warning" data-mdb-ripple-init data-mdb-ripple-color="dark">Edit</button></a>
              </div>
            </div>
            </div>
          </div>
          @endforeach
        @endif
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection