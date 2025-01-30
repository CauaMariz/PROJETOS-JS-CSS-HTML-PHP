function showMenu(){
  let menu = document.querySelector('.menu');
  menu.classList.toggle('showMenu');

  if (menu.classList.contains('showMenu')){
    menu.innerHTML = ' <ul><li><a href="home.php">Início</a></li><li><a href="#">Empréstimos</a><li><li><a href="#">Investimentos</a></li><li><a href="#">Transferencias</a></li><li><a href="#">Configuracoes</a></li></ul>';
  }
  else{
    menu.innerHTML = '';
  }
}