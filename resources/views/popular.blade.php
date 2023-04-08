<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Biblia | Popular</title>
</head>

<body>

    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
            <a href="/home" class="flex items-center pl-2.5 mb-5" style="margin-top: 8px; margin-left: 4px; margin-bottom: 48px">
                <span class="items-center text-amber-500 self-center text-3xl font-bold whitespace-nowrap">BIBLIA.</span>
            </a>
            <ul class="space-y-2" style="margin-left: 4px;">
                <li>
                    <a href="/home" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-amber-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" id="IconChangeColor">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" id="mainIconPathAttribute" stroke-width="3.0"></path>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" id="mainIconPathAttribute"></path>
                        </svg>
                        <span class="ml-3">Home</span>
                    </a>
                </li>
                <li>
                    <a href="/collection" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-amber-300  hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16" id="IconChangeColor">
                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z" id="mainIconPathAttribute" stroke-width="3"></path>
                            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z" id="mainIconPathAttribute"></path>
                        </svg>
                        <span class="ml-3">My Collection</span>
                    </a>
                </li>
                <li>
                    <a href="/history" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-amber-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="IconChangeColor" height="25" width="25">
                            <path d="M16.4,3.3C12.5,1.1,7.7,1.8,4.6,4.8V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v4.5c0,0.6,0.4,1,1,1h4.5c0.6,0,1-0.4,1-1s-0.4-1-1-1H5.7C7.1,4.9,9.2,4,11.5,4c4.4,0,8,3.6,8,8s-3.6,8-8,8c-0.6,0-1,0.4-1,1s0.4,1,1,1c3.6,0,6.9-1.9,8.7-5C22.9,12.2,21.2,6.1,16.4,3.3z M11.4,8c-0.6,0-1,0.4-1,1v3c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1s-0.4-1-1-1h-1V9C12.4,8.4,12,8,11.4,8z" id="mainIconPathAttribute" stroke-width="3"></path>
                        </svg>
                        <span class="ml-3">History</span>
                    </a>
                </li>
                <li>
                    <a href="/popular" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-amber-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16" id="IconChangeColor">
                            <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" id="mainIconPathAttribute" stroke-width="3"></path>
                        </svg>
                        <span class="ml-3">Popular</span>
                    </a>
                </li>
                <li>
                    <a href="/genre" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-amber-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-3x2-gap" viewBox="0 0 16 16" id="IconChangeColor">
                            <path d="M4 4v2H2V4h2zm1 7V9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 5V9a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V4a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 4v2H7V4h2zm5 0h-2v2h2V4zM4 9v2H2V9h2zm5 0v2H7V9h2zm5 0v2h-2V9h2zm-3-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-2z" id="mainIconPathAttribute" stroke-width="3"></path>
                        </svg>
                        <span class="ml-3">Genre</span>
                    </a>
                </li>
            </ul>

            <ul class="space-y-2" style="margin-top: 140px; margin-left: 4px">
                <li>
                    <a href="/buku" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-amber-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16" id="IconChangeColor">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" id="mainIconPathAttribute" stroke-width="3"></path>
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" id="mainIconPathAttribute"></path>
                        </svg>
                        <span class="ml-3">Upload</span>
                    </a>
                </li>
                <li>
                    <a href="/logout" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-amber-300 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16" id="IconChangeColor">
                            <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" id="mainIconPathAttribute" stroke-width="3"></path>
                        </svg>
                        <span class="ml-3">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

            <form class="flex items-center">
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " required>
                    <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <img class="w-10 h-10 ml-5 rounded-full" src="https://cdn.carbuzz.com/gallery-images/840x560/601000/700/601756.jpg" alt="Rounded avatar">
            </form>

            <div class="mt-5 mb-5">
                <div>
                    <p class="font-bold text-2xl ml-2">New & Trending</p>
                </div>
            </div>

            <div class="flex h-90 grid grid-cols-2 mb-4">
                <div class="ml-3">
                    <a href="/home/popular/detail=1">
                        <img src="https://i.ibb.co/BZtYxGy/Group-22.png" alt="Trends" class="h-96">
                    </a>
                    <h2 class="text-lg mt-3 tracking-widest font-semibold text-gray-600">Action</h2>
                    <h2 class="text-2xl mt-2 font-bold">Monsters Go Bump</h2>
                    <h2 class="mt-3 font-semibold text-base">Menceritakan seorang perempuan yang mengalami <br> trauma pada masa kecilnya, ia dendam kepada orang <br> tuanya karena selalu menyiksannya saat kecil. Dengan <br> kecerdasnya, ia mampu menipu mereka tanpa salah <br> sedikitpun.</h2>
                </div>
                <div>
                    <div class="flex items-center h-28">
                        <div>
                            <img src="https://i.ibb.co/TvzdXhJ/Group-17.png" alt="" style="height: 85px">
                        </div>
                        <div class="ml-5">
                            <h2 class="font-bold text-xl">2</h>
                        </div>
                        <div class="mr-auto ml-5">
                            <h2 class="font-semibold text-base text-gray-600">Horror</h2>
                            <h2 class="font-bold text-lg">All I See Is You</h2>
                            <h2 class="font-semibold text-base text-gray-600">Blake Lively</h2>
                        </div>
                    </div>
                    <hr class="h-px bg-gray-200 border-0 bg-gray-500">
                    <div class="flex items-center h-28 mt-3">
                        <div>
                            <img src="https://i.ibb.co/mS4y1Bs/Group-19.png" alt="" style="height: 85px">
                        </div>
                        <div class="ml-5">
                            <h2 class="font-bold text-xl">3</h>
                        </div>
                        <div class="mr-auto ml-5">
                            <h2 class="font-semibold text-base text-gray-600">Action</h2>
                            <h2 class="font-bold text-lg">Glass</h2>
                            <h2 class="font-semibold text-base text-gray-600">Night Shyamalan</h2>
                        </div>
                    </div>
                    <hr class="h-px bg-gray-200 border-0 bg-gray-500">
                    <div class="flex items-center h-28 mt-3">
                        <div>
                            <img src="https://i.ibb.co/z2Z6pyf/Frame-40-1.png" alt="" style="height: 85px">
                        </div>
                        <div class="ml-5">
                            <h2 class="font-bold text-xl">4</h>
                        </div>
                        <div class="mr-auto ml-5">
                            <h2 class="font-semibold text-base text-gray-600">Horror</h2>
                            <h2 class="font-bold text-lg">Shortwave</h2>
                            <h2 class="font-semibold text-base text-gray-600">Juanitta Kingling</h2>
                        </div>
                    </div>
                    <hr class="h-px bg-gray-200 border-0 bg-gray-500">
                    <div class="flex items-center h-28 mt-3">
                        <div>
                            <img src="https://i.ibb.co/mS4y1Bs/Group-19.png" alt="" style="height: 85px">
                        </div>
                        <div class="ml-5">
                            <h2 class="font-bold text-xl">5</h>
                        </div>
                        <div class="mr-auto ml-5">
                            <h2 class="font-semibold text-base text-gray-600">Action</h2>
                            <h2 class="font-bold text-lg">Night Manager</h2>
                            <h2 class="font-semibold text-base text-gray-600">High Laurie</h2>
                        </div>
                    </div>
                    <hr class="h-px bg-gray-200 border-0 bg-gray-500">
                    <div class="flex items-center h-28 mt-3">
                        <div>
                            <img src="https://i.ibb.co/Dtb6G4g/Frame-40-2.png" alt="" style="height: 85px">
                        </div>
                        <div class="ml-5">
                            <h2 class="font-bold text-xl">6</h>
                        </div>
                        <div class="mr-auto ml-5">
                            <h2 class="font-semibold text-base text-gray-600">Action</h2>
                            <h2 class="font-bold text-lg">Titans</h2>
                            <h2 class="font-semibold text-base text-gray-600">Andrew Robinson</h2>
                        </div>
                    </div>
                    <hr class="h-px bg-gray-200 border-0 bg-gray-500">
                    <div class="flex items-center h-28 mt-3">
                        <div>
                            <img src="https://i.ibb.co/KFDWKKH/Group-23.png" alt="" style="height: 85px">
                        </div>
                        <div class="ml-5">
                            <h2 class="font-bold text-xl">7</h>
                        </div>
                        <div class="mr-auto ml-5">
                            <h2 class="font-semibold text-base text-gray-600">Action</h2>
                            <h2 class="font-bold text-lg">The Flash</h2>
                            <h2 class="font-semibold text-base text-gray-600">Joshua Willamson</h2>
                        </div>
                    </div>
                    <hr class="h-px bg-gray-200 border-0 bg-gray-500">
                </div>
            </div>

        </div>
    </div>

</body>

</html>