<?php 
// Include the header file to avoid code duplication
include 'includes/header.php'; 
?>

<!-- 
    Home Page - Snowball Store
    Demonstrating PHP control structures in a real-world winter context
-->

<h2>Welcome to Our Winter Wonderland</h2>

<!-- Section 1: Variables and Basic Output -->
<div class="product-card ice-border">
    <h2>Store Weather Report</h2>
    <?php
    // Using variables to store store information
    $store_name = "Snowball Wonderland";
    $store_temperature = -5;
    $snow_quality = "Premium Powder";
    $wind_speed = 15;
    
    echo "<p>Welcome to <strong>$store_name</strong>!</p>";
    echo "<p class='temp-indicator'>Current Temperature: <strong>$store_temperature°C</strong></p>";
    echo "<p>Snow Quality: <strong>$snow_quality</strong></p>";
    echo "<p>Wind Speed: <strong>$wind_speed km/h</strong></p>";
    ?>
</div>

<!-- Section 2: Conditional Statements (if-else) -->
<div class="product-card">
    <h2>Snow Conditions Analysis</h2>
    <?php
    // Using if-else statements to check weather conditions
    $current_temp = -3;
    $snow_depth = 25; // in cm
    $humidity = 80; // percentage
    
    echo "<p>Detailed weather analysis:</p>";
    
    // Temperature analysis
    if ($current_temp < -10) {
        echo "<p class='cold-warning'><span class='status-icon status-warning'></span>Frigid Conditions: Perfect for long-lasting snowballs!</p>";
    } elseif ($current_temp < 0) {
        echo "<p><span class='status-icon status-ok'></span>Ideal Snowball Temperature: Easy packing and good durability</p>";
    } else {
        echo "<p><span class='status-icon status-info'></span>Warming Trend: Snowballs may melt faster than usual</p>";
    }
    
    // Snow depth analysis
    if ($snow_depth > 30) {
        echo "<p><span class='status-icon status-ok'></span>Abundant Snow: Plenty of material for snowball production</p>";
    } elseif ($snow_depth > 15) {
        echo "<p><span class='status-icon status-ok'></span>Good Coverage: Sufficient snow for all operations</p>";
    } else {
        echo "<p><span class='status-icon status-warning'></span>Limited Snow: Conservation measures in effect</p>";
    }
    
    // Humidity analysis
    if ($humidity > 85) {
        echo "<p><span class='status-icon status-ok'></span>High Humidity: Snow packs very well today!</p>";
    } elseif ($humidity > 60) {
        echo "<p><span class='status-icon status-info'></span>Moderate Humidity: Standard packing conditions</p>";
    } else {
        echo "<p><span class='status-icon status-warning'></span>Low Humidity: Snow may be dry and powdery</p>";
    }
    ?>
</div>

<!-- Section 3: Match Statement -->
<div class="product-card">
    <h2>Snowball Type Recommendations</h2>
    <?php
    // Using match statement for snowball recommendations
    $weather_condition = "snowing";
    $customer_experience = "intermediate";
    
    $snowball_type = match($weather_condition) {
        "snowing" => "Fresh powder snowballs - perfect texture!",
        "clear" => "Packed snowballs - great for accuracy",
        "windy" => "Dense snowballs - better wind resistance",
        "melting" => "Ice-reinforced snowballs - longer lasting",
        default => "Standard premium snowballs"
    };
    
    $skill_level = match($customer_experience) {
        "beginner" => "Start with our Mini Snowball Pack for practice",
        "intermediate" => "Try our Classic Snowballs for balanced performance",
        "expert" => "Our Ice Crystal Snowballs will challenge your skills",
        default => "Classic Snowballs are great for everyone"
    };
    
    echo "<p>Current Weather: <strong>$weather_condition</strong></p>";
    echo "<p>Recommended: $snowball_type</p>";
    echo "<p>For $customer_experience level: $skill_level</p>";
    ?>
</div>

<!-- Section 4: For Loop -->
<div class="product-card">
    <h2>Daily Production Line</h2>
    <?php
    // Using for loop to simulate snowball production
    echo "<p>Snowball Production Status:</p>";
    for ($batch = 1; $batch <= 4; $batch++) {
        $snowballs_in_batch = $batch * 25;
        echo "<p>Batch $batch: $snowballs_in_batch snowballs produced ";
        
        // Nested if for quality check
        if ($batch % 2 == 0) {
            echo "<span class='in-stock'>Quality Approved</span>";
        } else {
            echo "<span class='low-stock'>Quality Check Pending</span>";
        }
        echo "</p>";
    }
    
    echo "<p class='offer'>Total Production: 100+ snowballs ready for today!</p>";
    ?>
</div>

<!-- Section 5: While Loop -->
<div class="product-card">
    <h2>Inventory Restocking Process</h2>
    <?php
    // Using while loop for restocking simulation
    $snowball_count = 0;
    $restock_target = 50;
    
    echo "<p>Restocking progress: ";
    while ($snowball_count < $restock_target) {
        $snowball_count += 10;
        if ($snowball_count <= $restock_target) {
            echo "$snowball_count... ";
        }
        
        // Safety break to prevent infinite loops
        if ($snowball_count > 100) {
            break;
        }
    }
    echo "Restocking complete!</p>";
    
    echo "<div class='snowball-preview'></div>";
    echo "<div class='snowball-preview'></div>";
    echo "<div class='snowball-preview'></div>";
    echo "<p>Fresh snowballs added to inventory!</p>";
    ?>
</div>

<!-- Call to Action -->
<div class="product-card" style="text-align: center;">
    <h2>Ready for Some Snowball Fun?</h2>
    <p>Browse our premium collection of snowballs perfect for any winter occasion!</p>
    <a href="products.php" class="button">View Our Snowballs</a>
</div>

<?php 
// Include the footer to complete the page
include 'includes/footer.php'; 
?>
