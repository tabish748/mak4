<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/recruitment.css';
?>
</style>
<style>

</style>
<div class="recruitment-main-section" style=" background-image: url(assets/images/r-bg.jpg">


    <div class="inner-container-rec">
        <div class="rec-form-inner-parent">
            <div class="rec-form-section shadow">
                <div class="map-section-heading-area">
                    <h1 class="heading-page">Recruitment</h1>
                </div>

                <div class="rec-form-wrapper">
                    <form action="">
                        <div class="form-group mb-3">
                            <!-- <label for="">Name <span class="must">*</span></label> -->
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <!-- form group -->

                        <div class="form-group  mb-3">
                            <!-- <label for="">Email <span class="must">*</span></label> -->
                            <input type="email" placeholder="Emai" class="form-control">
                        </div>
                        <!-- form group -->

                        <div class="form-group mb-3">
                            <!-- <label for="">Mobile <span class="must">*</span></label> -->
                            <input type="number" placeholder="Mobile" class="form-control">
                        </div>
                        <!-- form group -->
                        <div class="form-group mb-3">
                            <div class="fileUpload blue-btn btn width100">
                                <span>Upload Attachment</span>
                                <input type="file" class="uploadlogo form-control" />
                            </div>
                        </div>
                        <!-- form group -->
                        <div class="form-group mb-3">
                            <input type="submit" value="Send" class="form-control send-btn">
                        </div>
                        <!-- form-group -->
                    </form>
                </div>
                <!-- rec-form-wrapper -->
            </div>
            <!-- rec-form-section -->
        </div>
        <!-- rec-form-inner-parent -->

    </div>
</div>
<!-- contact-main-section -->

<script>
// You can modify the upload files to pdf's, docs etc
//Currently it will upload only images

$(document).ready(function($) {

    // Upload btn on change call function
    $(".uploadlogo").change(function() {
        var filename = readURL(this);
        $(this).parent().children('span').html(filename);
    });

    // Read File and return value  
    function readURL(input) {
        var url = input.value;
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (
                ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf"
            )) {
            var path = $(input).val();
            var filename = path.replace(/^.*\\/, "");
            // $('.fileUpload span').html('Uploaded Proof : ' + filename);
            return "Uploaded file : " + filename;
        } else {
            $(input).val("");
            return "Only image/pdf formats are allowed!";
        }
    }
    // Upload btn end

});
</script>

<?php include 'incl/footer.php'; ?>