@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.job.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.id') }}
                        </th>
                        <td>
                            {{ $job->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.title') }}
                        </th>
                        <td>
                            {{ $job->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.skills') }}
                        </th>
                        <td>
                            @foreach($job->skills as $key => $skills)
                                <span class="label label-info">{{ $skills->name }}</span> /
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.description') }}
                        </th>
                        <td>
                            {{ $job->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                         image  
                        </th>
                        <td>
                            <img src="{{ asset('image'.'/'.$job->image) }}" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>
                         image  description 
                        </th>
                        <td>
                            {{ $job->contact_email }}
                        </td>

                    
                    </tr>
                    <tr>
                        <th>country and  City</th>
                        <td>{{ $job->country ?? '' }}/ {{ $job->City ?? '' }}</td>
                    </tr>
                    <tr>
                        <th>starting_date and  Expiry_date</th>
                        <td>{{ $job->starting_date ?? '' }}/ {{ $job->Expiry_date ?? '' }}</td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection