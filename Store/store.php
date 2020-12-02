
        <?php
          include_once 'storeHeader.php';
         ?>
<!--Banner-->
          <div class="banner">
            <div class="banContainer">
              <div>
                <h1 class="banTitle">Hello,</h1>
                <h1 class="banTitle">and Welcome to</h1>
                <h1 class="banTitle">My Store</h1>
                <a href="#top" type="button" class="sort">Prints</a>
                <a href="#paint" type="button" class="sort">Paintings</a>
              </div>
            </div>
          </div>
<!-- everything in store -->
         <div class="everything">
<!-- prints container -->
           <div class="tres">
             <section id = "top" class="Tcontainer">
                 <h2 class="section-title">Prints</h2>
                 <div class="shop-items">
                     <div class="shop-item">
                         <span class="shop-item-title">Ocean Vibes</span>
                         <img class="shop-item-image" src="http://laurenbugelli.com/Imgs/homePhoto.jpg">
                         <div class="shop-item-details">
                             <span class="shop-item-price">$19.99</span>
                             <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                         </div>
                     </div>
                     <div class="shop-item">
                         <span class="shop-item-title">Go With The Flow</span>
                         <img class="shop-item-image" src="http://laurenbugelli.com/Imgs/homePhoto.jpg">
                         <div class="shop-item-details">
                             <span class="shop-item-price">$19.99</span>
                             <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                         </div>
                     </div>
                     <div class="shop-item">
                         <span class="shop-item-title">Hard Feelings</span>
                         <img class="shop-item-image" src="http://laurenbugelli.com/Imgs/homePhoto.jpg">
                         <div class="shop-item-details">
                             <span class="shop-item-price">$19.99</span>
                             <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                         </div>
                     </div>
                     <div class="shop-item">
                         <span class="shop-item-title">I Love You</span>
                         <img class="shop-item-image" src="http://laurenbugelli.com/Imgs/homePhoto.jpg">
                         <div class="shop-item-details">
                             <span class="shop-item-price">$19.99</span>
                             <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                         </div>
                     </div>
                 </div>
             </section>
           </div>
<!-- painting container-->
          <div class="tres">
            <section id = "paint" class="Tcontainer">
                <h2 class="section-title">Paintings</h2>
                <div class="shop-items">
                    <div class="shop-item">
                        <span class="shop-item-title">Smash Bros</span>
                        <img class="shop-item-image" src="http://laurenbugelli.com/Imgs/homePhoto.jpg">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$99.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="shop-item">
                        <span class="shop-item-title">Everthing I Touch</span>
                        <img class="shop-item-image" src="http://laurenbugelli.com/Imgs/homePhoto.jpg">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$149.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>
          </div>
<!-- cart container -->
          <div class="tres">
            <section id = "cart" class="Tcontainer">
                <h2 class="section-title">CART</h2>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <div class="cart-items">
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">$0</span>
                </div>
                <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
            </section>
          </div>
         </div>
<!-- end of everything in the store -->
<?php
  include_once 'footer.php';
 ?>
