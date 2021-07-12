

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
             height: 140%;
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
            margin-top: -53.5%;
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
            margin-top: -53%;
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
            margin-top:-53%;
            margin-left: 33%;
        display: inline-block;
        border-left: 3px solid black;
        
        height:78%;
    }
         .vertical-line2{
            margin-top: -40%;
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
        <h3>KOFFEE KUTIRA<br></h3>
     </div>
     <form action="cart6.php" method="post">
         <div align="right">
           
       <button   class="button" href="cart6.php" style="vertical-align:middle"><span> <i  class="fa fa-shopping-cart fa-2x"  aria-hidden="true" ></i>
</span></button>
            </div>

            <div class="column1">
                <p class="subheading"><b> Hot Beverages <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                     <input type="checkbox" name="items[]" value="c6_001" >Coffee &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹20
                     <input type="checkbox" name="items[]" value="c6_002" >Tea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&nbsp; &nbsp;₹27
                     <input type="checkbox" name="items[]" value="c6_003" >Black Coffee&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹22
                     <input type="checkbox" name="items[]" value="c6_004" >Plain Milk &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹22
                     <input type="checkbox" name="items[]" value="c6_005" >Black Milk &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;₹22
                     <input type="checkbox" name="items[]" value="c6_006" >Badam Milk &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹22
                     <input type="checkbox" name="items[]" value="c6_007" >Lemon Tea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹35
                     <input type="checkbox" name="items[]" value="c6_008" >Green tea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                     <input type="checkbox" name="items[]" value="c6_009" >Ginger tea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                     <input type="checkbox" name="items[]" value="c6_0010" >Horlicks &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;₹25
                     <input type="checkbox" name="items[]"  value="c6_011" >Boost  &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹25
                     
                     
                   
                </ul>
                <hr size="+4" color="black">
                <p class="subheading"><b>Fresh Juices<hr size="+4" color="black"></b></p>
                 <ul class="a">

                     
                     <input type="checkbox" name="items[]" value="c6_012" >Pineapple &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&ensp;₹38
                     <input type="checkbox" name="items[]" value="c6_013" >Watermelon &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&nbsp;&nbsp;&emsp;₹35
                     <input type="checkbox" name="items[]" value="c6_014" >Mosambi &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&ensp;₹38  
                     <input type="checkbox" name="items[]" value="c6_015" >Orange &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;₹42
                     <input type="checkbox" name="items[]" value="c6_016" >Fresh lime &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;₹40
                     <input type="checkbox" name="items[]" value="c6_017" >Pudhina lime &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;₹38
                     
                     
       
                    
                    
            
                   
                </ul>
         
            </div>
             <span class="vertical-line1"></span>
                 <div class="column2">
                 <p class="subheading"><b> Milkshakes <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c6_018" >Oreo &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹25
                <input type="checkbox" name="items[]" value="c6_019" >Banana  &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c6_020" >Sapota &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c6_021" >Musk &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹25
                
        </ul>
        <hr size="+4" color="black">

        <p class="subheading"><b> Sandwiches <hr size="+4" color="black"></b></p>
                <ul class="a">

                <input type="checkbox" name="items[]" value="c6_022" >Bread Jam  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹25
                <input type="checkbox" name="items[]" value="c6_023" >Bread Butter &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c6_024" >Veg Sandwich &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c6_025" >Veg Grill Sandwich &emsp;&emsp;&emsp;&emsp;&ensp;₹35    
                <input type="checkbox" name="items[]" value="c6_026" >Veg Paneer &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c6_027" >Veg corn&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹35
                
                

                </ul>
         
                    
                
            </div>
                         <span class="vertical-line2"></span>
            <div class="column3">
           
            <p class="subheading"><b> Snacks <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c6_028" >Samosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹25
                <input type="checkbox" name="items[]" value="c6_029" >Egg puff&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30

                <input type="checkbox" name="items[]" value="c6_030" >Veg puff &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c6_031" >Aloo bun &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c6_032" >Veg roll &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c6_033" >Paneer roll &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c6_034" >Break pakoda &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c6_035" >Double omelet &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹35
                
               
                
                
                    
                </ul>
                
                   
            </div>
            
            
            </form>
        </div>
        
         </body>
</html>

        