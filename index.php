<?php
// index.php
$currentPage = 'home1';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==================== HERO SECTION ==================== -->
<section class="hero-section">
  <div class="hero-slider-wrap">
    <!-- Slide 1 -->
    <div class="hero-slide active">
      <div class="hero-bg-img" style="background-image: url('assets/images/hero_students.jpg');"></div>
      <div class="hero-overlay"></div>
      <div class="container hero-content-container">
        <div class="hero-text-col">
          <span class="hero-badge"><i class="fa-solid fa-graduation-cap"></i> Welcoming Academic Session 2026-2027</span>
          <h2 class="hero-headline">Welcome to <span class="highlight-text">XYZ School &amp; College!</span></h2>
          <p class="hero-bn-headline">জ্ঞানের আলোয় আলোকিত ভবিষ্যৎ গড়ার অঙ্গীকার</p>
          <p class="hero-subtext">
            Empowering young minds, cultivating moral leadership, and shaping tomorrow's innovators in a modern, caring learning environment.
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
              <h4>জরুরী নোটিশ / Latest Updates</h4>
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

<!-- ==================== KEY STATS BAR ==================== -->
<section class="stats-counter-strip">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-icon-wrap icon-dark">
          <i class="fa-solid fa-user-graduate"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number" data-target="2540">2,540+</h3>
          <p class="stat-label">Total Enrolled Students</p>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon-wrap icon-blue">
          <i class="fa-solid fa-chalkboard-user"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number" data-target="85">85+</h3>
          <p class="stat-label">Qualified Dedicated Teachers</p>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon-wrap icon-gold">
          <i class="fa-solid fa-award"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number">99.8%</h3>
          <p class="stat-label">Board Exam Passing Rate</p>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon-wrap icon-teal">
          <i class="fa-solid fa-trophy"></i>
        </div>
        <div class="stat-info">
          <h3 class="stat-number" data-target="420">420+</h3>
          <p class="stat-label">Awards &amp; Competitions Won</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== ABOUT & LEADERSHIP MESSAGES ==================== -->
<!-- NOTE: As specifically requested with the red arrows in the user's mockup:
     Principal's Message and Vice-Principal's Message are positioned on the RIGHT 
     of the About Institute section! -->
