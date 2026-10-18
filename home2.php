<?php
// home2.php - Homepage 2: Modern Smart School & College (Brand New Cutting-Edge 2026 Design)
$currentPage = 'home2';
$siteTitle = "XYZ Model School & College | Smart Digital Education (Modern School Design)";
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==================== 1. ACADEMIC EXCELLENCE & BOARD HONORS RIBBON ==================== -->
<section class="rankings-ribbon">
  <div class="container">
    <div class="rankings-inner">
      <div class="ranking-brand">
        <span class="rank-live-pulse"></span>
        <strong>BOARD &amp; NATIONAL HONORS</strong>
      </div>
      <div class="ranking-badges-track">
        <div class="rank-badge-item">
          <i class="fa-solid fa-trophy"></i>
          <div>
            <strong>#1 Model School</strong>
            <small>in Dhaka Division (Board Evaluation)</small>
          </div>
        </div>
        <div class="rank-badge-item">
          <i class="fa-solid fa-medal"></i>
          <div>
            <strong>100% Pass Rate</strong>
            <small>in SSC &amp; HSC Board Examinations</small>
          </div>
        </div>
        <div class="rank-badge-item">
          <i class="fa-solid fa-star"></i>
          <div>
            <strong>98.4% GPA-5.00</strong>
            <small>Talentpool Board Scholarships</small>
          </div>
        </div>
        <div class="rank-badge-item">
          <i class="fa-solid fa-microchip"></i>
          <div>
            <strong>Top-10 National STEM</strong>
            <small>National Science &amp; Robotics Olympiad</small>
          </div>
        </div>
      </div>
      <a href="#honorsSection" class="rank-more-link">All Achievements &rarr;</a>
    </div>
  </div>
</section>

<!-- ==================== 2. BRAND NEW LUMINOUS HERO SECTION ==================== -->
<section class="h2-hero-light">
  <div class="container">
    <div class="h2-hero-grid">
      
      <!-- Left Content Column -->
      <div class="h2-hero-left">
        <div class="h2-pill-tag">
          <span class="h2-pulse-dot"></span>
          <span>Admissions Open 2026-2027: Playgroup to Class XI (HSC)</span>
        </div>

        <h1 class="h2-headline">
          Nurturing Character, Empowering Minds, <span class="h2-gold-text">Inspiring The Future.</span>
        </h1>
        
        <p class="h2-sub-bn">জ্ঞান, শৃঙ্খলা ও প্রযুক্তির সমন্বয়ে গড়ে উঠছে আগামীর নৈতিক নেতৃত্ব</p>
        
        <p class="h2-lead-desc">
          XYZ Model School &amp; College delivers a world-class, learner-centric, and future-ready education. From joyful Montessori foundations to board-topping SSC &amp; HSC college streams with smart classrooms and STEM robotics.
        </p>

        <!-- Quick Interactive Class Search -->
        <div class="h2-search-card">
          <i class="fa-solid fa-magnifying-glass text-muted ps-2 pe-1"></i>
          <input type="text" id="gradeQuickSearch" class="h2-search-input" placeholder="Search Grade (e.g. Playgroup, Class 5, SSC Science, English Version)..." onkeyup="quickFilterGrades()">
          <button class="h2-search-btn" onclick="scrollToJourney()">
            <i class="fa-solid fa-compass"></i> Explore Grades
          </button>
        </div>

        <!-- Call to Action Buttons -->
        <div class="h2-hero-buttons">
          <button class="btn btn-gold btn-lg" onclick="openModal('admissionModal')">
            <i class="fa-solid fa-file-pen"></i> Apply for School Admission
          </button>
          <a href="#feeCalculator" class="btn btn-outline-primary btn-lg">
            <i class="fa-solid fa-calculator"></i> Fee &amp; Waiver Calculator
          </a>
          <button class="btn btn-outline-secondary btn-lg" onclick="openModal('videoModal')">
            <i class="fa-solid fa-circle-play"></i> School Tour (60s)
          </button>
        </div>

        <!-- Trust Indicator Row -->
        <div class="h2-trust-row">
          <div class="h2-trust-item">
            <i class="fa-solid fa-certificate"></i>
            <span>EIIN: 134567</span>
          </div>
          <div class="h2-trust-item">
            <i class="fa-solid fa-award"></i>
            <span>Dhaka Board Recognized</span>
          </div>
          <div class="h2-trust-item">
            <i class="fa-solid fa-users-viewfinder"></i>
            <span>3,850+ Enrolled Students</span>
          </div>
          <div class="h2-trust-item">
            <i class="fa-solid fa-shield-halved"></i>
            <span>100% Safe Campus</span>
          </div>
        </div>
      </div>

      <!-- Right Visual Composite with Floating Cards -->
      <div class="h2-hero-right">
        <div class="h2-visual-wrapper">
          
          <div class="h2-main-photo-frame">
            <img src="assets/images/hero_students.jpg" alt="Students in Classroom" class="h2-main-photo">
            <div class="h2-photo-overlay"></div>
            <div class="h2-photo-caption">
              <h4>21st Century Digital Classrooms</h4>
              <p>Equipped with 4K touchscreens, high-speed Wi-Fi &amp; audio-visual smart learning.</p>
            </div>
          </div>

          <!-- Floating Glass Badge 1: STEM Robotics -->
          <div class="h2-floating-badge h2-fb-1">
            <div class="h2-fb-icon">
              <i class="fa-solid fa-robot text-gold"></i>
            </div>
            <div class="h2-fb-info">
              <strong>STEM Robotics &amp; AI Lab</strong>
              <small>45+ National Championships</small>
            </div>
          </div>

          <!-- Floating Glass Badge 2: Safe Bus & SMS -->
          <div class="h2-floating-badge h2-fb-2">
            <div class="h2-fb-icon">
              <i class="fa-solid fa-bus-school text-gold"></i>
            </div>
            <div class="h2-fb-info">
              <strong>GPS AC Bus &amp; Biometric SMS</strong>
              <small>Real-time Parent Notification</small>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 3. PARENT QUICK-DOCK BAR ==================== -->
