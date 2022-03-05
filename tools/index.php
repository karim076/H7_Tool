<!doctype html>
<html lang="nl">

<head>
    <title>Toolshed / Tools</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>
    
    <div class="container">
        <h1>Tools</h1>
        <a href="create.php">Nieuwe tool &gt;</a>

        <?php require_once '..\backend\conn.php';
            $query="SELECT * FROM tools";
            $statement = $conn->prepare($query);
            $statement->execute();
            $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table>
            <tr>
                <th>Tool</th>
                <th>Gewicht</th>
                <th>Locatie</th>
                <th>Aanschafdatum</th>
            </tr>
            <?php foreach($meldingen as $item):?>
                <tr>
                    <td><?php echo $item['title']; ?>Tool</td>
                    <td><?php echo $item['weight']; ?>Gewicht</td>
                    <td><?php echo $item['location']; ?>Locatie</td>
                    <td><?php echo $item['since']; ?>Aanschafdatum</td>
                </tr>
            <?php endforeach;?>
        </table>

        
    </div>  

</body>

</html>
