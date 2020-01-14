<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resultado do Teste</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link rel="stylesheet" href="{{asset('css/style-new.css')}}">
    </head>
<body>
        <div class="container-fluid pt-5 pb-5" style="background-color: #005cbf">
            <div class="row">
                <div class="col-md-12 col-lg-12 intro-info order-md-first order-last text-center">
                    <h3 class="text-white">Antes de mostrar seu resultado, preciso falar com você sobre</h3>
                    <h1 class="text-warning">ALCANÇAR OS SEUS OBJETIVOS DE VIDA</h1>
                    <h5 class="text-white">O contato com esta ferramente pode mudar completamente a forma<br>como você leva a vida. Esteja ciente e leia atentamente até o final.</h5>
                </div>
            </div>
        </div>

        <main id="main">

            <!--==========================
              About Us Section
            ============================-->
            <section id="about" style="padding-bottom: 50px">

                <div class="container pb-0">
                    <div class="row">

                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{asset('images/about-img-2.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="about-content">
                                <h2>O que a falta de clareza tem roubado da sua Vida, do seu Trabalho e do seu Futuro?</h2>
                                <p>Talvez o maior problema das pessoas que buscam alcançar os seus objetivos na vida, seja a falta de clareza para identificar quais áreas da sua vida precisam ser ajustadas e o que fazer para melhorá-las.</p>
                                <p>Às vezes a solução está bem diante dos olhos delas, mas a falta de conhecimento as impedem de enxergar o(s) obstáculo(s).</p>
                                <ul>
                                    <li><i class="ion-android-checkmark-circle"></i> Você se sente sem evolução em alguma área da sua vida?</li>
                                    <li><i class="ion-android-checkmark-circle"></i> Já pensou em melhorar esta área, mas travou por não saber como?</li>
                                    <li><i class="ion-android-checkmark-circle"></i> Você já começa o dia ou a semana já querendo que acabem? </li>
                                    <li><i class="ion-android-checkmark-circle"></i> Está se vendo mais perto da velhice e mais longe dos seus objetivos?</li>
                                </ul>
                            </div>
                            <h4 class="text-left" style="color: #413e66">Se a sua resposta for sim para essas perguntas, provavelmente você esá sem direção.</h4>
                        </div>
                    </div>
                </div>

            </section><!-- #about -->


            <!--==========================
              Services Section
            ============================-->
            <section id="services" class="section-bg">
                <div class="container">

                    <header class="section-header">
                        <h4 class="text-left" style="color: #413e66">Todos nós sonhamos em ter uma vida próspera, com liberdade, saúde e bem estar. Eu não conheço uma única pessoa que não queira viver assim. Sim, todos querem. Mas neste caso, querer não é o bastante para poder.</h4>
                        <p class="text-left pb-3">A verdade é que a maioria esmagadora das pessoas não vão ter uma vida assim, e isso é por um motivo óbvio: <strong>{{ mb_strtoupper('Elas não farão aquilo que é necessário pra chegar lá.') }}</strong></p>
                        <p class="text-left pb-3">Todos os dias mais pessoas acordam e vão dormir com a sensação de estarem completamente perdidas, desoladas, sem esperança. E o mais irônico disso tudo é que vivemos na era pós-digital, a informação nunca esteve tão próxima, e ao mesmo tempo, tão distante.</strong></p>
                        <p class="text-left pb-4">Nos distraímos na internet com coisas banais em busca de fugir da realidade que vivemos, e muitas vezes, a informação correta, de qualidade, que realmente tem o poder de MUDAR a sua vida ao invés de fugir dela, está bem debaixo do seu nariz.</strong></p>
                    </header>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                        </div>
                    </div>

                </div>
            </section><!-- #services -->


            <section id="about" style="padding-bottom: 25px">

                <div class="container pb-0">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="about-content text-center pt-0">
                                <h1>O FATO É O SEGUINTE,</h1>
                                <h3>A solução pra tudo isso não é fácil, mas apesar disso ela é simples.</h3>
                                <p>E esta ferramenta está aqui pra simplificar ainda mais, porque sabemos exatamente o caminho que você deve seguir, passo a passo, degrau por degrau, pra chegar onde quer que você queira chegar.</p>
                                <p>E como sabemos disso? Porque ela é uma das ferramentas mais utilizadas no mundo para ajudar<br>pessoas a terem a clareza necessária para atingir seus objetivos de vida.</p>
                                <p>Nesta ferramenta você vai começar sua jornada com clareza, muito bem guiado.<br>E o melhor, diretamente do seu computador ou celular, aonde quer que você esteja.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section><!-- #about -->

            <section id="services" class="section-bg" style="padding-bottom: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 pt-4">
                            <div class="about-content text-center pt-0">
                                <h2>VAMOS PARA O RESULTADO</h2>
                                <p>Área que pode estar travando você e que você precisa dar cuidadosa atenção:  <span style="font-size: 18px"><strong>{{$piores[0]['pilar']}}</strong></span>.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">

                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card mb-5 ">
                                <h5 class="card-header text-white bg-danger text-center">{{$piores[0]['pilar']}}</h5>
                                <div class="card-body">
                                    <h1 class="text-center mb-0">Média {{$piores[0]['nota']}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">

                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="about-content text-center pt-0">
                                <h2>Agora, você precisa focar em buscar novos conhecimentos</h2>
                                <p><strong>E para te poupar tempo, energia e recursos...</strong><br>selecionamos abaixo os melhores conteúdos online que te ensinarão COMO potencializar esta área da sua vida.</p>
                                <h4 style="color: #413e66">Então você vai potencializar uma área da sua vida, com os melhores conteúdos online e terá mais clareza para atingir seus objetivos. Tudo isso com um baixo investimento. </h4>
                                <p>Você sabe que você precisa eliminar aquilo que te trava e impede de viver a vida que você sempre sonhou. E esta ferramenta vai te ajudar. </p>
                                <p>E como acreditamos que você pode e vai realizar seus objetivos, vamos deixar em suas mãos essa oportunidade de virar o jogo e nunca mais se sentir perdido ou travado na sua jornada em busca de alcançar os seus objetivos.</p>
                                <h4 style="color: #413e66">92% das pessoas não alcançam os seus objetivos de vida.<br><br>Esta ferramenta vai te ajudar a fazer parte dos 8% que sonham e realizam.<br><br>O que será esse pequeno investimento comparado a tudo o que você já perdeu tentando alcançar sozinho os seus objetivos? Então, escolha AGORA um conteúdo online abaixo e comece a VIRADA da sua vida. Em breve você estará vivendo a vida que sempre sonhou.</h4>
                            </div>
                            <div class="card mt-2 mb-5">
                                <div class="card-body">
                                    <div class="row">
                                        @for($i=0;$i<3;$i++)
                                            <div class="col-md-4 col-lg-4 mt-3 mb-3">
                                                <img src="{{asset("images/".mb_strtolower($piores[0]['pilar'])."_".($i+1).".jpg")}}" lixo="{{rand()}}" class="card-img-top" alt="">
                                                <h5 class="card-title mt-2">{{$cursos[$piores[0]['pilar_id']][$i]['titulo']}}</h5>
                                                <p class="card-text">{{$cursos[$piores[0]['pilar_id']][$i]['descricao']}}</p>
                                                <a href="{{$cursos[$piores[0]['pilar_id']][$i]['link']}}" class="btn btn-danger btn-block btn-lg" target="_blank">QUERO ESTE</a>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-3"></div>
                        <div class="col-md-6 col-lg-6"><a href="{{route('sair')}}" class="btn btn-primary btn-lg btn-block mb-5">QUERO REFAZER O TESTE</a></div>
                        <div class="col-md-3 col-lg-3"></div>
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
                    &copy; Copyright <strong>Mapeando Minha Consciência</strong> - Alguns direitos reservados.
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

</body>
</html>
