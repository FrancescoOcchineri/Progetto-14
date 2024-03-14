@extends('layouts.template')

@section('content')

<div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">                    
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Coding Language</th>
                        <th scope="col">Environment</th>
                        <th scope="col">Team</th>
                        <th scope="col">Status</th>
                        <th scope="col">Budget</th>
                      </tr> 
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                      <tr>
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->language_id}}</td>
                        <td>{{$project->environment_id}}</td>
                        <td>{{$project->team_id}}</td>
                        <td>{{$project->status}}</td>
                        <td>{{$project->budget}}$</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection