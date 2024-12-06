<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brownDes: '#BF9874',
            blueDes: '#001025',
          }
        }
      }
    }
  </script>
</head>
<body>
    <header class="flex border-b-[2px] border-brownDes bg-white sticky top-0 z-50">
        <div class="flex w-[8vw] border-r-[2px] border-brownDes"><div class="bg-brownDes h-[72px] w-[72px] my-auto mx-auto"></div></div>
        <div class="w-full">
            <div class="flex py-3 px-5 border-b-[2px] border-brownDes justify-between">
                <div class="gap-8 flex justify-between">
                    <span class="flex gap-3 items-center">
                        <div class="h-4 w-4 bg-brownDes"></div>
                        +7 (914) 291 78 01
                    </span>
                    <span class="flex gap-3 items-center">
                        <div class="h-4 w-4 bg-brownDes"></div>
                        +7 (914) 291 78 01
                    </span>
                </div>
                <div class="flex gap-5 justify-between text-brownDes">
                    <span class="flex items-center">
                        RU
                    </span>
                    <span class="flex items-center">
                        EN 
                    </span>
                    <span class="flex items-center">
                        FR
                    </span>
                </div>
            </div>
            <div class="flex py-3 px-5 justify-between">
                <div class="gap-8 flex justify-between">
                    <span class="flex gap-3 items-center">
                        <div class="flex items-center">
                            <div class="rotate-45 bg-brownDes h-2 w-2"></div>
                            <div class="bg-brownDes h-[2px] w-7"></div>
                        </div>
                        HOME   
                    </span>
                    <span class="flex gap-3 items-center">
                        <div class="h-2 w-2 bg-black rotate-45"></div>
                        NOT_HOME 
                    </span>
                </div>
                <div class="flex gap-5 justify-between font-bold">
                    <button class="py-4 px-8 border-2 border-black">FREE CONSULTATION</button>
                </div>
            </div>

        </div>
    </header>
    <main>
        <section class="flex h-[calc(100vh-136px)] justify-center bg-[url('img/banner1.png')]">
            <div class="w-[1440px] flex relative">
                <div class="w-1/2 h-full flex items-center">
                    <div class="flex flex-col gap-y-40 relative"> <!-- Добавлено "relative" -->
                        <div class="flex flex-col gap-y-5">
                            <h3 class="text-brownDes text-2xl font-semibold">HOME OF LAW & ORDER</h3>
                            <!-- Добавлено "relative" для контейнера и отрицательный отступ для текста -->
                            <h1 class="text-white text-7xl font-bold whitespace-nowrap z-50">EXPERTS OF JUSTICE</h1>
                            <p class="text-lg text-white w-3/4">Diam leo vitae tortor mauris faucibus odio nullam enim. At dolor pellentesque eget et purus. Purus mauris eget maecenas placerat vehicula tortor massa.</p>
                        </div>
                        <div>
                            <button class="py-4 px-8 bg-brownDes text-white font-semibold text-lg">FIND OUR MORE</button>
                        </div>
                    </div>
                </div>
                <div class=" w-[49vw] h-full flex items-end absolute right-0 z-10">
                    <div class=" bg-[url('img/white.png')] w-full h-[40%] flex justify-center">
                        <div class="bg-[url('img/iphone.png')] w-1/2 bg-no-repeat bg-contain bg-center h-[66vh] mt-auto z-10 absolute bottom-0"></div>
                    </div>
                </div>
            </div>
            
        </section>
        <section class="flex h-[calc(100vh-136px)] justify-center bg-[url('img/banner1.png')]">
            <div class="w-[1440px] flex ">
                <div class="w-1/2 h-full flex items-center">
                    <div class="flex flex-col gap-y-40 relative"> <!-- Добавлено "relative" -->
                        <div class="flex flex-col gap-y-5">
                            <h3 class="text-brownDes text-2xl font-semibold">HOME OF LAW & ORDER</h3>
                            <!-- Добавлено "relative" для контейнера и отрицательный отступ для текста -->
                            <h1 class="text-white text-7xl font-bold whitespace-nowrap z-50">EXPERTS OF JUSTICE</h1>
                            <p class="text-lg text-white w-3/4">Diam leo vitae tortor mauris faucibus odio nullam enim. At dolor pellentesque eget et purus. Purus mauris eget maecenas placerat vehicula tortor massa.</p>
                        </div>
                        <div>
                            <button class="py-4 px-8 bg-brownDes text-white font-semibold text-lg">FIND OUR MORE</button>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 h-full flex items-center justify-end">
                    <div class="bg-[url('img/iphone.png')] w-1/2 bg-no-repeat bg-contain bg-center h-[66vh] z-10 "></div>
                </div>
            </div>
        </section>
        <section class="flex h-[196px] justify-center bg-blue-100">
            <div class="w-[1440px] flex justify-between items-center">
                <div class="flex gap-x-8 items-center">
                    <img src="img/icon1.png" alt="1">
                    <div class="">
                        <h3 class="text-2xl text-blueDes font-semibold">BEST LAW FIRM</h3>
                        <p class="text-lg text-gray-600">45 Years of Experience</p>
                    </div>
                </div>
                <div class="flex gap-x-8 items-center">
                    <img src="img/icon1.png" alt="1">
                    <div class="">
                        <h3 class="text-2xl text-blueDes font-semibold">BEST LAW FIRM</h3>
                        <p class="text-lg text-gray-600">45 Years of Experience</p>
                    </div>
                </div>
                <div class="flex gap-x-8 items-center">
                    <img src="img/icon1.png" alt="1">
                    <div class="">
                        <h3 class="text-2xl text-blueDes font-semibold">BEST LAW FIRM</h3>
                        <p class="text-lg text-gray-600">45 Years of Experience</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>