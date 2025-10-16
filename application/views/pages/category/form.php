<main class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
            <div class="card-header">
                <span>Tambah Kategori</span>
                <div class="float-end">
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm text-center" placeholder="Cari">
                                <button class="btn btn-secondary btn-sm" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <a href="#" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-eraser"></i>
                                </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
              <?= form_open($form_action, ['method'=> 'POST']) ?>
                <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                <div class="mb-3">
                    <label for="">Kategori</label>
                    <?= form_input('title', $input->title, ['class' => 'form-control', 'id' => 'title', 'placeholder'=>'Silahkan masukkan kategori', 'onkeyup' => 'createSlug()', 'required' => true, 'autofocus' => true]) ?>
                    <?= form_error('title') ?>
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <?= form_input('slug', $input->slug, ['class' => 'form-control', 'id' => 'slug', 'required' => true]) ?>
                    <?= form_error('slug') ?>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
               <?= form_close() ?>
            </div>
            </div>
          </div>
      </div>
    </main>