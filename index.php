<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator Competetion</title>

<!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">

	
	h2{
		text-align:center;
	}
	
	#competition_results, #competition_form{
		
		font-family:Verdana, sans-serif;
		font-size:13px;
		line-height:17px;
		max-width:653px;
		margin:auto;
		border-radius: 10px 10px 10px 10px;
		-moz-border-radius: 10px 10px 10px 10px;
		-webkit-border-radius: 10px 10px 10px 10px;
		border: 1px solid #000000;
		
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#d30000+0,ff9696+100 */
background: rgb(211,0,0); /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2QzMDAwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZjk2OTYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top, rgba(211,0,0,1) 0%, rgba(255,150,150,1) 100%); /* FF3.6-15 */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(211,0,0,1)), color-stop(100%,rgba(255,150,150,1))); /* Chrome4-9,Safari4-5 */
background: -webkit-linear-gradient(top, rgba(211,0,0,1) 0%,rgba(255,150,150,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: -o-linear-gradient(top, rgba(211,0,0,1) 0%,rgba(255,150,150,1) 100%); /* Opera 11.10-11.50 */
background: -ms-linear-gradient(top, rgba(211,0,0,1) 0%,rgba(255,150,150,1) 100%); /* IE10 preview */
background: linear-gradient(to bottom, rgba(211,0,0,1) 0%,rgba(255,150,150,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d30000', endColorstr='#ff9696',GradientType=0 ); /* IE6-8 */
		padding: 8px 10px;
	}

	#jd_results, #ss_results{
		font-size:10px;
		float:left;
		width:315px;
	}
	
	#ncl_results, #essential_results{
		font-size:10px;
		margin-left:10px;
		padding-left:10px;
		float:right;
		width:315px;
		border-left:1px solid #860093;
	}
	
	#competition_form{
		padding:0 125px;
	}
	
	.labeled_at{
		font-size:10px;
	}
	
	.outies, .final_price{
		float:right;
		margin-right:5%;
		font-weight:bold;
	}
	
	.final_price{
		text-align:right;
		font-size:13px;
		color:#000;
	}
	
	.seperating_line{
		border-bottom:solid 1px #460000;
	}
	
	#horizontal_line{
		border-bottom:solid 2px #000;
	}
	
	input {
    width: 85px;
    /*background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' version='1.1' height='16px' width='85px'><text x='2' y='13' fill='gray' font-size='12' font-family='arial'>$</text></svg>");
	background-repeat:no-repeat;*/
    /*padding-left: 12px;*/
}
	
	.clear_float{
		clear:both;
	}
	
	
	@media (max-width: 705px){
		
		#jd_results, #ss_results, #ncl_results, #essential_results{
			border:0;
			float:none;
			width:90%;
			margin:auto;
	}
	
	
	
	
</style>


</head>

<body>

<?PHP

