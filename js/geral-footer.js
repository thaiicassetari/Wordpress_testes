
var buscaCX = document.getElementById("main-searchbox");
buscaCX.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var termo = document.getElementById("main-searchbox").value;
        //console.log(termo)
        window.location.href = "" + termo;  //pesquisa header
    }
    // pesquisa da barra do header
});

var new_buscaCX = document.getElementById("new-searchbox"); //pesquisa com botoes
new_buscaCX.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var termo = document.getElementById("new-searchbox").value;
        //console.log(termo)
        window.location.href = "http://www.biblioteca.ibict.br/cgi-bin/koha/opac-search.pl?idx&q=" + termo;
    }   
});
var busca_botao = document.getElementById("new-searchbox");
function buscar(opcao){
   if(opcao == 02){
        var termo = document.getElementById("new-searchbox").value;
        window.location.href = "http://www.biblioteca.ibict.br/cgi-bin/koha/opac-search.pl?advsearch=1&idx=au%2Cwrdl&q=" + termo;
    }
    else{
        var termo = document.getElementById("new-searchbox").value;
        window.location.href = "http://www.biblioteca.ibict.br/cgi-bin/koha/opac-search.pl?advsearch=1&idx=kw%2Cwrdl&q=" + termo;
    }
}

window.onload = function() {
    var elementBody = document.querySelector('body');
    var elementBtnIncreaseFont = document.getElementById('increase-font');
    var elementBtnDecreaseFont = document.getElementById('decrease-font');
    // Padrão de tamanho, equivale a 100% do valor definido no Body
    var fontSize = 100;
    // Valor de incremento ou decremento, equivale a 10% do valor do Body
    var increaseDecrease = 5;

    // Evento de click para aumentar a fonte
    elementBtnIncreaseFont.addEventListener('click', function(event) {
        fontSize = fontSize + increaseDecrease;
        elementBody.style.fontSize = fontSize + '%';
    });

    // Evento de click para diminuir a fonte
    elementBtnDecreaseFont.addEventListener('click', function(event) {
        fontSize = fontSize - increaseDecrease;
        elementBody.style.fontSize = fontSize + '%';
    });
}

jQuery(document).ready(function($) {

    const disqus = $('#disqus_thread');

    disqus.ready(function() {
        setTimeout(function() {
            if (disqus.children().length >= 3) {
                const comments = disqus.find('iframe:nth-child(2)').detach();
                disqus.empty().append(comments);
            }
        }, 2000);
    });

});