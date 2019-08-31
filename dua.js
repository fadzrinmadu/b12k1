function is_username_valid(username) {
	let regexp = /^[^\b0-9\s\[\]\?\/\<\~\#\'\!\@\$\%\^\&\*\(\)\+\=\}\|\:\"\;\'\,\>\}][a-zA-Z0-9]{5,8}$/
	return regexp.test(username);
}

function is_password_valid(password) {
	let regexp = /[a-zA-Z0-1]\=/;
	return regexp.test(password);
}

console.log(is_username_valid('Xrutaf888')); // true
console.log(is_username_valid('1Diana')); // false
console.log(is_password_valid('passW0rd=')); // true
console.log(is_password_valid('C0d3YourFuture!#')); // false
