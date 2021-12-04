<?php require APPROOT . '/views/inc/header.php' ?>

    
<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background-image: url('https://image.freepik.com/free-vector/list-concept-illustration_114360-1320.jpg'); background-repeat: no-repeat; background-size:cover;">
    <div class="col-md-5 p-lg-5 mx-auto my-5" style="color:#000066;">
      <h1 class="display-4 fw-normal text-primary"><?php echo $data['title']; ?></h1>
      <p class="lead fw-normal text-dark"style="font-weight:bold;"><?php echo $data['description']; ?></p>
      <a class="btn btn-outline-secondary" href="<?php echo URLROOT; ?>/users/register" style="background-color:#185abd; color: #f2f2f2;font-weight: bold;border-color: #fff;">Utilize nossa aplicação web</a>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="background-color:#3366ff;">
      <div class="my-3 py-3">
        <h2 class="display-6" style="font=size:8px !important;font-weight:100;">Defina um nível de prioridade para suas atividades</h2>
        <p class="text-center" style="font-size:20px;">Por meio de nosso sistema você consegue definir três níveis de prioridade tais como:</p>
        </strong><br><strong class="bg-danger" style="font-size:20px;">Prioridade Alta</strong><br><strong class="bg-warning" style="font-size:20px;">Prioridade Média</strong><br><strong class="bg-success" style="font-size:20px;">Prioridade Baixa;</strong>
      </div>
      <div class="shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="https://assets.asana.biz/m/5edf18de88e4d4f0/webimage-article-productivity-how-prioritize-tasks-work-2x.jpg" style="height:300px;width:300px;"></div>
    </div>
    <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="background-color:#4d79ff;">
      <div class="my-3 p-3">
        <h2 class="display-6">Estipule um prazo exato</h2>
        <p class="text-center" sytle="font-size:20px;">Adicione um prazo as suas tarefas, para que assim você consiga garantir que nada vai atrasar.</p>⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</p>
      </div>
      <div class="shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="https://www.pngitem.com/pimgs/m/25-255321_google-calendar-icon-png-google-calendar-transparent-png.png" style="height: 300px;width: 300px;"></div>
    </div>
  </div>
</main>

   
<?php require APPROOT . '/views/inc/footer.php' ?>