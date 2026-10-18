<?php
// home3.php - Homepage 3: Green Valley Style Bangla School (Based on User's Uploaded Mockup)
$currentPage = 'home3';
$siteTitle = "গ্রীন ভ্যালি মডেল স্কুল এন্ড কলেজ | ভালো শিক্ষা, উজ্জ্বল ভবিষ্যৎ";
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==================== 1. HERO SECTION (ভালো শিক্ষা, উজ্জ্বল ভবিষ্যৎ) ==================== -->
<section class="h3-hero-section">
  <div class="container">
    <div class="h3-hero-grid">
      
      <!-- Left Content Column -->
      <div class="h3-hero-left">
        <div class="h3-sub-tag">
          <i class="fa-solid fa-leaf text-teal"></i> স্বাগতম
        </div>
        
        <h1 class="h3-hero-title">
          ভালো শিক্ষা<br>
          <span>উজ্জ্বল ভবিষ্যৎ</span>
        </h1>
        
        <p class="h3-hero-desc">
          গ্রীন ভ্যালি স্কুল এন্ড কলেজে আমরা শিক্ষার্থীদের সঠিক মূল্যবোধ, আধুনিক শিক্ষা এবং নৈতিকতার সমন্বয়ে গড়ে তুলতে প্রতিশ্রুতিবদ্ধ।
        </p>

        <div class="d-flex gap-3 flex-wrap align-items-center">
          <a href="#aboutSection" class="h3-btn-green">
            আমাদের সম্পর্কে জানুন <i class="fa-solid fa-arrow-right-long"></i>
          </a>
          <button class="btn btn-outline-primary btn-lg" onclick="openModal('admissionModal')" style="font-family:var(--font-bn); font-weight:700;">
            <i class="fa-solid fa-file-pen"></i> অনলাইন ভর্তি আবেদন
          </button>
        </div>
      </div>

      <!-- Right Photo Column -->
      <div class="h3-hero-right">
        <div class="h3-hero-photo-wrap">
          <img src="assets/images/hero_students.jpg" alt="গ্রীন ভ্যালি স্কুল শিক্ষার্থী" class="h3-hero-photo">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 2. 5 FEATURE CARDS ROW (৫টি প্রধান বৈশিষ্ট্য) ==================== -->
<section class="h3-features-strip">
  <div class="container">
    <div class="h3-features-grid">
      
      <!-- Card 1 -->
      <div class="h3-feat-card">
        <div class="h3-feat-circle feat-circle-blue">
          <i class="fa-solid fa-book-open"></i>
        </div>
        <h3 class="h3-feat-title">মানসম্মত শিক্ষা</h3>
        <p class="h3-feat-desc">আধুনিক পাঠ্যক্রমে গড়ে উঠুক সৃজনশীল প্রজন্ম।</p>
      </div>

      <!-- Card 2 -->
      <div class="h3-feat-card">
        <div class="h3-feat-circle feat-circle-teal">
          <i class="fa-solid fa-users"></i>
        </div>
        <h3 class="h3-feat-title">দক্ষ শিক্ষক মণ্ডলী</h3>
        <p class="h3-feat-desc">অভিজ্ঞ ও নিবেদিতপ্রাণ শিক্ষক দ্বারা পাঠদান।</p>
      </div>

      <!-- Card 3 -->
      <div class="h3-feat-card">
        <div class="h3-feat-circle feat-circle-cyan">
          <i class="fa-solid fa-flask"></i>
        </div>
        <h3 class="h3-feat-title">আধুনিক সুবিধা</h3>
        <p class="h3-feat-desc">বিজ্ঞানাগার, লাইব্রেরি ও আইটি সুবিধা।</p>
      </div>

      <!-- Card 4 -->
      <div class="h3-feat-card">
        <div class="h3-feat-circle feat-circle-gold">
          <i class="fa-solid fa-star"></i>
        </div>
        <h3 class="h3-feat-title">সহশিক্ষা কার্যক্রম</h3>
        <p class="h3-feat-desc">খেলাধুলা, সাংস্কৃতিক ও সৃজনশীল কার্যক্রম।</p>
      </div>

      <!-- Card 5 -->
      <div class="h3-feat-card">
        <div class="h3-feat-circle feat-circle-green">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <h3 class="h3-feat-title">নিরাপদ ক্যাম্পাস</h3>
        <p class="h3-feat-desc">শিক্ষার্থীদের জন্য নিরাপদ ও শান্তিময় পরিবেশ।</p>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 3. ABOUT INSTITUTE SECTION (আমাদের সম্পর্কে) ==================== -->
