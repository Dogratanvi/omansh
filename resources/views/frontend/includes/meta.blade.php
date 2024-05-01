@php
if(!isset($meta_page_type)){
$meta_page_type = 'home';
}
@endphp

@switch($meta_page_type)
@case('home')

<meta name="title" content="{{ config('meta.home.title') }}">
<meta name="description" content="{{ config('meta.home.description')  }}">
<meta name="keyword" content="{{config('meta.home.keywords')  }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="{{ config('meta.home.facebook.title') }}" />
<meta property="og:site_name" content="{{ config('meta.home.facebook.site_name')  }}" />
<meta property="og:description" content="{{  config('meta.home.facebook.description') }}" />
<meta property="og:image" content="{{  config('meta.home.facebook.image_name') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<!-- Twitter Meta -->
{{-- <meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ setting('meta_twitter_site') }}">
<meta name="twitter:url" content="{{url()->full()}}" />
<meta name="twitter:creator" content="{{ setting('meta_twitter_creator') }}">
<meta name="twitter:title" content="@yield('title') | {{ config('app.name') }}">
<meta name="twitter:description" content="{{ setting('meta_description') }}">
<meta name="twitter:image" content="{{ asset(setting('meta_image')) }}"> --}}

<!--canonical link-->
<link type="text/plain" rel="author" href="{{asset('humans.txt')}}" />
<meta name="generator" content="Specialized women&#039;s health services, physiotherapy, &amp; rejuvenating yoga sessions at Omansh Health &amp; Fitness." />
<link rel="canonical" href="{{url()->full()}}">
@break

@case('about_us')
{{-- Facebook Meta --}}
<meta property="og:type" content="article" />
<meta property="article:published_time" content="{{$$module_name_singular->published_at}}" />
<meta property="article:modified_time" content="{{$$module_name_singular->updated_at}}" />
<meta property="article:author" content="{{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}" />
<meta property="article:section" content="{{$$module_name_singular->category_name}}" />
@foreach ($$module_name_singular->tags as $tag)
<meta property="article:tag" content="{{$tag->name}}" />
@endforeach

@break

@case('service')
<meta property="og:type" content="profile" />
<meta property="profile:first_name" content="{{$$module_name_singular->first_name}}" />
<meta property="profile:last_name" content="{{$$module_name_singular->last_name}}" />
<meta property="profile:username" content="{{$$module_name_singular->email}}" />
<meta property="profile:gender" content="{{$$module_name_singular->gender}}" />
@break

@case('blog')
<meta property="og:type" content="profile" />
<meta property="profile:first_name" content="{{$$module_name_singular->first_name}}" />
<meta property="profile:last_name" content="{{$$module_name_singular->last_name}}" />
<meta property="profile:username" content="{{$$module_name_singular->email}}" />
<meta property="profile:gender" content="{{$$module_name_singular->gender}}" />
@break


@default

@endswitch

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="@yield('title') | {{ config('app.name') }}" />
<meta property="og:site_name" content="{{setting('meta_site_name')}}" />
<meta property="og:description" content="{{ setting('meta_description') }}" />
<meta property="og:image" content="{{ asset(setting('meta_image')) }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<!-- Twitter Meta -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ setting('meta_twitter_site') }}">
<meta name="twitter:url" content="{{url()->full()}}" />
<meta name="twitter:creator" content="{{ setting('meta_twitter_creator') }}">
<meta name="twitter:title" content="@yield('title') | {{ config('app.name') }}">
<meta name="twitter:description" content="{{ setting('meta_description') }}">
<meta name="twitter:image" content="{{ asset(setting('meta_image')) }}">

<!--canonical link-->
<link type="text/plain" rel="author" href="{{asset('humans.txt')}}" />
<meta name="generator" content="Avaso Tech - A CMS like modular Avaso Tech project." />
<link rel="canonical" href="{{url()->full()}}">
