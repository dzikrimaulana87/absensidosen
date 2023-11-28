<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">

            <!-- Menggunakan card Bootstrap untuk menampilkan data -->
            <div id="cardContainer" class="card-columns">
                <?php $count = 0; ?>
                <?php foreach ($absensi as $d): ?>
                    <?php if ($count % 3 == 0): ?>
                    </div>
                    <div class="row">
                    <?php endif; ?>
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
                    <?php $count++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>