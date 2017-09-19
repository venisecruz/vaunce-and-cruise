<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Vaunce & Cruise Cosmetics | Bestsellers</title>
<link rel="icon" type="image/png" href="asset/image/icon.png" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--STYLE SHEETS-->
<link href="asset/css/styles.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Josefin+Sans" rel="stylesheet">
<style>
body {margin:0;}
</style>
</head>

<script language = "JavaScript">

	function orderform()
	{
		
		if(document.getElementById('studiofix').checked==true||
		document.getElementById('retro').checked==true||
		document.getElementById('prep').checked==true||
		document.getElementById('browset').checked==true||
		document.getElementById('conceal').checked==true||
		document.getElementById('fluid').checked==true||
		document.getElementById('mineral').checked==true||
		document.getElementById('minlip').checked==true||
		document.getElementById('mascara').checked==true){
		var FName = prompt('Enter your First Name:','First Name');
			LName = prompt('Enter your Last Name:','Last Name');
		Processing(FName,LName);
			}
			
		else
			alert("Please check your order and input quantity")
	}
	function checkout() {
    	alert("Checkout Successful! Please wait for a confirmation email after we process your order.");
		window.open("Home.html","_self")
	}
	
	function Processing(FName, LName)
			{	
				var a,b,c,d,e,f,g,h,i;
				var	total=0;	

//Computations
			    if(document.getElementById('studiofix').checked==true){
			    	quan1=parseInt(document.getElementById('qtystudiofix').value)
					if (quan1==null){
						quan1==1;
					}
			    	price1=quan1*1200;
			    	total+=price1;
			    	a="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ----------</font>"+quan1+"<font color=#FFF>-----------------</font>Studio Fix Powder Plus Foundation (Php 1,200.00)<font color=#FFF>-------------</font>Php "+price1+".00</center>";
			    }
				 if(document.getElementById('retro').checked==true){
			    	quan2=parseInt(document.getElementById('qtyretro').value)
			    	price2=quan2*1000;
			    	total+=price2;
					b="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ----------</font>"+quan2+"<font color=#FFF>-------------------------</font>Retro Matte Lipstick (Php 1,000.00)<font color=#FFF>----------------------</font>Php "+price2+".00</center>";
			    }
				if(document.getElementById('prep').checked==true){
			    	quan3=parseInt(document.getElementById('qtyprep').value)
			    	price3=quan3*750;
			    	total+=price3;
					c="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ---------</font>"+quan3+"<font color=#FFF>----------------------------</font>Prep + Prime Lip (Php 750.00)<font color=#FFF>--------------------------</font>Php "+price3+".00</center>";	
			    }
				if(document.getElementById('browset').checked==true){
			    	quan4=parseInt(document.getElementById('qtybrowset').value)
			    	price4=quan4*1100;
			    	total+=price4;
					d="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ---------</font>"+quan4+"<font color=#FFF>-----------------------------</font>Brow Set (Php 1,100.00)<font color=#FFF>-------------------------------</font>Php "+price4+".00</center>";
			    }
				if(document.getElementById('conceal').checked==true){
			    	quan5=parseInt(document.getElementById('qtyconceal').value)
			    	price5=quan5*1150;
			    	total+=price5;
					e="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ----------</font>"+quan5+"<font color=#FFF>------------------</font>Studio Finish SPF 35 Concealer (Php 1,150.00)<font color=#FFF>---------------</font>Php "+price5+".00</center>";	
			    }
				if(document.getElementById('fluid').checked==true){
			    	quan6=parseInt(document.getElementById('qtyfluid').value)
			    	price6=quan6*900;
			    	total+=price6;
					f="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ----------</font>"+quan6+"<font color=#FFF>----------------------------------</font>Fluidline (Php 900.00)<font color=#FFF>------------------------------</font>Php "+price6+".00</center>";
			    }
				if(document.getElementById('mineral').checked==true){
			    	quan7=parseInt(document.getElementById('qtymineral').value)
			    	price7=quan7*1400;
			    	total+=price7;
					g="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ----------</font>"+quan7+"<font color=#FFF>--------------------------</font>Mineralize SkinFinish (Php 1,400.00)<font color=#FFF>---------------------</font>Php "+price7+".00</center>";
			    }
				if(document.getElementById('minlip').checked==true){
			    	quan8=parseInt(document.getElementById('qtyminlip').value)
			    	price8=quan8*1000;
			    	total+=price8;
					h="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ----------</font>"+quan8+"<font color=#FFF>-----------------------</font>Mineralize Rich Lipstick (Php 1,000.00)<font color=#FFF>---------------------</font>Php "+price8+".00</center>";
			    }
				if(document.getElementById('mascara').checked==true){
			    	quan9=parseInt(document.getElementById('qtymascara').value)
			    	price9=quan9*1500;
			    	total+=price9;
					i="<font color=#4F4F4F face='Trebuchet MS, Arial, Helvetica, sans-serif'>"+"<center><font color=#FFF> ----------</font>"+quan9+"<font color=#FFF>-------------------------</font>Haute &amp; Naughty Lash (Php 1,500.00)<font color=#FFF>--------------------</font>Php "+price9+".00</center>";
			    }
														
			
//PRINTING
			document.write('<body background="asset/img/receiptbg.jpg">'+'<p align=center><img src="asset/img/logo.png" width="200" hspace="10"  vspace="15" align="absmiddle"/></p>'+'<p align=center><font size="+2" color="#4F4F4F" face="Trebuchet MS, Arial, Helvetica, sans-serif">Thank you for ordering, '+FName+' '+LName+'!</font></p>'+'<p align="center"><font color="#4F4F4F" face="Trebuchet MS, Arial, Helvetica, sans-serif"><b>ORDER SUMMARY</b></p>'+'<hr align="center" width="1000"/>'+'<br><br><center><b>QUANTITY</b></font><font color=#FFF>----------------------------------</font><font color="#4F4F4F" face="Trebuchet MS, Arial, Helvetica, sans-serif"><b>PRODUCT</b></font><font color=#FFF>-------------------------------------------</font><font color="#4F4F4F" face="Trebuchet MS, Arial, Helvetica, sans-serif"><b>PRICE</b></font></center><br><br>');
			if(a){document.write(a);}
			if(b){document.write(b);}
			if(c){document.write(c);}
			if(d){document.write(d);}
			if(e){document.write(e);}
			if(f){document.write(f);}
			if(g){document.write(g);}
			if(h){document.write(h);}
			if(i){document.write(i);}
			document.write('<br><hr align="center" width="750"/>');
			document.write('<br><center><br><b>TOTAL PRICE = </b> Php '+total+'.00<br><br><br>'+'<a href="Home.html"><input type="button" onClick="checkout()" value="Checkout"><font color=#FFF>-----------</font></a><a href="Products.php"><input type="button" value="Cancel Order"></a>'+'<br><br><br><font color=#4F4F4F><br>&copy; 2017 Venise Marielle E. Cruz</font>'+'<br><font color=#4F4F4F>Disclaimer: This is for school purposes only. All products are from MAC Cosmetics</font></center><br><br>');
			}
