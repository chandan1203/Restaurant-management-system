@extends('layouts.app')

@section('title','Contact')
	
@push('css')

@endpush

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ $contact->subject}}</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <strong>Name : {{ $contact->name}}</strong><br>
                      <b>Email: {{ $contact->email}}</b><br><br>
                      <strong>Message: </strong><hr>
                      <p>{{ $contact->message}}</p><hr>
                    </div>
                  </div>
                  <a href="{{ route('contact.index') }}" class="btn btn-primary">Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
@push('scripts')
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}

@endpush
