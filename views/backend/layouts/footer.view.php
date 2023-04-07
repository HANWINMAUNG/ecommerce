
           
        </div>
        
    </div>
    <footer>
                <div class="footer clearfix mt-5 text-muted bg-info w-100 px-5 py-3 d-flex justify-content-between" style="position:sticky;
                bottom:0;">
                    <div class="">
                        <p>2023 &copy; H@N</p>
                    </div>
                    <div class="">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">H@N</a></p>
                    </div>
                </div>
            </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/assets/backend/js/pages/dashboard.js"></script>
    <script src="/assets/backend/js/feather-icons/feather.min.js"></script>
    <script src="/assets/backend/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/backend/js/app.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="/assets/backend/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/backend/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/backend/js/vendors.js"></script>

<script src="/assets/backend/js/main.js"></script>



    <script>  
   // Swal.fire('Any fool can use a computer')  
    // $(document).ready(function() {
    //     $('#data_table').DataTable();
    // });

    let table = new DataTable('#data_table')
    setTimeout(() =>{

$('#error_message').fadeOut(); 



$('#success_message').fadeOut(); 

},5000);

    </script>
</body>
</html>
<?php

if(isset($_SESSION['errors'])){
    unset($_SESSION['errors']);
 }

if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
?>
