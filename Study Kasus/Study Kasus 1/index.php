<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css dan js dari bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <title>Aplikasi Ticketing</title>
    <style>
        h3 {}
    </style>
</head>

<body>
    <div class="container">
        <h3 class="h3 text-center">Pendaftaran Rute Penerbangan</h3>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="maskapai">Maskapai</label>
                        <input type="text" class="form-control form-control-sm" id="maskapai" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">di isikan nama maskapai Garuda Indonesia,
                            Lion Air, City link dll.</small>
                    </div>
                    <div class="form-group">
                        <label for="bandaraAsal">Bandara Asal</label>
                        <select name="bandaraAsal" class="form-control form-control-sm" id="bandaraAsal"></select>
                    </div>
                    <div class="form-group">
                        <label for="bandaraTujuan">Bandara Tujuan</label>
                        <select name="bandaraAsal" class="form-control form-control-sm" id="bandaraTujuan"></select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Ticket</label>
                        <input type="text" class="form-control form-control-sm" id="harga">
                    </div>

                    <button type="button" id="btnProses" class="btn btn-primary">Submit Data</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
            <h3 class="h3 text-center">Route Penerbangan </h3>
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Maskapai</th>
                            <th>Bandara Asal</th>
                            <th>Bandara Tujuan</th>
                            <th>Harga Tiket</th>
                            <th>Pajak</th>
                            <th>Harga Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="rowDataKosong">
                            <td colspan="7">Belum Ada Data</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    //const untuk pajak bandara
    const pajakBandara = [];
    //add object to const pajakBandara {JSON}
    pajakBandara[0] = {
        id: 1,
        bandara: 'Soekarno - Hatta (CGK)',
        pajak: 50000
    };
    pajakBandara[1] = {
        id: 2,
        bandara: 'Husein Sastra Negara (BDO)',
        pajak: 30000
    };
    pajakBandara[2] = {
        id: 3,
        bandara: 'Abdurahman Shaleh (MLG)',
        pajak: 40000
    };
    pajakBandara[3] = {
        id: 4,
        bandara: 'Juanda (SUB)',
        pajak: 40000
    };

    console.log(pajakBandara);


    $(document).ready(function() {
        //add dinamic dropdown bandara 
        let dropdown1 = $('#bandaraAsal');
        let dropdown2 = $('#bandaraTujuan');
        dropdown1.empty();

        $.each(pajakBandara, function(key, entry) {
            dropdown1.append($('<option></option>').attr('value', entry.id).attr('data-pajak', entry
                .pajak).text(
                entry.bandara));
        })
        //add dinamic dropdown 2
        dropdown2.empty();

        $.each(pajakBandara, function(key, entry) {
            dropdown2.append($('<option></option>').attr('value', entry.id).attr('data-pajak', entry
                .pajak).text(
                entry.bandara));
        })

        function hideDataKosong() {
            $('#rowDataKosong').hide();
        }
        //deklarasi variabel
        let lineNo = 1;
        //add to row

        $('#btnProses').click(function() {
            //alert('button diklk');
            //pemanggilan fungsi menyembuyikan row data ksong
            hideDataKosong();
            //get data form
            let maskapai = $('#maskapai').val();

            let bandAsal = $('#bandaraAsal option:selected').text();
            let bandTujuan = $('#bandaraTujuan option:selected').text();

            let pajak1 = $('#bandaraAsal option:selected').attr('data-pajak');
            let pajak2 = $('#bandaraTujuan option:selected').attr('data-pajak');
            //konversi nilai data string ke integer
            let pajak = parseInt(pajak1) + parseInt(pajak2);
            let harga = $('#harga').val();
            let total = parseInt(harga) + pajak;

            // console.log(maskapai);
            // console.log(bandAsal);
            // console.log(pajak1);
            // console.log(pajak);
            // console.log(total);

            markup = "<tr><td>" +
                lineNo + "</td><td>" + maskapai + "</td><td>" + bandAsal + "</td><td>" + bandTujuan +
                "</td><td>" + harga + "</td><td>" + pajak + "</td><td>" + total + "</td></tr>";
            tableBody = $("table tbody");
            tableBody.append(markup);
            lineNo++;
            //reset form data to blank javascript native
            formObject.reset()
        });

    });
</script>

</html>