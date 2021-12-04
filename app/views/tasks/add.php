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
              <i class="fas fa-pencil-alt"></i> Adicionar nova tarefa
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
       <div class="card card-body bg-light mt-5">
        <h2>Adicionar tarefa</h2>
            <p>Preencha o formulário abaixo para adicionar uma nova tarefa</p>
            <form action="<?php echo URLROOT; ?>/tasks/add" method="post">
            <div class="form-group">
                <label for="title">Titulo: <sup>*</sup></label>
                <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title'];?>">
                <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="body">Descrição: <sup>*</sup></label>
                <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"<?php echo $data['body']; ?>></textarea>
                <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
            </div>
            <div class="form-group mt-2">
                <label for="priorty">Selecione o nível de prioridade da tarefa:</label>
                <select name="priorty" class="form-control form-control-lg">
                <option selected value="Prioridade Baixa">Prioridade Baixa</option>
                <option value="Prioridade Media">Prioridade Média</option>
                <option value="Prioridade Alta">Prioridade Alta</option>        
            </select>
            </div>
            <div class="form-group mt-2">
            <label for="data">Prazo de conclusão da tarefa: <sup>*</sup></label>
            <input type="date" name="final_date" class="form-control form-control-lg" <?php echo (!empty($data['final_date_err'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['final_date'];?>">
            </div>
            <input type="submit" class="btn btn-block mt-3" style="width:600px;background-color:#3366ff;color:#fff;" value="Adicionar tarefa">
        </form>
        </div>
</main>
</body>