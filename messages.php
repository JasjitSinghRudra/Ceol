<?php include 'footer.php';?>
<?php include 'friends.php';?>
<?php include 'Sidepanel.php';?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages | ceol</title>
    
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons.flaticon.com/png/512/461/premium/461146.png?token=exp=1639386067~hmac=226052811f9712abd43effaba8ddbad6"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/home_style.css?v=<?php echo time(); ?>">
        <link rel="shortcut icon" type="image/png" href="https://www.pinclipart.com/picdir/middle/24-247211_rejected-stamp-clipart-guitar-cartoon-guitar-transparent-background.png">



<style>
    .imessage {
  background-color: #fff;
  border: 1px solid #e5e5ea;
  border-radius: 0.25rem;
  display: flex;
  flex-direction: column;
  font-family: "SanFrancisco";
  font-size: 1.25rem;
  margin: 0 auto 1rem;
  max-width: 600px;
  padding: 0.5rem 1.5rem;
}

.imessage p {
  border-radius: 1.15rem;
  line-height: 1.25;
  max-width: 75%;
  padding: 0.5rem .875rem;
  position: relative;
  word-wrap: break-word;
}

.imessage p::before,
.imessage p::after {
  bottom: -0.1rem;
  content: "";
  height: 1rem;
  position: absolute;
}

p.from-me {
  align-self: flex-end;
  background-color: #248bf5;
  color: #fff; 
}

p.from-me::before {
  border-bottom-left-radius: 0.8rem 0.7rem;
  border-right: 1rem solid #248bf5;
  right: -0.35rem;
  transform: translate(0, -0.1rem);
}

p.from-me::after {
  background-color: #fff;
  border-bottom-left-radius: 0.5rem;
  right: -40px;
  transform:translate(-30px, -2px);
  width: 10px;
}

p[class^="from-"] {
  margin: 0.5rem 0;
  width: fit-content;
}

p.from-me ~ p.from-me {
  margin: 0.25rem 0 0;
}

p.from-me ~ p.from-me:not(:last-child) {
  margin: 0.25rem 0 0;
}

p.from-me ~ p.from-me:last-child {
  margin-bottom: 0.5rem;
}

p.from-them {
  align-items: flex-start;
  background-color: #e5e5ea;
  color: #000;
}

p.from-them:before {
  border-bottom-right-radius: 0.8rem 0.7rem;
  border-left: 1rem solid #e5e5ea;
  left: -0.35rem;
  transform: translate(0, -0.1rem);
}

p.from-them::after {
  background-color: #fff;
  border-bottom-right-radius: 0.5rem;
  left: 20px;
  transform: translate(-30px, -2px);
  width: 10px;
}

p[class^="from-"].emoji {
  background: none;
  font-size: 2.5rem;
}

p[class^="from-"].emoji::before {
  content: none;
}

.no-tail::before {
  display: none;
}

.margin-b_none {
  margin-bottom: 0 !important;
}

.margin-b_one {
  margin-bottom: 1rem !important;
}

.margin-t_one {
  margin-top: 1rem !important;
}














/* general styling */
@font-face {
  font-family: "SanFrancisco";
  src:
    url("https://cdn.rawgit.com/AllThingsSmitty/fonts/25983b71/SanFrancisco/sanfranciscodisplay-regular-webfont.woff2") format("woff2"),
    url("https://cdn.rawgit.com/AllThingsSmitty/fonts/25983b71/SanFrancisco/sanfranciscodisplay-regular-webfont.woff") format("woff");
}

body {  
  font-family: -apple-system, 
    BlinkMacSystemFont, 
    "Segoe UI", 
    Roboto, 
    Oxygen-Sans, 
    Ubuntu, 
    Cantarell, 
    "Helvetica Neue", 
    sans-serif;
  font-weight: normal;
  margin: 0;
}

.container {
  margin: 0 auto;
  max-width: 600px;
  padding: 1rem;
}

h1 {
  font-weight: normal;
  margin-bottom: 0.5rem;
}

h2 {
  border-bottom: 1px solid #e5e5ea;
  color: #666;
  font-weight: normal;
  margin-top: 0;
  padding-bottom: 1.5rem;
}

.comment {
  color: #222;
  font-size: 1.25rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
  max-width: 100%;
  padding: 0;
}

