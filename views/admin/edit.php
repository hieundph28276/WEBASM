<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="?url=add-product" method="post">
    <div class="form-group">
            <label>ID</label>
            <input type="text" name="" value="<?php echo $products['id'] ?>" class="form-control">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $products['name'] ?>" class="form-control">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>price</label>
            <input type="text" name="price" value="<?php echo $products['price'] ?>" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>