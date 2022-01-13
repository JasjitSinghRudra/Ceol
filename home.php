<?php include 'footer.php';?>
<?php include 'header.php';?>
<?php include 'Sidepanel.php';?>
<?php include 'recent_activity.php';?>



    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ceol</title>
    
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons.flaticon.com/png/512/461/premium/461146.png?token=exp=1639386067~hmac=226052811f9712abd43effaba8ddbad6"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/home_style.css?v=<?php echo time(); ?>">
    <style>
        *{
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  margin: 0;
  
}

section {
  float: center;
  width: 90%;
}
.posts {
    background-color: #F7F7F7;
}
section div {
  width: 600px;
  margin: 50px auto;
  background-color: #F7F7F7;
  overflow: hidden;
  padding: 20px;
  padding-right:30px;
  border-radius: 3px;
  box-shadow: 1px 1px 1px rgba(0,0.3,0.3,.3);
  z-index: 3;
  float: center;
}
section div img {
  float:left;
  width: 60px;
  height: 60px;
  padding-bottom:20px;
}
section div textarea {
  width: 550px;
  height: 150px;
  border: none;
  padding-top:30px;
  padding: 5px 10px;
  font-family: arial;
  resize: none;
  outline: none;
  border-bottom: 2px solid #0077CC;
}
textarea::-webkit-scrollbar {
  width: 0px;
  background-color: transparent;
}
textarea::-webkit-scrollbar-thumb {
  background-color: #CCC;
  border-radius: 2px
}
section div [type = submit] {
  padding-left: 50px;
  margin: 15px 10px auto auto;
  border: none;
  background-color: #0077CC;
  color: #fff;
  font-weight: bold;
  padding: 10px 15px;
  border-radius: 3px;
  font-size: 13px;
}
.overlay {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 2;
  display: none;
}
.post {
  background-color: #fff;
  width: 500px;
  margin: 10px auto;
  padding: 10px;
  color: #333;
  box-shadow: 1px 1px 1px rgba(0,0,0,.3);
  border-radius: 3px;
}

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
p.from-them {
  align-items: flex-start;
  background-color: #e5e5ea;
  color: #000;
}
.margin-b_none {
  margin-bottom: 0 !important;
}

.margin-b_one {
  margin-bottom: 1rem !important;
}

        </style>
        
</head>
<body>
<section>
      <div class="text">
        <i class="fa fa-user-circle" style="font-size:50px" ></i>
        &nbsp;&nbsp;
        <textarea placeholder="What's in your mind"></textarea>
        <br>
        <i class="fa fa-microphone"style="font-size:25px"></i>&emsp;&emsp;
        <i class="fa fa-file-image-o"style="font-size:25px"></i>&emsp;&emsp;
        <i class="fa fa-file-movie-o"style="font-size:25px"></i>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <input type="submit" value="post"/>
      </div>
    </section>
    <div class="overlay"></div>
    
    <section>
        <div class="posts">
        <i class="fa fa-user-circle" style="font-size:50px" >Nami</i>
        <br><br>
        <p class="from-them margin-b_one">Loved Luffy in his last performance can't wait to see him again at the Marine Ford party!!!! <br> P.S: GO LITTLE ROCKSTAR!</p>
        </div>
    </section>

    <section>
        <div class="posts">
        <i class="fa fa-user-circle" style="font-size:50px" >White Beard</i>
        <br><br>
        <p class="from-them margin-b_one">Enroute to Marineford going to crash the party! - with <u>Marco</u> and 200 others. </p>
        </div>
    </section>

    <section>
        <div class="posts">
        <i class="fa fa-user-circle" style="font-size:50px" >Garp</i>
        <br><br>
        <p class="from-them margin-b_one">Today is a great day Marines, Where is Brook and other Musicians?????</p>
        </div>
    </section>

    <section>
        <div class="posts">
        <i class="fa fa-user-circle" style="font-size:50px" >Marco</i>
        <br><br>
        <p class="from-them margin-b_one">It&rsquo;s more like &ldquo;this is an earthquake. Check the Internet. Yup. Earthquake. This is the size. This is the epicenter. Check social media. Make sure the East Coast knows I&rsquo;m alive. Okay, try and go back to sleep.&rdquo;</p>
        </div>
    </section>




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