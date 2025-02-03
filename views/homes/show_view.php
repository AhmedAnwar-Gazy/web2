<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/homes/show_view.css">
</head>
<body>
    <header class="header hd">
        <H1>AromaMart</H1>
<!--         <div>
            <button></button>
            <input type="text" name="" id="">
        </div> -->
<!--         <div>
            <img src="" alt="">
            <h3>Sign in</h3>
        </div> -->
    </header>
    <main  class="main mn">

        <section class="prodact_image">
           <div class="imge"><img src="<?=$perfum['url']?>" alt="<?=$perfum['name']?>" width="400px" height="450"></div> 
        </section>

        <section class="prodact_details">
            <div class="prodact_detailes">
                <h2><?=$perfum['name']?></h2>
                <h4><?=$perfum['prand']?></h4>
                <div>
                    <h2 class="pris">$<?=$perfum['pric']?></h2><p class="ziad">git it for <samp class="cash">$<?= ($perfum['pric'] - $perfum['pric']/20)?> (5% off)</samp> with Auto-Replenishor</p><div class="Ziad"><img id="img" src="views/img/paypal.png" alt=""><img id="img" src="views/img/card.png" alt=""><img  id="img" src="views/img/visa.png" alt=""><img id="img" src="views/img/shopping.png" alt=""></div>
                   <div class="Ds"> <p class="star">Highly rated by cusomers for : smell, satisfaction , masculine. </p><img class="star" id="img" src="views/img/rating (1).png" alt="">548<img class="heart" src="views/img/heart.png" alt="">35.4k<p >Ask a question.</p></div>
                </div>

                
            </div>
            
            <div class="prodact_size">
                <h4>size:150ml</h4>
                <h6>standers size</h6>
                <button class="B">50ml</button>
                <button class="B">100ml</button>
                <button class="B">150ml</button>
                <button class="B">200ml</button>
            </div>

            <div class="prodact_more">
                <p><?= $perfum['discription'] ?></p>
                <p>Sigin or create an account to enjoy <samp>FREE Standard Shipping</samp></p>
                <p>Shipping & Returns</p>
            </div>
            <button class="butAdd"><h2>add to cart</h2></button>
        </section>
    </main>
    <footer  class="footer ft">



    </footer>
</body>
</html>