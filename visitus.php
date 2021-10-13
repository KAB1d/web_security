<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VISIT US</title>
	<link rel="stylesheet" type="text/css" href="designing.css">
</head>
<body>
    
    <section>
        
    </section>

<section class="body"> 
    <div class="slider">
    	<div class="slides">
    	  
    	  <input type="radio" name="radio-btn" id="radio1">
    	  <input type="radio" name="radio-btn" id="radio2">
    	  <input type="radio" name="radio-btn" id="radio3">
    	  <input type="radio" name="radio-btn" id="radio4">
    	  <input type="radio" name="radio-btn" id="radio5">

    	  
    	  <div class="slide first">
    	  	<img src="visit/exterior.jpg">
    	  </div>
    	  <div class="slide">
    	  	<img src="visit/interior.jpg">
    	  </div>
    	  <div class="slide">
    	  	<img src="visit/bath.png">
    	  </div>
    	  <div class="slide">
    	  	<img src="visit/bed.jpg">
    	  </div>
    	  <div class="slide">
    	  	<img src="visit/kitchen.jpg">
    	  </div>


    	  <div class="navgation-auto">
    	  	<div class="auto-btn1"></div>
    	  	<div class="auto-btn2"></div>
    	  	<div class="auto-btn3"></div>
    	  	<div class="auto-btn4"></div>
    	  	<div class="auto-btn5"></div>
    	  </div>
    	  
    	  <div class="navgation-manual ">
    	   <label for="radio1" class="manual-btn"></label>
    	   <label for="radio2" class="manual-btn"></label>
    	   <label for="radio3" class="manual-btn"></label>
    	   <label for="radio4" class="manual-btn"></label>
    	   <label for="radio5" class="manual-btn"></label>
    	  </div>
        </div>

   </section>
   <script type="text/javascript">
       var counter = 1;
       setInterval(function() {
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if (counter > 4) {
            counter = 1;
          }
       },3000);
   </script>

</body>
</html>