<main class="account_page">
        
    <form action="./insert/listing_insert.php" method="post">
        <h2>Add Listing</h2>
        <table>
            <tr>
            <td>Product ID</td>
            <td><input type="Number" id="pid" name="pid" required></td>
            </tr>
            <tr>
            <td>Add Title</td>
            <td><input type="text" id="title" name="title"></td>
            </tr>
            <td>Add Description</td>
            <td><input type="text" id="desc" name="desc"></td>
            </tr>
            <tr>
            <td>Price</td>
            <td><input type="Number" id="price" name="price"></td>
            </tr>
            <tr>
            <td>Add Product Image</td>
            <td><input type="file" id="image" name="image" required></td>
            </tr>
            </tr>
        </table>
        <input type="submit" value="Add Listing" style="margin-top: 1em;">
    </form>

    <div class="account_links">
    <div id="item-account">
        <h3><a href="placeholder.html">Listed Items</a></h3>
    </div>
    <div id="item-account">
        <h3><a href="placeholder.html">Items Sold</a></h3>
    </div>
    <div id="item-account">
        <h3><a href="placeholder.html">Add Listing</a></h3>
    </div>
    </div>

</main>