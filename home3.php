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
          <img src="assets/images/gv_hero_students.jpg" alt="গ্রীন ভ্যালি স্কুল শিক্ষার্থী" class="h3-hero-photo">
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
        <img src="assets/images/gv_about_building.jpg" alt="বিদ্যালয় ক্যাম্পাস ভবন" class="h3-about-img">
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
<section class="h3-academic-section" id="academicSection">
  <div class="container">
    
    <div class="h3-sec-title-wrap">
      <span class="h3-badge"><i class="fa-solid fa-graduation-cap"></i> শিক্ষা পর্যায়</span>
      <h2 class="h3-heading">আমাদের একাডেমিক পাঠ্যক্রম</h2>
      <p class="h3-subheading">প্রাক-প্রাথমিক থেকে উচ্চ মাধ্যমিক পর্যন্ত যুগোপযোগী আধুনিক শিক্ষা ও মূল্যবোধের সমন্বয়।</p>
    </div>

    <div class="h3-academic-grid">
      
      <!-- Primary -->
      <div class="h3-acad-card">
        <div class="h3-feat-circle feat-circle-blue">
          <i class="fa-solid fa-shapes"></i>
        </div>
        <h4 class="h3-acad-title">প্রাক-প্রাথমিক শাখা</h4>
        <p class="h3-acad-desc">
          প্লে, নার্সারি ও কেজি শ্রেণির শিশুদের জন্য আনন্দময় মন্টেসরি ও বর্ণমালা শিক্ষা।
        </p>
        <span class="h3-acad-pill">শিফট: প্রভাতী শাখা</span>
      </div>

      <!-- Elementary -->
      <div class="h3-acad-card">
        <div class="h3-feat-circle feat-circle-teal">
          <i class="fa-solid fa-pencil"></i>
        </div>
        <h4 class="h3-acad-title">প্রাথমিক শাখা (১ম-৫ম)</h4>
        <p class="h3-acad-desc">
          বাংলা, ইংরেজি, গণিত ও নৈতিক শিক্ষার শক্ত ভিত্তি এবং কম্পিউটার পরিচিতি।
        </p>
        <span class="h3-acad-pill">শিফট: প্রভাতী ও দিবা</span>
      </div>

      <!-- Secondary -->
      <div class="h3-acad-card">
        <div class="h3-feat-circle feat-circle-cyan">
          <i class="fa-solid fa-flask"></i>
        </div>
        <h4 class="h3-acad-title">মাধ্যমিক (এসএসসি ৯-১০)</h4>
        <p class="h3-acad-desc">
          বিজ্ঞান ও ব্যবসায় শিক্ষা শাখা, অত্যাধুনিক বিজ্ঞানাগার এবং বোর্ড মডেল টেস্ট।
        </p>
        <span class="h3-acad-pill">১০০% জিপিএ-৫ রেকর্ড</span>
      </div>

      <!-- College -->
      <div class="h3-acad-card">
        <div class="h3-feat-circle feat-circle-gold">
          <i class="fa-solid fa-building-columns"></i>
        </div>
        <h4 class="h3-acad-title">কলেজ শাখা (এইচএসসি)</h4>
        <p class="h3-acad-desc">
          বিজ্ঞান ও মানবিক বিভাগ, বুয়েট, মেডিকেল ও বিশ্ববিদ্যালয় ভর্তি প্রস্তুতি।
        </p>
        <span class="h3-acad-pill">কলেজ কোড: ২০৫৮</span>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 6. LEADERSHIP MESSAGES (অধ্যক্ষ ও উপাধ্যক্ষের বাণী) ==================== -->
<section class="h3-leadership-section" id="leadershipSection">
  <div class="container">
    
    <div class="h3-sec-title-wrap">
      <span class="h3-badge"><i class="fa-solid fa-user-tie"></i> প্রাতিষ্ঠানিক দিকনির্দেশনা</span>
      <h2 class="h3-heading">শ্রদ্ধেয় অধ্যক্ষ ও উপাধ্যক্ষের বাণী</h2>
      <p class="h3-subheading">শিক্ষার্থীদের সঠিক দিকনির্দেশনা ও ভবিষ্যতের পথে এগিয়ে নেওয়ার অঙ্গীকার।</p>
    </div>

    <div class="h3-leadership-grid">
      
      <!-- Principal Message Card -->
      <div class="h3-lead-card">
        <div class="h3-lead-header">
          <img src="assets/images/principal.jpg" alt="অধ্যক্ষ" class="h3-lead-avatar">
          <div>
            <h4 class="h3-lead-name">প্রফেসর ড. মোহাম্মদ শামসুজ্জামান</h4>
            <p class="h3-lead-role">অধ্যক্ষ, গ্রীন ভ্যালি স্কুল এন্ড কলেজ</p>
          </div>
        </div>
        <div class="h3-lead-quote">
          <p>
            "আমরা বিশ্বাস করি প্রতিটি শিশুই অপার সম্ভাবনাময়। আধুনিক প্রযুক্তিনির্ভর শিক্ষা ও নৈতিক মূল্যবোধের সমন্বয়ে আমরা শিক্ষার্থীদের আদর্শ নাগরিক হিসেবে গড়ে তুলছি।"
          </p>
        </div>
        <button class="h3-lead-btn" onclick="openModal('principalModal')">
          সম্পূর্ণ বক্তব্য পড়ুন <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>

      <!-- Vice-Principal Message Card -->
      <div class="h3-lead-card">
        <div class="h3-lead-header">
          <img src="assets/images/vice_principal.jpg" alt="উপাধ্যক্ষ" class="h3-lead-avatar">
          <div>
            <h4 class="h3-lead-name">বেগম শাহানা পারভীন</h4>
            <p class="h3-lead-role">উপাধ্যক্ষ ও একাডেমিক সমন্বয়কারী</p>
          </div>
        </div>
        <div class="h3-lead-quote">
          <p>
            "শিক্ষার্থীদের নিয়মিত পাঠদান, সৃজনশীল মেধার বিকাশ এবং অভিভাবকদের সাথে নিবিড় যোগাযোগের মাধ্যমে আমরা একটি নিরাপদ ও অনুপ্রেরণামূলক পরিবেশ নিশ্চিত করি।"
          </p>
        </div>
        <button class="h3-lead-btn" onclick="openModal('vicePrincipalModal')">
          সম্পূর্ণ বক্তব্য পড়ুন <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>

    </div>

  </div>
