<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitalize v.2</title>
    <link rel="stylesheet" href="/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color: #f2f2f2;
    }

    footer{
        cursor: pointer;
    }

    .btn1{
        font-size: 130%;
        color: #1a75ff;
        transition: .5s ease;
    }

    .btn1:hover{
        color: #0052cc;
    }
</style>
<body>
    <div class="container-lg">
        <div class="text-center fs-3 text-light bg-primary rounded-3 py-2 my-3">lowercase to UPPERCASE</div>
        <div class="row m-2 border rounded-3 p-3 bg-light">
            <div class="col-md-6">
                <form action="index.php" method="post">
                <p class="<?php echo $alert; ?>"><?php echo $error; ?></p>
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text bg-white" id="inputGroup-sizing-sm">Text</span>
                    <input type="text" name="sentence" autocomplete="off" class="form-control">
                    </div>
                    <input type="submit" name="sentenceOutput" class="btn btn-sm btn-primary">
                </form>
                <button class="btn1 btn border-0 "><i class="mt-2 d-none d-md-block fa-solid fa-copy"></i></button>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
            <textarea name="text" class="form-control"disabled cols="35" rows="10"><?php echo htmlspecialchars($sentence);?></textarea>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
            <button class="btn1 btn border-0 "><i class="mt-2 d-md-none fa-solid fa-copy"></i></button>
            </div>
        </div>
    </div>
    <footer class="footer text-center text-secondary mt-4">© 2024 Favour's Website (Project-1)</footer>
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>