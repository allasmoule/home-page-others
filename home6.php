<?php
// home6.php - Homepage 6: Sunrise International School (100% Same-to-Same to User Uploaded Mockup)
$currentPage = 'home6';
$siteTitle = "Sunrise International School | Discipline • Knowledge • Better Future";
require_once __DIR__ . '/includes/header.php';
?>

<div class="s6-body-wrap">

  <!-- ==================== 1. SUNRISE NAVBAR ==================== -->
  <header class="s6-header">
    <div class="container s6-nav-container">
      
      <!-- Brand Logo & Motto -->
      <a href="home6.php" class="s6-brand">
        <img src="assets/images/s6_logo.svg" alt="Sunrise International School Logo" class="s6-brand-logo">
        <div class="s6-brand-text">
          <h2>Sunrise International School</h2>
          <p>Discipline • Knowledge • Better Future</p>
        </div>
      </a>

      <!-- Navigation Links -->
      <nav class="s6-nav-links">
        <a href="home6.php" class="s6-nav-item active">Home</a>
        <a href="#aboutSection" class="s6-nav-item">About</a>
        <a href="#programsSection" class="s6-nav-item">Academics</a>
        <a href="#noticesEventsSection" class="s6-nav-item">Admission</a>
        <a href="#noticesEventsSection" class="s6-nav-item">Notice</a>
        <a href="#gallerySection" class="s6-nav-item">Gallery</a>
        <a href="#contactSection" class="s6-nav-item">Contact</a>
      </nav>

      <!-- Right Actions: Language, Search & Student Login -->
      <div class="s6-nav-actions">
        <div class="lang-switch-pill lang-switch-s6" role="group" aria-label="Language Selector">
          <button type="button" class="lang-btn" data-lang="en" onclick="setLanguage('en')">ENG</button>
          <span class="lang-divider">/</span>
          <button type="button" class="lang-btn" data-lang="bn" onclick="setLanguage('bn')">BAN</button>
        </div>
        <button class="s6-search-btn" onclick="alert('Search feature activated. Type your query...')" title="Search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <button class="s6-login-btn" onclick="openModal('portalModal')">
          <i class="fa-solid fa-user"></i> Student Login
        </button>
      </div>

    </div>
  </header>

  <!-- ==================== 2. HERO / PRINCIPAL'S MESSAGE SECTION ==================== -->
  <section class="s6-hero-section">
    <div class="container s6-hero-grid">
      
      <!-- Left Column: Principal Photo with Authentic Embedded Badge -->
      <div class="s6-hero-photo-col">
        <div class="s6-hero-photo-wrap">
          <img src="assets/images/s6_hero_principal.jpg" alt="Principal Md. Abul Kashem" class="s6-hero-principal-img">
        </div>
      </div>

      <!-- Right Column: Principal's Message & Handwritten Tagline -->
      <div class="s6-hero-content-col">
        <span class="s6-eyebrow">PRINCIPAL'S MESSAGE</span>
        <h1 class="s6-hero-title">
          Education Today<br>
          For a Better Tomorrow
        </h1>
        <p class="s6-hero-desc">
          At Sunrise International School, we believe in building knowledge, character and confidence in every student. Our aim is to provide a safe, disciplined and inspiring environment where every child can grow and achieve their dreams.
        </p>

        <div class="s6-hero-action-row">
          <button class="s6-btn-dark" onclick="openModal('principalModal')">
            Read Principal's Message <i class="fa-solid fa-arrow-right"></i>
          </button>
          
          <div class="s6-hero-script-wrap">
            <img src="assets/images/s6_quote_cursive.png" alt="Discipline Creates Bright Futures" class="s6-script-img">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 3. 6 FEATURES HIGHLIGHTS STRIP ==================== -->
  <section class="s6-features-strip">
    <div class="container s6-features-grid">
      
      <!-- Feature 1 -->
      <div class="s6-feat-item">
        <div class="s6-feat-icon">
          <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <span class="s6-feat-text">Quality Education</span>
      </div>

      <!-- Feature 2 -->
      <div class="s6-feat-item">
        <div class="s6-feat-icon">
          <i class="fa-solid fa-user-group"></i>
        </div>
        <span class="s6-feat-text">Experienced Teachers</span>
      </div>

      <!-- Feature 3 -->
      <div class="s6-feat-item">
        <div class="s6-feat-icon">
          <i class="fa-solid fa-book-open"></i>
        </div>
        <span class="s6-feat-text">Modern Facilities</span>
      </div>

      <!-- Feature 4 -->
      <div class="s6-feat-item">
        <div class="s6-feat-icon">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <span class="s6-feat-text">Safe Environment</span>
      </div>

      <!-- Feature 5 -->
      <div class="s6-feat-item">
        <div class="s6-feat-icon">
          <i class="fa-regular fa-lightbulb"></i>
        </div>
        <span class="s6-feat-text">Co-curricular Activities</span>
      </div>

      <!-- Feature 6 -->
      <div class="s6-feat-item">
        <div class="s6-feat-icon">
          <i class="fa-solid fa-chart-simple"></i>
        </div>
        <span class="s6-feat-text">Bright Future</span>
      </div>

    </div>
  </section>

  <!-- ==================== 4. ABOUT OUR SCHOOL SECTION ==================== -->
  <section class="s6-about-section" id="aboutSection">
    <div class="container s6-about-grid">
      
      <!-- Left Column: Narrative -->
      <div class="s6-about-text-col">
        <span class="s6-eyebrow">ABOUT OUR SCHOOL</span>
        <h2 class="s6-about-title">
          Nurturing<br>
          Young Minds
        </h2>
        <p class="s6-about-desc">
          Sunrise International School is committed to providing high-quality education with strong moral values, modern teaching methods and a supportive environment. We develop responsible, confident and compassionate individuals for a brighter future.
        </p>
        <button class="s6-btn-dark" onclick="openAboutModal()">
          Learn More About Us <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>

      <!-- Right Column: Building Facade with Integrated Stats Bar -->
      <div class="s6-about-visual-col">
        <div class="s6-building-card">
          <img src="assets/images/s6_building.jpg" alt="Sunrise International School Campus" class="s6-building-img">
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 5. OUR ACADEMIC PROGRAMS SECTION ==================== -->
  <section class="s6-programs-section" id="programsSection">
    <div class="container">
      
      <!-- Section Header -->
      <div class="s6-sec-header">
        <div>
          <span class="s6-eyebrow">OUR ACADEMIC PROGRAMS</span>
          <h2 class="s6-sec-title">Programs For Every Stage</h2>
        </div>
        <a href="#programsSection" class="s6-view-all-link" onclick="alert('Viewing comprehensive curriculum details for all sections...')">
          View All Programs <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- 4 Program Cards Grid -->
      <div class="s6-programs-grid">
        
        <!-- Program 1: Primary Section -->
        <div class="s6-prog-card">
          <div class="s6-prog-img-wrap">
            <img src="assets/images/s6_prog_primary.jpg" alt="Primary Section" class="s6-prog-img">
          </div>
          <div class="s6-prog-content">
            <div class="s6-prog-header">
              <h3 class="s6-prog-name">Primary Section</h3>
              <button class="s6-prog-circle-btn" onclick="openProgramDetails('Primary Section', 'Class 1 – 5', 'Focus on language foundations, interactive arithmetic, creative discovery and social skills.')" title="Explore Primary">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
            <p class="s6-prog-grade">Class 1 – 5</p>
            <p class="s6-prog-desc">Strong foundation for lifelong learning.</p>
          </div>
        </div>

        <!-- Program 2: Secondary Section -->
        <div class="s6-prog-card">
          <div class="s6-prog-img-wrap">
            <img src="assets/images/s6_prog_secondary.jpg" alt="Secondary Section" class="s6-prog-img">
          </div>
          <div class="s6-prog-content">
            <div class="s6-prog-header">
              <h3 class="s6-prog-name">Secondary Section</h3>
              <button class="s6-prog-circle-btn" onclick="openProgramDetails('Secondary Section', 'Class 6 – 10', 'Advanced STEM courses, critical analytical reasoning, literature and national board preparation.')" title="Explore Secondary">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
            <p class="s6-prog-grade">Class 6 – 10</p>
            <p class="s6-prog-desc">Developing knowledge, skills and confidence.</p>
          </div>
        </div>

        <!-- Program 3: Higher Secondary -->
        <div class="s6-prog-card">
          <div class="s6-prog-img-wrap">
            <img src="assets/images/s6_prog_higher.jpg" alt="Higher Secondary" class="s6-prog-img">
          </div>
          <div class="s6-prog-content">
            <div class="s6-prog-header">
              <h3 class="s6-prog-name">Higher Secondary</h3>
              <button class="s6-prog-circle-btn" onclick="openProgramDetails('Higher Secondary', 'Class 11 – 12', 'Science, Business Studies & Humanities streams with top university admission preparation.')" title="Explore Higher Secondary">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
            <p class="s6-prog-grade">Class 11 – 12</p>
            <p class="s6-prog-desc">Preparing for higher education and future careers.</p>
          </div>
        </div>

        <!-- Program 4: Co-curricular Activities -->
        <div class="s6-prog-card">
          <div class="s6-prog-img-wrap">
            <img src="assets/images/s6_prog_cocurricular.jpg" alt="Co-curricular Activities" class="s6-prog-img">
          </div>
          <div class="s6-prog-content">
            <div class="s6-prog-header">
              <h3 class="s6-prog-name">Co-curricular Activities</h3>
              <button class="s6-prog-circle-btn" onclick="openProgramDetails('Co-curricular Activities', 'Sports, Arts, Culture', 'Clubs, debates, football, music orchestra, science fairs and leadership seminars.')" title="Explore Activities">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
            <p class="s6-prog-grade">Sports, Arts, Culture</p>
            <p class="s6-prog-desc">Building creativity, teamwork and leadership.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== 6. TRIPLE SPLIT: NOTICES | EVENTS | ADMISSION ==================== -->
  <section class="s6-triple-section" id="noticesEventsSection">
    <div class="container s6-triple-grid">
      
      <!-- Column 1: Latest Notices -->
      <div class="s6-notices-col">
        <div class="s6-sub-header">
          <h3 class="s6-sub-title">LATEST NOTICES</h3>
          <a href="#noticesEventsSection" class="s6-view-link" onclick="alert('Opening official notices board...')">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        
        <div class="s6-feed-list">
          
          <!-- Notice 1 -->
          <div class="s6-feed-item" onclick="openNoticeModal('Annual Exam 2026 – Routine Published', '20 Oct', 'The routine for the annual examination has been published.')">
            <div class="s6-date-badge">
              <span class="s6-db-day">20</span>
              <span class="s6-db-month">Oct</span>
            </div>
            <div class="s6-feed-info">
              <h4 class="s6-feed-title">Annual Exam 2026 – Routine Published</h4>
              <p class="s6-feed-desc">The routine for the annual examination has been published.</p>
            </div>
            <i class="fa-solid fa-chevron-right s6-feed-arrow"></i>
          </div>

          <!-- Notice 2 -->
          <div class="s6-feed-item" onclick="openNoticeModal('Parent-Teacher Meeting', '15 Oct', 'All parents are requested to attend the meeting.')">
            <div class="s6-date-badge">
              <span class="s6-db-day">15</span>
              <span class="s6-db-month">Oct</span>
            </div>
            <div class="s6-feed-info">
              <h4 class="s6-feed-title">Parent-Teacher Meeting</h4>
              <p class="s6-feed-desc">All parents are requested to attend the meeting.</p>
            </div>
            <i class="fa-solid fa-chevron-right s6-feed-arrow"></i>
          </div>

          <!-- Notice 3 -->
          <div class="s6-feed-item" onclick="openNoticeModal('Winter Vacation Notice', '10 Oct', 'The school will remain closed from 20 Dec – 5 Jan.')">
            <div class="s6-date-badge">
              <span class="s6-db-day">10</span>
              <span class="s6-db-month">Oct</span>
            </div>
            <div class="s6-feed-info">
              <h4 class="s6-feed-title">Winter Vacation Notice</h4>
              <p class="s6-feed-desc">The school will remain closed from 20 Dec – 5 Jan.</p>
            </div>
            <i class="fa-solid fa-chevron-right s6-feed-arrow"></i>
          </div>

        </div>
      </div>

      <!-- Column 2: Upcoming Events -->
      <div class="s6-events-col">
        <div class="s6-sub-header">
          <h3 class="s6-sub-title">UPCOMING EVENTS</h3>
          <a href="#noticesEventsSection" class="s6-view-link" onclick="alert('Viewing full academic events calendar...')">View All <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="s6-feed-list">
          
          <!-- Event 1 -->
          <div class="s6-feed-item" onclick="openNoticeModal('Science Fair 2026', '25 Oct', 'Time: 10:00 AM – 2:00 PM at School Main Auditorium.')">
            <div class="s6-date-badge">
              <span class="s6-db-day">25</span>
              <span class="s6-db-month">Oct</span>
            </div>
            <div class="s6-feed-info">
              <h4 class="s6-feed-title">Science Fair 2026</h4>
              <p class="s6-feed-desc">10:00 AM – 2:00 PM</p>
            </div>
            <i class="fa-solid fa-chevron-right s6-feed-arrow"></i>
          </div>

          <!-- Event 2 -->
          <div class="s6-feed-item" onclick="openNoticeModal('Inter-Class Sports', '05 Nov', 'Time: 9:00 AM – 4:00 PM on Campus Athletic Ground.')">
            <div class="s6-date-badge">
              <span class="s6-db-day">05</span>
              <span class="s6-db-month">Nov</span>
            </div>
            <div class="s6-feed-info">
              <h4 class="s6-feed-title">Inter-Class Sports</h4>
              <p class="s6-feed-desc">9:00 AM – 4:00 PM</p>
            </div>
            <i class="fa-solid fa-chevron-right s6-feed-arrow"></i>
          </div>

          <!-- Event 3 -->
          <div class="s6-feed-item" onclick="openNoticeModal('Victory Day Celebration', '16 Dec', 'Time: 10:00 AM – 1:00 PM. Cultural shows & flag ceremony.')">
            <div class="s6-date-badge">
              <span class="s6-db-day">16</span>
              <span class="s6-db-month">Dec</span>
            </div>
            <div class="s6-feed-info">
              <h4 class="s6-feed-title">Victory Day Celebration</h4>
              <p class="s6-feed-desc">10:00 AM – 1:00 PM</p>
            </div>
            <i class="fa-solid fa-chevron-right s6-feed-arrow"></i>
          </div>

        </div>
      </div>

      <!-- Column 3: Admission Now Open Card -->
      <div class="s6-admission-col">
        <div class="s6-admission-card">
          <div class="s6-adm-text">
            <h3 class="s6-adm-title">
              Admission<br>
              Now Open
            </h3>
            <p class="s6-adm-desc">
              Give your child the opportunity to learn, grow and build a brighter future.
            </p>
            <button class="s6-btn-dark s6-btn-sm" onclick="openModal('admissionModal')">
              Apply for Admission <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div class="s6-adm-img-wrap">
            <img src="assets/images/s6_admission_girl.jpg" alt="Student Admission" class="s6-adm-img">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 7. OUR GALLERY SECTION ==================== -->
  <section class="s6-gallery-section" id="gallerySection">
    <div class="container">
      
      <!-- Section Header -->
      <div class="s6-sec-header">
        <h2 class="s6-sec-title">OUR GALLERY</h2>
        <a href="#gallerySection" class="s6-view-all-link" onclick="alert('Opening photo gallery archive...')">
          View All Photos <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- 6 Photo Strip -->
      <div class="s6-gallery-grid">
        <div class="s6-gal-item">
          <img src="assets/images/s6_gal1.jpg" alt="Interactive Classroom" class="s6-gal-photo">
        </div>
        <div class="s6-gal-item">
          <img src="assets/images/s6_gal2.jpg" alt="Library Study" class="s6-gal-photo">
        </div>
        <div class="s6-gal-item">
          <img src="assets/images/s6_gal3.jpg" alt="Science Laboratory" class="s6-gal-photo">
        </div>
        <div class="s6-gal-item">
          <img src="assets/images/s6_gal4.jpg" alt="Campus Sports" class="s6-gal-photo">
        </div>
        <div class="s6-gal-item">
          <img src="assets/images/s6_gal5.jpg" alt="Cultural Dance Performance" class="s6-gal-photo">
        </div>
        <div class="s6-gal-item">
          <img src="assets/images/s6_gal6.jpg" alt="School Campus" class="s6-gal-photo">
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 8. WHAT PARENTS SAY (TESTIMONIALS) ==================== -->
  <section class="s6-testimonials-section">
    <div class="container">
      
      <!-- Header with Carousel Dots -->
      <div class="s6-sec-header">
        <h2 class="s6-sec-title">WHAT PARENTS SAY</h2>
        <div class="s6-testi-dots">
          <span class="s6-dot active"></span>
          <span class="s6-dot"></span>
        </div>
      </div>

      <!-- Testimonial Slider Card -->
      <div class="s6-testimonial-card">
        
        <button class="s6-arrow-btn" onclick="prevTestimonial()" title="Previous review">
          <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="s6-testi-content" id="testiContent">
          <div class="s6-testi-avatar-wrap">
            <img src="assets/images/s6_parent.jpg" alt="Md. Rahman" class="s6-testi-avatar" id="testiAvatar">
          </div>
          
          <div class="s6-testi-quote-box">
            <i class="fa-solid fa-quote-left s6-quote-symbol"></i>
            <p class="s6-testi-text" id="testiText">
              Sunrise International School has provided an excellent learning environment for my child. The teachers are supportive and the school focuses on both academics and character building.
            </p>
            <div class="s6-testi-author">
              <strong id="testiAuthor">Md. Rahman</strong>
              <span id="testiRole">Parent</span>
            </div>
          </div>
        </div>

        <button class="s6-arrow-btn" onclick="nextTestimonial()" title="Next review">
          <i class="fa-solid fa-chevron-right"></i>
        </button>

      </div>

    </div>
  </section>

  <!-- ==================== 9. SUNRISE FOOTER (100% EXACT MOCKUP MATCH) ==================== -->
  <footer class="s6-footer" id="contactSection">
    <div class="container s6-footer-grid">
      
      <!-- Column 1: Brand & Socials -->
      <div class="s6-footer-col">
        <div class="s6-footer-brand">
          <img src="assets/images/s6_logo.svg" alt="Sunrise Logo" class="s6-footer-logo">
          <div>
            <h3>Sunrise International School</h3>
            <p>Discipline • Knowledge • Better Future</p>
          </div>
        </div>
        <div class="s6-footer-socials">
          <a href="#" class="s6-social-circle" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="s6-social-circle" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" class="s6-social-circle" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="s6-social-circle" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="s6-footer-col">
        <h4 class="s6-footer-heading">Quick Links</h4>
        <ul class="s6-footer-links">
          <li><a href="home6.php">Home</a></li>
          <li><a href="#aboutSection">About Us</a></li>
          <li><a href="#programsSection">Academics</a></li>
          <li><a href="#noticesEventsSection" onclick="openModal('admissionModal')">Admission</a></li>
          <li><a href="#noticesEventsSection">Notice</a></li>
          <li><a href="#gallerySection">Gallery</a></li>
          <li><a href="#contactSection">Contact</a></li>
        </ul>
      </div>

      <!-- Column 3: Contact Us -->
      <div class="s6-footer-col">
        <h4 class="s6-footer-heading">Contact Us</h4>
        <ul class="s6-footer-contact">
          <li>
            <i class="fa-solid fa-location-dot"></i>
            <span>123 School Road, Dhanmondi, Dhaka</span>
          </li>
          <li>
            <i class="fa-solid fa-phone"></i>
            <span>01712-345678</span>
          </li>
          <li>
            <i class="fa-solid fa-envelope"></i>
            <span>info@sunriseschool.edu.bd</span>
          </li>
          <li>
            <i class="fa-regular fa-clock"></i>
            <span>Sun – Thu: 8:00 AM – 4:00 PM<br>Friday: 8:00 AM – 1:00 PM</span>
          </li>
        </ul>
      </div>

      <!-- Column 4: Newsletter -->
      <div class="s6-footer-col">
        <h4 class="s6-footer-heading">Newsletter</h4>
        <p class="s6-newsletter-desc">Subscribe to get the latest news and updates.</p>
        <form class="s6-newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Sunrise International School newsletter!');">
          <input type="email" placeholder="Enter your email address" required class="s6-newsletter-input">
          <button type="submit" class="s6-newsletter-btn" title="Subscribe">
            <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>

    </div>

    <!-- Bottom Copyright & Legal Links -->
    <div class="s6-footer-bottom">
      <div class="container s6-bottom-inner">
        <p>&copy; 2026 Sunrise International School. All Rights Reserved.</p>
        <div class="s6-bottom-links">
          <a href="#">Privacy Policy</a>
          <span>|</span>
          <a href="#">Terms of Use</a>
          <span>|</span>
          <a href="#">Sitemap</a>
        </div>
      </div>
    </div>
  </footer>

