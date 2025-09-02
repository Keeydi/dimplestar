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
<link rel="stylesheet" type="text/css" href="style/index.css" />
<link rel="stylesheet" type="text/css" href="style/choose.css" />
<link rel="stylesheet" type="text/css" href="style/footer.css" />
<link rel="icon" href="images/lul.svg" type="image/svg+xml">
<script src="slide/js/jquery.js"></script>
<script src="slide/js/amazingslider.js"></script>
<script src="slide/js/initslider-1.js"></script>
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
					<a href="index.php" class="nav-link active">Home</a>
					<a href="about.php" class="nav-link">About Us</a>
					<a href="terminal.php" class="nav-link">Terminals</a>
					<a href="routeschedule.php" class="nav-link">Routes</a>
					<a href="contact.php" class="nav-link">Contact</a>
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
							<path d="M7.5 0C7.77614 0 8 0.223858 8 0.5V2.5C8 2.77614 7.77614 3 7.5 3C7.22386 3 7 2.77614 7 2.5V0.5C7 0.223858 7.22386 0 7.5 0ZM2.1967 2.1967C2.39196 2.00144 2.70854 2.00144 2.90381 2.1967L4.31802 3.61091C4.51328 3.80617 4.51328 4.12276 4.31802 4.31802C4.12276 4.51328 3.80617 4.51328 3.61091 4.31802L2.1967 2.90381C2.00144 2.70854 2.00144 2.39196 2.1967 2.1967ZM0.5 7C0.223858 7 0 7.22386 0 7.5C0 7.77614 0.223858 8 0.5 8H2.5C2.77614 8 3 7.77614 3 7.5C3 7.22386 2.77614 7 2.5 7H0.5ZM2.1967 12.8033C2.00144 12.608 2.00144 12.2915 2.1967 12.0962L3.61091 10.682C3.80617 10.4867 4.12276 10.4867 4.31802 10.682C4.51328 10.8772 4.51328 11.1938 4.31802 11.3891L2.90381 12.8033C2.70854 12.9986 2.39196 12.9986 2.1967 12.8033ZM12.5 7C12.2239 7 12 7.22386 12 7.5C12 7.77614 12.2239 8 12.5 8H14.5C14.7761 8 15 7.77614 15 7.5C15 7.22386 14.7761 7 12.5 7H12.5ZM10.682 4.31802C10.4867 4.12276 10.4867 3.80617 10.682 3.61091L12.0962 2.1967C12.2915 2.00144 12.608 2.00144 12.8033 2.1967C12.9986 2.39196 12.9986 2.70854 12.8033 2.90381L11.3891 4.31802C11.1938 4.51328 10.8772 4.51328 10.682 4.31802ZM8 12.5C8 12.2239 7.77614 12 7.5 12C7.22386 12 7 12.2239 7 12.5V14.5C7 14.7761 7.77614 15 7.5 15C7.77614 15 8 14.7761 8 14.5V12.5ZM10.682 10.682C10.8772 10.4867 11.1938 10.4867 11.3891 10.682L12.8033 12.0962C12.9986 12.2915 12.9986 12.608 12.8033 12.8033C12.608 12.9986 12.2915 12.9986 12.0962 12.8033L10.682 11.3891C10.4867 11.1938 10.4867 10.8772 10.682 10.682ZM5.5 7.5C5.5 6.39543 6.39543 5.5 7.5 5.5C8.60457 5.5 9.5 6.39543 9.5 7.5C9.5 8.60457 8.60457 9.5 7.5 9.5C6.39543 9.5 5.5 8.60457 5.5 7.5ZM7.5 4.5C5.84315 4.5 4.5 5.84315 4.5 7.5C4.5 9.15685 5.84315 10.5 7.5 10.5C9.15685 10.5 10.5 9.15685 10.5 7.5C10.5 5.84315 9.15685 4.5 7.5 4.5Z" fill="currentColor" fillRule="evenodd" clipRule="evenodd"></path>
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
						if(isset($_SESSION['email'])){
							$email = $_SESSION['email'];
							echo "<div class='user-welcome'>";
							echo "<span class='welcome-text'>Welcome, ". $email. "!</span>";
							echo "<a href='logout.php' class='logout-btn'>Logout</a>";
							echo "</div>";
						}
						if(empty($email)){
							echo "<a href='signlog.php' class='auth-link'>SignUp / Login</a>";
						}?>
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
				<a href="index.php" class="mobile-nav-link active">Home</a>
				<a href="about.php" class="mobile-nav-link">About Us</a>
				<a href="terminal.php" class="mobile-nav-link">Terminals</a>
				<a href="routeschedule.php" class="mobile-nav-link">Routes</a>
				<a href="contact.php" class="mobile-nav-link">Contact</a>
				<a href="book.php" class="mobile-nav-link mobile-nav-link-primary">Book Now</a>
			</nav>
		</div>
		
		<!-- Mobile Menu Overlay -->
		<div id="mobile-menu-overlay" class="mobile-menu-overlay" onclick="toggleMobileMenu()"></div>

		<div class="header-divider"></div>
		
		<!-- Cool Glowing Line -->
		<div class="glowing-line"></div>
	</header>
    
    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <!-- Badge Component -->
                <div class="hero-badge">
                    <span class="badge-icon">★</span>
                    <span class="badge-text">Dimple Star — building reliable transport experiences</span>
                    <span class="badge-arrow">→</span>
                </div>

                <!-- Main Heading -->
                <div class="hero-heading">
                    <h1 class="hero-title">
                        We Transport
                    </h1>
                    <div class="typing-container">
                        <span class="typing-text" id="typing-text">Safe & Reliable</span>
                        <span class="typing-caret">|</span>
                    </div>
                    <p class="hero-description">
                        We provide safe and reliable transportation services with our modern fleet of buses. 
                        <span class="highlight-text">Quality</span>, 
                        <span class="highlight-text">safety</span>, and 
                        <span class="highlight-text">reliability</span> for all your travel needs.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="hero-buttons">
                    <a href="book.php" class="hero-btn hero-btn-primary">
                        <span class="btn-icon">
                            <img src="images/bus-icon.svg" alt="Bus icon" />
                        </span>
                        Start a Trip
                    </a>
                    <a href="routeschedule.php" class="hero-btn hero-btn-secondary">
                        <span class="btn-icon">
                            <img src="images/route-icon.svg" alt="Route icon" />
                        </span>
                        Plan your Route
                    </a>
                </div>
                

            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <?php include 'choose.php'; ?>
    
    <!-- Footer -->
    <?php include 'footer.php'; ?>

