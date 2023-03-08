{{-- Alert errori --}}

{{-- @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif --}}

{{-- Form --}}
@if ($project->exists)
  <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" novalidate>
    @method('PUT')
  @else
    <form action="{{ route('admin.projects.store') }}" method="POST" novalidate>
@endif


  @csrf

  <div class="row">

    {{-- TITLE  --}}  
    <div class="col-6">
      <div class="my-4 w-75">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
        name="title" required value="{{ old('title', $project->title) }}">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @else
        <small class="text-muted">Enter title</small>
        @enderror
      </div>
    </div>

    {{-- URL  --}}
    <div class="col-6">
      <div class="my-4">
        <label for="url" class="form-label">Url</label>
        <input type="url" class="form-control @error('url') is-invalid @enderror" id="url"
        name="url" value="{{ old('url', $project->url) }}">
        @error('url')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @else
        <small class="text-muted">Enter Url</small>
        @enderror 
      </div>
    </div>

    {{-- DESCRIPTION  --}}
    <div class="col-12">
      <div class="mb-3 w-50">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="50" rows="8"
          class="form-control @error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
      </div>
    </div>

    {{-- IMAGE  --}}
    <div class="col-8">
      <div class="mb-5">
        <label for="image" class="form-label">image</label>
        <input type="url" class="form-control @error('image') is-invalid @enderror" id="image"
        name="image" value="{{ old('image', $project->image) }}">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @else
        <small class="text-muted">Enter image Url</small>
        @enderror 
      </div>
    </div>

    {{-- IMAGE PREVIEW --}}
    {{-- <div class="col-4">
      <div class="mb-5">
        <img src="{{ old('image', $project->image ?? 'https://marcolanci.it/utils/placeholder.jpg') }}" id="preview"
          alt="preview" class="img-fluid" width="100">
      </div>
    </div>
    --}}
  </div>

  <hr>
  <div class="d-flex justify-content-between">
    <a class="btn btn-secondary" href="{{route('admin.projects.index')}}">Indietro</a>
    <button type="submit" class="btn btn-success">Save</button>
  </div>
  
</form>
