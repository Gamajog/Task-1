<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <script src="/js/search.js" defer></script> --}}
    <script src="/js/dummy.js" defer></script>
    <title>Document</title>
</head>

<body class="h-full">

    <div class="min-h-full">
        <x-navbar></x-navbar>

        <x-Header></x-Header>

        <main>

            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3" data-user-cards-container id="cards-container">



                    {{-- <template data-template>
                        <article
                            class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#"
                                    data-name></a></h2> --}}


                            {{-- <p class="mb-5 font-light text-gray-500 dark:text-gray-400 line-clamp-3" data-email>
                            </p> --}}

                            {{-- <div class="flex justify-around">
                                <x-edit></x-edit>

                                <x-delete></x-delete>
                            </div> --}}

                        {{-- </article>
                    </template> --}}

                </div>

            </div>


        </main>
    </div>


</body>


</html>