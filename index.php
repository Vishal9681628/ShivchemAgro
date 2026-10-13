<?php
$page_title       = "Agrochemical Manufacturer in India";
$page_description = "Shivchem Agro Limited is a leading manufacturer of pesticides, insecticides, herbicides, fungicides, PGR products and fertilizers. Serving licensed distributors across India.";
$current_page     = "home";
$depth            = "";
include 'includes/head.php';
?>
<body>

<?php include 'includes/header.php'; ?>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero">
  <div class="hero__bg">
    <!-- Replace with your actual hero image in: assets/images/backgrounds/hero-bg.jpg -->
    <div class="hero__overlay"></div>
  </div>
  <div class="container hero__content">
    <div class="hero__text fade-in">
      <span class="hero__tag">India's Trusted Agrochemical Brand</span>
      <h1 class="hero__heading">
        Protecting Crops.<br>
        <span>Powering Growth.</span>
      </h1>
      <p class="hero__sub">
        Shivchem Agro Limited manufactures premium quality pesticides, insecticides, herbicides, fungicides, PGR products and fertilizers — trusted by licensed distributors and retailers across India.
      </p>
      <div class="hero__actions flex gap-lg">
        <a href="products.php" class="btn btn--primary btn--lg">Explore Products</a>
        <a href="about.php" class="btn btn--secondary btn--lg">About Us</a>
      </div>
    </div>
  </div>
  <!-- Scroll indicator -->
  <div class="hero__scroll-hint">
    <span></span>
    <p>Scroll to explore</p>
  </div>
</section>

<!-- ============================================================
     STATS STRIP
     ============================================================ -->
<section class="stats-strip">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item fade-in">
        <strong>170+</strong>
        <span>Products</span>
      </div>
      <div class="stat-item fade-in">
        <strong>4+</strong>
        <span>Years Experience</span>
      </div>
      <div class="stat-item fade-in">
        <strong>8+</strong>
        <span>States Covered</span>
      </div>
      <div class="stat-item fade-in">
        <strong>500+</strong>
        <span>Distributors</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT SNAPSHOT
     ============================================================ -->
<section class="section about-snap">
  <div class="container">
    <div class="about-snap__grid">

      <div class="about-snap__img fade-in">
        <!-- Replace with: assets/images/backgrounds/about-factory.jpg -->
        <div class="about-snap__img-placeholder">
          <i class="fa fa-industry"></i>
          <span>Manufacturing Unit Image</span>
        </div>
        <div class="about-snap__badge">
          <i class="fa fa-award"></i>
          <div>
            <strong>Listed on BSE SME</strong>
            <span>Scrip Code: 544967</span>
          </div>
        </div>
      </div>

      <div class="about-snap__content fade-in">
        <div class="section-title">
          <span class="section-title__tag">Who We Are</span>
          <h2 class="section-title__heading">
            Manufacturing Excellence in <span>Agrochemicals</span>
          </h2>
          <p class="section-title__sub">
            Shivchem Agro Limited is a B2B agrochemical manufacturer based in Delhi, with our manufacturing unit in Jhajjar, Haryana. We serve licensed distributors and retailers who supply to farmers across India.
          </p>
        </div>

        <ul class="about-snap__features">
          <li>
            <i class="fa fa-check-circle"></i>
            <div>
              <strong>CIB&RC Registered Products</strong>
              <p>All our products are registered with the Central Insecticides Board &amp; Registration Committee.</p>
            </div>
          </li>
          <li>
            <i class="fa fa-check-circle"></i>
            <div>
              <strong>State-of-the-Art Manufacturing</strong>
              <p>Modern plant in Jhajjar, Haryana with strict quality control at every stage.</p>
            </div>
          </li>
          <li>
            <i class="fa fa-check-circle"></i>
            <div>
              <strong>B2B Distribution Network</strong>
              <p>We work exclusively with licensed distributors and retailers — not direct-to-farmer.</p>
            </div>
          </li>
        </ul>

        <div class="flex gap-lg" style="margin-top: var(--space-xl);">
          <a href="about.php" class="btn btn--primary">Learn More</a>
          <a href="contact.php" class="btn btn--secondary">Get In Touch</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     PRODUCT CATEGORIES
     ============================================================ -->
