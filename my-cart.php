<?php                     
if(!isset($_COOKIE['loggedin'])) {
header("Location: index.php?login=true");  
}
?>    
<?php include 'include/template_header.php'; ?>
<section class="banner-sm">
    <img src="assets/images/banner-sm.jpg" alt="" class="banner-img">
    <div class="container">
        <div class="banner-title">
         My Cart
        </div>
    </div>
</section>
<section>

<section class="section">
   <div class="container">       
      <div class="row sticky-row">
         <div class="col-12 col-lg-8 sticky-col">
       
         <div class="user-card">
         <div class="user-title">
                  Items
               </div>
            <div class="cart-table">
               <div class="cart-row header-row">
                  <div class="cart-col">
                     #
                  </div>
                  <div class="cart-col">
                     Product Description
                  </div>
                  <div class="cart-col price-col">
                     Price
                  </div>       
                  <div class="cart-col cart-remove-item">
                     Remove
                  </div>               
               </div>
               <div class="cart-row">
                  <div class="cart-col">
                     1
                  </div>
                  <div class="cart-col cart-col-desc">
                     <img src="assets/images/product_01.png" alt="">               
                     <div class="desc">
                        <h3><a href="product-details.php">Financial Model for Immigration - 1</a></h3>
                        <p>Icrest team</p>
                     </div>
                  </div>
                  <div class="cart-col price-col">
                     <p><span class="so-sm">Price : </span>$1,000.00</p>
                  </div>        
                  <div class="cart-col cart-remove-item">
                  <span class="so-sm">Remove : </span><a href="#">&times;</a>
                  </div>              
               </div>
               <div class="cart-row">
                  <div class="cart-col">
                     2
                  </div>
                  <div class="cart-col  cart-col-desc">
                     <img src="assets/images/product_01.png" alt="">               
                     <div class="desc">
                     <h3><a href="product-details.php">Financial Model for Immigration - 2</a></h3>
                        <p>Icrest team</p>
                     </div>
                  </div>
                  <div class="cart-col price-col">
                     <p><span class="so-sm">Price : </span>$1,000.00</p>
                  </div>      
                  <div class="cart-col cart-remove-item">
                  <span class="so-sm">Remove : </span><a href="#">&times;</a>
                  </div>         
               </div>
               <div class="cart-row">
                  <div class="cart-col">
                     3
                  </div>
                  <div class="cart-col  cart-col-desc">
                     <img src="assets/images/product_01.png" alt="">               
                     <div class="desc">
                     <h3><a href="product-details.php">Financial Model for Immigration - 3</a></h3>
                        <p>Icrest team</p>
                     </div>
                  </div>
                  <div class="cart-col price-col">
                     <p><span class="so-sm">Price : </span>$1,000.00</p>
                  </div>        
                  <div class="cart-col cart-remove-item">
                  <span class="so-sm">Remove : </span><a href="#">&times;</a>
                  </div>        
               </div>
            </div>
            <div class="cart-actions">
               <a class="btn-icrest" href="products.php">Add More Items</a>
               <a class="btn-icrest" href="#">Clear Cart</a>
            </div>
         </div>
         </div>    
         <div class="col-12 col-lg-4 sticky-col">
            <div class="cart-total user-card">
               <div class="user-title">
                  Amount
               </div>
               <table>
                  <tr>
                     <td>Subtotal</td>
                     <td>$3,000.00</td>
                  </tr>
                  <tr>
                     <td>Tax</td>
                     <td>$200.00</td>
                  </tr>
                  <tr>
                     <td>Discount</td>
                     <td>- $100.00</td>
                  </tr>
                  <tr>
                     <td>Grand Total</td>
                     <th>$3,100.00</th>
                  </tr>
               </table>
               <div class="cart-checkout">
                  <a href="#" class="btn-icrest filled">Checkout</a>
               </div>
            </div>
         </div>   
      </div>
   </div>
</section>
<?php include 'include/template_footer.php'; ?>

