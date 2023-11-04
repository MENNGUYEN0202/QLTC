<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
    <style>
        .container{
            max-width: 80%;
        }
        .nav-item{
            padding: 0;}

        #menu{
            padding: 0;
        }

        .navbar{
            padding: 0;
        }

        #menu_nav {
        width: 155px; /* Đặt chiều rộng mong muốn */
        height: 45px; /* Đặt chiều cao mong muốn */
        }

        .form-control{
            max-width: 450px;
            padding: 0;
        }
        .content > p{
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        table{
            border: 1px solid black !important;
            background-color: white; 
        }
        thead > tr > th{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include '../header.php'; ?>
        <div class="body">
        <section>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 d-flex align-items-center justify-content-center content mx-auto">
                    <p class="bg-primary p-2">Danh Sách Kế Hoạch Dự Chi</p>
                </div>
            </div>
            <div class="container">
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Số Tiền </th>
      <th scope="col">Thời Gian</th>
      <th scope="col">Hoạt Động</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Đi Đà Lạt</td>
      <td>4 500 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>Sửa/Xóa</td>
    </tr>
    <tr>
      <td scope="row">Mua IP 15</td>
      <td>35 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>Sửa/Xóa</td>
    </tr>
    <tr>
      <td scope="row">Mua MacBook</td>
      <td>45 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>Sửa/Xóa</td>
    </tr>
    <tr>
      <td scope="row">Đi Hà Nội</td>
      <td>5 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>Sửa/Xóa</td>
    </tr>
    <tr>
      <td scope="row">Mua Nhà</td>
      <td>2 445 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>Sửa/Xóa</td>
    </tr>
  </tbody>
</table>
            </div>
        <div class="row d-flex justify-content-end">
        <button type="button" class="btn btn-outline-info">Lưu</button>
        </div>
        </section>

        </div>
        <?php include '../footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>