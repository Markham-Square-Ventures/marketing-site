@extends('_layouts.main')

@section('body')
  <header class="bg-hero sm:shadow-secondary sm:m-6 lg:m-12 pt-12 pb-16 px-6 lg:p-12 lg:pt-16">
      <x-navigation/>
      <div class="mt-12 lg:mt-24 mb-8 md:mb-12 xl:mb-16 max-w-5xl">
          <h1 class="font-black text-10xl leading-full">
              Contact
          </h1>
          <p class="p1 text-gray-800 mt-4 md:mt-8">
          We'd love to hear about your next big idea!
          </p>
      </div>
  </header>
  <x-contact />
  <x-footer/>
@endsection