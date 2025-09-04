<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" type="text/css" href="style/header.css" />
<link rel="stylesheet" type="text/css" href="style/about.css" />
<link rel="stylesheet" type="text/css" href="style/footer.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
<link rel="icon" href="images/lul.svg" type="image/svg+xml">
<style>
/* Override contact-info styles for footer only */
.footer-modern .contact-info {
	background: none !important;
	border: none !important;
	padding: 0 !important;
	margin: 0 !important;
	box-shadow: none !important;
	border-radius: 0 !important;
	display: flex !important;
	flex-direction: column !important;
	gap: 0.25rem !important;
}

.footer-modern .contact-item {
	background: none !important;
	border: none !important;
	padding: 0 !important;
	margin: 0 !important;
	box-shadow: none !important;
	border-radius: 0 !important;
	display: flex !important;
	align-items: center !important;
	gap: 0.5rem !important;
}

.footer-modern .contact-link {
	background: none !important;
	border: none !important;
	padding: 0 !important;
	margin: 0 !important;
	box-shadow: none !important;
	border-radius: 0 !important;
}

.contact-section {
    padding: 60px 0;
    background: var(--background);
    min-height: 100vh;
}

.contact-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.contact-hero {
    text-align: center;
    margin-bottom: 60px;
    background: linear-gradient(180deg, rgba(13,154,220,0.06) 0%, transparent 70%), var(--background-secondary);
    border: 1px solid var(--border-secondary);
    border-radius: 16px;
    padding: 50px 30px;
    box-shadow: 0 8px 24px var(--shadow-secondary);
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
    animation: shimmer 3s ease-in-out infinite;
}

@keyframes shimmer {
    0%, 100% { transform: translateX(-100%); }
    50% { transform: translateX(100%); }
}

.contact-title {
    font-size: clamp(2.1rem, 4.5vw, 2.75rem);
    font-weight: 900;
    letter-spacing: -0.02em;
    color: var(--foreground);
    margin-bottom: 15px;
    position: relative;
    z-index: 1;
}

.contact-sub {
    font-size: 1.1rem;
    color: var(--foreground-secondary);
    max-width: 720px;
    margin: 0 auto;
    line-height: 1.6;
    position: relative;
    z-index: 1;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-bottom: 60px;
}

.contact-info {
    background: var(--background);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 6px 22px var(--shadow-secondary);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.contact-info:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px var(--shadow);
    border-color: var(--primary);
}

.contact-info-title {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--foreground);
    margin-bottom: 25px;
    position: relative;
}

.contact-info-title::after {
    content: '';
    display: block;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #0d9adc, #7dd3fc);
    border-radius: 999px;
    margin-top: 10px;
}

.contact-details {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 15px;
    background: var(--background-secondary);
    border-radius: 12px;
    border: 1px solid var(--border);
    transition: all 0.3s ease;
}

.contact-item:hover {
    transform: translateX(5px);
    border-color: var(--primary);
    box-shadow: 0 4px 12px var(--shadow-secondary);
}

.contact-icon {
    width: 24px;
    height: 24px;
    color: var(--primary);
    flex-shrink: 0;
    margin-top: 2px;
}

.contact-text {
    flex: 1;
}

.contact-label {
    font-size: 0.9rem;
    color: var(--foreground-tertiary);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
    margin-bottom: 5px;
}

.contact-value {
    font-size: 1rem;
    color: var(--foreground);
    font-weight: 500;
    line-height: 1.4;
}

.contact-form-container {
    background: var(--background);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 6px 22px var(--shadow-secondary);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.contact-form-container:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px var(--shadow);
    border-color: var(--primary);
}

.contact-form-title {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--foreground);
    margin-bottom: 25px;
    position: relative;
}

.contact-form-title::after {
    content: '';
    display: block;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #0d9adc, #7dd3fc);
    border-radius: 999px;
    margin-top: 10px;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-label {
    font-size: 0.95rem;
    color: var(--foreground);
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 5px;
}

.form-label.required::after {
    content: '*';
    color: #dc3545;
    font-weight: 700;
}

.form-input,
.form-textarea {
    padding: 15px 20px;
    border: 2px solid var(--border);
    border-radius: 12px;
    background: var(--background);
    color: var(--foreground);
    font-size: 1rem;
    transition: all 0.3s ease;
    font-family: inherit;
}

.form-input:focus,
.form-textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    transform: translateY(-1px);
}

