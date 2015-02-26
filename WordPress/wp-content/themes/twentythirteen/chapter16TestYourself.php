<?php
/*
	Template name:chapter16TestYourself
 * */
?>
<?php 
	function chapter16TestYourself_css(){
?>
		<link rel="stylesheet" href="<?php bloginfo("template_url")?>/chapter16TestYourself.css" type="text/css">
<?php 
	}
	add_filter('wp_head', 'chapter16TestYourself_css');
?>
<?php get_header();?>
<body>
	<p>
		<h3>My Own Invented Toy</h3>
		<Video controls>
			  <source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm>
			<!-- 
			  <source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm>
			  <source src=http://techslides.com/demos/sample-videos/small.ogv type=video/ogg> 
			  <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
			  <source src=http://techslides.com/demos/sample-videos/small.3gp type=video/3gp>
			-->
		</Video>
		<h3>Story Line</h3>
		I was working in this project since I was on grade school,
		now I'm in college; I have more knowledge about invention that's why I was able to
		finish my invented toy.
		
		</br></br></br>
		<span id="audio-1st">Recording during Invention Progress</span></br>
		<span id="audio-2nd">I also record my voice during my invention.</span></br></br></br>
		<audio controls>
			<source src="./audios/maid.mp3" type="audio/mpeg">
		</audio>
		</div>
		
		<p id="audio-3rd">
		I record my voice just incase I forgot something
		about the progress of the toy, this will help me remind the progress
		and also to share something to my friends.
		</p><br />
		<p id="audio-4th" >
		If you want to ask something about my invention, just message!<br>
		Please fill up the information below.
		</p>
	</p>
	<form id="information">
		<fieldset><legend>Information</legend>
			<label>Name:<input type="text" name="name" ></label></br>
			Already invented something?
			<select>
				<option vlaue="Yes">Yes</option>
				<option vlaue="No">NO</option>
			</select></br>
			<label>Email:<input type="email" name="email" ></label></br>
			<label>Date you leave question:<input type="date" name="date" ></lable></br>
			Interests:</br>
			<input type="checkbox" name="invention">invention</br>
			<input type="checkbox" name="science">science</br>
			<input type="checkbox" name="programming">programming</br>
			<lable>Your Queston:<input type="text" name="question" ></lable></br>
			<input type="submit" name="submit" value="Submit"></br>
		</fieldset>
	</form>
</body>
<?php get_sidebar('right');?>
<?php get_footer();?>