</div>

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
		
		// Default to light mode if no theme is saved
		if (savedTheme === 'dark') {
			document.body.classList.add('dark-mode');
		} else {
			document.body.classList.remove('dark-mode');
		}
		
		// Initialize logo visibility
		updateLogoVisibility();
	}
	
	// Call initialize function when page loads
	document.addEventListener('DOMContentLoaded', function() {
		initializeTheme();
	});
	
	// Typing Animation Effect
	const phrases = [
		"Safe & Reliable",
		"Comfortable Travel",
		"Professional Service",
		"Modern Fleet"
	];
	
	let displayText = "";
	let phraseIndex = 0;
	let isDeleting = false;
	let animationStarted = false;
	
	function typeText() {
		// Ensure the element exists and animation hasn't started
		const typingElement = document.getElementById('typing-text');
		if (!typingElement || animationStarted) {
			return;
		}
		
		// Reset animation state
		displayText = "";
		phraseIndex = 0;
		isDeleting = false;
		animationStarted = true;
		
		// Clear any existing text
		typingElement.textContent = "";
		
		function animate() {
			const current = phrases[phraseIndex % phrases.length];
			const typingSpeed = isDeleting ? 35 : 75;
			
			if (!isDeleting) {
				// Typing forward
				const next = current.slice(0, displayText.length + 1);
				displayText = next;
				typingElement.textContent = next;
				
				if (next === current) {
					// Pause at complete phrase
					setTimeout(() => {
						isDeleting = true;
						animate();
					}, 900);
					return;
				}
			} else {
				// Deleting backward
				const next = current.slice(0, displayText.length - 1);
				displayText = next;
				typingElement.textContent = next;
				
				if (next.length === 0) {
					isDeleting = false;
					phraseIndex = (phraseIndex + 1) % phrases.length;
					// Small pause before next phrase
					setTimeout(animate, 300);
					return;
				}
			}
			
			setTimeout(animate, typingSpeed);
		}
		
		// Start the animation
		animate();
	}
	
	// Mobile Menu Toggle
	function toggleMobileMenu() {
		const mobileMenu = document.getElementById('mobile-menu');
		const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
		const menuBtn = document.querySelector('.mobile-menu-btn');
		const body = document.body;
		
		if (mobileMenu.classList.contains('active')) {
			// Close menu
			mobileMenu.classList.remove('active');
			mobileMenuOverlay.classList.remove('active');
			menuBtn.classList.remove('active');
			body.style.overflow = '';
		} else {
			// Open menu
			mobileMenu.classList.add('active');
			mobileMenuOverlay.classList.add('active');
			menuBtn.classList.add('active');
			body.style.overflow = 'hidden';
		}
	}
	
	// Close mobile menu when clicking on a link
	document.addEventListener('DOMContentLoaded', function() {
		const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
		mobileNavLinks.forEach(link => {
			link.addEventListener('click', function() {
				// Close mobile menu after a short delay to allow navigation
				setTimeout(() => {
					toggleMobileMenu();
				}, 100);
			});
		});
	});
	
	// Start typing animation when page loads
	document.addEventListener('DOMContentLoaded', function() {
		initializeTheme();
		
		// Ensure the typing element is ready before starting animation
		const typingElement = document.getElementById('typing-text');
		if (typingElement) {
			// Clear any existing text and start fresh
			typingElement.textContent = "";
			setTimeout(typeText, 500);
		}
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
</body>
</html>