.form-input::placeholder,
.form-textarea::placeholder {
    color: var(--foreground-tertiary);
}

.form-textarea {
    resize: vertical;
    min-height: 120px;
}

.submit-btn {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-hover) 100%);
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(74, 144, 226, 0.3);
}

.submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s ease;
}

.submit-btn:hover::before {
    left: 100%;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
}

.submit-btn:active {
    transform: translateY(-1px);
}

#office-map {
    width: 100%;
    height: 500px;
    margin-top: 40px;
    position: relative;
    z-index: 1;
}

/* Ensure header stays above map and is sticky */
#header {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    z-index: 1000 !important;
    width: 100% !important;
}

/* Add padding to body to account for fixed header */
body {
    padding-top: 80px !important;
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .contact-hero {
        padding: 40px 20px;
    }
    
    .contact-title {
        font-size: 2.2rem;
    }
    
    .contact-info,
    .contact-form-container {
        padding: 30px;
    }
    
    .contact-item {
        padding: 12px;
    }
}

@media (max-width: 480px) {
    .contact-container {
        padding: 0 15px;
    }
    
    .contact-hero {
        padding: 30px 15px;
    }
    
    .contact-title {
        font-size: 1.8rem;
    }
    
    .contact-info,
    .contact-form-container {
        padding: 25px;
    }
}
</style>
</head>
<body>
	<header id="header" class="header-modern">
		<div class="header-container">
			<div class="header-left">
				<a class="logo-link" href="index.php">
					<img src="images/lul.svg" alt="Dimple Star Transport Logo" class="logo-image logo-dark" />
					<img src="images/light.svg" alt="Dimple Star Transport Logo" class="logo-image logo-light" />
					<span class="company-name">Dimple Star Transport</span>
				</a>

				<nav class="desktop-nav">
					<a href="index.php" class="nav-link">Home</a>
					<a href="about.php" class="nav-link">About Us</a>
					<a href="terminal.php" class="nav-link">Terminals</a>
					<a href="routeschedule.php" class="nav-link">Routes</a>
					<a href="contact.php" class="nav-link active">Contact</a>
					<a href="book.php" class="nav-link nav-link-primary">Book Now</a>
				</nav>
			</div>

			<div class="header-right">
				<nav class="header-actions">
					<button 
						class="theme-toggle-btn" 
						type="button" 
						aria-label="Toggle theme" 
						onclick="toggleTheme()"
					>
						<svg class="sun-icon" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.5 0C7.77614 0 8 0.223858 8 0.5V2.5C8 2.77614 7.77614 3 7.5 3C7.22386 3 7 2.77614 7 2.5V0.5C7 0.223858 7.22386 0 7.5 0ZM2.1967 2.1967C2.39196 2.00144 2.70854 2.00144 2.90381 2.1967L4.31802 3.61091C4.51328 3.80617 4.51328 4.12276 4.31802 4.31802C4.12276 4.51328 3.80617 4.51328 3.61091 4.31802L2.1967 2.90381C2.00144 2.70854 2.00144 2.39196 2.1967 2.1967ZM0.5 7C0.223858 7 0 7.22386 0 7.5C0 7.77614 0.223858 8 0.5 8H2.5C2.77614 8 3 7.77614 3 7.5C3 7.22386 2.77614 7 2.5 7H0.5ZM2.1967 12.8033C2.00144 12.608 2.00144 12.2915 2.1967 12.0962L3.61091 10.682C3.80617 10.4867 4.12276 10.4867 4.31802 10.682C4.51328 10.8772 4.51328 11.1938 4.31802 11.3891L2.90381 12.8033C2.70854 12.9986 2.39196 12.9986 2.1967 12.8033ZM12.5 7C12.2239 7 12 7.22386 12 7.5C12 7.77614 12.2239 8 12.5 8H14.5C14.7761 8 15 7.77614 15 7.5C15 7.22386 14.7761 7 12.5 7H12.5ZM10.682 4.31802C10.4867 4.12276 10.4867 3.80617 10.682 3.61091L12.0962 2.1967C12.2915 2.00144 12.608 2.00144 12.8033 2.1967C12.9986 2.39196 12.9986 2.70854 12.8033 2.90381L11.3891 4.31802C11.1938 4.51328 10.8772 4.51328 10.682 4.31802ZM8 12.5C8 12.2239 7.77614 12 7.5 12C7.22386 12 7 12.2239 7 12.5V14.5C7 14.7761 7.22386 15 7.5 15C7.77614 15 8 14.7761 8 14.5V12.5ZM10.682 10.682C10.8772 10.4867 11.1938 10.4867 11.3891 10.682L12.8033 12.0962C12.9986 12.2915 12.9986 12.608 12.8033 12.8033C12.608 12.9986 12.2915 12.9986 12.0962 12.8033L10.682 11.3891C10.4867 11.1938 10.4867 10.8772 10.682 10.682ZM5.5 7.5C5.5 6.39543 6.39543 5.5 7.5 5.5C8.60457 5.5 9.5 6.39543 9.5 7.5C9.5 8.60457 8.60457 9.5 7.5 9.5C6.39543 9.5 5.5 8.60457 5.5 7.5ZM7.5 4.5C5.84315 4.5 4.5 5.84315 4.5 7.5C4.5 9.15685 5.84315 10.5 7.5 10.5C9.15685 10.5 10.5 9.15685 10.5 7.5C10.5 5.84315 9.15685 4.5 7.5 4.5Z" fill="currentColor" fillRule="evenodd" clipRule="evenodd"></path>
						</svg>
						<svg class="moon-icon" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.90321 7.29677C1.90321 10.341 4.11088 12.8516 7.02812 13.6569C7.02812 13.6569 6.76701 13.6569 6.76701 13.6569C4.08672 13.6569 1.90321 11.4734 1.90321 8.79311C1.90321 8.79311 1.90321 8.53199 1.90321 8.27088C1.90321 7.29677 1.90321 7.29677 1.90321 7.29677ZM8.76701 13.6569C8.76701 13.6569 8.50589 13.6569 8.24478 13.6569C11.162 12.8516 13.3697 10.341 13.3697 7.29677C13.3697 7.29677 13.3697 7.29677 13.3697 7.29677C13.3697 4.25254 11.162 1.74219 8.24478 0.93689C8.50589 0.93689 8.76701 0.93689 8.76701 0.93689C8.76701 0.93689 8.76701 0.93689 8.76701 0.93689C8.76701 1.198 8.76701 1.45911 8.76701 1.72023C8.76701 4.25254 6.5835 6.43605 3.90321 6.43605C3.90321 6.43605 3.90321 6.43605 3.90321 6.43605C3.90321 6.43605 3.90321 6.43605 3.90321 6.43605C3.90321 9.11634 5.08672 11.2998 7.76701 11.2998C7.76701 11.2998 7.76701 11.2998 7.76701 11.2998C7.76701 11.2998 7.76701 11.2998 7.76701 11.2998C7.76701 11.5609 7.76701 11.822 7.76701 12.0831C7.76701 12.0831 7.76701 12.0831 7.76701 12.0831C7.76701 12.0831 7.76701 12.0831 7.76701 12.0831C7.76701 13.6569 8.76701 13.6569 8.76701 13.6569Z" fill="currentColor" fillRule="evenodd" clipRule="evenodd"></path>
						</svg>
					</button>
					
					<!-- Mobile Menu Button -->
					<button 
						class="mobile-menu-btn" 
						type="button" 
						aria-label="Toggle mobile menu" 
						onclick="toggleMobileMenu()"
					>
						<div class="menu-icon">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</div>
					</button>
					
					<?php
						// Login functionality removed
						?>
				</nav>
			</div>
		</div>

		<!-- Mobile Menu -->
		<div id="mobile-menu" class="mobile-menu">
			<div class="mobile-menu-header">
				<a href="index.php" class="mobile-menu-logo">
					<img src="images/lul.svg" alt="Dimple Star Transport Logo" class="logo-image logo-dark" />
					<img src="images/light.svg" alt="Dimple Star Transport Logo" class="logo-image logo-light" />
					<span class="company-name">Dimple Star Transport</span>
				</a>
				<button class="mobile-menu-close" onclick="toggleMobileMenu()" aria-label="Close mobile menu">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
			</div>
			<nav class="mobile-nav">
				<a href="index.php" class="mobile-nav-link">Home</a>
				<a href="about.php" class="mobile-nav-link">About Us</a>
				<a href="terminal.php" class="mobile-nav-link">Terminals</a>
				<a href="routeschedule.php" class="mobile-nav-link">Routes</a>
				<a href="contact.php" class="mobile-nav-link active">Contact</a>
				<a href="book.php" class="mobile-nav-link mobile-nav-link-primary">Book Now</a>
			</nav>
		</div>
		
		<!-- Mobile Menu Overlay -->
		<div id="mobile-menu-overlay" class="mobile-menu-overlay" onclick="toggleMobileMenu()"></div>

		<div class="header-divider"></div>
		
		<!-- Cool Glowing Line -->
		<div class="glowing-line"></div>
	</header>

