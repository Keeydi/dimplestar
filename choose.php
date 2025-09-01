<?php
// Why Choose Us Section Component
// This file contains the "Why Choose Us" section with interactive features
?>

<section id="why-choose-us" class="why-choose-us-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Why choose us?</h2>
        </div>

        <div class="features-grid">
            <!-- Left Column: Feature List -->
            <div class="features-list">
                <div class="feature-item active" data-feature="1">
                    <div class="feature-header">
                        <span class="feature-number">1</span>
                        <h3 class="feature-title">Safe & Reliable Travel</h3>
                    </div>
                    <div class="feature-content">
                        <p class="feature-description">
                            Our fleet undergoes rigorous safety checks and maintenance. Professional drivers with years of experience ensure your journey is always secure and comfortable.
                        </p>
                        <div class="feature-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" data-progress="0"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-item" data-feature="2">
                    <div class="feature-header">
                        <span class="feature-number">2</span>
                        <h3 class="feature-title">Modern Fleet & Comfort</h3>
                    </div>
                    <div class="feature-content">
                        <p class="feature-description">
                            State-of-the-art air-conditioned buses with comfortable seating, WiFi connectivity, and entertainment systems for an enjoyable journey experience.
                        </p>
                        <div class="feature-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" data-progress="0"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-item" data-feature="3">
                    <div class="feature-header">
                        <span class="feature-number">3</span>
                        <h3 class="feature-title">Easy Booking System</h3>
                    </div>
                    <div class="feature-content">
                        <p class="feature-description">
                            User-friendly online booking platform with flexible scheduling, real-time availability, and instant confirmation for all your travel needs.
                        </p>
                        <div class="feature-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" data-progress="0"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-item" data-feature="4">
                    <div class="feature-header">
                        <span class="feature-number">4</span>
                        <h3 class="feature-title">24/7 Customer Support</h3>
                    </div>
                    <div class="feature-content">
                        <p class="feature-description">
                            Dedicated customer support team available round the clock via phone, email, and live chat to assist with bookings and travel queries.
                        </p>
                        <div class="feature-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" data-progress="0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Visual Representation -->
            <div class="features-visual">
                <div class="visual-container">
                    <!-- Feature 1: Safe & Reliable Travel -->
                    <div class="visual-item active" data-visual="1">
                        <svg class="feature-svg" viewBox="0 0 640 360" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="safetyGrad" x1="0" y1="0" x2="640" y2="360" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#10B981" />
                                    <stop offset="1" stop-color="#059669" />
                                </linearGradient>
                                <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="6" result="blur" />
                                    <feMerge>
                                        <feMergeNode in="blur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                            </defs>

                            <!-- Safety Shield Background -->
                            <g transform="translate(320,180)">
                                <path d="M-120 -80 L120 -80 L120 80 L-120 80 Z" fill="url(#safetyGrad)" opacity="0.1" stroke="url(#safetyGrad)" stroke-width="3" rx="20"/>
                                <path d="M-100 -60 L100 -60 L100 60 L-100 60 Z" fill="url(#safetyGrad)" opacity="0.2" rx="15"/>
                                <path d="M-80 -40 L80 -40 L80 40 L-80 40 Z" fill="url(#safetyGrad)" opacity="0.3" rx="10"/>
                            </g>

                            <!-- Bus Icon -->
                            <g transform="translate(320,180)">
                                <rect x="-60" y="-30" width="120" height="60" rx="8" fill="url(#safetyGrad)" opacity="0.8"/>
                                <rect x="-50" y="-20" width="100" height="40" rx="4" fill="white"/>
                                <circle cx="-30" cy="10" r="8" fill="#374151"/>
                                <circle cx="30" cy="10" r="8" fill="#374151"/>
                                <rect x="-40" y="-15" width="20" height="15" rx="2" fill="url(#safetyGrad)" opacity="0.6"/>
                                <rect x="20" y="-15" width="20" height="15" rx="2" fill="url(#safetyGrad)" opacity="0.6"/>
                            </g>

                            <!-- Safety Checkmarks -->
                            <g fill="url(#safetyGrad)" opacity="0.9">
                                <circle cx="120" cy="80" r="15" filter="url(#glow)"/>
                                <circle cx="520" cy="80" r="15" filter="url(#glow)"/>
                                <circle cx="120" cy="280" r="15" filter="url(#glow)"/>
                                <circle cx="520" cy="280" r="15" filter="url(#glow)"/>
                            </g>

                            <!-- Safety Labels -->
                            <g font-family="Inter, ui-sans-serif, system-ui" font-size="14" fill="currentColor" opacity="0.8">
                                <text x="100" y="70">Safety</text>
                                <text x="500" y="70">Reliable</text>
                                <text x="100" y="300">Secure</text>
                                <text x="500" y="300">Trusted</text>
                            </g>
                        </svg>
                    </div>

                    <!-- Feature 2: Modern Fleet & Comfort -->
                    <div class="visual-item" data-visual="2">
                        <svg class="feature-svg" viewBox="0 0 640 360" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="comfortGrad" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0" stop-color="#3B82F6" />
                                    <stop offset="1" stop-color="#1D4ED8" />
                                </linearGradient>
                            </defs>
                            
                            <!-- Modern Bus -->
                            <g transform="translate(320,200)">
                                <rect x="-100" y="-40" width="200" height="80" rx="15" fill="url(#comfortGrad)" opacity="0.9"/>
                                <rect x="-90" y="-30" width="180" height="60" rx="10" fill="white"/>
                                
                                <!-- Windows -->
                                <rect x="-80" y="-25" width="25" height="20" rx="3" fill="#E5E7EB"/>
                                <rect x="-45" y="-25" width="25" height="20" rx="3" fill="#E5E7EB"/>
                                <rect x="-10" y="-25" width="25" height="20" rx="3" fill="#E5E7EB"/>
                                <rect x="25" y="-25" width="25" height="20" rx="3" fill="#E5E7EB"/>
                                <rect x="60" y="-25" width="25" height="20" rx="3" fill="#E5E7EB"/>
                                
                                <!-- Wheels -->
                                <circle cx="-60" cy="20" r="12" fill="#374151"/>
                                <circle cx="60" cy="20" r="12" fill="#374151"/>
                                
                                <!-- Comfort Icons -->
                                <g fill="url(#comfortGrad)" opacity="0.7">
                                    <circle cx="-120" cy="-60" r="8"/>
                                    <circle cx="120" cy="-60" r="8"/>
                                    <circle cx="-120" cy="60" r="8"/>
                                    <circle cx="120" cy="60" r="8"/>
                                </g>
                            </g>

                            <!-- Comfort Labels -->
                            <g font-family="Inter, ui-sans-serif, system-ui" font-size="14" fill="currentColor" opacity="0.8">
                                <text x="200" y="100">WiFi</text>
                                <text x="400" y="100">AC</text>
                                <text x="200" y="320">Comfort</text>
                                <text x="400" y="320">Modern</text>
                            </g>
                        </svg>
                    </div>

                    <!-- Feature 3: Easy Booking System -->
                    <div class="visual-item" data-visual="3">
                        <svg class="feature-svg" viewBox="0 0 640 360" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="bookingGrad" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0" stop-color="#8B5CF6" />
                                    <stop offset="1" stop-color="#7C3AED" />
                                </linearGradient>
                            </defs>
                            
                            <!-- Booking Interface -->
                            <g transform="translate(320,180)">
                                <!-- Main Screen -->
                                <rect x="-120" y="-80" width="240" height="160" rx="20" fill="url(#bookingGrad)" opacity="0.1" stroke="url(#bookingGrad)" stroke-width="3"/>
                                <rect x="-110" y="-70" width="220" height="140" rx="15" fill="white"/>
                                
                                <!-- Form Elements -->
                                <rect x="-100" y="-60" width="200" height="25" rx="5" fill="#F3F4F6"/>
                                <rect x="-100" y="-25" width="95" height="25" rx="5" fill="#F3F4F6"/>
                                <rect x="5" y="-25" width="95" height="25" rx="5" fill="#F3F4F6"/>
                                <rect x="-100" y="10" width="200" height="25" rx="5" fill="#F3F4F6"/>
                                <rect x="-100" y="45" width="200" height="40" rx="5" fill="url(#bookingGrad)" opacity="0.8"/>
                                
                                <!-- Icons -->
                                <circle cx="-80" cy="-47" r="3" fill="#6B7280"/>
                                <circle cx="-80" cy="-12" r="3" fill="#6B7280"/>
                                <circle cx="-80" cy="23" r="3" fill="#6B7280"/>
                                <circle cx="-80" cy="65" r="8" fill="white"/>
                            </g>

                            <!-- Booking Labels -->
                            <g font-family="Inter, ui-sans-serif, system-ui" font-size="14" fill="currentColor" opacity="0.8">
                                <text x="150" y="120">Easy</text>
                                <text x="350" y="120">Fast</text>
                                <text x="150" y="300">Simple</text>
                                <text x="350" y="300">Quick</text>
                            </g>
                        </svg>
                    </div>

                    <!-- Feature 4: 24/7 Customer Support -->
                    <div class="visual-item" data-visual="4">
                        <svg class="feature-svg" viewBox="0 0 640 360" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="supportGrad" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0" stop-color="#F59E0B" />
                                    <stop offset="1" stop-color="#D97706" />
                                </linearGradient>
                            </defs>
                            
                            <!-- Support Center -->
                            <g transform="translate(320,180)">
                                <!-- Headset -->
                                <circle cx="0" cy="0" r="60" fill="url(#supportGrad)" opacity="0.8"/>
                                <path d="M-40 -20 Q-60 -40 -80 -20 Q-60 0 -40 20" fill="none" stroke="url(#supportGrad)" stroke-width="4"/>
                                <path d="M40 -20 Q60 -40 80 -20 Q60 0 40 20" fill="none" stroke="url(#supportGrad)" stroke-width="4"/>
                                <rect x="-20" y="10" width="40" height="15" rx="8" fill="url(#supportGrad)" opacity="0.6"/>
                                
                                <!-- Support Icons -->
                                <g fill="url(#supportGrad)" opacity="0.7">
                                    <circle cx="-120" cy="-80" r="12"/>
                                    <circle cx="120" cy="-80" r="12"/>
                                    <circle cx="-120" cy="80" r="12"/>
                                    <circle cx="120" cy="80" r="12"/>
                                </g>
                                
                                <!-- Connection Lines -->
                                <g stroke="url(#supportGrad)" stroke-width="2" opacity="0.3">
                                    <path d="M-60 -40 Q-90 -60 -120 -80"/>
                                    <path d="M60 -40 Q90 -60 120 -80"/>
                                    <path d="M-60 40 Q-90 60 -120 80"/>
                                    <path d="M60 40 Q90 60 120 80"/>
                                </g>
                            </g>

                            <!-- Support Labels -->
                            <g font-family="Inter, ui-sans-serif, system-ui" font-size="14" fill="currentColor" opacity="0.8">
                                <text x="150" y="120">24/7</text>
                                <text x="350" y="120">Help</text>
                                <text x="150" y="300">Support</text>
                                <text x="350" y="300">Assist</text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Why Choose Us Interactive Features
