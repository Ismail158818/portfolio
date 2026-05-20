@extends('layouts.app')

@section('content')
<style>
    .developers-hero {
        background: linear-gradient(135deg, #2f7a3d 0%, #1e5a2d 100%);
        padding: 30px 0;
        text-align: center;
        margin-bottom: 40px;
        border-radius: 8px;
        position: relative;
        overflow: hidden;
    }
    
    .developers-hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    }
    
    .developers-hero h1 {
        font-size: 1.8rem;
        color: white;
        margin-bottom: 0;
        font-weight: 700;
        letter-spacing: 0.5px;
    }
    
    .developer-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(47, 122, 61, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #e8e8e8;
        border-top: 4px solid #2f7a3d;
        position: relative;
    }
    
    .developer-card:hover {
        box-shadow: 0 8px 25px rgba(47, 122, 61, 0.15);
        border-color: #2f7a3d;
        transform: translateY(-5px);
    }
    
    .developer-header {
        background: white;
        padding: 25px 15px 20px;
        text-align: center;
        border-bottom: 1px solid #e8e8e8;
    }
    
    .developer-image {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        border: 3px solid #2f7a3d;
        object-fit: cover;
        display: block;
        background: white;
        margin: 0 auto;
        box-shadow: 0 4px 12px rgba(47, 122, 61, 0.15);
        transition: all 0.3s ease;
    }
    
    .developer-card:hover .developer-image {
        transform: scale(1.08);
        box-shadow: 0 6px 16px rgba(47, 122, 61, 0.25);
    }
    
    .developer-body {
        padding: 20px 15px;
        text-align: center;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .developer-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 3px;
    }
    
    .developer-title {
        color: #2f7a3d;
        font-weight: 600;
        font-size: 0.85rem;
        margin-bottom: 12px;
        letter-spacing: 0.3px;
    }
    
    .developer-description {
        color: #555;
        font-size: 0.85rem;
        line-height: 1.5;
        margin-bottom: 15px;
        flex: 1;
    }

    .developer-skills {
        margin-bottom: 16px;
        display: flex;
        gap: 8px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .skill-badge {
        font-size: 0.75rem;
        color: #2f7a3d;
        border: 1px solid #2f7a3d;
        border-radius: 999px;
        padding: 5px 10px;
        background: rgba(47, 122, 61, 0.08);
    }
    
    .developer-links {
        display: flex;
        gap: 10px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .social-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 16px;
        border-radius: 24px;
        font-size: 0.85rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        background: #2f7a3d;
        color: white;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 18px rgba(47, 122, 61, 0.15);
    }
    
    .social-btn.github-btn {
        background: #24292f;
        box-shadow: 0 8px 18px rgba(36, 41, 47, 0.2);
    }
    
    .social-btn.portfolio-btn {
        background: #2f7a3d;
    }
    
    .social-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.08);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .social-btn:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 0 22px rgba(47, 122, 61, 0.35);
    }
    
    .social-btn.github-btn:hover {
        box-shadow: 0 0 22px rgba(36, 41, 47, 0.35);
    }
    
    .social-btn:hover::before {
        opacity: 1;
    }
    
    .back-btn {
        background: #2f7a3d;
        color: white;
        border-radius: 20px;
        padding: 8px 20px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        margin-top: 20px;
        font-size: 0.9rem;
        border: 2px solid #2f7a3d;
    }
    
    .back-btn:hover {
        background: white;
        color: #2f7a3d;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(47, 122, 61, 0.2);
    }
</style>

<div class="container py-4">
    <div class="developers-hero mb-4">
        <h1>Our Development Team</h1>
    </div>

    <div class="row g-4 mb-4">

        <div class="col-lg-6">
            <div class="developer-card">
                <div class="developer-header">
                    <img src="{{ asset('storage/developers/ismail.png') }}" alt="Ismail" class="developer-image">
                </div>
                <div class="developer-body">
                    <h2 class="developer-name">Ismail Mahmoud Basbous</h2>
                    <div class="developer-title">Software Engineering – Data Science</div>
                    <p class="developer-description">
                        Backend developer with experience in building web applications using Laravel and working with databases and digital systems. Currently studying Software Engineering with a Data Science track, focusing on data analysis, data engineering, and modern software development practices.
                        Interested in combining programming and analytical thinking to turn data into practical solutions.
                    </p>
                    <div class="developer-skills">
                        <span class="skill-badge">PHP</span>
                        <span class="skill-badge">Data Analyst</span>
                        <span class="skill-badge">Databases</span>
                    </div>
                    <div class="developer-links">
                        <a href="https://github.com/Ismail158818" target="_blank" class="social-btn github-btn">
                            <i class="bi bi-github"></i> GitHub
                        </a>
                        <a href="https://ismail158818.github.io/portfolio/" target="_blank" class="social-btn portfolio-btn">
                            <i class="bi bi-globe"></i> Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="developer-card">
                <div class="developer-header">
                    <img src="https://api.dicebear.com/7.x/initials/svg?seed=LN&backgroundColor=2f7a3d&textColor=ffffff&scale=70" alt="Layla" class="developer-image">
                </div>
                <div class="developer-body">
                    <h2 class="developer-name">Layla Sameh Nayyouf</h2>
                    <div class="developer-title">Software Engineering – Data Science</div>
                    <p class="developer-description">
                        Frontend developer focused on building modern and user-friendly web interfaces, with experience in Angular and frontend technologies. Currently studying Software Engineering with a Data Science track, with growing interest in data analysis and data engineering.
                        Passionate about continuous learning and creating applications that combine strong user experience with meaningful use of data.
                    </p>
                    <div class="developer-skills">
                        <span class="skill-badge">Angular</span>
                        <span class="skill-badge">Data Cleaning</span>
                        <span class="skill-badge">Problem Solving</span>
                        <span class="skill-badge">English Fluency</span>
                    </div>
                    <div class="developer-links">
                        <a href="https://github.com/LaylaSN" target="_blank" class="social-btn github-btn">
                            <i class="bi bi-github"></i> GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('library.index') }}" class="back-btn">
            <i class="bi bi-arrow-left"></i> Back to Library
        </a>
    </div>
</div>
@endsection
