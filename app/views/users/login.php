<?php require APPROOT . '/views/inc/header.php' ?>
<style>
    body{
        background-color:rgba(51, 102, 255, 0.1);;
    }
    </style>
<div class="row">
    <div class="col-md-5 mx-auto mt-5">
        <div class="card card-body  mt-5" style="background-color:#fff;">
            <div class="card-header">
            <?php flash('register_success'); ?>
            <h2><i class="fas fa-user-shield"></i>Login</h2>
            <p>Insira seus dados para para entrar no sistema</p>
        </div>
            <form action="<?php echo URLROOT; ?>/users/login" method="post">
            
            <div class="form-group">
                <label for="email">Email: <sup class="text-danger">*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'];?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Senha: <sup class="text-danger">*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'];?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
         <div class="row">
                <div class="col mt-2">
                    <input type="submit" value="Login" class="btn btn-block" style="width:300px;background-color:#3366ff;color:#fff;">
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-block text-danger">Ainda não possui uma conta? <strong>Cadastre-se</strong></a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
