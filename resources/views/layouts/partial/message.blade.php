                @if ($errors->any())
                 @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                      <span>{{ $error }}</span>
                    </div>

                  @endforeach
                @endif



@if (session('successMsg'))
                {{-- expr --}}
             
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
      </button>
      <span>{{ session('successMsg') }}</span>
    </div>
@endif