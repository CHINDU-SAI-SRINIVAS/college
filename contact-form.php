<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Contact form</title>
    <style>
        body{
            background:skyblue;
        }
        .form-label{
            color:white;
        }
        .w{
            color:white;
        }
        .v{
            position:relative;
            left:15px;
            bottom:13px;
            width:250px;
            height:50px;
            background:white;
            padding-top:13px
        }
        img{
            margin-left:55px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1 class="w">Contact form</h1>
        <p class="w">please fill in your information and i'll be sending your order in time.</P>
        <form action="form.php" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="" class="col-sm-2 form-label">Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="first name" name="first">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="last name" name="last">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 form-label">Your Email:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="e.g chindu555s@gmail.com" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 form-label">Phone:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="###" name="phone1">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="###" name="phone2">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="####" name="phone3">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 form-label">Message Subject:</label>
                <div class="col-sm-6">
                    <select name="select" id="" class="form-control">
                        <option value="">Other</option>
                        <option value="">Online</option>
                        <option value="">Normal</option>
                        <option value="">Amoora</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 form-label">Message:</label>
                <div class="col-sm-9">
                    <textarea name="message" id="" cols="76" rows="6"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 form-label">Verification:</label>
                <div class="col-sm-10 v">
                    <input type="checkbox" class="form-check-input">&nbsp I Am Not Robot
                    <img src="images/captcha.png" class="img-fluid" width="30px" height="30px">
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Submit Form</button>
        </form>
    </div>
</body>
</html>