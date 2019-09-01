function test() {
	let kata = ['pro', 'gram', 'merit', 'program', 'it', 'programmer'];

	let userInput = 'programit';
	let tmp = []

	let n = 0;
	while (n < kata.length) {
		for (let i = 0; i < kata.length; i++) {
			if (userInput.search(kata[i]) != -1) {
				userInput = userInput.replace(kata[i], '');
				tmp.push(kata[i]);
			}
		}
		console.log(tmp.join(','));
		n++;
	}
}

test();