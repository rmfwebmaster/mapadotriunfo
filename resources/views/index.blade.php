<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>O mapa para o SUCESSO que 99% dos coaches não querem que você conheça</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link rel="stylesheet" href="{{asset('css/style-new.css')}}">

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2702433513156294');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=2702433513156294&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
    </head>
<body>

    <script>
        fbq('track', 'ViewContent');
    </script>

        <!--==========================
    Header
    ============================-->
{{--        <header id="header">--}}

{{--            <div class="container">--}}

{{--                <div class="logo float-left">--}}
{{--                    <!-- Uncomment below if you prefer to use an image logo -->--}}
{{--                    <!--<h1 class="text-light"><a href="#intro" class="scrollto"><span>Mapendo minha consciência</span></a></h1>-->--}}
{{--                    <!--<a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->--}}
{{--                </div>--}}

{{--                <div class="float-right">--}}
{{--                    <div id="topbar">--}}
{{--                        <div class="social-links">--}}
{{--                            <a href="https://www.facebook.com/mapeandominhaconsciencia" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>--}}
{{--                            <a href="https://www.instagram.com/mapeandominhaconsciencia" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>--}}
{{--                            <a href="https://www.youtube.com/channel/UCZwa3tdcbQvRAjBdMzxVn7A" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </header><!-- #header -->--}}

        <!--==========================
          Intro Section
        ============================-->
        <section id="intro" class="clearfix">
            <div class="container d-flex h-100">
                <div class="row justify-content-center align-self-center">
{{--                    <div class="col-md-6 intro-img order-md-last order-first">--}}
{{--                        <img src="img/intro-img.svg" alt="" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12 col-lg-6 intro-info order-md-first order-last pb-4">--}}
{{--                        <div class="embed-responsive embed-responsive-16by9">--}}
{{--                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SWquO0mXvLU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-12 col-lg-12 intro-info order-md-first order-last text-center">
                        <h2>O mapa para o SUCESSO que 99% dos coaches não querem que você conheça</h2>
                        <h3 class="text-white">Descubra GRATUITAMENTE, em apenas 2 minutos, quais áreas da sua vida estão te afastando lentamente do seu sucesso.</h3>
{{--                        <h3 class="text-white">Pode ser somente um detalhe.<br>Economize anos da sua vida com esta ferramenta.</h3>--}}
                        <div>
                            <a href="#services" class="btn-get-started scrollto"> QUERO SABER AGORA</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #intro -->

        <main id="main">

            <!--==========================
              About Us Section
            ============================-->
            <section id="about">

                <div class="container pb-3">
                    <div class="row">

                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{asset('images/roda_da_vida.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="about-content">
                                <h2>VOCÊ SE SENTE MEIO PERDIDO EM ALGUMA DESTAS ÁREAS? VEJA ONDE PODE ESTAR O PROBLEMA!</h2>
                                <!--<h3>Descubra os erros que você pode estar cometendo quando o assunto é felicidade.</h3>-->
                                <p>A vida humana é composta por 8 áreas essenciais. Uma área pode interferir na outra de forma positiva ou negativa. Esta ferramenta é, acima de tudo, um mapa de projeção do que você deve e vai melhorar na sua vida.</p>
{{--                                <p>A plenitude de vida nada tem a ver com uma única área da vida humana. Assim, de nada adianta ser feliz em apenas algumas áreas e nas outras ser frustrado ou infeliz.</p>--}}
                                <ul>
                                    <li><i class="ion-android-checkmark-circle"></i> Você será capaz de identificar quais áreas da sua vida poderiam ser melhoradas para você usar todo o seu potencial.</li>
                                    <li><i class="ion-android-checkmark-circle"></i> Saberá investir tempo, energia e recursos naquilo que realmente importa.</li>
                                    <li><i class="ion-android-checkmark-circle"></i> E encontrará o caminho mais rápido e melhor para alcançar os seus objetivos.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3"></div>
                        <div class="col-md-6 col-lg-6"><a href="#services" class="btn btn-block btn-lg btn-info mt-lg-5 scrollto">QUERO MEU MAPA AGORA</a></div>
                        <div class="col-md-3 col-lg-3"></div>
                    </div>
                </div>

            </section><!-- #about -->


            <!--==========================
              Services Section
            ============================-->
            <section id="services" class="section-bg">
                <div class="container">

                    <header class="section-header">
                        <h3>Como receber o meu mapa?</h3>
                        <p>Responda as perguntas abaixo dando notas de 0 (zero) a 10 (dez). Quanto mais sinceridade você aplicar, mais preciso será o seu mapa.<br>Responda AGORA mesmo! Em breve você estará vivendo a vida que sempre sonhou.</p>
                    </header>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <form name="form-aplicacao" method="POST" action="{{route('ferramenta.store')}}">
                                @csrf

                                @foreach($pilares as $pilar)

                                    @if($loop->index > 0)
                                        <div class="card mt-5 mb-5">
                                    @else
                                        <div class="card mb-5">
                                    @endif
                                            <h5 class="card-header text-white bg-info">Sobre o (a) {{$pilar['pilar']}}</h5>
                                            <div class="card-body">
                                                @foreach($perguntas_lista[$pilar['id']] as $pergunta)
                                                    <h6 class="card-title">{{$pergunta['ordem']}}. {{$pergunta['pergunta']}} <span id="nota-{{mb_strtolower($pilar['pilar'])}}-{{$pergunta['ordem']}}" class="badge badge-danger">NOTA: 0</span></h6>
                                                    <div class="form-group">
                                                        <input type="range" min="0" max="10" class="form-control-range" name="{{mb_strtolower($pilar['pilar'])}}[]" list="lista-{{mb_strtolower($pilar['pilar'])}}-{{$pergunta['ordem']}}" value="0" onchange="changeNota(this)">
                                                        <datalist id="lista-{{mb_strtolower($pilar['pilar'])}}-{{$pergunta['ordem']}}">
                                                            <option value="0" label="0">
                                                            <option value="1" label="1">
                                                            <option value="2" label="2">
                                                            <option value="3" label="3">
                                                            <option value="4" label="4">
                                                            <option value="5" label="5">
                                                            <option value="6" label="6">
                                                            <option value="7" label="7">
                                                            <option value="8" label="8">
                                                            <option value="9" label="9">
                                                            <option value="10" label="10">
                                                        </datalist>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                @endforeach

                                <div class="card mb-5 ">
                                    <h5 class="card-header text-white bg-info">Dados Pessoais</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <input name="name" class="form-control form-control-lg mb-2" type="text" placeholder="Nome" required>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <input name="email" class="form-control form-control-lg" type="email" placeholder="Seu melhor e-mail" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">RECEBER MEU MAPA</button>
                            </form>
                        </div>
                    </div>

                </div>
            </section><!-- #services -->

        </main>

        <!--==========================
          Footer
        ============================-->
        <footer id="footer" class="section-bg">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Mapa do Triunfo</strong> - Alguns direitos reservados.
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
                    -->
{{--                    Desenvolvido por <a href="https://www.instagram.com/inpulseone/">Inpulseone</a>--}}
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->

        <!-- JavaScript Libraries -->
        <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Template Main Javascript File -->
        <script src="{{asset('js/main.js')}}"></script>

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cbf56844f05eab9"></script>


        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function changeNota(obj) {
                var valor = $(obj).val();
                $(obj).parent().prev().children().removeClass('badge-danger').addClass('badge-success').html("NOTA: "+valor);
            }
        </script>

</body>
</html>
