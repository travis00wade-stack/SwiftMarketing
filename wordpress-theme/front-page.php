<?php
/**
 * The front page template file
 * Swift Marketing WordPress Theme - Enhanced with service images
 */
get_header(); ?>

<div class="page-bg">
    <!-- Hero Section with Background Image -->
    <section class="hero-bg py-20 lg:py-32 overflow-hidden relative">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center fade-in">
                <h1 class="text-hero font-bold text-gray-900 mb-8 leading-tight">
                    Bringing Digital
                    <span class="block gradient-text">Dreams to Life</span>
                </h1>
                
                <p class="text-xl lg:text-2xl text-gray-700 mb-12 max-w-3xl mx-auto leading-relaxed font-medium">
                    AI-Driven Digital Marketing • Custom Software Development • ClickUp Project Management
                    <span class="block mt-2 text-lg text-blue-600 font-semibold">
                        Certified ClickUp Partners • SEO Optimized Solutions
                    </span>
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-gradient shadow-xl hover:shadow-2xl">
                        Start Your Project
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    
                    <a href="<?php echo home_url('/services'); ?>" class="px-8 py-4 text-lg border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white rounded-lg transition-all duration-300">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Stats -->
    <section class="py-16 bg-white/70 backdrop-blur-sm">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group hover-scale transition-transform duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">500+</div>
                    <div class="text-gray-600">Projects Completed</div>
                </div>
                <div class="text-center group hover-scale transition-transform duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">150+</div>
                    <div class="text-gray-600">Happy Clients</div>
                </div>
                <div class="text-center group hover-scale transition-transform duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">8+</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
                <div class="text-center group hover-scale transition-transform duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">25+</div>
                    <div class="text-gray-600">Team Members</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Services with Background Images -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-section-title font-bold text-gray-900 mb-6">
                    Cutting-Edge Solutions for 2025
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Stay ahead with AI-driven marketing, advanced project management, and custom software solutions
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- AI-Driven Digital Strategy -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500 relative" 
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
                            <p class="text-white/90 mb-4">Advanced digital strategy powered by AI analytics, voice search optimization, and predictive market insights.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    AI-Powered Analytics
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Voice Search SEO
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Predictive Marketing
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- ClickUp Project Management -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500 relative" 
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
                                    ClickUp Partner
                                </span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Project Management & ClickUp Solutions</h3>
                            <p class="text-white/90 mb-4">Certified ClickUp partners delivering seamless project management, automation, and team collaboration solutions.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    ClickUp Setup & Training
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Workflow Automation
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Team Collaboration
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- Custom Software Development -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500 relative" 
                     style="background-image: url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-3">Custom Software Development</h3>
                            <p class="text-white/90 mb-4">Streamline and automate business processes with cutting-edge custom software solutions.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Web Applications
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Process Automation
                                </li>
                                <li class="flex items-center text-sm text-white/80">
                                    <svg class="w-4 h-4 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    API Development
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo home_url('/services'); ?>" class="inline-flex items-center px-8 py-4 text-lg border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white rounded-lg transition-all duration-300">
                    View All Services
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Ready to Transform Your Business?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Let's discuss how our AI-driven marketing and project management solutions can accelerate your growth
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>" class="px-8 py-4 text-lg bg-white text-blue-600 hover:bg-gray-100 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                    Start Your Project
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="<?php echo home_url('/services'); ?>" class="px-8 py-4 text-lg border-2 border-white text-white hover:bg-white hover:text-blue-600 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                    Explore Services
                </a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>