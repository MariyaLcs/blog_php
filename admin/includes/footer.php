  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- WYSIWYG -->
    <script src="https://tinymce.cachefly.net/4.1/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="js/scripts.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Views',     <?php echo $session->count(); ?>],
          ['Photos',      <?php echo $session->count(); ?>],
          ['Users',  <?php echo $session->count(); ?>],
          ['Comments', <?php echo $session->count(); ?>],
          
        ]);

        var options = {
          legend: 'none',
          pieSliceText: 'label'
          title: 'My Daily Activities',
          backgroundColor: 'transparent';
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</body>

</html>
