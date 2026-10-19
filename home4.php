<?php
// home4.php - Homepage 4: Rivermount School (100% Full to Full Exact Replica of Uploaded Design)
$currentPage = 'home4';
$siteTitle = "Rivermount School | Learn, Grow, Lead";
require_once __DIR__ . '/includes/header.php';
?>

<div class="r4-body-wrap">

  <!-- ==================== 1. RIVERMOUNT MINIMAL NAVBAR ==================== -->
  <nav class="r4-header">
    <div class="container r4-nav-container">
      
      <!-- Logo -->
      <a href="home4.php" class="r4-brand">
        <svg class="r4-brand-logo-svg" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 10C10 8 16 10 20 12C24 10 30 8 36 10V30C30 28 24 30 20 32C16 30 10 28 4 30V10Z" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M20 12V32" stroke="#000000" stroke-width="2.5" stroke-linecap="round"/>
          <path d="M8 15C12 13.5 16 15 18 16" stroke="#000000" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M22 16C24 15 28 13.5 32 15" stroke="#000000" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
        <div class="r4-brand-text">
          <h2>Rivermount School</h2>
          <p>Knowledge Builds Character</p>
        </div>
      </a>

      <!-- Center Links -->
      <ul class="r4-nav-menu">
        <li><a href="home4.php" class="r4-nav-link active">Home</a></li>
        <li><a href="#about" class="r4-nav-link">About</a></li>
        <li><a href="#academics" class="r4-nav-link">Academics</a></li>
        <li><a href="#admission" class="r4-nav-link" onclick="openModal('admissionModal')">Admission</a></li>
        <li><a href="#notices" class="r4-nav-link">Notice</a></li>
        <li><a href="#gallery" class="r4-nav-link">Gallery</a></li>
        <li><a href="#contact" class="r4-nav-link">Contact</a></li>
      </ul>

      <!-- Right Actions -->
      <div class="r4-header-actions">
        <div class="lang-switch-pill lang-switch-r4" role="group" aria-label="Language Selector">
          <button type="button" class="lang-btn" data-lang="en" onclick="setLanguage('en')">ENG</button>
          <span class="lang-divider">/</span>
          <button type="button" class="lang-btn" data-lang="bn" onclick="setLanguage('bn')">BAN</button>
        </div>
        <button class="r4-search-icon-btn" onclick="alert('Search Rivermount School website...')">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <button class="r4-btn-login" onclick="openModal('portalModal')">
          <i class="fa-solid fa-user"></i> Student Login
        </button>
      </div>

    </div>
  </nav>

  <!-- ==================== 2. HERO SECTION ==================== -->
  <section class="r4-hero-section">
    <div class="container">
      <div class="r4-hero-grid">
        
        <!-- Left Column -->
        <div class="r4-hero-left">
          <div class="r4-hero-sub">WELCOME TO RIVERMOUNT SCHOOL</div>
          
          <h1 class="r4-hero-title">
            <span>Learn</span>
            <span>Grow</span>
            <span>Lead</span>
          </h1>

          <p class="r4-hero-text">
            We prepare students for a brighter tomorrow with quality education, strong values and a supportive learning environment.
          </p>

          <div class="r4-hero-cta-group">
            <a href="#about" class="r4-btn-pill">
              Explore Our School &rarr;
            </a>
            <button class="r4-btn-video" onclick="openModal('videoModal')">
              <i class="fa-solid fa-circle-play fa-lg"></i> Watch Video
            </button>
          </div>

          <!-- Slider Dashes -->
          <div class="r4-slider-dashes">
            <span class="r4-dash active"></span>
            <span class="r4-dash"></span>
            <span class="r4-dash"></span>
          </div>
        </div>

        <!-- Right Column -->
        <div class="r4-hero-right">
          <div class="r4-hero-photo-box">
            <img src="assets/images/r4_hero.jpg" alt="Rivermount School Students" class="r4-hero-img">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 3. 6 FEATURES STRIP ==================== -->
  <div class="r4-features-strip">
    <div class="container">
      <div class="r4-features-grid">
        
        <div class="r4-feature-box">
          <i class="fa-solid fa-graduation-cap r4-feat-icon"></i>
          <span class="r4-feat-label">Quality<br>Education</span>
        </div>

        <div class="r4-feature-box">
          <i class="fa-solid fa-users r4-feat-icon"></i>
          <span class="r4-feat-label">Experienced<br>Teachers</span>
        </div>

        <div class="r4-feature-box">
          <i class="fa-solid fa-book-open r4-feat-icon"></i>
          <span class="r4-feat-label">Modern<br>Curriculum</span>
        </div>

        <div class="r4-feature-box">
          <i class="fa-solid fa-shield-halved r4-feat-icon"></i>
          <span class="r4-feat-label">Safe<br>Environment</span>
        </div>

        <div class="r4-feature-box">
          <i class="fa-solid fa-lightbulb r4-feat-icon"></i>
          <span class="r4-feat-label">Extracurricular<br>Activities</span>
        </div>

        <div class="r4-feature-box">
          <i class="fa-solid fa-chart-column r4-feat-icon"></i>
          <span class="r4-feat-label">Bright<br>Future</span>
        </div>

      </div>
    </div>
  </div>

  <!-- ==================== 4. ABOUT OUR SCHOOL ==================== -->
  <section class="r4-about-section" id="about">
    <div class="container">
      <div class="r4-about-grid">
        
        <!-- Left Content -->
        <div class="r4-about-content">
          <div class="r4-section-sub">ABOUT OUR SCHOOL</div>
          <h2 class="r4-about-title">A Place Where Education Meets Values</h2>
          <p class="r4-about-desc">
            Rivermount School is committed to providing a high-quality education that nurtures academic excellence, creativity and strong moral values. We believe in holistic development and preparing students to be responsible, confident and compassionate individuals.
          </p>
          <a href="#academics" class="r4-btn-pill">
            Learn More About Us &rarr;
          </a>
        </div>

        <!-- Right Photo -->
        <div class="r4-about-visual">
          <div class="r4-about-img-frame">
            <img src="assets/images/r4_building_exact.jpg" alt="Rivermount School Campus Building" class="r4-about-img">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 5. STATS STRIP ==================== -->
  <div class="r4-stats-section">
    <div class="container">
      <div class="r4-stats-grid">
        
        <div class="r4-stat-item">
          <i class="fa-solid fa-users"></i>
          <div class="r4-stat-info">
            <strong>1,250+</strong>
            <span>Students</span>
          </div>
        </div>

        <div class="r4-stat-item">
          <i class="fa-solid fa-user-tie"></i>
          <div class="r4-stat-info">
            <strong>75+</strong>
            <span>Teachers &amp; Staff</span>
          </div>
        </div>

        <div class="r4-stat-item">
          <i class="fa-solid fa-trophy"></i>
          <div class="r4-stat-info">
            <strong>98%</strong>
            <span>Pass Rate</span>
          </div>
        </div>

        <div class="r4-stat-item">
          <i class="fa-solid fa-star"></i>
          <div class="r4-stat-info">
            <strong>15+</strong>
            <span>Years of Excellence</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ==================== 6. ACADEMIC PROGRAMS ==================== -->
  <section class="r4-programs-section" id="academics">
    <div class="container">
      
      <div class="r4-section-header-split">
        <div>
          <div class="r4-section-sub">OUR ACADEMIC PROGRAMS</div>
          <h2 class="r4-sec-headline">Programs For Every Stage</h2>
        </div>
        <div>
          <p class="r4-sec-lead">
            We offer a structured and enriching curriculum from primary to higher secondary, designed to develop knowledge, skills and character.
          </p>
          <div class="r4-arrow-nav">
            <button class="r4-arrow-btn" onclick="alert('Previous slide')">&larr;</button>
            <button class="r4-arrow-btn" onclick="alert('Next slide')">&rarr;</button>
          </div>
        </div>
      </div>

      <div class="r4-programs-grid">
        
        <!-- Program 1: Primary Section -->
        <div class="r4-program-card">
          <div class="r4-prog-thumb">
            <img src="assets/images/r4_primary_exact.jpg" alt="Primary Section">
          </div>
          <div class="r4-prog-body">
            <h3>Primary Section</h3>
            <span class="r4-prog-class">Class 1 &ndash; 5</span>
            <p>Building strong foundations for lifelong learning.</p>
            <div class="r4-prog-footer">
              <a href="javascript:void(0)" class="r4-circle-link" onclick="openClassDetail('Primary Section (Class 1 - 5)')">&rarr;</a>
            </div>
          </div>
        </div>

        <!-- Program 2: Secondary Section -->
        <div class="r4-program-card">
          <div class="r4-prog-thumb">
            <img src="assets/images/r4_secondary_exact.jpg" alt="Secondary Section">
          </div>
          <div class="r4-prog-body">
            <h3>Secondary Section</h3>
            <span class="r4-prog-class">Class 6 &ndash; 10</span>
            <p>Developing skills, confidence and creativity.</p>
            <div class="r4-prog-footer">
              <a href="javascript:void(0)" class="r4-circle-link" onclick="openClassDetail('Secondary Section (Class 6 - 10)')">&rarr;</a>
            </div>
          </div>
        </div>

        <!-- Program 3: Higher Secondary -->
        <div class="r4-program-card">
          <div class="r4-prog-thumb">
            <img src="assets/images/r4_higher_exact.jpg" alt="Higher Secondary">
          </div>
          <div class="r4-prog-body">
            <h3>Higher Secondary</h3>
            <span class="r4-prog-class">Class 11 &ndash; 12</span>
            <p>Preparing for higher education and future opportunities.</p>
            <div class="r4-prog-footer">
              <a href="javascript:void(0)" class="r4-circle-link" onclick="openClassDetail('Higher Secondary (Class 11 - 12)')">&rarr;</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== 7. OUR FACILITIES ==================== -->
  <section class="r4-facilities-section">
    <div class="container">
      <div class="r4-facilities-layout">
        
        <!-- Left Title -->
        <div>
          <div class="r4-section-sub">OUR FACILITIES</div>
          <h2 class="r4-sec-headline">A Modern &amp; Safe Learning Environment</h2>
        </div>

        <!-- Right 5 Tiles -->
        <div class="r4-facilities-grid">
          
          <div class="r4-fac-card">
            <img src="assets/images/r4_fac_classroom.jpg" alt="Modern Classrooms">
            <div class="r4-fac-label"><i class="fa-solid fa-chalkboard"></i> Modern Classrooms</div>
          </div>

          <div class="r4-fac-card">
            <img src="assets/images/r4_fac_lab.jpg" alt="Science Laboratory">
            <div class="r4-fac-label"><i class="fa-solid fa-flask"></i> Science Laboratory</div>
          </div>

          <div class="r4-fac-card">
            <img src="assets/images/r4_fac_library.jpg" alt="Library">
            <div class="r4-fac-label"><i class="fa-solid fa-book"></i> Library</div>
          </div>

          <div class="r4-fac-card">
            <img src="assets/images/r4_fac_sports.jpg" alt="Sports Facilities">
            <div class="r4-fac-label"><i class="fa-solid fa-futbol"></i> Sports Facilities</div>
          </div>

          <div class="r4-fac-card">
            <img src="assets/images/r4_fac_campus.jpg" alt="Safe & Secure Campus">
            <div class="r4-fac-label"><i class="fa-solid fa-shield-halved"></i> Safe &amp; Secure Campus</div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 8. LATEST NOTICES & UPCOMING EVENTS ==================== -->
  <section class="r4-notices-events-section" id="notices">
    <div class="container">
      <div class="r4-ne-grid">
        
        <!-- Column 1: Latest Notices -->
        <div>
          <div class="r4-ne-header">
            <span class="r4-ne-title">LATEST NOTICES</span>
            <a href="javascript:void(0)" class="r4-ne-viewall" onclick="alert('Viewing all notices...')">View All &rarr;</a>
          </div>

          <div class="r4-ne-list">
            
            <a href="javascript:void(0)" class="r4-ne-item" onclick="openNoticeModal('Annual Exam 2026 – Routine Published', '20 Oct 2026', 'Examination Office')">
              <div class="r4-ne-date">
                <span class="r4-ne-date-num">20</span>
                <span class="r4-ne-date-mon">Oct</span>
              </div>
              <div class="r4-ne-content">
                <div class="r4-ne-item-title">Annual Exam 2026 &ndash; Routine Published</div>
                <p class="r4-ne-item-sub">The routine for the annual examination has been published.</p>
              </div>
              <i class="fa-solid fa-chevron-right r4-ne-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r4-ne-item" onclick="openNoticeModal('Parent-Teacher Meeting', '15 Oct 2026', 'Academic Council')">
              <div class="r4-ne-date">
                <span class="r4-ne-date-num">15</span>
                <span class="r4-ne-date-mon">Oct</span>
              </div>
              <div class="r4-ne-content">
                <div class="r4-ne-item-title">Parent-Teacher Meeting</div>
                <p class="r4-ne-item-sub">All parents are requested to attend the meeting.</p>
              </div>
              <i class="fa-solid fa-chevron-right r4-ne-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r4-ne-item" onclick="openNoticeModal('Winter Vacation Notice', '10 Oct 2026', 'Principal Office')">
              <div class="r4-ne-date">
                <span class="r4-ne-date-num">10</span>
                <span class="r4-ne-date-mon">Oct</span>
              </div>
              <div class="r4-ne-content">
                <div class="r4-ne-item-title">Winter Vacation Notice</div>
                <p class="r4-ne-item-sub">The school will remain closed from 20 Dec &ndash; 5 Jan.</p>
              </div>
              <i class="fa-solid fa-chevron-right r4-ne-arrow"></i>
            </a>

          </div>
        </div>

        <!-- Column 2: Upcoming Events -->
        <div>
          <div class="r4-ne-header">
            <span class="r4-ne-title">UPCOMING EVENTS</span>
            <a href="javascript:void(0)" class="r4-ne-viewall" onclick="alert('Viewing all events...')">View All &rarr;</a>
          </div>

          <div class="r4-ne-list">
            
            <a href="javascript:void(0)" class="r4-ne-item" onclick="openNoticeModal('Science Fair 2026', '25 Oct 2026', 'Science Club')">
              <div class="r4-ne-date">
                <span class="r4-ne-date-num">25</span>
                <span class="r4-ne-date-mon">Oct</span>
              </div>
              <div class="r4-ne-content">
                <div class="r4-ne-item-title">Science Fair 2026</div>
                <p class="r4-ne-item-sub">10:00 AM &ndash; 2:00 PM</p>
              </div>
              <i class="fa-solid fa-chevron-right r4-ne-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r4-ne-item" onclick="openNoticeModal('Inter-Class Sports Championship', '05 Nov 2026', 'Sports Club')">
              <div class="r4-ne-date">
                <span class="r4-ne-date-num">05</span>
                <span class="r4-ne-date-mon">Nov</span>
              </div>
              <div class="r4-ne-content">
                <div class="r4-ne-item-title">Inter-Class Sports</div>
                <p class="r4-ne-item-sub">9:00 AM &ndash; 4:00 PM</p>
              </div>
              <i class="fa-solid fa-chevron-right r4-ne-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r4-ne-item" onclick="openNoticeModal('Victory Day Celebration Gala', '16 Dec 2026', 'Cultural Committee')">
              <div class="r4-ne-date">
                <span class="r4-ne-date-num">16</span>
                <span class="r4-ne-date-mon">Dec</span>
              </div>
              <div class="r4-ne-content">
                <div class="r4-ne-item-title">Victory Day Celebration</div>
                <p class="r4-ne-item-sub">10:00 AM &ndash; 1:00 PM</p>
              </div>
              <i class="fa-solid fa-chevron-right r4-ne-arrow"></i>
            </a>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 9. OUR GALLERY ==================== -->
  <section class="r4-gallery-section" id="gallery">
    <div class="container">
      
      <div class="r4-ne-header mb-4">
        <span class="r4-ne-title">OUR GALLERY</span>
        <a href="#gallery" class="r4-ne-viewall" onclick="alert('Viewing full photo gallery...')">View All Photos &rarr;</a>
      </div>

      <div class="r4-gallery-grid">
        <div class="r4-gallery-thumb">
          <img src="assets/images/r4_gal_outdoor.jpg" alt="Students in Campus">
        </div>
        <div class="r4-gallery-thumb">
          <img src="assets/images/r4_gal_library.jpg" alt="Classroom Discussion">
        </div>
        <div class="r4-gallery-thumb">
          <img src="assets/images/r4_gal_science.jpg" alt="Science Experiment">
        </div>
        <div class="r4-gallery-thumb">
          <img src="assets/images/r4_gal_sports.jpg" alt="Sports Match">
        </div>
        <div class="r4-gallery-thumb">
          <img src="assets/images/r4_gal_dance.jpg" alt="Cultural Dance Program">
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 10. TESTIMONIALS ==================== -->
  <section class="r4-testimonial-section">
    <div class="container">
      
      <div class="r4-ne-header mb-4">
        <span class="r4-ne-title">WHAT PARENTS SAY</span>
        <div class="r4-arrow-nav">
          <button class="r4-arrow-btn" onclick="alert('Previous testimonial')">&larr;</button>
          <button class="r4-arrow-btn" onclick="alert('Next testimonial')">&rarr;</button>
        </div>
      </div>

      <div class="r4-testimonial-card">
        <img src="assets/images/r4_parent_exact.jpg" alt="Parent Avatar" class="r4-parent-avatar">
        <div>
          <div class="r4-testi-quote-icon">&ldquo;</div>
          <p class="r4-testi-text">
            Rivermount School has provided an excellent learning environment for my child. The teachers are supportive and the school focuses on both academics and character building.
          </p>
          <div class="r4-testi-author">
            <strong>Md. Rahman</strong>
            <span>Parent</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 11. ADMISSION CTA BANNER ==================== -->
  <section class="r4-cta-section" id="admission">
    <div class="container">
      <div class="r4-cta-card">
        
        <div class="r4-cta-left">
          <img src="assets/images/r4_cta_girl_exact.jpg" alt="Prospective Student" class="r4-cta-avatar">
          <div class="r4-cta-text">
            <h3>Admission Now Open</h3>
            <p>Give your child the opportunity to learn, grow and build a brighter future.</p>
          </div>
        </div>

        <div class="r4-cta-buttons">
          <button class="r4-btn-pill" onclick="openModal('admissionModal')">
            Apply for Admission &rarr;
          </button>
          <button class="r4-btn-outline" onclick="openClassDetail('Rivermount Admission Guidelines')">
            Admission Details
          </button>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 12. MINIMAL CLEAN FOOTER ==================== -->
  <footer class="r4-footer" id="contact">
    <div class="container">
      
      <div class="r4-footer-grid">
        
        <!-- Column 1: Brand & Social -->
        <div class="r4-footer-col">
          <div class="r4-brand mb-2">
            <svg class="r4-brand-logo-svg" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 10C10 8 16 10 20 12C24 10 30 8 36 10V30C30 28 24 30 20 32C16 30 10 28 4 30V10Z" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20 12V32" stroke="#000000" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
            <div class="r4-brand-text">
              <h2>Rivermount School</h2>
              <p>Knowledge Builds Character</p>
            </div>
          </div>
          <p class="r4-footer-desc">
            Committed to providing quality education, moral values and a brighter future for every child.
          </p>
          <div class="r4-social-links">
            <a href="#" class="r4-social-link"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="r4-social-link"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" class="r4-social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="r4-social-link"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="r4-footer-col">
          <h4>Quick Links</h4>
          <ul class="r4-footer-links">
            <li><a href="home4.php">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#academics">Academics</a></li>
            <li><a href="#admission" onclick="openModal('admissionModal')">Admission</a></li>
            <li><a href="#notices">Notice</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <!-- Column 3: Contact Us -->
        <div class="r4-footer-col">
          <h4>Contact Us</h4>
          <ul class="r4-contact-list">
            <li><i class="fa-solid fa-location-dot"></i> <span>123 School Road, Dhanmondi, Dhaka</span></li>
            <li><i class="fa-solid fa-phone"></i> <span>01712-345678</span></li>
            <li><i class="fa-solid fa-envelope"></i> <span>info@rivermountschool.edu.bd</span></li>
            <li><i class="fa-solid fa-clock"></i> <span>Sun &ndash; Thu: 8:00 AM &ndash; 4:00 PM<br>Friday: 8:00 AM &ndash; 1:00 PM</span></li>
          </ul>
        </div>

        <!-- Column 4: Newsletter -->
        <div class="r4-footer-col">
          <h4>Newsletter</h4>
          <p class="r4-footer-desc mb-2">Subscribe to get the latest news and updates.</p>
          <form class="r4-newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Rivermount newsletter!');">
            <input type="email" placeholder="Enter your email address" class="r4-newsletter-input" required>
            <button type="submit" class="r4-newsletter-btn"><i class="fa-solid fa-paper-plane"></i></button>
          </form>
        </div>

      </div>

      <!-- Bottom Copyright Bar -->
      <div class="r4-footer-bottom">
        <div>&copy; <?php echo date("Y"); ?> Rivermount School. All Rights Reserved.</div>
        <div class="r4-bottom-links">
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

