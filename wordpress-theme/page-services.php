<?php
/**
 * Template for Services Page
 * Swift Marketing WordPress Theme - Enhanced with service images
 */
get_header(); ?>

<div class="page-bg">
    <!-- Hero Section -->
    <section class="py-20 lg:py-32">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h1 class="text-hero font-bold text-gray-900 mb-6">
                    Our <span class="gradient-text">Services</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Comprehensive digital solutions powered by AI, advanced project management, and cutting-edge technology to accelerate your business growth.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid with Background Images -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid-auto-fit">
                
                <!-- Service: AI-Driven Digital Strategy -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500" 
                     style="background-image: url('https://images.pexels.com/photos/15863044/pexels-photo-15863044.jpeg?auto=compress&cs=tinysrgb&w=800');">
                    <div class="card-content">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="badge badge-warning">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                                    </svg>
                                    Trending
                                </span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">AI-Driven Digital Strategy</h3>
                            <p class="text-white/90 mb-4">Advanced digital strategy powered by AI analytics, voice search optimization, and predictive market insights for 2025 and beyond.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    AI-Powered Analytics
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Voice Search SEO
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Brand Development
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- Service: ClickUp Project Management -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500" 
                     style="background-image: url('https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <div class="flex justify-between items-start mb-4">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                    </svg>
                                </div>
                                <span class="badge badge-success">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Partner
                                </span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Project Management & ClickUp Solutions</h3>
                            <p class="text-white/90 mb-4">Certified ClickUp partners delivering seamless project management, automation, and team collaboration solutions.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    ClickUp Setup & Training
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Workflow Automation
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Performance Tracking
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- Service: Custom Software Development -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500" 
                     style="background-image: url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Custom Software Development</h3>
                            <p class="text-white/90 mb-4">Streamline and automate business processes with cutting-edge custom software solutions and web applications.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Web Applications
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Process Automation
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    System Integration
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- Service: eCommerce & Online Stores -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500" 
                     style="background-image: url('https://images.unsplash.com/photo-1688561807403-ba262590f86f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 2L3 7v11a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V7l-7-5z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">eCommerce & Online Stores</h3>
                            <p class="text-white/90 mb-4">Comprehensive eCommerce solutions with AR/VR experiences, advanced analytics, and conversion optimization.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    AR/VR Shopping
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Conversion Optimization
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Payment Integration
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- Service: Interactive Design & UX -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500" 
                     style="background-image: url('https://images.unsplash.com/photo-1680016661694-1cd3faf31c3a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Interactive Design & UX</h3>
                            <p class="text-white/90 mb-4">Modern UI/UX design with interactive elements, micro-animations, and user-centered experiences.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Interactive Design
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Mobile-First
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Prototyping
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- Service: Video & Content Production -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500" 
                     style="background-image: url('https://images.unsplash.com/photo-1664277497091-d4919922b55c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H4v4h9v-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Video & Content Production</h3>
                            <p class="text-white/90 mb-4">Professional video production, short-form content creation, and interactive media for social platforms.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Video Production
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Short-form Content
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Brand Storytelling
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient w-full text-center">Learn More</a>
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