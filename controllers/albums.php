<?php
	
	function albums_add()
	{
		require(MODELS.'users.php');
		require(MODELS.'albums.php');
		$cur_user = users_getCurrentUser();
		if ($cur_user['id'] != -1)
		{
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$name = $_POST['name'];
				$description = $_POST['description'];
				$redirect = isset($_POST['redirect']);
				$album_id = albums_insert($name, $description, $cur_user);
				if ($redirect)
				{
					header('Location:'.WEB.'photos/upload?albumId='.$album_id);
					exit();
				}
				else
				{
					header('Location:'.WEB.'users/'.$cur_user['id'].'/albums');
					exit();
				}
			}
			else
			{
				$redirect = isset($_GET['redirect']);

				require(VIEWS.'add_album.php');
			}

		}
		else
			header('location:'.WEB.'login');

	}

	function albums_showByUser($id)
	{
		require(MODELS.'users.php');
		require(MODELS.'albums.php');

		$cur_user = users_getById($id);

		if($cur_user === false)
		{
			header('location:'.WEB);
		}
		else
		{
			$albums = albums_getByUser($cur_user);
			require(VIEWS.'show_albums.php');
		}

	}

	function albums_showById($id)
	{
		require(MODELS.'albums.php');
		require(MODELS.'users.php');

		$cur_user = users_getCurrentUser();

		$album = albums_getById($id);
		if ($album === false)
		{
			echo "Нельзя просто так взять и показать";
		}
		else
		{
			require(MODELS.'photo.php');
			$photo = photos_getByAlbum($id);

			require(VIEWS.'show_photos_by_album.php');

		}
	}

?>