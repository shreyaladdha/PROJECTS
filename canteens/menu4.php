<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>menu4</title>
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
        <h3>SLN CANTEEN<br></h3>
     </div>
     <form action="cart4.php" method="post">
         <div align="right">
           
       <button   class="button" href="cart4.php" style="vertical-align:middle"><span> <i  class="fa fa-shopping-cart fa-2x"  aria-hidden="true" ></i>
</span></button>
            </div>

            <div class="column1">
                <p class="subheading"><b> Chips <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                     <input type="checkbox" name="items[]" value="c4_001" >Dorito's&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹15 
                     <input type="checkbox" name="items[]" value="c4_002" >Lays Magic Masala&emsp;&emsp;&emsp;&emsp;&ensp; ₹10
                     <input type="checkbox" name="items[]" value="c4_003" >Lays Cream'n'Onion&emsp;&emsp;&emsp;&emsp;&ensp;₹10
                     <input type="checkbox" name="items[]" value="c4_004" >Lays Hot'n'Sweet Chilli&emsp;&emsp;&emsp;₹10
                     <input type="checkbox" name="items[]" value="c4_005" >Lays Salted&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹10
                     
                   
                </ul>
            </div>
             <span class="vertical-line1"></span>
                 <div class="column2">
                    
                <p class="subheading"><b>Cold Beverages<hr size="+4" color="black"></b></p>
                 <ul class="a">
                     <input type="checkbox" name="items[]" value="c4_006" >Mounatin Dew  &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&ensp;&nbsp;₹20
                        
                         
                     <input type="checkbox" name="items[]"  value="c4_007"  >Pepsi &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹20
                      <input type="checkbox" name="items[]" value="c4_008" >Coke &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹20
                      <input type="checkbox" name="items[]" value="c4_009" >Sting&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;₹25
                     <input type="checkbox" name="items[]" value="c4_010" >Packed drinking water&emsp;&emsp;&emsp;₹10
                     
       
                    
                    
            
                   
                </ul>
         
            </div>
                         <span class="vertical-line2"></span>
            <div class="column3">
            <p class="subheading"><b> Snacks <hr size="+4" color="black"></b></p>
                <ul class="a">
                <input type="checkbox" name="items[]" value="c4_011" >Boiled egg &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹10 
                <input type="checkbox" name="items[]" value="c4_012" >Masala Vada &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹5
                <input type="checkbox" name="items[]" value="c4_013" >Idli &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
 		<input type="checkbox" name="items[]" value="c4_014" >Samosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹15
                <input type="checkbox" name="items[]" value="c4_015" >Paneer puff &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹20
                <input type="checkbox" name="items[]" value="c4_016" >Egg puff &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹20
                <input type="checkbox" name="items[]" value="c4_017" >Bun Samosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹25

                    
                    
                </ul>
                
                   
            </div>
            
            
            </form>
        </div>
        
         </body>
</html>

        