</section>

<!-- ==================== 7. TRUST METRICS STRIP (বিদ্যালয়ের অর্জন) ==================== -->
<section class="h3-stats-strip">
  <div class="container">
    <div class="h3-stats-grid">
      
      <div class="h3-stat-item">
        <h2 class="h3-stat-number">৩,৮৫০+</h2>
        <p class="h3-stat-label">নিয়মিত শিক্ষার্থী</p>
      </div>

      <div class="h3-stat-item">
        <h2 class="h3-stat-number">১৮৫+</h2>
        <p class="h3-stat-label">প্রশিক্ষিত শিক্ষক-শিক্ষিকা</p>
      </div>

      <div class="h3-stat-item">
        <h2 class="h3-stat-number">১০০%</h2>
        <p class="h3-stat-label">বোর্ড পরীক্ষায় পাসের হার</p>
      </div>

      <div class="h3-stat-item">
        <h2 class="h3-stat-number">৯৮.৪%</h2>
        <p class="h3-stat-label">বোর্ডে জিপিএ-৫.০০ অর্জন</p>
      </div>

    </div>
  </div>
</section>

<!-- ==================== 8. PHOTO GALLERY SHOWCASE (ক্যাম্পাস চিত্রশালা) ==================== -->
<section class="h3-gallery-section" id="gallerySection">
  <div class="container">
    
    <div class="h3-sec-title-wrap">
      <span class="h3-badge"><i class="fa-solid fa-images"></i> চিত্রশালা</span>
      <h2 class="h3-heading">আমাদের ক্যাম্পাস জীবন</h2>
      <p class="h3-subheading">শিক্ষার্থীদের প্রতিদিনের পড়াশোনা, ক্রীড়া প্রতিযোগিতা ও সাংস্কৃতিক উদ্দীপনা।</p>
    </div>

    <div class="h3-gallery-grid">
      <div class="h3-gal-frame">
        <img src="assets/images/gallery_classroom.jpg" alt="ক্লাসরুম" class="h3-gal-img">
        <div class="h3-gal-overlay"><span>ডিজিটাল ক্লাসরুম</span></div>
      </div>
      <div class="h3-gal-frame">
        <img src="assets/images/gallery_science.jpg" alt="বিজ্ঞান ল্যাব" class="h3-gal-img">
        <div class="h3-gal-overlay"><span>বিজ্ঞানাগার</span></div>
      </div>
      <div class="h3-gal-frame">
        <img src="assets/images/gallery_sports.jpg" alt="বার্ষিক খেলাধুলা" class="h3-gal-img">
        <div class="h3-gal-overlay"><span>বার্ষিক ক্রীড়া</span></div>
      </div>
      <div class="h3-gal-frame">
        <img src="assets/images/gallery_cultural.jpg" alt="সাংস্কৃতিক উৎসব" class="h3-gal-img">
        <div class="h3-gal-overlay"><span>সাংস্কৃতিক অনুষ্ঠান</span></div>
      </div>
    </div>

  </div>
</section>

<!-- ==================== 9. GREEN VALLEY MOCKUP FOOTER (100% EXACT SAMPLE MATCH) ==================== -->
<footer class="gv-footer" id="contactSection">
  <div class="container">
    <div class="gv-footer-grid">
      <!-- Col 1: Brand -->
      <div class="gv-footer-col">
        <div class="gv-footer-brand">
          <img src="assets/images/gv_logo_exact.png" alt="Green Valley Logo" class="gv-footer-logo">
          <div>
            <h3>গ্রীন ভ্যালি স্কুল এন্ড কলেজ</h3>
            <p>কুষ্টিয়া, বাংলাদেশ</p>
          </div>
        </div>
      </div>

      <!-- Col 2: Contact -->
      <div class="gv-footer-col">
        <h4 class="gv-footer-heading">যোগাযোগ</h4>
        <ul class="gv-contact-list">
          <li><i class="fa-solid fa-location-dot"></i> কুষ্টিয়া, বাংলাদেশ</li>
          <li><i class="fa-solid fa-phone"></i> ০১৭১২-৩৪৫৬০৭</li>
          <li><i class="fa-solid fa-envelope"></i> info@greenvalleyschool.edu.bd</li>
        </ul>
      </div>

      <!-- Col 3: Social Media -->
      <div class="gv-footer-col">
        <h4 class="gv-footer-heading">সোশ্যাল মিডিয়া</h4>
        <div class="gv-social-links">
          <a href="#" class="gv-social-btn" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="gv-social-btn" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="#" class="gv-social-btn" title="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="gv-footer-bottom">
      <p>&copy; ২০২৪ গ্রীন ভ্যালি স্কুল এন্ড কলেজ। সর্বস্বত্ব সংরক্ষিত।</p>
    </div>
  </div>
</footer>

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
