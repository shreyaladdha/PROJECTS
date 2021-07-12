

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
             height: 100%;
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
            margin-top: -37.5%;
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
            margin-top: -38.5%;
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
            margin-top:-20%;
            margin-left: 33%;
        display: inline-block;
        border-left: 3px solid black;
        
        height:78%;
    }
         .vertical-line2{
            margin-top: -19%;
            margin-left: 65%;
        display: inline-block;
        border-left: 3px solid black;
        
        height: 78%;
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
        <h3>NESCAFE<br></h3>
     </div>
     <form action="cart2.php" method="post">
         <div align="right">
           
       <button   class="button" href="cart2.php" style="vertical-align:middle"><span> <i  class="fa fa-shopping-cart fa-2x"  aria-hidden="true" ></i>
</span></button>
            </div>

            <div class="column1">
                <p class="subheading"><b> Hot Beverages <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                     <input type="checkbox" name="items[]" value="c2_001" >Hot chocolate &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹25 
                     <input type="checkbox" name="items[]" value="c2_002" >Latte&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&ensp; ₹25
                     <input type="checkbox" name="items[]" value="c2_003" >Cappuccino&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹25
                     <input type="checkbox" name="items[]" value="c2_004" >Mocha&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;  ₹25
                     <input type="checkbox" name="items[]" value="c2_005" >Filter coffee&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹20
                     
                   
                </ul>
            </div>
             <span class="vertical-line1"></span>
                 <div class="column2">
                    
                <p class="subheading"><b>Cold Beverages<hr size="+4" color="black"></b></p>
                 <ul class="a">
                     <input type="checkbox" name="items[]" value="c2_006" >Cold coffee 
                    &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;  ₹25
                        
                         
                     <input type="checkbox" name="items[]"  value="c2_007"  >Nescafe ice &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;₹25
                      <input type="checkbox" name="items[]" value="c2_008" >Ice Tea &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp; ₹25
                      <input type="checkbox" name="items[]" value="c2_009" >Milo Milkshake&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&nbsp;&nbsp; ₹25
                     <input type="checkbox" name="items[]" value="c2_010" >Nescafe hazelnut&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; ₹25
                     
       
                    
                    
            
                   
                </ul>
         
            </div>
                         <span class="vertical-line2"></span>
            <div class="column3">
            <p class="subheading"><b> Snacks <hr size="+4" color="black"></b></p>
                <ul class="a">
                <input type="checkbox" name="items[]" value="c2_011" >Masala maggi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30 
                <input type="checkbox" name="items[]" value="c2_012" >Cup noodles &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ₹35
                <input type="checkbox" name="items[]" value="c2_013" >Veg Burger &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ₹30
                <input type="checkbox" name="items[]" value="c2_014" >Veg puff &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c2_015" >Egg puff &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c2_016" >French fries &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; ₹40

                    
                    
                </ul>
                
                   
            </div>
            
            
            </form>
        </div>
        
         </body>
</html>

        