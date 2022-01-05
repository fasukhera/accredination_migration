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
        <img src="{{asset('logo-black.png')}}" alt="Preloader">
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
                <h5 class="card-header">Add Accordion Details</h5>
                <div class="card-body">
                    <form action="{{route('accordion_submit')}}" method="POST" enctype="multipart/form-data"
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

                        <div class="form-group">
                            <label>Main heading*</label>
                            <input type="text" class="form-control" name="main_h">
                        </div>

                        <div class="form-group">
                            <label>Accordion Heading*</label>
                            <input type="text" class="form-control" name="h1" required>
                        </div>
                        <div class="form-group">
                            <label>Accordion Paragraph*</label>
                            <input type="text" class="form-control" name="p1" required>
                        </div>

                        <div class="form-group" id="tags">
                            <label>Anchors* <small>Please add url then double hash sign i.e: ## and press tab to add new Anchor</small></label>
                            <br>
                            <input type="text" name="a" placeholder="Add an Anchor tag"/>
                        </div>

                        <div class="form-group" id="tags">
                            <label>Certification Anchors* <small>Please add url then double hash sign i.e: ## and press tab to add new Certification</small></label>
                            <br>
                            <input type="text" name="certification" placeholder="Add a tag"/>
                        </div>
                        <div class="form-group">
                            <label>Nested Accordion Heading*</label>
                            <input type="text" class="form-control" name="h2" required>
                        </div>
                        <div class="form-group">
                            <label>Nested Accordion Paragraph*</label>
                            <input type="text" class="form-control" name="p2" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 pull-right">Submit</button>
                    </form>
                </div>
            </div>
    </div>
    </section>
    @include('includes.footer')
    @include('includes.offcanvas')
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
                var txt = this.value
                // .replace(/[^a-z0-9\+\-\.\#]/ig, ''); // allowed characters
                if (txt) $("<span/>", {text: txt.toLowerCase(), insertBefore: this});
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
