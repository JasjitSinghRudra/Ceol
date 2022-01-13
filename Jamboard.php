<?php include 'footer.php';?>
<?php include 'Sidepanel.php';?>
<?php include 'contribut.php';?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ceol</title>
    
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons.flaticon.com/png/512/461/premium/461146.png?token=exp=1639386067~hmac=226052811f9712abd43effaba8ddbad6"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/home_style.css?v=<?php echo time(); ?>">

        <style>
            .container-audio {
    width: 66%;
    height: auto;
    padding: 20px;
    border-radius: 5px;
    background-color: #eee;
    color: #444;
    margin: 20px auto;
    overflow: hidden;
}
audio {
  width:100%;}
  
  section {
  float: center;
  width: 90%;
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}

#frame { 
        margin-top:100px;
        margin-left: 300px;
        margin-right: 200px;
        padding-top:100px;
      width:800px; height:800px; background-color:#F7F7F7; color:black; }


      .imessage {
  background-color: #F7F7F7;
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
<nav class="navbar fixed-top navbar-dark" style="background-color: #393f45;">
    <a class="navbar-brand" href="#">
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

<div id="frame">
<div class="imessage">
    <p class="from-them">I have uploaded the new music i am working on did you guys tuned into it!</p>
    <p class="from-me">Marco &ldquo;: WE havent! last time you sent something nasty to my ears</p>
    <p class="from-them margin-b_one">Check it now please guys</p>
    <p class="from-me no-tail emoji">👍🏻</p>
    <p class="from-me">Garp &ldquo;: its good grandson</p>
    <textarea></textarea>
      <br>
      <br>

      

  </div>
  <div class="container-audio">
        <audio controls  loop autoplay>
                   <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/new_year_dubstep_minimix.ogg" type="audio/ogg">
                   Your browser dose not Support the audio Tag
               </audio>


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
</hmtl>
