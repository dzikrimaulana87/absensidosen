<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">

            <!-- Menggunakan card Bootstrap untuk menampilkan data -->
            <div class="row" id="kartunya">
                <?php $d['id'] = 0;
                foreach ($absensi as $d): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card cardabsen">
                            <div class="d-flex align-items-center justify-content-center">
                                <img class='card-img-top rounded-circle' src="/assets/img/user.jpg" alt="cardabsen" />
                                <div class="card-header">
                                    <h2 class="card-title">
                                        <?= $d['nama']; ?>
                                    </h2>
                                    <p><ins>NIK: </ins>
                                        <?= $d['nik']; ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <p class='card-text description'>Dosen Fakultas Ilmu Komputer</p>
                                <hr />
                                <div class='tokenInfo'>
                                    <div class="timestamp">
                                        <ins>◷</ins>
                                        <?= $d['timestamp']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        var idnya = <?= $d['id']; ?>;

        function fetchData() {
            $.ajax({
                url: '/data_absen',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    if (idnya != data[0]['id']) {
                        var newCard = `<div class="col-md-4 mb-3">
                        <div class="card cardabsen">
                            <div class="d-flex align-items-center justify-content-center">
                                <img class='card-img-top rounded-circle' src="/assets/img/user.jpg" alt="cardabsen" />
                                <div class="card-header">
                                    <h2 class="card-title">
                                        ${data[0]['nama']}
                                    </h2>
                                    <p><ins>NIK: </ins>
                                    ${data[0]['nik']}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <p class='card-text description'>Dosen Fakultas Ilmu Komputer</p>
                                <hr />
                                <div class='tokenInfo'>
                                    <div class="timestamp">
                                        <ins>◷</ins>
                                        ${data[0]['timestamp']}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                        $('#kartunya').append(newCard);

                        idnya = data[0]['id'];

                        $('html, body').animate({
                            scrollTop: $(document).height()
                        }, 200);
                    }
                }
            });
        }
        setInterval(fetchData, 1000);

        $('html, body').animate({
            scrollTop: $(document).height()
        }, 1000);
    });
</script>

<?= $this->endSection() ?>