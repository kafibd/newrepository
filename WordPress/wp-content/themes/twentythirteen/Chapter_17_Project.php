<?php
/*
	Template name:Chapter_17_Project
*/
?>
<?php 
	function Chapter_17_Project_css(){
?>
		<link rel="stylesheet" href="<?php bloginfo("template_url")?>/Chapter_17_Project.css" type="text/css">
<?php 
	}
	add_filter('wp_head', 'Chapter_17_Project_css');
?>
<?php get_header();?>
<body>
	<p class="pheader">Chapter 17 Homework</p>
	<p>Ordered List:<span>Top 10 favorite games</span></p>
	<ol class="olclass">
		<li>Cricket</li>
		<li>Football</li>
		<li>Tennis</li>
		<li>Badminton</li>
		<li>Volleyball</li>
		<li>Golf</li>
		<li>Table Tennis</li>
		<li>Swimming</li>
		<li>Gymnastics</li>
		<li>Baseball</li>
	</ol>
	<p>Unordered List:<span>Name of my Cousins</span></p>
	<ul class="ulclass">
		<li>Safi</li>
		<li>Hafi</li>
		<li>Mithu</li>
		<li>Rubel</li>
		<li>Sohel</li>
		<li>Himel</li>
		
	</ul>
	<p>Table:<span>Employee Salary</span></p>
	<table class="stable">
		<thead>
			<th>Employee Name</th>
			<th>Department</th>
			<th>Salary</th>
		</thead>
		<tbody>
			<tr><td>Md.Aminul Islam</td><td>Accounts</td><td class="sclass">35,000</td></tr>
			<tr><td>Md.Saiful Islam</td><td>Accounts</td><td class="sclass">40,000</td></tr>
			<tr><td>Md.Hafijul Islam</td><td>Accounts</td><td class="sclass">25,000</td></tr>
			<tr><td>Md.Hafizur Rahman</td><td>Personnel</td><td class="sclass">50,000</td></tr>
			<tr><td>Md.Sirajul Haque</td><td>Personnel</td><td class="sclass">45,000</td></tr>
			<tr><td>Md.Nurul Huda</td><td>Payroll</td><td class="sclass">70,000</td></tr>
		</tbody>
	</table>
</body>
<?php get_sidebar('MySideBar');?>
<?php get_footer();?>