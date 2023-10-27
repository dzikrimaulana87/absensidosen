<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Absensi</title>
</head>

<body class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Form Absensi</h1>
            <form method="post" action="/save">
                <div class="form-group">
                    <label for="nik">Masukkan NIK</label>
                    <input type="number" class="form-control" id="nik" placeholder="15 digit NIK" name="nik">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: '/save',
                type: 'POST',
                dataType: 'json',
                data: $(this).serialize(),
                success: function (response) {
                    if (response.error) {
                        alert(response.error);
                    } else {
                        alert('Data berhasil disimpan');
                    }
                }
            });
        });
    </script>
</body>

</html>

</html>