</script>



<body>

<div class="dropdown">
	<button class="dropbtn"><img src="asset/img/drop-down-arrow.png"></button>
    <div class="dropdown-content">
      <font style="font-family: 'Josefin Sans', sans-serif;">
      <a href="Home.html"> Home</a>
      <a href="OurStory.html">Our Story</a>
      <a href="Products.php">Bestsellers</a>
      <a href="Contact.html">Contact Us</a>
    </div>
    </div> 
   
<div class="bgbs">
<img class="imgbs" src="asset/img/logo-bestsellers.png" width="290" />
<br /><br />
<h1>BESTSELLERS</h1>
</div>

<div class="parallax2"></div> 
<table align="center">

    <col width="400" />
    <col width="400" />
    <col width="400" />
<!--1ST ROW-->
    <tr align="center">	
    	<td><img src="asset/img/studiofix.jpg" /></td>
        <td><img src="asset/img/retromatte.jpg" /></td>
        <td><img src="asset/img/prepprimelip.jpg" /></td></tr>
    <tr align="center">
    	<td>Studio Fix Powder Plus Foundation</td>
        <td>Retro Matte Lipstick</td>
        <td>Prep + Prime Lip</td></tr>
    <tr align="center">
    	<td><i><font class="desc">Medium Coverage, Matte Finish, Controls Oil</font></i></td>
        <td><i><font class="desc">&nbsp;</font></i></td>
        <td><i><font class="desc">Hydrating, Prevents Feathering, Retexturizing</font></i></td></tr>
    <tr align="center">
        <td>Php 1,200.00</td>
        <td>Php 1,000.00</td>
        <td>Php 750.00</td></tr>
    <tr align="center">
    	<td><input type="checkbox" name="studiofix" id="studiofix"> Quantity: <input type="text" size="5" id="qtystudiofix"></td>
        <td><input type="checkbox" name="retro" id="retro"> Quantity: <input type="text" size="5" id="qtyretro"></td>
        <td><input type="checkbox" name="prep" id="prep"> Quantity: <input type="text" size="5" id="qtyprep"></td></tr>
     