/*
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 
*/	
	$isSubmitted = false;
	$isValid = true;
	$squareFootError ="";
	
    // Average square feet covered by one gallon of RTU stripper
	$avgCover = 100;
	// Dilution Ratios (a ratio of 1:4 will get a value of 5)
	$jdDilution = 5;
	$nclDilution = 5;
	$ssDilution = 5;
	$essentialDilution = 20;
	
	// Suggested cost per gallon for each stripper
	$jdCostPG = 25.63;
	$nclCostPG = 18.85;
	$ssCostPG = 15;
	$essentialCostPG = 48;
	
		// if the submit button was clicked, the following if statement will be executed
		if(isset($_POST['submit'])){
			
			$isSubmitted = true;
			
			$squareFoot = $_POST['squareFoot'];
			$squareFoot = filter_var($squareFoot, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
			$squareFoot = filter_var($squareFoot, FILTER_SANITIZE_SPECIAL_CHARS);
			// Validation
			if(!is_numeric($squareFoot)){
				$isValid = false;
				$squareFootError = "Please enter a numeric value";
			}
			
			else if(empty($squareFoot)){
				$isValid = false;
				$squareFootError = "Please enter a numeric value";
			}
			
			else if($squareFoot < 200 || $squareFoot > 500000){
				$isValid = false;
				$squareFootError = "Please enter a number between 200 and 500,000";	
			}
			
			else{
			
			// Calculate gallons of Ready to Use needed
			$galRTUneeded = $squareFoot / $avgCover;

			
			// Calculate Gallons of Concentrate Needed
			$jdGalConNeeded = $galRTUneeded / $jdDilution;
			$nclGalConNeeded = $galRTUneeded / $nclDilution;
			$ssGalConNeeded = $galRTUneeded / $ssDilution;
			$essentialGalConNeeded = $galRTUneeded / $essentialDilution;

			
			// Calculate Total Cost
			$jdTotal = $jdGalConNeeded * $jdCostPG;
			$nclTotal = $nclGalConNeeded * $nclCostPG;
			$ssTotal = $ssGalConNeeded * $ssCostPG;
			$essentialTotal = $essentialGalConNeeded * $essentialCostPG;
			
			
			// Format Square Footage 
			$squareFootFormat = number_format($squareFoot, 0, '', ',');
			
			// Format RTU GALLONS Needed to display with only one decimal place
			$galRTUformat = number_format($galRTUneeded, 1, '.', ',');
			
			// Format GALLONS of CONCENTRATE totals so they can be shown with a max of 1 decimal place
			$jdGalConFormat = number_format($jdGalConNeeded, 1, '.', ',');
			$nclGalConFormat = number_format($nclGalConNeeded, 1, '.', ',');
			$ssGalConFormat = number_format($ssGalConNeeded, 1, '.', ',');
			$essentialGalConFormat = number_format($essentialGalConNeeded, 1, '.', ',');
			
			
			// Format DOLLAR totals so they can be shown as dollars and cents
			$jdTotalFormat = number_format($jdTotal, 2, '.', ',');
			$nclTotalFormat = number_format($nclTotal, 2, '.', ',');
			$ssTotalFormat = number_format($ssTotal, 2, '.', ',');
			$essentialTotalFormat = number_format($essentialTotal, 2, '.', ',');
			
			
			?>
            <div id="competition_results">
            	<h2>Floor Stripper Cost Comparison</h2> 
            	<div id="jd_results">
                	<h4>Johnson-Diversey Pro Strip<sup>&reg;</sup></h4>
                    <p>1. Square Footage being stripped <span class="outies"><?PHP echo  $squareFootFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>2. Average ft<sup>2</sup> one gallon of RTU stripper covers <span class="outies"><?PHP echo $avgCover; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>3. Number of RTU gallons needed for <?PHP echo $squareFootFormat; ?> ft<sup>2</sup><span class="outies"><?PHP echo $galRTUformat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>4. Dilution ratio of stripper <span class="labeled_at">Labeled at 1:4 - 1:10</span><span class="outies">1:4</span></p>
                    <div class="seperating_line"></div>
                    <p>5. Gallons of concentrate needed <span class="outies"><?PHP echo $jdGalConFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>6. Suggested cost per gallon of concentrate <span class="outies">$<?PHP echo $jdCostPG; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>7. Total Cost <span class="final_price"><?PHP echo "$" . $jdTotalFormat; ?></span></p>
                    
                </div><!--jd_results-->
				<!--<div class="clear_float"></div>-->
                
                
                <div id="ncl_results">
                	<h4>NCL Bare Bones<sup>&trade;</sup></h4>
                    <p>1. Square Footage being stripped <span class="outies"><?PHP echo $squareFootFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>2. Average ft<sup>2</sup> one gallon of RTU stripper covers <span class="outies"><?PHP echo $avgCover; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>3. Number of RTU gallons needed for <?PHP echo $squareFootFormat; ?> ft<sup>2</sup><span class="outies"><?PHP echo $galRTUformat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>4. Dilution ratio of stripper <span class="labeled_at">Labeled at 1:2 - 1:16</span><span class="outies">1:4</span></p>
                    <div class="seperating_line"></div>
                    <p>5. Gallons of concentrate needed <span class="outies"><?PHP echo $nclGalConFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>6. Suggested cost per gallon of concentrate <span class="outies">$<?PHP echo $nclCostPG; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>7. Total Cost <span class="final_price"><?PHP echo "$" . $nclTotalFormat; ?></span></p>
                </div><!--ncl_results-->
                
				<div class="clear_float"></div>
                <div id="horizontal_line"></div>
                
                    <div id="ss_results">
                	<h4>Spartan Shineline Emulsifier Plus<sup>&reg;</sup></h4>
                    <p>1. Square Footage being stripped <span class="outies"><?PHP echo $squareFootFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>2. Average ft<sup>2</sup> one gallon of RTU stripper covers <span class="outies"><?PHP echo $avgCover; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>3. Number of RTU gallons needed for <?PHP echo $squareFootFormat; ?> ft<sup>2</sup><span class="outies"><?PHP echo $galRTUformat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>4. Dilution ratio of stripper <span class="labeled_at">Labeled at 1:1 - 1:10</span><span class="outies">1:4</span></p>
                    <div class="seperating_line"></div>
                    <p>5. Gallons of concentrate needed <span class="outies"><?PHP echo $ssGalConFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>6. Suggested cost per gallon of concentrate <span class="outies">$<?PHP echo $ssCostPG; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>7. Total Cost <span class="final_price"><?PHP echo "$" . $ssTotalFormat; ?></span></p>
                </div><!--ss_results-->
                
                
                <div id="essential_results">
                	<h4>Essential Xlerate<sup>&trade;</sup></h4>
                    <p>1. Square Footage being stripped <span class="outies"><?PHP echo $squareFootFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>2. Average ft<sup>2</sup> one gallon of RTU stripper covers <span class="outies"><?PHP echo $avgCover; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>3. Number of RTU gallons needed for <?PHP echo $squareFootFormat; ?> ft<sup>2</sup><span class="outies"><?PHP echo $galRTUformat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>4. Dilution ratio of stripper <span class="outies">1:19</span></p>
                    <div class="seperating_line"></div>
                    <p>5. Gallons of concentrate needed <span class="outies"><?PHP echo $essentialGalConFormat; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>6. Suggested cost per gallon of concentrate <span class="outies">$<?PHP echo $essentialCostPG; ?></span></p>
                    <div class="seperating_line"></div>
                    <p>7. Total Cost <span class="final_price"><?PHP echo "$" . $essentialTotalFormat; ?></span></p>
                </div><!--essential_results-->
                <div class="clear_float"></div>
                </div><!-- competition results -->
               
			<?PHP
		}
		
		}  
		?>
		
		<?php if(!$isSubmitted || !$isValid) { ?>
        <div id="competition_form">
			 <form id="formOne" name="formOne" action="" method="post">
        	<p>
            	<label>Floor Square Footage</label><br>
        		<input type="text" name="squareFoot" value="<?PHP if(isset($_POST['squareFoot'])) echo $squareFoot ?>"><span class="error_message"><?PHP echo " " . $squareFootError; ?></span>
            </p>
                <button type="submit" id="submit" name="submit" value="submit">Submit</button>
        </form>
		</div><!-- competition form -->
        <?PHP
		}
		?>
	
</body>
</html>