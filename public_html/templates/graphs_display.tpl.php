<!-- Header -->
	<style>
	.grid-container {
	  display: grid;
	  align-content: center;
	  grid-template-columns: 0.2fr 1fr 1fr 0.2fr;
	  background-color: #4285F4;
	  padding: 0px;
	}

	.pirmas {
	  background-color: #4285F4;
	  border-right: 1px solid rgba(173, 53, 186, 1);
	  border-bottom: 1px solid rgba(173, 53, 186, 1);
	  padding: 60px;
	  font-size: large;
	  text-align: end;
	}
	.antras {
	  background-color: #4285F4;
	  border-left: 1px solid rgba(173, 53, 186, 1);
	  border-bottom: 1px solid rgba(173, 53, 186, 1);
	  padding: 60px;
	  font-size: large;
	  text-align: start;
	}
	.trecias {
	  background-color: #4285F4;
	  border-right: 1px solid rgba(173, 53, 186, 1);
	  border-top: 1px solid rgba(173, 53, 186, 1);
	  padding: 60px;
	  font-size: large;
	  text-align: end;
	}
	.ketvirtas {
	  background-color: #4285F4;
	  border-top: 1px solid rgba(173, 53, 186, 1);
	  border-left: 1px solid rgba(173, 53, 186, 1);
	  padding: 60px;
	  font-size: large;
	  text-align: start;
	}
	.fiktyvus1 {
	  background-color: #4285F4;
	  /*border-right: 1px solid rgba(0, 0, 0, 0.8);*/
	  /*border-bottom: 1px solid rgba(0, 0, 0, 0.8); */
	  padding: 60px;
	  font-size: large;
	  text-align: end;
	}
	</style>



<header class="masthead bg-primary text-white text-center">
    <!-- Navigation -->
	  <!--<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="/">Aplinkos oro stebėjimas</a>
		  <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php?module=userProfile&action=view">
					<php
						session_start();
						echo '<label>Sveiki, ';
						print($_SESSION["Uname"]);
						echo '</label>';
					?>
				</a>
			  </li>
			  <li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./controls/userregistration/logout.php">LOGOUT</a>
			  </li >
			</ul>
		  </div>
		</div>
	  </nav> -->
      <div>
<div style="color:white"><h1>DABARTINIAI RODMENYS</h1></div>
<div>
    <h3>
    Atnaujinimo laikas:
    <?php 
        if($dataDabar['Laikas'] != null)
        {
            $time = $dataDabar['Laikas'];
          $time = strtotime($time) + 10800;
          $time = date('Y-m-d G:i:s', $time);
          echo $time;
        }
        else
        {
            echo 'Stotelė neprijungta';
        }
          
    ?>
    </h3>
</div>
<div class="grid-container">
    <div class="fiktyvus1"></div>
  <div class="pirmas">
      Temperatūra
      <br>
        <h1><?php echo number_format((float)$dataDabar['Temperatura'], 2, '.', ''); ?> °C<h1>
      </br>
  </div>
  <div class="antras">Slėgis<br><h1><?php echo number_format((float)($dataDabar['Slegis']/100), 2, '.', ''); ?> hPa</br></h1></div>
  <div class="fiktyvus1"></div>
<div class="fiktyvus1"></div>
  <div class="trecias">Drėgnis<br><h1><?php echo number_format((float)$dataDabar['Dregnis'], 2, '.', '');?> %</br></h1></div>  
  <div class="ketvirtas">Šviesa<br><h1><?php echo number_format((float)$dataDabar['Sviesa'], 2, '.', ''); ?> LUX</br></h1></div>
  <div class="fiktyvus1"></div>
</div>
<div><h2>VIDUTINIAI MATAVIMAI</h2></div>
<div><br></br></div>
<div class="row">
  <div class="col-3">Temperatūra = <?php echo number_format((float)$dataVid['vidTe'], 2, '.', ''); ?> °C</div>
  <div class="col-3">Slėgis = <?php echo number_format((float)($dataVid['vidSl']/100), 2, '.', ''); ?> hPa</div>
  <div class="col-3">Drėgnis = <?php echo number_format((float)$dataVid['vidDr'], 2, '.', '');?> %</div>
  <div class="col-3">Šviesa = <?php echo number_format((float)$dataVid['vidSv'], 2, '.', ''); ?> LUX</div>
