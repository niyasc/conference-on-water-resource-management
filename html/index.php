<?php
	require("../include/config.php");
	if($_SERVER["REQUEST_METHOD"] == "GET"&&!empty($_GET["page"]))
	{
		if($_GET["page"]=="detailed-objective")
		{
			render("detailed-objective.php",["title"=>"Background and Objective"]);
		}
		else if ($_GET["page"]=="conference-themes")
		{
			render("conference-themes.php",["title"=>"Conference Themes"]);
		}
		else if ($_GET["page"]=="about-jamia")
		{
			render("about-jamia.php",["title"=>"Jamia Millia Islamia"]);
		}
		else if ($_GET["page"]=="about-civil")
		{
			render("about-civil.php",["title"=>"Department of Civil Engg."]);
		}
		else if ($_GET["page"]=="submission")
		{
			render("submission.php",["title"=>"Submission of Abstract and Full Papers"]);
		}
		else if ($_GET["page"]=="important-dates")
		{
			render("important-dates.php",["title"=>"Important Dates"]);
		}
		else if ($_GET["page"]=="registration-fees")
		{
			render("registration-fees.php",["title"=>"Registration Fees"]);
		}
		else if ($_GET["page"]=="correspondence")
		{
			render("correspondence.php",["title"=>"Correspondence"]);
		}
		else if ($_GET["page"]=="behind-screens")
		{
			render("behind-screens.php",["title"=>"Behind The Screens"]);
		}
		else
		{
			render("page-not-found.php",["title"=>"Page not Found"]);
		}
	}
	else
	{
		render("home.php",["title"=>"Home Page"]);
	}
?>
