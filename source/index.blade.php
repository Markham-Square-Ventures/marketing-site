@extends('_layouts.main')

@section('body')
    <header class="bg-hero sm:shadow-secondary sm:m-6 lg:m-12 p-6 lg:p-12 pb-12 lg:pb-16">
        <x-navigation/>
        <div class="mt-12 lg:mt-24 max-w-5xl">
            <h1 class="h1">
                We help product teams craft <span class="text-orange-500">exceptional</span> digital experiences.
            </h1>
            <p class="p1 text-gray-800 mt-4 md:mt-6">
                Markham Square is a digital studio that partners with organizations to reach strategic clarity, bring features & products to market, and refine their operations.
            </p>
        </div>
        <div class="mt-8 md:mt-12 xl:mt-16">
            <x-button
                message="Let's talk"
                url="#contact"
            />
        </div>
    </header>
    <x-callout
      header="You want results, we’re here to help"
      content="We collaborate with organizations of all shapes and sizes to solve the most pressing product challenges, deliver extraordinary digital experiences, and support product team operations."
    />
    <section id="services" class="sticky-container">
      <div class="overflow-x-hidden flex sticky top-0">
        <x-scrollcard
          banner="product"
          header="strategy"
          img="chess"
          color="red"
        />
        <x-scrollcard
          banner="design"
          header="ideation"
          img="artboard"
          color="blue"
        />
        <x-scrollcard
          banner="engineering"
          header="execution"
          img="screen"
          color="green"
        />
        <x-scrollcard
          banner="data + teaching"
          header="optimize"
          img="rocket"
          color="purple"
        />
      </div>
    </section>
    <x-callout
      header="You want results, we’re here to help"
      content="We collaborate with organizations of all shapes and sizes to solve the most pressing product challenges, deliver extraordinary digital experiences, and support product team operations."
    />
    <x-callout
      header="You want results, we’re here to help"
      content="We collaborate with organizations of all shapes and sizes to solve the most pressing product challenges, deliver extraordinary digital experiences, and support product team operations."
    />
@endsection