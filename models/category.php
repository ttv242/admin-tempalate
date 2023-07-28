<?php
function add_cat($name, $alias, $summary, $description, $order, $hidden, $created_at)
{
    $conn = connectdb();
    $stmt = $conn->prepare("INSERT INTO categories (name, alias, summary, description, `order`, hidden, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $alias, $summary, $description, $order, $hidden, $created_at]);
}


function update_category($id, $name, $summary, $description, $order, $hidden, $updated_at)
{
    global $conn;
    $conn = connectdb();
    if (!$conn) {
        throw new Exception("Kết nối đến cơ sở dữ liệu thất bại");
    }
    $stmt = $conn->prepare("UPDATE categories SET name = ?, summary = ?, description = ?, `order` = ?, hidden = ?, updated_at = ? WHERE id = ?");
    if (!$stmt) {
        $error = $conn->errorInfo();
        throw new Exception("Lỗi SQL: " . $error[2]);
    }
    $res = $stmt->execute([$name, $summary, $description, $order, $hidden, $updated_at, $id]);
    if (!$res) {
        $error = $stmt->errorInfo();
        throw new Exception("Lỗi khi thực thi SQL: " . $error[2]);
    }
    return $res;
}


function get_id_cat($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM categories WHERE id=" . $id);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function delete_cat($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM categories");
    $stmt->execute();

    // sql to delete a record
    $sql = "DELETE FROM categories WHERE id=" . $id;

    // use exec() because no results are returned
    $conn->exec($sql);
}
function get_all_cat()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM categories");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
?>