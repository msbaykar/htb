<script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="js/custom.js" charset="utf-8"></script>

<script type="text/javascript">

var $rows = $('#productsMenu a');
$('#search').keyup(function() {
  var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

  $rows.show().filter(function() {
      var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
      return !~text.indexOf(val);
  }).hide();
});

</script>
<?php
wp_footer();
 ?>
</body>
</html>
