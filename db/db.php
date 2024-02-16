<?php
include 'config.php';

function getArticles() {
  $conn = connectDB();
  $sql = "SELECT * FROM articles";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function getArticle($id) {
  $conn = connectDB();
  $sql = "SELECT * FROM articles WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function getArticleByCategory($category) {
  // TODO: Implement this function
  return [];
}
