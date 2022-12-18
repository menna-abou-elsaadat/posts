Database Structure
-------------------

1- users table (id, name, email, password, role (user|author))

2- posts table (id, post, user_id)

3- comments table (id, comment, user_id)

========================================================================================

Creating Post & comment cycle
------------------------------

	Admin
	-----
		- Can create post
		- Can view all posts and edit, delete them
		- Can add comments to any post
		- Can edit, delete any comment

	Author
	------
		- Can create post
		- Can view only his posts and edit , delete them
		- Can add comments to his posts only
		- Can edit, delete his comments only

=========================================================================================

Endpoints
---------

1- login
	
	URL: /api/login (method:post)
	params: email, password
	return : token 

2- posts

	URL: /api/posts (method:get)
	authentication : token
	return : posts and their comments as json

=========================================================================================

Technologies used
------------------

 -livewire
 -Laravel Sanctum 