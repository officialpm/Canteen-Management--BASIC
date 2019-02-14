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
</style>
</head>
<body>

<h1 align=center>USER PANEL</h1>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">MENU</button>
 
</div>

<div id="London" class="tabcontent">

 <html>
<head>
  <form action = "" method = "post">
                  <label>Username  :  </label><input type = "text" name = "username" class = "box"/><br /><br />
               
            
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>	
<title>MENU</title>

<script language=javascript>
function billme()
{
var v1= document.order.frenchfriesQty.value;
var v2= document.order.hamburgerQty.value;
var v3= document.order.drinkQty.value;
var v4= document.order.discountRB[0];
var v5= document.order.discountRB[1];


//These lines define the variables.

	v1= parseInt(v1);
	v2= parseInt(v2);
	v3= parseInt(v3);
//These lines make sure that variables 1, 2, and 3 are numbers.

	var sb=order.subtotalBox.value= (v1*12)+(v2*20)+(v3*15)

	if (document.order.discountRB[0].checked) {
		document.order.subtotalBox.value= (order.subtotalBox.value)*0.9
		}
	else if (document.order.discountRB[1].checked) {
		document.order.subtotalBox.value= (order.subtotalBox.value)*0.95
		}
//These lines assign discount function to the radio buttons.

	document.order.taxBox.value= (document.order.subtotalBox.value)*0.07
 document.order.grandtotalBox.value=parseInt(document.order.taxBox.value)+parseInt(document.order.subtotalBox.value);


	if (document.order.discountRB[0].checked) {
		document.order.savingsBox.value= ((v1*12)+(v2*20)+(v3*15))*0.1
		}
	else if (document.order.discountRB[1].checked) {
		document.order.savingsBox.value= ((v1*12)+(v2*20)+(v3*15))*0.05
		} 
	else if (document.order.discountRB[2].checked) {
		document.order.savingsBox.value= 0
		}
//These lines define what should be displayed in the discount box.

}



</script>
</head>

<body>
<h1 align=center>MENU</h1>
<form id=order name=order>
<p align=center>

<br>
<br>
  
Vadapav Rs.12
 <input type="text" name="frenchfriesQty" size="2" value="0" ></br>
Sandwich Rs.20 <input type="text" name="hamburgerQty" size="2" value="0"></br>
Drink Rs.15 <input type="text" name="drinkQty" size="2" value="0" ></br>
<br>
<br>
<strong>Please select one of the following options:</strong><br>
<input type="radio" name="discountRB" /> Student (10% off) <br>
<input type="radio" name="discountRB" /> Professor (5% off) <br>

<br>
<input type="button" name="calcBtn" value="place Order" onclick="billme(document.order)" />
<input type="reset" name="resetBtn" value="Clear Order" />
<br>
<br>
SubTotal: Rs.<input type="text" name="subtotalBox" size="6" value="0" /><br>
Tax: Rs.<input type="text" name="taxBox" size="6" value="0" /><br>
Grand Total: Rs.<input type="text" name="grandtotalBox" size="6" value="0" /><br>
Money saved with discounts: Rs.<input type="text" name="savingsBox" size="6" value="0" /><br>
</p>
</body>
</html>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
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
</script>