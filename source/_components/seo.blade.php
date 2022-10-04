@push('meta')
    <!-- /* The essentials */ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <meta name="description" content="{{$description}}">

    <!-- /* Open Graph tags for FB & Twitter */ --->
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.markhamsq.com">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="{{$description}}">
    <meta property="og:image" content="/assets/images/seo-image.png">
    <meta property="og:image:alt" content="The Markham Square logo on top of interlocking orange chevrons.">

    <!-- /* Twitter Large Image Summary Card */ -->
    <meta name="twitter:card" content="/assets/images/seo-image.png">
    <meta name="twitter:site" content="@team_markhamsq">
    <meta name="twitter:creator" content="@team_markhamsq">
    <!-- /* Optional */ -->
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$description}}">
@endpush