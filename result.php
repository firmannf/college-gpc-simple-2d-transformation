<?php
if(isset($_POST['type'])) {
    $type = $_POST['type'];
    $point1 = explode(",", $_POST['point1']);
    $point2 = explode(",", $_POST['point2']);
    $point3 = explode(",", $_POST['point3']);
    if(isset($_POST['translation']))
        $translation = explode(",", $_POST['translation']);
        
    if(isset($_POST['scale']))
    $scale = explode(",", $_POST['scale']);

    if(isset($_POST['rotation']))
        $rotation = $_POST['rotation'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>2D Geometry Transformation</title>
</head>

<body>
    <div class="container-fluid">
        <p class="center text-title">2D Geometry Transformation</p>
        <p class="center text-subtitle">you can see the <?php echo $type; ?> transformation below or go <a href="index.php">back</a></p>
        <div class="center menu">
        <div id="canvas" style="position:relative;width:100%;height:400px;"></div> 
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="assets/js/jsDraw2D.js"></script>
    <script type="text/JavaScript" src="assets/js/math.min.js"></script>
    <script type="text/javascript">
        var gr = new jsGraphics(document.getElementById("canvas"));
        var col = new jsColor("#757575");
        var pen = new jsPen(col, 3);
        var redCol = new jsColor("#E91E63");
        var redPen = new jsPen(redCol, 3);
    
        var polyPoints=new Array(new jsPoint(<?php echo $point1[0];?>, <?php echo $point1[1];?>),new jsPoint(<?php echo $point2[0];?>, <?php echo $point2[1];?>),new jsPoint(<?php echo $point3[0];?>, <?php echo $point3[1];?>));
        gr.setOrigin(new jsPoint(600, 200)); 
        gr.setCoordinateSystem("cartecian"); 
        gr.showGrid(10);
        gr.drawPolygon(pen, polyPoints); 

        <?php
        if($type == "translation") {
        ?>
            var matrixIdentity = math.matrix([[1, 0], [0, 1]]);
            var matrixInput = math.matrix([[<?php echo $point1[0];?>, <?php echo $point2[0];?>, <?php echo $point3[0];?>], [<?php echo $point1[1];?>, <?php echo $point2[1];?>, <?php echo $point3[1];?>]]);
            var result = math.add(math.multiply(matrixIdentity, matrixInput), [[<?php echo $translation[0];?>, <?php echo $translation[0];?>, <?php echo $translation[0];?>], [<?php echo $translation[1];?>, <?php echo $translation[1];?>, <?php echo $translation[1];?>]]);   
            
            var polyPoints=new Array(new jsPoint(result.get([0, 0]), result.get([1, 0])), new jsPoint(result.get([0, 1]), result.get([1, 1])), new jsPoint(result.get([0, 2]), result.get([1, 2])));
            gr.drawPolygon(redPen, polyPoints); 
        <?php
        }
        ?>
        
        <?php
        if($type == "scale") {
        ?>
            var matrixScaleFactor = math.matrix([[<?php echo $scale[0];?>, 0], [0, <?php echo $scale[1];?>]]);
            var matrixInput = math.matrix([[<?php echo $point1[0];?>, <?php echo $point2[0];?>, <?php echo $point3[0];?>], [<?php echo $point1[1];?>, <?php echo $point2[1];?>, <?php echo $point3[1];?>]]);
            var result = math.multiply(matrixScaleFactor, matrixInput);   
            
            var polyPoints=new Array(new jsPoint(result.get([0, 0]), result.get([1, 0])), new jsPoint(result.get([0, 1]), result.get([1, 1])), new jsPoint(result.get([0, 2]), result.get([1, 2])));
            gr.drawPolygon(redPen, polyPoints); 
        <?php
        }
        ?>
                
        <?php
        if($type == "rotation") {
        ?>
            var matrixR = math.matrix([[math.cos(math.unit(<?php echo $rotation;?>, 'deg')), -math.sin(math.unit(<?php echo $rotation;?>, 'deg'))], [math.sin(math.unit(<?php echo $rotation;?>, 'deg')), math.cos(math.unit(<?php echo $rotation;?>, 'deg'))]]);
            var matrixInput = math.matrix([[<?php echo $point1[0];?>, <?php echo $point2[0];?>, <?php echo $point3[0];?>], [<?php echo $point1[1];?>, <?php echo $point2[1];?>, <?php echo $point3[1];?>]]);
            var result = math.multiply(matrixR, matrixInput);   
            
            var polyPoints=new Array(new jsPoint(result.get([0, 0]), result.get([1, 0])), new jsPoint(result.get([0, 1]), result.get([1, 1])), new jsPoint(result.get([0, 2]), result.get([1, 2])));
            gr.drawPolygon(redPen, polyPoints); 
        <?php
        }
        ?>

    </script>
</body>

</html>

<?php
}
?>