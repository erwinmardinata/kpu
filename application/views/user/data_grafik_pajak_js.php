<div id="chart"></div>
<script>

        var options = {
            chart: {
                height: 400,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            series: [{
                name: "Nilai Rp.",
                data: [
                  <?php
                  foreach($grafik as $row):
                    echo $row->nilai.", ";
                   endforeach;
                  ?>
                ]
            }],
            title: {
                text: 'Nilai Pajak (Rp.)',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: [
                  <?php
                    foreach($grafik as $row):
                      echo "'$row->kategori'".", ";
                    endforeach;
                  ?>
                ],
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart"),
            options
        );

        chart.render();

</script>
