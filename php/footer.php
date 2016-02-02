<footer class="band bottom"> 
	<div class="container">
		<div class="eight columns color_red1 alpha">
			<div class="thick">
			<p>Copyright &copy; 2013 <br/>
			<a href="http://www.benjaminferreiradesigns.com">Benjamin Ferreira Designs</a> 
			</p>
			</div>
		</div><!--end eight-->
		<div class="eight columns color_red1 omega">
			<div class="thick">
			<p>Hand coded with Love by <br/>
			Benjamin Ferreira.</p>
			</div>
		</div><!--end eight-->
	</div><!--end container-->
</footer><!--end footer band-->

</div><!--main page end-->


<!-- js
  ================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script>
  	 $(document).ready(function() {
        $('.fancybox').fancybox({

        });
    });
</script>
<script>
	$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 0
    });
</script>
<script type="text/javascript">
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<!-- End Document
================================================== -->
</body>
</html>
