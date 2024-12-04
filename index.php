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
          }
        }
      }
    }
  </script>
</head>
<body>
    <header class="flex border-b-[2px] border-brownDes bg-white sticky top-0">
        <div class="flex w-[10vw] border-r-[2px] border-brownDes"><div class="bg-brownDes h-[72px] w-[72px] my-auto mx-auto"></div></div>
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
        <section class="bg-blue-700 flex h-[932px] justify-items-center">
            <div class="block bg-blue-300">s</div>
        </section>
    </main>
</body>
</html>