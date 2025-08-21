<?php
/**
 * The home template file
 * This file will be used for the homepage
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

    <!-- Services Section -->
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
                            <h3 class="text-2xl font-bold text-white mb-3">AI-Driven Digital Strategy</h3>
                            <p class="text-white/90 mb-4">Advanced digital strategy powered by AI analytics, voice search optimization, and predictive market insights.</p>
                        </div>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- ClickUp Project Management -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500 relative" 
                     style="background-image: url('https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <span class="badge badge-success mb-4 inline-block">ClickUp Partner</span>
                            <h3 class="text-2xl font-bold text-white mb-3">Project Management Solutions</h3>
                            <p class="text-white/90 mb-4">Certified ClickUp partners delivering seamless project management and team collaboration.</p>
                        </div>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>

                <!-- Custom Software Development -->
                <div class="service-card card hover:shadow-2xl transition-all duration-500 relative" 
                     style="background-image: url('https://images.unsplash.com/photo-1531498860502-7c67cf02f657?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                    <div class="card-content">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Custom Software Development</h3>
                            <p class="text-white/90 mb-4">Streamline and automate business processes with cutting-edge custom software solutions.</p>
                        </div>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-gradient w-full text-center">Learn More</a>
                    </div>
                </div>
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
                Let's discuss how our AI-driven marketing solutions can accelerate your growth
            </p>
            <a href="<?php echo home_url('/contact'); ?>" class="px-8 py-4 text-lg bg-white text-blue-600 hover:bg-gray-100 rounded-lg transition-all duration-300 inline-flex items-center justify-center">
                Start Your Project
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </section>
</div>

<?php get_footer(); ?>