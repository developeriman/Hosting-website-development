@php
$contact = @getContent('contact_us.content', true);
$footer = @getContent('footer.content', true);
$policyPages = @getContent('policy_pages.element', orderById:true);
@endphp 
<!DOCTYPE html><html lang="{{ config('app.locale') }}"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="theme-color" content="#0060fe">
  <meta name="language" content="{{ config('app.locale') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/bundle.css">
  <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('assets/frontend/') }}/css/index.css">
  <title>{{ $general->siteName(__($pageTitle)) }}</title>
  @include('partials.seo')
</head>
<body class="dark-theme">

  <!-- :: PRELOADER :: -->
  <div class="preloader" id="preloader"></div>
  <!-- :: THEME-NAVBAR :: -->
  <nav class="theme-navbar" id="theme-navbar">
    <div class="container-fluid">
      <!-- nav-top -->
      <div class="nav-top d-flex align-items-center" style="padding:0px;">
        <!-- menu-icon -->
        <div class="menu-icon" id="open-links-btn">
          <img src="{{ asset('assets/frontend/') }}/images/hamburger-light.png" class="menu-icon img-fluid for-light-theme" alt="x">
          <img src="{{ asset('assets/frontend/') }}/images/hamburger-dark.png" class="menu-icon img-fluid for-dark-theme" alt="x">
        </div>
        <!-- brand -->
        <a href="/" class="brand d-flex align-items-center">
          <img style="height:90px;" src="{{ asset('assets/frontend/') }}/images/white_4x.png" class="for-dark-theme img-fluid" alt="HostX">
          <img style="height:90px;" src="{{ asset('assets/frontend/') }}/images/color_4x.png" class="for-light-theme img-fluid" alt="HostX">
        </a>
        <!-- options -->
        <div class="options d-md-flex d-none align-items-center justify-content-end ml-auto">
          <!-- c-link -->
          <a href="{{route('user.register')}}" class="c-link">
            <img src="{{ asset('assets/frontend/') }}/images/shared-light.png" class="icon for-light-theme" alt="icon">
            <img src="{{ asset('assets/frontend/') }}/images/shared-dark.png" class="icon for-dark-theme" alt="icon">
            <span class="text">Shared Control Panel</span>
          </a>
          <!-- c-link -->
          <a href="{{route('user.register')}}" class="c-link">
            <img src="{{ asset('assets/frontend/') }}/images/vps-light.png" class="icon for-light-theme" alt="icon">
            <img src="{{ asset('assets/frontend/') }}/images/vps-dark.png" class="icon for-dark-theme" alt="icon">
            <span class="text">VPS Control Panel</span>
          </a>
          <!-- buttons -->
          <div class="buttons">
            <a href="{{route('user.register')}}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Free Trial</a>
            <a href="{{route('user.login')}}" class="btn btn-outline-dark btn-sm btn-rounded shadow-off text-uppercase">Login</a>
          </div>
        </div>
        <!-- second-options -->
        <div class="second-options d-md-none d-flex align-content-center justify-content-end ml-auto">
          <!-- o-link -->
          <a href="\3" class="o-link">
            <img src="{{ asset('assets/frontend/') }}/images/question-light.png" class="icon img-fluid for-light-theme" alt="Icon">
            <img src="{{ asset('assets/frontend/') }}/images/question-dark.png" class="icon img-fluid for-dark-theme" alt="Icon">
          </a>
          <!-- o-link -->
          <div class="o-link user-link" id="user-menu-btn">
            <img src="{{ asset('assets/frontend/') }}/images/user-light.png" class="icon img-fluid for-light-theme" alt="Icon">
            <img src="{{ asset('assets/frontend/') }}/images/user-dark.png" class="icon img-fluid for-dark-theme" alt="Icon">
            <!-- user-dropdown-menu -->
            <ul class="user-dropdown-menu list-unstyled" id="user-dropdown-menu">
              <!-- uddm-link-parent -->
              <li class="uddm-link-parent">
                <div class="title-2">Registered Users</div>
                <p class="para-2">Have an account? Sign in now.</p>
                <a href="{{route('user.login')}}" class="uddm-link">Sign In</a>
              </li>
              <!-- uddm-link-parent -->
              <li class="uddm-link-parent">
                <div class="title-2">New Customer</div>
                <p class="para-2">New to HostX? Create an account to get started today.</p>
                <a href="{{route('user.register')}}" class="uddm-link">Create an Account</a>
              </li>
            </ul>
          </div>
          <!-- o-link -->
          <a href="#" class="o-link">
            <img src="{{ asset('assets/frontend/') }}/images/shopping-basket-light.png" class="icon img-fluid for-light-theme" alt="x">
            <img src="{{ asset('assets/frontend/') }}/images/shopping-basket-dark.png" class="icon img-fluid for-dark-theme" alt="x">
          </a>
        </div>
      </div>
      <!-- nav-bottom -->
      <div class="nav-bottom d-flex align-items-center justify-content-between">
        <!-- info -->
        <div class="info d-flex align-items-center">
          <!-- item -->
          <a href="tel:0000" class="item">
            <img src="{{ asset('assets/frontend/') }}/images/phone-call-light.png" class="img-fluid for-light-theme" alt="Icon">
            <img src="{{ asset('assets/frontend/') }}/images/phone-call-dark.png" class="img-fluid for-dark-theme" alt="Icon">
            <span class="text">{{ @$contact->data_values->phone }}</span>
          </a>
        </div>
        <!-- links -->
        <div class="links d-xl-flex align-items-center ml-auto" id="theme-navbar-links">
          <!-- close-links-btn -->
          <div class="close-links-btn" id="close-links-btn">
            <img src="{{ asset('assets/frontend/') }}/images/cross-dark.png" class="img-fluid for-dark-theme" alt="x">
            <img src="{{ asset('assets/frontend/') }}/images/cross-light.png" class="img-fluid for-light-theme" alt="x">
          </div>
          <!-- link -->
          <div class="link grad1">
            <a href="{{route('home')}}">WHMCS</a>
          </div>
          <!-- link -->
          <div class="link has-dropdown-menu">
            <a href="#">Domain Names</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Domain Names</li>
              <!-- dm-link -->
              <li><a href="{{route('domain')}}" class="dm-link">Search for Domain Names</a></li>
              <!-- dm-link -->
              <li><a href="{{route('user.register')}}" class="dm-link">Transfer Domain Names</a></li>
              <!-- dm-link -->
              <li><a href="{{route('register.domain')}}" class="dm-link">Register a New Domain</a></li>
              <!-- dm-link -->
              <li><a href="#" class="dm-link st-soon">Generate Domain Names</a></li>
              <!-- dm-link -->
              <li><a href="#" class="dm-link st-soon">WHOIS</a></li>
            </ul>
          </div>
          <!-- link -->
          <div class="link has-dropdown-menu">
            <a href="#">Website &amp; Hosting</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Hosting</li>
              <!-- dm-link -->
              <li><a href="{{route('user.register')}}" class="dm-link">VPS Hosting Servers</a></li>
              <!-- dm-link -->
              <li><a href="{{route('user.register')}}" class="dm-link">Shared Hosting Servers</a></li>
              <!-- dm-link -->
              <li><a href="{{route('user.register')}}" class="dm-link">Dedicated Hosting Servers</a></li>
              <!-- dm-link -->
              <li><a href="{{route('user.register')}}" class="dm-link">Game Servers</a></li>
              <!-- group-title -->
              <li class="group-title">Web Security</li>
              <!-- dm-link -->
              <li><a href="{{route('user.register')}}" class="dm-link st-new">SSL Certificate</a></li>
              <li><a href="{{route('user.register')}}" class="dm-link st-new">Website Security</a></li>
            </ul>
          </div>
          <!-- link -->
          <div class="link has-dropdown-menu">
            <a href="#">Support</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Help &amp; Support</li>
              <!-- dm-link -->
              <li><a href="{{route('contact')}}" class="dm-link">Contact Us</a></li>
              <li><a href="{{url('faq')}}" class="dm-link">Faq</a></li>
            </ul>
          </div>
          <!-- link -->
          <div class="link">
            <a href="{{route('blogs')}}">Announcement</a>
          </div>
          <!-- indicator -->
          <span class="indicator"></span>
        </div>
      </div>
    </div>
  </nav>

