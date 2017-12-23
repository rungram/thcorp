<div id="header">
            <a href="javascript: void(0);" class="search-mb"></a>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".lg-mb").click(function () {
                        window.location.href = $("#clang_link").val();
                    })
                })
            </script>
            <div class="lg-mb">
                <input type="hidden" name="clang_link" id="clang_link" value="https://www.fpt.com.vn/en/" />
            </div>
            <div class="ip-search boxs-mb r">
                <img src="images/ar-s.png" alt="" />
                <form action=" " method="get">
                    <input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="q" id="inp_search" />
                </form>
            </div>
            <a href="javascript: void(0);" title="" class="ic-menu"></a>
            <div class="wr-page">
                <div class="logo fl"><a href="https://www.fpt.com.vn/vi/" title=""><img src="images/logo.png" alt="" class="w100" /></a></div>
                <div class="lag fr">
                    <a href="https://www.fpt.com.vn/en/" title="" class=" lag-en"></a>
                    <a href="javascript:void(0);" title="" class="active lag-vi"></a>
                </div>
                <div class="search fr">
                    <a href="javascript: void(0);" title="" class="ic-search"></a>
                    <div class="ip-search boxs-pc r">
                        <img src="images/ar-s.png" alt="" />
                        <form action="https://www.fpt.com.vn/vi/tim-kiem" method="get">
                            <input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="q" id="inp_search" />
                        </form>
                    </div>
                </div>
                <?php include _template."layout/menu_top.php"; ?>
                <div class="clear"></div>
            </div>
        </div>