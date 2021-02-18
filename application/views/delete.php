<?php

?>

<br />
<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/welcome/real_delete') ?>">
                <p>Apakah anda yakin ingin menghapus tugas? <strong><?php echo $delete['judul'] ?></strong></p>
                <input type="hidden" name="id" value="<?php echo $delete['id'] ?>">
                <a class="btn btn-primary" href="<?php echo site_url('/welcome/') ?>">BATAL</a>
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </div>
    </div>

</div>