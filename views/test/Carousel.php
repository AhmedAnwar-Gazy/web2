<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon-Style 8-Card Carousel</title>
    <style>
        .carousel-container {
            max-width: 1400px;
            margin: 2rem auto;
            position: relative;
            padding: 0 40px;
        }

        .carousel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0 10px;
        }

        .carousel-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .carousel-controls {
            display: flex;
            gap: 10px;
        }

        .carousel-button {
            background: white;
            border: 1px solid #ddd;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .carousel-button:hover {
            background: #f7f7f7;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .carousel-button[disabled] {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .carousel-track {
            display: flex;
            overflow-x: hidden;
            scroll-behavior: smooth;
            gap: 15px;
            padding: 5px;
        }

        .carousel-card {
            flex: 0 0 calc(12.5% - 13px); /* 8 cards (100% / 8) */
            min-width: 200px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            transition: transform 0.3s;
        }

        .carousel-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .product-image {
            width: 100%;
            height: 150px;
            object-fit: contain;
            margin-bottom: 1rem;
        }

        .product-title {
            font-size: 0.9rem;
            height: 40px;
            overflow: hidden;
            margin-bottom: 0.5rem;
        }

        .product-price {
            color: #B12704;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .prime-badge {
            color: #232F3E;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        @media (max-width: 1200px) {
            .carousel-card {
                flex: 0 0 calc(25% - 13px); /* 4 cards on tablets */
            }
        }

        @media (max-width: 768px) {
            .carousel-card {
                flex: 0 0 calc(50% - 13px); /* 2 cards on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="carousel-container">
        <div class="carousel-header">
            <h2 class="carousel-title">Recommended for You</h2>
            <div class="carousel-controls">
                <button class="carousel-button prev" aria-label="Previous">❮</button>
                <button class="carousel-button next" aria-label="Next">❯</button>
            </div>
        </div>
        
        <div class="carousel-track">
            <!-- Repeat this card structure 8+ times -->
            <div class="carousel-card">
                <img src="views/images/3614272610736.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/3614273069540_.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3760264093220_.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3348900838178_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/PM_Chanel_gabriel_essence_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/PRADA_3614273760652_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3348901581370_.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/5518448400218.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3346470143241.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/074916366979_11.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/3346470143241.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3348900838178_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3614272610736.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/3614273069540_.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3760264093220_.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3348900838178_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/PM_Chanel_gabriel_essence_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/PRADA_3614273760652_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3348901581370_.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/5518448400218.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3346470143241.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/074916366979_11.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>

            <div class="carousel-card">
                <img src="views/images/3346470143241.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>
            <div class="carousel-card">
                <img src="views/images/3348900838178_1.jpg" alt="Product" class="product-image">
                <div class="product-title">Wireless Bluetooth Headphones with Noise Cancellation</div>
                <div class="product-price">$79.99</div>
                <div class="prime-badge">🚚 FREE Delivery <strong>Prime</strong></div>
            </div>



            <!-- Add more cards here -->
        </div>

    </div>

    <script>
        const track = document.querySelector('.carousel-track');
        const prevBtn = document.querySelector('.carousel-button.prev');
        const nextBtn = document.querySelector('.carousel-button.next');
        const cards = document.querySelectorAll('.carousel-card');
        let currentScroll = 0;
        let cardWidth = cards[0].offsetWidth + 15; // Include gap

        function updateButtonStates() {
            prevBtn.disabled = currentScroll === 0;
            nextBtn.disabled = currentScroll >= track.scrollWidth - track.clientWidth;
        }

        function scrollCarousel(direction) {
            const visibleCards = Math.floor(track.clientWidth / cardWidth);
            const scrollAmount = visibleCards * cardWidth;
            
            currentScroll = direction === 'next' ?
                Math.min(currentScroll + scrollAmount, track.scrollWidth - track.clientWidth) :
                Math.max(currentScroll - scrollAmount, 0);

            track.scrollTo({
                left: currentScroll,
                behavior: 'smooth'
            });

            updateButtonStates();
        }

        function handleResize() {
            cardWidth = cards[0].offsetWidth + 15;
            currentScroll = 0;
            track.scrollTo({ left: 0 });
            updateButtonStates();
        }

        // Event Listeners
        prevBtn.addEventListener('click', () => scrollCarousel('prev'));
        nextBtn.addEventListener('click', () => scrollCarousel('next'));
        window.addEventListener('resize', handleResize);

        // Initialize
        updateButtonStates();

        let autoScroll = setInterval(() => scrollCarousel('next'), 2000);

// Pause on hover
track.addEventListener('mouseenter', () => clearInterval(autoScroll));
track.addEventListener('mouseleave', () => {
    autoScroll = setInterval(() => scrollCarousel('next'), 2000);
});
    </script>
</body>
</html>