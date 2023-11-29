<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">

            <!-- Menggunakan card Bootstrap untuk menampilkan data -->
            <div class="row" id="kartunya">
                <?php $d['id'] = 0;
                foreach ($absensi as $d) : ?>
                    <div class="col-md-4">
                        <div class="card mb-3 card-container">
                            <div class="card-header">
                                <?= $d['nama']; ?>
                            </div>
                            <div class="card-body">
                                <p class="card-text">NIK:
                                    <?= $d['nik']; ?>
                                </p>
                                <p class="card-text">Timestamp:
                                    <?= $d['timestamp']; ?>
                                </p>
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
    $(document).ready(function() {
        var idnya = <?= $d['id']; ?>;

        function fetchData() {
            $.ajax({
                url: '/data_absen',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (idnya != data[0]['id']) {
                        var newCard = `
                                <div class="col-md-4">
                                    <div class="card mb-3 card-container">
                                        <div class="card-header">
                                            ${data[0]['nama']}
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">NIK: ${data[0]['nik']}</p>
                                            <p class="card-text">Timestamp: ${data[0]['timestamp']}</p>
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