<!-- OPTIONS -->
<div class="options">
  <!-- theme-settings-btn -->
  <button type="button" class="theme-settings-btn" id="theme-settings-btn" data-tooltip="Theme Settings">
    <img src="{{ asset('assets/frontend/') }}/images/setting.png" class="img-fluid" alt="Icon">
  </button>
  <!-- theme-settings -->
  <div class="theme-settings" id="theme-settings">
    <!-- title-1 -->
    <div class="title-1">Website setup</div>
    <!-- close-btn -->
    <div class="close-btn" id="theme-settings-close-btn">
      <img src="{{ asset('assets/frontend/') }}/images/delete.png" class="img-fluid" alt="Icon">
    </div>
    <!-- section -->
    <div class="section">
      <!-- section-title -->
      <div class="section-title">Themes</div>
      <!-- themes -->
      <div class="themes">
        <!-- theme-btn -->
        <div class="theme-btn light-theme" id="light-theme-btn">
          <div class="color"></div>
          <span class="name">Light</span>
        </div>
        <!-- theme-btn -->
        <div class="theme-btn dark-theme active-theme" id="dark-theme-btn">
          <div class="color"></div>
          <span class="name">Dark</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- :: HEADER :: -->
<header class="main-header">
  <div class="container">
    <!-- row -->
    <div class="row align-items-center">

      <!-- col -->
      <div class="col-xl-7 text-xl-left text-center">
        <!-- title-1 & para-1 -->
        <h1 class="title-1 text-uppercase mb-2 mx-xl-0 mx-auto">VPS Hosting<br>POWERFUL AND RELIABLE !</h1>
        <p class="para-1 mb-2 mx-xl-0 mx-auto">Check out the services we offer below. We're determined to provide these services at the best quality - customer satisfaction and convenience are of the utmost importance for us.</p>
        <!-- notify -->
        <div class="notify glassy mb-4">
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/notification.png" class="img-fluid" alt="Bell">
          </div>
          <div class="text">We don't ask for any personal information</div>
        </div>
        <!-- buttons -->
        <div class="buttons">
          <a href="{{route('user.register')}}" class="btn btn-fill-primary shadow-off mr-1 mb-md-0 mb-1">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- :: SECTION I :: -->
<div class="se-i text-lg-left text-center">
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- col -->
      <div class="col-lg-3 col-6 mb-lg-0 mb-2">
        <!-- box -->
        <div class="box">
          <img src="{{ asset('assets/frontend/') }}/images/mail.svg" class="box-icon" alt="Mail">
          <h2 class="box-title mb-0">Anonymous<br>Access</h2>
        </div>
      </div>

      <!-- col -->
      <div class="col-lg-3 col-6 mb-lg-0 mb-2">
        <!-- box -->
        <div class="box">
          <img src="{{ asset('assets/frontend/') }}/images/logout.svg" class="box-icon" alt="Logout">
          <h2 class="box-title mb-0">No Usage<br>Logs</h2>
        </div>
      </div>

      <!-- col -->
      <div class="col-lg-3 col-6">
        <!-- box -->
        <div class="box">
          <img src="{{ asset('assets/frontend/') }}/images/digital.svg" class="box-icon" alt="Digital">
          <h2 class="box-title mb-0">No Usage<br>Limit</h2>
        </div>
      </div>

      <!-- col -->
      <div class="col-lg-3 col-6">
        <!-- box -->
        <div class="box">
          <img src="{{ asset('assets/frontend/') }}/images/wishlist.svg" class="box-icon" alt="Wishlist">
          <h2 class="box-title mb-0">100% White . .<br>Listed</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- :: SECTION II :: -->
<div class="se-ii bg-2">
  <div class="container">
    <!-- row -->
    <div class="row align-items-center">
      <!-- col -->
      <div class="col-xl-4 col-12 text-xl-left text-center mb-xl-0 mb-5">
        <!-- title-1 -->
        <h2 class="title-1 mb-1">
          <span>Popular</span><br class="d-xl-block d-none">
          <span>operating</span><br class="d-xl-block d-none">
          <span>systems.</span><br>
          <span class="primary-color">Your Choice.</span>
        </h2>
        <!-- para-1 -->
        <p class="para-1 mb-0">With ability to upload your own Operating system.</p>
      </div>
      <!-- col -->
      <div class="col-xl-8 col-12">
        <!-- row -->
        <div class="row justify-content-center">
          <!-- col -->
          <div class="col-lg-2 col-md-3 col-6">
            <!-- item -->
            <div class="item text-center">
              <img src="{{ asset('assets/frontend/') }}/images/windows.png" class="img-fluid" alt="Windows">
              <h3 class="text mb-0">Windows</h3>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-2 col-md-3 col-6">
            <!-- item -->
            <div class="item text-center">
              <img src="{{ asset('assets/frontend/') }}/images/android.png" class="img-fluid" alt="Android">
              <h3 class="text mb-0">Android</h3>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-2 col-md-3 col-6">
            <!-- item -->
            <div class="item text-center">
              <img src="{{ asset('assets/frontend/') }}/images/ubuntu.png" class="img-fluid" alt="Ubuntu">
              <h3 class="text mb-0">Ubuntu</h3>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-2 col-md-3 col-6">
            <!-- item -->
            <div class="item text-center">
              <img src="{{ asset('assets/frontend/') }}/images/debian.png" class="img-fluid" alt="Debian">
              <h3 class="text mb-0">Debian</h3>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-2 col-md-3 col-6">
            <!-- item -->
            <div class="item text-center">
              <img src="{{ asset('assets/frontend/') }}/images/centos.png" class="img-fluid" alt="CentOS">
              <h3 class="text mb-0">CentOS</h3>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-2 col-md-3 col-6">
            <!-- item -->
            <div class="item text-center">
              <img src="{{ asset('assets/frontend/') }}/images/open-suse.png" class="img-fluid" alt="Open Suse">
              <h3 class="text mb-0">Open Suse</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- :: SECTION III :: -->
