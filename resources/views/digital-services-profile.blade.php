<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Digital Services Profile - PT ABHIRAJA GIOVANNI TRYAMANDA</title>
    <link rel="icon" href="{{ asset('assets/img/logo/Logo.png') }}" type="image/png">

    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700&display=swap" as="style">

    <!-- Critical CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/digital-profile.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/process-section.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/contact-footer.css') }}" rel="stylesheet">

    <!-- Non-critical CSS - load async -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/particles.js/particles.min.js" as="script">

    <!-- Fallback for non-JS browsers -->
    <noscript>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </noscript>
</head>

<body class="loading">
    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="loader-container">
            <div class="code-loader">
                <div class="code-line">&lt;html&gt;</div>
                <div class="code-line">&nbsp;&nbsp;&lt;body&gt;</div>
                <div class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;Loading...&lt;/h1&gt;</div>
                <div class="code-line">&nbsp;&nbsp;&lt;/body&gt;</div>
                <div class="code-line">&lt;/html&gt;</div>
            </div>
            <div class="loading-progress">
                <div class="progress-bar"></div>
                <div class="progress-text"></div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top digital-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logo/Logo.png') }}" alt="Logo" class="logo-img">
                <span class="brand-text">Abhiraja<span class="brand-accent">Digital</span></span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <div class="burger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#process">Process</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-nav-cta" href="#contact">Start Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">                    <div class="hero-content">
                        <div class="typing-container">
                            <h1 class="typing-text">We Build Digital Experiences</h1>
                        </div>
                        <p class="subtitle">
                            Transforming ideas into powerful digital solutions with cutting-edge technology, 
                            innovative design, and seamless user experiences.
                        </p>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="0">0</span>
                                <span class="stat-label">Projects Completed</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="0">0</span>
                                <span class="stat-label">Client Satisfaction</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="0">0</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                        </div>
                       
                    </div>
                </div>                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="hero-visual">
                        <!-- Animated Laptop/Computer -->
                        <div class="computer-mockup">
                            <div class="laptop-base">
                                <div class="laptop-screen">
                                    <div class="screen-bezel">
                                        <div class="screen-content">
                                            <!-- Code Editor Interface -->
                                            <div class="code-editor">
                                                <div class="editor-header">
                                                    <div class="editor-tabs">
                                                        <div class="tab active">app.js</div>
                                                        <div class="tab">style.css</div>
                                                        <div class="tab">index.html</div>
                                                    </div>
                                                    <div class="editor-controls">
                                                        <span class="dot red"></span>
                                                        <span class="dot yellow"></span>
                                                        <span class="dot green"></span>
                                                    </div>
                                                </div>
                                                <div class="editor-body">
                                                    <div class="line-numbers">
                                                        <span>1</span>
                                                        <span>2</span>
                                                        <span>3</span>
                                                        <span>4</span>
                                                        <span>5</span>
                                                        <span>6</span>
                                                        <span>7</span>
                                                        <span>8</span>
                                                        <span>9</span>
                                                        <span>10</span>
                                                    </div>
                                                    <div class="code-content">
                                                        <div class="code-line typing-animation" data-delay="0">
                                                            <span class="keyword">const</span> 
                                                            <span class="variable">createAwesome</span> = 
                                                            <span class="bracket">(</span><span class="parameter">idea</span><span class="bracket">) => {</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="1000">
                                                            &nbsp;&nbsp;<span class="keyword">return</span> 
                                                            <span class="bracket">{</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="2000">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="property">design</span>: 
                                                            <span class="string">'modern'</span><span class="bracket">,</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="3000">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="property">performance</span>: 
                                                            <span class="string">'blazing-fast'</span><span class="bracket">,</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="4000">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="property">experience</span>: 
                                                            <span class="string">'seamless'</span><span class="bracket">,</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="5000">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="property">success</span>: 
                                                            <span class="boolean">true</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="6000">
                                                            &nbsp;&nbsp;<span class="bracket">}</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="7000">
                                                            <span class="bracket">}</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="8000">
                                                            <span class="comment">// Ready to launch! 🚀</span>
                                                        </div>
                                                        <div class="code-line typing-animation" data-delay="9000">
                                                            <span class="function">deploy</span><span class="bracket">(</span><span class="variable">createAwesome</span><span class="bracket">(</span><span class="string">'your-idea'</span><span class="bracket">))</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Terminal Output -->
                                            <div class="terminal-output">
                                                <div class="terminal-line">
                                                    <span class="prompt">$</span> 
                                                    <span class="command typing-terminal" data-delay="10000">npm run build</span>
                                                </div>
                                                <div class="terminal-line success typing-terminal" data-delay="11000">
                                                    ✓ Build completed successfully!
                                                </div>
                                                <div class="terminal-line success typing-terminal" data-delay="12000">
                                                    ✓ Your project is ready to deploy
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Screen Glow Effect -->
                                        <div class="screen-glow"></div>
                                    </div>
                                </div>
                                <div class="laptop-keyboard">
                                    <div class="keyboard-row">
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                    </div>
                                    <div class="keyboard-row">
                                        <div class="key wide"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                        <div class="key"></div>
                                    </div>
                                    <div class="keyboard-row">
                                        <div class="key space"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Tech Icons -->
                        <div class="floating-tech">
                            <div class="tech-icon tech-1" data-tech="React">
                                <i class="fab fa-react"></i>
                            </div>
                            <div class="tech-icon tech-2" data-tech="Vue">
                                <i class="fab fa-vuejs"></i>
                            </div>
                            <div class="tech-icon tech-3" data-tech="Laravel">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <div class="tech-icon tech-4" data-tech="Node">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <div class="tech-icon tech-5" data-tech="Python">
                                <i class="fab fa-python"></i>
                            </div>
                            <div class="tech-icon tech-6" data-tech="Docker">
                                <i class="fab fa-docker"></i>
                            </div>
                        </div>
                        
                        <!-- Code Particles -->
                        <div class="code-particles">
                            <div class="particle">&lt;/&gt;</div>
                            <div class="particle">{}</div>
                            <div class="particle">[]</div>
                            <div class="particle">()</div>
                            <div class="particle">;</div>
                            <div class="particle">=&gt;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Animated Background Elements -->
        <div class="bg-elements">
            <div class="floating-element elem-1"></div>
            <div class="floating-element elem-2"></div>
            <div class="floating-element elem-3"></div>
        </div>
    </section>    <!-- Services Section -->
    <section id="services" class="section reveal">
        <!-- Animated Root Background -->
        <div class="root-animation">
            <svg class="root-svg" viewBox="0 0 1200 600">
                <path class="root-path root-main" d="M600,300 Q300,200 100,250 Q50,280 20,320" stroke="url(#rootGradient)" stroke-width="3" fill="none"/>
                <path class="root-path root-branch-1" d="M400,250 Q350,180 300,150 Q250,120 200,100" stroke="url(#rootGradient)" stroke-width="2" fill="none"/>
                <path class="root-path root-branch-2" d="M500,280 Q450,220 400,180 Q350,140 300,110" stroke="url(#rootGradient)" stroke-width="2" fill="none"/>
                <path class="root-path root-branch-3" d="M450,320 Q400,380 350,420 Q300,460 250,490" stroke="url(#rootGradient)" stroke-width="2" fill="none"/>
                <path class="root-path root-branch-4" d="M550,330 Q500,390 450,430 Q400,470 350,500" stroke="url(#rootGradient)" stroke-width="2" fill="none"/>
                
                <!-- Root Nodes -->
                <circle class="root-node" cx="600" cy="300" r="8" fill="url(#nodeGradient)"/>
                <circle class="root-node" cx="400" cy="250" r="6" fill="url(#nodeGradient)"/>
                <circle class="root-node" cx="500" cy="280" r="6" fill="url(#nodeGradient)"/>
                <circle class="root-node" cx="450" cy="320" r="6" fill="url(#nodeGradient)"/>
                <circle class="root-node" cx="550" cy="330" r="6" fill="url(#nodeGradient)"/>
                
                <!-- Gradients -->
                <defs>
                    <linearGradient id="rootGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#667eea;stop-opacity:0.8"/>
                        <stop offset="50%" style="stop-color:#764ba2;stop-opacity:0.6"/>
                        <stop offset="100%" style="stop-color:#ffd700;stop-opacity:0.4"/>
                    </linearGradient>
                    <radialGradient id="nodeGradient">
                        <stop offset="0%" style="stop-color:#00f5ff;stop-opacity:1"/>
                        <stop offset="100%" style="stop-color:#667eea;stop-opacity:0.8"/>
                    </radialGradient>
                </defs>
            </svg>
        </div>
        
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Our Digital Services</h2>
                <p class="section-subtitle">Transforming businesses through innovative technology solutions</p>
                
                <!-- Enhanced Description -->
                <div class="section-description">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <p class="description-text">
                                We specialize in creating cutting-edge digital experiences that drive growth and innovation. 
                                Our comprehensive suite of services combines modern technology with creative design to deliver 
                                solutions that not only meet your current needs but scale with your future ambitions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
              <div class="services-grid">
                <!-- Web Development -->
                <div class="service-card modern-card" data-service="web" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles">
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    
                    <!-- Web Development Animation -->
                    <div class="service-animation web-animation">
                        <div class="code-window">
                            <div class="window-header">
                                <div class="window-controls">
                                    <span class="control red"></span>
                                    <span class="control yellow"></span>
                                    <span class="control green"></span>
                                </div>
                                <div class="window-title"></div>
                            </div>
                            <div class="code-content">
                                <div class="code-line typing-line" data-delay="1s">
                                    <span class="tag">&lt;div</span>
                                    <span class="attr">class=</span>
                                    <span class="string">"website"</span>
                                    <span class="tag">&gt;</span>
                                </div>
                                <div class="code-line typing-line" data-delay="1.5s">
                                    <span class="indent">  </span>
                                    <span class="tag">&lt;h1&gt;</span>
                                    <span class="text">Modern Web</span>
                                    <span class="tag">&lt;/h1&gt;</span>
                                </div>
                                <div class="code-line typing-line" data-delay="2s">
                                    <span class="tag">&lt;/div&gt;</span>
                                </div>
                            </div>
                        </div>
                        <div class="floating-elements">
                            <div class="element html animate-float">&lt;/&gt;</div>
                            <div class="element css animate-float">{}</div>
                        </div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon pulse-icon">
                         
                            <div class="icon-glow"></div>
                        </div>
                        <div class="icon-orbit">
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title glitch-text" data-text="Web Development">Web Development</h3>
                        <p class="service-description">Custom websites and web applications built with modern frameworks and cutting-edge technology.</p>
                        <div class="service-progress">
                            <div class="progress-bar" data-skill="95"></div>
                            <span class="progress-text">95%</span>
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>Responsive Design</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>SEO Optimized</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Fast Loading</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Secure & Scalable</li>
                        </ul>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Projects</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Success Rate</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay pt-5">
                        <button class="btn-explore glow-button" 
                                data-bs-toggle="modal" 
                                data-bs-target="#serviceModal"
                                data-service-name="Web Development"
                                data-service-description="Custom websites and web applications built with modern frameworks and cutting-edge technology">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                  <!-- Mobile App Development -->
                <div class="service-card modern-card" data-service="mobile" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles">
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    
                    <!-- Mobile App Animation -->
                    <div class="service-animation mobile-animation">
                        <div class="mobile-frame">
                            <div class="mobile-screen">
                                <div class="mobile-header">
                                    <div class="mobile-notch pulse-notch"></div>
                                    <div class="signal-bars">
                                        <span class="bar bar-1"></span>
                                        <span class="bar bar-2"></span>
                                        <span class="bar bar-3"></span>
                                        <span class="bar bar-4"></span>
                                    </div>
                                    <div class="battery-indicator">
                                        <div class="battery-level"></div>
                                    </div>
                                </div>
                                <div class="app-interface">
                                    <div class="app-icon bounce-icon" data-delay="0.5s"></div>
                                    <div class="app-icon bounce-icon" data-delay="0.7s"></div>
                                    <div class="app-icon active bounce-icon" data-delay="0.9s"></div>
                                    <div class="app-icon bounce-icon" data-delay="1.1s"></div>
                                </div>
                                <div class="mobile-nav">
                                    <div class="nav-dot active pulse-dot"></div>
                                    <div class="nav-dot pulse-dot"></div>
                                    <div class="nav-dot pulse-dot"></div>
                                </div>
                            </div>
                        </div>
                        <div class="app-particles">
                            <div class="particle float-particle"></div>
                            <div class="particle float-particle"></div>
                            <div class="particle float-particle"></div>
                        </div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon pulse-icon">
                          
                            <div class="icon-glow"></div>
                        </div>
                        <div class="icon-orbit">
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title glitch-text" data-text="Mobile App Development">Mobile App Development</h3>
                        <p class="service-description">Native and cross-platform mobile applications for iOS and Android with exceptional UX.</p>
                        <div class="service-progress">
                            <div class="progress-bar" data-skill="92"></div>
                            <span class="progress-text">92%</span>
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>Cross-Platform</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>Native Performance</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Offline Support</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Push Notifications</li>
                        </ul>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Apps Built</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">User Rating</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay pt-5">
                        <button class="btn-explore glow-button" 
                                data-bs-toggle="modal" 
                                data-bs-target="#serviceModal"
                                data-service-name="Mobile App Development"
                                data-service-description="Native and cross-platform mobile applications for iOS and Android with superior performance and user experience">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                  <!-- UI/UX Design -->
                <div class="service-card modern-card" data-service="design" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles">
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    
                    <!-- UI/UX Design Animation -->
                    <div class="service-animation design-animation">
                        <div class="design-canvas">
                            <div class="design-tools">
                                <div class="tool color-picker active-tool" data-tool="color"></div>
                                <div class="tool brush hover-tool" data-tool="brush"></div>
                                <div class="tool pen hover-tool" data-tool="pen"></div>
                            </div>
                            <div class="canvas-area">
                                <div class="design-element rectangle draw-animation"></div>
                                <div class="design-element circle draw-animation" data-delay="0.5s"></div>
                                <div class="design-element text-line draw-animation" data-delay="1s"></div>
                                <div class="design-element text-line short draw-animation" data-delay="1.2s"></div>
                            </div>
                            <div class="color-palette">
                                <div class="color-swatch blue active-color pulse-color"></div>
                                <div class="color-swatch pink hover-color"></div>
                                <div class="color-swatch green hover-color"></div>
                                <div class="color-swatch yellow hover-color"></div>
                            </div>
                        </div>
                        <div class="design-cursor animate-cursor"></div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon pulse-icon">
                           
                            <div class="icon-glow"></div>
                        </div>
                        <div class="icon-orbit">
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title glitch-text" data-text="UI/UX Design">UI/UX Design</h3>
                        <p class="service-description">Beautiful and intuitive interfaces designed to enhance user experience and engagement.</p>
                        <div class="service-progress">
                            <div class="progress-bar" data-skill="92"></div>
                            <span class="progress-text">92%</span>
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>User Research</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>Prototyping</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Wireframing</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Design Systems</li>
                        </ul>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Designs</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">User Rating</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay pt-5">
                        <button class="btn-explore glow-button" 
                                data-bs-toggle="modal" 
                                data-bs-target="#serviceModal"
                                data-service-name="UI/UX Design"
                                data-service-description="Beautiful and intuitive user interfaces designed to provide exceptional user experiences across all platforms">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Cloud Solutions -->
                <div class="service-card modern-card" data-service="cloud" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles">
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    
                    <!-- Cloud Animation -->
                    <div class="service-animation cloud-animation">
                        <div class="cloud-container">
                            <div class="cloud main-cloud">
                                <div class="cloud-part part-1"></div>
                                <div class="cloud-part part-2"></div>
                                <div class="cloud-part part-3"></div>
                            </div>
                            <div class="cloud secondary-cloud">
                                <div class="cloud-part part-1"></div>
                                <div class="cloud-part part-2"></div>
                            </div>
                        </div>
                        <div class="data-transfer">
                            <div class="data-line line-1"></div>
                            <div class="data-line line-2"></div>
                            <div class="data-line line-3"></div>
                        </div>
                        <div class="server-rack">
                            <div class="server server-1 active-server"></div>
                            <div class="server server-2"></div>
                            <div class="server server-3 active-server"></div>
                        </div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon pulse-icon">
                           
                            <div class="icon-glow"></div>
                        </div>
                        <div class="icon-orbit">
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title glitch-text" data-text="Cloud Solutions">Cloud Solutions</h3>
                        <p class="service-description">Scalable cloud infrastructure and deployment solutions for modern applications.</p>
                        <div class="service-progress">
                            <div class="progress-bar" data-skill="90"></div>
                            <span class="progress-text">90%</span>
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>Auto Scaling</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>High Availability</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Monitoring</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Backup & Recovery</li>
                        </ul>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Deployments</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Uptime</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay pt-5">
                        <button class="btn-explore glow-button" 
                                data-bs-toggle="modal" 
                                data-bs-target="#serviceModal"
                                data-service-name="Cloud Solutions"
                                data-service-description="Scalable cloud infrastructure and solutions to help your business grow and adapt to changing demands">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- E-Commerce -->
                <div class="service-card modern-card" data-service="ecommerce" data-aos="fade-up" data-aos-delay="500">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles">
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>    
                    </div>
                    
                    <!-- E-Commerce Animation -->
                    <div class="service-animation ecommerce-animation">
                        <div class="shopping-interface">
                            <div class="product-grid">
                                <div class="product-card card-1 hover-product"></div>
                                <div class="product-card card-2"></div>
                                <div class="product-card card-3"></div>
                                <div class="product-card card-4"></div>
                            </div>
                            <div class="shopping-cart">
                                <div class="cart-icon bounce-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="cart-count animate-count">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="payment-process">
                            <div class="payment-step step-1 active-step"></div>
                            <div class="payment-step step-2"></div>
                            <div class="payment-step step-3"></div>
                        </div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon pulse-icon">
                            
                            <div class="icon-glow"></div>
                        </div>
                        <div class="icon-orbit">
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title glitch-text" data-text="E-Commerce Development">E-Commerce Development</h3>
                        <p class="service-description">Complete e-commerce solutions with secure payment integration and inventory management.</p>
                        <div class="service-progress">
                            <div class="progress-bar" data-skill="88"></div>
                            <span class="progress-text">88%</span>
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>Payment Gateway</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>Inventory Management</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Order Tracking</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Analytics Dashboard</li>
                        </ul>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Stores Built</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Success Rate</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay pt-5">
                        <button class="btn-explore glow-button">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Digital Marketing -->
                <div class="service-card modern-card" data-service="marketing" data-aos="fade-up" data-aos-delay="600">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles">
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    
                    <!-- Digital Marketing Animation -->
                    <div class="service-animation marketing-animation">
                        <div class="analytics-dashboard">
                            <div class="chart-container">
                                <div class="chart-bar bar-1 grow-bar" data-height="60%"></div>
                                <div class="chart-bar bar-2 grow-bar" data-height="80%"></div>
                                <div class="chart-bar bar-3 grow-bar" data-height="95%"></div>
                                <div class="chart-bar bar-4 grow-bar" data-height="75%"></div>
                            </div>
                            <div class="metrics-display">
                                <div class="metric metric-1">
                                    <span class="metric-value counter-animation" data-target="15.2">0</span>
                                    <span class="metric-label">K</span>
                                </div>
                                <div class="metric metric-2">
                                    <span class="metric-value counter-animation" data-target="89">0</span>
                                    <span class="metric-label">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="social-icons">
                            <div class="social-icon facebook pulse-social"></div>
                            <div class="social-icon instagram pulse-social"></div>
                            <div class="social-icon twitter pulse-social"></div>
                        </div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon pulse-icon">
                           
                            <div class="icon-glow"></div>
                        </div>
                        <div class="icon-orbit">
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                            <div class="orbit-dot"></div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title glitch-text" data-text="Digital Marketing">Digital Marketing</h3>
                        <p class="service-description">Strategic digital marketing solutions to grow your online presence and reach.</p>
                        <div class="service-progress">
                            <div class="progress-bar" data-skill="93"></div>
                            <span class="progress-text">93%</span>
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>SEO Optimization</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>Social Media</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Content Marketing</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Analytics & Reporting</li>
                        </ul>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">Campaigns</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="1">0</span>
                                <span class="stat-label">ROI Increase</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay pt-5"></div>
                        <button class="btn-explore glow-button">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            
            <!-- Services CTA Button -->
        </div>
    </section>
    
    </section>

    <!-- Team Section -->
    <section id="team" class="section reveal">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Meet Our <span class="gradient-text">Expert Team</span></h2>
                <p class="section-subtitle">Passionate professionals dedicated to creating exceptional digital experiences</p>
            </div>
            
            <!-- CEO Section - Simple Center Layout with Stage Effect -->
            <div class="ceo-section text-center mb-5" data-aos="fade-up">
                <div class="ceo-simple-card">
                    <div class="ceo-avatar">
                        <img src="assets/img/team/CEO.png" alt="RAJA FAKHRUROZI SAFIRA, S.M">
                        <div class="ceo-badge">
                            <i class="fas fa-crown"></i>
                        </div>
                    </div>
                    <div class="ceo-info-stage">
                        <h3 class="ceo-name mt-3">RAJA FAKHRUROZI SAFIRA, S.M</h3>
                        <p class="ceo-title mb-3">Chief Executive Officer & Founder</p>
                        <div class="ceo-social">
                            <a href="#" class="social-link me-3"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-link me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Members - Single Row with Stage Effect -->
            <div class="team-row" data-aos="fade-up" data-aos-delay="200">
                <div class="row justify-content-center">
                    <!-- Team Member 1 -->
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="team-member-simple text-center">
                            <div class="member-avatar">
                                <img src="assets/img/team/hasbi.png" alt="Hasbi">
                            </div>
                            <div class="member-info-stage">
                                <h5 class="member-name mt-3">Hasbi</h5>
                                <p class="member-role">Frontend Developer</p>
                                <div class="member-social">
                                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 2 -->
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="team-member-simple text-center">
                            <div class="member-avatar">
                                <img src="assets/img/team/bintang.png" alt="Bintang">
                            </div>
                            <div class="member-info-stage">
                                <h5 class="member-name mt-3">Bintang</h5>
                                <p class="member-role">Project Manager</p>
                                <div class="member-social">
                                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 3 -->
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="team-member-simple text-center">
                            <div class="member-avatar">
                                <img src="assets/img/team/adzril.png" alt="Adzril">
                            </div>
                            <div class="member-info-stage">
                                <h5 class="member-name mt-3">Adzril</h5>
                                <p class="member-role">Backend Developer</p>
                                <div class="member-social">
                                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 4 -->
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="team-member-simple text-center">
                            <div class="member-avatar">
                                <img src="assets/img/team/isa.png" alt="Isa">
                            </div>
                            <div class="member-info-stage">
                                <h5 class="member-name mt-3">Isa</h5>
                                <p class="member-role">Frontend Developer</p>
                                <div class="member-social">
                                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 5 -->
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <div class="team-member-simple text-center">
                            <div class="member-avatar">
                                <img src="assets/img/team/hafidz.png" alt="Hafidz">
                            </div>
                            <div class="member-info-stage">
                                <h5 class="member-name mt-3">Hafidz</h5>
                                <p class="member-role">Backend Developer</p>
                                <div class="member-social">
                                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="section reveal">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Our <span class="gradient-text">Development Journey</span></h2>
                <p class="section-subtitle">From first chat to live deployment - your idea becomes reality</p>
            </div>
            
            <!-- Animated Process Flow -->
            <div class="process-flow-container">
                <div class="process-timeline-line">
                    <div class="timeline-progress"></div>
                </div>
                
                <!-- Step 1: WhatsApp Consultation -->
                <div class="process-step-new" data-aos="zoom-in" data-aos-delay="100">
                    <div class="step-number-new">01</div>
                    <div class="step-icon-new whatsapp-step">
                        <div class="icon-animation">
                            <i class="fab fa-whatsapp"></i>
                            <div class="chat-bubbles">
                                <div class="chat-bubble bubble-1"></div>
                                <div class="chat-bubble bubble-2"></div>
                                <div class="chat-bubble bubble-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step-content-new">
                        <h3>WhatsApp Consultation</h3>
                        <p>Mulai dengan chat santai di WhatsApp untuk diskusi ide dan kebutuhan project Anda</p>
                        <div class="step-features">
                            <span class="feature-tag">Free Consultation</span>
                            <span class="feature-tag">24/7 Response</span>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Deal Agreement -->
                <div class="process-step-new" data-aos="zoom-in" data-aos-delay="200">
                    <div class="step-number-new">02</div>
                    <div class="step-icon-new deal-step">
                        <div class="icon-animation">
                            <i class="fas fa-handshake"></i>
                            <div class="deal-effect">
                                <div class="coin coin-1"></div>
                                <div class="coin coin-2"></div>
                                <div class="coin coin-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step-content-new">
                        <h3>Deal & Agreement</h3>
                        <p>Sepakat harga, timeline, dan scope project dengan kontrak yang jelas dan transparan</p>
                        <div class="step-features">
                            <span class="feature-tag">Fixed Price</span>
                            <span class="feature-tag">Clear Contract</span>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Initial Design -->
                <div class="process-step-new" data-aos="zoom-in" data-aos-delay="300">
                    <div class="step-number-new">03</div>
                    <div class="step-icon-new design-step">
                        <div class="icon-animation">
                            <i class="fas fa-palette"></i>
                            <div class="design-elements">
                                <div class="design-circle circle-1"></div>
                                <div class="design-circle circle-2"></div>
                                <div class="design-square"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step-content-new">
                        <h3>Desain Awal</h3>
                        <p>Tim designer membuat mockup dan prototype untuk visualisasi project Anda</p>
                        <div class="step-features">
                            <span class="feature-tag">UI/UX Design</span>
                            <span class="feature-tag">Interactive Mockup</span>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Development -->
                <div class="process-step-new" data-aos="zoom-in" data-aos-delay="400">
                    <div class="step-number-new">04</div>
                    <div class="step-icon-new development-step">
                        <div class="icon-animation">
                            <i class="fas fa-code"></i>
                            <div class="code-lines">
                                <div class="code-line line-1"></div>
                                <div class="code-line line-2"></div>
                                <div class="code-line line-3"></div>
                                <div class="code-line line-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step-content-new">
                        <h3>Pengerjaan</h3>
                        <p>Developer mulai coding dengan teknologi terkini dan best practices</p>
                        <div class="step-features">
                            <span class="feature-tag">Clean Code</span>
                            <span class="feature-tag">Modern Tech</span>
                        </div>
                    </div>
                </div>

                <!-- Step 5: Revision -->
                <div class="process-step-new" data-aos="zoom-in" data-aos-delay="500">
                    <div class="step-number-new">05</div>
                    <div class="step-icon-new revision-step">
                        <div class="icon-animation">
                            <i class="fas fa-sync-alt"></i>
                            <div class="revision-arrows">
                                <div class="arrow arrow-1"></div>
                                <div class="arrow arrow-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step-content-new">
                        <h3>Revisi</h3>
                        <p>Review bersama dan revisi sesuai feedback untuk hasil yang sempurna</p>
                        <div class="step-features">
                            <span class="feature-tag">3x Free Revision</span>
                            <span class="feature-tag">Client Feedback</span>
                        </div>
                    </div>
                </div>

                <!-- Step 6: Final Fix -->
                <div class="process-step-new" data-aos="zoom-in" data-aos-delay="600">
                    <div class="step-number-new">06</div>
                    <div class="step-icon-new fix-step">
                        <div class="icon-animation">
                            <i class="fas fa-tools"></i>
                            <div class="fix-sparks">
                                <div class="spark spark-1"></div>
                                <div class="spark spark-2"></div>
                                <div class="spark spark-3"></div>
                                <div class="spark spark-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step-content-new">
                        <h3>Final Fix</h3>
                        <p>Perbaikan terakhir, testing menyeluruh, dan optimasi performa</p>
                        <div class="step-features">
                            <span class="feature-tag">Bug Testing</span>
                            <span class="feature-tag">Performance Check</span>
                        </div>
                    </div>
                </div>

                <!-- Step 7: Deploy -->
                <div class="process-step-new" data-aos="zoom-in" data-aos-delay="700">
                    <div class="step-number-new">07</div>
                    <div class="step-icon-new deploy-step">
                        <div class="icon-animation">
                            <i class="fas fa-rocket"></i>
                            <div class="rocket-trail">
                                <div class="trail-particle particle-1"></div>
                                <div class="trail-particle particle-2"></div>
                                <div class="trail-particle particle-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step-content-new">
                        <h3>Deploy & Launch</h3>
                        <p>Project live di server dengan monitoring dan support berkelanjutan</p>
                        <div class="step-features">
                            <span class="feature-tag">Live Production</span>
                            <span class="feature-tag">24/7 Support</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Stats -->
            <div class="process-stats" data-aos="fade-up" data-aos-delay="800">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="stat-number" data-counter="7">0</div>
                            <div class="stat-label">Days Average</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="stat-number" data-counter="100">0</div>
                            <div class="stat-label">% Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="stat-number" data-counter="3">0</div>
                            <div class="stat-label">Free Revisions</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="stat-number" data-counter="24">0</div>
                            <div class="stat-label">Hours Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-content">
                        <h2 class="section-title">Let's Start Your <span class="gradient-text">Digital Journey</span></h2>
                        <p class="section-subtitle">Ready to transform your ideas into reality? Get in touch with our expert team.</p>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Phone</h4>
                                    <p>+62 851-5620-9325</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Email</h4>
                                    <p>digital@abhiraja.com</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Office</h4>
                                    <p>Jakarta, Indonesia</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-social">
                            <h4>Follow Us</h4>
                            <div class="social-links">
                                <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-form-wrapper">
                        <form class="contact-form" id="contactForm">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" required>
                                <span class="form-line"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" required>
                                <span class="form-line"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                                <span class="form-line"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="service">Service Interested</label>
                                <select id="service" name="service" required>
                                    <option value="">Select a service</option>
                                    <option value="web">Web Development</option>
                                    <option value="mobile">Mobile App Development</option>
                                    <option value="design">UI/UX Design</option>
                                    <option value="ecommerce">E-Commerce</option>
                                    <option value="cloud">Cloud Solutions</option>
                                    <option value="marketing">Digital Marketing</option>
                                </select>
                                <span class="form-line"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Project Description</label>
                                <textarea id="message" name="message" rows="4" required></textarea>
                                <span class="form-line"></span>
                            </div>
                            
                            <button type="submit" class="btn-submit">
                                <span class="btn-text">Send Message</span>
                                <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                                <div class="btn-ripple"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-brand">
                            <img src="assets/img/logo/Logo.png" alt="Logo" class="footer-logo">
                            <h3>Abhiraja<span class="brand-accent">Digital</span></h3>
                            <p>Transforming ideas into powerful digital solutions with cutting-edge technology and innovative design.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-links">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="#services">Web Development</a></li>
                                <li><a href="#services">Mobile Apps</a></li>
                                <li><a href="#services">UI/UX Design</a></li>
                                <li><a href="#services">Cloud Solutions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-links">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="#team">About Us</a></li>
                                <li><a href="#team">Our Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-links">
                            <h4>Resources</h4>
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-newsletter">
                            <h4>Newsletter</h4>
                            <p>Subscribe to get updates</p>
                            <form class="newsletter-form">
                                <input type="email" placeholder="Enter email">
                                <button type="submit"><i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>&copy; 2025 PT Abhiraja Giovanni Tryamanda. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modal -->
    <div class="modal fade" id="portfolioModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Project Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Content will be loaded dynamically -->
                </div>
            </div>
        </div>
    </div>

    <!-- Service Modal -->
    @include('modals.serviceModal')

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <script>
        // Immediate loading screen control
        document.addEventListener('DOMContentLoaded', function() {
            const loadingScreen = document.getElementById('loading-screen');
            if (loadingScreen) {
                // Ensure loading screen is hidden after maximum 2 seconds as failsafe
                setTimeout(function() {
                    document.body.classList.remove('loading');
                    loadingScreen.style.opacity = '0';
                    setTimeout(function() {
                        loadingScreen.style.display = 'none';
                    }, 300);
                }, 2000);
            }
        });
        
        // Contact Form & Back to Top JavaScript
        // Back to Top Button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });
        
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Contact Form Handler
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Add ripple effect to submit button
                const submitBtn = this.querySelector('.btn-submit');
                const ripple = document.createElement('span');
                const rect = submitBtn.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('btn-ripple');
                
                submitBtn.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
                
                // Simulate form submission
                setTimeout(() => {
                    alert('Message sent successfully! We will get back to you soon.');
                    contactForm.reset();
                }, 1000);
            });
        }
        
        // Newsletter Form Handler
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                if (email) {
                    alert('Thank you for subscribing to our newsletter!');
                    this.reset();
                }
            });
        }
        
        // Form Input Focus Effects
        const formInputs = document.querySelectorAll('.form-group input, .form-group select, .form-group textarea');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/particles.js/particles.min.js"></script>
    <script src="{{ asset('assets/js/digital-profile.js') }}"></script>
</body>

</html>
