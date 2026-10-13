<?php
$page_title       = 'Blog & Insights';
$page_description = 'Latest articles, crop science insights, and company updates from Shivchem Agro Limited.';
$current_page     = 'blog';
$depth            = '';
include 'includes/head.php';
?>
<body>
<?php include 'includes/header.php'; ?>
<?php
/* ------------------------------------------------------------
   BLOG POSTS
   Newest first. $posts[0] is used as the FEATURED post at the
   top of the page; everything else goes into the grid below.

   NOTE: titles/dates/authors below were corrected against the
   real post content on 09 Oct 2026 — several had been guessed
   from the old listing-only file before the real pages existed.
   ------------------------------------------------------------ */
$posts = [
  ['title' => 'Best Weed Management Practices for Rice Farming',                                'img' => 'blog1_7/rice-weed-banner.jpg', 'date' => '19 May, 2026', 'author' => 'Shivchem Agro Team', 'url' => 'blog/blog1_7.php',  'tag' => 'Weed Management'],
  ['title' => 'Top 10 Pests Damaging Cotton Crops in India',                                    'img' => 'blog1_6/cotton-banner.jpg',    'date' => '08 May, 2026', 'author' => 'Shivchem Agro Team', 'url' => 'blog/blog1_6.php',  'tag' => 'Pest Management'],
  ['title' => 'Difference Between Insecticides, Herbicides, and Fungicides (Explained Simply)',  'img' => 'blog_1_5_image_5.jpg',         'date' => '29 Apr, 2026', 'author' => 'Shivchem Agro Team', 'url' => 'blog/blog1_5.php',  'tag' => 'Crop Protection'],
  ['title' => "How to Choose the Right Pesticide for Your Crop: A Farmer's Complete Guide",      'img' => 'blog_1_4_image_2.png',         'date' => '23 Apr, 2026', 'author' => 'Shivchem Agro Team', 'url' => 'blog/blog1_4.php',  'tag' => 'Farmer Guide'],
  ['title' => 'The Future of Crop Protection Is Nano',                                           'img' => 'nano-tech.webp',               'date' => '16 Apr, 2026', 'author' => 'Shivchem Agro Team', 'url' => 'blog/blog1_3.php',  'tag' => 'Innovation'],
  ['title' => 'The Hidden Survival Advantage of Hydrophobic Pests',                              'img' => 'img_Blog1_2.jpeg',             'date' => '13 Apr, 2026', 'author' => 'Shivchem Agro Team', 'url' => 'blog/blog1_2.php',  'tag' => 'Pest Management'],
  ['title' => 'Maximizing Yield in Stressful Climates: The Role of Advanced Agrochemicals',      'img' => 'img_Blog_1_1.webp',            'date' => '20 Feb, 2026', 'author' => 'Agrochem Expert',    'url' => 'blog/blog-1_1.php', 'tag' => 'Crop Science'],
  ['title' => 'The Science Behind Plant Growth Products: Enhancing Crop Yields and Quality',     'img' => 'blog-9_img-1.png',             'date' => '29 Jul, 2024', 'author' => 'Vishal Sharma',      'url' => 'blog/blog-9.php',   'tag' => 'Crop Science'],
  ['title' => 'The Growing Demand for Food Safety and Its Implications for Agrochemicals',       'img' => 'blog-8.jpg',                   'date' => '31 Mar, 2023', 'author' => 'Ricky Naidu',        'url' => 'blog/blog-8.php',   'tag' => 'Industry Insights'],
  ['title' => "Shivchem Agro's Herbicides: A Game-Changer for Weed Control in Indian Farming",   'img' => 'blog-7.png',                   'date' => '29 Mar, 2023', 'author' => 'Ricky Naidu',        'url' => 'blog/blog-7.php',   'tag' => 'Product Spotlight'],
  ['title' => "5 Ways Shivchem Agro's Insecticides Are Helping Indian Farmers Protect Their Crops", 'img' => 'blog-6.png',                'date' => '28 Mar, 2023', 'author' => 'Ricky Naidu',        'url' => 'blog/blog-6.php',   'tag' => 'Product Spotlight'],
  ['title' => 'Understanding the Importance of Plant Growth Regulators in Indian Agriculture',   'img' => 'blog-5.png',                   'date' => '28 Mar, 2023', 'author' => 'Ricky Naidu',        'url' => 'blog/blog-5.php',   'tag' => 'Crop Science'],
  ['title' => "Top 10 Challenges Faced by Indian Farmers and How Shivchem Agro's Products Can Help", 'img' => 'blog-4.png',               'date' => '27 Mar, 2023', 'author' => 'Ricky Naidu',        'url' => 'blog/blog-4.php',   'tag' => 'Industry Insights'],
  ['title' => 'The Future of Precision Agriculture in India',                                   'img' => 'blog-3.png',                   'date' => '24 Mar, 2023', 'author' => 'Ricky Naidu',        'url' => 'blog/blog-3.php',   'tag' => 'Innovation'],
  ['title' => 'The Role of Agrochemicals in Increasing Crop Yields and Quality',                 'img' => 'blog-2.png',                   'date' => '24 Mar, 2023', 'author' => 'Ricky Naidu',        'url' => 'blog/blog-2.php',   'tag' => 'Industry Insights'],
];

$featured = $posts[0];
$rest     = array_slice($posts, 1);
?>

<!-- Page Header -->
<section class="page-header">
  <div class="container">
    <h1 class="page-header__title">Blog &amp; Insights</h1>
    <div class="page-header__breadcrumb">
      <a href="index.php">Home</a>
      <span class="sep">/</span>
      <span>Blog</span>
    </div>
  </div>
</section>

<!-- Featured + Grid -->
<section class="section">
  <div class="container">

    <!-- Featured post -->
    <a href="<?= $featured['url'] ?>" class="blog-featured">
      <div class="blog-featured__img">
        <img src="assets/images/blog/<?= $featured['img'] ?>" alt="<?= htmlspecialchars($featured['title']) ?>">
        <span class="blog-featured__badge">Latest</span>
      </div>
      <div class="blog-featured__content">
        <span class="blog-tag"><?= $featured['tag'] ?></span>
        <h2 class="blog-featured__title"><?= $featured['title'] ?></h2>
        <ul class="blog-meta">
          <li><i class="far fa-user-circle"></i> <?= $featured['author'] ?></li>
          <li><i class="far fa-calendar"></i> <?= $featured['date'] ?></li>
        </ul>
        <span class="blog-featured__cta">Read Full Article <i class="fas fa-arrow-right"></i></span>
      </div>
    </a>

    <!-- Grid of remaining posts -->
    <div class="blog-grid">
      <?php foreach ($rest as $post): ?>
        <a href="<?= $post['url'] ?>" class="blog-card">
          <div class="blog-card__img">
            <img src="assets/images/blog/<?= $post['img'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy">
            <span class="blog-card__date"><?= $post['date'] ?></span>
          </div>
          <div class="blog-card__body">
            <span class="blog-tag blog-tag--sm"><?= $post['tag'] ?></span>
            <h3 class="blog-card__title"><?= $post['title'] ?></h3>
            <div class="blog-card__footer">
              <span class="blog-card__author"><i class="far fa-user-circle"></i> <?= $post['author'] ?></span>
              <span class="blog-card__readmore">Read More <i class="fas fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
<button id="scrollTopBtn" aria-label="Back to top"><i class="fa fa-arrow-up"></i></button>
<script src="assets/js/main.js"></script>
</body>
</html>
