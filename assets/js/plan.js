/** @format */

const butt = document.getElementById('butt');
const close = document.getElementById('close');
const dialog = document.querySelector('dialog');

butt.addEventListener('click', () => {
	dialog.showModal();
});
close.addEventListener('click', () => {
	dialog.close();
});
