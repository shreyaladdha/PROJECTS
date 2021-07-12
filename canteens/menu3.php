

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
             height: 152%;
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
            margin-top: -65.5%;
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
            margin-top: -62.5%;
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
            margin-top:-65%;
            margin-left: 33%;
        display: inline-block;
        border-left: 3px solid black;
        
        height:85%;
    }
         .vertical-line2{
            margin-top: -49%;
            margin-left: 65%;
        display: inline-block;
        border-left: 3px solid black;
        
        height: 85%;
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
        <h3>GOWDA'S<br></h3>
     </div>
     <form action="cart3.php" method="post">
         <div align="right">
           
       <button   class="button" href="cart3.php" style="vertical-align:middle"><span> <i  class="fa fa-shopping-cart fa-2x"  aria-hidden="true" ></i>
</span></button>
            </div>

            <div class="column1">
                <p class="subheading"><b> Beverages <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                     <input type="checkbox" name="items[]" value="c3_001" >Lemonade &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹20
                     <input type="checkbox" name="items[]" value="c3_002" >Ice Tea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;    ₹27
                     <input type="checkbox" name="items[]" value="c3_003" >Mountain dew &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹22
                     <input type="checkbox" name="items[]" value="c3_004" >Fanta &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹22
                     <input type="checkbox" name="items[]" value="c3_005" >Limca &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&nbsp;₹22
                     <input type="checkbox" name="items[]" value="c3_006" >Pulpy orange &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹35
                     <input type="checkbox" name="items[]" value="c3_007" >Cavins Milkshake &emsp;&emsp;&emsp;&emsp;&emsp;₹30
                     <input type="checkbox" name="items[]" value="c3_008" >Nescafe cold coffee &emsp;&emsp;&emsp;&emsp;₹25
                     
                     
                   
                </ul>
                <hr size="+4" color="black">
                <p class="subheading"><b>Maggi<hr size="+4" color="black"></b></p>
                 <ul class="a">

                     <input type="checkbox" name="items[]" value="c3_009" >Veg Maggi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                     <input type="checkbox" name="items[]" value="c3_0010" >Veg Fry Maggi &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&nbsp;₹32
                     <input type="checkbox" name="items[]"  value="c3_011"  >Veg Maggi with Cheese  &emsp;&emsp;₹38
                     <input type="checkbox" name="items[]" value="c3_012" >Veg Fry Maggi with Cheese &nbsp;₹38
                     <input type="checkbox" name="items[]" value="c3_013" >Panner Maggi &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&nbsp;&nbsp;&nbsp;₹35
                     <input type="checkbox" name="items[]" value="c3_014" >Paneer Veg fry Maggi &emsp;&emsp;&emsp;₹38  
                     <input type="checkbox" name="items[]" value="c3_015" >Paneer Vegfry Maggie with cheese &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;₹42
                     <input type="checkbox" name="items[]" value="c3_016" >Paneer Maggi with <br>Cheese &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;₹40
                     <input type="checkbox" name="items[]" value="c3_017" >Corn Veg fry Maggi &emsp;&emsp;&emsp;&emsp;₹38
                     <input type="checkbox" name="items[]" value="c3_018" >Sweetcorn Maggi with <br>Cheese &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;₹40
                     <input type="checkbox" name="items[]" value="c3_019" >Masala Maggi  &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&nbsp;₹38
                     <input type="checkbox" name="items[]" value="c3_020" >Masala Maggi with Cheese &nbsp;&nbsp;₹40

                     
       
                    
                    
            
                   
                </ul>
            </div>
             <span class="vertical-line1"></span>
                 <div class="column2">
                    
        
                         
            <p class="subheading"><b> Sandwiches <hr size="+4" color="black"></b></p>
                <ul class="a">
                
               
                <input type="checkbox" name="items[]" value="c3_021" >Bread Jam  &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&ensp;₹25
                <input type="checkbox" name="items[]" value="c3_022" >Bread Butter Jam  &emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c3_023" >Veg Burger &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c3_024" >Veg Sandwich &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c3_025" >Veg Grill Sandwich &emsp;&emsp;&emsp;&emsp;&nbsp;₹35    
                <input type="checkbox" name="items[]" value="c3_026" >Veg Cheese Grill &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹35
                <input type="checkbox" name="items[]" value="c3_027" >Onion Cheese Grill &emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c3_028" >Bun omelet cheese and chips ₹35
                <input type="checkbox" name="items[]" value="c3_029" >Bun samosa cheese and chips ₹35
                



                

                 </ul>
                 <hr size="+4" color="black">
                 <p class="subheading"><b> Snacks <hr size="+4" color="black"></b></p>
                <ul class="a">

                <input type="checkbox" name="items[]" value="c3_030" >Momo's &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹25
                <input type="checkbox" name="items[]" value="c3_031" >Pasta &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c3_032" >Pizza Bread &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c3_033" >Veg Ppuff &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c3_034" >Egg puff  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c3_035" >Brownie cake &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹35
                

                </ul>
            </div>
                         <span class="vertical-line2"></span>
            <div class="column3">
            <p class="subheading"><b> Chocolates <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c3_036" >dairy milk &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹25
                <input type="checkbox" name="items[]" value="c3_037" >Gems &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c3_038" >Twix &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c3_039" >Snickers &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c3_040" >Milky bar &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹35
                <input type="checkbox" name="items[]" value="c3_041" >Choki choki &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹35
                
               
                
                
                    
                </ul>
                
                   
            </div>
            
            
            </form>
        </div>
        
         </body>
</html>

        