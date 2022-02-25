@extends('_layouts.main')

<x-seo 
  title="Thank you | Markham Square" 
  description="Thank you for reaching out to Markahm Square, you'll be hearing from us soon!"
></x-seo>

@section('body')
    <header class="bg-hero sm:shadow-secondary sm:m-6 lg:m-12 pt-12 pb-16 px-6 lg:p-12 lg:pt-16 xl:pb-24">
        <x-navigation/>
        <div class="mt-8 sm:mt-12 lg:mt-24 max-w-5xl">
            <h1 class="font-black text-7xl md:text-9xl lg:text-10xl leading-full">
                Thank you!
            </h1>
            <p class="p1 text-gray-800 mt-4 md:mt-6">
              We’re excited to hear about your project and we'll be in touch soon.
            </p>
        </div>
        <div class="mt-8 md:mt-12 xl:mt-16">
            <x-button
                message="Return home"
                url="/"
            />
        </div>
    </header>
@endsection