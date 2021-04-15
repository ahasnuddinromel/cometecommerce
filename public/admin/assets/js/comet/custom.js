(function($){
    $(document).ready(function(){

        // Load Ck Editor
            CKEDITOR.replace('discription_editor');

            $('#select_size').select2();
            $('#select_color').select2();

        // Logout Features
        $(document).on('click', '#logout_btn',  function(e){
            e.preventDefault();
            $('#logout_form').submit();
        });


        // Single Image Select && Load
        $('#product_img_select').change(function (e) {          
            let photo_url = URL.createObjectURL(e.target.files[0]);
            $('#product_img_load').attr('src', photo_url );

        });


        // Multi Image Select && Load
        $('#multi_img_select').change(function (e) {  
            let multi_img_url = ' ';
            for (let i = 0; i < e.target.files.length; i++) {
                let multi_url = URL.createObjectURL(e.target.files[i]);
                
                multi_img_url += '<img class="shadow"  src="'+multi_url+'">' ;     
            }   
            
                $('.post-multi-imges').html(multi_img_url);
            });


             //Edit Single Image Select && Load
        $('#edit_product_img_select').change(function (e) {          
            let photo_url = URL.createObjectURL(e.target.files[0]);
            $('#edit_product_img_load').attr('src', photo_url );

        });


        //Edit Multi Image Select && Load
        $('#edit_multi_img_select').change(function (e) {  
            let multi_img_url = ' ';
            for (let i = 0; i < e.target.files.length; i++) {
                let multi_url = URL.createObjectURL(e.target.files[i]);
                
                multi_img_url += '<img class="shadow"  src="'+multi_url+'">' ;     
            }               
                $('.edit-post-multi-imges').html(multi_img_url);
            });
 
 
        // Category Status
        //$(document).on('click', 'input.cat_check', function(){

        //    let checked = $(this).attr('checked');
        //    let status_id = $(this).attr('status_id');

        //    if( checked == 'checked' ){
        //        $.ajax({
        //            url : 'category/status-inactive/' + status_id,
        //            success : function(data){
        //                swal('Status Inactive successful');
        //            }
        //        });
        //    }else {
        //        $.ajax({
        //            url : 'category/status-active/' + status_id,
        //            success : function(data){
        //                swal('Status Active successful');
        //            }
        //        });
        //    }
        //});


        //Slider Edit
            $('.edit_slider_modal').click(function(e){
                e.preventDefault();
                let id = $(this).attr('edit_id');

                $.ajax({
                    url: 'slider/' +id+ '/edit',
                    success: function (data){
                        $('#slider_edit form input[name = "edit_id"]').val(data.id);
                        $('#slider_edit form input[name = "slider_title"]').val(data.slider_title);
                        $('#slider_edit form input[name = "slider_discription"]').val(data.slider_discription);
                        $('#slider_edit form input[name = "slider_image"]').val(data.slider_image);
                    
                        $('#slider_edit').modal('show');
                        
                    }
                }); 
            });




            //Product Catagory Edit
                    $('.edit_product_cata').click(function(e){
                        e.preventDefault();
                        let id = $(this).attr('catagory_id');

                        $.ajax({
                            url: 'cata/' +id+ '/edit',
                            success: function (data){
                                $('#cata_edit form input[name = "catagory_name"]').val(data.catagory_name);
                                $('#cata_edit form input[name = "cata_id"]').val(data.cata_id);   
                                $('#cata_edit').modal('show');                    
                            }
                        }); 
                    });

                    //Product Sub Catagory Edit
                    $('.edit_product_sub_cata').click(function(e){
                        e.preventDefault();
                        let id = $(this).attr('sub_cata_id');

                        $.ajax({
                            url: 'subcatagory/' +id+ '/edit',
                            success: function (data){
                                $('#sub_cata_edit form input[name = "sub_catagory_name"]').val(data.sub_catagory_name);
                                $('#sub_cata_edit form input[name = "sub_catagory_id"]').val(data.sub_catagory_id);   
                                $('#sub_cata_edit form select[name = "product_catagorie_id"]').val(data.product_catagorie_id);   
                                $('#sub_cata_edit').modal('show');                    
                            }
                        }); 
                    });

                    //Product Brand Edit
                    $('.edit_brand').click(function(e){
                        e.preventDefault();
                        let id = $(this).attr('brand_id');

                        $.ajax({
                            url: 'brand/' +id+ '/edit',
                            success: function (data){
                                $('#brand_edit form input[name = "brand_name"]').val(data.brand_name);
                                $('#brand_edit form input[name = "brand_id"]').val(data.brand_id);   
                                $('#brand_edit').modal('show');                    
                            }
                        }); 
                    });



                    ////Product Edit
                    //$('.edit_product').click(function(e){
                    //    e.preventDefault();
                    //    let id = $(this).attr('product_id');

                    //    $.ajax({
                    //        url: 'product/' +id+ '/edit',
                    //        success: function (data){
                    //            $('#product_edit form input[name = "pid"]').val(data.pid);
                    //            $('#product_edit form input[name = "pname"]').val(data.pname);   
                    //            $('#product_edit form input[name = "pro_id"]').val(data.id);   
                    //            $('#product_edit form input[name = "cata"]').val(data.cata);   
                    //            $('#product_edit form input[name = "sub_cata"]').val(data.sub_cata);   
                    //            $('#product_edit form input[name = "brand"]').val(data.brand);   
                    //            $('#product_edit form input[name = "quantity"]').val(data.quantity);   
                    //            $('#product_edit form input[name = "tp"]').val(data.tp);   
                    //            $('#product_edit form input[name = "sp"]').val(data.sp);   
                    //            $('#product_edit form input[name = "photo"]').val(data.photo);   
                    //            $('#product_edit').modal('show');                    
                    //        }
                    //    }); 
                    //});


                     // Admin dash menu manage
        $('#sidebar-menu ul li ul li.ok').parent('ul').slideDown();
        $('#sidebar-menu ul li ul li.ok a').css('color', '#5ae8ff');
        $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').css('background-color', '#19c1dc');
        $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').addClass('subdrop');
     
    });

})(jQuery)
