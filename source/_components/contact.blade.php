<section id="contact" class="bg-orange-50 relative w-full py-16 md:py-32 px-6 sm:px-12 lg:px-24 lg:pb-96">
  <img src="../assets/images/contact-bg.svg" alt="A background pattern of interlocking orange squares." class="hidden md:block absolute top-0 right-0 z-0"/>

  <h3 class="h2">We would love to <br class="hidden md:inline"/>work with you</h3>
  <div class="relative max-w-6xl mt-10 md:mt-20">
    <form name="contact" method="POST" data-netlify="true" class="p-12 lg:max-w-4xl bg-white shadow-secondary ">
      <p class="h3 text-gray-900">Have a project in mind?</p>
      <p class="p1 text-gray-800 mt-2">Let us know and we'll get back to you right away.</p>
  
      <div class="mt-8 space-y-2">
        <label class="uppercase l1 text-gray-900" for="">Name</label>
        <input class="input mt-2" name="name" type="text"/>
      </div>
      <div class="mt-8 space-y-2">
        <label class="uppercase l1" for="">Email</label>
        <input class="input" name="email" type="email"/>
      </div>
      <div class="mt-8 space-y-2">
        <label class="uppercase l1" for="">Message</label>
        <textarea class="input mt-" name="message" rows="8"></textarea>
      </div>
      <button type="submit" class="btn btn-lg mt-6">
        Send
      </button>
    </form>
  
    <div class="lg:absolute lg:right-0 mt-12 md:mt-16 lg:-mt-24 px-12 pt-12 pb-14 w-full bg-white lg:border-gray-900 lg:border-3 shadow-secondary lg:max-w-xl">
      <p class="h3 text-gray-900">Need help deciding?</p>
      <p class="p1 text-gray-800 mt-2">Schedule a free, 30 minute discovery call to find the best option for you.</p>
      <div class="mt-6">
        <x-button url="https://calendly.com/" message="Schedule a call"/>
      </div>
    </div>
  </div>
</section>