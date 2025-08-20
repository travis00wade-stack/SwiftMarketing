import React, { useState } from "react";
import { Link } from "react-router-dom";
import { Button } from "../components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "../components/ui/card";
import { Badge } from "../components/ui/badge";
import { Tabs, TabsContent, TabsList, TabsTrigger } from "../components/ui/tabs";
import { 
  ArrowRight, 
  Brain, 
  Kanban, 
  Code, 
  ShoppingCart, 
  Palette, 
  Video,
  Check,
  Star,
  TrendingUp,
  Award,
  Zap,
  Users,
  Clock,
  Sparkles
} from "lucide-react";
import Header from "../components/Header";
import Footer from "../components/Footer";
import { mockServices } from "../components/mock";

const iconMap = {
  Brain, Kanban, Code, ShoppingCart, Palette, Video
};

const ServicesPage = () => {
  const [selectedCategory, setSelectedCategory] = useState("all");

  const categories = [
    { id: "all", label: "All Services", count: mockServices.length },
    { id: "trending", label: "Trending 2025", count: mockServices.filter(s => s.trending).length },
    { id: "marketing", label: "Digital Marketing", count: 2 },
    { id: "development", label: "Development", count: 2 },
    { id: "management", label: "Project Management", count: 1 }
  ];

  const filteredServices = selectedCategory === "all" 
    ? mockServices 
    : selectedCategory === "trending" 
    ? mockServices.filter(s => s.trending)
    : mockServices.filter(s => 
        (selectedCategory === "marketing" && (s.id === 1 || s.id === 6)) ||
        (selectedCategory === "development" && (s.id === 3 || s.id === 4)) ||
        (selectedCategory === "management" && s.id === 2)
      );

  const servicePackages = [
    {
      name: "Starter Package",
      price: "From R15,000",
      description: "Perfect for small businesses starting their digital journey",
      features: [
        "Basic website design & development",
        "SEO setup & optimization",
        "Social media setup",
        "Basic ClickUp workspace setup",
        "3 months support"
      ],
      popular: false
    },
    {
      name: "Growth Package",
      price: "From R35,000",
      description: "Ideal for growing businesses ready to scale",
      features: [
        "Custom web application",
        "AI-driven marketing automation",
        "Advanced ClickUp workflows",
        "eCommerce integration",
        "Monthly analytics reporting",
        "6 months support"
      ],
      popular: true
    },
    {
      name: "Enterprise Package",
      price: "Custom Pricing",
      description: "Comprehensive solution for large organizations",
      features: [
        "Full-scale digital transformation",
        "Custom software development",
        "Advanced project management setup",
        "Team training & workshops",
        "24/7 support & maintenance",
        "Ongoing optimization"
      ],
      popular: false
    }
  ];

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
      <Header />
      
      {/* Hero Section */}
      <section className="py-20 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <div className="flex justify-center mb-6">
              <Badge className="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2">
                <TrendingUp className="w-4 h-4 mr-2" />
                2025 Marketing Solutions
              </Badge>
            </div>
            
            <h1 className="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
              Our <span className="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Services</span>
            </h1>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
              Comprehensive digital solutions powered by AI, advanced project management, 
              and cutting-edge technology to accelerate your business growth.
            </p>
          </div>

          {/* Service Categories */}
          <div className="flex flex-wrap justify-center gap-4 mb-12">
            {categories.map((category) => (
              <Button
                key={category.id}
                onClick={() => setSelectedCategory(category.id)}
                variant={selectedCategory === category.id ? "default" : "outline"}
                className={`transition-all duration-300 ${
                  selectedCategory === category.id 
                    ? "bg-gradient-to-r from-blue-600 to-indigo-600 text-white" 
                    : "hover:bg-blue-50"
                }`}
              >
                {category.label}
                <Badge className="ml-2" variant="secondary">{category.count}</Badge>
              </Button>
            ))}
          </div>
        </div>
      </section>

      {/* Services Grid */}
      <section className="py-12">
        <div className="container mx-auto px-4">
          <div className="grid lg:grid-cols-2 xl:grid-cols-3 gap-8">
            {filteredServices.map((service) => {
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
                        {service.partner} Partner
                      </Badge>
                    </div>
                  )}

                  <CardHeader className="pb-4">
                    <div className="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                      <Icon className="w-8 h-8 text-white" />
                    </div>
                    <CardTitle className="text-2xl font-bold text-gray-900 mb-2">
                      {service.title}
                    </CardTitle>
                  </CardHeader>
                  
                  <CardContent className="space-y-4">
                    <p className="text-gray-600">{service.description}</p>
                    
                    <div className="space-y-2">
                      <h4 className="font-semibold text-gray-900">Key Features:</h4>
                      <ul className="space-y-1">
                        {service.features.map((feature, idx) => (
                          <li key={idx} className="flex items-center gap-2 text-sm text-gray-600">
                            <Check className="w-4 h-4 text-green-500 flex-shrink-0" />
                            {feature}
                          </li>
                        ))}
                      </ul>
                    </div>

                    <Button className="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white group">
                      Learn More
                      <ArrowRight className="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" />
                    </Button>
                  </CardContent>
                </Card>
              );
            })}
          </div>
        </div>
      </section>

      {/* Service Packages */}
      <section className="py-20 bg-white/70 backdrop-blur-sm">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
              Service Packages
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Choose the perfect package for your business needs
            </p>
          </div>

          <div className="grid lg:grid-cols-3 gap-8">
            {servicePackages.map((pkg, index) => (
              <Card key={index} className={`relative overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 ${pkg.popular ? 'ring-2 ring-blue-500' : ''}`}>
                {pkg.popular && (
                  <div className="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <Badge className="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2">
                      <Star className="w-4 h-4 mr-1" />
                      Most Popular
                    </Badge>
                  </div>
                )}

                <CardHeader className="text-center pb-4">
                  <CardTitle className="text-2xl font-bold text-gray-900 mb-2">
                    {pkg.name}
                  </CardTitle>
                  <div className="text-3xl font-bold text-blue-600 mb-2">{pkg.price}</div>
                  <p className="text-gray-600">{pkg.description}</p>
                </CardHeader>

                <CardContent className="space-y-4">
                  <ul className="space-y-3">
                    {pkg.features.map((feature, idx) => (
                      <li key={idx} className="flex items-center gap-3">
                        <Check className="w-5 h-5 text-green-500 flex-shrink-0" />
                        <span className="text-gray-700">{feature}</span>
                      </li>
                    ))}
                  </ul>

                  <Button 
                    asChild
                    className={`w-full ${pkg.popular 
                      ? 'bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white' 
                      : 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white'
                    }`}
                    variant={pkg.popular ? "default" : "outline"}
                  >
                    <Link to="/contact">
                      Get Started
                      <ArrowRight className="ml-2 w-4 h-4" />
                    </Link>
                  </Button>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Why Choose Us */}
      <section className="py-20">
        <div className="container mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            <div>
              <h2 className="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Why Choose Swift Marketing?
              </h2>
              <p className="text-xl text-gray-600 mb-8">
                We combine cutting-edge technology with proven strategies to deliver exceptional results for our clients.
              </p>

              <div className="space-y-6">
                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <Sparkles className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-xl font-bold text-gray-900 mb-2">AI-Powered Solutions</h3>
                    <p className="text-gray-600">Leverage the latest AI technology for smarter marketing strategies and business automation.</p>
                  </div>
                </div>

                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <Award className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-xl font-bold text-gray-900 mb-2">Certified Partners</h3>
                    <p className="text-gray-600">Official ClickUp partners with extensive experience in project management optimization.</p>
                  </div>
                </div>

                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <Users className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-xl font-bold text-gray-900 mb-2">Dedicated Support</h3>
                    <p className="text-gray-600">24/7 support and ongoing maintenance to ensure your digital assets perform optimally.</p>
                  </div>
                </div>

                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center flex-shrink-0">
                    <Clock className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-xl font-bold text-gray-900 mb-2">Fast Delivery</h3>
                    <p className="text-gray-600">Agile development process ensuring quick turnaround times without compromising quality.</p>
                  </div>
                </div>
              </div>
            </div>

            <div className="relative">
              <div className="aspect-square bg-gradient-to-br from-blue-100 to-indigo-100 rounded-2xl flex items-center justify-center">
                <div className="text-center">
                  <div className="text-6xl font-bold text-blue-600 mb-4">500+</div>
                  <div className="text-xl text-gray-600">Successful Projects</div>
                  <div className="text-lg text-gray-500 mt-2">Delivered Across Industries</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div className="container mx-auto px-4 text-center">
          <h2 className="text-4xl lg:text-5xl font-bold mb-6">
            Ready to Get Started?
          </h2>
          <p className="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Let's discuss your project requirements and create a custom solution that drives results.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button asChild size="lg" className="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 text-lg">
              <Link to="/contact">
                Start Your Project
                <ArrowRight className="ml-2 w-5 h-5" />
              </Link>
            </Button>
            <Button asChild size="lg" variant="outline" className="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 text-lg">
              <Link to="/case-studies">
                View Our Work
              </Link>
            </Button>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default ServicesPage;