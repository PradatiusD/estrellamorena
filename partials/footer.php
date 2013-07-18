    </body>
<script>
    jQuery(document).ready(function($){
    	$('.dropdown').addClass('dropdownTEMP');
    	$('.dropdown-menu').addClass('dropdown-menuTEMP');

		function fixNav () {
			var bodyWidth = $('body').width();
			if (bodyWidth>481) {    			
				$('.dropdownTEMP').addClass('dropdown');
				$('.dropdown-menuTEMP').addClass('dropdown-menu');
				$('.nav').css({'height':'auto'},1000);
			}
		}

    	var mobileCounter = 0;
    	$('.PDmobile').click(function(){
			$('.dropdownTEMP').removeClass('dropdown');
			$('.dropdown-menuTEMP').removeClass('dropdown-menu');

    		if (mobileCounter===0) {
    			$('.nav').animate({'height':365},1000);
    			mobileCounter++;
    		} else {
    			$('.nav').animate({'height':32},1000);
    			mobileCounter--;
    		}
    		
    		
    	});
    	$(window).resize(function(){
    		fixNav();
    	})


	})
</script>
</html>