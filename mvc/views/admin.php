<?php
$title = 'Dashboard Page';
$activeNav = "analytic";
require_once "mvc/utility/utility.php";
require_once('blocks/header_admin.php');
for ($i = 0; $i < 12; $i++)
    echo '<p class="d-none" id="m' . $data["doanhthu"][$i]["MONTH(created_at)"] . '">' . $data["doanhthu"][$i]["SUM(total_money)"] . '<p>';
?>

<div class="row">
    <div class="col-md-12">
        <h1>Analytics</h1>
    </div>
</div>
<div class="container">
    <canvas id="myChart"></canvas>
</div>
<script>
    let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    // biểu đồ
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';
    var m1 = document.getElementById("m1").innerHTML;
    var m2 = document.getElementById("m2").innerHTML;
    var m3 = document.getElementById("m3").innerHTML;
    var m4 = document.getElementById("m4").innerHTML;
    var m5 = document.getElementById("m5").innerHTML;
    var m6 = document.getElementById("m6").innerHTML;
    var m7 = document.getElementById("m7").innerHTML;
    var m8 = document.getElementById("m8").innerHTML;
    var m9 = document.getElementById("m9").innerHTML;
    var m10 = document.getElementById("m10").innerHTML;
    var m11 = document.getElementById("m11").innerHTML;
    var m12 = document.getElementById("m12").innerHTML;

    let massPopChart = new Chart(myChart, {
        type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Total bill',
                data: [
                    m1,
                    m2,
                    m3,
                    m4,
                    m5,
                    m6,
                    m7,
                    m8,
                    m9,
                    m10,
                    m11,
                    m12
                ],
                //backgroundColor:'green',
                backgroundColor: [
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)',
                    'rgba(59, 138, 222, 0.8)'
                ],
                borderWidth: 1,
                borderColor: '#777',
                hoverBorderWidth: 3,
                hoverBorderColor: '#000'
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Monthly revenue statistics',
                fontSize: 25
            },
            legend: {
                display: true,
                position: 'right',
                labels: {
                    fontColor: '#000'
                }
            },
            layout: {
                padding: {
                    left: 50,
                    right: 0,
                    bottom: 0,
                    top: 0
                }
            },
            tooltips: {
                enabled: true
            }
        }
    });
</script>
<?php
require_once('blocks/footer_admin.php');
?>