<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Movies | </title>
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"/> --}}
</head>

<body>
    @vite('/resources/css/app.css')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Delete Akun</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('account.delete')}}" method="POST">
                @csrf
                @method('DELETE')
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Masukan password</label>
                    <input type="password" name="password" id="password" placeholder="Masukan Password" class="w-full rounded-md border border-gray-300 px-3 py-2 mt-1 focus:outline-none focus:ring focus:border-indigo-300" required>
                </div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Hapus
                    Akun</button>
            </form>
        </div>
    </div>
</body>

</html>
