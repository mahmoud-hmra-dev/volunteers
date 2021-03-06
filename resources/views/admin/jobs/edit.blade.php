@extends('layouts.admin')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.job.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.jobs.update", [$job->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.job.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $job->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="starting_date">starting_date</label>
                <input class="form-control {{ $errors->has('starting_date') ? 'is-invalid' : '' }}" type="date" name="starting_date" id="starting_date" value="{{ old('starting_date', $job->starting_date) }}" required>
                @if($errors->has('starting_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('starting_date') }}
                    </div>
                @endif
              
            </div>
            <div class="form-group">
                <label class="required" for="Expiry_date">Expiry_date</label>
                <input class="form-control {{ $errors->has('Expiry_date') ? 'is-invalid' : '' }}" type="date" name="Expiry_date" id="Expiry_date" value="{{ old('Expiry_date', $job->Expiry_date) }}" required>
                @if($errors->has('Expiry_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('Expiry_date') }}
                    </div>
                @endif
   
            </div>
            <div class="form-group">
                <label for="skills">{{ trans('cruds.job.fields.skills') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('skills') ? 'is-invalid' : '' }}" name="skills[]" id="skills" multiple>
                    @foreach($skills as $id => $skills)
                        <option value="{{ $id }}" {{ (in_array($id, old('skills', [])) || $job->skills->contains($id)) ? 'selected' : '' }}>{{ $skills }}</option>
                    @endforeach
                </select>
                @if($errors->has('skills'))
                    <div class="invalid-feedback">
                        {{ $errors->first('skills') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.skills_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.job.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $job->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image"> <br>
                <img src="{{ asset('image'.'/'.$job->image) }}" width="300px">
            </div>
            <div class="form-group">
                <label class="required" for="contact_email">description IMAGE</label>
                <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="text" name="contact_email" id="contact_email" value="{{ old('contact_email', $job->contact_email) }}" required>
                @if($errors->has('contact_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.contact_email_helper') }}</span>
            </div>
            <div class="form-group">
           
                <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control"  id="country-dropdown">
                <option value="">Select Country</option>
                @foreach ($countries as $country) 
                <option value="{{$country->id}}">
                {{$country->name}}
                </option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                <label for="state">City</label>
                <select class="form-control" id="state-dropdown" >
                </select>
                </div>   
                <input style="display: none" name="country" value="1" type="text" id="country">
                <input style="display: none" name="City" value="2" type="text"  id="City">
               
        </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $('#country-dropdown').on('change', function() {
    var country_id = this.value;
    $("#state-dropdown").html('');
    $.ajax({
    url:"{{url('get-states-by-country')}}",
    type: "POST",
    data: {
    country_id: country_id,
    _token: '{{csrf_token()}}' 
    },
    dataType : 'json',
    success: function(result){
    $('#state-dropdown').html('<option value="">Select State</option>'); 
    $.each(result.states,function(key,value){
    $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    $('#city-dropdown').html('<option value="">Select State First</option>'); 
    }
    });
    });    
    $('#state-dropdown').on('change', function() {
    var state_id = this.value;
    $("#city-dropdown").html('');
    $.ajax({
    url:"{{url('get-cities-by-state')}}",
    type: "POST",
    data: {
    state_id: state_id,
    _token: '{{csrf_token()}}' 
    },
    dataType : 'json',
    success: function(result){
    $('#city-dropdown').html('<option value="">Select City</option>'); 
    $.each(result.cities,function(key,value){
    $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    }
    });
    });
    });
    </script>
    <script>
        $(document).ready(function() {
        $('#country-dropdown').on('change', function() {
        var country_id = this.value;
        $("#state-dropdown").html('');
        $.ajax({
        url:"{{url('get-states-by-country')}}",
        type: "POST",
        data: {
        country_id: country_id,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $.each(result.states,function(key,value){
        $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
        });
        $('#city-dropdown').html('<option value="">Select State First</option>'); 
        }
        });
        });    
        $('#state-dropdown').on('change', function() {
        var state_id = this.value;
        $("#city-dropdown").html('');
        $.ajax({
        url:"{{url('get-cities-by-state')}}",
        type: "POST",
        data: {
        state_id: state_id,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $.each(result.cities,function(key,value){
        $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
        });
        }
        });
        });
        });

        document.getElementById("country-dropdown").onclick = function() {
            var ddlViewBy = document.getElementById('country-dropdown');
        var textcountry = ddlViewBy.options[ddlViewBy.selectedIndex].text;
     
   
        document.getElementById('country').value = textcountry
   


        };
        document.getElementById("state-dropdown").onclick = function() {
  
        var ddlViewBy = document.getElementById('state-dropdown');
        var textCity = ddlViewBy.options[ddlViewBy.selectedIndex].text;
      
      
        document.getElementById('City').value = textCity
     };
        </script>

@endsection