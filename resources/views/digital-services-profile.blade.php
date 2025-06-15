<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Digital Services Profile - PT ABHIRAJA GIOVANNI TRYAMANDA</title>
    <link rel="icon" href="assets/img/logo/Logo.png" type="image/png">

    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700&display=swap" as="style">

    <!-- Critical CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Non-critical CSS - load async -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/particles.js/particles.min.js" as="script">
    <link rel="preload" href="assets/css/digital-profile.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Fallback for non-JS browsers -->
    <noscript>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="assets/css/digital-profile.css" rel="stylesheet">
    </noscript>
</head>

<body>
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
                <div class="progress-text">0%</div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top digital-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo/Logo.png" alt="Logo" class="logo-img">
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
                        <a class="nav-link" href="#portfolio">Portfolio</a>
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
                                <span class="stat-number" data-counter="150">0</span>
                                <span class="stat-label">Projects Completed</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="98">0</span>
                                <span class="stat-label">Client Satisfaction</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="5">0</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                        </div>
                        <div class="hero-cta">
                            <button class="btn-primary">
                                View Our Work
                                <i class="fas fa-arrow-right"></i>
                            </button>
                            <button class="btn-secondary">
                                <i class="fas fa-play me-2"></i>
                                Watch Demo
                            </button>
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
              <div class="services-grid">                <!-- Web Development -->
                <div class="service-card modern-card" data-service="web" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles"></div>
                    
                    <!-- Web Development Animation -->
                    <div class="service-animation web-animation">
                        <div class="code-window">
                            <div class="window-header">
                                <div class="window-controls">
                                    <span class="control red"></span>
                                    <span class="control yellow"></span>
                                    <span class="control green"></span>
                                </div>
                                <div class="window-title">index.html</div>
                            </div>
                            <div class="code-content">
                                <div class="code-line">
                                    <span class="tag">&lt;div</span>
                                    <span class="attr">class=</span>
                                    <span class="string">"website"</span>
                                    <span class="tag">&gt;</span>
                                </div>
                                <div class="code-line">
                                    <span class="indent">  </span>
                                    <span class="tag">&lt;h1&gt;</span>
                                    <span class="text">Modern Web</span>
                                    <span class="tag">&lt;/h1&gt;</span>
                                </div>
                                <div class="code-line">
                                    <span class="tag">&lt;/div&gt;</span>
                                </div>
                            </div>
                        </div>
                        <div class="floating-elements">
                            <div class="element html">&lt;/&gt;</div>
                            <div class="element css">{}</div>
                            <div class="element js">JS</div>
                        </div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
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
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>Responsive Design</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>SEO Optimized</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Fast Loading</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Secure & Scalable</li>
                        </ul>
                        <div class="service-tech tech-stack">
                            <span class="tech-badge animated-badge" data-delay="0.1s">React</span>
                            <span class="tech-badge animated-badge" data-delay="0.2s">Laravel</span>
                            <span class="tech-badge animated-badge" data-delay="0.3s">Vue.js</span>
                        </div>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="150">0</span>
                                <span class="stat-label">Projects</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="98">0</span>
                                <span class="stat-label">Success Rate</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay">
                        <button class="btn-explore">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                  <!-- Mobile App Development -->
                <div class="service-card modern-card" data-service="mobile" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles"></div>
                    
                    <!-- Mobile App Animation -->
                    <div class="service-animation mobile-animation">
                        <div class="mobile-frame">
                            <div class="mobile-screen">
                                <div class="mobile-header">
                                    <div class="mobile-notch"></div>
                                    <div class="signal-bars">
                                        <span></span><span></span><span></span><span></span>
                                    </div>
                                </div>
                                <div class="app-interface">
                                    <div class="app-icon"></div>
                                    <div class="app-icon"></div>
                                    <div class="app-icon active"></div>
                                    <div class="app-icon"></div>
                                </div>
                                <div class="mobile-nav">
                                    <div class="nav-dot active"></div>
                                    <div class="nav-dot"></div>
                                    <div class="nav-dot"></div>
                                </div>
                            </div>
                        </div>
                        <div class="app-particles">
                            <div class="particle"></div>
                            <div class="particle"></div>
                            <div class="particle"></div>
                        </div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
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
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>Cross-Platform</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>Native Performance</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Offline Support</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Push Notifications</li>
                        </ul>
                        <div class="service-tech tech-stack">
                            <span class="tech-badge animated-badge" data-delay="0.1s">React Native</span>
                            <span class="tech-badge animated-badge" data-delay="0.2s">Flutter</span>
                            <span class="tech-badge animated-badge" data-delay="0.3s">Swift</span>
                        </div>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="85">0</span>
                                <span class="stat-label">Apps Built</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="96">0</span>
                                <span class="stat-label">User Rating</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay">
                        <button class="btn-explore">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">React Native</span>
                        <span class="tech-badge">Flutter</span>
                        <span class="tech-badge">Swift</span>
                    </div>
                </div>
                  <!-- UI/UX Design -->
                <div class="service-card modern-card" data-service="design" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-bg-animation"></div>
                    <div class="floating-particles"></div>
                    
                    <!-- UI/UX Design Animation -->
                    <div class="service-animation design-animation">
                        <div class="design-canvas">
                            <div class="design-tools">
                                <div class="tool color-picker"></div>
                                <div class="tool brush"></div>
                                <div class="tool pen"></div>
                            </div>
                            <div class="canvas-area">
                                <div class="design-element rectangle"></div>
                                <div class="design-element circle"></div>
                                <div class="design-element text-line"></div>
                                <div class="design-element text-line short"></div>
                            </div>
                            <div class="color-palette">
                                <div class="color-swatch blue"></div>
                                <div class="color-swatch pink"></div>
                                <div class="color-swatch green"></div>
                                <div class="color-swatch yellow"></div>
                            </div>
                        </div>
                        <div class="design-cursor"></div>
                    </div>
                    
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
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
                        </div>
                        <ul class="service-features animated-list">
                            <li data-delay="0.1s"><i class="fas fa-check-circle"></i>User Research</li>
                            <li data-delay="0.2s"><i class="fas fa-check-circle"></i>Prototyping</li>
                            <li data-delay="0.3s"><i class="fas fa-check-circle"></i>Wireframing</li>
                            <li data-delay="0.4s"><i class="fas fa-check-circle"></i>Design Systems</li>
                        </ul>
                        <div class="service-tech tech-stack">
                            <span class="tech-badge animated-badge" data-delay="0.1s">Figma</span>
                            <span class="tech-badge animated-badge" data-delay="0.2s">Adobe XD</span>
                            <span class="tech-badge animated-badge" data-delay="0.3s">Sketch</span>
                        </div>
                        <div class="service-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-counter="89">0</span>
                                <span class="stat-label">Designs</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number" data-counter="95">0</span>
                                <span class="stat-label">User Rating</span>
                            </div>
                        </div>
                    </div>
                    <div class="hover-overlay">
                        <button class="btn-explore">
                            <span>Explore More</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Cloud Solutions -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>Cloud Solutions</h3>
                    <p>Scalable cloud infrastructure and deployment solutions for modern applications.</p>
                    <ul class="service-features">
                        <li>Auto Scaling</li>
                        <li>High Availability</li>
                        <li>Monitoring</li>
                        <li>Backup & Recovery</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">AWS</span>
                        <span class="tech-badge">Google Cloud</span>
                        <span class="tech-badge">Docker</span>
                    </div>
                </div>
                
                <!-- E-Commerce -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>E-Commerce Development</h3>
                    <p>Complete e-commerce solutions with secure payment integration and inventory management.</p>
                    <ul class="service-features">
                        <li>Payment Gateway</li>
                        <li>Inventory Management</li>
                        <li>Order Tracking</li>
                        <li>Analytics Dashboard</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">WooCommerce</span>
                        <span class="tech-badge">Shopify</span>
                        <span class="tech-badge">Magento</span>
                    </div>
                </div>
                
                <!-- Digital Marketing -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                        <div class="icon-bg"></div>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>Strategic digital marketing solutions to grow your online presence and reach.</p>
                    <ul class="service-features">
                        <li>SEO Optimization</li>
                        <li>Social Media</li>
                        <li>Content Marketing</li>
                        <li>Analytics & Reporting</li>
                    </ul>
                    <div class="service-tech">
                        <span class="tech-badge">Google Ads</span>
                        <span class="tech-badge">Facebook Ads</span>
                        <span class="tech-badge">Analytics</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section reveal">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Our <span class="gradient-text">Portfolio</span></h2>
                <p class="section-subtitle">Showcasing our latest projects and achievements</p>
            </div>
            
            <!-- Portfolio Filter -->
            <div class="portfolio-filters" data-aos="fade-up" data-aos-delay="100">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                <button class="filter-btn" data-filter="design">UI/UX Design</button>
                <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
            </div>
            
            <!-- Portfolio Grid -->
            <div class="portfolio-grid">
                <!-- Project 1 -->
                <div class="portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/img/portfolio/project1.jpg" alt="E-Learning Platform">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <button class="btn-portfolio-view" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-project="1">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="#" class="btn-portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-category">Web Development</div>
                            <h3 class="portfolio-title">E-Learning Platform</h3>
                            <p class="portfolio-description">Modern learning management system with interactive features</p>
                            <div class="portfolio-tech">
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Laravel</span>
                                <span class="tech-tag">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/img/portfolio/project2.jpg" alt="Food Delivery App">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <button class="btn-portfolio-view" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-project="2">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="#" class="btn-portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-category">Mobile App</div>
                            <h3 class="portfolio-title">Food Delivery App</h3>
                            <p class="portfolio-description">Real-time food delivery application with live tracking</p>
                            <div class="portfolio-tech">
                                <span class="tech-tag">React Native</span>
                                <span class="tech-tag">Node.js</span>
                                <span class="tech-tag">MongoDB</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="portfolio-item" data-category="ecommerce" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/img/portfolio/project3.jpg" alt="Fashion E-Store">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <button class="btn-portfolio-view" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-project="3">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="#" class="btn-portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-category">E-Commerce</div>
                            <h3 class="portfolio-title">Fashion E-Store</h3>
                            <p class="portfolio-description">Complete fashion e-commerce platform with AR try-on</p>
                            <div class="portfolio-tech">
                                <span class="tech-tag">Vue.js</span>
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">PostgreSQL</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/img/portfolio/project4.jpg" alt="Banking App UI">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <button class="btn-portfolio-view" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-project="4">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="#" class="btn-portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-category">UI/UX Design</div>
                            <h3 class="portfolio-title">Banking App UI</h3>
                            <p class="portfolio-description">Modern banking interface with enhanced security features</p>
                            <div class="portfolio-tech">
                                <span class="tech-tag">Figma</span>
                                <span class="tech-tag">Adobe XD</span>
                                <span class="tech-tag">Prototyping</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5 -->
                <div class="portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/img/portfolio/project5.jpg" alt="Real Estate Portal">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <button class="btn-portfolio-view" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-project="5">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="#" class="btn-portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-category">Web Development</div>
                            <h3 class="portfolio-title">Real Estate Portal</h3>
                            <p class="portfolio-description">Comprehensive real estate platform with virtual tours</p>
                            <div class="portfolio-tech">
                                <span class="tech-tag">Angular</span>
                                <span class="tech-tag">Django</span>
                                <span class="tech-tag">Redis</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="600">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/img/portfolio/project6.jpg" alt="Fitness Tracker">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <button class="btn-portfolio-view" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-project="6">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="#" class="btn-portfolio-link">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-category">Mobile App</div>
                            <h3 class="portfolio-title">Fitness Tracker</h3>
                            <p class="portfolio-description">AI-powered fitness tracking with personalized workouts</p>
                            <div class="portfolio-tech">
                                <span class="tech-tag">Flutter</span>
                                <span class="tech-tag">Firebase</span>
                                <span class="tech-tag">ML Kit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Team Section -->
    <section id="team" class="section reveal">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Meet Our Expert Team</h2>
                <p class="section-subtitle">Passionate professionals dedicated to creating exceptional digital experiences</p>
            </div>
            
            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="assets/img/team/member1.jpg" alt="Budi Santoso">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-tech-stack">
                            <span class="tech-chip">React</span>
                            <span class="tech-chip">Node.js</span>
                            <span class="tech-chip">MongoDB</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="team-name">Budi Santoso</h3>
                        <p class="team-role">Senior Full-Stack Developer</p>
                        <p class="team-bio">Expert in modern web technologies with 8+ years of experience in building scalable applications.</p>
                        <div class="team-stats">
                            <div class="stat">
                                <span class="stat-number">50+</span>
                                <span class="stat-label">Projects</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">8</span>
                                <span class="stat-label">Years</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="assets/img/team/member2.jpg" alt="Sari Wijaya">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-tech-stack">
                            <span class="tech-chip">Figma</span>
                            <span class="tech-chip">Adobe XD</span>
                            <span class="tech-chip">Sketch</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="team-name">Sari Wijaya</h3>
                        <p class="team-role">Lead UI/UX Designer</p>
                        <p class="team-bio">Creative designer passionate about user-centered design and creating intuitive digital experiences.</p>
                        <div class="team-stats">
                            <div class="stat">
                                <span class="stat-number">75+</span>
                                <span class="stat-label">Designs</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">6</span>
                                <span class="stat-label">Years</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="assets/img/team/member3.jpg" alt="Ahmad Rahman">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-stack-overflow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-tech-stack">
                            <span class="tech-chip">React Native</span>
                            <span class="tech-chip">Flutter</span>
                            <span class="tech-chip">iOS</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="team-name">Ahmad Rahman</h3>
                        <p class="team-role">Mobile App Developer</p>
                        <p class="team-bio">Specialist in cross-platform mobile development with expertise in native and hybrid solutions.</p>
                        <div class="team-stats">
                            <div class="stat">
                                <span class="stat-number">40+</span>
                                <span class="stat-label">Apps</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">5</span>
                                <span class="stat-label">Years</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-image-wrapper">
                        <div class="team-image">
                            <img src="assets/img/team/member4.jpg" alt="Linda Kusuma">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-docker"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-tech-stack">
                            <span class="tech-chip">AWS</span>
                            <span class="tech-chip">Docker</span>
                            <span class="tech-chip">Kubernetes</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="team-name">Linda Kusuma</h3>
                        <p class="team-role">DevOps Engineer</p>
                        <p class="team-bio">Cloud infrastructure expert ensuring scalable and reliable deployment of our applications.</p>
                        <div class="team-stats">
                            <div class="stat">
                                <span class="stat-number">100+</span>
                                <span class="stat-label">Deployments</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">7</span>
                                <span class="stat-label">Years</span>
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
                <h2 class="section-title">Our <span class="gradient-text">Development Process</span></h2>
                <p class="section-subtitle">From concept to deployment, we follow a proven methodology</p>
            </div>
            
            <div class="process-timeline">
                <!-- Step 1 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Discovery & Planning</h3>
                        <p>We start by understanding your business goals, target audience, and project requirements through detailed consultation and research.</p>
                        <ul class="step-deliverables">
                            <li>Project Scope</li>
                            <li>Technical Requirements</li>
                            <li>Timeline & Budget</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h3>Design & Prototype</h3>
                        <p>Our design team creates wireframes, mockups, and interactive prototypes to visualize the final product before development.</p>
                        <ul class="step-deliverables">
                            <li>Wireframes</li>
                            <li>UI/UX Design</li>
                            <li>Interactive Prototype</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Development</h3>
                        <p>Our developers bring the design to life using modern technologies and best practices, ensuring clean, maintainable code.</p>
                        <ul class="step-deliverables">
                            <li>Frontend Development</li>
                            <li>Backend Development</li>
                            <li>Database Design</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-bug"></i>
                        </div>
                        <h3>Testing & QA</h3>
                        <p>Comprehensive testing ensures your application works flawlessly across all devices and browsers before launch.</p>
                        <ul class="step-deliverables">
                            <li>Functional Testing</li>
                            <li>Performance Testing</li>
                            <li>Security Testing</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="process-step" data-aos="fade-up" data-aos-delay="500">
                    <div class="step-number">05</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Launch & Support</h3>
                        <p>We deploy your application to production and provide ongoing support and maintenance to ensure optimal performance.</p>
                        <ul class="step-deliverables">
                            <li>Production Deployment</li>
                            <li>Performance Monitoring</li>
                            <li>Ongoing Support</li>
                        </ul>
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
                                    <p>+62 812 3456 7890</p>
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
                                <label for="budget">Project Budget</label>
                                <select id="budget" name="budget">
                                    <option value="">Select budget range</option>
                                    <option value="5-10">$5,000 - $10,000</option>
                                    <option value="10-25">$10,000 - $25,000</option>
                                    <option value="25-50">$25,000 - $50,000</option>
                                    <option value="50+">$50,000+</option>
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
                                <li><a href="#portfolio">Portfolio</a></li>
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

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/particles.js/particles.min.js"></script>
    <script src="assets/js/digital-profile.js"></script>
</body>

</html>