<div class="h2-quick-dock">
  <div class="container">
    <div class="h2-dock-container">
      <a href="javascript:void(0)" onclick="openModal('admissionModal')" class="h2-dock-item">
        <i class="fa-solid fa-file-signature"></i> <span>Online Admission 2026-27</span>
      </a>
      <a href="#feeCalculator" class="h2-dock-item">
        <i class="fa-solid fa-calculator"></i> <span>Fee &amp; Waiver Calculator</span>
      </a>
      <a href="#gradeJourney" class="h2-dock-item">
        <i class="fa-solid fa-layer-group"></i> <span>Curriculum &amp; Grades</span>
      </a>
      <a href="#bentoSection" class="h2-dock-item">
        <i class="fa-solid fa-microchip"></i> <span>Smart School Facilities</span>
      </a>
      <a href="#honorsSection" class="h2-dock-item">
        <i class="fa-solid fa-star"></i> <span>Wall of Fame</span>
      </a>
      <a href="tel:+8801712345678" class="h2-dock-item">
        <i class="fa-solid fa-phone-volume"></i> <span>Hotline: +880 1712-345678</span>
      </a>
    </div>
  </div>
</div>

<!-- ==================== 4. THE 2026 BENTO GRID: WHY XYZ MODEL SCHOOL ==================== -->
<section class="h2-bento-section" id="bentoSection">
  <div class="container">
    
    <div class="section-title-wrap text-center mb-5">
      <span class="section-badge"><i class="fa-solid fa-gem"></i> Core Pillars of Excellence</span>
      <h2 class="section-heading">Why Discerning Parents Choose XYZ Model School</h2>
      <p class="section-subheading">A holistic blend of modern digital pedagogy, safety, moral values, and academic dominance.</p>
    </div>

    <div class="h2-bento-grid">
      
      <!-- Bento Tile 1: Smart Classrooms (Span 2 Columns) -->
      <div class="h2-bento-card bento-span-2">
        <div>
          <div class="h2-bento-icon">
            <i class="fa-solid fa-chalkboard-user"></i>
          </div>
          <div class="h2-bento-body">
            <h3>100% Multimedia Smart Classrooms</h3>
            <p>Every classroom is air-conditioned and fitted with 75-inch 4K interactive flat panels, digital curriculum modules, and interactive quizzes that make every subject engaging and crystal clear.</p>
          </div>
        </div>
        <div class="h2-bento-footer">
          <span><i class="fa-solid fa-circle-check text-gold"></i> 64 Interactive Digital Touchboards</span>
          <span>Shift: Morning &amp; Day &rarr;</span>
        </div>
      </div>

      <!-- Bento Tile 2: STEM Robotics -->
      <div class="h2-bento-card">
        <div>
          <div class="h2-bento-icon">
            <i class="fa-solid fa-robot"></i>
          </div>
          <div class="h2-bento-body">
            <h3>STEM Robotics &amp; AI Studio</h3>
            <p>Hands-on coding, Arduino microcontrollers, LEGO robotics, and Python programming starting from primary grades.</p>
          </div>
        </div>
        <div class="h2-bento-footer">
          <span><i class="fa-solid fa-trophy text-gold"></i> 45+ National Awards</span>
          <span>Explore Lab &rarr;</span>
        </div>
      </div>

      <!-- Bento Tile 3: Safe Campus (Highlight Card) -->
      <div class="h2-bento-card bento-highlight">
        <div>
          <div class="h2-bento-icon">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <div class="h2-bento-body">
            <h3>Safe &amp; Secure Ecosystem</h3>
            <p>250+ HD CCTV cameras, biometric gates with instant SMS to parents' phones, and 18 GPS-tracked AC buses across Dhaka.</p>
          </div>
        </div>
        <div class="h2-bento-footer">
          <span><i class="fa-solid fa-bell text-gold"></i> Instant SMS to Parents</span>
          <span>Safety Standards &rarr;</span>
        </div>
      </div>

      <!-- Bento Tile 4: Academic Dominance -->
      <div class="h2-bento-card">
        <div>
          <div class="h2-bento-icon">
            <i class="fa-solid fa-graduation-cap"></i>
          </div>
          <div class="h2-bento-body">
            <h3>Academic Dominance</h3>
            <p>Consistent 100% pass rate in SSC &amp; HSC examinations with 98.4% students securing GPA-5.00 and talentpool scholarships.</p>
          </div>
        </div>
        <div class="h2-bento-footer">
          <span><i class="fa-solid fa-star text-gold"></i> 98.4% Golden GPA-5</span>
          <span>View Results &rarr;</span>
        </div>
      </div>

      <!-- Bento Tile 5: 25,000+ Book Library -->
      <div class="h2-bento-card">
        <div>
          <div class="h2-bento-icon">
            <i class="fa-solid fa-book-open-reader"></i>
          </div>
          <div class="h2-bento-body">
            <h3>Central Library &amp; E-Reader</h3>
            <p>Quiet, serene study pods with 25,000+ printed curriculum volumes, encyclopedias, children's literature, and Kindle digital terminals.</p>
          </div>
        </div>
        <div class="h2-bento-footer">
          <span><i class="fa-solid fa-book text-gold"></i> 25,000+ Titles</span>
          <span>Digital Pods &rarr;</span>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 5. INTERACTIVE GRADE JOURNEY (ROADMAP) ==================== -->