</div>

<!-- Home 6 Interactive Scripts -->
<script>
const testimonialsData = [
  {
    avatar: 'assets/images/s6_parent.jpg',
    text: 'Sunrise International School has provided an excellent learning environment for my child. The teachers are supportive and the school focuses on both academics and character building.',
    author: 'Md. Rahman',
    role: 'Parent'
  },
  {
    avatar: 'assets/images/student_1.jpg',
    text: 'The balanced attention to STEM subjects, coding, and sports has helped our daughter excel beyond our expectations. Truly a global standard school.',
    author: 'Mrs. Nusrat Jahan',
    role: 'Guardian'
  }
];

let currentTestiIdx = 0;

function updateTestimonial(idx) {
  const item = testimonialsData[idx];
  document.getElementById('testiAvatar').src = item.avatar;
  document.getElementById('testiText').textContent = item.text;
  document.getElementById('testiAuthor').textContent = item.author;
  document.getElementById('testiRole').textContent = item.role;
  
  const dots = document.querySelectorAll('.s6-dot');
  dots.forEach((d, i) => {
    if (i === idx) d.classList.add('active');
    else d.classList.remove('active');
  });
}

function prevTestimonial() {
  currentTestiIdx = (currentTestiIdx === 0) ? testimonialsData.length - 1 : currentTestiIdx - 1;
  updateTestimonial(currentTestiIdx);
}

