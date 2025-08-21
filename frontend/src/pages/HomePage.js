import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import { Button } from "../components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "../components/ui/card";
import { Badge } from "../components/ui/badge";
import { Separator } from "../components/ui/separator";
import { 
  ArrowRight, 
  Brain, 
  Kanban, 
  Code, 
  ShoppingCart, 
  Palette, 
  Video,
  Star,
  CheckCircle,
  Users,
  Calendar,
  UserCheck,
  Sparkles,
  Award,
  TrendingUp,
  Zap
} from "lucide-react";
import Header from "../components/Header";
import Footer from "../components/Footer";
import { mockServices, mockCaseStudies, mockTestimonials, mockCompanyStats, mockTechnologies } from "../components/mock";

const iconMap = {
  Brain, Kanban, Code, ShoppingCart, Palette, Video, CheckCircle, Users, Calendar, UserCheck
};

const HomePage = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    setIsVisible(true);
  }, []);

  const featuredServices = mockServices.slice(0, 3);
  const featuredCaseStudies = mockCaseStudies.slice(0, 2);
  const featuredTestimonials = mockTestimonials.slice(0, 2);

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
      <Header />
      
      {/* Hero Section */}
      <section className="relative py-20 lg:py-32 overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-indigo-600/10"></div>
        <div className="container mx-auto px-4 relative z-10">
          <div className={`text-center transition-all duration-1000 ${isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'}`}>

            
            <h1 className="text-5xl lg:text-7xl font-bold text-gray-900 mb-8 leading-tight">
              Bringing Digital
              <span className="block bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                Dreams to Life
              </span>
            </h1>
            
            <p className="text-xl lg:text-2xl text-gray-600 mb-12 max-w-3xl mx-auto leading-relaxed">
              AI-Driven Digital Marketing • Custom Software Development • ClickUp Project Management
              <span className="block mt-2 text-lg text-blue-600 font-semibold">
                Certified ClickUp Partners • SEO Optimized Solutions
              </span>
            </p>
            
            <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
              <Button 
                asChild 
                size="lg" 
                className="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-4 text-lg group transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105"
              >
                <Link to="/contact">
                  Start Your Project
                  <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
                </Link>
              </Button>
              
              <Button 
                asChild 
                variant="outline" 
                size="lg"
                className="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-4 text-lg transition-all duration-300"
              >
                <Link to="/services">
                  Explore Services
                </Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      {/* Company Stats */}
      <section className="py-16 bg-white/70 backdrop-blur-sm">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-2 lg:grid-cols-4 gap-8">
            {mockCompanyStats.map((stat, index) => {
              const Icon = iconMap[stat.icon];
              return (
                <div key={index} className="text-center group hover:scale-105 transition-transform duration-300">
                  <div className="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:shadow-lg transition-shadow">
                    <Icon className="w-8 h-8 text-white" />
                  </div>
                  <div className="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">{stat.value}</div>
                  <div className="text-gray-600">{stat.label}</div>
                </div>
              );
            })}
          </div>
        </div>
      </section>

      {/* Featured Services */}
      <section className="py-20">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <div className="flex justify-center items-center gap-2 mb-4">
              <TrendingUp className="w-6 h-6 text-blue-600" />
              <span className="text-blue-600 font-semibold">TRENDING SERVICES</span>
            </div>
            <h2 className="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
              Cutting-Edge Solutions for 2025
            </h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Stay ahead with AI-driven marketing, advanced project management, and custom software solutions
            </p>
          </div>

          <div className="grid lg:grid-cols-3 gap-8">
            {featuredServices.map((service, index) => {
              const Icon = iconMap[service.icon];
              return (
                <Card key={service.id} className={`relative overflow-hidden group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 ${service.trending ? 'ring-2 ring-blue-500' : ''}`}>
                  {service.trending && (
                    <div className="absolute top-4 right-4">
                      <Badge className="bg-gradient-to-r from-orange-500 to-pink-500 text-white">
                        <Zap className="w-3 h-3 mr-1" />
                        Trending
                      </Badge>
                    </div>
                  )}
                  
                  {service.partner && (
                    <div className="absolute top-4 left-4">
                      <Badge className="bg-gradient-to-r from-green-500 to-emerald-500 text-white">
                        <Award className="w-3 h-3 mr-1" />
                        Partner
                      </Badge>
                    </div>
                  )}

                  <CardHeader className="pb-4">
                    <div className="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                      <Icon className="w-8 h-8 text-white" />
                    </div>
                    <CardTitle className="text-xl font-bold text-gray-900 mb-2">
                      {service.title}
                    </CardTitle>
                  </CardHeader>
                  
                  <CardContent>
                    <p className="text-gray-600 mb-4">{service.description}</p>
                    <div className="flex flex-wrap gap-2 mb-4">
                      {service.features.map((feature, idx) => (
                        <Badge key={idx} variant="secondary" className="text-xs">
                          {feature}
                        </Badge>
                      ))}
                    </div>
                  </CardContent>
                </Card>
              );
            })}
          </div>

          <div className="text-center mt-12">
            <Button asChild size="lg" variant="outline" className="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white">
              <Link to="/services">
                View All Services
                <ArrowRight className="ml-2 w-5 h-5" />
              </Link>
            </Button>
          </div>
        </div>
      </section>

      {/* Featured Case Studies */}
      <section className="py-20 bg-white/70 backdrop-blur-sm">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
              Proven Results That Speak
            </h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Real success stories from our clients across different industries
            </p>
          </div>

          <div className="grid lg:grid-cols-2 gap-8">
            {featuredCaseStudies.map((study) => (
              <Card key={study.id} className="overflow-hidden group hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
                <div className="aspect-video bg-gradient-to-br from-blue-100 to-indigo-100 relative overflow-hidden">
                  <div className="absolute inset-0 flex items-center justify-center">
                    <div className="text-center">
                      <div className="text-4xl font-bold text-blue-600 mb-2">{study.result}</div>
                      <div className="text-gray-600">{study.category}</div>
                    </div>
                  </div>
                </div>
                
                <CardHeader>
                  <div className="flex items-center justify-between mb-2">
                    <Badge variant="secondary">{study.category}</Badge>
                  </div>
                  <CardTitle className="text-xl font-bold">{study.title}</CardTitle>
                </CardHeader>
                
                <CardContent>
                  <p className="text-gray-600 mb-4">{study.description}</p>
                  <div className="grid grid-cols-3 gap-4">
                    {study.metrics.map((metric, idx) => (
                      <div key={idx} className="text-center">
                        <div className="text-2xl font-bold text-blue-600">{metric.value}</div>
                        <div className="text-sm text-gray-600">{metric.label}</div>
                      </div>
                    ))}
                  </div>
                </CardContent>
              </Card>
            ))}
          </div>

          <div className="text-center mt-12">
            <Button asChild size="lg" variant="outline" className="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white">
              <Link to="/case-studies">
                View All Case Studies
                <ArrowRight className="ml-2 w-5 h-5" />
              </Link>
            </Button>
          </div>
        </div>
      </section>

      {/* Testimonials */}
      <section className="py-20">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
              What Our Clients Say
            </h2>
            <p className="text-xl text-gray-600">
              Don't just take our word for it
            </p>
          </div>

          <div className="grid lg:grid-cols-2 gap-8">
            {featuredTestimonials.map((testimonial) => (
              <Card key={testimonial.id} className="relative p-6 bg-gradient-to-br from-white to-blue-50 hover:shadow-xl transition-shadow duration-300">
                <div className="flex items-start gap-4">
                  <div className="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold text-xl">
                    {testimonial.name.charAt(0)}
                  </div>
                  <div className="flex-1">
                    <div className="flex items-center gap-1 mb-3">
                      {Array.from({ length: testimonial.rating }).map((_, idx) => (
                        <Star key={idx} className="w-5 h-5 fill-yellow-400 text-yellow-400" />
                      ))}
                    </div>
                    <p className="text-gray-700 mb-4 italic">"{testimonial.content}"</p>
                    <div>
                      <div className="font-semibold text-gray-900">{testimonial.name}</div>
                      <div className="text-sm text-gray-600">{testimonial.position}, {testimonial.company}</div>
                    </div>
                  </div>
                </div>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Technologies & Partners */}
      <section className="py-16 bg-white/70 backdrop-blur-sm">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <h2 className="text-3xl font-bold text-gray-900 mb-4">Technologies & Partners</h2>
            <p className="text-gray-600">Powered by industry-leading tools and partnerships</p>
          </div>

          <div className="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
            {mockTechnologies.map((tech, index) => (
              <div key={index} className={`relative group p-4 rounded-xl bg-white hover:shadow-lg transition-all duration-300 hover:-translate-y-1 ${tech.partner ? 'ring-2 ring-green-500' : ''}`}>
                {tech.partner && (
                  <div className="absolute -top-2 -right-2">
                    <Badge className="bg-green-500 text-white text-xs">Partner</Badge>
                  </div>
                )}
                <div className="h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                  <span className="text-sm font-medium text-gray-600">{tech.name}</span>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div className="container mx-auto px-4 text-center">
          <h2 className="text-4xl lg:text-5xl font-bold mb-6">
            Ready to Transform Your Business?
          </h2>
          <p className="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Let's discuss how our AI-driven marketing and project management solutions can accelerate your growth
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button asChild size="lg" className="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 text-lg">
              <Link to="/contact">
                Start Your Project
                <ArrowRight className="ml-2 w-5 h-5" />
              </Link>
            </Button>
            <Button asChild size="lg" variant="outline" className="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 text-lg">
              <Link to="/services">
                Explore Services
              </Link>
            </Button>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default HomePage;