<section class="h3-about-section" id="aboutSection">
  <div class="container">
    <div class="h3-about-grid">
      
      <!-- Left Photo -->
      <div class="h3-about-img-frame">
        <img src="assets/images/about_campus.jpg" alt="বিদ্যালয় ক্যাম্পাস ভবন" class="h3-about-img">
      </div>

      <!-- Right Description -->
      <div class="h3-about-content">
        <span class="h3-about-tag">— আমাদের সম্পর্কে</span>
        <h2 class="h3-about-heading">গ্রীন ভ্যালি স্কুল এন্ড কলেজ</h2>
        <p class="h3-about-text">
          আমরা একটি সুপ্রতিষ্ঠিত শিক্ষা প্রতিষ্ঠান, যেখানে শিক্ষার্থীদেরকে আধুনিক শিক্ষা, নৈতিক মূল্যবোধ এবং সুন্দর জীবনের জন্য প্রয়োজনীয় দক্ষতা অর্জনে সহায়তা করা হয়। আমাদের লক্ষ্য হলো, প্রতিটি শিক্ষার্থীকে আলোকিত মানুষ হিসেবে গড়ে তোলা।
        </p>

        <div class="d-flex gap-3 flex-wrap align-items-center">
          <button class="h3-btn-green" onclick="openAboutModal()">
            বিস্তারিত জানুন <i class="fa-solid fa-arrow-right-long"></i>
          </button>
          <a href="tel:+8801712345678" class="btn btn-outline-secondary btn-lg" style="font-family:var(--font-bn); font-weight:700;">
            <i class="fa-solid fa-phone"></i> যোগাযোগ করুন
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 4. LATEST NOTICES & QUICK LINKS SPLIT (সর্বশেষ নোটিশ ও দ্রুত লিঙ্ক) ==================== -->
<section class="h3-notices-links-section" id="noticeSection">
  <div class="container">
    <div class="h3-nl-grid">
      
      <!-- Left Column: Latest Notices -->
      <div class="h3-notices-col">
        <div class="h3-sec-header">
          <h3 class="h3-sec-title">সর্বশেষ নোটিশ</h3>
          <a href="#noticeSection" class="h3-sec-more" onclick="alert('সকল অফিশিয়াল নোটিশের ডিজিটাল আর্কাইভ খুলছে...')">
            সব নোটিশ দেখুন <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

        <div class="h3-notice-list">
          
          <!-- Notice 1 -->
          <div class="h3-notice-card" onclick="openNoticeModal('২০২৬ শিক্ষাবর্ষের বার্ষিক পরীক্ষার সময়সূচি প্রকাশ সংক্রান্ত', '১৪ অক্টো, ২০২৬', 'পরীক্ষা নিয়ন্ত্রণ শাখা')">
            <div class="h3-date-box">
              <span class="h3-date-day">১৪</span>
              <span class="h3-date-month">অক্টো, ২০২৬</span>
            </div>
            <div class="h3-notice-title">২০২৬ শিক্ষাবর্ষের বার্ষিক পরীক্ষার সময়সূচি প্রকাশ করা হলো।</div>
            <i class="fa-solid fa-chevron-right h3-notice-arrow"></i>
          </div>

          <!-- Notice 2 -->
          <div class="h3-notice-card" onclick="openNoticeModal('নতুন শিক্ষাবর্ষে প্লে থেকে ৯ম শ্রেণিতে ভর্তি কার্যক্রম শুরু', '১০ অক্টো, ২০২৬', 'ভর্তি সেল')">
            <div class="h3-date-box">
              <span class="h3-date-day">১০</span>
              <span class="h3-date-month">অক্টো, ২০২৬</span>
            </div>
            <div class="h3-notice-title">নতুন শিক্ষার্থীদের ভর্তি কার্যক্রম শুরু হয়েছে।</div>
            <i class="fa-solid fa-chevron-right h3-notice-arrow"></i>
          </div>

          <!-- Notice 3 -->
          <div class="h3-notice-card" onclick="openNoticeModal('বিদ্যালয়ের অফিসিয়াল ইউনিফর্ম ও আইডি কার্ড পরিধান সংক্রান্ত', '০৫ অক্টো, ২০২৬', 'শৃঙ্খলা ও নিরাপত্তা সেল')">
            <div class="h3-date-box">
              <span class="h3-date-day">০৫</span>
              <span class="h3-date-month">অক্টো, ২০২৬</span>
            </div>
            <div class="h3-notice-title">স্কুল ইউনিফর্ম সংক্রান্ত গুরুত্বপূর্ণ নোটিশ।</div>
            <i class="fa-solid fa-chevron-right h3-notice-arrow"></i>
          </div>

          <!-- Notice 4 -->
          <div class="h3-notice-card" onclick="openNoticeModal('মাসিক অভিভাবক শিক্ষক মতবিনিময় সভার সংশোধিত সময়সূচি', '২৮ সেপ্টে, ২০২৬', 'অধ্যক্ষের কার্যালয়')">
            <div class="h3-date-box">
              <span class="h3-date-day">২৮</span>
              <span class="h3-date-month">সেপ্টে, ২০২৬</span>
            </div>
            <div class="h3-notice-title">মাসিক অভিভাবক সমাবেশের তারিখ পরিবর্তন করা হলো।</div>
            <i class="fa-solid fa-chevron-right h3-notice-arrow"></i>
          </div>

          <!-- Notice 5 -->
          <div class="h3-notice-card" onclick="openNoticeModal('জাতীয় গণিত ও বিজ্ঞান অলিম্পিয়াড প্রস্তুতিমূলক কর্মশালা', '২০ সেপ্টে, ২০২৬', 'বিজ্ঞান ও রোবোটিক্স ক্লাব')">
            <div class="h3-date-box">
              <span class="h3-date-day">২০</span>
              <span class="h3-date-month">সেপ্টে, ২০২৬</span>
            </div>
            <div class="h3-notice-title">জাতীয় বিজ্ঞান ও রোবোটিক্স অলিম্পিয়াডের প্রস্তুতিমূলক কর্মশালা।</div>
            <i class="fa-solid fa-chevron-right h3-notice-arrow"></i>
          </div>

          <!-- Notice 6 -->
          <div class="h3-notice-card" onclick="openNoticeModal('হাউসভিত্তিক বার্ষিক ক্রীড়া ও সাংস্কৃতিক প্রতিযোগিতার তারিখ ঘোষণা', '১৫ সেপ্টে, ২০২৬', 'শারীরিক শিক্ষা বিভাগ')">
            <div class="h3-date-box">
              <span class="h3-date-day">১৫</span>
              <span class="h3-date-month">সেপ্টে, ২০২৬</span>
            </div>
            <div class="h3-notice-title">হাউসভিত্তিক বার্ষিক ক্রীড়া ও সাংস্কৃতিক প্রতিযোগিতার তারিখ ঘোষণা।</div>
            <i class="fa-solid fa-chevron-right h3-notice-arrow"></i>
          </div>

        </div>
      </div>

      <!-- Right Column: Quick Links (দ্রুত লিঙ্ক) -->
      <div class="h3-links-col">
        <div class="h3-sec-header" style="border-bottom: 2px solid #e2e8f0;">
          <h3 class="h3-sec-title" style="border-left-color: #0f766e;">দ্রুত লিঙ্ক</h3>
        </div>

        <div class="h3-quick-grid">
          
          <!-- Quick Link 1: অনলাইন ভর্তি -->
          <div class="h3-quick-card" onclick="openModal('admissionModal')">
            <i class="fa-solid fa-user-graduate h3-quick-icon"></i>
            <span class="h3-quick-label">অনলাইন ভর্তি</span>
          </div>

          <!-- Quick Link 2: শিক্ষার্থীর লগইন -->
          <div class="h3-quick-card" onclick="openModal('portalModal')">
            <i class="fa-solid fa-arrow-right-to-bracket h3-quick-icon"></i>
            <span class="h3-quick-label">শিক্ষার্থীর লগইন</span>
          </div>

          <!-- Quick Link 3: ফলাফল -->
          <div class="h3-quick-card" onclick="openModal('portalModal')">
            <i class="fa-solid fa-file-circle-check h3-quick-icon"></i>
            <span class="h3-quick-label">ফলাফল</span>
          </div>

          <!-- Quick Link 4: ক্লাস রুটিন -->
          <div class="h3-quick-card" onclick="alert('২০২৬ শিক্ষাবর্ষের সকল শ্রেণির ক্লাস রুটিন ডাউনলোড হচ্ছে...')">
            <i class="fa-regular fa-calendar-days h3-quick-icon"></i>
            <span class="h3-quick-label">ক্লাস রুটিন</span>
          </div>

          <!-- Quick Link 5: নোটিশ বোর্ড -->
          <div class="h3-quick-card" onclick="document.getElementById('noticeSection').scrollIntoView({behavior: 'smooth'})">
            <i class="fa-solid fa-bullhorn h3-quick-icon"></i>
            <span class="h3-quick-label">নোটিশ বোর্ড</span>
          </div>

          <!-- Quick Link 6: যোগাযোগ -->
          <a href="#contactFooter" class="h3-quick-card">
            <i class="fa-solid fa-phone-volume h3-quick-icon"></i>
            <span class="h3-quick-label">যোগাযোগ</span>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 5. ACADEMIC WINGS SECTION (একাডেমিক শাখা ও পাঠ্যক্রম) ==================== -->
