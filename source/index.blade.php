@extends('_layouts.master')

@section('body')
@foreach ($posts as $post)
<div class="w-full mb-6">
    {{-- @if ($post->cover_image)
    <img src="{{ $post->cover_image }}" alt="{{ $post->title }} cover image" class="mb-6">
    @endif --}}

    <p class="text-gray-700 font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a href="{{ $post->getUrl() }}" title="Read {{ $post->title }}" class="text-gray-900 font-extrabold">
            {{ $post->title }}
        </a>
    </h2>

    <p class="mt-0 mb-4">{!! $post->getExcerpt() !!}</p>

    <a href="{{ $post->getUrl() }}" title="Read - {{ $post->title }}" class="uppercase tracking-wide mb-4">
        Read
    </a>
</div>

@if (! $loop->last)
<hr class="border-b my-6">
@endif
@endforeach

{{-- @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
<div class="flex flex-col md:flex-row md:-mx-6">
    @foreach ($row as $post)
    <div class="w-full md:w-1/2 md:mx-6">
        @include('_components.post-preview-inline')
    </div>

    @if (! $loop->last)
    <hr class="block md:hidden w-full border-b mt-2 mb-6">
    @endif
    @endforeach
</div>

@if (! $loop->last)
<hr class="w-full border-b mt-2 mb-6">
@endif
@endforeach --}}

@include('_components.newsletter-signup')

@stop
