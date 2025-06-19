document.getElementById('formAgendamento').addEventListener('submit', function(event) {
  event.preventDefault(); 

  const nome = document.getElementById('nome').value;
  const data = document.getElementById('data').value;
  const hora = document.getElementById('hora').value;
  const servico = document.getElementById('servico').value;


  const mensagem = document.getElementById('mensagemAgendamento');
  mensagem.innerHTML = `<p><strong>${nome}</strong>, seu horário para <strong>${formatarServico(servico)}</strong> foi agendado para <strong>${formatarData(data)}</strong> às <strong>${hora}</strong>.</p>`;
  mensagem.style.color = 'green';


  document.getElementById('formAgendamento').reset();
});

function formatarServico(servico) {
  const servicos = {
    corte_barba: "Corte + Barba",
    corte: "Só Corte de Cabelo",
    barba: "Só Barba",
    sobrancelha: "Sobrancelha"
  };
  return servicos[servico] || servico;
}


function formatarData(dataISO) {
  const [ano, mes, dia] = dataISO.split("-");
  return `${dia}/${mes}/${ano}`;
}
document.getElementById('formFeedback').addEventListener('submit', function(event) {
  event.preventDefault();

  const nome = document.getElementById('nomeFeedback').value;
  const comentario = document.getElementById('comentario').value;
  const nota = document.getElementById('nota').value;

  const feedbackList = document.getElementById('feedbacks');
  const novoFeedback = document.createElement('li');
  novoFeedback.innerHTML = `<strong>${nome}</strong> (${nota}):<br>${comentario}`;
  feedbackList.prepend(novoFeedback); 


  document.getElementById('formFeedback').reset();
});
