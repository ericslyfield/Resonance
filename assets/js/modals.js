document.addEventListener("DOMContentLoaded", () => {

  var modal = document.getElementById('modal');
  var checkbox = document.querySelector("input[name=menu-checkbox]");


  let escape = () => {console.log("esc...")};

  checkbox.addEventListener('change', function() {
      if (this.checked) {
          modal.showModal();
          console.log('Menu Open');
      } else {
          modal.close();
          console.log('Menu Closed');
      }
  })

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      checkbox.checked = false;
      modal.close();
      console.log('Escape Key Pressed...');
    }
  });

  window.onclick = function(event) {
    if (event.target == window ) {
      checkbox.checked = false;
      modal.close();

    }
  }
});

