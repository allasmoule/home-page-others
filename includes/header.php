<?php
// includes/header.php
$currentPage = $currentPage ?? 'home1';
if (!isset($siteTitle)) {
  if ($currentPage === 'home5') {
    $siteTitle = "Bright Future School | Learn Today, Build Tomorrow";
  } elseif ($currentPage === 'home4') {
    $siteTitle = "Rivermount School | Learn, Grow, Lead";
  } elseif ($currentPage === 'home3') {
    $siteTitle = "গ্রীন ভ্যালি মডেল স্কুল এন্ড কলেজ | ভালো শিক্ষা, উজ্জ্বল ভবিষ্যৎ";
  } elseif ($currentPage === 'home2') {
    $siteTitle = "XYZ Model School & College | Smart Digital Education (Modern School Design)";
  } else {
    $siteTitle = "XYZ School & College | Excellence in Education";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $siteTitle; ?></title>
  <meta name="description" content="Rivermount School &amp; Model School &amp; College - Excellence in Education, Strong Values &amp; Holistic Character.">
  <link rel="icon" type="image/svg+xml" href="assets/images/logo_crest.svg">
  
  <!-- Google Fonts: Outfit, Inter & Hind Siliguri for sleek typography -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Hind+Siliguri:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- ==================== CONDITIONAL HEADERS BY PAGE ==================== -->
  <?php if ($currentPage === 'home1' || $currentPage === 'home2'): ?>
  <!-- Top Utilities Bar for Home 1 & 2 -->
  <div class="top-bar">
    <div class="container top-bar-inner">
      <div class="top-bar-left">
        <span class="top-link"><i class="fa-solid fa-bullhorn text-gold"></i> Admission Open for Session 2026-2027! Apply online or visit campus.</span>
      </div>
      <div class="top-bar-right">
        <a href="tel:+8801712345678" class="top-link"><i class="fa-solid fa-phone"></i> +880 1712-345678</a>
        <a href="mailto:info@xyzschool.edu.bd" class="top-link"><i class="fa-solid fa-envelope"></i> info@xyzschool.edu.bd</a>
        <div class="lang-switch">
          <button class="lang-btn active">বাংলা</button>
          <span>/</span>
          <button class="lang-btn">EN</button>
        </div>
        <a href="#portalModal" onclick="openModal('portalModal')" class="portal-btn"><i class="fa-solid fa-user-lock"></i> লগইন / পোর্টাল</a>
      </div>
    </div>
  </div>
  <?php elseif ($currentPage === 'home3'): ?>
  <!-- Green Valley Mockup Top Bar (100% Exact to Uploaded Sample) -->
  <div class="gv-top-bar">
    <div class="container gv-top-bar-inner">
      <div class="gv-top-motto">
        <i class="fa-solid fa-graduation-cap"></i> শিক্ষাই আলো, শিক্ষাই শক্তি
      </div>
      <div class="gv-top-right">
        <span><i class="fa-regular fa-calendar-check"></i> আজ: <?php echo date("d M Y"); ?></span>
        <span class="gv-top-divider">|</span>
        <a href="#portalModal" onclick="openModal('portalModal')">লগইন</a>
        <span class="gv-top-divider">|</span>
        <a href="#admissionModal" onclick="openModal('admissionModal')">রেজিস্ট্রেশন</a>
      </div>
    </div>
  </div>

  <!-- Green Valley Mockup Navbar (100% Exact Single-Line White Header) -->
  <nav class="gv-navbar">
    <div class="container gv-nav-container">
      <a href="home3.php" class="gv-brand">
        <img src="assets/images/logo_crest.svg" alt="Green Valley Logo" class="gv-logo-img">
        <div class="gv-brand-text">
          <h2>গ্রীন ভ্যালি স্কুল এন্ড কলেজ</h2>
          <p>কুষ্টিয়া, বাংলাদেশ</p>
        </div>
      </a>

      <div class="gv-nav-links">
        <a href="home3.php" class="gv-nav-item active">হোম</a>
        <a href="#aboutSection" class="gv-nav-item">আমাদের সম্পর্কে</a>
        <a href="#academicSection" class="gv-nav-item">একাডেমিক</a>
        <a href="#admissionModal" onclick="openModal('admissionModal')" class="gv-nav-item">ভর্তি</a>
        <a href="#noticeSection" class="gv-nav-item">নোটিশ</a>
        <a href="#gallerySection" class="gv-nav-item">গ্যালারী</a>
        <a href="#contactSection" class="gv-nav-item">যোগাযোগ</a>
        <button class="gv-search-btn" onclick="alert('অনুসন্ধান করতে বিষয় লিখুন...');" title="Search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </div>
  </nav>
  <?php endif; ?>

  <?php if ($currentPage === 'home1' || $currentPage === 'home2'): ?>
  <!-- Main School Branding Header -->
  <header class="main-header">
    <div class="container header-container">
      <div class="school-brand-left">
        <a href="<?php echo ($currentPage === 'home3') ? 'home3.php' : (($currentPage === 'home2') ? 'home2.php' : 'index.php'); ?>" class="logo-link">
          <img src="assets/images/logo_crest.svg" alt="School Crest" class="brand-logo-img">
        </a>
      </div>

      <div class="school-brand-center">
        <?php if ($currentPage === 'home3'): ?>
          <h1 class="school-title">গ্রীন ভ্যালি স্কুল এন্ড কলেজ</h1>
          <p class="school-bn-title">GREEN VALLEY MODEL SCHOOL &amp; COLLEGE</p>
          <p class="school-location"><i class="fa-solid fa-location-dot"></i> কুষ্টিয়া, বাংলাদেশ | ঢাকা শিক্ষা বোর্ড অনুমোদিত | EIIN: 134567</p>
          <div class="motto-strip">
            <span class="motto-tag">শিক্ষাই আলো</span>
            <span class="motto-dot">•</span>
            <span class="motto-tag">শিক্ষাই শক্তি</span>
            <span class="motto-dot">•</span>
            <span class="motto-tag">উজ্জ্বল ভবিষ্যৎ</span>
            <span class="motto-dot">•</span>
            <span class="estd-tag">ESTD. 1998</span>
          </div>
        <?php elseif ($currentPage === 'home2'): ?>
          <h1 class="school-title">XYZ MODEL SCHOOL &amp; COLLEGE</h1>
          <p class="school-bn-title">এক্সওয়াইজেড মডেল স্কুল অ্যান্ড কলেজ (স্মার্ট ক্যাম্পাস)</p>
          <p class="school-location"><i class="fa-solid fa-location-dot"></i> House #12, Sector-4, Uttara Model Town, Dhaka-1230 | EIIN: 134567</p>
          <div class="motto-strip">
            <span class="motto-tag">Discipline</span>
            <span class="motto-dot">•</span>
            <span class="motto-tag">Digital Innovation</span>
            <span class="motto-dot">•</span>
            <span class="motto-tag">Moral Character</span>
            <span class="motto-dot">•</span>
            <span class="estd-tag">ESTD. 1995</span>
          </div>
        <?php else: ?>
          <h1 class="school-title">XYZ SCHOOL &amp; COLLEGE</h1>
          <p class="school-bn-title">এক্সওয়াইজেড স্কুল অ্যান্ড কলেজ</p>
          <p class="school-location"><i class="fa-solid fa-location-dot"></i> House #12, Sector-4, Uttara Model Town, Dhaka-1230 | EIIN: 134567</p>
          <div class="motto-strip">
            <span class="motto-tag">Discipline</span>
            <span class="motto-dot">•</span>
            <span class="motto-tag">Knowledge</span>
            <span class="motto-dot">•</span>
            <span class="motto-tag">Morality</span>
            <span class="motto-dot">•</span>
            <span class="estd-tag">ESTD. 1995</span>
          </div>
        <?php endif; ?>
      </div>

      <div class="school-brand-right">
        <div class="secondary-badges">
          <img src="assets/images/logo_board.svg" alt="Dhaka Board Emblem" class="board-logo-img" title="Education Board Recognized">
          <div class="diamond-jubilee-badge">
            <span class="jubilee-num">#1</span>
            <span class="jubilee-txt">Model School</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Sticky Navigation Bar -->
  <nav class="navbar" id="mainNavbar">
    <div class="container nav-container">
      <div class="mobile-brand-compact">
        <img src="assets/images/logo_crest.svg" alt="Logo" class="nav-mini-logo">
        <span class="nav-mini-text"><?php echo ($currentPage === 'home3') ? 'গ্রীন ভ্যালি স্কুল এন্ড কলেজ' : (($currentPage === 'home2') ? 'XYZ Model School &amp; College' : 'XYZ School &amp; College'); ?></span>
      </div>

      <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars" id="toggleIcon"></i>
      </button>

      <ul class="nav-menu" id="navMenu">
        <!-- Home with Interactive Switcher Dropdown (AS REQUESTED) -->
        <li class="nav-item has-dropdown active">
          <a href="javascript:void(0)" class="nav-link">
            <i class="fa-solid fa-house"></i> <?php echo ($currentPage === 'home3') ? 'হোম' : 'Home'; ?> <i class="fa-solid fa-chevron-down drop-arrow"></i>
          </a>
          <ul class="dropdown-menu home-selector-menu">
            <li>
              <a href="index.php" class="<?php echo ($currentPage === 'home1') ? 'active-home-choice' : ''; ?>">
                <i class="fa-solid fa-school"></i>
                <div class="home-choice-info">
                  <strong>Home 1: Classic School &amp; College</strong>
                  <small>Traditional Campus Portal &amp; Board Notice Board</small>
                </div>
                <?php if ($currentPage === 'home1'): ?><span class="badge-current-home">Active</span><?php endif; ?>
              </a>
            </li>
            <li>
              <a href="home2.php" class="<?php echo ($currentPage === 'home2') ? 'active-home-choice' : ''; ?>">
                <i class="fa-solid fa-laptop-code"></i>
                <div class="home-choice-info">
                  <strong>Home 2: Modern Smart School</strong>
                  <small>Bento Grid, Interactive Curriculum &amp; Fee Calculator</small>
                </div>
                <?php if ($currentPage === 'home2'): ?><span class="badge-current-home">Active</span><?php endif; ?>
              </a>
            </li>
            <li>
              <a href="home3.php" class="<?php echo ($currentPage === 'home3') ? 'active-home-choice' : ''; ?>">
                <i class="fa-solid fa-feather-pointed"></i>
                <div class="home-choice-info">
                  <strong>Home 3: Green Valley Style</strong>
                  <small>ভালো শিক্ষা, উজ্জ্বল ভবিষ্যৎ — Feature Cards &amp; Quick Links</small>
                </div>
                <?php if ($currentPage === 'home3'): ?><span class="badge-current-home">Active</span><?php endif; ?>
              </a>
            </li>
            <li>
              <a href="home4.php" class="<?php echo ($currentPage === 'home4') ? 'active-home-choice' : ''; ?>">
                <i class="fa-solid fa-book-open"></i>
                <div class="home-choice-info">
                  <strong>Home 4: Rivermount School</strong>
                  <small>Learn Grow Lead — Minimal Clean Black &amp; White Design</small>
                </div>
                <?php if ($currentPage === 'home4'): ?><span class="badge-current-home">Active</span><?php endif; ?>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#aboutSection" class="nav-link">About Us <i class="fa-solid fa-chevron-down drop-arrow"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#aboutSection"><i class="fa-solid fa-circle-info"></i> At a Glance</a></li>
            <li><a href="#aboutSection"><i class="fa-solid fa-landmark"></i> History &amp; Heritage</a></li>
            <li><a href="#aboutSection"><i class="fa-solid fa-bullseye"></i> Mission &amp; Vision</a></li>
            <li><a href="#committeeSection"><i class="fa-solid fa-sitemap"></i> Governing Body</a></li>
            <li><a href="#facultySection"><i class="fa-solid fa-chalkboard-user"></i> Faculty Members</a></li>
          </ul>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#leadershipSection" class="nav-link">Administration <i class="fa-solid fa-chevron-down drop-arrow"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#principalMsgCard"><i class="fa-solid fa-user-tie"></i> Principal's Desk</a></li>
            <li><a href="#vicePrincipalMsgCard"><i class="fa-solid fa-chalkboard-user"></i> Vice-Principal's Desk</a></li>
            <li><a href="#committeeSection"><i class="fa-solid fa-users-gear"></i> Managing Committee</a></li>
            <li><a href="#facultySection"><i class="fa-solid fa-graduation-cap"></i> Academic Council</a></li>
          </ul>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#meritSection" class="nav-link">Students <i class="fa-solid fa-chevron-down drop-arrow"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#admissionModal" onclick="openModal('admissionModal')"><i class="fa-solid fa-file-signature"></i> Admission Guide</a></li>
            <li><a href="#meritSection"><i class="fa-solid fa-star"></i> Meritorious Achievers</a></li>
            <li><a href="#calendarSection"><i class="fa-solid fa-calendar-days"></i> Academic Calendar</a></li>
            <li><a href="#gallerySection"><i class="fa-solid fa-icons"></i> Co-Curricular Clubs</a></li>
          </ul>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#meritSection" class="nav-link">Exam Results <i class="fa-solid fa-chevron-down drop-arrow"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#meritSection"><i class="fa-solid fa-award"></i> HSC Board Results</a></li>
            <li><a href="#meritSection"><i class="fa-solid fa-medal"></i> SSC Board Results</a></li>
            <li><a href="#meritSection"><i class="fa-solid fa-square-poll-vertical"></i> Internal Term Results</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="#noticeSection" class="nav-link"><i class="fa-solid fa-bullhorn"></i> Notice Board</a></li>
        <li class="nav-item"><a href="#gallerySection" class="nav-link"><i class="fa-solid fa-images"></i> Photo Gallery</a></li>
        <li class="nav-item"><a href="#contactSection" class="nav-link"><i class="fa-solid fa-envelope"></i> Contact</a></li>
        <li class="nav-item has-dropdown">
          <a href="javascript:void(0)" class="nav-link nav-link-special">Student Services <i class="fa-solid fa-chevron-down drop-arrow"></i></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#admissionModal" onclick="openModal('admissionModal')"><i class="fa-solid fa-laptop-code"></i> Online Admission Form</a></li>
            <li><a href="#portalModal" onclick="openModal('portalModal')"><i class="fa-solid fa-user-lock"></i> Student Portal Login</a></li>
            <li><a href="#noticeSection" onclick="openModal('noticeModal')"><i class="fa-solid fa-credit-card"></i> Digital Fee Payment</a></li>
            <li><a href="#calendarSection"><i class="fa-solid fa-id-card"></i> Admit Card &amp; Testimonial</a></li>
            <li><a href="#contactSection"><i class="fa-solid fa-headset"></i> Academic Helpdesk</a></li>
          </ul>
        </li>
      </ul>

      <div class="nav-actions">
        <a href="#admissionModal" onclick="openModal('admissionModal')" class="btn-admission">
          <i class="fa-solid fa-pen-to-square"></i>
          <span>Online Admission</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Live Marquee Ticker -->
  <div class="news-ticker-strip">
    <div class="container ticker-container">
      <div class="ticker-label">
        <span class="ticker-pulse"></span>
        <i class="fa-solid fa-bell"></i> LATEST ANNOUNCEMENT:
      </div>
      <div class="ticker-scroll">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
          🎉 Admissions open for Nursery to Class 11 (Science, Commerce, Arts) for Academic Session 2026-2027. Apply before Nov 15! &nbsp;&nbsp;|&nbsp;&nbsp; 
          📌 HSC Examination 2026 form fill-up circular published on Notice Board. &nbsp;&nbsp;|&nbsp;&nbsp; 
          🏆 Congratulations to our students for achieving 100% GPA 5.00 in Dhaka Board SSC Examinations! &nbsp;&nbsp;|&nbsp;&nbsp; 
          🧪 Inter-School Science &amp; Innovation Fair will be held on 28th October 2026.
        </marquee>
      </div>
    </div>
  </div>
  <?php endif; ?>
