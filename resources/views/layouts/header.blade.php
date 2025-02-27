<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/products">My app</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="/categories">Category</a>
                        <a class="dropdown-item" href="/tags">Tag</a>
                    </div>
                </li>
                @if(Request::is('products')) <!-- Kiểm tra xem trang hiện tại có phải là trang index của danh mục không -->
                <li class="nav-item">
                    <a class="nav-link" href="/products/create">Add new products</a> <!-- Đường dẫn đến trang tạo danh mục mới -->
                </li>
                @endif
                @if(Request::is('categories')) <!-- Kiểm tra xem trang hiện tại có phải là trang index của danh mục không -->
                <li class="nav-item">
                    <a class="nav-link" href="/categories/create">Add new category</a> <!-- Đường dẫn đến trang tạo danh mục mới -->
                </li>
                @endif
                @if(Request::is('tags')) <!-- Kiểm tra xem trang hiện tại có phải là trang index của danh mục không -->
                <li class="nav-item">
                    <a class="nav-link" href="/tags/create">Add new tags</a> <!-- Đường dẫn đến trang tạo danh mục mới -->
                </li>
                @endif
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>