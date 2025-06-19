<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbearia de Respeito</title>

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    footer.footer {
      background-color: #222;
      color: white;
      text-align: center;
      padding: 1rem 0;
    }
  </style>
</head>

<body>
  <header class="topo">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Barbearia de Respeito</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
          aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#galeria">Galeria</a></li>
            <li class="nav-item"><a class="nav-link" href="#valores">Valores</a></li>
            <li class="nav-item"><a class="nav-link" href="#agendamento">Agendamento</a></li>
            <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="#endereco">Endereço</a></li>
            <li class="nav-item"><a class="nav-link" href="#equipe">Equipe</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="sobre" class="secao container my-5 text-center">
      <h2>Sobre Nós</h2>
      <img src="fotos/WhatsApp Image 2025-06-04 at 19.42.17.jpeg" class="img-fluid rounded mx-auto d-block" alt="Sobre nós">
      <p class="mt-3">Na Barbearia de Respeito, oferecemos cortes clássicos, modernos e atendimento de primeira. Venha renovar o visual com quem entende do assunto!</p>
    </section>

    <section id="galeria" class="secao container my-4">
      <h2>Galeria</h2>
      <div id="carouselGaleria" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="fotos/WhatsApp Image 2025-06-04 at 19.47.47.jpeg" class="d-block img-fluid" alt="Foto 1">
          </div>
          <div class="carousel-item">
            <img src="fotos/WhatsApp Image 2025-06-04 at 19.42.18 (1).jpeg" class="d-block img-fluid" alt="Foto 2">
          </div>
          <div class="carousel-item">
            <img src="fotos/WhatsApp Image 2025-06-04 at 19.42.18.jpeg" class="d-block img-fluid" alt="Foto 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleria" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleria" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>
    </section>

    <section id="valores" class="secao container my-5">
      <h2>Valores dos Cortes</h2>
      <ul>
        <li>Corte – R$ 25,00</li>
        <li>Barba – R$ 20,00</li>
        <li>Combo Corte + Barba – R$ 45,00</li>
        <li>Sobrancelha - R$ 15,00</li>
        <li>Corte + Sobrancelha – R$ 40,00</li>
      </ul>
    </section>

    <section id="agendamento" class="secao container my-5">
      <h2>Agendamento</h2>
      <p>Preencha o formulário abaixo para agendar seu horário:</p>
      <form id="formAgendamento">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
          <label for="data" class="form-label">Data:</label>
          <input type="date" class="form-control" id="data" name="data" required>
        </div>
        <div class="mb-3">
          <label for="hora" class="form-label">Horário:</label>
          <input type="time" class="form-control" id="hora" name="hora" required>
        </div>
        <div class="mb-3">
          <label for="servico" class="form-label">Escolha uma opção:</label>
          <select class="form-select" id="servico" name="servico" required>
            <option value="">Selecione</option>
            <option value="corte_barba">Corte + Barba</option>
            <option value="corte">Só Corte de Cabelo</option>
            <option value="barba">Só Barba</option>
            <option value="sobrancelha">Sobrancelha</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Agendar</button>
      </form>
      <div id="mensagemAgendamento" class="mt-3"></div>
    </section>

    <section id="contato" class="secao container my-5">
      <h2>Contato</h2>
      <p>📞 Telefone Igor: (44) 98426-6127</p>
      <p>📞 Telefone Saulo: (44)99975-2322</p>

      <a href="https://wa.me/5544984266127" target="_blank" class="btn btn-success my-2">📅 Agendar pelo WhatsApp (Igor)</a><br>
      <a href="https://wa.me/5544999752322" target="_blank" class="btn btn-success my-2">📅 Agendar pelo WhatsApp (Saulo)</a><br>

      <a href="https://www.instagram.com/barbeariaderespeito44" target="_blank" class="btn btn-outline-dark mt-2">📸 Visite nosso Instagram</a>
    </section>

    <section id="endereco" class="secao container my-5 text-center">
      <h2>Endereço</h2>
      <img src="fotos/WhatsApp Image 2025-06-04 at 19.50.00.jpeg" class="img-fluid rounded mx-auto d-block" alt="Endereço">
      <p class="mt-3">📍 Rua Ivailândia número 13, Jardim América, Campo Mourão - PR</p>
    </section>

    <section id="equipe" class="secao container my-5">
      <h2>Nossa Equipe</h2>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <img src="fotos/WhatsApp Image 2025-06-03 at 09.11.30.jpeg" class="card-img-top" alt="Igor">
            <div class="card-body">
              <h5 class="card-title">Igor</h5>
              <p class="card-text">Especialista em cortes modernos e degradê. Igão traz estilo e inovação a cada atendimento.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <img src="fotos/Captura de tela 2025-06-09 201609.png" class="card-img-top" alt="Saulo">
            <div class="card-body">
              <h5 class="card-title">Saulo</h5>
              <p class="card-text">Com mais de 5 anos de experiência, Saulo é mestre no corte clássico e barba completa.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="feedback" class="secao container my-5">
      <h2>Feedback dos Clientes</h2>
      <p>Conte pra gente o que achou do seu corte!</p>
      <form id="formFeedback">
        <div class="mb-3">
          <label for="nomeFeedback" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nomeFeedback" name="nomeFeedback" required>
        </div>
        <div class="mb-3">
          <label for="comentario" class="form-label">Comentário:</label>
          <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
        </div>
        <div class="mb-3">
          <label for="nota" class="form-label">Nota:</label>
          <select class="form-select" id="nota" name="nota" required>
            <option value="">Escolha</option>
            <option value="⭐">⭐</option>
            <option value="⭐⭐">⭐⭐</option>
            <option value="⭐⭐⭐">⭐⭐⭐</option>
            <option value="⭐⭐⭐⭐">⭐⭐⭐⭐</option>
            <option value="⭐⭐⭐⭐⭐">⭐⭐⭐⭐⭐</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Feedback</button>
      </form>
      <div id="listaFeedbacks" class="mt-4">
        <ul id="feedbacks"></ul>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
