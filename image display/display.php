<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Image  Display</title>
  <style>
    body {
      background-color: #ffffff;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
      padding: 40px;
      gap: 20px;
      margin: 0;
    }

    .note-card {
      background-color: #83956a;
      border-radius: 20px;
      width: 350px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      color: #ffffff;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .note-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }

    .note-content {
      padding: 20px;
    }

    .note-content h3 {
      margin: 0 0 10px;
      font-size: 20px;
    }

    .note-content p {
      margin: 5px 0;
      line-height: 1.5;
    }

    .note-owner {
      margin-top: 10px;
      font-size: 14px;
      font-style: italic;
    }

    .note-buttons {
      margin-top: 15px;
      display: flex;
      gap: 10px;
    }

    .note-buttons a button {
      flex: 1;
      padding: 8px;
      background-color: #ffffff;
      color: #83956a;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    .note-buttons a button:hover {
      background-color: #d8e3cc;
    }
  </style>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "image");
$q = "SELECT * FROM allimages";
$pic = mysqli_query($conn, $q);

while ($r = mysqli_fetch_assoc($pic)) {
  $ID = $r["ID"];
  $image = $r["photo"];
  $des = $r["des"];
  $owner = $r["owner"];
?>
  <div class="note-card">
    <img src="<?php echo $image; ?>" alt="Image" />
    <div class="note-content">
      <h3>Description</h3>
      <p><?php echo $des; ?></p>
      <div class="note-owner">— by <?php echo $owner; ?></div>
      <div class="note-buttons">
        <a href="edit.php?i=<?php echo $ID; ?>"><button>Update</button></a>
        <a href="delete.php?d=<?php echo $ID; ?>" onclick="return confirm('Are you sure you want to delete this record?');"><button>Delete</button></a>
      </div>
    </div>
  </div>
<?php
}
?>

</body>
</html>
