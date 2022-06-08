<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('global.head')
    </head>
    <body class="antialiased">
        @include('global.header')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="container">
                <div class="login-form m-auto">
                    <h3 class="color-white">Login</h3>
                    <br />

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">✕</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('account/authorization') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" name="email" placeholder="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="password" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('global.footer')
    </body>
</html>
