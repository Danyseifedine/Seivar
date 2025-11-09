@props(['project'])

<div class="col-md-6 item ARCHITECTURE project-card">
    <div class="row wow fadeInLeft delay-0-1s">
        <a href="{{ route('project.show', $project) }}">
            @if($project->getMedia('images')->count() > 0)
                <img src="{{ $project->getMedia('images')->first()->getUrl() }}" alt="{{ $project->title }}" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;">
            @else
                <img src="{{ asset('assets/images/architecture-projects/hpr2-1.png') }}" alt="{{ $project->title }}" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;">
            @endif
        </a>
    </div>
    <div class="project-home3-content wow fadeInRight delay-0-1s project-title-hover">
        <a href="{{ route('project.show', $project) }}"><h4>{{ $project->title }}</h4></a>
    </div>
</div>
