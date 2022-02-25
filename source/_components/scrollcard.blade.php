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
      'Information architecture',
      'Digital product design',
      'Service design',
      'Web design',
      'UX + UI design',
      'User testing',
    ],
    'execution' =>[
      'Project management',
      'Frontend development',
      'Backend development',
      'Web development',
      'APIs',
      'Web3',
    ],
    'optimize' =>[
      'Design systems',
      'Design & engineering training',
      'Product operations & training',
      'Product analytics & data',
      'A/B testing & experimentation',
      'Hiring support',
    ],
    
  ];
  @endphp

<div class="js-scroll-card flex flex-shrink-0 h-screen w-screen items-center justify-center xl:justify-start {{ $colors[$color]['bg']}}">
  <div class="hidden xl:flex xl:w-1/3 h-full justify-center {{$color === 'red' ? 'items-end' : 'self-center'}}">
    <img class="{{$color === 'red' ? 'h-4/5' : 'h-full'}}" src="/assets/images/{{$img}}.svg"/>
  </div>
  <div class="px-6 py-10 md:py-0 md:px-8 xl:pl-48 w-full xl:w-2/3">
    <div class="mx-auto xl:mx-0 max-w-xl lg:max-w-3xl xl:max-w-4xl">
      <img class="mx-auto w-auto h-16 sm:hidden" src="/assets/images/{{$header}}.svg" alt="A stylized, geometric icon representing {{$header}}.">
      <p class="{{ $colors[$color]['text']}} uppercase l2 mt-4 sm:mt-0">{{$banner}}</p>
      <!-- Header -->
      <div class="flex items-center mt-1 sm:mt-4 gap-x-5" >
        <img class="hidden sm:inline w-auto h-16" src="/assets/images/{{$header}}.svg" alt="A stylized, geometric icon representing {{$header}}.">
        <h3 class="h2 sm:h1 capitalize">{{$header}}</h3>
      </div>
      <!-- Content -->
      <div class="mt-2 sm:mt-4">
        <p class="p1">
          <span class="font-bold {{ $colors[$color]['text']}}">
            {{$boldline}}
          </span>
            {{$content}}
        </p>
      </div>
      <!-- Services -->
      <ul class="mt-2 md:mt-4 lg:mt-6 grid grid-cols-1 md:grid-cols-2 gap-2 sm:gap-4 lg:gap-6 list-inside">
          @foreach ($services[$header] as $service)
            <li class="p4 md:p3 lg:p2 list-disc">{{$service}}</li>
          @endforeach
      </ul>
    </div>
  </div>
</div>