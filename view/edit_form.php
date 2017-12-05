<form action="../controller/edit.php?id=<?php echo $_GET["id"] ?>" method="post">
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="address" placeholder="address" required>
    <input type="text" name="salary" placeholder="salary" required>
    <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
    <input type="submit">
</form>