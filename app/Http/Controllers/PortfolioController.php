<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the single page portfolio.
     */
    public function index()
    {
        $profile = [
            'name' => 'Muh Febryant Hidayatullah',
            'nickname' => 'Febryant',
            'initials' => 'MFH',
            'role' => 'Full-Stack Developer & UI/UX Designer',
            'tagline' => 'Crafting high-performance web applications with minimalist monochrome aesthetics and bulletproof Laravel architecture.',
            'location' => 'Indonesia',
            'availability' => 'Available for Freelance & Full-Time Roles',
            'email' => 'febryanthidayatullah@gmail.com',
            'phone' => '+62 812-3456-7890',
            'github' => 'https://github.com',
            'linkedin' => 'https://linkedin.com',
            'instagram' => 'https://instagram.com',
        ];

        $stats = [
            ['label' => 'Years Experience', 'value' => '3+'],
            ['label' => 'Projects Completed', 'value' => '18+'],
            ['label' => 'Client Satisfaction', 'value' => '100%'],
            ['label' => 'Tech Stack Mastery', 'value' => '12+'],
        ];

        $about = [
            'summary' => 'I am a passionate Full-Stack Developer and UI/UX Designer focused on creating sleek, high-performing digital solutions. With expertise in the Laravel ecosystem, modern JavaScript, and Tailwind CSS, I bridge the gap between elegant interface design and clean, scalable backend architecture.',
            'philosophy' => 'Code should be clean, interfaces should be intuitive, and performance should be non-negotiable. I take pride in crafting pixel-perfect web applications that provide effortless user experiences.',
            'highlights' => [
                [
                    'title' => 'Full-Stack Engineering',
                    'desc' => 'Building robust, secure MVC applications using Laravel, MySQL, REST APIs, and modern frontend tools.',
                    'icon' => 'code'
                ],
                [
                    'title' => 'Monochrome UI/UX Design',
                    'desc' => 'Creating dark-mode luxury interfaces with clean typography, dynamic spacing, and intuitive UX patterns.',
                    'icon' => 'palette'
                ],
                [
                    'title' => 'System Optimization',
                    'desc' => 'Ensuring fast page load times, optimized database queries, responsive views, and clean code structure.',
                    'icon' => 'zap'
                ]
            ],
            'timeline' => [
                [
                    'period' => '2023 - Present',
                    'role' => 'Lead Full-Stack Developer',
                    'company' => 'Freelance / Digital Studio',
                    'desc' => 'Architecting custom Laravel enterprise applications, e-commerce portals, and modern client portfolio sites.'
                ],
                [
                    'period' => '2022 - 2023',
                    'role' => 'Laravel & Frontend Developer',
                    'company' => 'Tech Solutions',
                    'desc' => 'Developed responsive web applications using Blade, Tailwind CSS, Alpine.js, and RESTful API integrations.'
                ],
                [
                    'period' => '2020 - 2022',
                    'role' => 'UI/UX Designer & Web Developer',
                    'company' => 'Creative Agency',
                    'desc' => 'Designed high-fidelity wireframes in Figma and converted designs into pixel-perfect responsive HTML/CSS layouts.'
                ]
            ]
        ];

        $skills = [
            [
                'name' => 'Laravel',
                'category' => 'Backend',
                'level' => 'Expert',
                'percentage' => 95,
                'desc' => 'Blade, Eloquent, Middleware, API, Auth, Queues',
                'icon' => 'laravel'
            ],
            [
                'name' => 'PHP',
                'category' => 'Backend',
                'level' => 'Advanced',
                'percentage' => 92,
                'desc' => 'OOP, Design Patterns, PSR standards, Modern PHP 8+',
                'icon' => 'php'
            ],
            [
                'name' => 'Tailwind CSS',
                'category' => 'Frontend',
                'level' => 'Expert',
                'percentage' => 96,
                'desc' => 'V4 Utility-First, Custom Animations, Dark Theme Design System',
                'icon' => 'tailwind'
            ],
            [
                'name' => 'JavaScript',
                'category' => 'Frontend',
                'level' => 'Advanced',
                'percentage' => 88,
                'desc' => 'ES6+, DOM Manipulation, Async/Await, Alpine.js',
                'icon' => 'javascript'
            ],
            [
                'name' => 'MySQL',
                'category' => 'Database',
                'level' => 'Advanced',
                'percentage' => 88,
                'desc' => 'Schema Design, Query Optimization, Relationships & Indexing',
                'icon' => 'mysql'
            ],
            [
                'name' => 'UI/UX Design',
                'category' => 'Design',
                'level' => 'Expert',
                'percentage' => 92,
                'desc' => 'Monochrome Design Systems, Wireframing, Micro-interactions',
                'icon' => 'design'
            ],
            [
                'name' => 'RESTful APIs',
                'category' => 'Backend',
                'level' => 'Advanced',
                'percentage' => 90,
                'desc' => 'API Authentication, JSON Resources, External Services',
                'icon' => 'api'
            ],
            [
                'name' => 'Git & GitHub',
                'category' => 'Tools',
                'level' => 'Advanced',
                'percentage' => 90,
                'desc' => 'Version Control, Branching Strategy, Pull Requests & CI/CD',
                'icon' => 'git'
            ],
            [
                'name' => 'Figma',
                'category' => 'Design',
                'level' => 'Advanced',
                'percentage' => 88,
                'desc' => 'Prototyping, Component Libraries, High-Fidelity UI',
                'icon' => 'figma'
            ],
            [
                'name' => 'Alpine.js & Vite',
                'category' => 'Frontend',
                'level' => 'Advanced',
                'percentage' => 86,
                'desc' => 'Lightweight Reactive States, Vite Bundling, Asset HMR',
                'icon' => 'vite'
            ],
            [
                'name' => 'Docker & DevOps',
                'category' => 'Tools',
                'level' => 'Intermediate',
                'percentage' => 78,
                'desc' => 'Containerization, Nginx, Server Management, Deployment',
                'icon' => 'docker'
            ],
            [
                'name' => 'Postman & Redis',
                'category' => 'Tools',
                'level' => 'Advanced',
                'percentage' => 84,
                'desc' => 'API Testing, Caching Strategies, Queue Management',
                'icon' => 'server'
            ]
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'ApexSaaS - Cloud Analytics & Management Platform',
                'category' => 'Laravel System',
                'short_desc' => 'Enterprise SaaS dashboard offering real-time data visualization, multi-tenant architecture, automated invoicing, and security permissions.',
                'full_desc' => 'ApexSaaS is a full-featured cloud dashboard built with Laravel and Tailwind CSS. It handles complex data pipelines, user role management, automated recurring billing via payment gateways, and crisp interactive charts.',
                'tags' => ['Laravel 11', 'Tailwind CSS', 'MySQL', 'Chart.js', 'Alpine.js'],
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
                'demo_url' => 'https://github.com',
                'github_url' => 'https://github.com',
                'featured' => true,
                'year' => '2025'
            ],
            [
                'id' => 2,
                'title' => 'Luminary - Minimalist E-Commerce Portal',
                'category' => 'Web Apps',
                'short_desc' => 'High-end online retail store featuring seamless cart interactions, Midtrans payment gateway, stock management, and monochrome styling.',
                'full_desc' => 'Luminary delivers a luxury shopping experience with instant search, interactive product filter drawers, automated transaction receipts, and an admin management portal built on Laravel Eloquent.',
                'tags' => ['Laravel', 'Tailwind CSS', 'REST API', 'Payment Gateway', 'JavaScript'],
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
                'demo_url' => 'https://github.com',
                'github_url' => 'https://github.com',
                'featured' => true,
                'year' => '2024'
            ],
            [
                'id' => 3,
                'title' => 'MedixCare - Healthcare & Appointment System',
                'category' => 'Laravel System',
                'short_desc' => 'Integrated medical portal for patient record tracking, doctor schedule reservations, automated notifications, and prescription management.',
                'full_desc' => 'MedixCare streamlines hospital administrative workflow through a secure Laravel application supporting multi-role access (Patients, Doctors, Admins) and automated SMS/Email reminders.',
                'tags' => ['Laravel', 'Blade', 'MySQL', 'Tailwind CSS', 'Alpine.js'],
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
                'demo_url' => 'https://github.com',
                'github_url' => 'https://github.com',
                'featured' => true,
                'year' => '2024'
            ],
            [
                'id' => 4,
                'title' => 'VibeStudio - Agency Portfolio & Headless CMS',
                'category' => 'UI/UX Design',
                'short_desc' => 'Dark mode agency showcase website featuring smooth micro-animations, glassmorphism design, and custom API content backend.',
                'full_desc' => 'Designed in Figma and crafted with Laravel Blade and Tailwind CSS, VibeStudio represents cutting-edge monochrome web design with dark aesthetics and high performance.',
                'tags' => ['UI/UX Design', 'Figma', 'Tailwind CSS', 'JavaScript', 'Laravel'],
                'image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=800&q=80',
                'demo_url' => 'https://github.com',
                'github_url' => 'https://github.com',
                'featured' => false,
                'year' => '2024'
            ],
            [
                'id' => 5,
                'title' => 'NexusAPI - Microservice Payment & Auth Gateway',
                'category' => 'Laravel System',
                'short_desc' => 'High-throughput RESTful API middleware for user authentication, API key generation, rate limiting, and third-party webhook handling.',
                'full_desc' => 'NexusAPI serves as an enterprise API middleware solution built with Laravel Sanitarium authentication, Redis caching, and comprehensive logging metrics.',
                'tags' => ['Laravel API', 'Sanctum', 'Redis', 'Postman', 'Docker'],
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80',
                'demo_url' => 'https://github.com',
                'github_url' => 'https://github.com',
                'featured' => false,
                'year' => '2023'
            ],
            [
                'id' => 6,
                'title' => 'OmniTask - Real-Time Team Workspace',
                'category' => 'Web Apps',
                'short_desc' => 'Kanban-style project collaboration web application with task assignment, file attachments, and activity logs.',
                'full_desc' => 'OmniTask is a productivity web application designed to help remote engineering teams manage tasks efficiently with dark mode UI, clean drag-and-drop lists, and activity logs.',
                'tags' => ['Laravel', 'Alpine.js', 'Tailwind CSS', 'MySQL'],
                'image' => 'https://images.unsplash.com/photo-1618401471353-b98afee0b2eb?auto=format&fit=crop&w=800&q=80',
                'demo_url' => 'https://github.com',
                'github_url' => 'https://github.com',
                'featured' => false,
                'year' => '2023'
            ]
        ];

        return view('portfolio.index', compact('profile', 'stats', 'about', 'skills', 'projects'));
    }

    /**
     * Handle contact form submissions.
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you ' . e($validated['name']) . '! Your message has been received successfully. I will get back to you shortly.'
            ]);
        }

        return back()->with('success', 'Thank you ' . e($validated['name']) . '! Your message has been received successfully.');
    }
}
