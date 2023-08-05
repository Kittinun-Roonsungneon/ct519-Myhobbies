<?php
// Assuming you have a database connection established
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Update the record in the database
    $query = "UPDATE list SET name = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssi", $name, $description, $id);

    if ($stmt->execute()) {
        // echo 'Data updated successfully.';
    } else {
        echo 'Error updating data.';
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the record from the database
    $query = "SELECT * FROM list WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Hobbies</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
    <?php
    include('navbar.php');
    ?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">

    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 text-center tm-text-primary">
                แก้ไขงานอดิเรก
            </h2>
        </div>
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();     
                            ?>
                            <form action="edit_hobbies.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="ชื่อสินค้า" name="name" value="<?php echo $row['name'];?>">
                                <label for="description" class="form-label">Description:</label>
                                <input type="text" class="form-control" id="description" placeholder="รายละเอียดสินค้า" name="description" value="<?php echo $row['description'];?>">
                                <label for="myfile">Select a file:</label>
                                <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png">
                            </div>
                            <?php 
                                } 
                            }
                            ?>
                            <div class="text-center"> <!-- Center the button within this div -->
                                <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div> <!-- container-fluid, tm-container-content -->
    
    <?php
        include('footer.php');
    ?>
    
</body>
<script src="js/plugins.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
    
</script>
</html>
<?php
   $conn->close(); 
?>