<section class="h2-grade-journey-section" id="gradeJourney">
  <div class="container">
    
    <div class="section-title-wrap text-center mb-4">
      <span class="section-badge"><i class="fa-solid fa-route"></i> Academic Roadmap</span>
      <h2 class="section-heading">Your Child's Journey from Toddler to College</h2>
      <p class="section-subheading">Select any academic level below to inspect its specialized curriculum, shift details, and learning objectives.</p>
    </div>

    <!-- Segmented Tab Bar -->
    <div class="h2-grade-nav">
      <button class="h2-grade-tab active" onclick="switchGradeTab('preprimary', this)">
        <i class="fa-solid fa-shapes"></i> Pre-Primary (PG-KG)
      </button>
      <button class="h2-grade-tab" onclick="switchGradeTab('primary', this)">
        <i class="fa-solid fa-pencil"></i> Primary (Class 1-5)
      </button>
      <button class="h2-grade-tab" onclick="switchGradeTab('junior', this)">
        <i class="fa-solid fa-book"></i> Junior (Class 6-8)
      </button>
      <button class="h2-grade-tab" onclick="switchGradeTab('secondary', this)">
        <i class="fa-solid fa-flask"></i> Secondary (SSC 9-10)
      </button>
      <button class="h2-grade-tab" onclick="switchGradeTab('college', this)">
        <i class="fa-solid fa-building-columns"></i> College (HSC 11-12)
      </button>
      <button class="h2-grade-tab" onclick="switchGradeTab('englishversion', this)">
        <i class="fa-solid fa-language"></i> English Version
      </button>
    </div>

    <!-- Dynamic Content Panel -->
    <div class="h2-grade-content-panel" id="gradeContentPanel">
      
      <div class="h2-grade-panel-left">
        <div class="h2-grade-meta-pills" id="panelMetaPills">
          <span class="h2-meta-pill"><i class="fa-solid fa-child"></i> Age: 3 to 5 Years</span>
          <span class="h2-meta-pill"><i class="fa-regular fa-clock"></i> Morning Shift: 8:30 AM – 11:30 AM</span>
          <span class="h2-meta-pill"><i class="fa-solid fa-users"></i> Student-Teacher Ratio: 15:1</span>
        </div>

        <h3 class="h2-grade-title" id="panelTitle">Pre-Primary Foundation (Playgroup, Nursery &amp; KG)</h3>
        
        <p class="h2-grade-desc" id="panelDesc">
          A joyous, play-based environment designed to foster natural curiosity, sensory exploration, phonics, number sense, and social harmony. Every child receives loving personal attention in colorful, child-safe, air-conditioned rooms.
        </p>

        <ul class="h2-grade-features" id="panelFeatures">
          <li><i class="fa-solid fa-circle-check"></i> Montessori sensory activities &amp; fine motor development.</li>
          <li><i class="fa-solid fa-circle-check"></i> Bilingual phonetics, storytelling, and joyful rhyme sessions.</li>
          <li><i class="fa-solid fa-circle-check"></i> Dedicated indoor splash play zone and soft-toy corner.</li>
          <li><i class="fa-solid fa-circle-check"></i> Regular pediatric health check-ups and parent updates.</li>
        </ul>

        <div class="d-flex gap-3 flex-wrap">
          <button class="btn btn-gold" onclick="openModal('admissionModal')">
            <i class="fa-solid fa-user-plus"></i> Apply for Pre-Primary
          </button>
          <button class="btn btn-outline-primary" onclick="openClassDetail('Pre-Primary Foundation')">
            <i class="fa-solid fa-file-lines"></i> View Detailed Syllabus
          </button>
        </div>
      </div>

      <div class="h2-grade-panel-right">
        <div class="position-relative rounded-4 overflow-hidden border shadow-sm">
          <img src="assets/images/gallery_classroom.jpg" id="panelImage" alt="Grade Showcase" class="w-100" style="height:320px; object-fit:cover;">
          <div class="position-absolute bottom-0 start-0 end-0 p-3" style="background:linear-gradient(transparent, rgba(15,23,42,0.85)); color:#fff;">
            <strong id="panelImageCaption" class="d-block">Joyful Learning Atmosphere</strong>
            <small class="text-white-50">Safe, caring, and digitally enriched Montessori classroom</small>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 6. INTERACTIVE TUITION FEE & SCHOLARSHIP CALCULATOR ==================== -->
