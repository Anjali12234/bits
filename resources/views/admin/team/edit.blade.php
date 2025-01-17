@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Team</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Team
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.team.index') }}" role="button">
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
            <form method="post" action="{{ route('admin.team.update', $team) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="name">Name <span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="name" name="name" type="text"
                            value="{{ old('name', $team->name) }}" />
                        <span class="text-warning">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image<span style="color: red; margin-left: 5px;">*</span></label>
                        <img src="{{$team->image}}" height="100" width="100" alt="">

                        <input type="file" name="image" id="image" class="form-control">
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="post">Post<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="post" name="post" type="text"
                            value="{{ old('post', $team->post) }}" />
                        <span class="text-warning">
                            @error('post')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="experience">Experience<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="experience" name="experience" type="text"
                            value="{{ old('experience', $team->experience) }}" />
                        <span class="text-warning">
                            @error('experience')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>

                        <input class="form-control" id="email" name="email" type="email"
                            value="{{ old('email', $team->email) }}" />
                        <span class="text-warning">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number</label>

                        <input class="form-control" id="phone" name="phone" type="number"
                            value="{{ old('phone', $team->phone) }}" />
                        <span class="text-warning">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fax">Fax Number</label>

                        <input class="form-control" id="fax" name="fax" type="text"
                            value="{{ old('fax', $team->fax) }}" />
                        <span class="text-warning">
                            @error('fax')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>

                        <input class="form-control" id="address" name="address" type="text"
                            value="{{ old('address', $team->address) }}" />
                        <span class="text-warning">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="position">Position</label>

                        <input class="form-control" id="position" name="position" type="number"
                            value="{{ old('position', $team->position) }}" />
                        <span class="text-warning">
                            @error('position')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Slug</label>

                        <input class="form-control" id="slug" name="slug" type="text"
                            value="{{ old('slug', $team->slug) }}" />
                        <span class="text-warning">
                            @error('slug')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>



                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label for="facebook_url">Facebook Url</label>
                        <input class="form-control" id="facebook_url" name="facebook_url" type="text"
                            value="{{ old('facebook_url', $team->facebook_url) }}" />
                        <span class="text-warning">
                            @error('facebook_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="twitter_url">Twitter Url</label>
                        <input class="form-control" id="twitter_url" name="twitter_url" type="text"
                            value="{{ old('twitter_url', $team->twitter_url) }}" />
                        <span class="text-warning">
                            @error('twitter_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="youtube_url">Youtube Url</label>
                        <input class="form-control" id="youtube_url" name="youtube_url" type="text"
                            value="{{ old('youtube_url', $team->youtube_url) }}" />
                        <span class="text-warning">
                            @error('youtube_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="portfolio_url">Portfolio Url</label>
                        <input class="form-control" id="portfolio_url" name="portfolio_url" type="text"
                            value="{{ old('portfolio_url', $team->portfolio_url) }}" />
                        <span class="text-warning">
                            @error('portfolio_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="instagram_url">Instagram Url</label>
                        <input class="form-control" id="instagram_url" name="instagram_url" type="text"
                            value="{{ old('instagram_url', $team->instagram_url) }}" />
                        <span class="text-warning">
                            @error('instagram_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Description<span style="color: red; margin-left: 5px;">*</span></label>
                        <textarea name="description" id="editor" cols="50" rows="10">{{ old('description', $team->description) }}</textarea>
                        <span class="text-warning">
                            @error('description')
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
