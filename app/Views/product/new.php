<?= $this->extend('base') ?>
<?= $this->section('content') ?>


<body>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <form action="/product/create" method="post">

                    <div class="mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="crt" placeholder="input product name" name="name">
                    </div>

                    <div class="mb-3">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" min="1" id="stock" placeholder="Input product stock" name="stock" />
                    </div>

                    <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" min="0" id="price" placeholder="Input product price" name="price" />
                    </div>

                    <div class="mb-3">
                    <label for="category">Category</label>
                        <select name="category" id="category">
                            <option value="utilities">Utilities</option>
                            <option value="food_and_beverages">Food & Beverages</option>
                            <option value="books">Books</option>
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