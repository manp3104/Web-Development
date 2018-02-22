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

  <link rel="stylesheet" type="text/css" href="css/style.css">


  <style type="text/css">

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



<!-- Main content begins -->

  <div class="container-fluid" style="padding-top: 10%;     background-color: #cce4e5;">
    <div id="main-body">
      <div class="row">


      <!-- left column of the main body begins -->

        <div class="col-md-3" style="margin-bottom: 2%;">
          <div id="left-body">
            <div id="header">
              <p>Look for a manufacturer</p>
              <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="manufacturerlist" aria-describedby="mnftext">
                <option selected></option>
                <option value="1">Addidas</option>
                <option value="2">Nike</option>
                <option value="3">Puma</option>
                <option value="4">Reebok</option>
              </select>
              <p class="text-right"><small id="mnftext" class="form-text text-muted">View your desired manufacturer</small></p>
            </div>
            <div id="main-cont">
              <h4><strong>Filter products</strong></h4>
              <div id="classification">

                  <p><a href="#people" data-toggle="collapse" aria-expanded="false" aria-controls="people">Category&nbsp;<span class="caret"></span></a></p>
                  <div class="collapse" id="people">
                    <p><a href="#clothtype" data-toggle="collapse" aria-expanded="false" aria-controls="clothtype"><strong>Men</strong>&nbsp;<span class="caret"></span></a></p>
                    <div class="collapse" id="clothtype">
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">All</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">T-Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Trousers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Jeans</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Lowers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Traditional</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Others</label>
                    </div>
                    <p><a href="#clothtype1" data-toggle="collapse" aria-expanded="false" aria-controls="clothtype1"><strong>Women</strong>&nbsp;<span class="caret"></span></a></p>
                    <div class="collapse" id="clothtype1">
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">All</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">T-Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Trousers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Jeans</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Lowers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Traditional</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Others</label>
                    </div>
                    <p><a href="#clothtype2" data-toggle="collapse" aria-expanded="false" aria-controls="clothtype2"><strong>Kids</strong>&nbsp;<span class="caret"></span></a></p>
                    <div class="collapse" id="clothtype2">
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">All</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">T-Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Trousers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Shirts</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Jeans</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Lowers</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Traditional</label>
                      <label class="checkbox"><input type="checkbox" name="cloth" value="">Others</label>
                    </div>
                  </div>
                  

              </div> 
              <hr>
              <div id="price-select"> 

              <p><a href="#price-range" data-toggle="collapse" aria-expanded="false" aria-controls="price-range">Price&nbsp;<span class="caret"></span></a></p>  
              <div class="collapse" id="price-range">
                <p>Range<i class="fa">&#xf156</i><input type="number" name="start"/> <span style="margin-left: 2%;">to<span> <input type="number" name="end"></p>
              </div>
              </div>
              <hr>
              <div id="brand-select">
                <p><a href="#brand-name" data-toggle="collapse" aria-expanded="false" aria-controls="brand-name">Brand&nbsp;<span class="caret"></span></a></p>  
                <div class="collapse" id="brand-name">
                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="manufacturerlist">
                    <option selected>Select your brand...</option>
                    <option value="1">Addidas</option>
                    <option value="2">Nike</option>
                    <option value="3">Puma</option>
                    <option value="4">Reebok</option>
                  </select>
                </div>
              </div>
              <hr>
              <div id="size-select">
                <p><a href="#size-range" data-toggle="collapse" aria-expanded="false" aria-controls="size-range">Size&nbsp;<span class="caret"></span></a></p>
                <div class="collapse" id="size-range">
                  <label class="checkbox"><input type="checkbox" name="size" value="">S</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">M</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">L</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">XL</label>
                  <label class="checkbox"><input type="checkbox" name="size" value="">XXL</label>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <!-- left column of the main body ends -->



        <!-- right column of the main body begins -->

        <div class="col-md-9">
          <div id="products">

            
                <div id="product-detail">
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

                <div id="product-detail">
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

                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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
                <div id="product-detail">
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

        <!--  right part of the main body ends -->


      </div>	
    </div>
  </div>

<!-- main body ends -->



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
      <a href="#home" class="nav-link">Home</a>
      <a href="#contact" class="nav-link">Contact</a>
      <a href="#about" class="nav-link">About Us</a>
      <a href="#" class="nav-link">Login/Signup</a>
      <a href="#" class="nav-link">Cart</a>
      <a href="#" class="nav-link">MAnufacturer's Portal</a>
    </nav>
  </div>

<!-- footer ends -->

<script type="text/javascript">
  $(".btn-default").click(function() {
    $(this).toggleClass("down");
  })
</script>
  
</body>
</html>