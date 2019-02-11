<?php
/**[{"userId":1,"id":1,"title":"sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
	"body":"quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae
	 ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"},
{"userId":1,"id":2,"title":"qui est esse",
	"body":"est rerum tempore vitae\nsequi sint nihil reprehenderitdolor beatae ea dolores neque\nfugiat
	 blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"},
{"userId":1,"id":3,"title":"ea molestias quasi exercitationem repellat qui ipsa sit aut",
	"body":"et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis
  pariatur\nmolestiae porro eius odio et labore et velit aut"},
{"userId":1,"id":4,"title":"eum et est occaecati",
	"body":"ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic
	 commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit"},
{"userId":1,"id":5,"title":"nesciunt quas odio",
	"body":"repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse
	 voluptatibus quis\nest aut tenetur dolor neque"}]

/**
 * using javascript map array prototype and concatenation combine the post body with the post title
 */
/**var oldPostList = [post0, post1, post2, post3, post4];

//pass function to map
const post0 = ["userId", "id", "title", "body"];
const post1 = ["userId", "id", "title", "body"];
const post2 = ["userId", "id", "title", "body"];
const post3 = ["userId", "id", "title", "body"];
const post4 = ["userId", "id", "title", "body"];

const posts = **/

/**var posts = ["userId", "id", "title", "body"];
//pass a function to the map

const newPosts = posts.map()

/**
 * Answer from George
 */
//create variable for array so it can be used
const array = [{"userId":1,"id":1,"title":"sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
	"body":"quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae
	 ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"},
{"userId":1,"id":2,"title":"qui est esse",
	"body":"est rerum tempore vitae\nsequi sint nihil reprehenderitdolor beatae ea dolores neque\nfugiat
	 blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"},
{"userId":1,"id":3,"title":"ea molestias quasi exercitationem repellat qui ipsa sit aut",
	"body":"et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis
  pariatur\nmolestiae porro eius odio et labore et velit aut"},
{"userId":1,"id":4,"title":"eum et est occaecati",
	"body":"ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic
	 commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit"},
{"userId":1,"id":5,"title":"nesciunt quas odio",
	"body":"repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse
	 voluptatibus quis\nest aut tenetur dolor neque"}];

const newArray = array.map(index => `${index.title}: {index.body}`);

//implicit return, it is assumed you are returning. this simplifies the code, same thing as:
//  const newArray = array.map(index => {
//  	return `${index.title}: ${index.body}`
//  	});
//array.prototype.toString
//index has no special meaning, could have used any word example bubble.title and bubble.body