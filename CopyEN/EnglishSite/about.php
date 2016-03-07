<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>EnglishClub|T_T</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/about.css" rel="stylesheet" type="text/css">
	    <link href="images/tea.ico" rel="shortcut icon" type="image/x-icon">


    <script type="text/javascript">
        window.onload=function()
        {
            var months=['January','February','March','April','May','June','July',
                'August','September','October','November','December'];
            var today= new Date();
            document.getElementById("sc").innerHTML = months[today.getMonth()] + " " + today.getDate()+ ", " + today.getFullYear();

        }


    </script>
</head>
<body class="body">
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
<div class="mainContent">
    <div class="content">
        <article class="topContent">
            <header>
                <h2></h2>
            </header>
            <footer>
                <p class="post-info">
				</p>
            </footer>
            <content>
                <p class="p-con">Место,где вы усовершенствуете свой английский, развлечётесь и просто хорошо проведёте время.</p> 

            </content>
        </article>
        

    </div>

</div>

<footer class="mainFotter">
<p>Copyright &copy; <a href="http://vk.com/badivi" target="_blank">Ibrahim Bdawie</a></p>

</footer>

</body>
</html>