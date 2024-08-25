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
        /* 全体のスタイル */  
body {  
  font-family: Arial, sans-serif;  
  margin: 0;  
  padding: 0;  
}  

/* ヘッダーのスタイル */  
/.container-fluid {  
  background-color: #007bff;  
  padding: 5px 0;  
}  

.row {  
  display: flex;  
  align-items: center;  
}  

.col-2 {  
  flex: 0 0 16.666667%;  
  max-width: 16.666667%;  
  background-color: #007bff;  
}  

.col-10 {
  flex: 0 0 83.333333%;  
  max-width: 83.333333%;  
}  

.btn-link {
  color: #fff;  
  text-decoration: none;  
}  

.btn-link:hover {  
  color: #dee2e6;  
}  

.text-primary {  
  color: #007bff;  
}  

/* モーダルのスタイル */  
.modal-fullscreen {  
  padding: 0 !important;  
}  

.modal-fullscreen .modal-dialog {  
  width: 100%;  
  height: 100%;  
  margin: 0;  
  padding: 0;  
  max-width: none;  
}  

.modal-fullscreen .modal-content {  
  height: 100%;  
  border: 0;  
  border-radius: 0;  
}  

.modal-fullscreen .modal-header {  
  display: flex;  
  justify-content: flex-start;  
  padding: 1rem;  
  border-bottom: 1px solid #dee2e6;  
} 

.modal-fullscreen .modal-body {  
  display: flex;  
  flex-direction: column;  
  justify-content: center;  
  align-items: center;  
  height: 100%;  
  background-color: #fff;  
}  

.modal-fullscreen .modal-body a {  
  color: #007bff;  
  font-size: 1.5rem;  
  margin: 1rem 0;  
}  

.modal-fullscreen .modal-body a:hover {  
  color: #0056b3;  
}

.modal-fullscreen .modal-header .close {  
  position: absolute;  
  top: 10px;  
  left: 10px;  
  padding: 0.5rem 1rem;  
  font-size: 1.5rem;  
  font-weight: 700;  
  color: #fff;  
  background-color: #007bff;  
  text-shadow: 0 1px 0 #fff;  
  opacity: 1;  
}  

.modal-fullscreen .modal-header .close span {  
  color: #fff;  
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
                    <a href="/" class="btn btn-link">Home</a>  
                    <a href="/logout" class="btn btn-link">Logout</a>  
                    <a href="/mypage" class="btn btn-link">Mypage</a>  
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