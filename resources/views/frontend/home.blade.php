@extends('frontend.layout')

@section('content')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="text-center py-5 rounded shadow hero-section mb-5">
        <h1 class="display-4 fw-bold text-white">Mahdi Jamaludin</h1>
        <p class="lead text-light">Discover my skills, education, and projects</p>
        <a href="#about" class="btn btn-lg btn-light mt-3 me-2">Learn More</a>
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg mt-3">Masuk Admin</a>
    </div>

    <!-- About Me -->
    <div class="fade-in mb-5" id="about">
        <h2 class="fw-bold text-center mb-4">About Me</h2>
        <div class="card border-0 shadow-sm p-4">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" alt="Profile Image" class="img-fluid rounded-circle shadow" width="200">
                    @else
                        <img src="https://via.placeholder.com/200x200?text=No+Image" class="img-fluid rounded-circle shadow" alt="No Image">
                    @endif
                </div>
                <div class="col-md-8">
                    <h4><i class="bi bi-person-circle me-2 text-primary"></i><strong>Name:</strong> {{ $about->name ?? 'Not Set' }}</h4>
                    <h5><i class="bi bi-briefcase me-2 text-success"></i><strong>Title:</strong> {{ $about->title ?? 'Not Set' }}</h5>
                    <p class="mt-3"><i class="bi bi-chat-left-text me-2 text-secondary"></i>{{ $about->description ?? 'Not Set' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills -->
    <div class="fade-in mb-5" id="skills">
        <h2 class="fw-bold text-center mb-4">Skills</h2>
        <div class="row">
            @foreach($skills as $skill)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow-sm text-center p-3">
                        <h5 class="mb-2">{{ $skill->name }}</h5>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $skill->level }}%;" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100">
                                {{ $skill->level }}%
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Education -->
    <div class="fade-in mb-5" id="education">
        <h2 class="fw-bold text-center mb-4">Education</h2>
        <ul class="list-group list-group-flush">
            @foreach($education as $edu)
                <li class="list-group-item shadow-sm">
                    <strong>{{ $edu->degree }}</strong> - {{ $edu->institution }} <span class="text-muted">({{ $edu->year }})</span>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Projects -->
    <div class="fade-in mb-5" id="projects">
        <h2 class="fw-bold text-center mb-4">Projects</h2>
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="Project Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                            @if ($project->url)
                                <a href="{{ $project->url }}" class="btn btn-primary" target="_blank">Visit Project</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Styles + Animation -->
<style>
    .hero-section {
        background: linear-gradient(135deg, #4e73df, #1cc88a);
    }

    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }

    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }

    .progress-bar {
        font-weight: bold;
    }

    body {
        scroll-behavior: smooth;
    }
</style>

<!-- Scroll Animation -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const fadeElements = document.querySelectorAll(".fade-in");

        function showVisibleElements() {
            fadeElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add("show");
                }
            });
        }

        window.addEventListener("scroll", showVisibleElements);
        showVisibleElements();
    });
</script>
@endsection
