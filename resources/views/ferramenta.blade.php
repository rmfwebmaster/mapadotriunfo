<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MAPEANDO MINHA CONSCIÊNCIA - Esta ferramento vai mudar a sua vida</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style type="text/css">
        body{
            background-color: #8dc2fa;
            padding-top: 35px;
        }

        @media (min-width: 300px) and (max-width: 500px){
            .display-4{
                font-size: 25px;
                margin-bottom: 20px;
            }

            .lead{
                font-size: 15px;
            }
        }

        @media (min-width: 550px) and (max-width: 850px){
            .display-4{
                font-size: 28px;
                margin-bottom: 22px;
            }
        }

        @media (min-width: 950px) and (max-width: 1100px){

            .display-4{
                margin-bottom: 32px;
            }

        }

        @media (min-width: 1200px){

            .display-4{
                margin-bottom: 32px;
            }
        }

        input{
            font-size: 15px !important;
        }

        .jumbotron{
            padding-top: 35px;
            padding-bottom: 35px;
            background: #f5f8fd;
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
    fbq('track', 'Lead');
</script>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4 text-center"><strong>Como Fazer o Teste?</strong></h1>
        <p class="lead mb-4">Responda as perguntas abaixo dando notas de 0 (zero) a 10 (dez) para cada uma. Quanto mais sinceridade você usar para responder a essa ferramenta, maior clareza terá para iniciar as melhorias e as mudanças. Após o teste te darei um Feedback personalizado em vídeo, falando sobre o seu resultado. A porta para a sua FELICIDADE pode estar neste teste.</p>

        <form name="form-aplicacao" method="POST" action="{{route('ferramenta.store')}}">
            @csrf

            <div class="card mb-5">
                <h5 class="card-header">Dados Pessoais</h5>
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
            @foreach($pilares as $pilar)

                <div class="card mt-5 mb-5">
                    <h5 class="card-header">Sobre o (a) {{$pilar['pilar']}}</h5>
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
            <button type="submit" class="btn btn-primary btn-lg btn-block">VER O RESULTADO</button>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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