<div class="se-iii py-90">
  <div class="container">
    <!-- se-head -->
    <div class="se-head">
      <h3 class="se-title-1">What about our plans</h3>
      <h4 class="se-title-2">Get More Power With Our Web Hosting Products</h4>
    </div>
    <!-- plans -->
    <div class="plans mb-xl-4 mb-2">
      <!-- row -->
      <div class="row mx-xl-0">
        <!-- col -->
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-2 px-xl-0">
          <!-- plan -->
          <div class="plan">
            <!-- plan-head -->
            <div class="plan-head">
              <!-- plan-name -->
              <h3 class="plan-name">Basic Plan</h3>
              <!-- plan-para -->
              <p class="plan-para">When you need just one site.</p>
            </div>
            <!-- plan-price -->
            <div class="plan-price">
              <!-- price -->
              <h4 class="price">$2.45</h4>
              <!-- price-comment -->
              <p class="price-comment">Normally $9.99 - 12/mo term</p>
            </div>
            <!-- actions -->
            <div class="actions">
              <a href="#" class="btn btn-fill-primary btn-sm shadow-off w-100">Choose Basic</a>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Top Features</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">1 Website <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">50 GB SSD Storage <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Custom Themes <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">24/7 Customer Support <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Website Builder Available</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">WordPress Integration</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Drag and Drop Functionality</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">AI-Driven Templates</li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Also Includes</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Domain - 1 year <span class="float-box" data-text="One free with purchase of a new 12-, 24- or 36-month plan. Plus ICANN fee of 2.84 USD per domain name per year. You must add the domain name into your cart before purchase, and you must select a domain term length equal to or less than the term length of your plan to qualify for the free domain offer. If you purchase a domain name for a term longer than the term of the plan, you will be charged for the additional registration term at the then-current rate. Cannot be used in conjunction with any other offer, sale, discount or promotion. Free domain offer applies only to the initial purchase term. After the initial purchase term, domains purchased through this offer will renew at the then-current renewal price."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free CDN Included <span class="float-box" data-text="Get faster page loads and better visitor experience with nearby, state-of-the-art data centers in North America, Europe or Asia-Pacific."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free SSL Certificate <span class="float-box" data-text="Linking your site to your domain name has never been easier with GoDaddy registered domain."></span></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-2 px-xl-0">
          <!-- plan -->
          <div class="plan popular-plan">
            <!-- plan-head -->
            <div class="plan-head">
              <!-- plan-name -->
              <h3 class="plan-name">Advanced Plan</h3>
              <!-- plan-para -->
              <p class="plan-para">For those running multiple sites.</p>
            </div>
            <!-- plan-price -->
            <div class="plan-price">
              <!-- price -->
              <h4 class="price">$5.45</h4>
              <!-- price-comment -->
              <p class="price-comment">Normally $13.99 - 12/mo term</p>
            </div>
            <!-- actions -->
            <div class="actions">
              <a href="#" class="btn btn-fill-primary btn-sm shadow-off w-100">Choose Advanced</a>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Top Features</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Unlimited Websites <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Unlimited SSD Storage <span class="float-box" data-text="We don't limit the amount of storage and bandwidth your site can use as long as it complies with our Hosting Agreement. Should your website bandwidth or storage usage present a risk to the stability, performance or uptime of our servers, we will notify you via email and you may be required to upgrade, or we may restrict the resources your website is using. It’s very rare that a website violates our Hosting Agreement and is typically only seen in sites that use hosting for file sharing or storage."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Custom Themes <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">24/7 Customer Support <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Website Builder Available</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">WordPress Integration</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Drag and Drop Functionality</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">AI-Driven Templates</li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Also Includes</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Domain - 1 year <span class="float-box" data-text="One free with purchase of a new 12-, 24- or 36-month plan. Plus ICANN fee of 2.84 USD per domain name per year. You must add the domain name into your cart before purchase, and you must select a domain term length equal to or less than the term length of your plan to qualify for the free domain offer. If you purchase a domain name for a term longer than the term of the plan, you will be charged for the additional registration term at the then-current rate. Cannot be used in conjunction with any other offer, sale, discount or promotion. Free domain offer applies only to the initial purchase term. After the initial purchase term, domains purchased through this offer will renew at the then-current renewal price."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free CDN Included</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free SSL Certificate</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Office 365 - 30 days <span class="float-box" data-text="Buy hosting and get one Microsoft Office 365 email mailbox with 5 GB of dedicated storage for email, contacts and shared online calendar free for the first year. If you choose to activate your mailbox, your Office 365 email mailbox will automatically renew annually at the then-current price until cancelled. You can cancel your automatic renewal at any time."></span></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-2 px-xl-0">
          <!-- plan -->
          <div class="plan">
            <!-- plan-head -->
            <div class="plan-head">
              <!-- plan-name -->
              <h3 class="plan-name">Enterprise Plan</h3>
              <!-- plan-para -->
              <p class="plan-para">With added privacy and security features.</p>
            </div>
            <!-- plan-price -->
            <div class="plan-price">
              <!-- price -->
              <h4 class="price">$9.45</h4>
              <!-- price-comment -->
              <p class="price-comment">Normally $18.99 - 12/mo term</p>
            </div>
            <!-- actions -->
            <div class="actions">
              <a href="#" class="btn btn-fill-primary btn-sm shadow-off w-100">Choose Enterprise</a>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Top Features</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Unlimited Websites <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Unlimited SSD Storage <span class="float-box" data-text="We don't limit the amount of storage and bandwidth your site can use as long as it complies with our Hosting Agreement. Should your website bandwidth or storage usage present a risk to the stability, performance or uptime of our servers, we will notify you via email and you may be required to upgrade, or we may restrict the resources your website is using. It’s very rare that a website violates our Hosting Agreement and is typically only seen in sites that use hosting for file sharing or storage."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Custom Themes <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">24/7 Customer Support <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Website Builder Available</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">WordPress Integration</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Drag and Drop Functionality</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">AI-Driven Templates</li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Also Includes</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Domain - 1 year <span class="float-box" data-text="One free with purchase of a new 12-, 24- or 36-month plan. Plus ICANN fee of 2.84 USD per domain name per year. You must add the domain name into your cart before purchase, and you must select a domain term length equal to or less than the term length of your plan to qualify for the free domain offer. If you purchase a domain name for a term longer than the term of the plan, you will be charged for the additional registration term at the then-current rate. Cannot be used in conjunction with any other offer, sale, discount or promotion. Free domain offer applies only to the initial purchase term. After the initial purchase term, domains purchased through this offer will renew at the then-current renewal price."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free CDN Included</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free SSL Certificate</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Office 365 - 30 days <span class="float-box" data-text="Buy hosting and get one Microsoft Office 365 email mailbox with 5 GB of dedicated storage for email, contacts and shared online calendar free for the first year. If you choose to activate your mailbox, your Office 365 email mailbox will automatically renew annually at the then-current price until cancelled. You can cancel your automatic renewal at any time."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Domain Privacy</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Automated Backup - 1 year</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-2 px-xl-0">
          <!-- plan -->
          <div class="plan">
            <!-- plan-head -->
            <div class="plan-head">
              <!-- plan-name -->
              <h3 class="plan-name">Premium Plan</h3>
              <!-- plan-para -->
              <p class="plan-para">Get more power with optimized web resources.</p>
            </div>
            <!-- plan-price -->
            <div class="plan-price">
              <!-- price -->
              <h4 class="price">$13.45</h4>
              <!-- price-comment -->
              <p class="price-comment">Normally $17.99 - 12/mo term</p>
            </div>
            <!-- actions -->
            <div class="actions">
              <a href="#" class="btn btn-fill-primary btn-sm shadow-off w-100">Choose Premium</a>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Top Features</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Unlimited Websites <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Unlimited SSD Storage <span class="float-box" data-text="We don't limit the amount of storage and bandwidth your site can use as long as it complies with our Hosting Agreement. Should your website bandwidth or storage usage present a risk to the stability, performance or uptime of our servers, we will notify you via email and you may be required to upgrade, or we may restrict the resources your website is using. It’s very rare that a website violates our Hosting Agreement and is typically only seen in sites that use hosting for file sharing or storage."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Custom Themes <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">24/7 Customer Support <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Optimized CPU Resources <span class="float-box" data-text="An economical, 25 GB plan with matching domain and email (with terms of 12/mo. or longer)."></span></li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Website Builder Available</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">WordPress Integration</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Drag and Drop Functionality</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">AI-Driven Templates</li>
              </ul>
            </div>
            <!-- group -->
            <div class="group">
              <!-- title-4 -->
              <h4 class="title-4">Also Includes</h4>
              <!-- list -->
              <ul class="list list-unstyled">
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Domain - 1 year <span class="float-box" data-text="One free with purchase of a new 12-, 24- or 36-month plan. Plus ICANN fee of 2.84 USD per domain name per year. You must add the domain name into your cart before purchase, and you must select a domain term length equal to or less than the term length of your plan to qualify for the free domain offer. If you purchase a domain name for a term longer than the term of the plan, you will be charged for the additional registration term at the then-current rate. Cannot be used in conjunction with any other offer, sale, discount or promotion. Free domain offer applies only to the initial purchase term. After the initial purchase term, domains purchased through this offer will renew at the then-current renewal price."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free CDN Included</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free SSL Certificate</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Office 365 - 30 days <span class="float-box" data-text="Buy hosting and get one Microsoft Office 365 email mailbox with 5 GB of dedicated storage for email, contacts and shared online calendar free for the first year. If you choose to activate your mailbox, your Office 365 email mailbox will automatically renew annually at the then-current price until cancelled. You can cancel your automatic renewal at any time."></span></li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Domain Privacy</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Automated Backup</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Free Dedicated IP</li>
                <li><img src="{{ asset('assets/frontend/') }}/images/check-circle.svg" class="img-fluid" alt="Icon">Unlimited SSD Storage <span class="float-box" data-text="To add additional IPs, go to your My Hosting dashboard, locate IP Addresses and click Request, check the terms of agreement then click Submit Request. You may add additional IP address per request."></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- se-footer -->
    <div class="se-footer d-flex align-items-center justify-content-center flex-wrap">
      <!-- line -->
      <div class="line d-flex align-items-center justify-content-start">
        <img src="{{ asset('assets/frontend/') }}/images/check-circle-2.svg" class="icon img-fluid" alt="Check">
        <span class="text">Backups monthly</span>
      </div>
      <!-- line -->
      <div class="line d-flex align-items-center justify-content-start">
        <img src="{{ asset('assets/frontend/') }}/images/check-circle-2.svg" class="icon img-fluid" alt="Check">
        <span class="text">Free white-glove migrations</span>
      </div>
      <!-- line -->
      <div class="line d-flex align-items-center justify-content-start">
        <img src="{{ asset('assets/frontend/') }}/images/check-circle-2.svg" class="icon img-fluid" alt="Check">
        <span class="text">Staging environments, and more.</span>
      </div>
    </div>
  </div>
