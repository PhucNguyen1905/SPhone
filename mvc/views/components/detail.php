<h4 style="margin:70px 0 10px 50px ">Chi tiết đơn hàng</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Tổng số tiền</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $countDetail = count($data["detailOrder"]);
    for ($i = 0; $i < $countDetail; $i++) {
      echo '<tr>
        <td>' . ($i + 1) . '</td>
        <td><img src="' . fixUrl($data["detailOrder"][$i]['thumbnail']) . '" style="height: 120px"/></td>
        <td>' . $data["detailOrder"][$i]['title'] . '</td>
        <td>' . number_format($data["detailOrder"][$i]['price']) . ' đ</td>
        <td>' . $data["detailOrder"][$i]['num'] . '</td>
        <td>' . number_format($data["detailOrder"][$i]['total_money']) . ' đ</td>
      </tr>';
    }
    ?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><strong>Tổng số tiền:</strong></td>
      <td><strong><?= number_format($data["orderItem"]["total_money"]) ?> đ</strong></td>
    </tr>
  </tbody>
</table>