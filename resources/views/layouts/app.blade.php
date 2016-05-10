<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>A Survey for UPM Academics</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- jquery is required by bootstrap -->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/magicsuggest.css" rel="stylesheet">
    <script src="js/magicsuggest.js"></script>
    <script src="js/data.js"></script>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <p>&nbsp;</p>
        <h2>Rapid Survey on R&amp;D Disciplines in UPM</h2>
        <h3>Deputy Vice Chancellor's Office (Research and Innovation)</h3>
        <p><a class="btn btn-primary btn-md" href="/info" role="button">Learn More »</a></p>
    </div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">A Survey for UPM Academics</a>
        </div>
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" role="form" method="post" action="https://analytics.upm.edu.my/forseo?">
                <fieldset>
                    <input name="_token" value="UxDtiLnTPQnyFHDBm6uu4R1CngiKwU4x4Gp8EnqO" type="hidden">
                    <input name="querystring" id="querystring" class="form-control" value="" type="hidden">
                    <input name="ip" id="ip" class="form-control" value="10.206.2.148" type="hidden">
                    <div class="form-group">
                        <label for="staffid" class="col-sm-3 control-label required">Staff ID</label>
                        <div data-original-title="Your UPM staff ID" class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto" title="">
                            <input class="form-control" id="staffid" name="staffid" placeholder="eg. A05410" value="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label data-original-title="Author names that you have used in your publications! eg.
                                   Faridah Mohamed Arshad;
                                    " for="name" class="col-sm-3 control-label required" data-toggle="tooltip" data-placement="auto" title="">Author
                            Names</label>
                        <div data-original-title="Author names that you have used in your publications." class="col-sm-9" data-toggle="tooltip" data-placement="top" title="">
                            <input class="form-control" id="authornames" name="authornames" placeholder="eg. Faridah Mohamed Arshad" value="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label required">Fields of Research (FOR)</label>
                        <div data-original-title="FORs classify R&amp;D activities according to their scientific and academic
                                 disciplines (see MRDCS 6th Ed. 2011 MOSTI/MASTIC). You may choose more than ONE FOR" class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto" title="" value="">
                            <div id="forarea" style="" class="ms-ctn form-control "><input placeholder="Type to search or select from this dropdown list..." class="" type="text"><span style="display: none;" class="ms-helper "></span><div class="ms-trigger"><div class="ms-trigger-ico"></div></div></div><div style="width: 408px;" class="ms-sel-ctn ms-stacked"><div style="display: none;"></div></div>
                        </div>
                    </div>
                    <script>
                        var f = $('#forarea').magicSuggest({
                            value: [],
                            data: 'for.html',
                            placeholder: 'Select...',
                            allowFreeEntries: false,
                            selectionPosition: 'bottom',
                            selectionStacked: true,
                            valueField: 'id',
                            displayField: 'name'
                        });
                        $(f).on('selectionchange', function(e,m){
                            $('[data-toggle="tooltip"]').tooltip('hide');
                        });
                    </script>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Socio-economic Objectives (SEO)</label>
                        <div data-original-title="SEOs categorize R&amp;D activities according to their purposes or benefits to economic,
                                 social, environmental, technological sectors or scientific domain (see MRDCS 6th Ed.
                                 2011 MOSTI/MASTIC). You may choose more than ONE SEO." class="col-sm-9" placement="top" placeholder="eg. Education, Banking" data-toggle="tooltip" data-placement="auto" title="">
                            <div id="seo" style="" class="ms-ctn form-control "><input placeholder="Type to search or select from this dropdown list..." class="" type="text"><span style="display: none;" class="ms-helper "></span><div class="ms-trigger"><div class="ms-trigger-ico"></div></div></div><div style="width: 408px;" class="ms-sel-ctn ms-stacked"><div style="display: none;"></div></div>
                        </div>
                    </div>
                    <script>
                        var s = $('#seo').magicSuggest({
                            data: '/seo.html',
                            placeholder: 'Select...',
                            allowFreeEntries: false,
                            selectionPosition: 'bottom',
                            selectionStacked: true,
                            value: [],
                        });
                        $(s).on('selectionchange', function(e,m){
                            $('[data-toggle="tooltip"]').tooltip('hide');
                        });
                    </script>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Comments</label>
                        <div data-original-title="Your comments are welcome." class="col-sm-9" placement="top" placeholder="" data-toggle="tooltip" data-placement="auto" title="">
                            <input class="form-control" id="comments" name="comments" placeholder="" value="" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                            <input name="_token" value="UxDtiLnTPQnyFHDBm6uu4R1CngiKwU4x4Gp8EnqO" type="hidden">
                            <input id="submit" name="submit" value="Submit" class="btn btn-primary" type="submit">
                            <input id="reset" name="reset" value="Clear" class="btn btn-warning" type="reset">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        tipped = $('[data-toggle="tooltip"]').tooltip();
    });
    $('#reset').on('click', function(e,m){
        f.setValue([]);
        f.setSelection([]);
        s.setValue([]);
        s.setSelection([]);
    });
</script>
<style>
    .required:after {
        content: '*';
        color: black;
        padding-left: 5px;
    }
    .tooltip.in {
        opacity: .8;
        filter: alpha(opacity=80);
    }
</style>
<hr>
<div class="container">
    <footer>
        <h5>© 2016 Universiti Putra Malaysia. All rights reserved.</h5>
    </footer>
</div> <!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
@yield('content')
</body>
</html>