</div>

<!-- :: SECTION IV :: -->
<div class="se-iv py-90 bg-2">
  <div class="container">
    <!-- se-head -->
    <div class="se-head">
      <h3 class="se-title-1">More than just a tool</h3>
      <h4 class="se-title-2">Fancy VPS features you get for totally free.</h4>
    </div>
    <!-- space -->
    <div class="space space-sm"></div>
    <!-- row -->
    <div class="row justify-content-center">
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <!-- box -->
        <div class="box color-1">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/businessman.svg" class="img-fluid" alt="businessman">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Upgrade<br>Management</h4>
          <!-- box-para -->
          <p class="box-para">It’s hard to believe anyone would want to harm your website, but they do.<br>Thankfully.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <!-- box -->
        <div class="box color-2">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/priority.svg" class="img-fluid" alt="priority">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Priority<br>Support &amp; contact</h4>
          <!-- box-para -->
          <p class="box-para">It’s hard to believe anyone would want to harm your website, but they do.<br>Thankfully.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <!-- box -->
        <div class="box color-3">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/mission.svg" class="img-fluid" alt="mission">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Advanced<br>Functionality</h4>
          <!-- box-para -->
          <p class="box-para">Host unlimited domains, create unlimited email addresses, databases, FTP accounts, &amp; more.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <!-- box -->
        <div class="box color-4">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/hula-hoop.svg" class="img-fluid" alt="hula-hoop">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Flexible <br>Software Env.</h4>
          <!-- box-para -->
          <p class="box-para">Host unlimited domains, create unlimited email addresses, databases, FTP accounts, &amp; more.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <!-- box -->
        <div class="box color-5">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/data-storage-device.svg" class="img-fluid" alt="data-storage-device">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Weekly<br>Backups</h4>
          <!-- box-para -->
          <p class="box-para">We perform a courtesy off-site backup of your private server data each and every week.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
        <!-- box -->
        <div class="box color-6">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/power.svg" class="img-fluid" alt="power">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Powerful<br>Hardware Env.</h4>
          <!-- box-para -->
          <p class="box-para">It’s hard to believe anyone would want to harm your website, but they do.<br>Thankfully.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-lg-0 mb-2">
        <!-- box -->
        <div class="box color-1">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/network.svg" class="img-fluid" alt="network">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Network<br>Guarantee</h4>
          <!-- box-para -->
          <p class="box-para">Host unlimited domains, create unlimited email addresses, databases, FTP accounts, &amp; more.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-4 col-md-6">
        <!-- box -->
        <div class="box color-2">
          <!-- link -->
          <a href="#" class="box-link"></a>
          <!-- icon -->
          <div class="icon">
            <img src="{{ asset('assets/frontend/') }}/images/security-on.svg" class="img-fluid" alt="security-on">
          </div>
          <!-- box-title -->
          <h4 class="box-title">Max Reliability<br>&amp; Accuracy</h4>
          <!-- box-para -->
          <p class="box-para">Host unlimited domains, create unlimited email addresses, databases, FTP accounts, &amp; more.</p>
          <!-- arrow -->
          <div class="arrow text-right">
            <img src="{{ asset('assets/frontend/') }}/images/right-arrow.png" class="img-fluid" alt="Right-Arrow">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- :: SECTION V :: -->
