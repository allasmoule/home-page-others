/**
 * XYZ SCHOOL & COLLEGE - Main JavaScript
 * Interactive components: Modals, Calendar, Filters, Counters, Slider
 */

document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initCalendar();
  initNoticeFilter();
  initGalleryFilter();
  initStatsCounter();
  initBackToTop();
  initHeroSlider();
});

/* ==================== 1. MODAL SYSTEM ==================== */
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }
}

// Close when clicking outside modal content
document.addEventListener('click', (e) => {
  if (e.target.classList.contains('modal-overlay')) {
    e.target.classList.remove('active');
    document.body.style.overflow = '';
  }
});

// Close with Escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    document.querySelectorAll('.modal-overlay.active').forEach(modal => {
      modal.classList.remove('active');
    });
    document.body.style.overflow = '';
  }
});

/* ==================== 2. NOTICE DATA & VIEWER ==================== */
const noticesData = {
  1: {
    category: "Examination Notice",
    title: "HSC Examination 2026 Form Fill-up Schedule & Fee Submission Guidelines",
    meta: "Published: 18 Oct 2026 | Ref: XYZ/EXM/2026/89 | Controller of Examinations",
    content: `
      <p><strong>To all eligible students of HSC Batch 2026 (Science, Commerce, Arts):</strong></p>
      <p>This is to inform all concerned students, parents, and guardians that the online form fill-up for the Higher Secondary Certificate (HSC) Examination 2026 under the Board of Intermediate and Secondary Education (BISE), Dhaka will commence from <strong>October 22, 2026</strong> and continue until <strong>November 05, 2026</strong>.</p>
      <div style="background:#f8fafc; padding:12px; border-radius:8px; margin:14px 0; border:1px solid #e2e8f0;">
        <ul style="padding-left:20px; line-height:1.8;">
          <li>Students must have cleared all institutional dues and tuition fees up to October 2026.</li>
          <li>Bring 4 copies of passport-sized color photographs in formal college uniform.</li>
          <li>Original Registration Card and SSC Passing Transcript photocopies must be verified.</li>
          <li>Late submission will incur board fines as per official ministry regulations.</li>
        </ul>
      </div>
      <p>Please contact your respective department coordinators for verification and digital payment slips.</p>
    `
  },
  2: {
    category: "Examination Notice",
    title: "Class 6 to 9 Annual Examination 2026 Routine & Syllabus Coverage",
    meta: "Published: 15 Oct 2026 | Ref: XYZ/ACD/2026/102 | Academic Council",
    content: `
      <p>The Annual Examination 2026 for students of Class 6, 7, 8, and 9 will begin from <strong>November 10, 2026</strong> as per the unified schedule approved by the Academic Council.</p>
      <p>Syllabus coverage will include 100% of the prescribed national curriculum textbooks. Detailed subject-wise time table is available for download in the PDF document below.</p>
      <p>Admit cards will be distributed through class teachers starting from November 02, 2026.</p>
    `
  },
  3: {
    category: "Co-Curricular Event",
    title: "Registration for Inter-School Science, Robotics & Coding Olympiad 2026",
    meta: "Published: 12 Oct 2026 | Ref: XYZ/SCI/2026/34 | XYZ Science Club",
    content: `
      <p>XYZ Science Club proudly announces the 8th Inter-School Science & Innovation Fair to be held on <strong>October 28-29, 2026</strong> at the college auditorium premises.</p>
      <p>Categories: Junior (Classes 6-8), Secondary (Classes 9-10), Senior College (Classes 11-12). Competitions include Project Display, Line Following Robot Race, Mathematical Olympiad, and Quiz Bowl.</p>
      <p>Register your project team online before October 24, 2026 through the club mentor Mrs. Sumaiya Akter.</p>
    `
  },
  4: {
    category: "Admissions Circular",
    title: "Admission Circular for Session 2026-2027 (Playgroup to Class 11)",
    meta: "Published: 10 Oct 2026 | Ref: XYZ/ADM/2026/01 | Admission Committee",
    content: `
      <p>Applications are cordially invited from prospective students for admission into various classes for the upcoming Academic Session 2026-2027.</p>
      <p>Both Bangla Medium and English Version sections are open for Nursery, KG, Classes 1-9, and Class 11 (Science, Business Studies, and Humanities groups).</p>
      <p>Online submission deadline: <strong>November 30, 2026</strong>. Written assessment & viva dates will be communicated via SMS.</p>
    `
  },
  5: {
    category: "Administration Notice",
    title: "Parent-Teacher Conference Schedule for Secondary Section (Classes 8-10)",
    meta: "Published: 05 Oct 2026 | Ref: XYZ/PTC/2026/17 | Vice-Principal Office",
    content: `
      <p>Respected Parents & Guardians,</p>
      <p>A comprehensive Parent-Teacher Conference (PTC) is scheduled for <strong>Saturday, October 25, 2026</strong> from 9:30 AM to 1:30 PM. Respective subject teachers and class mentors will review students' monthly assessment progress, class attendance, and pre-board preparation.</p>
      <p>Your presence is highly valued for the academic growth of your ward.</p>
    `
  }
};

