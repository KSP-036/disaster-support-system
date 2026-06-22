<?php
  session_start();
  if(isset($_SESSION['名前'])) {
     $man = $_SESSION['男性'];
     $women = $_SESSION['女性'];
     $kenkou = $_SESSION['健康'];
     $keisyou = $_SESSION['軽傷'];
     $juusyou = $_SESSION['重傷'];
     $nijuu = $_SESSION['二十代'];
     $sanjuu = $_SESSION['三十代'];
     $yonjuu = $_SESSION['四十代'];
     $gojuu = $_SESSION['五十代'];
     $rokujuu = $_SESSION['六十代'];
     
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/dropdown.css">
  <script src="chart.js/dist/chart.min.js"></script>
  <style>
    #chart-container {
      position: relative; 
      height: 800px; width: 800px;
      
    }
    #test1 {
      position: absolute; top: 50px; left: 500px;
      float: left; 
    }
    #test2 {
      position: absolute; top: 100px; left: 50px;
      float: left;
    }
    #test3 {
      position: absolute; top: 100px; left: 100px;
      float: left;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
　<title>グラフ</title> 
</head>
<body>
    <header id="header">
        <div class="main_visual">
            <div class="acount">
                <a href="../account.php"><img src="../images/icon.png"  style="width: 80px; height: 80px" alt="アカウント"></a>
            </div>
        </div>
        <nav>
            <ul>
                <li class="current"><a href="../home.php"><i class="fas fa-home"></i> HOME</a></li>
                <li><a href="../report.html"><i class="far fa-newspaper"></i> 災害</a></li>
                <li><a href="../map.php"><i class="fas fa-map-marker-alt"></i> 避難所</a></li>
                <li><a href="../group.php"><i class="fas fa-users"></i> グループ</a></li>
            </ul>
        </nav>
    </header>
    <div class="chart-container">
        <div class = "test1" style="position:absolute; height:450px; width:450px; top: 500px; left: 460px;">
            <canvas id="myChart"></canvas>
        </div>
        <div class="test2" style="position:absolute; height:450px; width:450px; top: 500px; left: 5px;">
            <canvas id="chart"></canvas>
        </div>
        <div class="test3" style="position:absolute; height:450px; width:450px; top: 500px; left: 900px;">
            <canvas id="nennrei"></canvas>
        </div>
    </div>

    <!-- 22/01/31 変更 -->
    <div class="turnbackbut">
      <div class="panel">
          <button onclick="document.location='../map.php'">前画面へ</button>
      </div>
    </div>
    <!-- /変更-->

    <p><font size="6" style= "position:absolute; top:450px; left:165px;">けがの割合</font></p>
    <p><font size="6" style= "position:absolute; top:450px; left:600px;">男女の割合</font></p>
    <p><font size="6" style= "position:absolute; top:450px; left:1035px;">年齢の割合</font></p>
  <script>
    let bar1 = '<?php echo $man; ?>'
    let bar2 = '<?php echo $women; ?>'
    let bar3 = '<?php echo $kenkou; ?>'
    let bar4 = '<?php echo $keisyou; ?>'
    let bar5 = '<?php echo $juusyou; ?>'
    let bar6 = '<?php echo $nijuu; ?>'
    let bar7 = '<?php echo $sanjuu; ?>'
    let bar8 = '<?php echo $yonjuu; ?>'
    let bar9 = '<?php echo $gojuu; ?>'
    let bar10 = '<?php echo $rokujuu; ?>'
    var num1 = parseFloat(bar1);
    var num2 = parseFloat(bar2);
    var num3 = parseFloat(bar3);
    var num4 = parseFloat(bar4);
    var num5 = parseFloat(bar5);
    var num6 = parseFloat(bar6);
    var num7 = parseFloat(bar7);
    var num8 = parseFloat(bar8);
    var num9 = parseFloat(bar9);
    var num10 = parseFloat(bar10);
    var dataLabelPlugin = {
      afterDatasetsDraw: function (chart, easing) {
        var ctx = chart.ctx;
　　　　//データの合計値を計算
        chart.data.datasets.forEach(function (dataset, i) {
          var dataSum = 0;
          dataset.data.forEach(function (element){
            dataSum += element;
          });

          var meta = chart.getDatasetMeta(i);
          if (!meta.hidden) {
            meta.data.forEach(function (element, index) {
             // Draw the text in black, with the specified font
             ctx.fillStyle = 'rgb(255, 255, 255)';

             var fontSize = 12;
             var fontStyle = 'normal';
             var fontFamily = 'Helvetica Neue';
             ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

              // データの割合計算
              var labelString = chart.data.labels[index];
              var dataString = (Math.round(dataset.data[index] / dataSum * 1000)/10).toString() + "%";

              // Make sure alignment settings are correct
              ctx.textAlign = 'center';
              ctx.textBaseline = 'middle';

              var padding = 5;
              var position = element.tooltipPosition();
              ctx.fillText(labelString, position.x, position.y - (fontSize / 2) - padding);
              ctx.fillText(dataString, position.x, position.y + (fontSize / 2) - padding);
            });
          }
        });
      }
    };
                   
                    
    var myChart = "myChart";
    var chart = new Chart(myChart, {
      type: 'pie',
      data: {
        labels: ["男性", "女性"],
        datasets: [{
          label: "Sample",
          backgroundColor: ["#7eddd3","#f8a3bc",],
          data: [num1,num2],
        }]
      },
      options: {
        title: {
          display: true,
          text: "男女割合"
        },
        legend:{
        },
        maintainAspectRatio: false,
      },
      plugins: [dataLabelPlugin],
    });
    var myChart = "chart";
    var chart = new Chart(myChart, {
      type: 'pie',
      data: {
        labels: ["健康", "軽傷","重傷"],
        datasets: [{
          label: "Sample",
          backgroundColor: ["#7cfc00","#ffb81c","#ff0000"],
          data: [num3,num4,num5],
        }]
      },
      options: {
        title: {
          display: true,
          text: "Sample"
        },
        legend:{
        },
        maintainAspectRatio: false,
      },
      plugins: [dataLabelPlugin],
    });
    var myChart = "nennrei";
    var chart = new Chart(myChart, {
      type: 'pie',
      data: {
        labels: ["20代以下", "30代","40代","50代","60代以上"],
        datasets: [{
          label: "Sample",
          backgroundColor: ["#fe9d1a","#b1c9e8","#ffc0cb","#7cfc00","#9966cc"],
          data: [num6,num7,num8,num9,num10],
        }]
      },
      options: {
        title: {
          display: true,
          text: "Sample"
        },
        legend:{
        },
        maintainAspectRatio: false,
      },
      plugins: [dataLabelPlugin],
    });
                    
  </script>
</body>
</html>