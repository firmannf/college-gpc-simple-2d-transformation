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
        <p class="center text-subtitle">please choose one of transformations types below</p>
        <div class="center menu">
            <a class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#modal-translation">Translation</a>
            <a class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#modal-scale">Scale</a>
            <a class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#modal-rotation">Rotation</a>
        </div>

        <!-- Input point modal -->
        <div class="modal fade" id="modal-translation" tabindex="-1" role="dialog" aria-labelledby="modal-translation-label">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modal-translation-label">Translation</h4>
                    </div>
                    <form action="result.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="type" value="translation">
                            <div class="form-group">
                                <label for="point1" class="control-label">Point 1</label>
                                <input type="text" class="form-control" id="point1" name="point1" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point2" class="control-label">Point 2</label>
                                <input type="text" class="form-control" id="point2" name="point2" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point3" class="control-label">Point 3</label>
                                <input type="text" class="form-control" id="point3" name="point3" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point3" class="control-label">Translation</label>
                                <input type="text" class="form-control" id="translation" name="translation" placeholder="Example: 20,30">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="OK"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-scale" tabindex="-1" role="dialog" aria-labelledby="modal-scale-label">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modal-scale-label">Scale</h4>
                    </div>
                    <form action="result.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="type" value="scale">
                            <div class="form-group">
                                <label for="point1" class="control-label">Point 1</label>
                                <input type="text" class="form-control" id="point1" name="point1" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point2" class="control-label">Point 2</label>
                                <input type="text" class="form-control" id="point2" name="point2" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point3" class="control-label">Point 3</label>
                                <input type="text" class="form-control" id="point3" name="point3" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point3" class="control-label">Scale Factor</label>
                                <input type="text" class="form-control" id="scale" name="scale" placeholder="Example: 4,2">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="OK"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-rotation" tabindex="-1" role="dialog" aria-labelledby="modal-rotation-label">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modal-rotation-label">Rotation</h4>
                    </div>
                    <form action="result.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="type" value="rotation">
                            <div class="form-group">
                                <label for="point1" class="control-label">Point 1</label>
                                <input type="text" class="form-control" id="point1" name="point1" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point2" class="control-label">Point 2</label>
                                <input type="text" class="form-control" id="point2" name="point2" placeholder="Example: 20,30">
                            </div>
                            <div class="form-group">
                                <label for="point3" class="control-label">Point 3</label>
                                <input type="text" class="form-control" id="point3" name="point3" placeholder="Example: 20,30">
                            </div>                            
                            <div class="form-group">
                                <label for="point3" class="control-label">Rotation Degree</label>
                                <input type="text" class="form-control" id="rotation" name="rotation" placeholder="Example: 180">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="OK"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End input point modal -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>