<section class="section bg-white">
  <div class="container">
    
    <div class="section-title-wrap text-center mb-5">
      <span class="section-badge"><i class="fa-solid fa-graduation-cap"></i> শিক্ষা পর্যায়</span>
      <h2 class="section-heading" style="font-family:var(--font-bn);">আমাদের একাডেমিক পাঠ্যক্রম</h2>
      <p class="section-subheading" style="font-family:var(--font-bn);">প্রাক-প্রাথমিক থেকে উচ্চ মাধ্যমিক পর্যন্ত যুগোপযোগী আধুনিক শিক্ষা ও মূল্যবোধের সমন্বয়।</p>
    </div>

    <div class="row g-4">
      
      <!-- Primary -->
      <div class="col-lg-3 col-sm-6">
        <div class="card h-100 border p-4 text-center rounded-4 shadow-sm">
          <div class="h3-feat-circle feat-circle-blue mx-auto mb-3">
            <i class="fa-solid fa-shapes"></i>
          </div>
          <h4 style="font-family:var(--font-bn); font-weight:800;" class="mb-2">প্রাক-প্রাথমিক শাখা</h4>
          <p style="font-family:var(--font-bn); font-size:0.92rem; color:#64748b;" class="mb-3">
            প্লে, নার্সারি ও কেজি শ্রেণির শিশুদের জন্য আনন্দময় মন্টেসরি ও বর্ণমালা শিক্ষা।
          </p>
          <span class="badge bg-light text-dark border p-2 mt-auto" style="font-family:var(--font-bn);">শিফট: প্রভাতী শাখা</span>
        </div>
      </div>

      <!-- Elementary -->
      <div class="col-lg-3 col-sm-6">
        <div class="card h-100 border p-4 text-center rounded-4 shadow-sm">
          <div class="h3-feat-circle feat-circle-teal mx-auto mb-3">
            <i class="fa-solid fa-pencil"></i>
          </div>
          <h4 style="font-family:var(--font-bn); font-weight:800;" class="mb-2">প্রাথমিক শাখা (১ম-৫ম)</h4>
          <p style="font-family:var(--font-bn); font-size:0.92rem; color:#64748b;" class="mb-3">
            বাংলা, ইংরেজি, গণিত ও নৈতিক শিক্ষার শক্ত ভিত্তি এবং কম্পিউটার পরিচিতি।
          </p>
          <span class="badge bg-light text-dark border p-2 mt-auto" style="font-family:var(--font-bn);">শিফট: প্রভাতী ও দিবা</span>
        </div>
      </div>

      <!-- Secondary -->
      <div class="col-lg-3 col-sm-6">
        <div class="card h-100 border p-4 text-center rounded-4 shadow-sm">
          <div class="h3-feat-circle feat-circle-cyan mx-auto mb-3">
            <i class="fa-solid fa-flask"></i>
          </div>
          <h4 style="font-family:var(--font-bn); font-weight:800;" class="mb-2">মাধ্যমিক (এসএসসি ৯-১০)</h4>
          <p style="font-family:var(--font-bn); font-size:0.92rem; color:#64748b;" class="mb-3">
            বিজ্ঞান ও ব্যবসায় শিক্ষা শাখা, অত্যাধুনিক বিজ্ঞানাগার এবং বোর্ড মডেল টেস্ট।
          </p>
          <span class="badge bg-light text-dark border p-2 mt-auto" style="font-family:var(--font-bn);">১০০% জিপিএ-৫ রেকর্ড</span>
        </div>
      </div>

      <!-- College -->
      <div class="col-lg-3 col-sm-6">
        <div class="card h-100 border p-4 text-center rounded-4 shadow-sm">
          <div class="h3-feat-circle feat-circle-gold mx-auto mb-3">
            <i class="fa-solid fa-building-columns"></i>
          </div>
          <h4 style="font-family:var(--font-bn); font-weight:800;" class="mb-2">কলেজ শাখা (এইচএসসি)</h4>
          <p style="font-family:var(--font-bn); font-size:0.92rem; color:#64748b;" class="mb-3">
            বিজ্ঞান ও মানবিক বিভাগ, বুয়েট, মেডিকেল ও বিশ্ববিদ্যালয় ভর্তি প্রস্তুতি।
          </p>
          <span class="badge bg-light text-dark border p-2 mt-auto" style="font-family:var(--font-bn);">কলেজ কোড: ২০৫৮</span>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 6. LEADERSHIP MESSAGES (অধ্যক্ষ ও উপাধ্যক্ষের বাণী) ==================== -->
