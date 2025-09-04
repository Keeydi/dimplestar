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
.map-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--foreground-primary);
    margin-bottom: 15px;
    text-align: center;
}

.map-description {
    font-size: 0.9rem;
    color: var(--foreground-secondary);
    text-align: center;
    margin-top: 15px;
}

.map-legend {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 15px;
    font-size: 0.8rem;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 5px;
}

.legend-icon {
    width: 16px;
    height: 16px;
    border-radius: 50%;
}

.legend-icon.office {
    background-color: #dc2626;
}

.legend-icon.terminal {
    background-color: #0d9adc;
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
					<a href="about.php" class="nav-link active">About Us</a>
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
				<a href="about.php" class="mobile-nav-link active">About Us</a>
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

<div id="wrapper">
    <div id="content">
    	<section class="about-hero">
    		<div class="about-hero-inner">
    			<h1 class="about-title">About Dimple Star Transport</h1>
    			<p class="about-sub">Safe, reliable, and comfortable journeys across Luzon and Mindoro since day one.</p>
    		</div>
    	</section>

    	<section class="about-section">
    		<div class="about-grid">
    			<div class="about-content">
    				<h2 class="about-heading">Who we are</h2>
    				<p class="about-text">
    					Dimple Star Transport is committed to connecting people and places through dependable and affordable transport services. Our fleet is maintained to high standards and operated by professional drivers who prioritize your safety and comfort.
    				</p>
    				<p class="about-text">
    					With routes spanning key terminals and cities, we make travel easier—whether you're visiting family, managing business trips, or exploring the islands.
    				</p>
    				<div class="about-stats">
    					<div class="stat-card">
    						<div class="stat-value">50+ </div>
    						<div class="stat-label">Daily Trips</div>
    					</div>
    					<div class="stat-card">
    						<div class="stat-value">15+ </div>
    						<div class="stat-label">Terminals</div>
    					</div>
    					<div class="stat-card">
    						<div class="stat-value">1M+ </div>
    						<div class="stat-label">Passengers Served</div>
    					</div>
    				</div>
    			</div>
    			<div class="about-media">
    				<div class="map-card">
    					<h3 class="map-title">Our Locations</h3>
    					<div id="service-map"></div>
    					<p class="map-description">Find our main office in Cabuyao, Laguna and terminal locations across Luzon and Mindoro</p>
    					<div class="map-legend">
    						<div class="legend-item">
    							<div class="legend-icon office"></div>
    							<span>Main Office</span>
    						</div>
    						<div class="legend-item">
    							<div class="legend-icon terminal"></div>
    							<span>Terminals</span>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>

    	<section class="values-section">
    		<h2 class="about-heading center">Our Values</h2>
    		<div class="values-grid">
    			<div class="value-card">
    				<h3 class="value-title">Safety First</h3>
    				<p class="value-text">Regular maintenance, trained drivers, and disciplined operations keep every trip secure.</p>
    			</div>
    			<div class="value-card">
    				<h3 class="value-title">Reliability</h3>
    				<p class="value-text">Consistent schedules and dependable service so you arrive on time—every time.</p>
    			</div>
    			<div class="value-card">
    				<h3 class="value-title">Comfort</h3>
    				<p class="value-text">Air-conditioned options, clean buses, and friendly staff for a pleasant ride.</p>
    			</div>
    			<div class="value-card">
    				<h3 class="value-title">Service</h3>
    				<p class="value-text">Customer support that cares—ready to help with bookings and travel needs.</p>
    			</div>
    		</div>
    	</section>

		<?php
		// Define terminal locations for the map
		$terminals = [
			[
				'name' => 'Main Office',
				'location' => 'Block 1 lot 10, Southpoint Subd., Brgy Banay-Banay, Cabuyao, Laguna',
				'lat' => 14.2785,
				'lng' => 121.1264,
				'contact' => '+63 929 209 0712',
				'type' => 'office'
			],
			[
				'name' => 'España Terminal',
				'location' => '836B Antipolo St, Sampaloc, Manila',
				'lat' => 14.6125312,
				'lng' => 120.9948033,
				'contact' => '+63.02.985.1451 / +63.908.926.9163',
				'type' => 'terminal'
			],
			[
				'name' => 'San Jose Terminal',
				'location' => 'Bonifacio St, San Jose, Occidental Mindoro',
				'lat' => 12.3540632,
				'lng' => 121.0618653,
				'contact' => '+63.02.6684151 / +63.921.568.6449',
				'type' => 'terminal'
			]
		];
		?>
    </div>

<?php include 'footer.php'; ?>

</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
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

	// Initialize map
	document.addEventListener('DOMContentLoaded', function() {
		initializeTheme();
		// Build list of terminal locations from PHP
		var terminals = <?php echo json_encode($terminals); ?> || [];
		// If Leaflet failed to load, show message
		if (typeof L === 'undefined') {
			var el = document.getElementById('service-map');
			if (el) {
				el.innerHTML = '<div style="padding:14px;color:var(--foreground-secondary);">Map failed to load. Please check your internet connection (Leaflet CDN) or allow external scripts.</div>';
			}
			return;
		}

		var defaultCenter = [13.1, 121.2];
		var map = L.map('service-map', { zoomControl: true, scrollWheelZoom: true }).setView(defaultCenter, 7);
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: '&copy; OpenStreetMap'
		}).addTo(map);

		var bounds = [];
		terminals.forEach(function(terminal){
			// Create custom icon for office vs terminals
			var iconUrl = terminal.type === 'office' ? 
				'data:image/svg+xml;base64,' + btoa('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>') :
				'data:image/svg+xml;base64,' + btoa('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0d9adc" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>');
			
			var customIcon = L.icon({
				iconUrl: iconUrl,
				iconSize: [32, 32],
				iconAnchor: [16, 32],
				popupAnchor: [0, -32]
			});
			
			var marker = L.marker([terminal.lat, terminal.lng], {icon: customIcon}).addTo(map);
			var popupContent = '<strong>' + terminal.name + '</strong><br>' + 
							  terminal.location + '<br>' +
							  '<strong>Contact:</strong> ' + terminal.contact;
			marker.bindPopup(popupContent);
			bounds.push([terminal.lat, terminal.lng]);
		});
		if(bounds.length){ map.fitBounds(bounds, { padding:[30,30] }); }
	});
	
	// Mobile Menu Toggle
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
	
	// Close mobile menu when clicking on a link
	document.addEventListener('DOMContentLoaded', function() {
		const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
		mobileNavLinks.forEach(link => {
			link.addEventListener('click', function() {
				setTimeout(() => { toggleMobileMenu(); }, 100);
			});
		});
	});
</script>
</body>
</html>