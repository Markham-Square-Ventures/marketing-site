<section class="bg-orange-50 relative w-full py-24 px-6 sm:px-12 lg:px-26">
  <img src="../assets/images/contact-bg.svg" alt="" class="hidden md:block absolute top-0 right-0 z-0"/>

  <h3 class="h2">We would love to <br/>work with your project.</h3>
  <div class="relative">
    <form name="contact" method="POST" data-netlify="true" class="p-12 mt-16 max-w-[840px] bg-white shadow-secondary ">
      <p class="h3">Have a project in mind?</p>
      <p class="p1">Let us know and we'll get back to you right away.</p>
  
      <div class="mt-8 space-y-2">
        <label class="uppercase l1" for="">Name</label>
        <input class="w-full border-3 px-6 py-6 text-xl" name="name" type="text"/>
      </div>
      <div class="mt-8 space-y-2">
        <label class="uppercase l1" for="">Email</label>
        <input class="w-full border-3 px-6 py-6 text-xl" name="email" type="email"/>
      </div>
      <div class="mt-8 space-y-2">
        <label class="uppercase l1" for="">Message</label>
        <textarea class="w-full border-3 px-6 py-6 text-xl" name="message" rows="8"></textarea>
      </div>
      <button type="submit" class="btn btn-lg mt-7">
        Send
      </button>
    </form>
  
    <div class="absolute right-0 mt-8 lg:-mt-24 bg-white border-3 shadow-secondary max-w-[666px] mx-auto px-12 pt-12 pb-14">
      <p class="h3">Need help deciding?</p>
      <p class="p1 mb-6">Schedule a free, 30 minute discovery call to find the best option for you.</p>
      <x-button url="https://calendly.com/" message="Schedule a call"/>
    </div>
  </div>
</section>
<section class="bg-orange-50 h-72"></section>