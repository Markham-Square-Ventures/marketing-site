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
  ];

  $services = [
    'strategy' =>[
      'User & market research',
      'Competitive & gap analysis',
      'Product/service strategy',
      'Facilitated workshops',
      'Product roadmap',
      'Stakeholder alignment',
    ],
    'ideation' =>[
      'User & market research',
      'Competitive & gap analysis',
      'Product/service strategy',
      'Facilitated workshops',
      'Product roadmap',
      'Stakeholder alignment',
    ],
    'execution' =>[
      'User & market research',
      'Competitive & gap analysis',
      'Product/service strategy',
      'Facilitated workshops',
      'Product roadmap',
      'Stakeholder alignment',
    ],
    'optimize' =>[
      'User & market research',
      'Competitive & gap analysis',
      'Product/service strategy',
      'Facilitated workshops',
      'Product roadmap',
      'Stakeholder alignment',
    ],
    
  ];
  @endphp

<div class="flex flex-wrap flex-shrink-0 h-screen w-screen items-center {{ $colors[$color]['bg']}}">
  <div class="hidden lg:flex lg:w-1/3 h-full  justify-center {{$color === 'red' ? 'items-end' : 'self-center'}}">
    <img class="{{$color === 'red' ? 'h-4/5' : 'h-full'}}" src="/assets/images/{{$img}}.svg"/>
  </div>
  <div class="pl-24 lg:pl-48 w-full lg:w-2/3">
    <p class="{{ $colors[$color]['text']}} uppercase l2">{{$banner}}</p>
    <!-- Header -->
    <div class="flex items-center mt-4 gap-x-5" >
      <img class="w-16 h-16" src="/assets/images/{{$header}}.svg" alt="">
      <h3 class="h1 capitalize">{{$header}}</h3>
    </div>
    <!-- Content -->
    <div class="mt-5 max-w-[740px]">
      <p class="p1">
        <span class="font-black {{ $colors[$color]['text']}}">
          {{$boldline}}
        </span>
          {{$content}}
      </p>
    </div>
    <!-- Services -->
    <ol class="mt-5 max-w-[740px] grid grid-cols-2 grid-rows-3 list-inside	">
        @foreach ($services[$header] as $service)
          <li class="text-xl mt-3 list-disc">{{$service}}</li>
        @endforeach
    </ol>
  </div>
</div>