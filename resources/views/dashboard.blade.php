<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        />
       
    <body>
        @include('navbar')
        <div style="width: 98%; height: 100vh" class="container-fluid">
            <div class="row h-100">
                <div class="col-sm-12 col-md-4 col-lg-4 bg-color">
                    @include('navlink')
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 bg-color1">
                    @include('login')
                </div>
            </div>
        </div>
    </body>
</html>
