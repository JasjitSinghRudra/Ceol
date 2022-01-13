<style>
.sidebar {
  height: 85%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 100px;
  left: 0;
  bottom:20px;
  background-color: #ffffff;
  overflow-x: hidden;
  padding-top: 16px;
  
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: 0f0f0f;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

<div class="sidebar"> 
  <a href="#Profile"><img src="https://raw.githubusercontent.com/jk9936/Ceol/main/assets/images/ace.jpeg" class="img-thumbnail" style="border-radius: 50%;">&nbsp;Portgas D. Ace</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="http://localhost/phpmyadmin/Ceol/messages.php"><i class="fa fa-paper-plane"></i> Messages</a>&nbsp;
  <a href="http://localhost/phpmyadmin/Ceol/notification.php"><i class="fa fa-fw fa-bell"></i>Notification</a>&nbsp;
  <a href="http://localhost/phpmyadmin/Ceol/Jamboard.php"><i class="fa fa-fw fa-wrench"></i> Jam Board</a>&nbsp;
  <a href="http://localhost/phpmyadmin/Ceol/friend_list.php"><i class="fa fa-fw fa-user"></i> Friends </a>&nbsp;
</div>
