<?php
/**
 * Template for Contact Page
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
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                        </svg>
                        Get In Touch
                    </span>
                </div>
                
                <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Let's <span class="gradient-text">Connect</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    Ready to transform your business with AI-driven marketing and cutting-edge technology? 
                    Let's discuss your project and create something amazing together.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form and Info -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="card shadow-2xl border-0">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            Start Your Project
                        </h2>
                        <p class="text-gray-600 mb-8">
                            Tell us about your requirements and we'll provide a detailed proposal within 24 hours.
                        </p>
                        
                        <form id="contact-form" class="space-y-6">
                            <?php wp_nonce_field('swift_nonce', 'contact_nonce'); ?>
                            
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name *</label>
                                    <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        class="form-input"
                                        placeholder="John Doe"
                                        required
                                    />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address *</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        class="form-input"
                                        placeholder="john@company.com"
                                        required
                                    />
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                    <input
                                        id="phone"
                                        name="phone"
                                        type="tel"
                                        class="form-input"
                                        placeholder="+27 (0)21 123 4567"
                                    />
                                </div>
                                
                                <div class="space-y-2">
                                    <label for="company" class="block text-sm font-medium text-gray-700">Company Name</label>
                                    <input
                                        id="company"
                                        name="company"
                                        type="text"
                                        class="form-input"
                                        placeholder="Your Company"
                                    />
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label for="service" class="block text-sm font-medium text-gray-700">Service Required *</label>
                                    <select id="service" name="service" class="form-input" required>
                                        <option value="">Select a service</option>
                                        <option value="ai-marketing">AI-Driven Digital Marketing</option>
                                        <option value="clickup-pm">ClickUp Project Management</option>
                                        <option value="software-dev">Custom Software Development</option>
                                        <option value="ecommerce">eCommerce Solutions</option>
                                        <option value="design-ux">Interactive Design & UX</option>
                                        <option value="video-content">Video & Content Production</option>
                                        <option value="full-service">Full-Service Package</option>
                                        <option value="consultation">Consultation Only</option>
                                    </select>
                                </div>

                                <div class="space-y-2">
                                    <label for="budget" class="block text-sm font-medium text-gray-700">Budget Range</label>
                                    <select id="budget" name="budget" class="form-input">
                                        <option value="">Select budget range</option>
                                        <option value="under-25k">Under R25,000</option>
                                        <option value="25k-50k">R25,000 - R50,000</option>
                                        <option value="50k-100k">R50,000 - R100,000</option>
                                        <option value="100k-250k">R100,000 - R250,000</option>
                                        <option value="250k-500k">R250,000 - R500,000</option>
                                        <option value="over-500k">Over R500,000</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="timeline" class="block text-sm font-medium text-gray-700">Project Timeline</label>
                                <select id="timeline" name="timeline" class="form-input">
                                    <option value="">When do you need this completed?</option>
                                    <option value="asap">ASAP</option>
                                    <option value="1-month">Within 1 month</option>
                                    <option value="2-3-months">2-3 months</option>
                                    <option value="3-6-months">3-6 months</option>
                                    <option value="6-plus-months">6+ months</option>
                                    <option value="flexible">Flexible</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="block text-sm font-medium text-gray-700">Project Details *</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-textarea"
                                    rows="6"
                                    placeholder="Please describe your project requirements, goals, and any specific challenges you're facing..."
                                    required
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="btn-gradient w-full py-4 text-lg flex items-center justify-center"
                            >
                                <span id="submit-text">Send Message</span>
                                <svg id="submit-icon" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6">
                    <!-- Contact Details -->
                    <div class="card shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Email</div>
                                    <div class="text-gray-600"><?php echo get_theme_mod('company_email', 'hello@swiftmarketing.co.za'); ?></div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Phone</div>
                                    <div class="text-gray-600"><?php echo get_theme_mod('company_phone', '+27 (0)21 123 4567'); ?></div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Location</div>
                                    <div class="text-gray-600"><?php echo get_theme_mod('company_address', 'Cape Town, South Africa'); ?></div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Business Hours</div>
                                    <div class="text-gray-600">Mon-Fri: 8AM-6PM SAST</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Why Choose Us -->
                    <div class="card shadow-lg bg-gradient-to-br from-blue-50 to-indigo-50">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                            </svg>
                            Why Work With Us?
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Fast Response</div>
                                    <div class="text-sm text-gray-600">24-hour response guarantee</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Certified Partners</div>
                                    <div class="text-sm text-gray-600">Official ClickUp partners</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Proven Results</div>
                                    <div class="text-sm text-gray-600">500+ successful projects</div>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Local Expertise</div>
                                    <div class="text-sm text-gray-600">8+ years in South Africa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const submitText = document.getElementById('submit-text');
    const submitIcon = document.getElementById('submit-icon');

    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Show loading state
        submitText.textContent = 'Sending...';
        submitBtn.disabled = true;
        
        const formData = new FormData(contactForm);
        formData.append('action', 'contact_form');

        try {
            const response = await fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success) {
                alert('Thank you! We\'ll get back to you within 24 hours.');
                contactForm.reset();
            } else {
                alert('Failed to send message. Please try again.');
            }
        } catch (error) {
            alert('Failed to send message. Please try again.');
        }
        
        // Reset button state
        submitText.textContent = 'Send Message';
        submitBtn.disabled = false;
    });
});
</script>

<?php get_footer(); ?>