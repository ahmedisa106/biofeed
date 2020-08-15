<link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/front')}}/img/favicon.png">

<link href="{{asset('/assets/front')}}/css/master.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/assets/front')}}/plugins/iview/css/iview.css" type='text/css' media='all' />
<link rel="stylesheet" href="{{asset('/assets/front')}}/plugins/iview/css/skin/style.css" type='text/css' media='all' />

    <style>

        .float{
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            left: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

    </style>

@if(app()->getLocale()=='ar')
    <link rel="stylesheet" href="{{asset('/assets/front/css/bootstrap-ar.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/front/css/style-ar.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6 ,li , a ,p ,span,button,input {
            font-family: 'Cairo', sans-serif !important;
        }

        .float{
            right: 40px;
        }


    </style>

@endif





