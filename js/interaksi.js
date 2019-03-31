function buka(kelas, pos) {
	var id = pos.parentNode.parentNode.parentNode.parentNode.id;
	tutup('.'+id);
	document.querySelector(kelas).classList.add('show')
}
function start(){
	document.querySelector('.home').classList.add('show')
}
function tutup(kelas){
	let selektor = document.querySelector(kelas);
	if (selektor.classList.contains('show')) {
		selektor.classList.remove('show');
	}
}