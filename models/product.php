<?php
function add_pro($parent_id, $name, $alias, $price, $images, $properties, $summary, $description, $order, $hidden, $created_at) {
    global $conn;
    $conn = connectdb();
    try {
        // Chuyển đổi mảng images thành chuỗi JSON để lưu trữ
        $json_images = json_encode($images);

        $stmt = $conn->prepare("INSERT INTO products (parent_id, name, alias, price, images, properties, summary, description, `order`, `hidden`, created_at)
            VALUES (:parent_id, :name, :alias, :price, :images, :properties, :summary, :description, :order, :hidden, :created_at)");
        $stmt->bindParam(':parent_id', $parent_id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':alias', $alias);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':images', $json_images); // Sử dụng chuỗi JSON thay thế serialize
        $stmt->bindParam(':properties', $properties);
        $stmt->bindParam(':summary', $summary);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':order', $order);
        $stmt->bindParam(':hidden', $hidden);
        $stmt->bindParam(':created_at', $created_at);
        return $stmt->execute();
    } catch(PDOException $e) {
        return false;   
    }
}


function get_all_pro()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM products");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function get_id_pro($id)
{
    $conn = connectdb();
    try {
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $product = $stmt->fetch();

        // Chuyển đổi chuỗi JSON thành mảng để sử dụng
        $json_images = $product['images'];
        $images = json_decode($json_images, true);

        // Thêm mảng images vào mảng kết quả trả về
        $product['images'] = $images;

        return $product;
    } catch(PDOException $e) {
        // Xử lý lỗi ở đây
    }
}


function delete_pro($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM products");
    $stmt->execute();

    // sql to delete a record
    $sql = "DELETE FROM products WHERE id=" . $id;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function update_pro($id, $name, $images, $price, $parent_id)
{
    $conn = connectdb();
    if ($images == "") {
        $sql = "UPDATE products SET name='" . $name . "', price='" . $price . "', parent_id='" . $parent_id . "' WHERE id=" . $id;
    } else {
        $sql = "UPDATE products SET name='" . $name . "', price='" . $price . "', parent_id='" . $parent_id . "', images='" . $images . "' WHERE id=" . $id;
    }

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
// function get_all_sp($parent_id = 0, $kyw = "")
// {
//     $conn = connectdb();
//     $sql = "SELECT * FROM products WHERE 1";
//     if ($parent_id > 0) {
//         $sql .= " AND parent_id=" . $parent_id;
//     }
//     if ($kyw != "") {
//         $sql .= " AND name like '%" . $kyw . "%'";
//     }
//     $sql .= " order by id DESC";

//     $stmt = $conn->prepare($sql);
//     $stmt->execute();

//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }

// function getall_sp() {
//     $conn = connectdb();
//     $sql ="SELECT * FROM products order by id DESC";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();

//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }

function showpro($ds)
{
    foreach ($ds as $sp) {
        if ($sp['price'] == 0) {
            $price = "Đang cập nhật";
        } else {
            if ($sp['price'] > 0) {
                $price = '<del>$' . $sp['price'] . '</del>$' . $sp['price'];
            } else {
                $price = '$' . $sp['price'];
            }
        }
        echo '
            <form action="index.php?action=addcart" method="POST">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                    <div class="block2">
                        <div class="block2-pic hov-images0">
                            <images src="./uploads/' . $sp['images'] . '" alt="images-PRODUCT">
                            <input type="submit" name="addtocart" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" value="ADD TO CART"></input>
                        </div>
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    ' . $sp['name'] . '
                                </a>
                                <span class="stext-105 cl3">
                                    ' . $price . '
                                </span>
                            </div>
                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <images class="icon-heart1 dis-block trans-04" src="./view/images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <images class="icon-heart2 dis-block trans-04 ab-t-l" src="./view/images/icons/icon-heart-02.png"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="' . $sp['id'] . '"></input>
                <input type="hidden" name="name" value="' . $sp['name'] . '"></input>
                <input type="hidden" name="images" value="' . $sp['images'] . '"></input>
                <input type="hidden" name="price" value="' . $sp['price'] . '"></input>

            </form>';
    }
}
?>