<?
if($errors){
	foreach($errors as $error){
	print '<div class="alert alert-error">'.$error.'</div>';
	}
}
?>
<br/>

<form action="" method="post" enctype="multipart/form-data">
<table>
	<tr>
	<td>Название <span class="required">*</span></td><td><input class="span5" type="text" name="banner_title"></td>
	</tr>
	<tr>
	<td>Ссылка </td><td><input class="span5" type="text" name="banner_url"></td>
	</tr>
	<tr>
	<td>Изображение <span class="required">*</span> </td><td><input type="file" name="image"></td>
	</tr>
	<tr>
	<td>Активна</td><td><input type="checkbox" name="banner_status" value="1"></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input class="btn" type="submit" name="submit" value=" Сохранить "></td>
	</tr>
</table>
</form>