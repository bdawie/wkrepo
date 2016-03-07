<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>EnglishClub|T_T</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	    <link href="css/pictures.css" rel="stylesheet" type="text/css">
			<link href="images/tea.ico" rel="shortcut icon" type="image/x-icon">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	
	<script>
$(function()
{
$(".slider #1").show("fade",2000);
$(".slider #1").delay(2000).hide("slide",{direction:"left"},1000);
var sc=$(".slider img").size();
var count=2;

setInterval(function()
{
$(".slider #"+count).show("slide",{direction:"right"},1000);
$(".slider #"+count).delay(2000).hide("slide",{direction:"left"},1000);

if(count==sc){
count=1;
}
else{
count++;

}


 },4000
);


});


</script>


   
	

</head>
<body class="body" >
<header class="mainheader">
    <img src="images/cuplg.png">
    <span id="sc"></span>
    <nav>
        <ul>
            <li><a class="active" href="index.php" > Home</a></li>
            <li><a href="about.php"> About</a></li>
            <li><a href="contact.php"> Contact</a></li>
			<li> <a href="pictures.php"> Pictures</a></li>
        </ul>
    </nav>
</header>

    <div class="slider">       
            <img id="1" src="images/talk1.jpg" alt="talk1">
			<img id="2" src="images/talk2.jpg" alt="talk2">
            <img id="3" src="images/talk3.jpg" alt="talk3">
            <img id="4" src="images/talk4.jpg" alt="talk4">
            <img id="6" src="images/talk6.jpg" alt="talk6">
            <img id="7" src="images/talk8.jpg" alt="talk7">
            <img id="8" src="images/talk9.jpg" alt="talk8">
            <img id="9" src="images/talk10.jpg" alt="talk9">

               
				         

    </div>

<footer class="mainFotter">
<p>Copyright &copy; <a href="http://vk.com/badivi" target="_blank">Ibrahim Bdawie</a></p>

</footer>

</body>
</html>