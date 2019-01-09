<html>
<head>
<title>Manage Students</title>
</head>
<body>
<h1>Manage Students</h1>
<table border="1px">
<tr><th></th><th>Name</th><th>Age</th><th>Actions</th></tr>
<?php foreach($students as $key=> $student){ ?>
<tr><td><?php echo $key+1; ?></td><td><?php echo $student["name"]; ?></td><td><?php echo $student["age"]; ?></td><td><a href ="<?php echo site_url('student/edit/').'?id='.$student['_id']->{'$id'}; ?> ">Edit</a>&nbsp;<a href ="<?php echo site_url('student/delete').'?id='.$student['_id']->{'$id'}; ?> ">Delete</a></td></tr>
<?php } ?>
</table>
</body>
</html>


