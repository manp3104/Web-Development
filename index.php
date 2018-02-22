<!DOCTYPE html>
<html lang="en-us">
<head>

  <title>Kendo</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">


  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">


  <style type="text/css">
  	
  	#main-page > img {
  		max-width: 100%;
  		width: 100%;
  		height: 550px;
  		margin-bottom: 80px;
  	}
  	#main-page {
  		padding-right: 0;
  		padding-left: 0;
  		margin-top: 94px;
      overflow: hidden;
  		background-color: mintcream;
  	}

    .forshirts > div > img {
      margin-top: 20px;
      margin-left: 20px; 
      width: 100%;
      height: 323px;
      box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
    }
    .forjeans > div > img {
      margin-top: 20px;
      margin-left: -20px; 
      width: 100%;
      height: 323px;
      box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
    }
    .fortrousers > div > img {
      margin-top: 20px;
      margin-left: 20px; 
      width: 100%;
      height: 323px;
      box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
    }

    #jeans {
      padding-left: 46px;
    }

  	#product {
		background-color: white;
		border-radius: 1%;
		max-width: 290px;
    width: 270px;
		/*float: left;*/
		width: 100%;
		margin: 20px 0; 
    box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
	}
	#product #image {
		background-color: #447cbf;
		height: 200px;
		border-top-left-radius: 1%;
		border-top-right-radius: 1%;
	}
	#product #image-detail {
		padding: 3% 5% 2% 5%;
	}
	#product #image-detail h4 {
		color: #447cbf;
		font-size: 16px;
	}
    #product #image-detail > div {
  display: -webkit-inline-box;
  margin: 10px auto;
}
#product #image-detail > div > span {
  margin-right: 80px;
}




	#product #image-detail > p > input {
		width: 5%;
	    height: 13px;
	   /* background-color: black; */
	    border: 0;
	}
	#product #image-detail > p > #size {
		margin-right: 32%;
		font-size: 13px;
	}
	#product #image-detail > #price-detail #manuf {
		color: #f99c1c;
	}
	#product #image-detail > #price-detail #price {
		margin-left: 46%;
		color: #447cbf;
	}


	#product-name {
		background-color: white;
		border-radius: 1%;
		max-width: 290px;
    width: 255px;
		float: left;
		margin: 80px 30px; 
    box-shadow: 2px 2px 9px rgba(0, 0, 0, 0.74);
	}
	#product-name #image {
		background-color: #447cbf;
		height: 200px;
		border-top-left-radius: 1%;
		border-top-right-radius: 1%;
	}
	#product-name #image-detail {
		padding: 3% 5% 2% 5%;
	}
	#product-name #image-detail h4 {
		color: #447cbf;
		font-size: 16px;
    text-align: -webkit-left;
	}
  #product-name #image-detail > div {
    display: -webkit-inline-box;
    margin: 10px auto;
  }
  #product-name #image-detail > div > span {
    margin-right: 73px;
  }
	#product-name #image-detail > #price-detail #price {
		margin-left: 46%;
		color: #447cbf;
	}
  #product-name #image-detail > #price-detail #manuf {
    color: #f99c1c;
  }
	#featured-products {
		margin: 7% auto 5% auto;
	}
  #featured-products #product-images {
    margin: auto 121px;
  }
  </style>

</head>
<body>

