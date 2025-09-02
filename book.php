<!DOCTYPE html>
<?php
	include 'php_includes/connection.php';
	include 'php_includes/book.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" type="text/css" href="style/header.css" />
<link rel="stylesheet" type="text/css" href="style/book.css" />
<link rel="stylesheet" type="text/css" href="style/footer.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">

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
				<a href="contact.php" class="nav-link">Contact</a>
				<a href="book.php" class="nav-link nav-link-primary active">Book Now</a>
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
						<path d="M1.90321 7.29677C1.90321 10.341 4.11088 12.8516 7.02812 13.6569C7.02812 13.6569 6.76701 13.6569 6.76701 13.6569C4.08672 13.6569 1.90321 11.4734 1.90321 8.79311C1.90321 8.79311 1.90321 8.53199 1.90321 8.27088C1.90321 7.29677 1.90321 7.29677 1.90321 7.29677ZM8.76701 13.6569C8.76701 13.6569 8.50589 13.6569 8.24478 13.6569C11.162 12.8516 13.3697 10.341 13.3697 7.29677C13.3697 7.29677 13.3697 7.29677 13.3697 7.29677C13.3697 4.25254 11.162 1.74219 8.24478 0.93689C8.50589 0.93689 8.76701 0.93689 8.76701 0.93689C8.76701 0.93689 8.76701 0.93689 8.76701 0.93689C8.76701 1.198 8.76701 1.45911 8.76701 1.72023C8.76701 4.25254 6.5835 6.43605 3.90321 6.43605C3.90321 6.43605 3.90321 6.43605 3.90321 6.43605C3.90321 9.11634 5.08672 11.2998 7.76701 11.2998C7.76701 11.2998 7.76701 11.2998 7.76701 11.2998C7.76701 11.2998 7.76701 11.2998 7.76701 11.2998C7.76701 11.5609 7.76701 11.822 7.76701 12.0831C7.76701 12.0831 7.76701 12.0831 7.76701 12.0831C7.76701 12.0831 7.76701 12.0831 7.76701 12.0831C7.76701 13.6569 8.76701 13.6569 8.76701 13.6569Z" fill="currentColor" fillRule="evenodd" clipRule="evenodd"></path>
					</svg>
				</button>
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
			</nav>
		</div>
	</div>
	<div class="header-divider"></div>
	<div class="glowing-line"></div>
</header>
<div id="wrapper">
	<div id="content">
		<div class="book-hero">
			<div class="book-hero-inner">
				<h1 class="book-hero-title">Book Now</h1>
				<p class="book-hero-sub">Tell us what you want to purchase and details we should know</p>
			</div>
		</div>
    	<div id="gallerycontainer2">
			<div class="book-page" style="margin:0 auto; padding:30px 20px 20px 20px; width:820px;">

 <div class="book-card">
 <form class="book-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<table class="book-table" height="50%" width="100%" border="0">
		<tr>
			<td colspan="4"><h1>Book Now</h1></td>
		</tr>
		<tr>
			<td colspan="4">
				<div class="book-radio-group">
					<label class="book-radio"><input type="radio" name="way" value="2" onclick="document.getElementById('datepick2').disabled=false"> <span>Two Way</span></label>
					<label class="book-radio"><input type="radio" name="way" value="1" onclick="document.getElementById('datepick2').disabled=true" checked> <span>One Way</span></label>
				</div>
			</td>
		</tr>
		<tr>
			<td class="book-label">Origin:</td>
			<td colspan="3">
				<select name="Origin">
					<option value="0">Select</option>
					<option value="San Lazaro">San Lazaro</option>
					<option value="Espana">Espana</option>
					<option value="Alabang">Alabang</option>
					<option value="Cabuyao">Cabuyao</option>
					<option value="Naujan">Naujan</option>
					<option value="Victoria">Victoria</option>
					<option value="Pinamalayan">Pinamalayan</option>
					<option value="Gloria">Gloria</option>
					<option value="Bongabong">Bongabong</option>
					<option value="Roxas">Roxas</option>
					<option value="Mansalay">Mansalay</option>
					<option value="Bulalacao">Bulalacao</option>
					<option value="Magsaysay">Magsaysay</option>
					<option value="San Jose">San Jose</option>
					<option value="Pola">Pola</option>
					<option value="Soccoro">Soccoro</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="book-label">Destination:</td>
			<td colspan="3">
				<select name="Destination">
					<option value="0">Select</option>
					<option value="San Lazaro">San Lazaro</option>
					<option value="Espana">Espana</option>
					<option value="Alabang">Alabang</option>
					<option value="Cabuyao">Cabuyao</option>
					<option value="Naujan">Naujan</option>
					<option value="Victoria">Victoria</option>
					<option value="Pinamalayan">Pinamalayan</option>
					<option value="Gloria">Gloria</option>
					<option value="Bongabong">Bongabong</option>
					<option value="Roxas">Roxas</option>
					<option value="Mansalay">Mansalay</option>
					<option value="Bulalacao">Bulalacao</option>
					<option value="Magsaysay">Magsaysay</option>
					<option value="San Jose">San Jose</option>
					<option value="Pola">Pola</option>
					<option value="Soccoro">Soccoro</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="book-label">No. of Passengers:</td>
			<td colspan="3"><input type="number" name="no_of_pass" required /></td>
		</tr>
		<tr>
			<td class="book-label">Departure:</td>
			<td colspan="3"><input id="datepick1" size="10" name="Departure" readonly /></td>
		</tr>
		<tr>
			<td class="book-label">Return:</td>
			<td colspan="3"><input id="datepick2" size="10" name="Return" readonly disabled /></td>
		</tr>
		<tr>
			<td class="book-label">Bus Type:</td>
			<td colspan="3">
				<select name="bustype">
					<option value="0">Select</option>
					<option value="Air Conditioned">Air Conditioned</option>
					<option value="Ordinary">Ordinary</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="padding-top:12px;"><input class="book-submit" type="submit" name="submit" id="submit" value="Submit" /></td>
		</tr>
	</table>