</div>
<div><br></br></div>
<div><h2>STEBĖJIMŲ ISTORIJA</h2></div>
<div class="row">
  <div class="col">
		<a style="color:white" href="/index.php?module=graphs&action=display&time=0"> 
			<button type="button" class="btn btn-secondary" >Šiandien</button>
		</a>
  </div>
  <div class="col">
		<a style="color:white" href="/index.php?module=graphs&action=display&time=1" >
			<button type="button" class="btn btn-secondary" >Vakar</button>
		</a>
      </div>
  <div class="col">
		<a style="color:white" href="/index.php?module=graphs&action=display&time=3" >
			<button type="button" class="btn btn-secondary" >3 dienų</button>
		</a>
      </div>
  <div class="col">
		<a style="color:white" href="/index.php?module=graphs&action=display&time=10" >
			<button type="button" class="btn btn-secondary" >10 dienų</button>
		</a>
      </div>
</div>
<div class="row">
  <div class="col-6"><canvas id="lineChartTemp" width="100" height="20"></canvas></div>
  <div class="col-6"><canvas id="lineChartDregnis" width="100" height="20"></canvas></div>
  <div class="col-6"><canvas id="lineChartSleg" width="100" height="20"></canvas></div>
  <div class="col-6"><canvas id="lineChartSviesa" width="100" height="20"></canvas></div>
</div>
    </div>
  </header>
    <!-- Portfolio Grid Section -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
  
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script> 

	
    <!-- Temperaturos lentele -->
	
    <script  type="text/javascript">	
	{
		<?php 
	    $temp = array();
		$dreg = array();
		$sleg = array();
	    $time = array();
		$svie = array();
	    foreach($dataMat as $key => $val)
	    {
	        $temp[] = $val['Temperatura'];
			$dreg[] = $val['Dregnis'];
			$sleg[] = $val['Slegis'];
	        $time[] = $val['Laikas'];
			$svie[] = $val['Sviesa'];
	    }
      ?>
	  
      var dataTemp = <?php echo json_encode($temp); ?>;
      var dataTime = <?php echo json_encode($time); ?>;
      var dataDreg = <?php echo json_encode($dreg); ?>;
      var dataSleg = <?php echo json_encode($sleg); ?>;
      var dataSvie = <?php echo json_encode($svie); ?>;
	  
	    
	}
	
	{//Temperatura
		  var TempChart = document.getElementById("lineChartTemp").getContext('2d');
      var gradientFill = TempChart.createLinearGradient(0, 0, 0, 290);
      gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
      gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
      
      
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
                }],
				yAxes: [{
					ticks: {
						fontColor: "white",
					}
					
				}]
				},
			  
			legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'white'
            }
                }
        }
      });
	}
	
	
    {//Dregnis
	var DregChart = document.getElementById("lineChartDregnis").getContext('2d');
      var gradientFill = DregChart.createLinearGradient(0, 0, 0, 290);
      gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
      gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
            
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
                }],
				yAxes: [{
					ticks: {
						fontColor: "white",
					}
					
				}]
				},
			  
			legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'white'
            }
                }
        }
      });
	}
	{//Slegis
	var SlegChart = document.getElementById("lineChartSleg").getContext('2d');
      var gradientFill = SlegChart.createLinearGradient(0, 0, 0, 290);
      gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
      gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
      
      
      var myLineChart = new Chart(SlegChart, {
        type: 'line',
        data: {
          labels: dataTime,
          datasets: [{
            label: "Slegis",
            data: dataSleg,
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
                }],
				yAxes: [{
					ticks: {
						fontColor: "white",
					}
					
				}]
				},
			  
			legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'white'
            }
                }
        }
      });
	}

	{//Sviesa
	var SviesChart = document.getElementById("lineChartSviesa").getContext('2d');
      var gradientFill = SviesChart.createLinearGradient(0, 0, 0, 290);
      gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
      gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
      
      
      var myLineChart = new Chart(SviesChart, {
        type: 'line',
        data: {
          labels: dataTime,
          datasets: [{
            label: "Sviesa",
            data: dataSvie,
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
					
                }],
				yAxes: [{
					ticks: {
						fontColor: "white",
					}
					
				}]
				},
			  
			legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'white'
            }
        }
        }
      });
	}
	</script>

