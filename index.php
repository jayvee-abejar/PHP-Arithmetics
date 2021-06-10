<!doctype html>
<html>
<head>
<title> PHP ARITHMETIC OPERATORS PROGRAM </title>
</head>
<style>
.header {
    position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 80px; 
	overflow: hidden; 
	background: white;
	}
	
.main{
    border-radius: 10px 10px;
	position: fixed;
	top:80px; 
	bottom: 50px; 
	left: 300px; 
	right: 0; 
	overflow: auto; 
	background: white;
	}

	body{
    background-color: white;
    }

	   nav {
		    border-radius: 1px 1px;
			position: absolute; 
			top: 80px; 
			bottom: 50px; 
			left:0; 
			width: 300px; 
			overflow: auto;  	
		}
		
		i{
		font-size: 10px;
		}
		.h{
		background-color: white;
		height: 40px;
		margin-left: 50px;
		margin-right: 50px;
		border-radius: 0px 0px;
		box-shadow: 1px 1px 1px black;
		}
		h1{
		color: black;
		text-shadow: 2px 2px 2px white;
		}
		.h3{
		background-color:black;
		height: 20px;
		margin-top:0px;
		margin-left: 350px;
		margin-right: 350px;
		border-radius: 30px 30px;
		box-shadow: 1px 1px 1px cyan;
		}
		h3{
		font-size:15px;
		color:  white;
		text-shadow: 2px 2px 2px grey;
		}
		img{
		margin-top: 10px;
		width: 200px;
		height: 200px;
		border-radius: 50%;
		}
		.button{
		border-radius: 0px 0px;
		background: white;
		width: 290px;
		height: 70px;
		color: black;
		font-size: 12px;
		}
		.button:hover{
        background: linear-gradient( to left,cyan,cyan);
        height: 70px;
        width: 290px;
        transition: 1s;
        color: black;
        font-size: 16px;
        text-shadow: 3px 3px 3px white;
    }
    h2{
    color: white;
    }
    fieldset{
    background-color: black;
    width: 300px;
    border-radius: 30px 30px;
    margin-bottom:10px;
    }
    
    .flex{
    display:flex;
    margin-left: 20px;
    }
    h4{
    padding-left:150px;
    padding-right:120px;
    color: white;
    font-size: 15px;
    }
    input[type=submit]{
    font-size: 20px;
    border: 1px  solid black;
    position: relative;
    background: cyan;
    text-align: center;
    color: black;
    margin: 5px;
    }
    .frame{
    margin-top:0px;
    width: 100%;
    height: 100%;
    background: white;
    border: 0px;
    border-radius: 0px, 0px;
    }
    h5{
    font-size: 50px;
    color: black;
    }

</style>
<body>
<header class="header">
<center>
<div class="h"><h1>PHP ARITHMETIC OPERATORS PROGRAM</h1></div></header></center>
<nav>
<center>
<form method="post"> 

        <input type="submit" name="button1"
                class="button" value="Addition" />
                <br>
        <input type="submit" name="button2"
                class="button" value="Subtraction" />
                       <br>
        <input type="submit" name="button3"
                class="button" value="Multiplication" />
                       <br>
        <input type="submit" name="button4"
                class="button" value="Division" />
                       <br>
        <input type="submit" name="button5"
                class="button" value="Area & Perimeter of Triangle" />
                       <br>
        <input type="submit" name="button6"
                class="button" value="Area & Perimeter of Rectangle" />
                <br>	 

    </form> 
    </center>

</center></nav>

<main class="main">
<fieldset class="frame">
   <?php
      
        if(array_key_exists('button1', $_POST)) { 

            button1();

        } 

        else if(array_key_exists('button2', $_POST)) { 

            button2(); 

        }
        else if(array_key_exists('button3', $_POST)) { 

            button3(); 

        } 
        else if(array_key_exists('button4', $_POST)) { 

            button4(); 

        }
        else if(array_key_exists('button5', $_POST)) { 

            button5(); 

        }
        else if(array_key_exists('button6', $_POST)) { 

            button6(); 

        } 