<section class="section section--gray product-cats">
  <div class="container">
    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">What We Make</span>
      <h2 class="section-title__heading">Our Product <span>Categories</span></h2>
      <p class="section-title__sub">Six product lines covering every major crop protection and nutrition need.</p>
    </div>

    <div class="grid grid--3 product-cats__grid">

      <a href="pages/products/insecticide.php" class="product-cat-card fade-in">
        <div class="product-cat-card__icon">
          <i class="fa fa-bug"></i>
        </div>
        <h3>Insecticide</h3>
        <p>Controls harmful insects damaging crops across multiple growth stages.</p>
        <span class="product-cat-card__link">View Products <i class="fa fa-arrow-right"></i></span>
      </a>

      <a href="pages/products/herbicide.php" class="product-cat-card fade-in">
        <div class="product-cat-card__icon">
          <i class="fa fa-seedling"></i>
        </div>
        <h3>Herbicide</h3>
        <p>Effective weed management solutions to protect yield and crop quality.</p>
        <span class="product-cat-card__link">View Products <i class="fa fa-arrow-right"></i></span>
      </a>

      <a href="pages/products/fungicide.php" class="product-cat-card fade-in">
        <div class="product-cat-card__icon">
          <i class="fa fa-shield-alt"></i>
        </div>
        <h3>Fungicide</h3>
        <p>Broad-spectrum fungal disease control for healthy, disease-free crops.</p>
        <span class="product-cat-card__link">View Products <i class="fa fa-arrow-right"></i></span>
      </a>

      <a href="pages/products/pgr.php" class="product-cat-card fade-in">
        <div class="product-cat-card__icon">
          <i class="fa fa-leaf"></i>
        </div>
        <h3>PGR Products</h3>
        <p>Plant growth regulators for improved yield, fruit quality and crop maturity.</p>
        <span class="product-cat-card__link">View Products <i class="fa fa-arrow-right"></i></span>
      </a>

      <a href="pages/products/rodenticide.php" class="product-cat-card fade-in">
        <div class="product-cat-card__icon">
          <i class="fa fa-mouse"></i>
        </div>
        <h3>Rodenticide</h3>
        <p>Field and storage rodent control to protect harvested and standing crops.</p>
        <span class="product-cat-card__link">View Products <i class="fa fa-arrow-right"></i></span>
      </a>

      <a href="pages/products/fertilizer.php" class="product-cat-card fade-in">
        <div class="product-cat-card__icon">
          <i class="fa fa-flask"></i>
        </div>
        <h3>Fertilizer</h3>
        <p>Balanced plant nutrition solutions for maximising yield across all crops.</p>
        <span class="product-cat-card__link">View Products <i class="fa fa-arrow-right"></i></span>
      </a>

    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE US
     ============================================================ -->
<section class="section why-us">
  <div class="container">
    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">Why Partner With Us</span>
      <h2 class="section-title__heading">Built for <span>Distributors & Retailers</span></h2>
      <p class="section-title__sub">Everything we do is designed to help our B2B partners grow their business.</p>
    </div>

    <div class="grid grid--4 why-us__grid">
      <div class="why-card fade-in">
        <div class="why-card__icon"><i class="fa fa-certificate"></i></div>
        <h4>Registered & Compliant</h4>
        <p>All products registered under the Insecticides Act 1968 with valid CIB&RC licences.</p>
      </div>
      <div class="why-card fade-in">
        <div class="why-card__icon"><i class="fa fa-microscope"></i></div>
        <h4>Quality Tested</h4>
        <p>Every batch tested in our in-house lab and third-party government laboratories.</p>
      </div>
      <div class="why-card fade-in">
        <div class="why-card__icon"><i class="fa fa-truck"></i></div>
        <h4>Pan-India Supply</h4>
        <p>Reliable supply chain reaching distributors across 20+ states in India.</p>
      </div>
      <div class="why-card fade-in">
        <div class="why-card__icon"><i class="fa fa-headset"></i></div>
        <h4>24x7 Support</h4>
        <p>Dedicated customer grievance and technical support for all our channel partners.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     INVESTOR RELATIONS BANNER (IPO highlight)
     ============================================================ -->
