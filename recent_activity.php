<style>
u{
    style=text-decoration-color: #000000; 
}

span.a{
    display:inline-block;
    width: 250px;
    height:150px;
    border: 3px;
    border-color: #000000;
    border-radius: 12px;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 15px;
    padding-right:10px;
    background-color: #8b8f99
     
;

}

span.b{
    display:inline-block;
    width: 250px;
    height:180px;
    border: 3px;
    border-color: #000000;
    border-radius: 12px;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 15px;
    padding-right:10px;
    background-color: #8b8f99
     
;

}

span.c{
    display:inline-block;
    width: 250px;
    height:115px;
    border: 3px;
    border-color: #000000;
    border-radius: 12px;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 15px;
    padding-right:10px;
    background-color: #8b8f99
     
;

}

.button {
  border: none;
  color: black;
  padding-left: 10px;
  padding-right: 10px;
  text-align: center;
  text-decoration: none;
  display: inline;
  font-size: 16px;
  margin: 5px 5px;
  cursor: pointer; }

.sidebara {
  height: 85%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 80px;
  left: 82%;
  bottom:20px;
  background-color: #ffffff;
  overflow-x: hidden;
  padding-top: 16px;
  float: left;

  
}

.sidebara a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebara a:hover {
  color: 0f0f0f;
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>

<div class="sidebara">
    <a><i class="fa fa-bullhorn" style="font-size:25px"></i>                         Recent Activities</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <br>
    <span class="a"> New Message from: <u>Sabo</u><hr size="10" width="90%" color="black">
    Hey! how are you?, what about the colab you were talking about?
    </span>
    <br>
    <br>
    <span class="b">New Message from: <u>Monkey D. Luffy</u><hr size="10" width="90%" color="black">
    Are you still at MarineFord? Can i also come? i can help settle the marines for you! 
    </span>
    <br>
    <br>
    <span class="c">Friend request from: <u>BlackBeard</u> <hr size="10" width="90%" color="black">
    <button class="button" type="button" onclick="alert('Request Accepted !')">Accept Request</button>
    <button class="button" type="button" onclick="alert('Request Deleted !')">Delete</button>
</div>