@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')

@if (session('Adduser'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('Adduser') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="{{ route('demande.store') }}" method="post">
            @csrf


                <div class="card-header">creation de demande d'absence</div>

                <div class="card-body">
                <table class="table table-hover">
                
	            <div class="panel-body">
	             
 
                <div class="form-group">
                <label for="teacher_name">Teacher name *</label>
                <select class="form-control" name="teacher_name" value="{{ old('teacher_name') }}"  type="text"  id="teacher_name"  />
            @foreach ($teacher as $teacher)
            <option value="{{ $teacher->id}}" >
            {{$teacher->name}}</option>
            @endforeach
            </section>
            <br><br>
            </div>

                    <div class="form-group">
                    <label for="modul_name">Modul name *</label>
                    <input class="form-control" name="modul_name" placeholder="Modul name" value="{{ old('modul_name') }}" type="text"  id="modul_name"  />
                    @error('modul_name')<div class="text-danger">{{ $message }}</div> @enderror
                </div>

               
					<div class="form-group">
	                    <label for="date_absence">date_absence *</label>
	                    <input class="form-control" name="date_absence" placeholder="Date absence" type="date" value="{{ old('date_absence') }}" id="date_absence"  />
                        @error('date_absence')<div class="text-danger">{{ $message }}</div> @enderror
	                </div>

	              
                    <div class="form-group">
                    <label for="reason_of_absence">Reason of absence *</label>
                    <input class="form-control" name="reason_of_absence" placeholder="reason" type="text" value="{{ old('reason_of_absence') }}" id="reason_of_absence"  />
                    @error('reason_of_absence')<div class="text-danger">{{ $message }}</div> @enderror
                </div>


                     


	                <div class="form-group">
	                    <input name="submit" type="submit" class="btn btn-primary" value="Inserer" />
	                    <input name="cancel" type="reset" class="btn btn-default" value="Cancel" />
	                </div>
	                
	            </div>
	        </div>
  </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
