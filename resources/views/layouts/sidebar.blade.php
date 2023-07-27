



<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <li class="nav-items">
                    <a class="nav-link {{ (Request::is('userList') || Request::is('userList')) ? 'active' : null }}" href="{{ route('userList') }}">
                      <i class="fas fa-users-cog"></i>   
                       {{-- {!! trans('titles.laravelroles') !!}  --}}
                            User List
                  </a>
                         
                </li>
                
                <li class="nav-items">
                    <a class="nav-link {{ (Request::is('priceCardList') || Request::is('priceCardList')) ? 'active' : null }}" href="{{ route('priceCardList') }}">
                      <i class="fas fa-users-cog"></i>   
                       {{-- {!! trans('titles.laravelroles') !!}  --}}
                            Pricing Card List
                  </a>
                         
                </li>
               
                
               
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>

