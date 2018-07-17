<?php get_header(); ?>

<div id="quake-info"><div><span></span></div></div>

	<?php echo get_custom_logo(); ?>
	
<canvas id="globekit-canvas" width="1024" height="1024"></canvas>

	<div id="social-button">
		<?php //echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS] ');?>
		<div class="social">
                <ul>
                    <li class="share">Follow</li>
                    <li class="twitter icon">
                        <a href="http://twitter.com/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13">
                                <path d="M1690,70.471a6.446,6.446,0,0,1-1.89.53,3.387,3.387,0,0,0,1.45-1.862,6.551,6.551,0,0,1-2.09.816,3.238,3.238,0,0,0-2.39-1.062,3.326,3.326,0,0,0-3.29,3.363,3.226,3.226,0,0,0,.09.766,9.249,9.249,0,0,1-6.77-3.515,3.439,3.439,0,0,0-.44,1.692,3.387,3.387,0,0,0,1.46,2.8,3.243,3.243,0,0,1-1.49-.421v0.043a3.344,3.344,0,0,0,2.64,3.3,3.288,3.288,0,0,1-.87.118,3.172,3.172,0,0,1-.62-0.061,3.3,3.3,0,0,0,3.07,2.336,6.5,6.5,0,0,1-4.86,1.393,9.124,9.124,0,0,0,5.03,1.511,9.4,9.4,0,0,0,9.34-9.571c0-.145,0-0.291-0.01-0.435A6.8,6.8,0,0,0,1690,70.471Z" transform="translate(-1674 -68.906)"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="instagram icon">
                        <a href="http://instagram.com/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M204.837,113a4.837,4.837,0,1,1-9.584-.93H192v6.43a2.5,2.5,0,0,0,2.5,2.5h11a2.5,2.5,0,0,0,2.5-2.5v-6.43h-3.253A4.832,4.832,0,0,1,204.837,113Zm0.663-8h-11a2.5,2.5,0,0,0-2.5,2.5v2.709h4.05a4.835,4.835,0,0,1,7.9,0H208V107.5A2.5,2.5,0,0,0,205.5,105Zm1.222,3.088a0.448,0.448,0,0,1-.446.447h-1.34a0.449,0.449,0,0,1-.447-0.447v-1.339a0.449,0.449,0,0,1,.447-0.447h1.34a0.448,0.448,0,0,1,.446.447v1.339ZM202.977,113A2.977,2.977,0,1,0,200,115.977,2.977,2.977,0,0,0,202.977,113Z" transform="translate(-192 -105)"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="facebook icon">
                        <a href="http://facebook.com/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path d="M1738,68.012h-12a2.006,2.006,0,0,0-2,2V82a2.005,2.005,0,0,0,2,2h6.07V78.269h-1.92v-2.5h1.92V74.52a3.307,3.307,0,0,1,3.24-3.44h1.77V73.9h-1.58a0.487,0.487,0,0,0-.54.565v1.306h2.12v2.5h-2.12V84H1738a2.005,2.005,0,0,0,2-2V70.011A2.006,2.006,0,0,0,1738,68.012Z" transform="translate(-1724 -68)"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
	</div>

