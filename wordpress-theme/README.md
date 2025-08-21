# Swift Marketing Pro WordPress Theme v1.2.0

🚀 **Updated for GitHub Deployment with Elementor Support!**

## 🎉 **NEW FEATURES & IMPROVEMENTS**

### ✅ **Your Requested Changes:**
- **Your Logo**: Added actual Swift Marketing logo from your website
- **Removed Trending Button**: Cleaned up hero section 
- **Hero Background**: Added professional background image
- **Service Images**: All 6 services now have relevant background images
- **Elementor Compatible**: Full compatibility with Elementor page builder
- **GitHub Ready**: Optimized for "Deployer for Git" plugin

### 🖼️ **Professional Images Added:**
- **AI-Driven Digital Strategy**: AI/tech interface background
- **ClickUp Project Management**: Project planning board background  
- **Custom Software Development**: Developer coding environment
- **eCommerce & Online Stores**: Online store management interface
- **Interactive Design & UX**: Website design wireframes
- **Video & Content Production**: Professional video equipment setup
- **Hero Background**: Clean, professional workspace image

## Theme Features

✅ **Modern Design**: Clean, professional design with blue/indigo gradient theme  
✅ **SEO Optimized**: Built-in SEO optimizations for better search engine rankings  
✅ **Responsive**: Mobile-first design that works on all devices  
✅ **Fast Loading**: Optimized CSS and minimal JavaScript for quick load times  
✅ **Marketing Focus**: Specifically designed for digital marketing agencies  
✅ **ClickUp Integration**: Emphasizes ClickUp partnership and project management services  
✅ **AI-Driven Content**: Highlights trending 2025 AI and digital marketing services  
✅ **Contact Forms**: Working contact forms with email functionality  
✅ **Custom Post Types**: Services, Case Studies, and Testimonials post types  
✅ **Elementor Compatible**: Full compatibility with Elementor page builder
✅ **GitHub Deployment**: Optimized for Git-based deployment workflows  

## Included Files

```
swift-marketing-theme/
├── style.css                 # Main stylesheet with theme header
├── index.php                 # Main template file
├── front-page.php           # Homepage template
├── header.php               # Header template
├── footer.php               # Footer template  
├── functions.php            # Theme functions and features
├── page-services.php        # Services page template
├── page-contact.php         # Contact page template
└── README.md               # This file
```

## Installation Instructions

### Method 1: Upload via WordPress Admin

1. **Download the theme**: Zip all the theme files into a single archive named `swift-marketing-theme.zip`

2. **Login to WordPress Admin**: Go to your WordPress admin dashboard

3. **Navigate to Themes**: Go to `Appearance > Themes`

4. **Add New Theme**: Click "Add New" button

5. **Upload Theme**: Click "Upload Theme" and select the `swift-marketing-theme.zip` file

6. **Install**: Click "Install Now" and wait for the installation to complete

7. **Activate**: Click "Activate" to make this your active theme

### Method 2: FTP Upload

1. **Extract files**: Unzip the theme files

2. **Upload via FTP**: Upload the entire `swift-marketing-theme` folder to:
   ```
   /wp-content/themes/swift-marketing-theme/
   ```

3. **Activate**: Go to `Appearance > Themes` in WordPress admin and activate the theme

## Required Pages Setup

After installing the theme, create these pages with the specified slugs:

### 1. Homepage (Front Page)
- **Title**: Home
- **Slug**: home (or set as static front page)
- **Template**: Uses `front-page.php` automatically

### 2. Services Page
- **Title**: Services  
- **Slug**: services
- **Template**: Uses `page-services.php` automatically

### 3. Case Studies Page
- **Title**: Case Studies
- **Slug**: case-studies  
- **Template**: Create using default page template

### 4. Contact Page
- **Title**: Contact
- **Slug**: contact
- **Template**: Uses `page-contact.php` automatically

## Theme Customization

### Company Information
Go to `Appearance > Customize > Company Information` to update:

