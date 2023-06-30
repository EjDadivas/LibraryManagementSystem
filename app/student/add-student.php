<?php
include('../../format/header.php');
include('../../format/sidebar.php');
?>
<div class="container">
    <br>
    <h1 class="text-center">Add Student</h1>
    <br>

    <form action="" method="POST">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Student ID:</th>
                <td>
                    <input type="text" name="student_id" class="form-control" placeholder="Enter student id" required>
                </td>
            </tr>
            <tr>
                <th>First Name:</th>
                <td>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter first name" required>
                </td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter last name" required>
                </td>
            </tr>
            <tr>
                <th>Course:</th>
                <td>
                    <input type=" text" name="course" class="form-control" placeholder="Enter course" required>
                </td>
            </tr>
            <tr>
                <th>Section</th>
                <td>
                    <input type="text" name="section" class="form-control" placeholder="Enter section" required>
                </td>
            </tr>



        </table>

        <div class="text-center">
            <input type="submit" name="submit" value="Add Student" class="btn-secondary btn-lg">
        </div>
    </form>

</div>

<?php
include('../../format/footer.php');

if (isset($_POST['submit'])) {
    $student_id = $_POST['student_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $section = $_POST['section'];

    $sql = "INSERT INTO student SET
    student_id = $student_id,
    firstname = '$firstname',
    lastname = '$lastname',
    course = '$course',
    section = '$section'
        ";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($res == TRUE) {
        echo "<script> 
        window.location.href='students.php';
        // var r = confirm('New Student Added. Add another student?');
        // if (r == true) {
        //     window.location.href='add-student.php';
        // } else {
        //     window.location.href='students.php';
        // }
        
        </script>";
    } else {
        echo "<script> alert('Failed') 
       </script>";
    }
}

?>