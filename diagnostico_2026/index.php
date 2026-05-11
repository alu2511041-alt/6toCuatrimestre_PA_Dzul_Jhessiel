<?php

$conn = new mysqli("localhost", "root", "messi123", "todo_app");


if (isset($_POST['agregar'])) {
    $desc = $_POST['descripcion'];
    $conn->query("INSERT INTO tareas (descripcion) VALUES ('$desc')");
    header("Location: index.php");
}


if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $conn->query("DELETE FROM tareas WHERE id = $id");
    header("Location: index.php");
}


$tareas = $conn->query("SELECT * FROM tareas ORDER BY id DESC");
$total = $tareas->num_rows;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
</head>
<body>
    <h1>To Do List</h1>


    <form method="POST">
        <input type="text" name="descripcion" placeholder="Nueva tarea" required>
        <button type="submit" name="agregar">Agregar</button>
    </form>

    <p><?php echo $total;?> tareas</p>

    <ul>
        <?php while($t = $tareas->fetch_assoc()){?>
            <li>
                <?php echo $t['descripcion'];?>
                <a href="?eliminar=<?php echo $t['id'];?>">Eliminar</a>
            </li>
        <?php }?>
    </ul>
</body>
</html>