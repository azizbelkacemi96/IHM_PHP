
<h1 class="my-5"> Dashboard </h1>
<div class="row">
    <div class="col-12 col-xl-6 p-5">
        <canvas id="chart-1" class="border"> </canvas>
    </div>
    <div class="col-12 col-xl-6 p-5">
        <canvas id="chart-2" class="border"> </canvas>
    </div>
    <div class="col-12 p-5">
        <canvas id="chart-3" class="border"> </canvas>
    </div>
</div>
<script>
    const chart1 = new Chart(document.getElementById("chart-1"), {
        type : "bar",
        data : {
            labels : [<?php foreach($orders as $order) echo "\"Order " . $order["id"] . "\", "; ?>],
            datasets : [{
                data : [<?php foreach($orders as $order) echo $order["amount"] . ", "; ?>],
                backgroundColor : [<?php foreach($orders as $order) echo getRandomRGB(); ?>],
            }],
        }, options : {
            legend : {
                display : false,
            },
        },
    })

    const chart2 = new Chart(document.getElementById("chart-2"), {
        type : "pie",
        data : {
            labels : [<?php foreach(getSuppliers() as $supplier) echo "\"" . $supplier . "\", "; ?>],
            datasets : [{
                data : [<?php foreach(getSuppliers() as $supplier) echo rand() % 100 . ", "; ?>],
                backgroundColor : [<?php foreach(getSuppliers() as $supplier) echo getRandomRGB(); ?>],
            }],
        }, options : {
            legend : {
                display : false,
            },
        },
    })

    const chart3 = new Chart(document.getElementById("chart-3"), {
        type : "line",
        data : {
            labels : [<?php foreach($orders as $order) echo "\"" . $supplier . "\", "; ?>],
            datasets : [{
                data : [<?php foreach($orders as $order) echo rand() % 100 . ", "; ?>],
                borderColor : [<?= getRandomRGB(); ?>],
                fill : false,
            }, {
                data : [<?php foreach($orders as $order) echo rand() % 100 . ", "; ?>],
                borderColor : [<?= getRandomRGB(); ?>],
                fill : false,
            }],
        }, options : {
            legend : {
                display : false,
            },
        },
    })
</script>
