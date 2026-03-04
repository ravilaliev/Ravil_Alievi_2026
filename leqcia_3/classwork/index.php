<?php
include "questions.php";

echo "<pre>";
print_r($questions);
echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="lecturer.php" method="post">
    <table class="questions-tb">
        <tr>
            <th>Questions</th>
            <th>Answers</th>
            <th>Max Point</th>
        </tr>

        <?php foreach ($questions as $index => $q): ?>
        <tr>
            <td><?= $q['question']; ?></td>
            <td>
                <input type="text" name="answers[]">
            </td>
            <td><?= $q['max_point']; ?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="3">
                Student:
                <input type="text" name="firstname" placeholder="name">
                <input type="text" name="lastname" placeholder="lastname">
                <button type="submit">Send</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>