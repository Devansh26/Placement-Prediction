<?php
// connect to the database
session_start();
$user= $_SESSION['username'];

$conn = mysqli_connect('localhost', 'root', '', 'placement');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) { ?>        
        <script type="text/javascript">
        window.location.href='index.php';
        alert("You file extension must be .pdf or .docx");
        </script>
    <?php
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql3="SELECT * from files WHERE email='$user'";
            $retval = mysqli_query($conn,$sql);            
            $numberAffectedRow = mysqli_num_rows($retval);
            if($numberAffectedRow>0){
                $sql = "UPDATE files SET name='$filename' WHERE email='$user'";
            }else{
                $sql = "INSERT INTO files (name, email, size, downloads) VALUES ('$filename','$user', $size, 0)";    
            }
        
            
            $sql2="UPDATE users SET resume='$filename' WHERE email='$user'";
            if (mysqli_query($conn, $sql)) {
                ?>
                      
                <?php
            }
            if (mysqli_query($conn, $sql2)) {
                ?>
                      
                <?php
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}