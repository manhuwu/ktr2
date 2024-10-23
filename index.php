<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PHP Example</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="connect.php">Connect MySQL</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-3">
        <nav class="alert alert-primary" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/php.png" class="card-img-top" alt="Laravel Programming">
                    <div class="card-body">
                        <h5 class="card-title">Học lập trình</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/bootcamp.png" class="card-img-top" alt=".NET Programming">
                    <div class="card-body">
                        <h5 class="card-title">Bootcamp</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/fullstack.jpg" class="card-img-top" alt="Spring Boot Programming">
                    <div class="card-body">
                        <h5 class="card-title">Học khó vl</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/php-mysql.png" class="card-img-top" alt="Angular Programming">
                    <div class="card-body">
                        <h5 class="card-title">Muốn nghỉ học</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php
        session_start();
        if (isset($_POST['submit'])) {
            // Lấy tên file từ form
            $filename = $_POST['filename'];
        
            // Đường dẫn để lưu file
            $filePath = __DIR__ . '/' . $filename;
        
            // Dữ liệu cần ghi vào file (ví dụ: danh sách khóa học)
            $data = "Danh sách khóa học PHP:\n";
            $data .= "1. Khóa học bootcamp PHP\n";
            $data .= "2. Khóa học lập trình web bằng PHP và MySQL\n";
            $data .= "3. Khóa Học Lập Trình PHP Cơ Bản đến Nâng Cao\n";
            $data .= "4. 141 GIỜ HỌC PHP FULLSTACK PLUS\n";
        
            // Ghi file (nếu file đã tồn tại, nó sẽ ghi đè)
            file_put_contents($filePath, $data);
        
            // Thông báo thành công
            echo '<div class="alert alert-success" role="alert">File đã được ghi thành công!</div>';
        }

        ?>
        <hr>
        <form class="row" method="POST" enctype="multipart/form-data">
            <div class="col">
                <div class="form-floating mb-3">
                    <input value="data" type="text" class="form-control" id="server" placeholder="File name" name="filename">
                    <label for="data">File name</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Write file</button>
            </div>
            <div class="col">
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>