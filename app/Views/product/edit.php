<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<head>

</head>


<body class="container">
<main role="main" class="container">

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">

            <form action="/product/<?= $data['id'] ?>/update" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="mb-3">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" placeholder="Input product name" name="name" value="<?= $data['name'] ?>" />
                </div>

                <div class="mb-3">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" min="1" id="stock" placeholder="Input product stock" name="stock" value="<?= $data['stock'] ?>" />
                </div>

                <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" class="form-control" min="0" id="price" placeholder="Input product price" name="price" value="<?= $data['price'] ?>" />
                </div>

                <div class="mb-3">
                    <label for="category">Category</label>
                        <select name="category" id="category">
                            <option value="utilities" <?php $data['category'] == "utilities" ? "selected" : "" ?>>Utilities</option>
                            <option value="food_and_beverages" <?php $data['category'] == "food_and_beverages" ? "selected" : "" ?>> Food & Beverages</option>
                            <option value="books" <?php $data['category'] == "books" ? "selected" : "" ?>>Books</option>
                        </select>
                </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>

        </div>
    </div>
</div>
</body>
<?= $this->endSection() ?>