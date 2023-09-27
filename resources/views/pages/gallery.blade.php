<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    /> --}}
</head>

<body class="bgi--gradient">
    <!--NAVIGATION -->
    <x-navigation.topBar />
    <!--NAVIGATION -->
    <main class="pt-40 pb-20 max-w-screen-2xl mx-auto ">


      



<div class="grid-wrapper" >

    
    @php
    $availableClasses = ['tall', 'wide', 'big',""];
@endphp

@foreach (File::files(public_path('assets/Nowy folder')) as $image)
    @php
        $randomClass = $availableClasses[array_rand($availableClasses)];
    @endphp

    <a href="{{ asset('assets/Nowy folder/' . $image->getFilename()) }}" data-fancybox="gallery" class="{{ $randomClass }}">
        <img src="{{ asset('assets/Nowy folder/' . $image->getFilename()) }}" alt="Obraz" loading="lazy">
    </a>
@endforeach



</div>




        {{-- <div class="grid-wrapper">
            
                <a class="wide" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery" > <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
            
                <a href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
           
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
           
                <a href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
           
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
           
                <a href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
           
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
           
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a class="tall" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
           
                <a class="big" href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
                <a href="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    data-fancybox="gallery"> <img
                        src="https://images.unsplash.com/photo-1545164415-0fae860defbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt=""></a>
            
        </div>
        <div class="flex items-center justify-center w-56 h-56   mx-auto">
            <div role="status">
                <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
    </main>
    <x-footer />

  
</body>

</html>
