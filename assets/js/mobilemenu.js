function showMenu(){

  if (document.getElementById('modal-menu').style.display == 'none') {
    document.getElementById('modal-menu').style.display = 'block';

  } else {
    document.getElementById('modal-menu').style.display = 'none';
  }
}

showMenu();

function closeMenu(){

  if (document.getElementById('modal-menu').style.display == 'block' || '') {
    document.getElementById('modal-menu').style.display = 'none';
  } else {
    document.getElementById('modal-menu').style.display = 'block';
  }
}

closeMenu();