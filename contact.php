<?php
$page_title       = "Contact Us";
$page_description = "Get in touch with Shivchem Agro Limited. Office locations across Delhi, Hyderabad, Vijayawada, Patna, Ranchi, Guwahati and more.";
$current_page     = "contact";
$depth            = "";

// ── HANDLE FORM SUBMISSION ─────────────────────────────────────
$form_success = false;
$form_error   = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
    $email   = htmlspecialchars(trim($_POST['email']   ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Basic validation
    if ($name && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        $to      = "enquiry@shivchemagro.com";
        $sub     = "Website Enquiry: " . ($subject ?: 'General Enquiry') . " — " . $name;
        $body    = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\nMessage:\n$message";
        $headers = "From: website@shivchemagro.com\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

        if (mail($to, $sub, $body, $headers)) {
            $form_success = true;
        } else {
            $form_error = true;
        }
    } else {
        $form_error = true;
    }
}

include 'includes/head.php';
?>
<body>
<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<section class="page-header">
  <div class="container">
    <h1 class="page-header__title">Contact Us</h1>
    <nav class="page-header__breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">›</span>
      <span>Contact</span>
    </nav>
  </div>
</section>

<!-- ============================================================
     CONTACT INTRO + FORM
     ============================================================ -->
<section class="section contact-section">
  <div class="container">
    <div class="contact-grid">

      <!-- Left: info -->
      <div class="contact-info fade-in">
        <div class="section-title">
          <span class="section-title__tag">Reach Out</span>
          <h2 class="section-title__heading">Get In <span>Touch</span></h2>
        </div>
        <p>We are committed to providing our channel partners with exceptional service and support. Reach out for product enquiries, distributor onboarding, technical support or any business-related queries.</p>

        <div class="contact-info__list">
          <div class="contact-info__item">
            <div class="contact-info__icon"><i class="fa fa-phone"></i></div>
            <div>
              <strong>Call Anytime</strong>
              <a href="tel:+911146008555">+91 11-4600-8555</a>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon"><i class="fa fa-envelope"></i></div>
            <div>
              <strong>Business Queries</strong>
              <a href="mailto:info@shivchemagro.com">info@shivchemagro.com</a>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon"><i class="fa fa-envelope"></i></div>
            <div>
              <strong>General Enquiries</strong>
              <a href="mailto:enquiry@shivchemagro.com">enquiry@shivchemagro.com</a>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon"><i class="fa fa-briefcase"></i></div>
            <div>
              <strong>Career Queries</strong>
              <a href="mailto:career.hr@shivchemagro.com">career.hr@shivchemagro.com</a>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon"><i class="fa fa-cart-shopping"></i></div>
            <div>
              <strong>Sales Queries</strong>
              <a href="mailto:sales@shivchemagro.com">sales@shivchemagro.com</a>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon"><i class="fa fa-comment-dots"></i></div>
            <div>
              <strong>Complaints / Suggestions</strong>
              <a href="mailto:complaints@shivchemagro.com">complaints@shivchemagro.com</a>
            </div>
          </div>
        </div>

        <div class="contact-socials flex gap-md" style="margin-top:var(--space-xl)">
          <a href="https://www.facebook.com/profile.php?id=61565067187628" target="_blank" rel="noopener" aria-label="Facebook" class="contact-social-link"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/shivchem_agro_limited/" target="_blank" rel="noopener" aria-label="Instagram" class="contact-social-link"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/shivchem-agro-ltd-71359b264/" target="_blank" rel="noopener" aria-label="LinkedIn" class="contact-social-link"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://www.youtube.com/channel/UCti4ZVqrnM1-hk37chy6Rfg" target="_blank" rel="noopener" aria-label="YouTube" class="contact-social-link"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Right: form -->
      <div class="contact-form-wrap fade-in">

        <?php if ($form_success): ?>
        <div class="form-alert form-alert--success">
          <i class="fa fa-check-circle"></i>
          <div>
            <strong>Message sent successfully!</strong>
            <p>Thank you for reaching out. Our team will get back to you within 1–2 business days.</p>
          </div>
        </div>
        <?php elseif ($form_error): ?>
        <div class="form-alert form-alert--error">
          <i class="fa fa-exclamation-circle"></i>
          <div>
            <strong>Something went wrong.</strong>
            <p>Please check all fields and try again, or email us directly at enquiry@shivchemagro.com</p>
          </div>
        </div>
        <?php endif; ?>

        <form method="POST" action="contact.php" class="contact-form" novalidate>
          <div class="contact-form__row">
            <div class="form-group">
              <label class="form-label" for="name">Full Name <span style="color:var(--green-accent)">*</span></label>
              <input type="text" id="name" name="name" class="form-input" placeholder="Your full name" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"/>
            </div>
            <div class="form-group">
              <label class="form-label" for="email">Email Address <span style="color:var(--green-accent)">*</span></label>
              <input type="email" id="email" name="email" class="form-input" placeholder="your@email.com" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"/>
            </div>
          </div>
          <div class="contact-form__row">
            <div class="form-group">
              <label class="form-label" for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-input" placeholder="+91 XXXXX XXXXX" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>"/>
            </div>
            <div class="form-group">
              <label class="form-label" for="subject">Subject</label>
              <select id="subject" name="subject" class="form-select">
                <option value="">Select a subject</option>
                <option value="Product Enquiry"         <?= ($_POST['subject'] ?? '') === 'Product Enquiry' ? 'selected' : '' ?>>Product Enquiry</option>
                <option value="Distributor Onboarding"  <?= ($_POST['subject'] ?? '') === 'Distributor Onboarding' ? 'selected' : '' ?>>Distributor Onboarding</option>
                <option value="Technical Support"       <?= ($_POST['subject'] ?? '') === 'Technical Support' ? 'selected' : '' ?>>Technical Support</option>
                <option value="Career Enquiry"          <?= ($_POST['subject'] ?? '') === 'Career Enquiry' ? 'selected' : '' ?>>Career Enquiry</option>
                <option value="Investor Relations"      <?= ($_POST['subject'] ?? '') === 'Investor Relations' ? 'selected' : '' ?>>Investor Relations</option>
                <option value="Complaint / Feedback"    <?= ($_POST['subject'] ?? '') === 'Complaint / Feedback' ? 'selected' : '' ?>>Complaint / Feedback</option>
                <option value="General Enquiry"         <?= ($_POST['subject'] ?? '') === 'General Enquiry' ? 'selected' : '' ?>>General Enquiry</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="message">Message <span style="color:var(--green-accent)">*</span></label>
            <textarea id="message" name="message" class="form-textarea" placeholder="Write your message here..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
          </div>
          <button type="submit" class="btn btn--primary btn--lg" style="width:100%">
            <i class="fa fa-paper-plane"></i> Send Message
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     HEAD OFFICE + MANUFACTURING
     ============================================================ -->
<section class="section section--gray">
  <div class="container">
    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">Our Presence</span>
      <h2 class="section-title__heading">Head Office &amp; <span>Manufacturing</span></h2>
    </div>
    <div class="grid grid--2">

      <div class="office-card fade-in">
        <div class="office-card__header">
          <i class="fa fa-building"></i>
          <h3>Registered &amp; Head Office</h3>
        </div>
        <div class="office-card__body">
          <p><i class="fa fa-map-marker-alt"></i> Unit No. 311, 3rd Floor, Pearls Best Heights-II, Plot No. C-9, Netaji Subhash Place, Pitampura, North West Delhi, Delhi — 110034</p>
          <p><i class="fa fa-phone"></i> <a href="tel:+911146008555">+91 11-4600-8555</a></p>
          <p><i class="fa fa-envelope"></i> <a href="mailto:info@shivchemagro.com">info@shivchemagro.com</a></p>
          <a href="https://maps.google.com/?q=Pearls+Best+Heights+II+Netaji+Subhash+Place+Pitampura+Delhi+110034" target="_blank" rel="noopener" class="office-card__map-link">
            <i class="fa fa-map"></i> View on Google Maps
          </a>
        </div>
      </div>

      <div class="office-card fade-in">
        <div class="office-card__header">
          <i class="fa fa-industry"></i>
          <h3>Manufacturing Unit</h3>
        </div>
        <div class="office-card__body">
          <p><i class="fa fa-map-marker-alt"></i> Khewat No. 609, Khata No. 688, Killa No.: 102/19/1 (4-3), Village Barhana, Tehsil Beri, Dist. Jhajjar, Haryana — 124107</p>
          <p><i class="fa fa-phone"></i> <a href="tel:+911146008555">+91 11-4600-8555</a></p>
          <p><i class="fa fa-envelope"></i> <a href="mailto:info@shivchemagro.com">info@shivchemagro.com</a></p>
          <a href="https://maps.google.com/?q=Village+Barhana+Tehsil+Beri+Jhajjar+Haryana+124107" target="_blank" rel="noopener" class="office-card__map-link">
            <i class="fa fa-map"></i> View on Google Maps
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     GOOGLE MAP EMBED
     ============================================================ -->
<section class="map-section">
  <iframe
    src="https://www.google.com/maps?q=Pearls+Best+Heights+II+Plot+No+C-9+Netaji+Subhash+Place+Pitampura+Delhi+110034&output=embed"
    width="100%"
    height="420"
    style="border:0;display:block;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    title="Shivchem Agro Head Office Location">
  </iframe>
</section>

<!-- ============================================================
     REGIONAL OFFICES
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">Pan-India Network</span>
      <h2 class="section-title__heading">Regional <span>Offices</span></h2>
    </div>

    <!-- South Zone -->
    <div class="zone-block fade-in">
      <div class="zone-block__header">
        <i class="fa fa-location-dot"></i> South Zone
      </div>
      <div class="grid grid--3 zone-block__grid">
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Hyderabad, Telangana</h4>
          <p>Plot no. 8, Block no. 5, Autonagar Hayathnagar K.V, Road no. 10, Community Health Center Hayathnagar, Rangareddy, Hyderabad, Telangana — 500070</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Vijayawada, Andhra Pradesh</h4>
          <p>First Floor, 16-193/1, Market Yard Road, Market Yard, Gollapudi, NTR, Vijayawada, Andhra Pradesh — 521225</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Kurnool, Andhra Pradesh</h4>
          <p>D.No 76/97/30-2, Siva Reddy Godowns (No 4), Weaker Section Colony, Kurnool — 518003</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
      </div>
    </div>

    <!-- East Zone -->
    <div class="zone-block fade-in">
      <div class="zone-block__header">
        <i class="fa fa-location-dot"></i> East Zone
      </div>
      <div class="grid grid--3 zone-block__grid">
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Patna, Bihar</h4>
          <p>Building no. 1516 Room 202, 1st Floor, Parmanand Bhawan, Behind Sonali Petrol Pump, Near State Bank of India, IOC Colony, Patna, Bihar — 800026</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Ranchi, Jharkhand</h4>
          <p>Nagr, Gauji Daladali, Thana Ratu, Thana No. 133, Khata No. 1 and 38, Plot no. 507 and 505, Dist Ranchi, Jharkhand — 835303</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Guwahati, Assam</h4>
          <p>Beltonllan Dag No 102, F.S. Grant Patta No 1, Hardboard Factory Compound, Panikheti, Chandarpur, Guwahati, Kamrup Metropolitan, Assam — 781026</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Bhubaneswar, Odisha</h4>
          <p>Plot No. 4848 &amp; 4849, Room No. 03A, Pratap Sansan, Balakati, Bhubaneswar, Dist. Khurda, Odisha</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
      </div>
    </div>

    <!-- Central Zone -->
    <div class="zone-block fade-in">
      <div class="zone-block__header">
        <i class="fa fa-location-dot"></i> Central Zone
      </div>
      <div class="grid grid--3 zone-block__grid">
        <div class="region-card">
          <h4><i class="fa fa-map-marker-alt"></i> Gwalior, Madhya Pradesh</h4>
          <p>C-500, Bahodapur, Anand Nagar, Gwalior, Madhya Pradesh — 474012</p>
          <a href="tel:+911146008555">+91 11-4600-8555</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta-strip">
  <div class="container">
    <div class="cta-strip__inner flex-between">
      <div class="cta-strip__text">
        <h2>Ready to Partner With Us?</h2>
        <p>Connect with our team for distributor onboarding or product enquiries.</p>
      </div>
      <a href="tel:+911146008555" class="btn btn--primary btn--lg">
        <i class="fa fa-phone"></i> Call Now
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<button id="scrollTopBtn" aria-label="Back to top"><i class="fa fa-arrow-up"></i></button>
<script src="assets/js/main.js"></script>
</body>
</html>
