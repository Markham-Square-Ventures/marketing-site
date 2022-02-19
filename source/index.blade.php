@extends('_layouts.main')

@section('body')
    <header class="home-header">
        <x-navigation/>
        <div class="mt-24 mb-12 space-y-6">
            <h1 class="font-black text-6xl">
                We help product teams craft<br/> <span class="text-orange-500">exceptional</span> digital experiences.
            </h1>
            <p class="text-base font-medium">
                Markham Square is a digital studio that partners with organizations to reach strategic clarity, bring features & products to market, and refine their operations.
            </p>
        </div>
        <x-button message="Let's Talk" url="#contact" />
    </header>

@endsection
