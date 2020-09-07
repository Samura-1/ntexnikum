<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body> 
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Добавить статью</h1>
		</div>
	</div>
		<div class="form-add">
		<form method="post" action="send.php" id="add-form" enctype="multipart/form-data">
			<label for="">
				Название Cтатьи
				<input type="text" name="title" value="" class="form-item" autofocus required>
			</label>
            <hr class="line-add">           
            <label for="">
                Главная фотография Новости
                <input type="file" name="imge1" class="form-item" autofocus required>
            </label>            
            <hr class="line-add">
            <label for="">
                Фотография к посту 
                <input type="file" name="imge2" class="form-item" autofocus>
            </label>            
            <hr class="line-add"> 
            <label for="">
                Вторая фотография к посту 
                <input type="file" name="imge3" class="form-item" autofocus>
            </label>            
            <hr class="line-add">             
			<label for="">
				Короткий текст
				<textarea cols="10" rows="10" type="text" name="introtext" class="form-item" autofocus required  ></textarea>
			</label>			
			<hr class="line-add">			
			<label for="">
				Содержимое
				<textarea cols="10" rows="10" type="text" name="fulltext" class="form-item" autofocus required  ></textarea>				
			</label>
			<label for="">
				Дата
				<input type="date" name="date" class="form-item" autofocus required >
			</label>			
			<hr class="line-add">			
			<input type="submit" value="СОХРАНИТЬ" name="submit" class="btn-sub">
			<hr>
			<a href="index.php" class="btn-back">Назад</a>
		</form>			
		</div>
	</div>
</body>
</html>
