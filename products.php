<?php
$page_title       = "Our Products";
$page_description = "Shivchem Agro Limited manufactures insecticides, herbicides, fungicides, PGR products, rodenticides and fertilizers for Indian agriculture.";
$current_page     = "products";
$depth            = "";
include 'includes/head.php';
?>
<body>
<?php include 'includes/header.php'; ?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header__title">Our Products</h1>
    <nav class="page-header__breadcrumb">
      <a href="index.php">Home</a><span class="sep">›</span><span>Products</span>
    </nav>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-title section-title--center fade-in">
      <span class="section-title__tag">What We Manufacture</span>
      <h2 class="section-title__heading">Six Product <span>Categories</span></h2>
      <p class="section-title__sub">All products are CIB&RC registered and manufactured at our facility in Jhajjar, Haryana. Available exclusively through licensed distributors and retailers.</p>
    </div>
    <div class="grid grid--3 prod-overview-grid">
      <?php
      $cats = [
        ['icon'=>'fa-bug',       'title'=>'Insecticide',  'url'=>'pages/products/insecticide.php', 'desc'=>'Controls harmful sucking, chewing and soil insects across paddy, cotton, vegetables and other crops.'],
        ['icon'=>'fa-seedling',  'title'=>'Herbicide',    'url'=>'pages/products/herbicide.php',   'desc'=>'Pre-emergence and post-emergence weed management solutions for all major crop types.'],
        ['icon'=>'fa-shield-alt','title'=>'Fungicide',    'url'=>'pages/products/fungicide.php',   'desc'=>'Broad-spectrum disease control — protectant, systemic and contact fungicides for healthy crops.'],
        ['icon'=>'fa-leaf',      'title'=>'PGR Products', 'url'=>'pages/products/pgr.php',         'desc'=>'Plant growth regulators to improve yield, fruit size, root development and crop maturity.'],
        ['icon'=>'fa-mouse',     'title'=>'Rodenticide',  'url'=>'pages/products/rodenticide.php', 'desc'=>'Field and storage rodent control to protect standing crops and post-harvest grain.'],
        ['icon'=>'fa-flask',     'title'=>'Fertilizer',   'url'=>'pages/products/fertilizer.php',  'desc'=>'Macro and micro-nutrient fertilizers for balanced crop nutrition and maximum yield.'],
      ];
      foreach($cats as $c): ?>
      <a href="<?= $c['url'] ?>" class="prod-overview-card fade-in">
        <div class="prod-overview-card__icon"><i class="fa <?= $c['icon'] ?>"></i></div>
        <div class="prod-overview-card__body">
          <h3><?= $c['title'] ?></h3>
          <p><?= $c['desc'] ?></p>
          <span class="prod-overview-card__cta">View Products <i class="fa fa-arrow-right"></i></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--gray">
  <div class="container">
    <div class="compliance-strip fade-in">
      <div class="compliance-strip__item"><i class="fa fa-certificate"></i><div><strong>CIB&RC Registered</strong><span>All products registered under the Insecticides Act, 1968</span></div></div>
      <div class="compliance-strip__item"><i class="fa fa-microscope"></i><div><strong>Lab Tested</strong><span>Every batch tested in-house and at third-party government labs</span></div></div>
      <div class="compliance-strip__item"><i class="fa fa-leaf"></i><div><strong>Safe Formulations</strong><span>New chemistry focused on safer products for users and environment</span></div></div>
      <div class="compliance-strip__item"><i class="fa fa-handshake"></i><div><strong>B2B Only</strong><span>Available through licensed distributors and retailers only</span></div></div>
    </div>
  </div>
</section>

<section class="cta-strip">
  <div class="container">
    <div class="cta-strip__inner flex-between">
      <div class="cta-strip__text">
        <h2>Looking for a Specific Product?</h2>
        <p>Contact our team for product details, technical specifications and availability.</p>
      </div>
      <a href="contact.php" class="btn btn--primary btn--lg">Contact Us</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<button id="scrollTopBtn" aria-label="Back to top"><i class="fa fa-arrow-up"></i></button>
<script src="assets/js/main.js"></script>
</body>
</html>
