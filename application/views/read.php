<?php

?>

<br/>
<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="get" action="<?php echo site_url('/welcome/') ?>" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Kata Kunci Pencarian">
                  </div>  
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    <br/>

    <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th><th>Mata Kuliah</th><th>Tugas</th><th>Deadline</th>
            <th style="width: 1%;">Aksi</th><th style="width: 1%;">Aksi</th>
        </tr>
        <?php foreach ($result as $r) {
            echo '<tr>';
            echo '<td>'.$r['id'].'</td><td>'.$r['matakul'].'</td><td>'.$r['judul'].'</td><td>'.$r['deadline'].'</td>';
            echo '<td><a href="'.site_url('/welcome/update/'.$r['id']).'" class="btn btn-success">Edit</a></td>';
            echo '<td><a href="'.site_url('/welcome/delete/'.$r['id']).'" class="btn btn-warning">Delete</a></td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>