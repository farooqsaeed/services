<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('assets/css/login.css')}}">

</head>
<style>

</style>

<body>

    <div class="container login">
        <div class="row ">
            <div class="col-lg-5 m-auto text-center">
                <img src="{{ URL::to('/assets/imgs/img/login.png') }}" alt="" srcset="">
            </div>
            <div class="col-lg-5 offset-lg-1 m-auto p-lg-5">
                <div class="card  py-3">
                    <h2 class="card-title text-center pt-3">Reset Password</h2>
                    <div class="card-body mx-3">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" class="form-control" name="password" id="" placeholder="Enter Password">
                            </div>
                            <div class="form-group py-3">
                                <label for="">Confirm Password:</label>
                                <input type="password" class="form-control" name="confirm_password" id="" placeholder="Enter Confirm Password:">
                            </div>
                            <div class="form-group text-center pt-3">
                                <button class="btn btn-green px-5" type="submit">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>