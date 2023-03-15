<!doctype html>
<html lang="en">

<head>
  <title>Coba Coba</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @vite('resources/css/app.css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="#" class="flex items-center no-underline">
    <img src="https://i.ibb.co/wCsLsCg/Frame-1.png" class="h-12 mr-3 sm:h-16" alt="Flowbite Logo" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4  rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-xl text-amber-500 no-underline rounded hover:text-amber-400 md:bg-transparent md:text-amber-500 md:p-0 hover:text-black" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-xl text-gray-700 no-underline rounded hover:bg-gray-100 hover:text-amber-400 md:hover:bg-transparent md:border-0 md:p-0 ">Library</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-xl text-gray-700 no-underline rounded hover:bg-gray-100 hover:text-amber-400 md:hover:bg-transparent md:border-0 md:p-0 ">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-xl text-gray-700 no-underline rounded hover:bg-gray-100 hover:text-amber-400 md:hover:bg-transparent md:border-0 md:p-0 ">Blog</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-xl text-gray-700 no-underline rounded hover:bg-gray-100 hover:text-amber-400 md:hover:bg-transparent md:border-0 md:p-0 ">Contact</a>
        </li>
        <li>
            <a href="/login" class="no-underline">
                <button type="button" class="block text-white bg-amber-500 hover:bg-amber-400 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg px-5 py-2 text-center mr-2 mb-2 mt-1">Login</button>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="flex bg-white dark:bg-gray-900">
    <div class="flex items-center grid max-w-screen-xl pl-20 mx-auto lg:gap-8 xl:gap-0 lg:py-15 lg:grid-cols-12">
        <div class=" place-self-center lg:col-span-6 ">
            <h1 class="max-w-2xl mb-4    text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl ">Find your goals with knowladge!</h1>
            <hr>
            <p class="max-w-2xl mb-6 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Knowladge can lead us to success, find as much knowladge as possible at <span class="font-bold text-amber-500">Biblia.</span></p>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://i.ibb.co/L6n6ZC4/image-4.png" alt="mockup" class="h-96">
        </div>                
    </div>
</section>

<section class="bg-white ">
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-sm">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Testimonials</h2>
          <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl ">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
      </div> 
      <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500">
                  <h3 class="text-lg font-semibold text-gray-900">Speechless with how easy this was to integrate</h3>
                  <p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with how easy this was to integrate within my application. Most templates are a pain, code is scattered, and near impossible to theme.</p>
                  <p class="my-4">Flowbite has code in one place and I'm not joking when I say it took me a matter of minutes to copy the code, customise it and integrate within a Laravel + Vue application.</p>
                  <p class="my-4">If you care for your time, I hands down would go with this."</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                  <div class="space-y-0.5 font-medium text-left">
                      <div>Bonnie Green</div>
                      <div class="text-sm font-light text-gray-500">Developer at Open AI</div>
                  </div>
              </figcaption>    
          </figure>
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500">
                  <h3 class="text-lg font-semibold text-gray-900">Solid foundation for any project</h3>
                  <p class="my-4">"FlowBite provides a robust set of design tokens and components based on the popular Tailwind CSS framework. From the most used UI components like forms and navigation bars to the whole app screens designed both for desktop and mobile, this UI kit provides a solid foundation for any project.</p>
                  <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                  <div class="space-y-0.5 font-medium text-left">
                      <div>Roberta Casas</div>
                      <div class="text-sm font-light text-gray-500">Lead designer at Dropbox</div>
                  </div>
              </figcaption>    
          </figure>
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 lg:border-b-0 md:p-12 lg:border-r">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500">
                  <h3 class="text-lg font-semibold text-gray-900 ">Mindblowing workflow and variants</h3>
                  <p class="my-4">"As someone who mainly designs in the browser, I've been a casual user of Figma, but as soon as I saw and started playing with FlowBite my mind was 🤯.</p>
                  <p class="my-4">Everything is so well structured and simple to use (I've learnt so much about Figma by just using the toolkit).</p>
                  <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                  <div class="space-y-0.5 font-medium text-left">
                      <div>Jese Leos</div>
                      <div class="text-sm font-light text-gray-500">Software Engineer at Facebook</div>
                  </div>
              </figcaption>    
          </figure>
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-gray-200 md:p-12">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500">
                  <h3 class="text-lg font-semibold text-gray-900">Efficient Collaborating</h3>
                  <p class="my-4">"This is a very complex and beautiful set of elements. Under the hood it comes with the best things from 2 different worlds: Figma and Tailwind.</p>
                  <p class="my-4">You have many examples that can be used to create a fast prototype for your team."</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                  <div class="space-y-0.5 font-mediumtext-left"> 
                      <div>Joseph McFall</div>
                      <div class="text-sm font-light text-gray-500">CTO at Google</div>
                  </div>
              </figcaption>    
          </figure>
      </div>
</section>



<footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="no-underline hover:underline">Biblia™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="mr-4 no-underline hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="#" class="mr-4 no-underline hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>    
            <a href="#" class="mr-4 no-underline hover:underline md:mr-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="no-underline hover:underline">Contact</a>
        </li>
    </ul>
</footer>



<!-- <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-2 text-uppercase fw-bold d-none d-sm-inline mt-3 px-sm-5 text-warning">Biblia.</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="px-sm-5">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="d-none d-sm-inline text-white">Login</span>
                        </a>
                    </li>
                    <!-- <li class="px-sm-5">
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class=" d-none d-sm-inline text-white">Collections</span></a>
                    </li>
                    <li class="px-sm-5">
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">History</span></a>
                    </li>
                    <li class="px-sm-5">
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline text-white">Popular</span> </a>
                            <!-- <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul> -->
                    <!-- </li>
                    <li class="px-sm-5">
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">Genre</span> </a>
                    </li> -->
                <!-- </ul>
                <hr> -->
                <!-- <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> -->
            <!-- </div>
        </div>
        <div class="col py-3">
            <div class="login">
                <h3>Let's you sign in</h3>
                <p>Welcome To Our Page <a href="#">Sign Up</a></p>
                <div class="container">
                    <div class="row justify-contect-center align-items-center">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <form action="" class="form">
                                    <h3>Username</h3>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- </div> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script> --> 
</body>

</html>