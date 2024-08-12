<!doctype html>  
<html lang="ja">  

<head>  
    <!-- Required meta tags -->  
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  

    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">  
    <style>  
        .modal-content {  
            background-color: transparent;  
        }  
        .modal-dialog,  
        .modal-content {  
            height: 100%;  
            min-height: 100vh;  
            border-radius: 0;  
        }  
        .modal-body a.btn-link {  
            border: none;  
            outline: none;  
            background-color: transparent;  
            color: #007bff;  
        }  
    </style>  
</head>  

<body>  
    <div class="container-fluid">  
        <div class="row align-items-center">  
            <div class="col-2">  
                <button type="button" class="btn btn-link" id="menuButton">  
                    <i class="fas fa-bars"></i>  
                </button>  
            </div>  
            <div class="col-10">  
                <h1 class="text-primary">Rese</h1>  
            </div>  
        </div>  
    </div>  

    <div class="modal fade modal-fullscreen" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">  
        <div class="modal-dialog">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <a href="/login" class="btn btn-link">Home</a>  
                    <a href="/login" class="btn btn-link">Registration</a>  
                    <a href="/login" class="btn btn-link">Login</a>  
                </div>  
            </div>  
        </div>  
    </div>  

    <!-- Optional JavaScript -->  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  

    <script>  
        $(document).ready(function() {  
            $('#menuButton').click(function() {  
                $('#testModal').modal('show');  
            });  
        });  
    </script>  
</body>  

</html></html>