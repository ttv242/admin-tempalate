<?php
function checkuser($user_name, $password)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name='" . $user_name . "' AND password='" . $password . "'");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0)
        return $kq[0]['role'];
    else
        return 0;
}

function getcheckuserinfo($user_name, $password)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name='" . $user_name . "' AND password='" . $password . "'");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_all_acc() {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_id_acc($id) {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=".$id);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function delete_acc($id) {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();

    // sql to delete a record
    $sql = "DELETE FROM users WHERE id=".$id;

    // use exec() because no results are returned
    $conn->exec($sql);
}
function add_user($name, $email, $address, $number_phone, $user_name, $password)
{
    $conn = connectdb();
    $sql = "INSERT INTO users (name, password, user_name, email, address, number_phone) VALUES ('$user_name', '$password', '$name', '$email', '$address', '$number_phone')";
    $conn->exec($sql);
}
function update_acc($id, $user_name, $role) {
    $conn = connectdb();
    $sql = "UPDATE users SET user='".$user_name."', role='".$role."' WHERE id=".$id;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
function update_information($id, $name, $email, $number_phone, $password) {
    $conn = connectdb();
    $sql = "UPDATE users SET user_name='".$name."', email='".$email."', number_phone='".$number_phone."', password='".$password."' WHERE id=".$id;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
?>