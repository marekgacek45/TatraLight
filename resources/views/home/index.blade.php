<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TatraLight</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="relative overflow-x-hidden">
   <!--NAVIGATION -->
   <x-navigation.topBar />
  
   <x-navigation.collapse/>
   <!--HEADER -->
   @include('home.partials.header')


 <main>
  @include('home.partials.about')
</main>

<x-footer/>
</body>
</html>