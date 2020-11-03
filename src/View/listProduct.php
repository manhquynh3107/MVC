<!doctype html>
<html lang="en">
<head>
    <title>Danh Sach San Pham</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<a href="index.php?page=addProduct">Add Product</a>
<form method="post" action="index.php?page=search">
    <input type="text" placeholder="search" name="search">
    <button type="submit" class="btn-facebook">Search</button>
    <a href="index.php" class="btn btn-warning">Pre</a>
</form>
<table class=" btn-primary">
    <tr>
        <td>Stt</td>
        <td>Name</td>
        <td>Price</td>
        <td>Color</td>
    </tr>

    <?php foreach ($phones as $key=>$phone):?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $phone->getName() ?></td>
        <td><?php echo $phone->getPrice() ?></td>
        <td><?php echo $phone->getColor()?></td>
        <td> <a href="index.php?page=delete&id=<?php echo $phone->getId()?>">Delete</a> </td>
        <td> <a href="index.php?page=update&id=<?php echo $phone->getId()?>">Update<</td>
    </tr>
        <?php endforeach; ?>

</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>