<div class="se-v py-90">
  <div class="container">
    <!-- se-head -->
    <div class="se-head">
      <h3 class="se-title-1">Let's get to the juicy deets</h3>
      <h4 class="se-title-2">Compare HostX VPS Plans and Support Services</h4>
    </div>
    <!-- space -->
    <div class="space space-sm"></div>
    <!-- filter-nav -->
    <div class="filter-nav" id="filter-nav-v">
      <!-- row -->
      <div class="row justify-content-center">
        <!-- col -->
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-xl-0 mb-2">
          <!-- tab -->
          <div class="tab active" data-filter="hardware">Hardware</div>
        </div>
        <!-- col -->
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-xl-0 mb-2">
          <!-- tab -->
          <div class="tab tr-hide" data-filter="features">VPS Features</div>
        </div>
        <!-- col -->
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-xl-0 mb-2">
          <!-- tab -->
          <div class="tab" data-filter="email">Email</div>
        </div>
        <!-- col -->
        <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-md-0 mb-2">
          <div class="tab" data-filter="security">Security</div>
          <!-- tab -->
        </div>
        <!-- col -->
        <div class="col-xl-2 col-lg-3 col-md-4 col-6">
          <!-- tab -->
          <div class="tab" data-filter="network">Network</div>
        </div>
        <!-- col -->
        <div class="col-xl-2 col-lg-3 col-md-4 col-6">
          <!-- tab -->
          <div class="tab" data-filter="support">Support</div>
        </div>
      </div>
    </div>
    <!-- compare-table -->
    <div class="compare-table-container mb-4">
      <!-- custom-thead -->
      <div class="custom-thead" id="custom-thead-v">
        <!-- tabs -->
        <div class="tabs d-flex align-items-center justify-content-start">
          <div class="tab active flex-grow-1" data-filter="self">Self Managed</div>
          <div class="tab flex-grow-1" data-filter="full">Fully Managed</div>
        </div>
        <!-- tab-content -->
        <div class="tab-content" data-for="self">
          <!-- row -->
          <div class="row align-items-center">
            <!-- col -->
            <div class="col-md-6 mb-md-0 mb-2 text-md-left text-center">
              <!-- table-title-4 -->
              <span class="table-title-4">As low as</span>
              <!-- table-title-1 -->
              <span class="table-title-1"><span class="coin">$</span>19.99<span class="sm-text">/mo</span></span>
            </div>
            <!-- col -->
            <div class="col-md-6 text-md-left text-center">
              <!-- btn -->
              <a href="vps.php" class="btn btn-fill-primary btn-sm font-500 shadow-off">See Plans &amp; Pricing </a>
            </div>
          </div>
        </div>
        <div class="tab-content content-hide" data-for="full">
          <!-- row -->
          <div class="row align-items-center">
            <!-- col -->
            <div class="col-md-6 mb-md-0 mb-2 text-md-left text-center">
              <!-- table-title-4 -->
              <span class="table-title-4">As low as</span>
              <!-- table-title-1 -->
              <span class="table-title-1"><span class="coin">$</span>29.99<span class="sm-text">/mo</span></span>
            </div>
            <!-- col -->
            <div class="col-md-6 text-md-left text-center">
              <!-- btn -->
              <a href="vps.php" class="btn btn-fill-primary btn-sm font-500 shadow-off">See Plans &amp; Pricing </a>
            </div>
          </div>
        </div>
      </div>
      <!-- compare-table -->
      <table class="compare-table" id="compare-table-v">
        <!-- thead -->
        <thead>
          <tr>
            <!-- top-left-corner -->
            <th class="top-left-corner">
              <!-- table-title-head -->
              <span class="table-title-head">Swipe to<br>check plans <span>→</span></span>
            </th>
            <!-- top-right-corner -->
            <th class="top-right-corner">
              <!-- table-title-3 -->
              <span class="table-title-3">Self Managed</span>
              <!-- price -->
              <div class="price">
                <!-- table-title-4 -->
                <span class="table-title-4">As low as</span>
                <!-- table-title-1 -->
                <span class="table-title-1"><span class="coin">$</span>19.99<span class="sm-text">/mo</span></span>
              </div>
              <!-- btn -->
              <a href="#" class="btn btn-fill-primary btn-sm font-500 shadow-off">See Plans &amp; Pricing </a>
            </th>
            <!-- top-right-corner -->
            <th class="top-right-corner">
              <!-- table-title-3 -->
              <span class="table-title-3">Fully Managed</span>
              <!-- price -->
              <div class="price">
                <!-- table-title-4 -->
                <span class="table-title-4">As low as</span>
                <!-- table-title-1 -->
                <span class="table-title-1"><span class="coin">$</span>29.99<span class="sm-text">/mo</span></span>
              </div>
              <!-- btn -->
              <a href="#" class="btn btn-fill-primary btn-sm font-500 shadow-off">See Plans &amp; Pricing </a>
            </th>
          </tr>
        </thead>
        <!-- tbody -->
        <tbody>
          <tr class="hovered">
            <td class="left-corner"></td>
            <td class="right-corner" data-for="self">For experienced users that want full control over their server.</td>
            <td class="right-corner td-hide" data-for="full">For those that don’t have the time or advanced server skills.</td>
          </tr>
          <!-- hardware -->
          <tr data-filter="hardware">
            <td class="left-corner">vCPU</td>
            <td class="right-corner" data-for="self">2 Cores</td>
            <td class="right-corner td-hide" data-for="full">4 Cores</td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">Performance / RAM</td>
            <td class="right-corner" data-for="self">1 – 32 GB RAM</td>
            <td class="right-corner td-hide" data-for="full">2 – 32 GB RAM</td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">Storage</td>
            <td class="right-corner" data-for="self">120 GB SSD</td>
            <td class="right-corner td-hide" data-for="full">240 GB SSD</td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">Bandwidth</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">Dedicated IP</td>
            <td class="right-corner" data-for="self">2 IPs</td>
            <td class="right-corner td-hide" data-for="full">2 IPs</td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">Additional dedicated IP options</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">CPU, RAM, disk &amp; uptime</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">Services monitoring</td>
            <td class="right-corner" data-for="self">-</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="hardware">
            <td class="left-corner">Proactive remediation</td>
            <td class="right-corner" data-for="self">-</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <!-- features -->
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Root access</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">cPanel/WHM</td>
            <td class="right-corner" data-for="self">Optional</td>
            <td class="right-corner td-hide" data-for="full">Optional</td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Operating Systems</td>
            <td class="right-corner" data-for="self">CentOS, Ubuntu or Windows Server</td>
            <td class="right-corner td-hide" data-for="full">CentOS or Windows Server</td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Softaculous script installer</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">LetsEncrypt SSL included</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Unlimited email accounts</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Free content transfers</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Network guarantee</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">MySQL</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Monitoring and alerts</td>
            <td class="right-corner" data-for="self">5-minute intervals</td>
            <td class="right-corner td-hide" data-for="full">1-minute interval</td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Standard Hosting phone support</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Comprehensive help/how-to video library and technical blogs</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Community peer-to-peer advice</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Dedicated services team - (control panel recommended)</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full">Unlimited service requests.</td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Content migration</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full">5 free site migrations, ‪70%‬ discount off service fee for additional site migrations.</td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Server setup</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">DNS setup and configuration</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">SSL installation</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">HTTP/2 server configuration</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">SQL Server Express install</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Package management</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Email client setup</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">PHP module install/upgrade</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">MySQL optimization</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">WordPress setup</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Disk space audit</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Firewall rules configuration</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="features" class="tr-hide">
            <td class="left-corner">Call for custom service request</td>
            <td class="right-corner" data-for="self">Paid option</td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <!-- email -->
          <tr data-filter="email" class="tr-hide">
            <td class="left-corner">Maximum outgoing emails</td>
            <td class="right-corner" data-for="self">Unlimited</td>
            <td class="right-corner td-hide" data-for="full">Unlimited</td>
          </tr>
          <tr data-filter="email" class="tr-hide">
            <td class="left-corner">Maximum POP/IMAP connections</td>
            <td class="right-corner" data-for="self">Unlimited</td>
            <td class="right-corner td-hide" data-for="full">Unlimited</td>
          </tr>
          <!-- security -->
          <tr data-filter="security" class="tr-hide">
            <td class="left-corner">Centralized DDoS Protection</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="security" class="tr-hide">
            <td class="left-corner">Weekly offsite backups</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="security" class="tr-hide">
            <td class="left-corner">Create manual backups</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="security" class="tr-hide">
            <td class="left-corner">Create scheduled backups</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <!-- network -->
          <tr data-filter="network" class="tr-hide">
            <td class="left-corner">Network uptime guarantee</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="network" class="tr-hide">
            <td class="left-corner">US-based Data Centers</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="network" class="tr-hide">
            <td class="left-corner">Fully redundant network</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="network" class="tr-hide">
            <td class="left-corner">Multiple bandwidth providers</td>
            <td class="right-corner" data-for="self">AboveNet, AT&amp;T, Comcast, Global crossing, Level (3), NTT</td>
            <td class="right-corner td-hide" data-for="full">AboveNet, AT&amp;T, Comcast, Global crossing, Level (3), NTT</td>
          </tr>
          <!-- support -->
          <tr data-filter="support" class="tr-hide">
            <td class="left-corner">Premium support</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
          <tr data-filter="support" class="tr-hide">
            <td class="left-corner">Server monitoring and remediation</td>
            <td class="right-corner" data-for="self"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
            <td class="right-corner td-hide" data-for="full"><img src="{{ asset('assets/frontend/') }}/images/check.svg" class="check-icon img-fluid" alt="Check"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- se-footer -->
    <div class="se-footer d-flex align-items-center justify-content-center flex-wrap">
      <!-- line -->
      <div class="line d-flex align-items-center justify-content-start">
        <img src="{{ asset('assets/frontend/') }}/images/check-circle-2.svg" class="icon img-fluid" alt="Check">
        <span class="text">Backups monthly</span>
      </div>
      <!-- line -->
      <div class="line d-flex align-items-center justify-content-start">
        <img src="{{ asset('assets/frontend/') }}/images/check-circle-2.svg" class="icon img-fluid" alt="Check">
        <span class="text">Free white-glove migrations</span>
      </div>
      <!-- line -->
      <div class="line d-flex align-items-center justify-content-start">
        <img src="{{ asset('assets/frontend/') }}/images/check-circle-2.svg" class="icon img-fluid" alt="Check">
        <span class="text">Staging environments, and more.</span>
      </div>
    </div>
  </div>
