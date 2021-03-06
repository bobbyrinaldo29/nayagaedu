<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<!-- Chart -->
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Datatable -->
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('/vendor/toastr/js/toastr.min.js') }}"></script>

<!-- Nestable -->
<script src="{{ asset('/vendor/nestable2/js/jquery.nestable.min.js') }}"></script>

<!-- All init script -->
<script src="{{ asset('/js/plugins-init/toastr-init.js') }}"></script>
<script src="{{ asset('/js/plugins-init/nestable-init.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('vendor/owl.carousel/owl.carousel.js') }}"></script>

<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/dlabnav-init.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>

<script src="{{ asset('/dist/trumbowyg.min.js') }}"></script>
<script src="{{ asset('/dist/plugins/upload/trumbowyg.upload.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
    CKEDITOR.replace( 'editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

<script>
    $('#trumbowyg').trumbowyg({
        lang: 'id',
        autogrow: true,
        changeActiveDropdownIcon: true,
        imageWidthModalEdit: true,
        urlProtocol: true,
        defaultLinkTarget: '_blank',
        btnsDef: {
            // Create a new dropdown
            image: {
                dropdown: ['insertImage', 'upload'],
                ico: 'insertImage'
            }
        },
        // Redefine the button pane
        btns: [
            ['viewHTML'],
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['image'], // Our fresh created dropdown
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ],
        plugins: {
            upload: {
                serverPath: 'https://api.imgur.com/3/image',
                fileFieldName: 'image',
                headers: {
                    'Authorization': 'Client-ID 9e57cb1c4791cea'
                },
                urlPropertyName: 'data.link'
            }
        }
    });

    function cardsCenter() {

        /*  testimonial one function by = owl.carousel.js */

        jQuery('.card-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            //center:true,
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                800: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        })
    }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            cardsCenter();
        }, 1000);
    });
</script>
<script>
    function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");
        var base_url = window.location.origin;

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");
        navigator.clipboard.writeText(base_url + "/register?referred_by=" + copyText.value);

        /* Alert the copied text */
        document.getElementById("referralCode").innerHTML = " Copied!";
    }
</script>
