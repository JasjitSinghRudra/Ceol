<?php include 'footer.php';?>
<?php include 'Sidepanel.php';?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications | ceol</title>
    
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
<br><br><br><br>
<center>
  <h1 class="display-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Friends</h1>
    <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a list of all your notifications.</p>
  <ul class="list-group" style="margin-left: 20%; margin-right: 20%; text-align: left;">
  <li class="list-group-item">&nbsp; Pending friend request from BlackBeard<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left: 35%;">Accept</button><button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="margin-left: 5%;">Reject</button></li>
</ul>
<br><br>

</center>


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
