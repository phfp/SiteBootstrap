  //Imprimir curriculo

  var botao = document.getElementById('botao-curriculo');

  function imprimeCurriculo(){
	  	var pagina = document.body.innerHTML;
	  	var conteudo = document.getElementById('corpo-curriculo').innerHTML;
	    document.body.innerHTML = conteudo;
	    window.print();
	    document.body.innerHTML = pagina;
    }

    function ano(){
    var today = new Date();
    var year = today.getFullYear();
    document.write(year);
	}