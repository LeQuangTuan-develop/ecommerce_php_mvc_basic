window.addEventListener("load", () => {
    // handle upload file image
    let dropArea = document.getElementById('drop-area')
    let inputFile = document.querySelector('#fileElem')

        ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false)
        })

    function preventDefaults(e) {
        e.preventDefault()
        e.stopPropagation()
    }

    ;['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, highlight, false)
    })

        ;['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false)
        })

    function highlight(e) {
        dropArea.classList.add('highlight')
    }

    function unhighlight(e) {
        dropArea.classList.remove('highlight')
    }

    inputFile.addEventListener('change', () => {
        handleFiles(inputFile.files)
    })

    dropArea.addEventListener('drop', handleDrop, false)

    function handleDrop(e) {
        let dt = e.dataTransfer
        let files = dt.files

        handleFiles(files)
    }

    function previewFile(file) {
        let reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onloadend = function () {
            let boxImg = document.createElement('div')
            boxImg.classList.add('col-6', 'col-sm-4', 'col-md-3', 'mb-3', 'mb-lg-5')
            boxImg.innerHTML = `<!-- Card -->
              <div class="card card-sm">
                <img class="card-img-top" src="" alt="Image Description">

                <div class="card-body">
                  <div class="row text-center">
                    <div class="col">
                      <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="<?= BASE_URL?>\public\template/img/1920x1080/img1.jpg" data-caption="Image #02">
                        <i class="tio-visible-outlined"></i>
                      </a>
                    </div>

                    <div class="col column-divider">
                      <a class="text-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="tio-delete-outlined"></i>
                      </a>
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->`
            boxImg.querySelector('.card-img-top').src = reader.result

            document.getElementById('fancyboxGallery').appendChild(boxImg)
        }
    }

    function handleFiles(files) {
        files = [...files]
        files.forEach(previewFile)
    }

    function uploadFile(Data) {
        var id = formUpdateProduct.getAttribute('data-id');
        let url = `http://localhost/blog_ecommerce/product/update_product/${id}`

        console.log(Data);
        var fileImg = Data.fileImg
        fileImg = [...fileImg]
        Data.fileImg = fileImg
        var json_data = JSON.stringify(Data)

        formData = new FormData()
        formData.append('data', json_data)
        var tmp = 0
        console.log(fileImg);
        fileImg.forEach((file) => {
            tmp++;
            formData.append(`file${tmp}`, file)
        })

        fetch(url, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(result => {
                if (result.status == "1") {
                    return {
                        status: 1,
                        message: "cập nhật sản phẩm thành công"
                    }
                } else {
                    return {
                        status: 0,
                        message: "cập nhật sản phẩm thất bại"
                    }
                }
            })
            .then(message => handleOpenToast(message))
            .catch(error => {
                console.error('Error:', error);
            })
    }

    function handleOpenToast({status, message}) { 
      const toast = document.querySelector('#toast')
      let alert = toast.querySelector('.alert')
      if (status == 1) {
        alert.classList.add('alert-success')
        alert.innerHTML = message
      } else {
        alert.classList.add('alert-danger')
        alert.innerHTML = message
      }

      $('#toast').toast({
        delay: 1500
      });

      $('#toast').toast('show');
    }

    // Handle Update Products
    const formUpdateProduct = document.querySelector('#form-update-product');
    var formUpdate = new Validator('#form-update-product')
    var quillCustom = document.querySelector('.quill-custom')
    console.log(quillCustom);
    var quillEditor = quillCustom.querySelector('.ql-editor')
    console.log(quillEditor);
    var textarea = document.querySelector('textarea')
    console.log(textarea.innerHTML);
    quillEditor.innerHTML = textarea.innerHTML
    console.log("quill 1:" + quillEditor.innerHTML);

    formUpdate.onSubmit = function (formData) {
        var quillEditor = document.querySelector('.ql-editor')
        console.log(quillEditor.innerHTML);
        textarea.innerHTML = quillEditor.innerHTML
        console.log(textarea);

        var imgList = document.querySelectorAll('.card-img-top')
        var arrayImgName = []
        imgList.forEach(img => {
            if (img.currentSrc.includes('http://localhost/blog_ecommerce/public/images/products/')) {
                arrayImgName.push(img.currentSrc.replace("http://localhost/blog_ecommerce/public/images/products/", ""));
            }
        });

        // xử lý dữ liệu
        formData.imgListName = arrayImgName;
        formData.description = textarea.innerHTML
        formData.productPrice = formData.productPrice.split('.')
        formData.productPrice = formData.productPrice.join('')
        var fileImg = formData.fileImg
        fileImg = [...fileImg]
        formData.fileImg = fileImg
        uploadFile(formData)
    }
})


