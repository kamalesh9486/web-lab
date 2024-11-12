<?php
$filename = 'uploaded_text.txt';

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['textfile'])) {
    // Check if file was uploaded without errors
    if (isset($_FILES['textfile']) && $_FILES['textfile']['error'] == 0) {
        // Get the file extension
        $file_extension = pathinfo($_FILES['textfile']['name'], PATHINFO_EXTENSION);
        
        // Check if the file is a text file
        if ($file_extension === 'txt') {
            // Move the uploaded file to the server
            move_uploaded_file($_FILES['textfile']['tmp_name'], $filename);
            $message = "File uploaded successfully.";
        } else {
            $message = "Only .txt files are allowed.";
        }
    } else {
        $message = "Error uploading file.";
    }
}

// Read content from the text file
$content = '';
if (file_exists($filename)) {
    $content = file_get_contents($filename);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text File Upload and Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        h2 {
            color: #333;
            margin-top: 20px;
        }
        pre {
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-height: 300px;
            overflow-y: auto;
            white-space: pre-wrap;
        }
        p {
            text-align: center;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Upload a Text File</h1>
    
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="textfile" accept=".txt" required>
        <button type="submit">Upload</button>
    </form>

    <h2>Content of the Uploaded File:</h2>
    <pre><?php echo htmlspecialchars($content); ?></pre>
</body>
</html>
