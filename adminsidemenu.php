<?php

	if(!isset($_SESSION['user']))
		header('location:index.php');
?>
	<ul class="list-unstyled">
        <a href="adminhome.php"><li>Home</li></a>               
        <a href="faculty_reg.php"><li>Faculty Registration</li></a>
        <a href="edit_faculty_home.php"><li>Edit Faculty</li></a>
        <a href="new_article.php"><li>New Article</li></a>
        <a href="edit_article_home.php"><li>Edit Article</li></a>
        <a href="gallery_image_upload.php"><li>Upload Image</li></a>
        <a href="gallery_image_show_admin.php"><li>View Images</li></a>
        <a href="upload_file.php"><li>Upload File</li></a>
        <a href="download_show.php"><li>View Files</li></a>
        <a href="editncc.php"><li>Add/Remove NCC </li></a>
        <a href="recruiterform.php"><li>Recruiter Form</li></a>
        <a href="edithomerecruiter.php"><li>Edit Recruiter</li></a>
        <a href="edithomerecruited.php"><li>Edit Recruited</li></a>
		<a href="changepassword.php"><li>Change Admin Password</li></a>
	</ul>