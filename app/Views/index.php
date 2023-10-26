<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $no = 1?>
    <?php foreach($absensi as $d) : ?>
        <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?=$d['nik']?></td>
            <td><?=$d['nama']?></td>
            <td><?=$d['timestamp']?></td>
        </tr>
    <?php endforeach; ?>
    
</body>
</html>
