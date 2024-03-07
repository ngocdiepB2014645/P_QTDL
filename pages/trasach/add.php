
<!DOCTYPE html>
<html>
<head>
	<title>Thêm Trả Sách</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="./header.css">
</head>
<body>
    <div id="app">
        
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Thêm Trả Sách</h2>
                </div>
                <div class="panel-body">
                    <form action="./index.php?act=addTS" method="post">
                        <div class="form-group">
                                <label for="Borrow_ID">ID mượn sách</label>
                                
                                <input required="true" type="text" class="form-control" id="Borrow_ID" name="Borrow_ID" value="">
                        </div>
                        <div class="form-group">
                                <label for="Return_date">Ngày trả sách</label>
                                <input required="true" type="text" class="form-control" id="Return_date" name="Return_date" value="">
                        </div>
                        <div class="form-group">
                                <label for="Status">Tình trạng:</label>
                                <!-- <input required="true" type="text" class="form-control" id="Status" name="Status" value=""> -->
                                <select name="Status">
                                    <option value='0'>Đúng hạn</option>
                                    <option value='1'>Không đúng hạn</option>
                                </select>
                        </div>
                        
                        <div class="form-group">
                                <label for="soluong">Số lượng:</label>
                                <input required="true" type="text" class="form-control" id="soluong" name="soluong" value="">
                        </div>
                        
                        <?php 
                    if(isset($_GET['error'])){
                        echo '<span style="color: red">'.$_GET['error'].'</span></br></br>';
                    }
                ?>
                        <button class="btn btn-success">Lưu</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>
</html>