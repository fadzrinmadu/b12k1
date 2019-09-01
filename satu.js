function getBiodata() {
	let myBiodata = {
		name: 'Muhammad Fadzrin Madu',
		age: 19,
		address: 'Kendari, Sulawesi Tenggara',
		hobbies: ['Dengar Musik', 'Coding', 'Main Gitar', 'Bermain Game'],
		is_married: false,
		list_school: [
			{}
		], // <-- HERE
		skills: [
			{skill_name: 'Full Stack Designer', level: 'beginner'}
		],
		interest_in_coding: true
	};
	return JSON.stringify(myBiodata);
}

console.log(getBiodata());