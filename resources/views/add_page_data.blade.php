<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<style>
    .file-upload {
        background-color: #ffffff;
        width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #1FB264;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #15824B;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #1AA059;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #1FB264;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #1FB264;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #15824B;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
<!-- tags -->
<style>

    #tags > span {
        cursor: pointer;
        display: block;
        float: left;
        color: #fff;
        background: #789;
        padding: 5px;
        padding-right: 25px;
        margin: 4px;
    }

    #tags > span:hover {
        opacity: 0.7;
    }

    #tags > span:after {
        position: absolute;
        content: "×";
        border: 1px solid;
        padding: 2px 5px;
        margin-left: 3px;
        font-size: 11px;
    }

    #tags > input {
        background: #eee;
        border: 0;
        margin: 4px;
        padding: 7px;
        width: auto;
    }
</style>
<body>

<div id="preloader" class="tlp-preloader">
    <div class="animation-preloader">
        <div class="tlp-spinner"></div>
        <img src="{{asset('AccrediNationLogoDB.png')}}" alt="Preloader">
    </div>
</div>

<div id="wrapper" class="wrapper">
    <a href="#main_content" data-type="section-switch" class="return-to-top">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <div id="main_content">
@include('includes.header_admin_panel')
        <section class="feature-wrap-layout1">
            <div class="card offset-3 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h5 class="card-header">Add Page Details</h5>
                <div class="card-body">
                    <form action="{{route('form_submit')}}" method="POST" enctype="multipart/form-data"
                          id="certificate">
                        @csrf
                        <div class="form-group">
                            <label>Certification*</label>
                            <select class="form-control" name="certificate_id" required>
                                <option value="">Select Certification</option>
                                @foreach($certificates as $certificate)
                                    <option value="{{$certificate->id}}">{{$certificate->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- This is the upper portion of the page -->

                        <div class="form-group">
                            <label>HEADER*</label>
                            <input type="text" class="form-control" name="h1">
                        </div>

                        <div class="form-group">
                            <label>Paragraph 1*</label>
                            <input type="text" class="form-control" name="p1">
                            
                        
                        </div>

                        <div class="form-group">
                            <label>Paragraph 2*</label>
                            <input type="text" class="form-control" name="p2">
                            
                            <div style="border-bottom: 2px solid black; padding-top: 25px;">
                            </div>
                        </div>

                        <!-- TOP LEFT BOX -->

                        <div class="form-group">
                            <label>Who Heading*</label>
                            <input type="text" class="form-control" name="wh" >
                        </div>

                        <div class="form-group">
                            <label>Who Paragraph 1*</label>
                            <input type="text" class="form-control" name="wp">
                        </div>

                        <div class="form-group" id="tags">
                            <label>Key Points</label>
                            <input type="text" name="li1" placeholder="Add a tag"/>
                        </div>
                        
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- TOP RIGHT BOX -->

                        <div class="form-group">
                            <label>Entry Heading*</label>
                            <input type="text" class="form-control" name="eh" >
                        </div>

                        <div class="form-group">
                            <label>Entry Paragraph 1*</label>
                            <input type="text" class="form-control" name="ep">
                        </div>

                        <div class="form-group" id="tags">
                            <label>Key Points</label>
                            <input type="text" name="li2" placeholder="Add a tag"/>
                        </div>
                       
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- BOTTOM LEFT BOX -->

                        <div class="form-group">
                            <label>Learn Heading*</label>
                            <input type="text" class="form-control" name="lh" >
                        </div>

                        <div class="form-group">
                            <label>Learn Paragraph 1*</label>
                            <input type="text" class="form-control" name="lp">
                        </div>

                        <div class="form-group" id="tags">
                            <label>Key Points</label>
                            <input type="text" name="li3" placeholder="Add a tag"/>
                        </div>
                        
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- BOTTOM RIGHT BOX -->

                        <div class="form-group">
                            <label>Resource Heading*</label>
                            <input type="text" class="form-control" name="rh" >
                        </div>

                        <div class="form-group">
                            <label>Resource Paragraph 1*</label>
                            <input type="text" class="form-control" name="rp">
                        </div>

                        <div class="form-group" id="tags">
                            <label>Key Points</label>
                            <input type="text" name="li4" placeholder="Add a tag"/>
                        </div>
                        
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        
                        <!-- CERTIFICATION BOX -->

                        <!-- LEFT BOX -->
                        
                        <div class="form-group">
                            <label>Box Header*</label>
                            <input type="text" class="form-control" name="bh" >
                        </div>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- 1st box -->

                        <div class="form-group">
                            <label>1st Header*</label>
                            <input type="text" class="form-control" name="l_bh1" >
                        </div>

                        <div class="form-group">
                            <label>1st Paragraph*</label>
                            <input type="text" class="form-control" name="l_bp1" >
                        </div>

                        <div style="border-bottom: 2px solid black;">
                        </div>

                        <!-- 2nd box -->

                        <div class="form-group">
                            <label>2nd Header*</label>
                            <input type="text" class="form-control" name="l_bh2" >
                        </div>

                        <div class="form-group">
                            <label>2nd Paragraph*</label>
                            <input type="text" class="form-control" name="l_bp2" >
                        </div>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- 3rd box -->

                        <div class="form-group">
                            <label>3rd Header*</label>
                            <input type="text" class="form-control" name="l_bh3" >
                        </div>

                        <div class="form-group">
                            <label>3rd Paragraph*</label>
                            <input type="text" class="form-control" name="l_bp3" >
                        </div>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- 4th box -->

                        <div class="form-group">
                            <label>4th Header*</label>
                            <input type="text" class="form-control" name="l_bh4" >
                        </div>

                        <div class="form-group">
                            <label>4th Paragraph*</label>
                            <input type="text" class="form-control" name="l_bp4" >
                        </div>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- ---------------------------------------------------------------------- -->


                        <!-- RIGHT BOX -->

                        <!-- 1st box -->

                        <div class="form-group">
                            <label>1st Header*</label>
                            <input type="text" class="form-control" name="r_bh1" >
                        </div>

                        <div class="form-group">
                            <label>1st Paragraph*</label>
                            <input type="text" class="form-control" name="r_bp1" >
                        </div>

                        <div style="border-bottom: 2px solid black;">
                        </div>

                        <!-- 2nd box -->

                        <div class="form-group">
                            <label>2nd Header*</label>
                            <input type="text" class="form-control" name="r_bh2" >
                        </div>

                        <div class="form-group">
                            <label>2nd Paragraph*</label>
                            <input type="text" class="form-control" name="r_bp2" >
                        </div>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- 3rd box -->

                        <div class="form-group">
                            <label>3rd Header*</label>
                            <input type="text" class="form-control" name="r_bh3" >
                        </div>

                        <div class="form-group">
                            <label>3rd Paragraph*</label>
                            <input type="text" class="form-control" name="r_bp3" >
                        </div>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- 4th box -->

                        <div class="form-group">
                            <label>4th Header*</label>
                            <input type="text" class="form-control" name="r_bh4" >
                        </div>

                        <div class="form-group">
                            <label>4th Paragraph*</label>
                            <input type="text" class="form-control" name="r_bp4" >
                        </div>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                        <!-- ---------------------------------------------------------------------- -->
                        
                        <div class="form-group">
                            <label>1st Header*</label>
                            <input type="text" class="form-control" name="last_h" >
                        </div>

                        <div class="form-group" id="tags">
                            <label>Key Points</label>
                            <input type="text" name="last-li" placeholder="Add a tag"/>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 pull-right">Submit</button>
                        <div style="border-bottom: 2px solid black; padding-top: 25px;">
                        </div>

                       

                       
                    </form>
                </div>
            </div>
    </div>
    </section>
    @include('includes.footer')
    @include('includes.offcanvas2')
</div>
</div>

<!-- Dependency Scripts -->
@include('includes.dependencies')
<script src="assets/js/app.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }

    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });

    $(function () { // DOM ready
        // ::: TAGS BOX
        $("#tags input").on({
            focusout: function () {
                var txt = this.value; //.replace(/[^a-z0-9\+\-\.\#]/ig, '') allowed characters
                if (txt) $("<span/>", {text: txt, insertBefore: this});
                this.value = "";
            },
            keyup: function (ev) {
                // if: comma|enter (delimit more keyCodes with | pipe)
                if (/(188|13)/.test(ev.which)) $(this).focusout();
            }
        });
        $('#tags').on('click', 'span', function () {
            if (confirm("Remove " + $(this).text() + "?")) $(this).remove();
        });

    });

    $("#certificate").on('submit', function (e) {
        let tags = "";
        $("form #tags span").each(function (index, value) {
            tags += value.innerText + ",";
        })
        $("form #tags input").val(tags)
    });
</script>
</body>
</html>
