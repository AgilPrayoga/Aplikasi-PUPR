<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- mainCSS --}}
    <link rel="stylesheet" href="{{ asset('assets/CSS/main.css') }}">
    {{-- mainCSS --}}

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    {{-- Bootstrap --}}

</head>

<body style="background-color: #bc2024 !important;">

    <div class="h-screen d-flex justify-content-center align-items-center">
        <div class="card  center p-5"
            style="width:600px!important;heigth:700px!important; border-radius:20px!important;">
            <img src="{{ asset('assets/images/logo.png') }}" style="width: 200px;height:200px" alt="">
            <div class="w-100 center">
                <form class="form w-100" action="" method="post">

                    <div class="form-group">
                        <label for="username" class="text-left font-weight-bold">Username:</label><br>
                        <input type="text" name="username" id="username" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-left font-weight-bold">Password:</label><br>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group d-flex">
                        <input type="checkbox" name="rememberme" class="mr-3" value="submit">
                        <label class="text-left font-weight-bold">Remember Me</label><br>
                    </div>
                    <div class="form-group text-right">

                        <button type="submit" name="submit" class="btn btn-purple px-5 ">Login</button>
                    </div>

                </form>
            </div>
        </div>

        {{-- bootstrap --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        {{-- bootstrap --}}
</body>

</html>
