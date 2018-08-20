<div class="navbar-fixed">
    <nav class="grey darken-4">
        <div class="container">
            <div class="nav-wrapper">
            <a href="/" class="brand-logo"><img src="/images/haitian-apps-logo.png" class="responsive-img" style="width:150px;padding:5px"></a>
            <a href="#" data-target="mobile-menu" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                {{-- {% include partials/menu-links.html %} --}}
                @include('partials.menu-links')
            </ul>
            <ul id="mobile-menu" class="sidenav grey darken-4">
                {{-- {% include partials/menu-links.html %} --}}
                @include('partials.menu-links')
            </ul>
        </div>
        </div>
        </div>
    </nav>
</div>