<section class="contact-section">
	<div class="contact-container">
		<div class="contact-hero">
			<h1 class="contact-title">Contact Us</h1>
			<p class="contact-sub">Get in touch with us for any inquiries, bookings, or support. We're here to help you with your travel needs.</p>
		</div>

		<div class="contact-grid">
			<div class="contact-info">
				<h2 class="contact-info-title">Get In Touch</h2>
				<div class="contact-details">
					<div class="contact-item">
						<svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
							<circle cx="12" cy="12" r="3"/>
						</svg>
						<div class="contact-text">
							<div class="contact-label">Address</div>
							<div class="contact-value">Block 1 lot 10, Southpoint Subd.<br>Brgy Banay-Banay, Cabuyao, Laguna</div>
						</div>
					</div>

					<div class="contact-item">
						<svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
						</svg>
						<div class="contact-text">
							<div class="contact-label">Phone</div>
							<div class="contact-value">+63 929 209 0712</div>
						</div>
					</div>

					<div class="contact-item">
						<svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
						</svg>
						<div class="contact-text">
							<div class="contact-label">Email</div>
							<div class="contact-value">info@dimplestar.com</div>
						</div>
					</div>

					<div class="contact-item">
						<svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<circle cx="12" cy="12" r="10"/>
							<polyline points="12,6 12,12 16,14"/>
						</svg>
						<div class="contact-text">
							<div class="contact-label">Business Hours</div>
							<div class="contact-value">Monday - Sunday<br>4:00 AM - 10:00 PM</div>
						</div>
					</div>
				</div>
			</div>

			<div class="contact-form-container">
				<h2 class="contact-form-title">Send Us a Message</h2>
				<form class="contact-form" action="messageexec.php" method="POST">
					<div class="form-group">
						<label for="name" class="form-label required">Full Name</label>
						<input id="name" class="form-input" type="text" name="name" placeholder="Enter your full name" required />
					</div>

					<div class="form-group">
						<label for="email" class="form-label required">Email Address</label>
						<input id="email" class="form-input" type="email" name="email" placeholder="Enter your email address" required />
					</div>

					<div class="form-group">
						<label for="subject" class="form-label required">Subject</label>
						<input id="subject" class="form-input" type="text" name="subject" placeholder="What is this about?" required />
					</div>

					<div class="form-group">
						<label for="message" class="form-label required">Message</label>
						<textarea id="message" class="form-textarea" name="message" placeholder="Tell us more about your inquiry..." required></textarea>
					</div>

					<button type="submit" class="submit-btn">
						Send Message
					</button>
				</form>
			</div>
		</div>

		<!-- Office Location Map -->
		<div id="office-map"></div>
	</div>
