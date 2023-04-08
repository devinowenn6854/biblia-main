<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Biblia | Home Page</title>
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
            <div class="mt-3" style="margin-left: 10px">
                <a href="/buku" type="text" class="text-decoration-none link-dark" style="margin-top: 1900px; font-size: 18px;">
                    <p>Back</p>
                </a>
            </div>
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-20">
                        <div class="card mb-5">
                            <div class="card-body ">
                                <form action="/insertdata" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="judul" class="form-control" id="judul" name="judul">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pengarang" class="form-label">Pengarang</label>
                                        <input type="pengarang" class="form-control" id="pengarang" name="pengarang">
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit</label>
                                        <input type="penerbit" class="form-control" id="penerbit" name="penerbit">
                                    </div>
                                    <div class="mb-3">
                                        <label for="genre" class="form-label">Genre</label>
                                        <select class="form-select" aria-label="Default select example" id="genre" name="genre">
                                            <option value="Romantis">Romantis</option>
                                            <option value="Horror">Horror</option>
                                            <option value="Action">Action</option>
                                            <option value="Sejarah">Sejarah</option>
                                            <option value="Komedi" selected>Komedi</option>
                                            <option value="Drama">Drama</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="des" class="form-label">Deskripsi</label>
                                        <input type="des" class="form-control" id="des" name="des">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cover" class="form-label">Cover</label>
                                        <input type="file" class="form-control" id="cover" name="cover">
                                    </div>
                                    <div class="mb-3">
                                        <label for="isi" class="form-label">Isi Buku</label>
                                        <input type="file" class="form-control" id="isi" name="isi">
                                    </div>
                                    <input type="hidden" class="form-control" id="ket" name="ket" value="no">
                                    <button type="submit" class="btn btn-primary text-black mt-3">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>