<section class="section" style="background:#f8fafc;">
  <div class="container">
    
    <div class="section-title-wrap text-center mb-5">
      <span class="section-badge"><i class="fa-solid fa-user-tie"></i> প্রাতিষ্ঠানিক দিকনির্দেশনা</span>
      <h2 class="section-heading" style="font-family:var(--font-bn);">শ্রদ্ধেয় অধ্যক্ষ ও উপাধ্যক্ষের বাণী</h2>
      <p class="section-subheading" style="font-family:var(--font-bn);">শিক্ষার্থীদের সঠিক দিকনির্দেশনা ও ভবিষ্যতের পথে এগিয়ে নেওয়ার অঙ্গীকার।</p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- Principal Message Card -->
      <div class="col-lg-5 col-md-6">
        <div class="card h-100 border p-4 rounded-4 shadow-sm bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <img src="assets/images/principal.jpg" alt="অধ্যক্ষ" class="rounded-circle border" style="width:75px; height:75px; object-fit:cover;">
            <div>
              <h4 style="font-family:var(--font-bn); font-weight:800;" class="mb-1">প্রফেসর ড. মোহাম্মদ শামসুজ্জামান</h4>
              <p class="text-muted small mb-0" style="font-family:var(--font-bn);">অধ্যক্ষ, গ্রীন ভ্যালি স্কুল এন্ড কলেজ</p>
            </div>
          </div>
          <div class="p-3 bg-light rounded-3 mb-3" style="border-left: 3px solid #0f766e;">
            <p style="font-family:var(--font-bn); font-size:0.95rem; color:#475569; font-style:italic;" class="mb-0">
              "আমরা বিশ্বাস করি প্রতিটি শিশুই অপার সম্ভাবনাময়। আধুনিক প্রযুক্তিনির্ভর শিক্ষা ও নৈতিক মূল্যবোধের সমন্বয়ে আমরা শিক্ষার্থীদের আদর্শ নাগরিক হিসেবে গড়ে তুলছি।"
            </p>
          </div>
          <button class="btn btn-outline-secondary btn-sm mt-auto" onclick="openModal('principalModal')" style="font-family:var(--font-bn);">
            সম্পূর্ণ বক্তব্য পড়ুন <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>

      <!-- Vice-Principal Message Card -->
      <div class="col-lg-5 col-md-6">
        <div class="card h-100 border p-4 rounded-4 shadow-sm bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <img src="assets/images/vice_principal.jpg" alt="উপাধ্যক্ষ" class="rounded-circle border" style="width:75px; height:75px; object-fit:cover;">
            <div>
              <h4 style="font-family:var(--font-bn); font-weight:800;" class="mb-1">বেগম শাহানা পারভীন</h4>
              <p class="text-muted small mb-0" style="font-family:var(--font-bn);">উপাধ্যক্ষ ও একাডেমিক সমন্বয়কারী</p>
            </div>
          </div>
          <div class="p-3 bg-light rounded-3 mb-3" style="border-left: 3px solid #0f766e;">
            <p style="font-family:var(--font-bn); font-size:0.95rem; color:#475569; font-style:italic;" class="mb-0">
              "শিক্ষার্থীদের নিয়মিত পাঠদান, সৃজনশীল মেধার বিকাশ এবং অভিভাবকদের সাথে নিবিড় যোগাযোগের মাধ্যমে আমরা একটি নিরাপদ ও অনুপ্রেরণামূলক পরিবেশ নিশ্চিত করি।"
            </p>
          </div>
          <button class="btn btn-outline-secondary btn-sm mt-auto" onclick="openModal('vicePrincipalModal')" style="font-family:var(--font-bn);">
            সম্পূর্ণ বক্তব্য পড়ুন <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 7. TRUST METRICS STRIP (বিদ্যালয়ের অর্জন) ==================== -->
