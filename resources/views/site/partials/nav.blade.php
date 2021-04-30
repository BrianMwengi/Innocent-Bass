    <!-- Nav Start -->

    <div class="classynav">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/music">Music</a></li>
        <li><a href="/gigs">Gigs</a></li>
        <li><a href="/lessons">Lessons</a></li>
        <li><a href="/store">Store</a></li>
        <li><a href="/contact">Contact</a></li>
        </ul>

        <!-- Login/Register & Cart Button -->
        <div class="login-register-cart-button d-flex align-items-center">
    
        
        @guest
          <!-- Login/Register -->
          <div class="login-register-btn mr-50">
              <a href="{{ route('login') }}" id="loginBtn">Login / Register</a>
          </div> 

        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->full_name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest   

             <!-- Cart Button -->
          <div class="cart-btn">
           
          <!--<p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>-->
             
          <!-- Shopping cart button -->
               <!-- Shopping cart button -->
               <li class="nav-item dropdown">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#shoppingCartModal">
                                Cart
                            </button>
                        </li>
                        <!-- Shopping cart modal -->
                        <div class="modal fade" id="shoppingCartModal" tabindex="-1" role="dialog"
                             aria-labelledby="shoppingCartModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="shoppingCartModalTitle">Shopping cart</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(Cart::content() as $cartItem)
                                                <tr>
                                                    <td>
                                                        <!-- Remove product button -->
                                                        <a href="{{ route('remove', [ $cartItem->rowId ]) }}">x</a>
                                                    </td>
                                                    <td>{{ $cartItem->name }}</td>
                                                    <td>{{ $cartItem->qty }}</td>
                                                    <td>{{ $cartItem->price }} USD</td>
                                                    <td>{{ number_format($cartItem->total, 2) }} USD</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <!-- Total price of whole cart -->
                                                <td class="uk-text-bold">Total: {{ number_format(Cart::subtotal(), 2) }} USD</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Clear shopping cart button -->
                                        <a href="{{ route('empty') }}" class="btn btn-danger">Empty</a>
                                        <!-- Proceed to checkout button -->
                                        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
    <!--testing-->
       </div>
       </div>  
      </div>
        <!-- Nav End -->
    </div>
</nav>
         