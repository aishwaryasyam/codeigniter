<html>
<head>
<title>Add Students</title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<form action="<?php echo site_url('student/edit'.$student_item['name']); ?>" method="post">

<table>
<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $student['name'];?>"/></td></tr>
<tr><td>Age</td><td><input type="text" name="age" value="<?php echo $student_item['age'];?>"/></td></tr>
<tr><td></td><td><input type="submit" name="edit" value="edit"/></td></tr>
</table>
</form>

</body>
</html>


 
