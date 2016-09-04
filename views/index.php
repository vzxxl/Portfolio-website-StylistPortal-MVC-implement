<?php include('views/layouts/header.php'); ?>

	<div class="slider-container" style="border-radius: 50%"><ul class="slider rslides">
	<li><img class="slide" src="img/slide1-min.jpg" alt=""></li>
	<li><img class="slide" src="img/slide2-min.jpg" alt=""></li>
	<li><img class="slide" src="img/slide3-min.jpg" alt=""></li>
	</ul></div>

	<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

<?php include('views/layouts/footer.php'); ?>