<section class="section py-5 bg-white border-top border-bottom">
  <div class="container">
    <div class="row g-4 text-center">
      
      <div class="col-md-3 col-6">
        <h2 style="font-family:var(--font-heading); font-size:2.4rem; font-weight:800; color:#0f766e;">৩,৮৫০+</h2>
        <p style="font-family:var(--font-bn); font-size:1.05rem; font-weight:700; color:#475569;">নিয়মিত শিক্ষার্থী</p>
      </div>

      <div class="col-md-3 col-6">
        <h2 style="font-family:var(--font-heading); font-size:2.4rem; font-weight:800; color:#0f766e;">১৮৫+</h2>
        <p style="font-family:var(--font-bn); font-size:1.05rem; font-weight:700; color:#475569;">প্রশিক্ষিত শিক্ষক-শিক্ষিকা</p>
      </div>

      <div class="col-md-3 col-6">
        <h2 style="font-family:var(--font-heading); font-size:2.4rem; font-weight:800; color:#0f766e;">১০০%</h2>
        <p style="font-family:var(--font-bn); font-size:1.05rem; font-weight:700; color:#475569;">বোর্ড পরীক্ষায় পাসের হার</p>
      </div>

      <div class="col-md-3 col-6">
        <h2 style="font-family:var(--font-heading); font-size:2.4rem; font-weight:800; color:#0f766e;">৯৮.৪%</h2>
        <p style="font-family:var(--font-bn); font-size:1.05rem; font-weight:700; color:#475569;">বোর্ডে জিপিএ-৫.০০ অর্জন</p>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 8. PHOTO GALLERY SHOWCASE (ক্যাম্পাস চিত্রশালা) ==================== -->
