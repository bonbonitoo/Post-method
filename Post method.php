<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEAM BONI</title>
</head>
<body>

    <h1>TEAM BONI</h1>

    <form method="post" action="">
        <label for="member">Search Member by Name:</label>
        <input type="text" name="member" id="member" placeholder="e.g. Vincent">
        <button type="submit">Search</button>
    </form>

    <hr>

    <div class="container">
    <?php
	
    $team = [
        "alfonso" => [
            "name" => "Alfonso Miguel Gutierrez",
            "age" => 23,
            "email" => "gutierrezalfonsomiguel_bsit@plmun.edu.ph",
            "github" => "https://github.com/AlfonsoGutierrez21",
            "contact" => "+63 9512990348",
            "facebook" => "https://www.facebook.com/AlfonsoGutierrez21",
            "image" => "images/alfonso.jpg"
        ],
        "joseph" => [
            "name" => "Joseph Ryan Ramos",
            "age" => 23,
            "email" => "ramosjosephryan_bsit@plmun.edu.ph",
            "github" => "https://github.com/josephryanramos",
            "contact" => "+63 970230941",
            "facebook" => "https://www.facebook.com/ChoconaLatte",
            "image" => "images/joseph1.jpg"
        ],
        "romar" => [
            "name" => "Romar Antonio",
            "age" => 25,
            "email" => "antonioromar_bsit@plmun.edu.ph",
            "github" => "https://github.com/bonbonitoo",
            "contact" => "+63 9919150143",
            "facebook" => "https://www.facebook.com/bonbonitoo",
            "image" => "images/romar.png"
        ],
        "vincent" => [
            "name" => "Vincent Ban Baylon",
            "age" => 20,
            "email" => "baylonvincentban_bsit@plmun.edu.ph",
            "github" => "https://github.com/Vincentban15",
            "contact" => "+63 9603109120",
            "facebook" => "https://www.facebook.com/vbdb.ban05",
            "image" => "images/vincent.jpg"
        ]
    ];

    function showMember($m) {
        ?>
        <div class="member">
            <img src="<?= $m['image'] ?>" alt="<?= $m['name'] ?>" width="200" height="200">
            <div class="member-info">
                <h2><?= $m['name'] ?></h2>
                <p><strong>Age:</strong> <?= $m['age'] ?></p>
                <p><strong>Email:</strong> <a href="mailto:<?= $m['email'] ?>"><?= $m['email'] ?></a></p>
                <p><strong>Github:</strong> <a href="<?= $m['github'] ?>" target="_blank"><?= $m['github'] ?></a></p>
                <p><strong>Contact:</strong> <a href="tel:<?= $m['contact'] ?>"><?= $m['contact'] ?></a></p>
                <p><strong>Facebook:</strong> <a href="<?= $m['facebook'] ?>" target="_blank"><?= $m['facebook'] ?></a></p>
            </div>
        </div>
        <?php
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['member'])) {
        $search = strtolower(trim($_POST['member']));

        if (array_key_exists($search, $team)) {
            showMember($team[$search]);
        } else {
            echo "<p>No member found with the name: <strong>$search</strong></p>";
        }
    } else {
        echo "<p>Please search for a member above to view details.</p>";
    }
    ?>
    </div>

</body>
</html>