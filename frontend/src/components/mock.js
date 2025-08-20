// Mock data for Swift Marketing website
export const mockServices = [
  {
    id: 1,
    title: "AI-Driven Digital Strategy",
    description: "Advanced digital strategy powered by AI analytics, voice search optimization, and predictive market insights for 2025 and beyond.",
    icon: "Brain",
    features: ["AI-Powered Analytics", "Voice Search SEO", "Predictive Marketing", "Brand Development"],
    trending: true
  },
  {
    id: 2,
    title: "Project Management & ClickUp Solutions",
    description: "Certified ClickUp partners delivering seamless project management, automation, and team collaboration solutions.",
    icon: "Kanban",
    features: ["ClickUp Setup & Training", "Workflow Automation", "Team Collaboration", "Performance Tracking"],
    trending: true,
    partner: "ClickUp"
  },
  {
    id: 3,
    title: "Custom Software Development",
    description: "Streamline and automate business processes with cutting-edge custom software solutions and web applications.",
    icon: "Code",
    features: ["Web Applications", "Process Automation", "API Development", "System Integration"]
  },
  {
    id: 4,
    title: "eCommerce & Online Stores",
    description: "Comprehensive eCommerce solutions with AR/VR experiences, advanced analytics, and conversion optimization.",
    icon: "ShoppingCart",
    features: ["AR/VR Shopping", "Conversion Optimization", "Multi-platform Sales", "Payment Integration"]
  },
  {
    id: 5,
    title: "Interactive Design & UX",
    description: "Modern UI/UX design with interactive elements, micro-animations, and user-centered experiences.",
    icon: "Palette",
    features: ["Interactive Design", "Mobile-First", "User Research", "Prototyping"]
  },
  {
    id: 6,
    title: "Video & Content Production",
    description: "Professional video production, short-form content creation, and interactive media for social platforms.",
    icon: "Video",
    features: ["Video Production", "Short-form Content", "Interactive Media", "Brand Storytelling"]
  }
];

export const mockTechnologies = [
  { name: "ClickUp", logo: "/api/placeholder/120/60", partner: true },
  { name: "Google Analytics 4", logo: "/api/placeholder/120/60" },
  { name: "WordPress", logo: "/api/placeholder/120/60" },
  { name: "React", logo: "/api/placeholder/120/60" },
  { name: "Node.js", logo: "/api/placeholder/120/60" },
  { name: "HubSpot", logo: "/api/placeholder/120/60" },
  { name: "Meta Ads", logo: "/api/placeholder/120/60" },
  { name: "WooCommerce", logo: "/api/placeholder/120/60" }
];

export const mockCaseStudies = [
  {
    id: 1,
    title: "40% Sales Increase with AI-Driven Marketing",
    description: "Implemented AI-powered marketing automation and voice search optimization for a leading e-commerce client.",
    result: "40% increase in online sales",
    category: "Digital Marketing",
    image: "/api/placeholder/400/300",
    metrics: [
      { label: "Sales Increase", value: "40%" },
      { label: "Conversion Rate", value: "25%" },
      { label: "ROI", value: "300%" }
    ]
  },
  {
    id: 2,
    title: "ClickUp Implementation & Process Automation",
    description: "Complete ClickUp setup with custom workflows and automation for a 50+ person marketing team.",
    result: "60% improvement in project delivery time",
    category: "Project Management",
    image: "/api/placeholder/400/300",
    metrics: [
      { label: "Efficiency Gain", value: "60%" },
      { label: "Projects Completed", value: "200+" },
      { label: "Team Satisfaction", value: "95%" }
    ]
  },
  {
    id: 3,
    title: "Custom Software & Automation Platform",
    description: "Built a comprehensive business automation platform with real-time analytics and reporting.",
    result: "70% reduction in manual processes",
    category: "Software Development",
    image: "/api/placeholder/400/300",
    metrics: [
      { label: "Process Automation", value: "70%" },
      { label: "Cost Savings", value: "$150K" },
      { label: "User Adoption", value: "98%" }
    ]
  }
];

export const mockTestimonials = [
  {
    id: 1,
    name: "Sarah Johnson",
    position: "Marketing Director",
    company: "TechFlow Solutions",
    avatar: "/api/placeholder/80/80",
    content: "Swift Marketing transformed our digital presence with their AI-driven strategies. The ClickUp implementation alone saved us 20 hours per week.",
    rating: 5
  },
  {
    id: 2,
    name: "Michael Chen",
    position: "CEO",
    company: "InnovateCorp",
    avatar: "/api/placeholder/80/80",
    content: "Their custom software development and project management expertise helped us scale from startup to 100+ employees seamlessly.",
    rating: 5
  },
  {
    id: 3,
    name: "Lisa Rodriguez",
    position: "Operations Manager",
    company: "Global Commerce Ltd",
    avatar: "/api/placeholder/80/80",
    content: "The eCommerce solution with AR features increased our conversion rate by 45%. Exceptional results and professional service.",
    rating: 5
  }
];

export const mockFAQs = [
  {
    id: 1,
    question: "What makes your digital marketing services different in 2025?",
    answer: "We leverage cutting-edge AI technology, voice search optimization, and predictive analytics to deliver results that are 40% more effective than traditional methods. Our approach is data-driven and future-focused."
  },
  {
    id: 2,
    question: "How does your ClickUp partnership benefit our projects?",
    answer: "As certified ClickUp partners, we provide expert setup, custom workflows, and training that typically improves project efficiency by 60%. We handle the technical setup while you focus on results."
  },
  {
    id: 3,
    question: "Can you handle both software development and marketing for our business?",
    answer: "Absolutely! We're a full-service agency offering everything from custom software development to AI-driven marketing campaigns. This integrated approach ensures all your digital solutions work seamlessly together."
  },
  {
    id: 4,
    question: "What's included in your managed services?",
    answer: "Our managed services cover cloud infrastructure maintenance, ongoing software support, marketing campaign optimization, and ClickUp workflow management. We provide 24/7 monitoring and monthly performance reports."
  }
];

export const mockCompanyStats = [
  { label: "Projects Completed", value: "500+", icon: "CheckCircle" },
  { label: "Happy Clients", value: "150+", icon: "Users" },
  { label: "Years Experience", value: "8+", icon: "Calendar" },
  { label: "Team Members", value: "25+", icon: "UserCheck" }
];

// Contact form submission mock
export const mockContactSubmission = (formData) => {
  return new Promise((resolve) => {
    setTimeout(() => {
      console.log("Mock form submission:", formData);
      resolve({
        success: true,
        message: "Thank you! We'll get back to you within 24 hours."
      });
    }, 1000);
  });
};

// Newsletter subscription mock  
export const mockNewsletterSubscription = (email) => {
  return new Promise((resolve) => {
    setTimeout(() => {
      console.log("Mock newsletter subscription:", email);
      resolve({
        success: true,
        message: "Successfully subscribed to our newsletter!"
      });
    }, 800);
  });
};