<section class="section" style="background:#f8fafc;">
  <div class="container">
    
    <div class="section-title-wrap text-center mb-5">
      <span class="section-badge"><i class="fa-solid fa-images"></i> চিত্রশালা</span>
      <h2 class="section-heading" style="font-family:var(--font-bn);">আমাদের ক্যাম্পাস জীবন</h2>
      <p class="section-subheading" style="font-family:var(--font-bn);">শিক্ষার্থীদের প্রতিদিনের পড়াশোনা, ক্রীড়া প্রতিযোগিতা ও সাংস্কৃতিক উদ্দীপনা।</p>
    </div>

    <div class="row g-3">
      <div class="col-md-3 col-sm-6">
        <div class="rounded-4 overflow-hidden border shadow-sm" style="height:210px;">
          <img src="assets/images/gallery_classroom.jpg" alt="ক্লাসরুম" class="w-100 h-100" style="object-fit:cover;">
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="rounded-4 overflow-hidden border shadow-sm" style="height:210px;">
          <img src="assets/images/gallery_science.jpg" alt="বিজ্ঞান ল্যাব" class="w-100 h-100" style="object-fit:cover;">
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="rounded-4 overflow-hidden border shadow-sm" style="height:210px;">
          <img src="assets/images/gallery_sports.jpg" alt="বার্ষিক খেলাধুলা" class="w-100 h-100" style="object-fit:cover;">
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="rounded-4 overflow-hidden border shadow-sm" style="height:210px;">
          <img src="assets/images/gallery_cultural.jpg" alt="সাংস্কৃতিক উৎসব" class="w-100 h-100" style="object-fit:cover;">
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ==================== 9. ADMISSION CTA BANNER ==================== -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);" id="contactFooter">
  <div class="container text-center">
    <div style="max-width:760px; margin:0 auto;">
      <span class="badge mb-3 px-3 py-2" style="background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); font-family:var(--font-bn); color:#fde047;">
        ভর্তি চলছে ২০২৬-২০২৭ সেশন
      </span>
      <h2 style="font-family:var(--font-bn); font-size:2.4rem; font-weight:800;" class="mb-3">
        আপনার সন্তানের আলোকিত ভবিষ্যৎ গড়তে আজই ভর্তি করুন
      </h2>
      <p style="font-family:var(--font-bn); font-size:1.1rem; color:#cbd5e1;" class="mb-4">
        প্লে-গ্রুপ থেকে ৯ম শ্রেণি এবং একাদশ শ্রেণিতে (এইচএসসি) সীমিত আসনে ভর্তি চলছে।
      </p>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <button class="h3-btn-green" onclick="openModal('admissionModal')">
          <i class="fa-solid fa-file-signature"></i> অনলাইন ভর্তি ফরম পূরণ
        </button>
        <a href="tel:+8801712345678" class="btn btn-outline-light btn-lg" style="font-family:var(--font-bn); font-weight:700;">
          <i class="fa-solid fa-phone"></i> হটলাইন: ০১৭১২-৩৪৫৬৭৮
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Custom Notice Modal Handler -->
<script>
function openNoticeModal(title, date, dept) {
  document.getElementById('modalNoticeTitle').textContent = title;
  document.getElementById('modalNoticeCategory').textContent = dept || 'একাডেমিক নোটিশ';
  document.getElementById('modalNoticeMeta').textContent = `প্রকাশের তারিখ: ${date} | স্মারক নং: GV/2026/089`;
  document.getElementById('modalNoticeContent').innerHTML = `
    <div class="p-3">
      <h4 class="mb-3" style="font-family:var(--font-bn); color:#0f766e;">${title}</h4>
      <p style="font-family:var(--font-bn); font-size:1.05rem; line-height:1.75; color:#334155;">
        এতদ্বারা গ্রীন ভ্যালি স্কুল এন্ড কলেজের সকল শিক্ষার্থী, শিক্ষক-শিক্ষিকা ও সম্মানিত অভিভাবকদের অবগতির জন্য জানানো যাচ্ছে যে, উক্ত বিষয়ে বিদ্যালয় কর্তৃপক্ষের সিদ্ধান্ত মোতাবেক যাবতীয় কার্যক্রম পরিচালিত হবে। সংশ্লিষ্ট সকলকে প্রয়োজনীয় প্রস্তুতি গ্রহণের জন্য অনুরোধ করা হলো।
      </p>
      <div class="p-3 bg-light rounded border mt-3" style="font-family:var(--font-bn); font-size:0.95rem;">
        <strong>প্রয়োজনে যোগাযোগ:</strong> একাডেমিক সেল, গ্রীন ভ্যালি স্কুল এন্ড কলেজ, কুষ্টিয়া।<br>
        <strong>ফোন:</strong> +৮৮০ ১৭১২-৩৪৫৬৭৮ | <strong>ইমেইল:</strong> info@xyzschool.edu.bd
      </div>
    </div>
  `;
  openModal('noticeModal');
}

