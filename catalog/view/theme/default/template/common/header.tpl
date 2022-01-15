<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>
<script src="catalog/view/javascript/jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen" />
<link href="catalog/view/javascript/font-awesome/4.7.0/css/all.min.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/stylesheet.css" type="text/css" rel="stylesheet" />
<link href="../style.css" type="text/css" rel="stylesheet" />
<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>
</head>
<body class="<?php echo $class; ?>">
<header>
  <div class="container">
          <div class="row">
            <div class="col-6 header-item d-none d-md-flex">
              <img class="header-product" src="../image/header-product.png" alt="">
            </div>
            <div class="col-md-6 header-item">
              <a href="/">
                <img class="header-logo d-none d-md-flex" src="../image/logo.png" alt="">
                <img class="header-logo-mobile d-flex d-md-none" src="../image/logo-mobile.png" alt="">
              </a>
              <div class="header-contacts">
                <div class="header-contacts-title">
                  <h3>интернет - магазин подарков</h3>
                </div>
                <div class="header-contacts-bar">
                  <div class="social">
                    <a href="#"><div class="social-svg-inst"></div></a>
                    <a href="#"><div class="social-svg-vk"></div></a>
                    <a href="#"><div class="social-svg-ph"></div></a>
                  </div>
                  <div class="phone">
                    <a href="tel:88008889407">8800 222 94 07</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</header>
<?php if ($categories) { ?>
  <div class="container sticky-top nav-container">
    <nav class="navbar navbar-expand-lg navbar-dark nav-bg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span><p>Меню</p>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
          <h5 class="offcanvas-title">Asgard.ru Меню</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1">
            <?php foreach ($categories as $category) { ?>
              <?php if ($category['children']) { ?>
                <div class="accordion accordion-flush d-block d-lg-none" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <?php echo $category['name']; ?>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
                          <ul class="list-unstyled">
                          <?php foreach ($children as $child) { ?>
                            <li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
                          <?php } ?>
                          </ul>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } else { ?>
              <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
              <?php } ?>
              <?php } ?>
            </ul>
            <form class="d-none">
              <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
              <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <div class="nav-function">
      123
    </div>
  </div>
  <?php } ?>
