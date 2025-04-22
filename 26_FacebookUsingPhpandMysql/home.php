<?php
session_start();
include 'db.php';
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION["user"];
?>

<h2>Welcome, <?= $user["name"] ?></h2>
<form method="post" action="post.php">
  <textarea name="content" placeholder="What's on your mind?" required></textarea><br><br>
  <button type="submit">Post</button>
</form>

<p><a href="logout.php">Logout</a></p>

<h3>Recent Posts</h3>
<?php
$res = $conn->query("SELECT p.content, p.created_at, u.name FROM posts p JOIN users u ON p.user_id = u.id ORDER BY p.created_at DESC");
while ($row = $res->fetch_assoc()) {
    echo "<p><strong>{$row['name']}</strong> <small>({$row['created_at']})</small><br>{$row['content']}</p><hr>";
}
?>