</div>

<!-- :: SECTION VI :: -->
<div class="se-vi py-90 bg-2">
  <div class="container">
    <!-- se-head -->
    <div class="se-head">
      <h3 class="se-title-1">Trust our customers</h3>
      <h4 class="se-title-2">VPS Hosting What Our Customers Have To Say?</h4>
    </div>
    <!-- space -->
    <div class="space space-sm"></div>
    <!-- row -->
    <div class="row">
      <!-- col -->
      <div class="col-xl-3 col-lg-6">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/01.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">Julie Lane</div>
                <div class="job">Instagram CEO</div>
              </div>
              <!-- quotes -->
              <p class="quotes">I rally like using this product! Hands down, one of the best apps out there!</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/02.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">Gladys Hawkins</div>
                <div class="job">Adobe Product Manager</div>
              </div>
              <!-- quotes -->
              <p class="quotes">Congrats to the team for building such an awesome product.<br><br>My team and i are using this daily and we all find it really useful.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-6">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/03.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">Gladys Hawkins</div>
                <div class="job">Adobe Product Manager</div>
              </div>
              <!-- quotes -->
              <p class="quotes">Congrats to the team for building such an awesome product.<br><br>My team and i are using this daily and we all find it really useful.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/04.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">John Buckland</div>
                <div class="job">Full Stack Web Developer</div>
              </div>
              <!-- quotes -->
              <p class="quotes">I can always find a great new addition to my wardrobe!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-6">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/05.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">John Buckland</div>
                <div class="job">Full Stack Web Developer</div>
              </div>
              <!-- quotes -->
              <p class="quotes">Wow This Is Amazing Exchange Platform Very Good Future I Hope This is Best Exchange Platform Of This Whole World</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/06.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">Sean Williams</div>
                <div class="job">Graphic Designer</div>
              </div>
              <!-- quotes -->
              <p class="quotes">Great customer service from HostX, product arrived well wrapped and protected. at the end everything amazing</p>
            </div>
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-3 col-lg-6">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/07.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">Sean Williams</div>
                <div class="job">Graphic Designer</div>
              </div>
              <!-- quotes -->
              <p class="quotes">Great customer service from HostX, product arrived well wrapped and protected.</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-12">
            <!-- box -->
            <div class="box">
              <!-- user-info -->
              <div class="user-info">
                <img src="{{ asset('assets/frontend/') }}/images/08.jpg" class="avatar img-fluid" alt="Avatar">
                <div class="name">Gladys Hawkins</div>
                <div class="job">Adobe Product Manager</div>
              </div>
              <!-- quotes -->
              <p class="quotes">I am an expert in web development and design. So far in the last couple of months I couldn't ask for better! Services are on spot, uptime is on spot!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- space -->
    <div class="space space-sm"></div>
  </div>
