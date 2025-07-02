<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Add Image </title>
   <style>
    body {
      background-color: #ffffff;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .note-form {
      background-color: #83956a;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 350px;
    }

    .note-form h2 {
      text-align: center;
      color: #ffffff;
      margin-bottom: 20px;
    }

    .note-form label {
      display: block;
      color: #ffffff;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .note-form input,
    .note-form textarea {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 10px;
      margin-bottom: 15px;
      font-size: 14px;
      background-color: #ffffff;
      color: #83956a;
      outline:none;
    }

    .note-form input[type="submit"] {
      background-color: #ffffff;
      color: #83956a;
      font-weight: bold;
      cursor: pointer;
      transition:  0.3s;
    }

    .note-form input[type="submit"]:hover {
      background-color: #dbe3ce;
    }
  </style>
 
</head>
<body>
  <form class="note-form" action="database.php" method="POST">
    <h2>🖼️ Add Image</h2>
    
    <label for="image">Image Link</label>
    <input type="url" id="image" name="image" placeholder="Enter image URL" required />

    <label for="description">Description</label>
    <textarea id="description" name="des" rows="4" placeholder="Write description..." required></textarea>

    <label for="owner">Owner</label>
    <input type="text" id="owner" name="owner" placeholder="Note owner" required />

    <input type="submit" name="send" value="Save Image" />
  </form>
</body>
</html>
