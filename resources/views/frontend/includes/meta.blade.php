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

@case('about')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.about.title') }}">
<meta name="description" content="{{ config('meta.about.description')  }}">
<meta name="keyword" content="{{config('meta.about.keywords')  }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="{{ config('meta.about.facebook.title') }}" />
<meta property="og:site_name" content="{{ config('meta.about.facebook.site_name')  }}" />
<meta property="og:description" content="{{  config('meta.about.facebook.description') }}" />
<meta property="og:image" content="{{  config('meta.about.facebook.image_name') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

@break

@case('service')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.service.title') }}">
<meta name="description" content="{{ config('meta.service.description')  }}">
<meta name="keyword" content="{{config('meta.service.keywords')  }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="{{ config('meta.service.facebook.title') }}" />
<meta property="og:site_name" content="{{ config('meta.service.facebook.site_name')  }}" />
<meta property="og:description" content="{{  config('meta.service.facebook.description') }}" />
<meta property="og:image" content="{{  config('meta.service.facebook.image_name') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
@break

@case('blog')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.blog.title') }}">
<meta name="description" content="{{ config('meta.blog.description')  }}">
<meta name="keyword" content="{{config('meta.blog.keywords')  }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="{{ config('meta.blog.facebook.title') }}" />
<meta property="og:site_name" content="{{ config('meta.blog.facebook.site_name')  }}" />
<meta property="og:description" content="{{  config('meta.blog.facebook.description') }}" />
<meta property="og:image" content="{{  config('meta.blog.facebook.image_name') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
@break

@case('contact')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.contact.title') }}">
<meta name="description" content="{{ config('meta.contact.description')  }}">
<meta name="keyword" content="{{config('meta.contact.keywords')  }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="{{ config('meta.contact.facebook.title') }}" />
<meta property="og:site_name" content="{{ config('meta.contact.facebook.site_name')  }}" />
<meta property="og:description" content="{{  config('meta.contact.facebook.description') }}" />
<meta property="og:image" content="{{  config('meta.contact.facebook.image_name') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
@break

@case('workshop')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.workshop.title') }}">
<meta name="description" content="{{ config('meta.workshop.description')  }}">
<meta name="keyword" content="{{config('meta.workshop.keywords')  }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{url()->full()}}" />
<meta property="og:title" content="{{ config('meta.workshop.facebook.title') }}" />
<meta property="og:site_name" content="{{ config('meta.workshop.facebook.site_name')  }}" />
<meta property="og:description" content="{{  config('meta.workshop.facebook.description') }}" />
<meta property="og:image" content="{{  config('meta.workshop.facebook.image_name') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
@break

@default

@endswitch