<!--2ND ROW-->     
     <tr align="center">	
    	<td><img src="asset/img/browset.jpg" /></td>
        <td><img src="asset/img/concealer.jpg" /></td>
        <td><img src="asset/img/fluidline.jpg" /></td></tr>
    <tr align="center">
    	<td>Brow Set</td>
        <td>Studio Finish SPF 35 Concealer</td>
        <td>Fluidline</td></tr>
    <tr align="center">
    	<td><i><font class="desc">Gel Formula, Adds Shine, Flake-proof</font></i></td>
        <td><i><font class="desc">12-Hour Wear, Water-Resistant, SPF 35</font></i></td>
        <td><i><font class="desc">Gel Formula, Long-wearing, Precise</font></i></td></tr>
    <tr align="center">
        <td>Php 1,100.00</td>
        <td>Php 1,150.00</td>
        <td>Php 900</td></tr>
    <tr align="center">
    	<td><input type="checkbox" name="browset" id="browset"> Quantity: <input type="text" size="5" id="qtybrowset"></td>
        <td><input type="checkbox" name="conceal" id="conceal"> Quantity: <input type="text" size="5" id="qtyconceal"></td>
        <td><input type="checkbox" name="fluid" id="fluid"> Quantity: <input type="text" size="5" id="qtyfluid"></td></tr>
        
<!--3RD ROW-->     
     <tr align="center">	
    	<td><img src="asset/img/mineralize.jpg" /></td>
        <td><img src="asset/img/min-lip.jpg" /></td>
        <td><img src="asset/img/mascara.jpg" /></td></tr>
    <tr align="center">
    	<td>Mineralize SkinFinish</td>
        <td>Mineralize Rich Lipstick</td>
        <td>Haute &amp; Naughty Lash</td></tr>
    <tr align="center">
    	<td><i><font class="desc">Baked Minerals, Sheeer Coverage, Highlighting</font></i></td>
        <td><i><font class="desc">Nourishing, Luxurious, Lightweight</font></i></td>
        <td><i><font class="desc">Double Effect, Defining, Volumizing</font></i></td></tr>
    <tr align="center">
        <td>Php 1,400.00</td>
        <td>Php 1,000.00</td>
        <td>Php 1,500.00</td></tr>
    <tr align="center">
        <td><input type="checkbox" name="mineral" id="mineral"> Quantity: <input type="text" size="5" id="qtymineral"></td>
        <td><input type="checkbox" name="minlip" id="minlip"> Quantity: <input type="text" size="5" id="qtyminlip"></td>
        <td><input type="checkbox" name="mascara" id="mascara"> Quantity: <input type="text" size="5" id="qtymascara"></td>
</tr>
        </table>    <br /><br />
<div class="parallax3">

<!--BUTTONS--><br /><br />
    <p align="center">
    <input type="button" class="button"  value="Submit Order" onClick="orderform()">
    <a href="Home.html"><input type="button" class="button" value="Return to Home">
    </a></p>
    <br /><br />
<p align="center"><font color="#4F4F4F">&copy; 2017 Venise Marielle E. Cruz</font></p>
<p align="center"><font color="#4F4F4F">Disclaimer: This is for school purposes only. All products are from MAC Cosmetics</font></p>
<p>&nbsp;</p></div>
</body>
</html>