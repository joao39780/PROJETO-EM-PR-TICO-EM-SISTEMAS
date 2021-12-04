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
       <h1 class="h2"><i class="fas fa-angle-down" style="color:green;"></i> Lista de Tarefas Finalizadas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!--Coloca elementos a esquerda do cabeçalho !-->
        </a>
        </div>
      </div>
      <!--Tarefas finalizadas-->
      <h3 class="text-primary" style="font-weight: bold;">Aqui estão todas as suas tarefas marcadas como concluídas</h3>
      <div class="list-group">
      <?php if(!empty($data['finishedTasks'])):?>
      <?php foreach($data['finishedTasks'] as $task): ?>  
      <a href="<?php echo URLROOT; ?>/tasks/show/<?php echo $task->id;?>" class="list-group-item list-group-item-action list-group-item-primary" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?php echo $task->title;?></h5>
        <small><?php echo $task->created_at; ?></small>
      </div>
      <h6 class="mb-1"><?php echo $task->body; ?></h6>
      <h6 class="mb-1" style="font-weight:bold;">Prazo: <?php echo $task->final_date; ?></h6>
    </a>
    <?php endforeach; ?>
      <?php else:?>
        <p class="text-muted">Não há tarefas concluídas neste momento!</p>
        <?php endif; ?>
  </div>