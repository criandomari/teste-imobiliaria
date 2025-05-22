function abrirModal(img) {
  let modal = document.createElement('div');
  modal.classList.add('modal');
  modal.innerHTML = `<div class="modal-content"><img src="${img.src}"><span onclick="this.parentElement.parentElement.remove()">Fechar</span></div>`;
  document.body.appendChild(modal);
}
