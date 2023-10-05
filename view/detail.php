<!-- detail product -->
<div class="row mt-4">
    <div class="col-md-3">
        <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Xem thêm sản phẩm khác</div>
            <div class="list-group">

                <?php foreach($sanpham_lq as $value): ?>
                <a href="?act=detailsp&idsp=<?php echo $value['id']; ?>"
                    class="list-group-item list-group-item-action list-item-link">
                    <img src="../uploads/<?php echo $value['image']; ?>" alt="" />
                    <?php echo $value['name']; ?>
                </a>
                <?php endforeach;  ?>

            </div>
        </div>
    </div>
    <div class="col-md-8 offset-md-1">
        <div class="container-fuild">
            <div class="row mt-4">
                <div class="col-md-3">
                    <img class="img-detail" src="../uploads/<?php echo $sanpham['image']; ?>" alt="" />
                </div>
                <div class="col-md-8">
                    <ul>
                        <li>
                            Tên hàng: <?php echo $sanpham['name']; ?>
                        </li>
                        <li>
                            Đơn giá:
                            <span class="line-through">
                                <?php echo number_format($sanpham['price']); ?> VNĐ
                            </span>
                            <span class="badge bg-danger">
                                <?php 
                                    $tt = $sanpham['price']  - (($sanpham['price'] * $sanpham['discount']) / 100);
                                    echo number_format($tt);
                                ?> VNĐ
                            </span>
                        </li>
                        <li>
                            Giảm giá:
                            <span class="badge bg-danger"><?php echo $sanpham['discount']; ?> % </span>
                        </li>
                        <li>
                            Lượt xem:
                            <span class="badge bg-info"><?php echo $sanpham['luotxem']; ?></span>
                        </li>
                    </ul>
                    <a href="cart.html" class="btn btn-success"> Mua hàng </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-5">MÔ TẢ SẢN PHẨM</h4>
                    <hr />
                    <span>
                        <?php echo $sanpham['mota']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>