function nextTestimonial() {
  currentTestiIdx = (currentTestiIdx === testimonialsData.length - 1) ? 0 : currentTestiIdx + 1;
  updateTestimonial(currentTestiIdx);
}

function openProgramDetails(title, grade, desc) {
  document.getElementById('classDetailTitle').innerHTML = '<i class="fa-solid fa-book-open"></i> ' + title;
  document.getElementById('classDetailContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-1" style="color:#111827;">${title}</h4>
      <p class="text-muted mb-3" style="font-weight:600;">Level: ${grade}</p>
      <p style="font-size:1.02rem; line-height:1.7; color:#374151;">${desc}</p>
      <div class="p-3 bg-light rounded mt-3">
        <strong>Curriculum:</strong> English Medium &amp; National English Version<br>
        <strong>Session:</strong> 2026-2027 Admission Ongoing
      </div>
    </div>
  `;
  openModal('classDetailModal');
}

function openAboutModal() {
  document.getElementById('classDetailTitle').innerHTML = '<i class="fa-solid fa-school"></i> About Sunrise International School';
  document.getElementById('classDetailContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-2" style="color:#111827;">Sunrise International School</h4>
      <p class="text-muted mb-3">123 School Road, Dhanmondi, Dhaka | Discipline • Knowledge • Better Future</p>
      <p style="font-size:1.02rem; line-height:1.7; color:#374151;">
        Sunrise International School is dedicated to fostering global standards in academic achievement, critical inquiry, moral values and holistic personal development. We provide state-of-the-art multimedia classrooms, international standard science and robotics labs, and comprehensive sports infrastructure.
      </p>
    </div>
  `;
  openModal('classDetailModal');
}

function openNoticeModal(title, date, desc) {
  document.getElementById('modalNoticeTitle').textContent = title;
  document.getElementById('modalNoticeCategory').textContent = 'Official Academic Notice';
  document.getElementById('modalNoticeMeta').textContent = `Date: ${date} 2026 | Ref: SIS/ADM/2026-081`;
  document.getElementById('modalNoticeContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-3" style="color:#111827;">${title}</h4>
      <p style="font-size:1.02rem; line-height:1.75; color:#374151;">${desc}</p>
      <div class="p-3 bg-light rounded border mt-3">
        <strong>Contact:</strong> Academic Affairs Office, Sunrise International School<br>
        <strong>Email:</strong> info@sunriseschool.edu.bd | <strong>Phone:</strong> 01712-345678
      </div>
    </div>
  `;
  openModal('noticeModal');
}
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
