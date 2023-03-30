</div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="/assets/backend/js/pages/dashboard.js"></script>
    <script src="/assets/backend/js/feather-icons/feather.min.js"></script>
    <script src="/assets/backend/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/backend/js/app.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="/assets/backend/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/backend/vendors/apexcharts/apexcharts.min.js"></script>

    <script src="/assets/backend/js/vendors.js"></script>

<script src="/assets/backend/js/main.js"></script>



    <script>    
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
