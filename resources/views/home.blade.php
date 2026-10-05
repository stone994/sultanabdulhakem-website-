@extends('layouts.app')

@section('content')
<div class="hero-carousel">
    
    <!-- Slide 1 -->
    <div class="slide slide-1 active">
      <p class="top-subheading">BISMILLAH IR-RAHMAN IR-RAHIM</p>
      <h5 class="main-title">
        HAZRAT SAKHI SULTAN ABDUL HAKIM <span>(R.A)</span>
      </h5>
      <p class="description">
        A life devoted to the remembrance of Allah, the love of the Holy Prophet ﷺ and selfless service to creation.
      </p>
      <div class="buttons-container">
        <button class="btn-primary">READ BIOGRAPHY</button>
        <button class="btn-secondary">TEACHINGS</button>
      </div>
    </div>

    <!-- Slide 2 -->
   <div class="slide slide-2" style="background-image: linear-gradient(rgba(11, 29, 21, 0.75), rgba(11, 29, 21, 0.85)), url('assets/img/slide2.jpg');">
  <p class="top-subheading">SPIRITUAL GUIDANCE & WISDOM</p>
  <h3 class="main-title">
    TEACHINGS & SUFI PATH <span>(R.A)</span>
  </h3>
  <p class="description">
    Enlightening hearts through divine love, ethical living, and spiritual purification.
  </p>
  <div class="buttons-container">
    <button class="btn-primary">EXPLORE TEACHINGS</button>
    <button class="btn-secondary">JOIN COMMUNITY</button>
  </div>
