


document.querySelector('.search-btn').addEventListener('click', function(event){
    event.preventDefault();
    
    let nomeBusca = document.getElementById('nome').value;
    let categoriaBusca = document.getElementById('cat').value.toLowerCase();
    let localizacaoBusca = document.getElementById('loc').value.toLowerCase();
    let dataInicioBusca = document.getElementById('data').value.toLowerCase();
    let dataFimBusca = document.getElementById('data').value.toLowerCase();
    let eventos = document.querySelectorAll('#eventos .evento');
    let encontrado = false;

    eventos.forEach(function(evento){
        let nomeEvento = evento.getAttribute('data-nome').toLowerCase();
        let categoriaEvento = evento.getAttribute('data-categoria').toLowerCase();
        let localizacaoEvento = evento.getAttribute('data-loc').toLowerCase();
        let dataInicio = evento.getAttribute('data-dateInicio').toLowerCase();
        let dataFim = evento.getAttribute('data-dateFim').toLowerCase();
        
        console.log(dataInicioBusca + " " + dataInicio)
        if((nomeBusca === '' || nomeEvento.includes(nomeBusca)) &&
        (categoriaBusca === '' || categoriaEvento.includes(categoriaBusca)) &&
        (localizacaoBusca === '' || localizacaoEvento.includes(localizacaoBusca)) &&
        (dataInicioBusca === '' || dataInicio.includes(dataInicioBusca)) &&
        (dataFimBusca === '' || dataFim.includes(dataFimBusca))){
            encontrado = true;
            evento.style.display = 'block';
        }else{
            evento.style.display = 'none';
            console.log("Sumir")
        }
    });

    let mensagem = document.getElementById('message');
    if (encontrado) {
        mensagem.style.display = 'none'; 
    }else{
        mensagem.style.display = 'block'; 
    }
});