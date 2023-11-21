document.addEventListener("DOMContentLoaded", () => {

  var modal = document.getElementById('modal');
  let dialog = document.getElementsByTagName('dialog');
  let status = document.querySelector('.check-state');
  var checkbox = document.querySelector("input[name=checkbox]");

  function check() {
    document.getElementById("checkbox").checked = true;
}

function uncheck() {
    document.getElementById("checkbox").checked = false;
}

  let escape = () => {console.log("esc...")};

  checkbox.addEventListener('change', function() {
      if (this.checked) {
          check();
          modal.showModal();
          console.log('Menu Open');
      } else {
          uncheck();
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
    if (event.target == modal ) {

      checkbox.click();
      modal.close();

    }
  }
});

