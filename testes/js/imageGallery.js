


// Uma galeria de imagens é um conjunto de imagens com botões de remoção correspondentes.
// Este é o código HTML de uma galeria com duas imagens:

// <div class="image">
//   <img src="https://goo.gl/kjzfbE" alt="First">
//   <button class="remove">X</button>
// </div>
// <div class="image">
//   <img src="https://goo.gl/d2JncW" alt="Second">
//   <button class="remove">X</button>
// </div>


// Implemente uma função de configuração que ao receber um evento de click implementa a seguinte lógica:
// * Quando o botão da classe "remove" é clicado, seu elemento div pai deve ser removido da galeria


// Por exemplo, depois que a primeira imagem da galeria acima foi removida, o código HTML ficaria assim:

// <div class="image">
//   <img src="https://goo.gl/d2JncW" alt="Second">
//   <button class="remove">X</button>
// </div>



function setup () {
 
<div class="image" id="imagem1">
  <img src="https://goo.gl/kjzfbE" alt="First">
  <button id="btn" >X</button>
</div>
<div class="image" id="imagem2">
  <img src="https://goo.gl/d2JncW" alt="Second">
  <button id="btn2" >X</button>
</div>

}

// Example case. 
document.body.innerHTML = `
<div class="image" id="imagem1">
  <img src="https://goo.gl/kjzfbE" alt="First">
  <button id="btn" >X</button>
</div>
<div class="image" id="imagem2">
  <img src="https://goo.gl/d2JncW" alt="Second">
  <button id="btn2" >X</button>
</div>`;

setup();

$(".remove").get(0).click();
console.log(document.body.innerHTML);