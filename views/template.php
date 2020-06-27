<!DOCTYPE html>
<html lang="es">
<head>
<title>Birding Fest</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="views/styles/style.css">
<link rel="stylesheet" type="text/css" href="views/styles/util.css">
<link rel="stylesheet" type="text/css" href="views/styles/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
<link rel="icon" type="image/png" sizes="16x16" href="views/images/core-img/icon.png">
</head>

<body>

	<?php
        $modulos = new Enlaces();
        $modulos -> enlacesController();
    ?>


		<script src="views/js/jquery/jquery-2.2.4.min.js"></script>
		<script src="views/js/popper.min.js"></script>
		<script src="views/js/bootstrap.min.js"></script>
		<script src="views/js/plugins.js"></script>
		<script src="views/js/map-active.js"></script>
		<script src="views/js/active.js"></script>
		<script src="views/js/main.js"></script>
		

		<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
		<script>var timelineSwiper = new Swiper ('.timeline .swiper-container', {
  direction: 'vertical',
  loop: false,
  speed: 1600,
  pagination: '.swiper-pagination',
  paginationBulletRender: function (swiper, index, className) {
    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
    return '<span class="' + className + '">' + year + '</span>';
  },
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
    768: {
      direction: 'horizontal',
    }
  }
});</script>

</body>

</html>
