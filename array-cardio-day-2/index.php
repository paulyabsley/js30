<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Cardio</title>
</head>
<body>
	<p><em>Psst: have a look at the JavaScript Console</em></p>

<script>
	// ## Array Cardio Day 2

	const people = [
		{ name: 'Wes', year: 1988 },
		{ name: 'Kait', year: 1986 },
		{ name: 'Irv', year: 1970 },
		{ name: 'Lux', year: 2015 }
	];

	const comments = [
		{ text: 'Love this!', id: 523423 },
		{ text: 'Super good', id: 823423 },
		{ text: 'You are the best', id: 2039842 },
		{ text: 'Ramen is my fav food ever', id: 123523 },
		{ text: 'Nice Nice Nice!', id: 542328 }
	];

	// Some and Every Checks
	// Array.prototype.some() // is at least one person 19?
	// const isAdult = people.some(function(person) {
	// 	const currentYear = (new Date()).getFullYear();
	// 	if (currentYear - person.year >= 19) {
	// 		return true;
	// 	}
	// });
	// Or do it hot shot style
	const isAdult = people.some(person => ((new Date()).getFullYear()) - person.year >= 19);
	console.log({isAdult});

	// Array.prototype.every() // is everyone 19?
	const allAdults = people.every(person => ((new Date()).getFullYear()) - person.year >= 19);
	console.log({allAdults});

	// Array.prototype.find()
	// Find is like filter, but instead returns just the one you are looking for
	// find the comment with the ID of 823423
	// Array.prototype.findIndex()
	// const comment = comments.find(function(comment) {
	// 	if (comment.id === 823423) {
	// 		return true;
	// 	}
	// });
	// Or the same thing but hot shot
	const comment = comments.find(comment => comment.id === 823423);
	console.log(comment);

	// Find the comment with this ID
	// delete the comment with the ID of 823423
	const index = comments.findIndex(comment => comment.id === 823423);
	// console.log(index);
	// comments.splice(index, 1);
	console.table(comments);

	const newComments = [
		...comments.slice(0, index),
		...comments.slice(index + 1)
	];
	console.table(newComments);

</script>
</body>
</html>