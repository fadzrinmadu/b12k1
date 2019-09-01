function is_username_valid(username) {
	let regexp = /^[^0-9\[\]\?\/<~#.\!@\$%\^\&\*\(\)\+\=\{\}:";'\,>]{1}[a-zA-Z0-9]{5,9}/;
	return regexp.test(username);
}

console.log(is_username_valid('A+Xrutaf888')); // true ,
console.log(is_username_valid('1Diana')); // false