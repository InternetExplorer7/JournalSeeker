<?php
require_once 'db.php';
$q = "SELECT * FROM Articles ORDER BY ArticleID DESC LIMIT 5"; // Articles
if($result = mysqliQuery($q))
{
    $article = "";
    
    while($row = $result -> fetch_assoc())
    {
        $article .= "<div class='blogPost'><a href='$row[url]'><h3>$row[Title]</h3></a><p>$row[Description]</p> 
        </div>";
    }
      
}
$q = "SELECT * FROM Blog ORDER BY BlogID DESC LIMIT 5"; // Blog
if($result = mysqliQuery($q))
{
    $blog = "";
    
    while($row = $result -> fetch_assoc())
    {
        $blog .= "<div class='blogPost'><h3>$row[Title]</h3><p>$row[subcontent]</p>
         <p>$row[Date]</p></div>";
    }
    
   
}
$q = "SELECT * FROM Events ORDER BY EventID DESC LIMIT 4"; // Events
if($result = mysqliQuery($q))
{
    $event = "";
    
    while($row = $result -> fetch_assoc())
    {
        $event .= "<div class='blogPost'><a href='mailto:journalingcircle@gmail.com'><h3><strong>$row[Title]</strong></h3></a><p><i>$row[Description]</i></p><p><i>$row[Location]</i></p> </div>";
    }
    
}


$q = "SELECT * FROM Workshops ORDER BY WorkshopID DESC LIMIT 4";
if($result = mysqliQuery($q)){

    $workshop = "";

    while($row = $result -> fetch_assoc())
    {
        $workshop .= "<div class='wk'><h4><strong>$row[Title]</strong></h4><p>$row[Description]</p><p>$row[Fee]</p><em><p>$row[Link]</p></em></div>";
    }
}

$q = "SELECT * FROM Welcome";
if($result = mysqliQuery($q)){

    $welcome = "";

    while($row = $result -> fetch_assoc())
    {
        $welcome = "<p>$row[Content]</p>";
    }
}

$q = "SELECT * FROM About";
if($result = mysqliQuery($q)){

    $about = "";

    while($row = $result -> fetch_assoc())
    {
        $about = "<p>$row[AboutMe]</p>";
    }
}

$q = "SELECT * FROM What";
if($result = mysqliQuery($q)){

    $what = "";

    while($row = $result -> fetch_assoc())
    {
        $what = "<p>$row[Content]</p>";
    }
}

$q = "SELECT * FROM Benefits";
if($result = mysqliQuery($q)){

    $benefits = "";

    while($row = $result -> fetch_assoc())
    {
        $benefits = "<p>$row[Content]</p>";
    }
}




?>

<!DOCTYPE html>
<html>
<head>
  <meta name="Title" content="TheJournalSeeker"/>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-language" content="en-us" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="keywords" content="Journal-Seeker" />
<meta name="description" content="The Journal Seeker aims to provide journaling workshops for individuals, groups and organizations. The Journal Seeker is a space for those that want to dive deep into the art of journal writing. Just as a lotus maintains its radiant self despite being surrounded by mud, journaling is a tool to maintain your authenticity despite your external circumstances. Your spirit and soul emerge like a butterfly as you join me on an inward journey through the power of journaling." />
	  <meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css"/>
<title>Journal Seeker</title>
</head>
<body>

        <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '432940328490',
          xfbml      : true,
          version    : 'v2.1'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>


	<nav>
        <div id="bg">
        <a href="#"><img src="journal.png" alt="The Journal Seeker"/></a>
<ul>
<li><a href="https://plus.google.com/105391788211656217283/posts">blog</a></li>
<li><a href="#linkstop">links</a></li>
<li><a href="#eventstop">events</a></li>
<li><a href="#servicestop">services</a></li>
<li><a href="#articlestop">articles</a></li>
<li><a href="#aboutstop">about</a></li>
</ul>
</div>

<div id="social">
<ul>
<li><a href="http://www.journalcircle.blogspot.ca" target="_blank"><img src="SocialMediaButtons/BloggerIcon.png" alt="BloggerIcon"/></a></li>
<li><a href="https://www.facebook.com/Journalingcircle" target="_blank"><img src="SocialMediaButtons/FacebookIcon.png" alt="FacebookIcon"/></a></li>
<li><a href="https://twitter.com/JournalSeeker" target="_blank"><img src="SocialMediaButtons/TwitterIcon.png" alt="TwitterIcon"/></a></li>
<!--<li><a href="#"><img src="SocialMediaButtons/PinterestIcon.png" alt="PinterestIcon"/></a></li> ADD LATER IF WANTED -->
</ul>
</div>
</nav>

<div id="wrapper">
    <div id="seeker">
<h3>Welcome to the Journal Seeker</h3>

<p id="live">"I live to write and heal..."</p>

<?php echo $welcome ?>
<!-- PHP -->

<!--<p>The Journal Seeker aims to provide journaling workshops for individuals, groups and organizations. The Journal Seeker is a space for those that want to dive deep into the art of journal writing.  Just as a lotus maintains its radiant self despite being surrounded by mud, journaling is a tool to maintain your authenticity despite your external circumstances.  Your spirit and soul emerges like a butterfly as you join me on an inward journey through the power of journaling.</p> -->
<img src="http://img.timeinc.net/time/photoessays/2008/trees/franklin_trees_01.jpg" alt="image"/>

<p>Follow us on Facebook if you would like to recieve daily journaling prompts.</p>
<div class="fb-like" data-href="https://www.facebook.com/Journalingcircle" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
</div>

