<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-[#0e1626]">
        <x-navbar/>
        <div class="flex text-white">
            <x-sidebar-admin/>
            @yield('gestion')
        </div>
    </body>
</html>