function button1() {
            $num1=2;
            $num2=10;
            $num3=6;
            $num4=9;
            $num5=5;
            echo "<h5>Addition</h5>";
            echo "<p>Adding Two Digits</p>";
            $answer=$num1+$num2;
            echo "Formula: $num1 + $num2 = $answer";
            echo "<br> The Sum of the Two Numbers is: $answer";
            echo "<br><p>Adding Three Digits</p>";
            $answer=$num1+$num2 + $num3;
            echo "Formula: $num1 + $num2 + $num3 = $answer";
            echo "<br> The Sum of the Three Numbers is: $answer";
            echo "<br><p>Adding Four Digits</p>";
            $answer=$num1+$num2 + $num3 + $num4;
            echo "Formula: $num1 + $num2 + $num3 + $num4 = $answer";
            echo "<br> The Sum of the Four Numbers is: $answer";
             echo "<br><p>Adding Five Digits</p>";
            $answer=$num1+$num2 + $num3 + $num4 + $num5;
            echo "Formula: $num1 + $num2 + $num3 + $num4 + $num5= $answer";
            echo "<br> The Sum of the Four Numbers is: $answer";
            
            
        } 

        function button2() { 

            $num1=9;
            $num2=8;
            $num3=7;
            $num4=5;
            echo "<h5>Subtract</h2>";
            echo "Subtraction of Two Digits</h2>";
            $answer=$num1-$num2;
            echo "<br>Formula: $num1 - $num2 = $answer";
            echo "<br><br><br> The Difference of the Two Numbers is: $answer";
            echo "<br><br><br><p>Subtracting Three Digits</p>";
            $answer=$num1-$num2 - $num3;
            echo "Formula: $num1 - $num2 -$num3 = $answer";
            echo "<br> The Difference of the Three Numbers is: $answer";
            $answer=$num1-$num2 - $num3 - $num4;
            echo "<br><br><br><p>Subtracting Four Digits</p>";
            echo "<br>Formula: $num1 - $num2 -$num3 - $num4 = $answer";
            echo "<br> The Difference of the Four Numbers numbers is: $answer";

            

        }
        function button3() { 

            $num1=7;
            $num2=10;
            $num3=8;
            $num4=5;
            echo "<h5>Multiply</h5>";
            echo "Multiplication of Two Digits</h2>";
            $answer=$num1*$num2;
            echo "<br><br>Formula: $num1 * $num2 = $answer";
            echo "<br>The Product of the Two Numbers is: $answer";
            echo "<p>Multiplication Three Digits</p>";
            $answer=$num1*$num2*$num3;
            echo "Formula: $num1 * $num2 * $num3 = $answer";
            echo "<br>The Product of the Three Numbers is: $answer";
             echo "<p>Multiplication Four Digits</p>";
            $answer=$num1*$num2*$num3*$num4;
            echo "Formula: $num1 * $num2 * $num3 * $num4 = $answer";
            echo "<br>The Product of the Four Numbers is: $answer";


            


        } 
        function button4() { 

            $num1=6;
            $num2=8;
            $num3=7;
            $num4=2;
            $num5=6;
            echo "<h5>Divide</h2>";
            echo "Division of Two Digits</h2>";
            $answer=$num1/$num2;
            echo "<br>Formula: $num1/$num2 = $answer";
            echo "<br>The Qoutient of the Two Numbers is: $answer";
            echo "<br><br>Division of Three Digits</h2>";
            $answer=$num1/$num2/$num3;
            echo "<br>Formula: $num1/$num2/$num3 = $answer";
            echo "<br> The Qoutient of the Three Numbers is: $answer";
            echo "<br><br>Division of Four Digits</h2>";
            $answer=$num1/$num2/$num3/$num4;
            echo "<br>Formula: $num1/$num2/$num3/$num4 = $answer";
            echo "<br> The Qoutient of the Four Numbers is: $answer";
            echo "<br><br>Division of Five Digits</h2>";
            $answer=$num1/$num2/$num3/$num4/$num5;
            echo "<br>Formula: $num1/$num2/$num3/$num4/$num5 = $answer";
            echo "<br> The Qoutient of the Five Numbers is: $answer";


        }
        function button5() { 
            $b=20;
            $h=10;
            $a=2;
            echo "<h5> Area and Perimeter of Triangle</h5>";
            echo "Area:<br> b=$b<br>h=$h<brFORMULA:A=bh/2<br><br>Value: A=($b x $h)/2";
            echo"<br><br>Perimeter:<br> P= a+b+h<br>Value: P =$b+$h+100";
            $ans=($b*$h)/$a;
            echo "<br><br>Answer";
            echo "<br>The Area of Triangle is: $ans";
            $P=$b+$h+$ans;
            echo "<br>The Perimeter of Triangle is : $P";
        }
        function button6(){   
            echo "<h5> Area and Perimeter of Rectangle</h5>";
            $length=20;
            $width=10;
            $a=2;
            echo "Area:<br> b=$length<br> h=$width<brFORMULA:A=length x width/2<br><br>Value: A = $length x $width";
            echo"<br><br>Perimeter:<br> P = 2xlenght+2xwidth<br>Value: P = 2*$length+2*$width";
            $Area=$length*$width;
            echo "<br><br>Answer";
            echo "<br>The Area of Rectangle is: $Area";
            $P= ($a*$length)+($a*$width);
            echo "<br>The Perimeter of Rectangle is : $P";
        }
        
    ?>
</fieldset>
</main>
<body>
<html>