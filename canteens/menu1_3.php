

<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>menu2</title>
    <style>
        .menu{
            border: 4.5px solid black;
            margin-left: -3px;
            margin-top: -7.5px;
             height: 142%;
        }
        .h2
        {
            height: 55px;
            
            margin-top: -15px;
        
            padding-top: 5px;
            padding-bottom: 10px;
             font-family: Segoe Script;
            text-align: center;
            background-color: black;
            color: white;
            font-size: 23px;
        }
    
       
            
       .subheading
        {
           font-family: Ink Free;
            font-size: 25px; 
        }
        
       .column1
        {
            font-family: Ink Free;
            font-size: 20px;
            width: 28%;
            margin-left: 3%;
            margin-top: -1%;
        }
    hr.column1
        {
            border: 5px solid black;
            width:20%;
        
            border-radius: 10px;
            
        }
         .column2
        {
            font-family: Ink Free;
            font-size: 20px;
            width: 28%;
            margin-left: 35%;
            margin-top: -58%;
        }
    hr.column2
        {
            border: 5px solid black;
            width:20%;
        
            border-radius: 10px;
        }
        .column3
        {
            font-family: Ink Free;
            font-size: 20px;
            width: 28%;
            margin-left: 67.5%;
            margin-top: -54.5%;
        }
    hr.column3
        {
            border: 5px solid black;
            width:20%;
        
            border-radius: 10px;
        }
        ul.a
        {
            list-style-type: circle;
        }
        .vertical-line1{
            margin-top:-57%;
            margin-left: 33%;
        display: inline-block;
        border-left: 3px solid black;
        
        height:82%;
    }
         .vertical-line2{
            margin-top: -57.5%;
            margin-left: 65%;
        display: inline-block;
        border-left: 3px solid black;
        
        height: 82%;
    }
            
       .button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
        
    margin-bottom: 15px;
    align-self: center;
  padding: 5px;
  width: 90px;
    height: 38px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
        .fa fa-calculator
        {
        color: white;
        }
        .calc table
        {
            width:40%;
            height: 75%;
        }
.modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
    height: 35%;
}


.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
         

         .title{ 
         margin-bottom: 10px; 
         text-align:center; 
         width: 210px; 
         border-collapse: collapse;
         color:black; 
         border: solid black 2px; 
         } 
  
         input[type="button"] 
         { 
         background-color:white; 
         color: black; 
         border: solid black 2px;
             border-collapse: collapse;
            
         width:100% 
         } 
        
          table{
              border-collapse: collapse;
          }
         input[type="text"] 
         { 
         background-color:white; 
         border: solid black 2px;
             border-collapse: collapse;
         width:100% 
         } 
           


    </style>
    </head>
    <body>
        <div class="menu">
             
    <div class="h2">
        <h3>VIDHYARTHI KHANA<br></h3>
     </div>
     <form action="cart1.php" method="post">
         <div align="right">
           
       <button   class="button" href="cart1.php" style="vertical-align:middle"><span> <i  class="fa fa-shopping-cart fa-2x"  aria-hidden="true" ></i>
