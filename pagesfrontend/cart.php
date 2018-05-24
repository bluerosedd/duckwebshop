<?php require_once("./pagesfrontendcontroller/cart.php");

$query = "SELECT * FROM products";
$stmt = $conn->prepare($query);
$stmt-> execute();
$products = $stmt->fetchAll();

?>

<div class="row">
    <div class="col s12 m12">

            <div class="tittlecolor"><h4>Shopping Cart</h4> </div>

        <?php
        if(empty($_SESSION['products'])) {
            echo "<div class=\"section center\"> 
                    <h5>Your cart is empty</h5>
                    <div class=\" center\">
                        <a  class=\"waves-effect waves-light btn\" href=\"./index.php?page=products\">Go to products</a>
                    </div>
                    </div>";
        }elseif(!empty($_SESSION['products'])){?>
       <table class="striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($_SESSION['products'] as $key=>$row):?>
            <tr>
                <td><?php print $row["productName"]; ?></td>
                <td><?php print $row["code"]; ?></td>
                <td><?php print $row["quantity"]; ?></td>
                <td><?php echo "kr"; print $row["price"]; ?></td>
                <td>
                    <a href="./index.php?page=cart&action=empty&code=<?php print $key?>"
                       onclick="return confirm('Are you sure you want to delete this product?');"
                       class="btnRemoveAction">Remove Item
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
       </table>

        <table>
            <div clas="row">
                <div class="col s4">
                    <?php $total = 0;
                    foreach ($_SESSION['products'] as $key=>$val) {
                        $total = $total + $val['price'];
                    }
                    ;?>
                    <div class="section">
                    <h5><strong>Total:</strong> <?php echo "kr"; print $total ?></h5>
                    </div>
                </div>

                <div class="section">
                    <div class="col s4">
                        <div>
                            <a  class="waves-effect waves-light btn" href="./index.php?page=cart&action=emptyall"
                                onclick="return confirm('Are you sure you want to delete all your cart?');">Empty Cart</a>
                        </div>
                    </div>
                    <div class="col s4">
                    <div>
                        <a  class="waves-effect waves-light btn" href="./index.php?page=purchase"
                            onclick="return confirm('Ready to purchase?');">Purchase</a>
                    </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </table>
    </div>
</div>
