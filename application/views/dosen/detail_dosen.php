<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <h3>Detail Dosen</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $pengajar -> id ?></td>
                <td><?php echo $pengajar -> nama ?> </td>
                <td><?php echo $pengajar -> gender ?></td>
                <td><?php echo $pengajar -> tmp_lahir ?></td>
                <td><?php echo $pengajar -> tgl_lahir ?></td>
                <td><?php echo $pengajar -> nidn ?></td>
                <td><?php echo $pengajar -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div calss="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$pengajar->id?>.jpg" width="300"/>
                    <div class="mt-4">
                        <h4><?=$pengajar->nama?></h4>
                        <p>Foto dosen</p>
                        <?php echo $error;?>
                        <br/><br/>
                        <a href="https://www.instagram.com/muh_askarii/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                        <br/><br/>
                        <?php echo form_open_multipart('dosen/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="iddosen" value="<?=$pengajar->id?>"/>
                        <br><br>
                        <input type="submit" value="upload foto" class="btn btn-primary"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>