document.addEventListener('DOMContentLoaded', function() {
    const featureItems = document.querySelectorAll('.feature-item');
    const visualItems = document.querySelectorAll('.visual-item');
    let currentFeature = 1;
    let progressInterval;

    // Function to activate a feature
    function activateFeature(featureNumber) {
        // Remove active class from all features
        featureItems.forEach(item => item.classList.remove('active'));
        visualItems.forEach(item => item.classList.remove('active'));

        // Add active class to selected feature
        const selectedFeature = document.querySelector(`[data-feature="${featureNumber}"]`);
        const selectedVisual = document.querySelector(`[data-visual="${featureNumber}"]`);
        
        if (selectedFeature) selectedFeature.classList.add('active');
        if (selectedVisual) selectedVisual.classList.add('active');

        currentFeature = featureNumber;
        startProgressAnimation();
    }

    // Function to start progress animation
    function startProgressAnimation() {
        clearInterval(progressInterval);
        
        const activeFeature = document.querySelector('.feature-item.active');
        const progressFill = activeFeature.querySelector('.progress-fill');
        
        if (!progressFill) return;

        let progress = 0;
        progressFill.style.width = '0%';

        progressInterval = setInterval(() => {
            progress += 2;
            progressFill.style.width = progress + '%';
            
            if (progress >= 100) {
                clearInterval(progressInterval);
                
                // Auto-advance to next feature after 1 second
                setTimeout(() => {
                    const nextFeature = currentFeature % 4 + 1;
                    activateFeature(nextFeature);
                }, 1000);
            }
        }, 80);
    }

    // Add click event listeners to feature items
    featureItems.forEach(item => {
        item.addEventListener('click', function() {
            const featureNumber = parseInt(this.getAttribute('data-feature'));
            activateFeature(featureNumber);
        });
    });

    // Auto-start with first feature
    activateFeature(1);
});

// Smooth scrolling function for navigation
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}
</script>
