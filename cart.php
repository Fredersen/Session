<?php 
 session_start();
    if (!isset($_SESSION['loginname'])) {
    header ('Location: login.php');
    exit();
    }

require 'inc/head.php';
require 'inc/data/products.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
    <ul>
    <?php foreach ($_SESSION['cart'] as $value):?>
            <li>
            <?php echo 'Produit :'  . $catalog[$value]['name']; ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
