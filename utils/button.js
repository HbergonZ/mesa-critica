// Selecione o ícone do menu e a barra lateral
const menuIcon = document.querySelector('.menu-icon'); // Alterado para querySelector
const sidebar = document.querySelector('.sidebar');
const menuIconReturn = document.querySelector('.menu-icon-return');

// Adicione um ouvinte de evento de clique ao ícone do menu
menuIcon.addEventListener('click', toggleSidebar);
menuIconReturn.addEventListener('click', toggleSidebar);

// Função para alternar a visibilidade da barra lateral
function toggleSidebar() {
    console.log('Ícone do menu clicado');
    sidebar.classList.toggle('show'); // Adiciona ou remove a classe 'show' da barra lateral
    menuIcon.classList.toggle('off');
    menuIconReturn.classList.toggle('show');
}
