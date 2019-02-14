<html>
   
   <head>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js'></script>
      <title>Admin </title>
   </head>
<style scoped>
       
        .button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20); /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }
.right {
  position: absolute;
  right: 0px;
  width: 100px;
  border: 1px solid #73AD21;
  padding: 5px;
  padding-top:1px;
}

    </style>
   
   <body>
     <center> <h1> Admin Panel <?php echo $login_session; ?></h1> </center>
      
      <button id="myButton" class="button-error pure-button ">Sign Out</button>
       
        <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "logout.php";
    };
</script>
<br>
  
      <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <center>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}



.wrapper{
  width:60%;
  display:block;
  overflow:hidden;
  margin:0 auto;
  padding: 60px 50px;
  background:#fff;
  border-radius:4px;
}

canvas{
  background:#fff;
  height:400px;
}

h1{
  font-family: Roboto;
  color: #fff;
  margin-top:50px;
  font-weight:200;
  text-align: center;
  display: block;
  text-decoration: none;
}
</style>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpe">Add Worker</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Add User</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Add Cook</button>
</div>

<div id="London" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
 <h3>Worker Signup</h3>
  <iframe src="wsignup.php" scrolling="no" style="height:300px;width:400px;border:2x;"></iframe>
</div>

<div id="Paris" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>User Signup</h3>
  <iframe src="usignup.php" scrolling="no" style="height:300px;width:400px;border:2x;"></iframe>
</div>

<div id="Tokyo" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
 <h3>Cook Signup</h3>
  <iframe src="csignup.php" scrolling="no" style="height:300px;width:400px;border:2x;"></iframe>
</div>
 
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'remworker')">Delete Worker</button>
  <button class="tablinks" onclick="openCity(event, 'remuser')">Delete User</button>
  <button class="tablinks" onclick="openCity(event, 'remcook')">Delete Cook</button>
</div>

<div id="remworker" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>REMOVE WORKER</h3>
  <iframe src="dw.php" frameBorder="0" scrolling="no" style="height:200px;width:400px;"></iframe>
</div>

<div id="remuser" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>REMOVE USER</h3>
  <iframe src="du.php" frameBorder="0" scrolling="no" style="height:200px;width:400px;;"></iframe>
</div>

</div>
<div id="remcook" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>REMOVE COOK</h3>
  <iframe src="dc.php" frameBorder="0" scrolling="no" style="height:350px;width:700px;"></iframe>
</div>

  <iframe src="c.html" frameBorder="0" scrolling="no" style="height:500px;width:800px;;"></iframe>
  
</div>

  
  

<script>

    
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>
   
</body>
      

</div>

      
   </body>
   
</html>