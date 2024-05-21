<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=asset('css/style.css')?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Album - Register</title>
  </head>

  <body>
    <div class="page">
    <div class="n4-bg">
        <img src="<?=asset('img/logo_n4.png')?>" class="n4-logo mb-3" alt="">
        <p style="text-align:center;font-size: 18px;margin-bottom:5px;font-weight:600;color:orangered">REGISTRASI PILOT AGENT ALBUM DEPLOY</p>
        <p style="font-weight: 600">DASHBOARD ALBUM TBM</p>
        <div class="n4-box">
            <img class="drone" src="<?=asset('img/drone_dji_mavic2_pro.png')?>" alt="">
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="sap" class="form-label">NIK SAP <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="sap" name="sap">
                            @error('sap')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="name" class="form-label">Nama Lengkap <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name">
                            @error('name')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="jabatan" class="form-label">Jabatan <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                            @error('jabatan')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="hp" class="form-label">No HP (WA) <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="hp" name="hp">
                            @error('hp')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="email" class="form-label">Email <span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="username" class="form-label">Username <span style="color: red">*</span></label>
                            <input type="username" class="form-control" id="username" name="username">
                            @error('username')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="password" class="form-label">Password <span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="password_confirmation" class="form-label">Konfirmasi Password <span style="color: red">*</span></label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div>
                            <label for="regional" class="form-label">Regional <span style="color: red">*</span></label>
                            <select id="regional" name="regional" class="form-select">
                                <option selected>-- Pilih REGIONAL --</option>
                                <option value="N003">REGIONAL I</option>
                                <option value="N00D">REGIONAL II</option>
                                <option value="N00E">REGIONAL III</option>
                                <option value="N006">REGIONAL IV</option>
                                <option value="N013">REGIONAL V</option>
                            </select>
                            @error('regional')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                            <input type="hidden" class="form-control" id="ptpn" name="ptpn">
                            <input type="hidden" class="form-control" id="company_code" name="company_code">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div>
                            <label for="kebun" class="form-label">Kebun <span style="color: red">*</span></label>
                            <select id="kebun" name="kebun" class="form-select" aria-label="Default select example">
                                <option selected>-- Pilih Kebun --</option>
                            </select>
                            @error('kebun')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                            <input type="hidden" class="form-control" id="namakebun" name="namakebun">
                            <input type="hidden" class="form-control" id="slicekebun" name="slicekebun">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div>
                            <label for="afd" class="form-label">Afdeling <span style="color: red">*</span></label>
                            <select id="afd" name="afd" class="form-select" aria-label="Default select example">
                                <option selected>-- Pilih Afd --</option>
                                <option value="AFD01">AFD01</option>
                                <option value="AFD02">AFD02</option>
                                <option value="AFD03">AFD03</option>
                                <option value="AFD04">AFD04</option>
                                <option value="AFD05">AFD05</option>
                                <option value="AFD06">AFD06</option>
                                <option value="AFD07">AFD07</option>
                                <option value="AFD08">AFD08</option>
                                <option value="AFD09">AFD09</option>
                                <option value="AFD10">AFD10</option>
                                <option value="AFD11">AFD11</option>
                                <option value="AFD12">AFD12</option>
                            </select>
                            @error('afd')
                                <div class="text-danger" style="font-size:12px">{{ $message }}</div>
                            @enderror
                            <input type="hidden" class="form-control" id="afdeling" name="afdeling">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <p style="margin-top:30px;font-size:14px;color:#555;font-weight:600">Created @ By PTPN IV REGIONAL II</p class="mt-3">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </div>
</div>

    <script>
        $(document).ready(function() {
            // Fungsi Regional Untuk Mencari Kebun Sesuai Regional yang dipilih
            $('#regional').change(function() {
                var regional = $(this).val();
                $.ajax({
                    url: 'http://localhost:8000/api/kebun',
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({ regional: regional }),
                    success: function(data) {
                        $('#kebun').empty();
                        $('#kebun').append('<option selected>-- Pilih Kebun --</option>');
                        $.each(data, function(index, kebun) {
                            $('#kebun').append('<option value="'+kebun.kode_kebun+'">'+kebun.nama_kebun+'</option>');
                        });
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan saat mengambil data kebun.');
                    }
                });
            });
            // Fungsi Untuk Mengisi Nama Kebun Dari Select Kebun
            $('#kebun').change(function(){
                var selectKebun = $(this).find('option:selected').text();
                $('#namakebun').val(selectKebun);
            })
            // Fungsi Untuk Mengisi Singkat Kebun Kebun Dari Select Kebun
            $('#kebun').change(function(){
                var selectKebun = $(this).find('option:selected').text();
                var slicekebun = selectKebun.slice(0,3);
                $('#slicekebun').val(slicekebun);
            })
            // Fungsi Untuk Mengisi PTPN Code dari Romawi Regional
            $('#regional').change(function(){
                var regional = $(this).find('option:selected').text();
                var pisah = regional.split(" ");
                $('#ptpn').val(regional);
            })
            // Fungsi Untuk Mengisi Company Code dari Romawi Regional
            $('#regional').change(function(){
                var regional = $(this).val();
                switch(regional){
                    case "N003":
                        $('#company_code').val('PTPN III');
                        break;
                    case "N00D":
                        $('#company_code').val('PTPN IV');
                        break;
                    case "N00E":
                        $('#company_code').val('PTPN V');
                        break;
                    case "N006":
                        $('#company_code').val('PTPN VI');
                        break;
                    case "N013":
                        $('#company_code').val('PTPN XIII');
                        break;
                    default:
                        $('#company_code').val(""); // nilai default jika tidak cocok dengan case yang ada
                    break;
                }
            })
            // Fungsi Untuk Mengisi Afdeling dari Select afd
            $('#afd').change(function(){
                var afd = $(this).val();
                var afdeling = afd.slice(3);
                switch (afdeling) {
                    case "01":
                        $('#afdeling').val("I");
                        break;
                    case "02":
                        $('#afdeling').val("II");
                        break;
                    case "03":
                        $('#afdeling').val("III");
                        break;
                    case "04":
                        $('#afdeling').val("IV");
                        break;
                    case "05":
                        $('#afdeling').val("V");
                        break;
                    case "06":
                        $('#afdeling').val("VI");
                        break;
                    case "07":
                        $('#afdeling').val("VII");
                        break;
                    case "08":
                        $('#afdeling').val("VIII");
                        break;
                    case "09":
                        $('#afdeling').val("IX");
                        break;
                    case "10":
                        $('#afdeling').val("X");
                        break;
                    case "11":
                        $('#afdeling').val("XI");
                        break;
                    case "12":
                        $('#afdeling').val("XII");
                        break;
                    default:
                        $('#afdeling').val(""); // nilai default jika tidak cocok dengan case yang ada
                    break;
                }
            })
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @include('sweetalert::alert')
  </body>
</html>