function openAboutModal() {
  document.getElementById('classDetailTitle').innerHTML = '<i class="fa-solid fa-school text-gold"></i> প্রতিষ্ঠান পরিচিতি';
  document.getElementById('classDetailContent').innerHTML = `
    <div class="p-3" style="font-family:var(--font-bn);">
      <h4 class="mb-2" style="color:#0f766e;">গ্রীন ভ্যালি স্কুল এন্ড কলেজ</h4>
      <p class="text-muted mb-3">কুষ্টিয়া, বাংলাদেশ | স্থাপিত: ১৯৯৮ | EIIN: ১৩৪৫৬৭</p>
      <p style="font-size:1.05rem; line-height:1.7; color:#334155;">
        গ্রীন ভ্যালি স্কুল এন্ড কলেজ কুষ্টিয়া তথা দেশের একটি অন্যতম শীর্ষস্থানীয় মডেল বিদ্যাপীঠ। ১৯৯৮ সালে প্রতিষ্ঠার পর থেকে প্রতিষ্ঠানটি শিক্ষার্থীদের সার্বিক মানসিক, বুদ্ধিবৃত্তিক ও নৈতিক বিকাশ সাধনে অগ্রণী ভূমিকা পালন করে আসছে। এখানে বিজ্ঞানসম্মত পদ্ধতিতে পাঠদান, সার্বক্ষণিক নিরাপত্তা ও সহশিক্ষা কার্যক্রমের মাধ্যমে প্রতিটি শিক্ষার্থীকে সুনাগরিক হিসেবে গড়ে তোলা হয়।
      </p>
      <h5 class="mt-3 mb-2">আমাদের বিশেষ সুবিধাসমূহ:</h5>
      <ul class="program-highlights">
        <li><i class="fa-solid fa-check text-gold"></i> মাল্টিমিডিয়া ও শীতাতপ নিয়ন্ত্রিত ডিজিটাল ক্লাসরুম।</li>
        <li><i class="fa-solid fa-check text-gold"></i> অত্যাধুনিক পদার্থ, রসায়ন, জীববিজ্ঞান ও আইসিটি ল্যাব।</li>
        <li><i class="fa-solid fa-check text-gold"></i> জিপিএস নিয়ন্ত্রিত নিজস্ব স্কুল বাস সার্ভিস।</li>
        <li><i class="fa-solid fa-check text-gold"></i> সিসিটিভি ক্যামেরা নিয়ন্ত্রিত সুরক্ষিত ক্যাম্পাস ও বায়োমেট্রিক এসএমএস।</li>
      </ul>
    </div>
  `;
  openModal('classDetailModal');
}
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
