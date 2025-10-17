<main class="container">
    <?php $this->load->view('layouts/_alert') ?>
      <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
            <div class="card-header">
                Formulir Login
            </div>
            <div class="card-body">
                <?= form_open('login', ['method' => 'POST']) ?>
                <div class="mb-3">
                    <label for="e-mail">E-Mail</label>
                    <?= form_input(['type' => 'email', 'name' => 'email', 'id' => 'e-mail', 'value' => $input->email, 'class' => 'form-control', 'placeholder'=>'Masukkan alamat email', 'required'=> true, 'autofocus' => true ]) ?>
                    <?= form_error('email') ?>
                </div>
                <div class="mb-3">
                    <label for="showPass">Password</label>
                    <?= form_password('password', '', ['class' => 'form-control', 'id' => 'pass', 'placeholder' => 'Masukkan password','required' => true]) ?>
                    <?= form_checkbox(['class' => 'form-check-input', 'onclick' => "togglePassword('pass')", 'id' => 'showPassword']) ?> <label for="showPassword">Show Password</label>
                    <?= form_error('password') ?>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-primary">Login</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
               <?= form_close() ?>
            </div>
            </div>
          </div>
      </div>
      <script>
          function togglePassword(id) 
        {
            const input = document.getElementById(id);
            input.type = input.type === 'password' ? 'text' : 'password';
        }
      </script>
    </main>