<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- resume.php -->
<?php
$title = 'Uniplay - Resume';
include '../Includes/header.php';
?>

<!-- Resume Section -->
<div class="resume-container" style="width: 90%; height: 100vh; padding: 20px;">
    <h1>My Resume</h1>
    <!-- Embed PDF using the <object> tag -->
    <object data="..\Resume\Resume.pdf" type="application/pdf" width="100%" height="calc(100vh - 60px)">
        <p>Your browser does not support PDFs. <a href="..\Resume\Resume.pdf">Download the resume</a>.</p>
    </object>
</div>

<!-- Footer Section -->
<?php include '../Includes/footer.php'; ?>
</body>

</html>