<section class="h2-calc-section" id="feeCalculator">
  <div class="container">
    <div class="h2-calc-box">
      
      <!-- Calculator Form -->
      <div class="h2-calc-left">
        <span class="badge-gold"><i class="fa-solid fa-coins"></i> Transparent Pricing</span>
        <h2 class="h2-calc-title">Interactive Fee &amp; Scholarship Calculator</h2>
        <p class="h2-calc-lead">
          Calculate the exact monthly tuition fee and check your child's eligibility for up to 100% merit waivers, sibling discounts, and Olympiad scholarships.
        </p>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="h2-calc-form-group">
              <label class="h2-calc-label"><i class="fa-solid fa-graduation-cap"></i> Select Grade / Stream:</label>
              <select id="calcGrade" class="h2-calc-select" onchange="calculateFee()">
                <option value="pg_kg">Playgroup to Kindergarten</option>
                <option value="primary">Class 1 to Class 5 (Primary)</option>
                <option value="junior">Class 6 to Class 8 (Junior)</option>
                <option value="ssc_sci" selected>Class 9-10 (SSC Science)</option>
                <option value="ssc_biz">Class 9-10 (SSC Business/Arts)</option>
                <option value="hsc_sci">Class 11-12 (HSC Science)</option>
                <option value="hsc_biz">Class 11-12 (HSC Business/Arts)</option>
                <option value="eng_ver">English Version (All Classes)</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="h2-calc-form-group">
              <label class="h2-calc-label"><i class="fa-solid fa-award"></i> Select Scholarship / Waiver:</label>
              <select id="calcWaiver" class="h2-calc-select" onchange="calculateFee()">
                <option value="none">General / No Waiver (0%)</option>
                <option value="gpa5">SSC Golden GPA-5 (50% Tuition Waiver)</option>
                <option value="topper">Exam 1st/2nd/3rd Position (100% Tuition Waiver)</option>
                <option value="sibling">Sibling Discount (25% Tuition Waiver)</option>
                <option value="olympiad">National Olympiad Winner (100% Tuition Waiver)</option>
                <option value="quota">Freedom Fighter / Welfare Quota (50% Waiver)</option>
              </select>
            </div>
          </div>
        </div>

        <p class="text-white-50 small mt-2 mb-0">
          <i class="fa-solid fa-circle-info text-gold"></i> Note: Tuition fee waivers apply exclusively to monthly tuition charges upon admission approval.
        </p>
      </div>

      <!-- Result Card -->
      <div class="h2-calc-right">
        <div class="h2-calc-result-card">
          <h4 class="mb-3 text-white"><i class="fa-solid fa-receipt text-gold"></i> Fee Breakdown Summary</h4>
          
          <div class="h2-res-row">
            <span>Base Monthly Tuition:</span>
            <strong id="resBaseFee">৳ 3,200</strong>
          </div>
          <div class="h2-res-row">
            <span>Lab &amp; Digital Smart Fee:</span>
            <strong id="resLabFee">৳ 500</strong>
          </div>
          <div class="h2-res-row">
            <span>Scholarship Waiver Applied:</span>
            <strong id="resWaiver" class="text-gold">0% (৳ 0)</strong>
          </div>
          <div class="h2-res-row highlight">
            <span>Net Monthly Payable:</span>
            <span class="h2-payable-amount" id="resTotal">৳ 3,700</span>
          </div>

          <button class="btn btn-gold btn-block btn-lg mt-3" onclick="openModal('admissionModal')">
            <i class="fa-solid fa-user-plus"></i> Proceed to Online Admission
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 7. THE 4 SCHOOL HOUSES (STUDENT LIFE) ==================== -->
<section class="section varsity-campus-life-section">
  <div class="container">
    
    <div class="section-title-wrap text-center">
      <span class="section-badge"><i class="fa-solid fa-shield-heart"></i> Character &amp; Camaraderie</span>
      <h2 class="section-heading">The School House System</h2>
      <p class="section-subheading">Every student belongs to one of four proud houses, fostering teamwork, sportsmanship, and leadership.</p>
    </div>

    <div class="row g-4">
      
      <!-- Padma House -->
      <div class="col-md-3">
        <div class="school-house-card house-padma">
          <div class="house-badge"><i class="fa-solid fa-fire"></i></div>
          <h3>Padma House</h3>
          <p class="house-motto">"Courage &amp; Leadership"</p>
          <ul class="house-stats">
            <li><strong>House Color:</strong> Crimson Red</li>
            <li><strong>House Master:</strong> Engr. M. Rahman</li>
            <li><strong>Current Honors:</strong> Annual Sports Champions</li>
          </ul>
        </div>
      </div>

      <!-- Meghna House -->
      <div class="col-md-3">
        <div class="school-house-card house-meghna">
          <div class="house-badge"><i class="fa-solid fa-water"></i></div>
          <h3>Meghna House</h3>
          <p class="house-motto">"Knowledge &amp; Wisdom"</p>
          <ul class="house-stats">
            <li><strong>House Color:</strong> Ocean Blue</li>
            <li><strong>House Master:</strong> Dr. Farhana Sultana</li>
            <li><strong>Current Honors:</strong> Inter-School Debate Topper</li>
          </ul>
        </div>
      </div>

      <!-- Jamuna House -->
      <div class="col-md-3">
        <div class="school-house-card house-jamuna">
          <div class="house-badge"><i class="fa-solid fa-mountain"></i></div>
          <h3>Jamuna House</h3>
          <p class="house-motto">"Strength &amp; Integrity"</p>
          <ul class="house-stats">
            <li><strong>House Color:</strong> Midnight Navy</li>
            <li><strong>House Master:</strong> Prof. S. K. Roy</li>
            <li><strong>Current Honors:</strong> Science Fair Winner 2025</li>
          </ul>
        </div>
      </div>

      <!-- Surma House -->
      <div class="col-md-3">
        <div class="school-house-card house-surma">
          <div class="house-badge"><i class="fa-solid fa-sun"></i></div>
          <h3>Surma House</h3>
          <p class="house-motto">"Harmony &amp; Creativity"</p>
          <ul class="house-stats">
            <li><strong>House Color:</strong> Imperial Gold</li>
            <li><strong>House Master:</strong> Ms. Nazneen Akhter</li>
            <li><strong>Current Honors:</strong> Cultural Fest Winner</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 8. SCHOOL LEADERSHIP MESSAGES ==================== -->
