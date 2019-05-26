	  var TempChart = document.getElementById("lineChartTemp").getContext('2d');
      var gradientFill = TempChart.createLinearGradient(0, 0, 0, 290);
      gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
      gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
      <?php 
      $query = "SELECT `Temperatura`, `Laikas` FROM `matavimai`";
	    $dataMat = mysql::select($query);
	    $temp = array();
	    $time = array();
	    foreach($dataMat as $key => $val)
	    {
	        $temp[] = $val['Temperatura'];
	        $time[] = $val['Laikas'];
	    }
      ?>
      
      var dataTemp = <?php echo json_encode($temp); ?>;
      var dataTime = <?php echo json_encode($time); ?>;
      //alert(dataM1);
      //var dataM2 = [21, 21.5, 22];
      
      var myLineChart = new Chart(TempChart, {
        type: 'line',
        data: {
          labels: dataTime,
          datasets: [{
            label: "Temperatura",
            data: dataTemp,
            backgroundColor: gradientFill,
            borderColor: [
              '#AD35BA',
            ],
            borderWidth: 3,
            pointRadius: 1
            
          }]
        },
        options: {
          responsive: true,
            scales: {
               xAxes: [{
                    ticks: {
                       display: false //this will remove only the label
                    }
                }]
                }
        }
      });
	
	
	
    {
	var DregChart = document.getElementById("lineChartDregnis").getContext('2d');
      var gradientFill = DregChart.createLinearGradient(0, 0, 0, 290);
      gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
      gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
      <?php 
      $query = "SELECT `Dregnis`, `Laikas` FROM `matavimai`";
	    $dataMat = mysql::select($query);
	    $dreg = array();
	    $time = array();
	    foreach($dataMat as $key => $val)
	    {
	        $dreg[] = $val['Dregnis'];
	        $time[] = $val['Laikas'];
	    }
      ?>
      
      var dataDreg = <?php echo json_encode($dreg); ?>;
      var dataTime = <?php echo json_encode($time); ?>;
      //alert(dataM1);
      //var dataM2 = [21, 21.5, 22];
      
      var myLineChart = new Chart(DregChart, {
        type: 'line',
        data: {
          labels: dataTime,
          datasets: [{
            label: "Dregnis",
            data: dataDreg,
            backgroundColor: gradientFill,
            borderColor: [
              '#AD35BA',
            ],
            borderWidth: 3,
            pointRadius: 1
            
          }]
        },
        options: {
          responsive: true,
            scales: {
               xAxes: [{
                    ticks: {
                       display: false //this will remove only the label
                    }
                }]
                }
        }
      });
	}

	{
	var SlegChart = document.getElementById("lineChartSleg").getContext('2d');
      var gradientFill = SlegChart.createLinearGradient(0, 0, 0, 290);
      gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
      gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
      <?php 
      $query = "SELECT `Slegis`, `Laikas` FROM `matavimai`";
	    $dataMat = mysql::select($query);
	    $sleg = array();
	    $time = array();
	    foreach($dataMat as $key => $val)
	    {
	        $sleg[] = $val['Slegis'];
	        $time[] = $val['Laikas'];
	    }
      ?>
      
      var dataDreg = <?php echo json_encode($sleg); ?>;
      var dataTime = <?php echo json_encode($time); ?>;
      //alert(dataM1);
      //var dataM2 = [21, 21.5, 22];
      
      var myLineChart = new Chart(SlegChart, {
        type: 'line',
        data: {
          labels: dataTime,
          datasets: [{
            label: "Slegis",
            data: dataDreg,
            backgroundColor: gradientFill,
            borderColor: [
              '#AD35BA',
            ],
            borderWidth: 3,
            pointRadius: 1
            
          }]
        },
        options: {
          responsive: true,
            scales: {
               xAxes: [{
                    ticks: {
                       display: false //this will remove only the label
                    }
                }]
                }
        }
      });
	}