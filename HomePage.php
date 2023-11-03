<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        
        <link rel="stylesheet" href="HomePage.css">
    </head>

    <body>
        <!--navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 ">
            <div class="container">
            <img src="img/logo1.png" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fas fa-bars"></i></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ShopPage.html">Shop</a>
                  </li>
                 
                  <li class="nav-item">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-shopping-bag"></i>
                  </li>
                        
            </div>
          </nav>

          <section id="home">
            <div class="container">
                <h5>NEW ARRIVALS</h5>
                <h1><span>Best Price</span> This Year</h1>
                <p>Shop best Products<br>with best Price.</p>
                <button type="button" onclick="location.href='ShopPage.html'">Shop now</button>
            </div>
            </section>

          <!-- <section id="brand" class="container">
            <div class="row m-0 py-5">
                <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/1.png" alt="">
                <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/2.png" alt="">
                <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/3.png" alt="">
                <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/4.png" alt="">
                <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/5.png" alt="">
                <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/6.png" alt="">
            </div>
          </section>

          <section id="new" class="w-100">
            <div class="row p-0 m-0">
                <div class="one col-lg-4 col-md-12 col-12 p-0">
                    <img class="img-fluid" src="img/new/1.jpg" alt="">
                    <div class="details">
                    <h2>Extream Rare Sneakers</h2>
                    <button class="text-uppercase">Shop now</button>
                </div>
                </div>
                <div class="one col-lg-4 col-md-12 col-12 p-0">
                    <img class="img-fluid" src="img/new/2.jpg" alt="">
                    <div class="details">
                    <h2>Awesome Blank Outfit</h2>
                    <button class="text-uppercase">Shop now</button>
                </div>
                </div>
                <div class="one col-lg-4 col-md-12 col-12 p-0">
                    <img class="img-fluid" src="img/new/3.jpg" alt="">
                    <div class="details">
                    <h2>Sportwear Up To 50% Off</h2>
                    <button class="text-uppercase">Shop now</button>
                </div>
                </div>
            </div>
          </section>

          <section id="featured" class="py-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Our Featured</h3>
                <hr class="mx-auto">
                <p>Hear you can check out new products  withfair price on rymo.</p>
            </div>

            <div class="row mx-auto container-fluid">
                <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/featured/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/featured/3.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/featured/4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>

            </div>

          </section>
          <section id="banner" class="my-7 py-7">
            <div class="container">
                <h4>MID SEASON'S SALE</h4>
                <h1>Autum Collection<br>UP TO 20% OFF</h1>
                <button class="text-uppercase">shop Now</button>
            </div>
          </section>
          <section id="clothes" class="my-5 ">
            <div class="container text-center mt-5 py-5">
                <h3>Dresses & Jumpsuits</h3>
                <hr class="mx-auto">
                <p>Hear you can check out new products  withfair price on rymo.</p>
            </div>

            <div class="row mx-auto container-fluid">
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/clothes/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/clothes/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/clothes/3.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/clothes/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>

            </div>

          </section>

          <section id="Watches" class="my-5 ">
            <div class="container text-center mt-5 py-5">
                <h3>Best Watches</h3>
                <hr class="mx-auto">
                <p>Hear you can check out new products  withfair price on rymo.</p>
            </div>

            <div class="row mx-auto container-fluid">
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/watches/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/watches/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/watches/3.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/watches/4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>

            </div>

          </section>

          <section id="shoes" class="my-5 ">
            <div class="container text-center mt-5 py-5">
                <h3>Running shoes</h3>
                <hr class="mx-auto">
                <p>Hear you can check out new products  withfair price on rymo.</p>
            </div>

            <div class="row mx-auto container-fluid">
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/shoes/1.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/shoes/2.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/shoes/3.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center  col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="img/shoes/4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Sport Boots</h5>
                    <h4 class="p-price">$92.00</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>

            </div> -->

          </section>
          <footer class="mt-5 py-5">
            <div class="row container mx-auto pt-5">
                <div class="footer-one col-lg-3 col-md-6 col-12">
                
                <img src="img/logo2.png" alt="#">
                <p>fringilla urna porttitor rhoncus dolor purus luctus venenatis lectus magna fringilla diam maecenas ultricies mi eget mauris</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
            <h5 class="pb-2">Featured  </h5>
            <ul class="text-uppercase list-unstyled">
                <li><a href="#">men</a></li>
                <li><a href="#">women</a></li>
                <li><a href="#">boys</a></li>
                <li><a href="#">girls</a></li>
                <li><a href="#">new arrival</a></li>
                <li><a href="#">shoes</a></li>
                <li><a href="#">cloths</a></li>
                
            
            </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Contact us </h5>
            
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>123 street name,city</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(123) 345-345777</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>mail@example.com</p>
                </div>
            </div>
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <h5 class="pb-2">Instagram</h5>
                    <div class="row">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/1.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/2.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/3.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/4.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/5.jpg" alt="">
                </div>
                
                </div>
            </div>
            <div class="copyright mt-5">
                <div class="row container mx-auto">
                    <div class="col-lg-3 col-md-6 col-12">
                        <img src="img/payment.png" alt="">

                    </div>
                    <div class="="col-lg-3 col-md-6 col-12>
                        <p>rymo eCommerce @ 2023. All Rights Reserved  </p>
                    </div>
                    <div class="="col-lg-3 col-md-6 col-12 text-nowrap>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>

</html>