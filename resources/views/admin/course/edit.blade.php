@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Course</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Course
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.course.index') }}" role="button">
                            Back
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.course.update', $course) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">
                    
                    
                    <div class="form-group col-md-6">
                        <label for="course_name">Course Name<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="course_name" name="course_name" type="text"
                            value="{{ old('course_name',$course->course_name) }}" />
                        <span class="text-warning">
                            @error('course_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="duration">Duration</label>

                        <input class="form-control" id="duration" name="duration" type="text"
                            value="{{ old('duration',$course->duration) }}" />
                        <span class="text-warning">
                            @error('duration')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="start_date">Start Date</label>

                        <input class="form-control" id="start_date" name="start_date" type="date"
                            value="{{ old('start_date',$course->start_date) }}" />
                        <span class="text-warning">
                            @error('start_date')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="end_date">End Date</label>

                        <input class="form-control" id="end_date" name="end_date" type="date"
                            value="{{ old('end_date',$course->end_date) }}" />
                        <span class="text-warning">
                            @error('end_date')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    


                </div>
                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