<!-- header begins -->

  <nav class="navbar navbar-toggleable-md navbar-light navbar-fixed-top bg-faded">
    <div class="container-fluid" id="top-head">
    <div class="top-bar">
      <div class="logo-image">
        <a href="#">
         <!-- <img src="images/KendoEdit1.jpg"> -->
         <img src="images/KendoEdit1.jpg"
            data-src-600px = "images/KendoEdit1-600px.jpg"
            data-src-800px = "images/KendoEdit1-800px.jpg"
            alt="">
        </a>  
      </div>
    <div class="left-top">  
      <div class="search-bar">
        <form class="form-inline my-2 my-lg-0" method="get" action="search_results.php">
          <div class="input-group">
            <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search for anything" aria-describedby="search-addon">
            <span class="input-group-addon" id="search-addon"><i class="fa fa-search" aria-hidden="true" style="color: #a99191;"></i></span>
          </div> 
        </form>
      </div>
      <div class="cart-btn btn-group" data-toggle="buttons">
        <label class="btn btn-default active">
          <input type="checkbox" checked autocomplete="off" name=""><i class="fa fa-shopping-cart"></i>&nbsp;Cart
        </label>
       <!-- <button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart"></i>&nbsp;Cart</button> -->
        <label class="btn btn-default">
          <input type="checkbox" autocomplete="off" name="noOfItems">0
        </label>
      </div>
    </div>  
    </div>  

    <!--
      <div class="row">
        <div class="col-xs-12">
          <div class="col-md-5">
            <div class="logo-image">
              <img src="images/KendoEdit1.jpg"> 
            </div>
          </div>
          <div class="col-md-7">
            <div class="row" style="margin-top: 5%;">
            	<div class="col-md-3">
        			  <div id="cart-btn">
        			    <button class="btn btn-default" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart &nbsp;<span class="badge" style="border-radius: 2px;">8</span></button>
        			  </div>
            	</div>
            	<div class="col-md-9">
            	  <form class="form-inline" method="get" action="search.php">
    				      <div id="search-bar" class="input-group" style="width: 90%;">
    				        <input type="text" class="form-control" size="60" name="search" placeholder="Search for anything" aria-describedby="search-btn" required>
                    <span class="input-group-addon glyphicon glyphicon-search" id="search-btn"></span> 
    				      </div>	
  			        </form>	
            	</div>
            </div>		
          </div>
        </div>  
      </div>	   
      -->

      <div class="navbar-header">
        <!--<button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      </div>
      <div class="collapse navbar-collapse" id="nav-menu">
        <ul class="nav navbar-nav navbar-right"> 
          <li class="nav-item">
            <a href="index.php" class="btn btn-default">Home</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="btn btn-default">Contact</a>
          </li>	
          <li class="nav-item">
            <a href="about" class="btn btn-default">About Us</a>
          </li>
          <li class="nav-item">
            <div class="popover-markup">
              <a href="#" class="trigger btn btn-default" data-placement="bottom">Login</a>
              <form>
                <div class="head hide">Login to your account</div>
                <div class="content hide">
                  <div class="form-group">
                    <label id="uname" for="username">Email ID</label>
                    <input type="email" class="form-control" id="username" name="emailid" placeholder="Email id">
                  </div>
                  <div class="form-group">
                    <label id="pwd" for="pswd">Password</label>
                    <input type="password" class="form-control" id="pswd" placeholder="Password" name="pswd">
                  </div>
                  <p>
                    <a>Forgot Password?</a>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </p>
                </div>
              </form>  
            </div> 
          </li>
          <li class="nav-item" style="margin-right: 0;">
            <div class="popover-markup">
              <a href="#" class="trigger btn btn-default" data-placement="bottom">Signup</a>
              <form>
                <div class="head hide" style="margin-bottom: 2%;">
                  <p>Make retailing effortless</p>
                  <p style="margin-bottom: -3%;">Sign up now</p>
                </div>
                <div class="content hide">
                  <div class="form-group">
                    <label for="fullname">Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter full name"> 
                  </div>
                  <div class="form-group">
                    <label for="emailid">Email ID</label>
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email id">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="number" class="form-control" id="contact" name="contact" placeholder="Phone number">
                  </div>
                  <div class="form-group">
                    <label for="pswd">Password</label>
                    <input type="password" class="form-control" id="pswd" name="pswd" placeholder="*****">
                  </div>
                  <fieldset class="form-group">
                    <p>User type:</p>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="usertype" id="retailer" value="Retailer" checked>
                        Retailer
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="usertype" id="seller" value="Seller">Seller
                      </label>
                    </div>
                  </fieldset>
                  <p>
                    <button type="submit" class="btn btn-primary" id="signup" name="signup" aria-describedby="btntext">Sign Up</button>
                    <small id="btntext" class="form-text text-muted" style="margin-left: 10%;">It's free!</small>
                  </p>  
                </div>
              </form>
            </div>  
          </li>

            <script type="text/javascript">
              $(document).ready(function(){
                $('.popover-markup>.trigger').popover({
                  html: true,
                  title: function() {
                    return $(this).parent().find('.head').html();
                  },
                  content: function() {
                    return $(this).parent().find('.content').html();
                  }
                });
              });
            </script>

        </ul>
      </div>
     
    </div>
  </nav>

