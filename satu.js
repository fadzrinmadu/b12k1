function getBiodata() {
	let myBiodata = {
		name: 'Muhammad Fadzrin Madu',
		age: 19,
		address: 'Kendari, Sulawesi Tenggara',
		hobbies: ['Dengar Musik', 'Coding', 'Main Gitar', 'Bermain Game'],
		is_married: false,
		list_school: [
			{
				name: 'STMIK CATUR SAKTI KENDARI',
				year_in: 2017,
				year_out: null,
				major: null
			}
		],
		skills: [
			{skill_name: 'Full Stack Designer', level: 'beginner'}
		],
		interest_in_coding: true
	};
	return JSON.stringify(myBiodata);
}

console.log(getBiodata());