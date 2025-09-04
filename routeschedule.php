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
<link rel="stylesheet" type="text/css" href="style/routes.css?v=<?php echo time(); ?>" />
<link rel="icon" href="images/lul.svg" type="image/svg+xml">
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
					<a href="routeschedule.php" class="nav-link active">Routes</a>
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
				<a href="about.php" class="mobile-nav-link">About Us</a>
				<a href="terminal.php" class="mobile-nav-link">Terminals</a>
				<a href="routeschedule.php" class="mobile-nav-link active">Routes</a>
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

<section class="routes-section">
    		    		<?php
    		// Connect to database and fetch all routes
    		include_once 'php_includes/connection.php';
    		
    		// Pagination settings
    		$routesPerPage = 5;
    		$currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
    		$offset = ($currentPage - 1) * $routesPerPage;
    		
    		// Filter settings from URL parameters
    		$searchFilter = isset($_GET['search']) ? trim($_GET['search']) : '';
    		$maxPriceFilter = isset($_GET['maxPrice']) ? intval($_GET['maxPrice']) : null;
    		$typeFilter = isset($_GET['type']) ? $_GET['type'] : 'all';
    		
    				// Build WHERE clause for filtering
		$whereConditions = [];
		
		if (!empty($searchFilter)) {
			$searchParam = mysqli_real_escape_string($conn, "%$searchFilter%");
			$whereConditions[] = "(origin LIKE '$searchParam' OR destination LIKE '$searchParam' OR time LIKE '$searchParam' OR bustype LIKE '$searchParam')";
		}
		
		if ($maxPriceFilter !== null) {
			$maxPriceFilter = intval($maxPriceFilter);
			$whereConditions[] = "price <= $maxPriceFilter";
		}
		
		if ($typeFilter !== 'all') {
			if ($typeFilter === 'air-conditioned') {
				$whereConditions[] = "bustype LIKE '%Air%'";
			} else if ($typeFilter === 'ordinary') {
				$whereConditions[] = "bustype NOT LIKE '%Air%'";
			}
		}
		
		$whereClause = !empty($whereConditions) ? 'WHERE ' . implode(' AND ', $whereConditions) : '';
    		
    		// Try to get routes from the current database
    		$routes = [];
    		$allRoutes = []; // Store all routes for statistics
    		$minPrice = 200;
    		$maxPrice = 300;
    		$dbError = false;
    		$errorMessage = ""; // Initialize error message
    		
    		if(isset($conn) && $conn){
    			// Get total count for pagination
    			$countSql = "SELECT COUNT(*) as total FROM routes $whereClause";
    			$countResult = mysqli_query($conn, $countSql);
    			$totalRoutes = 0;
    			if($countResult) {
    				$countRow = mysqli_fetch_assoc($countResult);
    				$totalRoutes = $countRow['total'];
    			}
    			
    			// Get all routes for statistics (without pagination)
    			$allSql = "SELECT * FROM routes ORDER BY origin, time";
    			$allResult = mysqli_query($conn, $allSql);
    			if($allResult && mysqli_num_rows($allResult) > 0){
    				while($row = mysqli_fetch_assoc($allResult)){
    					$allRoutes[] = $row; // Store all routes for statistics
    					// Calculate min and max prices
    					$price = intval($row['price']);
    					if($price < $minPrice) $minPrice = $price;
    					if($price > $maxPrice) $maxPrice = $price;
    				}
    			}
    			
    			// Get paginated and filtered routes
    			$sql = "SELECT * FROM routes $whereClause ORDER BY origin, time LIMIT $routesPerPage OFFSET $offset";
    			$result = mysqli_query($conn, $sql);
    			if($result && mysqli_num_rows($result) > 0){
    				while($row = mysqli_fetch_assoc($result)){
    					$routes[] = $row;
    				}
    			} else if($totalRoutes > 0) {
    				// No results for current page, but there are results
    				$dbError = true;
    				$errorMessage = "No routes found for the current page. Please try a different page.";
    			} else {
    				$dbError = true;
    				$errorMessage = "Could not fetch routes from the primary database. Please try again later.";
    			}
    		} else {
    			$dbError = true;
    			$errorMessage = "Database connection failed. Please check your internet connection or try again later.";
    		}
    		
    		// If no routes found, try the dimplestar database
    		if(empty($allRoutes) && !$dbError){
    			@mysqli_select_db($conn, 'dimplestar');
    			$sql = "SELECT * FROM routes ORDER BY origin, time";
    			$result = mysqli_query($conn, $sql);
    			if($result && mysqli_num_rows($result) > 0){
    				while($row = mysqli_fetch_assoc($result)){
    					$allRoutes[] = $row;
    					// Calculate min and max prices
    					$price = intval($row['price']);
    					if($price < $minPrice) $minPrice = $price;
    					if($price > $maxPrice) $maxPrice = $price;
    				}
    				
    				// Get paginated routes
    				$sql = "SELECT * FROM routes ORDER BY origin, time LIMIT $routesPerPage OFFSET $offset";
    				$result = mysqli_query($conn, $sql);
    				if($result && mysqli_num_rows($result) > 0){
    					while($row = mysqli_fetch_assoc($result)){
    						$routes[] = $row;
    					}
    				}
    			}
    		}
    		
    		// Calculate pagination info
    		$totalPages = ceil($totalRoutes / $routesPerPage);
    		
    		// Ensure current page is within valid range
    		if($currentPage > $totalPages && $totalPages > 0) {
    			$currentPage = $totalPages;
    			$offset = ($currentPage - 1) * $routesPerPage;
    		}
    		
    		// Ensure we have reasonable defaults
    		if($minPrice >= $maxPrice) {
    			$minPrice = 200;
    			$maxPrice = 300;
    		}
    		
    		// Calculate step size (10% of range, minimum 10)
    		$priceRange = $maxPrice - $minPrice;
    		$stepSize = max(10, round($priceRange * 0.1));
    		?>
    		<div class="routes-container">
    			<div class="routes-hero">
    				<h1 class="routes-title">Routes & Schedules</h1>
    				<p class="routes-sub">Explore our comprehensive network of routes connecting Luzon and Mindoro</p>
    			</div>

    						<?php if ($dbError): ?>
			<div class="error-message">
				<h3>Database Connection Error</h3>
				<p><?php echo htmlspecialchars($errorMessage); ?></p>
				<p>Please try refreshing the page or contact support if the problem persists.</p>
			</div>
			<?php endif; ?>

			<div class="routes-controls">
				<div class="search-section">
					<input type="text" id="searchBox" class="search-box" placeholder="Search routes by origin, destination, or time..." aria-label="Search routes" value="<?php echo htmlspecialchars($searchFilter); ?>" />
					<div class="price-filter">
						<span class="price-label">Max Price:</span>
						<input type="range" id="priceRange" class="price-range" min="<?php echo $minPrice; ?>" max="<?php echo $maxPrice; ?>" value="<?php echo $maxPriceFilter !== null ? $maxPriceFilter : $maxPrice; ?>" step="<?php echo $stepSize; ?>" aria-label="Maximum price filter" />
						<span id="priceValue" class="price-value">₱<?php echo $maxPriceFilter !== null ? $maxPriceFilter : $maxPrice; ?></span>
						<input type="number" id="priceInput" class="price-input" placeholder="₱" min="<?php echo $minPrice; ?>" max="<?php echo $maxPrice; ?>" value="<?php echo $maxPriceFilter !== null ? $maxPriceFilter : $maxPrice; ?>" aria-label="Enter maximum price" />
					</div>
				</div>

				<div class="routes-filter">
					<button class="filter-btn <?php echo $typeFilter === 'all' ? 'active' : ''; ?>" onclick="filterRoutes('all')" aria-label="Show all routes">All Categories</button>
					<button class="filter-btn <?php echo $typeFilter === 'air-conditioned' ? 'active' : ''; ?>" onclick="filterRoutes('air-conditioned')" aria-label="Show air conditioned routes only">Air Conditioned</button>
					<button class="filter-btn <?php echo $typeFilter === 'ordinary' ? 'active' : ''; ?>" onclick="filterRoutes('ordinary')" aria-label="Show ordinary routes only">Ordinary</button>
				</div>
			</div>

			<!-- Quick Actions Section -->
			<div class="quick-actions">
				<button class="action-btn" onclick="showAllRoutes()" aria-label="Show all available routes">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
					</svg>
					<span>View All</span>
				</button>
				<button class="action-btn" onclick="sortByPrice()" aria-label="Sort routes by price">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
					</svg>
					<span>Sort by Price</span>
				</button>
				<button class="action-btn" onclick="sortByTime()" aria-label="Sort routes by departure time">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
					</svg>
					<span>Sort by Time</span>
				</button>
			</div>

			<div class="routes-grid" id="routes-grid">
    				<?php
    				// Display routes
    				if(!empty($routes)){
    					foreach($routes as $route){
    						$bustype = strtolower($route['bustype']);
    						$typeClass = (strpos($bustype, 'air') !== false) ? 'air-conditioned' : 'ordinary';
    						$typeLabel = (strpos($bustype, 'air') !== false) ? 'Air Conditioned' : 'Ordinary';
    						
    						// Check if this is today's route (morning departures)
    						$isToday = false;
    						$time = strtolower($route['time']);
    						if(strpos($time, 'am') !== false) {
    							$isToday = true;
    						}
    						
    						// Generate unique ID for the route
    						$routeId = 'route_' . $route['busid'];
    						
    						echo '<div class="route-card" data-type="'.$typeClass.'" data-price="'.$route['price'].'" data-origin="'.strtolower($route['origin']).'" data-destination="'.strtolower($route['destination']).'" data-time="'.strtolower($route['time']).'" data-bustype="'.strtolower($route['bustype']).'" id="'.$routeId.'">';
    						
    						// Route availability indicator
    						$availability = 'available'; // You can modify this based on your data
    						echo '<div class="route-availability '.$availability.'"></div>';
    						
    						echo '<div class="route-header">';
    						echo '<div class="route-route">'.$route['origin'].' → '.$route['destination'].'</div>';
    						echo '<span class="route-type '.$typeClass.'">'.$typeLabel.'</span>';
    						echo '</div>';
    						
    						// Today indicator positioned to avoid overlap
    						if($isToday) {
    							echo '<div class="today-indicator">Today</div>';
    						}
    						
    						// Route duration estimate
    						$duration = '4-6 hours'; // You can calculate this based on distance
    						echo '<div class="route-duration">';
    						echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">';
    						echo '<path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
    						echo '</svg>';
    						echo '<span>'.$duration.'</span>';
    						echo '</div>';
    						
    						echo '<div class="route-details">';
    						echo '<div class="route-detail">';
    						echo '<span class="route-label">Origin</span>';
    						echo '<span class="route-value">'.$route['origin'].'</span>';
    						echo '</div>';
    						echo '<div class="route-detail">';
    						echo '<span class="route-label">Destination</span>';
    						echo '<span class="route-value">'.$route['destination'].'</span>';
    						echo '</div>';
    						echo '<div class="route-detail">';
    						echo '<span class="route-label">Departure Time</span>';
    						echo '<span class="route-value">'.$route['time'].'</span>';
    						echo '</div>';
    						echo '<div class="route-detail">';
    						echo '<span class="route-label">Bus Type</span>';
    						echo '<span class="route-value">'.$route['bustype'].'</span>';
    						echo '</div>';
    						echo '</div>';
    						
    						// Route amenities
    						echo '<div class="route-amenities">';
    						if(strpos($bustype, 'air') !== false) {
    							echo '<span class="amenity-tag wifi">WiFi</span>';
    							echo '<span class="amenity-tag usb">USB</span>';
    							echo '<span class="amenity-tag tv">TV</span>';
    						} else {
    							echo '<span class="amenity-tag">Standard</span>';
    						}
    						echo '</div>';
    						
    						echo '<div class="route-price">₱'.$route['price'].'</div>';
    						
    						echo '<div class="route-actions">';
    						echo '<button class="route-action-btn book-btn" onclick="event.stopPropagation(); bookRoute(\''.$routeId.'\')" title="Book This Route" aria-label="Book '.$route['origin'].' to '.$route['destination'].' route">';
    						echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">';
    						echo '<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>';
    						echo '</svg>';
    						echo '<span>Book Now</span>';
    						echo '</button>';
    						echo '</div>';
    						
    						echo '</div>';
    					}
    				} else {
    					echo '<div style="grid-column: 1/-1; text-align: center; padding: 40px; color: var(--foreground-secondary);">';
    					echo '<h3>No routes found</h3>';
    					echo '<p>Please check back later for available routes.</p>';
    					echo '</div>';
    				}
    				?>
    			    			</div>

    			<!-- Pagination Controls -->
    			<?php if($totalPages > 1): ?>
    			<div class="pagination-container">
    				<div class="pagination-info">
    					<span>Showing <?php echo ($offset + 1); ?> - <?php echo min($offset + $routesPerPage, $totalRoutes); ?> of <?php echo $totalRoutes; ?> routes</span>
    				</div>
    				<div class="pagination-controls">
    					<?php 
    					// Build query parameters for pagination links
    					$queryParams = [];
    					if (!empty($searchFilter)) $queryParams['search'] = $searchFilter;
    					if ($maxPriceFilter !== null) $queryParams['maxPrice'] = $maxPriceFilter;
    					if ($typeFilter !== 'all') $queryParams['type'] = $typeFilter;
    					
    					if($currentPage > 1): 
    						$queryParams['page'] = 1;
    						$firstPageUrl = '?' . http_build_query($queryParams);
    						$queryParams['page'] = $currentPage - 1;
    						$prevPageUrl = '?' . http_build_query($queryParams);
    					?>
    						<a href="<?php echo $firstPageUrl; ?>" class="pagination-btn" aria-label="Go to first page">« First</a>
    						<a href="<?php echo $prevPageUrl; ?>" class="pagination-btn" aria-label="Go to previous page">‹ Previous</a>
    					<?php endif; ?>
    					
    					<?php
    					// Show page numbers
    					$startPage = max(1, $currentPage - 2);
    					$endPage = min($totalPages, $currentPage + 2);
    					
    					for($i = $startPage; $i <= $endPage; $i++): 
    						$queryParams['page'] = $i;
    						$pageUrl = '?' . http_build_query($queryParams);
    					?>
    						<a href="<?php echo $pageUrl; ?>" class="pagination-btn <?php echo ($i == $currentPage) ? 'active' : ''; ?>" aria-label="Go to page <?php echo $i; ?>"><?php echo $i; ?></a>
    					<?php endfor; ?>
    					
    					<?php if($currentPage < $totalPages): 
    						$queryParams['page'] = $currentPage + 1;
    						$nextPageUrl = '?' . http_build_query($queryParams);
    						$queryParams['page'] = $totalPages;
    						$lastPageUrl = '?' . http_build_query($queryParams);
    					?>
    						<a href="<?php echo $nextPageUrl; ?>" class="pagination-btn" aria-label="Go to next page">Next ›</a>
    						<a href="<?php echo $lastPageUrl; ?>" class="pagination-btn" aria-label="Go to last page">Last »</a>
    					<?php endif; ?>
    				</div>
    			</div>
    						<?php endif; ?>

			<!-- Comparison Modal -->
    			<div id="comparisonModal" class="comparison-modal">
    				<div class="comparison-content">
    					<div class="comparison-header">
    						<h2 class="comparison-title">Route Comparison</h2>
    						<button class="close-modal" onclick="closeComparisonModal()" aria-label="Close comparison modal">×</button>
    					</div>
    					<div id="comparisonTable" class="comparison-table-container">
    						<!-- Comparison table will be populated by JavaScript -->
    					</div>
    				</div>
    			</div>

    			<div class="route-note">
				<strong>Note:</strong> All trips are vice versa. Return trips follow the same schedule in reverse direction.
			</div>
		</div>
	</section>

