<main class="container">
  <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Formulir Alamat Pengiriman
            </div>
            <div class="card-body">
              <form action="<?= base_url("/checkout/create") ?>" method="POST">
                <div class="mb-3">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="name" placeholder="Masukkan nama penerima..." values="<?= $input->name ?>" autofocus>
                  <?= form_error('name') ?>
                </div>
                <div class="mb-3">
                  <label for="">Alamat</label>
                  <textarea name="address" id="" cols="30" rows="5" class="form-control" placeholder="Masukkan alamat penerima..."><?= $input->address ?></textarea>
                  <?= form_error('address') ?>
                </div>
                <div class="mb-3">
                  <label for="">Telepon</label>
                  <input type="text" class="form-control" name="phone" placeholder="Masukkan nomor telepon penerima..." value="<?= $input->phone ?>">
                  <?= form_error('phone') ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>  
        </div>
          
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-header">
                  Cart
                </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Produk</th>
                          <th>Qty</th>
                          <th>Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($cart as $row) : ?>
                        <tr>
                          <td><?= $row->title ?></td>
                          <td><?= $row->qty ?></td>
                          <td>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                        </tr>
                        <tr>
                          <td colspan="2">Subtotal</td>
                          <td>Rp<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="border-0" colspan="2">Total</th>
                          <th class="border-0">Rp<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div> 
</main>