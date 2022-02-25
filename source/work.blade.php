@php
  $values = [
    [
      'title' => 'Understand',
      'content' => 'Product development is hard, and it’s even harder when everyone is on a different page. We start every project developing a deep understanding of your problem space so we can drive alignment from a shared foundation.',
    ],  
    [
      'title' => 'Generate',
      'content' => 'From a shared foundation, we scaffold a world of opportunities. Whether we’re designing, coding, or teaching, we develop a range of potential solutions so we can take the best path forward.',
    ],  
    [
      'title' => 'Deliver',
      'content' => 'Once you’re completely satisfied with the end result, our job is not complete unless your team is comfortable operating without us. We create robust written, visual, and video documentation to ensure you’re set up for long-term success.',
    ],  
    [
      'title' => 'Iterate',
      'content' => 'Products aren’t done once they’re launched. We implement a full suite of product analytics and can stand up A/B testing and experimentation infrastructure to identify the next iteration of your product.',
    ],  
    [
      'title' => 'Refine',
      'content' => 'A product can only be as good as the team building it. We leverage our years of experience working as product professionals to proactively identify and coach best practices and areas where your team can level up.',
    ],  
  ];
@endphp

@extends('_layouts.main')

<x-seo 
  title="Work | Markham Square" 
  description="Markham Square's process for delivering exceptional results, every time."
></x-seo>

@section('body')
  <header class="bg-hero sm:shadow-secondary sm:m-6 lg:m-12 pt-12 pb-16 px-6 lg:p-12 lg:pt-16">
      <x-navigation/>
      <div class="mt-12 lg:mt-24 mb-8 md:mb-12 xl:mb-16 max-w-5xl">
          <h1 class="font-black text-7xl md:text-9xl lg:text-10xl leading-full">
            Work
          </h1>
          <p class="p1 text-gray-800 mt-4 md:mt-6">
            Our process for delivering exceptional results, every time.
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
      header="One size doesn’t fit all"
      content="We don’t take a one size fits all approach. We select the techniques and activities that make the most sense for your business to create clarity, alignment, and results in the fastest time possible."
      signature=""
  />
  <!-- Values -->
  <section class="bg-orange-50 relative w-full py-16 md:py-32 px-6 sm:px-12 lg:px-24">
    <img src="../assets/images/values-bg.svg" alt="A background pattern of interlocking orange squares." class="hidden lg:block absolute top-0 right-0 z-0"/>
    <h3 class="h2">Our Process</h3>
    <p class="max-w-3xl p1 mt-4 text-gray-800">This isn’t our first rodeo. We’ve honed our process over years of delivering product results. </p>
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
  <x-footer/>
@endsection