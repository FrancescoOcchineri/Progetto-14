@extends('layouts.template')

@section('content')

<h1 class="text-center mt-5">Create your new project</h1>

<div class="d-flex justify-content-center" style="margin-top: 5rem;">
<form method="post" action="/projects" style="width: 50%;">
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
    <select name="language_id" class="form-select form-select" aria-label="Small select example">
        <option selected>Language</option>
        @foreach($languages as $language)
          <option value="{{ $language->id }}">{{ $language->name }}</option>
        @endforeach
    </select>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <select name="environment_id" class="form-select form-select" aria-label="Small select example">
        <option selected>Environment</option>
        @foreach($ambientes as $ambiente)
          <option value="{{ $ambiente->id }}">{{ $ambiente->name }}</option>
        @endforeach
    </select>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input name="budget" type="number" id="form6Example6" class="form-control" step="0.01" />
    <label class="form-label" for="form6Example6">Budget</label>
</div>
</div>

  <button data-mdb-ripple-init type="submit" class="btn btn-dark btn-block mb-4">Create</button>
</form>
</div>

@endsection