<?php
// home5.php - Homepage 5: Bright Future School (100% Full to Full Exact Replica of Uploaded Design)
$currentPage = 'home5';
$siteTitle = "Bright Future School | Learn Today, Build Tomorrow";
require_once __DIR__ . '/includes/header.php';
?>

<div class="r5-body-wrap">

  <!-- ==================== 1. BRIGHT FUTURE NAVBAR ==================== -->
  <nav class="r5-header">
    <div class="container r5-nav-container">
      
      <!-- Logo -->
      <a href="home5.php" class="r5-brand">
        <!-- SVG Book with Rising Sun Rays Emblem -->
        <svg class="r5-brand-logo-svg" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Rising Sun Rays -->
          <path d="M22 4V9" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
          <path d="M14 7L16.5 11" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
          <path d="M30 7L27.5 11" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
          <path d="M8 13L12.5 15.5" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
          <path d="M36 13L31.5 15.5" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
          <!-- Open Book Pages -->
          <path d="M6 19C12 17 18 19 22 21C26 19 32 17 38 19V36C32 34 26 36 22 38C18 36 12 34 6 36V19Z" stroke="#000000" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22 21V38" stroke="#000000" stroke-width="2.4" stroke-linecap="round"/>
          <!-- Page detail lines -->
          <path d="M10 24C14 22.8 17 24 19 25" stroke="#000000" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M25 25C27 24 30 22.8 34 24" stroke="#000000" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
        <div class="r5-brand-text">
          <h2>Bright Future School</h2>
          <p>Learn Today, Build Tomorrow.</p>
        </div>
      </a>

      <!-- Center Links -->
      <ul class="r5-nav-menu">
        <li><a href="home5.php" class="r5-nav-link active">Home</a></li>
        <li><a href="#about" class="r5-nav-link">About</a></li>
        <li><a href="#academics" class="r5-nav-link">Academics</a></li>
        <li><a href="#admission" class="r5-nav-link" onclick="openModal('admissionModal')">Admission</a></li>
        <li><a href="#notices" class="r5-nav-link">Notice</a></li>
        <li><a href="#gallery" class="r5-nav-link">Gallery</a></li>
        <li><a href="#contact" class="r5-nav-link">Contact</a></li>
      </ul>

      <!-- Right Actions -->
      <div class="r5-header-actions">
        <button class="r5-search-icon-btn" onclick="alert('Search Bright Future School website...')">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <button class="r5-btn-login" onclick="openModal('portalModal')">
          <i class="fa-solid fa-user"></i> Student Login
        </button>
      </div>

    </div>
  </nav>

  <!-- ==================== 2. HERO SECTION ==================== -->
  <section class="r5-hero-section">
    <div class="container">
      <div class="r5-hero-grid">
        
        <!-- Left Content -->
        <div class="r5-hero-left">
          <div class="r5-hero-sub">A BETTER EDUCATION FOR A BRIGHTER TOMORROW</div>
          <h1 class="r5-hero-title">
            Nurturing<br>
            Bright Minds<br>
            For a Better Future
          </h1>
          <p class="r5-hero-desc">
            We provide quality education, moral values and a safe environment for every child to grow, learn and succeed.
          </p>
          <div class="r5-hero-actions">
            <a href="#admission" class="r5-btn-primary" onclick="openModal('admissionModal')">
              Apply for Admission &rarr;
            </a>
            <a href="#about" class="r5-btn-outline">
              Learn More
            </a>
          </div>
        </div>

        <!-- Right Photo -->
        <div class="r5-hero-visual">
          <div class="r5-hero-img-box">
            <img src="assets/images/r5_hero_exact.jpg" alt="Bright Future School Students" class="r5-hero-img">
          </div>
        </div>

      </div>

      <!-- ==================== 3. FLOATING STATS BAR ==================== -->
      <div class="r5-stats-container">
        <div class="r5-stats-card">
          
          <div class="r5-stat-item">
            <div class="r5-stat-icon"><i class="fa-solid fa-users"></i></div>
            <div class="r5-stat-text">
              <strong>1,250+</strong>
              <span>Students</span>
            </div>
          </div>

          <div class="r5-stat-item">
            <div class="r5-stat-icon"><i class="fa-solid fa-user-tie"></i></div>
            <div class="r5-stat-text">
              <strong>75+</strong>
              <span>Teachers &amp; Staff</span>
            </div>
          </div>

          <div class="r5-stat-item">
            <div class="r5-stat-icon"><i class="fa-solid fa-graduation-cap"></i></div>
            <div class="r5-stat-text">
              <strong>15+</strong>
              <span>Years of Excellence</span>
            </div>
          </div>

          <div class="r5-stat-item">
            <div class="r5-stat-icon"><i class="fa-solid fa-trophy"></i></div>
            <div class="r5-stat-text">
              <strong>98%</strong>
              <span>Pass Rate</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 4. ABOUT OUR SCHOOL (3 Columns) ==================== -->
  <section class="r5-about-section" id="about">
    <div class="container">
      <div class="r5-about-grid">
        
        <!-- Column 1: Text Content -->
        <div class="r5-about-left">
          <div class="r5-sec-sub">ABOUT OUR SCHOOL</div>
          <h2 class="r5-about-title">Building Character Along With Education</h2>
          <p class="r5-about-desc">
            Bright Future School is committed to providing a high-quality education that develops confident, responsible and compassionate individuals. We focus on academic excellence, moral values and co-curricular activities to ensure the holistic development of every student.
          </p>
          <a href="#academics" class="r5-btn-primary">
            Learn More &rarr;
          </a>
        </div>

        <!-- Column 2: Center School Photo -->
        <div class="r5-about-visual">
          <div class="r5-about-img-frame">
            <img src="assets/images/r5_building_exact.jpg" alt="Bright Future School Modern Campus" class="r5-about-img">
          </div>
        </div>

        <!-- Column 3: 3 Feature Cards -->
        <div class="r5-about-features">
          
          <div class="r5-feat-card">
            <div class="r5-feat-icon-box"><i class="fa-solid fa-book-open"></i></div>
            <div class="r5-feat-info">
              <h4>Quality Education</h4>
              <p>Modern curriculum and skilled teachers</p>
            </div>
          </div>

          <div class="r5-feat-card">
            <div class="r5-feat-icon-box"><i class="fa-solid fa-users"></i></div>
            <div class="r5-feat-info">
              <h4>Safe Environment</h4>
              <p>A secure and supportive campus</p>
            </div>
          </div>

          <div class="r5-feat-card">
            <div class="r5-feat-icon-box"><i class="fa-solid fa-bullseye"></i></div>
            <div class="r5-feat-info">
              <h4>Holistic Development</h4>
              <p>Academic, moral and co-curricular growth</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 5. OUR ACADEMICS ==================== -->
  <section class="r5-academics-section" id="academics">
    <div class="container">
      
      <div class="r5-acad-header">
        <div class="r5-sec-sub">OUR ACADEMICS</div>
        <h2 class="r5-about-title" style="margin-bottom: 0;">Programs For Every Stage</h2>
      </div>

      <div class="r5-acad-layout">
        
        <!-- Left 4 Stage Cards Grid -->
        <div class="r5-acad-cards-grid">
          
          <!-- Stage 1: Primary Section -->
          <div class="r5-acad-card" onclick="openClassDetail('Primary Section (Class 1 - 5)')">
            <div class="r5-acad-icon"><i class="fa-solid fa-children"></i></div>
            <h4>Primary Section</h4>
            <span class="r5-acad-class">Class 1 &ndash; 5</span>
            <p>Building strong foundations</p>
          </div>

          <!-- Stage 2: Secondary Section -->
          <div class="r5-acad-card" onclick="openClassDetail('Secondary Section (Class 6 - 10)')">
            <div class="r5-acad-icon"><i class="fa-solid fa-user-graduate"></i></div>
            <h4>Secondary Section</h4>
            <span class="r5-acad-class">Class 6 &ndash; 10</span>
            <p>Advanced learning and skill development</p>
          </div>

          <!-- Stage 3: Higher Secondary -->
          <div class="r5-acad-card" onclick="openClassDetail('Higher Secondary (Class 11 - 12)')">
            <div class="r5-acad-icon"><i class="fa-solid fa-graduation-cap"></i></div>
            <h4>Higher Secondary</h4>
            <span class="r5-acad-class">Class 11 &ndash; 12</span>
            <p>Preparing for future opportunities</p>
          </div>

          <!-- Stage 4: Co-Curricular -->
          <div class="r5-acad-card" onclick="openClassDetail('Co-Curricular Clubs & Activities')">
            <div class="r5-acad-icon"><i class="fa-solid fa-palette"></i></div>
            <h4>Co-Curricular</h4>
            <span class="r5-acad-class">Sports, Arts, Culture and Clubs</span>
            <p>Fostering leadership and teamwork</p>
          </div>

        </div>

        <!-- Right Large Classroom Photo -->
        <div class="r5-acad-visual">
          <img src="assets/images/r5_academics_girl_exact.jpg" alt="Students Learning in Classroom" class="r5-acad-img">
        </div>

      </div>

    </div>
  </section>

  <!-- ==================== 6. NOTICES, EVENTS & ADMISSION TRIPLE SECTION ==================== -->
  <section class="r5-triple-section" id="notices">
    <div class="container">
      <div class="r5-triple-grid">
        
        <!-- Column 1: Latest Notices -->
        <div class="r5-notices-col">
          <div class="r5-column-header">
            <span class="r5-col-title">LATEST NOTICES</span>
            <a href="javascript:void(0)" class="r5-viewall-link" onclick="alert('Viewing all notices...')">View All &rarr;</a>
          </div>

          <div class="r5-items-list">
            
            <a href="javascript:void(0)" class="r5-list-item" onclick="openNoticeModal('Annual Exam 2026 – Routine Published', '20 Oct 2026', 'Examination Cell')">
              <div class="r5-item-date">
                <span class="r5-date-num">20</span>
                <span class="r5-date-mon">Oct</span>
              </div>
              <div class="r5-item-body">
                <div class="r5-item-heading">Annual Exam 2026 &ndash; Routine Published</div>
                <p class="r5-item-subtext">The routine for the annual examination has been published.</p>
              </div>
              <i class="fa-solid fa-chevron-right r5-item-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r5-list-item" onclick="openNoticeModal('Parent-Teacher Meeting', '15 Oct 2026', 'Academic Council')">
              <div class="r5-item-date">
                <span class="r5-date-num">15</span>
                <span class="r5-date-mon">Oct</span>
              </div>
              <div class="r5-item-body">
                <div class="r5-item-heading">Parent-Teacher Meeting</div>
                <p class="r5-item-subtext">All parents are requested to attend the meeting.</p>
              </div>
              <i class="fa-solid fa-chevron-right r5-item-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r5-list-item" onclick="openNoticeModal('Winter Vacation Notice', '10 Oct 2026', 'Administration')">
              <div class="r5-item-date">
                <span class="r5-date-num">10</span>
                <span class="r5-date-mon">Oct</span>
              </div>
              <div class="r5-item-body">
                <div class="r5-item-heading">Winter Vacation Notice</div>
                <p class="r5-item-subtext">The school will remain closed from 20 Dec &ndash; 5 Jan.</p>
              </div>
              <i class="fa-solid fa-chevron-right r5-item-arrow"></i>
            </a>

          </div>
        </div>

        <!-- Column 2: Upcoming Events -->
        <div class="r5-events-col">
          <div class="r5-column-header">
            <span class="r5-col-title">UPCOMING EVENTS</span>
            <a href="javascript:void(0)" class="r5-viewall-link" onclick="alert('Viewing all events...')">View All &rarr;</a>
          </div>

          <div class="r5-items-list">
            
            <a href="javascript:void(0)" class="r5-list-item" onclick="openNoticeModal('Science Fair 2026', '25 Oct 2026', 'Science Club')">
              <div class="r5-item-date">
                <span class="r5-date-num">25</span>
                <span class="r5-date-mon">Oct</span>
              </div>
              <div class="r5-item-body">
                <div class="r5-item-heading">Science Fair 2026</div>
                <p class="r5-item-subtext">10:00 AM &ndash; 2:00 PM</p>
              </div>
              <i class="fa-solid fa-chevron-right r5-item-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r5-list-item" onclick="openNoticeModal('Inter-Class Sports Competition', '05 Nov 2026', 'Sports Department')">
              <div class="r5-item-date">
                <span class="r5-date-num">05</span>
                <span class="r5-date-mon">Nov</span>
              </div>
              <div class="r5-item-body">
                <div class="r5-item-heading">Inter-Class Sports</div>
                <p class="r5-item-subtext">9:00 AM &ndash; 4:00 PM</p>
              </div>
              <i class="fa-solid fa-chevron-right r5-item-arrow"></i>
            </a>

            <a href="javascript:void(0)" class="r5-list-item" onclick="openNoticeModal('Victory Day Celebration', '16 Dec 2026', 'Cultural Committee')">
              <div class="r5-item-date">
                <span class="r5-date-num">16</span>
                <span class="r5-date-mon">Dec</span>
              </div>
              <div class="r5-item-body">
                <div class="r5-item-heading">Victory Day Celebration</div>
                <p class="r5-item-subtext">10:00 AM &ndash; 1:00 PM</p>
              </div>
              <i class="fa-solid fa-chevron-right r5-item-arrow"></i>
            </a>

          </div>
        </div>

        <!-- Column 3: Dark 2026 Admission Promo Card -->
        <div class="r5-admission-promo-col" id="admission">
          <div class="r5-promo-card">
            
            <div class="r5-promo-content">
              <div class="r5-promo-year">2026</div>
              <h3 class="r5-promo-title">Admission<br>Now Open</h3>
              <p class="r5-promo-text">
                Give your child a brighter future with quality education.
              </p>
              <button class="r5-btn-promo-apply" onclick="openModal('admissionModal')">
                Apply Now &rarr;
              </button>
            </div>

            <div class="r5-promo-visual">
              <img src="assets/images/r5_cta_girl_exact.jpg" alt="Admission Open - Bright Future School" class="r5-promo-img">
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== 7. OUR GALLERY ==================== -->
  <section class="r5-gallery-section" id="gallery">
    <div class="container">
      
      <div class="r5-column-header mb-4">
        <span class="r5-col-title">OUR GALLERY</span>
        <a href="javascript:void(0)" class="r5-viewall-link" onclick="alert('Viewing photo gallery archive...')">View All &rarr;</a>
      </div>

      <div class="r5-gallery-grid">
        <div class="r5-gallery-item">
          <img src="assets/images/r5_gal_building.jpg" alt="School Building Exterior">
        </div>
        <div class="r5-gallery-item">
          <img src="assets/images/r5_gal_library.jpg" alt="Students Reading in Library">
        </div>
        <div class="r5-gallery-item">
          <img src="assets/images/r5_gal_computer.jpg" alt="Computer Lab Session">
        </div>
        <div class="r5-gallery-item">
          <img src="assets/images/r5_gal_sports.jpg" alt="Football Match">
        </div>
        <div class="r5-gallery-item">
          <img src="assets/images/r5_gal_dance.jpg" alt="Cultural Dance Program">
        </div>
        <div class="r5-gallery-item">
          <img src="assets/images/r5_gal_assembly.jpg" alt="Morning Assembly &amp; Hall">
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 8. TESTIMONIALS ==================== -->
  <section class="r5-testimonials-section">
    <div class="container">
      
      <div class="r5-column-header mb-3">
        <span class="r5-col-title">WHAT PARENTS SAY</span>
        <div class="r5-arrow-nav">
          <button class="r5-arrow-btn" onclick="alert('Previous review')"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="r5-arrow-btn" onclick="alert('Next review')"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <div class="r5-testimonial-card">
        <img src="assets/images/r5_parent_exact.jpg" alt="Parent Avatar" class="r5-parent-avatar">
        <div>
          <div class="r5-quote-icon">&ldquo;</div>
          <p class="r5-quote-text">
            Bright Future School has provided an excellent learning environment for my child. The teachers are supportive and the school focuses on both academics and character building.
          </p>
          <div class="r5-quote-author">
            <strong>Md. Rahman</strong>
            <span>Parent</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== 9. FOOTER ==================== -->
  <footer class="r5-footer" id="contact">
    <div class="container">
      <div class="r5-footer-grid">
        
        <!-- Col 1: Brand Info -->
        <div class="r5-footer-col">
          <a href="home5.php" class="r5-brand" style="margin-bottom: 12px;">
            <svg class="r5-brand-logo-svg" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22 4V9" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
              <path d="M14 7L16.5 11" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
              <path d="M30 7L27.5 11" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
              <path d="M8 13L12.5 15.5" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
              <path d="M36 13L31.5 15.5" stroke="#000000" stroke-width="2.2" stroke-linecap="round"/>
              <path d="M6 19C12 17 18 19 22 21C26 19 32 17 38 19V36C32 34 26 36 22 38C18 36 12 34 6 36V19Z" stroke="#000000" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M22 21V38" stroke="#000000" stroke-width="2.4" stroke-linecap="round"/>
            </svg>
            <div class="r5-brand-text">
              <h2>Bright Future School</h2>
              <p>Learn Today, Build Tomorrow.</p>
            </div>
          </a>
          <p class="r5-footer-bio">
            Committed to providing quality education, moral values and a brighter future for every child.
          </p>
          <div class="r5-social-strip">
            <a href="#" class="r5-social-circle" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="r5-social-circle" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" class="r5-social-circle" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="r5-social-circle" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div class="r5-footer-col">
          <h4>Quick Links</h4>
          <ul class="r5-footer-links">
            <li><a href="home5.php">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#academics">Academics</a></li>
            <li><a href="#admission" onclick="openModal('admissionModal')">Admission</a></li>
            <li><a href="#notices">Notice</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <!-- Col 3: Contact Us -->
        <div class="r5-footer-col">
          <h4>Contact Us</h4>
          <ul class="r5-contact-items">
            <li class="r5-contact-item">
              <i class="fa-solid fa-location-dot"></i>
              <span>House 12, Road 5, Dhanmondi, Dhaka</span>
            </li>
            <li class="r5-contact-item">
              <i class="fa-solid fa-phone"></i>
              <span>01712-345678</span>
            </li>
            <li class="r5-contact-item">
              <i class="fa-solid fa-envelope"></i>
              <span>info@brightfutureschool.edu.bd</span>
            </li>
            <li class="r5-contact-item">
              <i class="fa-solid fa-clock"></i>
              <span>Sun &ndash; Thu: 8:00 AM &ndash; 4:00 PM<br>Friday: 8:00 AM &ndash; 1:00 PM</span>
            </li>
          </ul>
        </div>

        <!-- Col 4: Newsletter -->
        <div class="r5-footer-col">
          <h4>Newsletter</h4>
          <p class="r5-newsletter-text">Subscribe to get the latest news and updates.</p>
          <form class="r5-newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Bright Future School updates!');">
            <input type="email" placeholder="Enter your email address" class="r5-newsletter-input" required>
            <button type="submit" class="r5-newsletter-btn"><i class="fa-solid fa-paper-plane"></i></button>
          </form>
        </div>

      </div>

      <!-- Bottom Copyright Bar -->
      <div class="r5-footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Bright Future School. All Rights Reserved.</p>
        <div class="r5-bottom-links">
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
  document.getElementById('modalNoticeMeta').textContent = `Published: ${date} | Ref: BFS/2026/092`;
  document.getElementById('modalNoticeContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-3 text-dark">${title}</h4>
      <p class="text-secondary" style="line-height:1.7;">
        This circular is issued for all respected parents, beloved students, and teachers of Bright Future School regarding <strong>${title}</strong>. Please follow the instructions and timeline accordingly.
      </p>
      <div class="p-3 bg-light rounded border mt-3 small text-muted">
        <strong>Administration Office:</strong> Bright Future School, House 12, Road 5, Dhanmondi, Dhaka.<br>
        <strong>Phone:</strong> 01712-345678 | <strong>Email:</strong> info@brightfutureschool.edu.bd
      </div>
    </div>
  `;
  openModal('noticeModal');
}

function openClassDetail(title) {
  document.getElementById('classDetailTitle').innerHTML = '<i class="fa-solid fa-graduation-cap text-dark"></i> ' + title;
  document.getElementById('classDetailContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-2 text-dark">${title}</h4>
      <p class="text-muted mb-3">Bright Future School delivers holistic academic excellence, character building, and creative leadership.</p>
      
      <div class="row g-2 mb-3">
        <div class="col-6">
          <div class="p-2 bg-light rounded border">
            <small class="text-muted d-block">Shift Available</small>
            <strong>Morning / Day Shift</strong>
          </div>
        </div>
        <div class="col-6">
          <div class="p-2 bg-light rounded border">
            <small class="text-muted d-block">Medium</small>
            <strong>English Medium &amp; Version</strong>
          </div>
        </div>
      </div>

      <h5 class="mb-2">Key Program Features:</h5>
      <ul class="program-highlights">
        <li><i class="fa-solid fa-check text-dark"></i> Smart multimedia classrooms and experiential learning.</li>
        <li><i class="fa-solid fa-check text-dark"></i> Dedicated computer lab, robotics club, and STEM activities.</li>
        <li><i class="fa-solid fa-check text-dark"></i> Continuous moral values and character development mentorship.</li>
        <li><i class="fa-solid fa-check text-dark"></i> Safe transport facilities with live parent SMS notifications.</li>
      </ul>
    </div>
  `;
  openModal('classDetailModal');
}
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
