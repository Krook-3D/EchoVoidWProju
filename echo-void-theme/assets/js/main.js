const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.main-navigation');

if (menuButton && navigation) {
	menuButton.addEventListener('click', () => {
		const isOpen = navigation.classList.toggle('is-open');
		menuButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
	});
}
