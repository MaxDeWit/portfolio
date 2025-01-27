<?php

class Team
{

    public string $clubnaam;
    public string $plaats;
    public array $teamcode = [];

    public static function createTeam($clubnaam, $plaats, $teamcode = [])
    {
        $team = new Team();
        $team->clubnaam = $clubnaam;
        $team->plaats = $plaats;
        $team->teamcode = $teamcode;
        return $team;
    }

    public static function createTeam2($clubnaam, $teamcode = [])
    {
        $team = new Team();
        $team->clubnaam = $clubnaam;
        $team->teamcode = $teamcode;
        return $team;
    }

    // Method en stukje css om teams te printen
    public function echoPrint()
    {
        echo "<div style='border: 1px solid black; margin-bottom: 10px; padding: 10px;'>";  // Elke team binnen een box
        foreach ($this as $key => $value) {
            if (!is_array($value)) {
                echo "<strong> $key </strong> : $value <br><br>";
            } else {
                echo "<strong> $key </strong> : " . implode(",", $value) . "\n";
            }
        }


        // echo "<strong>Club Naam:</strong> " . $this->clubnaam . "<br>";
        // if (isset($this->plaats)) {
        //     echo "<strong>Plaats:</strong> " . $this->plaats . "<br>";
        // }
        // echo "<strong>Team Names:</strong> " . implode(", ", $this->teamcode) . "<br>";
        echo "</div>";

        //var_dump($this);
    }
}

$jenava = Team::createTeam("Jenava", "Oosten", ["Soldaatje 1", "Soldaatje 2", "Soldaatje 3"]);
$deltion = Team::createTeam2("Deltion", ["Leerling 1", "Leerling 2", "Leerling 3", "Leerling 4"]);

// Voegt alle teams toe aan een array
$teams = [$jenava, $deltion];

?>

<html>

<head>
    <title>Team Details</title>
</head>

<body>

    <?php
    // Loop door alle teams om ze weer te geven
    foreach ($teams as $team) {
        $team->echoPrint(); // Print details van elk team binnen een aparte box
    }
    ?>

</body>

</html>