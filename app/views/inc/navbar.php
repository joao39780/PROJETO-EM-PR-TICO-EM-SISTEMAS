<header class="site-header sticky-top py-1 bg-light">
 <nav class="navbar navbar-expand-md fixed-top bg-light" style="background-color:#4d4d4d !important;">
       <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT;?>" style="color:#fff;">
      <img src="https://to-do-cdn.microsoft.com/static-assets/c87265a87f887380a04cf21925a56539b29364b51ae53e089c3ee2b2180148c6/icons/logo.png" style= "height: 30px; width: 30px;">taskHelper
    </a>
  </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URLROOT;?>" style="color:#fff;">Página Inicial</a>
          </li>
          <?php if(isset($_SESSION['user_id'])):?>
            <li class="nav-item">
            <a class="nav-link disable" href="#" style="color:#fff;"><?php echo $_SESSION['user_name'];  ?></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT;?>/users/logout" style="color:#fff;">Logout</a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT;?>/users/login" style="color:#fff;">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/register" style="color:#fff;">Cadastro</a>
          </li>
        <?php endif; ?>  
        </ul>
      </div>
    </nav>
</header>