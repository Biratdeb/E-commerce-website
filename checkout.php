<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Products</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">prize per unit</th>
                    <th scope="col">total prize</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td><img src="img/watch.jpg" width="50px" height="50px" alt=""> Watch <span><a href="">remove</a></span></td>
                    <td><input type="number" name="" id="" class="form-control" value="1"></td>
                    <td>$20</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>

            </tbody>
            <style>
                .border {
                    border: 2px solid black !important;
                    width: 350px !important;

                    margin-right: 100px !important;
                }

                .total {
                    float: right !important;
                    font-weight: 600;
                    font-size: 20px;
                }
            </style>

        </table>
                <h1>this oooooooo</h1>
        <!-- border -->
        <div class="total">
            <div class="border text-end"></div>
            <div class="row">
                <div class="col-6">
                    <div>
                        Total prize  :
                    </div>
                </div>
                <div class="col-6">$200</div>
                <button> add</button>
            </div>

        </div>

    </div>
    <div id="newtotal"></div>
    <div class="select">

    </div>

    <script>
    //     var x = 2;
    //     var y = 2;
    //    document.getElementById("newtotal").innerText= x+y


    var noti =document.querySelector('h1');
    var select = document.querySelector('.select');
    var button = document.getElementsByTagName('button');
    for(but of button){
        but.addEventListener('click', (e)=>{
            var add = Number(noti.getAttribute('data-count')||0);
            noti.setAttribute('data-count', add+1);
            noti.classList.add('zero');
        })
    }
    </script>
</body>

</html>