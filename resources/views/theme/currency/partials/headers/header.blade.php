<!-- Start header -->
<header class="top-header">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="logo_section">
                    <a class="navbar-brand" href="{{route('inicio')}}"><img src="{{asset('img/logo.png')}}" alt="logo tecnomaquina"></a>
                </div>
                @php
                    $contactoUno = $contactos->first();
                @endphp
                <div class="site_information">
                    <ul>
                        <li><a href="mailto:{{$contactoUno->email}}"><img src="{{asset('theme/currency/images/mail_icon.png')}}" alt="#" />{{$contactoUno->email}}</a></li>
                        <li><a target="_blank" href="https://wa.me/{{$contactoUno->telefono}}?text={{'Hola amigos de tecnomaquina, deseo mas información'}}"><img src="{{asset('theme/currency/images/phone_icon.png')}}" alt="whatsapp"/>{{$contactoUno->telefono}}</a></li>
                        <li>
                            <div class="dropdown">
                                @php
                                    $lenguajes = ['es' => 'Español', 'en' => 'English', 'pt-BR' => 'Português'];
                                    $lang = session()->get('lang');
                                @endphp
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                    <img src='{{asset("img/banderas/$lang.png")}}' width="20px">{{$lenguajes[$lang]}}
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="{{ url('lang', ['en']) }}"><img src="{{asset('img/banderas/en.png')}}" width="20px">English</a>
                                  <a class="dropdown-item" href="{{ url('lang', ['es']) }}"><img src="{{asset('img/banderas/es.png')}}" width="20px">Español</a>
                                  <a class="dropdown-item" href="{{ url('lang', ['pt-BR']) }}"><img src="{{asset('img/banderas/pt-br.png')}}" width="20px">Português</a>
                                </div>
                              </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
    </div>
    <div class="header_bottom">
      <div class="container">
        <div class="col-sm-12">
            <div class="menu_orange_section" style="background: #ff880e;">
               <nav class="navbar header-nav navbar-expand-lg"> 
                 <div class="menu_section">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
            @if (isset($menu_dos))
                @include('theme.currency.partials.headers.navbar_dos')
            @else
                @include('theme.currency.partials.headers.navbar_ini')
            @endif
            </div>
                 </div>
             </nav>
             <div class="search-box">
                <input type="text" class="search-txt" placeholder="Buscar">
                <a class="search-btn">
                    <img src="{{asset('theme/currency/images/search_icon.png')}}" alt="Buscar" />
                </a>
            </div> 
            </div>
        </div>
      </div>
    </div>
    
</header>
<!-- End header -->