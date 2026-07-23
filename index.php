<?php
// Connie's Creations & Design – PHP Website
$page_title = "Connie's Creations & Design | All Your Clothing Solutions";
$business_name = "Connie's Creations & Design";
$tagline = "Ubuntu Wezokunxiba · The Spirit of Clothing";
$phone = "+27 71 234 5678";
$email = "connies.creations@gmail.com";
$location = "Gauteng, South Africa";
$whatsapp = "27712345678";
$facebook = "https://facebook.com/conniesCreationsDesign";
$instagram = "https://instagram.com/connies_creationsdesign";
$tiktok = "https://tiktok.com/@connies_creations";

// Gallery items with categories
$gallery = [
  ["img" => "https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=600&q=80",  "title" => "School Uniform Set",      "category" => "school",     "desc" => "Custom school wear – crisp, durable & proud"],
  ["img" => "https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=600&q=80",  "title" => "Evening Gown",          "category" => "formal",     "desc" => "Elegant formal wear crafted to perfection"],
  ["img" => "https://images.unsplash.com/photo-1509631179647-0177331693ae?w=600&q=80",  "title" => "Xhosa Traditional Dress","category" => "traditional","desc" => "Umbhaco-inspired traditional attire"],
  ["img" => "https://images.unsplash.com/photo-1537832816519-689ad163238b?w=600&q=80",  "title" => "Corporate Blazer",      "category" => "corporate",  "desc" => "Tailored corporate wear for the professional"],
  ["img" => "https://images.unsplash.com/photo-1566479179817-c0b5ea48e4e3?w=600&q=80",  "title" => "Matric Farewell Dress", "category" => "formal",     "desc" => "Make your farewell night unforgettable"],
  ["img" => "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&q=80",  "title" => "Custom Outfit",         "category" => "custom",     "desc" => "Designed exactly to your vision"],
  ["img" => "https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?w=600&q=80",  "title" => "School Track Suit",     "category" => "school",     "desc" => "Comfortable, branded school sports gear"],
  ["img" => "https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&q=80",  "title" => "Summer Collection",     "category" => "custom",     "desc" => "Vibrant personal designs for every season"],
  ["img" => "https://images.unsplash.com/photo-1529720317453-c8da503f2051?w=600&q=80",  "title" => "Traditional Men's Wear","category" => "traditional","desc" => "Amabheshu & traditional garments for men"],
  ["img" => "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80",  "title" => "Corporate Uniform",     "category" => "corporate",  "desc" => "Branded workwear for your team"],
  ["img" => "https://images.unsplash.com/photo-1594938298603-c8148c4b5b88?w=600&q=80",  "title" => "Kids School Dress",    "category" => "school",     "desc" => "Neat, neat, neat – school dresses done right"],
  ["img" => "https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?w=600&q=80",  "title" => "Lobola Outfit",         "category" => "traditional","desc" => "Dress with dignity for your special day"],
];

$categories = [
  "all"         => "All Work",
  "school"      => "School Wear",
  "formal"      => "Formal & Events",
  "traditional" => "Traditional",
  "corporate"   => "Corporate",
  "custom"      => "Custom Design",
];

