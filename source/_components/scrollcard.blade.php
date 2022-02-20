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
<div class="section bg-{{$color}}-50 h-[717px] w-full px-26 grid grid-cols-2">
  <div>
    <img src="/assets/images/{{$img}}.svg"/>
  </div>
  <div>
    <p class="text-{{$color}}-500 uppercase l2">{{$banner}}</p>
    <!-- Header -->
    <div>
      <img class="w-16 h-16" src="/assets/images/{{$header}}.svg" alt="">
      <h3 class="h1 capitalize">{{$header}}</h3>
    </div>
  </div>

</div>