<section class="section varsity-leadership-section" id="leadershipSection">
  <div class="container">
    
    <div class="section-title-wrap text-center">
      <span class="section-badge"><i class="fa-solid fa-user-tie"></i> Governance &amp; Stewardship</span>
      <h2 class="section-heading">Visionary Leadership for Tomorrow's Generation</h2>
      <p class="section-subheading">Educational visionaries dedicated to inspiring ethical character, discipline, and intellectual brilliance.</p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Chairman Card -->
      <div class="col-lg-5 col-md-6">
        <div class="varsity-leader-card">
          <div class="vlc-top">
            <div class="vlc-avatar">
              <img src="assets/images/chairman.jpg" alt="Chairman Governing Body">
            </div>
            <div class="vlc-meta">
              <h3>Dr. M. A. Hashem Chowdhury</h3>
              <p class="vlc-role">Chairman, Governing Body</p>
              <span class="vlc-inst">XYZ Model School &amp; College</span>
            </div>
          </div>
          <div class="vlc-body">
            <div class="vlc-quote-icon"><i class="fa-solid fa-quote-left"></i></div>
            <p>
              "Our school is founded on the sacred belief that every child is blessed with unique talents. We provide a nurturing, high-tech, and value-based environment where students grow into patriotic, ethical, and world-class leaders."
            </p>
          </div>
          <div class="vlc-footer">
            <button class="btn btn-outline-primary btn-sm" onclick="openLeaderModal('chairman')">
              Read Chairman's Message <i class="fa-solid fa-arrow-right"></i>
            </button>
            <span class="vlc-tag">Founder's Vision</span>
          </div>
        </div>
      </div>

      <!-- Principal Card -->
      <div class="col-lg-5 col-md-6">
        <div class="varsity-leader-card">
          <div class="vlc-top">
            <div class="vlc-avatar">
              <img src="assets/images/principal.jpg" alt="Principal">
            </div>
            <div class="vlc-meta">
              <h3>Prof. Dr. Mohammad Shamsuzzaman</h3>
              <p class="vlc-role">Principal &amp; Head of Institution</p>
              <span class="vlc-inst">Ph.D. in Education, Former Govt. College Principal</span>
            </div>
          </div>
          <div class="vlc-body">
            <div class="vlc-quote-icon"><i class="fa-solid fa-quote-left"></i></div>
            <p>
              "We take pride in fostering academic rigor alongside emotional intelligence, moral rectitude, and digital mastery. With our dedicated faculty and smart infrastructure, our students consistently top board examinations."
            </p>
          </div>
          <div class="vlc-footer">
            <button class="btn btn-outline-primary btn-sm" onclick="openModal('principalModal')">
              Read Principal's Message <i class="fa-solid fa-arrow-right"></i>
            </button>
            <span class="vlc-tag">Academic Stewardship</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 9. WALL OF FAME & BOARD ACHIEVERS ==================== -->
<section class="section varsity-news-section" id="honorsSection">
  <div class="container">
    
    <div class="section-title-wrap text-center">
      <span class="section-badge"><i class="fa-solid fa-award"></i> Wall of Fame</span>
      <h2 class="section-heading">Celebrating Our Brilliant Board Achievers</h2>
      <p class="section-subheading">Students who brought glory to XYZ Model School &amp; College through exceptional dedication.</p>
    </div>

    <div class="row g-4">
      
      <!-- Achiever 1 -->
      <div class="col-lg-3 col-sm-6">
        <div class="achiever-card">
          <div class="achiever-photo">
            <img src="assets/images/student_1.jpg" alt="Achiever 1">
            <span class="achiever-badge">GPA 5.00 (Golden)</span>
          </div>
          <div class="achiever-info">
            <h4>Tanzila Akter</h4>
            <p class="achiever-exam">SSC 2025 (Science)</p>
            <p class="achiever-desc">Dhaka Board Talentpool Scholarship holder, National Math Olympiad Finalist.</p>
          </div>
        </div>
      </div>

      <!-- Achiever 2 -->
      <div class="col-lg-3 col-sm-6">
        <div class="achiever-card">
          <div class="achiever-photo">
            <img src="assets/images/student_2.jpg" alt="Achiever 2">
            <span class="achiever-badge">GPA 5.00 (Golden)</span>
          </div>
          <div class="achiever-info">
            <h4>Nafis Imtiaz</h4>
            <p class="achiever-exam">HSC 2025 (Science)</p>
            <p class="achiever-desc">Secured 14th rank in BUET Engineering Admission Test, Ex-President ICT Club.</p>
          </div>
        </div>
      </div>

      <!-- Achiever 3 -->
      <div class="col-lg-3 col-sm-6">
        <div class="achiever-card">
          <div class="achiever-photo">
            <img src="assets/images/student_3.jpg" alt="Achiever 3">
            <span class="achiever-badge">GPA 5.00 (Golden)</span>
          </div>
          <div class="achiever-info">
            <h4>Sumaiya Jahan</h4>
            <p class="achiever-exam">SSC 2025 (Business Studies)</p>
            <p class="achiever-desc">Highest score in Accounting &amp; Commercial Law, National Debate Champion.</p>
          </div>
        </div>
      </div>

      <!-- Achiever 4 -->
      <div class="col-lg-3 col-sm-6">
        <div class="achiever-card">
          <div class="achiever-photo">
            <img src="assets/images/student_4.jpg" alt="Achiever 4">
            <span class="achiever-badge">GPA 5.00 (Golden)</span>
          </div>
          <div class="achiever-info">
            <h4>Raihan Kabir</h4>
            <p class="achiever-exam">HSC 2025 (Science)</p>
            <p class="achiever-desc">Admitted to Dhaka Medical College (DMC), Gold Medalist in Physics Olympiad.</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 10. INTERACTIVE PARENT FAQ ACCORDION ==================== -->
