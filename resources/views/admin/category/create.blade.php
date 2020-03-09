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
                  <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                  </div>
                 {{--  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Slug</label>
                          <input type="text" class="form-control" name="sub_title">
                        </div>
                    </div>
                  </div> --}}
                  <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                  <button type="submit" class="btn btn-primary">Save</button>
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