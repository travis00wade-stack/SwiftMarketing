import React, { useState } from "react";
import { Link } from "react-router-dom";
import { Button } from "../components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "../components/ui/card";
import { Badge } from "../components/ui/badge";
import { 
  ArrowRight, 
  ExternalLink,
  TrendingUp,
  Users,
  Clock,
  DollarSign,
  BarChart3,
  Target,
  Award
} from "lucide-react";
import Header from "../components/Header";
import Footer from "../components/Footer";
import { mockCaseStudies } from "../components/mock";

const CaseStudiesPage = () => {
  const [selectedCategory, setSelectedCategory] = useState("all");

  const categories = [
    { id: "all", label: "All Projects", count: mockCaseStudies.length },
    { id: "Digital Marketing", label: "Digital Marketing", count: 1 },
    { id: "Project Management", label: "Project Management", count: 1 },
    { id: "Software Development", label: "Software Development", count: 1 }
  ];

  const filteredCaseStudies = selectedCategory === "all" 
    ? mockCaseStudies 
    : mockCaseStudies.filter(study => study.category === selectedCategory);

  const additionalCaseStudies = [
    {
      id: 4,
      title: "E-commerce Platform with AR Integration",
      description: "Built a next-generation e-commerce platform with augmented reality product visualization, increasing customer engagement by 85%.",
      result: "85% increase in engagement",
      category: "Software Development",
      image: "/api/placeholder/400/300",
      metrics: [
        { label: "Engagement Increase", value: "85%" },
        { label: "Conversion Rate", value: "32%" },
        { label: "Return Users", value: "67%" }
      ],
      technologies: ["React", "AR.js", "WooCommerce", "AWS"],
      duration: "4 months",
      budget: "R250,000"
    },
    {
      id: 5,
      title: "Multi-Channel Marketing Campaign",
      description: "Comprehensive digital marketing campaign across social media, search, and email channels with AI-driven personalization.",
      result: "300% ROI achievement",
      category: "Digital Marketing",
      image: "/api/placeholder/400/300",
      metrics: [
        { label: "ROI", value: "300%" },
        { label: "Lead Generation", value: "450%" },
        { label: "Brand Awareness", value: "75%" }
      ],
      technologies: ["HubSpot", "Google Ads", "Meta Ads", "AI Analytics"],
      duration: "6 months",
      budget: "R180,000"
    },
    {
      id: 6,
      title: "Enterprise ClickUp Transformation",
      description: "Complete digital transformation for a 200+ employee company with custom ClickUp workflows and team training.",
      result: "50% productivity increase",
      category: "Project Management",
      image: "/api/placeholder/400/300",
      metrics: [
        { label: "Productivity Gain", value: "50%" },
        { label: "Time Saved", value: "25hrs/week" },
        { label: "Employee Satisfaction", value: "92%" }
      ],
      technologies: ["ClickUp", "Zapier", "Slack Integration", "Power BI"],
      duration: "3 months",
      budget: "R320,000"
    }
  ];

  const allCaseStudies = [...mockCaseStudies, ...additionalCaseStudies];
  const displayCaseStudies = selectedCategory === "all" 
    ? allCaseStudies 
    : allCaseStudies.filter(study => study.category === selectedCategory);

  return (
    <div className="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50">
      <Header />
      
      {/* Hero Section */}
      <section className="py-20 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <div className="flex justify-center mb-6">
              <Badge className="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2">
                <Award className="w-4 h-4 mr-2" />
                Proven Success Stories
              </Badge>
            </div>
            
            <h1 className="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
              Case <span className="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Studies</span>
            </h1>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
              Real results from real clients. Discover how we've helped businesses across 
              South Africa achieve their digital transformation goals.
            </p>
          </div>

          {/* Statistics */}
          <div className="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div className="text-center">
              <div className="text-4xl font-bold text-blue-600 mb-2">500+</div>
              <div className="text-gray-600">Projects Completed</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-green-600 mb-2">150+</div>
              <div className="text-gray-600">Happy Clients</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-purple-600 mb-2">98%</div>
              <div className="text-gray-600">Client Satisfaction</div>
            </div>
            <div className="text-center">
              <div className="text-4xl font-bold text-orange-600 mb-2">8+</div>
              <div className="text-gray-600">Years Experience</div>
            </div>
          </div>

          {/* Category Filter */}
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
                <Badge className="ml-2" variant="secondary">
                  {selectedCategory === category.id ? displayCaseStudies.length : category.count}
                </Badge>
              </Button>
            ))}
          </div>
        </div>
      </section>

      {/* Case Studies Grid */}
      <section className="py-12">
        <div className="container mx-auto px-4">
          <div className="grid lg:grid-cols-2 gap-12">
            {displayCaseStudies.map((study) => (
              <Card key={study.id} className="overflow-hidden group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                {/* Header Image */}
                <div className="aspect-video bg-gradient-to-br from-blue-100 to-indigo-100 relative overflow-hidden">
                  <div className="absolute inset-0 flex items-center justify-center">
                    <div className="text-center">
                      <div className="text-4xl font-bold text-blue-600 mb-2">{study.result}</div>
                      <Badge className="bg-white text-blue-600">{study.category}</Badge>
                    </div>
                  </div>
                  <div className="absolute top-4 right-4">
                    <ExternalLink className="w-6 h-6 text-blue-600 opacity-70" />
                  </div>
                </div>
                
                <CardHeader className="pb-4">
                  <div className="flex items-center justify-between mb-2">
                    <Badge variant="secondary">{study.category}</Badge>
                    {study.duration && (
                      <div className="flex items-center gap-1 text-sm text-gray-500">
                        <Clock className="w-4 h-4" />
                        {study.duration}
                      </div>
                    )}
                  </div>
                  <CardTitle className="text-2xl font-bold text-gray-900">{study.title}</CardTitle>
                </CardHeader>
                
                <CardContent className="space-y-6">
                  <p className="text-gray-600 leading-relaxed">{study.description}</p>
                  
                  {/* Metrics */}
                  <div className="grid grid-cols-3 gap-4">
                    {study.metrics.map((metric, idx) => (
                      <div key={idx} className="text-center p-4 bg-gray-50 rounded-lg">
                        <div className="text-2xl font-bold text-blue-600">{metric.value}</div>
                        <div className="text-sm text-gray-600">{metric.label}</div>
                      </div>
                    ))}
                  </div>

                  {/* Technologies Used */}
                  {study.technologies && (
                    <div>
                      <h4 className="font-semibold text-gray-900 mb-2">Technologies Used:</h4>
                      <div className="flex flex-wrap gap-2">
                        {study.technologies.map((tech, idx) => (
                          <Badge key={idx} variant="outline" className="text-xs">
                            {tech}
                          </Badge>
                        ))}
                      </div>
                    </div>
                  )}

                  {/* Project Details */}
                  {study.budget && (
                    <div className="flex items-center justify-between pt-4 border-t">
                      <div className="flex items-center gap-2 text-sm text-gray-600">
                        <DollarSign className="w-4 h-4" />
                        <span>Budget: {study.budget}</span>
                      </div>
                      <Button variant="outline" size="sm" className="group">
                        View Details
                        <ArrowRight className="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" />
                      </Button>
                    </div>
                  )}
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Success Metrics */}
      <section className="py-20 bg-white/70 backdrop-blur-sm">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
              Our Track Record
            </h2>
            <p className="text-xl text-gray-600 max-w-2xl mx-auto">
              Consistent results across industries and project types
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div className="text-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
              <div className="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <TrendingUp className="w-8 h-8 text-white" />
              </div>
              <div className="text-3xl font-bold text-gray-900 mb-2">Average 60%</div>
              <div className="text-gray-600">Performance Increase</div>
            </div>

            <div className="text-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
              <div className="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <Target className="w-8 h-8 text-white" />
              </div>
              <div className="text-3xl font-bold text-gray-900 mb-2">95%</div>
              <div className="text-gray-600">Project Success Rate</div>
            </div>

            <div className="text-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
              <div className="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <Users className="w-8 h-8 text-white" />
              </div>
              <div className="text-3xl font-bold text-gray-900 mb-2">98%</div>
              <div className="text-gray-600">Client Retention</div>
            </div>

            <div className="text-center p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
              <div className="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <BarChart3 className="w-8 h-8 text-white" />
              </div>
              <div className="text-3xl font-bold text-gray-900 mb-2">Average 250%</div>
              <div className="text-gray-600">ROI Achievement</div>
            </div>
          </div>
        </div>
      </section>

      {/* Client Testimonials Section */}
      <section className="py-20">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <h2 className="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
              What Our Clients Say
            </h2>
            <p className="text-xl text-gray-600">
              Success stories in their own words
            </p>
          </div>

          <div className="grid lg:grid-cols-3 gap-8">
            <Card className="p-6 bg-gradient-to-br from-white to-blue-50 hover:shadow-xl transition-shadow">
              <div className="mb-4">
                <div className="flex items-center gap-1 mb-3">
                  {Array.from({ length: 5 }).map((_, idx) => (
                    <div key={idx} className="w-5 h-5 bg-yellow-400 rounded-sm"></div>
                  ))}
                </div>
                <p className="text-gray-700 italic">"The AI-driven marketing campaign exceeded all expectations. Our online presence transformed completely."</p>
              </div>
              <div>
                <div className="font-semibold text-gray-900">Michael Johnson</div>
                <div className="text-sm text-gray-600">CEO, TechInnovate</div>
              </div>
            </Card>

            <Card className="p-6 bg-gradient-to-br from-white to-green-50 hover:shadow-xl transition-shadow">
              <div className="mb-4">
                <div className="flex items-center gap-1 mb-3">
                  {Array.from({ length: 5 }).map((_, idx) => (
                    <div key={idx} className="w-5 h-5 bg-yellow-400 rounded-sm"></div>
                  ))}
                </div>
                <p className="text-gray-700 italic">"Swift Marketing's ClickUp implementation revolutionized our project management. Incredible efficiency gains."</p>
              </div>
              <div>
                <div className="font-semibold text-gray-900">Sarah Williams</div>
                <div className="text-sm text-gray-600">Operations Director, GrowthCorp</div>
              </div>
            </Card>

            <Card className="p-6 bg-gradient-to-br from-white to-purple-50 hover:shadow-xl transition-shadow">
              <div className="mb-4">
                <div className="flex items-center gap-1 mb-3">
                  {Array.from({ length: 5 }).map((_, idx) => (
                    <div key={idx} className="w-5 h-5 bg-yellow-400 rounded-sm"></div>
                  ))}
                </div>
                <p className="text-gray-700 italic">"The custom software solution automated 70% of our manual processes. ROI was immediate."</p>
              </div>
              <div>
                <div className="font-semibold text-gray-900">David Chen</div>
                <div className="text-sm text-gray-600">CTO, AutoFlow Solutions</div>
              </div>
            </Card>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
        <div className="container mx-auto px-4 text-center">
          <h2 className="text-4xl lg:text-5xl font-bold mb-6">
            Ready to Create Your Success Story?
          </h2>
          <p className="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Join the growing list of businesses that have transformed their digital presence with Swift Marketing.
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

export default CaseStudiesPage;