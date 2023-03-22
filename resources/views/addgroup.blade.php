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
            integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
            crossorigin="anonymous"
        />
    </head>
    <body>
        @include('navbar')
        <div style="width: 98%; height: 100vh" class="container-fluid">
            <div class="row h-100">
                <div class="col-sm-12 col-md-4 col-lg-4 bg-color">
                    @include('navlink')
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 bg-color1">
                    <br />
                    <div class="w-75">
                        <div
                            class="form-group d-flex gap-2 justify-content-center align-items-center"
                        >
                            <input
                                class="form-control"
                                type="text"
                                name="group"
                                placeholder="Group Name"
                            />
                            <button class="btn btn-info">ADD GROUP</button>
                        </div>
                    </div>
                    <div>@include('allgroup')</div>
                </div>
            </div>
        </div>
    </body>
</html>
