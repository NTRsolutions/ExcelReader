<!DOCTYPE html>

<html lang="en">

    <head>

        <title>bootstrap-imageupload</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                padding-top: 70px;
            }

            .imageupload {
                margin: 20px 0;
            }
        </style>

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Excel File Reader</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">

            <p>A Excel Sheet uploading.</p>

            <!-- bootstrap-imageupload. -->
            <div class="imageupload panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Upload Excel File</h3>
                </div>
                <form action="controller/create.php" method="post" >
                    <div class="file-tab panel-body">
                        <label class="btn btn-default btn-file">
                            <span>Browse</span>
                            <!-- The file is stored here. -->
                            <input type="file" name="excell_file"  required accept="text/csv,.xlsx">
                        </label>
                    </div>
                    <div class="file-tab panel-body">
                        <lable>Select Conversion Type</lable>
                        <br>
                        <label class="radio-inline"><input type="radio"  name="convert" value="html">Make Summary Html</label>
                        <label class="radio-inline"><input type="radio" name="convert" value="pdf">Make Summary Pdf</label>
                        <label class="radio-inline"><input type="radio" name="convert" value="xlsx">Make Summary xlsx</label>
                    <div class="url-tab panel-body">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                        <!-- The URL is stored here. -->
                    </div>
                </form>
            </div>

        </div>


<script>
    function check_validation(){
        alert('>>');
    }
</script>
    </body>

</html>