<section class="h2-faq-section" id="faqSection">
  <div class="container">
    
    <div class="section-title-wrap text-center mb-5">
      <span class="section-badge"><i class="fa-solid fa-circle-question"></i> Common Questions</span>
      <h2 class="section-heading">Frequently Asked by Prospective Parents</h2>
      <p class="section-subheading">Clear answers about admission procedures, English version wing, transport, and student care.</p>
    </div>

    <div class="h2-faq-grid">
      
      <div class="h2-faq-item active">
        <button class="h2-faq-question" onclick="toggleFaq(this)">
          <span>What is the admission procedure for the 2026-2027 academic session?</span>
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="h2-faq-answer">
          <p>Parents can apply online through our official portal or obtain admission forms from the school admission office. For Pre-Primary (Playgroup to KG), admission is based on a friendly child-parent interaction. For Class 1 through Class 9, a written admission test on English, Bangla, and Mathematics is conducted according to NCTB standards.</p>
        </div>
      </div>

      <div class="h2-faq-item">
        <button class="h2-faq-question" onclick="toggleFaq(this)">
          <span>How does the English Version differ from English Medium?</span>
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="h2-faq-answer">
          <p>Our English Version strictly follows the National Curriculum and Textbook Board (NCTB) curriculum and Dhaka Education Board examinations, but all textbooks (except Bengali) and classroom lectures are conducted completely in English with British Council spoken enrichment.</p>
        </div>
      </div>

      <div class="h2-faq-item">
        <button class="h2-faq-question" onclick="toggleFaq(this)">
          <span>Are school transport facilities air-conditioned and GPS monitored?</span>
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="h2-faq-answer">
          <p>Yes. We operate a fleet of 18 dedicated air-conditioned school buses covering Uttara, Mirpur, Gulshan, Banani, and Tongi. Every bus is equipped with real-time GPS tracking and dedicated female attendants for younger learners.</p>
        </div>
      </div>

      <div class="h2-faq-item">
        <button class="h2-faq-question" onclick="toggleFaq(this)">
          <span>What are the criteria for receiving tuition fee scholarships?</span>
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="h2-faq-answer">
          <p>We provide up to 100% merit waivers for Board Talentpool Scholarship holders and Top 3 rank holders in class final examinations. Additionally, siblings receive a 25% to 50% discount, and national Olympiad winners receive full tuition support.</p>
        </div>
      </div>

      <div class="h2-faq-item">
        <button class="h2-faq-question" onclick="toggleFaq(this)">
          <span>How are parents informed about their child's attendance and performance?</span>
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="h2-faq-answer">
          <p>Through our automated biometric attendance system, parents receive an instant SMS notification on their mobile phones upon their child's arrival and departure. Additionally, term exam progress reports are accessible 24/7 via the Parent Portal.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 11. ADMISSION CTA BANNER ==================== -->
<section class="varsity-prefooter-cta">
  <div class="container text-center">
    <div class="vpc-inner">
      <span class="vpc-tag">Session 2026-2027</span>
      <h2 class="vpc-title">Begin Your Child's Journey of Excellence Today</h2>
      <p class="vpc-lead">Limited seats available for Playgroup, Nursery, KG, Class 1 to 9, and Class 11 (HSC). Apply early to secure admission.</p>
      <div class="vpc-actions">
        <button class="btn btn-gold btn-lg" onclick="openModal('admissionModal')">
          <i class="fa-solid fa-file-pen"></i> Apply for School Admission
        </button>
        <a href="tel:+8801712345678" class="btn btn-outline-white btn-lg">
          <i class="fa-solid fa-phone-volume"></i> Hotline: +880 1712-345678
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==================== MODALS SPECIFIC TO HOME 2 ==================== -->

<!-- Video Modal -->
<div class="modal-overlay" id="videoModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-header">
      <h3 class="modal-title"><i class="fa-solid fa-video text-gold"></i> XYZ School Campus Video Tour</h3>
      <button class="modal-close" onclick="closeModal('videoModal')">&times;</button>
    </div>
    <div class="modal-body text-center p-4">
      <div class="video-container" style="background:#0f172a; border-radius:16px; padding:60px 20px; color:#fff;">
        <i class="fa-solid fa-circle-play fa-4x text-gold mb-3"></i>
        <h4>Campus Virtual Tour 2026</h4>
        <p class="text-white-50">Explore 4K drone footage of our smart classrooms, STEM robotics labs, sports complex, and lush green campus.</p>
        <button class="btn btn-gold mt-2" onclick="alert('Playing 4K Virtual Tour Video...')"><i class="fa-solid fa-play"></i> Play Tour</button>
      </div>
    </div>
  </div>
</div>

