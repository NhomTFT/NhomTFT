<div class="container-fluid">
    <div class="card-header">
        <h2>Danh sách sản phẩm</h2>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Loại</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <body>
                <?php
                    $i=1;
                    while($row = mysql_fetch_assoc($query)){?>
                        <tr>
                            <td><?php echo $row['prd']; ?></td>
                            <td><?php echo $row['image']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td>Xóa</td>
                            <td>Sửa</td>

                        </tr>
                    <?php}
                ?>
            </body>
        </table>
        <a class="btn btn-primary" href="index.php?page_layout=them">Thêm</a>
    </div>
</div>