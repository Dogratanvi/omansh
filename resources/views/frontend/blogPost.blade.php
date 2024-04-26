@extends('frontend.layouts.app')

@section('title') {{$blogs->title}} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 body-font px-20">
    <div class="container mx-auto flex px-5 py-8 sm:py-16 md:flex-row flex-col items-center">
        <div class="lg:flex-grow sm:w-4/12 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="sm:text-4xl text-3xl mb-4 font-medium text-gray-800">
                {{$blogs->title}}
            </h1>
            @if($blogs->intro != "")
            <p class="mb-8 leading-relaxed">
                {{$blogs->intro}}
            </p>
            @endif
        </div>
        <div class="sm:w-8/12">
            <img class="object-cover object-center rounded shadow-md" alt="{{$blogs->title}}" src="{{$blogs->featured_image}}">
        </div>
    </div>
</section>

<section class="py-10 px-20">
    <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col">
        <div class="flex flex-col lg:flex-grow sm:w-8/12 sm:pr-8">
            <div class="pb-5">
                <p>
                    {!!$blogs->content!!}
                </p>
            </div>

            <hr>

            <div class="py-5">
                <div class="flex justify-between font-bold">
                    <div>
                        {{__('Written by')}}: {{$blogs->author}}
                    </div>
                    <div>
                        {{__('Published at')}}: {{$blogs->published_at}}
                    </div>
                </div>
            </div>

            <hr  />
            <div class="py-10 px-20">
                <h4>Display Comments</h4>
                @include('frontend.block.comments', ['comments' => $blogs->comments, 'blog_id' => $blogs->id])
            <hr />
                
                    <h4>Add comment</h4>
                    <form method="post" action="{{ url('comments') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="blog_id" value="{{ $blogs->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment" />
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push ("after-style")

@endpush

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush