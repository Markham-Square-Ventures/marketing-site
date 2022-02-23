<!-- 
  Scroll Card Component
  - Receives the following props
  Right Side
    1. banner (str)
    2. header_icon (svg)
    3. header (str)
    4. body (str)
    5. services (arr of str)
  General
    1. color
 -->
 @php

  $colors = [
    'red' => [
      'text' => 'text-red-500',
      'bg'=> 'bg-red-50',
    ],
    'blue' => [
      'text' => 'text-blue-500',
      'bg'=> 'bg-blue-50',
    ],
    'green' => [
      'text' => 'text-green-500',
      'bg'=> 'bg-green-50',
    ],
    'purple' => [
      'text' => 'text-purple-500',
      'bg'=> 'bg-purple-50',
    ],

  ]
@endphp

<div class="flex flex-shrink-0 h-screen w-screen items-center {{ $colors[$color]['bg']}}">
  <div class="w-1/3 h-full flex justify-center {{$color === 'red' ? 'items-end' : 'self-center'}}">
    <img class="{{$color === 'red' ? 'h-4/5' : 'h-full'}}" src="/assets/images/{{$img}}.svg"/>
  </div>
  <div class="pl-48 w-2/3">
    <p class="{{ $colors[$color]['text']}} uppercase l2">{{$banner}}</p>
    <!-- Header -->
    <div class="flex items-baseline" >
      <img class="w-16 h-16" src="/assets/images/{{$header}}.svg" alt="">
      <h3 class="h1 capitalize">{{$header}}</h3>
    </div>
  </div>
</div>