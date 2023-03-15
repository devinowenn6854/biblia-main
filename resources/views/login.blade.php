<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Biblia | Login</title>
</head>
<body>
<section class="bg-gray-50 min-h-screen flex items-center justify-center">
  <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl max-h-3xl p-5 items-center">

    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="/images/login3.jpg">
    </div>

    <div class="md:w-1/2 px-8 md:px-12">
      <h2 class="text-center font-bold text-2xl text-black">Login</h2>
      <p class="text-center text-xs mt-4 text-black">Please fill your username and password to login.</p>
      <form action="" class="flex flex-col gap-4">
        <input class="p-2 mt-8 rounded-xl border" type="email" name="email" placeholder="Username">

        <div class="relative">
          <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Password">
        </div>

        <div>
            <p class="text-sm font-bold">Forget the password ?</p>
        </div>

        <button class="bg-amber-400 rounded-xl text-white py-2 hover:scale-105 duration-300">Log In</button>
      </form>

      <div class="mt-3 text-xs flex justify-between items-center text-black">
        <p>Don't have an account?</p>
        <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">Register</button>
      </div>

    </div>
  </div>
</section>
</body>
</html>