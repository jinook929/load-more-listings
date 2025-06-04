<?php
$cards = [
    [
        'image' => 'house_01.png',
        'title' => 'Green Hills Retirement',
        'location' => 'Central Park, NY',
        'price' => 4000
    ],
    [
        'image' => 'house_02.png',
        'title' => 'Parkside Assisted Living',
        'location' => 'Central Park, NY',
        'price' => 4000
    ],
    [
        'image' => 'house_01.png',
        'title' => 'Sunrise Senior Living',
        'location' => 'Central Park, NY',
        'price' => 3800,
        'hidden' => true
    ],
    [
        'image' => 'house_02.png',
        'title' => 'Golden Age Home',
        'location' => 'Central Park, NY',
        'price' => 4200,
        'hidden' => true
    ],
    [
        'image' => 'house_01.png',
        'title' => 'Riverside Retirement',
        'location' => 'Central Park, NY',
        'price' => 4100,
        'hidden' => true
    ],
    [
        'image' => 'house_02.png',
        'title' => 'Maple Grove Living',
        'location' => 'Central Park, NY',
        'price' => 3900,
        'hidden' => true
    ],
    [
        'image' => 'house_01.png',
        'title' => 'Heritage House',
        'location' => 'Central Park, NY',
        'price' => 4300,
        'hidden' => true
    ],
    [
        'image' => 'house_02.png',
        'title' => 'Pleasant Valley Home',
        'location' => 'Central Park, NY',
        'price' => 4150,
        'hidden' => true
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load More Listings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php foreach ($cards as $card): ?>
            <div class="card <?php echo isset($card['hidden']) && $card['hidden'] ? 'hidden' : ''; ?>">
                <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>">
                <h2><?php echo $card['title']; ?></h2>
                <p class="location"><?php echo $card['location']; ?></p>
                <p class="price">$<?php echo number_format($card['price']); ?>/month</p>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="load-more">Load More Listings</button>
    <script src="script.js"></script>
</body>
</html>
