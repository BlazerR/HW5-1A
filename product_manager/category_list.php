<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        
        -<!-- add category rows here -->
        <?php foreach ($categories as $category): ?>
        <tr>
        <td><?php echo $category ['categoryName']; ?></td>
        <td>DELETE</td>
        </tr>
        <?php end foreach; ?>
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>