</div>

    <!-- Slide 3 -->
    <div class="slide slide-3">
      <p class="top-subheading">SERVING HUMANITY</p>
      <h3 class="main-title">
        FREE LANGAR & COMMUNITY SERVICE
      </h3>
      <p class="description">
        Providing daily meals, spiritual support, and education to thousands of visitors every day.
      </p>
      <div class="buttons-container">
        <button class="btn-primary">DONATE / SUPPORT</button>
        <button class="btn-secondary">VISIT LOCATION</button>
      </div>
    </div>
    

    <!-- Arrow Controls -->
    <button class="prev-btn" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next-btn" onclick="changeSlide(1)">&#10095;</button>

    <!-- Dot Indicators -->
    <div class="carousel-dots">
      <span class="dot active" onclick="goToSlide(0)"></span>
      <span class="dot" onclick="goToSlide(1)"></span>
      <span class="dot" onclick="goToSlide(2)"></span>
    </div>
  </div>

  <!-- Statistics Bar Section -->
  <section class="stats-section">
    <div class="stat-card">
      <div class="stat-number">1000+</div>
      <div class="stat-label">DAILY VISITORS</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">365</div>
      <div class="stat-label">DAYS OF FREE LANGAR</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">40+</div>
      <div class="stat-label">YEARS OF SERVICE</div>
    </div>
    <div class="stat-card">
      <div class="stat-number">12</div>
      <div class="stat-label">STUDY CIRCLES</div>
    </div>
  </section>

  
  <section class="about-section">
    <div class="about-container">
      
      <!-- Left Image Column -->
      <div class="image-box">
        <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=1200" alt="House of Remembrance">
      </div>

      <!-- Right Text Column -->
      <div class="content-box">
        <h6 class="section-title">About</h6>
        
        <p class="description-text">
          Abdul Hakeem and title is Sultan Al-Awlia Kamil Peer.He is popularly known as Main Sahib during his time and later as Main Sahib.He was born on 24 august 1664, 11 Rabi Awwal 1075 AH at the place of Pir Crori.He was a very pious elder.He was bound by fasting and prayer throughtout his life.Recitation of the holy quran was his routine.Taking care if the rights of neighbour. Always aviod verbosity.
        </p>

        <a href="#" class="btn-dark-green">FULL BIOGRAPHY</a>
      </div>

    </div>
  </section>

  <section class="path-section">
    <!-- Section Title & Subtitle -->
    <h2 class="section-title">THE PATH</h2>
    <p class="section-subtitle">Four pillars that shaped a lifetime of spiritual guidance.</p>

    <!-- Cards Grid -->
    <div class="cards-grid">
      
      <!-- Card 1: Zikr & Devotion -->
      <div class="card">
        <div class="card-icon">
          <!-- Moon Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
          </svg>
        </div>
        <h3 class="card-title">ZIKR & DEVOTION</h3>
        <p class="card-desc">Remembrance of Allah as the foundation of a purified heart.</p>
      </div>

      <!-- Card 2: Service to Humanity -->
      <div class="card">
        <div class="card-icon">
          <!-- Heart in Hand Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
          </svg>
        </div>
        <h3 class="card-title">SERVICE TO HUMANITY</h3>
        <p class="card-desc">Sakhawat, generosity and care for the poor and travellers.</p>
      </div>

      <!-- Card 3: Knowledge -->
      <div class="card">
        <div class="card-icon">
          <!-- Open Book Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
          </svg>
        </div>
        <h3 class="card-title">KNOWLEDGE</h3>
        <p class="card-desc">Adherence to Qur'an, Sunnah and the path of the righteous elders.</p>
      </div>

      <!-- Card 4: Guidance -->
      <div class="card">
        <div class="card-icon">
          <!-- Graduation Cap / Guidance Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
            <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
          </svg>
        </div>
        <h3 class="card-title">GUIDANCE</h3>
        <p class="card-desc">Nurturing seekers with patience, discipline and love.</p>
      </div>

    </div>
  </section>

  <section class="services-section">
    <!-- Title & Subtitle -->
    <h2 class="section-title">SERVICES OF THE DARBAR</h2>
    <p class="section-subtitle">Everything offered here is free of cost, all year round.</p>

    <!-- Services Cards Grid -->
    <div class="services-grid">
      
      <!-- Card 1: Langar Khana -->
      <div class="service-card">
        <div class="card-icon">
          <!-- Soup/Meal Bowl Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M12 3c-1.1 0-2 .9-2 2h4c0-1.1-.9-2-2-2zM8 4c-1.1 0-2 .9-2 2h4c0-1.1-.9-2-2-2zM16 4c-1.1 0-2 .9-2 2h4c0-1.1-.9-2-2-2z"></path>
            <path d="M4 11h16a1 1 0 0 1 1 1v1a8 8 0 0 1-8 8h-2a8 8 0 0 1-8-8v-1a1 1 0 0 1 1-1z"></path>
          </svg>
        </div>
        <h3 class="card-title">LANGAR KHANA</h3>
        <p class="card-desc">A free meal served twice daily to every visitor, without distinction.</p>
      </div>

      <!-- Card 2: Free Dispensary -->
      <div class="service-card">
        <div class="card-icon">
          <!-- Stethoscope Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M4.8 2.3A.3.3 0 0 0 4.5 2.6V8a5 5 0 0 0 10 0V2.6a.3.3 0 0 0-.3-.3h-1.4a.3.3 0 0 0-.3.3V8a3 3 0 0 1-6 0V2.6a.3.3 0 0 0-.3-.3H4.8z"></path>
            <path d="M9.5 13v3a4 4 0 0 0 4 4h1a4 4 0 0 0 4-4v-2"></path>
            <circle cx="18.5" cy="12" r="2"></circle>
          </svg>
        </div>        
        <h3 class="card-title">Spiritual Services</h3>
        <p class="card-desc">On-site madrassas and spaces for spiritual discourse, Quranic teaching, and public awareness campaigns.</p>
      </div>

      <!-- Card 3: Madrasa -->
      <div class="service-card">
        <div class="card-icon">
          <!-- Graduation Cap Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
            <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
          </svg>
        </div>
        <h3 class="card-title">MADRASA</h3>
        <p class="card-desc">Qur'an, Hadith and Tajweed classes for children and adults.</p>
      </div>

      <!-- Card 4: Welfare Support -->
      <div class="service-card">
        <div class="card-icon">
          <!-- Heart in Hands Icon -->
          <svg viewBox="0 0 24 24">
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
          </svg>
        </div>
        <h3 class="card-title">WELFARE SUPPORT</h3>
        <p class="card-desc">Assistance with marriages, funerals and emergency relief.</p>
      </div>

    </div>
  </section>

  <section class="quote-banner">
    <!-- Gold Quotation Mark Icon -->
    <div class="quote-icon">&#8221;</div>

    <!-- Main Quote -->
    <blockquote class="quote-text">
      “SPEAK LITTLE, SERVE MUCH, AND LET THE REMEMBRANCE OF ALLAH NEVER LEAVE YOUR TONGUE.”
    </blockquote>

    <!-- Author Name -->
    <p class="quote-author">&mdash; Hazrat Sakhi Sultan Abdul Hakim (R.A)</p>
  </section>

  <section class="events-section">
    <!-- Title & Subtitle -->
    <h2 class="section-title">GATHERINGS & EVENTS</h2>
    <p class="section-subtitle">The calendar of the darbar through the year.</p>

    <!-- Events 2x2 Grid -->
    <div class="events-grid">
      
      <!-- Event 1: Urs Mubarak -->
      <div class="event-card">
        <div class="card-icon">
          <!-- Calendar Icon -->
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
        </div>
        <div>
          <div class="event-tag">ANNUAL</div>
          <h3 class="event-title">URS MUBARAK</h3>
          <p class="event-desc">Annual Urs Mubarak —  23 June
