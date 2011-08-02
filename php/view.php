<?php

$dsn = 'mysql:dbname=blog;host=localhost';
$user = 'ichikawa';
$password = 'hogehoge';
$db = new PDO($dsn, $user, $password);

$id = (int)$_GET['id'];
$stm = $db->prepare(
		'SELECT * FROM posts WHERE id=?;'
		);
$stm->execute(array($id));

$post = $stm->fetch(PDO::FETCH_LAZY);

?>

<dl>
<dt>id</dt>
<dd><?php echo htmlspecialchars($post->id); ?></dd>
<dt>name</dt>
<dd><?php echo htmlspecialchars($post->name); ?></dd>
<dt>text</dt>
<dd><?php echo nl2br(htmlspecialchars($post->text)); ?></dd>
<dt>created</dt>
<dd><?php echo htmlspecialchars($post->created); ?></dd>
<dt>modiified</dt>
<dd><?php echo htmlspecialchars($post->modified); ?></dd>
</dl>