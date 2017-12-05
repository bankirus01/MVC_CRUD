<table border="1px">
    <td>
        <a href="create.php">Create</a>
    </td>
    <?php
    foreach ($list as $element) { ?>
        <tr>
            <td> <?php echo $element['name']; ?>  </td>
            <td> <?php echo $element['address']; ?></td>
            <td> <?php echo $element['salary']; ?> </td>
            <td>
                <a href="edit.php?id=<?php echo $element['id'];?>"> Update</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $element['id'];?>"> Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>