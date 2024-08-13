<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/auth/login.css')
</head>

<body>
    <main class="flex w-full h-screen">
        <div class="flex items-center justify-center w-full h-full text-[#adb5bd]">
            <div
                class="w-full h-full max-h-[500px] px-[5px] py-[5px] pb-[6px] flex justify-center items-center flex-col">
                <form action=""
                    class="w-full h-full max-w-[500px] min-h-[500px] bg-[#fff] umm-formulario flex flex-col">
                    <nav class="flex w-full " id="navegacion">
                        <button class="w-full umm-font-size-responsive p-[10px] text-center bg-[#fff] outline-none">
                            Inicio de Sesión
                        </button>
                        <button class="w-full umm-font-size-responsive p-[10px] text-center bg-[#f8f9fa] outline-none">
                            Inicio de Sesión con Office365
                        </button>
                    </nav>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
