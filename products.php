<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = " Home"; ?>
<?php include("./partials/head.php"); ?>

<body>
    <?php include("./partials/navbar.php") ?>
    <div class="cards flex flex-wrap justify-center gap-10 my-16">
        <?php
        $connect = mysqli_connect("localhost", "root", "", "project");
        $query = "SELECT * FROM products";
        $res = mysqli_query($connect, $query);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_array($res)) { ?>

                <div class="max-w-sm bg-white rounded-lg hover:scale-110 hover:shadow-2xl transition duration-300 ease-in-out">
                    <div class="w-60 h-52">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-full" src="admin/include/form/images/<?php echo $row['image']; ?>"
                                alt="" />
                        </a>
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <?php echo $row['pname'] ?>
                            </h5>
                        </a>
                        <p>
                            <?php echo "&#8377; " . number_format($row['price'], 2, '.', ','); ?>
                        </p>
                        <a 
                            <?php if(isset($_SESSION['cid'])) { ?>
                                href='cart.php'
                            <?php } else { ?>
                                href='./client/login.php'
                                onclick="alert('Login to access ADD TO CART');"
                            <?php } ?>
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg uppercase mt-2 hover:bg-blue-800"
                            >
                            <svg class="w-5 h-5 mr-2 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm1-4H5m0 0L3 4m0 0h5.501M3 4l-.792-3H1m11 3h6m-3 3V1" />
                            </svg>
                            Add to cart
                        </a>
                    </div>
                </div>
            <?php }
        } else { ?>
            <p class="text-center text-xl">No products to show yet :)</p>
        <?php } ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>