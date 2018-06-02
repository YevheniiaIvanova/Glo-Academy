<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- <link rel="icon" href="../../../../favicon.ico"> -->
	<title>Добрый картон</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap-grid.min.css" rel="stylesheet">

<!-- Animate CSS -->
<link href="css/animate.css" rel="stylesheet">

<link rel="stylesheet" href="slick/slick.css">
<link rel="stylesheet" href="slick/slick-theme.css">
 

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;subset=cyrillic" rel="stylesheet"> 

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>

<body>


<!-- menu -->
<?php include 'menu.php';?>


<!-- HEADER -->
<?php include 'header.php';?>

<!-- MAIN -->
  <section class="main dark-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-5">
          <div class="main-img animate hidden-mobile ">
            <img src="img/main/main-img-full.png" alt="коробки">
          </div>
        </div>
        <!-- /.col-5 -->

        <div class="col-12 col-lg-7">
          <div class="main-text">
            <h1 class="main-text__title">
              Производство упаковки из гофрокартона
            </h1>
            <!-- /.main-text__title -->
            <div class="main-text__subtitle">
              с доставкой по всей России
            </div>
            <!-- /.main-text__subtitle -->

            <div class="main-text__form">
              <div class="form-title">
                Получите индивидуальное предложение
                на производство и поставку гофропродукции
                <span class="form-title_important">
                  Образцы упаковки бесплатно!
                </span>
              </div>
              <!-- /.form-title -->
              <form class="form" method="POST" action="mailer/smart.php">
                <input class="form__input phone" type="tel" name="user_phone" placeholder="Введите номер телефона" required>
                <button class="button button_big" type="submit">Оставить заявку!</button>
              </form>
              <!-- /.form -->
              <small class="form-small">*Минимальный заказ 500шт</small>
            </div>
            <!-- /.main-text__form -->
          </div>
          <!-- /.main-text -->
        </div>
        <!-- /.col-7 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.main -->

<!-- FOOTER -->
<?php include 'footer.php';?>


<div class="overlay">
	<div class="popup">
		<div class="popup-title">Форма обратной связи</div>
		<!-- /.popup-title -->
		<div class="popup-close">&times;</div>
		<!-- /.popup-close -->
		
		<div class="popup-form">
			<div class="popup-form-header">
				Получите индивидуальное предложение
				<span>на производство и поставку изделий</span>
			</div>
			<form action="mailer/smart.php"  method="POST" class="main-form">
				<label for="phone" class="popup-form__label">
					Введите ваш номер телефона:
				</label>
				<input type="tel" class="popup-form__input phone" name="user_phone"  placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" required>
				<button class="button popup-form__btn">
					Оставить заявку!
				</button>
			</form>
			<div class="popup-form__note">
				*Минимальный заказ 500шт
			</div>
		</div>
		<!-- /.popup-form -->
	</div>
	<!-- /.popup -->
</div>
<!-- /.overlay -->


 <div class="overlay-thanks">
  <div class="popup">
    <div class="popup-title">Спасибо</div>
    <!-- /.popup-title -->
    <div class="popup-close">&times;</div>
    <!-- /.popup-close -->
    
    <div class="popup-descr">
      Спасибо,за заявку!</br>
      В течении 15 минут, с вами свяжется наш менеджер!</br>
      Хорошего дня :)</br>      
    </div>
  </div>
  <!-- /.popup -->
</div>
<!-- /.overlay-thanks -->




	<!-- Bootstrap core JavaScript ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
 <script src="js/jquery.maskedinput.min.js"></script>
 <script src="slick/slick.min.js"></script>
 <script>
 	$('.manufacture-slider_top').slick({
 		arrows: false,
 		slidesToShow: 1,
 		slidesToScroll: 1,
 		asNavFor: '.manufacture-slider_bottom',
 		responsive: [
      {
      breakpoint: 577,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<div class="slider-arrow slider-arrow-mobile slider-arrow-mobile_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow-mobile slider-arrow-mobile_right"></div>'
      }
    },
      {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        infinite: true
      }
    }
  ]
 	});

 		$('.manufacture-slider_bottom').slick({
 		arrows: true,
 		slidesToShow: 4,
 		slidesToScroll: 1,
 		focusOnSelect: false,
 		prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_left"></div>',
 		nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_right"></div>',
 		asNavFor: '.manufacture-slider_top'
 	});

 		$('.feedback-slider').slick({
 			slidesToShow: 3,
 			slidesToScroll: 1,
 			focusOnSelect: false,
 			//variableWidth: true,
 			prevArrow: '<div class="slider-arrow slider-arrow_feedback slider-arrow_left"></div>',
 		 nextArrow: '<div class="slider-arrow slider-arrow_feedback slider-arrow_right"></div>',
 		 responsive: [
 		 {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
 		        {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        //centerMode: true
      }
    },
      {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
     {
      breakpoint: 577,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        centerPadding: '8px',
        prevArrow: '<div class="slider-arrow slider-arrow-mobile slider-arrow-mobile_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow-mobile slider-arrow-mobile_right"></div>'
      }
    }
  ]
 		});
 </script>

 <script src="js/wow.min.js"></script>
 <script>
 	if(window.screen.width > 991)
 	{
 		new WOW().init();
 	}
 	else if (window.screen.width <= 991)
 	{
    var wow = new WOW(
    {
    mobile: false, 
   }
  );
  } 
 </script>


<script>
	$(document).ready(function(){

		$('.header-contacts__button').on("click", function(){
     $('.overlay').show();
		});
  
  $('.popup-close').on("click", function(){
  	  $('.overlay').hide();
  });

  $(".phone").mask("+7(999) 999-99-99");
	});

</script>

<script>

    $('form').submit(function(event) {
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "mailer/smart.php",
        data: $(this).serialize()
      }).done(function() {
        $(this).find("input").val("");
        $('.overlay-thanks').show();
        //alert("Спасибо за заявку!");
        $("form").trigger("reset");
      });
      return false;
    });

    $('.popup-close').on("click", function(){
      $('.overlay-thanks').hide();
  });
  </script>
</body>
</html>