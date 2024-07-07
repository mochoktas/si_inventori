<!-- resources/views/chart.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart Example</title>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Optional: Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Pie Chart Example</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <canvas id="myPieChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        // Embed PHP data into JavaScript
        var chartData = @json($data);

        // Prepare labels, data, and backgroundColor arrays
        var labels = [];
        var values = [];
        var backgroundColors = [];

        // Loop through the chart data to prepare the arrays
        chartData.forEach(item => {
            labels.push(item.label);
            values.push(item.value);

            // Conditional colors based on values
            if (item.value > 200) {
                backgroundColors.push('rgba(255, 99, 132, 0.2)'); // Red for values > 200
            } else if (item.value > 100) {
                backgroundColors.push('rgba(54, 162, 235, 0.2)'); // Blue for values > 100
            } else {
                backgroundColors.push('rgba(255, 206, 86, 0.2)'); // Yellow for other values
            }
        });

        // Get the context of the canvas element we want to select
        var ctx = document.getElementById('myPieChart').getContext('2d');
        
        // Data for the pie chart
        var data = {
            labels: labels,
            datasets: [{
                data: values,
                backgroundColor: backgroundColors,
                borderColor: backgroundColors.map(color => color.replace('0.2', '1')),
                borderWidth: 1
            }]
        };
        
        // Options for the pie chart
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            }
        };
        
        // Create the pie chart
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
        });
    </script>
</body>
</html>
