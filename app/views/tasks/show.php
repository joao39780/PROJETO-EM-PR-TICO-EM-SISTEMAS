<?php require APPROOT . '/views/inc/taskHeader.php' ?>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              <i class="fas fa-user"></i><?php echo $_SESSION['user_name'];  ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT;?>/tasks/">
              <span data-feather="home"></span>
              <i class="fas fa-home"></i>Página incial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/tasks/add">
              <span data-feather="home"></span>
              <i class="fas fa-pencil-alt"></i>Adicionar nova tarefa
            </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT ?>/tasks/finished">
              <span data-feather="home"></span>
              <i class="fas fa-angle-down"></i>Tarefas concluídas
            </a> 
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT;?>/users/logout">
              <span data-feather="home"></span>
              <i class="fas fa-sign-out-alt"></i>Sair
            </a>
        </li>  
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><a href="<?php echo URLROOT; ?>/tasks/index" class="btn btn-light"><i class="fa fa-backward"></i> Voltar</a>   
       </div>
    <br>
    <?php if(isset($data['task']->id)): ?>
    <div class="card card-body bg-light mt-5">
        <h2 class="card-title"><?php echo $data['task']->title; ?></h2>
        <!--Coloca elementos a esquerda do cabeçalho !-->
        <div class="btn-toolbar mb-2 mb-md-0">
          <?php echo $data['task']->priorty; ?>
        </div>   
    <div class="card-body">
        <p class="font-weight-light" style="font-size:20px;"><?php echo $data['task']->body; ?></p>
        <p class="font-weight-light" style="font-size:20px;">Prazo final: <?php echo $data['task']->final_date; ?></p>  
    </div>
    <div class="card-body">
    <a href="<?php echo URLROOT ?>/tasks/done/<?php echo $data['task']->id; ?>" class="card-link btn btn-success" style="width:200px;"><i class="fas fa-angle-down"></i> Concluir Tarefa</a>
    <a href="<?php echo URLROOT?>/tasks/edit/<?php echo $data['task']->id; ?>" class="card-link btn btn-warning" style="width:200px;"><i class="fas fa-pencil-alt"></i> Editar Tarefa</a>
    <a href="<?php echo URLROOT ?>/tasks/delete/<?php echo $data['task']->id; ?>" class="card-link btn btn-danger" style="width:200px;"><i class="fas fa-trash-alt"></i> Deletar Tarefa</a>
  </div>
</div>
    <?php else: ?>
        <div class="card card-body bg-light mt-5">
        <h2 class="card-title"><p class="text-muted">Tarefa não econtrada</p></h2>   
    </div>
<?php endif; ?>
</main>