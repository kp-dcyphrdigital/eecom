<!-- Header -->
  <header class="header-container">
    <div class="container top-container hidden-xs">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <div class="brand-logo">
            <a href="/"><img src="http://syginteractive.com/web/skaters/images/skaters-network-logo.png" alt="Skaters Network"></a>
          </div>
        </div>
        <div class="col-sm-8 col-md-9">
          <div class="brand-info">
            <div class="top">
              <div class="row">
                <div class="col-md-5">
                  <div class="free-shipping">
                    Free shipping &amp; free returns on all orders.
                  </div>
                </div>
                <div class="col-md-7">
                    <ul>
                      <li>
                        <a href="#">Customer Care</a>
                      </li>
                      <li>
                        <a href="#">Returns Center</a>
                      </li>
                      <li>
                        <a href="#">Find a Store</a>
                      </li>
                      <li>
                        <a href="#">My Account</a>
                      </li>
                    </ul>
                </div>
              </div>
              </div>
            <div class="bottom">
              <ul>
                <li>
                  <a href="#" class="search-header--popup"><i class="fas fa-search"></i></a>
                </li>
                <li>
                  <a href="/payment"><i class="fas fa-shopping-cart"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cd-main-header">
      <div class="header-mob--info visible-xs">
        <p>australias #1 ice &amp; inline hockey store</p>
      </div>
      <div class="cd-header-buttons clearfix visible-xs">
        <div class="mob-menu">
          &nbsp;<a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a>
        </div>
          <div class="mob-logo">
            <img src="http://syginteractive.com/web/skaters/images/skaters-network-logo.png" width="240" alt="Skaters Network">
          </div>
          <div class="mob-cart">
            <i class="fas fa-shopping-cart"></i>
          </div>
      </div>
      <nav class="cd-nav">
        <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">

          @foreach($navtree as $level1)
          <li class="top_level category @if($level1->children->count()) has-children @endif">
            <a href="/{{ $level1->slug }}">{{ $level1->name }}</a>
            @if( $level1->children->count() )
            <ul class="cd-secondary-nav is-hidden">
              <li class="go-back"><a href="#">Main Menu</a></li>
              <li class="see-all"><a href="/{{ $level1->slug }}">Shop All {{ $level1->name }}</a></li>
              @foreach($level1->children as $level2)
              <li @if( $level2->children->count() ) class="has-children" @endif>
                <a href="/{{ $level2->slug }}">{{ $level2->name }}</a>
                @if( $level2->children->count() )
                <ul class="is-hidden">
                  <li class="go-back"><a href="#">Back</a></li>
                  <li class="see-all"><a href="#">All {{ $level2->name }}</a></li>
                  @foreach($level2->children as $level3)
                  <li class="sub_item"><a href="/{{ $level3->slug }}">{{ $level3->name }}</a></li>
                  @endforeach
                </ul>
              @endif
              </li>
            @endforeach
            </ul>
          @endif
          </li>
          @endforeach

        </ul>
      </nav>
    </div>
    </header>
    <div class="search-container" id="header-search--popup">
    <div class="search-wrapper">
      <div class="close"><i class="far fa-window-close"></i></div>
      <form role="search" action="#" method="get">
        <input type="search" name="q" id="q" class="o-header__search small valid" placeholder="SEARCH PRODUCTS" itemprop="query-input" autocomplete="off">
        <button type="submit"><i class="fas fa-arrow-right"></i></button>
      </form>
    </div>
  </div>
  <section class="cd-main-content clearfix">
    <div class="cd-overlay"></div>
<!-- /Header -->
