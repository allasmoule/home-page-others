<?php
// index.php
$currentPage = 'home1';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==================== HERO SECTION ==================== -->
<!-- ==================== HERO SECTION ==================== -->
<section class="hero-section">
  <div class="hero-slider-wrap">
    <!-- Slide 1 -->
    <div class="hero-slide active">
      <div class="hero-bg-img" style="background-image: url('assets/images/r1_hero_exact.jpg');"></div>
      <div class="hero-overlay"></div>
      <div class="container hero-content-container">
        <div class="hero-text-col">
          <span class="hero-badge"><i class="fa-solid fa-graduation-cap"></i> Welcoming Academic Session 2026-2027</span>
          <h2 class="hero-headline">Welcome to <span class="highlight-text">XYZ School &amp; College!</span></h2>
          <p class="hero-bn-headline">জ্ঞানের আলোয় আলোকিত ভবিষ্যৎ গড়ার অঙ্গীকার</p>
          <p class="hero-subtext">
            Empowering curious minds, cultivating leadership, and shaping tomorrow's innovators in a modern learning environment.
          </p>
          <div class="hero-btn-group">
            <a href="#aboutSection" class="btn btn-primary btn-lg">
              <i class="fa-solid fa-compass"></i> Explore Campus
            </a>
            <a href="#admissionModal" onclick="openModal('admissionModal')" class="btn btn-gold btn-lg">
              <i class="fa-solid fa-pen-fancy"></i> Apply for Admission
            </a>
          </div>
        </div>

        <!-- Floating Urgent Notices Box (Right side in Hero) -->
        <div class="hero-notice-card">
          <div class="hero-notice-header">
            <div class="hn-title-wrap">
              <span class="pulse-live"></span>
              <h4>Academic Highlights</h4>
            </div>
            <a href="#noticeSection" class="hn-view-all">View All <i class="fa-solid fa-arrow-right"></i></a>
          </div>
          <ul class="hero-notice-list">
            <li>
              <a href="#noticeSection" onclick="viewNotice(1)">
                <span class="hn-date">18 Oct</span>
                <span class="hn-text">HSC Examination 2026 Form Fill-up Schedule</span>
                <i class="fa-solid fa-chevron-right hn-icon"></i>
              </a>
            </li>
            <li>
              <a href="#noticeSection" onclick="viewNotice(2)">
                <span class="hn-date">15 Oct</span>
                <span class="hn-text">Class 6-9 Annual Examination Routine Published</span>
                <i class="fa-solid fa-chevron-right hn-icon"></i>
              </a>
            </li>
            <li>
              <a href="#noticeSection" onclick="viewNotice(3)">
                <span class="hn-date">12 Oct</span>
                <span class="hn-text">Science Fair &amp; Robotics Olympiad Registration</span>
                <i class="fa-solid fa-chevron-right hn-icon"></i>
              </a>
            </li>
            <li>
              <a href="#noticeSection" onclick="viewNotice(4)">
                <span class="hn-date">10 Oct</span>
                <span class="hn-text">Admissions Circular 2026-27 (Nursery to XI)</span>
                <i class="fa-solid fa-chevron-right hn-icon"></i>
              </a>
            </li>
          </ul>
          <div class="hero-notice-footer">
            <a href="#noticeSection" class="btn-block-sm">Browse Notice Archive &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slider Controls -->
  <div class="hero-slider-nav">
    <button class="slider-arrow prev" title="Previous Slide"><i class="fa-solid fa-arrow-left"></i></button>
    <div class="slider-dots">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <button class="slider-arrow next" title="Next Slide"><i class="fa-solid fa-arrow-right"></i></button>
  </div>
</section>