</div>

<!-- :: FAQs :: -->
<!-- FAQs -->
<div class="faqs py-90" id="faqs">
  <div class="container">
    <!-- se-head -->
    <div class="se-head">
      <h3 class="se-title-1">FAQS</h3>
      <h4 class="se-title-2">Got questions?<br>Well, we've got answers.</h4>
    </div>
    <!-- space -->
    <div class="space space-sm"></div>
    <!-- row -->
    <div class="row">
      <!-- col -->
      <div class="col-xl-4 pr-xl-3 mb-xl-0 mb-2">
        <!-- category -->
        <div class="category" id="faqs-category">
          <!-- item -->
          <div class="item active" data-category="general">
            <img src="{{ asset('assets/frontend/') }}/images/planet-earth.png" class="icon img-fluid" alt="Icon">
            <div class="text">
              <h5 class="item-title">General inquiries</h5>
              <p class="item-des">New around here? Start with the basics.</p>
            </div>
          </div>
          <!-- item -->
          <div class="item" data-category="features">
            <img src="{{ asset('assets/frontend/') }}/images/favorite.png" class="icon img-fluid" alt="Icon">
            <div class="text">
              <h5 class="item-title">VPS Hosting Features</h5>
              <p class="item-des">Dive deeper into HostX's servers features.</p>
            </div>
          </div>
          <!-- item -->
          <div class="item" data-category="privacy">
            <img src="{{ asset('assets/frontend/') }}/images/lock.png" class="icon img-fluid" alt="Icon">
            <div class="text">
              <h5 class="item-title">Permissions &amp; Privacy</h5>
              <p class="item-des">We take security &amp; privacy seriously.</p>
            </div>
          </div>
          <!-- item -->
          <div class="item" data-category="pricing">
            <img src="{{ asset('assets/frontend/') }}/images/dollar.png" class="icon img-fluid" alt="Icon">
            <div class="text">
              <h5 class="item-title">Pricing &amp; Plans</h5>
              <p class="item-des">Learn about plans, payments, and more.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- col -->
      <div class="col-xl-8">
        <!-- content -->
        <div class="content">
          <!-- box -->
          <div class="box category-general">
            <!-- box-head -->
            <div class="box-head">
              <img src="{{ asset('assets/frontend/') }}/images/planet-earth.png" class="icon img-fluid" alt="Icon">
              <div class="text">
                <h5 class="box-title">General inquiries</h5>
                <p class="box-des">New around here? Start with the basics.</p>
              </div>
            </div>
            <!-- box-body -->
            <div class="box-body">
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">What is a Virtual Private Server (VPS)?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>A <a href="#">Virtual Private Server</a> is a server divided into fully separate hosting environments. When you have VPS hosting, one of those environments is completely dedicated to you. That means you don't have to share resources (such as RAM or CPU) with other customers and you're less likely to be impacted by their behavior.</p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">What about VPS vs. Dedicated?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Another great question. A dedicated server is a server that's literally dedicated to you and no one else, which means the world (or in this case, server) is your oyster. Learn more about the <a href="#">benefits of VPS and Dedicated here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">How do I get started with VPS hosting?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Our KnowledgeBase will walk you through exactly how to <a href="#">upgrade to a VPS.</a> Then you can check out these <a href="#">essential first steps.</a></p>
                  <p>And if you really want to go for it, you can read up on more <a href="#">general information about VPS here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Wait… if we're talking about a VPS, what is a VPN then?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Yup, it can be a little confusing. But a virtual private server (VPS) is a form of web hosting, while a virtual private network (VPN) is a technology that allows you to remain completely anonymous when using the web. Read up more on <a href="#">VPS vs. VPN here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">When should I use VPS hosting over Shared?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>In short, a virtual private server is ideal for users looking for more control over their hosting environment. Maybe your site traffic has grown, or maybe you have multiple websites and need more resources to run them all effectively. A VPS gives you more flexibility and control to bump up things like RAM and disk space without paying for more than you need.</p>
                  <p>For more information on shared vs. VPS hosting <a href="#">check out our blog.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">I already have hosting, but want to switch to VPS. Any tips?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>If you’re switching from Shared, Reseller, or Dedicated hosting to a virtual private server, the process is pretty simple. You’ll just have to transfer your files, change the DNS, and cancel your old plan. For more details into this process, <a href="#">check out this article on switching to VPS.</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- box -->
          <div class="box category-features">
            <!-- box-head -->
            <div class="box-head">
              <img src="{{ asset('assets/frontend/') }}/images/favorite.png" class="icon img-fluid" alt="Icon">
              <div class="text">
                <h5 class="box-title">VPS Hosting Features</h5>
                <p class="box-des">Dive deeper into HostX's servers features.</p>
              </div>
            </div>
            <!-- box-body -->
            <div class="box-body">
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">How to Update cPanel in WHM?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>A <a href="#">Virtual Private Server</a> is a server divided into fully separate hosting environments. When you have VPS hosting, one of those environments is completely dedicated to you. That means you don't have to share resources (such as RAM or CPU) with other customers and you're less likely to be impacted by their behavior.</p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Updating Legacy Linux Dedicated Hosting Packages</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Another great question. A dedicated server is a server that's literally dedicated to you and no one else, which means the world (or in this case, server) is your oyster. Learn more about the <a href="#">benefits of VPS and Dedicated here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">How to Reboot Your VPS/Dedicated Server?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Our KnowledgeBase will walk you through exactly how to <a href="#">upgrade to a VPS.</a> Then you can check out these <a href="#">essential first steps.</a></p>
                  <p>And if you really want to go for it, you can read up on more <a href="#">general information about VPS here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">VPS General Information</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Yup, it can be a little confusing. But a virtual private server (VPS) is a form of web hosting, while a virtual private network (VPN) is a technology that allows you to remain completely anonymous when using the web. Read up more on <a href="#">VPS vs. VPN here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">VPS Services - Self Signed SSL Certificates</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>In short, a virtual private server is ideal for users looking for more control over their hosting environment. Maybe your site traffic has grown, or maybe you have multiple websites and need more resources to run them all effectively. A VPS gives you more flexibility and control to bump up things like RAM and disk space without paying for more than you need.</p>
                  <p>For more information on shared vs. VPS hosting <a href="#">check out our blog.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Do I Need a VPS?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>If you’re switching from Shared, Reseller, or Dedicated hosting to a virtual private server, the process is pretty simple. You’ll just have to transfer your files, change the DNS, and cancel your old plan. For more details into this process, <a href="#">check out this article on switching to VPS.</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- box -->
          <div class="box category-privacy">
            <!-- box-head -->
            <div class="box-head">
              <img src="{{ asset('assets/frontend/') }}/images/lock.png" class="icon img-fluid" alt="Icon">
              <div class="text">
                <h5 class="box-title">Permissions &amp; Privacy</h5>
                <p class="box-des">We take security &amp; privacy seriously.</p>
              </div>
            </div>
            <!-- box-body -->
            <div class="box-body">
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Do I Need Domain Privacy Protection? | HostX</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>A <a href="#">Virtual Private Server</a> is a server divided into fully separate hosting environments. When you have VPS hosting, one of those environments is completely dedicated to you. That means you don't have to share resources (such as RAM or CPU) with other customers and you're less likely to be impacted by their behavior.</p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Launchpad: How to Enable WHMCS Privacy?</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Another great question. A dedicated server is a server that's literally dedicated to you and no one else, which means the world (or in this case, server) is your oyster. Learn more about the <a href="#">benefits of VPS and Dedicated here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">What Is Domain Name Privacy? | HostX</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Our KnowledgeBase will walk you through exactly how to <a href="#">upgrade to a VPS.</a> Then you can check out these <a href="#">essential first steps.</a></p>
                  <p>And if you really want to go for it, you can read up on more <a href="#">general information about VPS here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Common Web Hosting Questions | HostX Blog</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Another great question. A dedicated server is a server that's literally dedicated to you and no one else, which means the world (or in this case, server) is your oyster. Learn more about the <a href="#">benefits of VPS and Dedicated here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Domain Privacy</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Our KnowledgeBase will walk you through exactly how to <a href="#">upgrade to a VPS.</a> Then you can check out these <a href="#">essential first steps.</a></p>
                  <p>And if you really want to go for it, you can read up on more <a href="#">general information about VPS here.</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- box -->
          <div class="box category-pricing">
            <!-- box-head -->
            <div class="box-head">
              <img src="{{ asset('assets/frontend/') }}/images/dollar.png" class="icon img-fluid" alt="Icon">
              <div class="text">
                <h5 class="box-title">Pricing &amp; Plans</h5>
                <p class="box-des">Learn about plans, payments, and more.</p>
              </div>
            </div>
            <!-- box-body -->
            <div class="box-body">
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Hosting Price Chart</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>A <a href="#">Virtual Private Server</a> is a server divided into fully separate hosting environments. When you have VPS hosting, one of those environments is completely dedicated to you. That means you don't have to share resources (such as RAM or CPU) with other customers and you're less likely to be impacted by their behavior.</p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Addon Price Chart</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Another great question. A dedicated server is a server that's literally dedicated to you and no one else, which means the world (or in this case, server) is your oyster. Learn more about the <a href="#">benefits of VPS and Dedicated here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Web hosting discount prices</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Our KnowledgeBase will walk you through exactly how to <a href="#">upgrade to a VPS.</a> Then you can check out these <a href="#">essential first steps.</a></p>
                  <p>And if you really want to go for it, you can read up on more <a href="#">general information about VPS here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Domain Registration and Renewal Pricing Explained</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>Yup, it can be a little confusing. But a virtual private server (VPS) is a form of web hosting, while a virtual private network (VPN) is a technology that allows you to remain completely anonymous when using the web. Read up more on <a href="#">VPS vs. VPN here.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">Registering Domain Names and TLD Prices</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>In short, a virtual private server is ideal for users looking for more control over their hosting environment. Maybe your site traffic has grown, or maybe you have multiple websites and need more resources to run them all effectively. A VPS gives you more flexibility and control to bump up things like RAM and disk space without paying for more than you need.</p>
                  <p>For more information on shared vs. VPS hosting <a href="#">check out our blog.</a></p>
                </div>
              </div>
              <!-- q -->
              <div class="q">
                <!-- q-h -->
                <div class="q-h">
                  <!-- text -->
                  <h4 class="text">How To Set Pricing for Your Online Store | HostX Blog</h4>
                  <!-- plus -->
                  <div class="plus">
                    <span></span>
                    <span></span>
                  </div>
                </div>
                <!-- q-b -->
                <div class="q-b">
                  <p>If you’re switching from Shared, Reseller, or Dedicated hosting to a virtual private server, the process is pretty simple. You’ll just have to transfer your files, change the DNS, and cancel your old plan. For more details into this process, <a href="#">check out this article on switching to VPS.</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- :: FOOTER :: -->