<section class="about-leadership-section" id="aboutSection">
  <div class="container">
    <div class="about-leadership-grid">
      
      <!-- LEFT: About Institute -->
      <div class="about-main-card">
        <div class="section-title-tag">
          <i class="fa-solid fa-school"></i> ABOUT INSTITUTE
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
          <button class="btn btn-primary" onclick="alert('XYZ School & College was founded in 1995. For three decades, our graduates have excelled at top medical colleges, engineering universities, and global institutions.')">
            <i class="fa-solid fa-book-open-reader"></i> Learn More History
          </button>
        </div>
      </div>

      <!-- RIGHT: Principal's & Vice-Principal's Messages (THE MOVED SECTIONS) -->
      <div class="leadership-messages-column" id="leadershipSection">
        
        <!-- CARD 1: Principal's Message (Top Box) -->
        <div class="leader-message-card principal-card" id="principalMsgCard">
          <div class="leader-card-badge">
            <i class="fa-solid fa-user-tie"></i> Message from Principal
          </div>
          <div class="leader-content-wrap">
            <div class="leader-profile-header">
              <div class="leader-avatar-frame">
                <img src="assets/images/principal.jpg" alt="Prof. Md. Motiur Rahman" class="leader-avatar">
                <span class="leader-ribbon">Principal</span>
              </div>
              <div class="leader-info">
                <h3 class="leader-name">PROF. MD. MOTIUR RAHMAN</h3>
                <p class="leader-designation">Principal &amp; Chief Academic Advisor</p>
                <p class="leader-qual">M.Sc (1st Class), B.Ed, M.Ed (DU)</p>
              </div>
            </div>

            <div class="leader-quote-box">
              <i class="fa-solid fa-quote-left quote-icon"></i>
              <p class="quote-text">
                "Welcome to XYZ School &amp; College. We strive to provide a transformative educational journey that awakens the curiosity and moral conscience of every learner. Our mission is to prepare visionary leaders equipped for global challenges."
              </p>
            </div>

            <div class="leader-card-footer">
              <button class="btn btn-sm btn-outline-primary" onclick="openModal('principalModal')">
                <i class="fa-solid fa-newspaper"></i> Read Full Message &rarr;
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 2: Vice-Principal's Message (Bottom Box) -->
        <div class="leader-message-card vice-principal-card" id="vicePrincipalMsgCard">
          <div class="leader-card-badge vp-badge">
            <i class="fa-solid fa-chalkboard-user"></i> Message from Vice-Principal
          </div>
          <div class="leader-content-wrap">
            <div class="leader-profile-header">
              <div class="leader-avatar-frame vp-frame">
                <img src="assets/images/vice_principal.jpg" alt="Mrs. Shahana Parveen" class="leader-avatar">
                <span class="leader-ribbon vp-ribbon">Vice-Principal</span>
              </div>
              <div class="leader-info">
                <h3 class="leader-name">MRS. SHAHANA PARVEEN</h3>
                <p class="leader-designation">Vice-Principal &amp; Head of Academics</p>
                <p class="leader-qual">M.A in English Literature (DU), B.Ed</p>
              </div>
            </div>

            <div class="leader-quote-box vp-quote">
              <i class="fa-solid fa-quote-left quote-icon"></i>
              <p class="quote-text">
                "Our dedicated faculty nurtures students' conceptual clarity, ethical integrity, and creative talents. Through interactive classrooms and co-curricular pursuits, we ensure every child flourishes with confidence."
              </p>
            </div>

            <div class="leader-card-footer">
              <button class="btn btn-sm btn-outline-secondary" onclick="openModal('vicePrincipalModal')">
                <i class="fa-solid fa-newspaper"></i> Read Full Message &rarr;
              </button>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ==================== NOTICE BOARD & ACADEMIC CALENDAR ==================== -->
