 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
				<div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/"></a></div>

                  

                    
                 
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
      
        <!-- /page content -->
 <!-- jQuery -->
    <script src="<?php echo base_url()?>Q_css/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>Q_css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>Q_css/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>Q_css/vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url()?>Q_css/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url()?>Q_css/vendors/morris.js/morris.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>Q_css/build/js/custom.min.js"></script>



<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>	<script src='//code.jquery.com/jquery-2.1.4.min.js'></script>
		
		
		<script type="text/javascript">
		zingchart.THEME="classic";
		var myConfig = {
		  
		    "graphset": [
		      
		        {
		            "type": "bar",
		            "x": "2%",
		            "y": "30%",
		            "height": "68%",
		            "width": "96%",
		            "border-width": "1px",
		            "border-color": "#384653",
		            "border-radius": 4,
		            "background-color": "#fbfcf7",
		            "legend": {
		                "margin":"auto auto 10% auto",
		                "toggle-action": "remove",
		                "shadow": false,
		                "border-radius": 4,
		                "background-color": "#FFFFFF",
		                "border-color": "#FFFFFF",
		                "layout": "float"
		            },
		            "plotarea": {
		                "margin": "45 40 90 60"
		            },
		            "scale-x": {
		                "values": [
		                   <?php  foreach ($reservq_res as $row){
		                       echo "\"".$row->gr_sch."\",";
		                   }?>
		                   	
		                ],
		                "line-color": "#b0aaab",
		                "line-width": 1,
		                "guide": {
		                    "visible": false
		                },
		                "item": {
		                    "font-color": "#384653"
		                },
		                "tick": {
		                    "visible": false
		                }
		            },
		            "scale-y": {
		                "values": "0:80:10",
		                "line-color": "#FFFFFF",
		                "line-width": 1,
		                "guide": {
		                    "visible": true,
		                    "line-style": "solid"
		                },
		                "item": {
		                    "padding-right": "5%",
		                    "font-color": "#384653"
		                },
		                "tick": {
		                    "visible": false
		                }
		            },
		            "series": [
		                {
		                    "values": [
		                    	<?php  foreach ($reservq_res as $row){
				                       echo $row->gr_value.",";
				                   }?>
		                    ],
		                    "background-color": "#4cc2bb",
		                    "text": "จำนวนผู้จองคิว",
		                    "legend-marker": {
		                        "border-color": "#4cc2bb"
		                    }
		                },
		                {
		                    "values": [
		                    	<?php  foreach ($useq_res as $row){
				                       echo $row->gr_value.",";
				                   }?>
		                    ],
		                    "background-color": "#4c707e",
		                    "text": "จำนวนผู้ใช้คิว",
		                    "legend-marker": {
		                        "border-color": "#4c707e"
		                    }
		                },
		               
		                
		            ],
		            "tooltip": {
		                "text": "%v %k in %t",
		                "shadow": false,
		                "border-radius": 4
		            }
		        }
		    ]
		};
		 
		zingchart.render({ 
			id : 'myChart', 
			data : myConfig, 
			height: 500, 
			width: '100%' 
		});
<!--

//-->
</script>


	