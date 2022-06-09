<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('global.head')
    </head>
    <body class="antialiased">
        @include('global.header')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 color-white">
                <div class="row">
                    <div class="col-auto">Id: </div>
                    <div class="col-auto">{{Auth::user()->id}}</></div>
                </div>
                <div class="row">
                    <div class="col-auto">Name:</div>
                    <div class="col-auto">{{Auth::user()->name}}</div>
                </div>
                <div class="row">
                    <div class="col-auto">Email:</div>
                    <div class="col-auto"> {{Auth::user()->email}}</div>
                </div>
                <div class="row">
                    <div class="col-auto">Token:</div>
                    <div class="col-auto">{{Auth::user()->token}}</div>
                </div>
            </div>
        </div>

        @include('global.footer')
    </body>
</html>