- **Phone Number**: Default: +27 (0)21 123 4567
- **Email Address**: Default: hello@swiftmarketing.co.za  
- **Address**: Default: Cape Town, South Africa

### Custom Post Types
The theme includes custom post types for content management:

#### Services Post Type
- **Location**: WordPress Admin > Services
- **Features**: Title, Content, Featured Image, Custom Fields
- **Custom Fields**:
  - Service Icon (CSS class)
  - Features (one per line)
  - Trending Service (checkbox)

#### Case Studies Post Type  
- **Location**: WordPress Admin > Case Studies
- **Features**: Title, Content, Featured Image, Custom Fields
- **Custom Fields**:
  - Result (e.g., "40% sales increase")
  - Category (Digital Marketing, Project Management, Software Development)
  - Metrics (JSON format)
  - Technologies (comma separated)
  - Duration
  - Budget

#### Testimonials Post Type
- **Location**: WordPress Admin > Testimonials  
- **Features**: Title, Content, Custom Fields
- **Custom Fields**:
  - Client Name
  - Client Position
  - Client Company
  - Rating (1-5)

## SEO Features

### Built-in SEO Optimizations
- **Meta Tags**: Proper meta descriptions and keywords
- **Open Graph**: Social media sharing optimization
- **Schema Markup**: Structured data for better search results
- **Fast Loading**: Optimized code for speed
- **Mobile Responsive**: Mobile-first design
- **Clean Code**: Valid HTML5 and semantic markup

### SEO Keywords Included
The theme is optimized for these keywords:
- digital marketing agency south africa
- clickup partners  
- ai-driven marketing
- custom software development
- seo services cape town
- project management solutions

## Contact Form Setup

### Email Configuration
The contact form sends emails to the WordPress admin email by default. To customize:

1. **Admin Email**: Go to `Settings > General` and update "Administration Email Address"

2. **SMTP Setup**: For reliable email delivery, install an SMTP plugin like "WP Mail SMTP"

3. **Form Processing**: The form uses AJAX for smooth submission without page refresh

### Form Fields
The contact form includes:
- Full Name (required)
- Email Address (required)  
- Phone Number
- Company Name
- Service Required (dropdown, required)
- Budget Range (dropdown)
- Project Timeline (dropdown)
- Project Details (textarea, required)

## Browser Support

The theme supports all modern browsers:
- Chrome (latest)
- Firefox (latest)  
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance

### Optimizations Included
- **Minimal JavaScript**: Only essential scripts included
- **Optimized CSS**: Single CSS file with minimal bloat
- **Fast Fonts**: System fonts for quick loading
- **Efficient Images**: Placeholder system for images
- **Clean Code**: Minimal HTML for fast rendering

### Speed Recommendations
- Use a caching plugin (e.g., W3 Total Cache)
- Optimize images before uploading
- Use a CDN for static assets
- Choose a fast hosting provider

## Maintenance

### Theme Updates
- Keep WordPress core updated
- Update plugins regularly
- Monitor site performance
- Backup site before making changes

### Customization Tips
- Use a child theme for customizations
- Test changes on a staging site first
- Keep backups of customized files
- Document any custom modifications

## Support

### Common Issues

**Issue**: Menu not appearing
**Solution**: Go to `Appearance > Menus` and create a menu, then assign it to "Primary Menu" location

**Issue**: Contact form not sending emails  
**Solution**: Install and configure an SMTP plugin for reliable email delivery

**Issue**: Custom post types not showing
**Solution**: Go to `Settings > Permalinks` and click "Save Changes" to flush rewrite rules

### Getting Help
- Check WordPress documentation
- Search WordPress support forums
- Consider hiring a WordPress developer for advanced customizations

## License

This theme is released under GPL v2 or later license, same as WordPress.

## Credits

- **Design**: Swift Marketing team
- **Development**: Built with WordPress best practices
- **Icons**: SVG icons included in code
- **Fonts**: System fonts for optimal performance
- **Framework**: Built with Tailwind CSS classes

---

**Swift Marketing Pro WordPress Theme v1.0.0**  
*Bringing Digital Dreams to Life*