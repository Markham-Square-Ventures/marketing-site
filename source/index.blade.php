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
          boldline="Be confident in your next step."
          content="We help you identify and align on the initiatives and priorities that maximize your success."
        />
        <x-scrollcard
          banner="design"
          header="ideation"
          img="artboard"
          color="blue"
          boldline="Understand what’s possible."
          content="We explore every opportunity to help you uncover the best path forward."
        />
        <x-scrollcard
          banner="engineering"
          header="execution"
          img="screen"
          color="green"
          boldline="Bring your ideas to life."
          content="We translate your visions and dreams into digital product experiences that surpass your wildest expectations."
        />
        <x-scrollcard
          banner="data + teaching"
          header="optimize"
          img="rocket"
          color="purple"
          boldline="Keep getting better."
          content="We empower your team to unlock their full potential and compound their successes."
        />
      </div>
    </section>
    <x-quote 
      name="Michael Riddering"
      quote="Markham Square is the bees knees! Working with them was the highlight of my career, and I can't wait to do it again."
      role="Founding Product Designer, Maven"
    />
@endsection