</form>
 </div>
			</div>
			<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
</div>
<?php include 'footer.php'; ?>

<script type="text/javascript" src="js/datepickr.js"></script>
<script type="text/javascript">
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
		updateLogoVisibility();
	}
	function updateLogoVisibility() {
		const isDark = document.body.classList.contains('dark-mode');
		const logoDark = document.querySelector('.logo-dark');
		const logoLight = document.querySelector('.logo-light');
		if (logoDark && logoLight) {
			if (isDark) {
				logoDark.style.display = 'block';
				logoLight.style.display = 'none';
			} else {
				logoDark.style.display = 'none';
				logoLight.style.display = 'block';
			}
		}
	}
	function initializeTheme() {
		const savedTheme = localStorage.getItem('theme');
		if (savedTheme === 'dark') {
			document.body.classList.add('dark-mode');
		} else {
			document.body.classList.remove('dark-mode');
		}
		updateLogoVisibility();
	}
	function toggleMobileMenu() {
		const mobileMenu = document.getElementById('mobile-menu');
		const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
		const menuBtn = document.querySelector('.mobile-menu-btn');
		const body = document.body;
		if (!mobileMenu || !mobileMenuOverlay || !menuBtn) return;
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
	document.addEventListener('DOMContentLoaded', function() {
		initializeTheme();
	});
	new datepickr('datepick1', {
		'dateFormat': '20y-m-d'
	});
	new datepickr('datepick2', {
		'dateFormat': '20y-m-d'
	});
	
	// Prevent past dates via validation on submit (extra safety)
	(function(){
		function parseIso(s){ var a = (s||'').split('-'); return a.length===3 ? new Date(+a[0], +a[1]-1, +a[2]) : null; }
		function todayZero(){ var t=new Date(); t.setHours(0,0,0,0); return t; }
		var form = document.querySelector('.book-form');
		if(!form) return;
		form.addEventListener('submit', function(e){
			var t = todayZero();
			var dep = parseIso(document.getElementById('datepick1').value);
			var retEl = document.getElementById('datepick2');
			var ret = parseIso(retEl.value);
			if(dep && dep < t){ alert('Departure cannot be in the past.'); e.preventDefault(); return; }
			if(!retEl.disabled && ret && ret < t){ alert('Return cannot be in the past.'); e.preventDefault(); return; }
		});
	})();
</script>
<style>
/* lightweight modal styles (scoped) */
.modal-overlay{position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.45);display:none;align-items:center;justify-content:center;z-index:1000}
.modal-overlay.active{display:flex}
.modal-card{background:#fff;color:#222;min-width:300px;max-width:90vw;border-radius:8px;box-shadow:0 10px 30px rgba(0,0,0,.3);overflow:hidden}
body.dark-mode .modal-card{background:#1f2937;color:#e5e7eb}
.modal-header{padding:14px 18px;font-size:18px;font-weight:600;border-bottom:1px solid rgba(0,0,0,.08)}
body.dark-mode .modal-header{border-color:rgba(255,255,255,.08)}
.modal-body{padding:16px 18px;line-height:1.5}
.modal-actions{padding:12px 18px;display:flex;gap:10px;justify-content:flex-end;border-top:1px solid rgba(0,0,0,.06)}
body.dark-mode .modal-actions{border-color:rgba(255,255,255,.06)}
.btn{padding:8px 14px;border-radius:6px;border:1px solid transparent;cursor:pointer}
.btn-primary{background:#2563eb;color:#fff}
.btn-secondary{background:transparent;border-color:rgba(0,0,0,.2)}
body.dark-mode .btn-secondary{border-color:rgba(255,255,255,.2);color:#e5e7eb}
</style>
<div id="book-modal" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="book-modal-title">
	<div class="modal-card">
		<div class="modal-header" id="book-modal-title">Booking Submitted</div>
		<div class="modal-body">You already booked a bus ticket. Continue to proceed?</div>
		<div class="modal-actions">
			<button type="button" class="btn btn-secondary" id="book-modal-cancel">Cancel</button>
			<button type="button" class="btn btn-primary" id="book-modal-continue">Continue</button>
		</div>
	</div>
</div>
<script type="text/javascript">
(function(){
	var form = document.querySelector('.book-form');
	if(!form) return;
	var overlay = document.getElementById('book-modal');
	var btnCancel = document.getElementById('book-modal-cancel');
	var btnContinue = document.getElementById('book-modal-continue');
	function openModal(){ if(overlay) overlay.classList.add('active'); }
	function closeModal(){ if(overlay) overlay.classList.remove('active'); }
	form.addEventListener('submit', function(e){
		if(form.dataset.confirmed === 'true') return; // allow natural submit after confirm
		e.preventDefault();
		openModal();
	});
	if(btnCancel){ btnCancel.addEventListener('click', function(){ closeModal(); }); }
	if(btnContinue){ btnContinue.addEventListener('click', function(){
		form.dataset.confirmed = 'true';
		closeModal();
		// proceed with the original submit
		form.submit();
	}); }
})();
</script>
</body>
</html>