<?php include 'footer.php'; ?>

<script>
	// Global variables
	let currentFilters = {
		search: '<?php echo addslashes($searchFilter); ?>',
		maxPrice: <?php echo $maxPriceFilter !== null ? $maxPriceFilter : $maxPrice; ?>,
		type: '<?php echo $typeFilter; ?>'
	};
	
	// Performance optimization
	let searchTimeout;

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

	// Debounced search functionality
	function performSearch() {
		clearTimeout(searchTimeout);
		searchTimeout = setTimeout(() => {
			const searchTerm = document.getElementById('searchBox').value.toLowerCase();
			currentFilters.search = searchTerm;
			applyFilters();
		}, 300); // 300ms delay for better performance
	}

	// Price range filter with smooth updates
	function updatePriceFilter() {
		const priceRange = document.getElementById('priceRange');
		const priceValue = document.getElementById('priceValue');
		const priceInput = document.getElementById('priceInput');
		const maxPrice = parseInt(priceRange.value);
		
		priceValue.textContent = '₱' + maxPrice;
		priceInput.value = maxPrice;
		currentFilters.maxPrice = maxPrice;
		
		// Add visual feedback
		priceValue.style.transform = 'scale(1.1)';
		setTimeout(() => {
			priceValue.style.transform = 'scale(1)';
		}, 200);
		
		applyFilters();
	}

	// Manual price input filter with validation
	function updatePriceFromInput() {
		const priceRange = document.getElementById('priceRange');
		const priceValue = document.getElementById('priceValue');
		const priceInput = document.getElementById('priceInput');
		const maxPrice = parseInt(priceInput.value);
		
		// Validate input
		const minPrice = parseInt(priceRange.min);
		const rangeMaxPrice = parseInt(priceRange.max);
		
		if (maxPrice < minPrice) {
			priceInput.value = minPrice;
		} else if (maxPrice > rangeMaxPrice) {
			priceInput.value = rangeMaxPrice;
		}
		
		const validPrice = parseInt(priceInput.value);
		priceRange.value = validPrice;
		priceValue.textContent = '₱' + validPrice;
		currentFilters.maxPrice = validPrice;
		
		// Add visual feedback
		priceValue.style.transform = 'scale(1.1)';
		setTimeout(() => {
			priceValue.style.transform = 'scale(1)';
		}, 200);
		
		applyFilters();
	}

	// Enhanced filter routes function
	function filterRoutes(type) {
		console.log('Filtering by type:', type); // Debug log
		
		// Reset all button states first
		const filterBtns = document.querySelectorAll('.filter-btn');
		filterBtns.forEach(btn => btn.classList.remove('active'));
		
		// Update active button with smooth transition
		event.target.classList.add('active');
		
		// Update filter
		currentFilters.type = type;
		applyFilters();
	}

	// Enhanced apply filters with client-side filtering (no page refresh)
	function applyFilters() {
		const routeCards = document.querySelectorAll('.route-card');
		let visibleCount = 0;
		
		routeCards.forEach(card => {
			let shouldShow = true;
			
			// Search filter
			if (currentFilters.search) {
				const searchTerm = currentFilters.search.toLowerCase();
				const origin = card.dataset.origin || '';
				const destination = card.dataset.destination || '';
				const time = card.dataset.time || '';
				const bustype = card.dataset.bustype || '';
				
				const matchesSearch = origin.includes(searchTerm) || 
									destination.includes(searchTerm) || 
									time.includes(searchTerm) || 
									bustype.includes(searchTerm);
				
				if (!matchesSearch) {
					shouldShow = false;
				}
			}
			
			// Price filter
			if (shouldShow && currentFilters.maxPrice !== <?php echo $maxPrice; ?>) {
				const price = parseInt(card.dataset.price);
				if (price > currentFilters.maxPrice) {
					shouldShow = false;
				}
			}
			
			// Type filter
			if (shouldShow && currentFilters.type !== 'all') {
				const cardType = card.dataset.type;
				if (currentFilters.type === 'air-conditioned' && cardType !== 'air-conditioned') {
					shouldShow = false;
				} else if (currentFilters.type === 'ordinary' && cardType !== 'ordinary') {
					shouldShow = false;
				}
			}
			
			// Show/hide card with smooth animation
			if (shouldShow) {
				card.style.display = 'block';
				card.style.opacity = '1';
				card.style.transform = 'scale(1)';
				visibleCount++;
			} else {
				card.style.opacity = '0';
				card.style.transform = 'scale(0.95)';
				setTimeout(() => {
					card.style.display = 'none';
				}, 200);
			}
		});
		
		// Update pagination info to show filtered results
		updatePaginationInfo(visibleCount);
		
		// Show no results message if needed
		if (visibleCount === 0) {
			showNoResultsMessage();
		} else {
			hideNoResultsMessage();
		}
	}
	
	// Update pagination info for client-side filtering
	function updatePaginationInfo(visibleCount) {
		const totalRoutes = <?php echo count($allRoutes); ?>;
		const paginationInfo = document.querySelector('.pagination-info');
		
		if (paginationInfo) {
			if (visibleCount === totalRoutes) {
				paginationInfo.innerHTML = `<span>Showing all ${totalRoutes} routes</span>`;
			} else {
				paginationInfo.innerHTML = `<span>Showing ${visibleCount} of ${totalRoutes} routes</span>`;
			}
		}
	}
	
	// Show no results message
	function showNoResultsMessage() {
		let noResults = document.querySelector('.no-results');
		if (!noResults) {
			noResults = document.createElement('div');
			noResults.className = 'no-results';
			noResults.innerHTML = `
				<h3>No routes found</h3>
				<p>Try adjusting your search criteria or filters to find available routes.</p>
			`;
			document.getElementById('routes-grid').appendChild(noResults);
		}
		noResults.style.display = 'block';
	}
	
	// Hide no results message
	function hideNoResultsMessage() {
		const noResults = document.querySelector('.no-results');
		if (noResults) {
			noResults.style.display = 'none';
		}
	}

	// Reset all filters (client-side)
	function resetFilters() {
		// Reset filter values
		currentFilters = {
			search: '',
			maxPrice: <?php echo $maxPrice; ?>,
			type: 'all'
		};
		
		// Reset UI elements
		document.getElementById('searchBox').value = '';
		document.getElementById('priceRange').value = <?php echo $maxPrice; ?>;
		document.getElementById('priceValue').textContent = '₱<?php echo $maxPrice; ?>';
		document.getElementById('priceInput').value = <?php echo $maxPrice; ?>;
		
		// Reset filter buttons
		const filterBtns = document.querySelectorAll('.filter-btn');
		filterBtns.forEach(btn => btn.classList.remove('active'));
		document.querySelector('.filter-btn').classList.add('active'); // First button (All Categories)
		
		// Show all route cards
		const routeCards = document.querySelectorAll('.route-card');
		routeCards.forEach(card => {
			card.style.display = 'block';
			card.style.opacity = '1';
			card.style.transform = 'scale(1)';
		});
		
		// Update pagination info
		updatePaginationInfo(<?php echo count($allRoutes); ?>);
		hideNoResultsMessage();
	}

	// Quick action functions

	// Quick action functions
	function showAllRoutes() {
		resetFilters();
	}

	function sortByPrice() {
		const routeCards = Array.from(document.querySelectorAll('.route-card'));
		const grid = document.getElementById('routes-grid');
		
		routeCards.sort((a, b) => {
			const priceA = parseInt(a.dataset.price);
			const priceB = parseInt(b.dataset.price);
			return priceA - priceB;
		});
		
		routeCards.forEach(card => grid.appendChild(card));
	}

	function sortByTime() {
		const routeCards = Array.from(document.querySelectorAll('.route-card'));
		const grid = document.getElementById('routes-grid');
		
		routeCards.sort((a, b) => {
			const timeA = a.dataset.time;
			const timeB = b.dataset.time;
			return timeA.localeCompare(timeB);
		});
		
		routeCards.forEach(card => grid.appendChild(card));
	}

	// Comparison modal functions
	function openComparisonModal() {
		document.getElementById('comparisonModal').style.display = 'block';
	}

	function closeComparisonModal() {
		document.getElementById('comparisonModal').style.display = 'none';
	}

	// Close modal when clicking outside
	document.addEventListener('click', function(event) {
		const modal = document.getElementById('comparisonModal');
		if (event.target === modal) {
			closeComparisonModal();
		}
	});

	// Enhanced book route with better UX
	function bookRoute(routeId) {
		const btn = event.target.closest('.book-btn');
		
		// Add loading state
		btn.classList.add('loading');
		
		setTimeout(() => {
			// Redirect to booking page with route details
			const card = document.getElementById(routeId);
			const origin = card.querySelector('.route-route').textContent.split(' → ')[0];
			const destination = card.querySelector('.route-route').textContent.split(' → ')[1];
			const time = card.querySelector('.route-detail:nth-child(3) .route-value').textContent;
			const price = card.querySelector('.route-price').textContent;
			
			// Store route details in sessionStorage for booking page
			sessionStorage.setItem('selectedRoute', JSON.stringify({
				origin: origin,
				destination: destination,
				time: time,
				price: price
			}));
			
			window.location.href = 'book.php';
		}, 500);
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
	
	// Initialize on page load with enhanced setup
	document.addEventListener('DOMContentLoaded', function() {
		initializeTheme();
		
		// Add event listeners with better performance
		document.getElementById('searchBox').addEventListener('input', performSearch);
		document.getElementById('priceRange').addEventListener('input', updatePriceFilter);
		document.getElementById('priceInput').addEventListener('input', updatePriceFromInput);
		
		// Close mobile menu when clicking on a link
		const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
		mobileNavLinks.forEach(link => {
			link.addEventListener('click', function() {
				setTimeout(() => { toggleMobileMenu(); }, 100);
			});
		});
		
		// Add keyboard support for search
		document.getElementById('searchBox').addEventListener('keydown', function(e) {
			if (e.key === 'Enter') {
				e.preventDefault();
				performSearch();
			}
		});
		
		// Add keyboard support for price input
		document.getElementById('priceInput').addEventListener('keydown', function(e) {
			if (e.key === 'Enter') {
				e.preventDefault();
				updatePriceFromInput();
			}
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
		
		// Add intersection observer for lazy loading animations
		const observerOptions = {
			threshold: 0.1,
			rootMargin: '0px 0px -50px 0px'
		};
		
		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.style.opacity = '1';
					entry.target.style.transform = 'translateY(0)';
				}
			});
		}, observerOptions);
		
		// Observe route cards for animation
		document.querySelectorAll('.route-card').forEach(card => {
			card.style.opacity = '0';
			card.style.transform = 'translateY(30px)';
			observer.observe(card);
		});
	});
</script>
</body>
</html>