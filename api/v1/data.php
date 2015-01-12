<?php
    require_once config.php;
class data {
    private $host = config::database_host;
    private $user= config::database_user;
    private $pass = config::database_pass;
    private $db = config::database;

    function __construct() {}

    function getTeam($name) {
        $dbconn = mysqli_connect($this->host, $this->user, $this->pass, $this->db) or die("Error " . mysqli_error($dbconn));

        $sql = "SELECT teamID,teamName,teamEntity,teamMascot FROM teams
                        WHERE teamMascot = '" . mysqli_real_escape_string($dbconn, $name) . "'";
        $team_result = mysqli_query($dbconn, $sql) or die("Error " . mysqli_error($dbconn));

        $team = array();
        $team = mysqli_fetch_assoc($team_result);

        $sql = "SELECT playerID,playerFirstName,playerLastName,contractID FROM players
                        WHERE teamID = " . $team["teamID"];
        $players_result = mysqli_query($dbconn, $sql) or die("Error " . mysqli_error($dbconn));
        $players = array();
        while ($playerRow = mysqli_fetch_assoc($players_result)) {
            array_push($players, $playerRow);
            $sql = "SELECT * FROM contracts
                            WHERE contractID = " . $playerRow["contractID"];
            $contract_result = mysqli_query($dbconn, $sql) or die("Error " . mysqli_error($dbconn));
            $contracts = array();
            while ($contractRow = mysqli_fetch_assoc($contract_result)) {
                array_push($contracts,$contractRow);
                $sql = "SELECT salarySeason,nhlSalary,ahlSalary,perfBonus,signBonus,aav,capHit FROM salaries
                                WHERE contractID = " . $contractRow["contractID"];
                $salary_result = mysqli_query($dbconn, $sql) or die("Error " . mysqli_error($dbconn));
                $salaries = array();
                while ($salaryRow = mysqli_fetch_assoc($salary_result)) {
                    array_push($salaries,$salaryRow);
                }
                array_push($contracts,$salaries);
            }
            array_push($players,$contracts);
        }
        array_push($team,$players);
        return $team;
    }
}
