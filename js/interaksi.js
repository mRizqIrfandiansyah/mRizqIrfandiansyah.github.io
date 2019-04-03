function buka(kelas, pos) {
	var id = pos.parentNode.parentNode.parentNode.parentNode.id;
	tutup_navbar('content-'+id);
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
function buka_navbar(pos){
	var id = pos.parentNode.parentNode.id;
	var selektorId = document.getElementById(id);
	if (selektorId.classList.contains('show-nav')) {
		selektorId.classList.remove('show-nav');
	} else {
		selektorId.classList.add('show-nav')
	}
}
function tutup_navbar(id){
	var selektorId = document.getElementById(id);
	if (selektorId.classList.contains('show-nav')) {
		selektorId.classList.remove('show-nav');
	}
}