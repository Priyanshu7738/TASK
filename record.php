<!doctype html>
<html lang="en">
    <head>
        <title>new</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet">

    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <br>
            <h1 class="text-center border border-dark">View Task</h1>           
<?php
            
    include "connection.php";

    $sql="SELECT * FROM `tasks` ORDER BY `id` DESC";
    $result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
    
    echo '<div class="container mt-5">';
    echo '<div class="row align-items-center g-2">';
    while($rows=mysqli_fetch_assoc($result)) {
        $status = strtolower($rows['status']);
        switch ($status) {
            case 'pending':
                $btnClass = 'btn-secondary';
                break;
            case 'in progress':
                $btnClass = 'btn-warning';
                break;
            case 'completed':
                $btnClass = 'btn-success'; 
                break;
            default:
                $btnClass = 'btn-secondary';
        }
        
    echo '<div class="col-4">';
    echo '    <div class="card">';
    echo '        <div class="card-body">';
    echo '            <h4 class="card-title">' . htmlspecialchars($rows['title']) . '</h4><hr>';
    echo '            <p class="card-text">' . htmlspecialchars($rows['description']) . '</p><hr>';
    echo '            <div class="container d-flex justify-content-between">';
    echo '                <a href="#" class="btn ' . htmlspecialchars($btnClass) . '">' . htmlspecialchars($rows['status']) . '</a>';
    echo '                <span class="border border-dark rounded p-2 text-dark">' . htmlspecialchars($rows['created_at']) . '</span>';
    echo '            </div>';
    echo '            <hr>';
    echo '            <div class="container d-flex justify-content-between">';
    echo '                <a href="edit.php?id=' . $rows['id'] . '" class="btn btn-primary">Edit</a>';
    echo '                <a href="delete.php?id=' . $rows['id'] . '" class="btn btn-danger" onclick="return con()">Delete</a>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
    }
    
    echo '</div>';
    echo '</div>';
} else {
    echo '<p>No tasks found.</p>';
}

$conn->close();
?>
<script>
    function con(){
       return confirm("Are You Sure you want to delete this Task?");
    }
</script>
       </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