</span></button>
            </div>

            <div class="column1">
                <p class="subheading"><b> Chinese Dishes <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                     <input type="checkbox" name="items[]" value="c1_137" >Veg Noodles &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                     <input type="checkbox" name="items[]" value="c1_138" >Veg Fried Rice &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ₹30
                     <input type="checkbox" name="items[]" value="c1_139" >Gobi Manchurian &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                     <input type="checkbox" name="items[]" value="c1_140" >Gobi Pepper Fry &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                     <input type="checkbox" name="items[]" value="c1_141" >Jeera Rice &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                     <input type="checkbox" name="items[]" value="c1_142" >Egg Noodles &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30
                     <input type="checkbox" name="items[]" value="c1_143" >Egg Fried Rice &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30
                     <input type="checkbox" name="items[]" value="c1_144" >Gobi Chilli &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;₹30
                     <input type="checkbox" name="items[]" value="c1_145" >Paneer Manchurian &emsp;&emsp;&emsp;&emsp;₹30
                     <input type="checkbox" name="items[]" value="c1_146" >Mushroom Manchurian &emsp;&emsp;&ensp;₹30
                     
                     
                   
                </ul>
                <hr size="+4" color="black">
                <p class="subheading"><b>Masala Maggi<hr size="+4" color="black"></b></p>
                 <ul class="a">
                     
                     <input type="checkbox" name="items[]"  value="c1_147"  >Masala Maggi &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&ensp;₹28
                     <input type="checkbox" name="items[]" value="c1_148" >Corn Masala Maggi &emsp;&emsp;&emsp;&ensp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_149" >Paneer Masala Maggi &emsp;&emsp;&emsp;₹28
                     <input type="checkbox" name="items[]" value="c1_150" >Mushroom Masala Maggi &emsp;&ensp;₹28  
                     <input type="checkbox" name="items[]" value="c1_151" >Cheese Masala Maggi &emsp;&emsp;&emsp;₹28  
                     <input type="checkbox" name="items[]" value="c1_152" >Potato Masala Maggi &emsp;&emsp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_153" >Potato Masala Cheese Maggi₹28
                     <input type="checkbox" name="items[]" value="c1_154" >Paneer Masala Cheese Maggi₹28
                     <input type="checkbox" name="items[]" value="c1_155" >BabyCorn Masala Maggi &emsp;&ensp;&nbsp;₹28
                     
                </ul>
            </div>
             <span class="vertical-line1"></span>
                 <div class="column2">
                 <p class="subheading"><b> Ice Creams <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c1_156" >Vanilla &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹28
                <input type="checkbox" name="items[]" value="c1_157" >Butter Scotch &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;₹28
                <input type="checkbox" name="items[]" value="c1_158" >Strawberry &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹28
                <input type="checkbox" name="items[]" value="c1_159" >Black Current Tutti Fruti &nbsp;₹28
                <input type="checkbox" name="items[]" value="c1_160" >Chocolate &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹28
                <input type="checkbox" name="items[]" value="c1_161" >Pista Badam &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹28     
                <input type="checkbox" name="items[]" value="c1_162" >Mango &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹28
                <input type="checkbox" name="items[]" value="c1_163" >Lychee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹28
                <input type="checkbox" name="items[]" value="c1_164" >Kesar Pista &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹28
                <input type="checkbox" name="items[]" value="c1_165" >Vanilla Choco Chips &emsp;&emsp;&emsp;&nbsp;₹28
                
                 </ul>
                 <hr size="+4" color="black">
                 <p class="subheading"><b> Ice Creams With Shakes <hr size="+4" color="black"></b></p>
                <ul class="a">
                 <input type="checkbox" name="items[]" value="c1_166" >Vanilla Milkshake &emsp;&emsp;&emsp;&emsp;&emsp;₹28
                <input type="checkbox" name="items[]" value="c1_167" >Strawberry Milkshake &emsp;&emsp;&ensp;  ₹28
                <input type="checkbox" name="items[]" value="c1_168" >Butterscotch Milkshake &emsp;&ensp;&nbsp;₹28
                <input type="checkbox" name="items[]" value="c1_169" >Black Current Milkshake &emsp;&ensp; ₹28
                <input type="checkbox" name="items[]" value="c1_170" >Chocolate Milkshake  &emsp;&emsp;&emsp;&ensp;₹28
                <input type="checkbox" name="items[]" value="c1_171" >Tutti Fruity Milkshake &emsp;&emsp; ₹28
                <input type="checkbox" name="items[]" value="c1_172" >Mango Milkshake &emsp;&emsp;&emsp;&emsp;&ensp;  ₹28
                <input type="checkbox" name="items[]" value="c1_173" >Vanilla Choco Chip Milkshake ₹28
                <input type="checkbox" name="items[]" value="c1_174" >Pista Badam Milkshake &emsp; ₹28
               
            </div>
                        
            
                         <span class="vertical-line2"></span>
            <div class="column3">
                <ul class="a">

                 <input type="checkbox" name="items[]" value="c1_175" >Fig Honey Milkshake &emsp;&emsp;&emsp; ₹28
                <input type="checkbox" name="items[]" value="c1_176" >Kesar Pista Milkshake &emsp;&emsp;  ₹28
                <input type="checkbox" name="items[]" value="c1_177" >Dairy Richa Delight &emsp;&emsp;&emsp;&ensp;₹28

                </ul>
    
                <hr size="+4" color="black">

            <p class="subheading"><b> Chaats <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                
                <input type="checkbox" name="items[]" value="c1_178" >Masala Puri &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹28
                <input type="checkbox" name="items[]" value="c1_179" >Pani Puri &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  ₹28
                <input type="checkbox" name="items[]" value="c1_180" >Aloo Puri &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  ₹28
                <input type="checkbox" name="items[]" value="c1_181" >Dahi Puri &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  ₹28
                <input type="checkbox" name="items[]" value="c1_182" >Sev Puri &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;₹28
                <input type="checkbox" name="items[]" value="c1_183" >Bhel Puri &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  ₹28
                <input type="checkbox" name="items[]" value="c1_184" >Mangalore Special Bhel &emsp;&emsp; ₹28
                <input type="checkbox" name="items[]" value="c1_185" >Samosa Chaat Masala &emsp;&emsp;&ensp;₹28
                <input type="checkbox" name="items[]" value="c1_186" >Plain Samosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  ₹28
                <input type="checkbox" name="items[]" value="c1_187" >Plain Kachori &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  &nbsp;₹28
               
                </ul>
                
                   
            </div>
            
            
            </form>
        </div>
        <div class="prev">
        <div align="left" style="margin-left: 20px">
            <a href="menu1_2.php">  <button class="button" style="vertical-align:middle"><span> Prev page </span></button></a>
               </div><br>
            </div>
        </div>
         </body>
</html>

        