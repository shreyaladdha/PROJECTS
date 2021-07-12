

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
             height: 180%;
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
            margin-top: -76%;
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
            margin-top: -74%;
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
            margin-top:-75%;
            margin-left: 33%;
        display: inline-block;
        border-left: 3px solid black;
        
        height:85%;
    }
         .vertical-line2{
            margin-top: -71%;
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
         .prev
        {
            margin-top: -4.5%;
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
                <p class="subheading"><b> Egg-Omelette Items<hr size="+4" color="black"></b></p>
                <ul class="a">
                
                     <input type="checkbox" name="items[]" value="c1_065" >Omelette &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹22 
                     <input type="checkbox" name="items[]" value="c1_066" >Bread Omelette &emsp;&emsp;&emsp;&emsp;&emsp;₹22
                     <input type="checkbox" name="items[]" value="c1_067" >Cheese Omelette &emsp;&emsp;&emsp;&emsp;₹22
                     <input type="checkbox" name="items[]" value="c1_068" >Bread Omlette With Cheese ₹22
                     <input type="checkbox" name="items[]" value="c1_069" >Corn Omelette &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹22
                     <input type="checkbox" name="items[]" value="c1_070" >Corn Omelette with cheese &nbsp;₹22
                     <input type="checkbox" name="items[]" value="c1_071" >Paneer Omelette &emsp;&emsp;&emsp;&emsp;&emsp;₹15
                     <input type="checkbox" name="items[]" value="c1_072" >Paneer Cheese Omelette &emsp;&ensp;₹32
                     <input type="checkbox" name="items[]" value="c1_073" >Mushroom Omelette &emsp;&emsp;&nbsp;&nbsp;₹32
                     <input type="checkbox" name="items[]" value="c1_074" >Mushroom Cheese Omelette ₹32
                     <input type="checkbox" name="items[]"  value="c1_075">Lime Omelette &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹32
                     <input type="checkbox" name="items[]" value="c1_076" >Lime Cheese Omelette &emsp;&emsp;₹32
                     <input type="checkbox" name="items[]" value="c1_077" >Bread Corn Cheese Omelette₹32
                     <input type="checkbox" name="items[]" value="c1_078" >Bread Baby Corn Cheese Omelette &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&emsp;₹32
                     
                   
                </ul>
                <hr size="+4" color="black">
                <p class="subheading"><b>Egg-Bread Items<hr size="+4" color="black"></b></p>
                 <ul class="a">
                     
                        
                     <input type="checkbox" name="items[]" value="c1_079" >Egg Burji  &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&nbsp;₹28  
                     <input type="checkbox" name="items[]" value="c1_080" >Bread Burji &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;&ensp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_081" >Bread Egg Burji &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;₹28
                     <input type="checkbox" name="items[]" value="c1_082" >Bread Corn Egg &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;₹28
                     <input type="checkbox" name="items[]" value="c1_083" >Bread Omelette With Cheese₹28
                     <input type="checkbox" name="items[]" value="c1_084" >Bread Mushroom Omelette &ensp;₹28
                     <input type="checkbox" name="items[]" value="c1_085" >Bread Paneer Omelette&emsp;&ensp;&nbsp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_086" >Bread Corn Omelette &emsp;&emsp;&ensp;&nbsp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_087" >Bread Baby Corn Omelette&ensp;&nbsp;₹28
                     <input type="checkbox" name="items[]" value="c1_088" >Bread Mushroom Cheese Omlette &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹32
                     <input type="checkbox" name="items[]" value="c1_089" >Bread Paneer Cheese <br>Omelette &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹22     

                   
                </ul>
            </div>
             <span class="vertical-line1"></span>
                 <div class="column2">
                 <p class="subheading"><b> South Indian Dishes <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c1_090" >Idly(2)  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹25
                <input type="checkbox" name="items[]" value="c1_091" >Vada(1)&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c1_092" >Idly(2) Vada(1) &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_093" >Idly(1) Vada(1) &emsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c1_094" >Idly(1) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹35
                <input type="checkbox" name="items[]" value="c1_095" >Rava Idly &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c1_096" >Kara Bath  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹35
                <input type="checkbox" name="items[]" value="c1_097" >Kesari Bath  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;₹35
                <input type="checkbox" name="items[]" value="c1_098" >Chow Chow Bath  &emsp;&emsp;&emsp;&emsp;&emsp;₹35
                <input type="checkbox" name="items[]" value="c1_099" >Poori &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹42
                <input type="checkbox" name="items[]" value="c1_100" >Curd Vada &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹42
                <input type="checkbox" name="items[]" value="c1_101" >Bajji/Pakoda &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹42
                <input type="checkbox" name="items[]" value="c1_102" >Bajji(2) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹42
                <input type="checkbox" name="items[]" value="c1_103" >Masala Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹37
                <input type="checkbox" name="items[]" value="c1_104" >Set Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;₹42
                <input type="checkbox" name="items[]" value="c1_105" >Plain Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹42
                <input type="checkbox" name="items[]" value="c1_106" >Khali Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹40
                <input type="checkbox" name="items[]" value="c1_107" >Onion Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹45
                <input type="checkbox" name="items[]" value="c1_108" >Rava Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_109" >Rava Onion Dosa &emsp;&emsp;&emsp;&emsp;&ensp;₹45
                <input type="checkbox" name="items[]" value="c1_110" >Rava Masala Dosa &emsp;&emsp;&emsp;&emsp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_111" >Special Palak Dosa &emsp;&emsp;&emsp;&emsp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_112" >Neer Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_113" >Sweet Corn Dosa &emsp;&emsp;&emsp;&emsp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_114" >Mysore Masala Dosa &emsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_115" >Capsicum Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹45
                <input type="checkbox" name="items[]" value="c1_116" >Veg Mix Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;₹45
                <input type="checkbox" name="items[]" value="c1_117" >Onion Masala Dosa &emsp;&emsp;&emsp;&emsp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_118" >Paper Masala Dosa &emsp;&emsp;&emsp;&nbsp;₹45
                <input type="checkbox" name="items[]" value="c1_119" >Paper Plain Dosa &emsp;&emsp;&emsp;&emsp;&emsp;₹45
                <input type="checkbox" name="items[]" value="c1_120" >Special Dosa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹45




                 </ul>
         
                
         
            </div>
                         <span class="vertical-line2"></span>
            <div class="column3">
            <p class="subheading"><b> South Indian Foods <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c1_121" >South Indian Meals &emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_122" >Rice Sambar &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_123" >Curd Rice &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;₹30
                <input type="checkbox" name="items[]" value="c1_124" >Extra Rice &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_125" >Chapati(2) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_126" >Parota(2) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_128" >Akki Roti(2) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_129" >Ragi Roti(2) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c1_130" >Chapatti(1) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;₹30
                <input type="checkbox" name="items[]" value="c1_131" >Parota(1) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30



                 </ul>
                 
         
                 <hr size="+4" color="black">
            <p class="subheading"><b> Sweets <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c1_132" >Carrot Halwa &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_133" >Jamoon(1) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_134" >Jelabi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;₹30


                 </ul>
         
                 <hr size="+4" color="black">
            <p class="subheading"><b> Sweets <hr size="+4" color="black"></b></p>
                <ul class="a">
                
                <input type="checkbox" name="items[]" value="c1_135" >Coffee/Tea &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&ensp;&nbsp;₹30
                <input type="checkbox" name="items[]" value="c1_136" >Badam Milk &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;₹30
                
                
                
                


                    
                    
                </ul>
                
                
            </div>
            
            
            </form> 
        
        <div align="right" style="margin-right: 20px;margin-bottom:155px;">
                <a href="menu1_3.php">  <button class="button" style="verticals-align:middle"><span> Next page </span></button></a>
               </div><br>
               <div class="prev">
        <div align="left" style="margin-left: 20px" style="margin-bottom: -50px">
            <a href="menu1_1.php"> <button class="button" style="vertical-align:middle"><span> Prev page </span></button></a>
               </div><br>
            </div>
            
        </div>

         </body>
</html>

