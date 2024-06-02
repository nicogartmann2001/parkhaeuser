<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startseite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="details.js" defer></script>
</head>
<body>
    <div class="content">
        <main>
            <div class="title">
                <h1><?php echo $_GET["name"]?></h1>
            </div>
            <div id="buttons">
                <div>ALL</div>
                <div>1J</div>
                <div>1M</div>
                <div>1W</div>
                <div>24H</div>
            </div>
            <div id="chart">
                <div id="chart-container">
                    <canvas></canvas>
                </div>
            </div>
            <div class="footer">
				<a href="index.php">
                	<div class="link">
                    	Home
               		</div>
				</a>
                <div class="spacer">
                </div>
            </div>
        </main>
    </div>

</body>
</html>
