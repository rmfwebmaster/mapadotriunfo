<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="refresh" content="4; URL='{{ $link }}'"/>

    <title>Redirecionando</title>

    <style type="text/css">
        html, body {
            height: 100%;
            min-height: 100%;
        }

        body {
            font: 15px arial;
            color: rgba(0, 0, 0, .7);
        }

        .wrapper {
            height: 100%;
            min-height: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .wrapper div {
            padding: 40px;
            border: 1px solid rgba(0, 0, 0, .3)
        }
    </style>

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
        fbq('track', 'AddToWishlist');
    </script>

    <div class="wrapper">
        <div>
            Por favor, aguarde ...
        </div>
    </div>
</body>
</html>