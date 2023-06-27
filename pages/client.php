<div class="container-main">
    <div class="main_content_box vendorGap">
        <div class="header_p">
            <div class="product_header_text">
                <div class="product_text_box">
                    <h1 class="product_header_t">
                        Clirnt List
                    </h1>
                </div>
                <div class="product_text_box-2">
                    <h1 class="product_header_t-2">
                        (4)
                    </h1>
                </div>
            </div>
            <div class="box_export_add-h">
                <div class="add_menu">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop_addVendor"> <i class="fa-regular fa-square-plus"></i> Add</button>
                </div>
                <div class="export_menu">
                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-file-export"></i> Export</button>
                </div>
            </div>
        </div>
        <div class="button_box_card_box">
            <div class="cardBoxbox">
                <div class="card" style="width: 18rem;">
                    <div class="boxImgVendor">
                        <img src="assets/img/person-1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body flex-sm-column d-flex">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title">James Cammeron</h5>
                        </div>
                        <div class="d-flex flex-sm-column">
                            <div class="d-flex ">
                                <p class="card-text">Address: </p>
                                <p class="card-text">Jl. JOJO Adventure</p>
                            </div>
                            <div class="d-flex">
                                <p class="card-text">Contact: </p>
                                <p class="card-text">+62 6969 6969</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">EDIT</a>
                            <a href="#" class="btn btn-danger" onclick="hapus()">DELETE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="boxAllAdd">
                    <div class="boxAdd_all">
                        <label for="nameAdd">Name</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="nameAdd">Address</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="nameAdd">Contact</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                    </div>

                    <div class="boxAdd_all">
                        <label for="imageAdd">Upload Image</label>
                        <input type="file" name="imageAdd" id="imageAdd">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Change</button>
            </div>
        </div>
    </div>
</div>
<!-- modal add -->
<div class="modal fade" id="staticBackdrop_addVendor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="boxAllAdd">
                    <div class="boxAdd_all">
                        <label for="nameAdd">Name</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="nameAdd">Address</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="nameAdd">Contact</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                    </div>

                    <div class="boxAdd_all">
                        <label for="imageAdd">Upload Image</label>
                        <input type="file" name="imageAdd" id="imageAdd">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Change</button>
            </div>
        </div>
    </div>
</div>