<section class="investor-banner fade-in">
  <div class="container">
    <div class="investor-banner__inner">
      <div class="investor-banner__text">
        <span class="investor-badge"><i class="fa fa-chart-line"></i> Listed on BSE SME</span>
        <h2>Investor Relations</h2>
        <p>Shivchem Agro Limited is now listed on the BSE SME platform (Scrip Code: 544967) effective 6 October 2026. Access financial results, governance documents, annual reports and all SEBI-required disclosures.</p>
      </div>
      <div class="investor-banner__actions flex gap-lg">
        <a href="pages/investor/index.php" class="btn btn--gold btn--lg">View Investor Portal</a>
        <a href="pages/investor/financial-results.php" class="btn btn--secondary btn--lg" style="border-color:rgba(255,255,255,0.5); color:white;">Financial Results</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     LATEST BLOGS
     ============================================================ -->
<section class="section section--earth latest-blogs">
  <div class="container">
    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">Knowledge Hub</span>
      <h2 class="section-title__heading">Latest from Our <span>Blog</span></h2>
      <p class="section-title__sub">Agrochemical insights, crop protection tips, and industry updates.</p>
    </div>

    <div class="grid grid--3">
      <!-- Blog Card 1 -->
      <article class="card fade-in">
        <div class="card__img">
       
          <img src="assets/images/blog/blog_1.7_img.png" alt="Top 10 pests damaging cotton crops in India" loading="lazy" />
        </div>
        <div class="card__body">
          <span class="card__tag">Pest Management · May 2026</span>
          <h3 class="card__title">
            <a href="pages/blog/blog1_7.php">Top 10 Pests Damaging Cotton Crops in India</a>
          </h3>
          <p class="card__text">Understanding the most damaging pests in cotton farming and how to effectively control them at each growth stage.</p>
          <a href="pages/blog/blog1_7.php" class="card__link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
      </article>

      <!-- Blog Card 2 -->
      <article class="card fade-in">
        <div class="card__img">
          <img src="assets/images/blog/nano-tech.webp" alt="Nano Technology in Agrochemicals" loading="lazy" />
        </div>
        <div class="card__body">
          <span class="card__tag">Innovation · April 2026</span>
          <h3 class="card__title">
            <a href="pages/blog/blog1_3.php">How Nano Technology Is Transforming Crop Protection</a>
          </h3>
          <p class="card__text">Next-generation agrochemicals are using nanotechnology to improve efficacy, reduce dosage, and minimise environmental impact.</p>
          <a href="pages/blog/blog1_3.php" class="card__link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
      </article>

      <!-- Blog Card 3 -->
      <article class="card fade-in">
        <div class="card__img">
          <img src="assets/images/blog/blog_1_5_image_5.jpg" alt="Choosing the right pesticide" loading="lazy" />
        </div>
        <div class="card__body">
          <span class="card__tag">Crop Protection · April 2026</span>
          <h3 class="card__title">
            <a href="pages/blog/blog1_5.php">How to Choose the Right Pesticide for Your Crop</a>
          </h3>
          <p class="card__text">A complete guide to selecting the right pesticide based on crop type, pest species, and application timing.</p>
          <a href="pages/blog/blog1_5.php" class="card__link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
      </article>
    </div>

    <div class="text-center" style="margin-top: var(--space-3xl);">
      <a href="blog.php" class="btn btn--secondary">View All Blogs</a>
    </div>
  </div>
</section>

<!-- ============================================================
     CONTACT CTA STRIP
     ============================================================ -->
<section class="cta-strip">
  <div class="container">
    <div class="cta-strip__inner flex-between">
      <div class="cta-strip__text">
        <h2>Ready to Partner With Us?</h2>
        <p>Connect with our team for product enquiries, distributor onboarding, or business partnerships.</p>
      </div>
      <div class="flex gap-lg" style="flex-shrink:0;">
        <a href="contact.php" class="btn btn--primary btn--lg">Contact Us</a>
        <a href="tel:+911146008555" class="btn btn--secondary btn--lg" style="border-color:rgba(255,255,255,0.5); color:white;">
          <i class="fa fa-phone"></i> Call Now
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Scroll to top -->
<button id="scrollTopBtn" aria-label="Back to top">
  <i class="fa fa-arrow-up"></i>
</button>

<script src="assets/js/main.js"></script>
</body>
</html>
