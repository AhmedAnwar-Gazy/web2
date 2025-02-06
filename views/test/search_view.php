<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon-Style Search Page</title>
    <link rel="stylesheet" href="views/homes/home.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Header Styles */
        .header {
            background-color: #131921;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        .logo {
            width: 100px;
        }

        .search-container {
            flex-grow: 1;
            display: flex;
        }

        .search-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px 0 0 4px;
        }

        .search-button {
            background-color: #febd69;
            border: none;
            padding: 0 15px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .header-nav {
            display: flex;
            gap: 20px;
            color: white;
        }

        /* Main Content */
        .container {
            margin-top: 80px;
            padding: 20px;

            gap: 20px;
        }

        /* Filters Sidebar */
        .filters {
            width: 250px;
            padding: 20px;
            background-color: #f3f3f3;
            border-radius: 4px;
        }

        .filter-section {
            margin-bottom: 20px;
        }

        .filter-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Results Section */
        .results {
            flex-grow: 1;
        }

        .results-count {
            color: #666;
            margin-bottom: 20px;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .product-title {
            font-size: 16px;
            color: #0066c0;
            margin-bottom: 5px;
            height: 40px;
            overflow: hidden;
        }

        .product-rating {
            color: #ffa41c;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .product-price {
            font-size: 20px;
            color: #b12704;
            margin-bottom: 10px;
        }

        .prime-badge {
            color: #232f3e;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .filters {
                width: 100%;
            }

            .header-nav {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <img src="amazon-logo.png" alt="Logo" class="logo">



        <form action="/search" method="get">
            <div class="search-container">
                <input type="text" class="search-input"  mame="search" placeholder="Ahmed Search ">
                <input type="hidden" name="asearch" value="true">
                <button type="submit" class="search-button">🔍</button>
            </div>
        </form>
        <div class="header-nav">
            <div>Account & Lists</div>
            <div>Returns & Orders</div>
            <div>Cart</div>
        </div>
    </header>

    <div class="container">
        <aside class="filters">
            <!--
            <div class="filter-section">
                <div class="filter-title">Avg. Customer Review</div>
                <div class="filter-option">⭐⭐⭐⭐⭐ & Up</div>
                <div class="filter-option">⭐⭐⭐⭐ & Up</div>
                <div class="filter-option">⭐⭐⭐ & Up</div>
            </div> -->
            <form action="/search" method="get">
                <label for="Price">Price</label>
                <div id="Price">
                    <label for="min">min</label>
                    <input type="number" name="min" id="min">
                    <br>
                    <label for="max">max</label>
                    <input type="number" name="max" id="max">
                </div>
                <hr>

                <label for="Brands">Brands</label>
                <div id="Brands">
                    <input type="checkbox" name="Dior" id="Dior">
                    <label for="Dior">Dior</label>
                    <br>
                    <input type="checkbox" name="Nishane" id="Nishane">
                    <label for="Nishane">Nishane</label>
                    <br>
                    <input type="checkbox" name="Chloe" id="Chloe">
                    <label for="Chloe">Chloe</label>
                </div>

                <input type="hidden" name="asearch" value="true">
                <button type="submit">filter</button>
            </form>
        </aside>

        <main class="results">
            <div class="results-count">1-48 of over 50,000 results for "electronics"</div>


            <section class="products_grid">
                <div class="products">
                    <!-- Products will be dynamically inserted here -->

                    <?php foreach ($perfums as $perfum): ?>
                        <?php
                        echo " 
          <div class ='product'>
          <img src=" . $perfum['url'] . " alt=" . $perfum['name'] . ">
              <h3>" . $perfum['name'] . "</h3>
              <p>" . $perfum['prand'] . "</p>  
              <p>" . $perfum['type'] . "</p>
              <p>$" . $perfum['pric'] . "</p>
              <p>" . $perfum['discription'] . "</p>
             
                <a href=" . "/perfum?id=" . $perfum['id'] . " >Add to Cart</a>
               
                </div>
          ";
                        ?>
                    <?php endforeach; ?>


                </div>
            </section>
        </main>

</body>

</html>