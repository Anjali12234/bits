@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Slider</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Slider
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.slider.create') }}" role="button">
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
            <form method="post" action="{{ route('admin.slider.update', $slider) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title1">Title1</label>

                        <input class="form-control" id="title1" name="title1" type="text"
                            value="{{ old('title1',$slider->title1) }}" />
                        <span class="text-warning">
                            @error('title1')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title2">Title2</label>

                        <input class="form-control" id="title2" name="title2" type="text"
                            value="{{ old('title2',$slider->title2) }}" />
                        <span class="text-warning">
                            @error('title2')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <img src="{{ $slider?->image }}" height="100" width="100" alt="">

                        <input class="form-control" id="image" name="image" type="file"
                            value="{{ old('image', $slider?->image) }}" />
                        <span class="text-warning">
                            @error('image')
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
