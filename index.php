<!doctype html>
<html lang="en">
    <head>
        <title>Create Tasks</title>
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
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container border border-dark rounded my-5 p-4" style = "max-width : 600px">
            <div class="d-flex justify-content-between align-item-center">
                    <h1 class="text-center">Create Task</h1>  
                    <a href="record.php"><button type="submit" class="btn btn-primary mt-3 align-item-left">View Task</button></a>
                    </div>
                     <form action="insert.php" method="post">
                    <br>
                    <div class="mb-4">
                        <label for="" class="form-label">Title</label>
                        <input
                            type="text"
                            class="form-control"
                            name="title"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Title"
                            required
                        />
                    </div>
                    <div class="container mt-5">
                    <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" name="desc" id="desc" placeholder="Enter description" maxlength="500" rows="3" required></textarea>
                    <small class="form-text text-muted">Maximum length: 500 characters.</small>
                </div>
                        <br>
                         <button type="submit" class="btn btn-primary mt-3">Create Task</button>   
                
                    </div>
                    
                </form>

            </div>
             
            
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
