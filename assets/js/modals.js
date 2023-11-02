document.addEventListener("DOMContentLoaded", () => {

  var modal = document.getElementById('modal');
  var modalOpen = document.getElementById('modal-open');
  var modalClose = document.getElementById('modal-close');
    
  modalOpen.addEventListener('click', (e) => {
    modal.showModal();
  })

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.close();
    }
  }
});

