<?php

$SlideShow = DP::run_query("SELECT * FROM slideshow",[],2);

?>
	<div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<?php
					foreach ($SlideShow as $img) {
						
					
					?>
					<li>
						<img src=<?php echo $level.IMG.$img['tenfile']?> alt="Slide">
					</li>
					<?php
				}
					?>
					
					
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->