<div id="scrolling-content">
    <div id="scrolling-area">
        <?php
        $query = new WP_Query( array( 'meta_key' => 'page', 'meta_value' => 'first', 'post_type' => 'post' ) );
        if( $query->have_posts() ): $query->the_post(); ?>
        <div class="copy-section topic-globekit">
            <div class="copy-content">
                <h1 class="animated-text"><?php the_title(); ?>  <span class="emdash"><span></span><?php echo strip_tags(get_the_excerpt()); ?></span></h1>
                <p class="animated-body"><?php the_content(); ?></p>
            </div>
        </div>
        <?php  endif; wp_reset_query(); ?>
        <?php
            $query = new WP_Query( array( 'meta_key' => 'page', 'meta_value' => 'second', 'post_type' => 'post' ) );
            if( $query->have_posts() ): $query->the_post(); ?>
                <div class="copy-section topic-performance">
                    <div class="copy-content">
                        <h1 class="animated-text"><?php the_title(); ?> <span class="emdash"><span></span><?php echo strip_tags(get_the_excerpt()); ?></span></h1>
                        <p class="animated-body"><?php the_content(); ?></p>
                    </div>
                </div>
            <?php  endif; wp_reset_query(); ?>

        <?php
        $query = new WP_Query( array( 'meta_key' => 'page', 'meta_value' => 'third', 'post_type' => 'post' ) );
        if( $query->have_posts() ): $query->the_post(); ?>
            <div class="copy-section topic-customizable">
                <div class="copy-content">
                    <h1 class="animated-text"><?php the_title(); ?> <span class="emdash"><span></span><?php echo strip_tags(get_the_excerpt()); ?></span></h1>
                    <p class="animated-body"><?php the_content(); ?></p>
                </div>
            </div>
        <?php  endif; wp_reset_query(); ?>

        <?php
        $query = new WP_Query( array( 'meta_key' => 'page', 'meta_value' => 'fourth', 'post_type' => 'post' ) );
        if( $query->have_posts() ): $query->the_post(); ?>
            <div class="copy-section topic-platform">
                <div class="copy-content">
                    <h1 class="animated-text"><?php the_title(); ?> <span class="emdash"><span></span><?php echo strip_tags(get_the_excerpt()); ?></span></h1>
                    <p class="animated-body"><?php the_content(); ?></p>
                </div>
            </div>
        <?php  endif; wp_reset_query(); ?>

       <?php
        $query = new WP_Query( array( 'meta_key' => 'page', 'meta_value' => 'fifth', 'post_type' => 'post' ) );
        if( $query->have_posts() ): $query->the_post(); ?>
            <div class="copy-section topic-platform">
                <div class="copy-content">
                    <h1 class="animated-text"><?php the_title(); ?> <span class="emdash"><span></span><?php echo strip_tags(get_the_excerpt()); ?></span></h1>
                    <p class="animated-body"><?php the_content(); ?></p>
                </div>
            </div>
        <?php  endif; wp_reset_query(); ?>

 <?php
        $query = new WP_Query( array( 'meta_key' => 'page', 'meta_value' => 'sixth', 'post_type' => 'post' ) );
        if( $query->have_posts() ): $query->the_post(); ?>
            <div class="copy-section topic-quote">
                <div class="copy-content">
                    <h1 class="animated-text"><?php the_title(); ?> <span class="emdash"><span></span><?php echo strip_tags(get_the_excerpt()); ?></span></h1>
                    <p class="animated-body"><?php the_content(); ?></p>
                </div>
            </div>
        <?php  endif; wp_reset_query(); ?>
		
        <div class="copy-section topic-form">
            <div class="copy-content">
                <div id="form-section">
                    <form id="request-form" action="" method="POST" target="no-target">
                        <div class="input-block" id="block-one">
                            <label for="NAME">Name</label>
                            <input id="name" type="text" value="" required name="NAME">
                        </div>
                        <div class="input-block" id="block-two">
                            <label for="COMPANY">Company</label>
                            <input id="company" type="text" value="" required name="COMPANY">
                        </div>
                        <div class="input-block" id="block-three">
                            <label for="EMAIL">Email</label>
                            <input id="email" type="email" value="" required name="EMAIL">
                        </div>
                       <div class="textarea-block" id="block-four">
                            <label for="NEEDS">Tell us more about your needs...</label>
                            <textarea id="NEEDS" name="NEEDS"></textarea>
                        </div>

                        <!--<input id="request" type="submit" value="Request a Quote" name="SUBMIT">-->
                    </form>
                    <span id="error-message">* Required</span>
                    <iframe src="about:blank" id="no-target" name="no-target" style="visibility:hidden; display:none"></iframe>
                </div>
                <h2 id="success-message">Thank<span class="emdash"><span></span>You</span></h2>
            </div>
        </div>
    </div>
</div>