</section>

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="" defer></script>
<script>
	// Dark Mode Toggle
	function toggleTheme() {
		const body = document.body;
		const isDark = body.classList.contains('dark-mode');
		
		if (isDark) {
			body.classList.remove('dark-mode');
			localStorage.setItem('theme', 'light');
		} else {
			body.classList.add('dark-mode');
			localStorage.setItem('theme', 'dark');
		}
		
		// Update logo visibility
		updateLogoVisibility();
	}
	
	// Update logo visibility based on current theme
	function updateLogoVisibility() {
		const isDark = document.body.classList.contains('dark-mode');
		const logoDark = document.querySelector('.logo-dark');
		const logoLight = document.querySelector('.logo-light');
		
		if (isDark) {
			logoDark.style.display = 'block';
			logoLight.style.display = 'none';
		} else {
			logoDark.style.display = 'none';
			logoLight.style.display = 'block';
		}
	}
	
	// Initialize theme on page load
	function initializeTheme() {
		const savedTheme = localStorage.getItem('theme');
		if (savedTheme === 'dark') {
			document.body.classList.add('dark-mode');
		} else {
			document.body.classList.remove('dark-mode');
		}
		updateLogoVisibility();
	}

	// Enhanced mobile menu toggle
	function toggleMobileMenu() {
		const mobileMenu = document.getElementById('mobile-menu');
		const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
		const menuBtn = document.querySelector('.mobile-menu-btn');
		const body = document.body;
		
		if (mobileMenu.classList.contains('active')) {
			mobileMenu.classList.remove('active');
			mobileMenuOverlay.classList.remove('active');
			menuBtn.classList.remove('active');
			body.style.overflow = '';
		} else {
			mobileMenu.classList.add('active');
			mobileMenuOverlay.classList.add('active');
			menuBtn.classList.add('active');
			body.style.overflow = 'hidden';
		}
	}
	
	// Initialize on page load
	document.addEventListener('DOMContentLoaded', function() {
		initializeTheme();
		
		// Close mobile menu when clicking on a link
		const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
		mobileNavLinks.forEach(link => {
			link.addEventListener('click', function() {
				toggleMobileMenu();
			});
		});
		
		// Add smooth scrolling for better UX
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
			});
		});
		
		// Initialize office location map
		initializeOfficeMap();
	});
	
	// Initialize office location map
	function initializeOfficeMap() {
		// Office location coordinates (Cabuyao, Laguna)
		const officeLat = 14.2785;
		const officeLng = 121.1264;
		const officeAddress = "Block 1 lot 10, Southpoint Subd., Brgy Banay-Banay, Cabuyao, Laguna";
		const officeContact = "+63 929 209 0712";
		
		// Check if Leaflet is loaded
		if (typeof L === 'undefined') {
			const mapElement = document.getElementById('office-map');
			if (mapElement) {
				mapElement.innerHTML = '<div style="padding: 40px; text-align: center; color: var(--foreground-secondary);">Map failed to load. Please check your internet connection.</div>';
			}
			return;
		}
		
		// Create map
		const map = L.map('office-map').setView([officeLat, officeLng], 15);
		
		// Add tile layer
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
		
		// Create custom office icon
		const officeIcon = L.icon({
			iconUrl: 'data:image/svg+xml;base64,' + btoa('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="#dc2626" stroke="#ffffff" stroke-width="1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>'),
			iconSize: [32, 32],
			iconAnchor: [16, 32],
			popupAnchor: [0, -32]
		});
		
		// Add office marker
		const marker = L.marker([officeLat, officeLng], {icon: officeIcon}).addTo(map);
		
		// Create popup content
		const popupContent = `
			<div style="text-align: center; min-width: 200px;">
				<h3 style="margin: 0 0 10px 0; color: #dc2626; font-size: 1.1rem;">Dimple Star Transport</h3>
				<p style="margin: 5px 0; font-size: 0.9rem;"><strong>Address:</strong><br>${officeAddress}</p>
				<p style="margin: 5px 0; font-size: 0.9rem;"><strong>Contact:</strong><br>${officeContact}</p>
				<p style="margin: 5px 0; font-size: 0.8rem; color: #666;">Main Office</p>
			</div>
		`;
		
		marker.bindPopup(popupContent);
		
		// Open popup by default
		marker.openPopup();
	}
</script>
</body>
</html>