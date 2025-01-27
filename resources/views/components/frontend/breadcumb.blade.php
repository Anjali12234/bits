@props([
    'image',
    'heading',
    
])


<div class="breadcumb-wrapper " data-bg-src="{{$image}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{$heading}}</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>{{$heading}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>