/**
 * Language Engine for Multi-Homepage Educational Portal
 * Supports instant, seamless bilingual translation (English <-> Bangla)
 * across Home 1, Home 2, Home 3, Home 4, Home 5, and Home 6.
 */

(function () {
  'use strict';

  // Comprehensive Dictionary: English -> Bengali
  const enToBn = {
    // Brand & Common Identifiers
    "XYZ SCHOOL & COLLEGE": "এক্সওয়াইজেড স্কুল অ্যান্ড কলেজ",
    "XYZ School & College": "এক্সওয়াইজেড স্কুল অ্যান্ড কলেজ",
    "XYZ MODEL SCHOOL & COLLEGE": "এক্সওয়াইজেড মডেল স্কুল অ্যান্ড কলেজ",
    "XYZ Model School & College": "এক্সওয়াইজেড মডেল স্কুল অ্যান্ড কলেজ",
    "Rivermount School": "রিভারমাউন্ট স্কুল",
    "Bright Future School": "ব্রাইট ফিউচার স্কুল",
    "Sunrise International School": "সানরাইজ ইন্টারন্যাশনাল স্কুল",
    "Green Valley School & College": "গ্রীন ভ্যালি স্কুল এন্ড কলেজ",
    "GREEN VALLEY MODEL SCHOOL & COLLEGE": "গ্রীন ভ্যালি মডেল স্কুল এন্ড কলেজ",
    "Knowledge Builds Character": "জ্ঞানই চরিত্র গঠন করে",
    "Learn Today, Build Tomorrow.": "আজকের শিক্ষা, আগামী দিনের ভিত্তি।",
    "Learn, Grow, Lead": "শিক্ষা, বিকাশ, নেতৃত্ব",
    "Discipline • Knowledge • Better Future": "শৃঙ্খলা • জ্ঞান • সুন্দর ভবিষ্যৎ",

    // Navigation Items
    "Home": "হোম",
    "About Us": "আমাদের সম্পর্কে",
    "About": "আমাদের সম্পর্কে",
    "Academics": "একাডেমিক",
    "Admission": "ভর্তি",
    "Notice": "নোটিশ",
    "Notice Board": "নোটিশ বোর্ড",
    "Gallery": "গ্যালারী",
    "Photo Gallery": "ছবি গ্যালারী",
    "Contact": "যোগাযোগ",
    "Contact Us": "যোগাযোগ করুন",
    "Student Services": "শিক্ষার্থী সেবা",
    "Student Login": "শিক্ষার্থী লগইন",
    "Administration": "প্রশাসন",
    "Students": "শিক্ষার্থীবৃন্দ",
    "Exam Results": "পরীক্ষার ফলাফল",
    "At a Glance": "এক নজরে",
    "History & Heritage": "ইতিহাস ও ঐতিহ্য",
    "Mission & Vision": "লক্ষ্য ও উদ্দেশ্য",
    "Governing Body": "পরিচালনা পর্ষদ",
    "Faculty Members": "শিক্ষক মণ্ডলী",
    "Principal's Desk": "অধ্যক্ষের বাণী",
    "Vice-Principal's Desk": "উপাধ্যক্ষের বাণী",
    "Managing Committee": "ব্যবস্থাপনা কমিটি",
    "Academic Council": "একাডেমিক কাউন্সিল",
    "Admission Guide": "ভর্তি নির্দেশিকা",
    "Meritorious Achievers": "কৃতি শিক্ষার্থীবৃন্দ",
    "Academic Calendar": "একাডেমিক ক্যালেন্ডার",
    "Co-Curricular Clubs": "সহশিক্ষা ক্লাব",
    "HSC Board Results": "এইচএসসি ফলাফল",
    "SSC Board Results": "এসএসসি ফলাফল",
    "Internal Term Results": "অভ্যন্তরীণ ফলাফল",
    "Online Admission Form": "অনলাইন ভর্তি ফরম",
    "Student Portal Login": "শিক্ষার্থী পোর্টাল লগইন",
    "Digital Fee Payment": "ডিজিটাল ফি প্রদান",
    "Admit Card & Testimonial": "প্রবেশপত্র ও প্রশংসাপত্র",
    "Academic Helpdesk": "একাডেমিক হেল্পডেস্ক",
    "Online Admission": "অনলাইন ভর্তি",
    "Quick Links": "প্রয়োজনীয় লিংক",
    "Newsletter": "নিউজলেটার",

    // Top Bar & Utilities
    "Admission Open for Session 2026-2027! Apply online or visit campus.": "২০২৬-২০২৭ শিক্ষাবর্ষে ভর্তি চলছে! অনলাইনে আবেদন করুন অথবা ক্যাম্পাসে যোগাযোগ করুন।",
    "LATEST ANNOUNCEMENT:": "সর্বশেষ ঘোষণা:",
    "Login / Portal": "লগইন / পোর্টাল",
    "Login": "লগইন",
    "Registration": "রেজিস্ট্রেশন",
    "Today:": "আজ:",
    "Discipline": "শৃঙ্খলা",
    "Knowledge": "জ্ঞান",
    "Morality": "নৈতিকতা",
    "Digital Innovation": "ডিজিটাল উদ্ভাবন",
    "Moral Character": "নৈতিক চরিত্র",
    "ESTD. 1995": "স্থাপিত ১৯৯৫",
    "ESTD. 1998": "স্থাপিত ১৯৯৮",
    "ESTD: 1995 • EIIN: 123456": "স্থাপিত: ১৯৯৫ • EIIN: ১২৩৪৫৬",
    "EIIN: 134567": "EIIN: ১৩৪৫৬৭",
    "#1 Model School": "#১ মডেল স্কুল",
    "Model School": "মডেল স্কুল",
    "Dhaka Board Recognized": "ঢাকা শিক্ষা বোর্ড অনুমোদিত",

    // Common Buttons & CTAs
    "Apply Now": "আবেদন করুন",
    "Apply Online Now": "অনলাইনে আবেদন করুন",
    "Apply for Admission": "ভর্তির আবেদন করুন",
    "Apply for School Admission": "স্কুলে ভর্তির আবেদন করুন",
    "Apply for Admission →": "ভর্তির আবেদন করুন →",
    "Explore Campus": "ক্যাম্পাস পরিচিতি",
    "Explore Our School →": "আমাদের বিদ্যালয় পরিচিতি →",
    "Explore Grades": "শ্রেণি কার্যক্রম দেখুন",
    "Explore Program": "বিস্তারিত জানুন",
    "Read More": "বিস্তারিত পড়ুন",
    "Read More →": "বিস্তারিত পড়ুন →",
    "Read Full Story": "সম্পূর্ণ পড়ুন",
    "Read Full Story →": "সম্পূর্ণ পড়ুন →",
    "Learn More": "আরও জানুন",
    "Learn More About Us →": "আমাদের সম্পর্কে জানুন →",
    "View All": "সব দেখুন",
    "View All →": "সব দেখুন →",
    "View All Photos": "সব ছবি দেখুন",
    "View All Notices": "সব নোটিশ দেখুন",
    "All Notice": "সকল নোটিশ",
    "All Teachers →": "সকল শিক্ষকবৃন্দ →",
    "All Achievements →": "সকল অর্জনসমূহ →",
    "Download Prospectus": "প্রসপেক্টাস ডাউনলোড",
    "Watch Video": "ভিডিও দেখুন",
    "View Campus Tour": "ক্যাম্পাস ট্যুর দেখুন",
    "School Tour (60s)": "ক্যাম্পাস ভিডিও (৬০ সেকেন্ড)",
    "Fee & Waiver Calculator": "ফি ও ছাড় ক্যালকুলেটর",
    "Calculate Net Fee": "নিট ফি হিসাব করুন",
    "Login to Portal": "পোর্টালে প্রবেশ করুন",
    "Submit Admission Application": "ভর্তি আবেদন জমা দিন",
    "Browse Notice Archive →": "নোটিশ আর্কাইভ দেখুন →",

    // Hero Sections
    "Welcoming Academic Session 2026-2027": "স্বাগতম শিক্ষাবর্ষ ২০২৬-২০২৭",
    "Welcome to": "স্বাগতম —",
    "Empowering curious minds, cultivating leadership, and shaping tomorrow's innovators in a modern learning environment.": "মেধার বিকাশ, নেতৃত্বের উন্মেষ এবং আধুনিক শিক্ষার পরিবেশে আগামীর উদ্ভাবক গড়ে তোলার অঙ্গীকার।",
    "Admissions Open 2026-2027: Playgroup to Class XI (HSC)": "ভর্তি চলছে ২০২৬-২০২৭: প্লেগ্রুপ থেকে একাদশ শ্রেণি (এইচএসসি)",
    "Nurturing Character, Empowering Minds,": "নৈতিক চরিত্র গঠন, মেধার বিকাশ,",
    "Inspiring The Future.": "উজ্জ্বল ভবিষ্যতের অনুপ্রেরণা।",
    "XYZ Model School & College delivers a world-class, learner-centric, and future-ready education. From joyful Montessori foundations to board-topping SSC & HSC college streams with smart classrooms and STEM robotics.": "এক্সওয়াইজেড মডেল স্কুল অ্যান্ড কলেজ বিশ্বমানের, শিক্ষার্থীকেন্দ্রীক ও আধুনিক শিক্ষা প্রদান করে। আনন্দময় মন্টেসরি শিক্ষা থেকে শুরু করে বোর্ড সেরা এসএসসি ও এইচএসসি ফলাফল এবং রোবোটিক্স ল্যাব।",
    "WELCOME TO RIVERMOUNT SCHOOL": "রিভারমাউন্ট স্কুলে স্বাগতম",
    "Learn": "শিক্ষা",
    "Grow": "বিকাশ",
    "Lead": "নেতৃত্ব",
    "We prepare students for a brighter tomorrow with quality education, strong values and a supportive learning environment.": "গুণগত শিক্ষা, নৈতিক মূল্যবোধ এবং আন্তরিক পরিবেশে আমরা শিক্ষার্থীদের উজ্জ্বল ভবিষ্যতের জন্য প্রস্তুত করি।",
    "WELCOME TO BRIGHT FUTURE SCHOOL": "ব্রাইট ফিউচার স্কুলে স্বাগতম",
    "A Journey of Excellence & Values": "শ্রেষ্ঠত্ব ও মূল্যবোধের এক অনন্য যাত্রা",
    "Empowering young learners with modern education, strong ethical foundations, and inspiring creativity for tomorrow.": "আধুনিক শিক্ষা, দৃঢ় নৈতিক ভিত্তি এবং অনুপ্রেরণামূলক সৃজনশীলতায় তরুণ প্রজন্মকে আগামীর জন্য প্রস্তুত করা।",
    "PRINCIPAL'S MESSAGE": "অধ্যক্ষের বাণী",
    "CHAIRMAN'S DESK": "সভাপতির বাণী",
    "Inspiring Excellence, Discipline & Character": "উৎকর্ষ, শৃঙ্খলা ও চরিত্র গঠনের অনুপ্রেরণা",
    "Welcome to Sunrise International School. We are dedicated to providing a nurturing environment where academic rigor meets moral integrity.": "সানরাইজ ইন্টারন্যাশনাল স্কুলে স্বাগতম। আমরা এমন একটি চমৎকার পরিবেশ প্রদানে প্রতিশ্রুতিবদ্ধ যেখানে পড়াশোনার মান ও নৈতিকতার অপূর্ব মেলবন্ধন ঘটে।",

    // Stats & Ribbons
    "BOARD & NATIONAL HONORS": "বোর্ড ও জাতীয় স্বীকৃতি",
    "in Dhaka Division (Board Evaluation)": "ঢাকা বিভাগে (বোর্ড মূল্যায়ন অনুযায়ী)",
    "100% Pass Rate": "১০০% পাসের হার",
    "in SSC & HSC Board Examinations": "এসএসসি ও এইচএসসি বোর্ড পরীক্ষায়",
    "98.4% GPA-5.00": "৯৮.৪% জিপিএ ৫.০০",
    "Talentpool Board Scholarships": "ট্যালেন্টপুল বোর্ড বৃত্তিপ্রাপ্ত",
    "Top-10 National STEM": "জাতীয় শীর্ষ-১০ স্টেম",
    "National Science & Robotics Olympiad": "জাতীয় বিজ্ঞান ও রোবোটিক্স অলিম্পিয়াড",
    "Faculty Members": "শিক্ষক মণ্ডলী",
    "Years of Excellence": "গৌরবময় সাফল্যের বছর",
    "Years of Glory": "গৌরবময় সাফল্যের বছর",
    "Pass Rate": "পাসের হার",
    "Board Merits": "বোর্ড মেধা স্থান",
    "3,850+ Enrolled Students": "৩,৮৫০+ অধ্যয়নরত শিক্ষার্থী",
    "100% Safe Campus": "১০০% নিরাপদ ক্যাম্পাস",
    "Enrolled Students": "অধ্যয়নরত শিক্ষার্থী",
    "Qualified Teachers": "যোগ্যতাসম্পন্ন শিক্ষক",
    "Expert Teachers": "দক্ষ শিক্ষক-শিক্ষিকা",
    "Happy Students": "প্রাণবন্ত শিক্ষার্থী",
    "Board Success": "বোর্ড সাফল্য",
    "Years Experience": "বছরের অভিজ্ঞতা",
    "Teachers & Staff": "শিক্ষক ও কর্মকর্তা",

    // About Sections
    "About Institute": "প্রতিষ্ঠান পরিচিতি",
    "ABOUT OUR SCHOOL": "আমাদের বিদ্যালয় সম্পর্কে",
    "ABOUT US": "আমাদের সম্পর্কে",
    "ABOUT SUNRISE": "সানরাইজ পরিচিতি",
    "Nurturing Excellence, Character & Innovation": "উৎকর্ষ, নৈতিক চরিত্র ও উদ্ভাবনের সমন্বিত বিকাশ",
    "A Place Where Education Meets Values": "যেখানে শিক্ষার সাথে নৈতিকতার মেলবন্ধন ঘটে",
    "Building Character Along With Education": "শিক্ষার সাথে চারিত্রিক বিকাশ",
    "A Legacy of Trust, Values & Modern Learning": "বিশ্বাস, ঐতিহ্য ও আধুনিক শিক্ষার প্রতীক",
    "5+ Acres Main Campus": "৫+ একর সুবিশাল ক্যাম্পাস",
    "Rivermount School is committed to providing a high-quality education that nurtures academic excellence, creativity and strong moral values. We believe in holistic development and preparing students to be responsible, confident and compassionate individuals.": "রিভারমাউন্ট স্কুল এমন একটি উচ্চমানের শিক্ষা প্রদানে অঙ্গীকারবদ্ধ যা মেধার বিকাশ, সৃজনশীলতা ও মূল্যবোধ নিশ্চিত করে। আমরা শিক্ষার্থীদের দায়িত্বশীল, আত্মবিশ্বাসী ও মানবিক গুণসম্পন্ন করে গড়ে তুলি।",
    "Founded with the ambition to illuminate minds and shape future global leaders, Sunrise International School delivers comprehensive schooling from Montessori through College levels.": "মেধার বিকাশ ও বৈশ্বিক নেতৃত্ব গঠনের প্রত্যয়ে প্রতিষ্ঠিত সানরাইজ ইন্টারন্যাশনাল স্কুল মন্টেসরি থেকে কলেজ পর্যন্ত বিশ্বমানের শিক্ষা প্রদান করে।",
    "At Bright Future School, we provide an inspiring learning ecosystem where each child's innate potential is discovered and nurtured.": "ব্রাইট ফিউচার স্কুলে আমরা এমন এক অনুপ্রেরণাদায়ী পরিবেশ গড়ে তুলেছি যেখানে প্রতিটি শিশুর সুপ্ত প্রতিভা বিকশিত হয়।",
    "Committed to Shaping Tomorrow's Leaders": "আগামীর নেতৃত্ব গঠনে আমরা প্রতিশ্রুতিবদ্ধ",
    "Interactive Multimedia Smart Classrooms": "ইন্টারঅ্যাক্টিভ মাল্টিমিডিয়া স্মার্ট ক্লাসরুম",
    "Advanced Physics, Chemistry & STEM Labs": "উন্নত পদার্থ, রসায়ন ও স্টেম ল্যাবরেটরি",
    "Extensive Library with 15,000+ Books": "১৫,০০০+ বই সমৃদ্ধ সুবিশাল লাইব্রেরি",
    "100% CCTV Monitored Safe Campus": "১০০% সিসিটিভি নিয়ন্ত্রিত নিরাপদ ক্যাম্পাস",
    "Experienced & Caring Faculty": "অভিজ্ঞ ও আন্তরিক শিক্ষক মণ্ডলী",
    "Smart Digital Classrooms": "স্মার্ট ডিজিটাল ক্লাসরুম",
    "STEM, Robotics & Science Labs": "স্টেম, রোবোটিক্স ও বিজ্ঞান ল্যাব",
    "AC Transport with Live Tracking": "লাইভ ট্র্যাকিংযুক্ত শীতাতপ নিয়ন্ত্রিত পরিবহন",
    "More About Us": "আমাদের সম্পর্কে আরও জানুন",

    // Programs & Academics
    "ACADEMIC PROGRAMS": "একাডেমিক পাঠ্যক্রম",
    "Academic Programs": "একাডেমিক পাঠ্যক্রম",
    "OUR ACADEMIC PROGRAMS": "আমাদের একাডেমিক কার্যক্রম",
    "Programs For Every Stage": "প্রতিটি স্তরের জন্য পাঠ্যক্রম",
    "Comprehensive Education from Early Childhood to College": "প্রাক-প্রাথমিক থেকে কলেজ পর্যন্ত পূর্ণাঙ্গ শিক্ষা",
    "Pathways to Academic & Character Excellence": "মেধা ও চরিত্র বিকাশের সুনির্দিষ্ট ধাপ",
    "Nurturing Minds at Every Stage": "প্রতিটি স্তরে মেধার পরিচর্যা",
    "Education Designed for Every Age": "প্রতিটি বয়সের উপযোগী মানসম্মত শিক্ষা",
    "Primary Section": "প্রাথমিক শাখা",
    "Secondary Section": "মাধ্যমিক শাখা",
    "Higher Secondary": "উচ্চ মাধ্যমিক শাখা",
    "Higher Secondary (College)": "উচ্চ মাধ্যমিক (কলেজ)",
    "Primary School": "প্রাথমিক শাখা",
    "Secondary School": "মাধ্যমিক শাখা",
    "Middle School": "নিম্ন মাধ্যমিক শাখা",
    "High School": "মাধ্যমিক শাখা",
    "Pre-Primary / Kindergarten": "প্রাক-প্রাথমিক / কিন্ডারগার্টেন",
    "Pre-Primary Foundation (Playgroup, Nursery & KG)": "প্রাক-প্রাথমিক ভিত্তি (প্লেগ্রুপ, নার্সারি ও কেজি)",
    "Primary Education": "প্রাথমিক শিক্ষা",
    "Secondary Education": "মাধ্যমিক শিক্ষা",
    "Co-curricular Activities": "সহশিক্ষা কার্যক্রম",
    "Co-Curricular": "সহশিক্ষা কার্যক্রম",
    "Clubs & Sports": "ক্লাব ও খেলাধুলা",
    "Grades 1 - 5": "১ম - ৫ম শ্রেণি",
    "Grades 6 - 8": "৬ষ্ঠ - ৮ম শ্রেণি",
    "Grades 9 - 10": "৯ম - ১০ম শ্রেণি",
    "Grades 9 - 12": "৯ম - ১২শ শ্রেণি",
    "Classes 1 to 5": "১ম থেকে ৫ম শ্রেণি",
    "Classes 6 to 10": "৬ষ্ঠ থেকে ১০ম শ্রেণি",
    "Playgroup to KG": "প্লেগ্রুপ থেকে কেজি",
    "Science, Humanities & Business Studies": "বিজ্ঞান, মানবিক ও ব্যবসায় শিক্ষা",
    "Science Group": "বিজ্ঞান বিভাগ",
    "Business Studies": "ব্যবসায় শিক্ষা বিভাগ",
    "Humanities Group": "মানবিক বিভাগ",
    "View Details": "বিস্তারিত দেখুন",

    // Features Strip
    "Quality Education": "মানসম্মত শিক্ষা",
    "Experienced Teachers": "অভিজ্ঞ শিক্ষক মণ্ডলী",
    "Modern Curriculum": "আধুনিক পাঠ্যক্রম",
    "Safe Environment": "নিরাপদ পরিবেশ",
    "Extracurricular Activities": "সহশিক্ষা কার্যক্রম",
    "Bright Future": "উজ্জ্বল ভবিষ্যৎ",
    "Holistic Development": "সার্বিক মেধা বিকাশ",
    "Science & Computer Labs": "বিজ্ঞান ও কম্পিউটার ল্যাব",
    "Rich Modern Library": "সমৃদ্ধ আধুনিক লাইব্রেরি",
    "Sports & Playground": "খেলাধুলা ও খেলার মাঠ",
    "Transport Facility": "নিরাপদ পরিবহন সুবিধা",
    "Moral & Islamic Values": "নৈতিক ও ধর্মীয় মূল্যবোধ",
    "Features That Make Us Different": "যে বৈশিষ্ট্যগুলো আমাদের অনন্য করেছে",
    "WHY CHOOSE US": "কেন আমাদের বেছে নেবেন",
    "Why Discerning Parents Choose XYZ Model School": "সচেতন অভিভাবকরা কেন এক্সওয়াইজেড মডেল স্কুল বেছে নেন",
    "100% Multimedia Smart Classrooms": "১০০% মাল্টিমিডিয়া স্মার্ট ক্লাসরুম",
    "STEM Robotics & AI Studio": "স্টেম রোবোটিক্স ও কৃত্রিম বুদ্ধিমত্তা স্টুডিও",
    "Safe & Secure Ecosystem": "নিরাপদ ও সুশৃঙ্খল পরিবেশ",
    "Academic Dominance": "একাডেমিক শ্রেষ্ঠত্ব",
    "Central Library & E-Reader": "কেন্দ্রীয় লাইব্রেরি ও ই-রিডার",
    "A Modern & Safe Learning Environment": "আধুনিক ও নিরাপদ শিখন পরিবেশ",

    // Notices & Events
    "LATEST UPDATES": "সর্বশেষ আপডেট",
    "Notices & Upcoming Events": "নোটিশ ও আসন্ন ইভেন্টস",
    "Notices & Announcements": "নোটিশ ও জরুরি ঘোষণাসমূহ",
    "Upcoming Campus Events": "আসন্ন ক্যাম্পাস ইভেন্টসমূহ",
    "LATEST NOTICES": "সর্বশেষ নোটিশসমূহ",
    "UPCOMING EVENTS": "আসন্ন অনুষ্ঠানসমূহ",
    "NEWS & NOTICES": "সংবাদ ও নোটিশ",
    "Important Announcements": "জরুরি ঘোষণাসমূহ",
    "LATEST CAMPUS HAPPENINGS": "ক্যাম্পাসের সর্বশেষ সংবাদ",
    "News & Events / খবর ও ইভেন্ট": "সংবাদ ও ইভেন্টস",
    "Stay connected with our latest institutional developments and celebrations.": "আমাদের প্রতিষ্ঠানের সর্বশেষ কার্যক্রম ও উৎসবের সাথে যুক্ত থাকুন।",
    "Annual Exam 2026 – Routine Published": "বার্ষিক পরীক্ষা ২০২৬ – রুটিন প্রকাশিত",
    "Parent-Teacher Meeting": "অভিভাবক-শিক্ষক মতবিনিময় সভা",
    "Winter Vacation Notice": "শীতকালীন অবকাশের নোটিশ",
    "Science Fair 2026": "বিজ্ঞান মেলা ২০২৬",
    "Inter-Class Sports": "আন্তঃশ্রেণি ক্রীড়া প্রতিযোগিতা",
    "Victory Day Celebration": "বিজয় দিবস উদযাপন",
    "Annual Sports Competition & Grand March-Past Ceremony 2026": "বার্ষিক ক্রীড়া প্রতিযোগিতা ও বর্ণাঢ্য কুচকাওয়াজ ২০২৬",
    "Inter-School Science & Innovation Fair: Over 60 Innovative STEM Projects": "আন্তঃস্কুল বিজ্ঞান ও উদ্ভাবন মেলা: ৬০টিরও বেশি উদ্ভাবনী স্টেম প্রকল্প",
    "International Mother Language Day Observance with Solemn Tributes": "যথাযোগ্য মর্যাদায় আন্তর্জাতিক মাতৃভাষা দিবস পালন",
    "Grand Cultural Gala & Annual Prize Distribution Fest 2026": "গ্র্যান্ড কালচারাল গালা ও বার্ষিক পুরস্কার বিতরণী উৎসব ২০২৬",
    "HSC Examination 2026 Form Fill-up Schedule": "এইচএসসি পরীক্ষা ২০২৬ ফরম পূরণ সময়সূচি",
    "Class 6-9 Annual Examination Routine Published": "৬ষ্ঠ-৯ম শ্রেণির বার্ষিক পরীক্ষার রুটিন প্রকাশিত",
    "Science Fair & Robotics Olympiad Registration": "বিজ্ঞান মেলা ও রোবোটিক্স অলিম্পিয়াড নিবন্ধন",
    "Admissions Circular 2026-27 (Nursery to XI)": "ভর্তি বিজ্ঞপ্তি ২০২৬-২৭ (নার্সারি থেকে একাদশ)",

    // Calendar
    "Campus Event": "ক্যাম্পাস ইভেন্ট",
    "Holiday": "সরকারি ছুটি",
    "Today": "আজকের দিন",
    "October 2026": "অক্টোবর ২০২৬",

    // Leadership & Committee
    "Messages from School Leadership & School Committee": "বিদ্যালয় পরিচালনা পর্ষদ ও নেতৃত্বের বাণী"
,
    "Welcome Message from the Principal": "অধ্যক্ষের স্বাগত বক্তব্য",
    "MESSAGE FROM HEAD OF SCHOOL": "প্রধান শিক্ষকের বাণী",
    "Inspiring Every Child to Shine": "প্রতিটি শিশুর প্রতিভার আলো ছড়াতে",
    "Visionary Leadership for Tomorrow's Generation": "আগামীর প্রজন্মের জন্য দূরদর্শী নেতৃত্ব",
    "SCHOOL COMMITTEE": "স্কুল পরিচালনা পর্ষদ",
    "President": "সভাপতি",
    "Member Secretary": "সদস্য সচিব",
    "Adarsha Faculty Members": "আদর্শ শিক্ষক মণ্ডলী",
    "Dr. M. A. Rahman": "ড. এম. এ. রহমান",
    "Principal, Rivermount School": "অধ্যক্ষ, রিভারমাউন্ট স্কুল",
    "Prof. Md. Motiur Rahman Khan": "প্রফেসর মো. মতিউর রহমান খান",
    "Principal, XYZ School & College": "অধ্যক্ষ, এক্সওয়াইজেড স্কুল অ্যান্ড কলেজ",
    "Mr. Golam Kibria": "জনাব গোলাম কিবরিয়া",
    "Chairman, Governing Body": "সভাপতি, পরিচালনা পর্ষদ",
    "Md. Abul Kashem": "মো. আবুল কাশেম",
    "Principal, Sunrise International School": "অধ্যক্ষ, সানরাইজ ইন্টারন্যাশনাল স্কুল",
    "Dr. Mahbubur Rahman": "ড. মাহবুবুর রহমান",
    "Head of Physics": "পদার্থবিজ্ঞান বিভাগীয় প্রধান",
    "Mrs. Sultana Razia": "বেগম সুলতানা রাজিয়া",
    "Head of Chemistry": "রসায়ন বিভাগীয় প্রধান",
    "Mr. Tanvir Ahmed": "জনাব তানভীর আহমেদ",
    "Head of ICT & CS": "আইসিটি ও কম্পিউটার সায়েন্স প্রধান",
    "Mrs. Farzana Haque": "বেগম ফারজানা হক",
    "Head of English": "ইংরেজি বিভাগীয় প্রধান",

    // Gallery
    "CAMPUS MOMENTS": "ক্যাম্পাস মুহূর্তসমূহ",
    "OUR GALLERY": "আমাদের গ্যালারী",
    "MOMENTS AT RIVERMOUNT": "রিভারমাউন্টের সোনালী মুহূর্ত",
    "Life at Bright Future School": "ব্রাইট ফিউচার স্কুলের প্রাণবন্ত পরিবেশ",
    "CAMPUS LIFE": "ক্যাম্পাস জীবন",
    "Moments of Joy & Learning": "আনন্দ ও শিক্ষণীয় মুহূর্তসমূহ",
    "Capturing vibrant academic endeavors, athletic feats, and cultural celebrations.": "শিক্ষার্থীদের মেধা বিকাশ, ক্রীড়া প্রতিযোগিতা এবং বর্ণাঢ্য সাংস্কৃতিক আয়োজনের সোনালী স্মৃতি।",
    "All (20+)": "সকল ছবি (২০+)",
    "Sports": "খেলাধুলা",
    "Classrooms": "শ্রেণিকক্ষ",
    "Science Fair": "বিজ্ঞান মেলা",
    "Cultural": "সাংস্কৃতিক",
    "VIDEO TOUR": "ভিডিও ট্যুর",
    "Annual Sports Parade & March-past Ceremony": "বার্ষিক ক্রীড়া প্রতিযোগিতা ও কুচকাওয়াজ",
    "Watch full high-definition video of our annual sports inauguration & student march.": "আমাদের বার্ষিক ক্রীড়া উদ্বোধন ও বর্ণাঢ্য কুচকাওয়াজের ফুল এইচডি ভিডিও দেখুন।",

    // Meritorious Students
    "ACADEMIC EXCELLENCE & HONORS": "একাডেমিক সাফল্য ও গৌরব",
    "Meritorious Students / মেধাবী শিক্ষার্থী": "কৃতি শিক্ষার্থীবৃন্দ",
    "Celebrating the stellar achievements of our high scorers in Board Examinations.": "বোর্ড পরীক্ষায় অনন্য সাফল্য অর্জনকারী আমাদের কৃতি শিক্ষার্থীদের অভিনন্দন।",
    "Celebrating Our Brilliant Board Achievers": "বোর্ড পরীক্ষায় আমাদের কৃতি শিক্ষার্থীদের সংবর্ধনা",

    // Testimonials
    "WHAT PARENTS SAY": "অভিভাবকদের মতামত",
    "Parent Testimonials": "অভিভাবক পর্যালোচনা",
    "PARENT VOICES": "অভিভাবকের মতামত",
    "What Parents Love About Us": "অভিভাবকরা আমাদের সম্পর্কে যা বলেন",
    "What Parents Say About Us": "আমাদের সম্পর্কে অভিভাবকদের অভিমত",
    "Voices of Success — Parents & Students": "সাফল্যের কণ্ঠস্বর — অভিভাবক ও শিক্ষার্থী",

    // Admissions Section
    "ADMISSIONS": "ভর্তি তথ্য",
    "Admission Now Open": "ভর্তি চলছে",
    "Admission Open 2026-2027": "ভর্তি চলছে ২০২৬-২০২৭",
    "Begin Your Child's Journey at Sunrise": "সানরাইজে আপনার সন্তানের শিক্ষাজীবন শুরু হোক",
    "Admissions Open for 2026-2027 Session": "২০২৬-২০২৭ শিক্ষাবর্ষে ভর্তি চলছে",
    "Limited seats available for Playgroup through Class 11. Merit scholarships up to 100% available.": "প্লেগ্রুপ থেকে একাদশ শ্রেণিতে আসন সংখ্যা সীমিত। ১০০% পর্যন্ত মেধাভিত্তিক বৃত্তির সুযোগ।",
    "Begin Your Journey Towards Academic Excellence": "একাডেমিক শ্রেষ্ঠত্বের পথে আপনার যাত্রা শুরু হোক",
    "Join our vibrant academic community nurturing moral leaders, critical thinkers, and future innovators. Limited seats available for Nursery through Class 11.": "আমাদের সমৃদ্ধ একাডেমিক কমিউনিটিতে যোগ দিন যেখানে গড়ে তোলা হয় নৈতিক নেতৃত্ব, মুক্তচিন্তা ও ভবিষ্যতের উদ্ভাবক। নার্সারি থেকে একাদশ শ্রেণিতে আসন সীমিত।",
    "Digital Campus": "ডিজিটাল ক্যাম্পাস",
    "100% Digital Campus": "১০০% ডিজিটাল ক্যাম্পাস",

    // Footers
    "Academic Links": "একাডেমিক লিংক",
    "About Our Heritage": "আমাদের ঐতিহ্য সম্পর্কে",
    "Admission Guidelines": "ভর্তি নির্দেশিকা",
    "Academic Calendar 2026": "একাডেমিক ক্যালেন্ডার ২০২৬",
    "Notice & Circulars": "নোটিশ ও সার্কুলার",
    "Board Result Statistics": "বোর্ড ফলাফলের পরিসংখ্যান",
    "Photo & Video Archive": "ছবি ও ভিডিও আর্কাইভ",
    "Important Contacts": "গুরুত্বপূর্ণ যোগাযোগ",
    "Principal's Secretariat:": "অধ্যক্ষের কার্যালয়:",
    "Vice-Principal's Desk:": "উপাধ্যক্ষের কার্যালয়:",
    "Accounts & Fee Section:": "হিসাব ও ফি শাখা:",
    "Campus Medical Helpline:": "ক্যাম্পাস মেডিকেল হেল্পলাইন:",
    "Quick Services": "দ্রুত সেবা",
    "Online Result Search": "অনলাইন ফলাফল অনুসন্ধান",
    "Student ID Card Portal": "শিক্ষার্থী আইডি কার্ড পোর্টাল",
    "Library Book Search": "লাইব্রেরি বই অনুসন্ধান",
    "Transport & Bus Routes": "পরিবহন ও বাস রুট",
    "Alumni Registration": "অ্যালামনাই রেজিস্ট্রেশন",
    "Parents Feedback Form": "অভিভাবক মতামত ফরম",
    "All Rights Reserved.": "সর্বস্বত্ব সংরক্ষিত।",
    "Privacy Policy": "গোপনীয়তা নীতি",
    "Terms of Use": "ব্যবহারের শর্তাবলী",
    "Terms of Service": "ব্যবহারের শর্তাবলী",
    "Sitemap": "সাইটম্যাপ",
    "Subscribe to get the latest news and updates.": "সর্বশেষ খবর ও নোটিশ পেতে সাবস্ক্রাইব করুন।",
    "Enter your email address": "আপনার ইমেইল ঠিকানা দিন",

    // Modals
    "Official Notice View": "অফিসিয়াল নোটিশ",
    "Online Admission Application": "অনলাইন ভর্তি আবেদন",
    "Student / Guardian Portal Login": "শিক্ষার্থী / অভিভাবক পোর্টাল লগইন",
    "Login As": "লগইন পদবি",
    "Student / Guardian": "শিক্ষার্থী / অভিভাবক",
    "Faculty / Teacher": "শিক্ষক / শিক্ষিকা",
    "Administration Staff": "প্রশাসনিক কর্মকর্তা",
    "Student ID / User ID": "শিক্ষার্থী আইডি / ইউজার আইডি",
    "Password": "পাসওয়ার্ড",
    "Student Full Name": "শিক্ষার্থীর পুরো নাম",
    "Father's Name": "পিতার নাম",
    "Mother's Name": "মাতার নাম",
    "Guardian Mobile Number": "অভিভাবকের মোবাইল নম্বর",
    "Present Address": "বর্তমান ঠিকানা",
    "Select Class Applying For": "আবেদনকৃত শ্রেণি নির্বাচন করুন",
    "Select Gender": "লিঙ্গ নির্বাচন করুন",
    "Male": "ছাত্র",
    "Female": "ছাত্রী",
    "Frequently Asked by Prospective Parents": "অভিভাবকদের সচরাচর জিজ্ঞাসা (FAQ)"
  };

  // Reverse Mapping: Bengali -> English (for Home 3 & restoring to EN)
  const bnToEn = {
    // Brand & Common Identifiers
    "গ্রীন ভ্যালি স্কুল এন্ড কলেজ": "Green Valley School & College",
    "গ্রীন ভ্যালি মডেল স্কুল এন্ড কলেজ | ভালো শিক্ষা, উজ্জ্বল ভবিষ্যৎ": "Green Valley Model School & College | Quality Education, Bright Future",
    "এক্সওয়াইজেড স্কুল অ্যান্ড কলেজ": "XYZ School & College",
    "এক্সওয়াইজেড মডেল স্কুল অ্যান্ড কলেজ": "XYZ Model School & College",
    "রিভারমাউন্ট স্কুল": "Rivermount School",
    "ব্রাইট ফিউচার স্কুল": "Bright Future School",
    "সানরাইজ ইন্টারন্যাশনাল স্কুল": "Sunrise International School",

    // Navigation & General
    "হোম": "Home",
    "আমাদের সম্পর্কে": "About Us",
    "একাডেমিক": "Academics",
    "ভর্তি": "Admission",
    "নোটিশ": "Notice",
    "নোটিশ বোর্ড": "Notice Board",
    "গ্যালারী": "Gallery",
    "ছবি গ্যালারী": "Photo Gallery",
    "যোগাযোগ": "Contact",
    "যোগাযোগ করুন": "Contact Us",
    "লগইন": "Login",
    "রেজিস্ট্রেশন": "Registration",
    "আজ:": "Today:",
    "শিক্ষাই আলো, শিক্ষাই শক্তি": "Education is Light, Education is Power",
    "কুষ্টিয়া, বাংলাদেশ": "Kushtia, Bangladesh",
    "ভালো শিক্ষা, উজ্জ্বল ভবিষ্যৎ": "Quality Education, Bright Future",
    "ভালো শিক্ষা": "Quality Education",
    "উজ্জ্বল ভবিষ্যৎ": "Bright Future",
    "স্বাগতম": "Welcome",
    "আমাদের সম্পর্কে জানুন": "Learn About Us",
    "অনলাইন ভর্তি আবেদন": "Apply for Online Admission",
    "মানসম্মত শিক্ষা": "Quality Education",
    "আধুনিক পাঠ্যক্রমে গড়ে উঠুক সৃজনশীল প্রজন্ম।": "Building a creative generation through modern curriculum.",
    "দক্ষ শিক্ষক মণ্ডলী": "Skilled Faculty",
    "অভিজ্ঞ ও নিবেদিতপ্রাণ শিক্ষক দ্বারা পাঠদান।": "Taught by experienced and dedicated educators.",
    "আধুনিক সুবিধা": "Modern Facilities",
    "বিজ্ঞানাগার, লাইব্রেরি ও আইটি সুবিধা।": "Science labs, library, and modern IT facilities.",
    "সহশিক্ষা কার্যক্রম": "Co-Curricular Activities",
    "খেলাধুলা, সাংস্কৃতিক ও সৃজনশীল কার্যক্রম।": "Sports, cultural events, and creative endeavors.",
    "নিরাপদ ক্যাম্পাস": "Safe Campus",
    "শিক্ষার্থীদের জন্য নিরাপদ ও শান্তিময় পরিবেশ।": "Safe, secure, and peaceful learning environment.",
    "শিক্ষা পর্যায়": "Academic Stages",
    "আমাদের একাডেমিক পাঠ্যক্রম": "Our Academic Programs",
    "প্রাক-প্রাথমিক শাখা": "Pre-Primary Section",
    "প্রাথমিক শাখা (১ম-৫ম)": "Primary Section (1st-5th)",
    "মাধ্যমিক (এসএসসি ৯-১০)": "Secondary (SSC 9-10)",
    "কলেজ শাখা (এইচএসসি)": "College Section (HSC)",
    "শ্রদ্ধেয় অধ্যক্ষ ও উপাধ্যক্ষের বাণী": "Messages from Respected Principal & Vice Principal",
    "আমাদের ক্যাম্পাস জীবন": "Our Campus Life",
    "সর্বশেষ নোটিশ": "Latest Notices",
    "দ্রুত লিঙ্ক": "Quick Links",
    "সোশ্যাল মিডিয়া": "Social Media",
    "সব ছবি দেখুন": "View All Photos",
    "সকল নোটিশ দেখুন": "View All Notices",
    "সর্বস্বত্ব সংরক্ষিত।": "All Rights Reserved."
  };

  // Populate reverse mapping with all keys from enToBn
  for (const [enKey, bnVal] of Object.entries(enToBn)) {
    if (!bnToEn[bnVal]) {
      bnToEn[bnVal] = enKey;
    }
  }

  /**
   * Recursive DOM node translator
   */
  function translateNode(node, lang) {
    if (node.nodeType === Node.TEXT_NODE) {
      const text = node.nodeValue;
      const trimmed = text.replace(/\s+/g, ' ').trim();
      if (!trimmed) return;

      // Cache original state
      if (typeof node._origText === 'undefined') {
        node._origText = text;
        node._origTrimmed = trimmed;
      }

      if (lang === 'bn') {
        if (enToBn[node._origTrimmed]) {
          const lead = text.match(/^\s*/)[0];
          const trail = text.match(/\s*$/)[0];
          node.nodeValue = lead + enToBn[node._origTrimmed] + trail;
        }
      } else if (lang === 'en') {
        if (bnToEn[node._origTrimmed]) {
          const lead = text.match(/^\s*/)[0];
          const trail = text.match(/\s*$/)[0];
          node.nodeValue = lead + bnToEn[node._origTrimmed] + trail;
        } else if (node._origText) {
          node.nodeValue = node._origText;
        }
      }
    } else if (node.nodeType === Node.ELEMENT_NODE) {
      const tag = node.tagName.toLowerCase();
      // Skip scripts, styles, raw code, and svg tags
      if (['script', 'style', 'code', 'pre', 'svg'].includes(tag)) return;

      // Handle element-level attributes (placeholder, title, aria-label)
      const attrs = ['placeholder', 'title', 'aria-label', 'value'];
      attrs.forEach(attr => {
        if (node.hasAttribute(attr)) {
          const val = node.getAttribute(attr);
          const trimmed = val.replace(/\s+/g, ' ').trim();
          if (typeof node['_orig_' + attr] === 'undefined') {
            node['_orig_' + attr] = val;
            node['_orig_trimmed_' + attr] = trimmed;
          }

          if (lang === 'bn') {
            if (enToBn[node['_orig_trimmed_' + attr]]) {
              node.setAttribute(attr, enToBn[node['_orig_trimmed_' + attr]]);
            }
          } else if (lang === 'en') {
            if (bnToEn[node['_orig_trimmed_' + attr]]) {
              node.setAttribute(attr, bnToEn[node['_orig_trimmed_' + attr]]);
            } else if (node['_orig_' + attr]) {
              node.setAttribute(attr, node['_orig_' + attr]);
            }
          }
        }
      });

      // Recurse children
      for (let i = 0; i < node.childNodes.length; i++) {
        translateNode(node.childNodes[i], lang);
      }
    }
  }

  /**
   * Set global site language and update UI
   * @param {string} lang - 'bn' or 'en'
   */
  window.setLanguage = function (lang) {
    const targetLang = (lang === 'bn' || lang === 'ban') ? 'bn' : 'en';
    
    // Save to localStorage
    try {
      localStorage.setItem('site_lang', targetLang);
    } catch (e) {
      console.warn('localStorage access denied', e);
    }

    // Toggle html lang attribute & body class for Bangla font
    document.documentElement.lang = targetLang;
    if (targetLang === 'bn') {
      document.body.classList.add('lang-bn');
      document.body.classList.remove('lang-en');
    } else {
      document.body.classList.add('lang-en');
      document.body.classList.remove('lang-bn');
    }

    // Update active state on all language switcher buttons across all headers
    const langBtns = document.querySelectorAll('.lang-btn');
    langBtns.forEach(btn => {
      const btnLang = btn.getAttribute('data-lang');
      if (btnLang === targetLang || (targetLang === 'bn' && btnLang === 'ban') || (targetLang === 'en' && btnLang === 'eng')) {
        btn.classList.add('active');
        btn.setAttribute('aria-pressed', 'true');
      } else {
        btn.classList.remove('active');
        btn.setAttribute('aria-pressed', 'false');
      }
    });

    // Translate all nodes in DOM
    translateNode(document.body, targetLang);
  };

  /**
   * Initialize language on DOM ready
   */
  function initLanguage() {
    // Default to 'bn' as requested by the user: "full page ke bangla te boloaw,, sob home page a"
    let savedLang = 'bn';
    try {
      const stored = localStorage.getItem('site_lang');
      if (stored) {
        savedLang = stored;
      }
    } catch (e) {}

    // Apply language immediately
    window.setLanguage(savedLang);
  }

  // Hook into modal opens to translate dynamic content
  const origOpenModal = window.openModal;
  if (typeof origOpenModal === 'function') {
    window.openModal = function (modalId) {
      origOpenModal(modalId);
      const currentLang = localStorage.getItem('site_lang') || 'bn';
      const modalEl = document.getElementById(modalId);
      if (modalEl) {
        translateNode(modalEl, currentLang);
      }
    };
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLanguage);
  } else {
    initLanguage();
  }

})();