<div id="pagination">
    <div id="pagination-text">
        <div id="page-count-tens">
            <div class="page-numbers">
                <div class="page-number">0</div>
            </div>
        </div>

        <div id="page-count-ones">
            <div class="page-numbers">
                <div class="page-number">1</div>
                <div class="page-number">2</div>
                <div class="page-number">3</div>
                <div class="page-number">4</div>
                <div class="page-number">5</div>
                <div class="page-number">6</div>
            </div>
        </div>
        <span id="page-count-total">/ 6</span>
    </div>

 <!--   <p class="viz-caption">M 4.5+ Earthquakes, Past Month
        <a href="https://earthquake.usgs.gov/" target="_blank">Source: USGS.gov
            <svg xmlns="http://www.w3.org/2000/svg" width="17.06" height="9.281" viewBox="0 0 17 9">
                <path d="M1672.08,744.45l-4.07,4.52-0.89-.861L1670,745h-15v-1.021h14.96l-3.27-3.468,0.94-.83Z" transform="translate(-1655 -739.688)"/>
            </svg>
        </a>
    </p>
-->
    <ul id="pagination-dots"></ul>
</div>

<div id="mouse-indicator">
    <div id="mouse-wheel">
        <div class="mouse-outline">
            <svg width="18px" height="30px">
                <path fill="#fff" d="M729,903.789v9.419a9.009,9.009,0,1,0,18,0v-9.419A9.009,9.009,0,1,0,729,903.789Zm9-7.327a7.19,7.19,0,0,1,7,7.327v9.419a7.007,7.007,0,1,1-14,0v-9.419A7.19,7.19,0,0,1,738,896.462Z" transform="translate(-729 -894.375)"/>
            </svg>
        </div>
        <div class="wheel animate">
            <svg width="2px" height="6px">
                <path fill="#fff" d="M738,905.358a1.027,1.027,0,0,0,1-1.046v-3.14a1,1,0,1,0-2,0v3.14A1.027,1.027,0,0,0,738,905.358Z" transform="translate(-737 -900.125)"/>
            </svg>
        </div>
    </div>
</div>

<div class='req'>
<a id="request" href="#"><span>Drop a Quick Line</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15">
        <path d="M450.622,782.89l-1.648-6.087,13.846,7.249Zm-2.309,3.644-2.094-2.128,2.094-1.879,0.937,1.942Zm14.318-1.316-13.609,6.789,1.619-5.7Z" transform="translate(-446.219 -776.812)"/>
    </svg>
</a>

<a id="request-demo" href="/booking/"><span>Request a Demo</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15">
        <path d="M450.622,782.89l-1.648-6.087,13.846,7.249Zm-2.309,3.644-2.094-2.128,2.094-1.879,0.937,1.942Zm14.318-1.316-13.609,6.789,1.619-5.7Z" transform="translate(-446.219 -776.812)"/>
    </svg>
</a>
</div>

<script>
    Site.init();

    WebFontConfig = {
        google: {
            families: ["Roboto:100,300,500:latin"]
        },
        /* Called when all the specified web-font provider modules (google, typekit, and/or custom) have reported that they have started loading fonts. */
        loading: function() {
            // do something
        },
        /* Called when each requested web font has started loading. The fontFamily parameter is the name of the font family, and fontDescription represents the style and weight of the font. */
        fontloading: function(fontFamily, fontDescription) {
            // do something
        },
        /* Called when each requested web font has finished loading. The fontFamily parameter is the name of the font family, and fontDescription represents the style and weight of the font. */
        fontactive: function(fontFamily, fontDescription) {
            // do something
        },
        /* Called if a requested web font failed to load. The fontFamily parameter is the name of the font family, and fontDescription represents the style and weight of the font. */
        fontinactive: function(fontFamily, fontDescription) {
            // do something
        },
        /* Called when all of the web fonts have either finished loading or failed to load, as long as at least one loaded successfully. */
        active: function() {
            setTimeout(function(){
                Site.fontsDidActivate();
            }, 250);
        },
        /* Called if the browser does not support web fonts or if none of the fonts could be loaded. */
        inactive: function() {
            setTimeout(function(){
                Site.fontsDidActivate();
            }, 250);
        }
    };
</script>
<div id="copyright">
	<?php dynamic_sidebar( 'copyright' ); ?>
</div>
<!-- Self hosting this part, for Ghostery's sake
<script src="./static/js/third-party/google/WebFontLoader.js"></script>
-->
<script>
	jQuery(function(){	
		setTimeout(function(){
// jQuery('#request-demo').show(100);
jQuery('.custom-logo-link').show(100);
jQuery('#social-button').show(100);
}, 2500);
	});
</script>
<?php get_footer(); ?>