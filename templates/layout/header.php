<div id="header">
            <a href="javascript: void(0);" class="search-mb"></a>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".lg-mb").click(function () {
                        window.location.href = $("#clang_link").val();
                    })
                })
            </script>
            <script language="javascript"> 
                    function doEnter(evt){
                // IE                   // Netscape/Firefox/Opera
                var key;
                if(evt.keyCode == 13 || evt.which == 13){
                    onSearch(evt);
                }
                }
                function onSearch(evt) {
                        var keyword = document.getElementById("keyword").value;
                        if(keyword=='')
                            alert('Bạn chưa nhập tên!');
                        else{
                        //var encoded = Base64.encode(keyword);
                        location.href = "index.php?com=tim-kiem&keyword="+keyword;
                        loadPage(document.location);            
                        }
                }       
            </script>
            <div class="lg-mb">
                <input type="hidden" name="clang_link" id="clang_link" value="index.html" />
            </div>
            <div class="ip-search boxs-mb r">
                <img src="images/ar-s.png" alt="" />
                <form action=" " method="get">
                    <input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="q" id="inp_search" />
                </form>
            </div>
            <a href="javascript: void(0);" title="" class="ic-menu"></a>
            <div class="wr-page">
                <div class="logo fl"><a href="index.html" title=""><img src="images/logo.png" alt="" class="w100" /></a></div>
                <div class="lag fr">
                    <a href="index.html" title="" class=" lag-en"></a>
                    <a href="javascript:void(0);" title="" class="active lag-vi"></a>
                </div>
                <div class="search fr">
                    <a href="javascript: void(0);" title="" class="ic-search"></a>
                    <div class="ip-search boxs-pc r">
                        <img src="images/ar-s.png" alt="" />
                        <form class="fs-fsearch" id=""> 
                            <input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="keyword" id="keyword" style="width: 80%;"/>
                            <button type="button" onclick="onSearch(event,'keyword');">Tìm</button>
                        </form>
                    </div>
                </div>
                <?php include _template."layout/menu_top.php"; ?>
                <div class="clear"></div>
            </div>
        </div>