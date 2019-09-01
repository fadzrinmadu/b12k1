function urutAngka() {
	angka = angka.toString();
	angka = angka.split('0');

	for(let i = 0; i < angka.length; i++) {
		angka[i] = angka[i].split('');
		angka[i].sort();
		angka[i] = angka[i].join('');
	}
	angka = parseInt(angka.join(''));
	return angka;
}

let angka = 5956560159466056;
console.log(urutAngka(angka));

