<?php get_header('events'); ?>
    <div class="container">
		<h3>My city: 123456789</h3>
		</div>
    <div class="container"><div id="custom-logo-img"><a href="/"><img src="/wp-content/uploads/2018/07/Без-имени-2.png"></a></div></div>
    <div class="container">
        <h3>Free Meeting Scheduling Software</h3>
        <h4>Schedule your appointments faster and forget the back-and-forth emails.</h4>
    </div>
    <div id="main-calendar">
        <div id="calendar-events">
            <div id="custom-logo-img"><img src="http://mindfulness.nitishgarg.org/wp-content/uploads/2018/07/Без-имени-2-1.png" /></div>
            <?php echo do_shortcode('[events_calendar long_events=0 ]');?></div>
        <div id="calendar-front">
            <?php

            if(have_posts()):the_post(); ?>
                <?php the_title(); ?>
                <?php the_content(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div id="main-form">

        <div class='flex'>
            <div class="input-block" id="block-one">
                <label>Name *</label>
                <input id="name" type="text" value="" required name="NAME">
                <span class='required'>This field is required. Please enter a value</span>
            </div>
            <div class="input-block" id="block-two">
                <label>Company *</label>
                <input id="company" type="text" value="" required name="COMPANY">
                <span class='required'>This field is required. Please enter a value</span>
            </div>
        </div>
        <div class='flex'>
            <div class="input-block" id="block-three">
                <label>Email *</label>
                <input id="email" type="email" value="" required name="EMAIL" >
                <span class='required'>This field is required. Please enter a value</span>
            </div>
            <div class="input-block" id="block-three">
                <label>Phone number *</label>
                <input id="phone" type="tel" value="" required name="tel">
                <span class='required'>This field is required. Please enter a value</span>
            </div>
        </div>
        <div class='flex w-100'>
            <div class="input-block" id="block-three">
                <label>Location *</label>
                <input id="location" type="text" value="" required name="location">
                <span class='required'>This field is required. Please enter a value</span>
            </div>
        </div>
        <div class='flex w-100'>
            <div class="textarea-block" id="block-four">
                <label>Tell us more about your needs...</label>
                <textarea id="NEEDS" name="NEEDS"></textarea>
            </div>
        </div>
        <div id="buttons">
            <div id="back-block">Back</div>
            <div id="next-block">Next</div>
        </div>
    </div>
    <div id="confirm-form">
        <h4>Data privacy</h4>
        <div class="confirm">
            <p>Mindfulness is committed to protecting and respecting your privacy, and we’ll only use your personal information to administer your account and to provide the products and services you requested from us. From time to time, we would like to contact you about our products and services, as well as other content that may be of interest to you. If you consent to us contacting you for this purpose, please tick below to say how you would like us to contact you:</p>
            <p><input type="checkbox" required name="confirm"> I agree to receive other communications from Mindfulness.</p>
            <p><span id="conf" class='required'>This field is required. Please enter a value</span></p>
            <p>You may unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices, and how we are committed to protecting and respecting your privacy, please review our Privacy Policy.</p>
            <p>By clicking submit below, you consent to allow HubSpot to store and process the personal information submitted above to provide you the content requested.</p>
        </div>
        <div id="buttons">
            <div id="back-block-conf">Back</div>
            <div class="submit">Next</div>
        </div>
    </div>
    <div id="sucess-form">
        <div class="is--module private-card width-100 p-all-0 namespaced-hack-section Section__ScrollWrapper-jajphQ eSErqF"><div class="m-bottom-8 m-x-4 p-y-12 p-x-3 text-center"><div class="private-flex profile-header text-center Flex__StyledFlex-jcapUM gcTUUL" direction="column" wrap="nowrap"><span class="private-icon-circle__outer booking-success-icon private-icon-holder__outer" style="transform: rotate(0deg); padding: 0.75em; font-size: 32px; border-radius: 50%; background-color: rgba(7,82,40, 0.05); border-color: #075228; border-style: solid; border-width: 4px;"><span aria-hidden="true" class="private-icon private-icon__high private-icon-circle__inner private-icon-holder__inner" style="color:#075228; transform: rotate(0deg) translateY(-6.3%); font-size: 2rem;     font-family: spacesword!important;">success</span></span><span class="headline is--heading-2 m-top-4 m-bottom-0 m-x-1 overflow-y-auto success-header"><i18n-string data-locale-at-render="en-us" data-key="summary.header.online">Booking confirmed</i18n-string></span></div><p class="text-center"><i18n-string data-locale-at-render="en-us" data-key="summary.tagline.online">You're booked with Justin Lee. <br> An invitation has been emailed to you.</i18n-string></p><h4 id='s-date'></h4><h4 id='s-time'></h4></div></div>
    </div>


<?php get_footer(); ?>