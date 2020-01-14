<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agora você sabe o que falta para alcançar os teus objetivos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <style type="text/css">
            body{
                background-color: #8dc2fa;
            }

            @media (min-width: 300px) and (max-width: 500px){
                h1{
                    font-size: 20px;
                    margin-bottom: 32px;
                }

                h2{
                    font-size: 17px;
                }

                h4{
                    font-size: 15px;
                }
            }

            @media (min-width: 550px) and (max-width: 850px){
                h1{
                    font-size: 30px;
                    margin-bottom: 32px;
                }

                h2{
                    font-size: 23px;
                }

                h4{
                    font-size: 17px;
                }
            }

            @media (min-width: 550px) and (max-width: 850px){

                h2{
                    font-size: 23px;
                }

                h4{
                    font-size: 17px;
                }
            }

            @media (min-width: 950px) and (max-width: 1100px){

                h1{
                    margin-bottom: 32px;
                }

                h2{
                    font-size: 30px;
                }

                h4{
                    font-size: 22px;
                }
            }

            @media (min-width: 1200px){

                h1{
                    margin-bottom: 32px;
                }

            }

            .subtitle-light-gray{
                color: #fff;
            }
            
            .title-white{
                color: #040e66;
            }
        </style>
    </head>
<body>

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
        fbq('init', '215027232725571');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=215027232725571&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <script>
        fbq('track', 'CompleteRegistration');
    </script>

<div class="container">
    <h1 class="title-white text-center">ASSISTA AO <strong>FEEDBACK PERSONALIZADO</strong> SOBRE O SEU RESULTADO PARA ENTENDER O GRÁFICO ABAIXO</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-6 bg-white pt-3 pb-3">
            <canvas id="myChart" width="400" height="215"></canvas>
        </div>
        <div class="col-md-12 col-lg-6 pt-2 pb-2" style="background: #fff">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HPe8Tbp6nes" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col-md-12 col-lg-12"><h2 class="title-white text-center mt-3 mb-4"><strong>OLHANDO PARA A RODA DA SUA VIDA HOJE,<br>SINCERAMENTE, ELA ESTÁ RODANDO?</strong><br><br>Abaixo listamos os MELHORES PRODUTOS DIGITAIS<br>para as 3 (três) ÁREAS da sua vida que precisam de MAIS ATENÇÃO.</h2></div>
    </div>
</div>

<div class="container p-5 mb-5" style="background: #f5f5f5">
    <div class="row">
        <div class="col-md-6 col-lg-6 embed-responsive"><img src="{{asset('images/you-result.jpg')}}" class="img-fluid" alt=""></div>
        <div class="col-md-6 col-lg-6 pl-5">
            <h2 class="title-white text-left mt-3 mb-4">Agora é com você! Você pode:</h2>
            <h4 class="subtitle-light-gray text-left" style="color: #666;">1. IGNORAR os CONTEÚDOS abaixo e continuar INFELIZ.<br><br>2. TENTAR atingir a felicidade sem os CONTEÚDOS, te fazendo PERDER TEMPO E DINHEIRO.<br><br>3. INVESTIR em conteúdo(s) e conhecer o caminho MAIS RÁPIDO e MELHOR para viver a FELICIDADE.</h4>
        </div>
    </div>
</div>
<div class="container-fluid">
    {{--<div class="row">--}}
    @foreach($piores as $pior)
        {{--<div class="col-md-12 col-lg-4">--}}
            <div class="card mt-2 mb-5">
                <h4 class="card-header text-center"><strong>{{($loop->index)+1}} - {{mb_strtoupper($pior['pilar'])}}</strong></h4>
                <div class="card-body">
                    <div class="row">
                        @for($i=0;$i<3;$i++)
                            <div class="col-md-4 col-lg-4 mt-3 mb-3">
                                <img src="{{asset("images/".mb_strtolower($pior['pilar'])."_".($i+1).".jpg")}}" lixo="{{rand()}}" class="card-img-top" alt="">
                                {{--<img src="https://1.bp.blogspot.com/-04iT_bsPUxE/Wsa5Inudu2I/AAAAAAAAAPs/2UsNtx6EUg4wcXtjH87FLBGycQ-DU7EcQCLcBGAs/s1600/Cursos%2BOnline%2BPreparat%25C3%25B3rio%2Bpara%2BConcurso%2BBASA.jpg" class="card-img-top" alt="">--}}
                                <h5 class="card-title mt-2">{{$cursos[$pior['pilar_id']][$i]['titulo']}}</h5>
                                <p class="card-text">{{$cursos[$pior['pilar_id']][$i]['descricao']}}</p>
                                <a href="{{$cursos[$pior['pilar_id']][$i]['link']}}" class="btn btn-danger btn-block btn-lg" target="_blank">QUERO ESTE</a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        {{--</div>--}}
    @endforeach
    {{--</div>--}}

    {{--<div class="jumbotron">--}}
        {{--<h1 class="display-4 text-center">Você ganhou um super bônus!</h1>--}}
        {{--<p class="lead text-center">O método SOU AUTÊNTICO tem ajudado milhares de pessoas a conectarem-se com a sua essência e viverem o seu propósito.</p>--}}
        {{--<hr class="my-4">--}}
        {{--<p class="text-center">Não perca tempo! Aproveite esta oferta, GRATUITAMENTE, por tempo LIMITADO.</p>--}}
        {{--<a class="btn btn-block btn-primary btn-lg" href="#" role="button">QUERO SER AUTÊNTICO</a>--}}
    {{--</div>--}}

        <div class="row">
            <div class="col-md-3 col-lg-3"></div>
            <div class="col-md-6 col-lg-6"><a href="{{route('sair')}}" class="btn btn-success btn-lg btn-block mb-5">QUERO REFAZER O TESTE</a></div>
            <div class="col-md-3 col-lg-3"></div>
        </div>
</div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

    <script type="text/javascript">
        var ctx = document.getElementById('myChart');
        var myRadarChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['Espiritual', 'Familiar', 'Saúde', 'Financeiro', 'Profissional', 'Intelectual', 'Relacionamentos', 'Social'],
                datasets: [{
                    data: {{$resultado}},
                    label: 'Minha Vida',
                    borderColor: '#FF5733',
                    lineTension: 0.1
                }]
            },
            options: {
                scale: {
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 10
                    }
                }
            }
        });
    </script>
</body>
</html>
