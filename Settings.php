
<?php

    session_start();

    $orders = $_SESSION["Orders"];

    if(sizeof($orders) == 0) {
        $orders = array();

        while(sizeof($orders) != 10) {
            $suppliers = getSuppliers();

            array_push($orders, array(
                "id" => sizeof($orders) + 1,
                "supplier" => $suppliers[array_rand($suppliers)],
                "amount" => rand() % 100000,
                "date" => getRandomDate(),
                "status" => array(
                    "status" => rand() % 4,
                    "management" => getRandomUser(),
                    "purchasing" => getRandomUser(),
                    "budget" => getRandomUser(),
                ),
            ));
        }

        $_SESSION["Orders"] = $orders;
    }

    function getSuppliers() {
        return array("Google", "Apple", "Facebook", "Amazon", "Microsoft");
    }


    function getRandomDate() {
        return (rand() % 30 + 1) . "/" . (rand() % 12 + 1) . "/2020";
    }

    function getStatus($status) {
        if($status == 0) return "En attente de reception";
        else if($status == 1) return "En cours de traitement";
        else if($status == 2) return "Traité";
        else return "Livré";
    }

    function getColor($status, $id) {
        if($status > $id) return "success";
        else if($status < $id) return "secondary";
        else return "warning";
    }

    function getRandomRGB() {
        return "\"rgb(" . (rand() % 128 + 128) . ", " . (rand() % 128 + 128) . ", " . (rand() % 128 + 128) . ")\", ";
    }

?>
