<section class="my-32 mx-6 sm:mx-12 lg:mx-24">
  <div class="mx-auto max-w-7xl">
    <h2 class="h2 max-w-xl text-gray-900">
      {{$header}}
    </h2>
    <p class="mt-4 md:mt-6 max-w-3xl p1 ml-auto text-gray-800">
      {{$content}}
    </p>
    @if($signature)
      <p class="max-w-3xl text-orange-500 ml-auto  font-cursive text-5xl mt-4" >Matt & Nick</p>
    @endif
  </div>
</section>