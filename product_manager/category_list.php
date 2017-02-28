<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        -<!-- add category rows here -->
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->
    
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
/* show tables */ $result = mysql_query('SHOW TABLES',$connection) or die('cannot show tables'); while($tableName = mysql_fetch_row($result)) { $table = $tableName[0]; echo '
',$table,'
'; $result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table); if(mysql_num_rows($result2)) { echo ''; echo ''; while($row2 = mysql_fetch_row($result2)) { echo ''; foreach($row2 as $key=>$value) { echo ''; } echo ''; } echo '
Field
Type
Null
Key
Default
Extra
',$value,'

'; } } 
<?php include '../view/footer.php'; ?>