<!-- Class Detail Modal -->
<div class="modal-overlay" id="classDetailModal">
  <div class="modal-dialog">
    <div class="modal-header">
      <h3 class="modal-title" id="classDetailTitle"><i class="fa-solid fa-book-open text-gold"></i> Grade Information</h3>
      <button class="modal-close" onclick="closeModal('classDetailModal')">&times;</button>
    </div>
    <div class="modal-body p-4">
      <div id="classDetailContent">
        <p>Loading curriculum details...</p>
      </div>
      <div class="mt-4 pt-3 border-top d-flex gap-2 justify-content-end">
        <button class="btn btn-outline-secondary" onclick="closeModal('classDetailModal')">Close</button>
        <button class="btn btn-primary" onclick="closeModal('classDetailModal'); openModal('admissionModal')">
          <i class="fa-solid fa-user-plus"></i> Apply for this Grade
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Interactive Scripts for Home 2 -->
<script>
// 1. Grade Journey Switcher Data
const gradeData = {
  preprimary: {
    title: "Pre-Primary Foundation (Playgroup, Nursery & KG)",
    meta: ['<i class="fa-solid fa-child"></i> Age: 3 to 5 Years', '<i class="fa-regular fa-clock"></i> Morning Shift: 8:30 AM – 11:30 AM', '<i class="fa-solid fa-users"></i> Ratio: 15:1'],
    desc: "A joyous, play-based environment designed to foster natural curiosity, sensory exploration, phonics, number sense, and social harmony. Every child receives loving personal attention in colorful, child-safe, air-conditioned rooms.",
    features: [
      "Montessori sensory activities & fine motor development.",
      "Bilingual phonetics, storytelling, and joyful rhyme sessions.",
      "Dedicated indoor splash play zone and soft-toy corner.",
      "Regular pediatric health check-ups and parent updates."
    ],
    image: "assets/images/gallery_classroom.jpg",
    caption: "Joyful Learning Atmosphere",
    subcaption: "Safe, caring, and digitally enriched Montessori classroom",
    btnText: "Apply for Pre-Primary"
  },
  primary: {
    title: "Primary Wing (Class 1 to Class 5)",
    meta: ['<i class="fa-solid fa-child"></i> Age: 6 to 10 Years', '<i class="fa-regular fa-clock"></i> Shift: Morning & Day', '<i class="fa-solid fa-book"></i> NCTB Curriculum'],
    desc: "A solid educational launchpad developing foundational fluency in Bengali and English, mental mathematics, scientific curiosity, moral values, and junior computer coding skills.",
    features: [
      "Rigorous bilingual reading, writing, and arithmetic mastery.",
      "Junior computer lab with Scratch coding and typing skills.",
      "Regular science experiments and art exhibition participation.",
      "Primary Talentpool Board Scholarship coaching program."
    ],
    image: "assets/images/gallery_science.jpg",
    caption: "Primary Science & IT Exploration",
    subcaption: "Hands-on curiosity and foundational computer learning",
    btnText: "Apply for Primary Wing"
  },
  junior: {
    title: "Junior School (Class 6 to Class 8)",
    meta: ['<i class="fa-solid fa-child"></i> Age: 11 to 13 Years', '<i class="fa-regular fa-clock"></i> Day Shift: 11:45 AM – 4:30 PM', '<i class="fa-solid fa-robot"></i> STEM Robotics Track'],
    desc: "Experiential and inquiry-driven curriculum aligned with the new National Curriculum framework, nurturing analytical thinking, public speaking, science fair projects, and team sports.",
    features: [
      "STEM robotics club with Arduino programming.",
      "Spoken English, debate club, and creative writing seminars.",
      "Participation in National Math Olympiad and Science Fairs.",
      "Compulsory sports, scouting, and cultural club activities."
    ],
    image: "assets/images/gallery_sports.jpg",
    caption: "Junior Athletics & Team Spirit",
    subcaption: "Active physical education and healthy house competitions",
    btnText: "Apply for Junior School"
  },
  secondary: {
    title: "Secondary School (SSC Class 9 & 10)",
    meta: ['<i class="fa-solid fa-atom"></i> Science & Business Studies', '<i class="fa-regular fa-clock"></i> Day Shift', '<i class="fa-solid fa-award"></i> 100% Board GPA-5 Record'],
    desc: "Intensive academic preparation for the Secondary School Certificate (SSC) examination with specialized laboratories for Physics, Chemistry, Biology, and Higher Mathematics.",
    features: [
      "Dedicated independent laboratories with modern apparatus.",
      "Regular chapter-wise assessments and board-standard model tests.",
      "Special counseling for university engineering/medical foundation.",
      "Proven 100% pass rate with over 98% securing Golden GPA-5.00."
    ],
    image: "assets/images/news_science.jpg",
    caption: "Advanced Science Practical Labs",
    subcaption: "Rigorous scientific investigation adhering to safety standards",
    btnText: "Apply for SSC Program"
  },
  college: {
    title: "Higher Secondary College Wing (HSC Class 11 & 12)",
    meta: ['<i class="fa-solid fa-building-columns"></i> College Code: 2058', '<i class="fa-regular fa-clock"></i> Morning Shift: 8:00 AM – 1:30 PM', '<i class="fa-solid fa-user-graduate"></i> University Entrance Track'],
    desc: "Premier higher secondary education preparing future leaders, doctors, engineers, and entrepreneurs for BUET, Medical colleges, and top public universities.",
    features: [
      "Taught by senior college faculty and renowned textbook authors.",
      "Concurrent university admission test preparation classes.",
      "Golden GPA-5 tuition fee waiver scholarships up to 100%.",
      "Comprehensive digital lecture notes and model question archives."
    ],
    image: "assets/images/varsity_hero.jpg",
    caption: "College Academic Excellence",
    subcaption: "Inspiring future university graduates and global researchers",
    btnText: "Apply for Class XI (HSC)"
  },
  englishversion: {
    title: "English Version Wing (Playgroup to Class 10)",
    meta: ['<i class="fa-solid fa-language"></i> National Curriculum in English', '<i class="fa-regular fa-clock"></i> Morning Shift', '<i class="fa-solid fa-earth-americas"></i> British Council Standards'],
    desc: "Follows the NCTB syllabus conducted entirely in English with British Council spoken and creative writing enrichment, ensuring seamless global competence.",
    features: [
      "Experienced English-medium trained specialized educators.",
      "Cambridge phonetics and language laboratory access.",
      "Strong dual-language cultural identity and moral foundation.",
      "Full eligibility for both Bangladeshi and international universities."
    ],
    image: "assets/images/gallery_cultural.jpg",
    caption: "Bilingual Creative Stage",
    subcaption: "Drama, elocution, and English debating society performances",
    btnText: "Apply for English Version"
  }
};

