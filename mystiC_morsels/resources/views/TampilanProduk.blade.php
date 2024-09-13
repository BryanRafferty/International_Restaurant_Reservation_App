<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Restaurant Menu</h1>
        <div class="row">
            <!-- Example product card -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Grilled Chicken</h5>
                        <p class="card-text">Succulent grilled chicken with a side of fresh vegetables.</p>
                        <p class="card-text"><strong>Price: $15</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Repeat for each product -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Spaghetti Carbonara</h5>
                        <p class="card-text">Classic Italian pasta with creamy sauce and crispy bacon.</p>
                        <p class="card-text"><strong>Price: $12</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Caesar Salad</h5>
                        <p class="card-text">Fresh romaine lettuce with Caesar dressing and croutons.</p>
                        <p class="card-text"><strong>Price: $10</strong></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Add more product cards here -->
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