<!-- header ends -->


<div class="container-fluid" id="main-page">

<!-- front image begins -->
  <img src="images/Kendo.jpg"> 
<!-- front image ends -->


<!-- row no. 1 for shirts begins -->

  <div class="row forshirts" style="margin-bottom: 80px;">
    <div class="col-md-4" style="padding-right: 5px;">
      <img src="images/KendoEdit.jpg">	
    </div>
    <div class="col-md-8">
      <div id="shirts" class="owl-carousel">

      	<div class="item" id="product">
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>
      	</div>

      	<div class="item" id="product">		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>
      </div>

    </div>
  </div>
<!-- row no. 1 for shirts ends -->

<!-- row no. 2 for jeans begins -->
  <div class="row forjeans" style="margin-bottom: 80px;">
    
    <div class="col-md-8">
      <div id="jeans" class="owl-carousel">

      	<div class="item" id="product">
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>
      	</div>

      	<div class="item" id="product">		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>
      </div>

    </div>

    <div class="col-md-4" style="padding-left: 5px;">
      <img src="images/KendoEdit.jpg">	
    </div>
  </div>
 <!-- row no. 2 for jeans ends --> 


 <!-- row no. 3 for trousers begins -->
  <div class="row fortrousers" style="margin-bottom: 80px;">
    <div class="col-md-4" style="padding-right: 5px;">
      <img src="images/KendoEdit.jpg">	
    </div>
    <div class="col-md-8">
      <div id="trousers" class="owl-carousel">

      	<div class="item" id="product">
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>
      	</div>

      	<div class="item" id="product">		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>

      	<div class="item" id="product">     		
	      	  <div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
      	</div>
      </div>
   


    </div>
  </div>


<!-- featured products begin -->
  <div class="text-center" id="featured-products">
  	<h3><strong style="font-size: 35px;">Featured Products</strong></h3>
  	<div id="product-images">
  		<div id="product-name">
  			<div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
  		</div>
  		<div id="product-name">
  			<div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
  		</div>
  		<div id="product-name">
  			<div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
  		</div>
  		<div id="product-name">
  			<div id="image">

	      	  </div>
	      	  <div id="image-detail">
	      	  	<h4>About the product</h4>
	      	  	<div>
                <span id="size">S,M,L,XL,XXL</span>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
                <div class="foo"></div>
              </div>
	      	  	<p id="price-detail">
	      	  	  <span id="manuf">Manufacturer</span>
	      	  	  <span id="price">Price</span>	
	      	  	</p>
	      	  </div>	
  		</div>
  	</div>
  </div>
<!-- featured products end -->

</div>


<!-- footer begins -->

  <div class="footer">
    <p class="text-center">
      <a class="button social" href="#">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a class="button social" href="#">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"  style="color: #5656d1;"></i>
          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a class="button social" href="#">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a class="button social" href="#">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x" style="color: #e53e3e;"></i>
          <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </p>
    <nav class="nav text-center">
      <a href="index.html" class="nav-link">Home</a>
      <a href="#" class="nav-link">Contact</a>
      <a href="#" class="nav-link">About Us</a>
      <a href="#" class="nav-link">Cart</a>
      <a href="#" class="nav-link">MAnufacturer's Portal</a>
    </nav>
  </div>

<!-- footer ends -->


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/owl.autoplay.js"></script>
      	
<script type="text/javascript">
      		$(document).ready(function() {
      			var owl = $('.owl-carousel');
      			owl.owlCarousel({
      				//nav: true,
      				//navText: ["", <img src="images/images.png"];
      				//navigation: true;
      				//items: 4;
      				//loop: true;
      				//margin: 10;
      				//autoplay: true;
      				//autoplayTimeout: 1000;
      				//autoplayHoverPause: true;
      		    });
      	    });	
        </script>

<script type="text/javascript">
  $(".btn-default").click(function() {
    $(this).toggleClass("down");
  })
</script>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.jeans').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000;
		});
	});
</script>

</body>
</html>