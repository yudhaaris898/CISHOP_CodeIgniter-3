<main class="container">
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('layouts/_menu'); ?>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Confirm Order #<?= $order->invoice ?>
                    <div class="float-end">
                        <?php $this->load->view('layouts/_status', ['status' => $order->status]); ?>
                    </div>
                </div>
                <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                <?= form_hidden('id_orders', $order->id); ?>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">Transaksi</label>
                        <input type="text" class="form-control" value="<?= $order->invoice ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="">Dari Rekening a/n</label>
                        <input type="text" name="account_name" value="<?= $input->account_name ?>" class="form-control" autofocus>
                        <?= form_error('account_name') ?>
                    </div>
                    <div class="mb-3">
                        <label for="">No Rekening</label>
                        <input type="text" name="account_number" value="<?= $input->account_number ?>" class="form-control">
                        <?= form_error('account_number') ?>
                    </div>
                    <div class="mb-3">
                        <label for="sebesar">Sebesar</label>
                        <input id="sebesar" name="nominal" value="<?= $input->nominal ?>" type="number" class="form-control">
                        <?= form_error('nominal') ?>
                    </div>
                    <div class="mb-3">
                        <label for="">Catatan</label>
                        <textarea name="note" class="form-control" id="" cols="30" rows="5">-</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Bukti transfer</label><br>
                        <input type="file" name="image" id="">
                        <?php if($this->session->flashdata('image_error')) : ?>
                            <small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>