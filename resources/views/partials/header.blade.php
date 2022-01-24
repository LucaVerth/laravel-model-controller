<div class="container">
    <div class="row">
        <div class="col-12">
            <header class="header d-flex align-items-center justify-content-center">
                <nav class="custom_navbar">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'about-us' ? 'active' : ''}}" href="{{ route('about-us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'pricing' ? 'active' : ''}}" href="{{ route('pricing')}}">Pricings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'faq' ? 'active' : ''}}" href="{{ route('faq')}}">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{ route('contacts')}}">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
</div>
