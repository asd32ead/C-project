<section 
    class="relative py-20 md:py-28 bg-cover bg-center min-h-screen flex items-center overflow-hidden" 
    style="background-image: url('{{ asset('assets/images/home/why-choose-us/why-choose-us-background.png') }}')"
>
  <div class="container mx-auto px-4 relative z-10">
    <div class="max-w-6xl mx-auto text-center mb-16" data-aos="fade-down" data-aos-offset="0">
      <h1 class="text-4xl md:text-5xl font-bold text-orange-600 mb-4 drop-shadow-lg">Contact Us</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

      <!-- Contact Form -->
      <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-2xl" data-aos="fade-right" data-aos-offset="0">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Send us a message</h2>
        <form class="space-y-6" onsubmit="event.preventDefault(); showError();">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">First Name <span class="text-red-500">*</span></label>
              <input type="text" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-500 transition">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Last Name <span class="text-red-500">*</span></label>
              <input type="text" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-500 transition">
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
            <input type="email" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-500 transition">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
            <div class="flex flex-col sm:flex-row gap-2 sm:gap-0">
              <select class="w-full sm:w-24 px-2 py-3 border rounded-lg sm:rounded-l-lg focus:ring-2 focus:ring-orange-500">
                <option>+20</option>
              </select>
              <input type="tel" class="flex-1 px-4 py-3 border rounded-lg sm:rounded-r-lg focus:ring-2 focus:ring-orange-500 transition">
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
            <textarea rows="5" required class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-500 transition"></textarea>
          </div>

          <div id="errorMessage" class="hidden text-red-600 text-sm bg-red-100 p-3 rounded-lg">
            ⚠️ Message sending is currently disabled.
          </div>

          <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-3 px-6 rounded-lg transition flex items-center justify-center">
            <i class="fas fa-paper-plane w-5 h-5 mr-2"></i> Send Message
          </button>
        </form>
      </div>

      <!-- Contact Info & Map -->
      <div class="space-y-6" data-aos="fade-left" data-aos-offset="0">
        <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-2xl">
          <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h2>

          <div class="space-y-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-4">
              <div class="flex-shrink-0 bg-orange-500/10 p-3 rounded-lg text-orange-500"><i class="fas fa-location-dot w-6 h-6"></i></div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Our Address</h3>
                <p class="text-gray-600 mt-1">Epic Mall, North 90th, Fifth Settlement, First Floor
</p>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-4">
              <div class="flex-shrink-0 bg-orange-500/10 p-3 rounded-lg text-orange-500"><i class="fas fa-envelope w-6 h-6"></i></div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Email Us</h3>
                <a href="mailto:info@tgdevelopments.com" class="text-gray-600 hover:text-orange-500 transition mt-1 block">info@tgdevelopments.com</a>
              </div>
            </div>

            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-4">
              <div class="flex-shrink-0 bg-orange-500/10 p-3 rounded-lg text-orange-500"><i class="fas fa-phone w-6 h-6"></i></div>
              <div>
                <h3 class="text-lg font-semibold text-gray-800">Call Us</h3>
                <a href="tel:+16497" class="text-gray-600 hover:text-orange-500 transition mt-1 block">+16497</a>
              </div>
            </div>
          </div>
        </div>

        <div class="h-64 md:h-96 w-full rounded-2xl overflow-hidden shadow-2xl">
          <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3454.305810042109!2d31.480805600000004!3d30.0280833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzDCsDAxJzQxLjEiTiAzMcKwMjgnNTAuOSJF!5e0!3m2!1sen!2seg!4v1727790997741!5m2!1sen!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>
  </div>

  <script>
    function showError() {
      document.getElementById("errorMessage").classList.remove("hidden");
    }
  </script>
</section>
