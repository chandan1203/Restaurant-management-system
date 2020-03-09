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
                  <h4 class="card-title ">Add new Item</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('item.update',$item->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category</label>
                          <select name="category" class="form-control" id="">
                            <option >Select the Category</option>
                            @foreach ($categories as $category)
                              <option {{ $category->id == $item->category->id ? 'selected': ''}} value="{{ $category->id}}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                          
                        </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $item->name}}">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $item->description}}</textarea>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="number" class="form-control" name="price" value="{{ $item->price}}">
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                        <label class="bmd-label-floating">Image</label>
                       <input type="file" name="image">
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
                  <a href="{{ route('item.index') }}" class="btn btn-danger">Back</a>
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