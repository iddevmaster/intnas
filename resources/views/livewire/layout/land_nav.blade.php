<!-- Navigation -->
<nav class="navbar fixed-top">
    <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

        <!-- Image Logo -->
        <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="">
            <img src="/img/logodronettc.png" alt="alternative" class="h-8" />
        </a>

        <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
            <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                {{-- <li>
                    <a class="nav-link page-scroll" href="/home">Home</a>
                </li> --}}
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="/home" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('messages.home') }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item page-scroll" href="#header">{{ __('messages.home') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="#features">{{ __('messages.services') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="#details">{{ __('messages.drone') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="#pricing">{{ __('messages.course') }}</a>
                    </div>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="/products">{{ __('messages.products') }}</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="/services">{{ __('messages.services') }}</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="/blogs">{{ __('messages.news') }}</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="/activity">{{ __('messages.activities') }}</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="/contacts">{{ __('messages.contact') }}</a>
                </li>
                <li class="dropdown">
                    <div class="py-1 mx-2 cursor-pointer" id="changelang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ app()->getLocale() == 'th' ? '/img/thai.png' : '/img/english.png' }}" class="h-6" alt="">
                    </div>
                    <div class="dropdown-menu" aria-labelledby="changelang">
                        <a class="dropdown-item cursor-pointer" href="{{ route('switch-language', ['locale' => 'th']) }}">
                            <div class="flex gap-2">
                                <img src="/img/thai.png" class="h-6" alt="">
                                <p>{{ __('messages.thai') }}</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item cursor-pointer" href="{{ route('switch-language', ['locale' => 'en']) }}">
                            <div class="flex gap-2">
                                <img src="/img/english.png" class="h-6" alt="">
                                <p>{{ __('messages.eng') }}</p>
                            </div>
                        </a>
                    </div>
                </li>
                {{-- <li>
                    <a class="nav-link page-scroll active" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#features">Features</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#details">Details</a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item page-scroll" href="/portfolio">Portfolio</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="#">Terms Conditions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item page-scroll" href="#">Privacy Policy</a>
                    </div>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="#download">Download</a>
                </li> --}}
            </ul>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