<script>
function openNoticeModal(title, date, dept) {
  document.getElementById('modalNoticeTitle').textContent = title;
  document.getElementById('modalNoticeCategory').textContent = dept || 'Official Notice';
  document.getElementById('modalNoticeMeta').textContent = `Published: ${date} | Ref: RMS/2026/104`;
  document.getElementById('modalNoticeContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-3 text-dark">${title}</h4>
      <p class="text-secondary" style="line-height:1.7;">
        This is to notify all students, respected parents, and faculty members of Rivermount School regarding ${title}. Please follow the necessary schedules and guidelines issued by the academic council.
      </p>
      <div class="p-3 bg-light rounded border mt-3 small text-muted">
        <strong>Contact Office:</strong> Rivermount School Administration, 123 School Road, Dhanmondi, Dhaka.<br>
        <strong>Phone:</strong> +880 1712-345678 | <strong>Email:</strong> info@rivermountschool.edu.bd
      </div>
    </div>
  `;
  openModal('noticeModal');
}

function openClassDetail(title) {
  document.getElementById('classDetailTitle').innerHTML = '<i class="fa-solid fa-book-open text-dark"></i> ' + title;
  document.getElementById('classDetailContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-2 text-dark">${title}</h4>
      <p class="text-muted mb-3">Rivermount School offers a structured, world-class curriculum nurturing critical thinking, ethical integrity, and academic excellence.</p>
      
      <div class="row g-2 mb-3">
        <div class="col-6">
          <div class="p-2 bg-light rounded border">
            <small class="text-muted d-block">Shift Available</small>
            <strong>Morning / Day Shift</strong>
          </div>
        </div>
        <div class="col-6">
          <div class="p-2 bg-light rounded border">
            <small class="text-muted d-block">Curriculum</small>
            <strong>English Medium &amp; Version</strong>
          </div>
        </div>
      </div>

      <h5 class="mb-2">Key Highlights:</h5>
      <ul class="program-highlights">
        <li><i class="fa-solid fa-check text-dark"></i> Multimedia smart interactive classrooms.</li>
        <li><i class="fa-solid fa-check text-dark"></i> Comprehensive science labs and junior coding studio.</li>
        <li><i class="fa-solid fa-check text-dark"></i> Safe AC bus transport and biometric parent SMS alert.</li>
        <li><i class="fa-solid fa-check text-dark"></i> Olympiad coaching, debate club, and regular sports.</li>
      </ul>
    </div>
  `;
  openModal('classDetailModal');
}
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
