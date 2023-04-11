
<script src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>\
<script src="js/canva/canvasjs.min.js"></script>
<script src="js/wow/wow.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
        grafik1();


    });


    function grafik1(){
        $.ajax({
            url:"controller.php?data_request=grafik1",
            type:"GET",
            dataType:"JSON",
            success:function (json){
                showGrafik1(json.data,json.tipe);
                console.log(json.data);
            }
        });
    }

    function showGrafik1(data,tipe){

var chart = new CanvasJS.Chart("divgraf1", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Jarak"
    },

    data: [{
        type: tipe, //change type to bar, line, area, pie, etc
        //indexLabel: "{y}", //Shows y value on all Data Points
        indexLabelFontColor: "#5A5757",
        indexLabelPlacement: "outside",
        dataPoints: data
    }]
});
chart.render();
    console.log('datane: '+data);

    }
</script>
</body>
</html>