function viewNotice(id) {
  const notice = noticesData[id];
  if (!notice) return;
  
  document.getElementById('modalNoticeCategory').textContent = notice.category;
  document.getElementById('modalNoticeTitle').textContent = notice.title;
  document.getElementById('modalNoticeMeta').textContent = notice.meta;
  document.getElementById('modalNoticeContent').innerHTML = notice.content;
  
  openModal('noticeModal');
}

/* ==================== 3. NOTICE FILTERING ==================== */
function initNoticeFilter() {
  const pills = document.querySelectorAll('#noticeFilterPills .pill-btn');
  const items = document.querySelectorAll('.notice-card-item');

  pills.forEach(pill => {
    pill.addEventListener('click', () => {
      pills.forEach(p => p.classList.remove('active'));
      pill.classList.add('active');

      const filter = pill.getAttribute('data-category');
      items.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = 'flex';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
}

/* ==================== 4. ACADEMIC CALENDAR ==================== */
let currentCalYear = 2026;
let currentCalMonth = 9; // October (0-indexed)

const monthNames = [
  "January", "February", "March", "April", "May", "June", 
  "July", "August", "September", "October", "November", "December"
];

// Special event dates for October 2026
const calendarEvents = {
  "2026-9-2": { type: "holiday", title: "Gandhi Jayanti / Public Holiday" },
  "2026-9-10": { type: "event", title: "Inter-Class Art & Poster Contest" },
  "2026-9-12": { type: "event", title: "Robotics Workshop" },
  "2026-9-18": { type: "today", title: "Today - Form fill-up opens" },
  "2026-9-20": { type: "exam", title: "Unit Test - Science" },
  "2026-9-21": { type: "exam", title: "Unit Test - Commerce" },
  "2026-9-24": { type: "event", title: "Inter-House Debate Finals" },
  "2026-9-28": { type: "event", title: "Science Fair 2026 Inauguration" },
  "2026-9-30": { type: "holiday", title: "Weekend / Preparation Day" }
};

function initCalendar() {
  renderCalendar(currentCalYear, currentCalMonth);
}

function renderCalendar(year, month) {
  const titleEl = document.getElementById('calendarMonthTitle');
  const gridEl = document.getElementById('calendarDaysGrid');
  if (!titleEl || !gridEl) return;

  titleEl.textContent = `${monthNames[month]} ${year}`;
  gridEl.innerHTML = '';

  const firstDay = new Date(year, month, 1).getDay();
  const totalDays = new Date(year, month + 1, 0).getDate();

  // Empty slots for preceding days
  for (let i = 0; i < firstDay; i++) {
    const emptySlot = document.createElement('div');
    emptySlot.className = 'cal-day empty';
    gridEl.appendChild(emptySlot);
  }

  // Days of current month
  for (let day = 1; day <= totalDays; day++) {
    const dayEl = document.createElement('div');
    dayEl.className = 'cal-day';
    dayEl.textContent = day;

    const eventKey = `${year}-${month}-${day}`;
    if (calendarEvents[eventKey]) {
      const ev = calendarEvents[eventKey];
      dayEl.classList.add(ev.type);
      dayEl.title = `${ev.title} (${day} ${monthNames[month]})`;

      const marker = document.createElement('span');
      marker.className = `day-marker marker-${ev.type}`;
      dayEl.appendChild(marker);
    }

    // Friday is weekend in Bangladesh
    const currentDayOfWeek = new Date(year, month, day).getDay();
    if (currentDayOfWeek === 5) { // Friday
      if (!dayEl.classList.contains('today')) {
        dayEl.classList.add('holiday');
      }
    }

    dayEl.addEventListener('click', () => {
      if (calendarEvents[eventKey]) {
        alert(`${day} ${monthNames[month]} ${year}: ${calendarEvents[eventKey].title}`);
      } else {
        alert(`${day} ${monthNames[month]} ${year}: Regular Academic Classes`);
      }
    });

    gridEl.appendChild(dayEl);
  }
}

function prevMonth() {
  currentCalMonth--;
  if (currentCalMonth < 0) {
    currentCalMonth = 11;
    currentCalYear--;
  }
  renderCalendar(currentCalYear, currentCalMonth);
}

function nextMonth() {
  currentCalMonth++;
  if (currentCalMonth > 11) {
    currentCalMonth = 0;
    currentCalYear++;
  }
  renderCalendar(currentCalYear, currentCalMonth);
}

/* ==================== 5. GALLERY FILTER & LIGHTBOX ==================== */
function initGalleryFilter() {
  const filterBtns = document.querySelectorAll('.g-filter-btn');
  const items = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');
      items.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
}

function openLightbox(src, caption) {
  const imgEl = document.getElementById('lightboxImg');
  const capEl = document.getElementById('lightboxCaption');
  if (imgEl && capEl) {
    imgEl.src = src;
    capEl.textContent = caption || 'XYZ School & College Campus Moment';
    openModal('lightboxModal');
  }
}

/* ==================== 6. MOBILE MENU ==================== */
function initMobileMenu() {
  const toggleBtn = document.getElementById('navToggle');
  const navMenu = document.getElementById('navMenu');
  const toggleIcon = document.getElementById('toggleIcon');

  if (toggleBtn && navMenu) {
    toggleBtn.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      if (navMenu.classList.contains('open')) {
        toggleIcon.className = 'fa-solid fa-xmark';
      } else {
        toggleIcon.className = 'fa-solid fa-bars';
      }
    });
  }

  // Handle dropdown toggle on click/hover for seamless interaction
  const dropdownParents = document.querySelectorAll('.nav-item.has-dropdown');
  dropdownParents.forEach(item => {
    const link = item.querySelector('.nav-link');
    if (link) {
      link.addEventListener('click', (e) => {
        const isOpen = item.classList.contains('open');
        dropdownParents.forEach(d => d.classList.remove('open'));
        if (!isOpen) {
          item.classList.add('open');
        }
      });
    }
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.has-dropdown')) {
      dropdownParents.forEach(d => d.classList.remove('open'));
    }
  });
}

/* ==================== 7. STATS NUMBER COUNTER ==================== */
function initStatsCounter() {
  const counters = document.querySelectorAll('.stat-number[data-target]');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.getAttribute('data-target'), 10);
        let count = 0;
        const step = Math.ceil(target / 45);

        const timer = setInterval(() => {
          count += step;
          if (count >= target) {
            el.textContent = target.toLocaleString() + '+';
            clearInterval(timer);
          } else {
            el.textContent = count.toLocaleString() + '+';
          }
        }, 30);

        obs.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
}

