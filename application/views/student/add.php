<html>
<head>
<title>Add Students</title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<form action="<?php echo site_url('student/save'); ?>" method="post">
<input type="hidden" name="id" value="<?php if(isset($student['_id']->{'$id'})) echo $student['_id']->{'$id'};?>"/>
<table>
<tr><td>Name</td><td><input type="text" name="name" value=" <?php if(isset($student['name'])) echo $student['name'];?>"/></td></tr>
<tr><td>Age</td><td><input type="text" name="age" value=" <?php if(isset($student['age'])) echo $student['age'];?>"/></td></tr>
<tr><td></td><td><input type="submit" name="add" value="Add"/></td></tr>
</table>
</form>
</body>
</html>





