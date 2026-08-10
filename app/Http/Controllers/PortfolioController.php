<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getCommonData()
    {
        $profile = [
            'name' => 'Muh Febryant Hidayatullah',
            'nickname' => 'Muh Febryant',
            'initials' => 'MFH',
            'logo' => 'images/profile.png',
            'profile_image' => 'images/profile.png',
            'role' => 'Web Developer',
            'tagline' => 'Blending thoughtful UI design with clean, responsive development to create websites that look great and perform flawlessly.',
            'location' => 'Indonesia',
            'availability' => 'Available for Freelance & Full-Time Roles',
            'email' => 'febryanthidayatullah@gmail.com',
            'phone' => '+62 812-3456-7890',
            'discord' => 'https://discord.com/users/1261197671952154658',
            'github' => 'https://github.com/lamxialan',
            'instagram' => 'https://www.instagram.com/sel4njutnya?igsh=MWViZWtidWlnNnIxbw==',
            'tiktok' => 'https://tiktok.com/@candoskiii',
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
        ];

        $skills = [
            [
                'name' => 'Laravel',
                'category' => 'Backend',
                'level' => 'Expert',
                'percentage' => 95,
            ],
            [
                'name' => 'PHP',
                'category' => 'Backend',
                'level' => 'Advanced',
                'percentage' => 92,
            ],
            [
                'name' => 'Tailwind CSS',
                'category' => 'Frontend',
                'level' => 'Expert',
                'percentage' => 96,
            ],
            [
                'name' => 'JavaScript',
                'category' => 'Frontend',
                'level' => 'Advanced',
                'percentage' => 88,
            ],
            [
                'name' => 'MySQL',
                'category' => 'Database',
                'level' => 'Advanced',
                'percentage' => 88,
            ],
            [
                'name' => 'UI/UX Design',
                'category' => 'Design',
                'level' => 'Expert',
                'percentage' => 92,
            ],
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'Rolise Bot - Aplikasi Komunitas Discord',
                'category' => 'Discord Bot',
                'short_desc' => 'Bot Discord serbaguna yang dirancang untuk otomasi server, manajemen role interaktif, sistem moderasi, dan peningkatan engagement anggota komunitas.',
                'tags' => ['JavaScript', 'Node.js', 'Discord.js', 'Automation'],
                'image' => asset('images/rolise-bot.png'),
                'demo_url' => 'https://discord.com',
                'github_url' => 'https://github.com/lamxialan/Rolise-bot',
            ],
            [
                'id' => 2,
                'title' => 'YRICI - Portal Riset & Publikasi Ilmiah',
                'category' => 'Web Apps',
                'short_desc' => 'Platform web manajemen publikasi ilmiah dan repositori karya riset. Dirancang untuk memudahkan indeksasi jurnal, pencarian artikel ilmiah, serta pengelolaan data akademis secara terstruktur.',
                'tags' => ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL', 'REST API'],
                'image' => asset('images/yrici-project.png'),
                'demo_url' => 'https://github.com/lamxialan/YRICI',
                'github_url' => 'https://github.com/lamxialan/YRICI',
            ],
        ];

        return compact('profile', 'stats', 'about', 'skills', 'projects');
    }

    /**
     * About / Home Page
     */
    public function about()
    {
        $data = $this->getCommonData();
        return view('pages.about', $data);
    }

    /**
     * Alias for Home / About
     */
    public function index()
    {
        return $this->about();
    }

    /**
     * Skills Page
     */
    public function skills()
    {
        $data = $this->getCommonData();
        return view('pages.skills', $data);
    }

    /**
     * Projects Page
     */
    public function projects()
    {
        $data = $this->getCommonData();
        return view('pages.projects', $data);
    }

    /**
     * Contact Page
     */
    public function contact()
    {
        $data = $this->getCommonData();
        return view('pages.contact', $data);
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
                'message' => 'Thank you ' . e($validated['name']) . '! Your message has been received successfully.'
            ]);
        }

        return back()->with('success', 'Thank you ' . e($validated['name']) . '! Your message has been received successfully.');
    }
}
