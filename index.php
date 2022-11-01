<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Churrasqueria El Buen Asador</title>
  <!-- Tailwind -->
  <link rel="stylesheet" href="css/tailwind.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
    integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header aria-label="Site Header" style="background-color: black;">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="md:flex md:items-center md:gap-12">
          <a class="block text-teal-600" href="/">
            <span class="sr-only">Home</span>

            <img src="/img/logo2.png" height="45" width="90" alt="">

          </a>
        </div>

        <div class="hidden md:block">
          <nav aria-label="Site Nav">
            <ul class="flex items-center gap-6 text-sm">
              <li>
                <a class="text-yellow-700 font-bold transition hover:text-gray-500/75" href="index.html">
                  INICIO
                </a>
              </li>

              <li>
                <a class="text-yellow-700 font-bold transition hover:text-gray-500/75" href="contactos.html">
                  CONTACTOS
                </a>
              </li>

            </ul>
          </nav>
        </div>

        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <a class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow" href="/">
              Login
            </a>

            <div class="hidden sm:flex">
              <a class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" href="/">
                Registro
              </a>
            </div>
          </div>

          <div class="block md:hidden">
            <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Slider main container -->
  <div class="swiper w-full mb-6">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper h-screen">
      <!-- Slides -->
      <div class="swiper-slide"><img class="object-cover object-center w-full" src="/img/1.JPG" alt=""
          style="height: 500px"></div>
      <div class="swiper-slide"><img class="object-cover object-center w-full" style="height: 500px" src="/img/2.JPG"
          alt=""></div>
      <div class="swiper-slide"><img class="object-cover object-center w-full" style="height: 500px" src="/img/3.JPG"
          alt=""></div>

      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
  <!-- Menu -->
  <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-center"
    style="background-color: black;">
    <img class="mr-3 h-24 w-60" src="img/logo2.png" alt="">
    <span class="text-3xl font-bold text-white">NUESTRO MENÚ</span>
  </div>
  <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8 grid lg:grid-cols-3 gap-6">
    <!-- Producto 1 -->
    <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 bg-gray-200">
      <img alt="Home" src="img/menu/1.JPEG" class="h-56 w-full rounded-md object-cover" />

      <div class="mt-2">
        <dl>
          <div>
            <dt class="sr-only">Price</dt>

          </div>

          <div>
            <dt class="sr-only">Address</dt>

            <dd class="font-medium">Lomo Asado a la Parrilla</dd>
          </div>
        </dl>

        <div class="mt-6 flex items-center gap-8 text-xs">
          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-money-bill-alt text-blue-600 animate-bounce text-xl"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Precio</p>

              <p class="font-medium">Bs. 30</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-utensils text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Papas Fritas</p>

              <p class="font-medium">1 Porción</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-wine-bottle text-xl text-blue-600  animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Gaseosas</p>

              <p class="font-medium">Coca Cola 1Lt</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <!-- Producto 2 -->
    <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 bg-gray-200">
      <img alt="Home" src="img/menu/2.JPEG" class="h-56 w-full rounded-md object-cover" />

      <div class="mt-2">
        <dl>
          <div>
            <dt class="sr-only">Price</dt>

          </div>

          <div>
            <dt class="sr-only">Address</dt>

            <dd class="font-medium">Chorizo de Cerdo</dd>
          </div>
        </dl>

        <div class="mt-6 flex items-center gap-8 text-xs">
          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-money-bill-alt text-blue-600 animate-bounce text-xl"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Precio</p>

              <p class="font-medium">Bs. 50</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-utensils text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Papas Fritas</p>

              <p class="font-medium">2 Porciones</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-wine-bottle text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Gaseosa</p>

              <p class="font-medium">Coca Cola 1Lt</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <!-- Producto 3 -->
    <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 bg-gray-200">
      <img alt="Home" src="img/menu/3.JPEG" class="h-56 w-full rounded-md object-cover" />

      <div class="mt-2">
        <dl>
          <div>
            <dt class="sr-only">Price</dt>

          </div>

          <div>
            <dt class="sr-only">Address</dt>

            <dd class="font-medium">Churrasco</dd>
          </div>
        </dl>

        <div class="mt-6 flex items-center gap-8 text-xs">
          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-money-bill-alt text-blue-600 animate-bounce text-xl"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Precio</p>

              <p class="font-medium">Bs. 50</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-utensils text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Papas Fritas</p>

              <p class="font-medium">2 Porciones</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-wine-bottle text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Gaseosa</p>

              <p class="font-medium">Coca Cola 1Lt</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    <!-- Producto 4 -->
    <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 bg-gray-200">
      <img alt="Home" src="img/menu/4.JPEG" class="h-56 w-full rounded-md object-cover" />

      <div class="mt-2">
        <dl>
          <div>
            <dt class="sr-only">Price</dt>

          </div>

          <div>
            <dt class="sr-only">Address</dt>

            <dd class="font-medium">Churrasco</dd>
          </div>
        </dl>

        <div class="mt-6 flex items-center gap-8 text-xs">
          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-money-bill-alt text-blue-600 animate-bounce text-xl"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Precio</p>

              <p class="font-medium">Bs. 55</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-utensils text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Papas Fritas</p>

              <p class="font-medium">2 Porciones</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-wine-bottle text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Gaseosa</p>

              <p class="font-medium">Coca Cola 1Lt</p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- Producto 5 -->
    <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 bg-gray-200">
      <img alt="Home" src="img/menu/5.JPEG" class="h-56 w-full rounded-md object-cover" />

      <div class="mt-2">
        <dl>
          <div>
            <dt class="sr-only">Price</dt>

          </div>

          <div>
            <dt class="sr-only">Address</dt>

            <dd class="font-medium">Ensalada Vegetariana</dd>
          </div>
        </dl>

        <div class="mt-6 flex items-center gap-8 text-xs">
          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-money-bill-alt text-blue-600 animate-bounce text-xl"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Precio</p>

              <p class="font-medium">Bs. 15</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-utensils text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Papas Fritas</p>

              <p class="font-medium">1 Porcion</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-wine-bottle text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Gaseosa</p>

              <p class="font-medium">Coca Cola 1Lt</p>
            </div>
          </div>
        </div>
      </div>
    </a>

    <!-- Producto 6 -->
    <a href="#" class="block rounded-lg p-4 shadow-sm shadow-indigo-100 bg-gray-200">
      <img alt="Home" src="img/menu/6.JPEG" class="h-56 w-full rounded-md object-cover" />

      <div class="mt-2">
        <dl>
          <div>
            <dt class="sr-only">Price</dt>

          </div>

          <div>
            <dt class="sr-only">Address</dt>

            <dd class="font-medium">Churrasco tres porciones</dd>
          </div>
        </dl>

        <div class="mt-6 flex items-center gap-8 text-xs">
          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-money-bill-alt text-blue-600 animate-bounce text-xl"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Precio</p>

              <p class="font-medium">Bs. 139</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-utensils text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Papas Fritas</p>

              <p class="font-medium">3 Porciones</p>
            </div>
          </div>

          <div class="sm:inline-flex sm:shrink-0 sm:items-center">
            <i class="fas fa-wine-bottle text-xl text-blue-600 animate-bounce"></i>
            <div class="mt-1.5 sm:ml-3 sm:mt-0">
              <p class="text-gray-500">Gaseosa</p>

              <p class="font-medium">Coca Cola 2.5 Lt</p>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
    <section class="mb-12 text-gray-800 py-4">
      <style>
        .map-container-2 {
          height: 400px;
        }
      </style>
      <div class="block rounded-lg shadow-lg bg-gray-900">
        <div class="flex flex-wrap items-center">
          <div class="grow-0 shrink-0 basis-auto block w-full lg:flex lg:w-6/12 xl:w-4/12">
            <div class="map-container-2 w-full">
              <img class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                src="img/logo_madera.jpg" alt="">
            </div>
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
            <div class="text-center p-1.5"><span class=" font-bold text-white text-2xl">EL BUEN ASADOR</span></div>
            <div class="text-center p-1.5"><span class=" font-bold text-white text-xl">CHURRASQUERIA</span></div>
            <div class="flex flex-wrap pt-12 lg:pt-0">
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-3 bg-blue-600 rounded-md shadow-md w-10 h-10 flex items-center justify-center">
                      <i class="fas fa-utensils text-white text-xl animate-bounce"></i>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white text-xl pt-6">PARRILLADAS COMPLETAS</span>
                  </div>
                </div>
              </div>


              <div
                class="mb-12 lg:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-3 bg-blue-600 rounded-md shadow-md w-10 h-10 flex items-center justify-center">
                      <i class="fas fa-hamburger text-white text-xl animate-bounce"></i>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white text-xl pt-6">OTROS PLATOS</span>
                  </div>
                </div>
              </div>



              <div class="mb-6 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                <div class="items-start">
                  <div class="grow ml-6">
                    <span class="font-bold text-white">PERSONAL .............. 80 BS.</span>

                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white">BI PERSONAL .......... 130 BS.</span>

                  </div>

                  <div class="grow ml-6">
                    <span class="font-bold text-white">PARA TRES ........... 190 BS.</span>

                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white">PORCIONES</span>

                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white">PAPA - ARROZ - ENSALADA</span>

                  </div>

                </div>
              </div>

              <div class="mb-6 grow-0 shrink-0 basis-auto w-full md:w-6/12 lg:w-full xl:w-6/12 px-3 md:px-6 xl:px-12">
                <div class="items-start">
                  <div class="grow ml-6">
                    <span class="font-bold text-white">BIFE .................. 65 BS.</span>

                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white">ASADO DE TIRA .......... 60 BS.</span>

                  </div>

                  <div class="grow ml-6">
                    <span class="font-bold text-white">ASADO DE S ........... 55 BS.</span>

                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white">MEDIO BIFE ........... 45 BS.</span>

                  </div>
                  <div class="grow ml-6">
                    <span class="font-bold text-white">LECHÓN ............. 50 BS.</span>

                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-center"
    style="background-color: black;">
    <img class="mr-3 h-24 w-60" src="img/logo2.png" alt="">
    <div>
      <li class="text-3xl font-bold text-white">INTEGRANTES</li>
      <li class="text-2xl font-bold text-white">Jhoecy Adriana Villamil Cerezo</li>
      <li class="text-2xl font-bold text-white">Anahí Marlene Lima Villca</li>
    </div>
  </div>

  <!--Fin Menu -->
  <footer class="bg-gray-100 text-center lg:text-left ">
    <div class="container p-6 ">
      <div class="grid lg:grid-cols-3 md:grid-cols-1">
        <div class="mb-6">
          <h5 class="capitalize font-bold mb-2.5 text-blue-600 text-xl">Dirección</h5>

          <ul class="list-none mb-0">
            <li>
              <p class="font-bold uppercase mb-2"><i class="fas fa-map-marker-alt"></i> CHURRASQUERIA</p>
            </li>
            <li>
              <p class="font-semibold mb-2">C. Héroes del Arce Esquina, La Paz</p>
            </li>
            <li>
              <p class="font-semibold">La Paz - Bolivia</p>
            </li>

          </ul>
        </div>

        <div class="mb-6">
          <h5 class="capitalize font-bold mb-2.5 text-blue-600 text-xl">Contactos</h5>
          <ul class="list-none mb-0">
            <li>
              <p class="mb-2"><span class="font-semibold"><i class="fas fa-envelope"></i>
                  Email:</span> churrasqueria@gmail.com</p>
            </li>
            <li>
              <p class="mb-2"><span class="font-semibold"><i class="fas fa-phone"></i>
                  Telefono:</span> 72081710</p>
            </li>
            <li>
              <p class="mb-2"><span class="font-semibold"><i class="fas fa-utensils"></i> Horario:</span>
                Lunes a Sábado Hrs.:12:00 a 22:00</p>
            </li>

          </ul>

        </div>

        <div class="mb-6">
          <h5 class="capitalize font-bold mb-2.5 text-blue-600 text-xl">Síguenos</h5>

          <ul class="list-none mb-0">
            <li class="py-1.5">
              <a href="https://www.facebook.com/profile.php?id=100063154275418" class="text-gray-800 font-semibold"><i
                  class="text-blue-600 fab fa-facebook-square text-2xl"></i> Facebook</a>
            </li>
            <li class="py-1.5">
              <a href="https://wa.link/fr4kxa" class="text-gray-800 font-semibold"><i class="fab fa-whatsapp text-2xl text-green-600"></i>
                Whatsapp</a>
            </li>
            <li class="py-1.5">
              <a href="#!" class="text-gray-800 font-semibold"><i class="text-red-600 fab fa-youtube text-2xl"></i>
                Youtube</a>
            </li>
          </ul>
        </div>

      </div>
    </div>

    <div class="text-white text-center p-4" style="background-color: black;">
      © 2022 Copyright
      <a class="text-white" href="#"> Jhoecy & Anahi</a>
    </div>
  </footer>

  <script>
    const swiper = new Swiper('.swiper', {
      speed: 400,
      spaceBetween: 100,
      autoplay: {
        delay: 3000,
      },

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  </script>
</body>

</html>