// Handle contact form
$form_message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["contact_submit"])) {
  $name    = htmlspecialchars(trim($_POST["name"] ?? ""));
  $email_f = htmlspecialchars(trim($_POST["email"] ?? ""));
  $phone_f = htmlspecialchars(trim($_POST["phone"] ?? ""));
  $service = htmlspecialchars(trim($_POST["service"] ?? ""));
  $message = htmlspecialchars(trim($_POST["message"] ?? ""));
  if ($name && $email_f && $message) {
    // In production: mail($email, "New Enquiry from $name", ...) 
    $form_message = "success";
  } else {
    $form_message = "error";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $page_title ?></title>
  <meta name="description" content="Connie's Creations & Design – school wear, formal outfits, traditional garments, corporate uniforms & custom clothing in Gauteng, South Africa." />
  <meta name="keywords" content="school wear Gauteng, custom clothing South Africa, traditional Xhosa dresses, formal wear, corporate uniforms, matric farewell dresses" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,800;1,400;1,600&family=Lato:wght@300;400;700&family=Cormorant+Garamond:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    /* ─── TOKENS ──────────────────────────────────────────────── */
    :root {
      --red:       #8B1A1A;
      --red-dark:  #5E0E0E;
      --gold:      #C4962A;
      --gold-lt:   #E8B84B;
      --cream:     #FAF3E8;
      --cream-dk:  #F0E4CC;
      --ink:       #1A1008;
      --charcoal:  #2D2416;
      --mid:       #6B5A3E;
      --white:     #FFFFFF;

      --ff-display: 'Playfair Display', Georgia, serif;
      --ff-serif:   'Cormorant Garamond', Georgia, serif;
      --ff-body:    'Lato', sans-serif;

      --transition: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
      --radius:     4px;
      --shadow:     0 8px 32px rgba(26,16,8,0.18);
    }

    /* ─── RESET ───────────────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--ff-body);
      background: var(--cream);
      color: var(--ink);
      line-height: 1.7;
      overflow-x: hidden;
    }
    img { display: block; max-width: 100%; }
    a { color: inherit; text-decoration: none; }
    ul { list-style: none; }
    button { cursor: pointer; border: none; background: none; font-family: inherit; }

    /* ─── XHOSA GEOMETRIC DIVIDER ─────────────────────────────── */
    .xhosa-divider {
      width: 100%;
      height: 32px;
      overflow: hidden;
      position: relative;
    }
    .xhosa-divider svg { width: 100%; height: 100%; }

    /* ─── NAV ─────────────────────────────────────────────────── */
    #navbar {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1000;
      background: rgba(26,16,8,0.0);
      backdrop-filter: blur(0px);
      transition: background var(--transition), backdrop-filter var(--transition), box-shadow var(--transition);
      padding: 0 5vw;
    }
    #navbar.scrolled {
      background: rgba(26,16,8,0.96);
      backdrop-filter: blur(12px);
      box-shadow: 0 2px 24px rgba(0,0,0,0.4);
    }
    .nav-inner {
      max-width: 1280px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 72px;
    }
    .nav-logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .nav-logo-mark {
      width: 42px; height: 42px;
      background: var(--red);
      border: 2px solid var(--gold);
      border-radius: 2px;
      display: flex; align-items: center; justify-content: center;
      font-family: var(--ff-display);
      color: var(--gold);
      font-size: 1.3rem;
      font-weight: 800;
      flex-shrink: 0;
    }
    .nav-logo-text {
      display: flex;
      flex-direction: column;
      line-height: 1.1;
    }
    .nav-logo-name {
      font-family: var(--ff-display);
      font-size: 1rem;
      font-weight: 800;
      color: var(--white);
      letter-spacing: 0.5px;
    }
    .nav-logo-sub {
      font-size: 0.65rem;
      color: var(--gold-lt);
      letter-spacing: 2px;
      text-transform: uppercase;
    }
    .nav-links {
      display: flex;
      align-items: center;
      gap: 32px;
    }
    .nav-links a {
      font-size: 0.85rem;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--cream);
      font-weight: 700;
      position: relative;
      transition: color var(--transition);
    }
    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px; left: 0;
      width: 0; height: 2px;
      background: var(--gold);
      transition: width var(--transition);
    }
    .nav-links a:hover { color: var(--gold-lt); }
    .nav-links a:hover::after { width: 100%; }
    .nav-cta {
      background: var(--red) !important;
      color: var(--white) !important;
      padding: 10px 22px !important;
      border: 1px solid var(--gold) !important;
      border-radius: var(--radius) !important;
      font-size: 0.8rem !important;
      letter-spacing: 1.5px !important;
    }
    .nav-cta::after { display: none !important; }
    .nav-cta:hover { background: var(--gold) !important; color: var(--ink) !important; }

    /* ─── HAMBURGER ───────────────────────────────────────────── */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      padding: 8px;
      cursor: pointer;
    }
    .hamburger span {
      display: block;
      width: 26px; height: 2px;
      background: var(--white);
      border-radius: 2px;
      transition: var(--transition);
    }
    .hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .hamburger.open span:nth-child(2) { opacity: 0; }
    .hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

    .nav-mobile {
      display: none;
      flex-direction: column;
      background: var(--ink);
      padding: 24px 5vw 32px;
      border-top: 1px solid var(--gold);
    }
    .nav-mobile.open { display: flex; }
    .nav-mobile a {
      font-size: 0.95rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--cream);
      font-weight: 700;
      padding: 14px 0;
      border-bottom: 1px solid rgba(196,150,42,0.2);
      transition: color var(--transition);
    }
    .nav-mobile a:hover { color: var(--gold-lt); }
    .nav-mobile a:last-child { border-bottom: none; }

    /* ─── HERO ────────────────────────────────────────────────── */
    #hero {
      min-height: 100vh;
      position: relative;
      display: flex;
      align-items: center;
      overflow: hidden;
    }
    .hero-bg {
      position: absolute;
      inset: 0;
      background:
        linear-gradient(160deg, rgba(94,14,14,0.85) 0%, rgba(26,16,8,0.92) 60%),
        url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&q=80') center/cover no-repeat;
    }
    .hero-pattern {
      position: absolute;
      inset: 0;
      opacity: 0.07;
      background-image: repeating-linear-gradient(
        45deg,
        var(--gold) 0px, var(--gold) 2px,
        transparent 2px, transparent 24px
      ),
      repeating-linear-gradient(
        -45deg,
        var(--gold) 0px, var(--gold) 2px,
        transparent 2px, transparent 24px
      );
    }
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 1280px;
      margin: 0 auto;
      padding: 120px 5vw 80px;
      width: 100%;
    }
    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      font-size: 0.72rem;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--gold-lt);
      font-weight: 700;
      margin-bottom: 24px;
    }
    .hero-eyebrow::before, .hero-eyebrow::after {
      content: '';
      display: block;
      width: 40px; height: 1px;
      background: var(--gold);
    }
    .hero-h1 {
      font-family: var(--ff-display);
      font-size: clamp(2.8rem, 7vw, 6.5rem);
      font-weight: 800;
      color: var(--white);
      line-height: 1.05;
      margin-bottom: 12px;
      max-width: 760px;
    }
    .hero-h1 em {
      font-style: italic;
      color: var(--gold-lt);
    }
    .hero-tagline {
      font-family: var(--ff-serif);
      font-size: clamp(1.1rem, 2.5vw, 1.6rem);
      font-weight: 300;
      color: rgba(250,243,232,0.75);
      margin-bottom: 48px;
      letter-spacing: 1px;
    }
    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      align-items: center;
    }
    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: var(--red);
      color: var(--white);
      padding: 16px 36px;
      font-size: 0.85rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-weight: 700;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      transition: var(--transition);
    }
    .btn-primary:hover { background: var(--gold); color: var(--ink); }
    .btn-outline {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: transparent;
      color: var(--cream);
      padding: 16px 36px;
      font-size: 0.85rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-weight: 700;
      border: 1px solid rgba(250,243,232,0.4);
      border-radius: var(--radius);
      transition: var(--transition);
    }
    .btn-outline:hover { border-color: var(--gold-lt); color: var(--gold-lt); }
    .hero-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      margin-top: 64px;
      padding-top: 40px;
      border-top: 1px solid rgba(196,150,42,0.25);
    }
    .hero-badge {
      display: flex;
      flex-direction: column;
    }
    .hero-badge-num {
      font-family: var(--ff-display);
      font-size: 2rem;
      font-weight: 800;
      color: var(--gold-lt);
      line-height: 1;
    }
    .hero-badge-label {
      font-size: 0.72rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: rgba(250,243,232,0.55);
    }

    /* ─── XHOSA BEADWORK BAND ─────────────────────────────────── */
    .bead-band {
      width: 100%;
      height: 20px;
      background: repeating-linear-gradient(
        90deg,
        var(--red) 0px, var(--red) 8px,
        var(--gold) 8px, var(--gold) 16px,
        var(--ink) 16px, var(--ink) 24px,
        var(--gold) 24px, var(--gold) 32px
      );
    }

    /* ─── SECTION WRAPPER ─────────────────────────────────────── */
    .section {
      padding: 100px 5vw;
    }
    .section-inner {
      max-width: 1280px;
      margin: 0 auto;
    }
    .section-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 0.7rem;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: var(--red);
      font-weight: 700;
      margin-bottom: 16px;
    }
    .section-eyebrow::before {
      content: '';
      display: block;
      width: 28px; height: 2px;
      background: var(--gold);
    }
    .section-h2 {
      font-family: var(--ff-display);
      font-size: clamp(2rem, 4vw, 3.5rem);
      font-weight: 800;
      color: var(--ink);
      line-height: 1.1;
      margin-bottom: 16px;
    }
    .section-sub {
      font-family: var(--ff-serif);
      font-size: clamp(1rem, 1.8vw, 1.3rem);
      color: var(--mid);
      max-width: 580px;
      font-weight: 300;
    }

    /* ─── ABOUT ───────────────────────────────────────────────── */
    #about { background: var(--white); }
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
      margin-top: 60px;
    }
    .about-image {
      position: relative;
    }
    .about-image img {
      width: 100%;
      aspect-ratio: 4/5;
      object-fit: cover;
      border-radius: var(--radius);
    }
    .about-image-badge {
      position: absolute;
      bottom: -24px; right: -24px;
      background: var(--red);
      border: 3px solid var(--gold);
      color: var(--white);
      padding: 24px;
      border-radius: var(--radius);
      text-align: center;
      box-shadow: var(--shadow);
    }
    .about-image-badge strong {
      display: block;
      font-family: var(--ff-display);
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--gold-lt);
      line-height: 1;
    }
    .about-image-badge span {
      font-size: 0.65rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      opacity: 0.8;
    }
    .about-text p {
      color: var(--charcoal);
      font-size: 1rem;
      margin-bottom: 20px;
      line-height: 1.8;
    }
    .about-values {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-top: 32px;
    }
    .about-value {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 16px;
      background: var(--cream);
      border-radius: var(--radius);
      border-left: 3px solid var(--gold);
    }
    .about-value-icon {
      font-size: 1.4rem;
      flex-shrink: 0;
    }
    .about-value-label {
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: var(--red);
      display: block;
      margin-bottom: 4px;
    }
    .about-value p {
      font-size: 0.85rem;
      color: var(--mid);
      margin: 0;
    }

    /* ─── SERVICES ────────────────────────────────────────────── */
    #services { background: var(--cream-dk); }
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 24px;
      margin-top: 60px;
    }
    .service-card {
      background: var(--white);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(26,16,8,0.08);
      transition: transform var(--transition), box-shadow var(--transition);
      position: relative;
    }
    .service-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow);
    }
    .service-card-top {
      height: 8px;
      background: linear-gradient(90deg, var(--red) 0%, var(--gold) 100%);
    }
    .service-card-body {
      padding: 28px 24px 32px;
    }
    .service-icon {
      width: 52px; height: 52px;
      background: rgba(139,26,26,0.1);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 16px;
    }
    .service-name {
      font-family: var(--ff-display);
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 10px;
    }
    .service-desc {
      font-size: 0.88rem;
      color: var(--mid);
      line-height: 1.7;
    }
    .service-card-footer {
      padding: 0 24px 24px;
    }
    .service-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--red);
      transition: color var(--transition);
    }
    .service-link:hover { color: var(--gold); }
    .service-link svg { width: 14px; height: 14px; }

    /* ─── GALLERY ─────────────────────────────────────────────── */
    #gallery { background: var(--ink); }
    #gallery .section-h2 { color: var(--white); }
    #gallery .section-sub { color: rgba(250,243,232,0.6); }
    #gallery .section-eyebrow { color: var(--gold-lt); }

    .gallery-filters {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 40px;
      margin-bottom: 40px;
    }
    .filter-btn {
      padding: 9px 20px;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: rgba(250,243,232,0.55);
      border: 1px solid rgba(196,150,42,0.25);
      border-radius: 100px;
      transition: var(--transition);
      background: transparent;
      font-family: var(--ff-body);
    }
    .filter-btn:hover { color: var(--gold-lt); border-color: var(--gold); }
    .filter-btn.active {
      background: var(--red);
      color: var(--white);
      border-color: var(--red);
    }
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 20px;
    }
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: var(--radius);
      aspect-ratio: 3/4;
      cursor: pointer;
    }
    .gallery-item img {
      width: 100%; height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .gallery-item:hover img { transform: scale(1.08); }
    .gallery-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(26,16,8,0.9) 0%, transparent 50%);
      opacity: 0;
      transition: opacity var(--transition);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 24px;
    }
    .gallery-item:hover .gallery-overlay { opacity: 1; }
    .gallery-item-title {
      font-family: var(--ff-display);
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 4px;
    }
    .gallery-item-desc {
      font-size: 0.8rem;
      color: rgba(250,243,232,0.7);
    }
    .gallery-cat-badge {
      position: absolute;
      top: 16px; left: 16px;
      background: var(--red);
      color: var(--white);
      font-size: 0.65rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-weight: 700;
      padding: 5px 12px;
      border-radius: 100px;
    }
    .gallery-item.hidden { display: none; }

    /* ─── WHY US ───────────────────────────────────────────────── */
    #why { background: var(--cream); }
    .why-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 32px;
      margin-top: 60px;
    }
    .why-item {
      text-align: center;
      padding: 40px 24px;
      border: 1px solid var(--cream-dk);
      border-radius: var(--radius);
      transition: var(--transition);
      background: var(--white);
    }
    .why-item:hover {
      border-color: var(--gold);
      box-shadow: 0 0 0 4px rgba(196,150,42,0.1);
    }
    .why-num {
      font-family: var(--ff-display);
      font-size: 3rem;
      font-weight: 800;
      color: var(--red);
      opacity: 0.18;
      line-height: 1;
      margin-bottom: -8px;
    }
    .why-icon { font-size: 2rem; margin-bottom: 12px; }
    .why-title {
      font-family: var(--ff-display);
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 10px;
    }
    .why-text { font-size: 0.88rem; color: var(--mid); line-height: 1.7; }

    /* ─── TESTIMONIALS ────────────────────────────────────────── */
    #testimonials { background: var(--red); }
    #testimonials .section-h2 { color: var(--white); }
    #testimonials .section-sub { color: rgba(250,243,232,0.7); }
    #testimonials .section-eyebrow { color: var(--gold-lt); }
    #testimonials .section-eyebrow::before { background: var(--gold-lt); }
    .testi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 24px;
      margin-top: 60px;
    }
    .testi-card {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(250,243,232,0.15);
      border-radius: var(--radius);
      padding: 32px;
      position: relative;
    }
    .testi-quote {
      font-family: var(--ff-display);
      font-size: 4rem;
      color: var(--gold-lt);
      opacity: 0.35;
      line-height: 0.6;
      margin-bottom: 8px;
    }
    .testi-text {
      font-family: var(--ff-serif);
      font-size: 1.05rem;
      font-weight: 300;
      color: var(--cream);
      line-height: 1.7;
      margin-bottom: 24px;
    }
    .testi-author {
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .testi-avatar {
      width: 44px; height: 44px;
      background: var(--gold);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-family: var(--ff-display);
      font-size: 1.1rem;
      font-weight: 800;
      color: var(--ink);
      flex-shrink: 0;
    }
    .testi-name {
      font-weight: 700;
      color: var(--white);
      font-size: 0.9rem;
    }
    .testi-role {
      font-size: 0.75rem;
      color: rgba(250,243,232,0.55);
      letter-spacing: 1px;
    }
    .testi-stars { color: var(--gold-lt); font-size: 0.85rem; margin-bottom: 4px; }

    /* ─── CONTACT ─────────────────────────────────────────────── */
    #contact { background: var(--white); }
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 80px;
      margin-top: 60px;
      align-items: start;
    }
    .contact-info h3 {
      font-family: var(--ff-display);
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 24px;
    }
    .contact-detail {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 20px;
    }
    .contact-detail-icon {
      width: 44px; height: 44px;
      background: rgba(139,26,26,0.1);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }
    .contact-detail-label {
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--red);
      display: block;
      margin-bottom: 2px;
    }
    .contact-detail-val {
      font-size: 0.95rem;
      color: var(--charcoal);
    }
    .contact-detail-val a { transition: color var(--transition); }
    .contact-detail-val a:hover { color: var(--red); }

    .socials-row {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      margin-top: 32px;
    }
    .social-btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 12px 20px;
      border: 1px solid var(--cream-dk);
      border-radius: var(--radius);
      font-size: 0.8rem;
      font-weight: 700;
      color: var(--charcoal);
      transition: var(--transition);
      letter-spacing: 0.5px;
    }
    .social-btn:hover { border-color: var(--red); color: var(--red); background: rgba(139,26,26,0.05); }
    .social-btn svg { width: 18px; height: 18px; }

    /* ─── CONTACT FORM ────────────────────────────────────────── */
    .contact-form-wrap {
      background: var(--cream);
      border: 1px solid var(--cream-dk);
      border-radius: var(--radius);
      padding: 40px;
    }
    .form-title {
      font-family: var(--ff-display);
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 8px;
    }
    .form-sub {
      font-size: 0.85rem;
      color: var(--mid);
      margin-bottom: 28px;
    }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .form-group {
      margin-bottom: 18px;
    }
    .form-group label {
      display: block;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--charcoal);
      margin-bottom: 8px;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 13px 16px;
      background: var(--white);
      border: 1px solid var(--cream-dk);
      border-radius: var(--radius);
      font-family: var(--ff-body);
      font-size: 0.9rem;
      color: var(--ink);
      transition: border-color var(--transition);
      outline: none;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(196,150,42,0.12);
    }
    .form-group textarea { resize: vertical; min-height: 120px; }
    .form-success {
      background: #d4edda;
      border: 1px solid #c3e6cb;
      color: #155724;
      padding: 16px;
      border-radius: var(--radius);
      margin-bottom: 20px;
      font-weight: 700;
    }
    .form-error {
      background: #f8d7da;
      border: 1px solid #f5c6cb;
      color: #721c24;
      padding: 16px;
      border-radius: var(--radius);
      margin-bottom: 20px;
      font-weight: 700;
    }

    /* ─── MAP PLACEHOLDER ────────────────────────────────────── */
    .map-wrap {
      margin-top: 48px;
      border-radius: var(--radius);
      overflow: hidden;
      border: 1px solid var(--cream-dk);
    }
    .map-wrap iframe {
      width: 100%;
      height: 280px;
      border: none;
      display: block;
    }

    /* ─── FOOTER ──────────────────────────────────────────────── */
    #footer {
      background: var(--ink);
      padding: 60px 5vw 32px;
    }
    .footer-inner {
      max-width: 1280px;
      margin: 0 auto;
    }
    .footer-top {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      gap: 60px;
      padding-bottom: 48px;
      border-bottom: 1px solid rgba(196,150,42,0.2);
    }
    .footer-brand-name {
      font-family: var(--ff-display);
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--white);
      margin-bottom: 6px;
    }
    .footer-brand-tag {
      font-size: 0.7rem;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 16px;
    }
    .footer-brand-desc {
      font-size: 0.88rem;
      color: rgba(250,243,232,0.45);
      line-height: 1.8;
      max-width: 340px;
    }
    .footer-col-title {
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 20px;
    }
    .footer-links a {
      display: block;
      font-size: 0.88rem;
      color: rgba(250,243,232,0.45);
      margin-bottom: 10px;
      transition: color var(--transition);
    }
    .footer-links a:hover { color: var(--cream); }
    .footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 12px;
      padding-top: 28px;
    }
    .footer-copy {
      font-size: 0.78rem;
      color: rgba(250,243,232,0.3);
    }
    .footer-copy strong { color: var(--gold); }
    .footer-made {
      font-size: 0.72rem;
      color: rgba(250,243,232,0.25);
    }

    /* ─── FLOATING WHATSAPP ───────────────────────────────────── */
    .whatsapp-float {
      position: fixed;
      bottom: 28px; right: 28px;
      z-index: 9999;
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .whatsapp-label {
      background: var(--ink);
      color: var(--white);
      padding: 8px 16px;
      border-radius: 100px;
      font-size: 0.78rem;
      font-weight: 700;
      white-space: nowrap;
      box-shadow: var(--shadow);
      opacity: 0;
      transform: translateX(10px);
      transition: var(--transition);
      pointer-events: none;
    }
    .whatsapp-float:hover .whatsapp-label {
      opacity: 1;
      transform: translateX(0);
    }
    .whatsapp-btn {
      width: 58px; height: 58px;
      background: #25D366;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 8px 28px rgba(37,211,102,0.4);
      transition: transform var(--transition), box-shadow var(--transition);
    }
    .whatsapp-btn:hover {
      transform: scale(1.1);
      box-shadow: 0 12px 36px rgba(37,211,102,0.55);
    }
    .whatsapp-btn svg { width: 30px; height: 30px; }
    .whatsapp-pulse {
      position: absolute;
      top: 0; right: 0;
      width: 16px; height: 16px;
      background: #FF4444;
      border-radius: 50%;
      border: 2px solid var(--white);
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.3); opacity: 0.7; }
    }

    /* ─── RESPONSIVE ──────────────────────────────────────────── */
    @media (max-width: 900px) {
      .nav-links { display: none; }
      .hamburger { display: flex; }
      .about-grid { grid-template-columns: 1fr; gap: 48px; }
      .about-image-badge { bottom: 16px; right: 16px; }
      .contact-grid { grid-template-columns: 1fr; gap: 48px; }
      .footer-top { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 640px) {
      .section { padding: 72px 5vw; }
      .about-values { grid-template-columns: 1fr; }
      .form-row { grid-template-columns: 1fr; }
      .footer-top { grid-template-columns: 1fr; gap: 36px; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .hero-badges { gap: 20px; }
      .hero-badge-num { font-size: 1.6rem; }
    }
    @media (prefers-reduced-motion: reduce) {
      * { transition: none !important; animation: none !important; }
    }
  </style>
</head>
<body>

<!-- ══════════════════════════ NAVBAR ══════════════════════════ -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="#hero" class="nav-logo">
      <div class="nav-logo-mark">C</div>
      <div class="nav-logo-text">
        <span class="nav-logo-name">Connie's Creations</span>
        <span class="nav-logo-sub">& Design · Gauteng</span>
      </div>
    </a>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="https://wa.me/<?= $whatsapp ?>?text=Hello%2C+I%27d+like+to+enquire+about+clothing." target="_blank" class="nav-cta">Order Now</a></li>
    </ul>
    <button class="hamburger" id="hamburgerBtn" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
  <div class="nav-mobile" id="navMobile">
    <a href="#about" class="mobile-link">About</a>
    <a href="#services" class="mobile-link">Services</a>
    <a href="#gallery" class="mobile-link">Gallery</a>
    <a href="#contact" class="mobile-link">Contact</a>
    <a href="https://wa.me/<?= $whatsapp ?>" target="_blank">📲 WhatsApp Us</a>
  </div>
</nav>

<!-- ══════════════════════════ HERO ════════════════════════════ -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-pattern"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">Ubuntu Wezokunxiba</div>
    <h1 class="hero-h1">Where <em>Tradition</em> Meets Tailored Style</h1>
    <p class="hero-tagline">School wear · Formal wear · Traditional attire · Corporate uniforms · Custom designs</p>
    <div class="hero-actions">
      <a href="#gallery" class="btn-primary">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
        View Our Work
      </a>
      <a href="https://wa.me/<?= $whatsapp ?>?text=Hello+Connie%2C+I+would+like+to+enquire+about+clothing." target="_blank" class="btn-outline">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp Us
      </a>
    </div>
    <div class="hero-badges">
      <div class="hero-badge"><span class="hero-badge-num">500+</span><span class="hero-badge-label">Garments Made</span></div>
      <div class="hero-badge"><span class="hero-badge-num">8+</span><span class="hero-badge-label">Years Experience</span></div>
      <div class="hero-badge"><span class="hero-badge-num">50+</span><span class="hero-badge-label">Schools Served</span></div>
      <div class="hero-badge"><span class="hero-badge-num">100%</span><span class="hero-badge-label">Custom Made</span></div>
    </div>
  </div>
</section>

<!-- Xhosa beadwork band -->
<div class="bead-band"></div>

<!-- ══════════════════════════ ABOUT ═══════════════════════════ -->
<section id="about" class="section">
  <div class="section-inner">
    <div class="section-eyebrow">Our Story</div>
    <h2 class="section-h2">Stitched with Culture,<br>Worn with Pride</h2>
    <p class="section-sub">Born in the heart of Gauteng, rooted in the richness of AmaXhosa heritage.</p>

    <div class="about-grid">
      <div class="about-image">
        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=700&q=80" alt="Connie at work crafting a beautiful garment" loading="lazy" />
        <div class="about-image-badge">
          <strong>8+</strong>
          <span>Years of<br>Excellence</span>
        </div>
      </div>
      <div class="about-text">
        <div class="section-eyebrow" style="margin-bottom:16px">Connie's Creations & Design</div>
        <p>
          At Connie's Creations & Design, every stitch tells a story. Founded with a passion
          for celebrating African identity through fashion, we specialise in crafting garments
          that honour tradition while embracing modern style. Based in Gauteng, we serve
          individuals, schools, families, and corporates across South Africa.
        </p>
        <p>
          Our roots are deep — inspired by the timeless elegance of AmaXhosa dress,
          the bold geometry of umbhaco, and the vibrant beadwork that speaks before a
          word is uttered. We carry that language into every piece we create.
        </p>
        <p>
          Whether it's a child's school uniform, a matric farewell gown, a traditional
          wedding outfit, or a corporate uniform set — we measure, cut, and deliver with
          love, precision and pride.
        </p>
        <div class="about-values">
          <div class="about-value"><span class="about-value-icon">✂️</span><div><span class="about-value-label">Custom Made</span><p>Every garment is made to your exact measurements</p></div></div>
          <div class="about-value"><span class="about-value-icon">🌍</span><div><span class="about-value-label">Cultural Pride</span><p>Rooted in AmaXhosa tradition & African identity</p></div></div>
          <div class="about-value"><span class="about-value-icon">⭐</span><div><span class="about-value-label">Quality First</span><p>Premium fabrics & meticulous craftsmanship</p></div></div>
          <div class="about-value"><span class="about-value-icon">⚡</span><div><span class="about-value-label">Fast Turnaround</span><p>Reliable delivery on time, every time</p></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="bead-band"></div>

<!-- ══════════════════════════ SERVICES ════════════════════════ -->
<section id="services" class="section">
  <div class="section-inner">
    <div class="section-eyebrow">What We Do</div>
    <h2 class="section-h2">All Your Clothing Solutions</h2>
    <p class="section-sub">From classroom to ceremony, from corporate to cultural — we have you covered.</p>

    <div class="services-grid">
      <?php
      $services = [
        ["🏫", "School Wear",       "Complete school uniform sets, sports kits, tracksuits, and branded school clothing for learners of all ages."],
        ["🎓", "Matric Farewell",    "Show-stopping matric farewell gowns and suits designed to make your night truly unforgettable."],
        ["🌿", "Traditional Attire", "Authentic AmaXhosa umbhaco dresses, mbhaco sets, lobola outfits & traditional ceremony wear."],
        ["💼", "Corporate Uniforms", "Professional branded workwear, corporate blazers, reception uniforms and staff clothing."],
        ["👗", "Custom Designs",     "Your vision, our hands. Bring your own design idea and we'll bring it to life, perfectly."],
        ["🎉", "Event & Formal",     "Gowns, suits and coordinated outfits for weddings, graduations, functions and celebrations."],
      ];
      foreach ($services as $svc): ?>
      <div class="service-card">
        <div class="service-card-top"></div>
        <div class="service-card-body">
          <div class="service-icon"><?= $svc[0] ?></div>
          <div class="service-name"><?= $svc[1] ?></div>
          <p class="service-desc"><?= $svc[2] ?></p>
        </div>
        <div class="service-card-footer">
          <a href="#contact" class="service-link">
            Get a Quote
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════ GALLERY ═════════════════════════ -->
<section id="gallery" class="section">
  <div class="section-inner">
    <div class="section-eyebrow">Our Work</div>
    <h2 class="section-h2">Gallery of Creations</h2>
    <p class="section-sub">Browse our previous work — filter by category to find what speaks to you.</p>

    <div class="gallery-filters">
      <?php foreach ($categories as $key => $label): ?>
      <button class="filter-btn <?= $key === 'all' ? 'active' : '' ?>" data-filter="<?= $key ?>">
        <?= $label ?>
      </button>
      <?php endforeach; ?>
    </div>

    <div class="gallery-grid" id="galleryGrid">
      <?php foreach ($gallery as $item): ?>
      <div class="gallery-item" data-category="<?= $item['category'] ?>">
        <img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>" loading="lazy" />
        <div class="gallery-cat-badge"><?= $categories[$item['category']] ?></div>
        <div class="gallery-overlay">
          <div class="gallery-item-title"><?= $item['title'] ?></div>
          <div class="gallery-item-desc"><?= $item['desc'] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="bead-band"></div>

<!-- ══════════════════════════ WHY US ══════════════════════════ -->
<section id="why" class="section">
  <div class="section-inner">
    <div class="section-eyebrow">Why Choose Us</div>
    <h2 class="section-h2">Craftsmanship You Can Trust</h2>
    <p class="section-sub">We don't just make clothing — we make statements.</p>
    <div class="why-grid">
      <?php
      $whys = [
        ["👩‍🎨","Experienced Designer","Years of hands-on expertise in garment making, pattern cutting and fabric selection."],
        ["📐","Perfect Fit Guaranteed","Every item is made to your exact measurements — no off-the-shelf sizing."],
        ["🎨","Cultural Authenticity","Deep knowledge of traditional Xhosa and South African garment traditions."],
        ["🚀","On-Time Delivery","We respect your deadlines — school terms, event dates and functions."],
        ["💰","Affordable Pricing","Premium quality at prices that are fair and accessible for all budgets."],
        ["💬","Personal Service","Direct communication from consultation to final fitting — you deal with Connie."],
      ];
      foreach ($whys as $i => $w): ?>
      <div class="why-item">
        <div class="why-icon"><?= $w[0] ?></div>
        <div class="why-title"><?= $w[1] ?></div>
        <p class="why-text"><?= $w[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════ TESTIMONIALS ════════════════════ -->
<section id="testimonials" class="section">
  <div class="section-inner">
    <div class="section-eyebrow">Client Love</div>
    <h2 class="section-h2">What Our Clients Say</h2>
    <p class="section-sub">Real stories from real people dressed by Connie.</p>
    <div class="testi-grid">
      <?php
      $testis = [
        ["N","Nomvula M.","Mpumalanga Parent","Connie made my daughter's school uniforms and they are absolutely stunning. The quality is exceptional and they have lasted the whole year without fading. We are ordering again for next year!","★★★★★"],
        ["T","Thandi K.","Bride, Johannesburg","My lobola outfit was beyond what I imagined. Connie understood the cultural significance and created something that made me feel like a true Xhosa queen on my special day.","★★★★★"],
        ["L","Lungisa P.","Grade 12 Learner","My matric farewell dress turned every single head in the room. Connie listened to exactly what I wanted and delivered perfection. I cried when I first saw it!","★★★★★"],
        ["M","Mandisa N.","HR Manager, Pretoria","We ordered 40 corporate uniform sets for our entire team. Connie handled everything professionally, kept to the deadline and the team loves wearing them. Highly recommended!","★★★★★"],
      ];
      foreach ($testis as $t): ?>
      <div class="testi-card">
        <div class="testi-quote">"</div>
        <div class="testi-stars"><?= $t[4] ?></div>
        <p class="testi-text"><?= $t[2] ?></p>
        <div class="testi-author">
          <div class="testi-avatar"><?= $t[0] ?></div>
          <div>
            <div class="testi-name"><?= $t[1] ?></div>
            <div class="testi-role"><?= $t[3] ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════ CONTACT ═════════════════════════ -->
<section id="contact" class="section">
  <div class="section-inner">
    <div class="section-eyebrow">Get In Touch</div>
    <h2 class="section-h2">Let's Create Something Beautiful</h2>
    <p class="section-sub">Ready to order? Have a question? We'd love to hear from you.</p>

    <div class="contact-grid">
      <div class="contact-info">
        <h3>Contact Details</h3>

        <div class="contact-detail">
          <div class="contact-detail-icon">📍</div>
          <div>
            <span class="contact-detail-label">Location</span>
            <span class="contact-detail-val">Gauteng, South Africa<br><small style="color:var(--mid)">By appointment — we come to you or visit our studio</small></span>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon">📱</div>
          <div>
            <span class="contact-detail-label">Phone / WhatsApp</span>
            <span class="contact-detail-val"><a href="tel:<?= $phone ?>"><?= $phone ?></a></span>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon">✉️</div>
          <div>
            <span class="contact-detail-label">Email</span>
            <span class="contact-detail-val"><a href="mailto:<?= $email ?>"><?= $email ?></a></span>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon">🕐</div>
          <div>
            <span class="contact-detail-label">Hours</span>
            <span class="contact-detail-val">Mon – Fri: 08:00 – 17:00<br>Sat: 09:00 – 14:00<br>Sun: By Appointment</span>
          </div>
        </div>

        <h3 style="margin-top:36px;margin-bottom:16px">Follow Us</h3>
        <div class="socials-row">
          <a href="<?= $facebook ?>" target="_blank" class="social-btn">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            Facebook
          </a>
          <a href="<?= $instagram ?>" target="_blank" class="social-btn">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            Instagram
          </a>
          <a href="<?= $tiktok ?>" target="_blank" class="social-btn">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.87a8.27 8.27 0 004.84 1.54V7.01a4.85 4.85 0 01-1.07-.32z"/></svg>
            TikTok
          </a>
        </div>

        <div class="map-wrap">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d458042.87!2d27.954!3d-26.204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950c68f0406a51%3A0x238ac9d9b1d34041!2sGauteng%2C%20South%20Africa!5e0!3m2!1sen!2sza!4v1"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            title="Gauteng, South Africa"></iframe>
        </div>
      </div>

      <div class="contact-form-wrap">
        <div class="form-title">Send an Enquiry</div>
        <p class="form-sub">Tell us what you need and we'll get back to you within 24 hours.</p>

        <?php if ($form_message === 'success'): ?>
        <div class="form-success">✅ Thank you! Your message has been received. We'll be in touch shortly.</div>
        <?php elseif ($form_message === 'error'): ?>
        <div class="form-error">❌ Please fill in all required fields and try again.</div>
        <?php endif; ?>

        <form method="POST" action="#contact">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name *</label>
              <input type="text" id="name" name="name" placeholder="Your full name" required />
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="+27 71 234 5678" />
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" placeholder="your@email.com" required />
          </div>
          <div class="form-group">
            <label for="service">Service Required</label>
            <select id="service" name="service">
              <option value="">— Select a service —</option>
              <?php foreach ($categories as $key => $label): if ($key === 'all') continue; ?>
              <option value="<?= $key ?>"><?= $label ?></option>
              <?php endforeach; ?>
              <option value="other">Other / Not Sure</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Tell Us More *</label>
            <textarea id="message" name="message" placeholder="Describe what you need — sizes, occasion, quantity, deadline..." required></textarea>
          </div>
          <button type="submit" name="contact_submit" class="btn-primary" style="width:100%;justify-content:center">
            Send Enquiry
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
          </button>
          <p style="font-size:0.75rem;color:var(--mid);margin-top:12px;text-align:center">Or WhatsApp us directly for a faster response</p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════ FOOTER ══════════════════════════ -->
<footer id="footer">
  <div class="footer-inner">
    <!-- Xhosa pattern strip -->
    <div style="margin-bottom:48px">
      <svg width="100%" height="24" viewBox="0 0 800 24" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="800" height="24" fill="#1A1008"/>
        <?php for ($i = 0; $i < 50; $i++): $x = $i * 16; ?>
        <polygon points="<?= $x ?>,0 <?= $x+8 ?>,12 <?= $x+16 ?>,0" fill="<?= $i % 4 === 0 ? '#8B1A1A' : ($i % 4 === 1 ? '#C4962A' : ($i % 4 === 2 ? '#8B1A1A' : '#2D2416')) ?>"/>
        <?php endfor; ?>
      </svg>
    </div>

    <div class="footer-top">
      <div>
        <div class="footer-brand-name">Connie's Creations & Design</div>
        <div class="footer-brand-tag">Ubuntu Wezokunxiba · Gauteng, South Africa</div>
        <p class="footer-brand-desc">
          All your clothing solutions — from school wear to traditional attire, formal gowns to corporate uniforms. Made with love, rooted in culture, delivered with pride.
        </p>
      </div>
      <div>
        <div class="footer-col-title">Quick Links</div>
        <div class="footer-links">
          <a href="#about">About Us</a>
          <a href="#services">Our Services</a>
          <a href="#gallery">Gallery</a>
          <a href="#testimonials">Testimonials</a>
          <a href="#contact">Contact</a>
        </div>
      </div>
      <div>
        <div class="footer-col-title">Contact</div>
        <div class="footer-links">
          <a href="tel:<?= $phone ?>"><?= $phone ?></a>
          <a href="mailto:<?= $email ?>"><?= $email ?></a>
          <a><?= $location ?></a>
          <a href="<?= $facebook ?>" target="_blank">Facebook</a>
          <a href="<?= $instagram ?>" target="_blank">Instagram</a>
          <a href="<?= $tiktok ?>" target="_blank">TikTok</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p class="footer-copy">&copy; <?= date('Y') ?> <strong>Connie's Creations & Design</strong>. All rights reserved. · Gauteng, South Africa</p>
      <p class="footer-made">Built with pride in 🇿🇦 Mzansi</p>
    </div>
  </div>
</footer>

<!-- ══════════════════════════ WHATSAPP FLOAT ══════════════════ -->
<div class="whatsapp-float">
  <span class="whatsapp-label">Chat on WhatsApp</span>
  <a href="https://wa.me/<?= $whatsapp ?>?text=Hello+Connie%2C+I%27d+like+to+enquire+about+clothing." target="_blank" class="whatsapp-btn" aria-label="Chat on WhatsApp">
    <div class="whatsapp-pulse"></div>
    <svg viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>
</div>

<!-- ══════════════════════════ SCRIPTS ═════════════════════════ -->
<script>
  // Navbar scroll effect
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  });

  // Hamburger toggle
  const hamburger = document.getElementById('hamburgerBtn');
  const navMobile = document.getElementById('navMobile');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    navMobile.classList.toggle('open');
  });
  // Close mobile nav on link click
  document.querySelectorAll('.mobile-link').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('open');
      navMobile.classList.remove('open');
    });
  });

  // Gallery filter
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.dataset.filter;
      galleryItems.forEach(item => {
        if (filter === 'all' || item.dataset.category === filter) {
          item.classList.remove('hidden');
          item.style.animation = 'fadeIn 0.4s ease';
        } else {
          item.classList.add('hidden');
        }
      });
    });
  });

  // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.service-card, .why-item, .testi-card, .gallery-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(24px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(el);
  });
</script>
<style>
@keyframes fadeIn { from { opacity:0; transform:scale(0.97); } to { opacity:1; transform:scale(1); } }
</style>
</body>
</html>