/* ==================== 8. BACK TO TOP BUTTON ==================== */
function initBackToTop() {
  const btn = document.getElementById('backToTop');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 350) {
      btn.classList.add('visible');
    } else {
      btn.classList.remove('visible');
    }
  });

  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ==================== 9. HERO SLIDER ==================== */
function initHeroSlider() {
  const dots = document.querySelectorAll('.slider-dots .dot');
  const prevBtn = document.querySelector('.slider-arrow.prev');
  const nextBtn = document.querySelector('.slider-arrow.next');

  if (dots.length) {
    dots.forEach((dot, idx) => {
      dot.addEventListener('click', () => {
        dots.forEach(d => d.classList.remove('active'));
        dot.classList.add('active');
      });
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      // Cycle dots animation
      const activeDot = document.querySelector('.slider-dots .dot.active');
      if (activeDot && activeDot.nextElementSibling) {
        activeDot.classList.remove('active');
        activeDot.nextElementSibling.classList.add('active');
      } else if (dots.length) {
        dots.forEach(d => d.classList.remove('active'));
        dots[0].classList.add('active');
      }
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      const activeDot = document.querySelector('.slider-dots .dot.active');
      if (activeDot && activeDot.previousElementSibling) {
        activeDot.classList.remove('active');
        activeDot.previousElementSibling.classList.add('active');
      } else if (dots.length) {
        dots.forEach(d => d.classList.remove('active'));
        dots[dots.length - 1].classList.add('active');
      }
    });
  }
}

/* ==================== 10. LEADER MODAL HELPER ==================== */
function openLeaderModal(role) {
  if (role === 'chairman') {
    openModal('chairmanModal');
  } else if (role === 'principal') {
    openModal('principalModal');
  } else if (role === 'vice_principal') {
    openModal('vicePrincipalModal');
  }
}

