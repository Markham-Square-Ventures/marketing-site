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
@if ($color === 'blue' || $color === 'green')
  <div class="scroll-card bg-{{$color}}-50 h-[717px] w-[1440px] w-full pr-26 grid grid-cols-2 items-center	">
@else
  <div class="scroll-card bg-{{$color}}-50 h-[717px] w-[1440px] w-full px-26 grid grid-cols-2 items-center	">
@endif
  <div class="w-[500px]"  >
    <img class="h-[600px]" src="/assets/images/{{$img}}.svg"/>
  </div>
  <div>
    <p class="text-{{$color}}-500 uppercase l2">{{$banner}}</p>
    <!-- Header -->
    <div class="flex items-baseline" >
      <img class="w-16 h-16" src="/assets/images/{{$header}}.svg" alt="">
      <h3 class="h1 capitalize">{{$header}}</h3>
    </div>
  </div>

</div>