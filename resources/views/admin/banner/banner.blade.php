@extends('admin.index')
@section('title', 'Create Banner')

@section('custom-style')
    <style>
        .main-product-image-container {
            height: 350px;
            border: 1px dashed #e7e2e2;
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;
        }

        .browse-image {
            margin-left: 30px;
            margin-top: 10px;
            width: 50px;
            height: 50px;
            border: 1px solid white;
            box-shadow: 0px 2px 10px rgb(199, 199, 199);
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 5%;
            cursor: pointer;
            background: white;
        }

        .browse-image .bx-cloud-upload {
            font-size: 20px;
        }

        #mainProductImage {
            display: none;
        }

        .preview-main-product {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .preview-main-product img {
            border-radius: 5px;
            height: 300px;
            width: auto;
            object-fit: cover;
        }

        .preview-main-product .upload-main-image-placeholder img {
            height: auto;
            width: 200px;
            object-fit: fill;
            border-radius: 5px;
        }

        .product-gallery-image-container {
            height: auto;
            border: 1px dashed #e7e2e2;
            border-radius: 10px;
            padding: 10px;
        }

        .browse-gallery-image {
            margin-left: 30px;
            margin-top: 10px;
            width: 30px;
            height: 30px;
            border: 1px solid white;
            box-shadow: 0px 0px 10px rgb(218, 217, 217);
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 17%;
            cursor: pointer;
        }

        .browse-gallery-image .bx-cloud-upload {
            font-size: 16px;
        }

        .product-gallery-image {
            display: none;
        }

        .preview-gallery-product {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .preview-gallery-product .selected-image-container {
            height: 70px;
            width: auto;
            border-radius: 5px;
            background-color: white;
            display: flex;
            flex-direction: row;

        }

        .preview-gallery-product .selected-image-container img {
            height: 100%;
            width: auto;
            object-fit: fill;
            border-radius: 5px;
            border: 1px solid rgb(201, 201, 201);
        }

        .preview-gallery-product .selected-image-container .gallery-image-remove-btn {
            font-size: 18px;
            color: white;
            background: #cb0404;
            border-radius: 50%;
            height: 20px;
            width: 20px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: absolute;
            left: 20%;
        }

        .product-gallery-image-container .upload-gallery-image-placeholder img {
            height: auto;
            width: 80px;
        }
    </style>
@endsection

@section('content')

    <div class="card">
        <div class="card-header d-flex flex-row justify-content-between align-items-center">
            <h5 class="card-header">All Banners</h5>
            <button class="btn btn-primary btn-md" type="button" data-bs-target="#createBannerModal"
            data-bs-toggle="modal">Create Banner</button>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl.No.</th>
                            <th>Image</th>
                            <th>Main Text</th>
                            <th>Sub Text</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($all_banner as $key => $item)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>
                                    <img src="{{asset($item->image)}}" alt="Banner Image" height="60" width="60" style="border-radius:50%; object-fit:cover;">
                                </td>
                                <td>
                                    {{$item->main_text ?? 'Not Found'}}
                                </td>
                                <td>
                                    {{$item->sub_text ??'Not Found'}}
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge bg-label-success">Active</span>
                                    @else
                                        <span class="badge bg-label-danger">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                                View</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createBannerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBannerModalTitle">Create Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-form-container">
                                <form id="createBannerForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="" class="form-label">Main Text</label>
                                                <input type="text" name="main_text" class="form-control" placeholder="e.g Summer Style">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="" class="form-label">Sub Text</label>
                                                <input type="text" name="sub_text" class="form-control" placeholder="e.g For Women">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">Banner Image<sup class="text-danger">*</sup></label>
                                            <div class="main-product-image-container">
        
                                                <div class="browse-image main-product-browse">
                                                    <i class="bx bx-cloud-upload" aria-hidden="true"></i>
                                                </div>
                                                <div class="preview-main-product">
                                                    <div class="upload-main-image-placeholder text-center">
                                                        <img  src="{{asset('admin/assets/img/upload-image-placeholder.jpg')}}" alt="upload image placeholder">
                                                        <p>Choose Image To Upload</p>
                                                    </div>
                                                    
                                                </div>
                                                <input type="file" name="banner_image" id="mainProductImage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-success create-banner-form-btn mt-4">Submit</button>
                                    </div>
                                </form>
                            </div>
        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')

    <script>
        let galleryImages = [];
        let totalGalleryImages = 0;

        $('.main-product-browse').on('click', function() {
            $('#mainProductImage').click();
        });

        $('#mainProductImage').on('change', function() {
            const imageFile = $(this)[0].files;
            const maxFileSizeAllowed = 2 * 1024 * 1024;

            const mimeType = imageFile[0].type;

            if (imageFile[0].size > maxFileSizeAllowed) {
                toastr.error('Oops! File too large. Maximum allowed size 2 MB');
            } else if (mimeType.split('/')[0] !== 'image') {
                toastr.error('Oops! Not a valid image. Please upload image only');
            } else {
                const fileReader = new FileReader();
                fileReader.onload = function(e) {
                    $('.preview-main-product').html(
                        `
                            <img src="${e.target.result}" alt="product main image" >
                        `
                    )
                };
                fileReader.readAsDataURL(imageFile[0]);
            }
        });

        // $('.browse-gallery-image').on('click', function(){
        //     $('.product-gallery-image').click();
        // });

        // $('.product-gallery-image').on('change', function(){
        //     const imageFile = $(this)[0].files;

        //     const maxFileSizeAllowed = 2*1024*1024;
        //     const mimeType = imageFile[0].type;

        //     if(imageFile[0].size > maxFileSizeAllowed){
        //         toastr.error('Oops! File too large. Maximum allowed size 2 MB');
        //     }else if(mimeType.split('/')[0] !== 'image'){
        //         toastr.error('Oops! Not a valid image. Please upload image only');
        //     }else{

        //         if(totalGalleryImages >= 4){
        //             toastr.error('Oops! Maximum 4 gallery images can be uploaded at a time.');
        //         }else{
        //             const fileReader = new FileReader();
        //             fileReader.onload = function(e){
        //                 const imageId = 'image_' + Date.now();
        //                 $('.preview-gallery-product').append(
        //                     `
    //                         <div class="selected-image-container"  id="${imageId}" style="margin-top:10px;">
    //                             <img src="${e.target.result}" alt="product gallery image">
    //                             <div class="gallery-image-remove-btn">
    //                                 <i class="bx bx-x-circle"></i>
    //                             </div>
    //                         </div>
    //                     `
        //                 )
        //             };
        //             fileReader.readAsDataURL(imageFile[0]);
        //             totalGalleryImages++;
        //             galleryImages.push(imageFile[0]);

        //             // console.log('Total Imgages-->', totalGalleryImages)
        //             // console.log('Gallery Imgages-->', galleryImages)
        //         }
        //     }
        // });

        //remove gallery image
        // $(document).on('click', '.gallery-image-remove-btn', function(){
        //     let removeImageFromGalleryArray =  $('.selected-image-container').index($(this).closest('.selected-image-container'));

        //     if (removeImageFromGalleryArray !== -1) {
        //         galleryImages.splice(removeImageFromGalleryArray, 1);
        //     }
        //     totalGalleryImages = totalGalleryImages - 1;

        //     $(this).closest('.selected-image-container').remove();

        //     // console.log('Total Imgages-->', totalGalleryImages)
        //     // console.log('Gallery Imgages-->', galleryImages)
        // });


        //Submit Product Details

        $('#createBannerForm').on('submit', function(e) {
            e.preventDefault();

            const main_image = $('#mainProductImage')[0].files;

            // console.log('Main Image --->', main_image[0]);

            if (main_image.length == 0) {
                toastr.error('Oops! Please add banner image');
            } else {
                $('.create-banner-form-btn').attr('disabled', true);
                $('.create-banner-form-btn').text('Please wait...');

                let formData = new FormData(this);
                formData.append('banner_image', main_image[0]);

                $.ajax({
                    url: "{{ route('admin.create.banner') }}",
                    type: "POST",
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(data) {
                        // console.log('Response  data ===>', data)
                        if (data.status == 200) {
                            toastr.success(data.message)

                            $('#createBannerForm')[0].reset();

                            $('.preview-main-product').html(`
                            
                                <div class="upload-main-image-placeholder text-center">
                                    <img  src="{{ asset('admin/assets/img/upload-image-placeholder.jpg') }}" alt="upload image placeholder">
                                    <p>Choose Image To Upload</p>
                                </div>
                            `);

                            $('.create-banner-form-btn').attr('disabled', false);
                            $('.create-banner-form-btn').text('Submit');

                            window.location.reload(true);
                        } else {
                            toastr.error(data.message)
                            $('.create-banner-form-btn').attr('disabled', false);
                            $('.create-banner-form-btn').text('Submit');
                        }
                    },
                    error: function(err) {
                        toastr.error('Oops! Something went wrong');
                        $('.create-banner-form-btn').attr('disabled', false);
                        $('.create-banner-form-btn').text('Submit');
                    }
                });
            }


        });
    </script>


@endsection