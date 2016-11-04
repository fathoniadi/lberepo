<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @if ($errors->has())
                    <div class="alert-danger" style="color:red; text-align:left; font-weight:bold">
                        @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
                <form method="post" action="{{url('/')}}/login">
                    <div>
                        <input type="text" name="nrp" required="" placeholder="NRP">
                    </div>
                    <div>
                        <input type="password" name="password" required="" placeholder="password">
                    </div>
                    <input type="submit" value="Login">
                    <input type="hidden" name="_token" value="{{csrf_token() }}">
                </form>
            </div>
        </div>
    </body>
</html>
