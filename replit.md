# Tribre Website

## Overview
A responsive PHP-based corporate portfolio website for Tribre, showcasing different modules including Tribre Teams, Tribre Solo, Tribre Communities, Tribre Role Library, Tribre AI, and Tribre Purpose.

## Project Information
- **Type**: Static PHP website with responsive design
- **Template Base**: Portfolio/corporate template with full-screen carousel
- **PHP Version**: 8.2.23
- **Server**: PHP built-in development server

## Project Structure
- `index.php` - Main landing page with carousel slider
- `images/` - All image assets including logos and carousel images
- `css/` - Stylesheets (Bootstrap, custom styles, responsive design)
- `js/` - JavaScript files for interactivity and animations
- `fonts/` - Custom font files
- `revolution/` - Revolution slider assets
- Other PHP pages: Various template pages for different sections

## Setup & Configuration
The project is configured to run on Replit using PHP's built-in web server on port 5000.

### Workflow Configuration
- Server runs on: `0.0.0.0:5000`
- Command: `php -S 0.0.0.0:5000`

## Recent Changes
- **2025-10-06**: Initial setup and configuration
  - Fixed carousel image paths from `/html/images/carousel/` to `images/carousel/`
  - Moved carousel folder into images directory to match path structure
  - Configured PHP built-in web server on port 5000
  - All images loading successfully with no 404 errors

## Architecture
- **Frontend**: HTML, CSS, JavaScript with responsive Bootstrap framework
- **Backend**: PHP (minimal server-side processing, mostly static content)
- **Carousel**: Custom full-screen swiper carousel for showcasing Tribre modules
- **Design**: Modern, clean corporate design with smooth animations

## Deployment
The site is ready for deployment using Replit's deployment system. The production server should use PHP with proper configuration for serving static and PHP files.
