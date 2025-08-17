<!-- Available Positions Section -->
<section 
    class="py-16 md:py-28 bg-cover bg-center bg-no-repeat min-h-screen flex items-center" 
    style="background-image: url('{{ asset('assets/images/home/why-choose-us/why-choose-us-background.png') }}')"
>
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto text-white">
            
            @foreach($positions as $position)
            <div class="mb-16 last:mb-0" data-aos="fade-up" data-aos-duration="600">
                
                <!-- Job Title -->
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6 drop-shadow-lg text-orange-600">
                    {{ $position['title'] }}
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                    
                    <!-- Job Requirements -->
                    <div>
                        <div class="space-y-3 mb-8">
                            @foreach($position['requirements'] as $requirement)
                            <div class="flex items-start">
                                <span class="text-orange-400 mr-2 font-bold">-</span>
                                <p class="drop-shadow text-sm sm:text-base">{{ $requirement }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Job Application Form -->
                    <div>
                        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl">
                            <h3 class="text-xl sm:text-2xl font-bold mb-6 text-gray-900">Apply for this Position</h3>
                            
                            <!--  Form -->
                            <form onsubmit="event.preventDefault(); showError(this);" class="grid gap-4 sm:gap-6">
                                
                                <!-- First & Last Name -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                        <input type="text" name="first_name" 
                                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                        <input type="text" name="last_name" 
                                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" name="email" 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                </div>

                                <!-- Phone Number -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                    <div class="flex flex-col sm:flex-row gap-2">
                                        <select class="w-full sm:w-24 px-3 py-2 border border-gray-300 rounded-lg sm:rounded-l-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                            <option value="+20">+20</option>
                                        </select>
                                        <input type="tel" name="phone" 
                                               class="flex-1 px-4 py-2 border border-gray-300 rounded-lg sm:rounded-r-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                    </div>
                                </div>

                                <!-- CV Upload (Disabled) -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Upload CV</label>
                                    <input type="file" name="cv" disabled 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 cursor-not-allowed">
                                    <p class="text-xs text-red-500 mt-1">File upload is disabled.</p>
                                </div>

                                <!-- Error Message (Hidden by default) -->
                                <div class="hidden text-red-600 text-sm font-medium bg-red-100 p-3 rounded-lg" id="errorMessage">
                                    ⚠️ Application submission is disabled.
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit" 
                                            class="w-full px-6 py-3 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition-colors">
                                        Submit Application
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Script -->
<script>
    function showError(form) {
        const errorDiv = form.querySelector("#errorMessage");
        errorDiv.classList.remove("hidden");
    }
</script>
س