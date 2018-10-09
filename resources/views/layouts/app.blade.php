<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'OsmanMasum')}}</title>
<style>

.body {
    background-color: FCFAFA;
}
    
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;             
    margin-top: 80px;
    height:200px;
    width:200px;
    border:0;
    border-radius:50%
}

p.small {
    line-height: 0.9;
    font-weight: lighter;
    margin-top: 5px;
}

p.thicker {
    font-weight: lighter;
    
}

p.thiner{
    font-family: 'K2D', sans-serif;
    letter-spacing: px;
    word-spacing: px;
    padding-top: 15px;
    padding-bottom: -15px;
}

.links{
    padding: 30px;
}

.homelink {
    display: block;
    height: 15px;
    padding-left: 4px;
    padding-right: 0px;
    margin: -20px;
}

p.SecondLine{
    margin-top: 7px;
    padding-top: 20px;
    
    font-family: 'Bad Script', cursive;
}

.learninglist{
    align-content: center;
    margin-top: 50px;
    margin-left: 400px;
    margin-right: 300px;
}

.about{
    margin-top:100px;
    margin-left: 300px;
    margin-right: 300px;
    font-weight: 9000;
}

.planebody{
    margin-top: 20px;
    margin-left: 300px;
    margin-right: 300px;
    font-weight: 9000;
}





            
</style>

</head>                                         <!--until I Learn nmp, I can add css to 'app.css'
                                                    or in 'app.blade.php'. Though, both are not legal--> 
<body>
    @include('inc.navbar')
        @yield('content')
        <body bgcolor="#FCFAFA">
</body>
</html>
