<footer class="footer-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 white_fonts">
                <div class="row">
                    {{-- <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="full">
                            <img class="img-responsive" src="{{asset('theme/currency/images/footer_logo.png')}}" alt="#" />
                        </div>
                    </div> --}}
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="full">
                            <h3>{{ __('Quick Links') }}</h3>
                        </div>
                        <div class="full">
                            <ul class="menu_footer">
                                <li><a href="#home"> {{ __('Home') }}</a></li>
                                <li><a href="#about"> {{ __('About') }}</a></li>
                                <li><a href="#categorys"> {{ __('Products') }}</a></li>
                                <li><a href="#services"> {{ __('Services') }}</a></li>
                                <li><a href="#news"> {{ __('News') }}</a></li>
                                <li><a href="#contact"> {{ __('Contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="full mb-4">
                            <div class="footer_blog full white_fonts">
                                <h3>{{ __('Redes Sociales') }}</h3>
                                <div class="btn-redes">
                                    <a id="a_id" href="#ini" class="fa fa-whatsapp"></a>
                                    <a id="a_id" href="#ini" class="fa fa-facebook-f"></a>
                                    <a id="a_id" href="#ini" class="fa fa-twitter"></a>
                                    <a id="a_id" href="#ini" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>{{ __('Newsletter') }}</h3>
                                <p>{{ __('Subscribe to our newsletter') }}</p>
                                <div class="newsletter_form">
                                    <form action="index.html">
                                        <input class="form-control" type="email" placeholder="{{ __('Your Email') }}"
                                            name="email" required="">
                                        <button>{{ __('Submit') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="full">
                            <div class="footer_blog full white_fonts">
                                <h3>{{ __('Contact us') }}</h3>
                                <ul class="full">
                                    @foreach ($contactos as $contacto)
                                        <div class="mb-3">
                                            <li style="margin-bottom: 5px">
                                                <img src="{{ asset('theme/currency/images/i5.png') }}">
                                                <a style="margin-bottom: 0" id="contacto" href="https://maps.google.com/?q={{ $contacto->latitud }},{{ $contacto->longitud }}&z=19&t=k"
                                                    target="_blank" rel="noopener noreferrer">
                                                    <span>{{ $contacto->direccion }}<br>{{ $contacto->ciudad }} </span>
                                                </a>
                                            </li>
                                            <li style="margin-bottom: 5px">
                                                <img src="{{ asset('theme/currency/images/i6.png') }}">
                                                <a style="margin-bottom: 0" href="mailto:{{$contacto->email}}" target="_blank" rel="noopener noreferrer">
                                                    <span>{{ $contacto->email }}</span>
                                                </a>
                                            </li>
                                            <li style="margin-bottom: 5px">
                                                <img src="{{ asset('theme/currency/images/i7.png') }}">
                                                <a style="margin-bottom: 0" href="https://wa.me/{{$contacto->telefono}}?text={{'Hola amigos de tecnomaquina, deseo mas información'}}" target="_blank" rel="noopener noreferrer">
                                                    <span>{{ $contacto->telefono }}</span>
                                                </a>
                                            </li>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-default">
                                        Launch Default Modal
                                    </button> --}}
{{-- 
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}