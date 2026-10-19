<?php
// includes/footer.php
if ($currentPage !== 'home3' && $currentPage !== 'home4' && $currentPage !== 'home5' && $currentPage !== 'home6'):
?>
  <!-- Admission Call To Action Banner -->
  <section class="admission-cta-section">
    <div class="container">
      <div class="cta-card">
        <div class="cta-content">
          <span class="cta-tag"><i class="fa-solid fa-graduation-cap"></i> Admission Open 2026-2027</span>
          <h2 class="cta-title">Begin Your Journey Towards Academic Excellence</h2>
          <p class="cta-desc">Join our vibrant academic community nurturing moral leaders, critical thinkers, and future innovators. Limited seats available for Nursery through Class 11.</p>
          <div class="cta-actions">
            <button class="btn btn-primary" onclick="openModal('admissionModal')">
              <i class="fa-solid fa-file-signature"></i> Apply Online Now
            </button>
            <a href="assets/images/about_campus.jpg" download class="btn btn-outline-white">
              <i class="fa-solid fa-download"></i> Download Prospectus
            </a>
          </div>
        </div>
        <div class="cta-badge-circle">
          <span class="cta-circle-num">100%</span>
          <span class="cta-circle-txt">Digital Campus</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Institutional Footer -->
  <footer class="site-footer" id="contactSection">
    <div class="footer-top">
      <div class="container footer-grid">
        
        <!-- Column 1: Institute Brand & Vision -->
        <div class="footer-col col-brand">
          <div class="footer-brand-header">
            <img src="assets/images/logo_crest.svg" alt="Crest Logo" class="footer-logo">
            <div>
              <h3 class="footer-brand-title">XYZ SCHOOL &amp; COLLEGE</h3>
              <p class="footer-brand-sub">ESTD: 1995 • EIIN: 123456</p>
            </div>
          </div>
          <p class="footer-bio">
            A premier educational institution in Dhaka, dedicated to cultivating intellectual curiosity, moral integrity, patriotic values, and global competence through modern pedagogy.
          </p>
          <div class="social-links">
            <a href="#" class="social-btn" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="social-btn" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" class="social-btn" title="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" class="social-btn" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>

        <!-- Column 2: Academic Quick Links -->
        <div class="footer-col">
          <h4 class="footer-heading">Academic Links</h4>
          <ul class="footer-links-list">
            <li><a href="#aboutSection"><i class="fa-solid fa-chevron-right"></i> About Our Heritage</a></li>
            <li><a href="#admissionModal" onclick="openModal('admissionModal')"><i class="fa-solid fa-chevron-right"></i> Admission Guidelines</a></li>
            <li><a href="#calendarSection"><i class="fa-solid fa-chevron-right"></i> Academic Calendar 2026</a></li>
            <li><a href="#noticeSection"><i class="fa-solid fa-chevron-right"></i> Notice &amp; Circulars</a></li>
            <li><a href="#meritSection"><i class="fa-solid fa-chevron-right"></i> Board Result Statistics</a></li>
            <li><a href="#gallerySection"><i class="fa-solid fa-chevron-right"></i> Photo &amp; Video Archive</a></li>
          </ul>
        </div>

        <!-- Column 3: Important Contacts -->
        <div class="footer-col">
          <h4 class="footer-heading">Important Contacts</h4>
          <ul class="footer-contacts-list">
            <li>
              <i class="fa-solid fa-user-tie"></i>
              <div>
                <strong>Principal's Secretariat:</strong>
                <span>+880 2-8951234, Ext. 101</span>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-chalkboard-user"></i>
              <div>
                <strong>Vice-Principal's Desk:</strong>
                <span>+880 2-8951234, Ext. 102</span>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-coins"></i>
              <div>
                <strong>Accounts &amp; Fee Section:</strong>
                <span>+880 1712-345679</span>
              </div>
            </li>
            <li>
              <i class="fa-solid fa-ambulance"></i>
              <div>
                <strong>Campus Medical Helpline:</strong>
                <span>+880 1819-000000</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Column 4: Campus Address & Location -->
        <div class="footer-col">
          <h4 class="footer-heading">Contact Campus</h4>
          <div class="footer-location-card">
            <p><i class="fa-solid fa-building-columns"></i> <strong>Main Campus:</strong></p>
            <p class="address-text">House #12, Road #4, Sector-4, Uttara Model Town, Dhaka-1230, Bangladesh.</p>
            <p><i class="fa-solid fa-phone"></i> +880 1712-345678, +880 2-8950000</p>
            <p><i class="fa-solid fa-envelope"></i> info@xyzschool.edu.bd</p>
            <p><i class="fa-solid fa-clock"></i> Sunday – Thursday: 8:00 AM – 3:30 PM</p>
            
            <a href="https://maps.google.com" target="_blank" class="btn-maps-link">
              <i class="fa-solid fa-map-location-dot"></i> View on Google Maps
            </a>
          </div>
        </div>

      </div>
    </div>

    <!-- Bottom Copyright Bar -->
    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p class="copyright-text">
          &copy; <?php echo date("Y"); ?> <strong>XYZ SCHOOL &amp; COLLEGE</strong>. All Rights Reserved.
          <span class="pipe-sep">|</span> EIIN: 123456 <span class="pipe-sep">|</span> College Code: 7890
        </p>
        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Sitemap</a>
          <a href="#portalModal" onclick="openModal('portalModal')">Staff Portal</a>
        </div>
      </div>
    </div>
  </footer>
  <?php endif; ?>

  <!-- ==================== MODALS ==================== -->

  <!-- Modal 0: Chairman's Full Message -->
  <div class="modal-overlay" id="chairmanModal">
    <div class="modal-container">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <span class="badge-role">Message from the Chairman</span>
          <h3>Dr. M. A. Hashem Chowdhury</h3>
          <p class="modal-subtitle">Chairman, Governing Body, XYZ Model School &amp; College</p>
        </div>
        <button class="modal-close" onclick="closeModal('chairmanModal')">&times;</button>
      </div>
      <div class="modal-body modal-speech-body">
        <div class="speech-author-banner">
          <img src="assets/images/chairman.jpg" alt="Dr. M. A. Hashem Chowdhury" class="speech-avatar">
          <div class="speech-author-info">
            <h4>Dr. M. A. Hashem Chowdhury</h4>
            <p class="author-degrees">Ph.D. in Educational Leadership, Philanthropist</p>
            <p class="author-quote-badge">"Empowering youth with character, discipline, and technology is our highest mission."</p>
          </div>
        </div>
        
        <div class="speech-text">
          <p class="lead-paragraph">
            Assalamu Alaikum. It gives me immense satisfaction to share the glorious vision of XYZ Model School &amp; College.
          </p>
          <p>
            Our school was founded upon the sacred belief that every child carries immense potential. We have created a dynamic campus where traditional ethical values meet modern digital education, STEM robotics, and sports.
          </p>
          <p>
            With our passionate faculty and forward-looking management, our students excel not only in Board examinations with record Golden GPA-5, but also in national Olympiads, debates, and robotics championships. We welcome parents and students to join this extraordinary learning journey.
          </p>
        </div>

        <div class="speech-sign-off">
          <div class="sign-block">
            <span class="signature-font">M. A. Hashem</span>
            <strong>Dr. M. A. Hashem Chowdhury</strong>
            <small>Chairman, Governing Body</small>
          </div>
          <div class="official-seal">
            <i class="fa-solid fa-stamp"></i>
            <span>OFFICIAL SEAL</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 1: Principal's Full Message -->
  <div class="modal-overlay" id="principalModal">
    <div class="modal-container">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <span class="badge-role">Message from the Principal</span>
          <h3>Prof. Md. Motiur Rahman</h3>
          <p class="modal-subtitle">Principal &amp; Chief Academic Advisor, XYZ School &amp; College</p>
        </div>
        <button class="modal-close" onclick="closeModal('principalModal')">&times;</button>
      </div>
      <div class="modal-body modal-speech-body">
        <div class="speech-author-banner">
          <img src="assets/images/principal.jpg" alt="Prof. Md. Motiur Rahman" class="speech-avatar">
          <div class="speech-author-info">
            <h4>Prof. Md. Motiur Rahman</h4>
            <p class="author-degrees">M.Sc (1st Class), B.Ed, M.Ed (DU)</p>
            <p class="author-quote-badge">"Education is the spark that illuminates character and empowers humanity."</p>
          </div>
        </div>
        
        <div class="speech-text">
          <p class="lead-paragraph">
            Bismillahir Rahmanir Rahim. Assalamu Alaikum and warm greetings to all respected guardians, students, well-wishers, and esteemed educators.
          </p>
          <p>
            It is my distinct privilege to welcome you to <strong>XYZ School &amp; College</strong>, an institution deeply committed to nurturing intellectual brilliance, moral conscience, and patriotic zeal. Since our inception in 1995, our persistent pursuit has been to furnish our beloved pupils with an enriching educational atmosphere where modern science, humanities, and moral integrity harmoniously intertwine.
          </p>
          <p>
            In this fast-advancing era of the Fourth Industrial Revolution and Artificial Intelligence, academic excellence alone is not enough. We strive to mold our students into critical thinkers, innovative problem-solvers, and compassionate human beings who stand tall with uncompromising integrity. Our state-of-the-art STEM laboratories, interactive multimedia classrooms, well-stocked library, and vibrant co-curricular activities ensure that every student's latent genius is discovered and nurtured.
          </p>
          <p>
            I extend my heartfelt gratitude to our dedicated faculty members whose tireless devotion continues to produce stellar results in board examinations year after year. To our respected guardians, your unwavering trust and partnership remain our bedrock of inspiration.
          </p>
          <p>
            May Almighty Allah bless our institution and guide our students to shine brightly in the service of our nation and humanity.
          </p>
        </div>

        <div class="speech-sign-off">
          <div class="sign-block">
            <span class="signature-font">Motiur Rahman</span>
            <strong>Prof. Md. Motiur Rahman</strong>
            <small>Principal, XYZ School &amp; College</small>
          </div>
          <div class="official-seal">
            <i class="fa-solid fa-stamp"></i>
            <span>OFFICIAL SEAL</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2: Vice-Principal's Full Message -->
  <div class="modal-overlay" id="vicePrincipalModal">
    <div class="modal-container">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <span class="badge-role role-vp">Message from the Vice-Principal</span>
          <h3>Mrs. Shahana Parveen</h3>
          <p class="modal-subtitle">Vice-Principal &amp; Head of Academic Coordination</p>
        </div>
        <button class="modal-close" onclick="closeModal('vicePrincipalModal')">&times;</button>
      </div>
      <div class="modal-body modal-speech-body">
        <div class="speech-author-banner">
          <img src="assets/images/vice_principal.jpg" alt="Mrs. Shahana Parveen" class="speech-avatar">
          <div class="speech-author-info">
            <h4>Mrs. Shahana Parveen</h4>
            <p class="author-degrees">M.A in English Literature (DU), B.Ed</p>
            <p class="author-quote-badge">"Every child is a universe of potential waiting to be guided with love and discipline."</p>
          </div>
        </div>
        
        <div class="speech-text">
          <p class="lead-paragraph">
            Dear students, parents, and friends of XYZ School &amp; College, greetings of peace and joy.
          </p>
          <p>
            As Vice-Principal, it brings me immense joy to witness the day-to-day blossoming of our students in both academic and creative realms. Our academic framework is methodically designed to impart foundational mastery, conceptual clarity, and self-confidence across all disciplines from primary grades through higher secondary levels.
          </p>
          <p>
            We take special care to create an inclusive, secure, and encouraging environment where each child feels valued and heard. Alongside academic rigor, our debates, cultural festivals, sports tournaments, scouting, and robotics clubs cultivate essential leadership and teamwork traits.
          </p>
          <p>
            Our teachers work closely with guardians through regular parent-teacher conferences, student progress tracking, and personalized mentoring. Together as one cohesive family, we guide our beloved learners toward glorious accomplishments.
          </p>
        </div>

        <div class="speech-sign-off">
          <div class="sign-block">
            <span class="signature-font font-vp">Shahana Parveen</span>
            <strong>Mrs. Shahana Parveen</strong>
            <small>Vice-Principal, XYZ School &amp; College</small>
          </div>
          <div class="official-seal">
            <i class="fa-solid fa-stamp"></i>
            <span>OFFICIAL SEAL</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3: Notice Viewer Modal -->
  <div class="modal-overlay" id="noticeModal">
    <div class="modal-container">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <span class="badge-role" id="modalNoticeCategory">Academic Notice</span>
          <h3 id="modalNoticeTitle">Notice Title</h3>
          <p class="modal-subtitle" id="modalNoticeMeta">Ref No: XYZ/2026/042 | Published: 18 Oct 2026</p>
        </div>
        <button class="modal-close" onclick="closeModal('noticeModal')">&times;</button>
      </div>
      <div class="modal-body">
        <div class="notice-doc-content" id="modalNoticeContent">
          <!-- Populated by JS -->
        </div>
        <div class="modal-actions-bar">
          <button class="btn btn-primary" onclick="alert('Downloading official PDF notice document...')">
            <i class="fa-solid fa-file-pdf"></i> Download Official Notice (PDF)
          </button>
          <button class="btn btn-outline" onclick="window.print()">
            <i class="fa-solid fa-print"></i> Print Notice
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4: Online Admission Application Modal -->
  <div class="modal-overlay" id="admissionModal">
    <div class="modal-container">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <span class="badge-role">Admissions 2026-2027</span>
          <h3>Online Admission Application</h3>
          <p class="modal-subtitle">Fill in the student details to submit admission inquiry</p>
        </div>
        <button class="modal-close" onclick="closeModal('admissionModal')">&times;</button>
      </div>
      <div class="modal-body">
        <form class="admission-form" onsubmit="event.preventDefault(); alert('Application submitted successfully! Our admissions office will contact you via SMS/Phone.'); closeModal('admissionModal');">
          <div class="form-row">
            <div class="form-group">
              <label>Student's Full Name (English)*</label>
              <input type="text" placeholder="e.g. Tanvir Ahmed" required>
            </div>
            <div class="form-group">
              <label>Student's Name (বাংলা)</label>
              <input type="text" placeholder="তানভীর আহমেদ">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Applying For Class / Grade*</label>
              <select required>
                <option value="">-- Select Class --</option>
                <option>Nursery / Play</option>
                <option>KG &amp; Class 1-5</option>
                <option>Class 6 - 8 (Junior Section)</option>
                <option>Class 9 - 10 (Secondary Section)</option>
                <option>Class 11 - Science</option>
                <option>Class 11 - Business Studies</option>
                <option>Class 11 - Humanities</option>
              </select>
            </div>
            <div class="form-group">
              <label>Medium / Shift*</label>
              <select required>
                <option>Bangla Medium (Morning Shift)</option>
                <option>Bangla Medium (Day Shift)</option>
                <option>English Version (Morning Shift)</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Guardian / Father's Name*</label>
              <input type="text" placeholder="Guardian's Name" required>
            </div>
            <div class="form-group">
              <label>Guardian's Mobile Number*</label>
              <input type="tel" placeholder="017XXXXXXXX" pattern="01[3-9][0-9]{8}" required>
            </div>
          </div>
          <div class="form-group">
            <label>Present Residential Address*</label>
            <textarea rows="2" placeholder="Full address in Dhaka/Uttara..." required></textarea>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fa-solid fa-paper-plane"></i> Submit Admission Application
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal 5: Portal Login Modal -->
  <div class="modal-overlay" id="portalModal">
    <div class="modal-container modal-sm">
      <div class="modal-header">
        <div class="modal-title-wrap">
          <span class="badge-role">Digital School Portal</span>
          <h3>Institutional Login</h3>
        </div>
        <button class="modal-close" onclick="closeModal('portalModal')">&times;</button>
      </div>
      <div class="modal-body">
        <form onsubmit="event.preventDefault(); alert('Redirecting to secure portal...'); closeModal('portalModal');">
          <div class="form-group">
            <label>Login As</label>
            <select>
              <option>Student / Guardian</option>
              <option>Faculty / Teacher</option>
              <option>Administration Staff</option>
            </select>
          </div>
          <div class="form-group">
            <label>Student ID / User ID</label>
            <input type="text" placeholder="e.g. STU-2026-8901" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="••••••••" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">
            <i class="fa-solid fa-lock-open"></i> Login to Portal
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal 6: Photo Lightbox Modal -->
  <div class="modal-overlay" id="lightboxModal">
    <div class="modal-container modal-lightbox">
      <button class="modal-close lightbox-close" onclick="closeModal('lightboxModal')">&times;</button>
      <div class="lightbox-img-wrap">
        <img src="" alt="Gallery Preview" id="lightboxImg">
        <div class="lightbox-caption" id="lightboxCaption">Caption here</div>
      </div>
    </div>
  </div>

  <!-- Video Play Modal -->
  <div class="modal-overlay" id="videoModal">
    <div class="modal-container modal-video">
      <button class="modal-close lightbox-close" onclick="closeModal('videoModal')">&times;</button>
      <div class="video-container-wrap">
        <div class="video-mock-player">
          <img src="assets/images/hero_students.jpg" alt="Video cover" class="video-preview-img">
          <div class="video-playing-overlay">
            <i class="fa-solid fa-play"></i>
            <p>Annual Sports Parade &amp; Cultural Extravaganza 2026</p>
            <small>HD Video Tour of XYZ School &amp; College</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Floating Homepage Switcher Pill (Non-intrusive, allows switching between Home 1, 2, 3, 4, 5 easily) -->
  <aside class="df-floating-pill" id="demoPill" aria-label="Demo Homepage Switcher">
    <div class="df-pill-label"><i class="fa-solid fa-layer-group"></i> <span>Homepage:</span></div>
    <div class="df-pill-links">
      <a href="index.php" class="df-link <?php echo ($currentPage === 'home1') ? 'active' : ''; ?>" title="Home 1: XYZ Classic">Home 1 (XYZ)</a>
      <a href="home2.php" class="df-link <?php echo ($currentPage === 'home2') ? 'active' : ''; ?>" title="Home 2: Bento Smart">Home 2 (Smart)</a>
      <a href="home3.php" class="df-link <?php echo ($currentPage === 'home3') ? 'active' : ''; ?>" title="Home 3: Green Valley (গ্রীন ভ্যালি)">Home 3 (গ্রীন ভ্যালি)</a>
      <a href="home4.php" class="df-link <?php echo ($currentPage === 'home4') ? 'active' : ''; ?>" title="Home 4: Rivermount School">Home 4 (Rivermount)</a>
      <a href="home5.php" class="df-link <?php echo ($currentPage === 'home5') ? 'active' : ''; ?>" title="Home 5: Bright Future School">Home 5 (Bright Future)</a>
      <a href="home6.php" class="df-link <?php echo ($currentPage === 'home6') ? 'active' : ''; ?>" title="Home 6: Sunrise International School">Home 6 (Sunrise)</a>
    </div>
  </aside>

  <!-- Back to top button -->
  <button id="backToTop" class="back-to-top" title="Back to top">
    <i class="fa-solid fa-chevron-up"></i>
  </button>

  <!-- JavaScript -->
  <script src="assets/js/lang.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
