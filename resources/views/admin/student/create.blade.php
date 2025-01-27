@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Student</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Student
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.student.index') }}" role="button">
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
            <form method="post" action="{{ route('admin.student.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="name">Full Name <span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="name" name="name" type="text"
                            value="{{ old('name') }}" />
                        <span class="text-warning">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image<span style="color: red; margin-left: 5px;">*</span></label>

                        <input type="file" name="image" id="image" class="form-control">
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Course Name</label>
                        <select class="custom-select2 form-control" name="course[]" multiple style="width: 100%; height: 38px">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">
                                    {{ $course->course_name }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('course')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="guardian_name">Guardian Name <span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="guardian_name" name="guardian_name" type="text"
                            value="{{ old('guardian_name') }}" />
                        <span class="text-warning">
                            @error('guardian_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>

                        <input class="form-control" id="email" name="email" type="email"
                            value="{{ old('email') }}" />
                        <span class="text-warning">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone_number">Phone Number</label>

                        <input class="form-control" id="phone_number" name="phone_number" type="number"
                            value="{{ old('phone_number') }}" />
                        <span class="text-warning">
                            @error('phone_number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>

                        <input class="form-control" id="address" name="address" type="text"
                            value="{{ old('address') }}" />
                        <span class="text-warning">
                            @error('address')
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
