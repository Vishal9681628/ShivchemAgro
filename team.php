<?php
$page_title       = "Our Team";
$page_description = "Meet the Board of Directors and Key Managerial Personnel of Shivchem Agro Limited — the leadership driving innovation in Indian agrochemicals.";
$current_page     = "team";
$depth            = "";
include 'includes/head.php';
?>
<body>
<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<section class="page-header">
  <div class="container">
    <h1 class="page-header__title">Our Team</h1>
    <nav class="page-header__breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">›</span>
      <a href="#">Company</a>
      <span class="sep">›</span>
      <span>Our Team</span>
    </nav>
  </div>
</section>

<!-- ============================================================
     BOARD OF DIRECTORS
     ============================================================ -->
<section class="section team-section">
  <div class="container">

    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">Leadership</span>
      <h2 class="section-title__heading">Board of <span>Directors</span></h2>
      <p class="section-title__sub">Sachin Agarwal and Rohit Agarwal, Founders & Directors of Shivchem Agro Limited, lead with vision and dedication — driving innovation and growth in the agrochemical industry.</p>
    </div>

    <div class="team-grid fade-in">

      <!-- Sachin Agarwal -->
      <div class="team-card">
        <div class="team-card__img-wrap">
          <img src="assets/images/resources/sachin1.png" alt="Sachin Agarwal — Managing Director" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3>Sachin Agarwal</h3>
          <span class="team-card__role">Managing Director</span>
        </div>
      </div>

      <!-- Rohit Agarwal -->
      <div class="team-card">
        <div class="team-card__img-wrap">
          <img src="assets/images/resources/Rohit1.png" alt="Rohit Agarwal — Chairman & Director" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3>Rohit Agarwal</h3>
          <span class="team-card__role">Chairman &amp; Director</span>
        </div>
      </div>

      <!-- Deepa Agarwal -->
      <div class="team-card">
        <div class="team-card__img-wrap">
          <img src="assets/images/resources/Deepa.png" alt="Deepa Agarwal — Non-Executive Director" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3>Deepa Agarwal</h3>
          <span class="team-card__role">Non-Executive Director</span>
        </div>
      </div>

      <!-- Rajeev Gupta -->
      <div class="team-card">
        <div class="team-card__img-wrap">
          <img src="assets/images/resources/Rajeev.png" alt="Rajeev Gupta — Independent Director" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3>Rajeev Gupta</h3>
          <span class="team-card__role">Non-Executive Independent Director</span>
        </div>
      </div>

      <!-- Ayushi Sharma -->
      <div class="team-card">
        <div class="team-card__img-wrap">
          <img src="assets/images/resources/girl.png" alt="Ayushi Sharma — Independent Director" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3>Ayushi Sharma</h3>
          <span class="team-card__role">Non-Executive Independent Director</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     KEY MANAGERIAL PERSONNEL
     ============================================================ -->
<section class="section section--gray team-section">
  <div class="container">

    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">Management</span>
      <h2 class="section-title__heading">Key Managerial <span>Personnel</span></h2>
      <p class="section-title__sub">Senior management leads Shivchem Agro with expertise — driving innovation, strategic growth and excellence in pesticide manufacturing and distribution.</p>
    </div>

    <div class="team-grid team-grid--kmp fade-in">

      <!-- Jatin Bansal -->
      <div class="team-card">
        <div class="team-card__img-wrap">
          <img src="assets/images/resources/jatin.png" alt="Jatin Bansal — CFO" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3>Jatin Bansal</h3>
          <span class="team-card__role">Chief Financial Officer</span>
        </div>
      </div>

      <!-- Monika Sharma -->
      <div class="team-card">
        <div class="team-card__img-wrap">
          <img src="assets/images/resources/girl.png" alt="Monika Sharma — Company Secretary" loading="lazy" />
        </div>
        <div class="team-card__body">
          <h3>Monika Sharma</h3>
          <span class="team-card__role">Company Secretary</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     IPO COMPLIANCE NOTE
     ============================================================ -->
<section class="section investor-note-section">
  <div class="container">
    <div class="investor-note fade-in">
      <div class="investor-note__icon">
        <i class="fa fa-chart-line"></i>
      </div>
      <div class="investor-note__content">
        <span class="investor-badge"><i class="fa fa-info-circle"></i> IPO In Progress</span>
        <h3>Board Composition &amp; Governance</h3>
        <p>Shivchem Agro Limited has submitted its Draft Red Herring Prospectus (DRHP) and is preparing for RHP filing. The Board composition complies with applicable SEBI (ICDR) Regulations, with the required proportion of Independent Directors. For full governance disclosures, please visit the Investor Relations section.</p>
        <a href="pages/investor/corporate-governance.php" class="btn btn--gold" style="margin-top: var(--space-lg);">View Corporate Governance</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA STRIP -->
<section class="cta-strip">
  <div class="container">
    <div class="cta-strip__inner flex-between">
      <div class="cta-strip__text">
        <h2>Want to Know More About Us?</h2>
        <p>Read our company story, mission and manufacturing capabilities.</p>
      </div>
      <div class="flex gap-lg" style="flex-shrink:0;">
        <a href="about.php" class="btn btn--primary btn--lg">About Us</a>
        <a href="pages/investor/index.php" class="btn btn--secondary btn--lg" style="border-color:rgba(255,255,255,0.5);color:white;">Investor Relations</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<button id="scrollTopBtn" aria-label="Back to top"><i class="fa fa-arrow-up"></i></button>
<script src="assets/js/main.js"></script>
</body>
</html>
