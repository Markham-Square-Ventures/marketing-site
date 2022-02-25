---
title: About | Markham Square
description: Learn more about Markham Square
---

@php
  $values = [
    [
      'title' => 'Excellence in everything',
      'content' => 'Excellence doesn’t happen by accident. It must be earned moment to moment, with every decision. We set the bar high for all of our work so we consistently achieve the best results possible.',
    ],  
    [
      'title' => 'Communication unlocks collaboration',
      'content' => 'Nothing gets done when no one knows what to do. We push for clarity and alignment so we always have a solid foundation for effective collaboration.',
    ],  
    [
      'title' => 'Learn by doing',
      'content' => '“No battle plan survives first contact with the enemy.” We share our work early and often to get real, human feedback so we can learn what works best, and what doesn’t.',
    ],  
    [
      'title' => 'Showing is greater than telling',
      'content' => 'We value prototypes over specs, visuals over words, demos over emails because the tangible drives more understanding than the abstract.',
    ],  
    [
      'title' => 'Make the world better',
      'content' => 'We’re committed to collaborating with partners who are fighting for positive change. We’d rather go out of business than take on projects that harm the world.',
    ],  
  ];
  $reasons = [
    [
      'header' => 'Deep expertise',
      'body' => 'With over a decade of product design, development, and management experience, we know how to apply the best techniques at the right times to get you the results you need.',
      'icon' => "../assets/images/waves.svg",
      'icon_alt' => "Waves Icon"
    ],  
    [
      'header' => 'Multidisciplinary knowledge',
      'body' => 'From edtech and travel to professional sports and the metaverse, we’ve worked in dozens of  industries. We love to remix their best features to create novel experiences in new fields.',
      'icon' => "../assets/images/nodes.svg",
      'icon_alt' => "Graph of Nodes Icon"
    ],  
    [
      'header' => 'Remote first',
      'body' => 'We had Zoom accounts before 2020. While we’re 100% remote, we’re always looking to get together in Brooklyn or Houston—the first coffee is on us.',
      'icon' => "../assets/images/coffee.svg",
      'icon_alt' => "Cup of Coffee Icon"
    ],  
    
  ];
@endphp

@extends('_layouts.main')

<x-seo 
  title="About | Markham Square" 
  description="Markham Square is obsessed with crafting exceptional digital experiences."
></x-seo>

@section('body')
  <header class="bg-hero sm:shadow-secondary sm:m-6 lg:m-12 pt-12 pb-16 px-6 lg:p-12 lg:pt-16">
      <x-navigation/>
      <div class="mt-12 lg:mt-24 mb-8 md:mb-12 xl:mb-16 max-w-5xl">
          <h1 class="font-black text-7xl md:text-9xl lg:text-10xl leading-full">
              About
          </h1>
          <p class="p1 text-gray-800 mt-4 md:mt-6">
            We’re obsessed with crafting exceptional digital experiences.
          </p>
          <div class="mt-8 md:mt-12 xl:mt-16">
            <x-button
                message="Let's talk"
                url="/contact"
            />
        </div>
      </div>   
  </header>
  <x-callout
      header="Markham Square, where magic happens"
      content="Magic happens when teams work on exceptional products—fingers race, time flies, dreams materialize. It energizes people until they’re practically glowing. There's nothing else like it. So, we started Markham Square to make more of this magic with you."
      signature="true"
  />
  <!-- Values -->
  <section class="bg-orange-50 relative w-full py-16 md:py-32 px-6 sm:px-12 lg:px-24">
    <img src="../assets/images/values-bg.svg" alt="A background pattern of interlocking orange squares." class="hidden lg:block absolute top-0 right-0 z-0"/>
    <h3 class="h2">Our Values</h3>
    <p class="max-w-3xl p1 mt-4 text-gray-800">We bring our values to every project, free of charge. They’re our foundational framework that guides everything we do.</p>
    <div class="mt-16 space-y-12">     
      @foreach ($values as $value)
        <div class="flex flex-col md:flex-row max-w-4xl">
          <p class="text-orange-500 text-xl mb-4 md:mb-0 md:mr-4 md:mt-2">0{{$loop->index + 1}}</p>
          <div>
            <h3 class="h3 text-gray-900">{{$value['title']}}</h3>
            <p class="mt-2 col-start-2 p1	text-gray-800">{{$value['content']}}</p>
          </div>
        </div>  
      @endforeach
    </div>
  </section>
  <!-- Work With Us -->
  <section class="relative w-full py-16 md:py-32 px-6 sm:px-12 lg:px-24">
    <img src="../assets/images/why-bg.svg" alt="A background pattern of interlocking orange squares." class="hidden lg:block absolute bottom-0 right-0 z-0"/>
    <h3 class="h2">Why work with us</h3>
    <p class="max-w-3xl p1 mt-4 text-gray-800">We build strong, long-lasting partnerships with our clients to support them today, and tomorrow.</p>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-x-20 mt-12 max-w-7xl">
      @foreach ($reasons as $reason)
        <div>
          <img src="{{$reason['icon']}}" alt="{{$reason['icon_alt']}}" class="h-16 w-auto">
          <h3 class="h3 mt-6 text-gray-900">{{$reason['header']}}</h3>
          <p class="p1 mt-2 text-gray-800">{{$reason['body']}}</p>
        </div>
      @endforeach
    </div>
  </section>
  <x-footer/>
@endsection