@extends('layouts.master')

@php
    $images = $project->getMedia('images');
    $projectImage = $images->first()?->getUrl() ?? asset('assets/images/logos/logo.svg');
    $projectDescription = strip_tags($project->description);
@endphp

@section('seo')
    <x-seo
        :title="$project->title . ' - Seivar'"
        :description="$projectDescription"
        :image="$projectImage"
        type="article"
        :published-time="$project->created_at?->toIso8601String()"
        :modified-time="$project->updated_at?->toIso8601String()"
    />
@endsection

@section('content')
<!-- Projects Area start -->
<section class="project-details py-128 black-100-bg">
    <div class="container">
        <div class="row mt-96">
            <div class="col-xl-8">
                <h4 class="mb-16 text-left">{{ $project->title }}</h4>
            </div>
        </div>

        @php
            $imageCount = $images->count();
        @endphp

        @if($imageCount == 0)
            <!-- No images - show placeholder -->
            <div class="row mt-16 full-img">
                <img src="{{ asset('assets/images/project-details/details-5.png') }}" alt="project" class="w-100 mb-4">
            </div>
            <div class="row gap-30 project-active justify-content-center">
                <div class="col-6 col-md-4 col-lg-2 item mb-4">
                    <img src="{{ asset('assets/images/project-details/details-6.png') }}" alt="project" class="img-fluid">
                </div>
                <div class="col-6 col-md-4 col-lg-2 item mb-4">
                    <img src="{{ asset('assets/images/project-details/details-7.png') }}" alt="project" class="img-fluid">
                </div>
                <div class="col-6 col-md-4 col-lg-2 item mb-4">
                    <img src="{{ asset('assets/images/project-details/details-8.png') }}" alt="project" class="img-fluid">
                </div>
                <div class="col-6 col-md-4 col-lg-2 item mb-4">
                    <img src="{{ asset('assets/images/project-details/details-9.png') }}" alt="project" class="img-fluid">
                </div>
                <div class="col-6 col-md-4 col-lg-2 item mb-4">
                    <img src="{{ asset('assets/images/project-details/details-10.png') }}" alt="project" class="img-fluid">
                </div>
            </div>

        @elseif($imageCount == 1)
            <!-- 1 Image - Full width hero -->
            <div class="row mt-16 full-img">
                <img src="{{ $images->first()->getUrl() }}" alt="{{ $project->title }}" class="w-100 mb-4">
            </div>

        @elseif($imageCount == 2)
            <!-- 2 Images - Side by side -->
            <div class="row gap-30 project-active mt-16 justify-content-center">
                <div class="col-12 col-lg-6 item text-center mb-4">
                    <img src="{{ $images->first()->getUrl() }}" alt="{{ $project->title }} - Image 1" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;">
                </div>
                <div class="col-12 col-lg-6 item text-center mb-4">
                    <img src="{{ $images->skip(1)->first()->getUrl() }}" alt="{{ $project->title }} - Image 2" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;">
                </div>
            </div>

        @elseif($imageCount == 3)
            <!-- 3 Images - Hero + 2 below -->
            <div class="row mt-16 full-img">
                <img src="{{ $images->first()->getUrl() }}" alt="{{ $project->title }}" class="w-100 mb-4">
            </div>
            <div class="row gap-30 project-active justify-content-center">
                <div class="col-12 col-lg-6 item mb-4">
                    <img src="{{ $images->skip(1)->first()->getUrl() }}" alt="{{ $project->title }} - Image 2" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;">
                </div>
                <div class="col-12 col-lg-6 item mb-4">
                    <img src="{{ $images->skip(2)->first()->getUrl() }}" alt="{{ $project->title }} - Image 3" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;">
                </div>
            </div>

        @elseif($imageCount == 4)
            <!-- 4 Images - Hero + 3 below -->
            <div class="row mt-16 full-img">
                <img src="{{ $images->first()->getUrl() }}" alt="{{ $project->title }}" class="w-100 mb-4">
            </div>
            <div class="row gap-30 project-active justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 item mb-4">
                    <img src="{{ $images->skip(1)->first()->getUrl() }}" alt="{{ $project->title }} - Image 2" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-6 col-lg-4 item mb-4">
                    <img src="{{ $images->skip(2)->first()->getUrl() }}" alt="{{ $project->title }} - Image 3" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-6 col-lg-4 item mb-4">
                    <img src="{{ $images->skip(3)->first()->getUrl() }}" alt="{{ $project->title }} - Image 4" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;">
                </div>
            </div>

        @elseif($imageCount == 5)
            <!-- 5 Images - Hero + 4 grid below -->
            <div class="row mt-16 full-img">
                <img src="{{ $images->first()->getUrl() }}" alt="{{ $project->title }}" class="w-100 mb-4">
            </div>
            <div class="row gap-30 project-active justify-content-center">
                <div class="col-12 col-md-6 col-lg-3 item mb-4">
                    <img src="{{ $images->skip(1)->first()->getUrl() }}" alt="{{ $project->title }} - Image 2" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-6 col-lg-3 item mb-4">
                    <img src="{{ $images->skip(2)->first()->getUrl() }}" alt="{{ $project->title }} - Image 3" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-6 col-lg-3 item mb-4">
                    <img src="{{ $images->skip(3)->first()->getUrl() }}" alt="{{ $project->title }} - Image 4" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-6 col-lg-3 item mb-4">
                    <img src="{{ $images->skip(4)->first()->getUrl() }}" alt="{{ $project->title }} - Image 5" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
            </div>
        @endif

        <div class="row mt-96">
            <div class="col-xl-8">
                <div class="project-description">
                    {!! $project->description !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Projects Area end -->
@endsection
