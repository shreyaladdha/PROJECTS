

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
             height: 150%;
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
            margin-top: -60%;
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
            margin-top: -58.5%;
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
            margin-top:-60%;
            margin-left: 33%;
        display: inline-block;
        border-left: 3px solid black;
        
        height:82%;
    }
         .vertical-line2{
            margin-top: -56%;
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
                <p class="subheading"><b> Fresh juice <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                     <input type="checkbox" name="items[]" value="c1_001" >Mosambi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹22 
                     <input type="checkbox" name="items[]" value="c1_002" >Orange &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;₹22
                     <input type="checkbox" name="items[]" value="c1_003" >Watermelon &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹22
                     <input type="checkbox" name="items[]" value="c1_004" >Grape &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹22
                     <input type="checkbox" name="items[]" value="c1_005" >Muskmelon &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹22
                     <input type="checkbox" name="items[]" value="c1_006" >Papaya &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&ensp;&nbsp;₹22
                     <input type="checkbox" name="items[]" value="c1_007" >Lime Juice &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹15
                     <input type="checkbox" name="items[]" value="c1_008" >Mixed Fruit &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹32
                     <input type="checkbox" name="items[]" value="c1_009" >Mosambi/Orange juice &emsp;&emsp;&ensp;&nbsp;₹32
                     
                   
                </ul>
                <hr size="+4" color="black">
                <p class="subheading"><b>Milkshakes<hr size="+4" color="black"></b></p>
                 <ul class="a">
                     <input type="checkbox" name="items[]" value="c1_0010" >Arabian grape juice &emsp;&emsp;&emsp;&emsp;₹28
                        
                         
                     <input type="checkbox" name="items[]"  value="c1_011"  >Apple Milk Shake  &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_012" >Sapota Milk Shake &emsp;&emsp;&emsp;&emsp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_013" >Butter Fruit Milk Shake &emsp;&ensp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_014" >Banana Milk Shake  &emsp;&emsp;&emsp;₹28
                     <input type="checkbox" name="items[]" value="c1_016" >Pomegranate Milk Shake  &emsp;&ensp;₹28
                     <input type="checkbox" name="items[]" value="c1_017" >Mango Milk Shake   &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_018" >Custard Apple MilkShake  &emsp;&ensp;₹28
                     <input type="checkbox" name="items[]" value="c1_019" >Strawberry MilkShake  &emsp;&emsp;&ensp;₹28
                     <input type="checkbox" name="items[]" value="c1_020" >Solid Mosambi/Orange   &emsp;&emsp;&ensp;&nbsp;₹32
                     <input type="checkbox" name="items[]" value="c1_021" >Fruit Bowl &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&ensp;&nbsp;₹28
                    </ul>

            </div>
             <span class="vertical-line1"></span>
                 <div class="column2">
                 <p class="subheading"><b> Sandwiches <hr size="+4" color="black"></b></p>
                <ul class="a">
                <input type="checkbox" name="items[]" value="c1_022" >Bread Jam  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹25 
                <input type="checkbox" name="items[]" value="c1_023" >Bread Butter Jam  &emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c1_024" >Veg Burger &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_025" >Veg Sandwich  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c1_026" >Veg Grill Sandwich &emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c1_027" >Onion Cheese Grill &emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c1_028" >Potato Cheese Grill &emsp;&emsp;&emsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c1_029" >Potato Onion Cheese Grill &emsp;&nbsp;₹42
                <input type="checkbox" name="items[]" value="c1_030" >Paneer Veg Grill  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹37
                <input type="checkbox" name="items[]" value="c1_031" >Paneer Cheese Grill &emsp;&emsp;&emsp;&emsp;₹42
                <input type="checkbox" name="items[]" value="c1_032" >Sweet Corn Sandwich  &emsp;&emsp;&emsp;&nbsp;₹37
                <input type="checkbox" name="items[]" value="c1_033" >Sweet Corn Cheese Sandwich  ₹42
                <input type="checkbox" name="items[]" value="c1_034" >Babycorn Sandwich  &emsp;&emsp;&emsp;&emsp;₹42
                <input type="checkbox" name="items[]" value="c1_035" >Babycorn Cheese Sandwich &emsp;₹42
                <input type="checkbox" name="items[]" value="c1_036" >Mushroom Sandwich &emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c1_037" >Plain Masala Sandwich &emsp;&emsp;&ensp;₹40
                <input type="checkbox" name="items[]" value="c1_038" >Egg Masala Sandwich &emsp;&emsp;&emsp;₹45
                <input type="checkbox" name="items[]" value="c1_039" >Paneer Masala Sandwich &emsp;&ensp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_040" >Sweetcorn Masala Sandwich &ensp;₹45
                <input type="checkbox" name="items[]" value="c1_041" >Babycorn Masala Sandwich &emsp;₹45
                <input type="checkbox" name="items[]" value="c1_042" >Potato Masala Sandwich  &emsp;&ensp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_043" >Onion Masala Sandwich &emsp;&emsp;&nbsp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_044" >Capsicum Masala Sandwich &ensp;&nbsp;₹45




                 </ul>
         </div>
                
                
                         <span class="vertical-line2"></span>
            <div class="column3">
            <p class="subheading"><b> Maggi <hr size="+4" color="black"></b></p>
                <ul class="a">
                <input type="checkbox" name="items[]" value="c1_045" >Veg Maggi   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹25 
                <input type="checkbox" name="items[]" value="c1_046" >Veg Fry Maggi  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c1_047" >Veg Maggi with Cheese &emsp;&emsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_048" >Veg Fry Maggi with Cheese &ensp;₹30
                <input type="checkbox" name="items[]" value="c1_049" >Panner Maggi  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c1_050" >Sweetcorn Maggi  &emsp;&emsp;&emsp;&emsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c1_051" >Mushroom Maggi  &emsp;&emsp;&emsp;&emsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c1_052" >Paneer Veg fry Maggi  &emsp;&emsp;&emsp;₹42
                <input type="checkbox" name="items[]" value="c1_053" >Paneer Veg fry Maggie with cheese  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹37
                <input type="checkbox" name="items[]" value="c1_054" >Paneer Maggi with Cheese &nbsp;&nbsp;&nbsp;₹42
                <input type="checkbox" name="items[]" value="c1_055" >Mushroom Veg fry Maggi  &emsp;&ensp;₹37
                <input type="checkbox" name="items[]" value="c1_056" >Mushroom Veg fry Maggi with Cheese   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹42
                <input type="checkbox" name="items[]" value="c1_057" >Mushroom Maggi with <br> Cheese  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;₹42
                <input type="checkbox" name="items[]" value="c1_058" >Corn Veg fry Maggi &emsp;&emsp;&emsp;&emsp;₹42
                <input type="checkbox" name="items[]" value="c1_059" >Corn Veg fry Maggi with <br> Cheese &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹35
                <input type="checkbox" name="items[]" value="c1_060" >Sweetcorn Maggi with <br> Cheese &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹40
                <input type="checkbox" name="items[]" value="c1_061" >Babycorn Maggi  &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹45
                <input type="checkbox" name="items[]" value="c1_062" >Babycorn Veg fry Maggi  &emsp;&ensp;&ensp;₹45
                <input type="checkbox" name="items[]" value="c1_063" >Babycorn Veg fry Maggi with Cheese  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_064" >Babycorn Maggi with Cheese ₹45
                


                    
                    
                </ul>
                
                   
            </div>
            
            
            </form>
        <br>
        <div align="center">
                <a href="menu1_2.php">  <button class="button" style="vertical-align:middle"><span> Next page </span></button></a>
               </div><br>
        </div>
        
         </body>
</html>

        