function switchGradeTab(key, btn) {
  const tabs = document.querySelectorAll('.h2-grade-tab');
  tabs.forEach(t => t.classList.remove('active'));
  btn.classList.add('active');

  const data = gradeData[key];
  if (!data) return;

  document.getElementById('panelTitle').textContent = data.title;
  document.getElementById('panelDesc').textContent = data.desc;
  
  // Update Meta Pills
  const metaContainer = document.getElementById('panelMetaPills');
  metaContainer.innerHTML = data.meta.map(m => `<span class="h2-meta-pill">${m}</span>`).join('');

  // Update Features
  const featContainer = document.getElementById('panelFeatures');
  featContainer.innerHTML = data.features.map(f => `<li><i class="fa-solid fa-circle-check"></i> ${f}</li>`).join('');

  // Update Visual
  document.getElementById('panelImage').src = data.image;
  document.getElementById('panelImageCaption').textContent = data.caption;
}

// 2. Interactive Fee & Scholarship Calculator
function calculateFee() {
  const grade = document.getElementById('calcGrade').value;
  const waiver = document.getElementById('calcWaiver').value;

  const baseFees = {
    pg_kg: { base: 2800, lab: 300 },
    primary: { base: 3000, lab: 400 },
    junior: { base: 3200, lab: 500 },
    ssc_sci: { base: 3500, lab: 600 },
    ssc_biz: { base: 3400, lab: 400 },
    hsc_sci: { base: 4200, lab: 800 },
    hsc_biz: { base: 3800, lab: 500 },
    eng_ver: { base: 4800, lab: 700 }
  };

  const item = baseFees[grade] || { base: 3200, lab: 500 };
  let waiverPercent = 0;

  if (waiver === 'gpa5') waiverPercent = 0.50;
  else if (waiver === 'topper' || waiver === 'olympiad') waiverPercent = 1.00;
  else if (waiver === 'sibling') waiverPercent = 0.25;
  else if (waiver === 'quota') waiverPercent = 0.50;

  const discountAmount = Math.round(item.base * waiverPercent);
  const netTotal = (item.base - discountAmount) + item.lab;

  document.getElementById('resBaseFee').textContent = `৳ ${item.base.toLocaleString()}`;
  document.getElementById('resLabFee').textContent = `৳ ${item.lab.toLocaleString()}`;
  document.getElementById('resWaiver').textContent = waiverPercent > 0 
    ? `${Math.round(waiverPercent * 100)}% (-৳ ${discountAmount.toLocaleString()})`
    : `0% (৳ 0)`;
  document.getElementById('resTotal').textContent = `৳ ${netTotal.toLocaleString()}`;
}

// 3. FAQ Accordion Toggle
function toggleFaq(btn) {
  const parent = btn.closest('.h2-faq-item');
  const allItems = document.querySelectorAll('.h2-faq-item');
  
  allItems.forEach(item => {
    if (item !== parent) {
      item.classList.remove('active');
    }
  });

  parent.classList.toggle('active');
}

// 4. Quick Grade Search
function quickFilterGrades() {
  const query = document.getElementById('gradeQuickSearch').value.toLowerCase().trim();
  if (query.includes('pre') || query.includes('play') || query.includes('nursery') || query.includes('kg')) {
    const btn = document.querySelectorAll('.h2-grade-tab')[0];
    if (btn) switchGradeTab('preprimary', btn);
  } else if (query.includes('primary') || query.includes('class 1') || query.includes('class 5')) {
    const btn = document.querySelectorAll('.h2-grade-tab')[1];
    if (btn) switchGradeTab('primary', btn);
  } else if (query.includes('junior') || query.includes('class 6') || query.includes('class 8')) {
    const btn = document.querySelectorAll('.h2-grade-tab')[2];
    if (btn) switchGradeTab('junior', btn);
  } else if (query.includes('ssc') || query.includes('science') || query.includes('class 9') || query.includes('class 10')) {
    const btn = document.querySelectorAll('.h2-grade-tab')[3];
    if (btn) switchGradeTab('secondary', btn);
  } else if (query.includes('hsc') || query.includes('college') || query.includes('class 11') || query.includes('class 12')) {
    const btn = document.querySelectorAll('.h2-grade-tab')[4];
    if (btn) switchGradeTab('college', btn);
  } else if (query.includes('english')) {
    const btn = document.querySelectorAll('.h2-grade-tab')[5];
    if (btn) switchGradeTab('englishversion', btn);
  }
}

function scrollToJourney() {
  const el = document.getElementById('gradeJourney');
  if (el) el.scrollIntoView({ behavior: 'smooth' });
}

function openClassDetail(title) {
  document.getElementById('classDetailTitle').innerHTML = '<i class="fa-solid fa-book-open text-gold"></i> ' + title;
  document.getElementById('classDetailContent').innerHTML = `
    <div class="p-2">
      <h4 class="mb-2 text-dark">${title}</h4>
      <p class="text-muted mb-3">XYZ Model School &amp; College provides an integrated, learner-centric syllabus following Dhaka Education Board and NCTB curriculum standards with advanced bilingual training.</p>
      
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
            <strong>Bangla &amp; English Version</strong>
          </div>
        </div>
      </div>

      <h5 class="mb-2">Key Highlights:</h5>
      <ul class="program-highlights">
        <li><i class="fa-solid fa-check text-gold"></i> Air-conditioned multimedia smart classroom with 4K touchboards.</li>
        <li><i class="fa-solid fa-check text-gold"></i> STEM robotics, computer coding, and science practical lab access.</li>
        <li><i class="fa-solid fa-check text-gold"></i> Biometric attendance with instant SMS notification to parents.</li>
        <li><i class="fa-solid fa-check text-gold"></i> Dedicated school bus transportation with live GPS tracking.</li>
        <li><i class="fa-solid fa-check text-gold"></i> Regular model tests, term examination coaching, and PTM meetings.</li>
      </ul>
    </div>
  `;
  openModal('classDetailModal');
}
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