@media screen and (max-width: 800px) {
  body {
    margin: 0 0.5rem;
  }

  .container {
    padding: 0.5rem;
  }

  .imessage {
    font-size: 1.05rem;
    margin: 0 auto 1rem;
    max-width: 600px;
    padding: 0.25rem 0.875rem;
  }

  .imessage p {
    margin: 0.5rem 0;
  }
}
</style>
</head>    
<body>
+   <nav class="navbar fixed-top navbar-dark" style="background-color: #393f45;">
    <a class="navbar-brand" href="http://localhost/phpmyadmin/Ceol/home.php">
      <form class="form-inline my-2 my-lg-0">Ceol&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px !important;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </a>
    <a class="navbar-brand" href="http://localhost/phpmyadmin/Ceol/index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout&nbsp;<img src="https://raw.githubusercontent.com/jk9936/Ceol/main/assets/images/logout.png" width="22" height="20"></a>
           <a class="navbar-brand" href="http://localhost/phpmyadmin/Ceol/settings.php">&nbsp;Settings&nbsp;<img src="https://raw.githubusercontent.com/jk9936/Ceol/main/assets/images/settings.png" width="22" height="20"></a>
  <div class="collapse navbar-collapse" id="navbarNav">

  </div>
</nav>
<br><br>
<div class="container">
<h1>Sabo</h1>
  <div class="imessage">
    <p class="from-them">It was loud. We just laid there and said &ldquo;is this an earthquake? I think this is an earthquake.&rdquo;</p>
    <p class="from-me">Like is this an earthquake just go back to sleep</p>
    <p class="from-them margin-b_one">It&rsquo;s more like &ldquo;this is an earthquake. Check the Internet. Yup. Earthquake. This is the size. This is the epicenter. Check social media. Make sure the East Coast knows I&rsquo;m alive. Okay, try and go back to sleep.&rdquo;</p>
    <p class="from-me no-tail emoji">👍🏻</p>
    <p class="from-me">Glad you&rsquo;re safe</p>
  </div>
  <p class="comment">yesterday 6:50 am</p>
  <div class="imessage">
    <p class="from-me">Time to write some code where I left off</p>
  </div>
  <p class="comment">yesterday 7:12 am</p>
    <div class="imessage">
    <p class="from-them">Previously on As the Code Turns</p>
  </div>
  <p class="comment">yesterday 7:47 am</p>
  <div class="imessage">
    <p class="from-me no-tail margin-b_none">Previously...</p>
    <p class="from-me no-tail">Brock went to the hospital to check on Cyntheeah...</p>
    <p class="from-me no-tail">Notice the pretentious spelling of &ldquo;Cyntheeah&rdquo;...</p>
    <p class="from-me no-tail">While in her hospital room, Diego is standing outside looking through the door window and can hear the entire conversation because he has super hearing.</p>
    <p class="from-me margin-b_none">Elsewhere, Biff has plans to take down the entire Caspian family with his secret about how Roger Caspian used to be...REGINA Caspian!</p>
    <p class="from-them margin-b_one margin-t_one">Haha</p>
    <p class="from-me no-tail">And the budding romance between teens Erika and Johnny bloom</p>
    <p class="from-me">Back at the hospital, cuz who doesn&rsquo;t hang out at hospitals in their free time, amirite...</p>
    <p class="from-them margin-b_one margin-t_one">Riiiiight</p>
    <p class="from-me no-tail margin-b_none">Brock leaves Cyntheeah&rsquo;s room, and Diego sneaks in while she sleeps...</p>
    <p class="from-me no-tail">It&rsquo;s the worst hospital in the world cuz they leave her chart out for anyone to see...</p>
    <p class="from-me no-tail">While the nurse isn&rsquo;t watching Diego looks at her chart...</p>
    <p class="from-me no-tail">And discovers...</p>
    <p class="from-me no-tail">[bad music]...[Commercial]</p>
    <p class="from-me no-tail">...TO BE CONTINUED...</p>
    <p class="from-me">Gotta run, have a safe day in the sun ☀️</p>
    <p class="from-them margin-t_one">Haha, talk to you later.</p>
  </div>

  <p class="comment">yesterday 8:12 am</p>

  <div class="imessage">
    <p class="from-me no-tail margin-b_none">Heiress Lexus von Doberman - cuz all towns have an heiress - takes an interest in her new pool man, Rodrigo...</p>
    <p class="from-me no-tail">Lexus&rsquo;s time sunbathing by the pool is interrupted by Biff who has some juicy information on the Caspian family...</p>
    <p class="from-me no-tail">The Caspians are the largest juice bar magnate in the tri-state area and Lexus plans to take them down, for no reason in particular, just because it&rsquo;s good daytime drama...</p>
    <p class="from-me">Incidentally, Lexus&rsquo;s daughter is Erika. And Erika&rsquo;s love interest Johnny? Johnny Caspian. Cuz no one saw that little plot twist coming...</p>
  </div>

  <p class="comment">yesterday 10:30 am</p>

  <div class="imessage">
    <p class="from-me no-tail margin-b_none">Back at the hospital, Diego sneaks out of Cyntheeah&rsquo;s room with a copy of her chart under his arm, right in front of the nurse&rsquo;s station, but no one notices cuz all the nurses are gossiping. Again, worst. Hospital. Ever.</p>
    <p class="from-me no-tail">
      Diego sneaks around the corner to the vending machine, looks in the chart again, with one eyebrow raised and a smirk, and scheming music playing in the background...</p>
    <p class="from-me">[bad music]...[Commercial]</p>
    <p class="from-them margin-b_one margin-t_one">This is awesome</p>
    <p class="from-me no-tail">Brock returns to his home which is amazingly well-lit with track lighting in every room. His maid Juanita tells him that &ldquo;Ze strange man come by ask question about se&ntilde;or Brock&rdquo;. Brock makes a call and plans a meeting...</p>
    <p class="from-me no-tail">Meanwhile at the beach cabana, Erika, Johnny and friends makes plans for a weekend getaway cruise as all 17-year-olds do...</p>
    <p class="from-me">Incidentally, last week Erika and Johnny were 10 years-old, but kids don&rsquo;t age fast enough for daytime drama, so now they are 17! Overnight! Like magic!</p>
  </div>

  <p class="comment">
    yesterday 12:10 pm</p>

  <div class="imessage">
    <p class="from-me no-tail margin-b_none">Brock arrives at a restaurant for a lunch with his old marine buddy, Joze (not a misspelling) cuz nothing says &ldquo;secret meeting&rdquo; like a public restaurant in the middle of the day with plenty of on-lookers.</p>
    <p class="from-me no-tail">Back at the hospital Dr. Stewart Collins is examining Cyntheeah. Both went to high school together and Stewart had an unrequited crush on her. He looks for her chart but it&rsquo;s missing...</p>
    <p class="from-me no-tail">Dr. Stew asks the nurse if anyone has been in Cyntheeah&rsquo;s room and the nurse says &ldquo;just her brother...&rdquo;, to which Dr. Stew replies &ldquo;she has no brother...&rdquo;
      <p class="from-me">[bad music]…[Commercial]</p>
      <p class="from-them margin-t_one">Haha</p>
  </div>
  <p class="comment">yesterday 1:02 pm</p>
  <div class="imessage">
    <p class="from-me no-tail margin-b_none">Brock walks outside the restaurant and gets a phone call from his mother, Amelia, who has more money than Jesus Christ and casually wears padded blazers at home for the fun of it...</p>
    <p class="from-me no-tail">&ldquo;Darling...just calling cuz I&rsquo;m dreading having drinks at the club with that Doberman bitch.&rdquo;</p>
    <p class="from-me no-tail">&ldquo;Can&rsquo;t talk now mom...&rdquo;</p>
    <p class="from-me no-tail">&ldquo;Yes, yes, always something to do with the downtrodden folk&rdquo;</p>
    <p class="from-me no-tail">As Brock hangs up he notices seated at a table across the street someone who suspiciously looks like Diego. But as a bus passes by the seat is now empty.</p>
    <p class="from-me no-tail">Joze heads to the beach club for his &ldquo;day job&rdquo; as the former Iraq vet is now in charge of the swanky up-scale beach resort...</p>
    <p class="from-me no-tail">He spots Johnny and whistles to his favorite cabana boy. &ldquo;Towels need to be changed in Cabana #5, lady and her poodle need more sunscreen.&ldquo;</p>
    <p class="from-me no-tail">Johnny, having forsaken his family&rsquo;s juice bar fortune, is working a &ldquo;real job&rdquo; for his own cash. Plus, the beach club is a good spot to make lots of coke deals.</p>
    <p class="from-me no-tail">Joze goes into his office, shuts the door, and opens his wardrobe filled with cheap Love Boat white jackets, &agrave; la Capt. Stubing. Behind the blazers is a safe...</p>
    <p class="from-me no-tail">Joze unlocks the safe and pulls out a stack of bills and two hand guns. He raises an eyebrow, loads a clip into one of the guns...</p>
    <p class="from-me">[bad music]...[Commericial]</p>
  </div>
  <p class="comment">yesterday 1:32 pm</p>
  <div class="imessage">
    <p class="from-them">This is GOLD!</p>
  </div>
</div>



<script src="assets/js/search.js"></script>
          <script src="assets/js/photo.js?v=<?php echo time(); ?>"></script>
          <script type="text/javascript" src="assets/js/hashtag.js"></script>
          <script type="text/javascript" src="assets/js/like.js"></script>
          <script type="text/javascript" src="assets/js/comment.js?v=<?php echo time(); ?>"></script>
          <script type="text/javascript" src="assets/js/retweet.js?v=<?php echo time(); ?>"></script>
          <script type="text/javascript" src="assets/js/follow.js?v=<?php echo time(); ?>"></script>
      <script src="https://kit.fontawesome.com/38e12cc51b.js" crossorigin="anonymous"></script>
      <!-- <script src="assets/js/jquery-3.4.1.slim.min.js"></script> -->
      <script src="assets/js/jquery-3.5.1.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>


</body>   
</html>