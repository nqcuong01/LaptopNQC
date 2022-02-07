<?php
// (A) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN !
$dbhost = "localhost";
$dbname = "laptopnqc";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

if ($_POST["req"]) { switch ($_POST["req"]) {
  // (B) INVALID REQUEST
  default: echo "Invalid request"; break;

  // (C) SHOW COMMENTS
  case "show";
    $stmt = $pdo->prepare("SELECT `name`, `timestamp`, `message` FROM `comments` WHERE `post_id`=? ORDER BY `timestamp` ASC");
    $stmt->execute([$_POST["pid"]]);
    while ($r = $stmt->fetch()) { ?>
    <div class="crow">
      <div class="chead">
        <div class="cname"><?=$r["name"]?></div>
        <div class="ctime">[<?=$r["timestamp"]?>]</div>
      </div>
			<div class="cmsg"><?=$r["message"]?></div>
    </div>
    <?php }
    break;

  // (D) ADD COMMENT
  case "add":
    // (D1) CHECKS
    if (!isset($_POST["pid"]) || !isset($_POST["name"]) || !isset($_POST["msg"])) {
      exit("Please provide the Post ID, name, and message");
    }

    // (D2) INSERT
    try {
      $stmt = $pdo->prepare("INSERT INTO `comments` (`post_id`, `name`, `message`) VALUES (?,?,?)");
      $stmt->execute([$_POST["pid"], htmlentities($_POST["name"]), htmlentities($_POST["msg"])]);
    } catch (Exception $ex) { exit($ex->getMessage()); }
    echo "OK";
    break;
}}

// (E) CLOSE DATABASE CONNECTION
$stmt = null;
$pdo = null;