</p>
        </div>
      </div>

      <!-- Event 2: Mehfil-e-Zikr -->
      <div class="event-card">
        <div class="card-icon">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
        </div>
        <div>
          <div class="event-tag">EVERY THURSDAY</div>
          <h3 class="event-title">MEHFIL-E-ZIKR</h3>
          <p class="event-desc">Congregational remembrance after Maghrib, open to all.</p>
        </div>
      </div>

      <!-- Event 3: Eid Milad-un-Nabi -->
      <div class="event-card">
        <div class="card-icon">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
        </div>
        <div>
          <div class="event-tag">12 RABI-UL-AWWAL</div>
          <h3 class="event-title">EID MILAD-UN-NABI &#xFDFA;</h3>
          <p class="event-desc">Salutations, procession and distribution of sweets.</p>
        </div>
      </div>

      <!-- Event 4: Daily Iftar -->
      <div class="event-card">
        <div class="card-icon">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
        </div>
        <div>
          <div class="event-tag">RAMADAN</div>
          <h3 class="event-title">Itikaf</h3>
          <p class="event-desc">Thousands sit in specialized spiritual seclusion (itikaf) during the last ten days of Ramadan, with sehri and iftar managed collectively on-site
            .</p>
        </div>
      </div>

    </div>
  </section>

  <section class="prayer-section">
    <!-- Header -->
    <h2 class="section-title">PRAYER TIMINGS</h2>
    <p class="section-subtitle">Jama'at is held in the main hall; timings shift slightly with the season.</p>

    <!-- 6 Timings Grid -->
    <div class="timings-grid">
      
      <!-- Fajr -->
      <div class="timing-card">
        <h3 class="prayer-name">FAJR</h3>
        <span class="prayer-time">5:10 AM</span>
      </div>

      <!-- Zuhr -->
      <div class="timing-card">
        <h3 class="prayer-name">ZUHR</h3>
        <span class="prayer-time">1:30 PM</span>
      </div>

      <!-- Asr -->
      <div class="timing-card">
        <h3 class="prayer-name">ASR</h3>
        <span class="prayer-time">5:00 PM</span>
      </div>

      <!-- Maghrib -->
      <div class="timing-card">
        <h3 class="prayer-name">MAGHRIB</h3>
        <span class="prayer-time">At sunset</span>
      </div>

      <!-- Isha -->
      <div class="timing-card">
        <h3 class="prayer-name">ISHA</h3>
        <span class="prayer-time">8:15 PM</span>
      </div>

      <!-- Jumu'ah -->
      <div class="timing-card">
        <h3 class="prayer-name">JUMU'AH</h3>
        <span class="prayer-time">1:45 PM</span>
      </div>

    </div>
  </section>

  <section class="gallery-section">
    <h2 class="section-title">GALLERY</h2>
    <p class="section-subtitle">Glimpses of the darbar, its gatherings and its architecture.</p>

    <div class="gallery-grid">
      <div class="gallery-item"><img src="" alt="Gallery 1"></div>
      <div class="gallery-item"><img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=400" alt="Gallery 2"></div>
      <div class="gallery-item"><img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?q=80&w=400" alt="Gallery 3"></div>
      <div class="gallery-item"><img src="https://images.unsplash.com/photo-1519817650390-64a93db51149?q=80&w=400" alt="Gallery 4"></div>
    </div>

    <a href="#" class="btn-gold">VIEW FULL GALLERY</a>
  </section>


  <!-- SECTION 2: EXPLORE -->
  <section class="explore-section">
    <h2 class="section-title">EXPLORE</h2>
    <p class="section-subtitle">Learn more about the darbar, its literature and its scholars.</p>

    <div class="explore-grid">
      
      <!-- Card 1 -->
      <div class="explore-card">
        <div class="explore-card-img">
          <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=400" alt="Books">
        </div>
        <div class="explore-card-content">
          <h3 class="explore-card-title">BOOKS & PUBLICATIONS</h3>
          <p class="explore-card-desc">Collection of writings and literature.</p>
          <a href="#" class="btn-gold">View Detail</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="explore-card">
        <div class="explore-card-img">
          <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?q=80&w=400" alt="Teachers">
        </div>
        <div class="explore-card-content">
          <h3 class="explore-card-title">TEACHERS & SCHOLARS</h3>
          <p class="explore-card-desc">The chain of guidance and its scholars.</p>
          <a href="#" class="btn-gold">View Detail</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="explore-card">
        <div class="explore-card-img">
          <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?q=80&w=400" alt="Darbar">
        </div>
        <div class="explore-card-content">
          <h3 class="explore-card-title">DARBAR & VISITS</h3>
          <p class="explore-card-desc">Location, timings and annual urs.</p>
          <a href="#" class="btn-gold">View Detail</a>
        </div>
      </div>

    </div>
  </section>

  <section class="faq-section">
    <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
    <p class="section-subtitle">Common queries regarding visits, timings, and services.</p>

    <div class="faq-container">
      
      <details class="faq-item">
        <summary>What are the visiting hours for the Darbar?</summary>
        <p>The Darbar remains open daily from Fajr prayer until late at night. Everyone is welcome to visit during these hours.</p>
      </details>

      <details class="faq-item">
        <summary>Are free meals (Langar) provided daily?</summary>
        <p>Yes, Langar Khana serves free meals twice daily to all visitors without any discrimination.</p>
      </details>

      <details class="faq-item">
        <summary>How can I attend the weekly Mehfil-e-Zikr?</summary>
        <p>Mehfil-e-Zikr takes place every Thursday evening right after the Maghrib prayer in the main hall.</p>
      </details>

      <details class="faq-item">
        <summary>Are there separate arrangements for women?</summary>
        <p>Yes, proper segregated and secure arrangements are provided for female visitors.</p>
      </details>

    </div>
  </section>
  <!-- Carousel JavaScript Logic -->
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const totalSlides = slides.length;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        dots[i].classList.remove('active');
      });

      if (index >= totalSlides) currentSlide = 0;
      else if (index < 0) currentSlide = totalSlides - 1;
      else currentSlide = index;

      slides[currentSlide].classList.add('active');
      dots[currentSlide].classList.add('active');
    }

    function changeSlide(direction) {
      showSlide(currentSlide + direction);
    }

    function goToSlide(index) {
      showSlide(index);
    }

    // Har 5 seconds baad slide automatic change hogi
    setInterval(() => {
      changeSlide(1);
    }, 5000);
  </script>@endsection