<section class="notices-calendar-section" id="noticeSection">
  <div class="container">
    <div class="nc-grid">
      
      <!-- NOTICE BOARD COLUMN -->
      <div class="nc-col notice-board-container">
        <div class="section-header-row">
          <div class="sh-left">
            <span class="sh-tag"><i class="fa-solid fa-bell"></i> INSTITUTIONAL CIRCULARS</span>
            <h2 class="sh-title">Notice Board / নোটিশ বোর্ড</h2>
          </div>
          <div class="notice-filter-pills" id="noticeFilterPills">
            <button class="pill-btn active" data-category="all">All</button>
            <button class="pill-btn" data-category="academic">Academic</button>
            <button class="pill-btn" data-category="exam">Exam</button>
            <button class="pill-btn" data-category="events">Events</button>
          </div>
        </div>

        <div class="notice-list-wrap">
          <!-- Notice Item 1 -->
          <div class="notice-card-item" data-category="exam" onclick="viewNotice(1)">
            <div class="notice-date-box">
              <span class="nd-day">18</span>
              <span class="nd-mon">OCT</span>
              <span class="nd-year">2026</span>
            </div>
            <div class="notice-info">
              <div class="notice-badges">
                <span class="badge badge-exam">Examination</span>
                <span class="badge badge-pdf"><i class="fa-solid fa-file-pdf"></i> PDF</span>
              </div>
              <h4 class="notice-item-title">HSC Examination 2026 Form Fill-up Schedule &amp; Fee Submission Guidelines</h4>
              <p class="notice-item-meta">Published by: Controller of Examinations | Ref: XYZ/EXM/2026/89</p>
            </div>
            <div class="notice-action">
              <span class="btn-notice-view"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>

          <!-- Notice Item 2 -->
          <div class="notice-card-item" data-category="exam" onclick="viewNotice(2)">
            <div class="notice-date-box">
              <span class="nd-day">15</span>
              <span class="nd-mon">OCT</span>
              <span class="nd-year">2026</span>
            </div>
            <div class="notice-info">
              <div class="notice-badges">
                <span class="badge badge-exam">Examination</span>
                <span class="badge badge-pdf"><i class="fa-solid fa-file-pdf"></i> PDF</span>
              </div>
              <h4 class="notice-item-title">Class 6 to 9 Annual Examination 2026 Routine &amp; Syllabus Coverage</h4>
              <p class="notice-item-meta">Published by: Academic Council | Ref: XYZ/ACD/2026/102</p>
            </div>
            <div class="notice-action">
              <span class="btn-notice-view"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>

          <!-- Notice Item 3 -->
          <div class="notice-card-item" data-category="events" onclick="viewNotice(3)">
            <div class="notice-date-box">
              <span class="nd-day">12</span>
              <span class="nd-mon">OCT</span>
              <span class="nd-year">2026</span>
            </div>
            <div class="notice-info">
              <div class="notice-badges">
                <span class="badge badge-event">Event &amp; Co-Curricular</span>
              </div>
              <h4 class="notice-item-title">Registration for Inter-School Science, Robotics &amp; Coding Olympiad 2026</h4>
              <p class="notice-item-meta">Published by: Science Club | Ref: XYZ/SCI/2026/34</p>
            </div>
            <div class="notice-action">
              <span class="btn-notice-view"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>

          <!-- Notice Item 4 -->
          <div class="notice-card-item" data-category="academic" onclick="viewNotice(4)">
            <div class="notice-date-box">
              <span class="nd-day">10</span>
              <span class="nd-mon">OCT</span>
              <span class="nd-year">2026</span>
            </div>
            <div class="notice-info">
              <div class="notice-badges">
                <span class="badge badge-academic">Admissions</span>
                <span class="badge badge-pdf"><i class="fa-solid fa-file-pdf"></i> PDF</span>
              </div>
              <h4 class="notice-item-title">Admission Circular for Session 2026-2027 (Playgroup to Class 11)</h4>
              <p class="notice-item-meta">Published by: Admission Committee | Ref: XYZ/ADM/2026/01</p>
            </div>
            <div class="notice-action">
              <span class="btn-notice-view"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>

          <!-- Notice Item 5 -->
          <div class="notice-card-item" data-category="academic" onclick="viewNotice(5)">
            <div class="notice-date-box">
              <span class="nd-day">05</span>
              <span class="nd-mon">OCT</span>
              <span class="nd-year">2026</span>
            </div>
            <div class="notice-info">
              <div class="notice-badges">
                <span class="badge badge-academic">Administration</span>
              </div>
              <h4 class="notice-item-title">Parent-Teacher Conference Schedule for Secondary Section (Classes 8-10)</h4>
              <p class="notice-item-meta">Published by: Vice-Principal Office | Ref: XYZ/PTC/2026/17</p>
            </div>
            <div class="notice-action">
              <span class="btn-notice-view"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            </div>
          </div>
        </div>

        <div class="notice-all-btn-wrap">
          <a href="#noticeSection" class="btn btn-outline-primary btn-block">
            <i class="fa-solid fa-folder-open"></i> Browse Complete Notice Archive (120+ Notices)
          </a>
        </div>
      </div>

      <!-- ACADEMIC CALENDAR COLUMN -->
      <div class="nc-col calendar-container" id="calendarSection">
        <div class="section-header-row">
          <div class="sh-left">
            <span class="sh-tag"><i class="fa-solid fa-calendar-days"></i> ACADEMIC SCHEDULE</span>
            <h2 class="sh-title">Academic Calendar</h2>
          </div>
        </div>

        <div class="calendar-widget-card">
          <!-- Month Bar -->
          <div class="cal-month-header">
            <button class="cal-nav-btn" onclick="prevMonth()"><i class="fa-solid fa-chevron-left"></i></button>
            <h3 class="cal-month-title" id="calendarMonthTitle">October 2026</h3>
            <button class="cal-nav-btn" onclick="nextMonth()"><i class="fa-solid fa-chevron-right"></i></button>
          </div>

          <!-- Day names -->
          <div class="cal-weekdays">
            <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
          </div>

          <!-- Days Grid (Rendered dynamically or static base with events) -->
          <div class="cal-days-grid" id="calendarDaysGrid">
            <!-- Filled by JS -->
          </div>

          <!-- Legend -->
          <div class="cal-legend">
            <span class="legend-item"><span class="dot-indicator dot-holiday"></span> Holiday</span>
            <span class="legend-item"><span class="dot-indicator dot-exam"></span> Examination</span>
            <span class="legend-item"><span class="dot-indicator dot-event"></span> Campus Event</span>
            <span class="legend-item"><span class="dot-indicator dot-today"></span> Today</span>
          </div>

          <!-- Upcoming Key Events in Calendar -->
          <div class="upcoming-dates-wrap">
            <h4 class="upcoming-heading"><i class="fa-solid fa-star"></i> Upcoming Key Dates</h4>
            <div class="upcoming-list">
              <div class="upcoming-item">
                <span class="up-date-badge up-event">Oct 24</span>
                <div class="up-text">
                  <strong>Inter-House Debate &amp; Public Speaking Championship</strong>
                  <small>Auditorium, 10:00 AM</small>
                </div>
              </div>
              <div class="upcoming-item">
                <span class="up-date-badge up-exam">Nov 02</span>
                <div class="up-text">
                  <strong>2nd Terminal &amp; Pre-Test Examinations Begin</strong>
                  <small>Classes 6 through 12</small>
                </div>
              </div>
              <div class="upcoming-item">
                <span class="up-date-badge up-holiday">Nov 15</span>
                <div class="up-text">
                  <strong>Session Admission Form Distribution Commences</strong>
                  <small>School Administrative Office</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==================== SCHOOL LEADERSHIP & FACULTY MEMBERS ==================== -->
