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

<!--canonical link-->
<link type="text/plain" rel="author" href="{{asset('humans.txt')}}" />
<meta name="generator" content="Specialized women&#039;s health services, physiotherapy, &amp; rejuvenating yoga sessions at Omansh Health &amp; Fitness." />

@break

@case('about')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.about.title') }}">
<meta name="description" content="{{ config('meta.about.description')  }}">
<meta name="keyword" content="{{config('meta.about.keywords')  }}">



@break

@case('service')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.service.title') }}">
<meta name="description" content="{{ config('meta.service.description')  }}">
<meta name="keyword" content="{{config('meta.service.keywords')  }}">

@break

@case('blog')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.blog.title') }}">
<meta name="description" content="{{ config('meta.blog.description')  }}">
<meta name="keyword" content="{{config('meta.blog.keywords')  }}">


@break

@case('contact')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.contact.title') }}">
<meta name="description" content="{{ config('meta.contact.description')  }}">
<meta name="keyword" content="{{config('meta.contact.keywords')  }}">


@break

@case('workshop')
{{-- Facebook Meta --}}
<meta name="title" content="{{ config('meta.workshop.title') }}">
<meta name="description" content="{{ config('meta.workshop.description')  }}">
<meta name="keyword" content="{{config('meta.workshop.keywords')  }}">

@break

@case('yogaTraining')

<meta name="title" content="{{ config('meta.yogaTraining.title') }}">
<meta name="description" content="{{ config('meta.yogaTraining.description')  }}">
<meta name="keyword" content="{{config('meta.yogaTraining.keywords')  }}">

@break
@case('corporateTraining')

<meta name="title" content="{{ config('meta.corporateTraining.title') }}">
<meta name="description" content="{{ config('meta.corporateTraining.description')  }}">
<meta name="keyword" content="{{config('meta.corporateTraining.keywords')  }}">

@break
@case('pelvicPain')

<meta name="title" content="{{ config('meta.pelvicPain.title') }}">
<meta name="description" content="{{ config('meta.pelvicPain.description')  }}">
<meta name="keyword" content="{{config('meta.pelvicPain.keywords')  }}">

@break
@case('pregnancyPostpartum')

<meta name="title" content="{{ config('meta.pregnancyPostpartum.title') }}">
<meta name="description" content="{{ config('meta.pregnancyPostpartum.description')  }}">
<meta name="keyword" content="{{config('meta.pregnancyPostpartum.keywords')  }}">

@break
@case('exerciseProgramPilate')

<meta name="title" content="{{ config('meta.exerciseProgramPilate.title') }}">
<meta name="description" content="{{ config('meta.exerciseProgramPilate.description')  }}">
<meta name="keyword" content="{{config('meta.exerciseProgramPilate.keywords')  }}">

@break
@case('bowel')

<meta name="title" content="{{ config('meta.bowel.title') }}">
<meta name="description" content="{{ config('meta.bowel.description')  }}">
<meta name="keyword" content="{{config('meta.bowel.keywords')  }}">

@break
@case('bladderDysfunction')

<meta name="title" content="{{ config('meta.bladderDysfunction.title') }}">
<meta name="description" content="{{ config('meta.bladderDysfunction.description')  }}">
<meta name="keyword" content="{{config('meta.bladderDysfunction.keywords')  }}">

@break
@case('orthopedic')

<meta name="title" content="{{ config('meta.bladderDysfunction.title') }}">
<meta name="description" content="{{ config('meta.bladderDysfunction.description')  }}">
<meta name="keyword" content="{{config('meta.bladderDysfunction.keywords')  }}">

@break
@default

@endswitch