<!-- Theme Footer -->
<footer class="theme-footer">
  <!-- footer-bottom -->
  <div class="footer-bottom">
    <div class="container-fluid">
      <!-- content -->
      <div class="content d-flex align-items-start mb-2">
        <!-- logo -->
        <div class="logo mb-lg-0 mb-1">
          <a href="#">
            <img style="height:90px;width:140px;" src="{{ asset('assets/frontend/') }}/images/white_4x.png" class="img-fluid" alt="HostX">
          </a>
        </div>
        <!-- copyright -->
        <div class="copyright mr-lg-5">
          <!-- links -->
          <ul class="links list-unstyled d-flex align-items-center flex-wrap">
            @foreach($policyPages as $policyPage)
            <li><a href="{{ route('policy.pages', ['slug'=>slug($policyPage->data_values->title), 'id'=>$policyPage->id]) }}">{{ __(@$policyPage->data_values->title) }}</a></li>
           @endforeach
         </ul>
         <!-- para-3 -->
         <p class="para-3">{{ __($general->site_name) }} &copy; {{ date('Y') }}. @lang('All Rights Reserved')</p>
       </div>
       <!-- social-list -->
       <ul class="social-list list-unstyled d-flex align-items-center justify-content-lg-end justify-content-center ml-lg-auto mt-lg-0 mt-2">
        <li><a href="https://www.facebook.com/AlihostingOfficial"><img style="filter:none;border-radius:50%" src="{{ asset('assets/frontend/') }}/images/facebook.png" alt="Icon"></a></li>
        <li><a href="https://twitter.com/alihosting"><img style="filter:none;border-radius:50%" src="{{ asset('assets/frontend/') }}/images/twitter.png" alt="Icon"></a></li>
        <li><a href="https://www.youtube.com/@Alihosting"><img style="filter:none;border-radius:50%" src="{{ asset('assets/frontend/') }}/images/youtube.png" alt="Icon"></a></li>
        <li><a href="https://www.instagram.com/alihostingofficial"><img style="filter:none;border-radius:50%" src="{{ asset('assets/frontend/') }}/images/instagram.png" alt="Icon"></a></li>
      </ul>
    </div>
    <!-- content -->
    <div class="content d-lg-flex align-items-end flex-wrap">
      <!-- para-3 -->
      <p class="para-3">{{ __(@$footer->data_values->description) }}</p>
      <!-- sign -->
    </div>
  </div>
</div>
</footer>
<script src="{{ asset('assets/frontend/') }}/js/jquery-3.7.0.min.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/jQuery.cookies.js"></script>
<script src="{{ asset('assets/frontend/') }}/js/script.js"></script>

</body></html>