<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Feedback</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Product Feedback form</h2>
        <form action="info.php" method="post">
          <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="pwd">Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required>
          </div>
          

          <label for="pwd">Product Name:</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Air Conditioner" checked>Air Conditioner
            <label class="form-check-label" for="radio1"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Smart T.V">Smart T.V
            <label class="form-check-label" for="radio2"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio3" name="optradio" value="Cooler">Cooler
            <label class="form-check-label"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio4" name="optradio" value="Home theater">Home theater
            <label class="form-check-label"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio5" name="optradio" value="GeyserGeyser">Geyser
            <label class="form-check-label"></label>
          </div>
          <br>

          <label for="pwd">Ratings</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="rating" value=1 checked>&#9733;(1)
            <label class="form-check-label" for="radio1"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="rating" value=2>&#9733;&#9733;(2)
            <label class="form-check-label" for="radio2"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio3" name="rating" value=3>&#9733;&#9733;&#9733;(3)
            <label class="form-check-label"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio4" name="rating" value=4>&#9733;&#9733;&#9733;&#9733;(4)
            <label class="form-check-label"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio5" name="rating" value=5>&#9733;&#9733;&#9733;&#9733;&#9733;(5)
            <label class="form-check-label"></label>
          </div>
          <br>
          <label for="comment">Feedback:</label>
          <textarea class="form-control" rows="5" id="comment" name="text" required></textarea>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>      
</body>
</html>