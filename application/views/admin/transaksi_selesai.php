<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi Selesai</h1>
</div>
    
<div class="card shadow mb-4">
    <div class="card-body">
        <?php foreach($transaksi as $t){ ?>
        <form action="<?php echo base_url().'admin/transaksi_selesai_act' ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $t->transaksi_id ?>">
            <input type="hidden" name="kostumer" value="<?php echo $t->transaksi_kostumer ?>">
            <input type="hidden" name="mobil" value="<?php echo $t->transaksi_mobil ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kostumer</label>
                <div class="col-sm-10">
                    <select class="form-control" disabled>
                        <option value="" disabled>Pilih Kostumer</option>
                        <?php foreach($kostumer as $k){ ?>
                        <option value="<?php echo $k->kostumer_id ?>"<?php echo ($t->transaksi_kostumer == $k->kostumer_id) ? ' selected':''; ?>><?php echo $k->kostumer_nama ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mobil</label>
                <div class="col-sm-10">
                    <select class="form-control" disabled>
                        <option value="" disabled>Pilih Mobil</option>
                        <?php foreach($mobil as $m){ ?>
                        <option value="<?php echo $m->mobil_id ?>"<?php echo ($t->transaksi_mobil == $m->mobil_id) ? ' selected':''; ?>><?php echo $m->mobil_merk ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tgl. Pinjam</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pinjam" value="<?php echo $t->transaksi_tgl_pinjam ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tgl. Kembali</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_kembali" value="<?php echo $t->transaksi_tgl_kembali ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga" value="<?php echo $t->transaksi_harga ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Denda per-Hari</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="denda" value="<?php echo $t->transaksi_denda ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_dikembalikan">
                </div>
                <?php echo form_error('tgl_dikembalikan'); ?>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</div>