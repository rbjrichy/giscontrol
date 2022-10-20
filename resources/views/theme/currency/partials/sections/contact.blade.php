<div class="section layout_padding padding_top_0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2><span class="theme_color"></span>{{__('Contact')}}</h2>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- contact_form -->
<div id="contact" class="section contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 offset-lg-3">
                <div class="full">
                    @include('partes.alertas')
                    <form class="contact_form_inner" method="POST" action="{{route('guardar.mensaje.contacto')}}">
                        @csrf
                        <fieldset>
                            <div class="field">
                                <input type="text" name="nombres" placeholder="{{__('Your name')}}" required/>
                            </div>
                            <div class="field">
                                <input type="email" name="correo" placeholder="{{__('Your Email')}}" required/>
                            </div>
                            <div class="field">
                                <input type="text" name="telefono" placeholder="{{__('Phone number')}}" required/>
                            </div>
                            <div class="field">
                                <textarea name="mensaje" placeholder="{{__('Message')}}" required></textarea>
                            </div>
                            <div class="field center">
                                <button>{{__('SEND')}}</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact_form -->