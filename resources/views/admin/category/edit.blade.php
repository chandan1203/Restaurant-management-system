@extends('layouts.app')

@section('title','Create')
	
@push('css')

@endpush

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @include('layouts.partial.message')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add new Category</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $category->name}}">
                        </div>
                    </div>
                  </div>
                  <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                  <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@push('scripts')

@endpush