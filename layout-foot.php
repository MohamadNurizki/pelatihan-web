    
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Alert auto close -->
    <script>
        window.setTimeout(function() {
            $(".alertnotif").fadeTo(300, 0).slideUp(300, function(){
                $(this).remove(); 
            });
        }, 3000);
    </script>

</body>

</html>