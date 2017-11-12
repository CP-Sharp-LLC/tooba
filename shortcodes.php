<?php


function sc_headerbanner( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'number' => 0,
		'text'   => ''
	), $atts );

	return "
<div>
	<div class='pad30 green_buffer'>
		<h3 style='text-align: center; text-transform: uppercase;'>
		<span style='font-size: 80px; padding: 0 10px; font-family: 'Poppins',sans-serif; top: 1vh; position: relative;'>"
	       . $a['number'] .
	       '</span>' .
	       $a['text'] . '</h3>
		</div>
</div>';
}

function sc_about( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'About Us',
		'text'  => 'something about us',
		'image' => 'assets/images/others/interior.jpg'
	), $atts );
	return '<div class="container">
                <div class="row">
                <div class="col col-md-6 col-sm-6" style="background-size: cover; background-image: url(\''.$a['image'].'\')"></div>
                    <div class="col col-md-6 col-sm-6">
                        <div class="section-title left">
                            <h3>' . $a['title'] . '</h3>
                        </div>
                        <p>' . $a['text'] . '</p>
                        <div class="feature-list" style="margin-top: 40px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-2">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="feature-icon text-center">
                                                    <i class="flaticon-sofa-1"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a href="index.html#">
                                                    <h3 class="media-heading">Dependable</h3>
                                                </a>
                                                <p>Nulla facilisi curabitur iaculisacc aug, ex ea commodo conse.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-2">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="feature-icon text-center">
                                                    <i class="flaticon-bookshelf"></i>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <a href="index.html#">
                                                    <h3 class="media-heading">Organized</h3>
                                                </a>
                                                <p>Nulla facilisi curabitur iaculisacc aug, ex ea commodo conse.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="skill-section">
                                        <div class="skill-shortcode">
                                            <div class="skill">
                                                <span class="skill-name">Web Design</span>          
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" data-percentage="65" style="transition: width 3s; width: 65%;">
                                                        <span class="progress-bar-percentage pull-right"><span class="count">65</span> %</span>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="skill-shortcode">
                                            <div class="skill">
                                                <span class="skill-name">Joomla</span>          
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" data-percentage="95" style="transition: width 3s; width: 95%;">
                                                        <span class="progress-bar-percentage pull-right"><span class="count">95</span> %</span>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="skill-shortcode">
                                            <div class="skill">
                                                <span class="skill-name">WordPress</span>          
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" data-percentage="60" style="transition: width 3s; width: 60%;">
                                                        <span class="progress-bar-percentage pull-right"><span class="count">60</span> %</span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>';
}

function sc_counter() {
	return 'About us';
}

function sc_productfeed() {
	return 'About us';
}

function sc_team() {
	return 'About us';
}

function sc_contact() {
	return 'About us';
}

function sc_news() {
	return 'News';
}

function sc_testimonials() {
	return 'Testimonials';
}

function sc_footer() {
	return 'footer';
}