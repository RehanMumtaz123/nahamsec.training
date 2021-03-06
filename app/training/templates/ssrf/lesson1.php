<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="padding-top:60px;">

    <h1 class="text-center">Source Code Tool</h1>
    <h3 class="text-center">View the source of any website</h3>

    <div class="row" style="margin-bottom: 20px">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <form method="post">
                    <div class="col-xs-9">
                        <input name="url" class="form-control">
                    </div>
                    <div class="col-xs-3">
                        <input type="submit" class="btn btn-success" value="Go">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <textarea class="form-control" rows="30"><?php echo $data["source"]; ?></textarea>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>