<section class="committee-faculty-section" id="committeeSection">
  <div class="container">
    <div class="section-center-head">
      <span class="sh-tag"><i class="fa-solid fa-users-gear"></i> GOVERNANCE &amp; MENTORS</span>
      <h2 class="sh-title">School Managing Committee &amp; Faculty</h2>
      <p class="sh-sub">Dedicated leadership and experienced educators guiding the institution towards perpetual excellence.</p>
    </div>

    <!-- Managing Committee Hierarchy -->
    <div class="committee-hierarchy-wrap">
      <h3 class="committee-block-title"><i class="fa-solid fa-sitemap"></i> School Managing Committee</h3>
      <div class="committee-grid">
        <div class="comm-card comm-president">
          <div class="comm-badge">President / Chairman</div>
          <img src="assets/images/chairman.jpg" alt="Chairman" class="comm-avatar">
          <h4 class="comm-name">Alhaj Md. Nurul Islam</h4>
          <p class="comm-role">President, Governing Body</p>
          <small class="comm-desc">Eminent Philanthropist &amp; Social Reformer</small>
        </div>

        <div class="comm-card">
          <div class="comm-badge badge-blue">Founder Member</div>
          <img src="assets/images/faculty_2.jpg" alt="Founder" class="comm-avatar">
          <h4 class="comm-name">Engr. A. K. M. Shamsuddin</h4>
          <p class="comm-role">Founder &amp; Life Member</p>
          <small class="comm-desc">Distinguished Educationist</small>
        </div>

        <div class="comm-card">
          <div class="comm-badge badge-dark">Member Secretary</div>
          <img src="assets/images/principal.jpg" alt="Principal" class="comm-avatar">
          <h4 class="comm-name">Prof. Md. Motiur Rahman</h4>
          <p class="comm-role">Principal &amp; Member Secretary</p>
          <small class="comm-desc">Chief Academic Executive</small>
        </div>

        <div class="comm-card">
          <div class="comm-badge badge-purple">Guardian Representative</div>
          <img src="assets/images/faculty_4.jpg" alt="Guardian Rep" class="comm-avatar">
          <h4 class="comm-name">Barrister Rafiqul Hasan</h4>
          <p class="comm-role">Guardian Representative</p>
          <small class="comm-desc">Supreme Court of Bangladesh</small>
        </div>
      </div>
    </div>

    <!-- Active Faculty Members -->
    <div class="faculty-showcase-wrap" id="facultySection">
      <div class="faculty-head-row">
        <h3 class="committee-block-title"><i class="fa-solid fa-chalkboard-user"></i> Active Faculty Members &amp; Department Heads</h3>
        <span class="faculty-count-tag">85+ Highly Qualified Teachers</span>
      </div>
      
      <div class="faculty-grid">
        <!-- Faculty 1 -->
        <div class="faculty-card">
          <div class="faculty-img-wrap">
            <img src="assets/images/faculty_1.jpg" alt="Farhana Yasmin" class="faculty-img">
            <span class="dept-badge">Mathematics</span>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Farhana Yasmin</h4>
            <p class="faculty-title">Head of Mathematics Department</p>
            <p class="faculty-edu">M.Sc in Applied Mathematics (DU)</p>
            <div class="faculty-contacts">
              <a href="tel:+8801700000001" title="Call"><i class="fa-solid fa-phone"></i></a>
              <a href="mailto:math@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
          </div>
        </div>

        <!-- Faculty 2 -->
        <div class="faculty-card">
          <div class="faculty-img-wrap">
            <img src="assets/images/faculty_2.jpg" alt="Mohammad Abdul Karim" class="faculty-img">
            <span class="dept-badge dept-science">Physics &amp; STEM</span>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Md. Abdul Karim</h4>
            <p class="faculty-title">Senior Teacher, Physics</p>
            <p class="faculty-edu">M.Sc in Physics (JU), B.Ed</p>
            <div class="faculty-contacts">
              <a href="tel:+8801700000002" title="Call"><i class="fa-solid fa-phone"></i></a>
              <a href="mailto:physics@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
          </div>
        </div>

        <!-- Faculty 3 -->
        <div class="faculty-card">
          <div class="faculty-img-wrap">
            <img src="assets/images/faculty_3.jpg" alt="Sumaiya Akter" class="faculty-img">
            <span class="dept-badge dept-ict">ICT &amp; Robotics</span>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Sumaiya Akter</h4>
            <p class="faculty-title">Head of Computer Science &amp; ICT</p>
            <p class="faculty-edu">B.Sc &amp; M.Sc in CSE (BUET)</p>
            <div class="faculty-contacts">
              <a href="tel:+8801700000003" title="Call"><i class="fa-solid fa-phone"></i></a>
              <a href="mailto:ict@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
          </div>
        </div>

        <!-- Faculty 4 -->
        <div class="faculty-card">
          <div class="faculty-img-wrap">
            <img src="assets/images/faculty_4.jpg" alt="Tanvir Hossain" class="faculty-img">
            <span class="dept-badge dept-english">English</span>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Tanvir Hossain</h4>
            <p class="faculty-title">Lecturer in English &amp; Debating</p>
            <p class="faculty-edu">M.A in English (DU), ELT Specialist</p>
            <div class="faculty-contacts">
              <a href="tel:+8801700000004" title="Call"><i class="fa-solid fa-phone"></i></a>
              <a href="mailto:english@xyzschool.edu.bd" title="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
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
