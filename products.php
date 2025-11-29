<?php 
// Include header and product data
include 'includes/header.php';
$products = include 'data/products.php';
?>

<!-- 
    Products Page - Displaying snowball products
    Using foreach loop and conditional statements
-->

<h2>Our Premium Snowballs</h2>

<!-- Section 1: Foreach Loop with Products -->
<div class="product-card">
    <h2>Available Snowballs</h2>
    <?php
    // Using foreach loop to display all products
    foreach ($products as $product) {
        echo "<div style='margin: 15px 0; padding: 15px; border: 2px solid #a8d0ff; border-radius: 8px; background: rgba(13, 59, 102, 0.8);'>";
        echo "<h3>{$product['name']}</h3>";
        echo "<p>Price: $" . number_format($product['price'], 2) . "</p>";
        echo "<p>Category: " . ucfirst($product['category']) . "</p>";
        
        // Using if-else for stock status
        if ($product['stock'] > 10) {
            echo "<p class='stock-status in-stock'>In Stock: {$product['stock']} available</p>";
        } elseif ($product['stock'] > 0) {
            echo "<p class='stock-status low-stock'>Low Stock: Only {$product['stock']} left!</p>";
        } else {
            echo "<p class='stock-status out-of-stock'>Out of Stock</p>";
        }
        
        // Using conditional for sale items
        if ($product['on_sale']) {
            echo "<p class='sale-tag'>On Sale! Special offer</p>";
        }
        
        echo "</div>";
    }
    ?>
</div>

<!-- Section 2: Array Operations with Match -->
<div class="product-card">
    <h2>Snowball Categories Summary</h2>
    <?php
    // Using array to track categories
    $category_count = [];
    
    // Count products in each category using foreach
    foreach ($products as $product) {
        $category = $product['category'];
        if (!isset($category_count[$category])) {
            $category_count[$category] = 0;
        }
        $category_count[$category]++;
    }
    
    // Display category counts
    foreach ($category_count as $category => $count) {
        $category_description = match($category) {
            'basic' => "Our standard snowballs - great for everyday use",
            'premium' => "High-quality snowballs for special occasions",
            'special' => "Unique snowballs with extra features",
            default => "General snowballs"
        };
        
        echo "<p>" . ucfirst($category) . " Snowballs: $count available - $category_description</p>";
    }
    ?>
</div>

<!-- Section 3: While Loop for Inventory -->
<div class="product-card">
    <h2>Inventory Restocking</h2>
    <?php
    // Using while loop for restocking simulation
    $low_stock_products = [];
    
    // Find products with low stock
    foreach ($products as $product) {
        if ($product['stock'] < 10 && $product['stock'] > 0) {
            $low_stock_products[] = $product['name'];
        }
    }
    
    echo "<p>Products needing restock: ";
    
    // Display low stock products using while
    $index = 0;
    while ($index < count($low_stock_products)) {
        echo $low_stock_products[$index];
        if ($index < count($low_stock_products) - 1) {
            echo ", ";
        }
        $index++;
    }
    echo "</p>";
    
    // Show restocking progress with for loop
    if (!empty($low_stock_products)) {
        echo "<p>Restocking in progress: ";
        for ($i = 1; $i <= count($low_stock_products); $i++) {
            echo "Product $i restocked... ";
        }
        echo "All products replenished!</p>";
    }
    ?>
</div>

<!-- Section 4: Complex Conditions -->
<div class="product-card">
    <h2>Today's Special Offers</h2>
    <?php
    // Using complex conditional logic
    $day_of_week = date('l');
    $special_offers = [];
    
    foreach ($products as $product) {
        // Multiple conditions using if-elseif-else
        if ($product['on_sale'] && $product['stock'] > 0) {
            if ($day_of_week == 'Monday') {
                $special_offers[] = "Monday Special: {$product['name']} - Extra 10% off!";
            } elseif ($day_of_week == 'Friday') {
                $special_offers[] = "Friday Deal: {$product['name']} - Buy one get one half price!";
            } else {
                $special_offers[] = "Daily Offer: {$product['name']} on sale!";
            }
        }
    }
    
    if (empty($special_offers)) {
        echo "<p>No special offers today. Check back soon!</p>";
    } else {
        echo "<p>Special offers for $day_of_week:</p>";
        foreach ($special_offers as $offer) {
            echo "<p class='offer'>- $offer</p>";
        }
    }
    ?>
</div>

<?php 
// Include footer to complete the page
include 'includes/footer.php'; 
?>
