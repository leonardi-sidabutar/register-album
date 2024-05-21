<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=asset('css/style.css')?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Album - Register</title>
</head>

<body>
    <div class="page">
        <div class="n4-bg">
            <img src="<?=asset('img/logo_n4.png')?>" class="n4-logo mb-3" alt="">
            <p style="text-align:center;font-size: 18px;margin-bottom:5px;font-weight:600;color:orangered">REGISTRASI
                PILOT AGENT ALBUM DEPLOY</p>
            <p style="font-weight: 600">DASHBOARD ALBUM TBM</p>
            <div class="n4-box">
                <img class="drone" src="<?=asset('img/drone_dji_mavic2_pro.png')?>" alt="">
                <form method="POST" action="{{ route('login_act.post') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="username" class="form-label">Username <span
                                        style="color: red">*</span></label>
                                <input type="username" class="form-control" id="username" name="username">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="password" class="form-label">Password <span
                                        style="color: red">*</span></label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <p style="margin-top:30px;font-size:14px;color:#555;font-weight:600">Created @ By PTPN IV REGIONAL II</p
                class="mt-3">

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
        </div>
    </div>
</body>

</html>
