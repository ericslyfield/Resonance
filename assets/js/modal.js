document.addEventListener("DOMContentLoaded", () => {

  const modal = document.getElementById('modal');
  const modalOpen = document.getElementById('modal-open');
  const modalClose = document.getElementById('modal-close');
    
  modalOpen.addEventListener('click', () => {
    modal.showModal();
    console.log('Opened...')
  })

  modalClose.addEventListener('click', () => {
    modal.close();
    console.log('Closed...')
  })

});