<!-- ==================== KEY STATS BAR (EXACT SAMPLE MATCH) ==================== -->
<section class="stats-counter-strip">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-icon-wrap icon-dark">
          <i class="fa-solid fa-chalkboard-user"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number" data-target="63">63</h3>
          <p class="stat-label">Faculty Members</p>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon-wrap icon-blue">
          <i class="fa-solid fa-award"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number" data-target="13">13</h3>
          <p class="stat-label">Years of Excellence</p>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon-wrap icon-gold">
          <i class="fa-solid fa-percent"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number">99.8%</h3>
          <p class="stat-label">Pass Rate</p>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon-wrap icon-teal">
          <i class="fa-solid fa-trophy"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number" data-target="420">420+</h3>
          <p class="stat-label">Board Merits</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== ABOUT INSTITUTE WITH STACKED NOTICE & CALENDAR ==================== -->
<!-- (100% Exact match to User's Mockup Red Arrow 1: Notice + Academic Calendar stacked on right!) -->
<section class="about-leadership-section" id="aboutSection">
  <div class="container">
    <div class="about-two-col-grid">
      
      <!-- LEFT: About Institute -->
      <div class="about-main-card">
        <div class="section-title-tag">
          <i class="fa-solid fa-school"></i> About Institute
        </div>
        <h2 class="about-title">Nurturing Excellence, Character &amp; Innovation</h2>
        <p class="about-subtitle">এক্সওয়াইজেড স্কুল অ্যান্ড কলেজ — ঐতিহ্য ও আধুনিক শিক্ষার সমন্বয়</p>
        
        <div class="about-featured-image-wrap">
          <img src="assets/images/about_campus.jpg" alt="Aerial view of School Campus" class="about-img">
          <div class="campus-floating-badge">
            <i class="fa-solid fa-building-columns"></i> 5+ Acres Main Campus
          </div>
        </div>

        <div class="about-narrative">
          <p>
            Established in 1995 with the visionary goal of fostering intellectual enlightenment and patriotic spirit, <strong>XYZ School &amp; College</strong> has evolved into one of the country's most renowned educational bastions. We are steadfastly committed to delivering world-class education harmonized with sublime moral values, scientific inquiry, and technological readiness.
          </p>
          <p>
            Our vibrant academic ecosystem boasts state-of-the-art multimedia classrooms, modern science laboratories, an extensive computerized library, and sprawling sports grounds. We cultivate not merely academic distinction, but responsible global citizens endowed with critical thinking, ethical fortitude, and leadership vigor.
          </p>
        </div>

        <div class="about-features-grid">
          <div class="af-item">
            <i class="fa-solid fa-circle-check"></i>
            <span>Interactive Multimedia Smart Classrooms</span>
          </div>
          <div class="af-item">
            <i class="fa-solid fa-circle-check"></i>
            <span>Advanced Physics, Chemistry &amp; STEM Labs</span>
          </div>
          <div class="af-item">
            <i class="fa-solid fa-circle-check"></i>
            <span>Extensive Library with 15,000+ Books</span>
          </div>
          <div class="af-item">
            <i class="fa-solid fa-circle-check"></i>
            <span>100% CCTV Monitored Safe Campus</span>
          </div>
        </div>

        <div class="about-btn-wrap">
          <button class="btn btn-primary" onclick="alert('XYZ School & College was founded in 1995. For three decades, our graduates have excelled at top universities and institutions.')">
            <i class="fa-solid fa-book-open-reader"></i> Read More
          </button>
        </div>
      </div>

      <!-- RIGHT: STACKED NOTICE & ACADEMIC CALENDAR (AS HIGHLIGHTED IN USER SAMPLE) -->
      <div class="about-right-widgets" id="noticeSection">
        
        <!-- Widget 1: Notice Board -->
        <div class="side-widget-box notice-widget">
          <div class="widget-header">
            <h4><i class="fa-solid fa-bullhorn text-teal"></i> Notice</h4>
            <a href="javascript:void(0)" onclick="alert('Browsing all official circulars...')" class="btn-all-notice">All Notice</a>
          </div>
          <ul class="widget-notice-list">
            <li>
              <a href="javascript:void(0)" onclick="viewNotice(1)">
                <span class="wn-date">18 Oct</span>
                <span class="wn-text">HSC Examination 2026 Form Fill-up Schedule</span>
                <i class="fa-solid fa-download"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="viewNotice(2)">
                <span class="wn-date">15 Oct</span>
                <span class="wn-text">Class 6-9 Annual Examination Routine Published</span>
                <i class="fa-solid fa-download"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="viewNotice(3)">
                <span class="wn-date">12 Oct</span>
                <span class="wn-text">Science Fair &amp; Robotics Olympiad Registration</span>
                <i class="fa-solid fa-download"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" onclick="viewNotice(4)">
                <span class="wn-date">10 Oct</span>
                <span class="wn-text">Admissions Circular 2026-27 (Nursery to XI)</span>
                <i class="fa-solid fa-download"></i>
              </a>
            </li>
          </ul>
        </div>

        <!-- Widget 2: Academic Calendar -->
        <div class="side-widget-box calendar-widget" id="calendarSection">
          <div class="widget-header">
            <h4><i class="fa-solid fa-calendar-days text-gold"></i> Academic Calendar</h4>
            <span class="cal-badge-month" style="font-size:0.8rem; font-weight:700; color:#0f766e;">October 2026</span>
          </div>
          <div class="mini-calendar-wrap">
            <div class="mini-cal-weekdays">
              <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
            </div>
            <div class="mini-cal-days">
              <span class="empty"></span><span class="empty"></span><span class="empty"></span><span class="empty"></span><span>1</span><span>2</span><span>3</span>
              <span>4</span><span class="has-dot dot-green" title="Science Club">5</span><span>6</span><span>7</span><span>8</span><span class="has-dot dot-red" title="Holiday">9</span><span>10</span>
              <span>11</span><span class="has-dot dot-green">12</span><span>13</span><span>14</span><span class="today">15</span><span class="has-dot dot-red">16</span><span>17</span>
              <span>18</span><span>19</span><span class="has-dot dot-red">20</span><span>21</span><span>22</span><span>23</span><span class="has-dot dot-green">24</span>
              <span>25</span><span>26</span><span>27</span><span>28</span><span>29</span><span>30</span><span>31</span>
            </div>
            <div class="cal-mini-legend">
              <span><span class="dot-ind dot-green"></span> Campus Event</span>
              <span><span class="dot-ind dot-red"></span> Holiday</span>
              <span><span class="dot-ind dot-today"></span> Today</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ==================== MESSAGES FROM LEADERSHIP & COMMITTEE ==================== -->
<!-- (100% Exact match to User's Mockup Red Arrow 2: Leadership Messages, Committee Tree & Teachers!) -->
<section class="leadership-committee-section" id="leadershipSection">
  <div class="container">
    
    <div class="section-title-tag mb-4">
      <i class="fa-solid fa-users-gear"></i> Messages from School Leadership &amp; School Committee
    </div>

    <div class="leadership-three-col-grid">
      
      <!-- Col 1: Messages from Leadership (Principal & Chairman) -->
      <div class="lead-col-messages">
        
        <!-- Principal Card -->
        <div class="lead-msg-mini-card" id="principalMsgCard">
          <div class="lead-msg-header">
            <img src="assets/images/principal.jpg" alt="Prof. Md. Motiur Rahman Khan" class="lead-avatar-sm">
            <div>
              <span class="badge-role role-principal">Principal's Desk</span>
              <h4>PROF. MD. MOTIUR RAHMAN KHAN</h4>
              <p>Principal, XYZ School &amp; College</p>
            </div>
          </div>
          <p class="lead-msg-excerpt">
            "Welcome to XYZ School &amp; College. We strive to provide a transformative educational journey that awakens curiosity, moral integrity and leadership excellence."
          </p>
          <button class="btn-read-more-sm" onclick="openModal('principalModal')">
            Read More &rarr;
          </button>
        </div>

        <!-- Chairman Card -->
        <div class="lead-msg-mini-card mt-3" id="chairmanMsgCard">
          <div class="lead-msg-header">
            <img src="assets/images/chairman.jpg" alt="Mr. Golam Kibria" class="lead-avatar-sm">
            <div>
              <span class="badge-role role-chairman">Chairman's Desk</span>
              <h4>MR. GOLAM KIBRIA</h4>
              <p>Chairman, Governing Body</p>
            </div>
          </div>
          <p class="lead-msg-excerpt">
            "Our governing board is dedicated to maintaining state-of-the-art infrastructure, high ethical standards, and modern digital education for every child."
          </p>
          <button class="btn-read-more-sm" onclick="alert('Chairman Message: Dedicated to fostering world-class academic standards.')">
            Read More &rarr;
          </button>
        </div>

      </div>

      <!-- Col 2: School Committee Hierarchy -->
      <div class="lead-col-committee" id="committeeSection">
        <div class="comm-organo-box">
          <div class="comm-organo-title">
            <i class="fa-solid fa-sitemap"></i> SCHOOL COMMITTEE
          </div>
          
          <div class="organo-tree">
            <!-- Top Leader -->
            <div class="organo-node president-node">
              <img src="assets/images/chairman.jpg" alt="President" class="organo-avatar">
              <strong>Mr. Golam Kibria</strong>
              <small>President</small>
            </div>
            
            <div class="organo-connector"></div>
            
            <!-- Member Secretary -->
            <div class="organo-node secretary-node">
              <img src="assets/images/principal.jpg" alt="Member Secretary" class="organo-avatar">
              <strong>Prof. Motiur Rahman</strong>
              <small>Member Secretary</small>
            </div>
            
            <div class="organo-connector"></div>
            
            <!-- Members Grid -->
            <div class="organo-members-row">
              <div class="organo-member-leaf">
                <img src="assets/images/faculty_2.jpg" alt="Member">
                <small>Engr. Shamsuddin</small>
              </div>
              <div class="organo-member-leaf">
                <img src="assets/images/faculty_4.jpg" alt="Member">
                <small>Barrister Rafiqul</small>
              </div>
              <div class="organo-member-leaf">
                <img src="assets/images/faculty_1.jpg" alt="Member">
                <small>Dr. Mahbubur</small>
              </div>
              <div class="organo-member-leaf">
                <img src="assets/images/faculty_3.jpg" alt="Member">
                <small>Mrs. Nasreen</small>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Col 3: Adarsha Faculty Members (2x2 Grid) -->
      <div class="lead-col-faculty" id="facultySection">
        <div class="comm-organo-box">
          <div class="comm-organo-title">
            <i class="fa-solid fa-chalkboard-user"></i> Adarsha Faculty Members
          </div>

          <div class="faculty-2x2-grid">
            
            <div class="faculty-mini-card">
              <img src="assets/images/faculty_1.jpg" alt="Dr. Mahbubur Rahman" class="fac-avatar-sm">
              <div class="fac-name-text">Dr. Mahbubur Rahman</div>
              <div class="fac-dept-text">Head of Physics</div>
              <div class="fac-contact-icons">
                <a href="tel:+8801712345678" title="Call"><i class="fa-solid fa-phone"></i></a>
                <a href="mailto:faculty@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
              </div>
            </div>

            <div class="faculty-mini-card">
              <img src="assets/images/faculty_2.jpg" alt="Mrs. Sultana Razia" class="fac-avatar-sm">
              <div class="fac-name-text">Mrs. Sultana Razia</div>
              <div class="fac-dept-text">Head of Chemistry</div>
              <div class="fac-contact-icons">
                <a href="tel:+8801712345678" title="Call"><i class="fa-solid fa-phone"></i></a>
                <a href="mailto:faculty@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
              </div>
            </div>

            <div class="faculty-mini-card">
              <img src="assets/images/faculty_3.jpg" alt="Mr. Tanvir Ahmed" class="fac-avatar-sm">
              <div class="fac-name-text">Mr. Tanvir Ahmed</div>
              <div class="fac-dept-text">Head of ICT &amp; CS</div>
              <div class="fac-contact-icons">
                <a href="tel:+8801712345678" title="Call"><i class="fa-solid fa-phone"></i></a>
                <a href="mailto:faculty@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
              </div>
            </div>

            <div class="faculty-mini-card">
              <img src="assets/images/faculty_4.jpg" alt="Mrs. Farzana Haque" class="fac-avatar-sm">
              <div class="fac-name-text">Mrs. Farzana Haque</div>
              <div class="fac-dept-text">Head of English</div>
              <div class="fac-contact-icons">
                <a href="tel:+8801712345678" title="Call"><i class="fa-solid fa-phone"></i></a>
                <a href="mailto:faculty@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
              </div>
            </div>

          </div>

          <div style="margin-top: auto; padding-top: 10px;">
            <button class="btn btn-outline-primary btn-block btn-sm" onclick="alert('Viewing complete faculty list...')">
              All Teachers &rarr;
            </button>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== PHOTO & VIDEO GALLERY ==================== -->
<section class="gallery-section" id="gallerySection">
  <div class="container">
    <div class="section-center-head">
      <span class="sh-tag"><i class="fa-solid fa-camera-retro"></i> CAMPUS MOMENTS</span>
      <h2 class="sh-title">Photo &amp; Video Gallery</h2>
      <p class="sh-sub">Capturing vibrant academic endeavors, athletic feats, and cultural celebrations.</p>
    </div>

    <!-- Filter Buttons -->
    <div class="gallery-filter-tabs">
      <button class="g-filter-btn active" data-filter="all">All (20+)</button>
      <button class="g-filter-btn" data-filter="sports">Sports</button>
      <button class="g-filter-btn" data-filter="classroom">Classrooms</button>
      <button class="g-filter-btn" data-filter="science">Science Fair</button>
      <button class="g-filter-btn" data-filter="cultural">Cultural</button>
    </div>

    <!-- Gallery Grid with Featured Video -->
    <div class="gallery-grid-layout">
      <!-- Big Featured Video Card -->
      <div class="gallery-item-video" onclick="openModal('videoModal')">
        <div class="video-thumbnail-box">
          <img src="assets/images/hero_students.jpg" alt="Campus video tour" class="gallery-img">
          <div class="video-play-button">
            <i class="fa-solid fa-play"></i>
          </div>
          <span class="badge-video"><i class="fa-solid fa-video"></i> VIDEO TOUR</span>
          <div class="video-info-overlay">
            <h4>Annual Sports Parade &amp; March-past Ceremony</h4>
            <p>Watch full high-definition video of our annual sports inauguration &amp; student march.</p>
          </div>
        </div>
      </div>

      <!-- Photo 1: Classroom -->
      <div class="gallery-item" data-category="classroom" onclick="openLightbox('assets/images/gallery_classroom.jpg', 'Interactive Smart Multimedia Classroom Session')">
        <img src="assets/images/gallery_classroom.jpg" alt="Classroom" class="gallery-img">
        <div class="g-overlay">
          <i class="fa-solid fa-expand g-zoom-icon"></i>
          <span class="g-cat-tag">Classroom</span>
          <p class="g-caption">Interactive Smart Multimedia Classroom Session</p>
        </div>
      </div>

      <!-- Photo 2: Science Lab -->
      <div class="gallery-item" data-category="science" onclick="openLightbox('assets/images/gallery_science.jpg', 'Modern STEM &amp; Chemistry Laboratory Experiments')">
        <img src="assets/images/gallery_science.jpg" alt="Science Lab" class="gallery-img">
        <div class="g-overlay">
          <i class="fa-solid fa-expand g-zoom-icon"></i>
          <span class="g-cat-tag">Science Lab</span>
          <p class="g-caption">Modern STEM &amp; Chemistry Laboratory Experiments</p>
        </div>
      </div>

      <!-- Photo 3: Sports -->
      <div class="gallery-item" data-category="sports" onclick="openLightbox('assets/images/gallery_sports.jpg', 'Annual Athletics &amp; Track Championship')">
        <img src="assets/images/gallery_sports.jpg" alt="Sports" class="gallery-img">
        <div class="g-overlay">
          <i class="fa-solid fa-expand g-zoom-icon"></i>
          <span class="g-cat-tag">Sports</span>
          <p class="g-caption">Annual Athletics &amp; Track Championship</p>
        </div>
      </div>

      <!-- Photo 4: Cultural Fest -->
      <div class="gallery-item" data-category="cultural" onclick="openLightbox('assets/images/gallery_cultural.jpg', 'Annual Cultural Gala &amp; Drama Performance')">
        <img src="assets/images/gallery_cultural.jpg" alt="Cultural Gala" class="gallery-img">
        <div class="g-overlay">
          <i class="fa-solid fa-expand g-zoom-icon"></i>
          <span class="g-cat-tag">Cultural</span>
          <p class="g-caption">Annual Cultural Gala &amp; Drama Performance</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== MERITORIOUS STUDENTS ==================== -->
<section class="meritorious-section" id="meritSection">
  <div class="container">
    <div class="section-center-head">
      <span class="sh-tag"><i class="fa-solid fa-crown"></i> ACADEMIC EXCELLENCE &amp; HONORS</span>
      <h2 class="sh-title">Meritorious Students / মেধাবী শিক্ষার্থী</h2>
      <p class="sh-sub">Celebrating the stellar achievements of our high scorers in Board Examinations.</p>
    </div>

    <div class="merit-grid">
      <!-- Student 1 -->
      <div class="merit-card">
        <div class="merit-avatar-wrap">
          <img src="assets/images/student_1.jpg" alt="Arafat Rahman" class="merit-avatar">
          <span class="gpa-badge"><i class="fa-solid fa-star"></i> GPA 5.00</span>
        </div>
        <div class="merit-details">
          <h4 class="student-name">Arafat Rahman</h4>
          <p class="exam-group">SSC 2026 • Science Group</p>
          <span class="roll-pill">Roll: 101142 | Golden A+</span>
          <div class="merit-tagline">Excellence in Mathematics &amp; Physics</div>
        </div>
      </div>

      <!-- Student 2 -->
      <div class="merit-card">
        <div class="merit-avatar-wrap">
          <img src="assets/images/student_2.jpg" alt="Samia Afrin" class="merit-avatar">
          <span class="gpa-badge"><i class="fa-solid fa-star"></i> GPA 5.00</span>
        </div>
        <div class="merit-details">
          <h4 class="student-name">Samia Afrin</h4>
          <p class="exam-group">HSC 2026 • Science Group</p>
          <span class="roll-pill">Roll: 201488 | Golden A+</span>
          <div class="merit-tagline">Board Top 10 Merit List Holder</div>
        </div>
      </div>

      <!-- Student 3 -->
      <div class="merit-card">
        <div class="merit-avatar-wrap">
          <img src="assets/images/student_3.jpg" alt="Mahbub Kabir" class="merit-avatar">
          <span class="gpa-badge"><i class="fa-solid fa-star"></i> GPA 5.00</span>
        </div>
        <div class="merit-details">
          <h4 class="student-name">Mahbub Kabir</h4>
          <p class="exam-group">SSC 2026 • Business Studies</p>
          <span class="roll-pill">Roll: 104230 | Golden A+</span>
          <div class="merit-tagline">First in Accounting &amp; Finance</div>
        </div>
      </div>

      <!-- Student 4 -->
      <div class="merit-card">
        <div class="merit-avatar-wrap">
          <img src="assets/images/student_4.jpg" alt="Mehera Akhter" class="merit-avatar">
          <span class="gpa-badge"><i class="fa-solid fa-star"></i> GPA 5.00</span>
        </div>
        <div class="merit-details">
          <h4 class="student-name">Mehera Akhter</h4>
          <p class="exam-group">HSC 2026 • Humanities Group</p>
          <span class="roll-pill">Roll: 301056 | Golden A+</span>
          <div class="merit-tagline">National Essay Champion &amp; Debater</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== NEWS & EVENTS ==================== -->
<section class="news-events-section" id="newsSection">
  <div class="container">
    <div class="section-center-head">
      <span class="sh-tag"><i class="fa-solid fa-bullhorn"></i> LATEST CAMPUS HAPPENINGS</span>
      <h2 class="sh-title">News &amp; Events / খবর ও ইভেন্ট</h2>
      <p class="sh-sub">Stay connected with our latest institutional developments and celebrations.</p>
    </div>

    <div class="news-grid">
      <!-- News 1 -->
      <article class="news-card">
        <div class="news-img-box">
          <img src="assets/images/news_sports.jpg" alt="Annual Sports" class="news-img">
          <span class="news-category-badge">Sports</span>
          <span class="news-date-strip"><i class="fa-regular fa-calendar"></i> 18 Oct 2026</span>
        </div>
        <div class="news-body">
          <h4 class="news-title">Annual Sports Competition &amp; Grand March-Past Ceremony 2026</h4>
          <p class="news-excerpt">
            Students showcased remarkable athletic enthusiasm and discipline across 35 competitive track and field events with hundreds of proud parents cheering.
          </p>
          <a href="#newsSection" onclick="alert('Full report on Annual Sports Competition 2026 will be available in the upcoming campus newsletter.')" class="news-link">
            Read Full Story <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- News 2 -->
      <article class="news-card">
        <div class="news-img-box">
          <img src="assets/images/news_science.jpg" alt="Science Fair" class="news-img">
          <span class="news-category-badge badge-science">Science &amp; Tech</span>
          <span class="news-date-strip"><i class="fa-regular fa-calendar"></i> 15 Oct 2026</span>
        </div>
        <div class="news-body">
          <h4 class="news-title">Inter-School Science &amp; Innovation Fair: Over 60 Innovative STEM Projects</h4>
          <p class="news-excerpt">
            Our young innovators exhibited automated robotics, green energy solutions, and AI algorithms, garnering high acclaim from visiting university professors.
          </p>
          <a href="#newsSection" onclick="alert('Science Fair Awards ceremony will be held on Monday at the central auditorium.')" class="news-link">
            Read Full Story <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- News 3 -->
      <article class="news-card">
        <div class="news-img-box">
          <img src="assets/images/news_language_day.jpg" alt="Language Day" class="news-img">
          <span class="news-category-badge badge-culture">National Observance</span>
          <span class="news-date-strip"><i class="fa-regular fa-calendar"></i> 08 Oct 2026</span>
        </div>
        <div class="news-body">
          <h4 class="news-title">International Mother Language Day Observance with Solemn Tributes</h4>
          <p class="news-excerpt">
            Faculty and students laid floral wreaths at the campus Shaheed Minar followed by a solemn morning procession (Prabhat Pheri) and literary symposium.
          </p>
          <a href="#newsSection" onclick="alert('Full event photos and speeches published in Photo Gallery section.')" class="news-link">
            Read Full Story <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- News 4 -->
      <article class="news-card">
        <div class="news-img-box">
          <img src="assets/images/news_cultural.jpg" alt="Cultural Fest" class="news-img">
          <span class="news-category-badge badge-fest">Arts &amp; Culture</span>
          <span class="news-date-strip"><i class="fa-regular fa-calendar"></i> 02 Oct 2026</span>
        </div>
        <div class="news-body">
          <h4 class="news-title">Grand Cultural Gala &amp; Annual Prize Distribution Fest 2026</h4>
          <p class="news-excerpt">
            A mesmerizing evening featuring traditional dances, patriotic chorus, and theatre performance accompanied by academic excellence award distributions.
          </p>
          <a href="#newsSection" onclick="alert('Full video recording of the Cultural Gala is accessible via our Video Tour player.')" class="news-link">
            Read Full Story <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
