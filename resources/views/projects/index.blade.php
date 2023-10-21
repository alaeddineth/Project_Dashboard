@extends('layouts.main')

@section('banner', $banner)

@section('content')
<div class="col-lg-8 post-list">
    @foreach($projects as $project)
        <div class="single-post d-flex flex-row">
            <div class="thumb">
                <!-- Add logic here to display project-related images or thumbnails if available -->
            </div>
            <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <a href="{{ route('projects.show', $project->id) }}"><h4>{{ $project->title }}</h4></a>
                        <h6>{{ $project->titre }}</h6>					
                    </div>
                </div>
                <p>
                    {{ $project->Description }}
                </p>
                <h5>Project Status: {{ $project->etat }}</h5>
                <!-- Add any other project-related details you want to display -->
            </div>
        </div>
    @endforeach
</div>	
@endsection