<img class="curly" id="aboutstop" src="curly.png" alt="curly"/>
<div id="about">
<h3 class="underline"><u>About</u></h3>
<?php echo $about ?>
<!--<p>Anjali Mani, MSW, LSW, is a certified Journal to the Self instructor. With over 20 years of experience providing therapeutic and consultation services in Interpersonal Violence, Trauma and Holistic living. She obtained her Masters in Social Work from Columbia University of Social Work. She specializes in organizing Wellness & Burnout Prevention workshops for Non-profit organizations and has a special passion for incorporating the Arts/Writing/Meditation in Social Work. Her goal is to share the benefits of Journal Writing with various populations.</p>-->
</div>
<div id="journaling">
<h3>What is Journaling?</h3>

<?php echo $what ?>

<!-- PHP -->


<!--
<p>A personal private space where one is free to judgment to write about various topics.
<br> A space to reflect on your own writing <br> A space to write letters <br> A space to sketch and write <br> A space to explore ideas, concepts and thoughts<br> A space to become more comfortable with your voice through writing.</p>
-->
<h3>Some benefits of Journaling:</h3>

<?php echo $benefits  ?>

<!--
<p>Stronger relationships <br> Better organizational skills <br> Better focused <br> Know yourself better <br> Captures "Life's story" <br> Reduces stress <br> Encourages positive thinking <br> Holds you accountable</p>
-->
</div>
<img class="curly" id="articlestop" src="curly.png" alt="curly"/>
<h3 class="underline"><u>Articles</u></h3>
<div id="articles"> 
<?php echo $article ?>
<!-- PHP -->
<a href="articles.php">View past articles</a>
</div>
<img class="curly" id="servicestop" src="curly.png" alt="curly"/>
<div id="services">
<h3 class="services underline"><u>Services</u></h3>
<p>Customized trainings and workshops for individuals, communities, and organizations.</p>

<p id="workshop">Workshops include:</p>

<!-- PHP -->

<?php echo $workshop ?>

<!--
<h4><strong>The Therapeutic Benefits of Journaling:</strong></h4>
<p>A two hour workshop giving an overview of how Journaling can be utilized as a heading tool. In this workshop, examples of stdies conducted will be provided, as well as concrete writing prompts for participants that can be used for life.</p>
<h4><strong>Commuting with Nature and Journaling:</strong></h4>
<p>There is nothing more beatiful than a walk in nature followed by writing in your journal. The combination of communing with nature and your inner self gets your creative juices flowing, and connects with a higher self.</p>
<h4><strong>Journaling for Mindfulness Practice:</strong></h4>
<p>Using Mindfulness techniques combined with journaling promps to deepen your state of mind.</p>
<h4><strong>Journal to self:</strong></h4>
<p>A 4 - 6 week course that is based on the works of Kathleen Adams, that provides 18 different journaling prompts that can be used for all personal enhancement, growth, self-care. that can also be offered as an all dat workshop or as weekend retreat</p>
-->
<div id="align">
<ul>
<li>"I found it very helpful. I am looking forward to implement what I've learned in writing."</li>
<li>"I will implement journaling techniques when relating with coworkers."</li>
<li>"This workshop was very helpful, I will love to incorporate this in my daily schedule."</li>
</ul>
</div>

<p>If you are interested in bringing this workshop to your organization, group or program, <br>
<a id="contact" href="mailto:journalingcircle@gmail.com"><strong><u>Let's get in touch</u></strong></a>
</p>


<form id="pp" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="journalingcircle@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Workshops">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</div>
<img class="curly" id="eventstop" src="curly.png" alt="curly"/>
<div id="events">
<h3 class="underline"><u>Events</u></h3>
<p>Scheduled Upcoming Events</p>

<?php echo $event ?>
<a href="event.php">view past events</a>
<!-- PHP -->
</div>

<img id="linkstop" class="curly" src="curly.png" alt="curly"/>
<!-- Curly image here -->
<div id="links">
    <div id="group">
<h3><u>Links</u></h3>
<p>external resources</p>
</div>
<ul>
<li><a href="http://www.journaltherapy.com/">Journal Therapy</a></li>
<li><a href="http://www.dailygood.org/story/918/poems-to-color-in-ellie-cross/">Poems to Color in Ellie Cross</a></li>
<li><a href="http://stress.about.com/od/generaltechniques/p/profilejournal.htm">General Techniques</a></li>
<li><a href="http://www.intensivejournal.org/about/article_path.php">Intensive Journal</a></li>
<li><a href="http://archives.cnn.com/2000/HEALTH/03/16/health.writing.wmd/">Health Writing</a></li>
<li><a href="http://well.blogs.nytimes.com/2015/01/19/writing-your-way-to-happiness/?smid=fb-nytimes&smtyp=cur&bicmp=AD&bicmlukp=WT.mc_id&bicmst=1409232722000&bicmet=1419773522000">Writing Your Way to Happiness</a></li>
<li><a href="http://www.brainpickings.org/2014/09/04/famous-writers-on-keeping-a-diary/">Famous writers on Keeping a Diary</a></li>
<li><a href="http://www.blurb.com/b/3439429-my-toolkit-of-quotes-journaling-my-thoughts-one-wo">My ToolKit of Quotes</a></li>
</ul>
</div>
<img class="curly" src="curly.png" alt="curly"/>
<!-- Curly image -->

</div>

<footer>

    <ul>
        <a href="index.php#"><li>home</li></a>
        <a href="index.php#aboutstop"><li>about me</li></a>
        <a href="index.php#contact"><li>contact</li></a>
        <a href="https://plus.google.com/105391788211656217283/posts"><li>blog</li></a>
       <!-- <a href="#"><li>shop</li></a> -->
    </ul>


</footer>



</body>







</html>