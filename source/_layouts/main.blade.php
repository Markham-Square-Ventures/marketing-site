<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
    <body class="text-gray-900 font-sans antialiased selection:bg-orange-500 selection:text-white">
        @yield('body')
    </body>

<script>
    let scrollSpeed = 30;
    let scroller = document.querySelector(".scrolling-wrapper");
    console.log(scroller)
    scroller.addEventListener("mousewheel", e=>{
    // block if e.deltaY==0
    if( !e.deltaY ) return;
    // Set scrollDirection (-1 = up // 1 = down)
    let scrollDirection = (e.deltaY > 0) ? 1 : -1;
    // convert vertical scroll into horizontal
    scroller.scrollLeft += scrollSpeed * scrollDirection;
    let scrollLeft = Math.round(scroller.scrollLeft);
    // calculate box total vertical scroll 
    let maxScrollLeft = Math.round( scroller.scrollWidth - scroller.clientWidth );
    // if element scroll has not finished scrolling
    // prevent window to scroll
    if( 
        (scrollDirection === -1  && scrollLeft > 0) ||
        (scrollDirection === 1 && scrollLeft < maxScrollLeft ) 
    ) e.preventDefault()
    // done!
    return true;
    }, false);
</script>



</html>
