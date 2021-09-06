<footer>
			<div class="container">
				<div class="d-flex flex-column flex-md-row">
					<a href="<?php echo home_url('/') ?>" class="footer-logo">
						<img src="<?php echo get_field('footer_logo', 6); ?>" alt="logo" title="" class="img-fluid">
					</a>
					<div class="social d-flex flex-column flex-md-row ms-md-auto align-items-center">
						<div class="social-text">
							<?php echo get_field('footer_copyright_text', 6); ?>
						</div>
						<ul class="list-unstyled social-list d-flex align-items-center mb-0">
							<?php if(get_field('facebook_link', 6) != ''){ ?>
							<li>
								<a href="<?php echo get_field('facebook_link', 6); ?>" class="social-fb"></a>
							</li>
							<?php } if(get_field('twitter_link', 6) != ''){ ?>
							<li>
								<a href="<?php echo get_field('twitter_link', 6); ?>" class="social-twitter"></a>
							</li>
							<?php } if(get_field('youtube_link', 6) != ''){ ?>
							<li>
								<a href="<?php echo get_field('youtube_link', 6); ?>" class="social-utube"></a>
							</li>
							<?php } if(get_field('linkedin_link', 6) != ''){ ?>
							<li>
								<a href="<?php echo get_field('linkedin_link', 6); ?>" class="social-linkedin"></a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</footer>
<?php wp_footer(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/plugin/3d-carousel/main.js"></script>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#carousel-learn').owlCarousel({
						loop:false,
						margin:0,
						nav:true,
						dots:false,
						responsive:{
								0:{
										items:1
								},
								600:{
										items:1
								},
								1000:{
										items:1.30
								}
						}
				});

				// $('.slider').slick({
				//   slidesToShow: 4,
				//   slidesToScroll: 1,
				//   arrows: true,
				//   dots: false,
				//   centerMode: true,
				//   variableWidth: true,
				//   infinite: true,
				//   focusOnSelect: true,
				//   cssEase: 'linear',
				//   touchMove: true,
				//   prevArrow:'<button class="slick-prev"></button>',
				//   nextArrow:'<button class="slick-next"></button>',
				//   centerPadding: '0px',
				// });


				// var imgs = $('.slider img');
				// imgs.each(function(){
				//   var item = $(this).closest('.item');
				//   item.css({
				//     'background-image': 'url(' + $(this).attr('src') + ')', 
				//     'background-position': 'center',            
				//     '-webkit-background-size': 'cover',
				//     'background-size': 'cover', 
				//   });
				//   $(this).hide();
				// });

				$('#carousel-vid').owlCarousel({
				    loop:false,
				    margin:0,
				    nav:true,
				    dots:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        600:{
				            items:1
				        },
				        1000:{
				            items:1
				        }
				    }
				})


				Conclave.auto();
				 // AOS.init();
				 $(".scroll-down").click(function() {
					 $("html, body").stop().animate({scrollTop:500}, '500', 'swing');
				 });


				 var Slider = (function() {
						 var initSlider = function() {
								 var dir = $("html").attr("dir");
								 var swipeHandler = new Hammer(document.getElementById("slider"));
								 swipeHandler.on('swipeleft', function(e) {
										 if (dir == "rtl")
												 $(".arrow-left").trigger("click");
										 else
												 $(".arrow-right").trigger("click");
								 });

								 swipeHandler.on('swiperight', function(e) {
										 if (dir == "rtl")
												 $(".arrow-right").trigger("click");
										 else
												 $(".arrow-left").trigger("click");
								 });

								 $(".arrow-right , .arrow-left").click(function(event) {
										 var nextActiveSlide = $(".slide.active").next();

										 if ($(this).hasClass("arrow-left"))
												 nextActiveSlide = $(".slide.active").prev();

										 if (nextActiveSlide.length > 0) {
												 var nextActiveIndex = nextActiveSlide.index();
												 $(".dots span").removeClass("active");
												 $($(".dots").children()[nextActiveIndex]).addClass("active");

												 updateSlides(nextActiveSlide);
										 }
								 });

								 $(".dots span").click(function(event) {
										 var slideIndex = $(this).index();
										 var nextActiveSlide = $($(".slider").children()[slideIndex]);
										 $(".dots span").removeClass("active");
										 $(this).addClass("active");

										 updateSlides(nextActiveSlide);
								 });

								 var updateSlides = function(nextActiveSlide) {
										 var nextActiveSlideIndex = $(nextActiveSlide).index();

										 $(".slide").removeClass("prev-1");
										 $(".slide").removeClass("next-1");
										 $(".slide").removeClass("active");
										 $(".slide").removeClass("prev-2");
										 $(".slide").removeClass("next-2");

										 nextActiveSlide.addClass("active");

										 nextActiveSlide.prev().addClass("prev-1");
										 nextActiveSlide.prev().prev().addClass("prev-2");
										 nextActiveSlide.addClass("active");
										 nextActiveSlide.next().addClass("next-1");
										 nextActiveSlide.next().next().addClass("next-2");
								 }

								 var updateToNextSlide = function(nextActiveSlide)
								 {
										 
								 }
						 }
						 return {
								 init: function() {
										 initSlider();
								 }
						 }
				 })();

				 $(function() {
						 Slider.init();
				 });

				 $("#myModal1").on('hidden.bs.modal', function (e) {
				      $("#myModal1 iframe").attr("src", $("#myModal1 iframe").attr("src"));
				  });

				 $('.navbar-toggler').click(function(){
				 	$(this).toggleClass("active");
				 	$('body').toggleClass("body-scroll");
				 });

			});
		</script>
		
	</body>
</html>