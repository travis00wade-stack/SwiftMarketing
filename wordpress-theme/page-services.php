<?php
/**
 * Template for Services Page
 * Swift Marketing WordPress Theme
 */
get_header(); ?>

<div class="page-bg">
    <!-- Hero Section -->
    <section class="py-20 lg:py-32">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="flex justify-center mb-6">
                    <span class="badge badge-primary">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                        </svg>
                        2025 Marketing Solutions
                    </span>
                </div>
                
                <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Our <span class="gradient-text">Services</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Comprehensive digital solutions powered by AI, advanced project management, and cutting-edge technology to accelerate your business growth.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-8">
                
                <!-- Service: AI-Driven Digital Strategy -->
                <div class="card hover:shadow-2xl transition-all duration-500 relative">
                    <div class="absolute top-4 right-4">
                        <span class="badge badge-warning">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                            </svg>
                            Trending
                        </span>
                    </div>

                    <div class="pb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">AI-Driven Digital Strategy</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <p class="text-gray-600">Advanced digital strategy powered by AI analytics, voice search optimization, and predictive market insights for 2025 and beyond.</p>
                        
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-900">Key Features:</h4>
                            <ul class="space-y-1">
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    AI-Powered Analytics
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Voice Search SEO
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Predictive Marketing
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Brand Development
                                </li>
                            </ul>
                        </div>

                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center inline-flex items-center justify-center">
                            Learn More
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service: ClickUp Project Management -->
                <div class="card hover:shadow-2xl transition-all duration-500 relative">
                    <div class="absolute top-4 right-4">
                        <span class="badge badge-warning">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                            </svg>
                            Trending
                        </span>
                    </div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="badge badge-success">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Partner
                        </span>
                    </div>

                    <div class="pb-4 mt-12">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Project Management & ClickUp Solutions</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <p class="text-gray-600">Certified ClickUp partners delivering seamless project management, automation, and team collaboration solutions.</p>
                        
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-900">Key Features:</h4>
                            <ul class="space-y-1">
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    ClickUp Setup & Training
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Workflow Automation
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Team Collaboration
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Performance Tracking
                                </li>
                            </ul>
                        </div>

                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center inline-flex items-center justify-center">
                            Learn More
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Additional services can be added here -->
                <!-- For brevity, I'll add a few more key services -->
                
                <!-- Service: Custom Software Development -->
                <div class="card hover:shadow-2xl transition-all duration-500">
                    <div class="pb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Custom Software Development</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <p class="text-gray-600">Streamline and automate business processes with cutting-edge custom software solutions and web applications.</p>
                        
                        <div class="space-y-2">
                            <h4 class="font-semibold text-gray-900">Key Features:</h4>
                            <ul class="space-y-1">
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Web Applications
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Process Automation
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    API Development
                                </li>
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    System Integration
                                </li>
                            </ul>
                        </div>

                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center inline-flex items-center justify-center">
                            Learn More
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Let's discuss your project requirements and create a custom solution that drives results.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>" class="px-8 py-4 text-lg bg-white text-blue-600 hover:bg-gray-100 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                    Start Your Project
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="<?php echo home_url('/case-studies'); ?>" class="px-8 py-4 text-lg border-2 border-white text-white hover:bg-white hover:text-blue-600 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                    View Our Work
                </a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>