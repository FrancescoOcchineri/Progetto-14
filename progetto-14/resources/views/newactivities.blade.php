@extends('layouts.template')

@section('content')

<h1 class="text-center mt-5">Create your new activity</h1>

<div class="d-flex justify-content-center" style="margin-top: 5rem;">
<form method="post" action="/activities" style="width: 50%;">
  @csrf
  <div class="row mb-4">
      <div data-mdb-input-init class="form-outline mb-4">
        <input name="title" type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Title</label>
      </div>

      <div data-mdb-input-init class="form-outline mb-4">
    <textarea name="description" class="form-control" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Description</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
        <input name="start_date" type="date" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Start_date</label>
      </div>

      <div data-mdb-input-init class="form-outline mb-4">
        <input name="end_date" type="date" id="form6Example1" class="form-control" />
        <input name="progetto_id" type="hidden" id="form6Example1" class="form-control" value="{{$project_id}}" />
        <label class="form-label" for="form6Example1">End_date</label>
      </div>

</div>

  <button data-mdb-ripple-init type="submit" class="btn btn-dark btn-block mb-4">Create</button>
</form>
</div>

@endsection