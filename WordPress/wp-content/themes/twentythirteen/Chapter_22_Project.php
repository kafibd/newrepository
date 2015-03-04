<?php
/*
 	Template name:Chapter_22_Project
 */
?>
<?php 
	function Chapter_22_Project_css(){
?>
		<link rel="stylesheet" href="<?php bloginfo("template_url")?>/Chapter_22_Project.css" type="text/css">
<?php 
	}
	add_filter('wp_head', 'Chapter_22_Project_css');
?>
<?php get_header();?>
<div class="body-img">
	<p class="content-header">Chapter_22_Project</p>
	<p class="paragraph1">
		<span class="content">Amy Pascal speaks about the Sony hacks, calls actors 'bottomless pits of need'.1</span><br />
		By Lizzie Plaugic on February 12, 2015 02:14 pm.Amy Pascal spoke publicly yesterday for the first time since 
		stepping down as the chief of Sony Pictures, Recode reports. At the Women in the World conference in San Francisco, 
		Pascal talked openly, if vaguely, about the Sony hacks, pay inequality, and needy Hollywood stars.
	</p>
	<p class="paragraph2">
		<span class="content">Sony will spend $15 million to deal with cyberattack fallout.2</span><br />
		
		By Sam Byford on February 4, 2015 01:37 am.Sony was meant to announce its third quarter earnings today, 
		but since the catastrophic cyberattack directed at Sony Pictures took out much of its accounting equipment, 
		the company is only able to issue approximate guidance for now. And there’s at least some good news: the 
		company estimates it made a net profit of ¥89 billion ($756 million) between October and December, up 238 
		percent from a year earlier.
	</p>
	
	
	<p class="paragraph3">
		<span class="content">Sony Pictures expects to have some critical systems back online in early February.3</span><br>
		
		By Sam Byford on January 23, 2015 04:06 am.Sony has announced that it's applying for an extension of the deadline 
		to submit its third-quarter securities report "due to the amount of destruction and disruption that occurred" following 
		the massive cyberattack directed against its movie division. Sony Pictures shut down its network in response to the hack, 
		but most of the financial systems and "many other critical information technology applications" won't be back online until 
		early February. The Wall Street Journal reported at the end...
	</p>
</div>


<?php get_sidebar('right');?>
<?php get_footer();?>


