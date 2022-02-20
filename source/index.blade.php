@extends('_layouts.main')

@section('body')
    <header class="bg-hero sm:shadow-secondary sm:m-6 lg:m-12 p-6 lg:p-12 pb-12 lg:pb-16">
        <x-navigation/>
        <div class="mt-12 lg:mt-24">
            <h1 class="h1 max-w-5xl">
                We help product teams craft <span class="text-orange-500">exceptional</span> digital experiences.
            </h1>
            <p class="p1 text-gray-800 mt-6">
                Markham Square is a digital studio that partners with organizations to reach strategic clarity, bring features & products to market, and refine their operations.
            </p>
        </div>
        <div class="mt-8 lg:mt-12">
            <x-button
                message="Let's talk"
                url="#contact"
            />
        </div>
    </header>

@endsection
