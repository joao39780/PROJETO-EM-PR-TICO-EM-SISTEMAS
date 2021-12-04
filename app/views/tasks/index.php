<?php require APPROOT . '/views/inc/taskHeader.php' ?>
<body>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              <i class="fas fa-user"></i> <?php echo $_SESSION['user_name'];  ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT;?>/tasks/">
              <span data-feather="home"></span>
              <i class="fas fa-home"></i> Página incial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/tasks/add">
              <span data-feather="home"></span>
              <i class="fas fa-pencil-alt"></i> Adicionar nova tarefa
            </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT ?>/tasks/finished">
              <span data-feather="home"></span>
              <i class="fas fa-angle-down"></i> Tarefas concluídas
            </a> 
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT;?>/users/logout">
              <span data-feather="home"></span>
              <i class="fas fa-sign-out-alt"></i> Sair
            </a>
        </li>  
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2"><i class="fas fa-tasks"></i> Lista de Tarefas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!--Coloca elementos a esquerda do cabeçalho !-->
        <a href="<?php echo URLROOT; ?>/tasks/add" class="btn btn-primary pull right">
        <i class="fa fa-pencil"></i> Adicionar nova tarefa
        </a>
        </div>
      </div>

      
      <!--Tarefas de Alta prioridade !-->
      <?php flash('set_task_success'); ?>
      <?php flash('delete'); ?> 
      <h3 class="text-danger" style="font-weight: bold;">Tarefas de alta prioridade</h3>
      <div class="list-group">
      <?php if(!empty($data['highPriortyTasks'])):?>
      <?php foreach($data['highPriortyTasks'] as $task): ?>  
      <a href="<?php echo URLROOT; ?>/tasks/show/<?php echo $task->id;?>" class="list-group-item list-group-item-action list-group-item-danger" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?php echo $task->title;?></h5>
        <small><?php echo $task->created_at; ?></small>
      </div>
      <h6 class="mb-1"><?php echo $task->body; ?></h6>
      <h6 class="mb-1" style="font-weight:bold;">Prazo: <?php echo $task->final_date; ?></h6>
    </a>
    <?php endforeach; ?>
      <?php else:?>
        <p class="text-muted">Não há tarefas nesse bloco</p>
        <?php endif; ?>
  </div>
    <hr>
    <!--Tarefas de média prioridade-->
        <h3 class="text-warning" style="font-weight:bold;">Tarefas de média prioridade</h3>
      <div class="list-group">
      <?php if(!empty($data['mediumPriortyTasks'])):?>
      <?php foreach($data['mediumPriortyTasks'] as $task): ?> 
      <a href="<?php echo URLROOT; ?>/tasks/show/<?php echo $task->id;?>" class="list-group-item list-group-item-action list-group-item-warning" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?php echo $task->title;?></h5>
        <small><?php echo $task->created_at; ?></small>
      </div>
      <h6 class="mb-1"><?php echo $task->body; ?></h6>
      <h6 class="mb-1" style="font-weight:bold;">Prazo: <?php echo $task->final_date; ?></h6>
    </a>
    <?php endforeach; ?>
    <?php else: ?>
    <p class="text-muted">Não há tarefas nesse bloco</p>
  <?php endif;?>
  </div>
    <hr>
        <!--Tarefas de baixa prioridade-->
        <h3 class="text-success" style="font-weight:bold;">Tarefas de baixa prioridade</h3>
      <div class="list-group">
      <?php if(!empty($data['lowPriortyTasks'])):?>
      <?php foreach($data['lowPriortyTasks'] as $task): ?> 
      <a href="<?php echo URLROOT; ?>/tasks/show/<?php echo $task->id;?>" class="list-group-item list-group-item-action list-group-item-success" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?php echo $task->title;?></h5>
        <small><?php echo $task->created_at; ?></small>
      </div>
      <h6 class="mb-1"><?php echo $task->body; ?></h6>
      <h6 class="mb-1" style="font-weight:bold;">Prazo: <?php echo $task->final_date; ?></h6>
    </a>
    <?php endforeach; ?>
        <?php else: ?>
          <p class="text-muted">Não há tarefas nesse bloco</p>
          <?php endif; ?>
  </div>
  </main>
  </div>
</div>
  

      
     <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
