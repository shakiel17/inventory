 <!-- Start app Footer part -->
        <!-- <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="#">Supply Chain Management</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer> -->
    </div>
</div>
<!-- General JS Scripts -->
<script src="<?=base_url();?>design/assets/bundles/lib.vendor.bundle.js"></script>
<script src="<?=base_url();?>design/js/CodiePie.js"></script>

<script src="<?=base_url();?>design/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/datatables/datatables.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/jquery-ui/jquery-ui.min.js"></script>

<script src="<?=base_url();?>design/js/page/modules-datatables.js"></script>
<!-- JS Libraies -->
<script src="<?=base_url();?>design/assets/modules/jquery.sparkline.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/chart.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="<?=base_url();?>design/assets/modules/summernote/summernote-bs4.js"></script>
<script src="<?=base_url();?>design/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?=base_url();?>design/js/page/index.js"></script>

<!-- Template JS File -->
<script src="<?=base_url();?>design/js/scripts.js"></script>
<script src="<?=base_url();?>design/js/custom.js"></script>
<script>
    let pass1 = document.querySelector(".password");
    let pass2 = document.querySelector(".password-confirm");
    let button = document.querySelector("#btnregister");
    pass1.addEventListener("change", stateHandle);
    pass2.addEventListener("change", stateHandle);
    function stateHandle(){
        if(document.querySelector(".password").value === document.querySelector(".password-confirm").value){
            button.disabled = false;
        }else{
            button.disabled = true;
        }
    }

    

    function changeDisplay(){
        alert();
        var rrno = getElementById("rrno");
        var items = document.getElementById("rr_items");
        var btn = document.getElementById("btnrrno");
        if(rrno.value <> ""){
            button.style.display = 'block';
            items.style.display = 'block';
        }else{
            button.style.display = 'none';
            items.style.display = 'none';
        }
    }

</script>
</body>

<!-- index.html  Tue, 07 Jan 2020 03:35:33 GMT -->
</html>