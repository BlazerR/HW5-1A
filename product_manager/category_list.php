<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->
      $categories = get_categories();
      include('product_add.php');
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>




